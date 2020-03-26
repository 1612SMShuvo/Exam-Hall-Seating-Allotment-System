-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 07:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_hall_seat_plan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`id`, `admin_id`, `password`) VALUES
(1, 'admin-1234', '00000000'),
(2, 'admin-5678', '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `n_faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `n_faculty`) VALUES
(23, 'LAW', 'FHSS'),
(25, 'ENG', 'FBE'),
(27, 'EEE', 'FSIT'),
(35, 'SWE', 'FSIT'),
(37, 'TXT', 'FE'),
(38, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exm_hall`
--

CREATE TABLE `exm_hall` (
  `hall_id` int(11) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `hall_name` varchar(50) NOT NULL,
  `1block` varchar(50) NOT NULL,
  `1capacity` int(11) NOT NULL,
  `2block` varchar(50) NOT NULL,
  `2capacity` int(11) NOT NULL,
  `3block` varchar(50) NOT NULL,
  `3capacity` int(11) NOT NULL,
  `4block` varchar(50) NOT NULL,
  `4capacity` int(11) NOT NULL,
  `5block` varchar(50) NOT NULL,
  `5capacity` int(11) NOT NULL,
  `6block` varchar(50) NOT NULL,
  `6capacity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `campus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exm_hall`
--

INSERT INTO `exm_hall` (`hall_id`, `building_name`, `hall_name`, `1block`, `1capacity`, `2block`, `2capacity`, `3block`, `3capacity`, `4block`, `4capacity`, `5block`, `5capacity`, `6block`, `6capacity`, `total`, `campus`) VALUES
(1, 'AB', '607AB', '1', 7, '2', 7, '3', 7, '4', 7, '5', 7, '6', 7, 42, 'MC'),
(2, 'AB', '607AB', '1', 6, '2', 6, '3', 6, '5', 6, '6', 6, '6', 6, 36, 'MC');

-- --------------------------------------------------------

--
-- Table structure for table `seat_plan`
--

CREATE TABLE `seat_plan` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `sec` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `evenblock` varchar(50) NOT NULL,
  `t_seat_ev` int(11) NOT NULL,
  `oddblock` varchar(50) NOT NULL,
  `t_seat_od` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `exmdate` date NOT NULL,
  `examiner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_plan`
--

INSERT INTO `seat_plan` (`id`, `course`, `sec`, `campus`, `hall_id`, `hall_name`, `building`, `evenblock`, `t_seat_ev`, `oddblock`, `t_seat_od`, `total`, `exmdate`, `examiner`) VALUES
(1, 'SWE423', 'D', 'MC', 1, '607AB', 'AB', '2,4,6', 18, '0', 0, 18, '2019-12-19', 'TRT,FBR'),
(2, 'SWE224', 'D', 'MC', 1, '607AB', 'AB', '0', 0, '1,3,5', 18, 18, '2019-12-19', 'TRT,FBR'),
(3, 'SWE423', 'D', 'MC', 2, '605AB', 'AB', '2,4,6', 18, '0', 0, 18, '2019-12-18', 'HR,MR,HS'),
(5, 'SWE423', 'A', 'MC', 9, '607AB', 'AB', '2', 6, '1', 6, 12, '2019-12-12', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `n_faculty` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `dept_id`, `reg_no`, `s_name`, `dept_name`, `email`, `n_faculty`, `campus`, `password`) VALUES
(1, 35, 35001, 'khalequzzaman miraj', 'SWE', 'khalequzzaman35-1548@siu.edu.bd', 'Open this select menu', 'Open this select menu', '35001'),
(2, 25, 35002, 's_name', 'ENG', 'khaquzzaman35-002@diu.edu.bd', 'FBE', 'MC', '101010'),
(3, 23, 458, 's_name', 'SWE', 'miraj@gmail.com', 'FSIT', 'FBE', '123'),
(11, 11, 11, 's_name', 'SWE', 'miraj@gmail.com', 'FSIT', 'FBE', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `exm_hall`
--
ALTER TABLE `exm_hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `seat_plan`
--
ALTER TABLE `seat_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `exm_hall`
--
ALTER TABLE `exm_hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat_plan`
--
ALTER TABLE `seat_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
