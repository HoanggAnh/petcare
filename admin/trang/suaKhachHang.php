
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Khách hàng</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php include '../../connected.php';
    if(isset($_GET['IDKH'])) {$IDKH = $_GET['IDKH'];}
        $sql = "select * from khachhang where IDKH = '{$IDKH}'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        $sqlAcc = "select * from taikhoan where IDUser = '{$row['IDUser']}'";
        $kq = mysqli_query($link,$sqlAcc);
    $rowAcc = mysqli_fetch_array($kq);


     if(isset($_POST['btnSuaKhach'])){
        $ten = $_POST['hoten'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];

        $flag = 1;
        if($email!=$row['Email']){
            $email_sql = "select * from taikhoan where Email =  '$email'";
            $kq_em = mysqli_query($link,$email_sql);
            if(mysqli_num_rows($kq_em)>0){
                echo ' <div class="alert alert-danger">Địa chỉ Email này đã tồn tại. Hãy kiểm tra lại</div>';
                $flag = 0;
            }

        }
        if($flag == 1){
            $sqlKH = "UPDATE `khachhang` SET `HoTen`='{$ten}',`Email`='{$email}',`SDT`='{$sdt}',`DiaChi`='{$diachi}' WHERE IDKH = '$IDKH'";
            $sqlACC = "UPDATE `taikhoan` SET `Email`='{$email}',`SDT`='{$sdt}',`MatKhau`='{$matkhau}' WHERE IDUser = '{$rowAcc['IDUser']}'";
            mysqli_query($link,$sqlKH);
            mysqli_query($link,$sqlACC);
            echo ' <div class="alert alert-success">Đã cập nhật thông tin khách hàng';
            echo '<meta http-equiv="refresh" content="3;URL=index.php?mod=khachhang"><br /></div>';
        }
    }

?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Sửa khách hàng
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" name="form2" action="">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" class="form-control" name="hoten" required value="<?php echo $row['HoTen'];?>"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required value="<?php echo $row['Email'];?>"/>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="text" class="form-control" name="matkhau" required value="<?php echo $rowAcc['MatKhau'];?>"/>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <textarea class="form-control" name="diachi" required><?php echo $row['DiaChi'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="sdt" required value="<?php echo $row['SDT'];?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="btnSuaKhach">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

