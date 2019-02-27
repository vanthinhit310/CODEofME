// vaididate email
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}





$(document).ready(function () {


    // validate Regisrer From
    $('#submit').on('click', function () {
        var name = $('#name').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();

        if (name ==='' || name === undefined){
            $('#error').html('Vui lòng nhập họ tên.');
            $('#name').css('border', 'solid 1px red');
            return false;
        }
        if (username ==='' || username === undefined){
            $('#error').html('Vui lòng nhập tên tài khoản.');
            $('#username').css('border', 'solid 1px red');
            return false;
        }
        if (email ==='' || email === undefined){
            $('#error').html('Vui lòng nhập email.');
            $('#email').css('border', 'solid 1px red');
            return false;
        }
        if (!validateEmail(email)){
            $('#error').html('Email không đúng định dạng.');
            $('#email').css('border', 'solid 1px red');
            return false;
        }
        if (password ==='' || password === undefined){
            $('#error').html('Vui lòng nhập mật khẩu.');
            $('#password').css('border', 'solid 1px red');
            return false;
        }
        if (password.length < 8){
            $('#error').html('Mật khẩu phải có ít nhất 8 kí tự');
            $('#email').css('border', 'solid 1px red');
            return false;
        }
        return true;
    })
    $('#reg').on('keyup', function () {
        var name = $('#name').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();

        if (name !==''){
            $('#error').html('');
            $('#name').css('border', 'solid 1px green');
        }
        if (username !==''){
            $('#error').html('');
            $('#username').css('border', 'solid 1px green');
        }
        if (email !==''){
            $('#error').html('');
            $('#email').css('border', 'solid 1px green');
        }
        if (validateEmail(email)){
            $('#error').html('');
            $('#email').css('border', 'solid 1px green');
        }
        if (password !== ''){
            $('#error').html('')
            $('#password').css('border', 'solid 1px green');
        }
        if (password.length >= 8){
            $('#error').html('');
            $('#email').css('border', 'solid 1px green');
        }
        return true;
    });




    // validate Login Form

});
