// định dạng tiền tệ
function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ",") {
    try {
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

        const negativeSign = amount < 0 ? "-" : "";

        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;

        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
        console.log(e)
    }
}

//Hàm chuyển chuỗi tiền thành số
function aaa(str) {
    var n = '';
    for (var i = 0; i < str.length; i++) {
        if (str[i] !== ',' && str[i] !== 'đ' && str[i] !== ' ') {
            n += str[i];
        }
    }
    return n.trim();
}

$(document).ready(function () {
    //Cập nhật số lượng
    $('.qtt').on('keyup', function () {
        var id = this.id;
        var soluong = $('#' + id).val();
        if ($('#' + id).val() === 0) {
            $('#' + id).htm1(1);
        }
        var gia = $('#gia' + id).html();
        var total = parseInt(soluong) * parseInt(aaa(gia));
        $('#total' + id).html(formatMoney(total) + ' đ');

        $.ajax({
            url: '/controller/template/cart/updateQuantity',
            data: {
                id: id,
                q: parseInt(soluong)
            },
            method: 'GET',
            success: function (data) {
                if (data.data === 'success') {
                    $('#totalCount').html(data.totalCount);
                    $('#totalall').html(data.alltotal);
                }
            }
        })
    });

    //Cập nhật số lượng onclick
    $('.qtt').on('click', function () {
        var id = this.id;
        var soluong = $('#' + id).val();
        var gia = $('#gia' + id).html();
        var total = parseInt(soluong) * parseInt(aaa(gia));
        $('#total' + id).html(formatMoney(total) + ' đ');

        $.ajax({
            url: '/controller/template/cart/updateQuantity',
            data: {
                id: id,
                q: parseInt(soluong)
            },
            method: 'GET',
            success: function (data) {
                if (data.data === 'success') {
                    $('#totalCount').html(data.totalCount);
                    $('#totalall').html(formatMoney(data.alltotal));
                }
            }
        })
    });


//Mua hàng
    $('.muahang').on('click', function () {
        var id = this.id;
        $.ajax({
            url: '/controller/template/cart/addProductToCart',
            data: {
                id: id
            },
            method: 'GET',
            success: function (data) {
                if (data.data === 'success') {
                    $('#totalCount').html(data.total);
                    $('#totalall').html(formatMoney(data.alltotal));
                }
            }
        });
    });


//Xóa sản phẩm sử dụng ajax
    $('.btnRemove').on('click', function () {
        var xn = confirm('Bạn muốn xóa sản phẩm này?');
        var id = this.id;
        if (xn) {
            $.ajax({
                url: '/controller/template/cart/deleteProduct',
                data: {
                    id: id
                },
                method: 'GET',
                success: function (data) {
                    if (data.data === 'success') {
                        //Xuất số lượng hàng sau khi xóa ra ngoài màn hình
                        $('#totalCount').html(data.count);
                        console.log(data.at);
                        $('#totalall').html(formatMoney(data.at));
                        $('#items').html(data.count);
                        //ẩn sản phẩm đi sau khi đã thực hiện thao tác xóa
                        $('#dong' + id).remove();
                        if (data.length === 0) {
                            $('#thongbao').html('Giỏ hàng trống - Mời bạn tiếp tục mua hàng');
                        }
                    }
                }
            })
        } else {

        }
    })
});
