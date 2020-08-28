<?php
class App
{
    protected $controller = "Home", $action = "Index", $params = [];
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
       $controller=!empty($_GET['controller'])?$_GET['controller']:"Home";
       $action=!empty($_GET['action'])?$_GET['action']:"Show";
        return array(
            'controller' => $controller,
            'action' => $action
        );
    }
}
