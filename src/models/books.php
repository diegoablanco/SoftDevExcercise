<?php
require 'baseModel.php';
class BooksModel extends BaseModel
{
    function findAll(){
        $statement = $this->db->query("SELECT * FROM books");
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
}

?>