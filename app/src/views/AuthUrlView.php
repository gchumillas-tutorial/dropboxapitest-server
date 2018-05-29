<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthUrlController;

class AuthUrlView extends JsonView
{
    public function __construct()
    {
        parent::__construct(new AuthUrlController());
    }

    public function getDocument()
    {
        return $this->controller->authUrl;
    }
}
