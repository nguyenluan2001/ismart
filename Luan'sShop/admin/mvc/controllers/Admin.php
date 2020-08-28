<?php
class Admin extends Controller
{
    public function Logout()
    {
        unset($_SESSION['is_login']);
        header("location:?controller=Login&action=LoginAction");
    }
    public function Show_Info()
    {
        $this->view('AdminInfo',[
            'info'=>$_SESSION['admin']
        ]);
        
    }
    public function Update_Info()
    {
        if(isset($_POST['btn_update']))
        {
            $fullname=$_POST['fullname'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $temp=$this->model('AdminModel');
            $temp->Update_Info($fullname,$username,$email,$phone,$address);
            $_SESSION['admin']=$temp->Get_Admin($username,$_SESSION['admin']['password']);
            header('location:?controller=Admin&action=Show_Info');
        }
    }
}


?>