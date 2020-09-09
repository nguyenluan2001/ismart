<?php
class Home extends Controller
{
    public function Index()
    {
        $temp=$this->model('ProductsModel');
        $fashion=$temp->Get_List_Products_By_CatId(1);
        $electronic=$temp->Get_List_Products_By_CatId(2);
        $_SESSION['best_sell']=$temp->Get_Best_Sell_Product();

        $this->view('HomeView',[
            'pages'=>'home',
            'fashion'=>$fashion,
            'electronic'=>$electronic,

        ]);
    }
}

?>