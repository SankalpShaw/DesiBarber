-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 10:30 PM
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
-- Database: `desi_barber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(12) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone_Number` bigint(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Registration_Time` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='admin id & user_name  left join with appointment ID ';

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `User_Name`, `Email`, `Phone_Number`, `Password`, `Name`, `Registration_Time`) VALUES
(100, 'modak', 'souravmodak@gmail.com', 8348944336, 'modak100', 'Sourav Modak', 12),
(101, 'shaw', 'sankalpshaw@gmail.com', 321654987, 'shaw101', 'Sankalp Shaw', 1),
(102, 'maity', 'bikramMaity@gmail.com', 987654321, 'maity102', 'Bikram Miaty', 2),
(103, 'dutta', 'sohinidutta@gmail.com', 963258741, 'dutta103', 'Sohini Dutta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(12) NOT NULL,
  `Ap_number` int(12) NOT NULL,
  `date_time` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='appointment id join left\n invoice Cust_First_name\n';

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(12) NOT NULL,
  `Price` int(10) NOT NULL,
  `Service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='cart ID left join with appointment ID \\\\ncart ID left join with service ID ';

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(12) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='customer ID left join with cart ID ';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `First_Name`, `Last_Name`, `Phone_number`, `Email`, `Password`) VALUES
(22, 'Soumi ', 'Modak', '8158902147', 'soumi@gmail.com', '369852147'),
(23, 'subhasis', 'sadukhan', '2541394', 'subhais@gmail.com', '12345'),
(24, 'Diptak', 'Bhai', '3258963214', 'diptak@gmail.com', 'diptak'),
(25, 'dipu', 'sarkar', '1236547890', 'dipu@gmail.com', '1234'),
(26, 'Sourav', 'Modak', '0258963214', 'sourav@gmail.com', 'sourav'),
(27, 'bikram', 'maity', '8768789992', 'bikram2512@gmail.com', '123456789'),
(28, 'vgjgvjvg', 'shjagw', '45824838', 'sankalpshaw@ygby.com', 'sabjshua');

-- --------------------------------------------------------

--
-- Table structure for table `emloyees`
--

CREATE TABLE `emloyees` (
  `emp_id` int(10) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Cust_First_Name` varchar(20) NOT NULL,
  `Cust_Last_Name` varchar(20) NOT NULL,
  `Cust_ID` int(12) NOT NULL,
  `Cust_Number` int(20) NOT NULL,
  `AP_number` int(20) NOT NULL,
  `Cart_id` int(12) NOT NULL,
  `Belling_ID` int(12) NOT NULL,
  `date_time` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='appointment ID left join with invoice Cust_First_Name';

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(12) NOT NULL,
  `Price` int(10) NOT NULL,
  `name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='admin ID & User_Name left join with servive ID ';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`,`User_Name`),
  ADD UNIQUE KEY `Password_1` (`Password`),
  ADD UNIQUE KEY `Registration_Time` (`Registration_Time`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone_Number` (`Phone_Number`),
  ADD UNIQUE KEY `Password_1_2` (`Password`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Ap_number` (`Ap_number`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone_number` (`Phone_number`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Cust_First_Name`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Price` (`Price`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
