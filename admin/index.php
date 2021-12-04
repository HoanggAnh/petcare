<?php session_start();
ob_start();

if(!isset($_SESSION['taikhoanAD'])){
    header('location:trang/login.php');
}?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0;url=pages/index.html">
    <title>PetShop</title>
    <script language="javascript">
        window.location.href = "pages/index.php"
    </script>
</head>
<body>
<a href="trang/index.php">Go to Homepage</a>
</body>
</html>
