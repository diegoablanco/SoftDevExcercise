<?php
require 'baseController.php';
require '../src/models/books.php';
class homeController extends BaseController
{
    function index()
    {
        $books = new BooksModel();
        $this->model = $books->findAll();
        $this->render('index');
    }
    function filter()
    {
        $books = new BooksModel();
        $this->model = $books->findByTitle($_POST['search']);
        $this->render('index');
    }
    function notFound()
    {
        echo('Not found');
    }
}
?>