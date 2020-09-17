<?php
class Database
{
    protected $conn;
    protected $server="localhost";
    protected $username="root";
    protected $password="";
    protected $dbname="todolist";
    public function __construct()
    {
        $this->conn=mysqli_connect($this->server,$this->username,$this->password,$this->dbname);
    }
}


?>