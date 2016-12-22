-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2014 at 11:04 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'redaksi@gmail..com', '08238923848', 'admin', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `id_agama` int(5) NOT NULL AUTO_INCREMENT,
  `nama_agama` varchar(15) NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islamic'),
(2, 'Protestant'),
(5, 'Buddha');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id_daftar` int(5) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(5) NOT NULL,
  `no_daftar` varchar(15) NOT NULL,
  `status_daftar` varchar(30) NOT NULL DEFAULT 'Terdaftar',
  `pwd` varchar(100) DEFAULT NULL,
  `tgl_daftar` date NOT NULL,
  `jam_daftar` time NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `id_siswa`, `no_daftar`, `status_daftar`, `pwd`, `tgl_daftar`, `jam_daftar`) VALUES
(58, 64, '201312050065', 'Terdaftar', NULL, '2013-12-05', '00:26:13'),
(59, 65, '201312050066', 'Terdaftar', NULL, '2013-12-05', '07:00:58'),
(60, 66, '201410300067', 'Terdaftar', NULL, '2014-10-30', '10:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `depan`
--

CREATE TABLE IF NOT EXISTS `depan` (
  `id_depan` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_depan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `depan`
--

INSERT INTO `depan` (`id_depan`, `judul`, `isi`) VALUES
(1, 'e PMB System Selamat Datang di Website Pendaftaran', 'Selamat datang di website Penerimaan Mahasiswa Baru Universitas, Kami mengundang Anda untuk melihat-lihat website kami untuk kemudian mendapatkan gambaran tentang program penerimaan yang kami tawarkan. Anda dapat langsung mendaftar melalui website kami ini. Langkah Pendaftaran dalam Pendaftaran Online. Memilih sebuah universitas tidak diragukan lagi, merupakan sebuah keputusan penting dalam hidup Anda. Jangan ragu untuk menghubungi kontak kami jika Anda ingin kami membantu Anda lebih jauh dalam studi di Universitas. Kami akan dengan senang hati membantu Anda. Kami mengundang Anda untuk melihat-lihat website kami untuk kemudian mendapatkan gambaran tentang program penerimaan yang kami tawarkan. Anda dapat langsung mendaftar melalui website kami ini. Langkah Pendaftaran dalam Pendaftaran Online. Memilih sebuah universitas tidak diragukan lagi, merupakan sebuah keputusan penting dalam hidup Anda. Jangan ragu untuk menghubungi kontak kami jika Anda ingin kami membantu Anda lebih jauh dalam studi di Universitas. Kami akan dengan senang hati membantu Anda.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id_home` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_home`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id_home`, `judul`, `isi`, `aktif`) VALUES
(1, 'Indonesian state university', 'Welcome to New Student Website Online State University Online PMB Indonesia, I hope this website makes it easy for prospective students / i in the register at the campus', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `isi`, `email`, `tanggal`, `aktif`) VALUES
(4, 'Fani ', 'Mencoba hal baru', 'fani@yahoo.com', '2013-12-05', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(5) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(5) NOT NULL,
  `nama_kota` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
(1, 1, 'Jakarta Pusat'),
(2, 1, 'Jakarta Barat'),
(3, 1, 'Jakarta Timur'),
(4, 1, 'Jakarta Selatan'),
(5, 1, 'Jakarta Utara'),
(6, 2, 'Kabupaten Bandung'),
(7, 2, 'Kabupaten Bogor'),
(8, 2, 'Kabupaten Bekasi'),
(9, 2, 'Kabupaten Cirebon'),
(10, 2, 'Kabupaten Indramayu'),
(11, 3, 'Kabupaten Batang'),
(12, 3, 'Kabupaten Brebes'),
(13, 3, 'Kabupaten Cilacap'),
(14, 3, 'Kabupaten Demak'),
(15, 3, 'Kabupaten Klaten'),
(16, 3, 'Kabupaten Magelang'),
(17, 3, 'Kabupaten Semarang'),
(18, 3, 'Kota Surakarta'),
(19, 4, 'Kota Yogyakarta'),
(20, 4, 'Kabupaten Bantul'),
(21, 4, 'Kabupaten Sleman'),
(22, 4, 'Kabupaten Gunung Kidul'),
(23, 4, 'Kabupaten Kulon Progo'),
(24, 5, 'Kabupaten Kediri'),
(25, 5, 'Kabupaten Gresik'),
(26, 5, 'Kabupaten Madiun'),
(27, 5, 'Kota Surabaya'),
(28, 5, 'Kabupaten Sidoarjo'),
(29, 5, 'Kota Malang'),
(30, 5, 'Kabupaten Tuban'),
(31, 5, 'Kota Blitar'),
(32, 5, 'Kota Mojokerto'),
(33, 5, 'Kabupaten Banyuwangi'),
(34, 5, 'Kabupaten Ngawi');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int(5) NOT NULL AUTO_INCREMENT,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL,
  `urutan` int(5) NOT NULL,
  `email_pengelola` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `status`, `aktif`, `urutan`, `email_pengelola`) VALUES
