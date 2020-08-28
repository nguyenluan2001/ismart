<?php
class PostsModel extends Database
{
    public function Add_Post($post_title,$slug,$post_content,$created_at,$cat_id,$post_author)
    {
        $sql="INSERT INTO `tbl_post`( `post_title`, `post_content`, `post_author`, `created_at`, `slug`, `cat_id`) VALUES ('$post_title','$post_content','$post_author','$created_at','$slug','$cat_id')";
        mysqli_query($this->conn,$sql);
    }
    public function Update_Post($id,$post_title,$slug,$post_content,$created_at,$cat_id,$post_author)
    {
        $sql="UPDATE `tbl_post` SET `post_title`='$post_title',`post_content`='$post_content',`post_author`='$post_author',`created_at`='$created_at',`slug`='$slug',`cat_id`='$cat_id' WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Get_List_Posts()
    {
        $sql="SELECT `tbl_post`.`id`, `tbl_post`.`post_title`,`tbl_post`.`post_content`,`tbl_post`.`post_author`,`tbl_post`.`created_at`,`tbl_post`.`slug`,`tbl_post`.`cat_id`, `tbl_cat_post`.`cat_title` FROM `tbl_post` JOIN `tbl_cat_post` WHERE `tbl_post`.`cat_id`=`tbl_cat_post`.`id`"
        ;
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
    public function Get_List_Cats()
    {
        $sql="SELECT * FROM `tbl_cat_post`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Get_List_Posts_By_CatId($id)
    {
        $sql="SELECT `tbl_post`.`id`, `tbl_post`.`post_title`,`tbl_post`.`post_content`,`tbl_post`.`post_author`,`tbl_post`.`created_at`,`tbl_post`.`slug`,`tbl_post`.`cat_id`, `tbl_cat_post`.`cat_title` FROM `tbl_post` JOIN `tbl_cat_post` WHERE `tbl_post`.`cat_id`=`tbl_cat_post`.`id` AND `tbl_post`.`cat_id`='$id'
        ";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Delete_Post($id)
    {
        $sql="DELETE FROM `tbl_post` WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
   
}


?>