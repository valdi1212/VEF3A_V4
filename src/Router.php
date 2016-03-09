<?php
namespace Loc;

class Router {

	private $table = array();

	public function __construct()
	{
		$this->table['books'] = new Route('\Loc\Models\BookModel', '\Loc\Views\BookView', '\Loc\Controllers\BookController');
	}

	public function getRoute($route)
	{
		$route = strtolower($route);

		return $this->table[$route];
	}
}