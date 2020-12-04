function notation() {
    Swal.fire({
        icon: 'info',
        text: "Available after sign in.",
    }).then((result) => {
        if (result.isConfirmed) {
            location.href='guest_signin_page.php';
        }
    })
}