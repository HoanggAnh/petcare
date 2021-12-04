<?php
//Các hàm in danh sách sản phẩm

    function getListThuNuoi($link,$idCL){
        $sql = "select * from thunuoi a, loai b where a.idLoai = b.idLoai and b.idCL = '$idCL'";
        $result = mysqli_query($link,$sql);
        return $result;
    }
    function getListThuNuoiGioihan($link,$idCL){
    $sql = "select * from thunuoi a, loai b where a.idLoai = b.idLoai and b.idCL = '$idCL' ORDER BY RAND() limit 0,8";
    $result = mysqli_query($link,$sql);
    return $result;
    }

    function getListThucAnGioihan($link,$idCL){
        $sql = "select * from thucan b where idCL = '$idCL' ORDER BY RAND() limit 0,8";
        $result = mysqli_query($link,$sql);
        return $result;
    }

    function printLisThu($result)
    {
        while ($row = mysqli_fetch_array($result)) {
            echo '<a class="sanPham" href="chitietsp.php?idSP=' . $row['idThu'] . '">';
            $duongdan = "images/thunuoi";
            echo '<div class="img-sanPham" style="background-image:url('.$duongdan.'/'.$row['hinhThu'].');"></div>';
            //echo '<img src="images/thunuoi/' . $row['hinhThu'] . '" /></div>';
            echo '<div class="title-sp">' . $row['tenThu'] . '</div>';
            echo '<div class="giaSanPham">';
            echo '<div class="gia-giamgia">Giá: ' . $row['giaThu'] . ' đ</div>';
            //echo '<div class="gia-goc">' . $row['giaThu'] . '</div>';
            //echo '<div class="phanTram-giamgia">' . ($row['GiamGia'] * 100) . ' %</div></div>';
            echo '</div></a>';

        }
    }

    function printListThucAn($result)
    {
        while ($row = mysqli_fetch_array($result)) {
            echo '<a class="sanPham" href="chitietthucan.php?idSP=' . $row['idThucAn'] . '">';
            $duongdan = "images/thucan";
            echo '<div class="img-sanPham" style="background-image:url('.$duongdan.'/'.$row['hinhThucAn'].');"></div>';
            echo '<div class="title-sp">' . $row['tenThucAn'] . '</div>';
            echo '<div class="giaSanPham">';
            echo '<div class="gia-giamgia">Giá: ' . $row['giaThucAn'] . ' đ</div>';
            echo '</div></a>';

        }
    }

    function getThuTuongTu($link,$idCL,$idThu){
        $sql = "select  DISTINCT * from thunuoi a,loai b where a.idLoai = b.idLoai and a.idThu!= '$idThu' and b.idCL = '$idCL' order by rand() limit 0,5";
        $kq = mysqli_query($link,$sql);
        return $kq;
    }
    function getIDCL($link,$idLoai){
        $sql = "select a.idCL from chungloai a, loai b where a.idCL = b.idCL and b.idLoai = '$idLoai'";
        $kq = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($kq);
        return $row;
    }
    function getIDLoai($link,$idThu){
        $sql = "select b.idLoai from loai a,thunuoi b where a.idLoai = b.idLoai and b.idThu = '$idThu'";
        $kq = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($kq);
        return $row['idLoai'];
    }
    function getChungLoai($link){
        $sql = 'select * from chungloai';
        $result = mysqli_query($link,$sql);
        return $result;
    }

    function getLoaiofCL($link,$idCL){
        $sql = "select * from loai where idCL = '$idCL'";
        $result = mysqli_query($link,$sql);
        return $result;
    }
    function getCLThucAn($link){
        $sql = "select distinct idCL from thucan";
        $result = mysqli_query($link,$sql);
        return $result;
    }
    function getTenChungLoai($link,$idCL){
        $sql = "select tenCL from chungloai where idCL = '$idCL'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    function inBangThu($link){
        $result = getChungLoai($link);
        $index = 1;
        while ($row = mysqli_fetch_array($result)){
            echo '<div class="title-sanpham">';
            echo '<div class="title-namesp">'.$row['tenCL'].'</div>';
            echo '<div class="arrow"></div></div>';
            echo '<div class="khungsp">';
            $listthu = getListThuNuoiGioihan($link,$row['idCL']);
            printLisThu($listthu);
            echo '</div>';
            echo '<div style="clear:both"></div>';
        }
    }
    function inBangThucAn($link){
        $result = getChungLoai($link);
        $index = 1;
        while ($row = mysqli_fetch_array($result)){
            echo '<div class="title-sanpham">';
            echo '<div class="title-namesp">'.$row['tenCL'].'</div>';
            echo '<div class="arrow"></div></div>';
            echo '<div class="khungsp">';
            $listthu = getListThucAnGioihan($link,$row['idCL']);
            printListThucAn($listthu);
            echo '</div>';
            echo '<div style="clear:both"></div>';
        }
    }

    function inMenu($link)
    {
        $chungloai = getChungLoai($link);
        while ($rowcl = mysqli_fetch_array($chungloai)) {
            $loai = getLoaiofCL($link, $rowcl['idCL']);
            echo '<li><a href="sanpham.php?idCL=' . $rowcl['idCL'] . '"><img src="images/iconCL/' . $rowcl['iconCL'] . '"/>' . $rowcl['tenCL'] . '</a>';
            echo '<ul class="sub-menu">';
            while ($rowl = mysqli_fetch_array($loai)) {
                echo '<li><a href="sanpham.php?idCL=' . $rowcl['idCL'] . '&&idLoai=' . $rowl['idLoai'] . '" >' . $rowl['tenLoai'] . '</a></li>';
            }
            echo '</ul></li>';
        }

        echo '<li><a href="sanpham.php?thucan=all"><img src="images/icon/food.png"/>Thức ăn cho thú</a>';
        $IDCL = getCLThucAn($link);
        echo '<ul class="sub-menu">';
        while ($row2 = mysqli_fetch_array($IDCL)) {
            $tenCL = getTenChungLoai($link,$row2['idCL']);
            echo '<li><a href="sanpham.php?thucan=' . $row2['idCL'].'" >Thức ăn cho ' . $tenCL['tenCL'] . '</a></li>';
        }
        echo '</ul></li>';
    }

    function getSQLSanPham(){
        $sql = "select * from thunuoi";
        if(isset($_GET['pageall'])&&$_GET['pageall']==0){
            if(isset($_SESSION['sql']))
                unset($_SESSION['sql']);
        }
        if(!isset($_SESSION['sql']))
            $_SESSION['sql'] = $sql;

        if(!isset($_GET['idCL'])&&!isset($_GET['idLoai']))
            $sql = $_SESSION['sql'];
        else{
            if(isset($_GET['idCL'])) {
                $sql = "select * from thunuoi a, loai b where a.idLoai = b.idLoai and b.idCL = '{$_GET['idCL']}'";
            }
            if(isset($_GET['idLoai']))
                $sql.=" and a.idLoai = '{$_GET['idLoai']}'";
            $_SESSION['sql'] = $sql;
        }
        return $sql;
    }

    function getSQLThucAn(){
        $sql = "select * from thucan";
        if(isset($_GET['thucan'])&&$_GET['thucan']=='all'){
            if(isset($_SESSION['sql']))
                unset($_SESSION['sql']);
        }
        if(!isset($_SESSION['sql']))
            $_SESSION['sql'] = $sql;

        if(!isset($_GET['thucan']))
            $sql = $_SESSION['sql'];
        else{
            if(isset($_GET['thucan'])&&$_GET['thucan']!='all') {
                $sql = "select * from thucan where idCL = '{$_GET['thucan']}'";
            }
            $_SESSION['sql'] = $sql;
        }
        return $sql;
    }

    function getIDUser($link,$Email){
        $sql = "select IDUser from taikhoan  where Email = '$Email'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row['IDUser'];
    }
    function getIDKhachHang($link,$Email){
        $sql = "select b.IDKH from taikhoan a,khachhang b where a.IDUser = b.IDUser and a.Email = '$Email'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row['IDKH'];
    }

    function getKhachHang($link,$Email){
        $idKh = getIDKhachHang($link,$Email);
        $sql = "select * from khachhang where IDKH = '$idKh'";
        $result = mysqli_query($link,$sql);
        return $result;
    }

    function getHoaDon($link,$Email){
        $IDKhachHang = getIDKhachHang($link,$Email);
        $sql = "select * from hoadon where IDKH = '{$IDKhachHang}'";
        $result = mysqli_query($link,$sql);
        return $result;
    }

    function getCTHoaDon($link,$IDHoaDon){
        $sql = "select * from cthoadon where IDHoaDon = $IDHoaDon";
        $result = mysqli_query($link,$sql);
        return $result;
    }

    function getTenSanPham($link,$IDHD,$IDSanPham){
        $sql = "select a.tenThu from thunuoi a,cthoadon b where a.idThu = b.IDSanPham and b.IDHoaDon = '{$IDHD}' and b.IDSanPham = '{$IDSanPham}'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row;

    }

    function getThuNuoi($link,$idThu){
        $sql = "select * from loai a,thunuoi b,chungloai c where a.idLoai = b.idLoai and a.idCL = c.idCL and b.idThu = '$idThu'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    function getThucAn($link,$idSP){
        $sql = "select * from thucan a,chungloai b where a.idCL = b.idCL and idThucAn = '$idSP'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    function getAdmin($link,$Email){
        $sql = "select * from admin where Email = '$Email'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    function getYeuThich($link){
        if (isset($_SESSION['username'])){
            if(!isset($_SESSION['yeuthich'])){
                $_SESSION['yeuthich'] = array();
            }
            $IDKH = getIDKhachHang($link,$_SESSION['username']);
            $kh = "select * from yeuthich where IDKH = '{$IDKH}'";
            $kq = mysqli_query($link,$kh);
            if(mysqli_num_rows($kq)>0){
                while ($row = mysqli_fetch_array($kq)){
                    $idThu = $row['idThu'];
                    $thunuoi = getThuNuoi($link,$idThu);

                    $kt=0;
                    for($i=0;$i<count($_SESSION['yeuthich']);$i++)
                    {
                        if($_SESSION['yeuthich'][$i]['idSP']==$thunuoi['idThu'])
                        {
                            $kt=1;
                            break;
                        }

                    }
                    if($kt==0){
                        $index=count($_SESSION['yeuthich']);
                        $_SESSION['yeuthich'][$index]['idSP']=$thunuoi['idThu'];
                        $_SESSION['yeuthich'][$index]['tenSP']=$thunuoi['tenThu'];
                        $_SESSION['yeuthich'][$index]['giaThu']=$thunuoi['giaThu'];
                        $_SESSION['yeuthich'][$index]['hinhThu']=$thunuoi['hinhThu'];

                    }
                }
            }
        }
    }

    function getHinhThu($link,$idThu){
        $sql = "select * from hinhthu where idThu = $idThu";
        $kq = mysqli_query($link,$sql);
        return $kq;
    }
?>
