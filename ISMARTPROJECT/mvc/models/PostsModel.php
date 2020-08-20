<?php
class PostsModel extends Database
{
    public function Get_Post($id)
    {
        $sql="SELECT * FROM `tbl_post` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
}
?>