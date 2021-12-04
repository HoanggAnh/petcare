<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>.:PetShop:.</title>
	<link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/header.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/log.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
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

		<div class="tieude">Kết quả tìm kiếm</div>
		<div id="listSanPham">
		<div>
			<?php 
				$tuKhoa = "a"; //test
			include("connected.php");
			if(isset($_GET['search-box'])){
				$tuKhoa = $_GET['search-box'];
			}
			
			$sql="select * from thunuoi where tenThu like '%$tuKhoa%' ";
			$kq = mysqli_query($link,$sql);
			
			while($row=mysqli_fetch_array($kq)){ ?>    
				<a class="sanPham" href="chitietsp.php?idsp=<?php echo $row['IDSanPham'];?>">
				<img src="images/products/<?php echo $row['hinhThu'];?>" class="img-sanPham" />
				<div class="title-sp"><?php  echo $row['tenThu'];?></div>
				<div class="danhGia-star"><div class="rateit"></div></div>
				<div class="giaSanPham">
				<!--<div class="gia-giamgia"></div>-->
				<div class="gia-goc"><?php  echo $row['giaThu'];?></div></div>
				<!--<div class="phanTram-giamgia"></div></div>-->
				<!--<div class="tinhTrang"></div>-->
        </a>
		</div>
		<?php }?>
        </div>
			?>
		</div>
		<!--Đây là phần cuối-->
		<div style="clear: both"></div>
		<div class="Footer">
			<?php include("footer.php")?>
		</div>
	</div>
</body>
<script type="text/javascript" src="public/js/events.js"></script>

</html>