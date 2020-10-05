<?php
class PostModel extends Database
{
    public function Get_List_Posts()
    {
        $sql="SELECT `p`.*,`t`.`title` as `topic_title` FROM `tbl_posts` `p` JOIN `tbl_topics` `t` ON `p`.`topic_id`=`t`.`id`";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    public function Add_Post($title,$desc,$topic_id,$slug,$content,$img)
    {
        $sql="INSERT INTO `tbl_posts`(`user_id`, `topic_id`, `title`, `slug`, `desc`, `content`,`img`) VALUES (?,?,?,?,?,?,?)";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([1,$topic_id,$title,$slug,$desc,$content,$img]);

    }
    public function Update_Post($id,$title,$desc,$topic_id,$slug,$content,$img)
    {
        $sql="UPDATE `tbl_posts` SET `topic_id`=?,`title`=?,`slug`=?,`desc`=?,`content`=?,`img`=? WHERE `id`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$topic_id,$title,$slug,$desc,$content,$img,$id]);
    }
    public function Delete_Post($id)
    {
        $sql="DELETE FROM `tbl_posts` WHERE `id`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$id]);

    }
    public function Get_Post_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_posts` WHERE `id`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$id]);
        $result=$stmt->fetch();
        return $result;

    }

}