<?php
class Database
{
    protected $conn;
    protected $host="localhost";
    protected $username="root";
    protected $password="";
    protected $dbname="codeaddict_blog";
    public function __construct()
    
    {
        $dns="mysql:host=".$this->host.";dbname=".$this->dbname;
        $this->conn=new PDO($dns,$this->username,$this->password);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
      
    }
}


?>