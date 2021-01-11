-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 02:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cua_hang_banh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tieu_de` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `hinh_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chi_tiet_san_pham`
--

CREATE TABLE `tbl_chi_tiet_san_pham` (
  `id_chi_tiet_san_pham` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_san_pham` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_san_pham` text COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai-san_pham` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `mo_ta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chi_tiet_san_pham`
--

INSERT INTO `tbl_chi_tiet_san_pham` (`id_chi_tiet_san_pham`, `id_san_pham`, `ten_san_pham`, `ten_loai-san_pham`, `gia`, `mo_ta`, `so_luong`) VALUES
('CT01', 'SP01', 'Caramel Cupcake', 'Cupcake', 32000, 'Chiếc bánh cupcake xinh xắn với phủ bên trên 1 lớp Caramel thơm ngon tạo nên hương vị hấp dẫn cho món bánh này.', 4),
('CT02', 'SP01', 'Macca Socola Cupcake', 'Cupcake', 30000, 'Bánh tươi xốp, mềm mịm với vị socola thơm ngon hòa quyện cùng với lớp macca giàu chất dinh dưỡng.', 6),
('CT03', 'SP03', 'Orange Cupcake', 'Cupcake', 28000, 'Ngoài vị truyền thống là vani và socola, Orange Cupcake là một sự lựa chọn mới lạ. Với hương vị ngọt, không quá chua đến từ những trái cam tươi ngon được chọn lựa cẩn thận.', 2),
('CT04', 'SP04', 'Apple Cupcake', 'Cupcake', 28000, 'Với nguyên liệu từ những miếng táo giòn tan, tươi ngon và mọng nước, chiếc bánh này sẽ mang đến cho bạn một hương vị mới lạ.', 6),
('CT05', 'SP05', 'Fuss Cupcake', 'Cupcake', 31000, 'Lớp vỏ bánh với hương vị socola Valrhona đậm đà tươi ngon được phủ một lớp kem dâu phù hợp cho ai thích sự ngọt ngào.', 2),
('CT06', 'SP06', 'Redvelvet Cupcake', 'Cupcake', 25000, 'Bánh Red Velvet không chỉ nổi tiếng bởi vẻ ngoài quyến rũ với sắc đỏ đặc trưng của cốt bánh xen lẫn cùng lớp kem trắng mịn, nó còn thu hút bởi hương vị cacao thơm nồng kết hợp hài hòa với phần cream c', 4),
('CT07', 'SP07', 'Crepe Sầu riêng- Lá dứa', 'Crepe', 40000, 'Bánh crepe sầu riêng lá dứa có lớp vỏ bánh mỏng, thơm ngon, phần nhân kem quyện lẫn sầu riêng béo ngậy khiến ai là tín đồ của loại quả này sẽ thích mê.', 0),
('CT08', 'SP08', 'Crepe Chuối- Nutella', 'Crepe', 60000, 'Vỏ bánh mỏng dai thơm ngon hoà quyện với kem tươi phomai béo ngậy, chuối thơm phức và nutella ngon tuyệt.\r\nBánh crepe đặc biệt với hỗn hợp kem tươi phomai được làm theo công thức riêng biệt của Macrin', 0),
('CT09', 'SP09', 'Mango Crepe', 'Crepe', 45000, 'Lớp vỏ bánh mỏng dai vị bánh sẽ hơi chua chua, ngọt ngọt, quyện cùng bản chất béo thơm của cheesecake', 0),
('CT10', 'SP10', 'Strawberry Crepe', 'Crepe', 38000, 'Sự kết hợp đầy màu sắc của các lớp bánh mềm mịn, kem béo thơm đặc biệt cùng với vị chua thanh ngọt đến từ những quả dâu tây tươi ngon tạo ra một chiếc bánh cực kì hấp dẫn', 0),
('CT11', 'SP11', 'Chocolate Cheesecake', 'Chesssecake', 35000, 'Không chỉ thu hút ngay từ ánh nhìn đầu tiên mà bánh cheesecake chocolate còn có hương vị tuyệt vời, ban đầu là vị bùi bùi của bánh rồi đến lớp chocolate thơm lừng cực tuyệt. Vị creamcheese béo ngậy th', 0),
('CT12', 'SP12', 'Oreo Cheesecake', 'Cheesecake', 36000, 'Chúng tôi đã biến tấu chiếc bánh oreo với một vài thành phần để tạo nên một chiếc bánh Oreo cheesecake không cần lò nướng vô cùng đơn giản. Hương vị thơm ngon, hấp dẫn với vị ngọt ngào của kem tươi, h', 0),
('CT13', 'SP13', 'Blueberry Cheesecake', 'Chessecake', 42000, 'Đế bánh là bánh quy giống như các loại cheesecake truyền thống, ở giữa là lớp cheese xen kẽ với sốt việt quất, bên trên là lớp bánh mousse việt quất rồi phủ trên cùng là sốt việt quất nguyên quả.', 0),
('CT14', 'SP14', 'Matcha Cheesecake', 'Chessecake', 38000, 'Cheesecake mang đến vị bánh mềm tan như tuyết và vị ngọt béo vừa phải rất quyến rũ. Thêm một chút biến tấu với bột trà xanh Nhật Bản, Matcha Cheese Cake đem món bánh này vượt xa khỏi biên giới châu Âu', 0),
('CT15', 'SP15', 'Socola Donut', 'Donut', 8000, 'Những chiếc bánh donut tròn trịa, như những chiếc vòng ngọt ngào, phủ đầy socola chắc chắn có thể mê hoặc bất kỳ ai. Đây cũng là món bánh rất tiện lợi cho bữa ăn sáng, ăn vặt của bạn.', 0),
('CT16', 'SP16', 'Basic Donut', 'Donut', 5000, 'Chiếc bánh mềm xốp bên trong, vàng giòn bên ngoài rất thích hợp với những ai yêu thích hương vị truyền thống.', 0),
('CT17', 'SP17', 'Waffle', 'Loại khác', 28000, 'Bánh Waffle có lớp vỏ giòn bên ngoài, mềm ẩm bên trong thơm ngậy của mùi sữa. Vị ngọt vừa phải, ăn với trái cây để hương vị thêm trọn vẹn.', 0),
('CT18', 'SP18', 'Lemon Blueberry', 'Loại khác', 65000, 'Nếu muốn thử một chiếc bánh mới lạ nhưng vẫn ngon miệng, xinh đẹp thì chiếc bánh Lemon Blueberry là một sự lựa chọn không thể hoàn hảo hơn. Sự kết hợp của cốt bánh chanh vàng thơm ngát với kem việt qu', 0),
('CT19', 'SP19', 'Tart trứng', 'Loại khác', 8000, 'Bánh tart là một trong những loại bánh rất nổi tiếng trên thế giới. Bề ngoài bánh tart nhỏ nhắn, cầm vừa tay, bên trong ẩn chứa hương vị thơm ngon, ngọt nhẹ.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dang_ky`
--

CREATE TABLE `tbl_dang_ky` (
  `id_dang_ky` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_ky` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhac_lai_mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dang_nhap`
--

CREATE TABLE `tbl_dang_nhap` (
  `id_dang_nhap` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danh_gia`
--

CREATE TABLE `tbl_danh_gia` (
  `id_danh_gia` int(11) NOT NULL,
  `ho_ten` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_san_pham` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_muc_do_hai_long` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danh_gia`
--

INSERT INTO `tbl_danh_gia` (`id_danh_gia`, `ho_ten`, `hinh_anh`, `dia_chi`, `ten_san_pham`, `noi_dung`, `id_muc_do_hai_long`) VALUES
(2, 'Lan Anh', 'fb-1.jpg', 'Thanh Hóa', 'Strawberry Crepe', 'Vị bánh đậm đà thơm lừng kết hợp với lớp phô mai mềm mịn rất ngon, bánh này có vị ngọt thanh nên không cảm thấy bị ngán khi ăn.', 4),
(3, 'Tùng Bách', 'fb-3.jpg', 'Ninh Bình', 'Socola Cheese Cake', 'Bánh có vị socola siêu đậm, ăn cảm nhận được vị thơm đắng nồng nàn của socola, lớp bánh cookie lạ miệng, hợp khẩu vị.', 5),
(4, 'Thùy Linh', 'fb-4.jpg', 'Thái Nguyên', 'Cupcake', 'Bánh mềm, ngon. Trang trí đẹp, bắt mắt. Cốt bánh mềm xốp và thơm. Lớp kem ngọt vừa đủ, không quá ngấy.', 4),
(5, 'Nguyệt', 'fb-2.jpg', 'Hưng Yên', 'Crepe Sầu riêng- Lá dứa', 'Cách trang trí hấp dẫn, bánh có vị sầu riêng nhưng không quá nồng kết hợp với lá dứa tạo nên hương vị hoàn hảo. Lớp bánh mềm, ngọt vừa phải.', 4),
(6, 'Vũ Huệ', 'fb-5.jpg', 'Nghệ An', 'Socola Donut', 'Vỏ bánh xốp, lớp bánh bên trong mềm, bánh có vị ngọt thanh kèm theo vị socola rất vừa miệng, trình bày đẹp.', 5),
(7, 'Ngọc', 'fb-6.jpg', 'Bắc Ninh', 'Crepe Chuối', 'Nhìn món bánh có cách trình bày hấp dẫn, đẹp mắt, giá cả phải chăng, bên ngoài lớp bánh giòn, bên trong nhân mềm có vị chuối ngọt nhẹ.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gio_hang`
--

CREATE TABLE `tbl_gio_hang` (
  `id_gio_hang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_san_pham` text COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` float NOT NULL,
  `ma_giam_gia` float NOT NULL,
  `tong_tien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `id_lien_he` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_khach` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phan_hoi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_san_pham`
--

CREATE TABLE `tbl_loai_san_pham` (
  `id_loai_san_pham` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_san_pham` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_loai_san_pham`
--

INSERT INTO `tbl_loai_san_pham` (`id_loai_san_pham`, `ten_loai_san_pham`) VALUES
('L01', 'Cupcake'),
('L02', 'Crepe'),
('L03', 'Cheesecake'),
('L04', 'Donut'),
('L05', 'Loại khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_muc_do_hai_long`
--

CREATE TABLE `tbl_muc_do_hai_long` (
  `id_muc_do_hai_long` int(11) NOT NULL,
  `muc_do_hai_long` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_muc_do_hai_long`
--

INSERT INTO `tbl_muc_do_hai_long` (`id_muc_do_hai_long`, `muc_do_hai_long`) VALUES
(1, 'Rất không hài lòng'),
(2, 'Không hài lòng'),
(3, 'Hài lòng'),
(4, 'Rất hài lòng'),
(5, 'Cực kỳ hài lòng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ho_ten` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cong_viec` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nhan_vien`, `ho_ten`, `hinh_anh`, `cong_viec`, `facebook`, `instagram`) VALUES
(1, 'Thanh Loan', 'team-1.jpg', 'Nhân viên bồi bàn', 'https://www.facebook.com/thanh.loann.5', 'https://www.instagram.com/helloiamloan/'),
(2, 'Doãn Thực', 'team-4.jpg', 'Nhân viên thu ngân', 'https://www.facebook.com/doanthuc12.03', 'https://www.instagram.com/_mequang/'),
(3, 'Thùy Linh', 'team-3.jpg', 'Nhân viên thu ngân', 'https://www.facebook.com/tlinh.29', 'https://www.instagram.com/linh_linh2902/'),
(4, 'Diệu Linh', 'team-2.jpg', 'Nhân viên bồi bàn', 'https://www.facebook.com/eolynnn', 'https://www.instagram.com/_lynnn.xinh.gai/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `id_loai_san_pham` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `id_loai_san_pham`, `ten_san_pham`, `gia_ban`, `so_luong`) VALUES
(1, 'L01', 'Caramel Cupcake', 32000, 5),
(2, 'L01', 'Macca Socola Cupcake', 30000, 4),
(3, 'L01', 'Orange Cupcake', 28000, 7),
(4, 'L01', 'Apple Cupcake', 28000, 6),
(5, 'L01', 'Fuss Cupcake', 31000, 2),
(6, 'L01', 'Redvelvet Cupcake', 25000, 4),
(7, 'L02', 'Crepe Sầu riêng - Lá dứa', 40000, 2),
(8, 'L02', 'Crepe chuối-nutella', 60000, 3),
(9, 'L02', 'Mango Crepe', 45000, 1),
(10, 'L02', 'Strawberry Crepe', 38000, 2),
(11, 'L03', 'Chocolate Chessecake', 35000, 2),
(12, 'L03', 'Oreo Cheesecake', 36000, 1),
(13, 'L03', 'Blueberry Cheesecake', 42000, 1),
(14, 'L03', 'Matcha Cheesecake', 38000, 2),
(15, 'L04', 'Socola Donut', 8000, 4),
(16, 'L04', 'Basic Donut', 5000, 4),
(17, 'L04', 'Waffle', 26000, 1),
(18, 'L04', 'Lemon Blueberry', 65000, 2),
(19, 'L04', 'Tart trứng', 8000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thanh_toan`
--

CREATE TABLE `tbl_thanh_toan` (
  `id_thanh_toan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_cu_the` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `luu_y` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tbl_chi_tiet_san_pham`
--
ALTER TABLE `tbl_chi_tiet_san_pham`
  ADD PRIMARY KEY (`id_chi_tiet_san_pham`);

--
-- Indexes for table `tbl_dang_ky`
--
ALTER TABLE `tbl_dang_ky`
  ADD PRIMARY KEY (`id_dang_ky`);

--
-- Indexes for table `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  ADD PRIMARY KEY (`id_dang_nhap`);

--
-- Indexes for table `tbl_danh_gia`
--
ALTER TABLE `tbl_danh_gia`
  ADD PRIMARY KEY (`id_danh_gia`);

--
-- Indexes for table `tbl_gio_hang`
--
ALTER TABLE `tbl_gio_hang`
  ADD PRIMARY KEY (`id_gio_hang`);

--
-- Indexes for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Indexes for table `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  ADD PRIMARY KEY (`id_loai_san_pham`);

--
-- Indexes for table `tbl_muc_do_hai_long`
--
ALTER TABLE `tbl_muc_do_hai_long`
  ADD PRIMARY KEY (`id_muc_do_hai_long`);

--
-- Indexes for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`);

--
-- Indexes for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`);

--
-- Indexes for table `tbl_thanh_toan`
--
ALTER TABLE `tbl_thanh_toan`
  ADD PRIMARY KEY (`id_thanh_toan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danh_gia`
--
ALTER TABLE `tbl_danh_gia`
  MODIFY `id_danh_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_muc_do_hai_long`
--
ALTER TABLE `tbl_muc_do_hai_long`
  MODIFY `id_muc_do_hai_long` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
