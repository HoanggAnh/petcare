<div class="thongbao-ct">
    <?php

    if(isset($_GET['bantin'])){
        $idThongBao = $_GET['bantin'];

        $sql = "select * from thongbao where IDNews = $idThongBao";
        $kq = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($kq);
        $tieude = $row['TieuDe'];
        $noidung = $row['NoiDung'];
        $icon = $row['icon'];

        ?>

        <div class="tieude-baiviet-chitiet">
            <div class="img-news-ct"><img src="images/icon/<?php echo $icon?>"></div>
            <div class="tieude-baiviet-ct"><?php echo $tieude?></div>
        </div>

        <div class="noidung-thongbaoct" style="clear: both;">
            <?php echo $noidung?>
        </div>
        <?php

    }
    ?>

</div>
