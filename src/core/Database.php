<?php

require_once ('./src/config/config.php');

class Database {
    private $Host;
    private $User;
    private $Pass;
    private $Name;

    public $conn;

    public function __construct() {
        $this->Connection();
    }

    public function Connection() {
        $this->Host = DB_HOST;
        $this->User = DB_USER;
        $this->Pass = DB_PASS;
        $this->Name = DB_NAME;

        $this->conn = new mysqli($this->Host, $this->User, $this->Pass, $this->Name);

        return $this->conn;
    }

    public function select($sql) {
        $data = null;
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function execute($sql) {
        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}