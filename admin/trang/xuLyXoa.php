<?php
include "../../connected.php";
if(isset($_GET['idThu'])){
    $idThu = $_GET['idThu'];
    $sql = "DELETE FROM `thunuoi` WHERE idThu = '{$idThu}'";
    mysqli_query($link,$sql);

    echo '<meta http-equiv="refresh" content="0;URL=index.php?mod=thunuoi">';
}

if(isset($_GET['IDUser'])){
    $IDUser = $_GET['IDUser'];

    $sql = "DELETE FROM `taikhoan` WHERE IDUser = '{$IDUser}'";
    mysqli_query($link,$sql);

    echo '<meta http-equiv="refresh" content="0;URL=index.php?mod=khachhang">';
}

?>

