<?php
// Load configuration
require_once 'config/config.php';
require_once 'config/const.php';

// Autoload classes
spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Start session
session_start();

// Load routes
require_once 'routes.php';

