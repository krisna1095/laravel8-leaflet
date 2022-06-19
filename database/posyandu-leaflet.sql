-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 06.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu-leaflet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `id_kecamatan`, `nama`) VALUES
(1, 15, 'Gondanglegi'),
(2, 15, 'Singkalanyar'),
(3, 15, 'Baleturi'),
(4, 15, 'Kurungrejo'),
(5, 15, 'Mojoagung'),
(6, 15, 'Nglawak'),
(7, 15, 'Rowoharjo'),
(8, 15, 'Sanggrahan'),
(9, 15, 'Bandung'),
(10, 15, 'Sono Ageng'),
(11, 15, 'Sugihwaras'),
(12, 15, 'Tanjungtani'),
(13, 15, 'Tegaron'),
(14, 15, 'Watudandang'),
(15, 1, 'Bagorkulon'),
(16, 1, 'Balongrejo'),
(17, 1, 'Banarankulon'),
(18, 1, 'Banaranwetan'),
(19, 1, 'Buduran'),
(20, 1, 'Gandu'),
(21, 1, 'Gemenggeng'),
(22, 1, 'Girirejo'),
(23, 1, 'Karangtengah'),
(24, 1, 'Kendalrejo'),
(25, 1, 'Kerepkidul'),
(26, 1, 'Kutorejo'),
(27, 1, 'Ngumpul'),
(28, 1, 'Paron'),
(29, 1, 'Pesudukuh'),
(30, 1, 'Petak'),
(31, 1, 'Sekarputih'),
(32, 1, 'Selorejo'),
(33, 1, 'Sugihwaras'),
(34, 1, 'Guyangan'),
(36, 1, 'Kedodong'),
(37, 2, 'Baron'),
(38, 2, 'Garu'),
(39, 2, 'Gebangkerep'),
(40, 2, 'Jambi'),
(41, 2, 'Jekek'),
(42, 2, 'Katerban'),
(43, 2, 'Kemaduh'),
(44, 2, 'Kemlokolegi'),
(45, 2, 'Mabung'),
(46, 2, 'Sambiroto'),
(47, 2, 'Waung'),
(48, 3, 'Balongrejo'),
(49, 3, 'Bendungrejo'),
(50, 3, 'Berbek'),
(51, 3, 'Bulu'),
(52, 3, 'Cepoko'),
(53, 3, 'Grojokan'),
(54, 3, 'Kacangan'),
(55, 3, 'Maguan'),
(56, 3, 'Mlilir'),
(57, 3, 'Ngrawan'),
(58, 3, 'Patranrejo'),
(59, 3, 'Salamrojo'),
(60, 3, 'Semare'),
(61, 3, 'Sendangbumen'),
(62, 3, 'Sengkut'),
(63, 3, 'Sonopatik'),
(64, 3, 'Sumberurip'),
(65, 3, 'Sumberwindu'),
(66, 3, 'Tiripan'),
(67, 4, 'Balonggebang'),
(68, 4, 'Campur'),
(69, 4, 'Gondangkulon'),
(70, 4, 'Ja\'an'),
(71, 4, 'Karangsemi'),
(72, 4, 'Kedungglugu'),
(73, 4, 'Ketawang'),
(74, 4, 'Losari'),
(75, 4, 'Mojoseto'),
(76, 4, 'Nglinggo'),
(77, 4, 'Ngunjung'),
(78, 4, 'Pandean'),
(79, 4, 'Sanggrahan'),
(80, 4, 'Senggowar'),
(81, 4, 'Senjayan'),
(82, 4, 'Sumberagung'),
(83, 4, 'Sumberejo'),
(84, 5, 'Begendeng'),
(85, 5, 'Dawuhan'),
(86, 5, 'Dlururejo'),
(87, 5, 'Godang Wetan'),
(88, 5, 'Jatikalen'),
(89, 5, 'Lumpangkuwik'),
(90, 5, 'Munung'),
(91, 5, 'Munung'),
(92, 5, 'Ngasem'),
(93, 5, 'Perning'),
(94, 5, 'Pule'),
(95, 5, 'Pulowetan'),
(96, 6, 'Bangsri'),
(97, 6, 'Drenges'),
(98, 6, 'Kalianyar'),
(99, 6, 'Kepuh'),
(100, 6, 'Kudu'),
(101, 6, 'Kutorejo'),
(102, 6, 'Lambangkuning'),
(103, 6, 'Nglawak'),
(104, 6, 'Pandantoyo'),
(105, 6, 'Pelem'),
(106, 6, 'Tanjung'),
(107, 6, 'Tembarak'),
(108, 6, 'Yuwono'),
(109, 6, 'Banaran'),
(110, 7, 'Balongasem'),
(111, 7, 'Bangle'),
(112, 6, 'Banjardowo'),
(113, 7, 'jatipunggur'),
(114, 7, 'Jegreg'),
(115, 7, 'Kedungmlaten'),
(116, 7, 'Ketandan'),
(117, 7, 'Lengkong'),
(118, 7, 'Ngepung'),
(119, 7, 'Ngringin'),
(120, 7, 'Pinggir'),
(121, 7, 'Prayungan'),
(122, 7, 'Sawahan'),
(123, 7, 'sumberkepuh'),
(124, 7, 'Sumbermiri'),
(125, 7, 'Sumbersono'),
(126, 8, 'Bajulan'),
(127, 8, 'Candirejp'),
(128, 8, 'Gejagan'),
(129, 8, 'Genjeng'),
(130, 8, 'Godean'),
(131, 8, 'Jatirejo'),
(132, 8, 'Karangsono'),
(133, 8, 'Kenep'),
(134, 8, 'Kwagean'),
(135, 8, 'Loceret'),
(136, 8, 'Macanan'),
(137, 8, 'Mungkung'),
(138, 8, 'Ngepeh'),
(139, 8, 'Nglaban'),
(140, 8, 'Patihan'),
(141, 8, 'Putukrejo'),
(142, 8, 'Sekaran'),
(143, 8, 'Sombron'),
(144, 8, 'Sukorejo'),
(145, 8, 'Tanjungrejo'),
(146, 8, 'Teken'),
(147, 8, 'Glagahan'),
(148, 8, 'Tempel Wetan'),
(149, 9, 'Balongpacul'),
(150, 9, 'Kedungdowo'),
(151, 9, 'Begadung'),
(152, 9, 'Bogo'),
(153, 9, 'Cangkringan'),
(154, 9, 'Ganungkidul'),
(155, 9, 'Jatirejo'),
(156, 9, 'Kartoharjo'),
(157, 9, 'Kauman'),
(158, 9, 'Kramat'),
(159, 9, 'Mangundikaran'),
(160, 9, 'Payaman'),
(161, 9, 'Ploso'),
(162, 9, 'Ringinanom'),
(163, 9, 'Werungotok'),
(164, 10, 'Biongko'),
(165, 10, 'Kepel'),
(166, 10, 'Klodan'),
(167, 10, 'Kuncir'),
(168, 10, 'Kweden'),
(169, 10, 'Mojoduwur'),
(170, 10, 'Ngetos'),
(171, 10, 'Oror-oro Ombo'),
(172, 10, 'Suru'),
(173, 11, 'Bajang'),
(174, 11, 'Gampeng'),
(175, 11, 'Lengkong lor'),
(176, 11, 'Ngluyu'),
(177, 11, 'Sugihwaras'),
(178, 11, 'Tempuran'),
(179, 12, 'Banjarsari'),
(180, 12, 'Betet'),
(181, 12, 'Cengkok'),
(182, 12, 'Dadapan'),
(183, 12, 'Juwet'),
(184, 12, 'Kalianyar'),
(185, 12, 'Kaloran'),
(186, 12, 'Kelutan'),
(187, 12, 'Klurahan'),
(188, 12, 'Mojokendil'),
(189, 12, 'Ngronggot'),
(190, 12, 'Tanjungkalang'),
(191, 12, 'Trayang'),
(192, 13, 'Babadan'),
(193, 13, 'Banaran'),
(194, 13, 'Batembat'),
(195, 13, 'Bodor'),
(196, 13, 'Cerme'),
(197, 13, 'Gemenggeng'),
(198, 13, 'Gondang'),
(199, 13, 'Jampes'),
(200, 13, 'Jatigreges'),
(201, 13, 'Jetis'),
(202, 13, 'Joho'),
(203, 13, 'Kecubung'),
(204, 13, 'Kepanjen'),
(205, 13, 'Mlandangan'),
(206, 13, 'Pace Wetan'),
(207, 13, 'Pacekulon'),
(208, 13, 'Plosoharjo'),
(209, 13, 'Sanan'),
(210, 14, 'Babadan'),
(211, 14, 'Bukur'),
(212, 14, 'Lestari'),
(213, 14, 'Ngepung'),
(214, 14, 'Ngrombot'),
(215, 14, 'Pakuncen'),
(216, 14, 'Patianrowo'),
(217, 14, 'Pecuk'),
(218, 14, 'Pisang'),
(219, 14, 'Rowomarto'),
(220, 14, 'Tirtobinangun'),
(221, 15, 'Baleturi'),
(222, 15, 'Bandung'),
(223, 15, 'Gondanglegi'),
(224, 15, 'Kurungrejo'),
(225, 15, 'Mojoagung'),
(226, 15, 'Nglawak'),
(227, 15, 'Rowoharjo'),
(228, 15, 'Sanggrahan'),
(229, 15, 'Singkalanyar'),
(230, 15, 'Sonoageng'),
(231, 15, 'Sugihwaras'),
(232, 15, 'Tanjungtani'),
(233, 15, 'Tegaron'),
(234, 15, 'Watudandang'),
(235, 16, 'Bajarejo'),
(236, 16, 'Bendoasri'),
(237, 16, 'Jintel'),
(238, 16, 'Kedungpadang'),
(239, 16, 'Klagen'),
(240, 16, 'Mlorah'),
(241, 16, 'Mojorembun'),
(242, 16, 'Mungkung'),
(243, 16, 'Musir Kidul'),
(244, 16, 'Musir Lor'),
(245, 16, 'Ngadiboyo'),
(246, 16, 'Ngangkatan'),
(247, 16, 'Puhkerep'),
(248, 16, 'Rejoso'),
(249, 16, 'Sambikerep'),
(250, 16, 'Setren'),
(251, 16, 'Sidokare'),
(252, 16, 'Sukorejo'),
(253, 16, 'Talang'),
(254, 16, 'Talun'),
(255, 16, 'Tritik'),
(256, 16, 'Wengkal'),
(257, 17, 'Bareng'),
(258, 17, 'Bendolo'),
(259, 17, 'Duren'),
(260, 17, 'Kebonagung'),
(261, 17, 'Margopatut'),
(262, 17, 'Ngliman'),
(263, 17, 'Sawahan'),
(264, 17, 'Sidorejo'),
(265, 17, 'Siwalan'),
(266, 18, 'Bagor Wetan'),
(267, 18, 'Blitaran'),
(268, 18, 'Bungur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Bagor'),
(2, 'Baron'),
(3, 'Berbek'),
(4, 'Gondang'),
(5, 'Jatikalen'),
(6, 'Kertosono'),
(7, 'Lengkong'),
(8, 'Loceret'),
(9, 'Nganjuk'),
(10, 'Ngetos'),
(11, 'Ngluyu'),
(12, 'Ngronggot'),
(13, 'Pace'),
(14, 'Patianrowo'),
(15, 'Prambon'),
(16, 'Rejoso'),
(17, 'Sawahan'),
(18, 'Sukomoro'),
(19, 'Tanjunganom'),
(20, 'Wilangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `titik`
--

CREATE TABLE `titik` (
  `id` int(10) NOT NULL,
  `desa_id` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `long` varchar(20) NOT NULL,
  `lat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `titik`
--

INSERT INTO `titik` (`id`, `desa_id`, `nama`, `alamat`, `long`, `lat`) VALUES
(1, '1', 'posyandu 1\r\n', 'Posyandu 1', '112.013555', '-7.75896'),
(2, '1', 'posyandu 2', 'Posyandu 2', '112.015529', '-7.753559');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `titik`
--
ALTER TABLE `titik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `titik`
--
ALTER TABLE `titik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
