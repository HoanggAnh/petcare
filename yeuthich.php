<?php
ob_start();
session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Untitled Document</title>
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/log.css" rel="stylesheet" type="text/css"/>


</head>

<body>
<div id="container">

    <button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png" alt=""/></button>
    <div id="header">
        <?php include("header.php") ?>
        <div style="clear: both"></div>
    </div>
    <!-------Phần menu-->
    <?php include("menu.php") ?>

    <div id="body-menu">
        <div id="spingio">
            <?php include "sanphamgingio.php";?>
        </div>
    </div>
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>


</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>

</html>