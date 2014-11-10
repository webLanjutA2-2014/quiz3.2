-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 11:02 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuis`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `judul` varchar(10) NOT NULL,
  `pengarang` varchar(10) NOT NULL,
  `id_buk` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_buk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`judul`, `pengarang`, `id_buk`) VALUES
('Harry potr', 'siPotret', 1),
('Suparman', 'Parman', 2),
('LordKering', 'siKering', 5),
('PowerRenje', 'sirenjer', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nama` varchar(10) NOT NULL,
  `id` int(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `buku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `id`, `pass`, `buku`) VALUES
('asd', 0, 'asd', 'Harrypotha'),
('jkl', 0, 'jkl', 'Harrypotha'),
('qwe', 0, 'qwe', 'Harrypotha'),
('bnm', 0, 'bnm', 'Harrypotha'),
('fgh', 0, 'fgh', 'Suparman'),
('cvb', 0, 'cvb', 'Suparman'),
('mnb', 0, 'mnb', 'Suparman'),
('tes', 0, 'tes', 'Harrypotha'),
('rt', 0, 'rt', 'Suparman'),
('zxc', 0, 'zxc', 'Powerrenje'),
('zxc', 0, 'zxc', 'Powerrenje'),
('ahay', 0, 'ahay', 'siKering'),
('qwe', 0, 'qwe', 'Powerrenje');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
