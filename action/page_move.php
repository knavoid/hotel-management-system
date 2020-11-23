<?php
    session_start();
    if (isset($_SESSION['customer_id'])) {
        header("Location: ../main.php");
    } else {
        header("Location: ../index.html");
    }
?>