/* 누를 때마다 버튼의 색을 바꿔주는 method. 
눌려있으면 count를 1로 바꾸고, 그렇지 않으면 0으로 둔다.*/

function showRoom(){
    var con = document.getElementsByClassName('hotel_room');
    if (con.style.display == 'none'){
        con.style.display = 'block';
    }
    console.log(con.style.display);
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
function select_room(){
    var NOR = parseInt(document.getElementById("NOR").innerHTML); 
    // var NOR = 3;
    var selection = $('input[name="rooms[]"]:checkbox:checked');
    if ($("input[id=room]:checkbox:checked").length >= NOR) {
        var input_room = $('input[name="rooms[]"]');
        input_room.attr('disabled',true);
    }
}

function show(){
    var selection = $('input[name="rooms[]"]');
    var new_selection = new Array();
    console.log(selection);
    for (var i in selection) {
        console.log(selection[i])
        // var count = selection[i].dataset.count;
        // if (count === 1) {
        //     new_selection.push(selection[i]);
        // }
    }
}
