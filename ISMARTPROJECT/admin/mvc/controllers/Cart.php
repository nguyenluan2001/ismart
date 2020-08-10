<?php
class Cart extends Controller
{
    public function Get_List_Order()
    {
        $this->view('AdminPage',[
            'pages'=>'list_order'
        ]);
    }
    public function Get_List_Customer()
    {
        $this->view('AdminPage',[
            'pages'=>'list_customer'
        ]);
    }
}

?>