<?php
namespace Loc\Controllers;

//include __DIR__ . "/../Router.php";
use \Loc\Router;

class FrontController {
    private $controller;
    private $view;

    public function __construct(Router $router, $routeName)
    {
        $route = $router->getRoute($routeName);

        $modelName = $route->model;
        $controllerName = $route->controller;
        $viewName = $route->view;

        $model = new $modelName;
        $this->controller = new $controllerName($model);
        $this->view = new $viewName($model);
    }

    public function output()
    {
        return '<div>' . $this->view->output() . '</div>';
    }
}