<?php
namespace views;
use mimbre\http\json\JsonView;
use controllers\AuthLoginController;

class AuthLoginView extends JsonView
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthLoginController());
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    public function getDocument()
    {
        return null;
    }
}
