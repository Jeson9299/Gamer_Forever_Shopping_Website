-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 07:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamer_forever`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Jeson', '$2y$10$.8lPEg5wI9ks08GrC.lwg.3A8/q1NdE2l90kVt.KWN.ujrf25gmYu'),
('', '$2y$10$8ubEwxnFR3yVFSWCK3olHOlUCDb1eKAmnN43/hkhOf7EvjUgJnO0y'),
('jeson', '$2y$10$DC.tymkUyQ08pzv/b3PB2.eHO19atrjfwvKbtCUQVTdHFWfqbHm9m');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `contact` decimal(10,0) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `mode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`contact`, `name`, `time`, `price`, `status`, `mode`) VALUES
('12345678', 'Spiderman PS4', '2018-10-21 09:13:57', 3999, 'order placed', 'Buy'),
('12345678', 'Call Of Duty Black Ops 4 PS4', '2018-10-21 09:14:10', 3500, 'order placed', 'Sell'),
('12345678', 'God of war PS4', '2018-10-21 09:17:35', 1600, 'order placed', 'Sell'),
('12345678', 'Spiderman PS4', '2018-10-21 09:21:09', 2000, 'order placed', 'Sell'),
('12345678', 'God of war PS4', '2018-10-21 09:21:09', 1600, 'order placed', 'Sell');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` decimal(10,0) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `zipcode` decimal(6,0) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `credits` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `email`, `contact`, `address`, `zipcode`, `state`, `password`, `credits`) VALUES
('Myles', 'Dsouza', 'myles@gmail.com', '12345678', 'Andheri west', '400093', 'Maharashtra', '$2y$10$Xg3dPsOW7re05ERx0bVeS.GC8X2YyNMKc51COqjStBVd.QS9OZ2tO', '8700.00'),
('Jeson', 'Dsouza', 'jeson@gmail.com', '7506130236', 'andheri', '400093', 'Nagaland', '$2y$10$mZGNbglBFjjgx58d59SsTuzJGwGkcZZQfGo1C6F/tLlPA1t/EZ2Dy', '112299.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(100) NOT NULL,
  `quantity` decimal(4,0) NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `sell_price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `quantity`, `price`, `sell_price`) VALUES
('Call of Duty Black Ops 3 XBOX ONE', '15', '1100.00', '600'),
('Call of Duty Black Ops 4 PS4', '9', '4699.00', '3500'),
('Far Cry 5 PS4', '16', '2000.00', '1500'),
('Far Cry 5 XBOX ONE', '16', '2500.00', '1899'),
('Fifa 19 PS4', '14', '3799.00', '2800'),
('Fifa 19 XBOX ONE', '16', '3600.00', '3000'),
('Fortnite XBOX ONE', '15', '3000.00', '1600'),
('God of War PS4', '17', '3399.00', '1600'),
('GTA V PS4', '15', '2000.00', '1400'),
('Just Cause 4 XBOX ONE', '15', '3800.00', '2600'),
('NBA 2K18 XBOX ONE', '15', '2000.00', '1450'),
('Playstation VR', '14', '18999.00', '10000'),
('PS4 Controller', '14', '2999.00', '1200'),
('PS4 PRO CONSOLE', '9', '38999.00', '27999'),
('PS4 SLIM CONSOLE', '10', '28999.00', '18999'),
('Shadow of the Tomb Raider PS4', '22', '3999.00', '2000'),
('Spiderman PS4', '2', '3999.00', '2000'),
('Tomb Raider XBOX ONE', '15', '3499.00', '2150'),
('WWE 2K19 PS4', '15', '3799.00', '2500'),
('WWE 2K19 XBOX ONE', '15', '3399.00', '2400'),
('XBOX ONE Controller', '14', '2499.00', '1000'),
('XBOX ONE Kinect', '14', '3999.00', '1699'),
('XBOX ONE S CONSOLE', '10', '18000.00', '9500'),
('XBOX ONE X CONSOLE', '10', '22599.00', '10599');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `Q1` varchar(500) DEFAULT NULL,
  `Q2` varchar(500) DEFAULT NULL,
  `Q3` varchar(500) DEFAULT NULL,
  `Q4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`name`, `email`, `phone`, `Q1`, `Q2`, `Q3`, `Q4`) VALUES
('Jeson Dsouza', 'jesondsouzadx@gmail.com', '7506130236', 'Really great and responsive website.', 'Recommended by top gaming companies.', 'Nothing at all.', 'very very likely.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD KEY `contact` (`contact`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`contact`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`,`quantity`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`contact`) REFERENCES `customer` (`contact`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`name`) REFERENCES `products` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
