-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2015 at 02:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_loker`
--

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
  `ID_PERUSAHAAN` int(11) NOT NULL,
  `TGL_POSTING` date DEFAULT NULL,
  `TGL_KADALUARSA` date DEFAULT NULL,
  `JAM_KERJA` float DEFAULT NULL,
  `GAJI` float DEFAULT NULL,
  `DESKRIPSI` mediumtext,
  PRIMARY KEY (`ID_LOWONGAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE IF NOT EXISTS `persyaratan` (
  `ID_LOWONGAN` int(11) NOT NULL,
  `PEND_TERAKHIR` varchar(1024) DEFAULT NULL,
  `UMUR_MIN` int(11) DEFAULT NULL,
  `UMUR_MAX` int(11) DEFAULT NULL,
  `JENIS_KELAMIN` char(2) DEFAULT NULL,
  `POSISI_TERAKHIR` mediumtext,
  `KETERANGAN` mediumtext,
  PRIMARY KEY (`ID_LOWONGAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `ID_PERUSAHAAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SEKTOR` int(11) NOT NULL,
  `NAMA_PERUSAHAAN` mediumtext NOT NULL,
  `TELP` varchar(15) DEFAULT NULL,
  `WEBSITE` mediumtext,
  `EMAIL` mediumtext,
  `ALAMAT` mediumtext,
  `LOGO` text,
  PRIMARY KEY (`ID_PERUSAHAAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`ID_PERUSAHAAN`, `ID_SEKTOR`, `NAMA_PERUSAHAAN`, `TELP`, `WEBSITE`, `EMAIL`, `ALAMAT`, `LOGO`) VALUES
(1, 18, 'PT Bank Rakyat Indonesia (Persero) Tbk.', '-', 'www.biro-psi-kartika.com', '-', 'PO BOX 023 CPA KSBJ 15224A', 'assets/img/bri.png'),
(2, 10, 'PT Indonesia Power', '-', 'www.erecruitment.indonesiapower.co.id', '-', '-', 'assets/company.png'),
(3, 5, 'PT. Kalbe Farma Tbk.', '-', '-', '-', '-', 'assets/company.png'),
(4, 4, 'EMAX Group', '-', '-', 'recruitment_emax@yahoo.com', '-', 'assets/company.png'),
(5, 21, 'Sumatra Copper & Gold', '', 'www.sumatracoppergold.com', 'dns.jobs@scgplc.com', 'Musi Rawas Utara, South Sumatra', 'assets/company.png'),
(6, 16, 'EF - English First', '-', '-', 'englishfirst.jobs@gmail.com', '-', 'assets/company.png'),
(7, 21, 'Piesta Consulting', '-', '-', 'kjpptoha@piestaconsulting.com', 'Gedung Graha Piesta Jl. Warung Buncit Raya No. 12, Warung Jati Barat, Jakarta Selatan 12550', 'assets/company.png'),
(8, 22, 'Paradise Serpong City', '021-64710123', '-', 'jobs@progressgroup.co.id', 'Jl. Puspitek Raya', 'assets/company.png'),
(9, 21, 'PT. Citra Borneo Indah', '-', '-', 'hrd@citraborneo.co.id', 'Jl. H. Udan Said No. 47 Kal-Teng 74113', 'assets/company.png'),
(10, 17, 'Rumah Sakit Harapan Bunda', '-', '-', '-', 'Jl. Raya Bogor Km.22 No.44', 'assets/company.png'),
(11, 30, 'Air Compressor Lubricants', '-', '-', 'hrd@tirtajaya.com', 'Grand Ancol Center Blok B-21 Jl. RE. Martadinata No.1  14430', 'assets/company.png'),
(12, 24, 'CV. Karya Hidup Sentosa', '0274-512095', 'www.quick.co.id', 'hrd.head3@quick.co.id', 'Jl. Magelang 144 Yogyakarta 55241', 'assets/company.png'),
(13, 30, 'PT. Tigaraksa Satria Tbk.', '-', '-', 'humanresourceda@gmail.com', 'PO. Box 08 tigaraksa/tgr 15720', 'assets/company.png'),
(14, 16, 'Alexandria', '021-82433400', '-', '-', 'Jl. Pengasinan Raya No.50 rawa lumbu', 'assets/company.png'),
(15, 30, 'PT. Furniture & Craft', '-', '-', 'homa.hrd@gmail.com', 'Jl. Pluit utara raya no. 53 ', 'assets/company.png'),
(16, 20, 'PT. Chevron', '021-5731020', 'www.chevronindonesia.com', '-', 'Jl. Asia Afrika No. 8, Sentral Senayan I Office Tower Lantai 12, Jakarta Pusat, DKI Jakarta 10270', 'assets/img/chevron.jpg'),
(17, 20, 'PT. Magma Nusantara', '021-5731020', '-', '-', 'Ged Sentral Senayan Jl. Asia Afrika 8 Ged Sentral Senayan I Lt 11 - 18 Gelora, Tanah Abang, Jakarta Pusat 10270 DKI Jakarta', 'assets/company.png'),
(18, 1, 'PT. Prudential', '021-29958888', 'www.prudential.co.id', '-', 'Jl. Jend. Sudirman kav. 79, Prudential Tower Lt. 1-12, Jakarta Pusat, Daerah Khusus Ibukota Jkt 12910', 'assets/company.png');

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
  `ID_SEKTOR` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_SEKTOR` mediumtext,
  PRIMARY KEY (`ID_SEKTOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`ID_SEKTOR`, `NAMA_SEKTOR`) VALUES
(1, 'Asuransi '),
(3, 'Broadcasting '),
(4, 'Elektronik '),
(5, 'Farmasi & Bioteknologi '),
(7, 'Jasa Finansial '),
(8, 'Kimia '),
(9, 'Konstruksi & Material Bangunan '),
(10, 'Listrik'),
(11, 'Makanan'),
(12, 'Manajemen Properti'),
(13, 'Media'),
(14, 'Minuman'),
(15, 'Parawisata'),
(16, 'Pendidikan'),
(17, 'Peralatan & Layanan Kesehatan'),
(18, 'Perbankan'),
(19, 'Percetakan'),
(20, 'Perminyakan'),
(21, 'Pertambangan'),
(22, 'Real Estate'),
(23, 'Software & Komputer'),
(24, 'Teknologi Hardware'),
(25, 'Tekstil'),
(26, 'Telekomunikasi'),
(27, 'Tembakau'),
(28, 'Transportasi'),
(29, 'Pertanian'),
(30, 'Manufaktur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
