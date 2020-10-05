<?php
class TopicModel extends Database
{
    public function Get_List_Topic()
    {
        $sql="SELECT * FROM `tbl_topics`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }
}