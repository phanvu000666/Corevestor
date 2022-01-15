-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 11:01 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `corevestor`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_content`, `banner_img`, `services_id`) VALUES
(1, 'Yasuo', 'Tướng Yasuo được Riot Games ra mắt vào ngày 13 tháng 12 năm 2013 ở bản cập nhật 3.15 của mùa III, sau khi kết thúc Chung kết thế giới mùa III, là vị tướng thứ 117 của Liên Minh Huyền Thoại.', '49000533MèoCIUTO.jpg', 1),
(2, '', '', '', 2),
(3, '', '', '', 3),
(4, '', '', '', 4),
(5, '', '', '', 5),
(6, '', '', '', 6),
(7, '', '', '', 7),
(8, '', '', '', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_athour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_img`, `post_athour`, `post_date`) VALUES
(36, 'Donec ornare velit sit amet dolor aliquam, sed dictum lorem pulvinar.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer ...', '1018752810fashion-20-400x250-1.jpg', ' Vũ', '2021-11-21 14:17:18'),
(3, 'Đá phiến dầu', 'Đá phiến dầu là một loại đá trầm tích hạt mịn giàu chất hữu cơ và chứa một lượng lớn kerogen có thể chiết tách các loại hydrocarbon lỏng. Các nhà địa chất không xếp nó vào nhóm đá phiến sét, và hàm lượng kerogen cũng khác so với dầu thô...', 'Oilshale.jpg', 'Vũ', '2021-11-14 14:56:57'),
(18, 'Bản danh sách của Schindler	', 'Bản danh sách của Schindler là phim điện ảnh chính kịch cổ trang sử thi của Hoa Kỳ sản xuất và phát hành năm 1993 do Steven Spielberg làm đạo diễn kiêm đồng sản xuất và Steven Zaillian viết kịch bản...	', '220px-Liam_Neeson_Deauville_2012_2.jpg', 'Vũ', '2021-11-15 16:01:08'),
(35, 'Mauris maximus odio sit amet venenatis dignissim', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer ...', '1056748911be2.png', 'Vũ', '2021-11-21 14:16:50'),
(34, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer...', '1532944693section-bg-4-400x250-1.jpg', 'Vũ', '2021-11-21 14:11:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`services_id`, `services_name`, `services_title`, `services_content`, `services_img`) VALUES
(1, 'ICO-DEVELOPMENT', 'COMPANY ICO Development', '', '1858525203be2.png'),
(2, 'ICO Development ', '', '', ''),
(3, 'ICO Website Design', '', '', ''),
(4, 'ICO Marketing Guide', '', '', ''),
(5, 'ICO Marketing Services', '', '', ''),
(6, 'Smart Contract Development', '', '', ''),
(7, 'Wallet Development', '', '', ''),
(8, 'Cryptocurrency Exchange', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `username`, `fullname`, `password`, `email`, `group_id`) VALUES
(1, 'admin', 'Hoang Vu', '21232f297a57a5a743894a0e4a801fc3', 'phanvu000666@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
