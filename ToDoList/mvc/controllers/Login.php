<?php
class Login extends Controller
{
    public function Login()
    {
        if(!isset($_POST['btn_login']))
        {
            unset($_SESSION['is_register']);
            $this->view('LoginView',[]);

        }
        else
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $temp=$this->model('UserModel');
            if(!empty($temp->Check_User($username,$password)))
            {
                $_SESSION['USER']=array();
                $_SESSION['USER']=$temp->Check_User($username,$password);
                header('location:?controller=Home&action=Index');
            }
            else
            {
                $this->view('LoginView',[
                    'error'=>'Tài khoản không tồn tại'
                ]);
            }
        }
    }
}


?>