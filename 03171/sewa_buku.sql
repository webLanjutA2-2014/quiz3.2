-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2014 at 07:46 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sewa_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_peminjam`, `no_telp`, `judul_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(2, 'komsi', '085740776848', 'Laskar Pelangi', '2014-11-10', '2014-11-14'),
(3, 'hanafi', '08576544565', 'Kala sepi menyambar', '2014-11-12', '2014-11-14'),
(5, 'kartika', '082927772827', 'Sang pemimpi', '2014-11-01', '2014-11-14'),
(6, 'ani', '082738992818', 'Lupus', '2014-11-13', '2014-11-14'),
(8, 'suci', '0986644654', 'Ayat-ayat cinta', '2014-11-12', '2014-11-14'),
(10, 'anisa', '089272662728', 'Menari Bersama Bintang', '2014-11-05', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('cinta', 'c1nt4'),
('Dina', 'd1n4'),
('hanafi', 'h4n4f1'),
('sinta', '51nt4'),
('Sofi', '50f1');
