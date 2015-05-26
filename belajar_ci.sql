-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 03:49 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar_ci`
--
CREATE DATABASE IF NOT EXISTS `belajar_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `belajar_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama_lengkap`, `jenis_kelamin`, `no_tlp`, `email`, `alamat`) VALUES
(4, 'ewfwv', 'dfsd', '09809', 'meeth19cules@gmail.com', 'aaaaaaaaaaaaaa'),
(7, 'aaaa', 'laki laki', '798769769', 'meeth19cules@gmail.com', 'xxxxxxxxxxxxxxxxxxxx'),
(8, 'dgsdnmb', 'ddsgds', '08090709', 'meeth19cules@gmail.com', 'fffffffffff'),
(9, 'joko', 'laki laki', '09080970990', 'meeth19cules@gmail.com', 'jalan............'),
(10, 'budi', 'laki laki', '09080970990', 'mugiwarachmat@gmail.com', 'jalann jalann jalann jalann '),
(11, 'bambang', 'laki laki', '08090709', 'bambang@yahoo.com', 'jalanjalanjalanjalan'),
(12, 'aaaaa', 'dfsd', '08090709', 'meeth19cules@gmail.com', 'xxxxxxxxxxxxxxxxxxx'),
(13, 'ewfwv', 'dfsd', '09809', 'meeth19cules@gmail.com', 'aaaaaaaaaaaaaa'),
(14, 'aaaa', 'laki laki', '798769769', 'meeth19cules@gmail.com', 'xxxxxxxxxxxxxxxxxxxx'),
(15, 'dgsdnmb', 'ddsgds', '08090709', 'meeth19cules@gmail.com', 'fffffffffff'),
(16, 'joko', 'laki laki', '09080970990', 'meeth19cules@gmail.com', 'jalan............'),
(17, 'aaaaa', 'dfsd', '08090709', 'meeth19cules@gmail.com', 'xxxxxxxxxxxxxxxxxxx'),
(18, 'ewfwv', 'dfsd', '09809', 'meeth19cules@gmail.com', 'aaaaaaaaaaaaaa'),
(19, 'aaaa', 'laki laki', '798769769', 'meeth19cules@gmail.com', 'xxxxxxxxxxxxxxxxxxxx'),
(20, 'dgsdnmb', 'ddsgds', '08090709', 'meeth19cules@gmail.com', 'fffffffffff'),
(21, 'joko', 'laki laki', '09080970990', 'meeth19cules@gmail.com', 'jalan............'),
(22, 'bambang', 'laki laki', '08090709', 'bambang@yahoo.com', 'jalanjalanjalanjalan'),
(23, 'bambang', 'laki laki', '09080970990', 'meeth19cules@gmail.com', 'sssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `option_name` varchar(50) NOT NULL,
  `option_values` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `option_name`, `option_values`) VALUES
(2, 'anchor', 'ancor1.jpg', 100000, 'kaos one piece', '100000'),
(3, 'kaos op', 'shp-flag.jpg', 100000, 'kaos one piece', '100000'),
(4, 'kaos hitam', 'black.jpg', 200000, 'kaos xxx', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'member', '6467baa3b187373'),
(2, 'member', '6467baa3b187373'),
(3, 'member', '6467baa3b187373'),
(4, 'staf', 'staf'),
(8, 'staf', 'staf'),
(9, 'staf', 'staf'),
(10, 'staf', 'staf'),
(11, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
