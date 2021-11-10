-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 02:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `lienket`
--

CREATE TABLE `lienket` (
  `idTin` int(30) NOT NULL,
  `nameTin` varchar(255) NOT NULL,
  `hinhTin` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `dateTin` date NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienket`
--

INSERT INTO `lienket` (`idTin`, `nameTin`, `hinhTin`, `link`, `dateTin`, `detail`) VALUES
(1, 'CÂU CHUYỆN TÌNH YÊU VÀ GIÀY', './img/hinhft1.jpg', 'https://beautyme.com.vn/2020/10/01/cau-chuyen-tinh-yeu-va-giay/', '2020-10-20', 'Bạn đừng vội vã đổi thay hay chọn bỏ rơi người mình đã nói yêu thương và người đó cũng yêu thương bạn. Chỉ đơn giản, có những người tự lừa dối bản thân mình.Để rồi sau này phải hối tiếc vì nhận ra mình đã đánh mất đi hạnh phúc mình nên trân trọng. Đến một ngày nào đó,người mà bạn rời bỏ lại là người luôn bao dung che chở đời bạn. Người mà bạn muốn có nhất trong cuộc sống này!...'),
(2, 'CÁCH PHỐI GIÀY VỚI QUẦN ÁO ', './img/hinhft2.jpg', 'https://giayu2.com/phoi-do-voi-giay-the-thao/', '2020-10-21', '\"Những nguyên tắc cần nhớ khi phối màu quần áo với giày Dưới đây là những nguyên tắc phối đồ bạn buộc phải thuộc nếu muốn có một diện mạo hoàn chỉnh nhất:  Màu giày: Lựa chọn giày cùng màu hoặc cùng tone màu với quần hoặc một đôi giày sẫm màu hơn. Màu của thắt lưng: phải phù hợp với đôi giày của bạn trừ khi bạn cố ý dùng thắt lưng tạo điểm nhấn, có nhiều họa tiết và màu sắc.Màu tất và giày: Nên chọn màu tất hợp với quần chứ không phải hợp với màu giày... '),
(3, 'GIÀY VÀ CUỘC SỐNG', './img/hinhft3.jpg', 'https://webgiay.com/giay-va-cuoc-song/', '2020-10-22', 'Hạnh phúc giống như đi một đôi giày  Vì trong cuộc đời của mỗi người, ai cũng phải trải qua rất nhiều những đôi giày. Nhưng không phải ai cũng chọn cho mình một đôi giày vừa ý Cũng như mọi cô gái khác, tớ rất thích những đôi giày. Những đôi giày có thể không cần phải quá cầu kì...\"\r\n                + \" Tớ thích cách so sánh giản dị như thế về hạnh phúc. Không phải những điều cao xa, viển vông và cần nhiều trí tưởng tượng. Hạnh phúc chỉ là thế, là một đôi giày - một loại vật dụng hết rất thân thuộc trong đời sống hằng ngày...');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(30) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `hinh`, `name`, `gia`, `title`, `date`) VALUES
(1, './img/chon2.jpg', 'BUDI 002', 500000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã', '2020-10-19'),
(2, './img/g225.jpg', 'KIOT 011', 500000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã', '2020-10-19'),
(3, './img/g2225.jpg', 'SU 061', 600000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã', '2020-10-19'),
(4, './img/g3225.jpg', 'KKER 023', 700000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã', '2020-10-20'),
(5, './img/chon8.jpg', 'MOI 061', 800000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-20'),
(6, './img/chon9.jpg', 'SIAS 004', 900000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(7, './img/chon2.jpg', 'SNEAKER BUDI 002', 900000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(8, './img/chon3.jpg', 'SNEAKER DIPO 003', 800000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(9, './img/chon4.jpg', 'SNEAKER KATO 004', 650000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(10, './img/chon5.jpg', 'SSNEAKER HATBI 005', 650000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(11, './img/chon6.jpg', 'Giày THỂ THAO 006', 500000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(12, './img/chon9.jpg', 'SIAS 004', 900000, 'chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. Năng động, thể thao, và có nhiều mẫu mã ', '2020-10-23'),
(13, './img/chọn1.jpg', 'SNEAKER BAR', 890000, 'Giá đẹp, re, vừa tiện lợi và phong cách', '2020-10-19'),
(14, './img/chon7.jpg', 'UBUNTU SHOE', 560000, 'Giá đẹp, re, vừa tiện lợi và phong cách', '2020-10-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lienket`
--
ALTER TABLE `lienket`
  ADD PRIMARY KEY (`idTin`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lienket`
--
ALTER TABLE `lienket`
  MODIFY `idTin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
