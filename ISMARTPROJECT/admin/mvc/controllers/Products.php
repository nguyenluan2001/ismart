<?php


class Products extends Controller
{
    public function AddProduct()
    {
        if(!isset($_POST['btn-add-product']))
        {
            $this->view('AdminPage',[
                'pages'=>'add_product'
            ]);
        }
        else
        {
            $name_img=basename($_FILES['file']['name']);
            require 'lib/uploads.php';
            uploads($name_img);
            $data=array(
                'product_name'=>$_POST['product_name'],
                'product_code'=>$_POST['product_code'],
                'price'=>$_POST['price'],
                'product_desc'=>$_POST['product_desc'],
                'desc'=>$_POST['desc'],
                'product_thumb'=>$name_img,
                'cat_id'=>$_POST['cat']

            );
            $temp=$this->model('ProductsModel');
            $temp->AddProduct($data);
            header("location:?controller=Products&action=Get_List_Products");
          
            // $temp=$this->model('ProductsModel');

        }
       
    }
    public function Get_List_Products()
    {
        $temp=$this->model('ProductsModel');
        if(!isset($_GET['id']))
        {
            $list_products=$temp->Get_List_Products(1);
            $this->view('AdminPage',[
                'pages'=>'list_product',
                'list_products'=>$list_products
            ]);
        }
        else
        {
            $id=(int)$_GET['id'];
            $list_products=$temp->Get_List_Products($id);
            $this->view('AdminPage',[
                'pages'=>'list_product',
                'list_products'=>$list_products
            ]);
        }
       
       
    }
    public function ProductMenu()
    {
        
        $this->view('AdminPage',[
            'pages'=>'products_menu'
        ]);
    }
    public function Update_Product()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('ProductsModel');
        if(!isset($_POST['btn-update-product']))
        {
            $product=$temp->Get_Product_By_Id($id);
            $this->view('AdminPage',[
                'pages'=>'update_product',
                'product'=>$product,
                'id'=>$id
            ]);
        }
        else
        {
            $name_img="";
            if(empty($_FILES['file']['name']))
            {
               $product=$temp->Get_Product_By_Id($id);
                $name_img=$product['product_thumb'];
            }
            else
            {
                $name_img=basename($_FILES['file']['name']);

            }

            $data=array(
                'product_desc'=>$_POST['product_name'],
                'product_thumb'=>$name_img,
                'price'=>$_POST['price'],
                'cat_id'=>$_POST['cat'],
                'id'=>$_GET['id']

            );
            $temp->Update_Product($data);
              
            $product=$temp->Get_Product_By_Id($id);
            unset($_POST['btn-update-product']);
            $this->view('AdminPage',[
                'pages'=>'update_product',
                'product'=>$product,
                'id'=>$id
            ]);
        }
    }
}

?>
