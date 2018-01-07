-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 03:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `gymtype1`
--

CREATE TABLE `gymtype1` (
  `gym_id` varchar(50) NOT NULL,
  `gym_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gymtype1`
--

INSERT INTO `gymtype1` (`gym_id`, `gym_type`) VALUES
('bbvb', 'vbvb'),
('dfdf', 'dfgdfg'),
('dfdfdf', 'fdfd'),
('gfhgjgjg', 'jhjghjhj'),
('gfhgjgjgfg', 'jhjghjhj'),
('ghgh', 'hghg'),
('ghghbnn', 'hghggnhgh'),
('hiii', 'wassup');

-- --------------------------------------------------------

--
-- Table structure for table `member1`
--

CREATE TABLE `member1` (
  `member_id` varchar(50) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_phonenumber` varchar(50) NOT NULL,
  `member_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member1`
--

INSERT INTO `member1` (`member_id`, `member_name`, `member_phonenumber`, `member_email`) VALUES
('nihil', 'ff', 'fe', 'efe');

-- --------------------------------------------------------

--
-- Table structure for table `payment1`
--

CREATE TABLE `payment1` (
  `payment_id` varchar(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `payment_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment1`
--

INSERT INTO `payment1` (`payment_id`, `payment_date`, `payment_amount`) VALUES
('ghg', 'hgh', 'ghg');

-- --------------------------------------------------------

--
-- Table structure for table `trainer1`
--

CREATE TABLE `trainer1` (
  `trainer_name` varchar(50) NOT NULL,
  `trainer_email` varchar(50) NOT NULL,
  `trainer_phonenumber` varchar(50) NOT NULL,
  `trainer_id` varchar(50) NOT NULL,
  `trainer_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer1`
--

INSERT INTO `trainer1` (`trainer_name`, `trainer_email`, `trainer_phonenumber`, `trainer_id`, `trainer_address`) VALUES
('gfgf', 'fgf', 'gfg', 'fg', ''),
('gfgf', 'fgf', 'gfg', 'nikhil', ''),
('jhj', 'jhj', 'hjh', 'nikhil1', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `id`, `PhoneNumber`, `Email`, `Address`) VALUES
('Nikhil J', '1jt15is023', '9945263791', 'Nkill959@gmail.com', 'Bangalore'),
('Rakesh R', '1jt15is024', '9945263781', 'rakesh959@gmail.com', 'Bangalore'),
('Dheeraj G Bhat', '1jt15is067', '8885263781', 'dgb1997@gmail.com', 'Bangalore'),
('putswamy j', '1jt15is45', '8884321002', 'puttu454@gmail.com', 'Bangalore'),
('Nanjundappa swamy', '1jt15is46', '8884321003', 'ns678@gmail.com', 'Bangalore'),
('John R', '1jt15is49', '8884324503', 'johnsingle@gmail.com', 'Bangalore'),
('Sandy', '1jt15is95', '8164754925', 'SAndy678@gmail.com', 'Bangalore'),
('Santhosh k R', '1jt15is956', '8164754567', 'Santhosh678@gmail.com', 'Bangalore'),
('Eshwar B', '1kt15is67', '8796895689', 'Eshwarb28@gmail.com', 'Bangalore'),
('Pramod K S', '1kt15is78', '8796895607', 'pramod1996@gmail.com', 'Bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gymtype1`
--
ALTER TABLE `gymtype1`
  ADD PRIMARY KEY (`gym_id`);

--
-- Indexes for table `member1`
--
ALTER TABLE `member1`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `payment1`
--
ALTER TABLE `payment1`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `trainer1`
--
ALTER TABLE `trainer1`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
