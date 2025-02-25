<?php
require_once 'bootstrap.php';

// Handle the request
$request = $_SERVER['REQUEST_URI'];
$router = new Router();
$router->dispatch($request);

