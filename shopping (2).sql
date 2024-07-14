-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2020 at 05:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--
CREATE DATABASE IF NOT EXISTS `shopping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shopping`;

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE IF NOT EXISTS `addproduct` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `file` varchar(50) NOT NULL,
  `pid` varchar(40) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `file`, `pid`, `category`, `price`) VALUES
(5, 'realme.jpg', '', 'Realme 5S', '9999'),
(6, 'oppo.jpg', '', 'OPPO Mobiles', '15000'),
(7, 'v2.png', '', 'Vivo Mobiles', '8965'),
(8, 'iphone.jpg', '', 'Iphone 6s', '33000'),
(9, 'redmi.jpg', '', 'Redmi Mobiles', '9841'),
(11, 'v4.jpg', '', ' Vivo V9', '12000'),
(12, 'w1.jpg', '', 'Digital Watche', '499'),
(13, 'wat.png', '', 'Sports Watch', '699'),
(14, 'w2.jpg', '', 'Official Watch', '999'),
(15, 'wm3.jpg', '', 'Apple Watch', '599'),
(16, 'wm8.jpg', '', 'Casio Watch', '799'),
(17, 'wc1.jpg', '', 'Digital Watch', '199');

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE IF NOT EXISTS `addtocart` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `userid` varchar(250) NOT NULL,
  `productid` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `datetime` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `userid`, `productid`, `price`, `datetime`, `status`) VALUES
