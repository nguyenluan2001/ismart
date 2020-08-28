<?php
class PostsModel extends Database
{
    public function Get_List_Posts()
    {
        $sql="SELECT * FROM `tbl_post`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;

    }
    public function Get_Post_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_post` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
}


?>