<?php
class UserModel extends Database
{
    public function checkLogin($username,$password)
    {
        $sql="SELECT * FROM `tbl_users` WHERE `username`='$username' AND `password`='$password'";
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
}

?>