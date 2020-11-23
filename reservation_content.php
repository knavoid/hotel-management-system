<?php
    session_start();
    if (!isset($_SESSION['customer_id'])) {
        echo "<script> alert('Available after sign in.'); </script>";
        echo "<script> location.href='guest_signin_page.php'; </script>";
    }
?>