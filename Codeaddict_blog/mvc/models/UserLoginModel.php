<?php
class UserLoginModel extends Database
{
   
    public function Get_List_Users_Login()
    {
        $sql="SELECT * FROM `tbl_user_login` ";
        $stmt=$this->connect()->query($sql);
        return $result=$stmt->fetchAll();
    }
}


?>