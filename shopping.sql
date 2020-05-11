-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2020 at 02:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `u_id` varchar(100) NOT NULL,
  `i_id` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`u_id`, `i_id`, `quantity`, `total`) VALUES
('u_2', 'i_6', 1, 0),
('', 'i_2', 1, 0),
('u_5', 'i_35', 1, 0),
('u_5', 'i_12', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_name`, `cat_id`) VALUES
('Mens-Wear', 'cat_1'),
('Ladies-Wear', 'cat_2'),
('Electronics', 'cat_3'),
('kids-wear', 'cat_4'),
('Furnitures', 'cat_5'),
('HomeAppliances', 'cat_6'),
('', '7'),
('', '8');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `i_id` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  `scat_id` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `strikedprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `cat_id`, `scat_id`, `iname`, `strikedprice`, `price`, `images`) VALUES
('i_1', 'cat_1', 'scat_1', 'blueshirt', 1000, 800, 'shirt1.jfif'),
('i_2', 'cat_1', 'scat_1', 'blackshirt', 1000, 900, 'IMG_20180617_081455.jpg'),
('i_3', 'cat_1', 'scat_1', 'whiteshirt', 1000, 800, 'gents-formal-250x250.jpg'),
('i_4', 'cat_2', 'scat_3', 'bluetops', 1200, 300, '7475-ladies-casual-dresses-summer-two-colors-pleated.jpg'),
('i_6', 'cat_4', 'scat_1', 'kurtas', 1500, 1100, '1.0x0.jpg'),
('i_7', 'cat_1', 'scat_5', 'nightmare', 1500, 1100, '41OJZebRUoL._SL246_SX190_CR0,0,190,246_.jpg'),
('i_8', 'cat_1', 'scat_1', 'Blue-stripes', 2500, 1999, 'stripes.jfif'),
('i_9', 'cat_1', 'scat_1', 'Mens-casual-shirt', 3000, 1199, 'checks.jfif'),
('i_10', 'cat_1', 'scat_2', 'Black:T_shirt', 1500, 999, 'pavankumar.jpg'),
('i_11', 'cat_2', 'scat_6', 'Fancy_Punjabi', 3000, 2500, 'fancy-punjabi.jpg'),
('i_12', 'cat_2', 'scat_6', 'Black_Lehanga', 5000, 4000, 'black-lehanga.jpg'),
('i_5', 'cat_4', 'scat_10', 'Kids:Coat', 5000, 4000, 'kid1.jpg'),
('i_13', 'cat_3', 'scat_7', 'Mobile:samsung-pro', 20000, 17599, 'samsung_galaxy_note3_note3neo.jpg'),
('i_14', 'cat_3', 'scat_7', 'iphone-6', 75000, 69999, 'iphone-6.jfif'),
('i_15', 'cat_5', 'scat_12', 'Smooth_chair', 3000, 1500, 'sofa-1.jpg'),
('i_16', 'cat_5', 'scat_13', 'Library-cabinet', 5000, 4000, 'library-cabinet.jpg'),
('i_17', 'cat_6', 'scat_9', 'Fridge:Two_doors', 25000, 22000, '2doorfridge.jpg'),
('i_18', 'cat_6', 'scat_14', 'Haveels:Air-Cooler', 10000, 8500, 'havells-aircooler.jpg'),
('i_19', 'cat_5', 'scat_13', 'Books_Almar', 10000, 8500, 'ibrarycabinet1.jpg'),
('i_20', 'cat_2', 'scat_6', 'Womens-partywear', 80000, 6500, 'partwear.jpg'),
('i_21', 'cat_4', 'scat_15', 'kids:lehanga', 3000, 2500, 'kidstrendy.jpg'),
('i_22', 'cat_4', 'scat_16', 'formal:shirt', 2000, 1199, 'kid2.jpg'),
('i_23', 'cat_4', 'scat_15', 'Kids:patiyala', 3000, 2000, 'kidlady2.jpg'),
('i_24', 'cat_6', 'scat_14', 'Toshiba:aircooler', 27000, 25000, 'toshiba-aircooler.jpg'),
('i_25', 'cat_3', 'scat_7', 'mobile:redminote-5-pro', 22000, 20000, 'redmi_mote3.jfif'),
('i_26', 'cat_3', 'scat_4', 'HP:laptop-i5', 58000, 49900, 'hp_laptop.jfif'),
('i_27', 'cat_2', 'scat_3', 'Black:Top', 3500, 3000, 'blacktop.jfif'),
('i_28', 'cat_5', 'scat_13', 'Printed-Furniture', 16000, 14000, 'printedfurniture.jpg'),
('i_29', 'cat_3', 'scat_4', 'Dell:corei5', 48000, 43000, '12039452_525963140912391_6353341236808813360_n.png'),
('i_30', 'cat_6', 'scat_9', 'Sun:Micro-oven', 25000, 22000, 'sun-micro-oven.jpg'),
('i_31', 'cat_4', 'scat_15', 'fancy_trends', 5000, 35000, 'kidlady1.jpg'),
('i_32', 'cat_2', 'scat_6', 'frocks', 5000, 4000, 'frocks.jfif'),
('i_33', 'cat_3', 'scat_17', 'Sansui:32inches-LED-TV', 38000, 35000, 'sansaui.jpeg'),
('i_34', 'cat_5', 'scat_12', 'Daining-Table', 20000, 18000, 'dainingtable.jpg'),
('i_35', 'cat_6', 'scat_18', 'Mixi_Grinder', 8000, 5000, 'mixi.jfif'),
('i_36', 'cat_6', 'scat_18', 'Bajaj:non-stick-pan', 4000, 3000, 'baja-nonstickpan.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `cat_id` varchar(100) NOT NULL,
  `scat_id` varchar(100) NOT NULL,
  `scat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cat_id`, `scat_id`, `scat_name`) VALUES
