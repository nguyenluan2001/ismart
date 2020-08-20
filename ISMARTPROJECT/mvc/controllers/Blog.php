<?php
class Blog extends Controller
{
    public function Show()
    {

        $this->view('HomeView',[
            'pages'=>'blog'
        ]);
    }
    public function Detail_Blog()
    {
        $temp=$this->model('PostsModel');
        $post=$temp->Get_Post(2);
        
        $this->view('HomeView',[
            'pages'=>'detail_blog',
            'post'=>$post
        ]);
    }
}


?>