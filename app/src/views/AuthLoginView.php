<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthLoginController;

class AuthLoginView extends JsonView
{
    public function __construct()
    {
        parent::__construct(new AuthLoginController());
    }

    public function getDocument()
    {
        return null;
    }
}
