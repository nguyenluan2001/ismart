<?php
class TableModel extends Database
{
    public function Get_List_TypeMission($user_id)
    {
        $sql="SELECT * FROM `tbl_table` WHERE `user_id`='$user_id' ORDER BY `id` DESC";
        $result=mysqli_query($this->conn,$sql);
        $temp=[];
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Add_Table($table_name,$user_id)
    {
        $sql="INSERT INTO `tbl_table`(`title`, `user_id`) VALUES ('$table_name','$user_id')";
        mysqli_query($this->conn,$sql);
       
    }
    public function Get_Table_By_Id($id,$user_id)
    {
        $sql="SELECT * FROM `tbl_table` WHERE `id`='$id' AND `user_id`='$user_id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Delete_Table($id,$user_id)
    {
        $sql="DELETE FROM `tbl_table` WHERE `id`='$id' AND `user_id`='$user_id' ";
        mysqli_query($this->conn,$sql);

    }
}


?>