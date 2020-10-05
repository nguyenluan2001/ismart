<?php
class Post extends Controller
{
    public function Detail_Post()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PostModel');
        $post=$temp->Get_Post_By_Id($id);      
        $popular_posts=$temp->Get_Popular_Posts();      
        $oldview=$post['view'];
        $newview=$oldview+1;
        $temp->Update_View($id,$newview);
        $this->view('HomeView',[
            'page'=>'Detail_Post',
            'post'=>$post,
            'popular_posts'=>$popular_posts
        ]);
    }
    public function Post_By_Topic()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PostModel');
        $list_posts=$temp->Get_List_Posts_By_Topic_Id($id);
        $this->view('HomeView',[
            'page'=>'Post_By_Topic',
            'list_posts'=>$list_posts
        ]);

    }

}


?>