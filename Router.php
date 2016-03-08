<?php

class Router {
    private $table = array();

    public function __construct() {
        $this->table['books'] = new Route('BookModel', 'BookView', 'BookController');
    }

    public function getRoute($route)
    {
        $route = strtolower($route);
        return $this->table[$route];
    }
}

class Route {
    public $model;
    public $view;
    public $controller;

    public function __construct($model, $view, $controller)
    {
        $this->model = $model;
        $this->view = $view;
        $this->controller = $controller;
    }
}