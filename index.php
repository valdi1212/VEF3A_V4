<?php

require __DIR__ . '/vendor/autoload.php';

use Loc\Controllers\FrontController;
use Loc\Router;

$frontController = new FrontController(new Router, $_GET['route']);
echo $frontController->output();