-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 08:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `username`, `password`) VALUES
(1, 'admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `applied_internaship`
--

CREATE TABLE `applied_internaship` (
  `ap_id` int(11) NOT NULL,
  `av_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_status` varchar(50) NOT NULL,
  `date_app` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `time_in` varchar(80) NOT NULL,
  `time_out` varchar(80) NOT NULL,
  `date_time` varchar(80) NOT NULL,
  `day_s` varchar(80) NOT NULL,
  `c_id` int(11) NOT NULL,
  `desci` varchar(50) NOT NULL,
  `week` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `av_internaship`
--

CREATE TABLE `av_internaship` (
  `av_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `trade_id` int(11) NOT NULL,
  `places` int(11) NOT NULL,
  `comptence` text NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_contact` text NOT NULL,
  `c_email` text NOT NULL,
  `c_province` text NOT NULL,
  `c_district` text NOT NULL,
  `c_sector` text NOT NULL,
  `sc_id` int(11) NOT NULL,
  `super_name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `c_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_reports`
--

CREATE TABLE `company_reports` (
  `r_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_type` text NOT NULL,
  `week` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `lev_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `lev_name` text NOT NULL,
  `trade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `re_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `week` varchar(80) NOT NULL,
  `file_name` text NOT NULL,
  `type` text NOT NULL,
  `date_time` varchar(40) NOT NULL,
  `feed_back` text NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `sc_id` int(11) NOT NULL,
  `sc_name` text NOT NULL,
  `sc_abbr` text NOT NULL,
  `sc_sector` text NOT NULL,
  `sc_district` text NOT NULL,
  `sc_email` text NOT NULL,
  `sc_logo` text NOT NULL,
  `sc_status` varchar(40) NOT NULL,
  `sc_contact` varchar(50) NOT NULL,
  `sc_head` text NOT NULL,
  `head2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stid` int(11) NOT NULL,
  `st_fname` text NOT NULL,
  `st_lname` text NOT NULL,
  `parent` text NOT NULL,
  `reg_number` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `sc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `stu_id` int(11) NOT NULL,
  `stid` int(11) NOT NULL,
  `trade_id` int(11) NOT NULL,
  `lev_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `trade_id` int(11) NOT NULL,
  `trade_name` text NOT NULL,
  `sector` text NOT NULL,
  `sc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `sc_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year_name` text NOT NULL,
  `sc_id` int(11) NOT NULL,
  `year_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `applied_internaship`
--
ALTER TABLE `applied_internaship`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `av_id` (`av_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `av_internaship`
--
ALTER TABLE `av_internaship`
  ADD PRIMARY KEY (`av_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `sc_id` (`sc_id`),
  ADD KEY `trade_id` (`trade_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `sc_id` (`sc_id`);

--
-- Indexes for table `company_reports`
--
ALTER TABLE `company_reports`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`lev_id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `sc_id` (`sc_id`),
  ADD KEY `trade_id` (`trade_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`re_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `sc_id` (`sc_id`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`stu_id`),
  ADD KEY `lev_id` (`lev_id`),
  ADD KEY `stid` (`stid`),
  ADD KEY `sc_id` (`sc_id`),
  ADD KEY `trade_id` (`trade_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`trade_id`),
  ADD KEY `sc_id` (`sc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `sc_id` (`sc_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`),
  ADD KEY `sc_id` (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_internaship`
--
ALTER TABLE `applied_internaship`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `av_internaship`
--
ALTER TABLE `av_internaship`
  MODIFY `av_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_reports`
--
ALTER TABLE `company_reports`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `trade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_internaship`
--
ALTER TABLE `applied_internaship`
  ADD CONSTRAINT `applied_internaship_ibfk_1` FOREIGN KEY (`av_id`) REFERENCES `av_internaship` (`av_id`),
  ADD CONSTRAINT `applied_internaship_ibfk_2` FOREIGN KEY (`stu_id`) REFERENCES `students_info` (`stu_id`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`stu_id`) REFERENCES `students_info` (`stu_id`);

--
-- Constraints for table `av_internaship`
--
ALTER TABLE `av_internaship`
  ADD CONSTRAINT `av_internaship_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`),
  ADD CONSTRAINT `av_internaship_ibfk_2` FOREIGN KEY (`sc_id`) REFERENCES `schools` (`sc_id`),
  ADD CONSTRAINT `av_internaship_ibfk_3` FOREIGN KEY (`trade_id`) REFERENCES `trade` (`trade_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`sc_id`) REFERENCES `schools` (`sc_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students_info` (`stu_id`);

--
-- Constraints for table `students_info`
--
ALTER TABLE `students_info`
  ADD CONSTRAINT `students_info_ibfk_1` FOREIGN KEY (`stid`) REFERENCES `students` (`stid`),
  ADD CONSTRAINT `students_info_ibfk_2` FOREIGN KEY (`trade_id`) REFERENCES `trade` (`trade_id`),
  ADD CONSTRAINT `students_info_ibfk_3` FOREIGN KEY (`lev_id`) REFERENCES `levels` (`lev_id`),
  ADD CONSTRAINT `students_info_ibfk_4` FOREIGN KEY (`year_id`) REFERENCES `year` (`year_id`),
  ADD CONSTRAINT `students_info_ibfk_5` FOREIGN KEY (`sc_id`) REFERENCES `schools` (`sc_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`sc_id`) REFERENCES `schools` (`sc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
