
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thú nuôi</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php include '../../connected.php';
     if(isset($_POST['btnThemThu'])) {
         $tenThu = $_POST['tenThu'];
         $giaThu = $_POST['giaThu'];
         $motaThu = $_POST['motaThu'];
         $idLoai = $_POST['cmbLoai'];
         $hinhThu = $_FILES['fileHinh'];
         $tuoiThu = $_POST['tuoiThu'];
         $canNang = $_POST['canNang'];
         $giongThu = $_POST['cmbGiong'];

         $target_path = $_SERVER['DOCUMENT_ROOT'] . '/petshop/images/thunuoi/';

         $flag = 1;

         if (isset($hinhThu)) {
             $target_path = $target_path . basename($hinhThu['name']);
             if (!preg_match('/\.(jpg|gif)$/i', basename($hinhThu['name']))) {
                 echo ' <div class="alert alert-success">Định dạng file không phải là ảnh</div>';
                 $flag = 0;
             } else {
                 $namePic = $hinhThu['name'];
                 if (file_exists($target_path)) {
                     echo basename($hinhThu['name']) . " đã tồn tại. ";
                     $flag = 0;
                 } else {
                     if (move_uploaded_file($hinhThu['tmp_name'], $target_path)) {
                         $flag = 1;
                     } else {
                         echo ' <div class="alert alert-dismissable">Upload hình đã gặp lỗi</div>';
                         $flag = 0;
                     }
                 }
             }

         }
         if ($flag == 1) {
             $sql = "INSERT INTO `thunuoi`(`idLoai`, `tenThu`,`tuoiThu`,`canNangThu`,`gioiTinhThu`,`hinhThu`,`giaThu`, `moTaThuNuoi`) VALUES ('{$idLoai}','{$tenThu}','{$tuoiThu}','{$canNang}','{$giongThu}','{$namePic}','{$giaThu}','{$motaThu}')";
             if (mysqli_query($link, $sql)) {
                 echo ' <div class="alert alert-success">';
                 echo '<meta http-equiv="refresh" content="3;URL=index.php?mod=thunuoi">Đã thêm thú thành công<br /></div>';
             }

         }
     }

?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm thú nuôi
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form name="form1" action="" method="post" ">
                            <div class="form-group">
                                <label>Chủng loại</label>
                                <div class="form-group">
                                    <select class="form-control" name="cmbCL" onchange="form1.submit()">
                                        <option value="0" selected>--Chọn chủng loại--</option>
                                        <?php $sql = "select * from chungloai";
                                        $result = mysqli_query($link,$sql);

                                        while ($row = mysqli_fetch_array($result)){?>
                                        <option value="<?php echo $row['idCL'];?>" <?php if(isset($_POST['cmbCL'])&&$_POST['cmbCL']==$row['idCL']){echo 'selected';}?>><?php echo $row['tenCL'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <form method="post" name="form2" action=""  enctype="multipart/form-data">
                            <label>Giống thú</label>
                            <div class="form-group">
                                <select class="form-control" name="cmbLoai">
                                    <?php if(isset($_POST['cmbCL'])) {$idCL = $_POST['cmbCL'];}
                                    if($idCL=="0"||!isset($_POST['cmbCL'])) echo '<option value="0" selected>--Chọn giống thú--</option>';?>
                                    <?php $sql = "select * from loai where idCL = '{$idCL}'";
                                    $result = mysqli_query($link,$sql);
                                    while ($row = mysqli_fetch_array($result)){?>
                                        <option value="<?php echo $row['idLoai'];?>" <?php if(isset($_POST['cmbCL'])&&$_POST['cmbCL']==$row['idLoai']){echo 'selected';}?>><?php echo $row['tenLoai'];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên thú</label>
                                <input type="text" class="form-control" name="tenThu">
                            </div>
                            <div class="form-group">
                                <label>Tuổi thú</label>
                                <input type="text" class="form-control" name="tuoiThu">
                            </div>
                            <div class="form-group">
                                <label>Cân nặng</label>
                                <input type="text" class="form-control" name="canNang">
                            </div>
                            <div class="form-group">
                                <label>Giống</label>
                                <select class="form-control" name="cmbGiong">
                                    <option value="Đực" selected>Đực (trống)</option>
                                    <option value="Cái" >Cái (mái)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hình thú:</label>
                                <input type="file" name="fileHinh" id="fileHinh">
                            </div>
                            <label>Giá</label>
                            <div class="form-group input-group">
                                <input type="text" class="form-control " name="giaThu">
                                <span class="input-group-addon">.VNĐ</span>
                            </div>
                            <div class="form-group">
                                <label>Mô tả (Thông tin chi tiết)</label>
                                <textarea class="form-control" rows="3" name="motaThu"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="btnThemThu">Lưu</button>
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

