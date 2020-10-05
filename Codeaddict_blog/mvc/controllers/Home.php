<?php
class Home extends Controller
{
    public function Index()
    {
        $temp=$this->model("TopicModel");
        $temp_1=$this->model('PostModel');
        $_SESSION['list_topics']=$temp->Get_List_Topic();
        $list_posts=$temp_1->Get_List_Posts();
        $this->view('HomeView',[
            'page'=>'Home',
            'list_posts'=>$list_posts
        ]);
    }

}


?>