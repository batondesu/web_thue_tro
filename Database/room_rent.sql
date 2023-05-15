-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2023 at 12:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_vid`
--

CREATE TABLE `image_vid` (
  `room_id` int(12) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `vid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_vid`
--

INSERT INTO `image_vid` (`room_id`, `image`, `vid`) VALUES
(1, 'https://www.bing.com/th?id=OIP.KSGhZ2TSBI8AS7cBHmS7rQHaEO&w=330&h=188&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2.jpg', NULL),
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
(20, 'https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-09-36-pro_1542975423.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20151110-10-52-08-pro-1_1542975371.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20151110-15-00-53-pro_1542975380.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-08-21-pro_1542975393.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-07-52-pro_1542975407.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20161225-11-09-36-pro_1542975423.jpg\r\nhttps://pt123.cdn.static123.com/images/thumbs/900x600/fit/2018/11/23/wp-20151110-10-52-08-pro-1_1542975371.jpg', NULL),
(21, 'https://angcovat.vn/imagesdata/KN208117/thiet-ke-phong-tro-khep-kin-co-gac-lung.jpg,https://angcovat.vn/imagesdata/KN208117/thiet-ke-phong-tro-khep-kin.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `rental_room`
--

CREATE TABLE `rental_room` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental_room`
--

INSERT INTO `rental_room` (`user_id`, `room_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 10),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(8, 9),
(9, 11),
(10, 12),
(10, 13),
(11, 14),
(12, 15),
(13, 16),
(14, 17),
(15, 18),
(16, 19),
(17, 20),
(1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `room_id` int(12) NOT NULL,
  `title` text NOT NULL,
  `status` text NOT NULL,
  `price` float NOT NULL,
  `size` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `note` text DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `last_update` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) DEFAULT NULL,
  `status2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`room_id`, `title`, `status`, `price`, `size`, `city`, `district`, `ward`, `note`, `type`, `last_update`, `address`, `status2`) VALUES
