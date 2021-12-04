<?php 
  ob_start();
  session_start();
  if(!isset($_SESSION['yeuthich']))
    $_SESSION['yeuthich']=array();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css" />
    <link href="public/css/log.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="container">
  <div id="header">
    <?php include("header.php"); ?>
    <div style="clear:both"></div>
  </div>
  <div id="body-menu2">
  <?php
    if(isset($_GET['idSP'])) {
        $idSP = $_GET['idSP'];
    }
    else if(!isset($_GET['idSP'])){
        header('location:index.php');
    }
    if(strlen($_GET['idSP'])==0) {
        header('location:index.php');
    }
    $row = getThucAn($link,$idSP);

  ?>
    <!---Cây thư mục------->
  <div class="cayThuMuc"><div class="node-thumuc"><a href="index.php">Trang chủ</a> > <a href="sanpham.php?thucan=<?php echo $row['idCL'];?>">Thức ăn cho <?php echo $row['tenCL'];?></a> > <a href="chitietthucan.php?idSP=<?php echo $row['idThucAn'];?>"><?php echo $row['tenThucAn'];?></a></div></div>
  <div class="hinhanh-sp">
      <?php
            $duongdan = "images/thucan/{$row['hinhThucAn']}";
      ?>
      <div id="hinhLon-sp" class="hinhLon-sp" style="background-image:url(<?php echo $duongdan?>);">
      </div>
  </div>

  <div class="chitiet-sp">
  	<div class="ten-sp">
    	<div class="ten"><?php echo $row['tenThucAn'];?></div>
        <div>Loại: <span class="loaithu">Thức ăn cho <?php echo $row['tenCL'];?></span></div>
    </div>
    <div class="gia-sp">
        <div class="gia"><span style="color: black";">Giá: </span><?php echo $row['giaThucAn']; ?> đ</div>
    </div>
    <div class="thongtin-sp">
        <h3>Thông tin chi tiết</h3>
    	<p class="noidung-mota"><?php echo $row["moTaThucAn"] ?></p>
    </div>

  
  </div>
  </div>

  <div style="clear:both"></div>

  <div id="footer">
    <?php include("footer.php"); ?>
  </div>
</div>

<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>

</body>

</html>