-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 04:59 AM
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
-- Database: `tnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(10) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `img`) VALUES
(2, 'img2.jpg'),
(3, 'img3.jpg'),
(9, 'img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `title` text NOT NULL,
  `company` text NOT NULL,
  `cdate` date NOT NULL,
  `dept` text NOT NULL,
  `discription` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `company`, `cdate`, `dept`, `discription`, `link`) VALUES
(1, 'C jobs', 'TCS', '0000-00-00', 'Computer', 'welcome to tcs side', 'http://localhost/chongi/add_n.php'),
(2, 'Placement Job', 'TCS', '2020-06-06', 'Computer', 'welcome to tcs side', 'http://localhost/chongi/add_n.php'),
(3, 'Study and Development of IDE for java programming', 'TCS', '2020-06-06', 'Computer', 'welcome to tcs side', 'http://localhost/chongi/add_n.php'),
(4, 'Job Training', 'Jobs', '2020-07-02', 'Computer', 'welcome to jobs side', 'http://localhost/phpmyadmin/sql.php?db=tnp&table=news&pos=0'),
(5, 'svkm Job', 'svkm', '2020-06-06', 'Computer', 'welcom to svkm side', 'http://localhost/phpmyadmin/sql.php?db=tnp&table=news&pos=0'),
(6, 'svkm Job', 'svkm', '2020-06-10', 'Computer', 'c object', 'http://localhost/phpmyadmin/sql.php?db=tnp&table=news&pos=0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` text NOT NULL,
  `mobile` bigint(200) NOT NULL,
  `bod` date NOT NULL,
  `dept` text NOT NULL,
  `year` text NOT NULL,
  `prn` bigint(100) NOT NULL,
  `user` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `mobile`, `bod`, `dept`, `year`, `prn`, `user`, `email`, `pass`) VALUES
('Deshmukh Tilesh', 8308283380, '2020-07-16', 'Computer', '3rd Year', 123456789, 'Student', 'dtilesh@gmail.com', '123456'),
('ddsf5', 2224222221, '2020-07-01', 'Mech', '2nd Year', 125478963, 'student', 'masaregopal@gmail.com', '123456'),
('khalid sir ', 8888888888, '2020-06-10', 'Computer', '3rd Year', 445888525865225, 'faculty', 'khalid@gmail.com', '123456'),
('Pooja Subhash Mahale', 8999645456, '2020-06-10', 'Computer', '4th Year', 9223372036854775807, 'Student', 'poojamahale@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`prn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
