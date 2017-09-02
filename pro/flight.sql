-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 12:48 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight2`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

DROP TABLE IF EXISTS `airplane`;
CREATE TABLE IF NOT EXISTS `airplane` (
  `Airplane_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Airplane_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`Airplane_ID`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

DROP TABLE IF EXISTS `airport`;
CREATE TABLE IF NOT EXISTS `airport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(3) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `Name`, `Code`, `City`, `Country`) VALUES
(8, 'Minna Airport', 'IVO', 'Minna', 'Azerbaijan'),
(10, 'Calestano Airport', 'OZG', 'Calestano', 'Aruba'),
(11, 'Joondalup Airport', 'UZN', 'Joondalup', 'Tonga'),
(12, 'Arcu Morbi Institute', 'UYI', 'Paglieta', 'Djibouti'),
(14, 'Magnis Dis Limited', 'ITE', 'Lincoln', 'Falkland Islands'),
(15, 'Est Corporation', 'FNO', 'Hexham', 'Tokelau'),
(16, 'Velit In Consulting', 'QUY', 'Salt Lake City', 'Niue'),
(17, 'Pellentesque Company', 'VFM', 'Bosa', 'British Indian Ocean Territory'),
(18, 'Elit Curabitur Sed Institute', 'NXY', 'Glovertown', 'Suriname'),
(19, 'Ipsum Leo Foundation', 'TCN', 'Kimberly', 'Anguilla'),
(20, 'Morbi Metus Vivamus PC', 'FHF', 'Giurdignano', 'Canada'),
(21, 'Nunc Mauris Institute', 'IKI', 'Cisnes', 'American Samoa'),
(22, 'Turpis Aliquam Adipiscing Consulting', 'GMA', 'Xhoris', 'Iraq'),
(23, 'Eu Ultrices Sit Corp.', 'WEV', 'Guna', 'Indonesia'),
(24, 'Facilisis Non Foundation', 'HKP', 'Tulita', 'Moldova'),
(25, 'Convallis In PC', 'XXR', 'Ahmadnagar', 'Greenland'),
(26, 'Ante Dictum Mi Corporation', 'TGT', 'Tiarno di Sopra', 'Seychelles'),
(27, 'In Incorporated', 'UIT', 'Montoggio', 'French Polynesia'),
(28, 'Neque Venenatis Lacus Industries', 'YXZ', 'Springfield', 'Cyprus'),
(29, 'Augue Consulting', 'VID', 'Hudiksvall', 'French Polynesia'),
(30, 'Nam Ac Company', 'DUR', 'Olsztyn', 'Belarus'),
(32, 'Lectus Pede Foundation', 'LMA', 'Sikar', 'Moldova'),
(33, 'Eu Accumsan LLC', 'IGI', 'Quimper', 'Virgin Islands, United States'),
(34, 'Allerona Airport', 'OEX', 'Allerona', 'Montserrat'),
(35, 'Gravida Mauris Associates', 'CVZ', 'Orilla', 'Brunei'),
(36, 'At Nisi Cum Company', 'WZB', 'Stewart', 'Bulgaria'),
(37, 'Tellus LLP', 'VJS', 'Flin Flon', 'Guinea-Bissau'),
(38, 'Adipiscing Non Limited', 'XPR', 'Pero', 'Virgin Islands, United States'),
(39, 'Curabitur Ut PC', 'FIA', 'Windsor', 'United States Minor Outlying Islands'),
(40, 'Mauris Company', 'BMV', 'Heusden', 'Togo'),
(41, 'Aenean Associates', 'YBH', 'Heusden', 'Sierra Leone'),
(42, 'Faucibus Leo In Foundation', 'GRO', 'Contagem', 'Slovenia'),
(43, 'Mauris Elit Dictum Associates', 'CXB', 'Hamilton', 'Ethiopia'),
(45, 'A Malesuada Foundation', 'NKU', 'Olivola', 'Togo'),
(46, 'Nullam Ut Nisi Incorporated', 'LMD', 'Fresno', 'Papua New Guinea'),
(47, 'In Tincidunt Corp.', 'DFN', 'Juneau', 'Switzerland'),
(48, 'Nec Metus Facilisis Corp.', 'AKS', 'Villa Faraldi', 'Western Sahara'),
(49, 'Tellus Corp.', 'QGY', 'Ceranesi', 'Brunei'),
(50, 'Eu Incorporated', 'AGX', 'Denderbelle', 'Ireland'),
(51, 'A Company', 'YNF', 'Lang', 'Tokelau'),
(52, 'Ullamcorper Nisl Arcu Incorporated', 'FIN', 'Oliver', 'Northern Mariana Islands'),
(53, 'Condimentum Donec At Ltd', 'NDE', 'Vanderhoof', 'United Arab Emirates'),
(54, 'Erat Vivamus PC', 'OZJ', 'Limbach-Oberfrohna', 'Bolivia'),
(55, 'In Corp.', 'YFV', 'Tongrinne', 'Turkmenistan'),
(56, 'Nullam Vitae Diam Company', 'ITX', 'Hagen', 'Lithuania'),
(57, 'Diam At Pretium Associates', 'TCF', 'Cittanova', 'Jersey'),
(58, 'Sed Libero Corporation', 'VEB', 'Rossignol', 'Suriname'),
(59, 'Cum Sociis PC', 'WZR', 'Adelaide', 'Maldives'),
(60, 'Dolor Donec Fringilla Company', 'YLM', 'Ruoti', 'Iceland'),
(61, 'Eu Ultrices Industries', 'KHX', 'Sesto al Reghena', 'Pakistan'),
(62, 'Quisque Corp.', 'QHP', 'Chantemelle', 'Sweden'),
(63, 'Eu Eros PC', 'BNP', 'Voitsberg', 'Reunion'),
(64, 'Ut Tincidunt Orci Industries', 'EAJ', 'Calle Larga', 'Qatar'),
(65, 'Pede Ltd', 'MMP', 'Midway', 'Spain'),
(66, 'Sed Id Inc.', 'FZV', 'Saint-Servais', 'Gabon'),
(67, 'Diam Vel Arcu LLP', 'DRJ', 'Satna', 'Spain'),
(68, 'Fringilla Mi Lacinia LLC', 'DLO', 'Avelgem', 'Spain'),
(69, 'Tristique Pharetra Quisque Corp.', 'ZGT', 'Montbliart', 'Marshall Islands'),
(70, 'Donec Limited', 'PBQ', 'Carterton', 'Guyana'),
(71, 'Duis Ltd', 'QVS', 'Berlin', 'South Sudan'),
(72, 'Sed Congue PC', 'SJW', 'Frankfort', 'Guatemala'),
(73, 'Faucibus Incorporated', 'EUK', 'Córdoba', 'United Kingdom (Great Britain)'),
(74, 'Nulla Semper Institute', 'TSG', 'San Donato di Ninea', 'Uzbekistan'),
(75, 'Rhoncus Proin Nisl Limited', 'KHN', 'Bremen', 'Saint Barthélemy'),
(76, 'Cras Sed Institute', 'TKB', 'Serrata', 'Virgin Islands, British'),
(77, 'Eros Turpis Ltd', 'GCR', 'Midway', 'Ghana'),
(78, 'Suspendisse Non Leo Institute', 'RSQ', 'Stratford', 'San Marino'),
(79, 'Magna Phasellus Dolor Company', 'BLU', 'BiercŽe', 'El Salvador'),
(80, 'Ultricies Limited', 'QWF', 'Massarosa', 'Germany'),
(81, 'Libero Et Company', 'LLP', 'Northumberland', 'Ethiopia'),
(82, 'Nec Tellus Nunc Corp.', 'ELB', 'Bacabal', 'Greece'),
(83, 'Proin Nisl PC', 'MHO', 'Bacabal', 'Mexico'),
(84, 'Mollis Consulting', 'JPO', 'Cicagna', 'Singapore'),
(85, 'Eu Metus Corporation', 'GDY', 'Stranraer', 'Belarus'),
(86, 'Eu Ultrices Sit Inc.', 'GRK', 'Piegaro', 'Sri Lanka'),
(87, 'A PC', 'AYJ', 'Worcester', 'Suriname'),
(88, 'Imperdiet Ornare Company', 'GXU', 'Flint', 'Armenia'),
(89, 'Interdum Curabitur Ltd', 'AJG', 'San Jose', 'Egypt'),
(90, 'Ullamcorper Duis Cursus Associates', 'OVW', 'Rodengo/Rodeneck', 'Isle of Man'),
(91, 'Molestie In Ltd', 'CUQ', 'Castel Maggiore', 'Mozambique'),
(92, 'Accumsan Limited', 'IGO', 'Cerchio', 'Swaziland'),
(93, 'Tempus Scelerisque Lorem Company', 'ODR', 'Tezze sul Brenta', 'Paraguay'),
(94, 'Ac Facilisis Facilisis Corporation', 'NYM', 'Iowa City', 'French Guiana'),
(95, 'Dis Company', 'ZIP', 'Avadi', 'Isle of Man'),
(96, 'Vitae Erat Corp.', 'TXO', 'Langholm', 'Philippines'),
(97, 'Lorem Ipsum Industries', 'ZNH', 'Zutphen', 'Greece'),
(108, 'Ultricies Ornare Elit LLP', 'DLZ', 'Baltimore', 'Benin'),
(109, 'Lectus Sit Incorporated', 'PDN', 'Clydebank', 'Singapore'),
(110, 'In Tempus Eu Associates', 'NAR', 'Fontecchio', 'Marshall Islands'),
(111, 'Phasellus Dolor Elit Industries', 'BNM', 'Warspite', 'Estonia'),
(112, 'Praesent Incorporated', 'SYL', 'Elgin', 'Zimbabwe'),
(113, 'Sapien Imperdiet Ltd', 'EGT', 'Macul', 'Mongolia'),
(114, 'Mollis LLP', 'XLP', 'Värnamo', 'Italy'),
(115, 'Enim Ltd', 'STK', 'Sant''Eufemia a Maiella', 'Suriname'),
(116, 'Lorem Vehicula Consulting', 'XER', 'Springfield', 'Saudi Arabia'),
(117, 'Euismod Corporation', 'KYS', 'Rochester', 'Bermuda'),
(118, 'Nulla Donec Non Consulting', 'EWH', 'Mores', 'Sierra Leone'),
(119, 'Sed Corporation', 'ABA', 'Montigny-le-Tilleul', 'Ukraine'),
(120, 'Molestie Limited', 'YBD', 'Crecchio', 'El Salvador'),
(121, 'Natoque Incorporated', 'MGZ', 'Saint John', 'Jersey'),
(122, 'Convallis Ltd', 'ZYV', 'Legal', 'Gabon'),
(123, 'Ullamcorper Magna PC', 'IFD', 'Curicó', 'Uzbekistan'),
(124, 'Diam Lorem Ltd', 'IGA', 'Santa Cruz de Tenerife', 'Uganda'),
(125, 'Nec Ante Blandit Institute', 'LTD', 'Gloucester', 'Tanzania'),
(126, 'Scelerisque Scelerisque Dui Corporation', 'YOJ', 'Parchim	City', 'Yemen'),
(127, 'Mollis Non PC', 'RKP', 'Geel', 'Bhutan'),
(128, 'Nullam Feugiat Placerat Foundation', 'UYT', 'Bharatpur', 'Madagascar'),
(129, 'Est Institute', 'DJY', 'Las Vegas', 'Niger'),
(130, 'Pede Nec Ante Corporation', 'UEV', 'Roveredo in Piano', 'Iceland'),
(131, 'Ut Quam Vel Ltd', 'ERG', 'Beervelde', 'Canada'),
(132, 'Pede Suspendisse Incorporated', 'TJZ', 'Dalbeattie', 'Costa Rica'),
(133, 'Nostra Per Inceptos Inc.', 'MMF', 'Augsburg', 'Uzbekistan'),
(134, 'Non Magna Nam Associates', 'QWV', 'Laakdal', 'Antigua and Barbuda'),
(135, 'Sagittis Nullam LLC', 'JNE', 'Villarrica', 'Gabon'),
(136, 'Nec Imperdiet Institute', 'FDA', 'Cascavel', 'Bhutan'),
(137, 'Lectus Associates', 'NHR', 'Smoky Lake', 'Dominica'),
(138, 'Vehicula Risus Nulla Corporation', 'YHU', 'Ayr', 'Czech Republic'),
(139, 'Eget Magna Foundation', 'KCG', 'Alix', 'Saint Helena, Ascension and Tristan da Cunha'),
(140, 'Sed Consequat Auctor Limited', 'BXG', 'Ollolai', 'Benin'),
(141, 'Egestas Lacinia Sed Consulting', 'RYM', 'Pavone del Mella', 'Syria'),
(142, 'Proin Corporation', 'WXZ', 'Zielona Góra', 'Macao'),
(143, 'Erat Vivamus Inc.', 'VKW', 'Legal', 'Dominica'),
(144, 'Augue Inc.', 'JDF', 'Curacautín', 'Guadeloupe'),
(145, 'Ultrices Sit Amet LLP', 'GPR', 'San Isidro', 'Guinea'),
(146, 'Ac Mattis Company', 'RWO', 'Dundee', 'Belarus'),
(147, 'Lobortis Industries', 'BZZ', 'Pichidegua', 'Antarctica'),
(148, 'Massa Rutrum Magna Foundation', 'FOY', 'Franeker', 'Bahamas'),
(149, 'Metus Vitae Velit Corporation', 'QAA', 'Trois-Rivières', 'Serbia'),
(150, 'Faucibus Lectus A Corp.', 'WNY', 'Banff', 'Iran'),
(151, 'Urna Consulting', 'GGT', 'Schoonaarde', 'Slovakia'),
(152, 'Amet Ornare LLC', 'XYE', 'Wilmont', 'Angola'),
(153, 'Lacus Pede Sagittis PC', 'NBN', 'Busso', 'Malawi'),
(154, 'Risus Odio Auctor Inc.', 'OZX', 'Nedlands', 'Swaziland'),
(155, 'Praesent LLP', 'BKR', 'Roccamena', 'Czech Republic'),
(156, 'Maecenas Iaculis Corporation', 'YWU', 'Kapfenberg', 'Belgium'),
(157, 'Fusce Feugiat Lorem LLC', 'KIX', 'Mandi Burewala', 'Iceland'),
(158, 'Massa Mauris Vestibulum Limited', 'KCX', 'Precenicco', 'Côte D''Ivoire (Ivory Coast)'),
(159, 'Et Magnis Dis Consulting', 'LZP', 'Namur', 'Equatorial Guinea'),
(160, 'Maecenas Institute', 'ZYJ', 'Bal‰tre', 'Saint Pierre and Miquelon'),
(161, 'Facilisis Corporation', 'CAW', 'Tramonti di Sopra', 'Nigeria'),
(162, 'Donec Consectetuer Inc.', 'WTN', 'Ussassai', 'Virgin Islands, British'),
(163, 'Dignissim Consulting', 'APO', 'Gaya', 'Tanzania'),
(164, 'Leo Associates', 'PFC', 'Cognelee', 'Samoa'),
(165, 'Tortor Limited', 'FFW', 'San Cristóbal de la Laguna', 'Pakistan'),
(166, 'Tempus Corporation', 'NQH', 'Lauro de Freitas', 'Timor-Leste'),
(167, 'Donec Tincidunt Donec Corporation', 'IEQ', 'Palmerston North', 'Guam'),
(168, 'Parturient Montes Nascetur Company', 'RKM', 'Gadag Betigeri', 'Nauru'),
(169, 'Vel Mauris Corp.', 'UGS', 'Bunbury', 'Morocco'),
(170, 'Aliquet Associates', 'QZN', 'Pfungstadt', 'Cayman Islands'),
(171, 'Enim Nisl Elementum Corp.', 'HQP', 'Montgomery', 'South Africa'),
(172, 'Lectus Pede Ultrices Consulting', 'QXL', 'Boorsem', 'Mongolia'),
(173, 'Auctor Associates', 'RMS', 'Frauenkirchen', 'Germany'),
(174, 'Consectetuer Adipiscing Elit LLC', 'EZR', 'Caledon', 'Cook Islands'),
(175, 'Diam Luctus Lobortis Inc.', 'KNV', 'Heilbronn', 'Bolivia'),
(176, 'Diam Luctus LLC', 'PTV', 'Saint-Rhémy-en-Bosses', 'Moldova'),
(177, 'Eros Turpis Non Ltd', 'OUU', 'Smoky Lake', 'Falkland Islands'),
(178, 'Nullam Enim Ltd', 'DYH', 'Cavasso Nuovo', 'Suriname'),
(179, 'Ridiculus Foundation', 'IKB', 'Kolkata', 'Saint Vincent and The Grenadines'),
(180, 'Sem Ltd', 'DXY', 'Vejano', 'Iraq'),
(181, 'Sed Sapien Nunc LLP', 'RYT', 'Ghlin', 'Kuwait'),
(182, 'Nec LLP', 'LFU', 'Sars-la-Buissire', 'Equatorial Guinea'),
(183, 'Tortor Consulting', 'YGE', 'Maiduguri', 'Papua New Guinea'),
(184, 'Proin Mi Aliquam Industries', 'CEW', 'Isola del Gran Sasso d''Italia', 'Djibouti'),
(185, 'Nulla Facilisis Suspendisse PC', 'FZH', 'Kozan', 'Romania'),
(186, 'Dolor Tempus Consulting', 'WLD', 'Hunstanton', 'Cyprus'),
(187, 'Integer Eu PC', 'NXS', 'Gangtok', 'Faroe Islands'),
(188, 'Maecenas Ltd', 'AKW', 'Putre', 'Virgin Islands, United States'),
(189, 'Id Risus Inc.', 'ZDB', 'Gönen', 'Latvia'),
(190, 'Nibh Quisque Nonummy Limited', 'SSB', 'Trollhättan', 'Hungary'),
(191, 'Donec PC', 'SFH', 'Bünyan', 'Samoa'),
(192, 'Ante Iaculis Inc.', 'KFO', 'Baiso', 'Kuwait'),
(193, 'Magna Corporation', 'ROY', 'Chandigarh', 'Estonia'),
(194, 'Egestas Fusce PC', 'FNU', 'Lelystad', 'Sierra Leone'),
(195, 'Neque PC', 'FAT', 'Bonlez', 'Colombia'),
(196, 'Nullam Nisl Maecenas Associates', 'DKR', 'Bevagna', 'Kiribati'),
(197, 'Aliquam Gravida Mauris Corporation', 'INU', 'Colico', 'Saint Martin'),
(198, 'Est Ac Industries', 'MFN', 'Lesve', 'Saint Pierre and Miquelon'),
(199, 'Ligula Nullam Feugiat Foundation', 'OZH', 'Roccasicura', 'Tunisia'),
(200, 'Urna Incorporated', 'MXU', 'Toernich', 'Gabon'),
(201, 'Sed Auctor Odio Corporation', 'OLR', 'Coalhurst', 'American Samoa'),
(202, 'Ut Dolor Corporation', 'IOK', 'Mesa', 'Grenada'),
(203, 'Accumsan Sed Facilisis Corp.', 'GUH', 'Barrie', 'Croatia'),
(204, 'Ut Foundation', 'ZYF', 'Cobourg', 'Kiribati'),
(205, 'Eu Odio Tristique Consulting', 'EKL', 'Victor Harbor', 'South Georgia and The South Sandwich Islands'),
(206, 'Elit Pharetra Inc.', 'NEZ', 'Wieze', 'Gibraltar'),
(210, 'Airport of Black Company', 'ABC', 'Singapore', 'Egypt'),
(211, 'XYZ Airport', 'XYZ', 'Xtreme', 'Yellow Zebra'),
(213, 'Cairo Airport', 'CAP', 'Cairo', 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

DROP TABLE IF EXISTS `class_details`;
CREATE TABLE IF NOT EXISTS `class_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Seats` int(11) NOT NULL,
  `seat_re` int(11) NOT NULL,
  `seat_av` int(11) NOT NULL,
  `Class_Name` varchar(50) NOT NULL,
  `id_Airplane` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_Airplane` (`id_Airplane`)
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` (`id`, `Seats`, `seat_re`, `seat_av`, `Class_Name`, `id_Airplane`) VALUES
(253, 300, 0, 300, 'vip', 1),
(254, 200, 1, 199, 'First Class', 1),
(255, 300, 0, 300, 'Second Class', 1),
(256, 300, 1, 299, 'Economy', 1),
(257, 300, 11, 289, 'vip', 3),
(258, 200, 26, 174, 'First Class', 3),
(259, 300, 6, 294, 'Second Class', 3),
(260, 300, 1, 299, 'Economy', 3),
(261, 110, 3, 107, 'VIP', 2),
(262, 375, 0, 375, 'First Class', 2),
(263, 517, 0, 517, 'Second Class', 2),
(264, 330, 1, 329, 'Economy', 2),
(265, 265, 5, 260, 'VIP', 4),
(266, 455, 0, 455, 'First Class', 4),
(267, 553, 3, 550, 'Second Class', 4),
(268, 605, 0, 605, 'Economy', 4),
(269, 220, 3, 217, 'vip', 5),
(270, 330, 1, 329, 'First Class', 5),
(271, 540, 1, 539, 'Second Class', 5),
(272, 560, 0, 560, 'Economy', 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(20) DEFAULT NULL,
  `Logo` varchar(100) DEFAULT NULL,
  `Name_company` varchar(50) DEFAULT NULL,
  `id_person` int(11) NOT NULL,
  `Customer_Type` int(11) NOT NULL,
  PRIMARY KEY (`Customer_ID`),
  KEY `id_person` (`id_person`),
  KEY `Customer_Type` (`Customer_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Type`, `Logo`, `Name_company`, `id_person`, `Customer_Type`) VALUES
(1, '1', '', '', 19, 1),
(2, '', '', '', 24, 1),
(3, 'Pilot', NULL, 'Egypt Air', 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

DROP TABLE IF EXISTS `customer_type`;
CREATE TABLE IF NOT EXISTS `customer_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`id`, `customer_type`) VALUES
(1, 'passenger'),
(2, 'traveller');

