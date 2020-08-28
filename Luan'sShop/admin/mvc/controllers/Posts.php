<?php
class Posts extends Controller
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
    public function Add_Post()
    {
        if(!isset($_POST['btn_add_post']))
        {
            $this->view('HomeView',[
                'pages'=>'Post',
                'item'=>'add_post'
            ]);
        }
        else
        {
            $post_title=$_POST['post_title'];
            $slug=$_POST['slug'];
            $post_content=$_POST['post_content'];
            $time_temp=time();
            $created_at=date('d-m-yy',$time_temp);
            $cat_id=$_POST['post_cat_id'];
            $post_author=$_SESSION['admin']['fullname'];
            $img_post=$_FILES['file']['name'];
            require 'lib/uploads.php';
            uploads($img_post,"Post");
            $temp=$this->model('PostsModel');
            $temp->Add_Post($post_title,$slug,$post_content,$created_at,$cat_id,$post_author);
            header('location:?controller=Posts&action=Index');
        }
       
    }
    public function Update_Post()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PostsModel');
        if(!isset($_POST['btn_update_post']))
        {
            $post=$temp->Get_Post_By_Id($id);
            $this->view('HomeView',[
                'pages'=>'Post',
                'item'=>'update_post',
                'post'=>$post
            ]);

        }
        else
        {
            $post_title=$_POST['post_title'];
            $slug=$_POST['slug'];
            $post_content=$_POST['post_content'];
            $time_temp=time();
            $created_at=date('d-m-yy',$time_temp);
            $cat_id=$_POST['post_cat_id'];
            $post_author=$_SESSION['admin']['fullname'];
            $img_post=$_FILES['file']['name'];
            require 'lib/uploads.php';
            uploads($img_post,"Post");
            $temp=$this->model('PostsModel');
            $temp->Update_Post($id,$post_title,$slug,$post_content,$created_at,$cat_id,$post_author);
            unset($_POST['btn_update_post']);
            header("location:?controller=Posts&action=Update_Post&id={$id}");

        }
    }
    public function Show_List_Cat()
    {
        $temp=$this->model('PostsModel');
        $list_cats=$temp->Get_List_Cats();
        $this->view('HomeView',[
            'pages'=>'Post',
            'item'=>'list_cat',
            'list_cats'=>$list_cats
        ]);
    }
    public function Detail_Cat()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PostsModel');
        $list_posts=$temp->Get_List_Posts_By_CatId($id);
        $this->view('HomeView',[
            'pages'=>'Post',
            'item'=>'list_post',
            'list_posts'=>$list_posts
        ]);

    }
    public function Delete_Post()
    {
        $id=(int)$_GET['id'];
        $cat_id=(int)$_GET['cat_id'];
        $temp=$this->model('PostsModel');
        $temp->Delete_Post($id);
        header("location:?controller=Posts&action=Detail_Cat&id={$cat_id}");

    }

}


?>