<?php
    session_start();
    include 'init.php';

    try {
        $db = connectDB();

        $id = $_POST['id'];
        $password = $db->quote($_POST['pw']);
        $name = $db->quote($_POST['name']);
        $birth = $db->quote($_POST['birth']);
        $phone = $db->quote($_POST['phone']);

        $rows = $db->query("SELECT * FROM customer");
        $result = $rows->fetchAll();
        
        for ($i = 0; $i < count($result); $i++) {
            if ($result[$i]["id"] === $id) {
                echo "<script> alert('The ID already exists. Please try a different ID.'); </script>";
                echo "<script> location.href='guest_signup_page.php'; </script>";
                exit;
            }
        }

        $id = $db->quote($id);
        $db->exec("INSERT INTO customer VALUES ($id, $password, $name, $phone)");
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    echo "<script> alert('Sign up completed!'); </script>";
    echo "<script> location.href='guest_signin_page.php'; </script>";
?>