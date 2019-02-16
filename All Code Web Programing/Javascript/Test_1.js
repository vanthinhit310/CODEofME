function thongBao() {
  alert("Hello world");
}
function testConfirm() {
  confirm("Bạn thích tôi chứ hả?");
}
function testPrompt() {
  var name = prompt("Nhập tên của bạn");
  alert(name);
}
function phepTinh() {
  var a = document.getElementById("a");
  var b = document.getElementById("b");
  var pt = document.getElementById("pt");
  var valuept = pt.value;
  var resulf = document.getElementById("resulf");
  if (valuept == "+") {
    resulf.innerHTML = parseInt(a.value) + parseInt(b.value);
  }
  if (valuept == "-") {
    resulf.innerHTML = parseInt(a.value) - parseInt(b.value);
  }
  if (valuept == "*") {
    resulf.innerHTML = parseInt(a.value) * parseInt(b.value);
  }
  if (valuept == "/") {
    resulf.innerHTML = parseInt(a.value) / parseInt(b.value);
  }
  if (valuept == "mu") {
    resulf.innerHTML = Math.pow(parseInt(a.value), parseInt(b.value));
  }
  if (valuept == "lonhon") {
    if (a.value > b.value) {
      resulf.innerHTML = "Đúng rồi! Hay đó";
    } else {
      resulf.innerHTML = "Ngu như chó!";
    }
  }
  if (valuept == "nhohon") {
    if (a.value < b.value) {
      resulf.innerHTML = "Đúng rồi! Hay đó";
    } else {
      resulf.innerHTML = "Ngu như chó!";
    }
  }
  if (valuept == "==") {
    if (a.value == b.value) {
      resulf.innerHTML = "Đúng rồi! Hay đó";
    } else {
      resulf.innerHTML = "Ngu như chó!";
    }
  }
  if (valuept == "!=") {
    if (a.value != b.value) {
      resulf.innerHTML = "Đúng rồi! Hay đó";
    } else {
      resulf.innerHTML = "Ngu như chó!";
    }
  }
}

function toanTu(){
    var a = prompt("Hãy nhập số a");
    var b = prompt("Hãy nhập số b");
    var toantu = prompt("Hãy nhập phép tính");
    if(toantu == "+"){
        alert("Kết quả: " + (parseInt(a) + parseInt(b)));
    }
    if(toantu == "-"){
        alert("Kết quả: " + (parseInt(a) - parseInt(b)));
    }
    if(toantu == "*"){
        alert("Kết quả: " + (parseInt(a) * parseInt(b)));
    }
    if(toantu == "/"){
        alert("Kết quả: " + (parseInt(a) / parseInt(b)));
    }
    if(toantu == "^"){
        alert("Kết quả: " + Math.pow(parseInt(a), parseInt(b)));
    }
}
