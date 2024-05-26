-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2024 at 10:03 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cncjewerly`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `role` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `lastname`, `firstname`, `middlename`, `role`, `email`, `username`, `password`) VALUES
(1, 'Catungal', 'John Ernest', 'Rilloraza', 'Administrator', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client_account`
--

DROP TABLE IF EXISTS `client_account`;
CREATE TABLE IF NOT EXISTS `client_account` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `role` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client_account`
--

INSERT INTO `client_account` (`Id`, `lastname`, `firstname`, `middlename`, `role`, `email`, `username`, `password`) VALUES
(1, 'Catungal', 'John Ernest', '', 'Client', 'johnernest.catungal1997@gmail.com', 'Catungal', '123456789'),
(2, 'Malamion', 'Edelvar', '', 'Client', 'Malamion@gmail.com', 'Malamion', '123456789'),
(3, 'Novencido', 'Denver', '', 'Client', 'Novencido@gmail.com', 'Novencido', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `InvoiceNum` varchar(225) NOT NULL,
  `Fullname` varchar(225) NOT NULL,
  `Contact` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `UnitPrice` varchar(225) NOT NULL,
  `Grams` varchar(225) NOT NULL,
  `Date` date NOT NULL,
  `TotalPrice` varchar(225) NOT NULL,
  `Shipping` varchar(225) NOT NULL,
  `Insurance` varchar(225) NOT NULL,
  `Subtotal` text NOT NULL,
  `Deposit` varchar(225) NOT NULL,
  `Discount` varchar(225) NOT NULL,
  `TotalAmount` varchar(225) NOT NULL,
  `AccountID` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Id`, `InvoiceNum`, `Fullname`, `Contact`, `Email`, `Address`, `Description`, `UnitPrice`, `Grams`, `Date`, `TotalPrice`, `Shipping`, `Insurance`, `Subtotal`, `Deposit`, `Discount`, `TotalAmount`, `AccountID`) VALUES
(1, 'NV-00001', 'John Ernest R. Catungal', '091715264212', 'johnernest.catungal1997@gmail.com', '', '18k White Gold Bracelet', '5000', '1', '2024-05-26', '5000', '', '0', '', '5000', '0', '', 1),
(2, 'NV-0000 2', 'Edelvar Malamion', '091715264222', 'Malamion@gmail.com', '', '18k Engagement Ring with Diamond', '15000', '', '2024-05-26', '15000', '', '', '15000', '15000', '0', '15000', 2),
(3, 'NV-0000 3', 'Edelvar Malamion', '091715264222', 'Malamion@gmail.com', '', '21k Gold Bar', '5000', '5', '2024-05-26', '25000', '', '', '25000', '25000', '0', '25000', 2),
(4, 'NV-0000 4', 'Denver A. Novencido', '091715264666', 'Novencido@gmail.com', '', '14k Bracelet Dragon', '6000', '1', '2024-05-26', '6000', '', '', '6000', '6000', '0', '6000', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
