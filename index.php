<?php

#echo "<h1>Hi Students! 🌅</h1>";

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

//var_dump($path);

Routing::run($path);
?>