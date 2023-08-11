-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 02:50 PM
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
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `ID` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `Title`, `Description`) VALUES
('AU001', 'Cinnamon Hotels Audit', 'The audit of Cinnamon Hotels is a thorough assessment encompassing operational, financial, and customer service aspects. It evaluates guest experiences, facility maintenance, and safety protocols. Financial scrutiny covers revenue streams, expense management, and budgeting. Internal controls, risk management, and compliance are analyzed to prevent fraud and ensure accountability. Sustainability practices and environmental initiatives are also reviewed. The audit yields insights into strengths an'),
('AU002', 'Sri Lankan Air Lines Audit', 'An audit of SriLankan Airlines involves a comprehensive evaluation of the airline\'s operational and financial processes, encompassing flight operations, safety protocols, financial transactions, and internal controls. This audit examines safety procedures, maintenance practices, and compliance with aviation regulations. It also assesses revenue sources, expense management, and budgeting, along with internal controls to prevent fraud and ensure adherence to industry standards. The audit considers'),
('Fin002', 'Coaching Atlas', '\"Advising Atlas to Grow in Financials\" offers strategic financial guidance to enhance Atlas economic performance. This process involves analyzing revenue, costs, investments, and market trends. The advisory provides insights to streamline operations, improve profitability, explore markets, and develop pricing strategies. It also addresses financial planning, resource allocation, debt management, and risk mitigation. The goal is to empower Atlas for sustained financial growth, bolstering its comp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Phone`, `Password`) VALUES
('US001', 'Uvindu', 112298864, 'abcd1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
