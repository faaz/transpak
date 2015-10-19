
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2015 at 12:59 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6074651_tpedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `hawb` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clearance` decimal(10,2) unsigned NOT NULL,
  `handling` decimal(10,2) unsigned NOT NULL,
  `processing` decimal(10,2) unsigned NOT NULL,
  `vat` decimal(10,2) unsigned NOT NULL,
  `duty` decimal(10,2) unsigned NOT NULL,
  `pay_method` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `totals` decimal(10,2) unsigned NOT NULL,
  `collector` varchar(100) NOT NULL,
  `date` datetime DEFAULT NULL,
  `collection` char(2) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`hawb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc`
--


-- --------------------------------------------------------

--
-- Table structure for table `cash_acc`
--

CREATE TABLE `cash_acc` (
  `hawb` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sender` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_address1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_address2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_acc`
--


-- --------------------------------------------------------

--
-- Table structure for table `destn_codes`
--

CREATE TABLE `destn_codes` (
  `destination` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destn_codes`
--

INSERT INTO `destn_codes` VALUES('LHR');
INSERT INTO `destn_codes` VALUES('SIN');
INSERT INTO `destn_codes` VALUES('KHZ');
INSERT INTO `destn_codes` VALUES('DHL');
INSERT INTO `destn_codes` VALUES('FedEx');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `account` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hawb` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sr_no` int(10) unsigned NOT NULL,
  `date_received` date DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `number_pieces` int(3) unsigned NOT NULL,
  `weight` decimal(4,2) unsigned NOT NULL,
  `hv_lv` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `value` decimal(10,2) unsigned NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `bag_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sender_acc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `s_company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sender` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_address2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_pc` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_ntn` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `destn_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `length` int(3) NOT NULL DEFAULT '1',
  `width` int(3) NOT NULL DEFAULT '1',
  `height` int(3) NOT NULL DEFAULT '1',
  `amount` int(10) unsigned NOT NULL,
  `special_charges` int(10) unsigned NOT NULL,
  `other` int(10) unsigned NOT NULL,
  `gst` int(10) unsigned NOT NULL,
  PRIMARY KEY (`hawb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` VALUES('786385', '92111180', 'INT', 9, '2010-04-26', 'MR SYED BUKHARI', '', '15 UPPER ROAD MIDDLETOWN', '', 'NEW YORK', 'UNITED STATES', 'NY-10940', '3002453633', 1, 22.00, 'L/V', 'CLOTHING SHOW PIECES', 27.00, 'USD', '13', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111198', 'INT', 8, '2010-04-26', 'WERTER WEEL', '', 'SANDER GROOT ZUIDERZEESTRAAT WE4213', '', 'OLDERROCK', 'NETHERLANDS', 'BJ-8096', '384225905', 1, 6.00, 'LV', 'COTTON ROLL', 6.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111199', 'INT', 7, '2010-04-26', 'DISTRIBUIDORA DE COLCHAS VENADO S A DECV', 'MR. ENRIQUE MALDONADO', 'SAN ANTONIO TOMARIAN 25 COL CENTRO', '', 'MEXICO CITY', 'MEXICO', 'CP-06020', '12014245667', 1, 5.00, 'H/V', 'FABRIC SAMPLE', 2.40, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110649', 'INT', 6, '2010-04-26', 'DOULAT DELAWALA', '', '469 BELLBROOK LN', '', 'LAWRENCEVILLE', 'UNITED STATES', 'GA-30045', '7704420354', 1, 3.00, 'H/V', 'BOOKS & CDS', 5.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111150', 'INT', 5, '2010-04-26', 'M LAKHI', '', '1015 WEST ROSCOE', '', 'CHICAGO', 'UNITED STATES', 'IL-60657', '7732302021', 2, 46.00, 'H/V', 'PRINTED MATERIAL', 27.00, 'USD', '14 + 15', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92116061', 'INT', 4, '2010-04-26', 'MR BILAL ASMAL', '', '9413 LAVERGNE AVE', '', 'SKOKIE', 'UNITED STATES', 'IL-60077', '8472936447', 1, 22.00, 'H/V', 'CLOTHING', 27.00, 'USD', '16', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110668', 'INT', 3, '2010-04-26', 'MR ZAID TAHA', '', '3160 JAGUAR VALLEY DR', 'APT # 206 BUZZ NO 234', 'MISSISSAUGA', 'CANADA', 'ON L5A 2J5', '4168175613', 1, 23.00, 'H/V', 'LADY TOPS & CLOTHING', 26.25, 'USD', '17', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111534', 'INT', 2, '2010-04-26', 'M ATIF AQEEL', '', '112 CORGE HENRY BLVD', 'UNIT # 60', 'TORONTO', 'CANADA', 'ON M2J 1E7', '6473467641', 2, 27.00, 'H/V', 'CLOTHING ISLAMIC CD BOOK & PRESSURE COOKER', 27.00, 'USD', '18 + 19', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92116060', 'INT', 1, '2010-04-26', 'GARRICK LOBERGER', '', '2101 KINGFISHER LN', '', 'GREENBAY', 'UNITED STATES', 'WI-54313', '7346200777', 1, 5.00, 'LV', 'SEAT COVERS', 30.00, 'USD', '19', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '79887', 'DBP', 16, '2010-06-22', '', '', '', '', '', '', '', '', 1, 1.00, 'LV', '1', 1.00, '1', '1', '1', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '12345', 'INT', 4, '2010-06-28', 'ALI RAZA ALI', 'Sadiq BhanBhro', 'APPT # 901 BUZ NO 10215 FAIR VIEW RD EAST', '', 'Lombard', 'FRANCE', '21117', '31653401822', 1, 1.00, 'HV', '1', 1.00, '1', '1', '1', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '79887974', 'R1', 15, '2010-06-22', '', '', '', '', '', '', '', '', 1, 1.00, 'LV', '1', 1.00, '1', '1', '1', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '12312', 'DBP', 1, '2010-06-23', 'fox', 'jumps', 'over', 'the ', 'lazy ', 'yes', '', '2323', 12, 12.00, 'LV', 'sdasd', 1.00, 'asda', '2', 'ssdcf', '1324', '', '', '', '', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9233685', 'INT', 1, '2010-06-28', 'ADEEBA NADEEM', 'Afshan Iftikhar', '7011 GRASSY KNOLL STR', 'APT 1314', 'LAS VEGAS', 'NETHERLANDS', '75044', '', 1, 1.00, 'HV', 'asdas', 1.00, 'USD', '1', 'None', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '', 'INT', 2, '2010-06-28', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111358', 'DBP', 25, '2010-04-06', 'PORT WAY SILK', 'ZAFER KHAN', 'SELF COLLECTON', '', 'LONDON', 'UNITED KINGDOM', '', '2088431199', 2, 60.00, 'HV', 'CLOTHING', 105.00, 'USD', '4', 'COD 103.2', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111293', 'DBP', 24, '2010-04-06', 'SYED INAYAT ALI ZAIDI', '', '143 CAMBRIDGE RD', '', 'ILLFORD', 'UNITED KINGDOM', 'IG3 8LZ', '7930162087', 2, 28.00, 'HV', 'KITCHEN SET', 30.00, 'USD', '4', 'JD00 022 227 4000 02', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111294', 'DBP', 23, '2010-04-06', 'SYED INAYAT ALI ZAIDI', '', '143 CAMBRIDGE RD ', '', 'ILLFORD', 'UNITED KINGDOM', 'IG3 8LZ', '7930162087', 1, 27.00, 'HV', 'KITCHEN SET', 30.00, 'USD', '4', 'JD00 022 227 4000 02', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110881', 'INT', 1, '2010-04-06', 'CARLOS DA COSTA', '', '9 CHEMIN DES TULIPIERS 1208 GENEVA', '', 'GENEVA', 'SWITZERLAND', '1208', '41227356302', 1, 19.00, 'HV', '1 CARPET', 28.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110640', 'INT', 2, '2010-04-06', 'SADIQ ALI', '', '16202 EL CAMINO REAL APT # 1321', '', 'HOUSTON', 'UNITED STATES', 'TX-77062', '2814804438', 2, 24.00, 'HV', 'CLOTHING', 27.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110639', 'INT', 3, '2010-04-06', 'ADEEBA NADEEM', '', 'APPT # 901 BUZ NO 10215 FAIR VIEW RD EAST', '', 'MISSISSAUGA', 'CANADA', 'L5A 4C6', '9058978981', 1, 25.00, 'HV', 'CLOTHING', 26.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110987', 'DBP', 22, '2010-04-06', 'SOHAIL AHMED', '', '145 GRAN STREET FOREST GATE', '', 'LONDON', 'UNITED KINGDOM', 'E7 8JE', '2084721313', 1, 28.50, 'HV', 'CLOTHING', 102.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110676', 'DBP', 21, '2010-04-06', 'RASHID PATEL', '', '46 DEEPDALE ROAD  PR1 5AQ', '', 'PRESTON', 'UNITED KINGDOM', 'PR1 5AQ', '1772885813', 2, 34.00, 'HV', 'CLOTHING', 30.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111355', 'INT', 20, '2010-04-06', 'TAQI HASNAIN', '', '5939 SOLAR POINT LANE', '', 'HOUSTON', 'UNITED STATES', 'TX-77041', '7139838384', 1, 38.00, 'HV', '01 CARPET', 28.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111354', 'INT', 19, '2010-04-06', 'NASIR KHAN', '', '3418 MANGOLIA ST', '', 'EMERYVILLE', 'UNITED STATES', 'CA-94608', '5109788711', 1, 3.00, 'HV', 'CLOTHING + ARTIFICIAL JEWELLARY', 4.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111348', 'INT', 17, '2010-04-06', 'NADIR HAFIZ', '', '22 DUDLY ROAD GUILFORD, NSW', '', 'GUILFORD', 'AUSTRALIA', '2161', '', 1, 9.00, 'HV', 'CLOTHING', 12.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111345', 'INT', 18, '2010-04-06', 'HABIB M FAZAL', '', '528 LAWLER WILLMATTE', '', 'CHICAGO', 'UNITED STATES', 'IL - 60091', '7734076666', 1, 19.00, 'HV', '30 ACRYLIC TOPS', 15.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111346', 'INT', 16, '2010-04-06', 'NASIM SIDDIQUI', '', 'APT # 1201 100 WINGARDEN COURT', '', 'SCARBOROUGH', 'CANADA', 'M1B 2P4', '4163896444', 3, 43.00, 'LV', 'SPORTS GOODS', 28.00, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111347', 'INT', 15, '2010-04-06', 'FAWWAD SIDDIQUI', '', '9 ANTELOPE DR', '', 'SCARBOROUGH', 'CANADA', 'ON - M1B 6', '6478395806', 2, 37.00, 'LV', 'SPORTS GOODS', 28.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111167', 'INT', 11, '2010-04-06', 'ELEGANTE BRASS INC', 'MR SAUL', '4100  1ST AVE', '', 'BROOKLYN', 'UNITED STATES', 'NY-11232', '7184998767', 4, 45.00, 'LV', 'MARBLE SAMPLES', 28.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111357', 'INT', 12, '2010-04-06', 'NADEEM MALIK', '', '2105 42 SHEDMONTON', '', 'ALBERTA', 'CANADA', 'T6L 6L5', '7806652770', 2, 28.50, 'LV', 'CLOTHING', 28.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111356', 'INT', 13, '2010-04-06', 'NADEEM MALIK', '', '2105 42 SHEDMONTON', '', 'ALBERTA', 'CANADA', 'T6L 6L5', '7806652770', 1, 19.00, 'LV', 'CLOTHING', 22.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111344', 'DBP', 14, '2010-04-06', 'RHYS JOHNSON', '', '31 AYSGURTH ROAD, DARLINGTON', '', 'DURHAM', 'UNITED KINGDOM', 'DL1 4DB', '', 1, 1.00, 'LV', '01 DENIM CLOTH', 2.00, 'USD', '1', 'JD00 022 227 4000 02', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111171', 'INT', 10, '2010-04-06', 'MR AKEEL AHMED', '', '21641 TRASK PALACE ASHBURN', '', '', '', '', '', 9, 10.00, 'LV', 'BOOKS', 26.00, 'USD', '8', '', '1324', '', '', '', '', '', '', '', '', '', 'LHR', 2, 3, 4, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111170', 'INT', 9, '2010-04-06', 'ZEBA AHMED', '', '8656 RANGE STR APT NO 2-B', '', 'QUEENS VILLAGE', 'UNITED STATES', 'NY-11427', '7183430903', 1, 10.00, 'LV', 'CLOTHING', 20.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111169', 'INT', 8, '2010-04-06', 'KAUSAR AHMED', '', '28112 14, 2ND PL SEKENT', '', 'SEKENT', 'UNITED STATES', 'WA 98042', '', 1, 20.00, 'LV', 'CLOTHING', 25.00, 'USD', '1', '', '1324', '', 'Ejaz Ahmed', 'PECHS BLOCK 6', 'Shara e  Faisal', 'KARACHI ', 'PAKISTAN', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111168', 'INT', 7, '2010-04-06', 'ELEGANTE BRASS INC', 'MR SAUL', '4100  1ST AVE', '', 'BROOKLYN', 'UNITED STATES', 'NY-11232', '7184998767', 3, 35.00, 'HV', 'MARBLE SAMPLES', 28.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92119027', 'INT', 6, '2010-04-06', 'SHABNAM WASEEM', 'GUID', '7011 GRASSY KNOLL STR', 'This was blank before', 'LAS VEGAS', 'UNITED STATES', 'NV-89147', '7023727366', 2, 37.00, 'HV', 'UTENSILS', 28.00, 'USD', '2', 'Yahoooooo!!!', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110700', 'INT', 5, '2010-04-06', 'DUO WEAR INC', '', '810 SW 34TH STR, SUITE D', '', 'RANTON', 'UNITED STATES', 'WA 98057', '4252510760', 1, 2.00, 'HV', 'GARMENTS SAMPLE', 0.48, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92110641', 'INT', 4, '2010-04-06', 'ALI RAZA ALI', '', '6603 NW 119 STR', '', 'OKLAHOMA CITY', 'UNITED STATES', 'OK-73162', '4057222769', 2, 25.00, 'HV', 'CLOTHING', 25.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111496', 'INT', 12, '2010-04-26', 'TOFIQUE COFFEE SHOP', 'AWAIL FARAH', '912 E 24TH STR SUITE B 131', '', 'MINNEAPOLIS', 'UNITED STATES', 'MN-55404', '9.72E+09', 1, 21.00, 'L/V', 'CLOTHING', 26.70, 'USD', '4', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111497', 'INT', 11, '2010-04-26', 'TOFIQUE COFFEE SHOP', 'AWAIL FARAH', '912 E 24TH STR SUITE 131', '', 'MINNEAPOLIS', 'UNITED STATES', 'MN-55404', '9.72E+09', 2, 38.00, 'L/V', 'CLOTHING', 25.70, 'USD', '5 + 6', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111495', 'INT', 10, '2010-04-26', 'NASEEM SHAUKAT', '', '14231 FM 1464 RD', 'APT # 3308', 'SUGARLAND', 'UNITED STATES', 'TX-77498', '2814915950', 2, 36.00, 'L/V', 'CLOTHING', 24.30, 'USD', '10 + 11', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '4', 'INT', 4, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '3', 'INT', 3, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '2', 'INT', 2, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '123', 'INT', 1, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '35464567', 'INT', 5, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '234234', 'INT', 6, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '354645675', 'INT', 7, '2010-06-18', '', '', '', '', '', '', '', '', 0, 0.00, 'HV', '', 0.00, '', '', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '4501163', 'INT', 26, '2010-04-06', 'Faaz', 'Faaz', 'Faaz', 'Faaz', 'Faaz', 'Faaz', 'Faaz', 'Faaz', 0, 0.00, 'HV', 'Faaz', 0.00, 'Faaz', 'Faaz', 'Faaz', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111415', 'DBP', 0, '2010-06-22', 'City University School', 'Sadiq BhanBhro', '20 Bartholomew Close', '', 'LONDON', 'United Kingdom', 'EC1A7QN', '2085346185', 1, 2.00, 'LV', 'FRAMES SHOW PCS', 10.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116903', 'INT', 0, '2010-06-22', 'Mr Sohail Ahmad', 'Mr Sohail Ahmad', '675 Auger Terrace', '', 'Milton', 'Canada', 'L9T5M2', '', 1, 4.00, 'LV', 'Clothes', 22.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111558', 'INT', 0, '2010-06-22', 'Julia Siroi John', 'Julia Siroi John', '2900 S Nova Rd', '', 'South Daytona', 'United States', '32119', '', 1, 11.50, 'LV', 'Clothes', 13.20, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111555', 'INT', 0, '2010-06-22', 'Gerald Birkeibach ', 'Gerald Birkeibach', '1430 Dekalb St', '', 'Norristown', 'United States', '19401', '', 1, 20.81, 'LV', 'Clothes', 25.85, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111556', 'INT', 0, '2010-06-22', 'KImberly Straube', 'KImberly Straube', '8200 66th St', '', 'Pinellas Park', 'United States', '33781', '', 2, 58.00, 'LV', 'Clothes', 26.40, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116905', 'INT', 0, '2010-06-22', 'Mahnaz Khan', 'Mahnaz Khan', '13609 Meadow Ln', '', 'Plainfield', 'United States', '60544', '8153029484', 1, 27.00, 'LV', 'Clothes', 20.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111560', 'INT', 0, '2010-06-22', 'Penghsa Tan', 'Penghsa Tan', '31 Stoneton Dr', '', 'Toronto', 'Canada', 'M1H2P6', '4164008111', 1, 20.00, 'LV', 'Clothes', 24.75, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116679', 'INT', 0, '2010-06-22', 'Faisal Mota', 'Faisal Mota', '602 Verna Dr', '', 'Endwell', 'United States', '13760', '6073756989', 1, 26.00, 'LV', 'Clothes', 26.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111561', 'INT', 0, '2010-06-22', 'Cedar Hill Eementary', 'Cedar Hill Eementary', '3615 Sugarloaf Pkwy', '', 'Lawrenceville', 'United States', '30044', '', 1, 14.56, 'LV', 'Clothes', 12.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116901', 'DBP', 0, '2010-06-22', 'Yasmin Atiariya', 'Yasmin Atiariya', '32 Fountains Avenue', '', 'Blackburn', 'United Kingdom', 'BB15RX', '4.47919E+11', 1, 13.00, 'LV', 'Books', 15.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111554', 'INT', 0, '2010-06-22', 'Nina Rogers', 'Nina Rogers', '11430 NW 39th St', '', 'Fort Lauderdale', 'United States', '33323', '', 2, 34.00, 'LV', 'Clothes', 75.90, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116939', 'INT', 0, '2010-06-22', 'Afshan Iftikhar', 'Afshan Iftikhar', '59 Hillcroft Street', 'APT D', 'Houston', 'United States', '77036', '7133843209', 1, 20.50, 'LV', 'Clothes', 26.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111562', 'INT', 0, '2010-06-22', 'Allen Oaks', 'Allen Tolleson', '909 east  sixth ave', '', 'Oakdale', 'United States', '71463', '', 1, 9.00, 'LV', 'Clothes', 8.20, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111559', 'INT', 0, '2010-06-22', 'Raman Joshi', 'Raman Joshi', '350 RUTHERFORD RD S', 'Plaza II', 'Brampton', 'Canada', 'L6W3M2', '', 1, 7.00, 'LV', 'Clothes', 7.15, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116937', 'INT', 0, '2010-06-21', 'Marina Yusuf', 'Marina Yusuf', 'Mortensrudveien 30', '', 'Oslo', 'Norway', '1283', '4745475117', 1, 1.00, 'LV', 'Clothes', 6.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116938', 'INT', 0, '2010-06-21', 'Huma Sayeed', 'Huma Sayeed', '4306 Vintage Ivy Ln', '', 'Owings Mills', 'United States', '21117', '9546001151', 1, 1.00, 'LV', 'Clothes', 2.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116936', 'INT', 0, '2010-06-21', 'Pashmine Abid', 'Pashmine Abid', '326 Sylvan Ln', '', 'Westbury', 'United States', '11590', '5164147112', 1, 2.00, 'LV', 'Clothes', 4.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116898', 'INT', 0, '2010-06-21', 'Hanif Jamal', 'Hanif Jamal', '2333 Windy Dr', '', 'Garland', 'United States', '75044', '9726756139', 1, 5.00, 'LV', '1', 10.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116888', 'INT', 0, '2010-06-21', 'NAZLI HUSSAIN', '', '124 Majestic Dr', '', 'Lombard', 'UNITED STATES', '60148', '6306276179', 1, 5.00, 'LV', 'CLOTHES', 10.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92115002', 'INT', 0, '2010-06-21', 'SABA GAUHAR', '', '6432 E Lookout Ln', '', 'Anaheim', 'UNITED STATES', '92807', '7149982191', 1, 4.10, 'LV', 'CLOTHES', 6.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116887', 'INT', 0, '2010-06-21', 'NAEEM SAROSH', '', '4535 S 23RD ST', 'APT 3', 'Milwaukee', 'UNITED STATES', '53221', '4144775204', 1, 1.00, 'LV', 'ISLAMIC CDS BRACELETS', 15.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116900', 'INT', 0, '2010-06-21', 'NIDA KOMAL', '', '2663 COVE DR', '', 'Grand Prairie', 'UNITED STATES', '75054', '8179467416', 2, 23.00, 'LV', 'CLOTHES', 26.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116896', 'INT', 0, '2010-06-21', 'ADNAN NAFASAT', '', '650 N EDGE WOOD AVE', '', 'Wood Dale', 'UNITED STATES', '60191', '637014001', 2, 42.00, 'LV', 'LADY SUITS', 27.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116899', 'INT', 0, '2010-06-21', 'LUBNA DANIYAL', '', '1216-77 FINCH AVE E', '', 'TORONTO', 'CANADA', 'M2N6H6', '4165900623', 1, 5.00, 'LV', 'CLOTHES BANGLES', 8.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111137', 'INT', 0, '2010-06-21', 'NADEEM SIDDIQUE', '', '15 FAIRVIEW RD E', '', 'MISSISSAUGA', 'CANADA', 'L5A4C6', '4168763788', 3, 34.00, 'LV', 'BOTTLES PIPE ROLLS SAMPLE', 21.70, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '7988797', 'R1', 3, '2010-06-28', 'ADEEBA NADEEM', 'Afshan Iftikhar', 'APPT # 901 BUZ NO 10215 FAIR VIEW RD EAST', 'APT 1314', 'ALBERTA', 'CANADA', '1208', '1772885813', 1, 1.00, 'LV', '1', 1.00, '1', '1', '1', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116623', 'INT', 0, '2010-06-21', 'JOHN WELLER AND ASSOCIATES', 'JOHN WELLER', 'P O BOX 16761 BYRON BAY', '', 'BYRON BAY', 'AUSTRALIA', '2481', '266809642', 1, 7.00, 'LV', '5 BATS', 12.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116891', 'INT', 0, '2010-06-21', 'ACHMED CHEAR', '', 'Karl-Marx-StraÃŸe 15', '', 'BERLIN', 'GERMANY', '12043', '4.91511E+12', 1, 5.20, 'LV', 'ABAYA', 7.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116884', 'INT', 0, '2010-06-21', 'ZAINAB KALFAN', '', '1000 FARRAH LANE', 'APT 1314', 'STAFFORD', 'UNITED STATES', '77477', '2817319232', 1, 5.00, 'LV', 'CLOTHES', 10.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111587', 'INT', 0, '2010-06-21', 'SYED IMRAN AHMED', '', '290 RIVER RD', 'APT E-9', 'PISCATAWAY', 'UNITED STATES', '8854', '7322710053', 1, 10.00, 'LV', 'CLOTHES', 15.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116882', 'INT', 0, '2010-06-21', 'M MUNAWAR SHAH', '', 'UNTER DEN PLATANNEN 16', '', 'FRANKFURT AM-MAIN', 'GERMANY', '60596', '4.96963E+11', 1, 10.00, 'LV', 'LEATHER SOCKS', 12.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116885', 'INT', 0, '2010-06-21', 'NASREEN CHAUHAN', '', 'KILDE GAARDEN 2 1TV', '', 'ALBERTS LUND', 'DENMARK', '2620', '4543622342', 1, 8.00, 'LV', 'CLOTHES', 12.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116881', 'INT', 0, '2010-06-21', 'OCI OSTFOFF & COROLLA INC', 'MR JOE', '18 RUE BIRKDALA', '', 'DOLLARD DES ORMEAUX', 'CANADA', 'H9G2P3', '5143898581', 1, 4.00, 'LV', 'FLEECE', 0.25, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116879', 'DBP', 0, '2010-06-21', 'MR FAISAL KHAN', '', '9-11 Welburn Street', '', 'Rochdale', 'UNITED KINGDOM', 'OL111PR', '7595597502', 5, 99.99, 'LV', 'PRINTED MATTER', 26.00, 'USD', '1 2 3 4 5', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116897', 'INT', 0, '2010-06-21', 'KASHIF REHMAN MEMON', '', '3468 ANGELINA DR', '', 'SANTA CLARA', 'UNITED STATES', '95051', '4086465556', 2, 29.70, 'LV', 'CLOTHES BANGLES SHOES', 27.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92116883', 'INT', 0, '2010-06-21', 'SALMA AHMED', '', '2538 TRINITY ST', '', 'VANCOUVER', 'CANADA', 'V5K1E2', '6042154623', 1, 11.00, 'LV', 'LADY SUITS', 15.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211765', '786005572', 'DBP', 0, '2010-06-21', 'MR M SIDDIQ NAZ ', '', '60 ROYSSLYN CRESCENT ', 'HAROOW ', 'LONDON ', 'UNITED KINGDOM', 'HA12RZ', '*442088639873', 3, 32.30, 'HV', 'GENTS UITS ', 0.00, '40', 'JD0002222740000828-J', '54', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211765', '9475599', 'INT', 0, '2010-06-21', 'SHORTY PALMER ', '', '786 GRAVES DELOZIER RD ', 'SEYMOUR ', 'SEYMOUR ', 'UNITED STATES ', '37865', '8659084227', 1, 12.70, 'LV', 'MARACAS ', 0.00, '13', 'JD0002285397000539', '89', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111932', 'INT', 0, '2010-06-21', 'BEDDING HOUSE BV', 'MR SHENG LAO', 'HEEREWEG 33A', '2161 AC', 'LISSE', 'NETHERLANDS', '2161', '31653401822', 1, 3.10, 'LV', 'QUILT COVER SETS', 1.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92111864', 'INT', 0, '2010-06-21', 'M/S ARGUEL SA', 'MICHEL ARGUEL / CHRISTINE', '273 RUE CHARLES NUNGESSER', '', 'MAUGIUO CEDEX', 'FRANCE', '34135', '33467200470', 2, 24.80, 'LV', 'COMFORTERS', 20.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111494', 'INT', 13, '2010-04-26', 'NIDA BAIG', '', '13402 HERITAGE WAY # 726', '', 'TUSTIN', 'UNITED STATES', 'CA-92782', '7142322242', 1, 6.00, 'L/V', 'LADY SUITS & UNSTICHED SUITS', 9.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111493', 'INT', 14, '2010-04-26', 'SAIRA JESSAHI', '', '225 FWOR DANIEL DR', 'APT # 1101', 'SUGARLAND', 'UNITED STATES', 'TX-77479', '8328183992', 1, 8.00, 'L/V', 'CLOTHING', 17.00, 'USD', '2', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111492', 'INT', 15, '2010-04-26', 'KARIM LAKHANI', '', '3210 SUGARLAND CLUB DR', '', 'DULUTH', 'UNITED STATES', 'GA-30097', '', 1, 7.50, 'L/V', 'LADY SUITS & PURSE', 13.00, 'USD', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111310', 'DBP', 16, '2010-04-26', 'MR. R. W. MILLS', '', '9 WOODVILLE ROHD HARBORNE', '', 'BIRMINGHAM', 'UNITED KINGDOM', 'B17 9AS', '1214275710', 4, 99.99, 'L/V', 'WOODEN BED FOR PERSONAL USE', 140.00, 'USD', '20 + 21 + 22 + 23', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111498', 'DBP', 17, '2010-04-26', 'MR. IMRAN', '', '133 WEST HENDON BROADWAY', 'HENDON', 'LONDON', 'UNITED KINGDOM', 'NW9 7DY', '7737966899', 3, 75.00, 'L/V', 'THREADS & RIBBONS', 24.30, 'USD', '7 + 8 + 9', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111491', 'DBP', 18, '2010-04-26', 'NASEEM AKHTER', '', '301-A LEEDS ROAD', 'WEST YORKSHIRE', 'BRADFORD ', 'UNITED KINGDOM', 'BD3 9JY', '7791009684', 2, 25.00, 'L/V', 'CLOTHING', 11.80, 'USD', '12', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '92111499', 'DBP', 19, '2010-04-26', 'RUBINA MALIK', '', '14TH AVIN DALE CRESENT ILLFORD', '', 'ESSEX', 'UNITED KINGDOM', 'IG1 5AB', '2082625230', 2, 21.00, 'L/V', 'CLOTHING', 21.70, 'USD', '3', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '921111000', 'INT', 2, '2010-06-29', 'ASDFA', 'asF', 'ASDASD', 'ASD', 'ASD', 'ASD', 'ASD', 'ASD', 1, 1.00, 'HV', '1', 1.00, '1', '1', '', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', 'ASDA32S1', 'INT', 3, '2010-06-29', 'ASDASDA', 'ASD', 'ASD', 'ASD', 'ASD', '1', 'ASD', '1', 1, 1.00, 'HV', '1', 1.00, '1', '1', '1', '1324', '', NULL, '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '1235', 'DBP', 1, '2010-07-02', 'qweqq', 'weqwe', 'qweq', 'qweqwe', 'qweqad', 'asdasd', 'sada', 'asdasd', 2, 2.00, 'LV', '2', 2.00, '2', '2', '2', '1324', '', 'asdasdf', 'aSAD', 'ASDASD', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '456321', 'INT', 2, '2010-07-02', 'abcd', 'edfuc', 'adsada', 'asdas', 'asdfs', 'dfssdf', 'sdfsd', 'sdfsdf', 5464, 99.99, 'LV', '4564', 6456.00, '6546', '45645', '56456', '1324', '', 'Imran Zaidi', '', NULL, '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '456987', 'R1', 3, '2010-07-02', 'sadfs', 'asdfasd', 'asdf', 'asdfas', 'sdfas', 'asdf', 'sadf', 'asdf', 123, 99.99, 'HV', '123', 123.00, '123', '123', '12312', '1324', '', 'Imran Zaidi', 'PECHS', 'KHI', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211656', 'INT', 3, '2010-04-26', 'MR ZAID TAHA', '', '3160 JAGUAR VALLEY DR', 'APT # 206 BUZZ NO 234', 'MISSISSAUGA', 'CANADA', 'ON L5A 2J5', '4168175613', 1, 23.00, 'HV', 'LADY TOPS & CLOTHING', 26.25, 'USD', '17', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211655', 'INT', 2, '2010-04-26', 'M ATIF AQEEL', '', '112 CORGE HENRY BLVD', 'UNIT # 60', 'TORONTO', 'CANADA', 'ON M2J 1E7', '6473467641', 2, 27.00, 'HV', 'CLOTHING ISLAMIC CD BOOK & PRESSURE COOKER', 27.00, 'USD', '18 + 19', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211654', 'INT', 1, '2010-04-26', 'GARRICK LOBERGER', '', '2101 KINGFISHER LN', '', 'GREENBAY', 'UNITED STATES', 'WI-54313', '7346200777', 1, 5.00, 'LV', 'SEAT COVERS', 30.00, 'USD', '19', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '4444444', 'INT', 2, '2010-07-05', 'asdasd', 'asdas', 'ASDASD', 'ASD', 'ASD', 'ASD', '1231', '123124', 12, 12.00, 'LV', 'asdasd', 12.00, 'USD', '12', 'wsdfasd', 'CASH', '', 'IZHAR', 'KARACHI, PAKISTAN', '', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '111111', 'INT', 1, '2010-07-05', 'WQRE', 'ASDF', 'ASDF', 'ASDF', 'asdf', 'asd', 'ads', 'jhjkk', 0, 0.00, 'LV', 'kljklklj', 0.00, 'klkljkl', '1+2+4+6+9', 'lkjlkjlj', '1235', '', 'IZHAR AHMED', 'ISB, PAKISTAN', '', '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211657', 'INT', 4, '2010-04-26', 'MR BILAL ASMAL', '', '9413 LAVERGNE AVE', '', 'SKOKIE', 'UNITED STATES', 'IL-60077', '8472936447', 1, 22.00, 'HV', 'CLOTHING', 27.00, 'USD', '16', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211658', 'INT', 5, '2010-04-26', 'M LAKHI', '', '1015 WEST ROSCOE', '', 'CHICAGO', 'UNITED STATES', 'IL-60657', '7732302021', 2, 46.00, 'HV', 'PRINTED MATERIAL', 27.00, 'USD', '14 + 15', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211659', 'INT', 6, '2010-04-26', 'DOULAT DELAWALA', '', '469 BELLBROOK LN', '', 'LAWRENCEVILLE', 'UNITED STATES', 'GA-30045', '7704420354', 1, 3.00, 'HV', 'BOOKS & CDS', 5.00, 'USD', '2', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211660', 'INT', 7, '2010-04-26', 'DISTRIBUIDORA DE COLCHAS VENADO S A DECV', 'MR. ENRIQUE MALDONADO', 'SAN ANTONIO TOMARIAN 25 COL CENTRO', '', 'MEXICO CITY', 'MEXICO', 'CP-06020', '12014245667', 1, 5.00, 'HV', 'FABRIC SAMPLE', 2.40, 'USD', '2', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211661', 'INT', 8, '2010-04-26', 'WERTER WEEL', '', 'SANDER GROOT ZUIDERZEESTRAAT WE4213', '', 'OLDERROCK', 'NETHERLANDS', 'BJ-8096', '384225905', 1, 6.00, 'LV', 'COTTON ROLL', 6.00, 'USD', '1', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211662', 'INT', 9, '2010-04-26', 'MR SYED BUKHARI', '', '15 UPPER ROAD MIDDLETOWN', '', 'NEW YORK', 'UNITED STATES', 'NY-10940', '3002453633', 1, 22.00, 'LV', 'CLOTHING SHOW PIECES', 27.00, 'USD', '13', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211663', 'INT', 10, '2010-04-26', 'NASEEM SHAUKAT', '', '14231 FM 1464 RD', 'APT # 3308', 'SUGARLAND', 'UNITED STATES', 'TX-77498', '2814915950', 2, 36.00, 'LV', 'CLOTHING', 24.30, 'USD', '10 + 11', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211664', 'INT', 11, '2010-04-26', 'TOFIQUE COFFEE SHOP', 'AWAIL FARAH', '912 E 24TH STR SUITE 131', '', 'MINNEAPOLIS', 'UNITED STATES', 'MN-55404', '9.72E+09', 2, 38.00, 'LV', 'CLOTHING', 25.70, 'USD', '5 + 6', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211665', 'INT', 12, '2010-04-26', 'TOFIQUE COFFEE SHOP', 'AWAIL FARAH', '912 E 24TH STR SUITE B 131', '', 'MINNEAPOLIS', 'UNITED STATES', 'MN-55404', '9.72E+09', 1, 21.00, 'LV', 'CLOTHING', 26.70, 'USD', '4', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211666', 'INT', 13, '2010-04-26', 'NIDA BAIG', '', '13402 HERITAGE WAY # 726', '', 'TUSTIN', 'UNITED STATES', 'CA-92782', '7142322242', 1, 6.00, 'LV', 'LADY SUITS & UNSTICHED SUITS', 9.00, 'USD', '1', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211667', 'INT', 14, '2010-04-26', 'SAIRA JESSAHI', '', '225 FWOR DANIEL DR', 'APT # 1101', 'SUGARLAND', 'UNITED STATES', 'TX-77479', '8328183992', 1, 8.00, 'LV', 'CLOTHING', 17.00, 'USD', '2', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211668', 'INT', 15, '2010-04-26', 'KARIM LAKHANI', '', '3210 SUGARLAND CLUB DR', '', 'DULUTH', 'UNITED STATES', 'GA-30097', '', 1, 7.50, 'LV', 'LADY SUITS & PURSE', 13.00, 'USD', '1', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211669', 'DBP', 16, '2010-04-26', 'MR. R. W. MILLS', '', '9 WOODVILLE ROHD HARBORNE', '', 'BIRMINGHAM', 'UNITED KINGDOM', 'B17 9AS', '1214275710', 4, 99.99, 'LV', 'WOODEN BED FOR PERSONAL USE', 140.00, 'USD', '20 + 21 + 22 + 23', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211670', 'DBP', 17, '2010-04-26', 'MR. IMRAN', '', '133 WEST HENDON BROADWAY', 'HENDON', 'LONDON', 'UNITED KINGDOM', 'NW9 7DY', '7737966899', 3, 75.00, 'LV', 'THREADS & RIBBONS', 24.30, 'USD', '7 + 8 + 9', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211671', 'DBP', 18, '2010-04-26', 'NASEEM AKHTER', '', '301-A LEEDS ROAD', 'WEST YORKSHIRE', 'BRADFORD ', 'UNITED KINGDOM', 'BD3 9JY', '7791009684', 2, 25.00, 'LV', 'CLOTHING', 11.80, 'USD', '12', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211672', 'DBP', 19, '2010-04-26', 'RUBINA MALIK', '', '14TH AVIN DALE CRESENT ILLFORD', '', 'ESSEX', 'UNITED KINGDOM', 'IG1 5AB', '2082625230', 2, 21.00, 'LV', 'CLOTHING', 21.70, 'USD', '3', '', '', '', NULL, '', NULL, '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '9211110000', 'INT', 1, '2010-07-07', 'GLS LOGISTICS. SIN', 'HAMMAD', '1 CHANGI SOUTH ST', '', 'SG', 'SINGAPORE', 'SG', '', 1, 1.00, 'LV', '1', 1.00, '1', '1', '', '01', '', 'XFXDFG', 'CFTGCF', 'CFGTCFTGCFT', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '963852741', 'INT', 2, '2010-07-07', 'asd', 'asdfasd', 'ASDASD', 'asd', 'asdasd', 'asdasd', '12312', 'q123412', 1, 1.00, 'HV', 'wsad', 1.00, 'asdasd', '1', 'asdasda', '01', '', 'AJAZ', 'ISB', 'PK', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '44444444', 'INT', 3, '2010-07-07', 'asda', 'asdaasd', 'sdfs', 'asdas', 'asdas', 'asdas', '34242', '23412', 2, 2.00, 'LV', 'dfasf', 1.00, '1', '2', 'sdfasf', '01', '', 'Cash', 'Karachi', 'Pakistan', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '852963', 'INT', 2, '2010-07-07', 'qweq', 'qweqw', 'qweqqwe', 'qweq', 'qweqad', 'qweq', 'qweqw', 'qwe', 1, 1.00, 'LV', '1', 1.00, '1', '1', 'asdas', '01', '', 'John', 'Ranchhor Line', 'Karachi, Pakistan', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('786385', '951', 'INT', 3, '2010-07-07', 'sadas', 'asdas', 'asd', 'asd', 'asdas', 'asdas', '123', '12312', 2, 2.00, 'LV', 'asda', 2.00, 'usd', '2', 'asdasd', '01', '', 'Cash', 'sdasd', 'asdas', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', 'r5456456', 'INT', 1, '2010-12-07', 'qweqq', 'ZAFER KHAN', 'zsdf', 'ASDF', 'GREENBAY', 'CANADA', '19401', '', 2, 12.00, 'HV', 'shoes', 25.00, 'USD', '3', 'COD', '1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'KARACHI, PAKISTAN', '', '', NULL, '', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '3445', '', 1, '2011-01-25', '', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', 'r35345', '', 1, '2011-01-25', '', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '3345345', '', 2, '2011-01-25', '', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '324234', 'INT', 2, '2011-01-25', 'czczx', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '446544546', 'INT', 3, '2011-01-25', '', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '2432423', 'DBP', 1, '2011-01-26', '', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '24324', 'DBP', 2, '2011-01-26', 'ASDASDA', '', '', '', '', '', '', '', 0, 0.00, '', '', 0.00, '', '', '', '123456789', '', 'asdasdf', 'sdfsd', 'fsdfsdf', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', 'abc', 'DBP', 3, '2011-01-26', 'dasdas', '', 'asdasd', '', 'asdasasdas', 'asdas', '44354665', '', 1, 99.99, 'LV', '', 21312.00, '11212', '1211212', '', '123456789', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', 'jhhlijh', '', 4, '2011-01-26', '', '', 'asdasd', '', '', '', '44354665', '', 1, 0.00, 'LV', '', 1231231.00, '11212', '1211212', '', '123456789', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '12312655', 'INT', 5, '2011-01-26', 'dfds', '', 'asdasd', '', 'sdfsd', 'sdfds', '44354665', '', 1, 0.00, 'LV', '', 1231231.00, '11212', '1211212', '', '123456789', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '12345678', 'INT', 6, '2011-01-26', 'asfds', '', 'asdasd', '', 'dadads', 'sdfdsfdsfds', '44354665', 'adfdsf', 2, 99.99, 'LV', '', 1231231.00, '11212', '2', '', '123456789', '', '', '', '', '', '', NULL, '', '', 'SIN', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '23692489', 'INT', 1, '2011-01-27', 'ABC', '', 'PECHS', '', 'KHI', 'PAKISTAN', '75100', '12345678', 2, 5.00, 'LV', '', 10.00, 'USD', '3', 'N/A', '1324', '', 'Anonymous', 'XYZ', 'ISB. Pak', '', '', NULL, '', '', 'LHR', 2, 4, 8, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '18765432', 'INT', 2, '2011-01-27', 'ASDF', '', 'LKJH', '', 'NY', 'USA', '89654', '654987', 2, 20.00, 'LV', '', 10.00, 'USD', '3', 'No Notes', '1324', '', 'ABCD', 'CDA', 'ISB PAK', '', '', NULL, '', '', 'LHR', 2, 4, 6, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '19876543', 'INT', 3, '2011-01-27', 'dgh', 'hjhjgk', 'jjhkjh', 'jhhlk', 'kjlkj', 'jkklj', 'klkkjklkj', '64535', 1, 1.00, 'LV', '', 0.00, 'none', '1', 'none', '1324', '', 'Imran Aslam', 'SHAHRAH E FAISAL', 'PECHS', 'ISB', 'PAKISTAN', '56000', '05134568', '', 'LHR', 1, 1, 1, 0, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '55555555', 'INT', 4, '2011-01-27', 'Microsoft', 'Bill Gates', 'Silicon Valley', 'CA', 'LV', 'USA', '12345678', '+1111111', 1, 2.00, 'LV', 'Nothing', 10.00, 'USD', '2', 'Nothing', '1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'PECHS', 'KHI', 'PAK', '75100', '4311566', '', 'LHR', 3, 5, 6, 24, 8, 0, 4);
INSERT INTO `parcel` VALUES('9211788', '33333333', 'INT', 1, '2011-01-28', 'abc', 'abc', 'abc', '', 'aba', 'aba', 'aba', '', 1, 1.00, 'LV', '', 1.00, 'usd', '1', '', '1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'PECHS', 'KHI', 'PAK', '75100', '4311566', '', 'LHR', 1, 1, 1, 1, 1, 0, 1);
INSERT INTO `parcel` VALUES('9211788', '33333332', 'INT', 2, '2011-01-28', 'asa', '', 'abc', '', 'aass', 'asas', 'aba', '', 1, 1.00, 'LV', '', 1.00, 'usd', '1', '', '1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'PECHS', 'KHI', 'PAK', '75100', '4311566', '', 'LHR', 1, 1, 1, 1, 1, 0, 1);
INSERT INTO `parcel` VALUES('9211788', '33333331', 'INT', 3, '2011-01-28', 'asdasasdasd', '', 'asas', '', 'asdasd', 'asdasd', 'asas', '', 1, 1.00, 'LV', '', 1.00, '1', '1', '', '1324', '', '', '', '', '', '', '', '', '', 'LHR', 1, 1, 1, 1, 1, 0, 1);
INSERT INTO `parcel` VALUES('9211788', '33333330', 'INT', 4, '2011-01-28', 'asa', 'daa', 'adasd', '', '', '', '', '', 3, 3.00, 'LV', '', 3.00, 'ed', '3', '303', '1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'PECHS', 'KHI', 'PAK', '75100', '4311566', '', 'LHR', 1, 1, 1, 12, 12, 0, 12);
INSERT INTO `parcel` VALUES('9211788', '22222222', 'INT', 1, '2011-02-01', 'frwsf', 'werwe', 'adsdasd', 'sdasds', 'wreewr', 'werewr', 'asdasd', '4465', 1, 1.00, 'LV', 'fwdsfs', 1.00, '1', '1', 'dfdsfas', '1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'PECHS', 'KHI', 'PAK', '75100', '4311566', '2365479987', 'SIN', 1, 1, 1, 1, 1, 0, 1);
INSERT INTO `parcel` VALUES('9211788', '92119028', 'DBP', 1, '2011-02-07', 'hgdtjhn', 'dtyjtyjhn', 'tyjteee', 'tyjtjyj', '', '', '', '', 6, 6.00, 'HV', '7', 7.00, '7', '6', 'trjeytjt', '1324', 'fhtrh', 'rhreh', 'regtherth', 'shgrrbh', 'etyyyynjhnd', 'kjhiljl', '66565', '656353', '63565', 'LHR', 7, 7, 7, 7, 7, 7, 7);
INSERT INTO `parcel` VALUES('9211788', '92119029', 'DBP', 1, '2011-02-07', 'adfads', 'dfdsfs', 'dfsdfds', 'hjgkg', 'kjhkhjk', 'hlkljk', 'gkgkjhkj', '678978', 7, 7.00, 'LV', 'khlhlkj', 7.00, '7', 'jkhhkj', '7', '123454354', 'ABCD', 'sdfdas', 'asdas', 'sdadss', '`asdasd', 'adsasd', 'asd2323as', '3235265', '', 'KHZ', 7, 7, 7, 8, 9, 7, 6);
INSERT INTO `parcel` VALUES('9211788', '90000101', 'INT', 1, '2011-02-08', 'Trans Pak Express', 'Malik Afzal', 'S-M11 ', '', '', '', '', '', 1, 5.00, 'LV', 'Gift Items', 4.00, 'usd', '', '01 ', 'CASH', 'Trans Pak Express', 'Malik Mubarak Hassan', 'F-86', '', 'Karachi', 'Pakistan', '75500', '03004787977', '42201-0987574-3', 'LHR', 1, 1, 1, 4000, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92119030', 'DBP', 2, '2011-02-08', 'Trans pak Express', 'Shafqat', 'Suite # SM-11 Al Kamran Centre Block 6 P E C H S Karachi', '', 'Karachi', 'Pakistan', '745', '34371450', 1, 3.50, 'LV', 'Ladies Suit', 1.00, 'pkr', '', '0', 'CASH', 'TCS', '', 'KARACHI, PAKISTAN', '', 'Karachi', '', '', '03002121213', '', 'LHR', 1, 1, 1, 120, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92119031', 'INT', 1, '2011-02-08', 'TRANS PAK', 'RONALD ALFERED', 'SHUITE # SM-11 NAZIMABAD # 3 GOLE MARKET NEAR BILAL MASJID KARACHI', '', 'KARACHI', 'PAKISTAN', '4587', '02134305260', 1, 4.50, 'LV', 'LADIES SUIT', 0.00, 'DOLLAR', '', '5', 'CASH', 'TCS', 'DANIYAL AHMED', 'KARACHI, PAKISTAN', 'HOUSE # 12/18 NAZIMAD 3', 'KARACHI', 'PAKISTAN', '455', '02134324578', '', 'DHL', 25, 24, 23, 4500, 0, 0, 0);
INSERT INTO `parcel` VALUES('9211788', '92119032', 'INT', 1, '2011-02-10', 'TPXPRESS', 'ABCD', 'ABCD', 'ABCD', '', '', '', '', 2, 76.00, 'LV', 'dfdxdg', 34.00, 'USD', 'gjhghjg', '6', '123454354', 'GLS', 'sdfdas', 'asdas', 'sdadss', '`asdasd', 'adsasd', 'asd2323as', '3235265', '7867886', 'LHR', 1, 1, 1, 2, 6, 6, 7);
INSERT INTO `parcel` VALUES('9211788', '92119033', 'INT', 2, '2011-02-10', 'asdfds', 'dfsd', 'sdfdsd', 'dfdsd', 'sdfsd', 'sdfddsf', 'dfsdf', '78979878', 2, 6.00, 'LV', 'ggjkgjk', 6.00, 'hjghjg', 'hggjgjh', '6', '123454354', 'dsfdsf', 'sdfdas', 'asdas', 'sdadss', '`asdasd', 'adsasd', 'asd2323as', '3235265', '34534', 'LHR', 1, 1, 1, 7, 6, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sender_acc`
--

CREATE TABLE `sender_acc` (
  `account` varchar(20) NOT NULL,
  `s_company` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `s_address1` varchar(100) NOT NULL,
  `s_address2` varchar(100) DEFAULT NULL,
  `s_city` varchar(20) NOT NULL,
  `s_country` varchar(50) NOT NULL,
  `s_pc` varchar(10) NOT NULL,
  `s_tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gst_no` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender_acc`
--

INSERT INTO `sender_acc` VALUES('35464567', '', 'asdasdf', 'sdfsd', 'fsdfsdf', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('123456789', '', 'asdasdf', 'sdfsd', 'fsdfsdf', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('01', '', 'Cash', 'Karachi', 'Pakistan', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('CASH', '', '', 'KARACHI, PAKISTAN', '', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('786110', '', 'Faaz', 'SHL', 'KHI', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('1324', '', 'Imran Zaidi', 'PECHS, SHAHRAH E FAISAL', 'PECHS', 'KHI', 'PAK', '75100', '4311566', '123-321');
INSERT INTO `sender_acc` VALUES('qwe', '', 'sdasd', 'asdasd', 'asdas', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('', '', '', '', '', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('5', '', '', '', '', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('4', '', 'wrfawe', 'sdfgsfgsdf', 'dsfgdfg', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('3', '', '', '', '', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('2', '', '', '', '', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('123', '', '', '', '', '', '', '', '', '');
INSERT INTO `sender_acc` VALUES('123456', '', 'YoYo', 'Young You', 'Ya', '', '', '', '321654', '123-123-123');
INSERT INTO `sender_acc` VALUES('123454354', '', 'sdfdas', 'asdas', 'sdadss', '`asdasd', 'adsasd', 'asd2323as', '3235265', '23232-6553');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `hawb` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_time` timestamp NULL DEFAULT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `location` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` VALUES('2342359', '2010-06-14 08:27:49', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('2342359', '2010-06-14 14:26:42', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('3123123', '2010-06-18 07:31:37', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('2342', '2010-06-18 09:14:11', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('345655434', '2010-06-18 09:45:17', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('123456789', '2010-06-18 09:46:43', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('786110', '2010-06-18 09:49:38', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('45011', '2010-06-18 09:52:49', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('12345678', '2010-06-18 09:57:23', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('34234', '2010-06-18 11:50:01', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('342342', '2010-06-18 11:50:46', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('3423423', '2010-06-18 11:51:02', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('34234239', '2010-06-18 11:51:40', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('1', '2010-06-18 11:52:59', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('12', '2010-06-18 11:53:12', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('123', '2010-06-18 11:53:28', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('1234', '2010-06-18 11:53:54', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('12345', '2010-06-18 11:55:06', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('1239', '2010-06-18 12:44:49', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('988', '2010-06-18 12:48:45', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('234', '2010-06-18 13:06:10', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('345', '2010-06-18 13:06:35', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('3456', '2010-06-18 13:09:29', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('56', '2010-06-18 13:21:42', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('123', '2010-06-18 13:24:39', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('2', '2010-06-18 13:25:26', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('3', '2010-06-18 13:25:31', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('4', '2010-06-18 13:25:36', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('35464567', '2010-06-18 14:11:24', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('234234', '2010-06-18 14:11:57', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('354645675', '2010-06-18 14:12:58', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('4501163', '2010-06-19 09:31:10', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92116891', '2010-06-25 10:05:17', 'ACHMED CHEAR', 'BERLIN');
INSERT INTO `tracking` VALUES('92116884', '2010-06-25 10:05:17', 'ZAINAB KALFAN', 'STAFFORD');
INSERT INTO `tracking` VALUES('92111587', '2010-06-25 10:05:17', 'SYED IMRAN AHMED', 'PISCATAWAY');
INSERT INTO `tracking` VALUES('92116882', '2010-06-25 10:05:17', 'M MUNAWAR SHAH', 'FRANKFURT AM-MAIN');
INSERT INTO `tracking` VALUES('92116885', '2010-06-25 10:05:17', 'NASREEN CHAUHAN', 'ALBERTS LUND');
INSERT INTO `tracking` VALUES('92116881', '2010-06-25 10:05:17', 'OCI OSTFOFF & COROLLA INC', 'DOLLARD DES ORMEAUX');
INSERT INTO `tracking` VALUES('92116879', '2010-06-25 10:05:17', 'MR FAISAL KHAN', 'Rochdale');
INSERT INTO `tracking` VALUES('92116897', '2010-06-25 10:05:17', 'KASHIF REHMAN MEMON', 'SANTA CLARA');
INSERT INTO `tracking` VALUES('92116883', '2010-06-25 10:05:17', 'SALMA AHMED', 'VANCOUVER');
INSERT INTO `tracking` VALUES('786005572', '2010-06-25 10:05:17', 'MR M SIDDIQ NAZ ', 'LONDON ');
INSERT INTO `tracking` VALUES('9475599', '2010-06-25 10:05:17', 'SHORTY PALMER ', 'SEYMOUR ');
INSERT INTO `tracking` VALUES('92111932', '2010-06-25 10:05:17', 'BEDDING HOUSE BV', 'LISSE');
INSERT INTO `tracking` VALUES('92111864', '2010-06-25 10:05:17', 'M/S ARGUEL SA', 'MAUGIUO CEDEX');
INSERT INTO `tracking` VALUES('92116623', '2010-06-25 10:05:17', 'JOHN WELLER AND ASSOCIATES', 'BYRON BAY');
INSERT INTO `tracking` VALUES('92111137', '2010-06-25 10:05:17', 'NADEEM SIDDIQUE', 'MISSISSAUGA');
INSERT INTO `tracking` VALUES('92116899', '2010-06-25 10:05:17', 'LUBNA DANIYAL', 'TORONTO');
INSERT INTO `tracking` VALUES('92116896', '2010-06-25 10:05:17', 'ADNAN NAFASAT', 'Wood Dale');
INSERT INTO `tracking` VALUES('92116900', '2010-06-25 10:05:17', 'NIDA KOMAL', 'Grand Prairie');
INSERT INTO `tracking` VALUES('92116887', '2010-06-25 10:05:17', 'NAEEM SAROSH', 'Milwaukee');
INSERT INTO `tracking` VALUES('92116888', '2010-06-25 10:05:17', 'NAZLI HUSSAIN', 'Lombard');
INSERT INTO `tracking` VALUES('92115002', '2010-06-25 10:05:17', 'SABA GAUHAR', 'Anaheim');
INSERT INTO `tracking` VALUES('92116898', '2010-06-25 10:05:17', 'Hanif Jamal', 'Garland');
INSERT INTO `tracking` VALUES('92116936', '2010-06-25 10:05:17', 'Pashmine Abid', 'Westbury');
INSERT INTO `tracking` VALUES('92116938', '2010-06-25 10:05:17', 'Huma Sayeed', 'Owings Mills');
INSERT INTO `tracking` VALUES('92116937', '2010-06-25 10:05:17', 'Marina Yusuf', 'Oslo');
INSERT INTO `tracking` VALUES('92111559', '2010-06-25 10:05:17', 'Raman Joshi', 'Brampton');
INSERT INTO `tracking` VALUES('92111562', '2010-06-25 10:05:17', 'Allen Oaks', 'Oakdale');
INSERT INTO `tracking` VALUES('92116939', '2010-06-25 10:05:17', 'Afshan Iftikhar', 'Houston');
INSERT INTO `tracking` VALUES('92116679', '2010-06-25 10:05:17', 'Faisal Mota', 'Endwell');
INSERT INTO `tracking` VALUES('92111561', '2010-06-25 10:05:17', 'Cedar Hill Eementary', 'Lawrenceville');
INSERT INTO `tracking` VALUES('92116901', '2010-06-25 10:05:17', 'Yasmin Atiariya', 'Blackburn');
INSERT INTO `tracking` VALUES('92111554', '2010-06-25 10:05:17', 'Nina Rogers', 'Fort Lauderdale');
INSERT INTO `tracking` VALUES('92111560', '2010-06-25 10:05:17', 'Penghsa Tan', 'Toronto');
INSERT INTO `tracking` VALUES('92116905', '2010-06-25 10:05:17', 'Mahnaz Khan', 'Plainfield');
INSERT INTO `tracking` VALUES('92111556', '2010-06-25 10:05:17', 'KImberly Straube', 'Pinellas Park');
INSERT INTO `tracking` VALUES('92111555', '2010-06-25 10:05:17', 'Gerald Birkeibach ', 'Norristown');
INSERT INTO `tracking` VALUES('92111558', '2010-06-25 10:05:17', 'Julia Siroi John', 'South Daytona');
INSERT INTO `tracking` VALUES('92116903', '2010-06-25 10:05:17', 'Mr Sohail Ahmad', 'Milton');
INSERT INTO `tracking` VALUES('92111415', '2010-06-25 10:05:17', 'City University School', 'LONDON');
INSERT INTO `tracking` VALUES('12312', '2010-06-26 08:57:52', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('9233685', '2010-06-28 10:14:58', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('', '2010-06-28 10:51:15', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('7988797', '2010-06-28 11:07:37', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('79887974', '2010-06-28 11:11:33', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('79887', '2010-06-28 11:21:17', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('12345', '2010-06-28 12:23:50', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('1212332', '2010-06-29 08:28:42', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('921111000', '2010-06-29 09:52:04', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('ASDA32S1', '2010-06-29 09:53:09', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('1235', '2010-07-02 06:44:18', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('456321', '2010-07-02 06:47:05', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('456987', '2010-07-02 06:56:24', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('888888', '2010-07-03 09:20:55', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('111111111', '2010-07-03 09:24:01', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('7777777', '2010-07-03 09:45:09', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('6666', '2010-07-03 11:15:45', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('123123', '2010-07-03 12:15:25', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('23423', '2010-07-03 12:16:55', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('111111', '2010-07-05 07:02:28', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('4444444', '2010-07-05 07:20:52', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('9211110000', '2010-07-07 10:02:11', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('963852741', '2010-07-07 10:15:30', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('44444444', '2010-07-07 10:20:39', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('852963', '2010-07-07 10:27:51', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('951', '2010-07-07 12:09:25', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('r5456456', '2010-12-07 23:48:59', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('3445', '2011-01-25 14:15:13', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('r35345', '2011-01-25 15:26:29', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('3345345', '2011-01-25 15:34:35', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('324234', '2011-01-25 16:27:52', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('446544546', '2011-01-25 16:31:55', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('2432423', '2011-01-26 07:59:26', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('24324', '2011-01-26 08:05:04', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('abc', '2011-01-26 08:48:44', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('jhhlijh', '2011-01-26 09:10:16', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('12312655', '2011-01-26 09:26:19', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('12345678', '2011-01-26 10:29:18', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('23692489', '2011-01-27 09:33:08', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('18765432', '2011-01-27 09:37:53', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('19876543', '2011-01-27 10:21:06', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('55555555', '2011-01-27 14:53:27', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333333', '2011-01-28 12:31:01', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333332', '2011-01-28 12:32:58', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333331', '2011-01-28 12:36:39', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 12:48:36', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 12:51:20', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 12:52:24', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:00:51', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:01:57', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:12:14', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:16:51', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:17:56', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:23:42', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:24:32', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:27:55', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:29:26', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:30:55', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('33333330', '2011-01-28 13:33:23', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('22222222', '2011-02-01 12:25:29', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92111558', '2011-02-02 10:50:47', 'New status', 'Updated by form');
INSERT INTO `tracking` VALUES('92111558', '2011-02-02 10:53:56', 'New status 2', 'Updated by form again');
INSERT INTO `tracking` VALUES('92119028', '2011-02-07 09:10:02', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92119028', '2011-02-07 10:50:27', 'This is GMT status update', 'here');
INSERT INTO `tracking` VALUES('92119028', '2011-02-07 15:53:20', 'This is Khi status update', 'here');
INSERT INTO `tracking` VALUES('92119029', '2011-02-07 20:41:53', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92111558', '2011-02-07 20:58:53', 'News Status Now', 'Same');
INSERT INTO `tracking` VALUES('90000101', '2011-02-08 00:29:35', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('90000101', '2011-02-08 00:32:03', 'Arived at faciualty', 'Karachi-Pakistan');
INSERT INTO `tracking` VALUES('90000101', '2011-02-08 00:33:19', 'Delivered to Malik Afzal', 'Karachi-Pakistan');
INSERT INTO `tracking` VALUES('92119030', '2011-02-08 12:34:35', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92119031', '2011-02-08 13:07:12', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92119032', '2011-02-10 19:45:22', 'Shipment picked up', 'Karachi');
INSERT INTO `tracking` VALUES('92119033', '2011-02-10 20:10:16', 'Shipment picked up', 'Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `acc_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(2, 'user1', '84e0991a380d2a451e9a7787e56e2b53', 'client', '9211', 'User1', 'GLS');
INSERT INTO `user` VALUES(3, 'faaziqbal', '84e0991a380d2a451e9a7787e56e2b', 'admin', '123456', 'Faaz Iqbal', 'GLS PK');
INSERT INTO `user` VALUES(5, 'faaz', '84e0991a380d2a451e9a7787e56e2b53', 'admin', '786110', 'Faaz Iqbal', 'gls');
