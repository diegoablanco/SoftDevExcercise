<?php
class BaseModel
{
    protected $db;
    public function __construct()
    {
        $this->db = require('../src/database.php');
    }
}
?>