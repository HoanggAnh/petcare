<div class="sp-trong-gio">
    <?php
    if(isset($_SESSION['yeuthich'])&&count($_SESSION['yeuthich'])>0){
        $count = count($_SESSION['yeuthich']);
        for($i=0;$i<$count;$i++){
            echo '<div class="baosanpham">';
            echo '<a href="chitietsp.php?idSP='.$_SESSION['yeuthich'][$i]['idSP'].'" style="text-decoration: none;color:#333">';
            $duongdan = "images/thunuoi";
            echo '<div class="hinhsp-tronggio img-sp" style="background-image:url('.$duongdan.'/'.$_SESSION['yeuthich'][$i]['hinhThu'].');"></div>';
            echo '<div class="thongtin-sp-giohang">';
            echo '<div class="tensp-trong-gio">'.$_SESSION['yeuthich'][$i]['tenSP'].'</div>';
            echo '<div class="giasp-trong-gio"><b>Giá:</b> '.$_SESSION['yeuthich'][$i]['giaThu'].'</div></div></a>';
            echo '<div class="xoa-mathang"><a href="xulyGio.php?idThu='.$_SESSION['yeuthich'][$i]['idSP'].'  "><img src="images/icon/delete.png" alt="Xóa" title="Bỏ thích"/> </a></div></div>';
        }}
    else if(!isset($_SESSION['yeuthich'])||count($_SESSION['yeuthich'])==0){
        echo '<h3 style="text-align: center">Không có sản phẩm yêu thích</h3>';
    }?>

</div>