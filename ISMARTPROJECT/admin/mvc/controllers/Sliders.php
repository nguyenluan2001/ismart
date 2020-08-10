<?php
class Sliders extends Controller
{
    public function AddSlider()
    {
        $this->view('AdminPage',[
            'pages'=>'add_slider'
        ]);
    }
    public function Get_List_Sliders()
    {
        $this->view('AdminPage',[
            'pages'=>'list_slider'
        ]);
    }
}
?>