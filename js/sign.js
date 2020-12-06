function checkInformation() {
    var id = document.getElementById("id").value;
    var pw = document.getElementById("password").value;
    var cpw = document.getElementById("password2").value;
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;

    if (id === "") {
        Swal.fire({
            icon: 'info',
            text: "Please enter your ID.",
        });
        document.getElementById("id").focus();
        return false;
    }

    if (pw === "") {
        Swal.fire({
            icon: 'info',
            text: "Please enter your password.",
        });
        document.getElementById("password").focus();
        return false;
    }

    if (cpw === "") {
        Swal.fire({
            icon: 'info',
            text: "Please enter your confirm password.",
        });
        document.getElementById("password2").focus();
        return false;
    }

    if (name === "") {
        Swal.fire({
            icon: 'info',
            text: "Please enter your name.",
        });
        document.getElementById("name").focus();
        return false;
    }
    
    if (phone === "") {
        Swal.fire({
            icon: 'info',
            text: "Please enter your phone number.",
        });
        document.getElementById("phone").focus();
        return false;
    }

    if (pw !== cpw) {
        Swal.fire({
            icon: 'info',
            text: "Passwords do not match.",
        });
        document.getElementById("password2").focus();
        return false;
    }

    return true;
}