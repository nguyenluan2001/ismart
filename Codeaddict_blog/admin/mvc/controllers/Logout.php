<?php
class Logout extends Controller
{
    public function Logout()
    {
    //    session_destroy();
        setcookie("user","luannguyen",time()-3600);
       header("location:?controller=Login&action=Login");

    }
}


?>