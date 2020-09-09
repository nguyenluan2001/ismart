<?php
class ProductsModel extends Database
{
    public function Get_List_Products_By_CatId($id)
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
    public function Get_Cat_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_cat` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Get_Product_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function Update_Product($id,$new_qty,$buy_qty)
    {
        $sql="UPDATE `tbl_product` SET `qty`='$new_qty',`purchase`='$buy_qty' WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Get_Best_Sell_Product()
    {
        $sql="SELECT * FROM `tbl_product` ORDER BY `purchase` DESC LIMIT 0,5";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Get_List_Products_By_Search_Content($search_content)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `product_name` LIKE '%{$search_content}%'";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Filter_List_Products_A_Z($cat_id)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `cat_id`='$cat_id' ORDER BY `product_name` ASC";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Filter_List_Products_Z_A($cat_id)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `cat_id`='$cat_id' ORDER BY `product_name` DESC";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Filter_List_Products_By_Price_ASC($cat_id)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `cat_id`='$cat_id' ORDER BY `price` ASC";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Filter_List_Products_By_Price_DESC($cat_id)
    {
        $sql="SELECT * FROM `tbl_product` WHERE `cat_id`='$cat_id' ORDER BY `price` DESC";
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