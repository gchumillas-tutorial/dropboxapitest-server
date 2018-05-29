<?php
namespace controllers;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use mimbre\http\json\JsonController;

class AuthUrlController extends JsonController
{
    public $authUrl;

    public function __construct()
    {
        $this->onOpen([$this, "open"]);
    }

    public function open()
    {
        $dpApp = new DropboxApp(DROPBOX_APP_KEY, DROPBOX_APP_SECRET);
        $dp = new Dropbox($dpApp);
        $dpHelper = $dp->getAuthHelper();
        $this->authUrl = $dpHelper->getAuthUrl(DROPBOX_REDIRECT_URI);
    }
}
