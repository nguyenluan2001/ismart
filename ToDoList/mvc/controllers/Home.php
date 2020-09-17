<?php
class Home extends Controller
{
    public function Index()
    {
           $temp=$this->model("TableModel");
           $user_id=$_SESSION['USER']['id'];
           $list_type_missions=$temp->Get_List_TypeMission($user_id);
            $this->view('HomeView',[
                'pages'=>"TableMission",
                'list_type_missions'=>$list_type_missions,
          
                ]);
      
     
    }
    public function Detail_Type_Mission()
    {
        $temp=$this->model("MissionModel");
        $user_id=$_SESSION['USER']['id'];
        
        $_SESSION['USER']['type_mission_id']=isset($_GET['type_mission_id'])?$_GET['type_mission_id']:$_SESSION['USER']['type_mission_id'];
        $temp_1=$this->model('TableModel');
        $table=$temp_1->Get_Table_By_Id($_SESSION['USER']['type_mission_id'],$user_id);

        $list_missions=$temp->Get_List_Mission($user_id,$_SESSION['USER']['type_mission_id']);
        $list_done_missions=$temp->Get_List_Done_Mission($user_id,$_SESSION['USER']['type_mission_id']);
         $this->view('HomeView',[
             'pages'=>"ToDoListDetail",
             'list_missions'=>$list_missions,
             'list_done_missions'=>$list_done_missions,
             'type_mission_id'=>$_SESSION['USER']['type_mission_id'],
             'table'=>$table
       
             ]);
   
    }
    
}


?>