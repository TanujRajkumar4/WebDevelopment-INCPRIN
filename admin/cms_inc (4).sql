-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2021 at 05:18 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

DROP TABLE IF EXISTS `inc_admin`;
CREATE TABLE IF NOT EXISTS `inc_admin` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_fullname` varchar(120) NOT NULL,
  `adm_username` varchar(120) NOT NULL,
  `adm_pswd` varchar(30) NOT NULL,
  `adm_mail` varchar(60) NOT NULL,
  `adm_mobile` varchar(15) NOT NULL,
  `Sub_photo` varchar(50) NOT NULL,
  `Sub_rights` text NOT NULL,
  `adm_status` enum('A','D') NOT NULL,
  `User_type` int(11) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_admin`
--

INSERT INTO `inc_admin` (`adm_id`, `adm_fullname`, `adm_username`, `adm_pswd`, `adm_mail`, `adm_mobile`, `Sub_photo`, `Sub_rights`, `adm_status`, `User_type`) VALUES
(1, 'INC_Administrator', 'INCPrin', 'INC@dmin', 'admin@incprin.com', '9944277555', '', '', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inc_client`
--

DROP TABLE IF EXISTS `inc_client`;
CREATE TABLE IF NOT EXISTS `inc_client` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_name` varchar(250) NOT NULL,
  `cl_logo` varchar(250) NOT NULL,
  `cl_status` varchar(50) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`cli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_client`
--

INSERT INTO `inc_client` (`cli_id`, `cli_name`, `cl_logo`, `cl_status`) VALUES
(1, 'Coca Cola', 'assets/img/client/Client1.jpg', 'A'),
(2, 'agmarmilk', 'assets/img/client/Client2.jpg', 'A'),
(3, 'Kelloggs', 'assets/img/client/Client3.jpg', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_features`
--

DROP TABLE IF EXISTS `inc_features`;
CREATE TABLE IF NOT EXISTS `inc_features` (
  `features_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `pg_typ` varchar(100) NOT NULL COMMENT 'product=0 page=1',
  `features_title` varchar(200) NOT NULL,
  `feature_desc` varchar(500) NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `feature_status` varchar(50) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`features_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inc_gallery`
--

DROP TABLE IF EXISTS `inc_gallery`;
CREATE TABLE IF NOT EXISTS `inc_gallery` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `pg_typ` varchar(100) NOT NULL COMMENT 'product=0 page=1',
  `poto_desc` varchar(250) NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `photo_status` varchar(50) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inc_page`
--

DROP TABLE IF EXISTS `inc_page`;
CREATE TABLE IF NOT EXISTS `inc_page` (
  `pg_id` int(11) NOT NULL AUTO_INCREMENT,
  `pg_title` varchar(150) NOT NULL,
  `pg_ban_typ` varchar(50) NOT NULL COMMENT 'video=1 img=0',
  `pg_banner` varchar(250) NOT NULL,
  `pg_desc` varchar(3500) NOT NULL,
  `pg_status` varchar(50) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`pg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `inc_product`;
CREATE TABLE IF NOT EXISTS `inc_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(250) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_status` varchar(50) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inc_service`
--

DROP TABLE IF EXISTS `inc_service`;
CREATE TABLE IF NOT EXISTS `inc_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `service_img` varchar(300) NOT NULL,
  `service_desc` varchar(450) NOT NULL,
  `service_status` varchar(100) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inc_ser_category`
--

DROP TABLE IF EXISTS `inc_ser_category`;
CREATE TABLE IF NOT EXISTS `inc_ser_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(300) NOT NULL,
  `cat_bg_img` varchar(250) NOT NULL,
  `cat_hover_img` varchar(250) NOT NULL,
  `cat_status` varchar(50) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
