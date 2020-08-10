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
        $this->view('AdminResetPass',[
            'pages'=>'change_pass'
        ]);
    }
}


?>