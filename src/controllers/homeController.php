<?php
require '../src/models/books.php';
class homeController
{
    function index()
    {
        $books = new BooksModel();
        $books->findAll();
        echo('home controller');
    }
    function notFound()
    {
        echo('Not found');
    }
}
?>