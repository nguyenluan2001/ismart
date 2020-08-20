<?php
class Posts extends Controller
{
    public function AddPost()
    {
        if(!isset($_POST['btn-add-post']))
        {
            $this->view('AdminPage',[
                'pages'=>'add_post'
            ]);
        }
        else
        {
            $data=array(
                'title'=>$_POST['title'],
                'content'=>$_POST['desc'],
                'created_at'=>time()

            );
            $temp=$this->model('PostsModel');
            if($temp->AddPost($data))
            {
                echo "ok";
            }
            else
            {
                echo "not ok";
            }
        }
        
    }
    public function Get_List_Posts()
    {
        $temp=$this->model('PostsModel');
        $list_posts=$temp->Get_List_Posts();
        $this->view('AdminPage',[
            'pages'=>'list_post',
            'list_posts'=>$list_posts
        ]);
    }
    public function PostMenu()
    {
        
        $this->view('AdminPage',[
            'pages'=>'list_cat'
        ]);
    }
    public function Detail_Post()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PostsModel');
        $post=$temp->Get_Post_By_Id($id);
        $this->view('AdminPage',[
            'pages'=>'update_post',
            'posts'=>$post
        ]);
    }
    public function UpdatePost()
    {
        $data=array(
            'title'=>$_POST['title'],
            'content'=>$_POST['desc'],
            'created_at'=>time(),
            'id'=>(int)$_GET['id']

        );
      
        $temp=$this->model('PostsModel');
        $temp->Update_Post($data);
        $post=$temp->Get_Post_By_Id($data['id']);
        $this->view('AdminPage',[
            'pages'=>'update_post',
            'posts'=>$post
        ]);
    }
}

?>