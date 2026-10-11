-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 12:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `C_Id` int(11) NOT NULL,
  `C_Name` varchar(10) DEFAULT NULL,
  `S_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`C_Id`, `C_Name`, `S_Id`) VALUES
(1, 'Class 1', 1),
(2, 'Class 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `M_Id` int(11) NOT NULL,
  `M_Marks` int(11) DEFAULT NULL,
  `S_ID` int(11) DEFAULT NULL,
  `T_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`M_Id`, `M_Marks`, `S_ID`, `T_id`) VALUES
(2, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `S_ID` int(11) NOT NULL,
  `S_Name` varchar(170) DEFAULT NULL,
  `S_username` varchar(40) DEFAULT NULL,
  `S_Pass` varchar(12) DEFAULT NULL,
  `S_Mobile` varchar(15) DEFAULT NULL,
  `S_email` varchar(50) DEFAULT NULL,
  `S_Date` varchar(25) DEFAULT NULL,
  `S_address` varchar(150) DEFAULT NULL,
  `S_logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`S_ID`, `S_Name`, `S_username`, `S_Pass`, `S_Mobile`, `S_email`, `S_Date`, `S_address`, `S_logo`) VALUES
(1, 'Sunflower pre school', 'vasu', 'vasu@123', '8899889988', 'sunflower888@gmail.com', '14/10/2024 05:37:26', 'amreli', 'assets/img/sunflower.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `U_Id` int(11) NOT NULL,
  `Full_Name` varchar(80) DEFAULT NULL,
  `U_Name` varchar(40) DEFAULT NULL,
  `U_Pass` varchar(12) DEFAULT NULL,
  `U_Mobile` varchar(15) DEFAULT NULL,
  `U_email` varchar(50) DEFAULT NULL,
  `S_ID` int(11) DEFAULT NULL,
  `C_Id` int(11) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `U_date` varchar(25) DEFAULT NULL,
  `U_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`U_Id`, `Full_Name`, `U_Name`, `U_Pass`, `U_Mobile`, `U_email`, `S_ID`, `C_Id`, `address`, `U_date`, `U_photo`) VALUES
(1, 'Nirmeet Makwana', 'Nirmeet', 'nirmeet@123', '7383627249', 'nirmeetmakwana168@gmail.com', 1, 1, 'Block no-b 86 , ganganagar-2 , chakkargadh road , amreli', '14/10/2024 06:08:40', 'assets/img/profile-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_Id` int(11) NOT NULL,
  `Subject_Name` varchar(35) DEFAULT NULL,
  `S_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_Id`, `Subject_Name`, `S_Id`) VALUES
(1, 'Maths', 1),
(2, 'English', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE `test_info` (
  `T_id` int(11) NOT NULL,
  `T_Name` varchar(30) NOT NULL,
  `No_question` int(11) NOT NULL,
  `T_Limit` int(11) NOT NULL,
  `T_Marks` int(11) NOT NULL,
  `T_date` varchar(30) NOT NULL,
  `Sub_id` int(11) NOT NULL,
  `C_Id` int(11) NOT NULL,
  `S_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_info`
--

INSERT INTO `test_info` (`T_id`, `T_Name`, `No_question`, `T_Limit`, `T_Marks`, `T_date`, `Sub_id`, `C_Id`, `S_Id`) VALUES
(1, 'Test 1', 5, 10, 5, '15-10-2024', 1, 1, 1),
(3, 'Test 2', 5, 5, 5, '15-10-2024', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_que_ans`
--

CREATE TABLE `test_que_ans` (
  `Q_Id` int(11) NOT NULL,
  `question` text NOT NULL,
  `A` varchar(50) DEFAULT NULL,
  `B` varchar(50) DEFAULT NULL,
  `C` varchar(50) DEFAULT NULL,
  `D` varchar(50) DEFAULT NULL,
  `Answer` varchar(50) DEFAULT NULL,
  `T_Id` int(11) DEFAULT NULL,
  `S_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_que_ans`
--

INSERT INTO `test_que_ans` (`Q_Id`, `question`, `A`, `B`, `C`, `D`, `Answer`, `T_Id`, `S_ID`) VALUES
(1, '10 + 10 =??', '20', '10', '30', '1010', '20', 1, 1),
(2, '5 x 5 =??', '5', '25', '55', '10', '25', 1, 1),
(3, '15 - 5 =??', '15', '5', '10', '20', '10', 1, 1),
(4, '10 / 5 =??', '10', '5', '1', '2', '2', 1, 1),
(5, '100 + 50 =??', '150', '10050', '100', '50', '150', 1, 1),
(12, '10 + 10 =??', '10', '22', '1010', '110', '20', 3, 1),
(14, '5 / 5=??', '0', '1', '2', '3', '0', 3, 1),
(15, '11 + 4 =??', '11', '4', '15', '7', '15', 3, 1),
(16, '10 x 10 =??', '10', '20', '1010', '100', '100', 3, 1),
(17, '20000 + 10 =??', '20010', '20000', '2000010', '10', '20010', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`C_Id`),
  ADD KEY `S_Id` (`S_Id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`M_Id`),
  ADD KEY `S_ID` (`S_ID`),
  ADD KEY `T_id` (`T_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`U_Id`),
  ADD KEY `S_ID` (`S_ID`),
  ADD KEY `C_Id` (`C_Id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_Id`),
  ADD KEY `S_Id` (`S_Id`);

--
-- Indexes for table `test_info`
--
ALTER TABLE `test_info`
  ADD PRIMARY KEY (`T_id`),
  ADD KEY `Sub_id` (`Sub_id`),
  ADD KEY `S_Id` (`S_Id`),
  ADD KEY `C_Id` (`C_Id`);

--
-- Indexes for table `test_que_ans`
--
ALTER TABLE `test_que_ans`
  ADD PRIMARY KEY (`Q_Id`),
  ADD KEY `T_Id` (`T_Id`),
  ADD KEY `S_ID` (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_que_ans`
--
ALTER TABLE `test_que_ans`
  MODIFY `Q_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`S_Id`) REFERENCES `school` (`S_ID`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `school` (`S_ID`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`T_id`) REFERENCES `test_info` (`T_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `school` (`S_ID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`C_Id`) REFERENCES `class` (`C_Id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`S_Id`) REFERENCES `school` (`S_ID`);

--
-- Constraints for table `test_info`
--
ALTER TABLE `test_info`
  ADD CONSTRAINT `test_info_ibfk_1` FOREIGN KEY (`Sub_id`) REFERENCES `subject` (`sub_Id`),
  ADD CONSTRAINT `test_info_ibfk_2` FOREIGN KEY (`S_Id`) REFERENCES `school` (`S_ID`),
  ADD CONSTRAINT `test_info_ibfk_3` FOREIGN KEY (`C_Id`) REFERENCES `class` (`C_Id`);

--
-- Constraints for table `test_que_ans`
--
ALTER TABLE `test_que_ans`
  ADD CONSTRAINT `test_que_ans_ibfk_1` FOREIGN KEY (`T_Id`) REFERENCES `test_info` (`T_id`),
  ADD CONSTRAINT `test_que_ans_ibfk_2` FOREIGN KEY (`S_ID`) REFERENCES `school` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
