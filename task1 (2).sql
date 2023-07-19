-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2023 at 12:09 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `doctor_ID` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`doctor_ID`, `patient_id`, `date`, `appointment_id`, `time`) VALUES
(4, 2, '2023-06-23', 4, '14:05:00'),
(1, 1, '2023-06-14', 7, '16:15:00'),
(1, 1, '2023-06-07', 8, '15:41:00'),
(1, 3, '2023-06-13', 9, '16:53:00'),
(1, 1, '2023-06-11', 10, '11:18:00'),
(4, 3, '2023-06-26', 11, '18:30:00'),
(3, 4, '2023-06-13', 12, '16:44:00'),
(2, 2, '2023-06-07', 13, '11:50:00'),
(2, 2, '2023-06-30', 14, '15:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `profile_image` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `specialisation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`profile_image`, `name`, `surname`, `age`, `gender`, `phone_number`, `email`, `doctor_id`, `specialisation`) VALUES
('https://drive.google.com/file/d/1eugfttkbRNhKCl5izQH_gDwrhYu_Hh-0/view?usp=sharing', 'Emilio', 'Carreira', 20, 'Male', 711678129, 'emilio@gmail.com', 1, 'Doctor'),
('https://drive.google.com/file/d/1du0x2dZYRdUF-h3e7A4lYRH-tivbXfRT/view?usp=sharing', 'Kayla', 'Carreira', 20, 'female', 711678129, 'kayla@gmail.com', 2, 'Doctor'),
('https://drive.google.com/file/d/1ergMydSFuCVApk40AUezRmZiwzPqvcUI/view?usp=sharing', 'Robbie', 'Irvine', 20, 'male', 342797897, 'robbie@gmail.com', 3, 'Doctor'),
('https://drive.google.com/file/d/1duTsJnGLhiWxOxN3UPEMyVqpeObJBX47/view?usp=sharing', 'Paulo', 'Carreira', 53, 'Male', 835554479, 'paulo@gmail.com', 4, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `profile_image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `phone_number` int(211) NOT NULL,
  `email` varchar(250) NOT NULL,
  `patient_id` int(211) NOT NULL,
  `medical_aid_number` int(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`profile_image`, `name`, `surname`, `age`, `gender`, `phone_number`, `email`, `patient_id`, `medical_aid_number`) VALUES
('https://drive.google.com/file/d/1dwqzgIjUKUTtkaTjFhPyYFn46b-oF0eE/view?usp=sharing', 'Lala', 'do', 23, 'female', 574887473, 'lala@gmail.com', 1, 233444847),
('https://drive.google.com/file/d/1ergMydSFuCVApk40AUezRmZiwzPqvcUI/view?usp=sharing', 'Henk', 'Irvine', 23, 'Male', 835554479, 'henkIrvine@gmail.com', 2, 7865432),
('https://drive.google.com/file/d/1f-9mepGXft-cxA4qe7MviwKvuq05Qk01/view?usp=sharing', 'Gabbie', 'Jackson', 23, 'Female', 234343, 'gabbie@gmail.com', 3, 2323860),
('https://drive.google.com/file/d/1f06rNC7L7EykmPJfiwWidTPul932750B/view?usp=sharing', 'Bonnie', 'Bethan', 38, 'Female', 85362536, 'bonnie@gmail.com', 4, 76876789);

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `profile_image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `age` int(211) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `rank` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`profile_image`, `name`, `surname`, `age`, `gender`, `email`, `password`, `phone_number`, `rank`, `id`) VALUES
('https://drive.google.com/file/d/1evTy0dzslMRWEojdX5_7hL-KFaLxkHve/view?usp=sharing', 'John', 'Morris', 53, 'Male', 'john@gmail.com', 'John1234', 74563272, 'one', 2),
('https://drive.google.com/file/d/1ewF7e2mVEahHEjhKrFSc-aYzXisRsO_l/view?usp=sharing', 'Allen', 'Thompson', 27, 'Male', 'allen@gmail.com', 'Allen1234', 5372936, 'one', 3),
('https://drive.google.com/file/d/1extmwcbTrUj4wyUcehYLpLcBGbtJOZX8/view?usp=sharing', 'Katherine', 'George', 47, 'Female', 'katherine@gmail.com', 'Katherine1234', 876554375, 'one', 5),
('https://drive.google.com/file/d/1eugfttkbRNhKCl5izQH_gDwrhYu_Hh-0/view?usp=sharing', 'Steave', 'Carreira', 34, 'Male', 'steave@gmail.com', 'Steave1234', 646378463, 'one', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `doctor_FK` (`doctor_ID`),
  ADD KEY `patient_FK` (`patient_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(211) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
