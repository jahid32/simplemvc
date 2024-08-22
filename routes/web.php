<?php
use App\Controllers\UserController;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('user', new Route('/user', [
    '_controller' => 'UserController::index',
]));

$routes->add('user_profile', new Route('/user/profile', [
    '_controller' => 'UserController::edit',
]));

// return [
//   "/user" => [UserController::class, "index"],
//   "/user/profile" => [UserController::class, "edit"],
// ];
