<?php
class Cart extends Controller
{
    public function Show()
    {
        $this->view('HomeView', [
            'pages' => 'cart'
        ]);
    }
    public function Check_Out()
    {
        if (!isset($_POST['btn-check-out'])) {
            $this->view('HomeView', [
                'pages' => 'checkout',

            ]);
        } else {
            $data = array(
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'note' => $_POST['note'],
                'payment_method' => $_POST['payment-method'],
                'list_products' => $_SESSION['cart']['buy'],
                'info_cart'=>$_SESSION['cart']['info']
            );
            $temp = $this->model('CartModel');
            $temp->Add_Bill($data);
            require "lib/PHPMAILER/email.php";
            $content = "<table width='100%' border='1' cellpadding='2' cellspacing='2'>
            <thead>
                <tr>
                    <th>
                        Tên sản phẩm
                    </th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>";
            foreach($data['list_products'] as $item){
                $item['price']=number_format($item['price']);
                $content.=" <tr>
                <td>{$item['product_desc']}</td>
                <td>{$item['price']}</td>
                </tr>";
               
            };
               
                
            $content.="</tbody>
            <tfoot>
                <tr>
                    <td colspan='2'>Tổng tiền: {$_SESSION['cart']['info']['total']}</td>
                </tr>
            </tfoot>
        </table>";
            sendMail($data['email'], $data['fullname'], "Thông tin đơn hàng", $content, $option = array());
            header("location:?controller=Home&action=Show");
        }
    }
    public function UpdateCart()
    {
        $num_order = $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
    public function AddCart()
    {
        $id = (int)$_GET['id'];
        $temp = $this->model('ProductsModel');
        $product = $temp->Get_Product_By_Id($id);
        $qty = 1;
        if (!empty($_SESSION['cart']['buy']) && isset($_SESSION['cart']['buy'][$id])) {
            $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
        }
        $_SESSION['cart']['buy'][$id] = array(
            'id' => $product['id'],
            'product_desc' => $product['product_desc'],
            'product_thumb' => $product['product_thumb'],
            'price' => $product['price'],
            'cat_id' => $product['cat_id'],
            'qty' => $qty,
            'sub_total' => $product['price'] * $qty

        );
        $this->UpdateCart();
        header("location:?controller=Cart&action=Show");
    }
    public function Delete()
    {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            unset($_SESSION['cart']['buy'][$id]);
        } else {
            foreach ($_SESSION['cart']['buy'] as $key => $value) {
                unset($_SESSION['cart']['buy'][$key]);
            }
        }
        $this->UpdateCart();
        header("location:?controller=Cart&action=Show");
    }
}


?>

