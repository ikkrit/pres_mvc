<?php

Class App
{

    private $controller = "HomeController";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        $url = $this->splitURL();
        
        if(file_exists("../app/controllers/".ucwords($url[0])."Controller".".php")) {

            $this->controller = ucwords($url[0])."Controller";
            unset($url[0]);
        }

        require '../app/controllers/'.$this->controller.".php";
        $this->controller = new $this->controller;

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                
                $this->method = strtolower($url[1]);
                unset($url[1]);
            }
        }

        $this->params = array_values($url);
        call_user_func_array([$this->controller,$this->method], $this->params);
    }

    private function splitURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
    }

}
    
?>