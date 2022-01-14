-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 06:39 PM
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
(13, 'Arsenal', 'assets/img/client/61dd3a0ef0281.png', 'A'),
(14, 'Barcelona', 'assets/img/client/61dd3a1ade685.png', 'A'),
(16, 'Jockey', 'assets/img/client/61dd3a791a655.png', 'A'),
(17, 'Juventus', 'assets/img/client/61dd3c4d61a62.png', 'A'),
(24, 'Kindly', 'assets/img/client/61dd3d5193bf4.png', 'A'),
(25, 'Laintimo', 'assets/img/client/61e13484ee068.png', 'A'),
(20, 'LiverPool', 'assets/img/client/61dd3c7a3d784.png', 'A'),
(21, 'Manchester City', 'assets/img/client/61dd3c869940a.png', 'A'),
(22, 'Mohammed Ali', 'assets/img/client/61dd3c9226df0.PNG', 'A'),
(23, 'SunBurn', 'assets/img/client/61dd3c9f6317c.png', 'A'),
(26, 'Weekend-X', 'assets/img/client/61e134901d369.png', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_features`
--

CREATE TABLE `inc_features` (
  `features_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pg_typ` varchar(100) NOT NULL COMMENT 'product=0 page=1',
  `features_title` varchar(200) NOT NULL,
  `feature_desc` varchar(3000) NOT NULL,
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
(8, 0, '0', '', ' ', '', 'A'),
(9, 2, '0', 'Works everywhere', 'Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.', '', 'A'),
(13, 2, '0', 'Highly Reliable', 'Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.', '', 'A'),
(28, 12, '1', '', ' ', 'assets/img/products/61e122fbb153c.png', 'A'),
(31, 29, '1', ' ', 'Wash Care Labels ', 'assets/img/products/61e123c9f22b5.png', 'A'),
(30, 3, '1', ' ', 'Heat Transfer Labels', 'assets/img/products/61e1239b7f082.png', 'A'),
(18, 17, '0', 'TEST', 'TEST', '', 'A'),
(32, 3, '1', '   ', 'Wash Care Labels ', 'assets/img/products/61e123e50af93.png', 'A'),
(34, 33, '1', '   ', 'Self-Adhesive Labels ', 'assets/img/products/61e1244bd5989.png', 'A'),
(35, 3, '1', '   ', 'Self-Adhesive Labels ', 'assets/img/products/61e1245b11d08.png', 'A'),
(36, 3, '1', '   ', 'RFID', 'assets/img/products/61e127d9c28be.png', 'A'),
(37, 3, '1', '   ', 'Cartons', 'assets/img/products/61e12f1a7a47f.png', 'A');

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
(22, 7, '0', '', 'assets/img/reports/61c0c5090a3e5.jpg', 'A'),
(25, 4, '1', '2022', '', 'A'),
(26, 4, '1', '2021', '', 'A'),
(27, 4, '1', '2020', '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_media`
--

CREATE TABLE `inc_media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inc_media`
--

INSERT INTO `inc_media` (`id`, `title`, `url`, `status`) VALUES
(1, 'Facebook', 'https://www.facebook.com', 'A'),
(2, 'Twitter', 'https://twitter.com/', 'A'),
(3, 'Instagram', 'https://www.instagram.com/', 'A'),
(4, 'LinkedIn', 'https://www.linkedin.com/', 'A'),
(5, 'YouTube', 'https://www.youtube.com/', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_page`
--

CREATE TABLE `inc_page` (
  `pg_id` int(11) NOT NULL,
  `pg_title` varchar(150) NOT NULL,
  `pg_ban_typ` varchar(50) NOT NULL COMMENT 'video=1 img=0',
  `pg_banner` varchar(250) NOT NULL,
  `pg_desc` varchar(10000) NOT NULL,
  `pg_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_page`
--

INSERT INTO `inc_page` (`pg_id`, `pg_title`, `pg_ban_typ`, `pg_banner`, `pg_desc`, `pg_status`) VALUES
(1, 'Home', '1', 'assets/img/61e1197983e15.mp4', '<p>INCPRIN is a fully forward-integrated and comprehensive solutions provider company.\r\n\r\nBased in Chennai, we serve PAN India. We Engineer, Build and maintain commercial and utility-scale projects that deliver a powerful return on investment for our clients. </p>    ', 'A'),
(2, 'Market', '0', 'assets/img/619153a19a001.jpg', 'Please visit this section in a short while... ', 'A'),
(3, 'Technology', '0', 'assets/img/61e11c7d520f4.jpg', '<div style=\"text-align: center;\"><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:14.0pt;mso-ansi-language:\r\nEN-US\">We are using cutting edge technology and robust production process in\r\nmanufacturing in wash care labels, heat transfer, self-adhesive labels, RF,\r\nRFID, mono cartons, rigid boxes, etc.<o:p></o:p></span></p></div><div style=\"text-align: center;\"><img src=\"assets/img/technology/001.png\"><img src=\"assets/img/technology/002.png\"><img src=\"assets/img/technology/003.png\"><span style=\"font-family: Calibri, sans-serif; font-size: 14pt;\"><br></span></div>  ', 'A'),
(4, 'Sustainability', '0', 'assets/img/619153aa6647c.jpg', '<p class=\"MsoNormal\" style=\"text-align: center; \"><span lang=\"EN-GB\" style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:black;mso-ansi-language:EN-GB\">Our main strategy is the usage of\r\nsustainability based raw materials &amp; base material in labels and packaging\r\nproduction which will help us to align to India / Global carbon reduction\r\nprogram and green earth policies.<o:p></o:p></span></p>', 'A'),
(5, 'About Us', '0', 'assets/img/619153aa6647c-Copy.jpg', '<p class=\"MsoNormal\"><span lang=\"EN-GB\" arial\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" color:#16a53f;mso-ansi-language:en-gb;mso-fareast-language:en-gb\"=\"\" style=\"text-align: justify; font-size: 1rem;\">INCPRIN Labels and Packaging solutions </span><span lang=\"EN-GB\" arial\",sans-serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:black;mso-ansi-language:en-gb;=\"\" mso-fareast-language:en-gb\"=\"\" style=\"text-align: justify; font-size: 1rem;\">having state of art technology and full-fledged\r\nplant capability, aim to serve labels &amp; packaging requirement in multiple\r\nmarket segments like Apparel, FMCG, Pharma, Electronics, Automobile and\r\nEducation industries.</span><br></p><p class=\"MsoNormal\"><b><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Robust Printing</span></b></p><ul><li><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\">Robust Printing and Finishing\r\nInfrastructure with ample capacity for mass production.</span></li></ul><p class=\"MsoNormal\"><b><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Packaging</span></b></p><ul><li><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\">Capability to produce all kinds of\r\nlabels and packaging items catering to Apparel, FMCG, Electronics, Automotive,\r\nPharma and Education industry.</span></li></ul><p class=\"MsoNormal\"><b><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Industry Standard</span></b></p><ul><li><span style=\"text-indent: -18pt;\"><font face=\"Arial, sans-serif\"><span style=\"font-size: 1rem;\">Industry Standards Workflows &amp;\r\nAutomation </span>Software<span style=\"font-size: 1rem;\">&nbsp;in the entire production process.</span></font></span></li></ul><p class=\"MsoNormal\"><b><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Service</span></b></p><ul><li><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\">We\r\nare providing Pan India service.</span></li><li><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\">Global\r\nservice through our Global partner G-Locs.</span></li></ul><p style=\"text-align: center; \"><img src=\"assets/img/about_us/1.png\"><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\"><br></span></p><p><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\"><br></span></p><p style=\"text-align: center; \"><img src=\"assets/img/about_us/2.png\"><span style=\"font-family: Arial, sans-serif; text-indent: -18pt; font-size: 1rem;\"><br></span></p><p class=\"MsoNormal\" style=\"text-align: justify; \"><span lang=\"EN-GB\" style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:black;mso-ansi-language:EN-GB\">In general, the major issues in label and\r\npackaging industry are lead time and consistency in product quality. In Incprin,\r\nwe are providing best lead time &amp; consistent product quality using planned\r\ncapacities, latest technology machines, production process and robust QC\r\nsystem.</span><span style=\"color: black; font-size: 1rem;\">&nbsp;</span><span style=\"color: black; font-size: 1rem; text-align: left;\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"text-align: justify; \">\r\n\r\n</p><p class=\"MsoNormal\" style=\"text-align: justify; \"><span lang=\"EN-GB\" style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:black;mso-ansi-language:EN-GB\">We are the first label and packaging\r\nmanufacturer in India in Apparel segment to have in-house production facility\r\nunder one roof with the capability to produce wash care labels, Heat transfer\r\nlabels, Hang tags, prices tickets, security tag, RF, RFID, Self-adhesive\r\nlabels, Mono cartons, Rigid boxes, wrap bands, insert card and all kinds of\r\nPackaging items.</span></p><p class=\"MsoNormal\" style=\"text-align: justify; \"><span lang=\"EN-GB\" style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:black;mso-ansi-language:EN-GB\"><o:p><br></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: center;\"><img src=\"assets/img/about_us/4.png\"><span lang=\"EN-GB\" style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:black;mso-ansi-language:EN-GB\"><o:p><br></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: center;\"><img src=\"assets/img/about_us/3.png\"><span lang=\"EN-GB\" style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:black;mso-ansi-language:EN-GB\"><o:p><br></o:p></span></p>', 'A');

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
  `pr_ban_typ` int(11) NOT NULL COMMENT '0-Image 1-Video',
  `product_status` varchar(50) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_product`
--

INSERT INTO `inc_product` (`product_id`, `service_id`, `product_title`, `product_desc`, `product_img`, `pr_ban_typ`, `product_status`) VALUES
(2, 11, 'Product 1', ' INCPRIN automotive products offer lasting resistance against mechanical abrasion, acids and aggressive chemicals. \r\nAutomotive labels withstand solvents, oils, water, extreme temperatures and mechanical abrasion.The adhesives used in automotive applications are suited to rough, textured and low-energy surfaces.\r\n', 'assets/img/products/61914633823e7.jpg', 0, 'A'),
(3, 11, 'Product 2 ', 'INCPRIN automotive products offer lasting resistance against mechanical abrasion, acids and aggressive chemicals. \r\nAutomotive labels withstand solvents, oils, water, extreme temperatures and mechanical abrasion.\r\nThe adhesives used in automotive applications are suited to rough, textured and low-energy surfaces.\r\n', 'assets/img/products/6190ebf52f282.mp4', 1, 'A'),
(4, 11, 'Product 3', ' INCPRIN automotive products offer lasting resistance against mechanical abrasion, acids and aggressive chemicals. \r\nAutomotive labels withstand solvents, oils, water, extreme temperatures and mechanical abrasion.The adhesives used in automotive applications are suited to rough, textured and low-energy surfaces.', 'assets/img/products/6191464a4eff6.jpg', 0, 'A'),
(5, 14, 'Prod3', ' hfhfhfgfh', 'assets/img/products/61914656b86d9.jpg', 0, 'A'),
(7, 15, 'TEST', '  TEST12', 'assets/img/products/61c0b5b29009c.jpg', 0, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `inc_service`
--

CREATE TABLE `inc_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `service_img` varchar(300) NOT NULL,
  `service_desc` varchar(10000) NOT NULL,
  `service_status` varchar(100) NOT NULL DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc_service`
--

INSERT INTO `inc_service` (`service_id`, `service_name`, `service_img`, `service_desc`, `service_status`) VALUES
(11, 'Apparel Branding & Labeling Solutions ', 'assets/img/services/619114bc44d80.jpg', '<div style=\"text-align: justify; \"><font color=\"#000000\" face=\"Times New Roman\">We work closely with clients in every step of our services from the beginning.&nbsp;</font><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 1rem;\">We make our commitment to providing in-depth branding solutions.&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 1rem;\">We offer </span><font color=\"#000000\" face=\"Times New Roman\">customized</font><span style=\"font-size: 1rem;\"><font color=\"#000000\" face=\"Times New Roman\">&nbsp;branding Labels &amp; Logos.</font>&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 1rem;\">We are offering application-specific solutions designed to meet precise labeling needs.</span><span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 1rem;\">Rapid prototype turnaround.</span><span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 1rem;\">Uncompromised product confidentiality, from design to manufacture.</span><span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 1rem;\">We offer solutions with multiple options, differentiation, cost reduction and sustainability targets in today\'s highly competitive label industry, adding value beyond products.</span></div>', 'A'),
(12, 'Automotive Products', 'assets/img/services/6191148e80671.jpg', '<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\nline-height:13.5pt\"><span style=\"font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif\">We\r\nhave infrastructure to provide all kinds of labels as per Automotive industry standards\r\nlike Variable data &amp; Barcode labels, Information, Warning and Security\r\nlabels, Protection labels, Vehicle batter labels, Airbag labels, etc. O</span><span style=\"font-family: Arial, sans-serif; font-size: 10.5pt;\">ur\r\nlabels will withstand through extended use and under harsh conditions, as well\r\nas satisfy a range of specifications and compliance regulations.</span></p>', 'A'),
(14, 'Consumer Packaged Labelling Solutions', 'assets/img/services/6191149a84299.jpg', 'We are fully equipped to support labelling needs of Consumer-packaged labelling solutions and thereby help brands make a strong statement on the shelf.', 'A'),
(20, 'Health Care', 'assets/img/services/61e13ab1d3c07.jpg', '<p class=\"MsoNormal\"><span style=\"color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">We have\r\nthe expertise in printing and packaging to support the health care industry\r\ndemands by developing and manufacture the highest quality secondary packaging in\r\nthe market. We offer solutions from expanding the printable surface areas,\r\nsecuring brands, engaging consumers, preventing product tampering, tracking\r\nproducts through the supply chain through various products such as Mono\r\ncartons, Rigid boxes, specialty products, expanded content booklet labels,\r\nprinter literature, shrink sleeves, brand protection, pressure sensitive labels,\r\netc.</span><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p> ', 'A'),
(15, 'Electronics, Electrical, Durable Goods & Equipments', 'assets/img/services/619114a727b54.jpg', '<div>We are offer all kinds of labelling needs in Electronics, Electrical, Durable goods and Equipment which can withstands applications such as sound and vibration dampening, high shock absorption, water proofing and very high temperature resistance.&nbsp;<span style=\"font-size: 1rem;\">Products covers wide range like Brand protection and security solutions robust barcode &amp; QR Code labels, pressure sensitive labels, printed circuit board, battery </span>information<span style=\"font-size: 1rem;\">, security warning labels, etc.&nbsp;We have strong design team to provide comprehensive </span>customized<span style=\"font-size: 1rem;\">&nbsp;solutions.</span></div>', 'A');

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
-- Indexes for table `inc_media`
--
ALTER TABLE `inc_media`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `inc_features`
--
ALTER TABLE `inc_features`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `inc_gallery`
--
ALTER TABLE `inc_gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `inc_media`
--
ALTER TABLE `inc_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inc_page`
--
ALTER TABLE `inc_page`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inc_product`
--
ALTER TABLE `inc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inc_service`
--
ALTER TABLE `inc_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inc_ser_category`
--
ALTER TABLE `inc_ser_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
