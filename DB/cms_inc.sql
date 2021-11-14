-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 06:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_inc`
--

-- --------------------------------------------------------

--
-- Table structure for table `inc_admin`
--

CREATE TABLE `inc_admin` (
  `adm_id` int(11) NOT NULL,
  `adm_fullname` varchar(120) NOT NULL,
  `adm_username` varchar(120) NOT NULL,
  `adm_pswd` varchar(30) NOT NULL,
  `adm_mail` varchar(60) NOT NULL,
  `adm_mobile` varchar(15) NOT NULL,
  `Sub_photo` varchar(50) NOT NULL,
  `Sub_rights` text NOT NULL,
  `adm_status` enum('A','D') NOT NULL,
  `User_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_admin`
--

INSERT INTO `inc_admin` (`adm_id`, `adm_fullname`, `adm_username`, `adm_pswd`, `adm_mail`, `adm_mobile`, `Sub_photo`, `Sub_rights`, `adm_status`, `User_type`) VALUES
(1, 'INC_Administrator', 'INCPrin', 'INC@dmin', 'admin@incprin.com', '9944277555', '', '', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inc_client`
--

CREATE TABLE `inc_client` (
  `cli_id` int(11) NOT NULL,
  `cli_name` varchar(250) NOT NULL,
  `cl_logo` varchar(250) NOT NULL,
  `cl_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_client`
--

INSERT INTO `inc_client` (`cli_id`, `cli_name`, `cl_logo`, `cl_status`) VALUES
(9, 'TEST', 'assets/img/client/61909966713f6.jpg', 'A'),
(8, 'TEST', 'assets/img/client/61909956cbbe3.jpg', 'A'),
(7, 'TEST', 'assets/img/client/61909946e6962.jpg', 'A'),
(6, 'TEST', 'assets/img/client/6190991d7a266.jpg', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_features`
--

CREATE TABLE `inc_features` (
  `features_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pg_typ` varchar(100) NOT NULL COMMENT 'product=0 page=1',
  `features_title` varchar(200) NOT NULL,
  `feature_desc` varchar(500) NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `feature_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_features`
--

INSERT INTO `inc_features` (`features_id`, `product_id`, `pg_typ`, `features_title`, `feature_desc`, `file_url`, `feature_status`) VALUES
(1, 0, '0', 'TEST', 'TEST', '', 'A'),
(2, 0, '0', 'TEST', 'TEST', '', 'A'),
(3, 0, '0', 'TEST', 'TEST', '', 'A'),
(4, 0, '0', 'TEST', 'TEST', '', 'A'),
(5, 0, '0', 'TEST', 'TEST', '', 'A'),
(6, 0, '0', 'TEST', 'TEST', '', 'A'),
(7, 0, '0', 'nlnkl', 'nklnkl', '', 'A'),
(8, 0, '0', '', ' ', '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_gallery`
--

CREATE TABLE `inc_gallery` (
  `photo_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pg_typ` varchar(100) NOT NULL COMMENT 'product=0 page=1',
  `poto_desc` varchar(250) NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `photo_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_gallery`
--

INSERT INTO `inc_gallery` (`photo_id`, `product_id`, `pg_typ`, `poto_desc`, `file_url`, `photo_status`) VALUES
(1, 0, '0', 'bchgvgh', '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_page`
--

CREATE TABLE `inc_page` (
  `pg_id` int(11) NOT NULL,
  `pg_title` varchar(150) NOT NULL,
  `pg_ban_typ` varchar(50) NOT NULL COMMENT 'video=1 img=0',
  `pg_banner` varchar(250) NOT NULL,
  `pg_desc` varchar(3500) NOT NULL,
  `pg_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_page`
--

INSERT INTO `inc_page` (`pg_id`, `pg_title`, `pg_ban_typ`, `pg_banner`, `pg_desc`, `pg_status`) VALUES
(1, 'Home', '1', 'assets/vid/Index_Video.mp4', 'INCPRIN is a fully forward-integrated and comprehensive solutions provider company.\r\n\r\nBased in Chennai, we serve PAN India. We Engineer, Build and maintain commercial and utility-scale projects that deliver a powerful return on investment for our clients. ', 'A'),
(2, 'Market', '0', 'assets/img/5912d0fa21de1.jpg', 'Updating these details   ', 'A'),
(3, 'Technology', '0', 'assets/img/5912d0fa21de1.jpg', 'Sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\nPraesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dict vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\nAliquam In Arcu\r\nSuspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.Based in Chennai, we serve PAN India. We Engineer, Build and maintain commercial and utility-scale projects that deliver a powerful return on investment for our clients. ', 'A'),
(4, 'Sustainability', '0', 'assets/img/5912d0fa21de1.jpg', 'Sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\nPraesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dict vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\nAliquam In Arcu\r\nSuspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.Based in Chennai, we serve PAN India. We Engineer, Build and maintain commercial and utility-scale projects that deliver a powerful return on investment for our clients. ', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_product`
--

CREATE TABLE `inc_product` (
  `product_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `product_title` varchar(250) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inc_service`
--

CREATE TABLE `inc_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `service_img` varchar(300) NOT NULL,
  `service_desc` varchar(1000) NOT NULL,
  `service_status` varchar(100) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_service`
--

INSERT INTO `inc_service` (`service_id`, `service_name`, `service_img`, `service_desc`, `service_status`) VALUES
(1, 'TEST SERVICE', 'assets\\img\\Service1.jpg', 'Sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\nSed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\n', 'A'),
(2, 'TEST SERVICE 1', 'assets\\img\\Service2.jpg', 'Sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\nSed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.\r\n\r\n', 'A'),
(7, 'dfgdfg', 'assets/img/services/6190985c0a3d1.jpg', 'fghfgh', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_ser_category`
--

CREATE TABLE `inc_ser_category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(300) NOT NULL,
  `cat_bg_img` varchar(250) NOT NULL,
  `cat_hover_img` varchar(250) NOT NULL,
  `cat_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inc_admin`
--
ALTER TABLE `inc_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `inc_client`
--
ALTER TABLE `inc_client`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `inc_features`
--
ALTER TABLE `inc_features`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `inc_gallery`
--
ALTER TABLE `inc_gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `inc_page`
--
ALTER TABLE `inc_page`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `inc_product`
--
ALTER TABLE `inc_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `inc_service`
--
ALTER TABLE `inc_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `inc_ser_category`
--
ALTER TABLE `inc_ser_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inc_admin`
--
ALTER TABLE `inc_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inc_client`
--
ALTER TABLE `inc_client`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inc_features`
--
ALTER TABLE `inc_features`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inc_gallery`
--
ALTER TABLE `inc_gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inc_page`
--
ALTER TABLE `inc_page`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inc_product`
--
ALTER TABLE `inc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inc_service`
--
ALTER TABLE `inc_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inc_ser_category`
--
ALTER TABLE `inc_ser_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
