-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 18, 2019 lúc 01:46 PM
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
-- Cơ sở dữ liệu: `id8384236_quanlydiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admints`
--

CREATE TABLE `admints` (
  `id` int(225) NOT NULL,
  `tendangnhap` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admints`
--

INSERT INTO `admints` (`id`, `tendangnhap`, `matkhau`, `level`) VALUES
(1, 'admin', 'jdfhjd', '1'),
(10, 'adminlevel2', 'ggfjjkfgjh', '2'),
(11, 'adminlevel3', 'nbggkjb', '3'),
(12, 'adminlevel4', 'njfbssgskgj', '4'),
(13, 'admin2', 'bmbgsgkfkg', '1'),
(14, 'adminlevel22', 'ndfsjfgkf', '2'),
(15, 'adminlevel23', 'sdbssssgj', '2'),
(16, 'adminlevel24', 'gfghfgkjhfgkjh', '2'),
(17, 'adminlevel32', 'bnsggghjghgdfgdf', '3'),
(18, 'adminlevel33', 'nghgkshkgh', '3'),
(19, 'adminlevel34', 'ghkgfjhfgk', '4'),
(20, 'adminlevel42', 'kgghhfgfjgh', '4'),
(21, 'adminlevel43', 'ndfsdgkhk', '4'),
(22, 'adminlevel44', 'kgjghkfjghfk', '4'),
(23, 'demo', 'dfvfjjsdfgsjhdgjk', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admints`
--
ALTER TABLE `admints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admints`
--
ALTER TABLE `admints`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
