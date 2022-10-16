<?php

    class Database
    {
        public function db_connect()
        {
            try {

                $string = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";";
                $db = new PDO($string,DB_USER,DB_PASS);

            } catch(PDOException $e) {

                die($e->getMessage());
            }
        }

        public function read($query, $data = [])
        {
            $DB = $this->db_connect();
		    $stm = $DB->prepare($query);
            $check = $stm->execute($data);
        }

        public function write($query, $date = [])
        {
            
        }
    }

?>