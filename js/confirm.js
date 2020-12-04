function confirm_cancel(){
    if (confirm("Are you sure you want to cancel your reservation?") === true) {
        return true;
    } else {
        return false;
    }
}

function confirm_reservation(){
    if (confirm("Are you sure you want to confirm your reservation by paying?") === true) {
        return true;
    } else {
        return false;
    }
}