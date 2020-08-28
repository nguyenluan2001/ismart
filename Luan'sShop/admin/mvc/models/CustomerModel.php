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


}

?>