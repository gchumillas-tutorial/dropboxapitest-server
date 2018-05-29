<?php
/**
 * Database.
 */
define("DB_NAME", "<database name>");
define("DB_USER", "<user name>");
define("DB_PASS", "<user password>");
define("DB_HOST", "localhost");


/**
 * Dropbox credentials.
 */
define("DROPBOX_APP_KEY", "<application key>");
define("DROPBOX_APP_SECRET", "<application secret>");
define("DROPBOX_CLIENT_URI", "http://localhost:4200");
define("DROPBOX_REDIRECT_URI", rtrim(DROPBOX_CLIENT_URI, "/") . "/auth-login");

/**
 * Do not touch the code below !!!
 */
session_start();
header("Access-Control-Allow-Origin: " . DROPBOX_CLIENT_URI);
