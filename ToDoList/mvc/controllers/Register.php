<?php
class Register extends Controller
{
    public function Register()
    {
        if (!isset($_POST['btn_register'])) {
            $this->view('RegisterView', []);
        } else {
            $error = array();
            $fullname = "";
            $username = "";
            $password = "";
            if (empty($_POST['fullname'])) {
                $error['fullname'] = "Fullname must be filled";
            } else {
                $fullname = $_POST['fullname'];
            }
            if (empty($_POST['username'])) {
                $error['username'] = "Username must be filled";
            } else {
                $username = $_POST['username'];
            }
            if (empty($_POST['password'])) {
                $error['password'] = "Password must be filled";
            } else {
                $password = $_POST['password'];
            }
            $temp = $this->model('UserModel');
            unset($_POST['btn_register']);
            if (!empty($error)) {              
                $this->view('RegisterView', [
                    'error' => $error
                ]);
            } 
            else {
                if (!empty($temp->Check_Exist_User($username, $password))) {
                    unset($_SESSION['is_register']);
                    $error['user_existed'] = "Username or Password is existed";
                    $this->view('RegisterView', [
                        'error' => $error,
                    ]);
                } else {
                    $temp->Add_User($fullname, $username, $password);
                    $_SESSION['is_register'] = true;
                    unset($_POST['btn_register']);
                    header('?controller=Register&action=Register');
                }
            }
        }
    }
}
