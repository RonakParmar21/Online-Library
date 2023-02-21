-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 11:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `adminid` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `cpass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `adminid`, `pass`, `cpass`) VALUES
(1, 'ronak', 'ronak', 'ronak'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `bnm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `btype` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bimg` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `book` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `bnm`, `btype`, `bimg`, `book`) VALUES
(6, 'c language', 'programming', '1.jpg', 'c lan.pdf'),
(35, 's,dkfjh', 'ihyeybd', '1.jpg', 'Unit-2_OS_Unix&Linux.pdf'),
(36, 's,dkfjh', 'ihyeybd', '1.jpg', 'Unit-2_OS_Unix&Linux.pdf'),
(37, 's,dkfjh', 'ihyeybd', '1.jpg', 'Unit-2_OS_Unix&Linux.pdf'),
(38, 'jdksfjkkjs', 'kewh132', '1.jpg', 'c lan.pdf'),
(39, 'Linux', 'programming', '4.jpg', 'Unit-4_OS_Unix&linux.pdf'),
(40, 'kali linux', 'hakker', '10.jpeg', 'Unit-5.pdf'),
(41, 'sdf', 'erfds', '11.jpeg', 'c lan.pdf'),
(43, 'xyz', 'abc', '3.jpg', 'Unit-5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` bigint(100) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `em` text NOT NULL,
  `mo` bigint(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `cpass` varchar(10) NOT NULL,
  `addres` text NOT NULL,
  `reff` varchar(100) NOT NULL,
  `reg_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `nm`, `em`, `mo`, `pass`, `cpass`, `addres`, `reff`, `reg_date`) VALUES
(1, 'ronak', 'ronak@gmail.com', 9924450208, 'ronak', 'ronak', 'bhalgam', 'ronak', '2022-12-08 15:26:57.301158'),
(2, 'ronak', 'ronak@gmail.com', 1223342112, 'ronak', 'ronak', 'jnd', 'RONAK', '2022-12-09 10:43:50.868629'),
(3, 'ronak', 'ronak@gmail.com', 1223342112, 'ronak', 'ronak', 'jnd', 'RONAK', '2022-12-09 10:44:28.271907');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
