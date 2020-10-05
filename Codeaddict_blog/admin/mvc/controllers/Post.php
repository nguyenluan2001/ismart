<?php
class Post extends Controller
{
    public function List_Post()
    {
        $temp=$this->model('PostModel');
        $list_posts=$temp->Get_List_Posts();
        $this->view('HomeView',[
            'page'=>'Post',
            'item'=>"List_Post",
            'list_posts'=>$list_posts
        ]);
    }
    public function Add_Post()
    {
        if(!isset($_POST['btn_add_post']))
        {
            $temp=$this->model('TopicModel');
            $list_topics=$temp->Get_List_Topics();
            $this->view('HomeView',[
                'page'=>"Post",
                'item'=>"Add_Post",
                'list_topics'=>$list_topics
            ]);
        }
        else
        {
            $title=$_POST['post_title'];
            $desc=$_POST['post_desc'];
            $content=$_POST['post_content'];
            $topic_id=$_POST['topic_id'];
            $slug=changeTitle($title);           
            $img=uploads($_FILES['file']['name'],"Post");      
            echo $img;     
            $temp=$this->model('PostModel');
            $temp->Add_Post($title,$desc,$topic_id,$slug,$content,$img);
            header("location:?controller=Post&action=List_Post");
        }
       
    }
    public function Update_Post()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model("PostModel");
        $temp_1=$this->model('TopicModel');
        if(!isset($_POST['btn_update_post']))
        {
            $post=$temp->Get_Post_By_Id($id);
            $list_topics=$temp_1->Get_List_Topics();
            $this->view('HomeView',[
                'page'=>"Post",
                'item'=>"Update_Post",
                'post'=>$post,
                'list_topics'=>$list_topics
            ]);
        }
        else
        {
            $title=$_POST['post_title'];
            $desc=$_POST['post_desc'];
            $content=$_POST['post_content'];
            $topic_id=$_POST['topic_id'];
            $slug=changeTitle($title);
            $img="";
            if(empty($_FILES['file']['name']))
            {
                $post=$temp->Get_Post_By_Id($id);
                $img=$post['img'];

            }
            else
            {
                $img=uploads($_FILES['file']['name'],"Post");

            }
            $temp=$this->model('PostModel');
            $temp->Update_Post($id,$title,$desc,$topic_id,$slug,$content,$img);
            header("location:?controller=Post&action=List_Post");
        }
        
    }
    public function Delete_Post()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model("PostModel");
        $temp->Delete_Post($id);
        header("location:?controller=Home&action=Index");

    }
}


?>