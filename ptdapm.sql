-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 29, 2020 lúc 03:27 CH
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ptdapm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `maanh` int(11) NOT NULL,
  `mathisinh` varchar(20) NOT NULL,
  `duongdan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `mabv` int(5) UNSIGNED NOT NULL,
  `chude` varchar(100) NOT NULL,
  `tieude` varchar(100) NOT NULL,
  `anh` varchar(200) DEFAULT NULL,
  `noidung` varchar(2000) DEFAULT NULL,
  `ngaytao` datetime NOT NULL,
  `matk` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`mabv`, `chude`, `tieude`, `anh`, `noidung`, `ngaytao`, `matk`) VALUES
(16, 'Tin tức', ' Trường Đại học Thủy lợi thông báo Tuyển sinh đại học hệ chính quy năm 2020', 'images/images_post/0e78cc85ad6080a9d1bbd6f11db5193c5b02809d5d29c_4080eda1a706ce63f272259076427490.jpg', 'Căn cứ Công văn số 1778/BGDĐT-GDĐH ngày 22/5/2020 về hướng dẫn công tác tuyển sinh trình độ đại học của Bộ Giáo dục và Đào tạo,Trường Đại học Thủy lợi thông báo tuyển sinh đại học hệ chính quy năm 2020', '2020-07-29 13:52:21', 17),
(17, 'Thông báo', 'Hướng dẫn thí sinh kiểm tra hồ sơ đăng ký xét tuyển online', 'images/images_post/18-hinh-nen-powerpoint-mau-tim-giup-bai-thuyet-trinh-them-thu-hut-1489724046-9.gif', 'Để kiểm tra kết quả đăng ký xét tuyển vào trường theo hình thức xét tuyển học bạ online, Nhà trường sẽ xem kỹ các bước sau:', '2020-07-28 04:39:20', 17),
(18, 'Tin tức', 'Đề án tuyển sinh đại học Thủy lợi năm 2020', 'images/images_post/20-hinh-nen-don-gian-dam-chat-ca-tinh-danh-cho-bai-thuyet-trinh-1494511523-7.jpg', 'Trường Đại học Thủy lợi công bố Đề án tuyển sinh đại học năm 2020', '2020-07-28 04:39:46', 17),
(19, 'Thông báo', 'Quyết định điểm chuẩn năm 2019 tại cơ sở mở rộng Phố Hiến của Trường ĐH Thủy lợi', 'images/images_post/40-hinh-nen-powerpoint-ve-moi-truong-cuc-chat-cho-bai-thuyet-trinh-5.jpg', 'Quyết định điểm chuẩn năm 2019 tại cơ sở mở rộng Phố Hiến của Trường ĐH Thủy lợi', '2020-07-28 04:40:39', 17),
(20, 'Tin tức', 'Kế hoạch và quy trình xác nhận nhập học đối với thí sinh trúng tuyển đợt 1 Đại học chính quy năm 201', 'images/images_post/40-hinh-nen-powerpoint-ve-moi-truong-cuc-chat-cho-bai-thuyet-trinh-10.png', 'Kế hoạch và quy trình xác nhận nhập học đối với thí sinh trúng tuyển đợt 1 Đại học chính quy năm 2019', '2020-07-28 04:41:12', 17),
(21, 'Tin tức', 'tieude', 'images/images_post/Sơ_đồ_thực_thể_ERD.png', 'sdtfyt', '2020-07-29 15:12:23', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cosodaotao`
--

