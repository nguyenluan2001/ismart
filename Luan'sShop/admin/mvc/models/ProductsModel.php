<?php
class ProductsModel extends Database
{
    public function Add_Product($product_name,$product_code,$price,$product_desc,$product_intro,$product_thumb,$cat_id,$qty)
    {
        $sql="INSERT INTO `tbl_product`(`product_name`, `product_thumb`, `product_desc`, `product_intro`, `price`, `product_code`, `cat_id`,`qty`) VALUES ('$product_name','$product_thumb','$product_desc','$product_intro','$price','$product_code','$cat_id','$qty')";
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
        $sql="SELECT `tbl_product`.`id`,`tbl_product`.`product_name`,`tbl_product`.`product_thumb`,`tbl_product`.`product_desc`,`tbl_product`.`product_intro`,`tbl_product`.`price`,`tbl_product`.`product_code`,`tbl_product`.`qty`,`tbl_product`.`cat_id`,`tbl_cat`.`cat_title` FROM `tbl_product` INNER JOIN `tbl_cat` ON `tbl_product`.`cat_id`=`tbl_cat`.`id` AND `tbl_product`.`cat_id`='$id'";
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
    public function Get_List_Products()
    {
        $sql="SELECT `tbl_product`.`id`,`tbl_product`.`product_name`,`tbl_product`.`product_thumb`,`tbl_product`.`product_desc`,`tbl_product`.`product_intro`,`tbl_product`.`price`,`tbl_product`.`product_code`,`tbl_product`.`cat_id`,`tbl_product`.`qty`,`tbl_cat`.`cat_title` FROM `tbl_product` INNER JOIN `tbl_cat` ON `tbl_product`.`cat_id`=`tbl_cat`.`id`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;

    }
    public function Get_List_Product_By_CustomerId($id)
    {
        $sql="SELECT * FROM `tbl_order` WHERE `customerID`='$id'";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
}

?>