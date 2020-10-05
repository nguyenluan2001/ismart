<?php
class App
{
    // protected $controller="Post",$action="List_Post",$params=[];
    protected $controller="", $action="";

    function __construct()
    {
        $arr = $this->UrlProcess();
        if (file_exists("mvc/controllers/" . $arr['controller'] . ".php")) {
            $this->controller = $arr['controller'];
        }
        require_once "mvc/controllers/" . $this->controller . ".php";
        if (isset($arr['action'])) {
            if (method_exists($this->controller, $arr['action'])) {
                $this->action = $arr['action'];
            }
        }
       
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->action],[]);
       
    }
    public function UrlProcess()
    {

        // if (!isset($_SESSION['is_login'])) {
        //     $controller =  "Login";
        //     $action =  "loginAction";
        // } else {
        //     $controller = $_GET['controller'];
        //     $action = $_GET['action'];
        // }
        if (!isset($_COOKIE['user'])) {
            $controller =  "Login";
            $action =  "LoginAction";
        } else {
            if (!isset($_GET['controller'])) {
                $controller ="Post";
                $action = "List_Post";
            }
            else
            {
                $controller = $_GET['controller'];
                 $action = $_GET['action'];
            }
        }
     


        return array(
            'controller' => $controller,
            'action' => $action
        );
    }
}
