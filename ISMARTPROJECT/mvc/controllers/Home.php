<?php
class Home extends Controller
{
    public function Show()
    {
        $temp=$this->model("ProductsModel");
        $fashion=$temp->Get_List_Products_By_Cat_Id(1);
        $electronic=$temp->Get_List_Products_By_Cat_Id(2);

        $this->view('HomeView',[
            'pages'=>"home",
            'fashion'=>$fashion,
            'electronic'=>$electronic
        ]);
    }
}

?>