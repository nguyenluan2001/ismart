<?php
class UserModel extends Database
{
    public function Check_User($username,$password)
    {
        $sql="SELECT * FROM `login` WHERE `username`=? AND `password`=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$username,$password]);
        return $result=$stmt->fetch();


    }
    public function Get_List_Users()
    {
        $username=$_SESSION['user']['username'];
        $sql="SELECT * FROM `login` WHERE  `username`!='$username'";
        $stmt=$this->connect()->query($sql);
        return $result=$stmt->fetchAll();
    }
}


?>