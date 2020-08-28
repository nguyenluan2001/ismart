<?php
class Home extends Controller
{
    public function Index()
    {
        $this->view('HomeView',[
            'pages'=>'Post',
            'item'=>'list_post'
        ]);
    }
}


?>