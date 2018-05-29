<?php
require_once "../vendor/autoload.php";
require_once "../config.php";
use views\AuthLoginView;

$v = new AuthLoginView();
$v->printDocument();
