-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 11:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nso_khalil`
--

-- --------------------------------------------------------

--
-- Table structure for table `nso_account`
--

CREATE TABLE `nso_account` (
  `accountId` int(11) NOT NULL,
  `accountName` varchar(255) NOT NULL,
  `accountType` enum('1','2') NOT NULL COMMENT '1 = Cash , 2 = Bank',
  `branchName` varchar(255) NOT NULL,
  `accountNo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedAt` datetime NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_allsetup`
--

CREATE TABLE `nso_allsetup` (
  `unitId` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'Category table ID',
  `title` text NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_cateogory`
--

CREATE TABLE `nso_cateogory` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_description` varchar(455) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nso_cateogory`
--

INSERT INTO `nso_cateogory` (`cat_id`, `cat_title`, `cat_description`, `created_at`) VALUES
(1, 'Brand', 'Brand Name of Product', '2019-06-21 18:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `nso_form`
--

CREATE TABLE `nso_form` (
  `form_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_generalledger`
--

CREATE TABLE `nso_generalledger` (
  `generalLedgerId` int(11) NOT NULL,
  `generalsId` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `voucehrId` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `paymentType` enum('1','2','3','4') NOT NULL COMMENT '1 = In, 2 = Out, 3 = Transfer , 4 = Partial Payment',
  `narration` int(11) NOT NULL,
  `createdAt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_generals`
--

CREATE TABLE `nso_generals` (
  `generalId` int(11) NOT NULL,
  `voucherId` varchar(55) NOT NULL,
  `formId` int(11) NOT NULL,
  `date` date NOT NULL,
  `userId` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `narration` text NOT NULL,
  `invoiceImage` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_product`
--

CREATE TABLE `nso_product` (
  `pro_id` int(11) NOT NULL,
  `product_id` varchar(99) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `purchase_price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedAt` datetime NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_product_storage`
--

CREATE TABLE `nso_product_storage` (
  `storage_id` int(11) NOT NULL,
  `godown_id` int(11) NOT NULL,
  `type` enum('1','2') NOT NULL COMMENT '1 = In , 2 = Out',
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nso_user`
--

CREATE TABLE `nso_user` (
  `userId` int(11) NOT NULL,
  `type` enum('1','2','3','4') NOT NULL COMMENT '1 = General , 2 = Admin , 3 = Supplier , 4 = Employee',
  `firstName` int(11) NOT NULL,
  `lastName` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedAt` int(11) NOT NULL,
  `createdAt` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nso_account`
--
ALTER TABLE `nso_account`
  ADD PRIMARY KEY (`accountId`);

--
-- Indexes for table `nso_allsetup`
--
ALTER TABLE `nso_allsetup`
  ADD PRIMARY KEY (`unitId`);

--
-- Indexes for table `nso_cateogory`
--
ALTER TABLE `nso_cateogory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `nso_form`
--
ALTER TABLE `nso_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `nso_generalledger`
--
ALTER TABLE `nso_generalledger`
  ADD PRIMARY KEY (`generalLedgerId`);

--
-- Indexes for table `nso_generals`
--
ALTER TABLE `nso_generals`
  ADD PRIMARY KEY (`generalId`);

--
-- Indexes for table `nso_product`
--
ALTER TABLE `nso_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `nso_product_storage`
--
ALTER TABLE `nso_product_storage`
  ADD PRIMARY KEY (`storage_id`);

--
-- Indexes for table `nso_user`
--
ALTER TABLE `nso_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nso_account`
--
ALTER TABLE `nso_account`
  MODIFY `accountId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_allsetup`
--
ALTER TABLE `nso_allsetup`
  MODIFY `unitId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_cateogory`
--
ALTER TABLE `nso_cateogory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nso_form`
--
ALTER TABLE `nso_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_generalledger`
--
ALTER TABLE `nso_generalledger`
  MODIFY `generalLedgerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_generals`
--
ALTER TABLE `nso_generals`
  MODIFY `generalId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_product`
--
ALTER TABLE `nso_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_product_storage`
--
ALTER TABLE `nso_product_storage`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nso_user`
--
ALTER TABLE `nso_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
