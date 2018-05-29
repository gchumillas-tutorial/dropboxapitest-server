<?php
namespace controllers;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use mimbre\http\json\JsonController;

/**
 * This controller provides an authentication URL.
 */
class AuthUrlController extends JsonController
{
    public $authUrl;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->onOpen([$this, "open"]);
    }

    /**
     * OPEN request handler.
     *
     * @return void
     */
    public function open()
    {
        $dpApp = new DropboxApp(DROPBOX_APP_KEY, DROPBOX_APP_SECRET);
        $dp = new Dropbox($dpApp);
        $dpHelper = $dp->getAuthHelper();
        $this->authUrl = $dpHelper->getAuthUrl(DROPBOX_REDIRECT_URI);
    }
}
