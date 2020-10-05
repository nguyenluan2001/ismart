<?php
class Logout extends Controller
{
    public function Logout()
    {
       unset($_SESSION['is_login']);
       unset($_SESSION['user']);
       header("location:?controller=Login&action=Login");

    }
}


?>