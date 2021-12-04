
$(document).ready(function () {

    $("#btnDNAdmin").click(function () {
       var email = $("#E-mail-ad").val();
       var matkhau = $("#matKhau-ad").val();

       if(email==""){
           $("#E-mail-ad").css('border','red solid 1px');
           return false;
       }
       if(matkhau==""){
           $("#matKhau-ad").css('border','red solid 1px');
           return false;
       }

        $.ajax({
            url: "xuLyDN.php",
            type: "POST",
            data: "email=" + email + "&&matkhau=" + matkhau,
            success: function (ketQua) {
                if (ketQua == 1)
                    $("#err-admin").html("Email không tồn tại");
                else if (ketQua == 2)
                    $("#err-admin").html("Mật khẩu không chính xác");
                else if (ketQua == 3)
                    window.location = "index.php";
            }
        });
    });

    $("#fDN-ad input").focusin(function () {
        $("#E-mail-ad").css('border','solid #CCCC 1px');
        $("#matKhau-ad").css('border','solid #CCCC 1px');
        $("#err-admin").html("");
    });

    $("#btnThemKH").click(function () {
        var ten = $("#hoten-dk").val();
        var email = $("#email-dk").val();
        var matkhau = $("#matkhau-dk").val();
        var sdt = $("#sodienthoai-dk").val();
        var diachi = $("#diachi-dk").val();

        if (ten == "") {
            $("#err-name").html("Hãy nhập vào họ và tên");
            return false;
        }
        if (email == "") {
            $("#err-email").html("Hãy nhập vào email");
            return false;
        }
        if (matkhau == "") {
            $("#err-mk").html("Hãy nhập vào mật khẩu");
            return false;
        }
        if (diachi == "") {
            $("#err-diachi").html("Hãy nhập vào địa chỉ");
            return false;
        }
        if (sdt == "") {
            $("#err-sodien").html("Hãy nhập vào số điện thoại");
            return false;
        }
        $.ajax({
            url: "themkhachhang.php",
            type: "POST",
            data: "ten=" + ten + "&&email=" + email + "&&matkhau=" + matkhau + "&&sdt=" + sdt +"&&diachi="+diachi,
            success: function (ketQuaDK) {
                if (ketQuaDK == 1)
                    $("#err-email").html("Địa chỉ email này đã được dùng");
                else if (ketQuaDK == 2){
                    $("#page-wrapper").load("khachhang.php");
                }

            }
        });
    });

    $("#formThemKH input").focusin(function () {
        $("#err-name").html("");
        $("#err-email").html("");
        $("#err-mk").html("");
        $("#err-diachi").html("");
        $("#err-sodien").html("");
    });

    $("#fsignin input").focusin(function () {
        $("#name-not").html("");
        $("#emailDK-not").html("");
        $("#passDK-not").html("");
        $("#phone-not").html("");

    });
    $('#dataTables-example').DataTable({
        responsive: true
    });


    // $('#btnThemThu').click(function () {
    //     var file_data = $('#file').prop('files')[0];
    //     //lấy ra kiểu file
    //     var type = file_data.type;
    //     //Xét kiểu file được upload
    //     var match = ["image/gif", "image/png", "image/jpg",];
    //     //kiểm tra kiểu file
    //     if (type == match[0] || type == match[1] || type == match[2]) {
    //         //khởi tạo đối tượng form data
    //         var form_data = new FormData();
    //         //thêm files vào trong form data
    //         form_data.append('file', file_data);
    //         alert(form_data);
    //         $.ajax({
    //             url: "upload.php",
    //             dataType: 'text',
    //             cache: false,
    //             contentType: false,
    //             processData: false,
    //             type: "POST",
    //             data: form_data,
    //             success: function (ketQuaDK) {
    //                 alert(ketQuaDK);
    //                 $("#hinhThu").attr('src', '../../images/thunuoi/'+ketQuaDK);
    //                 $('.status').text(ketQuaDK);
    //                 $('#file').val('');
    //
    //             }
    //         });
    //     }else {
    //     $('.status').text('Chỉ được upload file ảnh');
    //     $('#file').val('');
    //     }
    //     return false;
    // });
});

function confirmXoa(idThu) {
    if(confirm("Bạn có chắc chắn muốn xóa thú nuôi này không?")){
        location.href="?mod=xuLyXoa&&idThu="+idThu;
    }
}

function confirmXoaKH(IDUser) {
    if(confirm("Bạn có chắc chắn muốn khách hàng này không?")){
        location.href="?mod=xuLyXoa&&IDUser="+IDUser;
    }
}



