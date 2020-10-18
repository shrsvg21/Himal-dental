-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 05:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `aID` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date NOT NULL,
  `aCover` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`aID`, `title`, `date_created`, `date_modified`, `aCover`) VALUES
(19, 'editedok', '2016-04-12', '2020-09-18', '../images/cat2.jpg'),
(20, 'newedits', '2016-04-12', '2020-09-18', '../images/cat2.jpg'),
(22, 'new album', '2020-09-18', '2020-09-18', '../images/default.jpg'),
(24, 'editedjjjj', '2020-09-18', '2020-09-18', '../images/cat6.jpg'),
(25, 'new nes', '2020-09-18', '2020-09-18', '../images/applepie.jpg'),
(26, 'new album', '2020-09-18', '2020-09-18', '../images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `doctor` set('DR MALE','DR FEMALE','DR RAM','DR HARI') NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `address`, `contact`, `doctor`, `email`, `date`) VALUES
(1, 'shriya', 'newroad', 1234567890, '', 'shriya@gmail.com', '2020-09-02'),
(2, 'shriya', 'newroad', 1234567890, '', 'shriya@gmail.com', '2020-09-02'),
(6, 'Aparana Pant', 'jhjknjk', 2147483647, '', 'aparanapant@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`) VALUES
(4, '19.jpg'),
(5, 'banner.jpg'),
(6, 'dc.jpg'),
(7, 'Dental-Ward.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `phone`, `message`, `subject`) VALUES
(1, 'shreya', 'adhikari', '9869151506', 'abcgas', 'hello'),
(2, 'adam', 'evans', '9876182611', 'hi hihi', 'hello'),
(3, 'dev', 'raj', '9869151506', 'jgdgukAG', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(300) NOT NULL,
  `field` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `img`, `field`) VALUES
(9, 'Aparana Pant', 'Screenshot (141).png', 'orthodontics'),
(10, 'Aparana Pant', 'Screenshot (137).png', 'orthodontics'),
(11, 'Aparana Pant', 'Screenshot (160).png', 'orthodontics'),
(13, 'Aparana Pant', 'IMG_0837.jpg', 'ortho'),
(14, 'Aparana Pant', 'pexels-mohi-syed-47261.jpg', 'orthodontics'),
(15, 'Aparana Pantt', 'Capture.PNG', 'ortho');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `start` varchar(11) NOT NULL,
  `end` varchar(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `descrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `day`, `month`, `year`, `start`, `end`, `title`, `descrip`) VALUES
(3, '31', 'april', '2016', '2 pm', '1 am', 'This my first event', 'okay i need lorem to add lots of text but i am too'),
(4, '21', 'sept', '2020', '10 am', '2 pm', 'So is this workoing???', 'it should work but i can only see half of the text');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `pID` int(50) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`pID`, `caption`, `file_path`, `credit`) VALUES
(2, 'i edited this', '../images/mochi.jpg', 'dsffds'),
(3, 'Chicken Stew', '../images/stew.jpg', 'Site creator'),
(5, 'Atami Seaside', '../images/seaside.jpg', 'Site Creator'),
(7, 'Default', '../images/default.jpg', 'Edited from http://tinyurl.com/ja6wvsv'),
(20, 'Macau Water Show', '../images/watershow.jpg', 'Site Creator'),
(21, 'Disney- Small World', '../images/disney.jpg', 'Site Creator'),
(22, 'Yellowstone Park', '../images/yellowstone.jpg', 'http://tinyurl.com/hrc7m62'),
(23, 'Mount Fuji', '../images/fuji.jpg', 'http://tinyurl.com/hqj4u7m'),
(24, 'Lavender Ice Cream', '../images/lavender.jpg', 'http://tinyurl.com/h9gl9vm'),
(25, 'Mango Dessert', '../images/mango.jpg', 'http://tinyurl.com/hdf9ced'),
(26, 'Apple Pie', '../images/applepie.jpg', 'http://tinyurl.com/z79boxo'),
(27, 'Salad', '../images/salad.jpg', 'http://tinyurl.com/gurbu47'),
(28, 'Barbecue Steak', '../images/steak.jpg', 'http://tinyurl.com/gplnhbc'),
(30, 'cat22', '../images/cat2.jpg', 'http://tinyurl.com/hll9lr9'),
(31, 'Cat 3', '../images/cat3.jpg', 'http://tinyurl.com/js5zmfz'),
(32, 'Cat 4', '../images/cat4.jpg', 'http://tinyurl.com/zdgjnfl'),
(33, 'Cat 5', '../images/cat5.jpg', 'http://tinyurl.com/jkagfnm'),
(34, 'Cat 6', '../images/cat6.jpg', 'http://tinyurl.com/hr7exhb'),
(35, 'Cat 7', '../images/cat7.jpg', 'http://tinyurl.com/jhhwhmy'),
(36, 'Cat 8', '../images/cat8.jpg', 'http://tinyurl.com/jdnjex5'),
(37, 'Test', '../images/cat-1005489_960_720.jpg', 'Test'),
(44, 'jjghjhhbjk', '../images/Screenshot (135).png', 'bjkhjk'),
(45, 'jjghjhhbjkjhbjhb', '../images/Screenshot (136).png', 'hgyugu'),
(46, 'so is it edited?', '../images/Screenshot (145).png', 'ihva ');

-- --------------------------------------------------------

--
-- Table structure for table `images_albums`
--

CREATE TABLE `images_albums` (
  `sID` int(50) NOT NULL,
  `pID` int(50) NOT NULL,
  `aID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_albums`
--

INSERT INTO `images_albums` (`sID`, `pID`, `aID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(5, 5, 2),
(27, 4, 2),
(28, 2, 2),
(29, 20, 2),
(30, 1, 2),
(31, 3, 2),
(32, 21, 2),
(33, 22, 2),
(34, 23, 2),
(35, 24, 1),
(36, 25, 1),
(37, 26, 1),
(38, 27, 1),
(39, 28, 1),
(40, 29, 19),
(41, 30, 19),
(42, 31, 19),
(43, 32, 19),
(44, 33, 19),
(45, 34, 19),
(46, 35, 19),
(47, 36, 19),
(48, 29, 1),
(49, 37, 20),
(50, 39, 23),
(51, 40, 23),
(52, 41, 19),
(53, 42, 19),
(54, 43, 19),
(55, 44, 19),
(56, 45, 24),
(57, 46, 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `descrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `month`, `year`, `day`, `descrip`) VALUES
(3, 'This is a new announcement', 'September', '2020', '01', 'I hope everyone is safe during the lockdown.'),
(9, 'New news alert!!!', 'September', '2020', '04', 'HI everyonesss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `username`, `password`, `email`) VALUES
(1, 'shreyaas', '1234', 'shreyaadhikari@gmail.com'),
(2, 'adams', '1234', 'adamevans@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(200) NOT NULL,
  `descrip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `img`, `descrip`) VALUES
(6, 'Shreya Adhikariis', 'Screenshot (147).png', 'this dental hospital is exceptional . I had som many problems borefe and now i m free of all th epain this is the best hospital do viustyit ouir dental hospital causre ths is the besty'),
(8, 'Aparana Pantt', 'Screenshot (147).png', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `images_albums`
--
ALTER TABLE `images_albums`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `aID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `pID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `images_albums`
--
ALTER TABLE `images_albums`
  MODIFY `sID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
