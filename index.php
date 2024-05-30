<?php

// $path = trim($_SERVER['REQUEST_URI'], '/');
$path = $_SERVER['REQUEST_URI'];
echo $path;

$routes = [
    '/' => 'src/home.php', // Default page
    '/about' => 'src/about.php',
    '/blog' => 'src/blog.php',
    '/contact' => 'src/contact.php',
];

if (array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    require 'src/404.php';
}
