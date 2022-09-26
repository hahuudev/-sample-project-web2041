<?php
define('_DIR_ROOT', __DIR__);

//Xử lý http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}


$dirRoot = str_replace('\\', '/', _DIR_ROOT);
$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$folder = str_replace(strtolower($documentRoot), '', strtolower($dirRoot));

define('DOMAIN', $web_root . $folder);
$connect = new PDO(
    'mysql:host=127.0.0.1; dbname=assignment_2',
    'root',
    ''
);

// require_once 'core/ConnectDb.php';
require_once 'src/App.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';
