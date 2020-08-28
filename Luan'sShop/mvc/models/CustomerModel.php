<?php
class CustomerModel extends Database
{
    public function Add_Customer($fullname,$email,$address,$phone,$note,$payment_method,$num_order,$total)
    {
        $sql="INSERT INTO `tbl_customer`(`fullname`, `email`, `address`, `phone`, `note`, `payment-method`,`num_order`,`total`) VALUES ('$fullname','$email','$address','$phone','$note','$payment_method','$num_order','$total')";
        mysqli_query($this->conn,$sql);
    }
    public function Get_Customer($fullname,$email,$address,$phone)
    {
        $sql="SELECT * FROM `tbl_customer` WHERE `fullname`='$fullname' AND `email`='$email' AND `address`='$address' AND `phone`='$phone'";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
       
    }
}
?>