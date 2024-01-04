-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 18, 2019 lúc 01:42 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id8384236_kungfuphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `hovaten`, `user`, `pass`) VALUES
(1, 'Vũ Quang Huy', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `MSHS`
--

CREATE TABLE `MSHS` (
  `id` int(225) NOT NULL,
  `MSHS12` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `tenhs` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinhhs` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinhhs` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `MSHS`
--

INSERT INTO `MSHS` (`id`, `MSHS12`, `tenhs`, `gioitinhhs`, `ngaysinhhs`) VALUES
(19, 'HS00001', 'Nguyễn Anh Khôi', 'Nam', '15/02/2008'),
(20, 'HS00002', 'Đào Anh Tú', 'Nam', '18/07/2008'),
(21, 'HS00003', 'Nguyễn Thùy Linh', 'Nữ', '27/10/2008'),
(22, 'HS00004', 'Đào Thành Nam', 'Nam', '23/01/2008'),
(23, 'HS00005', 'Vũ Tuấn Anh', 'Nam', '15/03/2008'),
(24, 'HS00006', 'Đào Ngọc Huyền', 'Nữ', '23/06/2008'),
(25, 'HS00007', 'Phùng Thanh Hưng', 'Nam', '08/07/2008'),
(26, 'HS00008', 'Nguyễn Văn Khải', 'Nam', '17/04/2008'),
(27, 'HS00009', 'Vũ Anh Hào', 'Nam', '23/09/2008'),
(29, 'HS00010', 'Đào Nhật Ánh', 'Nữ', '18/07/2008'),
(31, 'HS00011', 'Nguyễn Nhật Linh', 'Nữ', '04/12/2008'),
(36, 'HS00012', 'Nguyễn Tuấn Tài', 'Nam', '13/04/2008'),
(38, 'HS00019', 'Nguyễn Thanh Hằng', 'Nữ', '27/09/2008');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `MSHS` varchar(30) NOT NULL,
  `hovaten` varchar(30) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `ngaysinh` varchar(255) NOT NULL,
  `noisinh` varchar(225) NOT NULL,
  `dantoc` varchar(225) NOT NULL,
  `hokhau` varchar(225) NOT NULL,
  `noio` varchar(225) NOT NULL,
  `tenbo` varchar(225) NOT NULL,
  `ngaysinhbo` varchar(225) NOT NULL,
  `nghebo` varchar(225) NOT NULL,
  `sdtbo` varchar(225) NOT NULL,
  `tenme` varchar(225) NOT NULL,
  `ngaysinhme` varchar(225) NOT NULL,
  `ngheme` varchar(225) NOT NULL,
  `sdtme` varchar(225) NOT NULL,
  `matkhau` varchar(225) NOT NULL,
  `hinhthucdangki` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `MSHS`, `hovaten`, `gioitinh`, `ngaysinh`, `noisinh`, `dantoc`, `hokhau`, `noio`, `tenbo`, `ngaysinhbo`, `nghebo`, `sdtbo`, `tenme`, `ngaysinhme`, `ngheme`, `sdtme`, `matkhau`, `hinhthucdangki`) VALUES
(4, 'HS00001', 'Nguyễn Anh Khôi', 'Nam', '15/02/2008', 'Hà Nội', 'Kinh', 'Yên Bình, Dương Xá, Gia Lâm, Hà Nội', 'Yên Bình, Dương Xá, Gia Lâm, Hà Nội', 'Nguyễn Anh Háo', '18/08/1963', 'Công An', '01919878903', 'Đào Ngọc Ánh', '17/08/1970', 'Bác Sĩ', '0236987410', 'vnvvj', 'Đăng Kí Trực Tiếp'),
(5, 'HS00002', 'Đào Anh Tú', 'Nam', '18/07/2008', 'Hà Nội', 'Kinh', 'Yên Bình, Dương Xá, Gia Lâm, Hà Nội', 'Yên Bình, Dương Xá, Gia Lâm, Hà Nội', 'Đào Bình Anh', '23/08/1970', '', '0259874102', 'Vũ Thị Thanh Hằng', '19/08/1973', '', '0369851404', 'bsbjsjkjjkf', 'Đăng Kí Trực Tiếp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `MSHS`
--
ALTER TABLE `MSHS`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `MSHS`
--
ALTER TABLE `MSHS`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
