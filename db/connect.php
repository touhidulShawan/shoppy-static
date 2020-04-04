<?php

class Database
{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "shawan96";
    private $databaseName = "shoppy";
    public $connection;

    public function getConnection()
    {
        $this->connection = null;
        try {
            $this->connection = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);
        } catch (mysqli_sql_exception $exception) {
            echo "Can`t connect with database :( " . $exception->getMessage();
        }
        return $this->connection;
    }
}

?>