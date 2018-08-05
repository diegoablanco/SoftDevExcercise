<?php
require 'baseModel.php';
class BooksModel extends BaseModel
{
    function findAll(){
        $statement = $this->db->query("SELECT * FROM books");
        $row = $statement->fetchAll(\PDO::FETCH_OBJ);
        var_dump($row);
    }
}

?>