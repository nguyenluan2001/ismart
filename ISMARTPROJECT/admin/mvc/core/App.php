<?php
class App
{
    protected $controller = "Login", $action = "LoginAction", $params = [];
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
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    public function UrlProcess()
    {
        $controller = "";
        $action = "";
        if (!isset($_SESSION['is_login']) && !isset($_GET['controller'])) {
            $controller = "Login";
            $action = "LoginAction";
        } else if (!isset($_SESSION['is_login']) && ($_GET['controller'] == 'Register' || $_GET['controller'] == 'ResetPass')) {
            $controller = $_GET['controller'];
            $action =  $_GET['action'];
        } 
        else if(isset($_SESSION['is_login']) && isset($_GET['controller'])&&isset($_GET['action']))
        {

        
            $controller = $_GET['controller'];
            $action =  $_GET['action'];
        }
        return array(
            'controller' => $controller,
            'action' => $action
        );
    }
}
