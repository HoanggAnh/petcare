
<div class="thongbao">
    <?php
    $sql = "select * from thongbao";
    $tt = mysqli_query($link,$sql);
    while ($row = mysqli_fetch_array($tt)){
    ?>
    <div class="khungchua-news" >
        <a href="?mod=chitietThongBao&&bantin=<?php echo $row['IDNews'];?>">
            <div class="img-news"><img src="images/icon/<?php echo $row['icon']?>"></div>
            <div class="tieude-news"><?php echo $row['TieuDe']?></div>
            <div class="noidung-news"><?php echo $row['NoiDung']?></div>
        </a>
    </div>
    <div style="clear: both"></div>
    <?php }?>

</div>