(18, 'Pendaftar', '?module=pendaftar', '', '', 'admin', 'Y', 5, ''),
(10, 'Modul', '?module=modul', '', '', 'admin', 'N', 3, ''),
(43, 'Profil ', '?module=profile', '', 'favicon.ico', 'admin', 'Y', 2, 'gammanicks@gmailcom'),
(44, 'Kontak', '?module=kontak', '', '', 'admin', 'Y', 6, ''),
(63, 'Prodi', '?module=prodi', '', '', 'admin', 'Y', 3, ''),
(64, 'Status', '?module=status', '', '', 'admin', 'Y', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(5) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `aktif`) VALUES
(1, 'PD', 'Pendidikan Dokter', 'Y'),
(2, 'PDG', 'Pendidikan Dokter Gigi', 'Y'),
(3, 'FTOS', 'FTIK OSEANOLOGI', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama`) VALUES
(1, 'DKI Jakarta'),
(2, 'Jawa Barat'),
(3, 'Jawa Tengah'),
(4, 'DI Yogyakarta'),
(5, 'Jawa Timur'),
(6, 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `id_agama` int(5) NOT NULL,
  `id_stat` int(5) NOT NULL,
  `id_prodi` int(5) NOT NULL,
  `no_test` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `darah` char(2) NOT NULL,
  `warga` char(3) NOT NULL,
  `sumber` char(10) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sma` varchar(20) NOT NULL,
  `kota_sma` varchar(30) NOT NULL,
  `jns` char(3) NOT NULL,
  `jur` char(4) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `job_ayah` varchar(30) NOT NULL,
  `job_ibu` varchar(30) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `sekolah_ayah` varchar(30) NOT NULL,
  `sekolah_ibu` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `kota_ortu` varchar(30) NOT NULL,
  `telp_ortu` varchar(12) NOT NULL,
  `nun` int(5) NOT NULL,
  `thn` int(4) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_agama`, `id_stat`, `id_prodi`, `no_test`, `nama`, `kelamin`, `status`, `darah`, `warga`, `sumber`, `tempat`, `alamat`, `kota`, `kodepos`, `provinsi`, `tanggal`, `hp`, `email`, `sma`, `kota_sma`, `jns`, `jur`, `ayah`, `job_ayah`, `job_ibu`, `alamat_ortu`, `sekolah_ayah`, `sekolah_ibu`, `ibu`, `kota_ortu`, `telp_ortu`, `nun`, `thn`, `gambar`, `nama_file`) VALUES
(64, 1, 2, 3, '23232', 'tryty', 'L', 'S', 'A', 'WNI', 'Orangtua', 'gdgd', 'ghgfhfgh', 'fddfdfd', 5643, 'rftryrty', '04 Desember 1996', '0976867676', 't@yahoo.com', 'hgfhfg', '', '', 'IPA', 'asdad', 'sada', 'asda', 'sada', 'sada', 'asda', 'ads', 'asdas', '566566565', 90, 2011, '2.jpg', 'tutorial.zip'),
(65, 1, 1, 3, 'ABCS11', 'Ahmad Darmawan', 'L', 'S', 'A', 'WNI', 'Orangtua', 'Surakarta', 'Jl. Diponegoro No. 12 Surakarta', 'Surakarta', 98768, 'Surakarta', '07 Desember 1994', '08645462728', 'darma@yahoo.com', 'SMAN 2 Surakarta', '', '', 'IPA', 'Edi Susilo', 'PNS', 'Guru', 'Jl. Diponegoro No. 12 Surakarta', 'Sarjana', 'Sarjana', 'Farida', 'Surakarta', '086452626778', 98, 2010, '11.jpg', 'tutorial.pdf'),
(66, 1, 0, 0, '', 'Faldo', 'L', 'S', 'A', 'WNI', 'Orangtua', 'Jakarta', 'Afasfa', 'Jka', 2341, 'Kjajkah', '19 Oktober 2005', '343535', 'farah@gmail.com', 'SFawe', 'Sfafa', '', 'IPA', 'Set', 'ASs', 'Adqw', 'Sfagf', 'Sfgfa', 'ASsfasgf', 'Asfg', 'Sfasgf', '3435353', 60, 2014, 'photo.jpg', 'ecommerce.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_stat` int(5) NOT NULL AUTO_INCREMENT,
  `nama_stat` varchar(30) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_stat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_stat`, `nama_stat`, `aktif`) VALUES
(1, 'RE (Reguler)', 'Y'),
(2, 'Putra TNI AL', 'Y'),
(3, 'Putra PNS AL', 'Y'),
(4, 'Transfer', 'Y');
