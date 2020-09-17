<?php
class UserModel extends Database
{
    public function Check_User($username,$password)
    {
        $sql="SELECT * FROM `tbl_user` WHERE `username`='$username' AND `password`='$password'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
        
    }
    public function Check_Exist_User($username,$password)
    {
        $sql="SELECT * FROM `tbl_user` WHERE `username`='$username' OR `password`='$password'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
        
    }
    public function Add_User($fullname,$username,$password)
    {
        $sql="INSERT INTO `tbl_user`(`fullname`, `username`, `password`) VALUES ('$fullname','$username','$password')";
        mysqli_query($this->conn,$sql);
    }
   
}


?>