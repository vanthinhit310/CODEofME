function printOneToOneHundred() {
    for (var i = 0; i <= 100; i++) {
        document.write(i + '<br/>');
    }
}

function oneHundredToZero() {
    for (var i = 100; i >= 0; i--) {
        document.write('[' + i + ']' + '<br/>');
    }
}

function modThree() {
    for (var i = 0; i <= 100; i++) {
        if (i % 3 == 0) {
            document.write(i + ' là số chia hết cho 3' + '<br/>')
        }
    }
}

function printOTOH() {
    var i = 1;
    while (i <= 100) {
        document.write('[' + i + ']' + '<br/>');
        i++;
    }
}

function soChan() {
    var i = 0;
    while (i <= 100) {
        if (i % 2 == 0) {
            document.write(i + ' là số chẵn' + '<br/>');
        }
        i++;
    }
}

function testBreak() {
    for (var i = 0; i <= 10; i++) {
        document.write('[' + i + ']');
        if (i == 5) {
            document.write('Vòng lặp bị dừng');
            break;
        }
    }
}

function testContinue() {
    var i = 1;
    while (i <= 1000) {
        if (i % 9 != 0) {
            i++;
            continue;
        }
        document.write('[' + i + ']');
        i++;
    }
}

function tinhtong() {
    var a = document.getElementById('a');
    var b = document.getElementById('b');
    var kq = document.getElementById('result');
    var total = parseInt(a.value) + parseInt(b.value);
    if (!isNaN(total)) {
        kq.value = total;
    }
}

function random() {
    var pt = document.getElementById('pt');
    var rs = document.getElementById('rs');
    var a = Math.floor((Math.random() * 10) + 1);
    var b = Math.floor((Math.random() * 10) + 1);
    var arr = Array('+', '*');
    var pheptinh = arr[Math.floor(Math.random() * arr.length)];
    var kq = 0;
    if (pheptinh === '+') {
        kq = a + b;
    }
    if (pheptinh === '*') {
        kq = a * b;
    }
    pt.value = a + ' ' + pheptinh + ' ' + b;
    rs.value = kq;
}

function check() {
    var kq = document.getElementById('rs');
    var kqn = document.getElementById('kqn');
    var button = document.getElementById('btn');
    if (kq.value === kqn.value) {
        button.style.display = 'block';
    }
}
function addSinhVien() {
    var ten = $('#ten').val();
    var lop = $('#lop').val();
    var data = $('#data');
    data.append('<tr id="tr'+ten+'">' +
        '<td>'+ten+'</td>' +
        '<td>'+lop+'</td>' +
        '<td>'+'<button id="'+ten+'" onclick="xoaSinhVien(this)" class="btn btn-success">Xóa</button>'+'</td>' +
        '</tr>');
}
function xoaSinhVien(e) {
    var id = e.id;
    $('#tr'+id).hide();
}
function muaHang() {
    var mathang = $('#items option:selected');
    $('#bought').append(mathang);
}
function xoaGioHang() {
    var mathang = $('#bought option:selected');
    $('#items').append(mathang);
}
function chonSanPham() {
    $('#items')[0].length = 0;
    var mathang = $('#sp option:selected').val();
    if (mathang ==='g'){
    $('#items').append('<option class="form-control" value="giày">Nike</option>'+
        '<option class="form-control" value="giày">Adidas</option>'+
    '<option class="form-control" value="giày">Reebook</option>');
    }
    if (mathang ==='b'){
        $('#items').append('<option class="form-control" value="giày">Bánh Quy</option>'+
            '<option class="form-control" value="giày">Bánh Tráng</option>'+
            '<option class="form-control" value="giày">Bánh Oreo</option>');
    }
    if (mathang ==='m'){
        $('#items').append('<option class="form-control" value="giày">Hảo Hảo</option>'+
            '<option class="form-control" value="giày">Ba Miền</option>'+
            '<option class="form-control" value="giày">Moderm</option>');
    }
    if (mathang ==='ht'){
        $('#items').append('<option class="form-control" value="giày">Sườn</option>'+
            '<option class="form-control" value="giày">Giò</option>'+
            '<option class="form-control" value="giày">Bò Viên</option>');
    }
}
