<?php

Class App
{

    public function __construct()
    {
        $url = $this->splitURL();
        
        show($url);
    }

    private function splitURL()
    {
        return explode("/", trim($_GET['url'], "/"));
    }

}
    
?>