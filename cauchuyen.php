<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>.:PetShop:.</title>
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/log.css" rel="stylesheet" type="text/css"/>
</head>

<body bgcolor="#F7F7F7">
<div id="container">
    <button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png"/></button>
    <div id="header">
        <?php include("header.php")?>
        <div style="clear: both"></div>
    </div>

    <div id="cauchuyen">
        <div class="baiviet">
            <div class="hinhanh-baiviet">
                <img src="images/baiviet/20171124-023521-5359bd9d6ce66d4c9d6ab4aa2140dcfc5ad44a4c.jpg" alt=""/>
            </div>
            <div class="noidung">
                <div class="tieude-baiviet">
                    <h3>Cuối tuần cười mệt nghỉ với hình ảnh dàn thú cưng đồng loạt khoe dáng trong lúc ngủ</h3>
                </div>
                <div class="noidung-baiviet">
                    Những "cậu ấm, cô chiêu" này nổi danh trong thế giới động vật có bản tính "lười từ trong máu", ngủ mọi lúc mọi nơi và mọi hoàn cảnh.
                </div>
            </div>

        </div>

        <div class="baiviet">
            <div class="hinhanh-baiviet">
                <img src="images/baiviet/20171124-023521-5359bd9d6ce66d4c9d6ab4aa2140dcfc5ad44a4c.jpg" alt=""/>
            </div>
            <div class="noidung">
                <div class="tieude-baiviet">
                    <h3>Cuối tuần cười mệt nghỉ với hình ảnh dàn thú cưng đồng loạt khoe dáng trong lúc ngủ</h3>
                </div>
                <div class="noidung-baiviet">
                    Những "cậu ấm, cô chiêu" này nổi danh trong thế giới động vật có bản tính "lười từ trong máu", ngủ mọi lúc mọi nơi và mọi hoàn cảnh.
                </div>
            </div>

        </div>
    </div>

    <!--Đây là phần cuối-->
    <div class="Footer">
        <?php include("footer.php")?>
    </div>



</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>
</html>