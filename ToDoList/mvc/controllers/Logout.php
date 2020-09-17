<?php
class Logout extends Controller
{
    public function Logout()
    {
        unset($_SESSION['USER']);
        header('location:?controller=Login&action=Login');
    }
}


?>