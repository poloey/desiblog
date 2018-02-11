<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
$page = '';
session_start();

$path = parse_url(trim($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH);
$routes = [
  "" => 'views/front_end/home.php',
  "post" => 'views/front_end/post.php',
  "contact" => 'views/front_end/contact.php',
  "about" => 'views/front_end/about.php',
  "author" => 'views/front_end/author.php',
  "category" => 'views/front_end/category.php',
];
if (array_key_exists($path, $routes)) {
  require $routes[$path];
} else {
  require 'views/notfound.php';
}

