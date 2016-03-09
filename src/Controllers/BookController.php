<?php
namespace Loc\Controllers;

use \Loc\Models\BookModel;

class BookController
{
	private $model;

	public function __construct(BookModel $model)
	{
		$this->model = $model;
	}
}