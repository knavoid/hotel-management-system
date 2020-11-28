// 선택한 수만큼 객실이 선택되었는지 확인

var NOR = parseInt(document.getElementById("NOR").value);   // number of rooms

jQuery(document).ready(function($) {
    
    var booked = new Array();
    $("input[id=room]:disabled:disabled").each(function() {
        booked.push($(this).val());
    });

    $("input[id=room]:checkbox").change(function() {
        if($("input[id=room]:checkbox:checked").length == NOR) {
            $(":checkbox:not(:checked)").attr("disabled", "disabled");
        } else {
            $("input[id=room]:checkbox").each(function() {
                if (!booked.includes($(this).val())) $(this).removeAttr("disabled");
            });
        }
    });
    
    $(".select").click(function() { 
        var str = "Selected Rooms: "; 
        $(".select").each(function() {
            if ($(this).is(":checked")) str += $(this).val() + " "; 
        });
        $("#selected").text(str);
    });
});

function check() {
    if ($("input[id=room]:checkbox:checked").length != NOR) {
        if (NOR == 1) alert("Please select " + NOR + " room!");
        else alert("Please select " + NOR + " rooms!");
        return false;
    }
    return true;
}

// 선택한 기간 사이에 해당 객실에 하나라도 예약이 있으면 선택 불가능
function unavailable(sr) {
    $("input[id=room]").each(function() {
        if ($(this).val() == sr) $(this).attr("disabled", "disabled");
    });
}

// 각 선택한 객실의 인원 설정 기능
function guest_decrease1() {
    var guest = document.getElementById("guest_num1");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase1() {
    var guest = document.getElementById("guest_num1");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease2() {
    var guest = document.getElementById("guest_num2");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase2() {
    var guest = document.getElementById("guest_num2");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease3() {
    var guest = document.getElementById("guest_num3");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase3() {
    var guest = document.getElementById("guest_num3");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease4() {
    var guest = document.getElementById("guest_num4");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase4() {
    var guest = document.getElementById("guest_num4");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease5() {
    var guest = document.getElementById("guest_num5");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase5() {
    var guest = document.getElementById("guest_num5");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease6() {
    var guest = document.getElementById("guest_num6");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase6() {
    var guest = document.getElementById("guest_num6");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease7() {
    var guest = document.getElementById("guest_num7");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase7() {
    var guest = document.getElementById("guest_num7");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease8() {
    var guest = document.getElementById("guest_num8");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase8() {
    var guest = document.getElementById("guest_num8");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease9() {
    var guest = document.getElementById("guest_num9");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase9() {
    var guest = document.getElementById("guest_num9");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}

function guest_decrease10() {
    var guest = document.getElementById("guest_num10");
    var num = guest.value;
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase10() {
    var guest = document.getElementById("guest_num10");
    var num = guest.value;
    if (num < 40) num++;
    guest.value = num;
}