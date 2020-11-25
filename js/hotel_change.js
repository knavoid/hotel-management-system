/* 누를 때마다 버튼의 색을 바꿔주는 method. 
눌려있으면 count를 1로 바꾸고, 그렇지 않으면 0으로 둔다.*/

function setBtnColor(e) {
    var target = e.target,
        count = +target.dataset.count;
     target.style.backgroundColor = count === 1 ? '#FFFFFF':"#fe5c24";
     target.style.borderColor = count === 1 ? "#2493e0":"#FFFFFF";
     target.style.color = count === 1 ? "#2493e0":"#FFFFFF";
     target.dataset.count = count === 1 ? 0 : 1;
  }

/*count가 1인것만 form을 이용해서 넘겨주도록 만들려고 한다. */

function select_room(){
    var selection = $('input[name="rooms[]"]');
    var new_selection = new Array();
    for (var i in selection) {
        var count = array[i].dataset.count;
        console.log(count);
        if (count === 1) {
            new_selection.push(array[i]);
        }
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
