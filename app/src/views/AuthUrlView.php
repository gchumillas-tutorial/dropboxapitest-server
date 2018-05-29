<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthUrlController;

class AuthUrlView extends JsonView
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthUrlController());
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    public function getDocument()
    {
        return $this->controller->authUrl;
    }
}
