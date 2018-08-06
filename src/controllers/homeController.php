<?php
require 'baseController.php';
require '../src/models/books.php';
class homeController extends BaseController
{
    private function getFormValues(){
        return [
            'search' => isset($_POST['search']) ? $_POST['search'] : ''
        ];
    }
    
    public function __construct()
    {
        $this->form = $this->getFormValues();
    }

    function index()
    {
        $books = new BooksModel();
        $this->model = $books->findAll();
        $this->render('index');
    }
    function filter()
    {
        $books = new BooksModel();
        $this->model = $books->findByTitle($this->form['search']);
        $this->render('index');
    }
    function notFound()
    {
        http_response_code(404);
        echo('Page not found');
    }
}
?>