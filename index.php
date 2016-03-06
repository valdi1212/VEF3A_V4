<?php

include 'Models/BookModel.php';
include "Views/BookView.php";
include "Controllers/BookController.php";

$model = new BookModel();
$controller = new BookController($model);
$view = new BookView($model);
echo $view->output();