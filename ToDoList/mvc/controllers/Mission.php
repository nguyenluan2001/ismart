<?php
class Mission extends Controller
{
    public function Add_Mission()
    {
        if (isset($_POST['btn_add_mission'])) {
            if(!empty($_POST['mission']))
            {
                unset($_SESSION['error_add_mission']);
                $mission = $_POST['mission'];
                $type_mission_id=$_SESSION['USER']['type_mission_id'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time_temp = time();
                $created_at = date('d-m-yy H:i:s', $time_temp);
                $user_id = $_SESSION['USER']['id'];
                $temp = $this->model('MissionModel');
                $temp->Add_Mission($mission,$type_mission_id, $created_at, $user_id);
                header("location:?controller=Home&action=Detail_Type_Mission&id={$type_mission_id}");
            }
            else
            {
                $type_mission_id=$_SESSION['USER']['type_mission_id'];
                $_SESSION['error_add_mission']="This field must be filled !!!";
                header("location:?controller=Home&action=Detail_Type_Mission&id={$type_mission_id}");

            }
            
        }
    }
    public function Update_Mission()
    {
        if (isset($_POST['btn_update_mission'])) {
            $id = $_GET['id'];
            $type_mission_id=$_SESSION['USER']['type_mission_id'];
            $user_id = $_SESSION['USER']['id'];
            $update_text = $_POST['update_text'];
            $temp = $this->model('MissionModel');
            $temp->Update_Mission($id, $user_id, $type_mission_id, $update_text);
            header("location:?controller=Home&action=Detail_Type_Mission&id={ $type_mission_id}");
        }
    }
    public function Delete_Mission()
    {
        $id = $_GET['id'];
        $type_mission_id=$_SESSION['USER']['type_mission_id'];
        $user_id = $_SESSION['USER']['id'];
        $temp = $this->model('MissionModel');
        $temp->Delete_Mission($id, $user_id, $type_mission_id);
        header("location:?controller=Home&action=Detail_Type_Mission&id={ $type_mission_id}");
    }
    public function Done_Mission()
    {
        $id = $_GET['id'];
        $user_id = $_SESSION['USER']['id'];
        $type_mission_id=$_SESSION['USER']['type_mission_id'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time_temp = time();
        $done_at = date('d-m-yy H:i:s', $time_temp);
        $temp = $this->model('MissionModel');
        $mission=$temp->Get_Mission($id,$user_id);
        $temp->Delete_Mission($id, $user_id, $type_mission_id);
        $temp->Add_Done_Mission($mission['title'],$done_at, $user_id, $type_mission_id);
        header("location:?controller=Home&action=Detail_Type_Mission&id={ $type_mission_id}");
    }
}
