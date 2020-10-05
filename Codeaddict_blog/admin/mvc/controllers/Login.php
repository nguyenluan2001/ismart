<?php
class Login extends Controller
{
    public function LoginAction()
    {      
       
        if(isset($_POST['btn_login']))
        {
            $username="";
            $password="";
            $error=array();
            if($_POST['username']!="")
            {
                if(strlen($_POST['username'])>32 ||strlen($_POST['username'])<6 )
                {
                    $error['username']="Username must have more than 6 character";

                }
                else
                {
                    $pt_username="/^[A-Za-z0-9]{6,32}$/";
                    if(!preg_match($pt_username,$_POST['username'],$matches))
                    {
                        $error['username']="Username must have uppercase character, lowercase character, number and have more than 6 character";

                    }
                    else
                    {
                        $username=$_POST['username'];
                    }
                }
                
            }
            else
            {
                $error['username']="Username has not been filled";

            }
            if($_POST['password']!="")
            {
                if(strlen($_POST['password'])>32 ||strlen($_POST['password'])<6 )
                {
                    $error['password']="Password must have more than 6 character";

                }
                else
                {
                    $pt_password="/([A-Z]{1})+([\w_\.!@#$%^&*()]+){5,31}/";
                    if(!preg_match($pt_password,$_POST['password'],$matches))
                    {
                        $error['password']="Password must have one uppercase character, lowercase character, number,special character and have more than 6 character";

                    }
                    else
                    {
                        $password=(string)$_POST['password'];
                    }
                }
                
            }
            else
            {
                $error['password']="Password has not been filled";

            }
            if(!empty($error['username']) || !empty($error['password']))
            {
                $this->view('LoginView',[
                    'error'=>$error,
                ]);
            }
            else
            {
                
                $temp=$this->model('UserModel');
                $user=$temp->Check_User($username,$password);              
                if(!empty($user))
                {
                    // $_SESSION['is_login']=true;
                    setcookie("user","luanguyen",time()+60*60);
                    $_SESSION['user']=$user;
                    header('location:?controller=Post&action=List_Post');

                }
                else
                {
                    $error['account']="Account doesn't existed";
                    $this->view('LoginView',[
                        'error'=>$error,
                    ]);
                }
            }
            

        }
        else 
        {
            $this->view('LoginView',[
                
            ]);
        }
       

      

    }
}


?>