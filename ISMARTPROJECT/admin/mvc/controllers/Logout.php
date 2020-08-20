<?php
class Logout extends Controller
{
    public function LogoutAction()
    {
        unset($_SESSION['is_login']);
        unset($_SESSION['admin']);
        header("location:?controller=Login&action=LoginAction");
    }
}

?>