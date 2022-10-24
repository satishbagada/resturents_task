-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 09:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturents_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `id` int(11) NOT NULL,
  `days_type` varchar(255) DEFAULT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`id`, `days_type`, `price`) VALUES
(1, 'half day', 5000),
(2, 'full day', 1000),
(3, 'custom day', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `half_day`
--

CREATE TABLE `half_day` (
  `hid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `day_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `half_day`
--

INSERT INTO `half_day` (`hid`, `bookid`, `day_name`) VALUES
(1, 1, '8AM - 12PM'),
(2, 1, '12PM - 4PM'),
(3, 1, '4PM - 8PM'),
(4, 1, '8PM - 12PM');

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `regi_id` int(11) NOT NULL,
  `text_lname` varchar(255) NOT NULL,
  `text_fname` varchar(255) NOT NULL,
  `text_gander` varchar(20) NOT NULL,
  `text_email` varchar(255) NOT NULL,
  `hid` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `text_password` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`regi_id`, `text_lname`, `text_fname`, `text_gander`, `text_email`, `hid`, `date`, `text_password`, `time`) VALUES
(34, 'aamaa', 'jalchandannananan', 'male', 'jalchandan@gmail.com', 1, '1', 'MTIzNDU=', '24/10/2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `half_day`
--
ALTER TABLE `half_day`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`regi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `half_day`
--
ALTER TABLE `half_day`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `regi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `half_day`
--
ALTER TABLE `half_day`
  ADD CONSTRAINT `half_day_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `half_day` (`hid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
