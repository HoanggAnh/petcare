<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/log.css" rel="stylesheet" type="text/css"/>
    <title>.:PetShop:.</title>
</head>

<body bgcolor="#F7F7F7">
<div id="container">
    <button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png"/></button>
    <div id="header">
        <?php include("header.php") ?>
        <div style="clear: both"></div>
    </div>
    <!-------Phần menu-->
    <?php include("menu.php") ?>
    <!-----------content----------------->
    <div class="page-gt">
        <p><span style="font-family: Tahoma, Geneva, sans-serif;color: #FFFFFF">&nbsp;&nbsp;GIỚI THIỆU</span></p>
        <hr/>

        <div align="center"><img src="images/icon/logo.png" alt="logo"/></div>
        <div class="khung-gt"><img src="Hình/logogioithieu.jpg" width="350" height="265" style="float:left"/>
            <div class="conten-gt">Chào mừng bạn đã đến với Petshop!<br/>
                Petshop chuyên cung cấp các loại thú cưng. Bên cạnh đó, nếu bạn có nhu cầu và thắc mắc về việc chăm sóc,
                nuôi dưỡng , thanh lý các bé thú cưng có thể gửi thư về email hay để lại lời nhắn trực tiếp trên
                Petshop, chúng tôi sẽ hồi đáp những thắc mắc của bạn sớm nhất có thể. Petshop đảm bảo dịch vụ mà chúng
                tôi cung cấp cho bạn là có uy tín, nếu có sai sót hay không hài lòng trong quá trình giao dịch, Petshop
                luôn sẵn sàng đón nhận mọi góp ý của bạn.
                Hãy liên hệ với Petshop để có sản phẩm ưng ý và hài lòng !
            </div>
        </div>
    </div>
    <div style="clear:both"></div>

    <!--Đây là phần cuối-->
    <div class="Footer">
        <?php include("footer.php")?>
    </div>

</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>
</html>
