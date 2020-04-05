<?php
class Database {
    private $server ="localhost";
    private $username = 'root';
    private $password = 'shawan96';
    private $dbName = 'shoppy';
    public $conn;
    public function getConnection(){
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbName);
        }catch (mysqli_sql_exception $exception){
            echo "Can`t connect to the Database".$exception->getMessage();
        }
        return $this->conn;
    }

}