('cat_1', 'scat_1', 'Shirts'),
('cat_1', 'scat_2', 'T-shirts'),
('cat_2', 'scat_3', 'Tops'),
('cat_3', 'scat_4', 'Laptops'),
('cat_1', 'scat_5', 'Pants'),
('cat_2', 'scat_6', 'chudidars'),
('cat_3', 'scat_7', 'Mobiles'),
('cat_5', 'scat_8', 'Benches'),
('cat_6', 'scat_9', 'Fridge'),
('cat_4', 'scat_10', 'jeans'),
('cat_5', 'scat_11', 'sofas'),
('cat_5', 'scat_12', 'Chairs'),
('cat_5', 'scat_13', 'Cup_boards'),
('cat_6', 'scat_14', 'Air-coolers'),
('cat_4', 'scat_15', 'Ladies'),
('cat_4', 'scat_16', 'kids:mens'),
('cat_3', 'scat_17', 'Tv'),
('cat_6', 'scat_18', 'kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `email`, `password`, `phonenumber`, `location`) VALUES
('u_1', 'pavankumar', 'pavankumarkunnathu@gmail.com', '95944a44652fa422beaa03068a2fc311', 2147483647, 'srikakulam'),
('u_2', 'pavanperfect', 'pavanperfect@gmail.com', '95944a44652fa422beaa03068a2fc311', 2147483647, 'vijaynagaram\r\n'),
('u_3', 'ambica', 'ambica@gmail.com', '91eb2188dafc4944233e8710ecfdd8ca', 2147483647, 'srikakulam\r\n'),
('u_4', 'Nookambica', 'nookambica@gmail.com', '57b110ce2a204c19d30c5ffa9b115739', 2147483647, 'rajam'),
('u_5', 'chandrarao', 'chandu@gmail.com', 'b7ab2ccf61ceb464866b44ff1beb5c1d', 2147483647, 'ponduru');
