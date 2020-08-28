<?php
class CartModel extends Database
{
    public function Add_Product($customerID,$item=[])
    {
        $product_name=$item['product_name'];
        $product_thumb=$item['product_name'];
        $price=$item['price'];
        $qty=$item['qty'];
        $sub_total=$item['sub_total'];
        $sql="INSERT INTO `tbl_order`(`product_name`, `product_thumb`, `price`, `qty`, `sub_total`, `customerID`) VALUES ('$product_name','$product_thumb','$price','$qty','$sub_total','$customerID')";
        mysqli_query($this->conn,$sql);
    }
  
   public function Add_Order($customerID)
   {
    foreach($_SESSION['cart']['buy'] as $item)
    {
        $this->Add_Product($customerID,$item);
    }
   }
}
?>