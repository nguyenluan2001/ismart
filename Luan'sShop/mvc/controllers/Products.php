<?php
class Products extends Controller
{
    public function Category_Detail()
    {
        
        if(!isset($_POST['btn_filter']))
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
        else
        {
            $temp=$this->model('ProductsModel');

            $select=(int)$_POST['select'];
            $cat_id=(int)$_GET['cat_id'];
            $cat=$temp->Get_Cat_By_Id($cat_id);
            $list_products=array();
            if($select==1)
            {
                $list_products=$temp->Filter_List_Products_A_Z($cat_id);
    
            }
            else if($select==2)
            {
            $list_products=$temp->Filter_List_Products_Z_A($cat_id);
    
            }
            else if($select==3)
            {
            $list_products=$temp->Filter_List_Products_By_Price_DESC($cat_id);
    
            }
            else if($select==4)
            {
            $list_products=$temp->Filter_List_Products_By_Price_ASC($cat_id);
    
            }
            unset($_POST['select']);
            $this->view('HomeView',[
                'pages'=>'category_product',
                'list_products'=>$list_products,
                'cat'=>$cat
            ]);
        }
        
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
    public function Search_Product()
    {
        $temp=$this->model('ProductsModel');
        $search_content=$_POST['search_content'];
        $list_products=$temp->Get_List_Products_By_Search_Content($search_content);
        $this->view('HomeView',[
            'pages'=>'category_product',
            'list_products'=>$list_products,
            // 'cat'=>$cat
        ]);
    }
    public function Filter_Product()
    {
        if(isset($_POST['btn_filter']))
        {
            
        }
        

    }
}

?>