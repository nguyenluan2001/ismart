<?php
class Home extends Controller
{
    public function Index()
    {
        $temp=$this->model('PostModel');
        $list_posts=$temp->Get_List_Posts();
        $this->view('HomeView',[
            'page'=>'Home',
            'item'=>"Home",
            'list_posts'=>$list_posts
        ]);
    }
}


?>