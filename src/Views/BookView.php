<?php
namespace Loc\Views;

use \Loc\Models\BookModel;

class BookView {

	private $model;
	private $bookList;

	public function __construct(BookModel $model)
	{
		$this->model = $model;
		$this->bookList = $this->model->getBookList();
	}

	public function output()
	{
		$html = '<form method="get">';
		$html .= '<input type="hidden" name="route" value="bookdesc">';
		$html .= '<select name="bookCombo">';
		foreach ($this->bookList as $bookName)
		{
			$html .= '<option value="' . $bookName . '">' . $bookName . '</option>';
		}
		$html .= '</select><input type="submit" value="Submit"></form>';

		return $html;
	}
}