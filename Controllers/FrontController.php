<?php

include '../Router.php';

class FrontController {
    private $controller;
    private $view;

    public function __construct(Router $router, $routeName, $action = null)
    {
        $route = $router->getRoute($routeName);

        $modelName = $route->model;
        $controllerName = $route->controller;
        $viewName = $route->view;

        $model = new $modelName;
        $this->controller = new $controllerName($model);
        $this->view = new $viewName($model);

        if(!empty($action)) $this->controller->{$action}();
    }

    public function output()
    {
        $header = '<h1>Header</h1>';
        return $header . '<div>' . $this->view->output() . '</div>';
    }
}