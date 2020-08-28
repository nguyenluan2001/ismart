<?php
class PagesModel extends Database
{
    public function Get_Page($id)
    {
        $sql="SELECT * FROM `tbl_pages` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
}
?>