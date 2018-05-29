<?php
require_once "../vendor/autoload.php";
require_once "../config.php";
use views\AuthLoggedView;

$v = new AuthLoggedView();
$v->printDocument();
