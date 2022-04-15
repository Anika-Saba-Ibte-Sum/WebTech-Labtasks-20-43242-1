-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 04:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `Id` int(200) NOT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `e-mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`Id`, `patient_name`, `e-mail`, `username`, `password`, `gender`, `dob`) VALUES
(1, 'anika', 'anika1ss23@gmail.com', 'anika123', '#8$08067', 'female', '12-2-2002'),
(2, 'anika saba', 'anika12gg3@gmail.com', 'anika444', '$2y$12$IwlgHI/dBbVTjm8gLXdzpuZ', 'female', '1996-06-04'),
(3, 'John Vae', 'anika123gl@gmail.com', 'john.11123', '$2y$12$ZzGubVd9tfPOlP.hon8vpOs', 'male', '1996-06-26'),
(4, 'Rock Lether', 'anika@gmail.com', 'rock@123', '$2y$12$rYt1BH0/bQDFsDvcLnRQ8e2Fc6wKYafmZADQya6EZ3LliaII30L9u', 'male', '1996-06-11'),
(5, 'Luthar Ken', 'anika13@gmail.com', 'l.1234', '$2y$12$.Jp9n2Exlk/JJ5SP/tA05eaNKIPy0fuifnqXapSY1yC9/9Vt07Uzu', 'male', '1987-06-16'),
(6, 'Jojo roe', 'anika12@gmail.com', 'jojo.123', '$2y$12$H/ggIuiOuaw3CUuaKtXBQe9ADuAU3hzNBV5kWY1yp2fjg/irttjnu', 'male', '1991-06-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
