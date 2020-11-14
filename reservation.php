<?php
    session_start();
            
    $db = new PDO("mysql:dbname=hotel; host=localhost; port=3306", "root", "1111");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $rooms = $_POST['rooms'];
    $dates = unserialize($_SESSION['dates']);

    // 데이터베이스에 저장




    

    echo "<script> location.href='index.html'; </script>";
?>