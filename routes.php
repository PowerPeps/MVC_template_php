<?php

// Define routes
$router->addRoute('GET', '/', 'UserController@dashboard');
$router->addRoute('GET', '/login', 'AuthController@showLoginForm');
$router->addRoute('POST', '/login', 'AuthController@login');
$router->addRoute('GET', '/logout', 'AuthController@logout');
$router->addRoute('GET', '/admin', 'UserController@admin');

