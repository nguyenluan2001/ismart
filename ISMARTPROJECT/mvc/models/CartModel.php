<?php
class CartModel extends Database
{
    public function Add_Products($data,$id)
    {

        $product_desc = $data['product_desc'];
        $product_thumb = $data['product_thumb'];
        $price = $data['price'];
        $cat_id = $data['cat_id'];
        $qty=$data['qty'];
        $sub_total=$data['sub_total'];
        $sql = "INSERT INTO `tbl_bills_detail`( `product_desc`, `product_thumb`, `price`, `cat_id`,`qty`,`sub_total`, `belong_to`) VALUES ('{$product_desc}','{$product_thumb}','{$price}','{$cat_id}','{$qty}','{$sub_total}','{$id}')";
        mysqli_query($this->conn, $sql);
    }

    public function Get_Id($data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $address = $data['address'];
        $phone = $data['phone'];
        $sql = "SELECT `id` FROM `tbl_bills` WHERE `fullname`='{$fullname}' AND `email`='{$email}' AND `address`='{$address}' AND `phone`='{$phone}'";
        $result = mysqli_query($this->conn, $sql);
        $row= mysqli_fetch_assoc($result);
        return $row['id'];
    }
    public function Add_Bill($data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $address = $data['address'];
        $phone = $data['phone'];
        $note = $data['note'];
        $payment_method = $data['payment_method'];
        $num_order=$data['info_cart']['num_order'];
        $total=$data['info_cart']['total'];
       

        $sql1 = "INSERT INTO `tbl_bills`( `fullname`, `email`, `address`, `phone`, `note`, `payment-method`,`num_order`,`total`) VALUES ('{$fullname}','{$email}','{$address}','{$phone}','{$note}','{$payment_method}','{$num_order}','{$total}')";
        mysqli_query($this->conn, $sql1);
        $id =(int)$this->Get_Id($data);
        foreach($data['list_products'] as $item)
        {
            $this->Add_Products($item,$id);
        }
    }
}
