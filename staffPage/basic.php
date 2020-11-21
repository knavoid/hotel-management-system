<?php
    session_start();
    
    $db = new PDO("mysql:dbname=HMS; host=localhost; port=3306", "root", "a12345");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $staff_id = $_SESSION['staff_id'];
    $q_staff_id = $db->quote($staff_id);

    $stmt_s = $db->query("SELECT attendance FROM staff_info WHERE id = " .$q_staff_id);
    $result_s = $stmt_s->fetchAll();

?>