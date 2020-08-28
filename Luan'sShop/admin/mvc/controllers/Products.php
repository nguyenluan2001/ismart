<?php
class Products extends Controller
{
    public function Index()
    {
        $this->view('HomeView', [
            'pages' => 'Products',
            'item' => 'list_product'
        ]);
    }
    public function Add_Product()
    {
        if (!isset($_POST['btn_add_product'])) {
            $this->view('HomeView', [
                'pages' => 'Products',
                'item' => 'add_product'
            ]);
        } else {
            $product_name = $_POST['product_name'];
            $product_code = $_POST['product_code'];
            $price = $_POST['price'];
            $product_desc = $_POST['product_desc'];
            $product_intro = $_POST['product_intro'];
            $product_thumb = $_FILES['file']['name'];
            $cat_id = $_POST['cat_id'];
            require 'lib/uploads.php';
            uploads($product_thumb,"Product");
            $temp = $this->model('ProductsModel');
            $temp->Add_Product($product_name, $product_code, $price, $product_desc, $product_intro, $product_thumb, $cat_id);
            header('location:?controller=Products&action=Show_List_Cat');
        }
    }
    public function Show_List_Cat()
    {
        $temp = $this->model('ProductsModel');
        $list_cats = $temp->Get_List_Cats();
        $this->view('HomeView', [
            'pages' => 'Products',
            'item' => 'list_cat',
            'list_cats' => $list_cats
        ]);
    }
    public function Category_Detail()
    {
        $id = (int)$_GET['id'];
        $temp = $this->model('ProductsModel');
        $list_products = $temp->Get_List_Products_By_CatID($id);
        $cat = $temp->Get_Cat_By_Id($id);
        $this->view('HomeView', [
            'pages' => 'Products',
            'item' => 'list_product',
            'list_products' => $list_products,
            'cat' => $cat
        ]);
    }
    public function Update_Product()
    {
        $id = (int)$_GET['id'];
        $temp = $this->model('ProductsModel');
        $product = $temp->Get_Product_By_Id($id);

        if (!isset($_POST['btn_update_product'])) {
            $this->view('HomeView', [
                'pages' => 'Products',
                'item' => 'update_product',
                'product' => $product,
                // 'cat'=>$cat
            ]);
        } else {
            $product_name = $_POST['product_name'];
            $product_code = $_POST['product_code'];
            $price = $_POST['price'];
            $product_desc = $_POST['product_desc'];
            $product_intro = $_POST['product_intro'];
            $product_thumb = $product['product_thumb'];
            $cat_id = $_POST['cat_id'];
           $temp->Update_Product($id,$product_name, $product_code, $price, $product_desc, $product_intro, $product_thumb, $cat_id);
           
            unset($_POST['btn_update_product']);
            header("location:?controller=Products&action=Update_Product&id={$id}");
        }
    }
    public function Delete_Product()
    {
        $id=(int)$_GET['id'];
        $cat_id=(int)$_GET['cat_id'];
        $temp=$this->model('ProductsModel');
        $temp->Delete_Product($id);
        header("location:?controller=Products&action=Category_Detail&id={$cat_id}");
    }
}
