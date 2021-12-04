<?php include 'hamXuLy.php';include 'connected.php'; ?>
	<div class="header-line1">
		<ul>
			<li class="hotline"><img src="images/icon/phone.png" width="15" height="15"/><a href="tel:0989954169" class="format-url">098.995.4169&emsp;</a>
			</li>
			<li class="phone">&emsp;<img src="images/icon/icon-dienthoai.png" width="15" height="15"/><a href="tel:19008198" class="format-url">19008198&emsp;</a>
			</li>
			<li class="adress">&emsp;<img src="images/icon/vitri.png" width="15" height="15"/><a class="format-url">70 Tô Ký, phường Tân Chánh Hiệp, Q.12, Tp. Hồ Chí Minh</a>
			</li>
		</ul>
	</div>
	
	<div class="header-1"> <a href="index.php"><img id="logo" name="logo" alt="logo" src="images/icon/logo.png"/></a>
		<form action="timkiem.php" method="get" id="form-Search">
			<input type="text" class="txtTimKiem" name="search-box" placeholder="Nhập từ khóa tìm kiếm..."/>
			<button id="btnSearch" type="submit"><img src="images/icon/search.png" width="40px" height="40px"/></button>
		</form>
        <div class="box"><?php if(isset($_SESSION['username'])){?><a href="khachhang.php" class="xoaDinhDangLink" style="color: white"><?php }?><div id="icon-tbao"><div id="soThongBao">
                        <?php if(isset($_SESSION['username'])){
                            $sql = "select * from thongbao";
                            $tt = mysqli_query($link,$sql);
                            echo mysqli_num_rows($tt);
                        }else echo 0;?>
                    </div><img src="images/icon/thongBao.png" class="icon"/></div>Thông báo của tôi<?php if(isset($_SESSION['username'])){?></a><?php }?> </div>
        <?php if(!isset($_SESSION['username'])){?>
        <div class="box" id="hover-dangnhap"><img src="images/icon/account.png" class="icon"/>Đăng nhập
            <div class="arrow-top"></div>
            <ul class="sub-menu">
                <li id="dangnhap">Đăng nhập</li>
                <li id="dangky">Tạo tài khoản</li>
            </ul>
        </div>
        <?php }else{
        $sql_layTK = "select b.HoTen from taikhoan a,khachhang b where a.Email = '{$_SESSION['username']}' and a.IDUser = b.IDUser";
        $res = mysqli_query($link,$sql_layTK);
        if(!$res)
            echo 'Khong doc duoc';
        $row = mysqli_fetch_array($res);
        ?>

        <div class="box" id="da-dangnhap" style="display: block"><img src="images/icon/account.png" class="icon"/>Chào <div id="nameKH"><?php echo $row[0];?></div>
            <div class="arrow-top"></div>
            <ul class="sub-menu">
                <a href="khachhang.php"> <li id="taikhoan">Tài khoản của tôi</li></a>
                <a href="xuLyLog.php?dangxuat=yes"><li id="dangky">Đăng xuất</li></a>
            </ul>
        </div>
        <?php }
            //Cập nhật giỏ hảng
            getYeuThich($link);
        ?>
        <div class="box" id="boxGioHang"><div id ="imgCart">
                <a href="yeuthich.php" style="color: #FFFFFF;display: block">
                    <img src="images/icon/tim.png" class="icon"/>Yêu thích </a>
            </div><div id="soLuongHang" style="color: #0099FF;"><?php
                if(!isset($_SESSION['yeuthich'])){
                    echo 0;
                }
                else
                    echo count($_SESSION['yeuthich'])
                ?></div>
        </div>

	</div>
	
	<div class="taskbar-menu">
    <div class="danhmuc">DANH MỤC THÚ NUÔI</div>
    <div class="menu-ngang">
      <ul>
        <li><a href="index.php" class="format-url" ><b>Trang chủ</b></a></li>
        <li><a href="gioithieu.php" class="format-url">Giới thiệu</a></li>
        <li><a href="sanpham.php?pageall=0" class="format-url">Sản phẩm</a></li>
          <li><a href="cauchuyen.php" class="format-url">Câu chuyện vui</a></li>
          <li style="border-right:none;padding-left:20px"><a href="" class="format-url">Hướng dẫn mua hàng</a></li>
      </ul>
    </div>
    <div style="clear:both"></div>
  </div>
  
  <?php include("logon.php")?>
