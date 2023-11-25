-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 07:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`fname`, `lname`, `uname`, `gender`, `email`, `phone`, `address`, `password`) VALUES
('CODELAB', '2023', 'codelab2023', 'Alpha Male', 'codelab2023@gmail.com', '01907435967', 'Bashundhara,Dhaka', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `notice` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `notice`, `created_at`) VALUES
(6, 'C++', 'Quiz-1 will be held on Monday', '2023-08-27 14:33:28'),
(7, 'Javascript', 'Lab has been cancelled.\r\n', '2023-08-27 14:37:29'),
(8, 'Java', 'Exam will held Thursday', '2023-08-27 15:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `s_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reset_token` varchar(64) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`s_id`, `fname`, `lname`, `uname`, `DOB`, `gender`, `email`, `phone`, `address`, `password`, `reset_token`, `token_expires`) VALUES
(2, 'Rafid', 'Siddique', 'rafid23', '1998-07-08', 'Male', 'rafidsiddiquee26@gmail.com', ' 01723456786', 'Chittagong ', '4567', 'a880e05b8cc1ddf005e8b5557ef35e5e0c30bea840e86d0a9d655f5af9ddf028', '2023-08-01 06:09:16'),
(18, 'Kamil', 'Ahmed', 'kamil67', '2000-01-20', 'Male', 'nabilahmedtalukder6272@gmail.com', ' 01907435967', 'Mohammadpur,Dhaka 1207 ', '6700', '276e45457b8fdc2fd2003b644eb2ae9751bae237dc0217c645fd53b31c2d8c4e', '2023-08-27 19:39:35'),
(32, 'Morshed ', ' Siam', 'Siam03', '2023-08-30', 'Male', 'morshedulislam03@gmail.com', '01954456543', 'Dhaka, Jatrabai', '/777777s', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_registration`
--

CREATE TABLE `teacher_registration` (
  `t_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_registration`
--

INSERT INTO `teacher_registration` (`t_id`, `fname`, `lname`, `uname`, `DOB`, `gender`, `email`, `phone`, `address`, `password`) VALUES
(3, 'Aman', 'Ullah', 'aman67', '2008-07-01', 'Male', 'aman45@gmail.com', ' 01935345646', 'Nayanganj,Dhaka ', '3600'),
(4, 'Rafid', 'Siddique', 'rafid23', '1998-07-08', '', 'rafid23@gmail.com', ' 01723456786', 'Bashundhara,Dhaka ', '2600'),
(6, 'Siam', ' Sir', 'SiamVai', '2023-08-21', 'Male', 'morshedsiam33@gmail.com', '01954456543', 'Dhaka, Jatrabari', '123'),
(8, 'Akbar', ' vai', 'Akbar04', '2023-08-24', 'Male', 'khansksakib58@gmail.com', '01954456543', 'Dhaka, Jatrabari', '111111'),
(9, 'Morshed ', ' Siam', 'm5', '2023-08-15', 'Male', 'morshedsiam33@gmail.com', '01954456543', 'Dhaka, Jatrabari', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `reset_token` (`reset_token`);

--
-- Indexes for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
