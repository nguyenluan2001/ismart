<?php
class Cart extends Controller
{
    public function Get_List_Order()
    {
        $temp=$this->model('CartModel');
        $list_order=$temp->Get_List_Customer();
        $this->view('AdminPage',[
            'pages'=>'list_order',
            'list_order'=>$list_order
        ]);
    }
    public function Get_List_Customer()
    {
        $temp=$this->model('CartModel');
        $list_customer=$temp->Get_List_Customer();
        $this->view('AdminPage',[
            'pages'=>'list_customer',
            'list_customer'=>$list_customer
        ]);
    }
    public function Detail_Order()
    {
        $temp=$this->model('CartModel');
        $id=(int)$_GET['id'];    
         $list_products=$temp->Get_List_Products($id);

        
        $this->view('AdminPage',[
            'pages'=>'detail_order',
            'list_products'=>$list_products
        ]);
    }
}

?>