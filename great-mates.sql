-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 05:06 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `great-mates`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `gId` varchar(10) NOT NULL,
  `hId` varchar(10) NOT NULL,
  `roomNo` int(3) NOT NULL,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `PaymentMethod` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `breedingrecords`
--

CREATE TABLE `breedingrecords` (
  `Id` int(11) NOT NULL,
  `regNo` varchar(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `cattle` int(11) NOT NULL,
  `goat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breedingrecords`
--

INSERT INTO `breedingrecords` (`Id`, `regNo`, `code`, `date`, `month`, `year`, `cattle`, `goat`) VALUES
(1, 'adsghawdg n', '12313', 0, 'February', 2019, 1, 0),
(123124, 'asdfasd ', '3333333', 0, 'February', 2018, 1, 0),
(123125, '43333333333', '12313', 0, 'February', 2019, 1, 0),
(123126, '11', '11', 0, 'January', 2019, 1, 1),
(123127, '22', '22', 0, 'January', 2019, 0, 1),
(123128, '43333333333', '12313', 0, 'February', 2019, 0, 0),
(123129, '11', '111', 18, 'October', 2019, 1, 1),
(123130, '3', '33333333333', 19, 'December', 2019, 1, 0),
(123131, '3', '33333333333', 19, 'December', 2019, 1, 0),
(123132, '43333333333', '3242323', 19, 'February', 2018, 1, 0),
(123133, '11111111111', '1', 1, 'January', 2019, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cattlerecords`
--

CREATE TABLE `cattlerecords` (
  `id` int(11) NOT NULL,
  `no_of_animals` int(11) NOT NULL,
  `amount_of_milk` int(11) NOT NULL,
  `meat_production` int(11) NOT NULL,
  `regNo` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `Expences` int(11) NOT NULL,
  `Income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cattlerecords`
--

INSERT INTO `cattlerecords` (`id`, `no_of_animals`, `amount_of_milk`, `meat_production`, `regNo`, `year`, `month`, `Expences`, `Income`) VALUES
(1, 7, 7, 7, '', 2014, 'June', 7, 7),
(2, 1231, 111111111, 2147483647, '', 2019, 'February', 2147483647, 4444444),
(3, 11111111, 2222222, 3, '', 1, 'May', 4444, 2147483647),
(4, 1, 2, 3, '', 2018, 'March', 4, 5),
(5, 2, 2, 2, '', 1929, 'January', 2, 2),
(6, 0, 0, 0, '', 0, 'January', 0, 0),
(7, 34, 23, 4, '', 2019, 'May', 24, 2),
(8, 0, 0, 0, '', 0, 'January', 0, 0),
(9, 0, 0, 0, '', 0, 'January', 0, 0),
(10, 2, 2, 2, '34543', 2018, 'February', 2, 2),
(11, 0, 0, 0, '34543', 2018, 'March', 0, 0),
(12, 0, 0, 0, '', 0, 'January', 0, 0),
(13, 23, 2, 2, '43333333333', 2019, 'February', 2, 2),
(14, 1, 1, 1, '43333333333', 2019, 'January', 1, 1),
(15, 33, 33, 33, '43333333333', 2018, 'January', 33, 33),
(16, 33, 33, 33, '43333333333', 2018, 'January', 33, 33),
(17, 22, 22, 22, '22', 22, 'March', 22, 22),
(18, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(19, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(20, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(21, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(22, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(23, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(24, 1, 1, 1, '43333333333', 2018, 'January', 1, 1),
(25, 0, 0, 0, '', 0, 'January', 0, 0),
(26, 0, 0, 0, '', 0, 'January', 0, 0),
(27, 3, 3, 3, '43333333333', 2015, 'February', 3, 3),
(28, 0, 0, 0, '', 0, 'January', 0, 0),
(29, 0, 0, 0, '', 0, 'January', 0, 0),
(30, 0, 0, 0, '', 0, 'January', 0, 0),
(31, 0, 0, 0, '', 0, 'January', 0, 0),
(32, 0, 0, 0, '', 0, 'January', 0, 0),
(33, 0, 0, 0, '', 0, 'January', 0, 0),
(34, 0, 0, 0, '', 0, 'January', 0, 0),
(35, 0, 0, 0, '', 0, 'January', 0, 0),
(36, 0, 0, 0, '', 0, 'January', 0, 0),
(37, 0, 0, 0, '', 0, 'January', 0, 0),
(38, 0, 0, 0, '', 0, 'January', 0, 0),
(39, 0, 0, 0, '', 0, 'January', 0, 0),
(40, 1234, 342, 19, '4r53145', 2018, 'February', 23453245, 2435),
(41, 32, 435, 345345, '45245', 2017, 'November', 2147483647, 2147483647),
(42, 32, 435, 345345, '45245', 2017, 'November', 2147483647, 2147483647),
(43, 32, 435, 345345, '45245', 2017, 'November', 2147483647, 2147483647),
(44, 32, 435, 345345, '45245', 2017, 'November', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `regNo` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `ID` int(10) NOT NULL,
  `cattle` tinyint(1) NOT NULL,
  `poultry` tinyint(1) NOT NULL,
  `piggery` tinyint(1) NOT NULL,
  `goat` tinyint(1) NOT NULL,
  `month` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`regNo`, `Phone`, `Address`, `Name`, `ID`, `cattle`, `poultry`, `piggery`, `goat`, `month`) VALUES
('971234sd afsdfa', 770495637, '52/B1 Boralugoda poruwadanda ', 'Nipuna chandimal', 1, 1, 0, 0, 1, 'January'),
('qwer', 3435, 'kdlfoa kurusgf', 'qwer', 20, 0, 1, 0, 0, 'November'),
('3333', 333, '333333 444444', '33', 21, 0, 1, 0, 0, 'November');

-- --------------------------------------------------------

--
-- Table structure for table `goatrecords`
--

CREATE TABLE `goatrecords` (
  `id` int(11) NOT NULL,
  `no_of_animals` int(11) NOT NULL,
  `amount_of_milk` int(11) NOT NULL,
  `meat_production` int(11) NOT NULL,
  `regNo` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `Expences` int(11) NOT NULL,
  `Income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goatrecords`
--

INSERT INTO `goatrecords` (`id`, `no_of_animals`, `amount_of_milk`, `meat_production`, `regNo`, `year`, `month`, `Expences`, `Income`) VALUES
(2, 1, 0, 1, '', 2019, 'February', 1, 1),
(3, 4, 0, 4, '44444444444', 2011, 'April', 4, 4),
(4, 6, 0, 6, '66', 2018, 'February', 56, 65),
(5, 333445, 0, 55, '43333333333', 2018, 'February', 55, 55),
(6, 12, 0, 34, '1231', 2018, 'March', 4, 12),
(7, 3, 0, 1, '11111155', 2010, 'November', 3, 3),
(8, 5, 5, 5, '55', 2010, 'March', 5, 5),
(9, 1, 1, 1, '1', 2019, 'January', 1, 1),
(10, 1, 1, 1, '1', 2019, 'January', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `gId` varchar(10) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HID` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `piggeryrecords`
--

CREATE TABLE `piggeryrecords` (
  `id` int(11) NOT NULL,
  `no_of_animals` int(11) NOT NULL,
  `meat_production` int(11) NOT NULL,
  `regNo` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `Expences` int(11) NOT NULL,
  `Income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piggeryrecords`
--

INSERT INTO `piggeryrecords` (`id`, `no_of_animals`, `meat_production`, `regNo`, `year`, `month`, `Expences`, `Income`) VALUES
(2, 1111111111, 2147483647, '', 2019, 'February', 33333333, 4444444),
(3, 4, 4, '43333333333', 2018, 'December', 4, 4),
(4, 8, 6, '43333333333', 2018, 'March', 6, 6),
(5, 2, 2, '222', 2019, 'January', 2, 2),
(6, 1, 1, '1', 1990, 'December', 1, 1),
(7, 1, 1, '1', 1990, 'December', 1, 1),
(8, 11, 1, '11111155', 2018, 'December', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `poultryrecords`
--

CREATE TABLE `poultryrecords` (
  `id` int(11) NOT NULL,
  `no_of_animals` int(11) NOT NULL,
  `amount_of_eggs` int(11) NOT NULL,
  `meat_production` int(11) NOT NULL,
  `regNo` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `Expences` int(11) NOT NULL,
  `Income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poultryrecords`
--

INSERT INTO `poultryrecords` (`id`, `no_of_animals`, `amount_of_eggs`, `meat_production`, `regNo`, `year`, `month`, `Expences`, `Income`) VALUES
(2, 11111, 0, 33333, '', 2019, 'March', 44444, 5555),
(3, 3, 2, 4, '', 2018, 'February', 5, 6),
(4, 4, 4, 4, '43333333333', 2019, 'February', 4, 4),
(5, 6, 6, 6, '44444444444', 2018, 'March', 6, 6),
(6, 6, 6, 6, '6', 2018, 'March', 6, 6),
(7, 2, 2, 2, '2222222', 2019, 'January', 22, 2),
(8, 22, 222, 222, '222', 2029, 'March', 222, 22),
(9, 2147483647, 2147483647, 2147483647, '123', 117, 'February', 2147483647, 2147483647),
(10, 2147483647, 2147483647, 2147483647, '123', 117, 'February', 2147483647, 2147483647),
(11, 2147483647, 2147483647, 2147483647, '123', 117, 'February', 2147483647, 2147483647),
(12, 1, 1, 1, '1', 2010, 'December', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `hId` varchar(10) NOT NULL,
  `RoomNo` int(3) NOT NULL,
  `RoomType` varchar(50) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `description`) VALUES
(1, 'Car Wash', 1000, 'Cleaning to '),
(2, 'Lubrication Service', 1000, ''),
(3, 'Specialized Services', 15000, 'asf'),
(4, 'Interior Cleaning', 1500, 'Get your vehicle interior cleaned and refreshed to the original state with experienced hands.'),
(13, 'Exterior Cleaning', 1000, 'Our team is ready to give your vehicle a long lasting dazzling finish that makes everyone watch your'),
(15, 'Wheel Alignment', 2500, 'Align');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `job` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `office_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `job`, `password`, `office_id`) VALUES
(1, 'Kamal', 'kamal@gmail.com', '0771233434', '0', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `office_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`id`, `username`, `password`, `isAdmin`, `office_id`) VALUES
(1, 'mk', 'mihiru123', 1, ''),
(2, 'testuser', 'testuser', 1, ''),
(3, 'mk1234', '1234', 0, 'Office 1'),
(4, 'N', 'a', 0, 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`roomNo`,`gId`,`hId`,`FromDate`);

--
-- Indexes for table `breedingrecords`
--
ALTER TABLE `breedingrecords`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cattlerecords`
--
ALTER TABLE `cattlerecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `goatrecords`
--
ALTER TABLE `goatrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `piggeryrecords`
--
ALTER TABLE `piggeryrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poultryrecords`
--
ALTER TABLE `poultryrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomNo`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breedingrecords`
--
ALTER TABLE `breedingrecords`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123134;

--
-- AUTO_INCREMENT for table `cattlerecords`
--
ALTER TABLE `cattlerecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `goatrecords`
--
ALTER TABLE `goatrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `piggeryrecords`
--
ALTER TABLE `piggeryrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poultryrecords`
--
ALTER TABLE `poultryrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
