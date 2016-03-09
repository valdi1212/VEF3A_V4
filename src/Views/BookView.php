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
		$html .= '<select name="bookCombo">';
		foreach ($this->bookList as $bookName)
		{
			$html .= '<option value="' . $bookName . '">' . $bookName . '</option>';
		}
		$html .= '</select>';
		$html .= '<input type="submit" value="Submit"></form>';

		if (isset($_GET['bookCombo']))
		{
			$desc = $this->model->getBookDescByName($_GET['bookCombo']);

			$html .= '<br><p>' . $desc . '</p>';
		}

		return $html;
	}
}