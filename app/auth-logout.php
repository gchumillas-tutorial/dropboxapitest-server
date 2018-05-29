<?php
require_once "../vendor/autoload.php";
require_once "../config.php";
use views\AuthLogoutView;

$v = new AuthLogoutView();
$v->printDocument();
