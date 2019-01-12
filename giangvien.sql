-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 04:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giangvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `CBGV`
--

CREATE TABLE `CBGV` (
  `ID` int(100) UNSIGNED NOT NULL,
  `hoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namSinh` int(10) NOT NULL,
  `queQuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luongCung` int(100) NOT NULL,
  `thuong` int(100) NOT NULL,
  `phat` int(100) NOT NULL,
  `luongThuc` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CBGV`
--

INSERT INTO `CBGV` (`ID`, `hoTen`, `namSinh`, `queQuan`, `luongCung`, `thuong`, `phat`, `luongThuc`) VALUES
(1, 'Nguyễn Lan Ngọc', 1980, 'Hà Nội', 10000000, 500000, 200000, NULL),
(2, 'Nguyễn Văn Minh', 1985, 'Hà Nội', 20000000, 1000000, 200000, NULL),
(3, 'Trần Phương Linh', 1989, 'Thái Bình', 7500000, 1000000, 0, NULL),
(4, 'Trần Hà Anh', 1991, 'Phú Thọ', 1500000, 1000000, 700000, NULL),
(5, 'Phạm Mỹ Linh', 1988, 'Ninh Bình', 9500000, 1500000, 1000000, NULL),
(6, 'Nguyễn Huyền My', 1990, 'Bắc Giang', 6500000, 500000, 100000, NULL),
(7, 'Bùi Khánh Hà', 1993, 'Thái Bình', 7000000, 1000000, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CBGV`
--
ALTER TABLE `CBGV`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CBGV`
--
ALTER TABLE `CBGV`
  MODIFY `ID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
