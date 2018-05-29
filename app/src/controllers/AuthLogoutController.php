<?php
namespace controllers;
use mimbre\http\data\HttpCookie;
use mimbre\http\json\JsonController;

/**
 * This controllers removes the user from the system.
 */
class AuthLogoutController extends JsonController
{
    private $_db;
    public $isLogged;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->onPost([$this, "post"]);
    }

    /**
     * POST request handler.
     *
     * @return void
     */
    public function post()
    {
        HttpCookie::del("uid");
    }
}
