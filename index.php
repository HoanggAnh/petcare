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
		<!-------Phần menu-->
		<?php include("menu.php")?>
		<!-----------content----------------->
		<div class="content">
			<div class="slider">
				<figure>
					<img src="banner/sld-1.jpg" alt=""/>
					<img src="banner/sld-2.jpg" alt=""/>
					<img src="banner/sld-3.jpg" alt=""/>
					<img src="banner/sld-4.jpg" alt=""/>
					<img src="banner/sld-5.jpg" alt=""/>
				</figure>
			</div>
		</div>
		<!----------------------------------------------sidebar-right---------------------------------------------->

		<div class="sidebar-right">
			<a href=""><img src="Hình/sanphamnb1.jpg" alt=""/></a>
			<br/><br/>
			<a href=""><img src="Hình/sanphamnb2.jpg" alt=""/></a>
		</div>
		<div style="clear:both"></div>

		<!----------------------------------------------menu danh sách----------------------------------------->

		<div class="danhsach" >
			<?php inBangThu($link);?>
		</div>
        <div class="right-qc">
            <div class="quangcao"><a href="#"><img src="banner/1.jpg" /></a></div>
            <div class="quangcao"><a href="chitietsp.php?idSP=30"><img src="banner/2.jpg" /></a></div>
            <div class="quangcao"><a href="sanpham.php?idCL=CL01"><img src="banner/3.jpg" /></a></div>
            <div class="quangcao"><a href="chitietsp.php?idSP=30"><img src="banner/4.jpg" /></a></div>
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