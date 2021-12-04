<?php
session_start();
ob_start();

include 'connected.php';
if(isset($_GET['idThu'])){
    $idThu = $_GET['idThu'];


    if(isset($_SESSION['yeuthich'])){
        $count = count($_SESSION['yeuthich']);
        $vitriXoa;
        for($i=0;$i<$count;$i++){
            if($_SESSION['yeuthich'][$i]['idSP']==$idThu){
                $vitriXoa = $i;
                break;
            }
        }

        for($j=$vitriXoa;$j<$count-1;++$j){
            $_SESSION['yeuthich'][$j] = $_SESSION['yeuthich'][$j+1];
        }
        unset($_SESSION['yeuthich'][$count-1]);
        $sql = "DELETE FROM `yeuthich` WHERE idThu = '{$idThu}'";
        echo $sql;
        mysqli_query($link,$sql);

        header('location:yeuthich.php');
    }
}
