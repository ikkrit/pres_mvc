<?php

    class AboutController extends Controller
    {
        function index()
        {
            $data['page_title'] = "About";

            $this->view("about");
        }

    }

?>