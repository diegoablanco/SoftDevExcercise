<?php
require 'baseModel.php';
class BooksModel extends BaseModel
{
    function findAll(){
        $statement = $this->db->query("SELECT * FROM books");
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
    }
}

?>