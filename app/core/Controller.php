<?php

    class Controller
    {
        protected function view($view)
        {
            if(file_exists("../app/views/".$view.".php")) {

                include "../app/views/".$view.".php";

            }  else {

                include "../app/views/404.php";
            }
        }

        protected function loadModel($model)
        {
            if(file_exists("../app/models/". ucwords($model)."Model.php")) {

                include "../app/models/". ucwords($model)."Model.php";
                return $model = new $model();
            } 

            return false;
        }
    }

?>