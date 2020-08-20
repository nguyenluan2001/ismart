<?php
class Products extends Controller
{
    public function Category_Show()
    {
        $temp=$this->model('ProductsModel');

        if(isset($_GET['id']))
        {
            $id=(int)$_GET['id'];
            $list_products=$temp->Get_List_Products_By_Cat_Id($id);
            $this->view('HomeView',[
                'pages'=>'category_product',
                'list_products'=>$list_products
            ]);
        }
        else
        {
            $fashion=$temp->Get_List_Products_By_Cat_Id(1);
            $electronic=$temp->Get_List_Products_By_Cat_Id(1);
            $this->view('HomeView',[
                'pages'=>"category_product",
                'fashion'=>$fashion,
                'electronic'=>$electronic
            ]);

        }
        
    }
    public function Detail_Product()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('ProductsModel');
        $product=$temp->Get_Product_By_Id($id);
        $this->view('HomeView',[
            'pages'=>"detail_product",
            'product'=>$product
        ]);
    }
}

?>