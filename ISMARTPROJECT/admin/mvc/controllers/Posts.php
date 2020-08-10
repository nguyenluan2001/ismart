<?php
class Posts extends Controller
{
    public function AddPost()
    {
        $this->view('AdminPage',[
            'pages'=>'add_post'
        ]);
    }
    public function Get_List_Posts()
    {
        $this->view('AdminPage',[
            'pages'=>'list_post'
        ]);
    }
    public function PostMenu()
    {
        
        $this->view('AdminPage',[
            'pages'=>'list_cat'
        ]);
    }
}

?>