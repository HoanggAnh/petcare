<!-- Navigation -->
<?php session_start();
include '../../connected.php';
include '../../hamXuLy.php';

if(isset($_SESSION['usernameAD'])){
    $Email = $_SESSION['usernameAD'];
}
else{
    header('location: login.php');
}?>
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Petshop</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="../../index.php"><i class="fa fa-home fa-fw"></i> Trang chủ</a></li>
    </ul>

    <?php $admin = getAdmin($link,$Email); ?>
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>Xin chào: <?php echo $admin['Hoten'];?><b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin cá nhân</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Thiết lập</a>
                </li>
                <li class="divider"></li>
                <li><a href="xuLyDN.php?dangxuat=yes"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
            </ul>
        </li>
    </ul>