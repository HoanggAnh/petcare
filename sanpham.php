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
    <?php include('menu.php');?>

    <div id="listSanPham">

        <?php
        if(isset($_GET['thucan'])){
            $sql = getSQLThucAn();
            printListThucAn(mysqli_query($link,$sql));
        }
        else{
            $sql = getSQLSanPham();
        //Phân trang cho san pham
        $numSP = 16;
        include ('phantrang.php');}
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