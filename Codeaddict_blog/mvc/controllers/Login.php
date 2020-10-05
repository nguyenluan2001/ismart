<?php
class Login extends Controller
{
    public function Login()
    {
        $_SESSION['user']=[];
        if(!isset($_POST['btn_login']))
        {
            $this->view('loginView');

        }
        else
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $temp=$this->model('UserModel');
            if(!empty($temp->Check_User($username,$password)))
            {
                $_SESSION['user']=$temp->Check_User($username,$password);
                $_SESSION['is_login']=true;
                header("location:?controller=Home&action=Index");
            }
            else
            {
                echo "no";
            }
        }

    }
}


?>