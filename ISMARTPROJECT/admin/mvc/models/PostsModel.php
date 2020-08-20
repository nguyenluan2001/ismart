<?php
class PostsModel extends Database
{
    public function AddPost($data)
    {
        $title=$data['title'];
        $content=$data['content'];
        $created_at=$data['created_at'];
        $sql="INSERT INTO `tbl_post`( `title`, `content`, `created_at`) VALUES ('{$title}','{$content}','{$created_at}')";
        return mysqli_query($this->conn,$sql);
    }
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
    public function Update_Post($data)
    {
        $title=$data['title'];
        $content=$data['content'];
        $created_at=$data['created_at'];
        $id=$data['id'];
       $sql="UPDATE `tbl_post` SET `title`='$title',`content`='$content',`created_at`='$created_at' WHERE `id`='$id'" ;
       return mysqli_query($this->conn,$sql);
    }
}


?>