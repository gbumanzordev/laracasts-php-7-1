<?php

$old_book = ['The title', 'Joe Johnson'];
[$book, $author] = $old_book;


$books = [
    ['title' => 'The Martian', 'author' => 'Andy Weir'],
    ['title' => 'Harry Potter', 'author' => 'JK Rowling']
];

['title' => $book, 'author' => $author] = $books[0];

foreach ($books as ['title' => $title, 'author' => $author])
{
    var_dump($title, $author);
}