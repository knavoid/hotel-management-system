<?php
    include 'init.php';

    $id = $_POST['reservation_id'];
        
    try {
        $db = connectDB();

        $db->exec("DELETE FROM reservation WHERE id = $id");
        $db->exec("DELETE FROM reservation_room WHERE reservation_id = $id");
        $db->exec("DELETE FROM reservation_date WHERE reservation_id = $id");

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    echo "<script> alert('The reservation is cancelled.'); </script>";
    echo "<script> location.href='../reservation_content.php'; </script>";
?>