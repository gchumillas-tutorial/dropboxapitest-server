<?php
namespace controllers;
use mimbre\db\mysql\MySqlConnection;
use mimbre\http\data\HttpCookie;
use mimbre\http\json\JsonController;
use models\UserModel;

class AuthLoggedController extends JsonController
{
    private $_db;
    public $isLogged;

    public function __construct()
    {
        $this->_db = new MySqlConnection(DB_NAME, DB_USER, DB_PASS, DB_HOST);
        $this->onOpen([$this, "open"]);
    }

    public function open()
    {
        $uid = HttpCookie::get("uid");

        $user = UserModel::searchByAuthUserId($this->_db, $uid);
        $this->isLogged = $user != null;
    }
}
