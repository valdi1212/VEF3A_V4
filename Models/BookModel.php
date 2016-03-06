<?php

class BookModel
{
    public $books;

    public function __construct()
    {
        $this->books = [
            ['name' => 'Game of Thrones', 'description' => 'Bók', 'author' => 'George R.R. Martin'],
            ['name' => 'A Clash of Kings', 'description' => 'Önnur bók.', 'author' => 'George R.R. Martin']
        ];
    }
}