<?php
class Table extends Controller
{
   public function Add_Table()
   {
       if(isset($_POST['btn_add_table']))
       {
           if(!empty($_POST['table_name']))
           {
               unset($_SESSION['error_add_table']);
            $table_name=$_POST['table_name'];
            $user_id=$_SESSION['USER']['id'];
            $temp=$this->model('TableModel');
            $temp->Add_Table($table_name,$user_id);
            header('location:?controller=Home&action=Index');
           }
           else
           {
               $_SESSION['error_add_table']="This field must be filled!!!";
               header('location:?controller=Home&action=Index');

           }
       
       }
       
   }
   public function Delete_Table()
   {
       $id=$_GET['id'];
       $user_id=$_SESSION['USER']['id'];
       $temp=$this->model('TableModel');
       $temp->Delete_Table($id,$user_id);
       header('location:?controller=Home&action=Index');

   }
}


?>