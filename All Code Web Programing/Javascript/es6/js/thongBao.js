
var button = document.getElementById('btn');
var button2 = document.getElementById('btn2');
var button3 = document.getElementById('btn3');
var button4 = document.getElementById('btn4');
button.addEventListener('click', function() {
alert('Xin chào');
});
button2.addEventListener('click', function() {
    var num =parseInt(prompt('Mời bạn nhập số cần kiểm tra?'));
   if(num % 2 ==0){
       document.write(num + ' là số chẵn');
   } else{
       document.write(num + ' là số lẻ');
   }
});
function do_alert(){
    alert('Mai Thanh ơi anh yêu em');
}
function maxtrix(a,b){
    for(var i=0;i<=a;i++){
        for(var j=0; j<=b;j++){
            document.write('[('+i+')]'+'----'+'[('+j+')]');
        }
    }
    document.write('<br/>');
}
function thongBao() {
    var button = document.getElementById('btn');
    button.addEventListener('click', function name(params) {
        alert('Xin chào');
    });
}