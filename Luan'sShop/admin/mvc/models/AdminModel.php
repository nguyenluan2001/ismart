<?php
class AdminModel extends Database
{
    public function Check_Admin($username,$password)
    {
        $sql="SELECT * FROM `tbl_admin` WHERE `username`='$username' AND `password`='$password'";
        $result=mysqli_query($this->conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            return true;

        }
        else
        {
            return false;
        }
    }
    public function Get_Admin($username,$password)
    {
        $sql="SELECT * FROM `tbl_admin` WHERE `username`='$username' AND `password`='$password'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Update_Info($fullname,$username,$email,$phone,$address)
    {
        $sql="UPDATE `tbl_admin` SET `fullname`='$fullname',`username`='$username',`email`='$email',`phone`='$phone',`address`='$address' WHERE `id`=1";
        mysqli_query($this->conn,$sql);
    }
}


?>