<?php
namespace Loc\Views;

use \Loc\Models\BookModel;

class BookDescView {
	private $model;
	private $bookDesc;
	private $bookName;

	public function __construct(BookModel $model)
	{
		$this->model = $model;
		$this->bookName = $_GET['bookCombo'];
		$this->bookDesc = $model->getBookDescByName($this->bookName);
	}

	public function output()
	{
		$html = '<h3>' . $this->bookName . '</h3>';
		$html .= '<p>' . $this->bookDesc . '</p>';
		return $html;
	}
}