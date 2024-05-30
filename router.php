<?php
// router.php

// Get the requested path
$request = trim($_SERVER['REQUEST_URI'], '/');

// Map the request to the appropriate file in /src
$routes = [
    '' => 'home.php', // Default page
    'about' => 'about.php',
    'blog' => 'blog.php',
    'contact' => 'contact.php',
];

// Check if the route exists in the array, otherwise use a 404 page
if (array_key_exists($request, $routes)) {
    include 'src/' . $routes[$request];
} else {
    http_response_code(404);
    echo "Page not found.";
}
?>
