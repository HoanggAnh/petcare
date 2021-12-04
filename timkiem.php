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
<?php 	include('connected.php'); ?>

<div id="container">
    <div id="header">
        <?php include("header.php"); ?>
        <div style="clear:both"></div>
    </div>
    <?php include('menu.php');?>

    <div id="listSanPham">

        <?php
        if(isset($_GET['search-box'])) {
            $key = $_GET['search-box'];
            $sql="select a.* from thunuoi a,loai b,chungloai c 
            where a.idLoai = b.idLoai and b.idCL = c.idCL and ( a.tenThu like '%$key%' or b.tenLoai like '%$key%' or c.tenCL like '%$key%')";
            $numKQ = mysqli_num_rows(mysqli_query($link,$sql));
            if($numKQ > 0){
                echo "<p style='font-size: 20px;margin-left: 20px;'>Có <span style='color: #0000FF;'>$numKQ</span> sản phẩm được tìm thấy </p>";
            }
            else
                echo "<p style='font-size: 20px;margin-left: 20px;'>Không có sản phẩm được tìm thấy </p>";

            //Phân trang cho san pham
            $numSP = 16;
            include ('phantrang.php');
        }
        else
            echo "<p style='font-size: 20px;margin-left: 20px;'>Không có sản phẩm được tìm thấy </p>";

        ?>
    </div>
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>
</html>