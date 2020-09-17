<?php
class MissionModel extends Database
{
    public function Get_List_Mission($user_id,$type_mission_id)
    {
        $sql="SELECT * FROM `tbl_todo` WHERE `user_id`='$user_id' AND `type_mission_id`='$type_mission_id' ORDER BY `id` ASC";
        $result=mysqli_query($this->conn,$sql);
        $temp=[];
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
        
    }
    public function Get_Mission($id,$user_id)
    {
        $sql="SELECT * FROM `tbl_todo` WHERE `id`='$id' AND `user_id`='$user_id' ";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Add_Mission($mission,$type_mission_id,$created_at,$user_id)
    {
        $sql="INSERT INTO `tbl_todo`( `title`,`type_mission_id`, `user_id`, `created_at`) VALUES ('$mission','$type_mission_id','$user_id','$created_at')";
        mysqli_query($this->conn,$sql);
    }
    public function Update_Mission($id,$user_id, $type_mission_id,$update_text)
    {
        $sql="UPDATE `tbl_todo` SET `title`='$update_text' WHERE `id`='$id' AND `user_id`='$user_id' AND `type_mission_id`=' $type_mission_id'";
        mysqli_query($this->conn,$sql);

    }
    public function Delete_Mission($id,$user_id, $type_mission_id)
    {
        $sql="DELETE FROM `tbl_todo` WHERE `id`='$id' AND `user_id`='$user_id' AND `type_mission_id`=' $type_mission_id' ";
        mysqli_query($this->conn,$sql);

    }
    public function Add_Done_Mission($title,$done_at,$user_id, $type_mission_id)
    {
        $sql="INSERT INTO `tbl_done`(`title`, `done_at`, `user_id`,`type_mission_id`) VALUES ('$title','$done_at','$user_id','$type_mission_id')";
        mysqli_query($this->conn,$sql);

    }
    public function Get_List_Done_Mission($user_id,$type_mission_id)
    {
        $sql="SELECT * FROM `tbl_done` WHERE `user_id`='$user_id' AND `type_mission_id`='$type_mission_id' ORDER BY `id` ASC";
        $result=mysqli_query($this->conn,$sql);
        $temp=[];
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
}


?>