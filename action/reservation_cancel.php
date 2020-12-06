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
?>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    Swal.fire({
        text: "Are you sure you want to cancel your reservation?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'OK'
    }).then((result) => {
        Swal.fire({
            icon: 'info',
            text: "This reservation is cancelled!",
        }).then((result) => {
            if (result.isConfirmed) {
                location.href='../reservation_content.php';
            }
        });
    })
</script>
</body> 