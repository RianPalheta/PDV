<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/signup', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->get('/logout', 'LoginController@logout');