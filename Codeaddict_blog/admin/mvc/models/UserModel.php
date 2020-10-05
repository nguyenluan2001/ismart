<?php
class UserModel extends Database
{
    public function Check_User($username,$password)
    {
        $sql="SELECT * FROM `tbl_users` WHERE `username`=? AND `password`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$username,$password]);
        return $stmt->fetch();


    }
    public function Get_List_Users()
    {
        $username=$_SESSION['user']['username'];
        $sql="SELECT * FROM `login` WHERE  `username`!='$username'";
        $stmt=$this->conn->query($sql);
        return $result=$stmt->fetchAll();
    }
}


?>