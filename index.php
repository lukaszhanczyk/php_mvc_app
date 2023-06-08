<?php

use src\Router;

require_once 'vendor/autoload.php';

$router = new Router();

$router->updateDatabase();
$router->handleUri();