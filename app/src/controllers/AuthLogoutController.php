<?php
namespace controllers;
use mimbre\http\data\HttpCookie;
use mimbre\http\json\JsonController;

class AuthLogoutController extends JsonController
{
    private $_db;
    public $isLogged;

    public function __construct()
    {
        $this->onPost([$this, "post"]);
    }

    public function post()
    {
        HttpCookie::del("uid");
    }
}
