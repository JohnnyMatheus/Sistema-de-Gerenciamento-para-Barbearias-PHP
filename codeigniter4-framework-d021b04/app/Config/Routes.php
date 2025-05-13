<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('clientes', 'Clientes::index');

// Adicione os outros controladores aqui...
// Rotas RESTful para os controladores do projeto
$routes->resource('clientes');
$routes->resource('fornecedores');
$routes->resource('funcionarios');
$routes->resource('servicos');
$routes->resource('produtos');
$routes->resource('agendamentos');
$routes->resource('pagamentos');
$routes->resource('historico-servicos');

