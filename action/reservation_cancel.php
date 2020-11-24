<?php
    include 'init.php';

    $code = $_POST['reservation_code'];
        
    try {
        $db = connectDB();

        $db->exec("DELETE FROM reservation WHERE code = $code");
        $db->exec("DELETE FROM reservation_log WHERE code = $code");

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    echo "<script> alert('The reservation is cancelled.'); </script>";
    echo "<script> location.href='../reservation_content.php'; </script>";
?>