<?php
use core\Router;
use src\controllers\HomeController;

$router = new Router();

$router->get('/', 'HomeController@index');

//página que vai nos mostrar o formulário
$router->get('/novo','UsuariosController@add');
//como é uma rota post pode colocar o mesmo nome que uma get
$router->post('/novo','UsuariosController@addAction');