(1, 'parth@gmail.com', '19', '9999', '07/03/20', 'true'),
(2, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(3, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(4, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(5, 'parth@gmail.com', '24', '44000', '07/03/20', 'true'),
(6, 'parth@gmail.com', '18', '35000', '07/03/20', 'true'),
(7, 'parth@gmail.com', '25', '35000', '07/03/20', 'true'),
(8, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(9, 'parth@gmail.com', '18', '35000', '07/03/20', 'true'),
(10, 'parth@gmail.com', '18', '35000', '07/03/20', 'true'),
(11, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(12, 'parth@gmail.com', '24', '44000', '07/03/20', 'true'),
(13, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(14, 'parth@gmail.com', '20', '15999', '07/03/20', 'true'),
(15, 'parth@gmail.com', '19', '9999', '07/03/20', 'true'),
(16, '', '19', '9999', '08/03/20', 'true'),
(17, '', '19', '9999', '11/03/20', 'true'),
(18, '', '19', '9999', '14/03/20', 'true'),
(19, 'gautamsingh6235@gmail.com', '20', '15999', '14/03/20', 'true'),
(20, 'gautamsingh6235@gmail.com', '18', '35000', '14/03/20', 'true'),
(21, 'gautamsingh6235@gmail.com', '30', '15965', '14/03/20', 'true'),
(22, 'gautamsingh6235@gmail.com', '18', '35000', '14/03/20', 'true'),
(23, 'gautamsingh6235@gmail.com', '29', '45006', '14/03/20', 'true'),
(24, '', '18', '35000', '18/03/20', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'gautam@123gmail.com', '9936922410');

-- --------------------------------------------------------

--
-- Table structure for table `manageproduct`
--

CREATE TABLE IF NOT EXISTS `manageproduct` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `image5` varchar(250) NOT NULL,
  `image6` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `review` varchar(250) NOT NULL,
  `discription` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `satisfied` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `manageproduct`
--

INSERT INTO `manageproduct` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `category`, `review`, `discription`, `price`, `satisfied`) VALUES
(16, 'watch.png', 'w2.jpg', 'wc1.jpg', 'wm8.jpg', 'wm.jpg', 'w1.jpg', 'Sports Watches', '1200 review in one days', 'It is a good product.', '99', '81% of buyers enjoyed this product! (82567 votes).'),
(18, 'hp6.jpg', 'asus1.png', 'hp7.jpg', 'acer4.jpg', 'acer8.jpg', 's2.jpg', 'Hp Laptops', '15000 review in a days', 'Hp product is a best product', '35000', '14000 customers is satisfieed'),
(19, 'realme.jpg', 'realme2.jpg', 'redmi.jpg', 'v3.jpg', 'v4.jpg', 'iphone1.png', 'Realme 5S mobiles ', '45000 revies in a days. ', 'Realme is a best product for mobiles', '9999', '120003 satisfied customers .'),
(20, 'realme2.jpg', 'iphone.jpg', 'redmi.jpg', 'v3.jpg', 'v4.jpg', 'iphone1.png', 'Realme x2 mobiles ', '45000 revies in a days. ', 'Realme is a best product for mobiles', '15999', '120003 satisfied customers .'),
(21, 'v2.png', 'iphone.jpg', 'redmi.jpg', 'v3.jpg', 'v4.jpg', 'iphone1.png', 'Vivo V9 mobiles ', '4500 revies in a days. ', 'Vivo is a best product for mobiles', '14999', '12003 satisfied customers .'),
(24, 'sam10.jpg', 'sam1.jpg', 's2.jpg', 'hp7.jpg', 'acer4.jpg', 'acer8.jpg', 'Samsung Laptops', '4500 revies in a days. ', 'Samsung laptops is a best product for mobiles', '44000', '12003 satisfied customers .'),
(25, 's2.jpg', 'sam1.jpg', 'sam10.jpg', 'hp7.jpg', 'acer4.jpg', 'acer8.jpg', 'Sony Laptops', '45000 revies in a days. ', 'Sony laptops is a best product for mobiles', '35000', '14569 satisfied customers .'),
(26, 'acer8.jpg', 'acer4.jpg', 'asus1.png', 'hp7.jpg', 'sam1.jpg', 'dell9.jpg', 'Acer Laptops', '156981 revies in a days. ', 'Acer laptops is a best product for mobiles', '25000', '25694 satisfied customers .'),
(27, 'asus1.png', 'acer4.jpg', 'sam10.jpg', 'hp7.jpg', 'sam1.jpg', 'dell9.jpg', 'Asus Laptops', '156981 revies in a days. ', 'Asus laptops is a best product for mobiles', '45000', '25694 satisfied customers .'),
(28, 'wat.png', 'wm3.jpg', 'w2.jpg', 'wm8.jpg', 'watch.png', 'wc1.jpg', 'Digital Watch', '156981 revies in a days. ', 'Digital is a best product for mobiles', '450', '256256 satisfied customers .'),
(29, 'dell9.jpg', 'hp6.jpg', 'hp7.jpg', 'acer4.jpg', 'sam10.jpg', 's2.jpg', 'Dell laptops', '156981 revies in a days. ', 'DEll laptops is a best product for mobiles', '45006', '25625 satisfied customers .'),
(30, 'redmi.jpg', 'v1.jpg', 'v3.jpg', 'v2.png', 'v4.jpg', 'oppo.jpg', 'Redmi Mobiles', '15698 revies in a days. ', 'Redmi Mobiles is a best product for mobiles', '15965', '25624 satisfied customers .');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'gautam singh', '9936922410', 'gautamsingh6235@gmail.com', ';lkjhg'),
(2, 'gautam singh', '9936922410', 'gautamsingh6235@gmail.com', 'lkjhgfcx'),
(3, 'gautam singh', '9936922410', 'gautamsingh6235@gmail.com', ';lkjhvc'),
(4, 'gautam singh', '9936922410', 'gautamsingh6235@gmail.com', ';lkjhvc'),
(5, 'gautam singh', '9936922410', 'gautamsingh6235@gmail.com', ';lkjhg'),
(6, 'kjhgfdz', '9936922410', 'gautamsingh62635@gmail.com', 'lkjhgfc'),
(7, 'Ashu singh', '9936922410', 'guatamsingh88081@gmail.com', 'lkjhgcx'),
(8, '', '', '', ''),
(9, 'Akash Singh', '9682450810', 'gautam9368@gmail.com', ''),
(10, 'gautam singh', '993692241051', 'umashankarrathaur4@gmail.com', 'lkjbv '),
(11, 'Radheshyam Singh', '9936923102', 'ak123@gmail.com', ';lkjbv'),
(12, 'Amit Singh Banshal', '9987412302', 'amit@gmail.com', '123'),
(13, 'parth', '9260953744', 'parth@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `slidertbl`
--

CREATE TABLE IF NOT EXISTS `slidertbl` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slidertbl`
--

INSERT INTO `slidertbl` (`id`, `image`, `img2`, `img3`, `img4`) VALUES
(9, 'slider2.jpg', 'slider3.jpg', 'slider5.jpg', 'slider1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
