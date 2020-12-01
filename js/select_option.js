// setting check in date & check out date
var today = new Date();
var mm = today.getMonth() + 1;
var dd = today.getDate();
var dd1 = dd + 1;
var dd2 = dd + 2;
var yyyy = today.getFullYear();
if (mm < 10) mm = '0' + mm;
if (dd1 < 10) dd1 = '0' + dd1;
if (dd2 < 10) dd2 = '0' + dd2;
var cid = mm + '/' + dd1 + '/' + yyyy;
var cod = mm + '/' + dd2 + '/' + yyyy;
document.getElementById("datepicker_1").value = cid;
document.getElementById("datepicker_2").value = cod;
