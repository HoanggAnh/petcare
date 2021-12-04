<?php session_start();ob_start();
	if(isset($_POST['email'])){
		$ten = $_POST['name'];
		$email = $_POST['email'];
		$matkhau = $_POST['pass'];
		$sdt = $_POST['phone'];
		
		include("connected.php");
		$sql = "SELECT * FROM taikhoan WHERE Email='$email'";
		$tt = mysqli_query($link,$sql);
		if(mysqli_num_rows($tt)>0){
			echo 1;
			exit();
			
		}
		$insert = "INSERT INTO taikhoan(`Email`,`SDT`,`MatKhau`) VALUES('$email','$sdt','$matkhau')";
        mysqli_query($link,$insert);
		$sqlget = "select IDUser from taikhoan where Email = '$email'";
		$tt = mysqli_query($link,$sqlget);
		$row = mysqli_fetch_array($tt);
		mysqli_query($link,"insert into khachhang(`HoTen`,`Email`,`SDT`,`IDUser`) values('$ten','$email','$sdt','{$row['IDUser']}')");
        $_SESSION['username'] = $email;
		echo 2;
	}
