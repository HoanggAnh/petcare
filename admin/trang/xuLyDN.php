<?php session_start();ob_start();
header('Content-Type: text/html; charset=UTF-8');
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']=='yes'){
    if(isset($_COOKIE['taikhoanAD']))
        setcookie('taikhoanAD','',time()-1000);
    if(isset($_SESSION['usernameAD']))
        unset($_SESSION['usernameAD']);
    header('location:index.php');
    exit();

}

if(isset($_COOKIE['taikhoanAD'])){
    $_SESSION['usernameAD'] = $_COOKIE['taikhoanAD'];
    //Gia hạn cookie
    setcookie('taikhoanAD',$_SESSION['usernameAD'],time()+60*60*10000);
    echo 3;
}
else{
    if(isset($_POST['email'])){
        $username = $_POST['email'];
        $pass = $_POST['matkhau'];
        //ket noi
        include "../../connected.php";
        $tk = mysqli_query($link,"SELECT * FROM admin where Email = '$username'");
        if((mysqli_num_rows($tk))==0){
            echo 1;
            exit();
        }

        $row = mysqli_fetch_array($tk);

        if(strcmp($pass,$row['MatKhau'])!=0){
            echo 2;
            exit();
        }

        //Lưu tên đăng nhập
        $_SESSION['usernameAD'] = $username;
        setcookie('taikhoanAD',$username,time()+60*60*10000);
        echo 3;

    }
}


?>
