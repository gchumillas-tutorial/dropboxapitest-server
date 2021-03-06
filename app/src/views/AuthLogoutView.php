<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthLogoutController;

class AuthLogoutView extends JsonView
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthLogoutController());
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    public function getDocument()
    {
        return $this->controller->isLogged;
    }
}
