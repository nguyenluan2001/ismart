<?php
class Login extends Controller
{
    public function LoginAction()
    {
        if(!isset($_POST['btn_login']))
        {
            $this->view('LoginView');

        }
        else
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $temp=$this->model('AdminModel');          
            if( $temp->Check_Admin($username,$password))
            {
                $_SESSION['is_login']=true;
                $_SESSION['admin']=$temp->Get_Admin($username,$password);
                header("location:?controller=Home&action=Index");
            }
            else 
            {
                $this->view('LoginView',[
                    'error'=>"Thông tin đăng nhập không hợp lệ"
                ]);
            }
        }
    }
}


?>