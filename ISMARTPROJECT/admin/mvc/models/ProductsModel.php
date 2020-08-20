<?php
class ProductsModel extends Database
{
   public function Get_List_Products($id)
   {
       $sql="SELECT * FROM `tbl_product` WHERE `cat_id`='$id'";
       $result=mysqli_query($this->conn,$sql);
       $temp=array();
       while($row=mysqli_fetch_assoc($result))
       {
           $temp[]=$row;
       }
       return $temp;
   }
   public function AddProduct($data)
   {
       $product_name=$data['product_name'];
       $product_thumb=$data['product_thumb'];
       $price=$data['price'];
       $cat_id=$data['cat_id'];
       $sql="INSERT INTO `tbl_product`( `product_desc`, `product_thumb`, `price`,`cat_id`) VALUES ('{$product_name}','{$product_thumb}','{$price}','{$cat_id}')";
      return mysqli_query($this->conn,$sql);
   }
   public function Get_Product_By_Id($id)
   {
    $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
    $result=mysqli_query($this->conn,$sql);
    return mysqli_fetch_assoc($result);
   }
   public function Update_Product($data)
   {
       $product_desc=$data['product_desc'];
       $product_thumb=$data['product_thumb'];
       $price=$data['price'];
       $id=$data['id'];
       $cat_id=$data['cat_id'];
       $sql="UPDATE `tbl_product` SET `product_desc`='$product_desc',`product_thumb`='$product_thumb',`price`='$price',`cat_id`='$cat_id' WHERE `id`='$id'";
       return mysqli_query($this->conn,$sql);
   }

}

?>