(1, 'Cực phẩm KTX, Phòng trọ, Sang, Xịn, Mịn Giá siêu rẻ tại Thủ Đức ', '', 1.2, 30, 'TP. Hồ Chí Minh', 'Quận Thủ Đức', 'Phường Linh Đông', NULL, 'Phòng trọ', '2023-05-11', '101 Đường số 8', 'yes'),
(2, 'PHÒNG SLEEPBOX RIÊNG TƯ ĐẦY ĐỦ TIỆN NGHI RIÊNG TƯ AN NINH 24/24 ', '', 1.4, 25, 'TP. Hồ Chí Minh', 'Quận Tân Bình', 'Phường 2', NULL, 'Phòng trọ', '2023-05-11', '50 Đường Phạm Cự Lượng', 'yes'),
(3, 'PHÒNG KTX ĐẠI HỌC CÔNG NGHIỆP (200M) THANG MÁY, MÁY LẠNH, MÁY GIẶT, WIFI, BẾP ', '', 0.9, 28, 'TP. Hồ Chí Minh', 'Quận Gò Vấp', 'Phường 5', NULL, 'Phòng trọ', '2023-05-11', '60/18A Đường Huỳnh Khương An', 'yes'),
(4, 'Cho thuê phòng trọ 128/46 Thiên Phước, P.9, Q.Tân Bình (gần vòng xoay Lê Đại Hành)', '', 2, 20, 'TP. Hồ Chí Minh', 'Quận Tân Bình', 'Phường 9', NULL, 'Phòng trọ', '2023-05-11', '128/46 Đường Thiên Phước', 'yes'),
(5, 'PHÒNG TRỌ MỚI SỬA 7/2022 48/13 LƯƠNG THẾ VINH, Phường TÂN THỚI HÒA, TÂN PHÚ (GẦN ĐẦM SEN)', '', 1.7, 20, 'TP. Hồ Chí Minh', 'Quận Tân Phú', 'Phường Tân Thới Hòa', NULL, 'Phòng trọ', '2023-05-11', '48/13 Đường Lương Thế Vinh', 'yes'),
(6, 'Cho thuê phòng cao cấp, đầy đủ tiện nghi, như căn hộ, ngay trung tâm Quận 10 ', '', 4.5, 22, 'TP. Hồ Chí Minh', 'Quận 10', 'Phường 14', NULL, 'Phòng trọ', '2023-05-11', '128 Đường Thành Thái', 'yes'),
(7, 'Chỉ 3.9 Triệu, Phòng Rộng Rãi, Đầy Đủ Nội Thất Cơ Bản, Giảm ngay 10% tiền nhà tháng đầu! ', '', 2.9, 25, 'TP. Hồ Chí Minh', 'Quận Tân Bình', 'Phường 4', NULL, 'Phòng trọ', '2023-05-11', '74 Đường Xuân Diệu', 'yes'),
(8, 'CHO THUÊ PHÒNG TRỌ GIÁ SIÊU RẺ GẦN KHU CÔNG NGHIỆP POUYUEN ', '', 1.5, 12, 'TP. Hồ Chí Minh', 'Quận Bình Tân', 'Phường Tân Tạo A', NULL, 'Phòng trọ', '2023-05-11', '1665 Đường Tỉnh Lộ 10', 'yes'),
(9, 'Căn hộ mới xây 30m2 full nội thất - đường D2 Bình Thạnh ', '', 5, 30, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', 'Phường 25', NULL, 'Phòng trọ', '2023-05-11', '213/8 Đường Nguyễn Gia Trí (D2)', 'yes'),
(10, 'PHÒNG SLEEP BOX FULL TIỆN NGHI DÀNH CHO CÁC BẠN SINH VIÊN BÌNH THẠNH, HUTECH, NGOẠI THƯƠNG, GTVT ', '', 1.4, 30, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', 'Phường 25', NULL, 'Phòng trọ', '2023-05-11', '69/38/11 Đường D2', 'yes'),
(11, 'Phòng trọ mới, sạch đẹp, ngay trung tâm, giá rẻ, chính chủ. ', '', 3.5, 24, 'TP. Hồ Chí Minh', 'Quận 10', 'Phường 11', NULL, 'Phòng trọ', '2023-05-11', '358/4 Đường Điện Biên Phủ', 'yes'),
(12, 'Phòng máy lạnh, giường, máy giặt đầy đủ tiện nghi ', '', 2.3, 20, 'TP. Hồ Chí Minh', 'Quận 7', 'Phường Bình Thuận', NULL, 'Phòng trọ', '2023-05-11', '350 Đường Huỳnh Tấn Phát', 'yes'),
(13, 'Ở ghép trọn gói 700k gần Lotte Mart ', '', 0.7, 20, 'TP. Hồ Chí Minh', 'Quận 7', 'Phường Tân Quy', NULL, 'Phòng trọ', '2023-05-11', '34 Phố số 36', 'yes'),
(14, 'Phòng trọ cho thuê ngắn hạn hoặc dài hạn đầy đủ nội thất, tiện nghi vào ở ngay ', '', 3.8, 20, 'TP. Hồ Chí Minh', 'Quận 6', 'Phường 12', NULL, 'Phòng trọ', '2023-05-11', '336/10 Nguyễn Văn Luông', 'yes'),
(15, 'PHÒNG CHO THUÊ NGAY LOTTE Q.7 - CHỈ TỪ 3TR - BAO GIÁ TỐT - Alo 0988.373.731 ', '', 3, 25, 'TP. Hồ Chí Minh', 'Quận 6', 'Phường Tân Khiểng', NULL, 'Phòng trọ', '2023-05-11', '80 Đường số 3', 'yes'),
(16, 'Cho thuê phòng 20m2 nhà mới xây tại 32/40/38 Đường Bùi Đình Túy, Phường 12, Quận Bình Thạnh ', '', 4.5, 20, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', 'Phường 12', NULL, 'Phòng trọ', '2023-05-11', '32/40/38 Đường Bùi Đình Túy', 'yes'),
(17, 'Phòng sạch, đẹp 16m2, có sẵn nội thất chỉ từ 3,2 Triệu đến 3,5 Triệu/tháng tại Đinh Bộ Lĩnh, Phường 26, Bình Thạnh ', '', 3.2, 16, 'TP. Hồ Chí Minh', 'Quận Bình Thạnh', 'Phường 26', NULL, 'Phòng trọ', '2023-05-11', 'Đường Đinh Bộ Lĩnh', 'yes'),
(18, 'Phòng 2 triệu tại q7, phòng mới, yên tĩnh, phòng riêng biệt, giờ giấc tự do ', '', 2, 16, 'TP. Hồ Chí Minh', 'Quận 7', 'Phường Phú Mỹ', NULL, 'Phòng trọ', '2023-05-11', '', 'yes'),
(19, 'Cho thuê phòng trọ đầy đủ nội thất, đường 3/2, khu Kỳ Hòa, Quận 10 ', '', 5, 22, 'TP. Hồ Chí Minh', 'Quận 10', 'Phường 11', NULL, 'Phòng trọ', '2023-05-11', '181/36 Đường số 3/2', 'yes'),
(20, 'Cho thuê nhà trọ mặt tiền 8m, giá rẻ, sạch, đẹp, tự do..chỉ còn 1 căn duy nhất ', '', 2.5, 27, 'TP. Hồ Chí Minh', 'Huyện Nhà Bè', 'Xã Nhơn Đức', NULL, 'Phòng trọ', '2023-05-11', 'P02- 1874/11/6 Đường Lê Văn Lương', 'yes'),
(21, 'Phòng trọ giá siêu rẻ', 'Còn phòng', 1, 100, 'Hà Nội', 'Nam Từ Liêm', 'Mễ Trì', '', 'Nhà nguyên căn', '2023-05-13', '32 Đỗ Đức Dục', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `room_shared`
--

CREATE TABLE `room_shared` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` text NOT NULL,
  `address` text NOT NULL,
  `permission` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `User_name`, `account_name`, `password`, `email`, `tel`, `address`, `permission`) VALUES
(1, 'MR Bình', 'Mrbinh', '0936456678', 'abc@gmail.com', '0936456678', '144 Xuân Thủy, Cầu Giấy, Hà Nội', 'user'),
(2, 'Văn Chung', 'VChung', '0896119779', '', '0896119779', '', 'user'),
(3, 'Nguyễn Văn Kiên', 'kenshin8522', '12345678', 'hahdasd', '0906878018', 'kjahdjhaskjda', 'user'),
(4, 'Nguyễn Phạm Đức Cường', 'CuongNguyen', '0938864405', '', '0938864405', '', 'user'),
(5, 'Đỗ Văn Khang', 'khang275', '123456', '', '0938297275', '', 'user'),
(6, 'VINH NGUYỄN', 'VinhNg', '0938662616', '', '0938662616', '', 'user'),
(7, 'huỳnh thị mỹ trâm', 'TramH', '0916668326', '', '0916668326', '', 'user'),
(8, 'Bích Đào', 'Bichdao', '0935101516', '', '0935101516', '', 'user'),
(9, 'Nguyen Thi Bich Thuy', 'BichThuyNT', '0983344682', '', '0983344682', '', 'user'),
(10, 'Hoàng Phúc', 'HoangP', '0931313570', '', '0931313570', '', 'user'),
(11, 'Anh Cảnh', 'anhcanh', '0913635257', '', '0913635257', '', 'user'),
(12, 'Nguyễn Văn Tú', 'ThuecanhominiQ7', '0988373731', '', '0988373731', '', 'user'),
(13, 'Loan', 'loan1919', '0978111919', '', '0978111919', '', 'user'),
(14, 'Chị Đoan', 'Chidoan', '0903934756', '', '0903934756', '', 'user'),
(15, 'Cao thi cuc', 'cuccao', '0909634270', '', '0909634270', '', 'user'),
(16, 'Phạm Đình Văn', 'van528', '0919990528', '', '0919990528', '', 'user'),
(17, 'Nguyễn Thị Ngọc Thúy', 'thuyngocnt78', '1234567', 'thuyngocnt78@gmail.com', '0907667248', '', 'user'),
(18, 'mon123', '', '123456', '', '', '', 'admin'),
(19, 'Nguyễn Viết Tú', '', 'abcxyz', '', '', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_vid`
--
ALTER TABLE `image_vid`
  ADD KEY `image_vid_room_info_pk` (`room_id`);

--
-- Indexes for table `rental_room`
--
ALTER TABLE `rental_room`
  ADD KEY `rental_room_room_info_pk` (`room_id`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD KEY `room_bookong_room_info_pk` (`room_id`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_shared`
--
ALTER TABLE `room_shared`
  ADD KEY `room_shared_room_info_pk` (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_vid`
--
ALTER TABLE `image_vid`
  ADD CONSTRAINT `image_vid_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `rental_room`
--
ALTER TABLE `rental_room`
  ADD CONSTRAINT `rental_room_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD CONSTRAINT `room_bookong_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `room_shared`
--
ALTER TABLE `room_shared`
  ADD CONSTRAINT `room_shared_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
