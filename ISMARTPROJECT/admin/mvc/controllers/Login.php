<?php
class Login extends Controller
{
    public function LoginAction()
    {
        $temp=$this->model('UserModel');
        $error=array();
        if (!isset($_POST['btn_login'])) {
            $this->view('LoginView');
        } else {
            $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";

            if (!empty($_POST['username'])) {
                if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
                    $error['username'] = "Usename phải có từ 6 đến 32 ký tự";
                } else {
                    if (!preg_match($pattern, $_POST['username'], $matchs)) {
                        $error['username'] = "Username cho phép sử dụng ký tự, chữ số, dấu chấm, dấu gạch dưới, từ 6 đến 32 ký tự";
                    } else {
                        $username = $_POST['username'];
                    }
                }
            } else {
                $error['username'] = "Bạn chưa nhập tên đăng nhập";
            }
            $PT = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if (!empty($_POST['password'])) {
                if (!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
                    $error['password'] = "Password phải có từ 6 đến 32 ký tự";
                } else {
                    if (!preg_match($PT, $_POST['password'], $matchs)) {
                        $error['password'] = "Password phải có chữ in hoa,ký tự đặc biệt và có từ 6 đến 32 ký tự";
                    } else {
                        $password = $_POST['password'];
                    }
                }
            } else {
                $error['password'] = "Bạn chưa nhập mật khẩu";
            }
            if(!empty($error))
            {
                $this->view('LoginView',[
                    'error'=>$error,
                ]);
            }
            else
            {
                if($temp->checkLogin($username,$password))
                {
                    $_SESSION['is_login']=true;
                    $_SESSION['admin']=$temp->Get_User($username,$password);
                    header("location:?controller=Pages&action=Get_List_Pages");
                }
                else
                {
                    $this->view('LoginView',[
                        'NotExist'=>"Tài khoản không tồn tại"
                    ]);
                }
            }
        }
    }
}


?>