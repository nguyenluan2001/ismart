<?php
class PagesModel extends Database
{
    public function Add_Page($page_title,$slug,$page_content)
    {
        $sql="INSERT INTO `tbl_pages`(`page_title`, `slug` ,`page_content`) VALUES ('$page_title','$slug','$page_content')";
        mysqli_query($this->conn,$sql);
    }
    public function Get_List_Pages()
    {
        $sql="SELECT * FROM `tbl_pages`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Get_Page_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_pages` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Update_Page($id,$page_title,$slug,$page_content)
    {
        $sql="UPDATE `tbl_pages` SET `page_title`='$page_title',`page_content`='$page_content',`slug`='$slug' WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Delete_Page($id)
    {
        $sql="DELETE FROM `tbl_pages` WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
}

?>