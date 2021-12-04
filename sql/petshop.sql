-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2018 lúc 08:50 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `petshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `IDAD` int(11) NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `ChucVu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`IDAD`, `Hoten`, `SDT`, `Email`, `MatKhau`, `ChucVu`) VALUES
(1, 'Admin', '0989954169', 'hoangvanlamcntt@gmail.com', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungloai`
--

CREATE TABLE `chungloai` (
  `idCL` varchar(10) NOT NULL,
  `tenCL` varchar(50) NOT NULL,
  `iconCL` varchar(20) NOT NULL,
  `idLoaiSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chungloai`
--

INSERT INTO `chungloai` (`idCL`, `tenCL`, `iconCL`, `idLoaiSP`) VALUES
('', 'Kangguru', '', 1),
('CL01', 'Chó', 'cho.png', 1),
('CL02', 'Thỏ', 'tho.png', 1),
('CL03', 'Chuột', 'chuot.png', 1),
('CL04', 'Mèo', 'meo.png', 1),
('CL05', 'Chim', 'chim.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `IDHoaDon` int(11) NOT NULL,
  `IDSanPham` int(11) NOT NULL,
  `Gia` double NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`IDHoaDon`, `IDSanPham`, `Gia`, `SoLuong`, `DonGia`) VALUES
(1, 8, 980000, 12, 11760000),
(2, 14, 980000, 123, 120540000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthu`
--

CREATE TABLE `hinhthu` (
  `idThu` int(11) NOT NULL,
  `hinhThu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhthu`
--

INSERT INTO `hinhthu` (`idThu`, `hinhThu`) VALUES
(1, 'boonau1.jpg'),
(1, 'boonau2.jpg'),
(1, 'boonau3.jpg'),
(2, 'chaomaoyemkhit1.jpg'),
(2, 'chaomaoyemkhit2.jpg'),
(2, 'chaomaoyemkhit3.jpg'),
(3, 'chaomao_o1.jpg'),
(3, 'chaomao_o2.jpg'),
(3, 'chaomao_o3.jpg'),
(4, 'chaomaotrungmang1.jpg'),
(4, 'chaomaotrungmang2.jpg'),
(4, 'chaomaotrungmang3.jpg'),
(5, 'chaomaobachtang.jpg'),
(5, 'chaomaobachtang1.jpg'),
(5, 'chaomaobachtang2.jpg'),
(6, 'hoami1.jpg'),
(6, 'hoami2.jpg'),
(6, 'hoami3.jpg'),
(7, 'saulungoliu1.jpg'),
(7, 'saulungoliu2.jpg'),
(7, 'saulungoliu3.jpg'),
(8, 'sauhongtrang1.jpg'),
(8, 'sauhongtrang2.jpg'),
(8, 'sauhongtrang5.jpg'),
(9, 'saungucvang1.jpg'),
(9, 'saungucvang2.jpg'),
(9, 'saungucvang3.jpg'),
(10, 'vanhkhuyenvang 1.jpg'),
(10, 'vanhkhuyenvang 2.jpg'),
(10, 'vanhkhuyenvang 3.jpg'),
(11, 'vanhkhuyenxanh1.jpg'),
(11, 'vanhkhuyenxanh2.jpg'),
(11, 'vanhkhuyenxanh3.jpg'),
(12, 'saodadautrang.jpg'),
(12, 'saodadautrang1.jpg'),
(12, 'saodadautrang2.jpg'),
(13, 'saodaxanh1.jpg'),
(13, 'saodaxanh2.jpg'),
(13, 'saodaxanh3.jpg'),
(13, 'saodaxanh4.jpg'),
(14, 'saohong1.jpg'),
(14, 'saohong2.jpg'),
(14, 'saohong3.jpg'),
(14, 'saohong4.jpg'),
(15, 'saonau1.jpg'),
(15, 'saonau2.jpg'),
(15, 'saonau3.jpg'),
(15, 'saonau4.jpg'),
(16, 'batu1.jpg'),
(16, 'batu2.jpg'),
(16, 'batu3.jpg'),
(17, 'AnhLongNgan1.jpg'),
(17, 'AnhLongNgan2.jpg'),
(17, 'AnhLongNgan3.jpg'),
(18, 'munchkin1.jpg'),
(18, 'munchkin2.jpg'),
(18, 'munchkin3.jpg'),
(18, 'munchkin4.jpg'),
(18, 'ragdoll3.jpg'),
(19, 'taicup1.jpg'),
(19, 'taicup2.jpg'),
(19, 'taicup3.jpg'),
(19, 'taicup4.jpg'),
(20, 'ragdoll1.jpg'),
(20, 'ragdoll2.jpg'),
(21, 'thanmiendien1.jpg'),
(21, 'thanmiendien2.jpg'),
(21, 'thanmiendien3.jpg'),
(22, 'mytaixoan1.jpg'),
(22, 'mytaixoan2.jpg'),
(22, 'mytaixoan3.jpg'),
(23, 'ALDTrang2.jpg'),
(23, 'ALDTrang3.jpg'),
(23, 'ALDTrang4.jpg'),
(24, 'bach1.jpg'),
(24, 'bach2.jpg'),
(24, 'bach3.jpg'),
(24, 'bach4.jpg'),
(25, 'lang1.jpg'),
(25, 'lang2.jpg'),
(25, 'lang3.jpg'),
(26, 'Hamster1.jpg'),
(26, 'Hamster2.jpg'),
(26, 'Hamster3.jpg'),
(27, 'pug1.jpg'),
(27, 'pug2.jpg'),
(27, 'pug3.jpg'),
(28, 'poodle1.jpg'),
(28, 'poodle2.jpg'),
(28, 'poodle3.jpg'),
(29, 'sussex.jpg'),
(29, 'sussex2.jpg'),
(29, 'sussex4.jpg'),
(30, 'minilop2.jpg'),
(30, 'minilop3.jpg'),
(31, 'Lionhead1.jpg'),
(31, 'Lionhead2.jpg'),
(31, 'Lionhead3.jpg'),
(32, 'himalayan.jpg'),
(32, 'himalayan1.jpg'),
(32, 'himalayan2.jpg'),
(33, 'angora1.jpg'),
(33, 'angora2.jpg'),
(33, 'angora3.jpg'),
(34, 'alaskadentrang1.jpg'),
(34, 'alaskadentrang2.jpg'),
(34, 'alaskadentrang3.jpg'),
(35, 'alaskanaudo1.jpg'),
(35, 'alaskanaudo2.jpg'),
(35, 'alaskanaudo3.jpg'),
(36, 'alaskaxamtrang1.jpg'),
(36, 'alaskaxamtrang2.jpg'),
(36, 'alaskaxamtrang3.jpg'),
(37, 'huskynaudo1.jpg'),
(37, 'huskynaudo2.jpg'),
(37, 'huskynaudo3.jpg'),
(38, 'huskyden1.jpg'),
(38, 'huskyden2.jpg'),
(38, 'huskyden3.jpg'),
(39, 'huskyxamtrang1.jpg'),
(39, 'huskyxamtrang2.jpg'),
(39, 'huskyxamtrang3.jpg'),
(40, 'foxsox1.jpeg'),
(40, 'foxsox2.jpg'),
(40, 'foxsox3.jpg'),
(41, 'becgie1.jpg'),
(41, 'becgie2.jpg'),
(41, 'becgie3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `IDHD` int(11) NOT NULL,
  `IDKH` int(11) DEFAULT NULL,
  `NgayLap` date NOT NULL,
  `TongTien` double NOT NULL DEFAULT '0',
  `SoDienThoai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`IDHD`, `IDKH`, `NgayLap`, `TongTien`, `SoDienThoai`) VALUES
(1, 4, '2018-06-28', 11760000, '0123'),
(2, 4, '2018-06-28', 120540000, '0123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKH` int(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `IDUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`IDKH`, `HoTen`, `Email`, `SDT`, `DiaChi`, `IDUser`) VALUES
(1, 'Hoàng Văn Lâm', 'hoangvanlamcntt@gmail.com', '0989954169', 'quan12', 1),
(2, 'Na', '123@gmail.com', '0123456', 'Tô Ký', 2),
(4, 'Tí', '123@abc.com', '0123', 'abc', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `idLoai` varchar(10) NOT NULL,
  `idCL` varchar(10) NOT NULL,
  `tenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`idLoai`, `idCL`, `tenLoai`) VALUES
('Loai01', 'CL05', 'Chào Mào'),
('Loai02', 'CL05', 'Họa Mi'),
('Loai03', 'CL05', 'Vành Khuyên'),
('Loai04', 'CL05', 'Sáo'),
('Loai05', 'CL05', 'Họ Sâu'),
('Loai06', 'CL04', 'Ba Tư'),
('Loai07', 'CL04', 'Anh Lông Ngắn'),
('Loai08', 'CL04', 'Munchkin'),
('Loai09', 'CL04', 'Anh Lông Dài trắng'),
('Loai10', 'CL03', 'Chuột Bạch'),
('Loai11', 'CL03', 'Chuột Hamster '),
('Loai12', 'CL03', 'Chuột Lang'),
('Loai13', 'CL02', 'Sussex'),
('Loai14', 'CL02', 'Minilop'),
('Loai15', 'CL02', 'Anogora'),
('Loai16', 'CL02', 'Himalayan'),
('Loai17', 'CL02', 'Lionhead'),
('Loai18', 'CL01', 'Alaska'),
('Loai19', 'CL01', 'Boo'),
('Loai20', 'CL01', 'Husky '),
('Loai21', 'CL01', 'Fox Sóc'),
('Loai22', 'CL01', 'Pecgie'),
('Loai23', 'CL01', 'Poodle'),
('Loai24', 'CL01', 'Pug'),
('Loai25', 'CL04', 'Tai Cụp'),
('Loai26', 'CL04', 'Ragdoll'),
('Loai27', 'CL04', 'Thần Miến Điện'),
('Loai28', 'CL04', 'Mỹ Tai Xoắn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idLoaiSP` int(11) NOT NULL,
  `tenLoaiSP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoaiSP`, `tenLoaiSP`) VALUES
(1, 'Thú nuôi'),
(2, 'Thức ăn'),
(3, 'Lồng thú'),
(4, 'Phụ kiện khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `longthu`
--

CREATE TABLE `longthu` (
  `idLongThu` varchar(10) NOT NULL,
  `idCL` varchar(10) NOT NULL,
  `tenLongThu` varchar(50) NOT NULL,
  `hinhLongThu` varchar(30) NOT NULL,
  `giaLongThu` int(10) NOT NULL,
  `soLuongThuTrongLong` int(11) NOT NULL,
  `moTaLongThuNuoi` varchar(10000) NOT NULL,
  `idLoaiSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `longthu`
--

INSERT INTO `longthu` (`idLongThu`, `idCL`, `tenLongThu`, `hinhLongThu`, `giaLongThu`, `soLuongThuTrongLong`, `moTaLongThuNuoi`, `idLoaiSP`) VALUES
('Long01', 'CL05', 'Lồng Bầu', 'Lồng Bầu,Jjpg', 1400, 1, 'Phù hợp với nuôi chào mào có tật bu lồng, ngoái, lộn.', 3),
('Long02', 'CL05', 'Lồng Đấu Tre', 'Lồng Đấu Tre.jpg', 900, 1, 'Đáy lồng làm bằng tre, đẹp, sang trọng.', 3),
('Long03', 'CL05', 'Lồng Kỹ', 'Lồng Kỹ.jpg', 1200, 1, 'Thanh lồng mảnh, cứng tuyệt đối.', 3),
('Long04', 'CL05', 'Lồng Tròn', 'Lồng Tròn.jpg', 1100, 1, 'Phù hợp với nuôi chào mào có tật bu lồng, ngoái, lộn.', 3),
('Long05', 'CL01', 'Dây Dắt Trợ Lực', 'Dây Dắt Trợ Lực.jpg', 90, 1, '\"Để giải quyết sự băn khoăn cho các khổ chủ: Làm thế nào để đi chơi cho thoải mái mà thú cưng của mình không bị bắt mắt, hay nó chạy đi mất .Chất liệu chắc chắn và thiết kế dày dặn cho độ bền cao, đồng thời tạo cảm giác êm ái khi đeo. Thiết kế khóa giúp bạn dễ dàng đeo hoặc tháo mở dây và vòng một cách nhanh chóng.\"', 3),
('Long06', 'CL01', 'Dây Giữ Chó trên Ô Tô', 'Dây Giữ Chó trên Ô Tô.jpg', 60, 1, '\"Để giải quyết sự băn khoăn cho các khổ chủ: Làm thế nào để đi chơi cho thoải mái mà thú cưng của mình không bị bắt mắt, hay nó chạy đi mất .Chất liệu chắc chắn và thiết kế dày dặn cho độ bền cao, đồng thời tạo cảm giác êm ái khi đeo. Thiết kế khóa giúp bạn dễ dàng đeo hoặc tháo mở dây và vòng một cách nhanh chóng.\"', 3),
('Long07', 'CL01', 'Dây Tập Chạy', 'Dây Tập Chạy.jpg', 85, 1, '\"Để giải quyết sự băn khoăn cho các khổ chủ: Làm thế nào để đi chơi cho thoải mái mà thú cưng của mình không bị bắt mắt, hay nó chạy đi mất .Chất liệu chắc chắn và thiết kế dày dặn cho độ bền cao, đồng thời tạo cảm giác êm ái khi đeo. Thiết kế khóa giúp bạn dễ dàng đeo hoặc tháo mở dây và vòng một cách nhanh chóng.\"', 3),
('Long08', 'CL01', 'Nơ Đeo Cổ Chuông', 'Nơ Đeo Cổ Chuông.jpg', 75, 1, 'Vòng đeo được thiết kế nhằm mục đích tránh thất lạc', 3),
('Long09', 'CL01', 'Vòng Cổ In Hình', 'Vòng Cổ In Hình.jpg', 25, 1, 'Vòng đeo được thiết kế nhằm mục đích tránh thất lạc những hình ảnh vô cùng dễ thương', 3),
('Long10', 'CL03', 'Lồng Nhà Dẻo', 'Lồng Nhà Dẻo.jpg', 320, 5, 'Bánh xe chạy đồ chơi, đường kính 10cm, giúp Hamster vừa sinh hoạt vừa vui chơi giải trí.Thiết bị hỗ trợ gắn bánh xe vào lồng Khay đựng thức ăn cho Hamster.', 3),
('Long11', 'CL03', 'Lồng Sân Chơi Nhỏ', 'Lồng Sân Chơi Nhỏ.jpg', 240, 6, 'Bánh xe chạy đồ chơi, đường kính 10cm, giúp Hamster vừa sinh hoạt vừa vui chơi giải trí.Thiết bị hỗ trợ gắn bánh xe vào lồng Khay đựng thức ăn cho Hamster.', 3),
('Long12', 'CL03', 'Lồng Túi Đeo', 'Lồng Túi Đeo.jpg', 160, 4, 'Bánh xe chạy đồ chơi, đường kính 10cm, giúp Hamster vừa sinh hoạt vừa vui chơi giải trí.Thiết bị hỗ trợ gắn bánh xe vào lồng Khay đựng thức ăn cho Hamster.', 3),
('Long13', 'CL03', 'Lồng Vòm Lớn', 'Lồng Vòm Lớn.jpg', 240, 9, 'Bánh xe chạy đồ chơi, đường kính 10cm, giúp Hamster vừa sinh hoạt vừa vui chơi giải trí.Thiết bị hỗ trợ gắn bánh xe vào lồng Khay đựng thức ăn cho Hamster.', 3),
('Long14', 'CL03', 'Lồng Xách Tay', 'Lồng Xách Tay.jpg', 180, 3, 'Lồng được thiết kế để xách tay vô cùng tiện lợi', 3),
('Long15', 'CL04', 'Dây Dắt Vòng Hoa', 'Dây Dắt Vòng Hoa.jpg', 60, 1, 'Phần dây có tay cầm thoải mái , phần vòng cổ có chốt điều chỉnh to- nhỏ, hai phần được nối với nhau bằng khóa inox rất chắc chắn và có thể tháo rời tiện lợi', 3),
('Long16', 'CL04', 'Vòng Cổ Da Đính Đá', 'Vòng Cổ Da Đính Đá.jpg', 120, 1, 'kích thước 1,5 x 30cm, được làm từ da bò dẻo dài chịu mài mòn cao mà vẫn thoáng khí , tạo cảm giác thoải mái cho vật nuôi khi sử dụng. Móc khóa được làm từ inox,sáng bóng bền đẹp, mang đến vẻ thời trang cho vật nuôi ', 3),
('Long17', 'CL04', 'Vòng Cổ Đệm Hoa', 'Vòng Cổ Đệm Hoa.jpg', 40, 1, 'size 1.5 cm : 45.000, size 2 cm : 55.000, size 2.5 cm :65.000, size 3 cm : 75.000', 3),
('Long18', 'CL04', 'Vòng Cổ Đệm', 'Vòng Cổ Đệm.jpg', 50, 1, 'Được làm bằng vải cotton cao cấp tạo cảm giác thoải mái cho thú cưng. Khóa cài được làm bằng inox không gỉ, rất an toàn và dễ sử dụng. Đặc biệt có nhiều màu sắc có thể tùy chỉnh kích thước sử dụng, không bám bụi và mau khô, có lót đệm êm ái', 3),
('Long19', 'CL04', 'Vòng Cổ SiliCon', 'Vòng Cổ SiliCon.jpg', 40, 1, 'Vòng cổ được làm từ silicon mềm mại, đảm bảo không gây tổn thương cho vật nuôi, đi kèm vòng là chiếc chuông nhỏ phát ra tiếng kêu leng keng vui tai mỗi khi thú nuôi đi lại, vòng cổ có thể điều chỉnh to- nhỏ tùy ứng và có inox để móc vào dây dắt', 3),
('Long20', 'CL02', 'Lồng Thỏ Loại 1\r\n', '100cm_60cm_30cm.jpg', 170, 2, 'Lồng 2 ngăn dành cho thỏ từ độ tuổi 2 đến 3 tuổi', 3),
('Long21', 'CL02', 'Lồng Thỏ Loại 2\r\n', '100cm_70cm_30cm.jpg', 180, 3, 'Lồng 2 ngăn dành cho thỏ từ độ tuổi 2 đến 3 tuổi', 3),
('Long22', 'CL02', 'Lồng Thỏ Loại 3', '120cm_60cm_30cm.jpg', 220, 3, 'Lồng 2 ngăn dành cho thỏ từ độ tuổi 2 đến 3 tuổi', 3),
('Long23', 'CL02', 'Lồng Thỏ Loại 4', '120cm_60cm_35cm.jpg', 195, 4, 'Lồng 2 ngăn dành cho thỏ từ độ tuổi 2 đến 3 tuổi', 3),
('Long24', 'CL02', 'Lồng 2 ngăn 5', '120cm_60cm_40cm.jpg', 210, 5, 'Lồng 2 ngăn dành cho thỏ từ độ tuổi 2 đến 3 tuổi', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phukienkhac`
--

CREATE TABLE `phukienkhac` (
  `idPhuKienKhac` int(10) NOT NULL,
  `tenPhuKienKhac` varchar(50) NOT NULL,
  `hinhPhuKienKhac` varchar(50) NOT NULL,
  `giaPhuKienKhac` int(10) NOT NULL,
  `moTaPhuKienKhac` varchar(1000) NOT NULL,
  `idLoaiSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phukienkhac`
--

INSERT INTO `phukienkhac` (`idPhuKienKhac`, `tenPhuKienKhac`, `hinhPhuKienKhac`, `giaPhuKienKhac`, `moTaPhuKienKhac`, `idLoaiSP`) VALUES
(1, 'BaoLo Đeo Lồng Chim', 'BaoLo Đeo Lồng Chim.jpg', 160, 'Ba lô được thiết kê đơn giản tiện dụng để có thể đeo lồng chim khi đang chạy xe một mình hoặc là cánh tay của bạn đang bận phải xách vật khác', 4),
(2, 'Bát Phíp Tròn Chuột', 'Bát Phíp Tròn Chuột.jpg', 30, 'Bát được thiết kế dùng để đựng thức ăn cho các bé chuột ', 4),
(3, 'Bát Sứ Tròn Chuột ', 'Bát Sứ Tròn Chuột .jpg', 15, 'Bát được thiết kế để đựng thức ăn , Bát được làm từ sứ rất kiểu cách', 4),
(4, 'Máng Sành Thỏ', 'Máng Sành Thỏ.jpg', 15, 'Máng dành cho thỏ ăn sẽ giúp các bạn không phải đau đầu trong việc nghĩ nên lấy vật gì để đựng đồ ăn cho thỏ nữa đúng không nào. Chúng tôi cung cấp hai loại máng thỏ. Trên đây là máng làm từ vật liệu Sành. Các bạn có thể tham khảo', 4),
(5, 'Máng Tôn Thỏ', 'Máng Tôn Thỏ.jpg', 15, 'Máng dành cho thỏ ăn sẽ giúp các bạn không phải đau đầu trong việc nghĩ nên lấy vật gì để đựng đồ ăn cho thỏ nữa đúng không nào. Chúng tôi cung cấp hai loại máng thỏ. Trên đây là máng làm từ vật liệu tôn.Các bạn có thể tham khảo', 4),
(6, 'Móc Lồng Chim', 'Móc Lồng Chim.jpg', 75, 'Trong quá trình sử dụng có thể thay đổi nhiều loại móc cho lồng chim thì quả là một điều thú vị cho các bạn đam mê thú chơi chim đúng không nào . Hôm nay chúng ta mang đến một sản phẩm mới về móc lồng chim nhằm phục vụ thêm nhu cầu của các bạn', 4),
(7, 'VanInox Thỏ Nước', 'VanInox Thỏ Nước.jpg', 10, 'Nhằm mục đích để cho các bé thỏ có thể uống nước tiện lợi hơn thì chúng tôi còn bán thêm các loại van dành riêng cho các bé thỏ ', 4),
(8, 'Van Đồng Thỏ Nước', 'VanĐồng Thỏ Nước.jpg', 3, 'Nhằm mục đích để cho các bé thỏ có thể uống nước tiện lợi hơn thì chúng tôi còn bán thêm các loại van dành riêng cho các bé thỏ ', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDUser` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `MatKhau` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`IDUser`, `Email`, `SDT`, `MatKhau`) VALUES
(1, 'hoangvanlamcntt@gmail.com', '0989954169', '123456'),
(2, '123@gmail.com', '0123456', '123456'),
(4, '123@abc.com', '0123', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `IDNews` int(11) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `TieuDe` text NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`IDNews`, `icon`, `TieuDe`, `NoiDung`) VALUES
(1, 'sale2.png', '[Thông báo] Big sale ra đời của websie', 'Nhân dịp website Điện tử Product vào hoạt động, Điện tử Product mở chương trình khuyến mãi: Giảm từ 30% các loại mặt hàng trong shop'),
(2, 'sale.png', '[Sale] Giảm 20% các mặt hàng trong Thiết bị âm thanh', 'Giảm ngay 20% khi đặt mua các sản phẩm có trong danh mục thiết bị âm thanh, miễn phí vận chuyển cho nội thành phố Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucan`
--

CREATE TABLE `thucan` (
  `idThucAn` varchar(10) NOT NULL,
  `idCL` varchar(10) NOT NULL,
  `tenThucAn` varchar(50) NOT NULL,
  `hinhThucAn` varchar(30) NOT NULL,
  `giaThucAn` int(10) NOT NULL,
  `moTaThucAn` varchar(1000) NOT NULL,
  `idLoaiSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thucan`
--

INSERT INTO `thucan` (`idThucAn`, `idCL`, `tenThucAn`, `hinhThucAn`, `giaThucAn`, `moTaThucAn`, `idLoaiSP`) VALUES
('TA01', 'CL05', 'Cám Chào Mào', 'camchaomao.jpg', 35, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA02', 'CL05', 'Cám Chích Chòe', 'camchicchoe.jpg', 55, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA03', 'CL05', 'Cám Họa Mi', 'camhoami.jpg', 55, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA04', 'CL05', 'Cám Vành Khuyên ', 'camvanhkhuyen.jpg', 65, 'Tăng chất sơ cân bằng tiêu hóa\r\n', 2),
('TA05', 'CL01', '.Cookie Xương', 'cookiexuong.jpg', 10, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA06', 'CL01', 'RoYal Canin', 'royalcanin.jpg', 135, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA07', 'CL01', 'Thanh Gân Bò', 'thanhganbo.jpg', 55, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA08', 'CL01', 'Thức Ăn Huấn Luyện Vị Gà', 'thucanhuanluyenviga.jpg', 25, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA09', 'CL03', 'Bánh Trứng Alex', 'banhtrungalex.jpg', 40, 'Tăng chất đạm cân bằng tiêu hóa', 2),
('TA10', 'CL03', 'Đu Đủ Dẻo', 'dududeo.jpg', 40, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA11', 'CL03', 'Dứa Dẻo', 'duadeo.jpg', 40, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA12', 'CL03', 'Xương Sữa', 'xuongsua.jpg', 50, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA13', 'CL04', 'PateRoYal', 'PateRoYal.jpg', 45, 'Tăng chất sơ cân bằng tiêu hóa', 2),
('TA14', 'CL04', 'Thức Ăn Dinh Dưỡng Cao Vị Heo', 'thucanadinhduong Cao Vị Heo.', 45, 'Tăng  cân bằng tiêu hóa', 2),
('TA15', 'CL04', 'Thức Ăn Sẵn Thịt Gà', 'Thức Ăn Sẵn Thịt Gà.jpg', 32, 'Tăng  cân bằng tiêu hóa', 2),
('TA16', 'CL04', 'Thức Ăn Snacks', 'Thức Ăn Snacks.jpg', 95, 'Tăng  cân bằng tiêu hóa', 2),
('TA17', 'CL02', 'Cỏ nén nâu', 'conennau.jpg', 150, 'Đối với thỏ con từ 2 tháng tuổi bạn nên tập ăn', 2),
('TA18', 'CL02', 'Thức ăn nén thanh', 'thucannenthanhvitapol.jpg', 120, 'Giúp pet mài răng tốt', 2),
('TA19', 'CL02', 'Cỏ khô GEX TYMOTHY ', 'cokhogex.jpg', 295, 'Ngăn ngừa các bệnh tiêu hóa đường ruột', 2),
('TA20', 'CL02', 'Cỏ nén WEIOUS ', 'thucannenvien.jpg', 50, 'Cung cấp đủ dinh dưỡng cho Thỏ', 2),
('TA21', 'CL03', 'Thức ăn nén thanh', 'thucannenthanhvitapol.jpg', 120, 'Giúp pet mài răng tốt', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thunuoi`
--

CREATE TABLE `thunuoi` (
  `idThu` int(10) NOT NULL,
  `idLoai` varchar(10) NOT NULL,
  `tenThu` varchar(50) NOT NULL,
  `tuoiThu` varchar(10) NOT NULL,
  `canNangThu` varchar(10) NOT NULL,
  `gioiTinhThu` varchar(10) NOT NULL,
  `hinhThu` varchar(30) DEFAULT NULL,
  `giaThu` float NOT NULL,
  `moTaThuNuoi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thunuoi`
--

INSERT INTO `thunuoi` (`idThu`, `idLoai`, `tenThu`, `tuoiThu`, `canNangThu`, `gioiTinhThu`, `hinhThu`, `giaThu`, `moTaThuNuoi`) VALUES
(1, 'Loai19', 'Boo Nâu', '1.5', '2.5', 'Cái', 'boonau.jpg', 784000, 'lông dày và dài (cần cắt tỉa để ngắn lại), mặt tròn, mõm ngắn thay vì mặt cáo, mõm dài của phốc sóc truyền thống	'),
(2, 'Loai01', 'Chào Mào Yếm Khít\r\n', '2', '0.3', 'Trống ', 'chaomaoyemkhit1.jpg\r\n', 200000, 'có phần yếm màu đen nhìn như một vòng tròn rất đẹp mắt, thường thấy ở gốc bổi Trà My của Bác Sơn Cao.Từ phần đầu đến xuống phía ức cả hai bên đều có 1 vòng màu đen tạo thành cái yếm và khít nhau															'),
(3, 'Loai01', 'Chào Mào Ô\r\n', '2', '0.2', 'Trống', 'chaomao_o.jpg\r\n', 200000, 'phía trước yếm, bụng của chúng có một màu đen tuyền'),
(4, 'Loai01', 'Chào Mào Trung Mang \r\n', '3', '0.3', 'Mái', 'chaomaotrungmang.jpg\r\n', 200000, 'mào lân hoặc hơi lân, hầu to, má trắng sốp, nhưng bộ yếm lại không đậm, sâu (yếm treo) hoặc khoảng giữa 2 yếm thay vì màu trắng thì lại có màu hơi xám.Về ngoại hình thì giống chào mào Trung Mang hơi nhỏ, thon dài hơn giống nơi khác khoảng 3cm, mũ cao vươn ra phía trước và vòng cổ màu đen chạm nhau dưới ức. Đặc biệt loài chim này mà đi thi đấu thì khỏi phải nói, rất là hung đấy.															\r\n'),
(5, 'Loai01', 'Chào Mào Bạch Tạng\r\n', '4', '0.2', 'Trống', 'chaomaobachtang.jpg\r\n', 150000, 'Chào mào bạch tạng là loại chim đột biến gien có màu lông trắng như tuyết toàn thân, chân hồng, mỏ hồng và mắt hồng'),
(6, 'Loai02', 'Họa Mi Vàng\r\n', '3', '0.3', 'Mái', 'hoami.jpeg\r\n', 150000, 'Chọn lông khô, tơi, mỏng, ngắn, ít hoa, sáng màu, vùng lông trắng dưới bụng  rộng,Tảng đầu to, phẳng, gáy phải dài, lông đầu thưa và ngắn,  ít hoa  ,hai bên thái dương  vuông '),
(7, 'Loai05', 'Sâu Lưng Ôliu\r\n', '2', '0.25', 'Mái', 'saulungoliu.jpeg\r\n', 150000, ' kích thước 9cm. Chim trống: Có màu đỏ tươi ở phía lưng kéo dài từ trán xuống gốc đuôi. Chim mái: Phía lưng có màu xanh ôliu, hông đỏ sẫm và đuôi đen; mặt bụng màu ô liu nhạt. Chim non: Không có màu đỏ thẫm nhưng mỏ màu da cam tươi'),
(8, 'Loai05', 'Sâu Họng Trắng\r\n', '4', '0.3', 'Trống', 'sauhongtrang.jpg\r\n', 140000, '\"Loài chim này có chiều dài 10 cm, đuôi ngắn, mỏ cong dày ngắn và lưỡi hình ống. Các đặc trưng cuối phản ánh tầm quan trọng của mật hoa trong chế độ ăn uống của nó, mặc dù quả, nhện và côn trùng cũng được nó ăn. Chim sâu họng trắng trống có phần lưng màu lam-đen, họng và ngực trên trắng, ngực dưới và bụng vàng. Chim mái xỉn màu hơn,với phần lưng màu nâu ô liu.\"															'),
(9, 'Loai05', 'Sâu Ngực Vàng\r\n', '5', '0.29', 'Mái', 'saungucvang.jpg\r\n', 140000, 'Kích thước 8cm. Kích thước rất nhỏ, trông có màu xám, mặt bụng sáng hơn, mắt đen. Chim non có mỏ đen.															'),
(10, 'Loai03', 'Vành Khuyên Vàng\r\n', '3', '0.35', 'Trống', 'vanhkhuyenvang.jpg\r\n', 130000, 'phần lông ở dưới mỏ, ở ngực và bụng chim có sắc lông vàng óng.'),
(11, 'Loai03', 'Vành Khuyên Xanh\r\n', '2', '0.36', 'Trống', 'vanhkhuyenxanh.jpg\r\n', 130000, 'màu lông xanh phớt ở trên lưng, bụng có màu vàng chanh, phần lông dưới mỏ có màu vàng lục'),
(12, 'Loai04', 'Sáo Đá Đầu Trắng\r\n', '4', '0.33', 'Mái', 'saodadautrang.jpg\r\n', 100000, 'Kích thước 24cm. Toàn bộ đầu có màu lông trắng. Khi bay để lộ mảng lông trắng lớn ở gốc lông cánh sơ cấp. Mỏ đỏ. Chim mái và chim non có màu tối.															'),
(13, 'Loai04', 'Sáo Đá Xanh\r\n', '4', '0.34', 'Mái', 'saodaxanh.jpg\r\n', 100000, 'Kích thước 22cm. Bộ lông có nhiều màu xen kẽ, mỏ nhọn sắc, màu vàng. Mùa đông có rất nhiều đốm trắng và nâu sẫm, mỏ màu nâu. Chim non màu nâu tối, họng hơi xám và mỏ màu tối.'),
(14, 'Loai04', 'Sáo Hồng\r\n', '2', '0.25', 'Trống', 'saohong.jpg\r\n', 100000, 'Kích thước 22cm. Chim trống trưởng thành vào mùa xuân và mùa thu có bộ lông màu hồng và đen dễ nhận thấy. Chim mái có màu lông tối hơn. Đầu mùa đông màu hồng bị các mút lông nâu sẫm lấn át, nhưng sau đó mất dần đi.				'),
(15, 'Loai04', 'Sáo Nâu\r\n', '3', '0.36', 'Mái', 'saonau.jpg\r\n', 350000, 'Kích thước 25cm. Chim trưởng thành có bộ lông màu nâu tối, đầu đen. Mỏ, da vùng mắt và giò có màu vàng. Chim non có màu xỉn hơn. Khi bay thấy rõ vạt lông trắng ở cánh.	'),
(16, 'Loai06', 'Ba Tư', '0.6', '0.9', 'Trống', 'ba_tu.jpg\r\n', 350000, 'Lông 2 lớp với lớp lông dài phía ngoài và lớp lông ngắn khá dày ở bên trong. Đuôi của chúng luôn xù nên việc chăm sóc cho bộ lông của giống mèo này là một công việc rất quan trọng nhất	'),
(17, 'Loai07', 'Anh Lông Ngắn', '1.5', '2.3', 'Cái', 'Anhlongngan.jpg\r\n', 150000, 'Thân hình mũm mĩm, lông ngắn và dày cùng với khuôn mặt to. Màu sắc phổ biến nhất là màu xám xanh	'),
(18, 'Loai08', 'Munchkin', '0.5', '1.2', 'Cái', 'Munchkin.jpg', 450000, 'Đôi chân ngắn cùng với dáng đi chảy mỡ,Chiều dài cơ thể Munchkin gấp 2,5 lần chiều cao (chiều cao của giống mèo này là 18-20 cm).Bốn chân không bao giờ được duỗi thẳng, không khuỵu gối khiến Munchkin cực kỳ đáng yêu. Cân nặng của chúng chỉ từ  2-5 kg.	'),
(19, 'Loai25', 'Tai Cụp', '4', '3.5', 'Cái', 'taicup.jpg', 458000, 'Đôi tai gấp về phía trước. Với dáng người tròn trĩnh, bộ lông ngắn dày, đôi mắt to tròn ngọt ngào, bốn chấn ngắn rất đáng yêu				'),
(20, 'Loai26', 'Ragdoll', '5', '4.5', 'Trống', 'Ragdoll.jpg', 500000, 'Giống mèo mang ngoại hình quyến rũ cùng bản tính nhẹ hàng, hòa đồng và tình cảm.'),
(21, 'Loai27', 'Thần Miến Điện', '2', '2.6', 'Đực', 'thanmiendien.jpg', 587000, 'Kích thước cơ thể trung bình, khá cân đối và dài. Cơ thể của chúng sẽ phát triển hoàn toàn vào thời điểm 3 tuổi. Trung bình một em mèo Miến Điện trưởng thành có thể cao khoảng 76cm và nặng khoảng 8kg,đầu tròn cùng gương mặt tròn trĩnh, đầy đặn trông rất dễ thương. Cặp mắt của chúng thường có màu xanh nước biển và nhìn như hình ô-van lớn. Đôi tai của mèo luôn vểnh cao phía trên đầu với chóp tai khá nhọn.'),
(22, 'Loai28', 'Mỹ Tai Xoắn', '1.2', '1.3', 'Đực', 'mytaixoan.jpg', 896000, 'Đôi tai xoắn tròn xinh đẹp và thanh lịch, loài mèo này được những người yêu mèo đặc biệt yêu thích không chỉ bởi ngoại hình sang trọng của chúng mà chúng còn thật đáng yêu bởi sự thân thiện và tình cảm, loài mèo này cũng có phẩm chất trung thành không kém loài chó, đó là điều tuyệt vời ở giống mèo tai xoắn này'),
(23, 'Loai09', 'Anh Lông Dài Trắng', '0.7', '1.6', 'Đực', 'ALD_mau_Trang1.jpg', 230000, 'bộ lông cực kỳ dài, giúp chúng giữ ấm rất tốt. Màu lông màu trắng'),
(24, 'Loai10', 'Chuột Bạch', '0.2', '0.2', 'Đực', 'bạch1.jpg\r\n', 80000, 'vẻ ngoài trắng nhỏ hình dáng, đường nét khuôn mặt thon với mỏ dài như chuột nhà.'),
(25, 'Loai10', 'Chuột Lang\r\n', '0.6', '0.35', 'Cái', 'Lang3.jpg\r\n', 80000, 'chiều dài từ 20 đến 25 cm,Tai của chúng rất nhạy, có thể nghe các âm thanh nhỏ. Lông có hai lớp để giữ ấm cơ thể. Nó thường sống trung bình bốn đến năm năm'),
(26, 'Loai10', 'Chuột Hamster\r\n', '0.4', '0.39', 'Đực', 'Hamster.jpg\r\n', 80000, 'Chuột hamster có kích thước nhỏ; bộ lông mềm bao phủ khắp cơ thể,Chuột hams có đuôi nhưng cực kì ngắn và có 1 lớp lông mỏng bao phủ dường như chẳng để làm gì cả. Răng của chuột hams dài, có hai răng cửa to lớn 															'),
(27, 'Loai24', 'Pug', '1.6', '3.6', 'Đực', 'pug.jpg', 986000, 'mặt ngắn, mũi ngắn và ngộ nghĩnh'),
(28, 'Loai23', 'Poodle', '1.8', '4.1', 'Đực', 'poodle.jpg', 795000, 'Cao < 25,4cm, trọng lượng từ 2,5 – 4kg	'),
(29, 'Loai13', 'Sussex', '1.5', '1.5', 'Đực', 'sussex1.jpg\r\n', 670000, 'Lông chủ yếu có màu vàng và màu kem. Cân nặng trung bình từ 3,2-3,6 kg.	'),
(30, 'Loai14', 'Minilop', '2', '1.9', 'Cái', 'minilop.jpg\r\n', 500000, 'Mini Lop là một giống thỏ rất phổ biến đó là đặc trưng trên khắp nước Mỹ . Với bộ lông dày và tai cụp. Rất được ưa chuộng và nuôi như thú kiểng															'),
(31, 'Loai15', 'Lionhead', '1', '2.6', 'Đực', 'lionhead2.jpg\r\n', 400000, 'kích thước rất nhỏ kích thước của một bé thỏ sư tử lion head chỉ tối đa tới 2kg Với bộ lông xù															'),
(32, 'Loai16', 'Himalayan', '2', '3.9', 'Đực', 'himalayan4.jpg\r\n', 400000, 'lông có màu trắng toàn bộ. khi lớn lên mới xuất hiện màu đen ở các vùng tai, chân, đuôi, mũi và màu đen này phân bố nhiều/ít, hình dạng thế nào còn tuỳ thuộc vào nhiệt độ môi trường chú thỏ sinh sống															'),
(33, 'Loai17', 'Anogora', '2', '4.6', 'Đực', 'anogora.jpg\r\n', 300000, 'lông mềm, mượt và xù bông, đẹp và đáng yêu, nổi tiếng bởi bộ lông xù to gấp nhiều lần cơ thể. Bề ngoài chúng Loài thỏ khổng lồ, lông xù như cục bông, tuy chỉ nặng hơn 2 kg nhưng trông giống như sinh vật khổng lồ khi sở hữu lớp lông dày tới 50 cm															'),
(34, 'Loai18', 'Alaska Đen Trắng\r\n', '0.8', '3', 'Đực', 'alaskađen.jpg\r\n', 678000, 'vẻ ngoài dũng mãnh, nhanh nhẹn và khá thông minh,màu: đen trắng	'),
(35, 'Loai18', 'Alaska Nâu Đỏ 2', '0.9', '2.5', 'Đực', 'alaskanaudo.jpg\r\n', 654000, 'vẻ ngoài dũng mãnh, nhanh nhẹn và khá thông, màu: nâu đỏ				'),
(36, 'Loai18', 'Alaska Xám Trắng\r\n', '1.3', '3.5', 'Cái', 'alaskaxamtrang.jpg\r\n', 355000, 'vẻ ngoài dũng mãnh, nhanh nhẹn và khá thông minh,màu: xám trắng			'),
(37, 'Loai20', 'Husky Nâu Đỏ\r\n', '0.9', '3', 'Đực', 'huskynaudoduc.jpg\r\n', 667000, 'Lông kép dày - lông trong dày & lông ngoài mềm.chân, mõm, đốm cuối đuôi là lông trắng, đa phần màu nâu đỏ			'),
(38, 'Loai20', 'Husky Đen\r\n', '0.8', '2', 'Cái', 'huskyden.jpg\r\n', 888000, 'Lông kép dày - lông trong dày & lông ngoài mềm.chân, mõm, đốm cuối đuôi là lông trắng, đa phần màu nâu đen	'),
(39, 'Loai20', 'Husky Xám Trắng\r\n', '0.7', '2', 'Đực', 'huskyxamtrang.jpg\r\n', 889000, 'Lông kép dày - lông trong dày & lông ngoài mềm.chân, mõm, đốm cuối đuôi là lông trắng, đa phần màu xám trắng	'),
(40, 'Loai21', 'Fox Sóc Trắng\r\n', '2', '2.9', 'Đực', 'foxsoc.jpg\r\n', 977000, 'lông dày, mập mạp, mõm ngắn, mặt gấu. lông bông gòn															'),
(41, 'Loai22', 'Pecgie\r\n', '0.9', '3.9', 'Đực', 'becgie.jpg\r\n', 980000, 'vết căn không  hở,2 chân trước thẳng và đều nhau. Xương bả vai và xương đòn mạnh, dài tương đương và sát với thân hình. Cổ chân dài khoảng 1/3 so với chiều dài cẳng chân			');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `IDKH` int(11) NOT NULL,
  `idThu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`IDKH`, `idThu`) VALUES
(2, 38),
(4, 34);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDAD`),
  ADD UNIQUE KEY `emailDN` (`Email`);

--
-- Chỉ mục cho bảng `chungloai`
--
ALTER TABLE `chungloai`
  ADD PRIMARY KEY (`idCL`),
  ADD KEY `idloaisp_frkey` (`idLoaiSP`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`IDHoaDon`,`IDSanPham`),
  ADD KEY `IDSanPham` (`IDSanPham`);

--
-- Chỉ mục cho bảng `hinhthu`
--
ALTER TABLE `hinhthu`
  ADD PRIMARY KEY (`idThu`,`hinhThu`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IDHD`),
  ADD KEY `IDKhachHang` (`IDKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKH`),
  ADD UNIQUE KEY `IDUser` (`IDUser`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idLoai`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idLoaiSP`);

--
-- Chỉ mục cho bảng `longthu`
--
ALTER TABLE `longthu`
  ADD PRIMARY KEY (`idLongThu`),
  ADD KEY `idloaisp_long_frkey` (`idLoaiSP`);

--
-- Chỉ mục cho bảng `phukienkhac`
--
ALTER TABLE `phukienkhac`
  ADD PRIMARY KEY (`idPhuKienKhac`),
  ADD KEY `idloaisp_pkk_frkey` (`idLoaiSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDUser`),
  ADD UNIQUE KEY `email` (`Email`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`IDNews`);

--
-- Chỉ mục cho bảng `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`idThucAn`),
  ADD KEY `idloaisp_thucan_frkey` (`idLoaiSP`);

--
-- Chỉ mục cho bảng `thunuoi`
--
ALTER TABLE `thunuoi`
  ADD PRIMARY KEY (`idThu`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`IDKH`,`idThu`),
  ADD KEY `fr_thunuoi` (`idThu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `IDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `IDHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phukienkhac`
--
ALTER TABLE `phukienkhac`
  MODIFY `idPhuKienKhac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `IDNews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thunuoi`
--
ALTER TABLE `thunuoi`
  MODIFY `idThu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chungloai`
--
ALTER TABLE `chungloai`
  ADD CONSTRAINT `idloaisp_frkey` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhthu`
--
ALTER TABLE `hinhthu`
  ADD CONSTRAINT `idThu_Fore` FOREIGN KEY (`idThu`) REFERENCES `thunuoi` (`idThu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `IDUser_FRK` FOREIGN KEY (`IDUser`) REFERENCES `taikhoan` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `longthu`
--
ALTER TABLE `longthu`
  ADD CONSTRAINT `idloaisp_long_frkey` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phukienkhac`
--
ALTER TABLE `phukienkhac`
  ADD CONSTRAINT `idloaisp_pkk_frkey` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thucan`
--
ALTER TABLE `thucan`
  ADD CONSTRAINT `idloaisp_thucan_frkey` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `fr_khachhang` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`IDKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fr_thunuoi` FOREIGN KEY (`idThu`) REFERENCES `thunuoi` (`idThu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
