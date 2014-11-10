-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 11:15 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `username` varchar(4) NOT NULL DEFAULT '',
  `nama` varchar(20) DEFAULT NULL,
  `telp` int(12) DEFAULT NULL,
  `password` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`username`, `nama`, `telp`, `password`) VALUES
('adit', 'aditya rikky', 2147483647, 'adit'),
('deka', 'deka purnawan', 2147483647, 'deka'),
('heng', 'hengky', 2147483647, 'heng'),
('kuki', 'jakal km 5', 9120934, 'kuki'),
('kupe', 'andria bak', 941204, 'kupe'),
('saka', 'saka wibawa putra', 3812938, 'saka'),
('yogi', 'yogine ajie', 2147483647, 'yogi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(4) NOT NULL DEFAULT '',
  `username` varchar(4) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `id_petugas` varchar(4) DEFAULT NULL,
  `nama_buku` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `waktu`, `id_petugas`, `nama_buku`) VALUES
('1', 'adit', '2014-11-10', '10', 'pemograman sql'),
('2', 'deka', '2014-11-10', '10', 'oriented programing'),
('3', 'yogi', '2014-11-10', '12', 'naruto ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`username`) REFERENCES `peminjam` (`username`),
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `peminjam` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
