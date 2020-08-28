<?php
class Pages extends Controller
{
    public function Index()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('PagesModel');
        $page=$temp->Get_Page($id);
        $this->view('HomeView',[
            'pages'=>'introduce',
            'data'=>$page
        ]);
    }
}

?>