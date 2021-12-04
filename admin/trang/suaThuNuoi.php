
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thú nuôi</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php include '../../connected.php';
if(isset($_GET['idThu'])) {$idThu = $_GET['idThu'];}
    $sql = "select * from thunuoi where idThu = '{$idThu}'";
    $result = mysqli_query($link,$sql);
    $rowThu = mysqli_fetch_array($result);

    if(isset($_POST['btnThemThu'])){
        $tenThu = $_POST['tenThu'];
        $giaThu = $_POST['giaThu'];
        $motaThu = $_POST['motaThu'];
        $idLoai = $_POST['cmbLoai'];
        $hinhThu = $_FILES['file'];
        $tuoiThu = $_POST['tuoiThu'];
        $canNang = $_POST['canNang'];
        $giongThu = $_POST['cmbGiong'];

        $target_path = $_SERVER['DOCUMENT_ROOT'] .'/petshop/images/thunuoi/';

        $flag = 1;

        if(isset($hinhThu['name'])&&$hinhThu['name']!="")
        {
            $target_path = $target_path . basename($hinhThu['name']);
            if ( !preg_match('/\.(jpg|gif)$/i',basename($hinhThu['name'])) )
            { echo ' <div class="alert alert-success">Định dạng file không phải là ảnh</div>';$flag = 0;}
            else {
                $namePic = $hinhThu['name'];
                if (file_exists($target_path)) {
                    //echo basename($hinhThu['name']) . " already exists. ";
                    $flag = 1; //Tồn tại thì không cần lưu
                } else {
                    if (move_uploaded_file($_FILES['file']['tmp_name'],$target_path)) {
                        $flag = 1;
                    } else {
                        echo ' <div class="alert alert-dismissable">Upload hình đã gặp lỗi</div>';
                        $flag = 0;
                    }
                }
            }

        }
        else{
            $namePic = $rowThu['hinhThu'];
        }
        if($flag==1){
            $sql = "UPDATE `thunuoi` SET `idLoai`='{$idLoai}',`tenThu`='{$tenThu}',`tuoiThu`='{$tuoiThu}',`canNangThu`='{$canNang}',`gioiTinhThu`='{$giongThu}',`hinhThu`='$namePic',`giaThu`='{$giaThu}',`moTaThuNuoi`='{$motaThu}' WHERE idThu = '$idThu'";
            mysqli_query($link,$sql);
            echo ' <div class="alert alert-success">Đã cập nhật thông tin thú nuôi thành công</div>';
        }
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Sửa thú nuôi
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" name="form2" action="" enctype="multipart/form-data">

                            <label>Giống thú</label>
                            <div class="form-group">
                                <select class="form-control" name="cmbLoai">
                                    <?php
                                    $loai = "select * from loai";
                                    $kq = mysqli_query($link,$loai);
                                    while ($row = mysqli_fetch_array($kq)){?>
                                        <option value="<?php echo $row['idLoai'];?>" <?php if(isset($_GET['idThu'])&&$rowThu['idLoai']==$row['idLoai']){echo 'selected';}?>><?php echo $row['tenLoai'];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên thú</label>
                                <input type="text" class="form-control" name="tenThu" value="<?php echo $rowThu['tenThu'];?>">
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
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000"> <!-- gioi han file upload - don vi la byte -->
                                <div id="hinhThuBox">
                                    <img id="hinhThu" src="../../images/thunuoi/<?php echo $rowThu['hinhThu'];?>" width="231px" height="231px">
                                </div>

                                <div class="form-group">
                                    <label>Hình thú:</label>
                                    <input type="file" name="file" id="file">
                                </div>
                            </div>
                            <label>Giá</label>
                            <div class="form-group input-group">
                                <input type="text" class="form-control " name="giaThu" value="<?php echo $rowThu['giaThu'];?>">
                                <span class="input-group-addon">.VNĐ</span>
                            </div>
                            <div class="form-group">
                                <label>Mô tả (Thông tin chi tiết)</label>
                                <textarea class="form-control" rows="3" name="motaThu"><?php echo $rowThu['moTaThuNuoi'];?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="btnThemThu" id="btnThemThu">Lưu</button>
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

