<?php
session_start();
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "darknesslight123");
define("DB_NAME", "kw_pai");

include './autoload.php';

const TEMPLATE_DIR = __DIR__ . DIRECTORY_SEPARATOR .'view' . DIRECTORY_SEPARATOR;

$currentRoute = $_SERVER['REQUEST_URI'];
$route = Route::existRoute($currentRoute);

if(!$route) {
    header("HTTP/1.0 404 Not Found");
    echo "Nie ma takiej strony.\n";
    die();
}
$nameController = $route['controller'] . "Controller";
$controller = new $nameController();
echo $controller->{$route['action']}();

