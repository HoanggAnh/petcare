
<?php
if(isset($_SESSION['username'])){
    $Email = $_SESSION['username'];
}
else{
    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

if (isset($_POST['sbmTT'])){
    $hoten = $_POST['name'];
    $diaChi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];

    $idKH = getIDKhachHang($link,$Email);
    $idUser = getIDUser($link,$Email);
    $update_ACC = "UPDATE `taikhoan` SET `Email`={$email},`SDT`='{$sdt}' WHERE IDUser = '{$idUser}'";
    $caulenh = "UPDATE `khachhang` SET `HoTen`='{$hoten}',`Email`='{$email}',`SDT`='{$sdt}',`DiaChi`='{$email}' WHERE IDKH = '{$idKH}'";
    mysqli_query($link,$update_ACC);
    mysqli_query($link,$caulenh);

    echo '<meta http-equiv="refresh" content="0;URL=khachhang.php?mod=thongtinUser">';
}?>


<div class="thongtin-hien">
    <?php include ("model/User.php");
    $KhachHang = new User();

    $Email = $_SESSION['username'];
    $khachhang = getKhachHang($link,$Email);
    $KhachHang->getDuLieu($khachhang);

    ?>
    <div class="tieude-user">Thông tin của bạn</div>
    <form name="formUser" method="post" action="khachhang.php?mod=thongtinUser">
        <div class="lblNhan-cus"><label for="name" >Họ và tên: </label></div>
        <div class="txtNhap-cus"><input type="text" id="name" name = "name" value="<?php echo $KhachHang->getHoTen();?>"/></div><br/>
        <div class="lblNhan-cus"> <label for="diachi" >Địa chỉ: </label></div>
        <div class="txtNhap-cus"> <input type="text" id="diachi" name="diachi" value="<?php echo $KhachHang->getDiaChi();?>"/></div><br/>
        <div class="lblNhan-cus"><label for="sdt" >Số điện thoại: </label></div>
        <div class="txtNhap-cus"> <input type="text" id="sdt" name="sdt" value="<?php echo $KhachHang->getSDT();?>"/></div><br/>
        <div class="lblNhan-cus"><label for="email">Email: </label></div>
        <div class="txtNhap-cus"><input type="text" id="email"  name="email" value="<?php echo $KhachHang->getEmail();?>"/></div><br/>

        <button type="submit" name="sbmTT" class="btnCapNhat">Cập nhật</button>
    </form>

</div>
