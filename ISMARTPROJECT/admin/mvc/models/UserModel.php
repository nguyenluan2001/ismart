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
    public function Get_User($username,$password)
    {
        $sql="SELECT * FROM `tbl_users` WHERE `username`='$username' AND `password`='$password'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Get_User_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_users` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Get_User_By_Pass($pass)
    {
        $sql="SELECT * FROM `tbl_users` WHERE `password`='$pass' AND `id`='{$_SESSION["admin"]["id"]}'";
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
    public function UpdateUser($info)
    {
        $display_name=$info['display_name'];
        $email=$info['email'];
        $phone_number=$info['phone_number'];
        $address=$info['address'];
        $sql="UPDATE `tbl_users` SET `fullname`='{$display_name}',`email`='{$email}',`address`='{$address}',`phone_number`='{$phone_number}' WHERE `id`='". $_SESSION["admin"]["id"] ."'";
      mysqli_query($this->conn,$sql);
      $_SESSION['admin']=$this->Get_User_By_Id($_SESSION["admin"]["id"]);
        

    }
    public function UpdatePass($new_pass,$old_pass)
    {
        $sql="UPDATE `tbl_users` SET `password`='$new_pass' WHERE `password`='$old_pass'";
        return mysqli_query($this->conn,$sql);
    }

}

?>