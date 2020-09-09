<?php
class Home extends Controller
{
    public function Index()
    {
        $temp=$this->model('PostsModel');
        $list_posts=$temp->Get_List_Posts();
        $this->view('HomeView',[
            'pages'=>'Post',
            'item'=>'list_post',
            'list_posts'=>$list_posts
        ]);
    }
}


?>