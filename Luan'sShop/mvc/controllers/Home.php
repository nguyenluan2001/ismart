<?php
class Home extends Controller
{
    public function Index()
    {
        $this->view('HomeView',[
            'pages'=>'home'
        ]);
    }
}

?>