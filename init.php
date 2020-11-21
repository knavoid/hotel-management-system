<?php
    function connectDB(){
        $db = new PDO("mysql:dbname=hotel; host=localhost; port=3306", "root", "root");
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
?>