<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css" />
    <link href="public/css/log.css" rel="stylesheet" type="text/css" />
    <title>.:PetShop:.</title>
</head>

<body bgcolor="#CCCCCC">

<div id="container">
    <div id="header">
        <?php include("header.php"); ?>
        <div style="clear:both"></div>
    </div>

    <div >
        <div class="menuBox">
            <ul class="menuKH">
                <a href="?mod=thongtinUser" style="color: #080808"><li id="thongtinKH"> Thông tin khách hàng</li></a>
                <a href="?mod=thongBao" style="color: #080808"> <li id="thongBaoKH">Thông báo của tôi</li></a>
                <a href="?mod=donHang" style="color: #080808"> <li id="donHangCT">Đơn hàng của tôi</li></a>

            </ul>
        </div>
        <div id="body-kh">
            <?php
            $mod=@$_GET['mod'];
            if(empty($mod)) $mod="thongBao";
            include ("view/$mod.php");
            ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#thongtinKH").click(function () {
                    $("#thongtinKH").css({'backgroundColor':'#CCCC'});
                    $("#thongBaoKH").css({'backgroundColor':'#0000'});
                    $("#donHangCT").css({'backgroundColor':'#0000'});
                });
                $("#thongBaoKH").click(function () {
                    $("#thongBaoKH").css({'backgroundColor':'#CCCC'});
                    $("#donHangCT").css({'backgroundColor':'#0000'});
                    $("#thongtinKH").css({'backgroundColor':'#0000'});
                });
                $("#donHangCT").click(function () {
                    $("#donHangCT").css({'backgroundColor':'#CCCC'});
                    $("#thongBaoKH").css({'backgroundColor':'#0000'});
                    $("#thongtinKH").css({'backgroundColor':'#0000'});
                });

            });
        </script>
    </div>


    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
</div>


<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>

</html>