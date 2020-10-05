<?php
class Topic extends Controller
{
    public function List_Topic()
    {
        $temp=$this->model('TopicModel');
        $list_topics=$temp->Get_List_Topics();
        $this->view('HomeView',[
            'page'=>'Topic',
            'item'=>"List_Topic",
            'list_topics'=>$list_topics
        ]);
    }
    public function Add_Topic()
    {
        if(!isset($_POST['btn_add_topic']))
        {
            $this->view('HomeView',[
                'page'=>"Topic",
                'item'=>"Add_Topic"
            ]);
        }
        else
        {
            $title=$_POST['topic_title'];
            $icon=$_POST['topic_icon'];
            // $desc=$_POST['post_desc'];
            // $content=$_POST['post_content'];
            // $topic_id=$_POST['topic_id'];
            // $slug=changeTitle($title);
            $temp=$this->model('TopicModel');
            $temp->Add_Topic($title,$icon);
            header("location:?controller=Topic&action=List_Topic");
        }
       
    }
    public function Update_Topic()
    {
        $id=(int)$_GET['id'];
        if(!isset($_POST['btn_update_topic']))
        {
            $temp=$this->model("TopicModel");
            $topic=$temp->Get_Topic_By_Id($id);
            $this->view('HomeView',[
                'page'=>"Topic",
                'item'=>"Update_Topic",
                'topic'=>$topic,
            ]);
        }
        else
        {
            $title=$_POST['topic_title'];
            $icon=$_POST['topic_icon'];
            // $desc=$_POST['post_desc'];
            // $content=$_POST['post_content'];
            // $topic_id=$_POST['topic_id'];
            // $slug=changeTitle($title);
            $temp=$this->model('TopicModel');
            $temp->Update_Topic($id,$title,$icon);
            header("location:?controller=Topic&action=List_Topic");
        }
        
    }
    public function Delete_Topic()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model("TopicModel");
        $temp->Delete_Topic($id);
        header("location:?controller=Topic&action=List_Topic");

    }
}


?>