-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 06:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chasir_gorbo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agri_office`
--

CREATE TABLE `agri_office` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `CONTACT` varchar(15) DEFAULT NULL,
  `WEBSITE_LINK` varchar(1000) DEFAULT NULL,
  `FARMER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `TEXT` varchar(3000) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `FARMER_ID` int(11) DEFAULT NULL,
  `LOCAL_DILLER_ID` int(11) DEFAULT NULL,
  `EXPORTER_ID` int(11) DEFAULT NULL,
  `ORGANIZATION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `BUYER_NAME` varchar(255) DEFAULT NULL,
  `PRODUCT_NAME` varchar(255) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `DURATION` date DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `CHAT_BOX_ID` int(11) DEFAULT NULL,
  `COMMENT_ID` int(11) DEFAULT NULL,
  `FARMER_ID` int(11) DEFAULT NULL,
  `LOCAL_DILLER_ID` int(11) DEFAULT NULL,
  `EXPORTER_ID` int(11) DEFAULT NULL,
  `ORGANIZATION_ID` int(11) DEFAULT NULL,
  `STATUS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_box`
--

CREATE TABLE `chat_box` (
  `ID` int(11) NOT NULL,
  `MESSAGE` varchar(1000) DEFAULT NULL,
  `POST_ID` int(11) DEFAULT NULL,
  `BUYER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `TEXT` varchar(1000) DEFAULT NULL,
  `POST_ID` int(11) DEFAULT NULL,
  `BUYER_ID` int(11) DEFAULT NULL,
  `FARMER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exporter`
--

CREATE TABLE `exporter` (
  `NAME` varchar(255) DEFAULT NULL,
  `CONTACT` varchar(15) DEFAULT NULL,
  `NID` varchar(26) DEFAULT NULL,
  `E_MAIL` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `POSTAL_CODE` int(11) DEFAULT NULL,
  `LICENSE_NO` int(11) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exporter`
--

INSERT INTO `exporter` (`NAME`, `CONTACT`, `NID`, `E_MAIL`, `ADDRESS`, `POSTAL_CODE`, `LICENSE_NO`, `PASSWORD`, `ID`) VALUES
('a', '324', '4545', 'b@gmail.com', 'df', 456, 545, '12345', 1),
('bb', '344', '4343', 'b@gmail.com', 'TTYT', 565643, 545, '22', 2),
('cc', '43', '34', 'g@gmail.com', 'fdf', 54, 77, '6', 3),
('d', '43', '5654', 'd@gmAIL.COM', 'FFD', 343, 344, '8', 4),
('k', '34', '67', 'K@GMAIL.COM', 'TGH', 4, 6, '0', 5),
('k', '34', '67', 'K@GMAIL.COM', 'TGH', 4, 6, '0', 6);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `NAME` varchar(255) DEFAULT NULL,
  `CONTACT` varchar(15) DEFAULT NULL,
  `NID` varchar(26) DEFAULT NULL,
  `ADDRESS` varchar(10) DEFAULT NULL,
  `POSTAL_CODE` int(11) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `COMMENT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`NAME`, `CONTACT`, `NID`, `ADDRESS`, `POSTAL_CODE`, `PASSWORD`, `ID`, `COMMENT_ID`) VALUES
