<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
$page = '';
session_start();

$path = parse_url(trim($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH);
$routes = [
  "" => 'controllers/home.php',
  "post" => 'views/post.php',
  "contact" => 'controllers/contact.php',
  "about" => 'controllers/about.php',
  "author" => 'views/author.php',
  "category" => 'views/category.php',
];
if (array_key_exists($path, $routes)) {
  require $routes[$path];
} else {
  require 'views/notfound.php';
}

