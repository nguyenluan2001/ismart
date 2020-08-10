<?php
class Pages extends Controller
{
    public function Get_List_Pages()
    {
        $this->view('AdminPage',[
            'pages'=>'list_page'
        ]);
    }
    public function AddPage()
    {
        $this->view('AdminPage',[
            'pages'=>'add_page'
        ]);
    }
}

?>