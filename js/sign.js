function checkInformation() {
    var id = document.getElementById("id").value;
    var pw = document.getElementById("password").value;
    var cpw = document.getElementById("password2").value;
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;

    if (id === "") {
        alert("Please enter your ID");
        document.getElementById("id").focus();
        return false;
    }

    if (pw === "") {
        alert("Please enter your password");
        document.getElementById("password").focus();
        return false;
    }

    if (cpw === "") {
        alert("Please enter your confirm password");
        document.getElementById("password2").focus();
        return false;
    }

    if (name === "") {
        alert("Please enter your name");
        document.getElementById("name").focus();
        return false;
    }
    
    if (phone === "") {
        alert("Please enter your phone number");
        document.getElementById("phone").focus();
        return false;
    }

    if (pw !== cpw) {
        alert("Passwords do not match.");
        document.getElementById("password2").focus();
        return false;
    }

    return true;
}