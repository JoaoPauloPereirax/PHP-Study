<?php
use core\Router;
use src\controllers\HomeController;
use src\controllers\UsuariosController;

$router = new Router();

$router->get('/', 'HomeController@index');

//página que vai nos mostrar o formulário
$router->get('/novo','UsuariosController@add');
//como é uma rota post pode colocar o mesmo nome que uma get
$router->post('/novo','UsuariosController@addAction');
//rota para o botão editar
$router->get('/usuario{id}/edit','UsuariosController@edit');
//rota para o botão excluir
$router->get('/usuario{id}/del','UsuariosController@del');