<?php

class BookView
{
	private $model;

	public function __construct(BookModel $model)
	{
		$this->model = $model;
	}

	public function output()
	{
		return '<h1>TEST</h1>';
	}
}