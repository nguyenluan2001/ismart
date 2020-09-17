<?php
class App
{
    protected $controller="Login",$action="Login",$params=[];
    function __construct()
    {
        $arr=$this->UrlProcess();

        
       
            if(file_exists("mvc/controllers/".$arr['controller'].".php"))
            {
                $this->controller=$arr['controller'];
            }
            require_once "mvc/controllers/".$this->controller.".php";
            if(isset($arr['action']))
            {
                if(method_exists($this->controller,$arr['action']))
                {
                    $this->action=$arr['action'];
                }
            }
            $this->controller=new $this->controller;
            call_user_func_array([$this->controller,$this->action],$this->params);
    
        
       

    }
    public function UrlProcess()
    {
        $controller="";
        $action="";
        // if(!isset($_SESSION['is_login']))
        // {
        //     $controller="login";
        //     $action="Login";

        // }
        // else
        // {
        //     $controller=$_GET['controller'];
        //     $action=$_GET['action'];
        // }
        $controller=!empty($_GET['controller'])?$_GET['controller']:'Login';
        $action=!empty($_GET['action'])?$_GET['action']:'Login';
       return array(
           'controller'=>$controller,
           'action'=>$action
       );
    }
}
