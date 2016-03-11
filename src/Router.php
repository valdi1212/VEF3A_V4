<?php
namespace Loc;

class Router {

	private $table = array();

	public function __construct()
	{
		$this->table['booklist'] = new Route('\Loc\Models\BookModel', '\Loc\Views\BookView', '\Loc\Controllers\BookController');//Todo: rename the view to BookListView
		$this->table['bookdesc'] = new Route('\Loc\Models\BookModel', '\Loc\Views\BookDescView', '\Loc\Controllers\BookController');// should the controller be the same?
	}

	public function getRoute($route)
	{
		$route = strtolower($route);

		return $this->table[$route];
	}
}