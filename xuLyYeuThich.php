<?php
session_start();


if(isset($_POST['idThuXoa'])){
    $idSP = $_POST['idThuXoa'];
    $index = 0;
    $count = count($_SESSION['yeuthich']);
    for($i=0;$i<$count;$i++){
        if($_SESSION['yeuthich'][$i]['idSP']==$idSP){
            $index = $i;
        }
    }



    for($j = $index;$j<$count-1;$j++){
        $_SESSION['yeuthich'][$j] = $_SESSION['yeuthich'][$j+1];
    }
    unset($_SESSION['yeuthich'][$count]);
    echo 1;
}