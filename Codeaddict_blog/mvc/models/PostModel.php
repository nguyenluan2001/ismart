<?php

class PostModel extends Database
{
    
    public function Get_List_Posts()
    {
        $sql = "SELECT * FROM `tbl_posts`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function Get_Post_By_Id($id)
    {
        $sql = "SELECT * FROM `tbl_posts` WHERE `id`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function Update_View($id, $newview)
    {
        $sql = "UPDATE `tbl_posts` SET `view`=? WHERE `id`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$newview, $id]);
    }
    public function Get_Popular_Posts()
    {
        $sql = "SELECT * FROM `tbl_posts` ORDER BY `created_at` DESC LIMIT 0,3";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function Get_List_Posts_By_Topic_Id($id)
    {
        $sql="SELECT * FROM `tbl_posts` WHERE `topic_id`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }
}
