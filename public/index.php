<?php
session_start();
require '../vendor/autoload.php';
require '../src/routes.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router->run( $router->routes );