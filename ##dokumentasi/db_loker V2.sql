-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 06:09 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_loker`
--
CREATE DATABASE IF NOT EXISTS `db_loker` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_loker`;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `ID_LOKASI` int(11) NOT NULL,
  `NAMA_LOKASI` varchar(1024) DEFAULT NULL,
  `PROVINSI` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID_LOKASI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `ID_LOWONGAN` int(11) NOT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `ID_LOKASI` int(11) DEFAULT NULL,
  `ID_POSISI` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PENDIDIKAN` varchar(255) NOT NULL,
  `UMUR_MIN` int(11) NOT NULL,
  `UMUR_MAX` int(11) NOT NULL,
  `JK` char(2) NOT NULL,
  `POSISI` varchar(255) NOT NULL,
  `TGL_POSTING` date DEFAULT NULL,
  `TGL_KADALUARSA` date DEFAULT NULL,
  `JAM_KERJA` float DEFAULT NULL,
  `GAJI` float DEFAULT NULL,
  `DESKRIPSI` text,
  PRIMARY KEY (`ID_LOWONGAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mencari`
--

CREATE TABLE IF NOT EXISTS `mencari` (
  `ID_LOWONGAN` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `SCORE` int(11) NOT NULL,
  `TANGGAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE IF NOT EXISTS `pelamar` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(1024) NOT NULL,
  `TGL_JOIN` date NOT NULL,
  `JK` char(2) NOT NULL,
  `FOTO` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `PENDIDIKAN` varchar(255) NOT NULL,
  `POSISI` varchar(255) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `TGL_JOIN` datetime NOT NULL,
  `ID_SEKTOR` int(11) NOT NULL,
  `NAMA_PERUSAHAAN` mediumtext,
  `ALAMAT` text NOT NULL,
  `TELP` varchar(30) DEFAULT NULL,
  `WEBSITE` mediumtext,
  `EMAIL` mediumtext,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`USERNAME`, `PASSWORD`, `TGL_JOIN`, `ID_SEKTOR`, `NAMA_PERUSAHAAN`, `ALAMAT`, `TELP`, `WEBSITE`, `EMAIL`) VALUES
('alexandria', 'alexandria', '2015-12-29 00:00:00', 10, 'Alexandria', 'Jl. Pengasinan Raya No.50 rawa lumbu', '2182433400', '', ''),
('bankbri', 'bankrakyatindonesia', '2015-02-06 00:00:00', 16, 'PT Bank Rakyat Indonesia (Persero) Tbk.', 'PO BOX 023 CPA KSBJ 15224A', '021 5403242', 'www.biro-psi-kartika.com', ''),
('citraborne', 'indahcbi123', '2015-01-24 00:00:00', 11, 'PT. Citra Borneo Indah', 'Jl. H. Udan Said No. 47 Kal-Teng 74113', '', '', 'hrd@citraborneo.co.id'),
('compressorlub', 'compressorlub', '2015-02-03 00:00:00', 12, 'Air Compressor Lubricants', 'Grand Ancol Center Blok B-21 Jl. RE. Martadinata No.1  14430', '', '', 'hrd@tirtajaya.com'),
('emaxgroup', 'emaxgroup', '2014-12-27 00:00:00', 1, 'EMAX Group', '', '', '', 'recruitment_emax@yahoo.com'),
('englishfirst', 'englishfirst', '2015-02-07 00:00:00', 17, 'EF - English First', '', '', '', 'englishfirst.jobs@gmail.com'),
('furniture', 'furniture', '2015-01-21 00:00:00', 10, 'PT Furniture', 'Jl. Pluit utara raya no. 53 ', '', '', 'homa.hrd@gmail.com'),
('indonesiapower', 'indonesiapower', '2015-03-12 00:00:00', 11, 'PT Indonesia Power', '', '', 'http://erecruitment.indonesiapower.co.id/', ''),
('kalbefarma', 'kalbefarma', '2015-02-01 00:00:00', 7, 'PT. Kalbe Farma Tbk.', '', '', '', ''),
('karyahidup', 'hidupsentosa', '2014-11-12 00:00:00', 3, 'CV. Karya Hidup Sentosa', 'Jl. Magelang 144 Yogyakarta 55241', '(0274) 512095', 'www.quick.co.id', 'hrd.head3@quick.co.id'),
('paradise', 'paradise', '2014-12-11 00:00:00', 17, 'Paradise Serpong City', 'Jl. Puspitek Raya', '2164710123', '', 'jobs@progressgroup.co.id'),
('piesta', 'piesta2312', '2014-12-23 00:00:00', 17, 'Piesta Consulting', 'Gedung Graha Piesta Jl. Warung Buncit Raya No. 12, Warung Jati Barat, Jakarta Selatan 12550', '', '', 'kjpptoha@piestaconsulting.com'),
('rshbunda', 'rshbunda', '2015-01-05 00:00:00', 14, 'Rumah Sakit Harapan Bunda', 'Jl Raya Bogor Km.22 No.44', '', '', ''),
('sumateracg', 'scp1235678', '2014-11-25 00:00:00', 6, 'Sumatra Copper & Gold', 'Musi Rawas Utara, South Sumatra', '-', 'www.sumatracoppergold.com', 'dns.jobs@scgplc.com'),
('tigaraksa', 'tigaraksa2701', '2015-01-27 00:00:00', 3, 'PT Tigaraksa', 'Po. Box 08 tigaraksa/tgr 15720', '', '', 'humanresourceda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `ID_POSISI` int(11) NOT NULL,
  `NAMA_POSISI` mediumtext,
  PRIMARY KEY (`ID_POSISI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE IF NOT EXISTS `sektor` (
  `ID_SEKTOR` int(11) NOT NULL,
  `NAMA_SEKTOR` mediumtext,
  PRIMARY KEY (`ID_SEKTOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`ID_SEKTOR`, `NAMA_SEKTOR`) VALUES
(1, 'Makanan/Minuman'),
(2, 'Tembakau'),
(3, 'Tekstil'),
(4, 'Pakaian'),
(5, 'Percetakan'),
(6, 'Batu bara/Minyak/Gas bumi'),
(7, 'Kimia'),
(8, 'Mesin'),
(9, 'Peralatan Kantor'),
(10, 'Furniture'),
(11, 'Listrik'),
(12, 'Kendaraan Bermotor'),
(13, 'Elektronik/Hardware'),
(14, 'Kedokteran'),
(15, 'Software'),
(16, 'Keuangan'),
(17, 'Jasa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
