-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2020 pada 06.04
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

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
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `cabang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `cabang`) VALUES
(22, 'Bandung / XII'),
(32, 'Bogor / X'),
(62, 'bon'),
(45, 'Cianjur / II'),
(46, 'Cimahi / II'),
(43, 'Garut / II'),
(25, 'Jember / XIII'),
(31, 'Karawang / X'),
(64, 'ksla'),
(36, 'Malang / III'),
(23, 'P.Siantar / III'),
(48, 'Pati / VII'),
(16, 'Pontianak / XIX'),
(38, 'Purwakarta / VI'),
(39, 'Purwokerto / II'),
(58, 'Semarang / VIII'),
(17, 'Singkawang / III'),
(63, 'sjksjk'),
(37, 'Sragen / VII'),
(47, 'Sukabumi / VI'),
(35, 'Surabaya / II'),
(44, 'Tasikmalaya / II'),
(42, 'Tegal / VI'),
(61, 'Tuban / I'),
(34, 'Tulungagung / XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` varchar(50) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `pid` int(9) NOT NULL,
  `id_cabang` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` enum('Tolak','Batal','Pending','tdkinput') DEFAULT NULL,
  `tgl_aplikasi` date DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `an` text NOT NULL,
  `pj` varchar(100) NOT NULL,
  `sv` varchar(100) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count` int(11) NOT NULL DEFAULT '1',
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `id_user`, `pid`, `id_cabang`, `nama`, `status`, `tgl_aplikasi`, `tgl_terima`, `keterangan`, `an`, `pj`, `sv`, `tgl_input`, `count`, `tgl_update`) VALUES
('5db1c682ef180', 'Admin', 147789, 'Jember/XIII', 'Reza', 'tdkinput', '2018-10-25', '2019-10-07', '', '1571931778-an.pdf', '1571931778-sv.pdf', '1571931779-pj.pdf', '2019-11-05 14:42:39', 1, '0000-00-00 00:00:00'),
('5db6228572b9a', 'Admin', 145788, 'Jember/XIII', 'Yoga Adi P', 'Tolak', '2019-10-26', '2019-10-08', '', '1572217477-an.pdf', '1572217477-pj.pdf', '1572217860-pj.pdf', '2019-11-05 14:42:28', 1, '0000-00-00 00:00:00'),
('5db622a792d48', 'Admin', 145669, 'Bandung / XII', 'Dea Tunjung K', 'Batal', '2019-10-25', '2019-10-07', '', '1572217895-an.pdf', '1572217895-pj.pdf', '1572217895-sv.pdf', '2019-11-05 14:42:21', 1, '0000-00-00 00:00:00'),
('5db622ba73f18', 'Admin', 143335, 'Karawang/X', 'Desi Dika R', 'Pending', '2019-10-18', '2019-10-09', '', '1572218298-an.pdf', '1572218272-pj.pdf', '', '2019-11-05 14:42:16', 1, '0000-00-00 00:00:00'),
('5db65a7734ef2', 'Admin', 143567, 'Pontianak/XIX', 'Sella Mustika Asih', 'Batal', '2019-10-26', '2019-10-01', '', '1572231799-an.pdf', '1572231799-pj.pdf', '1572231799-sv.pdf', '2019-11-05 14:42:09', 1, '0000-00-00 00:00:00'),
('5db65ac518768', 'Admin', 146543, 'Singkawang/III', 'Kinara Ayudya Asri', 'Pending', '2018-03-14', '2018-02-07', '', '1572231877-an.pdf', '1572231877-pj.pdf', '1572231877-sv.pdf', '2019-11-05 14:41:59', 1, '0000-00-00 00:00:00'),
('5db65b560dfbc', 'Admin', 148997, 'Bandung / XII', 'Nafdif Gavriel A', 'Batal', '2019-05-30', '2019-05-08', '', '1572232022-an.pdf', '1572232022-pj.pdf', '1572232022-sv.pdf', '2019-11-05 14:41:51', 1, '0000-00-00 00:00:00'),
('5db65bb482a7d', 'Admin', 146785, 'Karawang/X', 'Ganindra N.A', 'Batal', '2018-08-24', '2018-07-19', '', '1572232116-an.pdf', '1572232116-pj.pdf', '1572232116-sv.pdf', '2019-11-05 14:41:41', 1, '0000-00-00 00:00:00'),
('5db65c12b6748', 'Admin', 144655, 'Jember/XIII', 'Aisyah Putri Sekar', 'Tolak', '2018-05-30', '2018-05-07', '', '1572232210-an.pdf', '1572232210-pj.pdf', '1572232210-sv.pdf', '2019-11-05 14:41:13', 1, '2019-11-26 12:54:40'),
('5db65c533df0e', 'Admin', 147884, 'Bandung / XII', 'Azizah Bunga Zahra', 'Batal', '2019-09-25', '2019-08-07', '', '1572232275-an.pdf', '1572232275-pj.pdf', '1572232275-sv.pdf', '2019-11-05 14:41:05', 1, '0000-00-00 00:00:00'),
('5db65db1d0e0b', 'Admin', 142765, 'Semarang / VIII', 'Adela Murti', 'Batal', '2019-04-19', '2019-03-12', '', '1572232625-an.pdf', '1572232625-pj.pdf', '1572232625-sv.pdf', '2019-11-05 14:40:53', 1, '0000-00-00 00:00:00'),
('5db65df7acc8b', 'Admin', 147554, 'Mojokerto /IV', 'Made Garda S', 'Batal', '2019-03-29', '2019-03-21', '', '1572232695-an.pdf', '1572232695-pj.pdf', '1572232695-sv.pdf', '2019-11-05 14:40:47', 1, '0000-00-00 00:00:00'),
('5db65e65e6941', 'Admin', 149954, 'Sragen / VII', 'Widya Purborini', 'Tolak', '2019-06-26', '2019-05-14', '', '1572232805-an.pdf', '1572232805-pj.pdf', '1572232805-sv.pdf', '2019-11-05 14:40:38', 1, '0000-00-00 00:00:00'),
('5db65eaacb154', 'Sella Mustika', 142288, 'Malang / III', 'Afiatus Solecha', 'Pending', '2019-07-18', '2019-06-11', '', '1572232874-an.pdf', '1572232874-pj.pdf', '1572232874-sv.pdf', '2019-11-05 14:41:29', 1, '0000-00-00 00:00:00'),
('5db65ee95c80f', 'Admin', 143774, 'Karawang/X', 'Fajar Yusuf Aldianto', 'tdkinput', '2019-02-21', '2019-01-07', '', '1572232937-an.pdf', '1572232937-pj.pdf', '1572232937-sv.pdf', '2019-11-05 14:40:22', 1, '0000-00-00 00:00:00'),
('5db65f1010555', 'Admin', 145732, 'Purwakarta / VI', 'Miranda Dewantari', 'tdkinput', '2019-10-26', '2019-10-08', '', '', '', '', '2019-11-05 14:40:14', 1, '0000-00-00 00:00:00'),
('5db65f468d6a8', 'Admin', 142667, 'Purwokerto/II', 'Ivan Yudha P', 'Tolak', '2019-10-22', '2019-10-05', '', '1572233030-an.pdf', '1572233030-pj.pdf', '1572233030-sv.pdf', '2019-11-05 14:40:07', 1, '0000-00-00 00:00:00'),
('5db65f91f22f8', 'Admin', 145772, 'Tulungagung / XII', 'Erdina Wahyu P', 'Pending', '2019-02-20', '2019-01-08', '', '1572233105-an.pdf', '1572233106-pj.pdf', '1572233106-sv.pdf', '2019-11-05 14:39:56', 1, '0000-00-00 00:00:00'),
('5db691db6daaa', 'Admin', 1111, 'Tulungagung / XII', 'smaaaa', 'Batal', '2019-10-19', '2019-10-02', '', '', '', '', '2019-11-05 14:39:45', 1, '0000-00-00 00:00:00'),
('5db692826bfa4', 'Admin', 22222, 'Tulungagung / XII', 'qwerty', 'Batal', '0000-00-00', '0000-00-00', '', '', '', '', '2019-10-28 07:02:26', 1, '0000-00-00 00:00:00'),
('5db693977548f', 'Admin', 8767, 'Surabaya / II', 'ghjkl', 'Pending', '0000-00-00', '0000-00-00', '', '1579526203-cover.pdf', '', '', '2019-10-28 07:07:03', 1, '2020-01-20 13:16:44'),
('5db694f7b2d7c', 'Sella Mustika', 145666, 'P.Siantar/III', 'Lina Ayu Handayani', 'Batal', '2019-10-30', '2019-10-25', '', '1572246775-an.pdf', '1572246775-pj.pdf', '1572246775-sv.pdf', '2019-10-28 07:12:55', 1, '0000-00-00 00:00:00'),
('5db6956ec6248', 'Admin', 133445, 'Tulungagung / XII', 'Fahresa Anggun', 'Tolak', '2019-10-25', '2019-10-09', '', '1572246894-an.pdf', '1572246894-pj.pdf', '1572246894-sv.pdf', '2019-10-28 07:14:54', 1, '0000-00-00 00:00:00'),
('5db695ab17b0e', 'Admin', 145789, 'Purwokerto/II', 'Malsen Chusaeni', 'Pending', '2019-10-31', '2019-10-16', '', '1572246955-an.pdf', '1572246955-pj.pdf', '1572246955-sv.pdf', '2019-10-28 07:15:55', 1, '0000-00-00 00:00:00'),
('5db695d837433', 'Admin', 146664, 'Surabaya / II', 'Sindu Kisna I', 'Batal', '2019-11-21', '2019-09-10', '', '1572247000-an.pdf', '1572247000-pj.pdf', '1572247000-sv.pdf', '2019-10-28 07:16:40', 1, '0000-00-00 00:00:00'),
('5db69608debf0', 'Admin', 147773, 'Malang / III', 'Mely Ameliya', 'tdkinput', '2019-12-26', '2019-08-07', '', '1572247048-an.pdf', '1572247048-pj.pdf', '1572247048-sv.pdf', '2019-10-28 07:17:29', 1, '0000-00-00 00:00:00'),
('5db696353b158', 'Admin', 149995, 'Bogor /X', 'Rajiv Aditya', 'Tolak', '2019-11-14', '2019-08-07', '', '1572247093-an.pdf', '1572247093-pj.pdf', '1572247093-sv.pdf', '2019-10-28 07:18:13', 1, '0000-00-00 00:00:00'),
('5db6965e7f22a', 'Admin', 146339, 'P.Siantar/III', 'Ivan Adrian', 'Batal', '2019-11-28', '2019-09-19', '', '1572247134-an.pdf', '1572247134-pj.pdf', '1572247134-sv.pdf', '2019-10-28 07:18:54', 1, '0000-00-00 00:00:00'),
('5db696918f8ce', 'Admin', 144823, 'Tulungagung / XII', 'Afifudin', 'Tolak', '2019-10-25', '2019-09-02', '', '1572247185-an.pdf', '1572247185-pj.pdf', '1572247185-sv.pdf', '2019-10-28 07:19:45', 1, '0000-00-00 00:00:00'),
('5db696d988958', 'Admin', 147233, 'Bandung / XII', 'Bondan', 'Pending', '2019-11-29', '2019-11-13', '', '1572247257-an.pdf', '1572247257-pj.pdf', '1572247257-sv.pdf', '2019-10-28 07:20:57', 1, '0000-00-00 00:00:00'),
('5dbec083d15aa', 'Admin', 10101, 'Malang / III', 'cobaa', 'Pending', '2019-11-29', '2019-11-11', '', '', '', '', '2019-11-03 11:56:51', 1, '0000-00-00 00:00:00'),
('5dbec0df402a3', 'Admin', 20202, 'Jember/XIII', 'lagi', 'Tolak', '2019-11-14', '2019-11-04', '', '', '', '', '2019-11-03 11:58:23', 1, '0000-00-00 00:00:00'),
('5dbed72987d0a', 'Admin', 146998, 'Pontianak/XIX', 'Nadya', 'Batal', '2019-11-29', '2019-11-05', '', '1572917944-1571931778-an(1).pdf', '', '', '0000-00-00 00:00:00', 1, '2019-11-08 02:30:20'),
('5dc0d30df3ab3', 'Admin', 777777, 'Karawang/X', 'Noval', 'Pending', '2019-11-21', '2019-11-16', '', '1572918030-1572232210-an.pdf', '', '', '2019-11-08 01:50:26', 1, '0000-00-00 00:00:00'),
('5dc17b9ceaa8b', 'Sella Mustika', 8888, 'Pontianak/XIX', 'Nafisa Kusuma', 'Batal', '2019-11-08', '2019-11-21', '', '1574209288-155667-AN.pdf', '', '', '0000-00-00 00:00:00', 1, '2019-11-20 00:21:28'),
('5dc217d7799aa', 'Admin', 149988, 'Pontianak/XIX', 'Sasa Denta', 'Batal', '2019-12-25', '2019-09-08', '', '1573001175-1571931778-an(1).pdf', '1573001175-1572186945-pj.pdf', '1573001175-1571931778-an(2).pdf', '2019-11-08 01:45:05', 1, '2019-11-08 02:29:40'),
('5dc933367fe1b', 'Admin', 1456666, 'Tulungagung / XII', 'Sella Mustika', 'Batal', '2019-11-28', '2019-11-12', '', '1573466934-1571931778-an(2).pdf', '1573466934-1571934950-an(1).pdf', '1573466934-1571931778-an(1).pdf', '2019-11-11 10:08:54', 1, '2019-11-11 10:08:54'),
('5dd486e389698', 'Sella Mustika', 155667, 'Jember/XIII', 'qwerty', 'Pending', '2019-11-29', '2019-11-04', '', '1574209251-155667-AN.pdf', '1574209251-155667-PJ.pdf', '1574209251-155667-SV.pdf', '2019-11-20 00:20:51', 1, '2019-11-20 00:20:51'),
('5ddb9dbcd6ab8', 'Admin', 123456, 'Pontianak/XIX', 'qwerty', '', '0000-00-00', '0000-00-00', '', '1574699340-sv.pdf', '1574699312-pj.pdf', '', '2019-11-25 09:24:12', 1, '2019-11-25 16:29:00'),
('5ddce7c1acfa3', 'Admin', 145599, 'Karawang/X', 'Budi Susilo', 'Batal', '2019-11-22', '2019-11-04', '', '1574758337-afia.pdf', '1574758337-sela.pdf', '1574758337-survey.pdf', '2019-11-26 08:52:17', 1, '2019-11-26 08:55:03'),
('5ddd1f2e75018', 'Admin', 145769, 'Bandung / XII', 'Harry Style', 'Batal', '2019-11-22', '2019-11-03', '', '1574772526-survey.pdf', '1574772526-sela.pdf', '1574772526-afia.pdf', '2019-11-26 12:48:46', 1, '2019-11-26 12:52:55'),
('5ddfce8b23989', 'Sella Mustika', 133333, 'Surabaya / II', 'niall', 'Batal', '2019-11-29', '2019-11-03', '', '1574948491-sela.pdf', '1574948491-afia.pdf', '1574948491-RESUME.docx', '2019-11-28 13:41:31', 1, '2019-11-28 13:41:31'),
('5e25b0c536e57', 'Admin', 145567, 'Cianjur / II', 'minuu', 'Batal', '2020-01-23', '2020-01-15', '', '1579528389-cover.pdf', '1579528428-Penilaian Oleh Penyelia.pdf', '', '2020-01-20 13:53:09', 1, '2020-01-20 13:54:19'),
('5e26605da1925', 'Admin', 177788, 'Cianjur / II', 'mustika', 'Batal', '2020-01-09', '2020-01-16', 'KTP tidak ada', '', '', '', '2020-01-21 02:22:21', 1, '2020-01-21 02:22:21'),
('5e2662e00a955', 'Admin', 99999, 'Cimahi / II', 'Asih Mustika', 'Batal', '2020-01-24', '2020-01-09', 'keteranga', '1579573984-cover.pdf', '', '', '2020-01-21 02:33:04', 1, '2020-01-21 02:50:40'),
('5e26682560544', 'Admin', 166678, 'Cianjur / II', 'Kinara Ayudya Asri', 'Pending', '2020-01-15', '2020-01-11', 'Perilaku jelek', '1579575333-cover.pdf', '', '', '2020-01-21 02:55:33', 1, '2020-01-21 02:55:33'),
('5e266f6f7142b', 'Admin', 189076, 'Pati / VII', 'Nova', 'Batal', '2020-01-30', '2020-01-15', 'Sudah pinjam dari yang lain', '1579577199-cover.pdf', '', '', '2020-01-21 03:26:39', 1, '2020-01-21 03:26:39'),
('5e2670c8985f7', 'Admin', 199999, 'Cimahi / II', 'Sella', 'Batal', '2020-01-24', '2020-01-14', 'Perilaku jelek', '1579577544-cover.pdf', '1579577618-cover.pdf', '', '2020-01-21 03:32:24', 1, '2020-01-21 03:33:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Sella Mustika', 'sellamustika@gmail.com', 'default.jpg', '$2y$10$ffQebNx2jEQPMCrMF6MZ9OA0D6ZH3BmaPEco.2SbWI94rS.FXOfNK', 2, 1, 1570549909),
(7, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$Q2i.DHotDG2mvHJFQJI7W.s/vn2HC3aw.5Himb574xyVZLzpBhwpG', 1, 1, 1570856251),
(8, 'sella', 'mustika12@gmail.com', 'default.jpg', '$2y$10$aFK0DikYivsBY.DPLHYd2.cGitMpblf.nj1d8YrxfM3KRc89.494u', 2, 1, 1574670353),
(15, 'Mustika', 'mustika@gmail.com', 'default.jpg', '$2y$10$/GLV/A27VINhj9I077F/men7PaF51KNOODbCP1Nkjj7ppKGkqEplO', 2, 1, 1574994362),
(16, 'asih', 'asih@gmail.com', '', '123', 1, 1, 0),
(17, 'asih', 'asih1@gmail.com', 'default.jpg', '$2y$10$5s7TOBSTpzEtUYfOMC6o.eT/LY0BMSvKv.Ewo7RcTVNiYpAWU.LJi', 2, 1, 1585929557);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 7),
(8, 2, 6),
(9, 1, 8),
(10, 1, 10),
(11, 1, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Beranda'),
(4, 'Form'),
(5, 'Cabang'),
(6, 'User'),
(7, 'Chart'),
(8, 'Activity'),
(10, 'Create'),
(11, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'ni ni-tv-2 text-blue', 1),
(2, 2, 'Beranda', 'beranda', 'ni ni-single-02 text-yellow', 1),
(3, 1, 'Cabang', 'cabang', 'ni ni-building text-green', 1),
(5, 2, 'Data ATB', 'user', 'ni ni-bullet-list-67 text-pink', 1),
(6, 1, 'ATB', 'form', 'ni ni-bullet-list-67 text-yellow', 1),
(7, 1, 'Chart', 'chart', 'ni ni-chart-bar-32 text-red', 1),
(8, 1, 'Activity', 'activity', 'ni ni-watch-time text-orange', 1),
(10, 1, 'Create ', 'create', 'fas fa-fw fa-user text-blue', 1),
(11, 1, 'Member', 'member', 'fas fa-fw fa-user-friends text-warning', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD UNIQUE KEY `cabang` (`cabang`),
  ADD UNIQUE KEY `cabang_2` (`cabang`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
