
<link href="../public/css/CSSCoban.css" rel="stylesheet" type="text/css"/>
<?php


if(isset($_SESSION['username'])){
    $Email = $_SESSION['username'];
}
?>
<div class="donHang">
    <table>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Ngày mua</th>
            <th>Sản phẩm</th>
            <th>Tổng tiền</th>

        </tr>
        <?php
            $result = getHoaDon($link,$Email);
            while ($row = mysqli_fetch_array($result)){
                $ctHoaDon = getCTHoaDon($link,$row['IDHD']);
                $ct = mysqli_fetch_array($ctHoaDon);
                echo '<tr >';
                echo '<td style="text-align: center;">'.$row['IDHD'].'</td>';
                echo '<td>'.$row['NgayLap'].'</td>';
                $IDSanPham = $ct['IDSanPham'];
                $tensp = getTenSanPham($link,$row['IDHD'],$IDSanPham);
                $sl = mysqli_num_rows($ctHoaDon);
                echo '<td>'.$tensp['tenThu'];
                if($sl>1){
                    echo '... và '.$sl.' sản phẩm khác';
                }
                echo '</td>';
                echo '<td>'.$row['TongTien'].'</td>';
            }
        ?>
    </table>
</div>