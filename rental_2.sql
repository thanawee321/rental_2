-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 11:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `water_bill` double NOT NULL,
  `electric_bill` double NOT NULL,
  `room_bill` double NOT NULL,
  `result_bill` double NOT NULL,
  `report_bill` text NOT NULL,
  `status_bill` varchar(15) NOT NULL,
  `date_bill` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `id_member`, `water_bill`, `electric_bill`, `room_bill`, `result_bill`, `report_bill`, `status_bill`, `date_bill`) VALUES
(1, 1, 200, 1400, 3500, 5100, '', '', '2020-10-09'),
(2, 2, 650, 1000, 3500, 5150, '', '', '2020-10-09'),
(3, 15, 450, 45, 450, 945, 'ค้างค่าชำระมาแล้ว10วัน', '', '2020-10-09'),
(6, 20, 760, 760, 760, 2280, 'ทำสอบการอัพเดทบิล555555555555', '', '2020-10-11'),
(7, 20, 349, 278, 4588, 5215, 'ทดสอบการอัพเดท5555', '', '2020-10-11'),
(12, 25, 340, 450, 540, 1900, 'report_bill', '', '2020-11-10'),
(13, 12, 33, 532, 124, 689, '้า่เ้ทเทเ้ท', '', '2020-10-11'),
(14, 26, 450, 459, 3499, 4408, 'หอมจริงๆ', 'ชำระแล้ว', '2020-10-12'),
(15, 28, 890, 780, 3500, 5170, 'บลาๆๆๆๆ108 1000 9', 'ชำระแล้ว', '2020-10-12'),
(16, 27, 450, 40, 450, 940, '', 'ชำระแล้ว', '2020-10-12'),
(17, 28, 650, 560, 560, 1770, 'ukjkk', 'ยังไม่ชำระ', '2020-10-12'),
(18, 28, 450, 450, 450, 1350, 'ykghkhkghk', 'ยังไม่ชำระ', '2020-10-12'),
(19, 26, 950, 950, 950, 8200, 'report_bill', 'ยังไม่ชำระ', '2020-10-12'),
(20, 28, 780, 780, 780, 2340, 'illjkl', 'ยังไม่ชำระ', '2020-10-12'),
(21, 27, 680, 750, 2500, 3930, 'ใส่กับเบาๆหน่อยข้างห้องร้องเรียนมาครับ', 'ยังไม่ชำระ', '2020-10-12'),
(22, 22, 680, 4500, 35000, 40180, '', 'ชำระแล้ว', '2020-10-14'),
(25, 37, 750, 750, 750, 2250, 'thtjjr', 'ยังไม่ชำระ', '2020-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `id_login` varchar(20) NOT NULL,
  `password_login` varchar(20) NOT NULL,
  `name_login` varchar(20) NOT NULL,
  `sur_login` varchar(20) NOT NULL,
  `phone_login` varchar(10) NOT NULL,
  `status_login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `id_login`, `password_login`, `name_login`, `sur_login`, `phone_login`, `status_login`) VALUES
(1, 'admin', 'admin', 'God of ', 'the father', '0991626583', 'admin'),
(2, 'user', 'user', 'USER!!', 'the father', '0847445639', 'user'),
(3, '208', '1249900377458', 'ธนวีร์', 'สังขปรีชา', '0854458567', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `idcard_member` varchar(14) NOT NULL,
  `name_member` varchar(30) NOT NULL,
  `sur_member` varchar(30) NOT NULL,
  `id_room` int(5) NOT NULL,
  `vehicle_member` varchar(15) DEFAULT NULL,
  `plate_member` varchar(10) DEFAULT NULL,
  `phone_member` varchar(10) NOT NULL,
  `fristday_member` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `idcard_member`, `name_member`, `sur_member`, `id_room`, `vehicle_member`, `plate_member`, `phone_member`, `fristday_member`) VALUES
(55, '1245635522191', 'sdrgvsgv', 'svg', 102, 'รถยนต์', 'วย-658', '0985452125', '2020-10-23'),
(57, '46456', '้่าเาทเท', 'เ้เอ้่เ้่', 110, 'รถยนต์', '้สน-5563', '0685431552', '2020-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `id_member` varchar(5) NOT NULL,
  `type_room` varchar(11) NOT NULL,
  `status_room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `id_member`, `type_room`, `status_room`) VALUES
(101, '', 'แอร์', 'ห้องว่าง'),
(102, '55', 'พัดลม', 'ไม่ว่าง'),
(103, '', 'แอร์', 'ห้องว่าง'),
(104, '', 'แอร์', 'ห้องว่าง'),
(105, '', 'พัดลม', 'ห้องว่าง'),
(106, '', 'แอร์', 'ห้องว่าง'),
(107, '', 'พัดลม', 'ห้องว่าง'),
(108, '', 'แอร์', 'ห้องว่าง'),
(109, '', 'พัดลม', 'ห้องว่าง'),
(110, '57', 'แอร์', 'ไม่ว่าง'),
(201, '', 'พัดลม', 'ห้องว่าง'),
(202, '', 'แอร์', 'ห้องว่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
