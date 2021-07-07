-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 09:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `advertise` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `visible` varchar(120) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `advertise`, `created_at`, `visible`) VALUES
(23, 'حفل تكريم أوائل الطلبة يوم الثلاثاء 2 يونيو', '2021-01-21 20:07:29', '1'),
(24, 'rgsrgrdfdfdf', '2021-01-21 20:24:57', '0'),
(25, 'egewrsef', '2021-01-21 20:26:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `galleryschool`
--

CREATE TABLE `galleryschool` (
  `id` int(11) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `images` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleryschool`
--

INSERT INTO `galleryschool` (`id`, `subject`, `images`, `created_at`) VALUES
(9, 'fhfghfgh', '1.jpg', '2021-01-21 19:41:18'),
(10, 'math', '2.jpg', '2021-01-21 19:44:35'),
(11, 'علوم', '5.jpg', '2021-01-21 19:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `new` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `new`, `created_at`) VALUES
(12, ' من خطة الواجب نحو الله ثم الآخرين تم التنسيق مع رئيس قسم الصحة المدرسية أ.ماجد القدرة وأ.أسامة أبو عودة بإعطاء ندوة صحية بعنوان سلامة الفم والأسنان من قبل المثقف الصحي د.محمد البطش من وزارة الصحة قسم التثقيف الصحي بالمشاركة مع يوم الثلاثاء الموافق 4/2/2021', '2021-01-22 14:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `usertype` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'nesmaقثافا', 'mm@mm', '12345', ''),
(4, 'nesma', 'eng.nesma@hotmail.com', '123', 'admin'),
(5, 'sdfd', 'admin@number1.com', '123', ''),
(6, 'nesma', 'noora.said.982@qq', '123', 'admin'),
(7, 'nesma', 'admin@jawhar.comrr', '1234', 'admin'),
(20, 'nesma', 'eng.nesma.salman@hotmail.com', '123', 'admin'),
(24, 'egg', 'eee@ww', '123', 'admin'),
(25, 'dr', 'drr@qw', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `email`, `created_at`) VALUES
(12, 'روز ', 'البابا', 'RoseBaba@gmail.com', '2021-01-22 14:25:22'),
(13, 'عبد ', 'جمال', 'jamalA@gmail.com', '2021-01-22 14:25:56'),
(14, 'هدى', 'النباهين', 'HudaAlNabaheen@gmail.com', '2021-01-22 14:26:51'),
(15, 'أحمد', 'عوض', 'AhmedAwad@gmail.com', '2021-01-22 14:27:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryschool`
--
ALTER TABLE `galleryschool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `galleryschool`
--
ALTER TABLE `galleryschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