CREATE TABLE `cosodaotao` (
  `macoso` tinyint(4) NOT NULL,
  `tencoso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cosodaotao`
--

INSERT INTO `cosodaotao` (`macoso`, `tencoso`) VALUES
(1, 'Cơ sở Hà Nội'),
(2, 'Cơ sở Phố Hiến'),
(3, 'Phân hiệu Miền Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemchuan`
--

CREATE TABLE `diemchuan` (
  `madiem` int(11) NOT NULL,
  `diem` double NOT NULL,
  `dieukien` varchar(40) DEFAULT NULL,
  `chitieu` smallint(6) NOT NULL,
  `nam` smallint(6) NOT NULL,
  `manganh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `diemchuan`
--

INSERT INTO `diemchuan` (`madiem`, `diem`, `dieukien`, `chitieu`, `nam`, `manganh`) VALUES
(1, 7, 'Điểm toán >= 6.5', 1600, 2020, 'TLA105'),
(2, 6.5, '', 1700, 2020, 'TLA101'),
(3, 6.25, '', 1500, 2020, 'TLA102'),
(4, 20, '', 1600, 2019, 'TLA101'),
(5, 20, '', 1600, 2019, 'TLA102'),
(6, 20, '', 1600, 2019, 'TLA103'),
(7, 20, '', 1600, 2019, 'TLA104'),
(10, 20, '', 1600, 2019, 'TLA105'),
(11, 20, '', 1600, 2019, 'TLA106'),
(12, 20, '', 1600, 2019, 'TLA107'),
(13, 20, '', 1600, 2019, 'TLA109'),
(14, 20, '', 1600, 2019, 'TLA110'),
(15, 20, '', 1600, 2019, 'TLA111'),
(16, 20, '', 1600, 2019, 'TLA112'),
(17, 20, '', 1600, 2019, 'TLA113'),
(18, 20, '', 1600, 2019, 'TLA114'),
(19, 20, '', 1600, 2019, 'TLA118'),
(20, 20, '', 1600, 2019, 'TLA119'),
(21, 20, '', 1600, 2019, 'TLA120'),
(22, 20, '', 1600, 2019, 'TLA121'),
(23, 20, '', 1600, 2019, 'TLA123'),
(24, 20, '', 1600, 2019, 'TLA401'),
(25, 20, '', 1600, 2019, 'TLA402'),
(27, 20, '', 1600, 2019, 'TLA403'),
(28, 20, '', 1600, 2018, 'TLA102'),
(32, 14, '', 1000, 2019, 'PHA106'),
(33, 15, '', 1300, 2019, 'PHA402'),
(34, 14.3, 'toán >7', 1200, 2019, 'PHA403'),
(35, 15.35, 'điểm văn >=6', 1300, 2019, 'TLS101'),
(36, 15.15, '', 1000, 2019, 'TLS102'),
(37, 16.65, '', 1234, 2019, 'TLS104'),
(38, 15.95, '', 1090, 2019, 'TLS106'),
(39, 16.85, '', 1345, 2019, 'TLS107'),
(40, 14.5, '', 1456, 2019, 'TLS111'),
(41, 13, '', 1678, 2019, 'TLS113'),
(42, 15.75, '', 1400, 2019, 'TLS402'),
(43, 16, 'điểm anh > 6', 1500, 2019, 'TLS403');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphi`
--

CREATE TABLE `hocphi` (
  `manganh` varchar(10) NOT NULL,
  `hocphi` int(10) NOT NULL,
  `sonamdaotao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `manganh` varchar(10) NOT NULL,
  `tennganh` varchar(100) NOT NULL,
  `macoso` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`manganh`, `tennganh`, `macoso`) VALUES
('PHA106', 'Công nghệ thông tin', 2),
('PHA402', 'Quản trị kinh doanh', 2),
('PHA403', 'Kế toán', 2),
('TLA101', 'Kỹ thuật xây dựng công trình thủy', 1),
('TLA102', 'Kỹ thuật tài nguyên nước', 1),
('TLA103', 'Thủy văn học', 1),
('TLA104', 'Kỹ thuật xây dựng', 1),
('TLA105', 'Nhóm ngành Kỹ thuật Cơ khí', 1),
('TLA106', 'Nhóm ngành Công nghệ thông tin', 1),
('TLA107', 'Kỹ thuật cấp thoát nước', 1),
('TLA109', 'Kỹ thuật môi trường', 1),
('TLA110', 'Kỹ thuật cơ sở hạ tầng', 1),
('TLA111', 'Công nghệ kỹ thuật xây dựng', 1),
('TLA112', 'Kỹ thuật điện', 1),
('TLA113', 'Kỹ thuật xây dựng công trình giao thông', 1),
('TLA114', 'Quản lý xây dựng', 1),
('TLA118', 'Kỹ thuật hóa học', 1),
('TLA119', 'Công nghệ sinh học', 1),
('TLA120', 'Kỹ thuật cơ điện tử', 1),
('TLA121', 'Kỹ thuật điều khiển và tự động hóa', 1),
('TLA123', 'Kỹ thuật ô tô', 1),
('TLA401', 'Kinh tế', 1),
('TLA402', 'Quản trị kinh doanh', 1),
('TLA403', 'Kế toán', 1),
('TLS101', 'Kỹ thuật xây dựng công trình thủy', 3),
('TLS102', 'Kỹ thuật tài nguyên nước', 3),
('TLS104', 'Kỹ thuật xây dựng', 3),
('TLS106', 'Công nghệ thông tin', 3),
('TLS107', 'Kỹ thuật cấp thoát nước', 3),
('TLS111', 'Công nghệ kỹ thuật xây dựng', 3),
('TLS113', 'Kỹ thuật xây dựng công trình giao thông', 3),
('TLS402', 'Quản trị kinh doanh', 3),
('TLS403', 'Kế toán', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh_tohop`
--

CREATE TABLE `nganh_tohop` (
  `matohop` tinyint(4) DEFAULT NULL,
  `manganh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nganh_tohop`
--

INSERT INTO `nganh_tohop` (`matohop`, `manganh`) VALUES
(1, 'TLA103'),
(2, 'TLA103'),
(5, 'TLA103'),
(6, 'TLA103'),
(1, 'TLA104'),
(2, 'TLA104'),
(5, 'TLA104'),
(6, 'TLA104'),
(1, 'TLA105'),
(2, 'TLA105'),
(5, 'TLA105'),
(6, 'TLA105'),
(1, 'TLA106'),
(2, 'TLA106'),
(5, 'TLA106'),
(6, 'TLA106'),
(1, 'TLA107'),
(2, 'TLA107'),
(5, 'TLA107'),
(6, 'TLA107'),
(1, 'TLA110'),
(2, 'TLA110'),
(5, 'TLA110'),
(6, 'TLA110'),
(1, 'TLA111'),
(2, 'TLA111'),
(5, 'TLA111'),
(6, 'TLA111'),
(1, 'TLA113'),
(2, 'TLA113'),
(5, 'TLA113'),
(6, 'TLA113'),
(1, 'TLA112'),
(2, 'TLA112'),
(5, 'TLA112'),
(6, 'TLA112'),
(1, 'TLA114'),
(2, 'TLA114'),
(5, 'TLA114'),
(6, 'TLA114'),
(1, 'TLA120'),
(2, 'TLA120'),
(5, 'TLA120'),
(6, 'TLA120'),
(1, 'TLA121'),
(2, 'TLA121'),
(5, 'TLA121'),
(6, 'TLA121'),
(1, 'TLA123'),
(2, 'TLA123'),
(5, 'TLA123'),
(6, 'TLA123'),
(1, 'TLA401'),
(2, 'TLA401'),
(5, 'TLA401'),
(6, 'TLA401'),
(1, 'TLA402'),
(2, 'TLA402'),
(5, 'TLA402'),
(6, 'TLA402'),
(1, 'TLA403'),
(2, 'TLA403'),
(5, 'TLA403'),
(6, 'TLA403'),
(1, 'TLS403'),
(2, 'TLS403'),
(5, 'TLS403'),
(6, 'TLS403'),
(1, 'TLS402'),
(2, 'TLS402'),
(5, 'TLS402'),
(6, 'TLS402'),
(1, 'TLS101'),
(2, 'TLS101'),
(5, 'TLS101'),
(6, 'TLS101'),
(1, 'TLS104'),
(2, 'TLS104'),
(5, 'TLS104'),
(6, 'TLS104'),
(1, 'TLS106'),
(2, 'TLS106'),
(5, 'TLS106'),
(6, 'TLS106'),
(1, 'TLS107'),
(2, 'TLS107'),
(5, 'TLS107'),
(6, 'TLS107'),
(1, 'TLS102'),
(2, 'TLS102'),
(5, 'TLS102'),
(6, 'TLS102'),
(1, 'TLS111'),
(2, 'TLS111'),
(5, 'TLS111'),
(6, 'TLS111'),
(1, 'TLS113'),
(2, 'TLS113'),
(5, 'TLS113'),
(6, 'TLS113'),
(1, 'TLA109'),
(2, 'TLA109'),
(5, 'TLA109'),
(4, 'TLA109'),
(1, 'TLA119'),
(3, 'TLA119'),
(4, 'TLA119'),
(7, 'TLA119'),
(1, 'TLA118'),
(4, 'TLA118'),
(6, 'TLA118'),
(1, 'PHA402'),
(2, 'PHA402'),
(5, 'PHA402'),
(7, 'PHA402'),
(1, 'TLA101'),
(2, 'TLA101'),
(5, 'TLA101'),
(6, 'TLA101'),
(1, 'TLA102'),
(2, 'TLA102'),
(5, 'TLA102'),
(6, 'TLA102'),
(1, 'PHA403'),
(2, 'PHA403'),
(5, 'PHA403'),
(6, 'PHA403'),
(1, 'PHA106'),
(2, 'PHA106'),
(5, 'PHA106'),
(6, 'PHA106');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvong`
--

CREATE TABLE `nguyenvong` (
  `manguyenvong` int(10) NOT NULL,
  `maxettuyen` varchar(10) NOT NULL,
  `matohop` tinyint(4) NOT NULL,
  `diem10mon1` tinyint(4) NOT NULL,
  `diem10mon2` tinyint(4) NOT NULL,
  `diem10mon3` tinyint(4) NOT NULL,
  `diem11mon1` tinyint(4) NOT NULL,
  `diem11mon2` tinyint(4) NOT NULL,
  `diem11mon3` tinyint(4) NOT NULL,
  `diem12mon1` tinyint(4) NOT NULL,
  `diem12mon2` tinyint(4) NOT NULL,
  `diem12mon3` tinyint(4) NOT NULL,
  `mathisinh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan`
--

CREATE TABLE `quan` (
  `maquan` char(10) NOT NULL,
  `tenquan` varchar(50) NOT NULL,
  `matinh` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quan`
--

INSERT INTO `quan` (`maquan`, `tenquan`, `matinh`) VALUES
('t1q1', 'Quận Ninh Kiều', 't1'),
('t1q2', 'Quận Bình Thủy ', 't1'),
('t1q3', 'Quận Cái Răng ', 't1'),
('t1q4', 'Quận Ô Môn ', 't1'),
('t1q5', 'Huyện Phong Điền ', 't1'),
('t1q6', 'Huyện Cờ Đỏ ', 't1'),
('t1q7', 'Huyện Vĩnh Thạnh ', 't1'),
('t1q8', 'Quận Thốt Nốt ', 't1'),
('t1q9', 'Huyện Thới Lai ', 't1'),
('t2a6', 'Huyện Hòa Vang', 't2'),
('t2q1', 'Quận Hải Châu', 't2'),
('t2q2', 'Quận Thanh Khê', 't2'),
('t2q3', 'Quận Sơn Trà', 't2'),
('t2q4', 'Quận Ngũ Hành Sơn', 't2'),
('t2q5', 'Quận Liên Chiểu', 't2'),
('t2q7', 'Quận Cẩm Lệ', 't2'),
('t2q8', 'Huyện Hoàng Sa', 't2'),
('t3q1', 'Quận Ba Đình', 't3'),
('t3q10', 'Quận Bắc Từ Liêm', 't3'),
('t3q11', 'Huyện Thanh Trì', 't3'),
('t3q12', 'Huyện Gia Lâm', 't3'),
('t3q14', 'Huyện Sóc Sơn', 't3'),
('t3q15', 'Quận Hà Đông', 't3'),
('t3q16', 'Thị xã Sơn Tây', 't3'),
('t3q17', 'Huyện Ba Vì', 't3'),
('t3q18', 'Huyện Phúc Thọ', 't3'),
('t3q19', 'Huyện Thạch Thất', 't3'),
('t3q2', 'Quận Hoàn Kiếm', 't3'),
('t3q20', 'Huyện Quốc Oai', 't3'),
('t3q21', 'Huyện Chương Mỹ', 't3'),
('t3q22', 'Huyện Đan Phượng', 't3'),
('t3q23', 'Huyện Hoài Đức', 't3'),
('t3q24', 'Huyện Thanh Oai', 't3'),
('t3q25', 'Huyện Mỹ Đức', 't3'),
('t3q26', 'Huyện Ứng Hòa', 't3'),
('t3q27', 'Huyện Thường Tín', 't3'),
('t3q28', 'Huyện Phú Xuyên', 't3'),
('t3q29', 'Huyện Mê Linh', 't3'),
('t3q3', 'Quận Hai Bà Trưng', 't3'),
('t3q30', 'Quận Nam Từ Liêm', 't3'),
('t3q31', 'Huyện Từ Liêm', 't3'),
('t3q4', 'Quận Đống Đa', 't3'),
('t3q5', 'Quận Tây Hồ', 't3'),
('t3q6', 'Quận Cầu Giấy', 't3'),
('t3q7', 'Quận Thanh Xuân', 't3'),
('t3q8', 'Quận Hoàng Mai', 't3'),
('t3q9', 'Quận Long Biên', 't3'),
('t3qt3q13', 'Huyện Đông Anh', 't3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(2) NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `maquyen` tinyint(4) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `maxacnhan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `tentk`, `email`, `matkhau`, `maquyen`, `trangthai`, `maxacnhan`) VALUES
(17, 'duongtienthang123456789', 'duongtienthang123456789@gmail.com', '$2y$10$84QfanQx2mlrvJDMiY/j/Ox1LjmWtL40MFvobc5Xilue/j0.L.Tp2', 3, 1, 'ab6f936324a939ebb091a8f8e9728567'),
(23, 'duydatzxc', 'duydatzxc@gmail.com', '$2y$10$lXP9OTSDQYwT0KUpndjHquIYpGF1SZvIsmeQu/LING1jwwUqJ/t7K', 2, 1, '96e8a5df974e004f4ea343a9fb20d366');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thisinh`
--

CREATE TABLE `thisinh` (
  `mathisinh` varchar(20) NOT NULL,
  `tenthisinh` varchar(50) NOT NULL,
  `gioitinh` char(5) NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` char(10) NOT NULL,
  `dantoc` varchar(30) NOT NULL,
  `CMND` int(13) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(100) NOT NULL,
  `mahuyen` char(10) NOT NULL,
  `xa` varchar(50) NOT NULL,
  `thon` varchar(150) NOT NULL,
  `matruong10` char(10) NOT NULL,
  `matruong11` char(10) NOT NULL,
  `matruong12` char(10) NOT NULL,
  `dienthoai` int(15) NOT NULL,
  `emailthisinh` varchar(50) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `namtotnghiep` smallint(6) NOT NULL,
  `khuvuc` char(10) NOT NULL,
  `doituong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `matinh` char(10) NOT NULL,
  `tentinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`matinh`, `tentinh`) VALUES
('t1', 'Thành Phố Cần Thơ'),
('t10', 'Tỉnh Bạc Liêu'),
('t11', 'Tỉnh Bắc Ninh'),
('t12', 'Tỉnh Bến Tre'),
('t13', 'Tỉnh Bình Định'),
('t14', 'Tỉnh Bình Dương'),
('t15', 'Tỉnh Bình Phước'),
('t16', 'Tỉnh Bình Thuận'),
('t17', 'Tỉnh Cà Mau'),
('t18', 'Tỉnh Cao Bằng'),
('t19', 'Tỉnh Đắk Lắk'),
('t2', 'Thành phố Đà Nẵng'),
('t20', 'Tỉnh Đăk Nông'),
('t21', 'Tỉnh Điện Biên'),
('t22', 'Tỉnh Đồng Nai'),
('t23', 'Tỉnh Đồng Tháp'),
('t24', 'Tỉnh Gia Lai'),
('t25', 'Tỉnh Hà Giang'),
('t26', 'Tỉnh Hà Nam'),
('t27', 'Tỉnh Hà Tĩnh'),
('t28', 'Tỉnh Hải Dương'),
('t29', 'Tỉnh Hậu Giang'),
('t3', 'Thành phố Hà Nội'),
('t30', 'Tỉnh Hòa Bình'),
('t31', 'Tỉnh Hưng Yên'),
('t32', 'Tỉnh Khánh Hòa'),
('t33', 'Tỉnh Kiên Giang'),
('t34', 'Tỉnh Kon Tum'),
('t35', 'Tỉnh Lai Châu'),
('t36', 'Tỉnh Lâm Đồng'),
('t37', 'Tỉnh Lạng Sơn'),
('t38', 'Tỉnh Lào Cai'),
('t39', 'Tỉnh Long An'),
('t4', 'Thành phố Hải Phòng'),
('t40', 'Tỉnh Nam Định'),
('t41', 'Tỉnh Nghệ An'),
('t42', 'Tỉnh Ninh Bình'),
('t43', 'Tỉnh Ninh Thuận'),
('t44', 'Tỉnh Phú Thọ'),
('t45', 'Tỉnh Phú Yên'),
('t46', 'Tỉnh Quảng Bình'),
('t47', 'Tỉnh Quảng Nam'),
('t48', 'Tỉnh Quảng Ngãi'),
('t49', 'Tỉnh Quảng Ninh'),
('t5', 'Thành phố Hồ Chí Minh'),
('t50', 'Tỉnh Quảng Trị'),
('t51', 'Tỉnh Sóc Trăng'),
('t52', 'Tỉnh Sơn La'),
('t53', 'Tỉnh Tây Ninh'),
('t54', 'Tỉnh Thái Bình'),
('t55', 'Tỉnh Thái Nguyên'),
('t56', 'Tỉnh Thanh Hóa'),
('t57', 'Tỉnh Thừa Thiên -Huế'),
('t58', 'Tỉnh Tiền Giang'),
('t59', 'Tỉnh Trà Vinh'),
('t6', 'Tỉnh An Giang'),
('t60', 'Tỉnh Tuyên Quang'),
('t61', 'Tỉnh Vĩnh Long'),
('t62', 'Tỉnh Vĩnh Phúc'),
('t63', 'Tỉnh Yên Bái'),
('t7', 'Tỉnh Bà Rịa-Vũng Tàu'),
('t8', 'Tỉnh Bắc Giang'),
('t9', 'Tỉnh Bắc Kạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tohop`
--

CREATE TABLE `tohop` (
  `matohop` tinyint(4) NOT NULL,
  `tentohop` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tohop`
--

INSERT INTO `tohop` (`matohop`, `tentohop`) VALUES
(1, 'A00'),
(2, 'A01'),
(3, 'A02'),
(4, 'B00'),
(5, 'D01'),
(6, 'D07'),
(7, 'D08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truong`
--

CREATE TABLE `truong` (
  `matruong` char(10) NOT NULL,
  `tentruong` varchar(50) NOT NULL,
  `maquan` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `truong`
--

INSERT INTO `truong` (`matruong`, `tentruong`, `maquan`) VALUES
('31t1', 'THPT Nguyễn Trãi-Ba Đình', 't3q1'),
('31t10', 'CĐ nghề Hùng Vương', 't3q1'),
('31t11', 'CĐ nghề VIGLACERA', 't3q1'),
('31t2', 'THPT Phan Đình Phùng', 't3q1'),
('31t3', 'THPT Phạm Hồng Thái', 't3q1'),
('31t4', 'TH,THC S &THPT Thực nghiệm Khoa học Giáo dục', 't3q1'),
('31t5', 'THPT Đinh Tiên Hoàng-Ba Đình', 't3q1'),
('31t6', 'THPT Hoàng Long', 't3q1'),
('31t7', 'THPT Văn Lang', 't3q1'),
('31t8', 'GDNN-GDTX quận Ba Đình', 't3q1'),
('31t9', 'GDTX Ba Đình', 't3q1'),
('32t1', 'THPT Trần Phú-Hoàn Kiếm', 't3q2'),
('32t2', 'THPT Việt Đức', 't3q2'),
('32t3', 'THPT Văn Hiến', 't3q2'),
('32t4', 'GDNN-GDTX Nguyễn Văn Tố quận Hoàn Kiếm', 't3q2'),
('32t5', 'GDTX Nguyễn Văn Tố', 't3q2'),
('32t6', 'Cao đẳng Nghệ thuật Hà Nội', 't3q2'),
('32t7', 'TC nghề đồng hồ - điện tử - tin học HN', 't3q2'),
('33t1', 'THPT Đoàn Kết-Hai Bà Trưng', 't3q3'),
('33t10', 'THPT Hòa Bình-La Trobe-Hà Nội', 't3q3'),
('33t11', 'GDNN-GDTX quận Hai Bà Trưng', 't3q3'),
('33t12', 'GDTX Hai Bà Trưng', 't3q3'),
('33t13', 'CĐ nghề Bách Khoa Hà Nội', 't3q3'),
('33t14', 'CĐ nghề KT công nghệ LOD -Phân hiệu HN', 't3q3'),
('33t15', 'TC nghề Dân lập Công nghệ Thăng Long', 't3q3'),
('33t2', 'THPT Thăng Long', 't3q3'),
('33t3', 'THPT Trần Nhân Tông', 't3q3'),
('33t4', 'THPT Đông Kinh', 't3q3'),
('33t5', 'THPT Hoàng Diệu', 't3q3'),
('33t6', 'THPT Hồng Hà', 't3q3'),
('33t7', 'THPT Mai Hắc Đế', 't3q3'),
('33t8', 'THCS&THPT Tạ Quang Bửu', 't3q3'),
('33t9', 'TH,THC S &THPT Vinschool', 't3q3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`maanh`),
  ADD KEY `anh_ibfk_1` (`mathisinh`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`mabv`),
  ADD KEY `baiviet_ibfk_1` (`matk`);

--
-- Chỉ mục cho bảng `cosodaotao`
--
ALTER TABLE `cosodaotao`
  ADD PRIMARY KEY (`macoso`);

--
-- Chỉ mục cho bảng `diemchuan`
--
ALTER TABLE `diemchuan`
  ADD PRIMARY KEY (`madiem`),
  ADD KEY `diemchuan_ibfk_1` (`manganh`);

--
-- Chỉ mục cho bảng `hocphi`
--
ALTER TABLE `hocphi`
  ADD KEY `hocphi_ibfk_1` (`manganh`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`manganh`),
  ADD KEY `nganh_ibfk_1` (`macoso`);

--
-- Chỉ mục cho bảng `nganh_tohop`
--
ALTER TABLE `nganh_tohop`
  ADD KEY `matohop` (`matohop`),
  ADD KEY `manganh` (`manganh`);

--
-- Chỉ mục cho bảng `nguyenvong`
--
ALTER TABLE `nguyenvong`
  ADD PRIMARY KEY (`manguyenvong`),
  ADD KEY `nguyenvong_ibfk_1` (`maxettuyen`),
  ADD KEY `nguyenvong_ibfk_2` (`matohop`),
  ADD KEY `nguyenvong_ibfk_3` (`mathisinh`);

--
-- Chỉ mục cho bảng `quan`
--
ALTER TABLE `quan`
  ADD PRIMARY KEY (`maquan`),
  ADD KEY `matinh` (`matinh`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`);

--
-- Chỉ mục cho bảng `thisinh`
--
ALTER TABLE `thisinh`
  ADD PRIMARY KEY (`mathisinh`),
  ADD KEY `thisinh_ibfk_1` (`noisinh`),
  ADD KEY `thisinh_ibfk_2` (`mahuyen`),
  ADD KEY `thisinh_ibfk_3` (`matruong10`),
  ADD KEY `thisinh_ibfk_5` (`matruong11`),
  ADD KEY `thisinh_ibfk_6` (`matruong12`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`matinh`);

--
-- Chỉ mục cho bảng `tohop`
--
ALTER TABLE `tohop`
  ADD PRIMARY KEY (`matohop`);

--
-- Chỉ mục cho bảng `truong`
--
ALTER TABLE `truong`
  ADD PRIMARY KEY (`matruong`),
  ADD KEY `maquan` (`maquan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `maanh` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `mabv` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT cho bảng `diemchuan`
--
ALTER TABLE `diemchuan`
  MODIFY `madiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`mathisinh`) REFERENCES `thisinh` (`mathisinh`);

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`);

--
-- Các ràng buộc cho bảng `diemchuan`
--
ALTER TABLE `diemchuan`
  ADD CONSTRAINT `diemchuan_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`);

--
-- Các ràng buộc cho bảng `hocphi`
--
ALTER TABLE `hocphi`
  ADD CONSTRAINT `hocphi_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`);

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`macoso`) REFERENCES `cosodaotao` (`macoso`);

--
-- Các ràng buộc cho bảng `nganh_tohop`
--
ALTER TABLE `nganh_tohop`
  ADD CONSTRAINT `nganh_tohop_ibfk_1` FOREIGN KEY (`matohop`) REFERENCES `tohop` (`matohop`),
  ADD CONSTRAINT `nganh_tohop_ibfk_2` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`);

--
-- Các ràng buộc cho bảng `nguyenvong`
--
ALTER TABLE `nguyenvong`
  ADD CONSTRAINT `nguyenvong_ibfk_1` FOREIGN KEY (`maxettuyen`) REFERENCES `nganh` (`manganh`),
  ADD CONSTRAINT `nguyenvong_ibfk_2` FOREIGN KEY (`matohop`) REFERENCES `tohop` (`matohop`),
  ADD CONSTRAINT `nguyenvong_ibfk_3` FOREIGN KEY (`mathisinh`) REFERENCES `thisinh` (`mathisinh`);

--
-- Các ràng buộc cho bảng `quan`
--
ALTER TABLE `quan`
  ADD CONSTRAINT `quan_ibfk_1` FOREIGN KEY (`matinh`) REFERENCES `tinh` (`matinh`);

--
-- Các ràng buộc cho bảng `thisinh`
--
ALTER TABLE `thisinh`
  ADD CONSTRAINT `thisinh_ibfk_1` FOREIGN KEY (`noisinh`) REFERENCES `tinh` (`matinh`),
  ADD CONSTRAINT `thisinh_ibfk_2` FOREIGN KEY (`mahuyen`) REFERENCES `quan` (`maquan`),
  ADD CONSTRAINT `thisinh_ibfk_3` FOREIGN KEY (`matruong10`) REFERENCES `truong` (`matruong`),
  ADD CONSTRAINT `thisinh_ibfk_4` FOREIGN KEY (`matruong11`) REFERENCES `truong` (`matruong`),
  ADD CONSTRAINT `thisinh_ibfk_5` FOREIGN KEY (`matruong11`) REFERENCES `truong` (`matruong`),
  ADD CONSTRAINT `thisinh_ibfk_6` FOREIGN KEY (`matruong12`) REFERENCES `truong` (`matruong`);

--
-- Các ràng buộc cho bảng `truong`
--
ALTER TABLE `truong`
  ADD CONSTRAINT `truong_ibfk_1` FOREIGN KEY (`maquan`) REFERENCES `quan` (`maquan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
