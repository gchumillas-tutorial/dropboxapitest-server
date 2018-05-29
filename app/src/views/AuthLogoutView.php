<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthLogoutController;

class AuthLogoutView extends JsonView
{
    public function __construct()
    {
        parent::__construct(new AuthLogoutController());
    }

    public function getDocument()
    {
        return $this->controller->isLogged;
    }
}
