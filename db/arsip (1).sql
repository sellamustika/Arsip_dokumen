-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 12:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `purchase` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2013, 2000, 3000, 1000),
(2, 2014, 4500, 5000, 500),
(3, 2015, 3000, 4500, 1500),
(4, 2016, 2000, 3000, 1000),
(5, 2017, 2000, 4000, 2000),
(6, 2018, 2200, 3000, 800),
(7, 2019, 5000, 7000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `stok` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `merk`, `stok`) VALUES
(1, 'aqua1', 'aqua', 40),
(2, 'ades1', 'ades', 90),
(3, 'Coca cola hitam', 'coca cola', 30),
(4, 'sprit1', 'sprit', 20),
(5, 'fanta merah', 'fanta', 25);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `cabang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `cabang`) VALUES
(16, 'Pontianak/XIX'),
(17, 'Singkawang/III'),
(22, 'Bandung / XII'),
(23, 'P.Siantar/III'),
(25, 'Jember/XIII'),
(31, 'Karawang/X');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(50) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `pid` varchar(9) NOT NULL,
  `id_cabang` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` enum('Tolak','Batal','Pending','tdkinput') DEFAULT NULL,
  `tgl_aplikasi` date DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `an` text NOT NULL,
  `pj` varchar(100) NOT NULL,
  `sv` varchar(100) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `id_user`, `pid`, `id_cabang`, `nama`, `status`, `tgl_aplikasi`, `tgl_terima`, `an`, `pj`, `sv`, `tgl_input`, `count`) VALUES
('', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00 00:00:00', 1),
('5da2aa77dfdbd', '', '145999', 'Sragen / ', 'Asih', 'Batal', '2019-10-25', '2019-09-30', '', '', 'sv.pdf', '0000-00-00 00:00:00', 1),
('5da2aab63ee7c', '', '146666', 'Tuban / I', 'mkkj', 'Pending', '2019-10-17', '2019-09-29', '', 'pj.pdf', '', '2019-10-13 04:40:22', 1),
('5da2aaeb421d1', '', '143333', 'Singkawan', 'kl;', 'tdkinput', '2019-11-09', '2019-10-02', '', '', 'sv.pdf', '2019-10-13 04:41:15', 1),
('5da2ab5c389cc', '', '147889', 'Balikpapa', 'lkjhgf gg', 'Pending', '2019-11-08', '2019-10-04', 'an.pdf', '', '', '0000-00-00 00:00:00', 1),
('5daaa58e04f58', '', '144444', 'Bandung / XII', 'Asih', 'Pending', '2019-10-31', '2019-09-29', 'lat6.pdf', '', '', '2019-10-19 05:56:30', 1),
('5dabcb91ce36d', '', '5555', 'Singkawang/III', 'sma', 'Tolak', '2019-10-31', '2019-09-01', 'lat6.pdf', '', '', '2019-10-20 02:50:57', 1),
('5dabd029698e0', '', '789', 'Singkawang/III', 'kk', 'Tolak', '2019-10-31', '2019-10-18', '', '', 'lat6.pdf', '2019-10-20 03:10:33', 1),
('5dac7888e595a', '', '123456', 'Pontianak/XIX', 'sma', 'Batal', '2019-11-29', '2019-08-05', '', 'lat6.pdf', '', '2019-10-20 15:08:57', 1),
('5dac7e20755d0', '', '9999', 'P.Siantar/III', 'ams', 'tdkinput', '2019-12-27', '2019-10-17', 'Session.pdf', '', 'lat6.pdf', '2019-10-20 15:32:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `pid` varchar(9) NOT NULL,
  `SV` text NOT NULL,
  `AN` text NOT NULL,
  `PJ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Sella Mustika', 'sellamustika@gmail.com', 'default.jpg', '$2y$10$ffQebNx2jEQPMCrMF6MZ9OA0D6ZH3BmaPEco.2SbWI94rS.FXOfNK', 2, 1, 1570549909),
(7, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$Q2i.DHotDG2mvHJFQJI7W.s/vn2HC3aw.5Himb574xyVZLzpBhwpG', 1, 1, 1570856251);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Beranda'),
(3, 'Menu'),
(4, 'Form');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'ni ni-tv-2 text-blue', 1),
(2, 2, 'Beranda', 'beranda', 'ni ni-single-02 text-yellow', 1),
(3, 1, 'Cabang', 'cabang', 'ni ni-building text-green', 1),
(4, 3, 'Menu Management', 'Menu', 'fas fa-fw fa-folder', 1),
(5, 2, 'Data ATB', 'user', 'ni ni-bullet-list-67 text-pink', 1),
(6, 1, 'ATB', 'form', 'ni ni-bullet-list-67 text-yellow', 1),
(7, 1, 'Chart', 'chart', 'ni ni-chart-bar-32 text-red', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
