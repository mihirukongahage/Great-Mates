-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 03:33 PM
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
-- Database: `m_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `breedingrecords`
--

CREATE TABLE `breedingrecords` (
  `Id` int(11) NOT NULL,
  `regNo` varchar(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `cattle` int(11) NOT NULL,
  `poultry` int(11) NOT NULL,
  `piggery` int(11) NOT NULL,
  `goat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breedingrecords`
--

INSERT INTO `breedingrecords` (`Id`, `regNo`, `code`, `month`, `year`, `cattle`, `poultry`, `piggery`, `goat`) VALUES
(1, 'adsghawdg n', '12313', 'February', 2019, 1, 0, 1, 0),
(123123, 'sdfasdf asf', '11', 'February', 2019, 1, 1, 1, 1);

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
(5, 2, 2, 2, '', 1929, 'January', 2, 2);

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
  `goat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`regNo`, `Phone`, `Address`, `Name`, `ID`, `cattle`, `poultry`, `piggery`, `goat`) VALUES
('971234sd afsdfa', 770495637, '52/B1 Boralugoda poruwadanda ', 'Nipuna chandimal', 1, 1, 0, 0, 1),
('Nipuna ', 12341234, '1234v2 twerge', '12341234', 2, 0, 1, 0, 0),
('Nipuna ', 12341234, '1234v2 twerge', '12341234', 3, 1, 0, 1, 1),
('asty', 65245, 'sdfgdsf', 'dfhsd', 4, 0, 1, 0, 0),
('astysdga', 652453531, 'sdfgdsfasdf', 'dfhsdsdafsdf', 5, 1, 0, 0, 1),
('q324', 345134, 'rtq ert', 'dsfg', 6, 0, 1, 0, 0),
('sadfa sdiooetpfh', 2147483647, '23423 2w 3rwaeqwe', 'wegugwefiugdasfgasdfgasgd fuagsdf3333333333333333333333333333', 7, 0, 1, 1, 1),
('qqqqqqqqqqqqqqq', 2341234, 'ttttttttttt', 'wwwwwwwwwwwww', 8, 1, 0, 1, 0),
('Nipuna sdfaaaaaaaaaa', 3423412, 'efqeasf s22222222', 'aaaaaaaaaaa', 9, 0, 1, 0, 1);

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
(2, 1, 0, 1, '', 2019, 'February', 1, 1);

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
(2, 1111111111, 2147483647, '', 2019, 'February', 33333333, 4444444);

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
(3, 3, 2, 4, '', 2018, 'February', 5, 6);

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
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `job`, `password`) VALUES
(1, 'Kamal', 'kamal@gmail.com', '0771233434', '0', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `id` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`id`, `fname`, `lname`, `email`, `username`, `password`, `isAdmin`) VALUES
(1, 'Mihiru', 'Kongahage', 'mihirukongahage@gmail.com', 'mk', 'mihiru123', 1),
(2, 'Test', 'User', 'testuser@abc.com', 'testuser', 'testuser', 1);

--
-- Indexes for dumped tables
--

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;

--
-- AUTO_INCREMENT for table `cattlerecords`
--
ALTER TABLE `cattlerecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `goatrecords`
--
ALTER TABLE `goatrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `piggeryrecords`
--
ALTER TABLE `piggeryrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poultryrecords`
--
ALTER TABLE `poultryrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
