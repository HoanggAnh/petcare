<?php

ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Đặt hàng <form action="" method="post" name="f1">

                <label>
                    <input class="form-control" id="txtSDT" value="<?php if(isset($_SESSION['sdt'])) echo $_SESSION['sdt'];?>" type="text" name="txtsdt">
                    <button type="submit" class="btn btn-primary active" name="btnTimKiem" >Tìm kiếm</button>
                </label>
            </form></h1>


    </div>
    <!-- /.col-lg-12 -->

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin đơn hàng
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form method="post" action="#" name="form1">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Thú nuôi</th>
                                <th>Số lượng</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php


                            if(isset($_POST["btnTimKiem"])){
                                $sdt=$_POST['txtsdt'];
                                $link = mysqli_connect("localhost","root","","petshop") or die("Không kết nối được csdl");
                                mysqli_query($link,"SET NAMES 'UTF8'");
                                $qr="Select * from khachhang where SDT='$sdt'";
                                $kq=mysqli_query($link,$qr);
                                if($kq==null)return;


                                while($row=mysqli_fetch_array($kq))
                                {
                                    $_SESSION['idkh'] = $row['IDKH'];
                                    $_SESSION['sdt']=$sdt;


                                    ?>
                                    <tr>

                                        <td><?php echo  $row['HoTen']?></td>
                                        <td><?php echo $row['SDT']?></td>
                                        <td><?php echo $row['Email']?></td>

                                        <td>
                                            <label>
                                                <select name="thunuoi"  class="form-control">
                                                    <?php
                                                    $kqtn=mysqli_query($link,"SELECT * FROM `thunuoi`  ");
                                                    while($dTN=mysqli_fetch_array($kqtn)) {
                                                        $_SESSION['GiaBan']=$dTN['giaThu'];
                                                        ?>
                                                        <option value="<?php echo $dTN["idThu"]; ?>" ><?php echo $dTN["tenThu"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </label>

                                        </td>
                                        <td>
                                            <input class="form-control" id="ex3" type="text"  name="txtSL">
                                        </td>

                                    </tr>
                                <?php }}

                            ?>
                            </tbody>
                        </table>
                    </div>

                        <button type="submit" class="btn btn-primary active" name="btnDatHang">Đặt hàng</button>

                    </form>

                    <?php

                    if(isset($_POST['btnDatHang'])){

                        if(isset($_SESSION['idkh'])){
                            $ngaylap=date("Y/m/d");
                            $idkh=$_SESSION['idkh'];
                            $sdt=$_SESSION['sdt'];
                            $sl=$_POST['txtSL'];
                            $tt = $_POST['txtSL']*$_SESSION['GiaBan'];
                            $idthu=$_POST['thunuoi'];
                            $qrishd="INSERT INTO `hoadon` (`IDHD`, `IDKH`, `NgayLap`, `TongTien`, `SoDienThoai`) VALUES (NULL, '$idkh', '$ngaylap', '$tt', '$sdt');";

                            mysqli_query($link,$qrishd);


                            function getIDHoaDon(){
                                $link = mysqli_connect("localhost","root","","petshop") or die("Không kết nối được csdl");
                                if ($link->connect_errno) die ($link->connect_error);
                                $table=$link->prepare("SHOW TABLE STATUS FROM petshop");
                                $table->execute();
                                $sonuc = $table->get_result();
                                while ($satir=$sonuc->fetch_assoc()){
                                    if ($satir["Name"]== "hoadon"){
                                        $ai[$satir["Name"]]=$satir["Auto_increment"];
                                    }
                                }
                                $LastAutoIncrement=$ai["hoadon"];
                                return $LastAutoIncrement;


                            }
                            $idhd=getIDHoaDon()-1;
                            //tao chi tiet hoa don
                            $qriscthd="INSERT INTO `cthoadon` (`IDHoaDon`, `IDSanPham`, `Gia`, `SoLuong`, `DonGia`) VALUES ('$idhd', '$idthu', '{$_SESSION['GiaBan']}','$sl', '$tt');";
                            $kq=	mysqli_query($link,$qriscthd);
                            if($kq!=null){
                                echo'
				<script>
                      confirm("Đặt hàng thành công!");            
                 </script>
				 ';


                            }
                        }
                    }


                    ?>
</html>


              