('hjhgkgh', '32443536', '3456547658', 'dsfdfghffg', 12324, '1234', 1, NULL),
('gffuf', '324657', '324365', 'sgfdhfhg', 3465, '1234', 2, NULL),
('p', '55655', '432534', 'dgddhgh', 2334, '256', 3, NULL),
('Laila Israt Jahan', 'Laila Israt Jah', '543564575667', 'H-66,Bank ', 5767, '123', 4, NULL),
('q', '6777', '465', 'i', 54, '145', 6, NULL),
('aa', '23', '4345', 'rtrt', 5451, '1', 8, NULL),
('bb', '344', '4343', 'TTYT', 565643, '22', 9, NULL),
('cc', '43', '34', 'fdf', 54, '6', 10, NULL),
('d', '43', '5654', 'FFD', 343, '8', 11, NULL),
('k', '34', '67', 'TGH', 4, '0', 12, NULL),
('k', '34', '67', 'TGH', 4, '0', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `local_diller`
--

CREATE TABLE `local_diller` (
  `NAME` varchar(255) DEFAULT NULL,
  `CONTACT` varchar(15) DEFAULT NULL,
  `NID` varchar(26) DEFAULT NULL,
  `E_MAIL` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `POSTAL_CODE` int(11) DEFAULT NULL,
  `LICENSE_NO` int(11) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_diller`
--

INSERT INTO `local_diller` (`NAME`, `CONTACT`, `NID`, `E_MAIL`, `ADDRESS`, `POSTAL_CODE`, `LICENSE_NO`, `PASSWORD`, `ID`) VALUES
('q', '6777', '465', 'g1@gmail.com', 'i', 54, 34, '145', 1),
('a', '324', '4545', 'b@gmail.com', 'df', 456, 545, '12345', 2),
('bb', '344', '4343', 'b@gmail.com', 'TTYT', 565643, 545, '22', 3),
('cc', '43', '34', 'g@gmail.com', 'fdf', 54, 77, '6', 4),
('d', '43', '5654', 'd@gmAIL.COM', 'FFD', 343, 344, '8', 5),
('k', '34', '67', 'K@GMAIL.COM', 'TGH', 4, 6, '0', 6),
('k', '34', '67', 'K@GMAIL.COM', 'TGH', 4, 6, '0', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order_t`
--

CREATE TABLE `order_t` (
  `ID` int(11) NOT NULL,
  `POST_ID` int(11) DEFAULT NULL,
  `BUYER_ID` int(11) DEFAULT NULL,
  `QUANTITY` varchar(255) DEFAULT NULL,
  `DELIVARY_DATE` varchar(100) DEFAULT NULL,
  `ORDER_DATE` varchar(100) DEFAULT NULL,
  `ORDER_BUT_NOT_PAIED` varchar(100) DEFAULT NULL,
  `ORDERED` varchar(100) DEFAULT NULL,
  `CANCEL` varchar(100) DEFAULT NULL,
  `STATUS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_t`
--

INSERT INTO `order_t` (`ID`, `POST_ID`, `BUYER_ID`, `QUANTITY`, `DELIVARY_DATE`, `ORDER_DATE`, `ORDER_BUT_NOT_PAIED`, `ORDERED`, `CANCEL`, `STATUS_ID`) VALUES
(1, NULL, NULL, '4', '343545', '55655', NULL, NULL, NULL, NULL),
(2, NULL, NULL, '5', '67886', '757', NULL, NULL, NULL, NULL),
(3, NULL, NULL, '5', '768', '89', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `NAME` varchar(255) DEFAULT NULL,
  `CATEGORY_TYPE` varchar(255) DEFAULT NULL,
  `ORG_ID` int(11) DEFAULT NULL,
  `CONTACT` varchar(15) DEFAULT NULL,
  `E_MAIL` varchar(255) DEFAULT NULL,
  `AREA_CODE` int(11) DEFAULT NULL,
  `WEBSITE_LINK` varchar(1000) DEFAULT NULL,
  `LICENSE_NO` int(11) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ORGANIZATION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`NAME`, `CATEGORY_TYPE`, `ORG_ID`, `CONTACT`, `E_MAIL`, `AREA_CODE`, `WEBSITE_LINK`, `LICENSE_NO`, `PASSWORD`, `ORGANIZATION_ID`) VALUES
('B', 'FGFF', 34, '4546', 'B1@gmail.com', 45, 'ww', 8790, '90', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `SELLER_NAME` varchar(255) DEFAULT NULL,
  `PRODUCT_NAME` varchar(255) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `DURATION` varchar(100) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `CHAT_BOX_ID` int(11) DEFAULT NULL,
  `FARMER_ID` int(11) DEFAULT NULL,
  `LOCAL_DILLER_ID` int(11) DEFAULT NULL,
  `EXPORTER_ID` int(11) DEFAULT NULL,
  `ORGANIZATION_ID` int(11) DEFAULT NULL,
  `STATUS_ID` int(11) DEFAULT NULL,
  `COMMENT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `DETAILS` varchar(3000) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `COMMENT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agri_office`
--
ALTER TABLE `agri_office`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OFF` (`FARMER_ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FAR1` (`FARMER_ID`),
  ADD KEY `DILAR1` (`LOCAL_DILLER_ID`),
  ADD KEY `EXPO1` (`EXPORTER_ID`),
  ADD KEY `ORG1` (`ORGANIZATION_ID`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FAR3` (`FARMER_ID`),
  ADD KEY `DILAR3` (`LOCAL_DILLER_ID`),
  ADD KEY `EXPO3` (`EXPORTER_ID`),
  ADD KEY `ORG3` (`ORGANIZATION_ID`),
  ADD KEY `ORD4` (`STATUS_ID`),
  ADD KEY `CHAT3` (`CHAT_BOX_ID`),
  ADD KEY `COMMENT_ID` (`COMMENT_ID`);

--
-- Indexes for table `chat_box`
--
ALTER TABLE `chat_box`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exporter`
--
ALTER TABLE `exporter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `COMMENT_ID` (`COMMENT_ID`);

--
-- Indexes for table `local_diller`
--
ALTER TABLE `local_diller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_t`
--
ALTER TABLE `order_t`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ORD2` (`STATUS_ID`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`ORGANIZATION_ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FAR2` (`FARMER_ID`),
  ADD KEY `DILAR2` (`LOCAL_DILLER_ID`),
  ADD KEY `EXPO2` (`EXPORTER_ID`),
  ADD KEY `ORG2` (`ORGANIZATION_ID`),
  ADD KEY `ORD3` (`STATUS_ID`),
  ADD KEY `CHAT` (`CHAT_BOX_ID`),
  ADD KEY `COMMENT_ID` (`COMMENT_ID`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `COM` (`COMMENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agri_office`
--
ALTER TABLE `agri_office`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_box`
--
ALTER TABLE `chat_box`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exporter`
--
ALTER TABLE `exporter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `local_diller`
--
ALTER TABLE `local_diller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_t`
--
ALTER TABLE `order_t`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `ORGANIZATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agri_office`
--
ALTER TABLE `agri_office`
  ADD CONSTRAINT `OFF` FOREIGN KEY (`FARMER_ID`) REFERENCES `farmer` (`ID`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `DILAR1` FOREIGN KEY (`LOCAL_DILLER_ID`) REFERENCES `local_diller` (`ID`),
  ADD CONSTRAINT `EXPO1` FOREIGN KEY (`EXPORTER_ID`) REFERENCES `exporter` (`ID`),
  ADD CONSTRAINT `FAR1` FOREIGN KEY (`FARMER_ID`) REFERENCES `farmer` (`ID`),
  ADD CONSTRAINT `ORG1` FOREIGN KEY (`ORGANIZATION_ID`) REFERENCES `organization` (`ORGANIZATION_ID`);

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `CHAT3` FOREIGN KEY (`CHAT_BOX_ID`) REFERENCES `chat_box` (`ID`),
  ADD CONSTRAINT `DILAR3` FOREIGN KEY (`LOCAL_DILLER_ID`) REFERENCES `local_diller` (`ID`),
  ADD CONSTRAINT `EXPO3` FOREIGN KEY (`EXPORTER_ID`) REFERENCES `exporter` (`ID`),
  ADD CONSTRAINT `FAR3` FOREIGN KEY (`FARMER_ID`) REFERENCES `farmer` (`ID`),
  ADD CONSTRAINT `ORD4` FOREIGN KEY (`STATUS_ID`) REFERENCES `order_t` (`ID`),
  ADD CONSTRAINT `ORG3` FOREIGN KEY (`ORGANIZATION_ID`) REFERENCES `organization` (`ORGANIZATION_ID`),
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`ID`),
  ADD CONSTRAINT `buyer_ibfk_2` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`ID`);

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmer_ibfk_1` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`ID`);

--
-- Constraints for table `order_t`
--
ALTER TABLE `order_t`
  ADD CONSTRAINT `ORD2` FOREIGN KEY (`STATUS_ID`) REFERENCES `order_t` (`ID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `CHAT` FOREIGN KEY (`CHAT_BOX_ID`) REFERENCES `chat_box` (`ID`),
  ADD CONSTRAINT `DILAR2` FOREIGN KEY (`LOCAL_DILLER_ID`) REFERENCES `local_diller` (`ID`),
  ADD CONSTRAINT `EXPO2` FOREIGN KEY (`EXPORTER_ID`) REFERENCES `exporter` (`ID`),
  ADD CONSTRAINT `FAR2` FOREIGN KEY (`FARMER_ID`) REFERENCES `farmer` (`ID`),
  ADD CONSTRAINT `ORD3` FOREIGN KEY (`STATUS_ID`) REFERENCES `order_t` (`ID`),
  ADD CONSTRAINT `ORG2` FOREIGN KEY (`ORGANIZATION_ID`) REFERENCES `organization` (`ORGANIZATION_ID`),
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`ID`);

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `COM` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
