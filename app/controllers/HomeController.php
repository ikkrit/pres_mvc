<?php

    class HomeController
    {
        function index()
        {
            $this->view("");
        }

        function view($view)
        {
            if(file_exists("../app/views/".$view.".php")) {

                include "../app/views/".$view.".php";
            }
        }
    }

?>