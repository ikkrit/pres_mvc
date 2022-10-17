<?php

    class HomeController extends Controller
    {
        function index()
        {
            $data['page_title'] = "Home";
           
            $this->view("home",$data);
        }

    }

?>