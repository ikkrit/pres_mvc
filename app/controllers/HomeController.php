<?php

    class HomeController extends Controller
    {
        function index()
        {
            $data['page_title'] = "Home";
           
            $this->view("vaya_mvc/index",$data);
        }

    }

?>