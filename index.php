<?php

require __DIR__ . '/vendor/autoload.php';

use Loc\Controllers\FrontController;
use Loc\Router;

$frontController = new FrontController(new Router, 'books'); //TODO: route hardcoded at the moment, kinda defeats the purpose
echo $frontController->output();