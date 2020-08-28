<?php
class Blog extends Controller
{
    public function Index()
    {
        $temp=$this->model('PostsModel');
        $list_posts=$temp->Get_List_Posts();
        $this->view('HomeView',[
            'pages'=>'blog',
            'list_posts'=>$list_posts
        ]);
    }
    public function Detail_Post()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PostsModel');
        $post=$temp->Get_Post_By_Id($id);
        $this->view('HomeView',[
            'pages'=>'detail_post',
            'post'=>$post
        ]);
    }
}

?>