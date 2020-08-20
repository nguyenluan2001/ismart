<?php
class Admin extends Controller
{
    public function AdminInfo()
    {
        $this->view('AdminInfo',[
            'pages'=>'info_account'
        ]);
    }
    public function ResetPass()
    {
        if(!isset($_POST['btn-change-pass']))
        {
            $this->view('AdminResetPass',[
                'pages'=>'change_pass'
            ]);
        }
        else
        {
            $temp=$this->model('UserModel');
            $old_pass=$_POST['pass-old'];
            if($temp->Get_User_By_Pass($old_pass))
            {
                $new_pass=$_POST['pass-new'];
                $confirm_pass=$_POST['confirm-pass'];
                if($new_pass==$confirm_pass)
                {
                   
                   if($temp->UpdatePass($new_pass,$old_pass))
                   {
                       echo "ok";
                   }
                   else
                   {
                       echo "not ok";
                   }
                }
            }
            
        }
       
    }
    public function Update()
    {
        $info=array(
            'display_name'=>$_POST['display-name'],
            'username'=>$_POST['username'],
            'email'=>$_POST['email'],
            'phone_number'=>$_POST['tel'],
            'address'=>$_POST['address'],

        );
        $temp=$this->model('UserModel');
        $temp->UpdateUser($info);
        header("location:?controller=Admin&action=AdminInfo");

    }
    
}


?>