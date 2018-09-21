-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 03:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_permib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `slug_post` varchar(255) NOT NULL,
  `users` varchar(30) DEFAULT NULL,
  `judul_post` varchar(255) DEFAULT NULL,
  `isi_post` text,
  `image` text,
  `tanggal_event` date DEFAULT NULL,
  `tanggal_post` datetime DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`slug_post`, `users`, `judul_post`, `isi_post`, `image`, `tanggal_event`, `tanggal_post`, `tanggal`) VALUES
('perfect19', NULL, 'PERFECT19', '<p>[OPEN RECRUITMENT PERFECT 2019]</p>\r\n<p><br />PERFECT (Permib freedom in creativity) 2019 is getting closer!!!????<br />Ayo kontribusikan dirimu untuk menjadi bagian dari kepanitiaan PERFECT 2019.</p>\r\n<p><br />Link formulir pendaftaran terlampir:<br />https://goo.gl/forms/002GFssgeyiqyyS32</p>\r\n<p><br />Link berkas yang harus di print out dapat di download di:<br />http://bit.ly/formPERFECT19</p>\r\n<p>&nbsp;</p>\r\n<p>Print out berkas dan lampiran persyaratan lengkap dikumpulkan pada:</p>\r\n<p><br />Tanggal: 23-26 September 2018<br />Waktu: 12.00-17.00<br />Tempat: Kantin Teknik</p>\r\n<p><br />*Hanya untuk mahasiswa Tel-U angkatan 2017&amp;2018 yang berdomisili di Bandung Raya (Bandung kota, cimahi, kab Bandung, kab bandung barat)</p>\r\n<p><br />Tahap Oprect:<br />1. Tahap Rekruitasi I (23 September 2018)<br />2. Tahap Rekruitasi II (27 September-4 Oktober 2018)<br />3. Tahap rekruitasi III (20-21 Oktober 2018)</p>\r\n<p><br />Notes: Para calon peserta wajib mengikuti semua tahapan rekruitasi karna semua masuk dalam penilaian.</p>\r\n<p><br />CP:</p>\r\n<p>id line : najminzly / 082119058569<br />id line : rakyanprajnagra / 081224152628</p>\r\n<p><br />More info: www.instagram.com/perfect19__</p>\r\n<p><br />BANDUNG??? HADE PISAN EUY!!!</p>\r\n<p>&nbsp;</p>', NULL, '0000-00-00', '2018-09-20 08:09:29', '2018-09-20 06:44:47'),
('permib-18', NULL, 'PERMIB 18', '<p>asdasdasd</p>', './assets/image/post///.jpeg', NULL, '2018-09-21 14:09:55', '2018-09-21 12:56:14'),
('permib-mountainer-2018', NULL, 'PERMIB MOUNTAINER 2018', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '0000-00-00', '2018-09-21 05:09:07', '2018-09-21 03:15:01'),
('permib-nobar-18', NULL, 'PERMIB NOBAR 18', '<p>asdasdasdasd</p>', './assets/image/post///.jpg', NULL, '2018-09-21 14:09:39', '2018-09-21 12:54:01'),
('permib-touring-2018', NULL, 'PERMIB TOURING 2018', '<p>&nbsp;mantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apamantap ada apa</p>\r\n<p>&nbsp;</p>', NULL, NULL, '2018-09-21 06:09:06', '2018-09-21 04:33:30'),
('permib-wisuda-18', NULL, 'PERMIB WISUDA 18', '<p>asdasdasdasd</p>', './assets/image/post/2018/09/permib-wisuda-18.jpeg', NULL, '2018-09-21 14:09:09', '2018-09-21 12:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`username`, `password`, `nama`, `level`, `jabatan`, `image`) VALUES
('admin', 'C7AD44CBAD762A5DA0A452F9E854FDC1E0E7A52A38015F23F3EAB1D80B931DD472634DFAC71CD34EBC35D16AB7FB8A90C81F975113D6C7538DC69DD8DE9077EC', 'admin', 72, 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`slug_post`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
