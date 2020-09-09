<?php
class Cart extends Controller
{
    public function Index()
    {
        $this->view('HomeView',[
            'pages'=>'cart',
           
        ]);
    }
    public function Update_Cart()
    {
        $num_order=0;
        $total=0;
        foreach($_SESSION['cart']['buy'] as $item)
        {
            $num_order+=$item['qty'];
            $total+=$item['sub_total'];
        }
        $_SESSION['cart']['info']=array(
            'num_order'=>$num_order,
            'total'=>$total,
        );
    }
    public function Add_Cart()
    {
        $id=(int)$_GET['id'];
        $temp=$this->model('ProductsModel');
        $product=$temp->Get_Product_By_Id($id);
        $qty=0;
        if(isset($_POST['qty']))
        {
            $qty=$_POST['qty'];
            if(!empty($_SESSION['cart']['buy']) && isset($_SESSION['cart']['buy'][$id]))
            {
                $qty=$_SESSION['cart']['buy'][$id]['qty']+$_POST['qty'];
            }
            $_SESSION['cart']['buy'][$id]=array(
                'id'=>$id,
                'product_name'=>$product['product_name'],
                'product_thumb'=>$product['product_thumb'],
                'product_desc'=>$product['product_desc'],
                'product_intro'=>$product['product_intro'],
                'price'=>$product['price'],
                'product_code'=>$product['product_code'],
                'cat_id'=>$product['cat_id'],
                'qty'=>$qty,
                'sub_total'=>$qty*$product['price'],
            );

        }
        else
        {
            $qty=1;
            if(!empty($_SESSION['cart']['buy']) && isset($_SESSION['cart']['buy'][$id]))
            {
                $qty=$_SESSION['cart']['buy'][$id]['qty']+$_POST['qty'];
            }
            $_SESSION['cart']['buy'][$id]=array(
                'id'=>$id,
                'product_name'=>$product['product_name'],
                'product_thumb'=>$product['product_thumb'],
                'product_desc'=>$product['product_desc'],
                'product_intro'=>$product['product_intro'],
                'price'=>$product['price'],
                'product_code'=>$product['product_code'],
                'cat_id'=>$product['cat_id'],
                'qty'=>$qty,
                'sub_total'=>$qty*$product['price'],
            );
        }
       
        $this->Update_Cart();
        header("location:?controller=Cart&action=Index");
        
    }
    public function UpdateCart_Ajax()
    {
        $id=$_POST['id'];
        $qty=$_POST['qty'];
        $temp=$this->model('ProductsModel');
        $product=$temp->Get_Product_By_Id($id);
        $_SESSION['cart']['buy'][$id]['qty']=$qty;
        $_SESSION['cart']['buy'][$id]['sub_total']=$qty*$_SESSION['cart']['buy'][$id]['price'];
        $this->Update_Cart();
        $data=array(
            'qty'=>$_SESSION['cart']['buy'][$id]['qty'],
            'sub_total'=>number_format($_SESSION['cart']['buy'][$id]['sub_total']),
            'num_order'=>$_SESSION['cart']['info']['num_order'],
            'total'=>number_format($_SESSION['cart']['info']['total']),
        );
        echo json_encode($data);
    }
    public function Check_Out()
    {
        if(!isset($_POST['btn_check_out']))
        {
            $this->view('HomeView',[
                'pages'=>'check_out'
            ]);
        }
        else
        {
            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $note=$_POST['note'];
            $payment_method=$_POST['payment_method'];
            $num_order=$_SESSION['cart']['info']['num_order'];
            $total=$_SESSION['cart']['info']['total'];

            $temp=$this->model('CartModel');
            $tmp=$this->model('CustomerModel');
            $tmp->Add_Customer($fullname,$email,$address,$phone,$note,$payment_method,$num_order,$total);
            $customer=$tmp->Get_Customer($fullname,$email,$address,$phone);
            $customerID=$customer['id'];
            $temp->Add_Order($customerID);
            $tmp_2=$this->model('ProductsModel');
            foreach($_SESSION['cart']['buy'] as $item)
            {
                $product=$tmp_2->Get_Product_By_Id($item['id']);
                $current_qty=$product['qty'];
                $new_qty=$current_qty-$item['qty'];
                $tmp_2->Update_Product($item['id'],$new_qty,$item['qty']);

            }
        }
        
        
    }
    public function Delete()
    {
        if(isset($_GET['id']))
        {
            $id=(int)$_GET['id'];
            unset($_SESSION['cart']['buy'][$id]);
        }
        else 
        {
            foreach($_SESSION['cart']['buy'] as $key=>$value)
            {
                unset($_SESSION['cart']['buy'][$key]);
            }
        }
        $this->Update_Cart();
        header("location:?controller=Cart&action=Index");


    }
}

?>