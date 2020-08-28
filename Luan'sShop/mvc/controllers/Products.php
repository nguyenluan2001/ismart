<?php
class Products extends Controller
{
    public function Category_Detail()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('ProductsModel');
        $list_products=$temp->Get_List_Products_By_CatId($id);
        $cat=$temp->Get_Cat_By_Id($id);
        $this->view('HomeView',[
            'pages'=>'category_product',
            'list_products'=>$list_products,
            'cat'=>$cat
        ]);
    }
    public function Detail_Product()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('ProductsModel');
        $product=$temp->Get_Product_By_Id($id);
        $this->view('HomeView',[
            'pages'=>'detail_product',
            'product'=>$product,
            
        ]);
    }
}

?>