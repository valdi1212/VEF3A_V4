<?php
namespace Loc\Models;

class BookModel
{
    public $books;

    public function __construct()
    {
        $this->books = [
            ['name' => 'Game of Thrones', 'description' => 'Bók', 'author' => 'George R.R. Martin', 'yearPublished' => 2012, 'publisher' => 'Ugla'],
            ['name' => 'A Clash of Kings', 'description' => 'Önnur bók.', 'author' => 'George R.R. Martin', 'yearPublished' => 2013, 'publisher' => 'Ugla']
        ];
    }

    public function getBookList()
    {
        $list = [];
        foreach($this->books as $book) {
            array_push($list, $book['name']);
        }

        return $list;
    }

    public function getBookDescByName($name)
    {
        $desc = '';
        foreach($this->books as $book) {
            if ($book['name'] == $name) {
                $desc = $book['description'];
            }
        }

        return $desc;
    }
}