-- --------------------------------------------------------

--
-- Table structure for table `describe_view`
--

DROP TABLE IF EXISTS `describe_view`;
CREATE TABLE IF NOT EXISTS `describe_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL,
  `Describe` text NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Body` varchar(400) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`Feedback_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Body`, `Subject`, `Rating`, `User_ID`) VALUES
(1, 'I love the way you guys managed to bring a great company together with great employees, well done.', 'Great Flight', 5, 1),
(2, 'I liked your service but I do have some concerns about the way bla bla bla .', 'I liked it but...', 4, 1),
(3, 'test test test test test test test test', 'test feedback', 5, 1),
(4, 'testtesttesttesttesttesttesttest', 'testtest', 2, 1),
(5, 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', 'testtesttesttest', 1, 1),
(6, 'testtest testtesttest testtesttest testtesttest test', 'testtest test', 2, 1),
(7, 'testtest testtesttest testtesttest testtesttest test', 'testtest testtesttest test', 2, 1),
(8, 'teestteestteestteest teestteestteestteest', 'teest', 3, 1),
(9, 'teestteestteest teest teest  teestteest teest', 'teestteest', 3, 1),
(10, 'teestteest teestteest teestteest teestteest teestteest', 'test', 4, 1),
(11, 'teestteestteestteestteest', 'testteesttest', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
CREATE TABLE IF NOT EXISTS `flight` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sch_duration` varchar(20) NOT NULL,
  `id_airport_depart` int(11) NOT NULL,
  `id_airport_arrive` int(11) NOT NULL,
  `fare` varchar(50) NOT NULL,
  PRIMARY KEY (`flight_id`),
  KEY `id_airport` (`id_airport_depart`),
  KEY `id_airport_arrive` (`id_airport_arrive`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `Sch_duration`, `id_airport_depart`, `id_airport_arrive`, `fare`) VALUES
(1, '21', 50, 28, '270'),
(5, '12', 49, 211, '180'),
(6, '27', 51, 119, '350'),
(7, '7', 213, 142, '330'),
(8, '23', 10, 11, '136'),
(9, '14', 97, 169, '300'),
(10, '3', 173, 186, '350');

-- --------------------------------------------------------

--
-- Table structure for table `flight_instance`
--

DROP TABLE IF EXISTS `flight_instance`;
CREATE TABLE IF NOT EXISTS `flight_instance` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `Date_arr` varchar(50) NOT NULL,
  `Arr_time` varchar(50) NOT NULL,
  `Date_depart` varchar(50) NOT NULL,
  `Depart_time` varchar(50) NOT NULL,
  `id_leg_flight` int(11) NOT NULL,
  `id_Airplane` int(11) NOT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`iid`),
  KEY `id_leg_Instance` (`id_leg_flight`),
  KEY `id_Airplane` (`id_Airplane`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_instance`
--

INSERT INTO `flight_instance` (`iid`, `Date_arr`, `Arr_time`, `Date_depart`, `Depart_time`, `id_leg_flight`, `id_Airplane`, `flag`) VALUES
(12, '04/21/2016', '3', '04/20/2016', '6', 1, 3, NULL),
(13, '04/27/2016', '17', '04/27/2016', '5', 5, 3, NULL),
(14, '05/20/2016', '14', '05/19/2016', '11', 6, 3, NULL),
(15, '05/23/2016', '23', '05/23/2016', '16', 7, 2, NULL),
(16, '05/30/2016', '1', '05/29/2016', '18', 7, 5, NULL),
(17, '06/15/2016', '19', '06/15/2016', '5', 9, 4, NULL),
(18, '06/07/2016', '9', '06/07/2016', '6', 10, 4, NULL),
(19, '07/04/2016', '17', '07/04/2016', '10', 7, 1, NULL),
(20, '07/05/2016', '22', '07/05/2016', '15', 7, 5, NULL),
(21, '08/25/2016', '6', '08/24/2016', '9', 1, 4, NULL),
(22, '08/31/2016', '18', '08/31/2016', '11', 7, 5, NULL),
(23, '09/28/2016', '21', '09/28/2016', '9', 5, 4, NULL),
(24, '08/09/2016', '11', '08/09/2016', '8', 10, 3, NULL),
(25, '08/21/2016', '16', '08/21/2016', '9', 7, 4, NULL),
(26, '08/22/2016', '16', '08/21/2016', '19', 1, 4, NULL),
(27, '08/18/2016', '3', '08/17/2016', '6', 1, 2, NULL),
(28, '09/08/2016', '6', '09/08/2016', '3', 10, 3, NULL),
(29, '08/22/2016', '10', '08/22/2016', '3', 7, 3, NULL),
(30, '10/01/2016', '18', '10/01/2016', '4', 9, 3, NULL),
(31, '10/11/2016', '8', '10/10/2016', '9', 8, 3, NULL),
(32, '10/10/2016', '6', '10/09/2016', '16', 9, 2, NULL),
(33, '05/31/2016', '17', '05/31/2016', '5', 5, 3, NULL),
(34, '10/23/2016', '15', '10/23/2016', '3', 5, 2, NULL),
(35, '11/14/2016', '10', '11/13/2016', '7', 6, 2, NULL),
(36, '09/02/2016', '10', '09/02/2016', '3', 7, 2, NULL),
(37, '10/18/2016', '20', '10/18/2016', '6', 9, 5, NULL),
(38, '11/07/2016', '6', '11/06/2016', '7', 8, 3, NULL),
(39, '11/13/2016', '12', '11/13/2016', '5', 7, 4, NULL),
(40, '11/03/2016', '10', '11/03/2016', '7', 10, 5, NULL),
(41, '11/27/2016', '8', '11/26/2016', '11', 1, 4, NULL),
(42, '11/21/2016', '9', '11/21/2016', '6', 10, 3, NULL),
(43, '05/25/2016', '8', '05/25/2016', '5', 10, 4, NULL),
(44, '12/20/2016', '10', '12/20/2016', '7', 10, 4, NULL),
(45, '12/13/2016', '1', '12/12/2016', '4', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `help_answer`
--

DROP TABLE IF EXISTS `help_answer`;
CREATE TABLE IF NOT EXISTS `help_answer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `help_answer` varchar(151) NOT NULL,
  `id_help_q` int(11) NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `id_help_q` (`id_help_q`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help_answer`
--

INSERT INTO `help_answer` (`aid`, `help_answer`, `id_help_q`) VALUES
(4, 'Insert data', 7),
(5, 'Press Login', 7),
(25, 'Sit within five rows of an emergency exit.', 13),
(26, 'Make a mental note of how far away you are from the nearest exit.', 13),
(27, 'Sit in an aisle seat.', 13),
(28, 'Sit in the rear of the cabin. It is statistically safest.', 13),
(29, 'Don''t sleep during takeoff and landing. That is when most accidents occur.', 13),
(37, 'Use a long password', 16),
(38, 'Don''t tell anyone about it', 16),
(39, 'Hide your password upon entering it', 16),
(40, 'Make it complex', 16);

-- --------------------------------------------------------

--
-- Table structure for table `help_qustion`
--

DROP TABLE IF EXISTS `help_qustion`;
CREATE TABLE IF NOT EXISTS `help_qustion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `help_qustion` varchar(100) NOT NULL,
  `Manager_ID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Manager_ID` (`Manager_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help_qustion`
--

INSERT INTO `help_qustion` (`id`, `help_qustion`, `Manager_ID`) VALUES
(7, 'How to login to your account ', 2),
(13, '5 Tips for Surviving a Plane Crash', 2),
(16, 'Steps to ensure security ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `Manager_ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `wages` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  PRIMARY KEY (`Manager_ID`),
  KEY `id_type` (`id_type`),
  KEY `id_person` (`id_person`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Manager_ID`, `id_type`, `wages`, `id_person`) VALUES
(1, 1, 455, 11),
(2, 1, 3000, 25),
(3, 2, 7000, 26);

-- --------------------------------------------------------

--
-- Table structure for table `manager_type`
--

DROP TABLE IF EXISTS `manager_type`;
CREATE TABLE IF NOT EXISTS `manager_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_type`
--

INSERT INTO `manager_type` (`id`, `type`) VALUES
(1, '123'),
(2, '123');

-- --------------------------------------------------------

--
-- Table structure for table `msgonetomeny`
--

DROP TABLE IF EXISTS `msgonetomeny`;
CREATE TABLE IF NOT EXISTS `msgonetomeny` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_t` int(11) NOT NULL,
  `id_msg` int(11) NOT NULL,
  `read` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_t` (`id_t`),
  KEY `id_user` (`id_msg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `msg_figth`
--

DROP TABLE IF EXISTS `msg_figth`;
CREATE TABLE IF NOT EXISTS `msg_figth` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `msg_figth`
--

INSERT INTO `msg_figth` (`id_msg`, `msg`) VALUES
(1, 'It was canceled joint trip you are here to find out more please went to near the airport'),
(2, 'It was amended joint trip you are here to find out more please went to near the airport');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `payment` varchar(50) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `payment`) VALUES
(1, 'visa'),
(2, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `payment_option`
--

DROP TABLE IF EXISTS `payment_option`;
CREATE TABLE IF NOT EXISTS `payment_option` (
  `id_o` int(11) NOT NULL AUTO_INCREMENT,
  `payment_option` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id_o`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_option`
--

INSERT INTO `payment_option` (`id_o`, `payment_option`, `type`) VALUES
(1, 'name', 'text'),
(2, 'Card_Number', 'text'),
(3, 'Security_Code', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `payment_select_option`
--

DROP TABLE IF EXISTS `payment_select_option`;
CREATE TABLE IF NOT EXISTS `payment_select_option` (
  `id_s_o` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `payment_option` int(11) NOT NULL,
  PRIMARY KEY (`id_s_o`),
  KEY `payment_id` (`payment_id`),
  KEY `payment_option` (`payment_option`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_select_option`
--

INSERT INTO `payment_select_option` (`id_s_o`, `payment_id`, `payment_option`) VALUES
(5, 2, 1),
(6, 1, 2),
(7, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment_select_values`
--

DROP TABLE IF EXISTS `payment_select_values`;
CREATE TABLE IF NOT EXISTS `payment_select_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pay_select_values` int(11) NOT NULL,
  `purchases_id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pay_select_values` (`id_pay_select_values`),
  KEY `purchases_id` (`purchases_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_select_values`
--

INSERT INTO `payment_select_values` (`id`, `id_pay_select_values`, `purchases_id`, `value`) VALUES
(1, 6, 1, '123456'),
(2, 7, 1, '123'),
(3, 6, 3, '13413'),
(4, 7, 3, '31413'),
(5, 6, 4, '13413'),
(6, 7, 4, '31413'),
(7, 5, 5, '113'),
(8, 6, 6, '334'),
(9, 7, 6, '313'),
(10, 6, 7, '13413'),
(11, 7, 7, '414'),
(12, 6, 8, '33111'),
(13, 7, 8, '416'),
(14, 5, 9, '143'),
(15, 6, 10, '414'),
(16, 7, 10, '42'),
(17, 6, 11, '113'),
(18, 7, 11, '414'),
(19, 6, 12, '33111'),
(20, 7, 12, '31413'),
(21, 6, 13, '13413'),
(22, 7, 13, '31413'),
(23, 6, 14, '31313'),
(24, 7, 14, '31413'),
(25, 6, 15, '33111'),
(26, 7, 15, '13131'),
(27, 6, 16, '31313'),
(28, 7, 16, '31413'),
(29, 6, 17, '31313'),
(30, 7, 17, '313'),
(31, 6, 18, '31313'),
(32, 7, 18, '414'),
(33, 6, 19, '31313'),
(34, 7, 19, '13131'),
(35, 6, 20, '13413'),
(36, 7, 20, '31413'),
(37, 6, 21, '31313'),
(38, 7, 21, '414'),
(39, 6, 22, '314'),
(40, 7, 22, '413'),
(41, 6, 23, '31313'),
(42, 7, 23, '414'),
(43, 6, 24, '414'),
(44, 7, 24, '13131'),
(45, 6, 25, '13413'),
(46, 7, 25, '13131'),
(47, 6, 26, '31313'),
(48, 7, 26, '13131'),
(49, 6, 27, '13413'),
(50, 7, 27, '31413'),
(51, 6, 28, '31313'),
(52, 7, 28, '13131'),
(53, 6, 29, '13413'),
(54, 7, 29, '31413'),
(55, 6, 30, '31313'),
(56, 7, 30, '13131'),
(57, 6, 31, '13413'),
(58, 7, 31, '31413'),
(59, 6, 32, '31313'),
(60, 7, 32, '13131');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `User_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) COLLATE utf8_bin NOT NULL,
  `Mname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Lname` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `Telephone` varchar(15) COLLATE utf8_bin NOT NULL,
  `Gender` int(11) NOT NULL,
  `Password` varchar(30) COLLATE utf8_bin NOT NULL,
  `Street_name` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Country` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `City` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`User_ID`, `Fname`, `Mname`, `Lname`, `Email`, `Phone`, `Telephone`, `Gender`, `Password`, `Street_name`, `Country`, `City`) VALUES
(1, 'mohamed', 'fathy', 'elgebally', 'amr@y.com', '924921949', '214214002194021', 2, '12345', 'mmmmnnn', 'nnnnnm', 'jiisic'),
(2, '$firstname', NULL, '$lastname', '$email', '$phone', '$telephone', 1, '$password', NULL, NULL, '$address'),
(3, 'a', NULL, 'a', 'amenaelgebaly@yahoo.com', '11', '111', 1, 'a', NULL, NULL, 'a'),
(7, 'asmaa', 'khaled', 'mohamed', 'asmaa@yahoo', '010552', '2598', 2, '078989', 'Mostafastreet', 'cairo', 'Mayo'),
(8, 'mohamed', 'khaled', 'mohamed', 'asmaa@yahoo', '010552', '2598', 2, '078989', 'Mostafastreet', 'cairo', 'Mayo'),
(10, 'ahmed', 'khaled', 'mohamed', 'asmaa@yahoo', '010552', '2598', 2, '078989', 'Mostafastreet', 'cairo', 'Mayo'),
(11, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 1, 'aa', 'aa', 'aa', 'aa'),
(19, 'Ahmed', 'Ahmed', 'Ahmed', 'amr_esam@yahoo.com', '01141521474', '01062934237', 1, 'aaaaaaa', 'asss', 'aaaa', 'aaaaa'),
(21, 'Ahmed', 'Ahmed', 'Ahmedhh', 'amr_esam@yahoo.com', '01141521474', '01062934237', 1, 'aaaaaaa', 'asss', 'aaaa', 'aaaaa'),
(22, 'Ahmedf', 'Ahmedf', 'Ahmedaaa', 'amr_esam@yahoo.com', '01141521474', '01062934237', 1, 'aaaaaaaa', 'asss', 'aaaa', 'aaaaa'),
(23, 'Ahmedf', 'Ahmedf', 'Ahmedaaa', 'amr_esam@yahoo.com', '01141521474', '01062934237', 1, 'aaaaaaaa', 'asss', 'aaaa', 'aaaaa'),
(24, 'Ahmedf', 'Ahmedf', 'Ahmedf', 'amr_esam@yahoo.com', '01141521474', '01062934237', 1, 'aaaaaaa', 'asss', 'aaaa', 'aaaaa'),
(25, 'Mohamed', 'Ahmed', 'Mohamed', 'mohamed@yahoo.com', '01314411414', '140140140014', 1, '12345678', 'cairo', 'cairo', 'cairo'),
(26, 'Ali', 'Ali', 'Ali', 'ali@yahoo.com', '01303114', '014144144', 1, '12345678', 'cairo', 'cairo', 'cairo'),
(27, 'Ahmed', 'Ahmed', 'Mohamed', 'ahmed@yahoo.com', '1012133', '13513513', 1, '12345678', 'cairo', 'cairo', 'cairo'),
(28, 'Tamer', 'Mohamed', 'Tamer', 'tamer@yahoo.com', '013134314', '013413413', 1, '12345678', 'cairo', 'cairo', 'cairo');

-- --------------------------------------------------------

--
-- Table structure for table `telebooker`
--

DROP TABLE IF EXISTS `telebooker`;
CREATE TABLE IF NOT EXISTS `telebooker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Bno` int(11) NOT NULL,
  `wages` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_person` (`id_person`),
  KEY `id_person_2` (`id_person`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `telebooker`
--

INSERT INTO `telebooker` (`id`, `Bno`, `wages`, `id_person`) VALUES
(1, 12345678, 3000, 28);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `Ticket_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_of_Booking` varchar(50) NOT NULL,
  `id_fight` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `Seat_no` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`Ticket_ID`),
  KEY `id_Seat` (`id_fight`),
  KEY `id_customer` (`id_customer`),
  KEY `class` (`class`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Ticket_ID`, `Date_of_Booking`, `id_fight`, `id_customer`, `Seat_no`, `class`, `flag`) VALUES
(1, 'Friday April 15 ,4, 2016, 11:20 pm ', 12, 1, 25, 258, 1),
(2, '1', 12, 1, 201, 253, 1),
(3, 'Friday May 13 ,5, 2016, 11:06 am ', 12, 1, 7, 257, 1),
(4, 'Friday May 13 ,5, 2016, 11:07 am ', 13, 1, 2, 259, 1),
(5, 'Friday May 13 ,5, 2016, 11:07 am ', 14, 1, 1, 260, 0),
(6, 'Friday May 13 ,5, 2016, 11:07 am ', 15, 1, 1, 264, 1),
(7, 'Friday May 13 ,5, 2016, 11:08 am ', 16, 1, 1, 269, 1),
(8, 'Friday May 13 ,5, 2016, 11:09 am ', 17, 1, 1, 267, 1),
(9, 'Friday May 13 ,5, 2016, 11:09 am ', 18, 1, 1, 265, 0),
(10, 'Friday May 13 ,5, 2016, 11:10 am ', 19, 1, 1, 256, 1),
(11, 'Friday May 13 ,5, 2016, 11:10 am ', 20, 1, 1, 271, 1),
(12, 'Friday May 13 ,5, 2016, 11:11 am ', 21, 1, 2, 265, 1),
(13, 'Friday May 13 ,5, 2016, 11:11 am ', 22, 1, 1, 270, 1),
(14, 'Friday May 13 ,5, 2016, 11:11 am ', 12, 1, 26, 258, 1),
(15, 'Friday May 13 ,5, 2016, 11:12 am ', 23, 1, 3, 265, 1),
(16, 'Friday May 13 ,5, 2016, 11:13 am ', 24, 1, 3, 259, 1),
(17, 'Friday May 13 ,5, 2016, 11:14 am ', 29, 1, 4, 259, 1),
(18, 'Friday May 13 ,5, 2016, 11:14 am ', 30, 1, 5, 259, 1),
(19, 'Friday May 13 ,5, 2016, 11:16 am ', 31, 1, 8, 257, 1),
(20, 'Friday May 13 ,5, 2016, 11:17 am ', 32, 1, 1, 261, 1),
(21, 'Friday May 13 ,5, 2016, 11:17 am ', 33, 1, 9, 257, 1),
(22, 'Friday May 13 ,5, 2016, 11:19 am ', 35, 1, 2, 261, 1),
(23, 'Friday May 13 ,5, 2016, 11:20 am ', 36, 1, 3, 261, 1),
(24, 'Friday May 13 ,5, 2016, 11:20 am ', 37, 1, 2, 269, 1),
(25, 'Friday May 13 ,5, 2016, 11:20 am ', 38, 1, 10, 257, 1),
(26, 'Friday May 13 ,5, 2016, 11:20 am ', 39, 1, 4, 265, 1),
(27, 'Friday May 13 ,5, 2016, 11:20 am ', 40, 1, 3, 269, 1),
(28, 'Friday May 13 ,5, 2016, 11:22 am ', 41, 1, 5, 265, 1),
(29, 'Friday May 13 ,5, 2016, 11:22 am ', 42, 1, 6, 259, 1),
(30, 'Friday May 13 ,5, 2016, 11:22 am ', 43, 1, 2, 267, 1),
(31, 'Friday May 13 ,5, 2016, 11:22 am ', 44, 1, 3, 267, 1),
(32, 'Friday May 13 ,5, 2016, 11:22 am ', 45, 1, 11, 257, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_details`
--
ALTER TABLE `class_details`
  ADD CONSTRAINT `class_details_ibfk_1` FOREIGN KEY (`id_Airplane`) REFERENCES `airplane` (`Airplane_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`Customer_Type`) REFERENCES `customer_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `describe_view`
--
ALTER TABLE `describe_view`
  ADD CONSTRAINT `describe_view_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `manager` (`Manager_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `person` (`User_ID`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`id_airport_depart`) REFERENCES `airport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`id_airport_arrive`) REFERENCES `airport` (`id`);

--
-- Constraints for table `flight_instance`
--
ALTER TABLE `flight_instance`
  ADD CONSTRAINT `flight_instance_ibfk_3` FOREIGN KEY (`id_Airplane`) REFERENCES `airplane` (`Airplane_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flight_instance_ibfk_4` FOREIGN KEY (`id_leg_flight`) REFERENCES `flight` (`flight_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `help_answer`
--
ALTER TABLE `help_answer`
  ADD CONSTRAINT `help_answer_ibfk_1` FOREIGN KEY (`id_help_q`) REFERENCES `help_qustion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `help_qustion`
--
ALTER TABLE `help_qustion`
  ADD CONSTRAINT `help_qustion_ibfk_1` FOREIGN KEY (`Manager_ID`) REFERENCES `manager` (`Manager_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manager_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `manager_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `msgonetomeny`
--
ALTER TABLE `msgonetomeny`
  ADD CONSTRAINT `msgonetomeny_ibfk_1` FOREIGN KEY (`id_t`) REFERENCES `ticket` (`Ticket_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `msgonetomeny_ibfk_2` FOREIGN KEY (`id_msg`) REFERENCES `msg_figth` (`id_msg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_select_option`
--
ALTER TABLE `payment_select_option`
  ADD CONSTRAINT `payment_select_option_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id_payment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_select_option_ibfk_2` FOREIGN KEY (`payment_option`) REFERENCES `payment_option` (`id_o`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_select_values`
--
ALTER TABLE `payment_select_values`
  ADD CONSTRAINT `payment_select_values_ibfk_1` FOREIGN KEY (`purchases_id`) REFERENCES `ticket` (`Ticket_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_select_values_ibfk_2` FOREIGN KEY (`id_pay_select_values`) REFERENCES `payment_select_option` (`id_s_o`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telebooker`
--
ALTER TABLE `telebooker`
  ADD CONSTRAINT `telebooker_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_fight`) REFERENCES `flight_instance` (`iid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`class`) REFERENCES `class_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
