// 객실 수와 투숙객의 수 선택

function room_decrease() {
    var rooms = document.getElementById("rooms_num");
    var num = rooms.value;
    if (num > 1) num--;
    rooms.value = num;
}

function room_increase() {
    var rooms = document.getElementById("rooms_num");
    var num = rooms.value;
    if (num < 10) num++;
    rooms.value = num;
}

function guest_decrease() {
    var guest = document.getElementById("guest_num");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase() {
    var guest = document.getElementById("guest_num");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function isValidDate() {
    var cid = document.reservation.check_in_date;
    var cod = document.reservation.check_out_date;
    
    var cid_array = cid.value.split('/');
    var cod_array = cod.value.split('/');

    // check in 날짜를 오늘 이후만 가능하도록 설정
    if (parseInt(cid_array[2]) < yyyy) {
        alert("Check-in dates can only be selected after today.")
        cid.focus();
        return false;
    }
    else if (parseInt(cid_array[0]) < mm) {
        alert("Check-in dates can only be selected after today.")
        cid.focus();
        return false;
    }
    else if (parseInt(cid_array[0]) == mm && parseInt(cid_array[1]) <= dd){
        alert("Check-in dates can only be selected after today.")
        cid.focus();
        return false;
    }

    // check out 날짜는 check in 날짜 이후만 가능하도록 설정
    if (parseInt(cod_array[2]) < parseInt(cid_array[2])) {
        alert("Check-out dates can only be selected after check-in dates.")
        cod.focus();
        return false;
    }
    else if (parseInt(cod_array[0]) < parseInt(cid_array[0])) {
        alert("Check-out dates can only be selected after check-in dates.")
        cod.focus();
        return false;
    }
    else if (parseInt(cod_array[0]) == parseInt(cid_array[0]) && parseInt(cod_array[1]) <= parseInt(cid_array[1])) {
        alert("Check-out dates can only be selected after check-in dates.")
        cod.focus();
        return false;
    }

    return true;
}