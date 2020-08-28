<?php
class Cart extends Controller
{
    public function Index()
    {
        $temp=$this->model('CustomerModel');
        $list_orders=$temp->Get_List_Orders();
        $this->view('HomeView',[
            'pages'=>'Cart',
            'item'=>'list_order',
            'list_orders'=>$list_orders
        ]);
    }
    public function Show_List_Customers()
    {
        $temp=$this->model('CustomerModel');
        $list_customers=$temp->Get_List_Customers();
        $this->view('HomeView',[
            'pages'=>'Cart',
            'item'=>'list_customer',
            'list_customers'=>$list_customers
        ]);
    }
}


?>