<?php
class CustomerModel extends Database
{
    public function Get_List_Orders()
    {
        $sql="SELECT * FROM `tbl_customer`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Get_List_Customers()
    {
        $sql="SELECT * FROM `tbl_customer`";
        $result=mysqli_query($this->conn,$sql);
        $temp=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $temp[]=$row;
        }
        return $temp;
    }
    public function Delete_Customer($id)
    {
        $sql="DELETE FROM `tbl_customer` WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Delete_Order($id)
    {
        $sql="DELETE FROM `tbl_customer` WHERE `id`='$id'";
        mysqli_query($this->conn,$sql);
    }
    public function Get_Customer_By_Id($id)
    {
        $sql="SELECT * FROM `tbl_customer` WHERE `id`='$id'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }


}

?>