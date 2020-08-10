<?php


class Products extends Controller
{
    public function AddProduct()
    {
        $this->view('AdminPage',[
            'pages'=>'add_product'
        ]);
    }
    public function Get_List_Products()
    {
        $this->view('AdminPage',[
            'pages'=>'list_product'
        ]);
    }
    public function ProductMenu()
    {
        
        $this->view('AdminPage',[
            'pages'=>'products_menu'
        ]);
    }
}

?>
