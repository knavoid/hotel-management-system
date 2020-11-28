/* 뒤로 가기 버튼을 눌러도 checked와 hidden 상태가 유지되도록 했다.*/
$(window).load(function() {
    var selection = $('input[name="rooms[]"]:checkbox:checked');
    // select_room();  이미 예약된 객실 disabled 속성이 나타나지 않아 잠시 주석처리 했습니다.
});


function showRoom(){
    var con = document.getElementsByClassName('hotel_room');
    if (con.style.display == 'none'){
        con.style.display = 'block';
    }
}


function setBtnColor(e) {
    var target = e.target,
        count = +target.dataset.count;
     target.style.backgroundColor = count === 1 ? '#FFFFFF':"#fe5c24";
     target.style.borderColor = count === 1 ? "#2493e0":"#FFFFFF";
     target.style.color = count === 1 ? "#2493e0":"#FFFFFF";
     target.dataset.count = count === 1 ? 0 : 1;
  }

/*만약 room의 갯수가 초과하면, 더 이상 버튼을 누를 수 없게끔 만든다. */
// function select_room(){
//     var NOR = parseInt(document.getElementById("NOR").innerHTML); 
//     //var NOR = 3;
//     var input_room = $('input[name="rooms[]"]');
//     var selection = $('input[name="rooms[]"]:checkbox:checked');
//     var button = $('.hotel_room input:submit');
//     if (selection.length >= NOR) {
//         input_room.attr('disabled',true);
//         selection.attr('disabled',false);
//         button.fadeIn("slow");
//     }
//     else{
//         /*활성화 된 버튼을 취소하면 다른 버튼을 누를 수 있게 만들어준다. */
//         input_room.attr('disabled',false);
//         // button.addClass('fadeOut');
//         button.fadeOut("slow");
//     }
// }

// function show(){
//     var selection = $('input[name="rooms[]"]');
//     var new_selection = new Array();
//     console.log(selection);
//     for (var i in selection) {
//         console.log(selection[i])
//         // var count = selection[i].dataset.count;
//         // if (count === 1) {
//         //     new_selection.push(selection[i]);
//         // }
//     }
// }
