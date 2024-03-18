<?php
require_once "./src/core/Database.php";

class CategoryModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getCate()
    {
        $sql = "SELECT * FROM category";
        $result = $this->db->select($sql);
        return $result;
    }

    function listSongId($id){
        $sql = "SELECT * FROM `categorysong` where CategoryID = $id";
        $result = $this->db->select($sql);
        return $result;
    }
}
