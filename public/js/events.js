// JavaScript Document

// Hiện form đăng nhập tài khoản
var modal = document.getElementById('dangnhap-dialog');
var btnDN = document.getElementById("dangnhap");
var btnDK = document.getElementById("dangky");
var nutClose = document.getElementsByClassName("close")[0]; 
var dn = document.getElementById("dnhap");
var dk = document.getElementById("dky");
var modalPass = document.getElementById("layMK-dialog");
var btnLayMK = document.getElementById("layPass");
btnDN.onclick = function() {
    modal.style.display = "block";
	dn.style.display = "block";
	dk.style.display = "none";
	document.getElementById("tabDangNhap").style.borderBottom = "solid 4px #FFCC33";
	document.getElementById("tabDangKy").style.borderBottom = "none";
	document.getElementById("nhanDangKy").style.display = "none";
	document.getElementById("nhanDangNhap").style.display = "block";
}
btnDK.onclick = function() {
    modal.style.display = "block";
	dn.style.display = "none";
	dk.style.display = "block";
	document.getElementById("tabDangKy").style.borderBottom = "solid 4px #FFCC33";
	document.getElementById("tabDangNhap").style.borderBottom = "none";
	document.getElementById("nhanDangKy").style.display = "block";
	document.getElementById("nhanDangNhap").style.display = "none";
}



window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modalPass) {
		modalPass.style.display="none";
	}
}

function showDangNhap(){
	document.getElementById("dnhap").style.display = "block";
	document.getElementById("dky").style.display = "none";
	document.getElementById("tabDangNhap").style.borderBottom = "solid 4px #FFCC33";
	document.getElementById("tabDangKy").style.borderBottom = "none";
	document.getElementById("nhanDangKy").style.display = "none";
	document.getElementById("nhanDangNhap").style.display = "block";
	}
function showDangKy(){
	document.getElementById("dnhap").style.display = "none";
	document.getElementById("dky").style.display = "block";
	document.getElementById("tabDangNhap").style.borderBottom = "none";
	document.getElementById("tabDangKy").style.borderBottom = "solid 4px #FFCC33";
	document.getElementById("nhanDangKy").style.display = "block";
	document.getElementById("nhanDangNhap").style.display = "none";
	}


//Hiển thị form lấy lại mật khẩu:

btnLayMK.onclick = function(){
	modalPass.style.display = "block";
	modal.style.display = "none";
}

nutClose.onclick = function() {
    modal.style.display = "none";
	
}
var nutClose2 = document.getElementsByClassName("close")[1];
nutClose2.onclick = function(){
	modalPass.style.display = "none";
}

// Khi kéo xuống 100px từ đầu trang , sẽ hiện thị nút
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("goHome").style.display = "block";
    } else {
        document.getElementById("goHome").style.display = "none";
    }
}

// Khi click vào nút, sẽ cuộn về đầu trang
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

//Hàm xử lý đăng nhập
function clickon(){
	document.getElementById('error-email').style.display = "none";
	document.getElementById('email').style.borderColor ="#999";
	document.getElementById('error-pass').style.display = "none";
	document.getElementById('pass').style.borderColor ="#999";
	
}
function checklogin(){
	/*if(document.flogin.email.value==''){
		document.getElementById('error-email').style.display = "block";
		document.getElementById('email').style.borderColor ="red";
	    return false;
	}*/
	/*if(document.flogin.pass.value==''){
		document.getElementById('error-pass').style.display = "block";
		document.getElementById('pass').style.borderColor ="red";
		return false;
	}
	return true;*/
}
function checkTakePass(){
	if(document.getElementById('email-layMK').value==''){
		document.getElementById('error-email-tpass').style.display = "block";
		document.getElementById('email-layMK').style.borderColor ="red";
	    return false;
	}
	return true;
}

function checksignin(){
	if(document.fsignin.name.value==''){
		document.getElementById('error-name').style.display = "block";
		document.getElementById('name').style.borderColor ="red";
	    return false;
	}
	if(document.getElementById('email-dk').value==''){
		document.getElementById('error-email-dk').style.display = "block";
		document.getElementById('email-dk').style.borderColor ="red";
	    return false;
	}
	if(document.getElementById('pass-dk').value==''){
		document.getElementById('error-pass-dk').style.display = "block";
		document.getElementById('pass-dk').style.borderColor ="red";
	    return false;
	}
	return true;
}



$(document).ready(function() {
	$("#xoaSPYT").click(function () {
		var idThu = $(this).attr("data-id");

        $.ajax({
            url: "xuLyYeuThich.php",
            type: "POST",
            data: "idThuXoa=" + idThu,
            success: function (ketQuaDK) {
            	alert(ketQuaDK);
                if (ketQuaDK == 1) {
                    $("#spingio").load('sanphamingio.php');
                }
            }
        });
    });
});


  