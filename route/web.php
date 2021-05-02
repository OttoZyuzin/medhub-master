<?php

/*
--------------------------------------------------------------------------
Маршрутизация
Здесь описаны роуты и контроллеры с методами которые они обрабатывают
--------------------------------------------------------------------------
*/

use Core\Router;

$router = new Router();

/*
--------------------------------------------------------------------------
Входная точка и статичные страницы
--------------------------------------------------------------------------
*/
$router->add('', ['controller' => 'AccountController', 'action' => 'show']);

/*
--------------------------------------------------------------------------
Работа с авторизацией/регистрацией
--------------------------------------------------------------------------
*/
$router->add('home', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('logout', ['controller' => 'UserController', 'action' => 'logout']);

/*
--------------------------------------------------------------------------
Работа с аккаунтом
--------------------------------------------------------------------------
*/
$router->add('account?{id}', ['controller' => 'AccountController', 'action' => 'getById']);
$router->add('account/delete?{id}', ['controller' => 'AccountController', 'action' => 'deleteById']);
$router->add('account/edit?{id}', ['controller' => 'AccountController', 'action' => 'edit']);
$router->add('account/update', ['controller' => 'AccountController', 'action' => 'update']);

/*
--------------------------------------------------------------------------
Работа с уровнем доступа
--------------------------------------------------------------------------
*/
$router->add('accesses', ['controller' => 'AccessController', 'action' => 'index']);
$router->add('access/add', ['controller' => 'AccessController', 'action' => 'show']);
$router->add('access/store', ['controller' => 'AccessController', 'action' => 'store']);
$router->add('access/edit?{id}', ['controller' => 'AccessController', 'action' => 'edit']);
$router->add('access/update', ['controller' => 'AccessController', 'action' => 'update']);
$router->add('access/warning?{id}', ['controller' => 'AccessController', 'action' => 'warning']);
$router->add('access/delete?{id}', ['controller' => 'AccessController', 'action' => 'delete']);

$router->add('categories', ['controller' => 'CategoryController', 'action' => 'index']);
$router->add('category/add', ['controller' => 'CategoryController', 'action' => 'show']);
$router->add('category/store', ['controller' => 'CategoryController', 'action' => 'store']);
$router->add('category/edit?{id}', ['controller' => 'CategoryController', 'action' => 'edit']);
$router->add('category/update', ['controller' => 'CategoryController', 'action' => 'update']);
$router->add('category/warning?{id}', ['controller' => 'CategoryController', 'action' => 'warning']);
$router->add('category/delete?{id}', ['controller' => 'CategoryController', 'action' => 'delete']);


// линк для примера. Использоваться не будет
// TODO после изучения удалить
$router->add('account/login?{id}', ['controller' => 'UserController', 'action' => 'getSession']);

$router->dispatch($_SERVER['QUERY_STRING']);
