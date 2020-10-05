<?php
class TopicModel extends Database
{
    public function Get_List_Topics()
    {
        $sql="SELECT * FROM `tbl_topics`";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    public function Get_Topic_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_topics` WHERE `id`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$id]);
        $result=$stmt->fetch();
        return $result;
    }
    public function Add_Topic($title,$icon)
    {
        $sql="INSERT INTO `tbl_topics`(`title`,`icon`) VALUES(?,?)";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$title,$icon]);

    }
    public function Update_Topic($id,$title,$icon)
    {
        $sql="UPDATE `tbl_topics` SET `title`=?,`icon`=? WHERE `id`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$title,$icon,$id]);

    }
    public function Delete_Topic($id)
    {
        $sql="DELETE FROM `tbl_topics` WHERE `id`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$id]);

    }
}