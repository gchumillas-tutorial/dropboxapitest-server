<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthLoggedController;

class AuthLoggedView extends JsonView
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthLoggedController());
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
