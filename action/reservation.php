<?php
    session_start();
    include 'init.php';

    $customer = $_SESSION['customer_id'];
    $dates = unserialize($_SESSION['dates']);
    $guests = $_SESSION['guests'];
    $rooms = $_POST['rooms'];
    $cid = $_POST['cid'];
    $cod = $_POST['cod'];
    
    
    try {
        $db = connectDB();
        
        $customer = $db->quote($customer);
        $cid = $db->quote($cid);
        $cod = $db->quote($cod);

        for ($i = 0; $i < count($rooms); $i++) { 
            
            $db->exec("INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ($customer, $rooms[$i], $guests, $cid, $cod)");
            
            $rows = $db->query("SELECT * FROM reservation");
            $result = $rows->fetchAll();
            $code = $result[count($result) - 1]["code"];

            for ($j = 0; $j < count($dates); $j++) { 
                $date = $db->quote($dates[$j]);
                $db->exec("INSERT INTO reservation_log VALUES($rooms[$i], $date, $code)");
            }
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    echo "<script> alert('Your reservation has been received!'); </script>";
    echo "<script> location.href='../index.php'; </script>";
?>