<?php
require 'baseModel.php';
class BooksModel extends BaseModel
{
    function findAll(){
        $statement = $this->db->query('SELECT * FROM books');
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    function findByTitle($title){
        $statement = $this->db->prepare('SELECT * FROM `books` WHERE `title` LIKE :title');
        
        $statement->bindValue(':title', '%'.$title.'%');
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
}

?>