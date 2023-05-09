-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 09, 2023 lúc 10:34 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `room_rent`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `tele` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_vid`
--

CREATE TABLE `image_vid` (
  `room_id` int(12) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `vid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image_vid`
--

INSERT INTO `image_vid` (`room_id`, `image`, `vid`) VALUES
(1, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/03/507ce676-0681-4fe6-bac3-55a7eef', NULL),
(2, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/7041eddc052cff72a63d_1658997072.jpg\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/c97b82136820907ec931_1658997073.jpg\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/5021c4a9a35c45021c4d_1658997058.jpg\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/toa-nha-52_1658997059.jpg', NULL),
(3, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/09/z3163158670908-88dc233c70dfc3716afc7b376cd2520e_1660008859.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/3_1658996883.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/photo-2022-02-07-10-05-40_1658996883.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/09/photo-2022-02-07-10-05-27_1660008856.jpg\r\n', NULL),
(4, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/14/8_1657763752.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/02/26/tp_1582694811.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/14/1_1657763751.jpg', NULL),
(5, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/27/hinh-2707-sau-khi-sua-9_1658890847.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/27/hinh-2707-sau-khi-sua-7_1658890843.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/02/2507-2_1659407814.jpg', NULL),
(6, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/03/09/hyty_1646820534.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/03/05/k5_1646446171.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/03/05/k4_1646446171.jpg', NULL),
(7, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/10/e6cb2c1b-f31b-4693-9772-a8fb3cbb6159_1660106078.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/10/f1ad2946-dc33-4005-9eb0-db92f1a75af6_1660106077.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/10/a1b3ba4d-4626-4f74-9690-c980b66264bc_1660106077.jpg', NULL),
(8, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/08/kinh-nghiem-xay-nha-tro-ben-dep-gia-re-3-370x260_1659940179.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/08/20220401214710-nr5mc_1659940176.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/08/kinh-nghiem-xay-nha-tro-ben-dep-gia-re-3-370x260_1659940179.jpg', NULL),
(9, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/08/27/22db9949-3f77-494e-9edf-9b9e79bab876_1598541597.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/04/24/img-1452_1587701310.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/04/24/img-0292_1587701336.jpg', NULL),
(10, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/09/z2067452592060-ca1c8692a31370b08a87fa3343a89d27_1660008771.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/z2067453014533-159e2066bc246ba87efb9724ee984819_1658996394.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/z2067452704268-08b1ab57600b1bbd640aa9aa98d4cff7_1658996393.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/09/z2067452592060-ca1c8692a31370b08a87fa3343a89d27_1660008771.jpg', NULL),
(11, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/08/296469816-1665805447118539-7599363110475881569-n_1659943979.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/08/296172521-600367881443341-7742697764947829969-n_1659942376.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/08/08/296009024-439550144784881-641974713265952138-n-1_1659942381.jpg', NULL),
(12, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/05/16/1ee31478-d6a4-4d40-a09a-7ce01e44df6a_1652684859.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/09/30/b1bb98e2-e0ce-462d-a5a2-d407cdffd0ac_1601433829.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/10/09/42e51ace-c065-45af-9abd-9b05dda51fc2_1602188781.jpg', NULL),
(13, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/05/20/d0174e91-ec8d-4d5e-86e5-164a730409a3_1589914859.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/01/28/3560164d-3dec-415d-9653-134bdefa11bd_1580150006.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/01/28/65bfdd79-b2b8-42f7-8095-767886449a6e_1580150008.jpg', NULL),
(14, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/z3600946970304-ca5674183da0a2e71dd8d94192de7d65_1659002334.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/z3600949508408-0112c95ab4bcb7b31bccc49f3ad4d78a_1659002332.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/28/z3600946975472-426a2345abdd17744eec7fd976e03ab3_1659002333.jpg', NULL),
(15, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2019/11/11/untitled-1_1573444898.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/10/19/z2133244556301-8a9cbe16e0113f7cf949c696799f1017_1603082723.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/06/19/z3503512372042-dd67ee8816bce47752522601aa9b2ee1_1655608659.jpg', NULL),
(16, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/04/11/242df13a-c719-44b7-a46e-33a0080da507_1649660885.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/04/11/745415c1-4959-42b8-9351-1a366d4b4fa5_1649660883.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/04/11/ffabbd8a-4a58-4658-947d-26e9f413c2e6_1649660883.jpg', NULL),
(17, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2021/01/19/img-4316_1611068535.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2021/01/19/img-4249_1611068531.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/03/14/kl_1647219522.jpg', NULL),
(18, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/09/10/img-20200612-084030_1599722674.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/09/10/img-20200522-080045_1599722703.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/09/22/img-20200922-145004_1600763109.jpg', NULL),
(19, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/10/01/z2103932200421-0e8a4a5b053128b54093440156bc117d_1601542084.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/10/01/z2103932200420-329870744539e3dbf2643c0bee29341d_1601542084.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2020/10/01/z2103932200421-0e8a4a5b053128b54093440156bc117d_1601542084.jpg', NULL),
(20, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-09-36-pro_1542975423.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20151110-10-52-08-pro-1_1542975371.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20151110-15-00-53-pro_1542975380.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-08-21-pro_1542975393.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-07-52-pro_1542975407.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-09-36-pro_1542975423.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20151110-10-52-08-pro-1_1542975371.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rental_room`
--

