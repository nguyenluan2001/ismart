<?php
class Pages extends Controller
{
    public function Index()
    {
        $temp = $this->model('PagesModel');
        $list_pages = $temp->Get_List_Pages();
        $this->view('HomeView', [
            'pages' => 'Pages',
            'item' => 'list_page',
            'list_pages' => $list_pages
        ]);
    }
    public function Add_Page()
    {
        if (!isset($_POST['btn_add_page'])) {
            $this->view('HomeView', [
                'pages' => 'Pages',
                'item' => 'add_page'
            ]);
        } else {
            $page_title = $_POST['page_title'];
            $slug = $_POST['slug'];
            $page_content = $_POST['page_content'];
            $temp = $this->model('PagesModel');
            $temp->Add_Page($page_title, $slug, $page_content);
            header('location:?controller=Pages&action=Index');
        }
    }
    public function Update_Page()
    {
        $id = (int)$_GET['id'];
        $temp = $this->model('PagesModel');
        if (!isset($_POST['btn_update_page'])) {
            $page = $temp->Get_Page_By_Id($id);
            $this->view('HomeView', [
                'pages' => 'Pages',
                'item' => 'update_page',
                'page' => $page
            ]);
        } else {
            $page_title = $_POST['page_title'];
            $slug = $_POST['slug'];
            $page_content = $_POST['page_content'];
            $page = $temp->Update_Page($id, $page_title, $slug, $page_content);
            unset($_POST['btn_update_page']);
            header("location:?controller=Pages&action=Update_Page&id={$id}");
        }
    }
    public function Delete_Page()
    {
        $id = (int)$_GET['id'];
        $temp = $this->model('PagesModel');
        $temp->Delete_Page($id);
        header('location:?controller=Pages&action=Index');
    }
}
