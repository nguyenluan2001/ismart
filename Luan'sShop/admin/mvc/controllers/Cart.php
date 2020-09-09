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
    public function Delete_Customer()
    {
        if(!isset($_POST['checkItem']))
        {
            $id=(int)$_GET['id'];
            $temp=$this->model('CustomerModel');
            $temp->Delete_Customer($id);
            header('location:?controller=Cart&action=Show_List_Customers');
        }
        else
        {
            $temp=$this->model('CustomerModel');
            foreach($_POST['checkItem'] as $key=>$value)
            {
                $temp->Delete_Customer($key);

            }
            header('location:?controller=Cart&action=Show_List_Customers');

        }
        
    }
    public function Delete_Order()
    {
        if(!isset($_POST['checkItem']))
        {
            $id=(int)$_GET['id'];
            $temp=$this->model('CustomerModel');
            $temp->Delete_Order($id);
            header('location:?controller=Cart&action=Index');
        }
        else
        {
            $temp=$this->model('CustomerModel');
            foreach($_POST['checkItem'] as $key=>$value)
            {
                $temp->Delete_Order($key);

            }
            header('location:?controller=Cart&action=Index');

        }
    }
    public function Detail_Order()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('CustomerModel');
        $temp_1=$this->model('ProductsModel');

        $data_order=[
            'info'=>$temp->Get_Customer_By_Id($id),
            'list_products'=>$temp_1->Get_List_Product_By_CustomerId($id)
        ];
        // echo "<pre>";
        // print_r($data_order);
        $this->view('Homeview',[
            'pages'=>'Cart',
            'item'=>'detail_order',
            'data_order'=>$data_order
        ]);


    }
}


?>