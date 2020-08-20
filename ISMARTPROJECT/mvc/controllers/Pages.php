<?php
class Pages extends Controller
{
    public function Show()
    {
        $temp=$this->model('PagesModel');
        $id=(int)$_GET['id'];
        $dt=$temp->Get_Page_By_Id($id);
        $pages="";
        if($id==1)
        {
            $pages='introduce';
            $this->view('HomeView',[
                'pages'=>$pages,
                'dt'=>$dt
            ]);

        }
        else
        {
            $pages='contact';

            $this->view('HomeView',[
                'pages'=>$pages,
                'dt'=>$dt
            ]);
        }
      
    }
}


?>