<?php
class Medias extends Controller
{
    
    public function Get_List_Medias()
    {
        $this->view('AdminPage',[
            'pages'=>'list_media'
        ]);
    }
}
