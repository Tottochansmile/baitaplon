-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2016 at 11:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baitaplon`
--

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `hangID` int(11) NOT NULL,
  `tenhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`hangID`, `tenhang`, `address`) VALUES
(1, 'TOSHIBA', 'Cầu Giấy Hà Nội, Viêt Nam'),
(2, 'Enchentow', 'pháp'),
(3, 'Lowes', 'England'),
(4, 'SamSung', 'Viêt Nam'),
(5, 'BestBuy', 'Manhattan');

-- --------------------------------------------------------

--
-- Table structure for table `newpro`
--

CREATE TABLE `newpro` (
  `newID` int(11) NOT NULL,
  `proname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `tenhang` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `proimages` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giapro` int(11) NOT NULL,
  `motapro` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `trangthaisanpham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newpro`
--

INSERT INTO `newpro` (`newID`, `proname`, `tenhang`, `proimages`, `giapro`, `motapro`, `trangthaisanpham`) VALUES
(1, 'Baby Coupble', 'Enchentow', 'new-1.jpg', 150, 'Gấu bông cặp đôi!', 1),
(2, 'Robot02', 'TOSHOBA', 'new-4.jpg', 200, 'Robot màu xanh, tiện lợi trong công việc nhà!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `orderID` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yeucaudate` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `binhluan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `traloibinhluan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proID` int(11) NOT NULL,
  `proname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `tenhang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proimages` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `saleimages` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giacu` int(11) DEFAULT NULL,
  `giapro` int(11) NOT NULL,
  `motapro` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trangthaisanpham` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proID`, `proname`, `tenhang`, `loai`, `proimages`, `saleimages`, `giacu`, `giapro`, `motapro`, `trangthaisanpham`) VALUES
(2, 'Robot', 'BestBuy', NULL, 'sample-1.jpg', NULL, NULL, 400, 'Robot thông minh! Tự điều khiển và hành động!', 1),
(3, 'Moto01', 'BestBuy', NULL, 'sample-2.jpg', NULL, NULL, 350, 'Moto sanh dieu! Đồ chơi siêu sang cho các đại gia!', 1),
(4, 'Baby01', 'Enchentow', NULL, 'sample-3.jpg', NULL, NULL, 100, 'Baby dễ thương phù hợp cho các bé gái!', 1),
(5, 'Xedap', 'BestBuy', NULL, 'sample-4.jpg', NULL, NULL, 150, 'Xe đạp teen! Cho những ai yêu thích thể thao!', 1),
(6, 'Car', 'Lowes', NULL, 'sample-5.jpg', NULL, NULL, 250, 'Car điều khiển! Nhìn là thấy nghiện!', 1),
(7, 'Máy ảnh', 'SamSung', NULL, 'sample-11.jpg', NULL, NULL, 120, 'Máy ảnh công nghệ cao! chụp ảnh sắc nét', 1),
(14, 'Oto01', 'TOSHIBA', 'sale', 'sale-1.jpg', 'slide-1.jpg', 160, 145, 'Oto dieu khien thong minh. San pham dang duoc sale con 160$ nhanh tay nao!', 1),
(15, 'Sieu Nhan 01', 'Samsung', 'sale', 'sale-2.jpg', 'slide-2.jpg', 150, 135, 'Sieu nhan dai chien! San pham Ä‘ang sale gÃ­a chá»‰ cÃ²n 135$.\r\nNhanh tay nao!!', 1),
(16, 'Gau Bong 01', 'Enchantow', 'sale', 'sale-3.jpg', 'slide-3.jpg', 145, 120, 'Gau Bong de thuong! \r\nSan pham dang sale gia cÃ²n 120$.\r\nNhanh tay nÃ o.', 1),
(17, 'Xep Hinh', 'Tottosi', 'sale', 'sale-4.jpg', 'slide-4.jpg', 90, 78, 'Do choi xep hinh tri tue cho be!', 1),
(18, 'Robot02', 'Lowes', 'new', 'new-4.jpg', NULL, 0, 180, 'Robot thÃ´ng minh! Má»›i nháº­p hÃ ng vá»!', 1),
(19, 'Äá»“ chÆ¡i gháº¿ gá»—', 'Winwintoy', 'new', 'new-6.jpg', '', 0, 50, 'Äá»“ chÆ¡i gháº¿ gá»— dÃ nh cho bÃ©!', 1),
(20, 'Robot02', 'BestBuy', 'new', 'new-5.jpg', '', 0, 200, 'Robot thÃ´ng minh!', 1),
(21, 'Oto03', 'TOSHIBA', 'new', 'new-7.jpg', '', 0, 145, 'Ã”t dieu khien thÃ´ng minh', 1),
(22, 'Gau Bong Ä‘Ã´i', 'Enchantow', 'new', 'new-3.jpg', '', 0, 180, 'Gáº¥u bÃ´ng Ä‘Ã´i siÃªu dá»… thÆ°Æ¡ng!!', 1),
(23, 'Oto09', 'Ruby', 'new', 'sample-22.jpg', '', 0, 100, 'Oto dá»… thÆ°Æ¡ng!', 1),
(24, 'Gau Bong Ä‘Ã´i 02', 'Sizuly', 'new', 'new-1.jpg', '', 0, 190, 'Gáº¥u bÃ´ng Ä‘Ã´i Ä‘áº¹p!', 1),
(25, 'MÃ¡y bay 02', 'Hattuzuki', 'new', 'sample-55.jpg', '', 0, 40, 'MÃ¡y bay Ä‘á»“ chÆ¡i cho bÃ©!!', 1),
(26, 'MÃ¡y bay 07', 'Lao Cai', '', 'sample-18.jpg', '', 0, 100, 'Äá»“ chÆ¡i mÃ¡y bay sÃ nh Ä‘iá»‡u!', 1),
(27, 'Äá»“ chÆ¡i 03', 'Nokia', 'new', 'sample-6.jpg', '', 0, 100, 'Äá»“ chÆ¡i thÃº vá»‹!!', 1),
(28, 'Gáº¥u BÃ´ng Ninja', 'Enchantow', 'new', 'new-2.jpg', '', 0, 70, 'Gáº¥u bÃ´ng dá»… thÆ°Æ¡ng!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleID` int(11) NOT NULL,
  `proname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `tenhang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `saleimages` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `proimages` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giapro` int(11) NOT NULL,
  `salepro` int(11) NOT NULL,
  `motapro` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trangthaisanpham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectID` int(10) NOT NULL,
  `subjectname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectID`, `subjectname`) VALUES
(1, 'Ngôn ngữ C'),
(2, 'Ngôn ngữ PHP'),
(3, 'MySQL');

-- --------------------------------------------------------

--
-- Table structure for table `th`
--

CREATE TABLE `th` (
  `checkID` int(11) NOT NULL,
  `ngaythanhtoan` datetime NOT NULL,
  `soluongpro` int(50) NOT NULL,
  `sotientra` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userid`, `username`, `email`, `timstamp`, `password`) VALUES
(1, 'dao', 'daopt22@gmail.com', '2016-05-19 13:08:35', '123455'),
(2, 'DaoPham', 'daopt1995@gmail.com', '2016-05-19 17:54:13', 'fcea920f7412b5da7be0cf42b8c93759'),
(3, 'giang', '01694422134', '2016-05-19 18:38:13', '202cb962ac59075b964b07152d234b70'),
(4, 'nhung', 'nhungchan', '2016-05-20 08:22:24', '1234'),
(5, 'phuong', 'dao@gmail.com', '2016-05-21 06:14:25', '00c66aaf5f2c3f49946f15c1ad2ea0d3'),
(6, 'trang', 'dao', '2016-05-21 06:26:53', '202cb962ac59075b964b07152d234b70'),
(7, 'trang', 'trang@gngng', '2016-05-21 06:27:35', '202cb962ac59075b964b07152d234b70'),
(8, 'phÆ°Æ¡ng', 'daowww', '2016-05-21 07:05:37', '202cb962ac59075b964b07152d234b70'),
(9, 'dao12', 'daodao12', '2016-05-23 09:35:46', '202cb962ac59075b964b07152d234b70'),
(10, 'Chinh', 'daoinh', '2016-05-23 12:36:15', '202cb962ac59075b964b07152d234b70'),
(11, 'Anh', 'daoAnh', '2016-05-23 12:37:58', '202cb962ac59075b964b07152d234b70'),
(12, 'luongtrang', 'uongtrang13444', '2016-05-26 04:23:10', '202cb962ac59075b964b07152d234b70'),
(13, 'huyen', 'uyen1234', '2016-05-26 05:59:37', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`hangID`);

--
-- Indexes for table `newpro`
--
ALTER TABLE `newpro`
  ADD PRIMARY KEY (`newID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectID`);

--
-- Indexes for table `th`
--
ALTER TABLE `th`
  ADD PRIMARY KEY (`checkID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `hangID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newpro`
--
ALTER TABLE `newpro`
  MODIFY `newID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `th`
--
ALTER TABLE `th`
  MODIFY `checkID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
