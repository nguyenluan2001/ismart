<?php
class Widget extends Controller
{
    public function AddWidget()
    {
        $this->view('AdminPage',[
            'pages'=>'add_widget'
        ]);
    }
    public function Get_List_Widgets()
    {
        $this->view('AdminPage',[
            'pages'=>'list_widget'
        ]);
    }
}
