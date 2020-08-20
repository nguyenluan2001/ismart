<?php
class ProductsModel extends Database
{
    public function Get_List_Products_By_Cat_Id($id)
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