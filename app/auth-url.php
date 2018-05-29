<?php
require_once "../vendor/autoload.php";
require_once "../config.php";
use views\AuthUrlView;

$v = new AuthUrlView();
$v->printDocument();
