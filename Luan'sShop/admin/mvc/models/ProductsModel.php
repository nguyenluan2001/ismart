<?php
class ProductsModel extends Database
{
    public function Add_Product($product_name,$product_code,$price,$product_desc,$product_intro,$product_thumb,$cat_id)
    {
        $sql="INSERT INTO `tbl_product`(`product_name`, `product_thumb`, `product_desc`, `product_intro`, `price`, `product_code`, `cat_id`) VALUES ('$product_name','$product_thumb','$product_desc','$product_intro','$price','$product_code','$cat_id')";
        mysqli_query($this->conn,$sql);
    }
    public function Update_Product($id,$product_name,$product_code,$price,$product_desc,$product_intro,$product_thumb,$cat_id)
    {
        $sql="UPDATE `tbl_product` SET `product_name`='$product_name', `product_thumb`='$product_thumb', `product_desc`='$product_desc', `product_intro`='$product_intro', `price`='$price', `product_code`='$product_code', `cat_id`='$cat_id' WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Delete_Product($id)
    {
        $sql="DELETE FROM `tbl_product` WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Get_List_Cats()
    {
        $sql="SELECT * FROM `tbl_cat`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Get_Cat_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_cat` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
       return mysqli_fetch_assoc($result);
    }
    public function Get_List_Products_By_CatID($id)
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
    public function Get_Product_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
       return mysqli_fetch_assoc($result);
    }
}
?>