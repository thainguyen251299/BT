-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2021 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loginn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `loai_phong` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `loai_phong`) VALUES
(1, 'Phòng vip'),
(2, 'Phòng bình dân'),
(3, 'Phòng theo ngày'),
(4, 'Phòng theo tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `name`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa - Vũng Tàu'),
(3, 'Bắc Giang'),
(4, 'Bắc Kạn'),
(5, 'Bạc Liêu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motel`
--

CREATE TABLE `motel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `count_view` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `latlng` varchar(255) DEFAULT NULL,
  `images` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `districi_id` int(11) NOT NULL,
  `utilities` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `approve` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `motel`
--

INSERT INTO `motel` (`id`, `title`, `description`, `price`, `area`, `count_view`, `address`, `latlng`, `images`, `user_id`, `category_id`, `districi_id`, `utilities`, `created_at`, `phone`, `approve`) VALUES
(2, 'Phòng giá rẻ', 'rẻ nên không cần đòi hỏi (^-^)', 1000000, 1, 10, 'Số 15 - Phan Bội Châu', '', 'image/bbb.jpg', 10, 1, 3, 'rẻ nên không cần đòi hỏi (^-^)', '2021-12-09 05:27:10', '123456', 1),
(13, 'q', 'q', 11111, 1, 0, 'Nghệ An', '', 'image/eee.jpg', 1, 1, 1, 'điều hòa', '2021-12-24 14:12:19', '0352609986', 1),
(14, 'Cho thuê phòng', 'phòng sang choảng ', 2000000, 1, 0, 'Nghệ An', '', 'image/ccc.jpg', 1, 1, 1, 'điều hòa', '2021-12-24 14:12:19', '0325145555', 1),
(15, 'uu', 'tt', 1111111, 1, 0, 'Nghệ An', '', 'image/bbb.jpg', 2, 1, 1, 'điều hòa', '2021-12-24 14:12:19', '0325145555', 1),
(16, 't', 't', 11111, 1, 0, 'Nghệ An', '', 'image/images (2).jpg', 3, 1, 2, 'điều hòa', '2021-12-24 14:38:29', '0776270912', 1),
(18, 'r', 'r', 11111, 1, 0, 'Nghệ An', '', 'image/ddd.jpg', 2, 1, 1, 'điều hòa', '2021-12-24 14:44:41', '0352609986', 1),
(19, 'q', 'q', 1111111, 1, 0, 'Nghệ An', '', 'image/eee.jpg', 2, 1, 1, 'điều hòa', '2021-12-24 14:53:26', '0324561888', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `Name`, `Username`, `email`, `password`, `role`, `phone`, `avatar`) VALUES
(1, 'thaiii', 'adminn', 'connkangheo200@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '43564', 'image/images.jpg'),
(2, 'thai', 'admin', 'connkangheo200@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, '6545343', 'image/img_5338_800x450_800x450.jpg'),
(3, 'thai', 'admin', 'connkangheo200@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, '0352609986', 'image/images (4).jpg'),
(5, 'vuml', 'vuml', 'mlvu@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '123456', 'image/images.jpg'),
(10, '1', '1111', '1', '40f5888b67c748df7efba008e7c2f9d2', 0, '2', 'image/bbb.jpg'),
(12, '333', '333', '333', '310dcbbf4cce62f762a2aaa148d556bd', 0, '333', 'image/235639605_263855361968399_4055670547543296691_n.jpg'),
(13, 'nguyen huu thai', 'nhthai', 'hhhh@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '0352609986', 'image/aaa.jpg'),
(15, 'thai', 'thaidz', 'thai@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '25415989', 'image/49029681_907961836261444_3841281516747358208_n.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `districi_id` (`districi_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `motel`
--
ALTER TABLE `motel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `motel`
--
ALTER TABLE `motel`
  ADD CONSTRAINT `motel_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `motel_ibfk_2` FOREIGN KEY (`districi_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `motel_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
