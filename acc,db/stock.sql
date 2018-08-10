-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 10:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pin` text NOT NULL,
  `pix` text NOT NULL,
  `name` text NOT NULL,
  `atype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `pin`, `pix`, `name`, `atype`) VALUES
(5, '1234sd', '1411272746IMG_20140717_071912.jpg', 'Akinbuluma Ibukun Tade', 1),
(6, '1234er', '1411273336IMG_20140819_153929.jpg', 'Eze Zachariah', 1),
(7, '1234xn', '1411568206MSO3ARC2012713.jpg', 'Desmond Ayodotun', 1),
(8, '1234yu', '1412800189MSO5MAC20121201.jpg', 'Alade Olusola', 2),
(9, '6040sa', 'n.jpg', 'Akinsukere', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Fertilizer'),
(2, 'Animal Feeds'),
(3, 'Herbicides'),
(4, 'Pesticides'),
(5, 'Fungicide'),
(6, 'Insecticides'),
(7, 'FRRER');

-- --------------------------------------------------------

--
-- Table structure for table `newcomment`
--

CREATE TABLE IF NOT EXISTS `newcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(500) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `newcomment`
--

INSERT INTO `newcomment` (`id`, `head`, `comments`, `time`) VALUES
(1, 'NEW DRUGS AVAILABLE', 'What is the meaning of that', 'Tue   05 :31 am'),
(2, 'GOOD DRUGS', 'Wow! that is great', 'Tue   05 :36 am'),
(3, 'NEW DRUGS AVAILABLE', 'Hello', 'Fri   11 :43 am'),
(4, 'GOOD DRUGS', 'Good mood\r\n', 'Fri   11 :44 am');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `report` longtext NOT NULL,
  `time` varchar(50) NOT NULL,
  `noco` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `report`, `time`, `noco`) VALUES
(1, 'NEW DRUGS AVAILABLE', 'We have brought new drugs, oooooooooooooooooooooooooooooooooooooooooooooooh!', 'Sep Tue, 2014 || 05:30 am', 2),
(2, 'GOOD DRUGS', 'I am having complaints on your drugs price, please beat down your price, really ,i enjoyed the extraordinary working performance of the drugs, keep it up.', 'Sep Tue, 2014 || 05:35 am', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderer`
--

CREATE TABLE IF NOT EXISTS `orderer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(60) NOT NULL,
  `name` text NOT NULL,
  `rand` varchar(50) NOT NULL,
  `Location` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `orderer`
--

INSERT INTO `orderer` (`id`, `hash`, `name`, `rand`, `Location`, `phone`, `time`) VALUES
(2, '9b5fadd33e9c32407fafc47174f60075', 'MRS RAHEEM KUDIRAT', '1411543475', '32b Kate Avenue, Ikorodu ,lagos', '09032726296', '2014 Sep 24 09:'),
(4, '3f09e3e72af58366d2fb4d4d6f1f3760', 'MR HILARY', '1412274051', '34 Grate', '08123321232', '2014 Oct 02 20:'),
(5, '0d13c0c6e82ca7ad6b7e486758232432', 'MR HILARY', '1412659957', '34 Grate', '08123321232', '2014 Oct 07 07:'),
(6, 'dd3b3af4076ed4229e4070c73c0bc36e', 'MR ADEKUNLE IJOMU', '1412799967', '34 Grate Street ,vi', '08123321232', '2014 Oct 08 22:'),
(7, '24202e331c81ab17f80e7917c2ab452b', 'MR ADEKUNLE IJOMU', '1412913278', '34 Grate Street ,vi', '08123321232', '2014 Oct 10 05:'),
(8, 'b39b7310a019b0b1bdb71314d6f27e7b', 'MR WILSON', '1412966358', '32 Kate Avenue', '081883993', '2014 Oct 10 20:'),
(11, 'a892dee760cba6190adf24857bb7a755', 'MR HILKA', '1413013274', '89 Bill Gate ,zaxy', '081078542', '2014 Oct 11 00:');

-- --------------------------------------------------------

--
-- Table structure for table `ordertab`
--

CREATE TABLE IF NOT EXISTS `ordertab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `costprice` bigint(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `time` varchar(45) NOT NULL,
  `it` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `ordertab`
--

INSERT INTO `ordertab` (`id`, `item_id`, `item_name`, `quantity`, `costprice`, `pin`, `time`, `it`) VALUES
(11, 1, 'Close Up', 1, 470, '52251461', '11:31 pm', '13-Oct-2014'),
(13, 1, 'Close Up', 4, 1880, '52251461', '11:33 pm', '13-Oct-2014'),
(15, 1, 'Close Up', 1, 470, '52349513', '09:51 am', '14-Oct-2014'),
(16, 2, 'My My', 3, 1050, '52349513', '09:51 am', '14-Oct-2014'),
(17, 13, 'Funbact-A', 1, 200, '88397460', '09:52 am', '14-Oct-2014'),
(18, 14, 'Surphur-8', 1, 350, '88397460', '09:52 am', '14-Oct-2014'),
(19, 12, 'Skineal', 2, 700, '88397460', '09:53 am', '14-Oct-2014'),
(20, 1, 'Close Up', 1, 470, '69979652', '10:22 am', '14-Oct-2014'),
(21, 2, 'My My', 1, 350, '69979652', '10:22 am', '14-Oct-2014'),
(22, 6, 'M & B', 1, 450, '22104894', '03:39 am', '14-Oct-2014'),
(23, 1, 'Close Up', 1, 470, '30845020', '08:43 am', '15-Oct-2014'),
(24, 1, 'Close Up', 3, 1410, '30845020', '08:43 am', '15-Oct-2014'),
(25, 1, 'Close Up', 2, 940, '63947501', '09:24 am', '16-Oct-2014'),
(26, 5, 'Emzor', 1, 400, '82083193', '09:26 am', '16-Oct-2014'),
(27, 1, 'Close Up', 1, 470, '79279071', '09:36 am', '16-Oct-2014'),
(28, 1, 'Close Up', 2, 940, '79279071', '09:36 am', '16-Oct-2014'),
(29, 1, 'Close Up', 4, 1880, '83473893', '09:42 am', '16-Oct-2014'),
(30, 1, 'Close Up', 8, 3760, '28784825', '09:44 am', '16-Oct-2014'),
(32, 1, 'NPK-Fertilizer', 8, 3760, '77048418', '06:51 pm', '16-Oct-2014'),
(33, 1, 'NPK-Fertilizer', 1, 470, '69977625', '03:20 am', '10-Nov-2014'),
(34, 3, 'Herbal', 1, 200, '69977625', '03:20 am', '10-Nov-2014'),
(35, 4, 'Xanery', 2, 1300, '69977625', '03:21 am', '10-Nov-2014');

-- --------------------------------------------------------

--
-- Table structure for table `producta`
--

CREATE TABLE IF NOT EXISTS `producta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `prod` text NOT NULL,
  `costprice` text NOT NULL,
  `details` text NOT NULL,
  `icon` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `ex` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `producta`
--

INSERT INTO `producta` (`id`, `category_id`, `prod`, `costprice`, `details`, `icon`, `quantity`, `ex`) VALUES
(1, 1, 'NPK-Fertilizer', '470', 'Easy Cure', '1411407255Web-Pinterest-alt-Metro-icon.png', 63, '12-08-2014'),
(2, 1, 'My My', '350', 'Easy Usage', '1411407290Web-Folder-icon.png', 10, '5-09-2017'),
(3, 1, 'Herbal', '200', 'Easy To Use', '1411407324Web-Folder-icon (1).png', 18, '06-09-2018'),
(4, 1, 'Xanery', '650', 'Easy To Use', '1411407354Web-browser-icon.png', 16, '5-08-2018'),
(5, 2, 'Emzor', '400', 'Easy To Use', '1411407435private_folder.png', 19, ''),
(6, 2, 'M & B', '450', 'Easy To Use', '1411407459vote33.jpg', 1, ''),
(7, 2, 'Razor', '300', 'Easy Usage', '1411407623Web-HTML-icon.png', 2, ''),
(8, 3, 'Ponche', '540', 'Easy Cure', '1411407970images(20).jpeg', 2, ''),
(9, 3, 'Red  Wine', '250', 'Cure Fast', '1411407999images(27).jpeg', 2, ''),
(10, 3, 'Cocktail', '3000', 'Cure Fast', '1411408041images(23).jpeg', 2, ''),
(11, 3, 'Eva', '1500', 'Easy Cure', '1411408084images(22).jpeg', 2, ''),
(12, 4, 'Skineal', '350', 'Easy Cure', '1411408107images(15).jpeg', 0, ''),
(13, 4, 'Funbact-A', '200', 'Easy To Use', '1411408127images(17).jpeg', 1, ''),
(14, 4, 'Surphur-8', '350', 'Cure Fast', '1411408146images(25).jpeg', 1, ''),
(16, 1, 'Hydroxium 56-Ak', '3455', 'FRR', '14132327661238330_629385623760732_1452611079_n.jpg', 22, '34-08-2014'),
(18, 7, 'Short Hoe', '450', 'Esy Usage', '1413272690ber.JPG', 34, '02-05-2014'),
(19, 1, 'Hoes', '670', 'EASY USAGE', '1413443270ber.JPG', 61, '4-08-2014');

-- --------------------------------------------------------

--
-- Table structure for table `tmpordertab`
--

CREATE TABLE IF NOT EXISTS `tmpordertab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `costprice` bigint(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `time` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
