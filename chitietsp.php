<?php 
  ob_start();
  session_start();
  if(!isset($_SESSION['yeuthich']))
    $_SESSION['yeuthich']=array();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css" />
    <link href="public/css/log.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="container">
  <div id="header">
    <?php include("header.php"); ?>
    <div style="clear:both"></div>
  </div>
  <div id="body-menu2">
  <?php
    if(isset($_GET['idSP'])) {
        $idSP = $_GET['idSP'];
    }
    else if(!isset($_GET['idSP'])){
        header('location:index.php');
    }
    if(strlen($_GET['idSP'])==0) {
        header('location:index.php');
    }
    $row = getThuNuoi($link,$idSP);

  ?>
    <!---Cây thư mục------->
  <div class="cayThuMuc"><div class="node-thumuc"><a href="index.php">Trang chủ</a> > <a href="sanpham.php?idCL=<?php echo $row['idCL'];?>"><?php echo $row['tenCL'];?></a> > <a href="sanpham.php?idCL=<?php echo $row['idCL'];?>&&idLoai=<?php echo $row['idLoai'];?>"><?php echo $row['tenLoai'];?></a></div></div>
  <div class="hinhanh-sp">
      <?php
            $duongdan = "images/thunuoi/{$row['hinhThu']}";
      ?>
      <div id="hinhLon-sp" class="hinhLon-sp" style="background-image:url(<?php echo $duongdan?>);">
      </div>
      <div class="list-hinhNho">
          <div id="idHinh0" class="hinhNho-sp" style="background-image:url(<?php echo $duongdan?>);" onclick="document.getElementById('hinhLon-sp').style.backgroundImage=document.getElementById('idHinh0').style.backgroundImage">
          </div>
          <?php $hinhthu = getHinhThu($link,$_GET['idSP']);
          $indexID = 0;
          while ($rowHinh = mysqli_fetch_array($hinhthu)){
              $hinh = $rowHinh['hinhThu'];
              $dd = "images/hinhkhac/$hinh";
              ?>
              <div id="<?php echo 'idHinh'.++$indexID;?>" class="hinhNho-sp" style="background-image: url(<?php echo $dd;?>)" onclick="document.getElementById('hinhLon-sp').style.backgroundImage=document.getElementById('<?php echo 'idHinh'.$indexID;?>').style.backgroundImage">
          </div>
          <?php } ?>

      </div>
  </div>

  <div class="chitiet-sp">
  	<div class="ten-sp">
    	<div class="ten"><?php echo $row['tenThu'];?></div>
        <div>Họ: <span class="loaithu"><?php echo $row['tenLoai'];?></span></div>
        <p style="color:#000"><?php echo "Tuổi: ".$row['tuoiThu']. " Tuổi"; ?></p>
        <p style="color:#000"><?php echo "Cân nặng: ".$row['canNangThu']. " KG"; ?></p>
        <p style="color:#000"><?php echo "Giống: ".$row['gioiTinhThu']; ?></p>
    </div>
    <div class="gia-sp">
        <div class="gia"><span style="color: black";">Giá: </span><?php echo $row['giaThu']; ?> đ</div>
    </div>
    <div class="thongtin-sp">
        <h3>Thông tin chi tiết</h3>
    	<p class="noidung-mota"><?php echo $row["moTaThuNuoi"] ?></p>
    </div>

    <div class="them-yeuthic">
        <form action="" method="post" name="fthemyt">
            <button type="submit" name="btnThemSP" id="btnThemSP" class="add-gio" style="cursor: pointer">
                <img src="images/icon/tim.png" class="icon"/>&nbsp;Thêm vào yêu thích</button>
        </form>
    </div>

    <?php
    if(isset($_POST['btnThemSP'])){
        $kt=0;
        for($i=0;$i<count($_SESSION['yeuthich']);$i++)
        {
            if($_SESSION['yeuthich'][$i]['idSP']==$_GET['idSP'])
            {
                $kt=1;
                break;
            }

        }
        if($kt==0){
            $s="select * from thunuoi where idThu = '{$_GET['idSP']}'";
            $kq=mysqli_query($link,$s);
            $d=mysqli_fetch_array($kq);
            ////////////////////////////

            $index=count($_SESSION['yeuthich']);
            $_SESSION['yeuthich'][$index]['idSP']=$d['idThu'];
            $_SESSION['yeuthich'][$index]['tenSP']=$d['tenThu'];
            $_SESSION['yeuthich'][$index]['giaThu']=$d['giaThu'];
            $_SESSION['yeuthich'][$index]['hinhThu']=$d['hinhThu'];

            if(isset($_SESSION['username'])){
                $idKH = getIDKhachHang($link,$_SESSION['username']);
                $sqlYT = "INSERT INTO `yeuthich`(`IDKH`, `idThu`) VALUES ('{$idKH}','{$d['idThu']}')";
                mysqli_query($link,$sqlYT);
            }

            echo '<meta http-equiv="refresh" content="0;URL=chitietsp.php?idSP='.$_GET['idSP'].'">';

        }

    }
    ?>
  
  </div>
  </div>

  <div style="clear:both"></div>

      <?php
      $idLoaiThu = getIDLoai($link,$idSP);
      $idCL = getIDCL($link,$idLoaiThu);
          $thutt = getThuTuongTu($link,$idCL['idCL'],$idSP);
          if(!empty($thutt)){ ?>
              <div class="spTuongTu">
                    <div class="tieude-sptt">Thú nuôi cùng loại</div>
                        <?php printLisThu($thutt);?>
              </div>
         <?php }
          ?>


  <div id="footer">
    <?php include("footer.php"); ?>
  </div>
</div>

<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
<script type="text/javascript" src="public/js/jquery.zoom.min.js"></script>

</body>

</html>