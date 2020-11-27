<?php
    session_start();
    include 'init.php';

    try {
        $db = connectDB();

        $id = $_POST['id'];
        $password = $_POST['pw'];

        $rows = $db->query("SELECT * FROM customer");
        $result = $rows->fetchAll();

        for ($i = 0; $i < count($result); $i++) {
        	if ($result[$i]["id"] === $id && $result[$i]["password"] === $password) {
                $_SESSION['customer_id'] = $result[$i]["id"];
                $_SESSION['customer_name'] = $result[$i]["cname"];
                echo "<script> location.href='../index.php'; </script>";
                exit;
        	}
        }
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    echo "<script> alert('Member information does not match.'); </script>";
    echo "<script> location.href='../guest_signin_page.php'; </script>";
?>