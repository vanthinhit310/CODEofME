$(document).ready(function () {
    $('#btnRe').on('click', function () {
        $.ajax({
            url: '/controller/processing/register',
            data:{
                fullname: $('#fullname').val(),
                email:$('#email').val(),
                password: $('#password').val()
            },
            method: 'POST',
            success:function (data) {
                if (data.result ==='success'){
                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Aww yiss!",
                    });
                }
            }
        })
    })
});
