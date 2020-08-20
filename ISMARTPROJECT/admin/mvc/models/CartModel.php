<?php
class CartModel extends Database
{
    public function Get_List_Customer()
    {
        $sql = "SELECT `id`, `fullname`, `email`, `address`, `phone`,`num_order`,`total`  FROM `tbl_bills` WHERE 1";
        $result = mysqli_query($this->conn, $sql);
        $temp = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $temp[] = $row;
        }
        return $temp;
    }
    public function Get_List_Products($id)
    {
        $sql = "SELECT * FROM `tbl_bills_detail` WHERE `belong_to`='$id'";
        $result = mysqli_query($this->conn, $sql);
        $temp = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $temp[] = $row;
        }
        return $temp;
    }
    public function Get_List_Order()
    {
    }
}
