<?php
namespace controllers;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use mimbre\db\mysql\MySqlConnection;
use mimbre\http\json\JsonController;
use mimbre\http\data\HttpCookie;
use models\UserModel;

class AuthLoginController extends JsonController
{
    private $_db;

    public function __construct()
    {
        $this->_db = new MySqlConnection(DB_NAME, DB_USER, DB_PASS, DB_HOST);
        $this->onPost([$this, "post"]);
    }

    public function post()
    {
        $state = $this->getParam("state", ["required" => true]);
        $code = $this->getParam("code", ["required" => true]);

        $dpApp = new DropboxApp(DROPBOX_APP_KEY, DROPBOX_APP_SECRET);
        $dp = new Dropbox($dpApp);
        $dpHelper = $dp->getAuthHelper();
        $token = $dpHelper->getAccessToken($code, $state, DROPBOX_REDIRECT_URI);
        $userId = $token->getUid();
        $accessToken = $token->getToken();

        $user = UserModel::searchByAuthUserId($this->_db, $userId);
        if ($user == null) {
            $user = new UserModel($this->_db);
            $user->authUserId = $userId;
            $user->authAccessToken = $accessToken;
            $user->save();
        }

        HttpCookie::set("uid", $userId);
    }
}
