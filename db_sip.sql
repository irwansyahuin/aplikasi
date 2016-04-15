-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2016 at 09:15 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `idkab` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(100) NOT NULL,
  `x` varchar(100) NOT NULL,
  `y` varchar(100) NOT NULL,
  PRIMARY KEY (`idkab`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`idkab`, `nama_kabupaten`, `x`, `y`) VALUES
(3, 'Kabupaten Kampar', '0.146671', '101.161736'),
(2, 'Kabupaten Indragiri Hulu', '-0.736118', '102.254792'),
(4, 'Kota Pekanbaru', '0.507068', '101.447779'),
(5, 'Kabupaten Bengkalis', '1.489214', '102.080101'),
(6, 'Kabupaten Indragiri Hilir', '-0.145673', '102.989615'),
(7, 'Kabupaten Kepulauan Meranti', '0.920877', '102.667557'),
(8, 'Kabupaten Kuantan Singingi', '-0.44116', '101.524805'),
(9, 'Kabupaten Pelalawan', '0.51398', '102.163272'),
(10, 'Kabupaten Rokan Hilir', '1.646398', '100.800005'),
(11, 'Kabupaten Rokan Hulu', '1.041093', '100.439656'),
(12, 'Kabupaten Siak', '0.811881', '101.797961'),
(13, 'Kota Dumai', '1.666635', '101.400186');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `idkec` int(11) NOT NULL AUTO_INCREMENT,
  `idkab` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  PRIMARY KEY (`idkec`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idkec`, `idkab`, `nama_kecamatan`) VALUES
(5, 3, 'Gunung Sahilan'),
(3, 3, 'Bangkinang Barat'),
(6, 3, 'Bangkinang'),
(7, 3, 'Bangkinang Seberang'),
(8, 3, 'Kampar'),
(9, 3, 'Kampar Kiri'),
(10, 4, 'Sail');

-- --------------------------------------------------------

--
-- Table structure for table `kependudukan`
--

CREATE TABLE IF NOT EXISTS `kependudukan` (
  `idkep` int(11) NOT NULL AUTO_INCREMENT,
  `idkec` int(11) NOT NULL,
  `luas_wilayah` bigint(20) NOT NULL,
  `jumlah_penduduk` bigint(20) NOT NULL,
  `kepadatan_penduduk` bigint(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`idkep`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `kependudukan`
--

INSERT INTO `kependudukan` (`idkep`, `idkec`, `luas_wilayah`, `jumlah_penduduk`, `kepadatan_penduduk`, `tahun`) VALUES
(18, 10, 4000, 200000, 12000, 2015),
(16, 3, 200, 20, 100, 2015),
(15, 6, 250, 2000, 1200, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `perkebunan`
--

CREATE TABLE IF NOT EXISTS `perkebunan` (
  `idper` int(11) NOT NULL AUTO_INCREMENT,
  `idkec` int(11) NOT NULL,
  `luas_perkebunan` bigint(20) NOT NULL,
  `jumlah_produksi` bigint(20) NOT NULL,
  `jumlah_pks` bigint(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`idper`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `perkebunan`
--

INSERT INTO `perkebunan` (`idper`, `idkec`, `luas_perkebunan`, `jumlah_produksi`, `jumlah_pks`, `tahun`) VALUES
(4, 3, 200, 4555, 4, 2015),
(5, 6, 340, 20, 30, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('admin','member') NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idu`, `nama`, `username`, `password`, `hak_akses`) VALUES
(1, 'sisjoko', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'Irwansyah', 'irwan', '21232f297a57a5a743894a0e4a801fc3', 'admin');
