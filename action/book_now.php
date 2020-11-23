<?php 
    session_start();
    if (isset($_SESSION['customer_id'])) {
        header("Location: ../main.php");
    } else {
        header("Location: ../guest_signin_page.php");
    }
?>