<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthLoggedController;

class AuthLoggedView extends JsonView
{
    public function __construct()
    {
        parent::__construct(new AuthLoggedController());
    }

    public function getDocument()
    {
        return $this->controller->isLogged;
    }
}