CREATE TABLE `rental_room` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_booking`
--

CREATE TABLE `room_booking` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_info`
--

CREATE TABLE `room_info` (
  `room_id` int(12) NOT NULL,
  `status` text NOT NULL,
  `price` float NOT NULL,
  `size` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `note` text DEFAULT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room_info`
--

INSERT INTO `room_info` (`room_id`, `status`, `price`, `size`, `city`, `district`, `ward`, `note`, `type`) VALUES
(1, '', 1.2, 30, 'TP. Hồ Chí Minh', 'Quận Thủ Đức', '', NULL, 'Phòng trọ'),
(2, '', 1.4, 25, 'TP. Hồ Chí Minh', 'Quận Tân Bình', '', NULL, 'Phòng trọ'),
(3, '', 0.9, 28, 'TP. Hồ Chí Minh', 'Quận Gò Vấp', '', NULL, 'Phòng trọ'),
(4, '', 2, 20, 'TP. Hồ Chí Minh', 'Quận Tân Bình', '', NULL, 'Phòng trọ'),
(5, '', 1.7, 20, 'TP. Hồ Chí Minh', 'Quận Tân Phú', '', NULL, 'Phòng trọ'),
(6, '', 4.5, 22, 'TP. Hồ Chí Minh', 'Quận 10', '', NULL, 'Phòng trọ'),
(7, '', 2.9, 25, 'TP. Hồ Chí Minh', 'Quận Tân Bình', '', NULL, 'Phòng trọ'),
(8, '', 1.5, 12, 'TP. Hồ Chí Minh', 'Quận Bình Tân', '', NULL, 'Phòng trọ'),
(9, '', 5, 30, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', '', NULL, 'Phòng trọ'),
(10, '', 1.4, 30, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', '', NULL, 'Phòng trọ'),
(11, '', 3.5, 24, 'TP. Hồ Chí Minh', 'Quận 10', '', NULL, 'Phòng trọ'),
(12, '', 2.3, 20, 'TP. Hồ Chí Minh', 'Quận 7', '', NULL, 'Phòng trọ'),
(13, '', 0.7, 20, 'TP. Hồ Chí Minh', 'Quận 7', '', NULL, 'Phòng trọ'),
(14, '', 3.8, 20, 'TP. Hồ Chí Minh', 'Quận 6', '', NULL, 'Phòng trọ'),
(15, '', 3, 25, 'TP. Hồ Chí Minh', 'Quận 6', '', NULL, 'Phòng trọ'),
(16, '', 4.5, 20, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', '', NULL, 'Phòng trọ'),
(17, '', 3.2, 16, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', '', NULL, 'Phòng trọ'),
(18, '', 2, 16, 'TP. Hồ Chí Minh', 'Quận 7', '', NULL, 'Phòng trọ'),
(19, '', 5, 22, 'TP. Hồ Chí Minh', 'Quận 10', '', NULL, 'Phòng trọ'),
(20, '', 2.5, 27, 'TP. Hồ Chí Minh', 'Huyện Nhà Bè', '', NULL, 'Phòng trọ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_shared`
--

CREATE TABLE `room_shared` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(12) NOT NULL,
  `account_id` int(12) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `tele` varchar(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Chỉ mục cho bảng `image_vid`
--
ALTER TABLE `image_vid`
  ADD KEY `image_vid_room_info_pk` (`room_id`);

--
-- Chỉ mục cho bảng `rental_room`
--
ALTER TABLE `rental_room`
  ADD KEY `rental_room_room_info_pk` (`room_id`);

--
-- Chỉ mục cho bảng `room_booking`
--
ALTER TABLE `room_booking`
  ADD KEY `room_bookong_room_info_pk` (`room_id`);

--
-- Chỉ mục cho bảng `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`room_id`);

--
-- Chỉ mục cho bảng `room_shared`
--
ALTER TABLE `room_shared`
  ADD KEY `room_shared_room_info_pk` (`room_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_accounts_pk` (`account_id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image_vid`
--
ALTER TABLE `image_vid`
  ADD CONSTRAINT `image_vid_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rental_room`
--
ALTER TABLE `rental_room`
  ADD CONSTRAINT `rental_room_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `room_booking`
--
ALTER TABLE `room_booking`
  ADD CONSTRAINT `room_bookong_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `room_shared`
--
ALTER TABLE `room_shared`
  ADD CONSTRAINT `room_shared_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_accounts_pk` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;