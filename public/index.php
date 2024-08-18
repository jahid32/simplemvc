<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ ."/../vendor/autoload.php";

$routes = require_once __DIR__ ."/../routes/web.php";


$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('?', $request)[0];


 [$controller, $method] = $routes[$request] ?? [null, null];

 if ($controller && $method) {
     $controller = new $controller();
     $controller->$method();
 }else {
    throw new Exception("404 Not Found", 1);

 }
