-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2018 pada 13.22
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kode_harga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `amp-06`
--

CREATE TABLE `amp-06` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `amp-hc-a`
--

CREATE TABLE `amp-hc-a` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `amp-hc-b`
--

CREATE TABLE `amp-hc-b` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `amp-kf`
--

CREATE TABLE `amp-kf` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blanko`
--

CREATE TABLE `blanko` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blanko`
--

INSERT INTO `blanko` (`id_kodeHarga`, `jumlah`, `harga`, `grade`, `laminasi`) VALUES
(2, 0, 0, '', 'NL'),
(3, 100, 5700, 'standar', 'NL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sc12-fc`
--

CREATE TABLE `sc12-fc` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sc12-fc`
--

INSERT INTO `sc12-fc` (`id_kodeHarga`, `jumlah`, `harga`, `grade`, `laminasi`) VALUES
(1, 0, 0, '', ''),
(2, 100, 9150, 'standar', 'NL'),
(3, 200, 5100, 'standar', 'NL'),
(4, 300, 3750, 'standar', 'NL'),
(5, 400, 3100, 'standar', 'NL'),
(6, 500, 2850, 'standar', 'NL'),
(7, 600, 2550, 'standar', 'NL'),
(8, 700, 2350, 'standar', 'NL'),
(9, 800, 2150, 'standar', 'NL'),
(10, 900, 2050, 'standar', 'NL'),
(11, 1000, 1950, 'standar', 'NL'),
(12, 1100, 1850, 'standar', 'NL'),
(13, 1200, 1800, 'standar', 'NL'),
(14, 1300, 1750, 'standar', 'NL'),
(15, 1400, 1700, 'standar', 'NL'),
(16, 1500, 1650, 'standar', 'NL'),
(17, 1600, 1600, 'standar', 'NL'),
(18, 1700, 1600, 'standar', 'NL'),
(19, 1800, 1550, 'standar', 'NL'),
(20, 1900, 1550, 'standar', 'NL'),
(21, 2000, 1500, 'standar', 'NL'),
(22, 100, 10650, 'premium', 'NL'),
(23, 200, 5950, 'premium', 'NL'),
(24, 300, 4450, 'premium', 'NL'),
(25, 400, 3650, 'premium', 'NL'),
(26, 500, 3350, 'premium', 'NL'),
(27, 600, 3000, 'premium', 'NL'),
(28, 700, 3750, 'premium', 'NL'),
(29, 800, 2600, 'premium', 'NL'),
(30, 900, 2450, 'premium', 'NL'),
(31, 1000, 2350, 'premium', 'NL'),
(32, 1100, 2250, 'premium', 'NL'),
(33, 1200, 2150, 'premium', 'NL'),
(34, 1300, 2100, 'premium', 'NL'),
(35, 1400, 2050, 'premium', 'NL'),
(36, 1500, 2000, 'premium', 'NL'),
(37, 1600, 1950, 'premium', 'NL'),
(38, 1700, 1900, 'premium', 'NL'),
(39, 1800, 1900, 'premium', 'NL'),
(40, 1900, 1850, 'premium', 'NL'),
(41, 2000, 1800, 'premium', 'NL'),
(42, 100, 12150, 'diamond', 'NL'),
(43, 200, 6850, 'diamond', 'NL'),
(44, 300, 5100, 'diamond', 'NL'),
(45, 400, 4200, 'diamond', 'NL'),
(46, 500, 3850, 'diamond', 'NL'),
(47, 600, 3450, 'diamond', 'NL'),
(48, 700, 3200, 'diamond', 'NL'),
(49, 800, 3000, 'diamond', 'NL'),
(50, 900, 2850, 'diamond', 'NL'),
(51, 1000, 2700, 'diamond', 'NL'),
(52, 1100, 2600, 'diamond', 'NL'),
(53, 1200, 2500, 'diamond', 'NL'),
(54, 1300, 2450, 'diamond', 'NL'),
(55, 1400, 2400, 'diamond', 'NL'),
(56, 1500, 2350, 'diamond', 'NL'),
(57, 1600, 2300, 'diamond', 'NL'),
(58, 1700, 2250, 'diamond', 'NL'),
(59, 1800, 2200, 'diamond', 'NL'),
(60, 1900, 2150, 'diamond', 'NL'),
(61, 2000, 2150, 'diamond', 'NL'),
(62, 100, 12500, 'standar', 'L'),
(63, 200, 6800, 'standar', 'L'),
(64, 300, 4900, 'standar', 'L'),
(65, 400, 3950, 'standar', 'L'),
(66, 500, 3500, 'standar', 'L'),
(67, 600, 3200, 'standar', 'L'),
(68, 700, 3000, 'standar', 'L'),
(69, 800, 2800, 'standar', 'L'),
(70, 900, 2700, 'standar', 'L'),
(71, 1000, 2600, 'standar', 'L'),
(72, 1100, 2500, 'standar', 'L'),
(73, 1200, 2450, 'standar', 'L'),
(74, 1300, 2400, 'standar', 'L'),
(75, 1400, 2350, 'standar', 'L'),
(76, 1500, 2300, 'standar', 'L'),
(77, 1600, 2250, 'standar', 'L'),
(78, 1700, 2200, 'standar', 'L'),
(79, 1800, 2200, 'standar', 'L'),
(80, 1900, 2150, 'standar', 'L'),
(81, 2000, 2150, 'standar', 'L'),
(82, 100, 14000, 'premium', 'L'),
(83, 200, 7650, 'premium', 'L'),
(84, 300, 5550, 'premium', 'L'),
(85, 400, 4500, 'premium', 'L'),
(86, 500, 4000, 'premium', 'L'),
(87, 600, 3650, 'premium', 'L'),
(88, 700, 3400, 'premium', 'L'),
(89, 800, 3200, 'premium', 'L'),
(90, 900, 3100, 'premium', 'L'),
(91, 1000, 2950, 'premium', 'L'),
(92, 1100, 2850, 'premium', 'L'),
(93, 1200, 2800, 'premium', 'L'),
(94, 1300, 2750, 'premium', 'L'),
(95, 1400, 2700, 'premium', 'L'),
(96, 1500, 2650, 'premium', 'L'),
(97, 1600, 2600, 'premium', 'L'),
(98, 1700, 2550, 'premium', 'L'),
(99, 1800, 2500, 'premium', 'L'),
(100, 1900, 2500, 'premium', 'L'),
(101, 2000, 2450, 'premium', 'L'),
(102, 100, 15500, 'diamond', 'L'),
(103, 200, 8550, 'diamond', 'L'),
(104, 300, 6250, 'diamond', 'L'),
(105, 400, 5050, 'diamond', 'L'),
(106, 500, 4500, 'diamond', 'L'),
(107, 600, 4100, 'diamond', 'L'),
(108, 700, 3800, 'diamond', 'L'),
(109, 800, 3600, 'diamond', 'L'),
(110, 900, 3450, 'diamond', 'L'),
(111, 1000, 3350, 'diamond', 'L'),
(112, 1100, 3250, 'diamond', 'L'),
(113, 1200, 3150, 'diamond', 'L'),
(114, 1300, 3050, 'diamond', 'L'),
(115, 1400, 3000, 'diamond', 'L'),
(116, 1500, 2950, 'diamond', 'L'),
(117, 1600, 2900, 'diamond', 'L'),
(118, 1700, 2850, 'diamond', 'L'),
(119, 1800, 2850, 'diamond', 'L'),
(120, 1900, 2800, 'diamond', 'L'),
(121, 2000, 2750, 'diamond', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sc12-oc`
--

CREATE TABLE `sc12-oc` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sc12-oc`
--

INSERT INTO `sc12-oc` (`id_kodeHarga`, `jumlah`, `harga`, `grade`, `laminasi`) VALUES
(1, 0, 0, '', ''),
(2, 100, 5650, 'standar', 'NL'),
(3, 200, 3350, 'standar', 'NL'),
(4, 300, 2600, 'standar', 'NL'),
(5, 400, 2200, 'standar', 'NL'),
(6, 500, 2150, 'standar', 'NL'),
(7, 600, 1950, 'standar', 'NL'),
(8, 700, 1850, 'standar', 'NL'),
(9, 800, 1750, 'standar', 'NL'),
(10, 900, 1650, 'standar', 'NL'),
(11, 1000, 1700, 'standar', 'NL'),
(12, 1100, 1600, 'standar', 'NL'),
(13, 1200, 1600, 'standar', 'NL'),
(14, 1300, 1550, 'standar', 'NL'),
(15, 1400, 1500, 'standar', 'NL'),
(16, 1500, 1500, 'standar', 'NL'),
(17, 1600, 1500, 'standar', 'NL'),
(18, 1700, 1450, 'standar', 'NL'),
(19, 1800, 1450, 'standar', 'NL'),
(20, 1900, 1450, 'standar', 'NL'),
(21, 2000, 1450, 'standar', 'NL'),
(22, 100, 7150, 'premium', 'NL'),
(23, 200, 4200, 'premium', 'NL'),
(24, 300, 3250, 'premium', 'NL'),
(25, 400, 2800, 'premium', 'NL'),
(26, 500, 2650, 'premium', 'NL'),
(27, 600, 2400, 'premium', 'NL'),
(28, 700, 2250, 'premium', 'NL'),
(29, 800, 2150, 'premium', 'NL'),
(30, 900, 2050, 'premium', 'NL'),
(31, 1000, 2050, 'premium', 'NL'),
(32, 1100, 2000, 'premium', 'NL'),
(33, 1200, 1950, 'premium', 'NL'),
(34, 1300, 1900, 'premium', 'NL'),
(35, 1400, 1850, 'premium', 'NL'),
(36, 1500, 1850, 'premium', 'NL'),
(37, 1600, 1850, 'premium', 'NL'),
(38, 1700, 1800, 'premium', 'NL'),
(39, 1800, 1750, 'premium', 'NL'),
(40, 1900, 1750, 'premium', 'NL'),
(41, 2000, 1750, 'premium', 'NL'),
(42, 100, 8650, 'diamond', 'NL'),
(43, 200, 5100, 'diamond', 'NL'),
(44, 300, 3950, 'diamond', 'NL'),
(45, 400, 3350, 'diamond', 'NL'),
(46, 500, 3150, 'diamond', 'NL'),
(47, 600, 2900, 'diamond', 'NL'),
(48, 700, 2700, 'diamond', 'NL'),
(49, 800, 2550, 'diamond', 'NL'),
(50, 900, 2450, 'diamond', 'NL'),
(51, 1000, 2450, 'diamond', 'NL'),
(52, 1100, 2350, 'diamond', 'NL'),
(53, 1200, 2300, 'diamond', 'NL'),
(54, 1300, 2250, 'diamond', 'NL'),
(55, 1400, 2200, 'diamond', 'NL'),
(56, 1500, 2200, 'diamond', 'NL'),
(57, 1600, 2150, 'diamond', 'NL'),
(58, 1700, 2100, 'diamond', 'NL'),
(59, 1800, 2100, 'diamond', 'NL'),
(60, 1900, 2050, 'diamond', 'NL'),
(61, 2000, 2050, 'diamond', 'NL'),
(62, 100, 9000, 'standar', 'L'),
(63, 200, 5050, 'standar', 'L'),
(64, 300, 3750, 'standar', 'L'),
(65, 400, 3050, 'standar', 'L'),
(66, 500, 2800, 'standar', 'L'),
(67, 600, 2600, 'standar', 'L'),
(68, 700, 2450, 'standar', 'L'),
(69, 800, 2350, 'standar', 'L'),
(70, 900, 2300, 'standar', 'L'),
(71, 1000, 2300, 'standar', 'L'),
(72, 1100, 2250, 'standar', 'L'),
(73, 1200, 2200, 'standar', 'L'),
(74, 1300, 2150, 'standar', 'L'),
(75, 1400, 2150, 'standar', 'L'),
(76, 1500, 2150, 'standar', 'L'),
(77, 1600, 2150, 'standar', 'L'),
(78, 1700, 2100, 'standar', 'L'),
(79, 1800, 2100, 'standar', 'L'),
(80, 1900, 2050, 'standar', 'L'),
(81, 2000, 2050, 'standar', 'L'),
(82, 100, 10500, 'premium', 'L'),
(83, 200, 5900, 'premium', 'L'),
(84, 300, 4400, 'premium', 'L'),
(85, 400, 3600, 'premium', 'L'),
(86, 500, 3300, 'premium', 'L'),
(87, 600, 3050, 'premium', 'L'),
(88, 700, 2900, 'premium', 'L'),
(89, 800, 2750, 'premium', 'L'),
(90, 900, 2700, 'premium', 'L'),
(91, 1000, 2700, 'premium', 'L'),
(92, 1100, 2600, 'premium', 'L'),
(93, 1200, 2550, 'premium', 'L'),
(94, 1300, 2500, 'premium', 'L'),
(95, 1400, 2450, 'premium', 'L'),
(96, 1500, 2450, 'premium', 'L'),
(97, 1600, 2450, 'premium', 'L'),
(98, 1700, 2450, 'premium', 'L'),
(99, 1800, 2400, 'premium', 'L'),
(100, 1900, 2400, 'premium', 'L'),
(101, 2000, 2400, 'premium', 'L'),
(102, 100, 12000, 'diamond', 'L'),
(103, 200, 6755, 'diamond', 'L'),
(104, 300, 5050, 'diamond', 'L'),
(105, 400, 4200, 'diamond', 'L'),
(106, 500, 3800, 'diamond', 'L'),
(107, 600, 3500, 'diamond', 'L'),
(108, 700, 3300, 'diamond', 'L'),
(109, 800, 3200, 'diamond', 'L'),
(110, 900, 3050, 'diamond', 'L'),
(111, 1000, 3050, 'diamond', 'L'),
(112, 1100, 3000, 'diamond', 'L'),
(113, 1200, 2900, 'diamond', 'L'),
(114, 1300, 2850, 'diamond', 'L'),
(115, 1400, 2800, 'diamond', 'L'),
(116, 1500, 2800, 'diamond', 'L'),
(117, 1600, 2800, 'diamond', 'L'),
(118, 1700, 2750, 'diamond', 'L'),
(119, 1800, 2700, 'diamond', 'L'),
(120, 1900, 2700, 'diamond', 'L'),
(121, 2000, 2700, 'diamond', 'L'),
(122, 0, 0, '', ''),
(123, 100, 5650, 'standar', 'NL'),
(124, 200, 3350, 'standar', 'NL'),
(125, 300, 2600, 'standar', 'NL'),
(126, 400, 2200, 'standar', 'NL'),
(127, 500, 2150, 'standar', 'NL'),
(128, 600, 1950, 'standar', 'NL'),
(129, 700, 1850, 'standar', 'NL'),
(130, 800, 1750, 'standar', 'NL'),
(131, 900, 1650, 'standar', 'NL'),
(132, 1000, 1700, 'standar', 'NL'),
(133, 1100, 1600, 'standar', 'NL'),
(134, 1200, 1600, 'standar', 'NL'),
(135, 1300, 1550, 'standar', 'NL'),
(136, 1400, 1500, 'standar', 'NL'),
(137, 1500, 1500, 'standar', 'NL'),
(138, 1600, 1500, 'standar', 'NL'),
(139, 1700, 1450, 'standar', 'NL'),
(140, 1800, 1450, 'standar', 'NL'),
(141, 1900, 1450, 'standar', 'NL'),
(142, 2000, 1450, 'standar', 'NL'),
(143, 100, 7150, 'premium', 'NL'),
(144, 200, 4200, 'premium', 'NL'),
(145, 300, 3250, 'premium', 'NL'),
(146, 400, 2800, 'premium', 'NL'),
(147, 500, 2650, 'premium', 'NL'),
(148, 600, 2400, 'premium', 'NL'),
(149, 700, 2250, 'premium', 'NL'),
(150, 800, 2150, 'premium', 'NL'),
(151, 900, 2050, 'premium', 'NL'),
(152, 1000, 2050, 'premium', 'NL'),
(153, 1100, 2000, 'premium', 'NL'),
(154, 1200, 1950, 'premium', 'NL'),
(155, 1300, 1900, 'premium', 'NL'),
(156, 1400, 1850, 'premium', 'NL'),
(157, 1500, 1850, 'premium', 'NL'),
(158, 1600, 1850, 'premium', 'NL'),
(159, 1700, 1800, 'premium', 'NL'),
(160, 1800, 1750, 'premium', 'NL'),
(161, 1900, 1750, 'premium', 'NL'),
(162, 2000, 1750, 'premium', 'NL'),
(163, 100, 8650, 'diamond', 'NL'),
(164, 200, 5100, 'diamond', 'NL'),
(165, 300, 3950, 'diamond', 'NL'),
(166, 400, 3350, 'diamond', 'NL'),
(167, 500, 3150, 'diamond', 'NL'),
(168, 600, 2900, 'diamond', 'NL'),
(169, 700, 2700, 'diamond', 'NL'),
(170, 800, 2550, 'diamond', 'NL'),
(171, 900, 2450, 'diamond', 'NL'),
(172, 1000, 2450, 'diamond', 'NL'),
(173, 1100, 2350, 'diamond', 'NL'),
(174, 1200, 2300, 'diamond', 'NL'),
(175, 1300, 2250, 'diamond', 'NL'),
(176, 1400, 2200, 'diamond', 'NL'),
(177, 1500, 2200, 'diamond', 'NL'),
(178, 1600, 2150, 'diamond', 'NL'),
(179, 1700, 2100, 'diamond', 'NL'),
(180, 1800, 2100, 'diamond', 'NL'),
(181, 1900, 2050, 'diamond', 'NL'),
(182, 2000, 2050, 'diamond', 'NL'),
(183, 100, 9000, 'standar', 'L'),
(184, 200, 5050, 'standar', 'L'),
(185, 300, 3750, 'standar', 'L'),
(186, 400, 3050, 'standar', 'L'),
(187, 500, 2800, 'standar', 'L'),
(188, 600, 2600, 'standar', 'L'),
(189, 700, 2450, 'standar', 'L'),
(190, 800, 2350, 'standar', 'L'),
(191, 900, 2300, 'standar', 'L'),
(192, 1000, 2300, 'standar', 'L'),
(193, 1100, 2250, 'standar', 'L'),
(194, 1200, 2200, 'standar', 'L'),
(195, 1300, 2150, 'standar', 'L'),
(196, 1400, 2150, 'standar', 'L'),
(197, 1500, 2150, 'standar', 'L'),
(198, 1600, 2150, 'standar', 'L'),
(199, 1700, 2100, 'standar', 'L'),
(200, 1800, 2100, 'standar', 'L'),
(201, 1900, 2050, 'standar', 'L'),
(202, 2000, 2050, 'standar', 'L'),
(203, 100, 10500, 'premium', 'L'),
(204, 200, 5900, 'premium', 'L'),
(205, 300, 4400, 'premium', 'L'),
(206, 400, 3600, 'premium', 'L'),
(207, 500, 3300, 'premium', 'L'),
(208, 600, 3050, 'premium', 'L'),
(209, 700, 2900, 'premium', 'L'),
(210, 800, 2750, 'premium', 'L'),
(211, 900, 2700, 'premium', 'L'),
(212, 1000, 2700, 'premium', 'L'),
(213, 1100, 2600, 'premium', 'L'),
(214, 1200, 2550, 'premium', 'L'),
(215, 1300, 2500, 'premium', 'L'),
(216, 1400, 2450, 'premium', 'L'),
(217, 1500, 2450, 'premium', 'L'),
(218, 1600, 2450, 'premium', 'L'),
(219, 1700, 2450, 'premium', 'L'),
(220, 1800, 2400, 'premium', 'L'),
(221, 1900, 2400, 'premium', 'L'),
(222, 2000, 2400, 'premium', 'L'),
(223, 100, 12000, 'diamond', 'L'),
(224, 200, 6755, 'diamond', 'L'),
(225, 300, 5050, 'diamond', 'L'),
(226, 400, 4200, 'diamond', 'L'),
(227, 500, 3800, 'diamond', 'L'),
(228, 600, 3500, 'diamond', 'L'),
(229, 700, 3300, 'diamond', 'L'),
(230, 800, 3200, 'diamond', 'L'),
(231, 900, 3050, 'diamond', 'L'),
(232, 1000, 3050, 'diamond', 'L'),
(233, 1100, 3000, 'diamond', 'L'),
(234, 1200, 2900, 'diamond', 'L'),
(235, 1300, 2850, 'diamond', 'L'),
(236, 1400, 2800, 'diamond', 'L'),
(237, 1500, 2800, 'diamond', 'L'),
(238, 1600, 2800, 'diamond', 'L'),
(239, 1700, 2750, 'diamond', 'L'),
(240, 1800, 2700, 'diamond', 'L'),
(241, 1900, 2700, 'diamond', 'L'),
(242, 2000, 2700, 'diamond', 'L'),
(243, 0, 0, '', ''),
(244, 100, 5650, 'standar', 'NL'),
(245, 200, 3350, 'standar', 'NL'),
(246, 300, 2600, 'standar', 'NL'),
(247, 400, 2200, 'standar', 'NL'),
(248, 500, 2150, 'standar', 'NL'),
(249, 600, 1950, 'standar', 'NL'),
(250, 700, 1850, 'standar', 'NL'),
(251, 800, 1750, 'standar', 'NL'),
(252, 900, 1650, 'standar', 'NL'),
(253, 1000, 1700, 'standar', 'NL'),
(254, 1100, 1600, 'standar', 'NL'),
(255, 1200, 1600, 'standar', 'NL'),
(256, 1300, 1550, 'standar', 'NL'),
(257, 1400, 1500, 'standar', 'NL'),
(258, 1500, 1500, 'standar', 'NL'),
(259, 1600, 1500, 'standar', 'NL'),
(260, 1700, 1450, 'standar', 'NL'),
(261, 1800, 1450, 'standar', 'NL'),
(262, 1900, 1450, 'standar', 'NL'),
(263, 2000, 1450, 'standar', 'NL'),
(264, 100, 7150, 'premium', 'NL'),
(265, 200, 4200, 'premium', 'NL'),
(266, 300, 3250, 'premium', 'NL'),
(267, 400, 2800, 'premium', 'NL'),
(268, 500, 2650, 'premium', 'NL'),
(269, 600, 2400, 'premium', 'NL'),
(270, 700, 2250, 'premium', 'NL'),
(271, 800, 2150, 'premium', 'NL'),
(272, 900, 2050, 'premium', 'NL'),
(273, 1000, 2050, 'premium', 'NL'),
(274, 1100, 2000, 'premium', 'NL'),
(275, 1200, 1950, 'premium', 'NL'),
(276, 1300, 1900, 'premium', 'NL'),
(277, 1400, 1850, 'premium', 'NL'),
(278, 1500, 1850, 'premium', 'NL'),
(279, 1600, 1850, 'premium', 'NL'),
(280, 1700, 1800, 'premium', 'NL'),
(281, 1800, 1750, 'premium', 'NL'),
(282, 1900, 1750, 'premium', 'NL'),
(283, 2000, 1750, 'premium', 'NL'),
(284, 100, 8650, 'diamond', 'NL'),
(285, 200, 5100, 'diamond', 'NL'),
(286, 300, 3950, 'diamond', 'NL'),
(287, 400, 3350, 'diamond', 'NL'),
(288, 500, 3150, 'diamond', 'NL'),
(289, 600, 2900, 'diamond', 'NL'),
(290, 700, 2700, 'diamond', 'NL'),
(291, 800, 2550, 'diamond', 'NL'),
(292, 900, 2450, 'diamond', 'NL'),
(293, 1000, 2450, 'diamond', 'NL'),
(294, 1100, 2350, 'diamond', 'NL'),
(295, 1200, 2300, 'diamond', 'NL'),
(296, 1300, 2250, 'diamond', 'NL'),
(297, 1400, 2200, 'diamond', 'NL'),
(298, 1500, 2200, 'diamond', 'NL'),
(299, 1600, 2150, 'diamond', 'NL'),
(300, 1700, 2100, 'diamond', 'NL'),
(301, 1800, 2100, 'diamond', 'NL'),
(302, 1900, 2050, 'diamond', 'NL'),
(303, 2000, 2050, 'diamond', 'NL'),
(304, 100, 9000, 'standar', 'L'),
(305, 200, 5050, 'standar', 'L'),
(306, 300, 3750, 'standar', 'L'),
(307, 400, 3050, 'standar', 'L'),
(308, 500, 2800, 'standar', 'L'),
(309, 600, 2600, 'standar', 'L'),
(310, 700, 2450, 'standar', 'L'),
(311, 800, 2350, 'standar', 'L'),
(312, 900, 2300, 'standar', 'L'),
(313, 1000, 2300, 'standar', 'L'),
(314, 1100, 2250, 'standar', 'L'),
(315, 1200, 2200, 'standar', 'L'),
(316, 1300, 2150, 'standar', 'L'),
(317, 1400, 2150, 'standar', 'L'),
(318, 1500, 2150, 'standar', 'L'),
(319, 1600, 2150, 'standar', 'L'),
(320, 1700, 2100, 'standar', 'L'),
(321, 1800, 2100, 'standar', 'L'),
(322, 1900, 2050, 'standar', 'L'),
(323, 2000, 2050, 'standar', 'L'),
(324, 100, 10500, 'premium', 'L'),
(325, 200, 5900, 'premium', 'L'),
(326, 300, 4400, 'premium', 'L'),
(327, 400, 3600, 'premium', 'L'),
(328, 500, 3300, 'premium', 'L'),
(329, 600, 3050, 'premium', 'L'),
(330, 700, 2900, 'premium', 'L'),
(331, 800, 2750, 'premium', 'L'),
(332, 900, 2700, 'premium', 'L'),
(333, 1000, 2700, 'premium', 'L'),
(334, 1100, 2600, 'premium', 'L'),
(335, 1200, 2550, 'premium', 'L'),
(336, 1300, 2500, 'premium', 'L'),
(337, 1400, 2450, 'premium', 'L'),
(338, 1500, 2450, 'premium', 'L'),
(339, 1600, 2450, 'premium', 'L'),
(340, 1700, 2450, 'premium', 'L'),
(341, 1800, 2400, 'premium', 'L'),
(342, 1900, 2400, 'premium', 'L'),
(343, 2000, 2400, 'premium', 'L'),
(344, 100, 12000, 'diamond', 'L'),
(345, 200, 6755, 'diamond', 'L'),
(346, 300, 5050, 'diamond', 'L'),
(347, 400, 4200, 'diamond', 'L'),
(348, 500, 3800, 'diamond', 'L'),
(349, 600, 3500, 'diamond', 'L'),
(350, 700, 3300, 'diamond', 'L'),
(351, 800, 3200, 'diamond', 'L'),
(352, 900, 3050, 'diamond', 'L'),
(353, 1000, 3050, 'diamond', 'L'),
(354, 1100, 3000, 'diamond', 'L'),
(355, 1200, 2900, 'diamond', 'L'),
(356, 1300, 2850, 'diamond', 'L'),
(357, 1400, 2800, 'diamond', 'L'),
(358, 1500, 2800, 'diamond', 'L'),
(359, 1600, 2800, 'diamond', 'L'),
(360, 1700, 2750, 'diamond', 'L'),
(361, 1800, 2700, 'diamond', 'L'),
(362, 1900, 2700, 'diamond', 'L'),
(363, 2000, 2700, 'diamond', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sc16-fc`
--

CREATE TABLE `sc16-fc` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sc16-fc`
--

INSERT INTO `sc16-fc` (`id_kodeHarga`, `jumlah`, `harga`, `grade`, `laminasi`) VALUES
(1, 0, 0, '', ''),
(2, 100, 8750, 'standar', 'NL'),
(3, 200, 4800, 'standar', 'NL'),
(4, 300, 3500, 'standar', 'NL'),
(5, 400, 2850, 'standar', 'NL'),
(6, 500, 2600, 'standar', 'NL'),
(7, 600, 2300, 'standar', 'NL'),
(8, 700, 2100, 'standar', 'NL'),
(9, 800, 1950, 'standar', 'NL'),
(10, 900, 1850, 'standar', 'NL'),
(11, 1000, 1750, 'standar', 'NL'),
(12, 1100, 1650, 'standar', 'NL'),
(13, 1200, 1600, 'standar', 'NL'),
(14, 1300, 1550, 'standar', 'NL'),
(15, 1400, 1500, 'standar', 'NL'),
(16, 1500, 1450, 'standar', 'NL'),
(17, 1600, 1400, 'standar', 'NL'),
(18, 1700, 1400, 'standar', 'NL'),
(19, 1800, 1350, 'standar', 'NL'),
(20, 1900, 1350, 'standar', 'NL'),
(21, 2000, 1300, 'standar', 'NL'),
(22, 100, 10250, 'premium', 'NL'),
(23, 200, 5700, 'premium', 'NL'),
(24, 300, 4150, 'premium', 'NL'),
(25, 400, 3400, 'premium', 'NL'),
(26, 500, 3100, 'premium', 'NL'),
(27, 600, 2750, 'premium', 'NL'),
(28, 700, 2550, 'premium', 'NL'),
(29, 800, 2350, 'premium', 'NL'),
(30, 900, 2200, 'premium', 'NL'),
(31, 1000, 2100, 'premium', 'NL'),
(32, 1100, 2000, 'premium', 'NL'),
(33, 1200, 1950, 'premium', 'NL'),
(34, 1300, 1900, 'premium', 'NL'),
(35, 1400, 1850, 'premium', 'NL'),
(36, 1500, 1800, 'premium', 'NL'),
(37, 1600, 1750, 'premium', 'NL'),
(38, 1700, 1700, 'premium', 'NL'),
(39, 1800, 1650, 'premium', 'NL'),
(40, 1900, 1650, 'premium', 'NL'),
(41, 2000, 1600, 'premium', 'NL'),
(42, 100, 11750, 'diamond', 'NL'),
(43, 200, 6550, 'diamond', 'NL'),
(44, 300, 4800, 'diamond', 'NL'),
(45, 400, 4000, 'diamond', 'NL'),
(46, 500, 3600, 'diamond', 'NL'),
(47, 600, 3250, 'diamond', 'NL'),
(48, 700, 2950, 'diamond', 'NL'),
(49, 800, 2750, 'diamond', 'NL'),
(50, 900, 2600, 'diamond', 'NL'),
(51, 1000, 2500, 'diamond', 'NL'),
(52, 1100, 2400, 'diamond', 'NL'),
(53, 1200, 2300, 'diamond', 'NL'),
(54, 1300, 2250, 'diamond', 'NL'),
(55, 1400, 2150, 'diamond', 'NL'),
(56, 1500, 2100, 'diamond', 'NL'),
(57, 1600, 2050, 'diamond', 'NL'),
(58, 1700, 2050, 'diamond', 'NL'),
(59, 1800, 2000, 'diamond', 'NL'),
(60, 1900, 1950, 'diamond', 'NL'),
(61, 2000, 1950, 'diamond', 'NL'),
(62, 100, 12150, 'standar', 'L'),
(63, 200, 6500, 'standar', 'L'),
(64, 300, 4600, 'standar', 'L'),
(65, 400, 3700, 'standar', 'L'),
(66, 500, 3300, 'standar', 'L'),
(67, 600, 2950, 'standar', 'L'),
(68, 700, 2750, 'standar', 'L'),
(69, 800, 2600, 'standar', 'L'),
(70, 900, 2450, 'standar', 'L'),
(71, 1000, 2350, 'standar', 'L'),
(72, 1100, 2300, 'standar', 'L'),
(73, 1200, 2250, 'standar', 'L'),
(74, 1300, 2150, 'standar', 'L'),
(75, 1400, 2100, 'standar', 'L'),
(76, 1500, 2100, 'standar', 'L'),
(77, 1600, 2100, 'standar', 'L'),
(78, 1700, 2000, 'standar', 'L'),
(79, 1800, 2000, 'standar', 'L'),
(80, 1900, 1950, 'standar', 'L'),
(81, 2000, 1950, 'standar', 'L'),
(82, 100, 13650, 'premium', 'L'),
(83, 200, 7350, 'premium', 'L'),
(84, 300, 5300, 'premium', 'L'),
(85, 400, 4250, 'premium', 'L'),
(86, 500, 3800, 'premium', 'L'),
(87, 600, 3400, 'premium', 'L'),
(88, 700, 3150, 'premium', 'L'),
(89, 800, 3000, 'premium', 'L'),
(90, 900, 2850, 'premium', 'L'),
(91, 1000, 2750, 'premium', 'L'),
(92, 1100, 2650, 'premium', 'L'),
(93, 1200, 2600, 'premium', 'L'),
(94, 1300, 2500, 'premium', 'L'),
(95, 1400, 2450, 'premium', 'L'),
(96, 1500, 2400, 'premium', 'L'),
(97, 1600, 2350, 'premium', 'L'),
(98, 1700, 2350, 'premium', 'L'),
(99, 1800, 2300, 'premium', 'L'),
(100, 1900, 2250, 'premium', 'L'),
(101, 2000, 2250, 'premium', 'L'),
(102, 100, 15150, 'diamond', 'L'),
(103, 200, 8250, 'diamond', 'L'),
(104, 300, 5950, 'diamond', 'L'),
(105, 400, 4800, 'diamond', 'L'),
(106, 500, 4300, 'diamond', 'L'),
(107, 600, 3850, 'diamond', 'L'),
(108, 700, 3600, 'diamond', 'L'),
(109, 800, 3400, 'diamond', 'L'),
(110, 900, 3250, 'diamond', 'L'),
(111, 1000, 3100, 'diamond', 'L'),
(112, 1100, 3000, 'diamond', 'L'),
(113, 1200, 2950, 'diamond', 'L'),
(114, 1300, 2850, 'diamond', 'L'),
(115, 1400, 2800, 'diamond', 'L'),
(116, 1500, 2750, 'diamond', 'L'),
(117, 1600, 2700, 'diamond', 'L'),
(118, 1700, 2650, 'diamond', 'L'),
(119, 1800, 2600, 'diamond', 'L'),
(120, 1900, 2600, 'diamond', 'L'),
(121, 2000, 2550, 'diamond', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sc16-oc`
--

CREATE TABLE `sc16-oc` (
  `id_kodeHarga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `grade` enum('standar','premium','diamond') NOT NULL,
  `laminasi` enum('NL','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sc16-oc`
--

INSERT INTO `sc16-oc` (`id_kodeHarga`, `jumlah`, `harga`, `grade`, `laminasi`) VALUES
(1, 0, 0, '', ''),
(2, 100, 5250, 'standar', 'NL'),
(3, 200, 3050, 'standar', 'NL'),
(4, 300, 2300, 'standar', 'NL'),
(5, 400, 2000, 'standar', 'NL'),
(6, 500, 1900, 'standar', 'NL'),
(7, 600, 1750, 'standar', 'NL'),
(8, 700, 1600, 'standar', 'NL'),
(9, 800, 1500, 'standar', 'NL'),
(10, 900, 1450, 'standar', 'NL'),
(11, 1000, 1400, 'standar', 'NL'),
(12, 1100, 1350, 'standar', 'NL'),
(13, 1200, 1300, 'standar', 'NL'),
(14, 1300, 1250, 'standar', 'NL'),
(15, 1400, 1250, 'standar', 'NL'),
(16, 1500, 1200, 'standar', 'NL'),
(17, 1600, 1200, 'standar', 'NL'),
(18, 1700, 1200, 'standar', 'NL'),
(19, 1800, 1150, 'standar', 'NL'),
(20, 1900, 1150, 'standar', 'NL'),
(21, 2000, 1150, 'standar', 'NL'),
(22, 100, 6750, 'premium', 'NL'),
(23, 200, 3950, 'premium', 'NL'),
(24, 300, 3000, 'premium', 'NL'),
(25, 400, 2550, 'premium', 'NL'),
(26, 500, 2400, 'premium', 'NL'),
(27, 600, 2200, 'premium', 'NL'),
(28, 700, 2050, 'premium', 'NL'),
(29, 800, 1950, 'premium', 'NL'),
(30, 900, 1850, 'premium', 'NL'),
(31, 1000, 1750, 'premium', 'NL'),
(32, 1100, 1700, 'premium', 'NL'),
(33, 1200, 1650, 'premium', 'NL'),
(34, 1300, 1600, 'premium', 'NL'),
(35, 1400, 1600, 'premium', 'NL'),
(36, 1500, 1550, 'premium', 'NL'),
(37, 1600, 1500, 'premium', 'NL'),
(38, 1700, 1500, 'premium', 'NL'),
(39, 1800, 1500, 'premium', 'NL'),
(40, 1900, 1450, 'premium', 'NL'),
(41, 2000, 1450, 'premium', 'NL'),
(42, 100, 8250, 'diamond', 'NL'),
(43, 200, 4800, 'diamond', 'NL'),
(44, 300, 3650, 'diamond', 'NL'),
(45, 400, 3100, 'diamond', 'NL'),
(46, 500, 2900, 'diamond', 'NL'),
(47, 600, 2650, 'diamond', 'NL'),
(48, 700, 2450, 'diamond', 'NL'),
(49, 800, 2350, 'diamond', 'NL'),
(50, 900, 2200, 'diamond', 'NL'),
(51, 1000, 2150, 'diamond', 'NL'),
(52, 1100, 2050, 'diamond', 'NL'),
(53, 1200, 2000, 'diamond', 'NL'),
(54, 1300, 1950, 'diamond', 'NL'),
(55, 1400, 1900, 'diamond', 'NL'),
(56, 1500, 1900, 'diamond', 'NL'),
(57, 1600, 1850, 'diamond', 'NL'),
(58, 1700, 1800, 'diamond', 'NL'),
(59, 1800, 1800, 'diamond', 'NL'),
(60, 1900, 1750, 'diamond', 'NL'),
(61, 2000, 1750, 'diamond', 'NL'),
(62, 100, 8650, 'standar', 'L'),
(63, 200, 4750, 'standar', 'L'),
(64, 300, 3450, 'standar', 'L'),
(65, 400, 2800, 'standar', 'L'),
(66, 500, 2600, 'standar', 'L'),
(67, 600, 2350, 'standar', 'L'),
(68, 700, 2250, 'standar', 'L'),
(69, 800, 2150, 'standar', 'L'),
(70, 900, 2100, 'standar', 'L'),
(71, 1000, 2000, 'standar', 'L'),
(72, 1100, 1950, 'standar', 'L'),
(73, 1200, 1950, 'standar', 'L'),
(74, 1300, 1900, 'standar', 'L'),
(75, 1400, 1850, 'standar', 'L'),
(76, 1500, 1850, 'standar', 'L'),
(77, 1600, 1850, 'standar', 'L'),
(78, 1700, 1800, 'standar', 'L'),
(79, 1800, 1800, 'standar', 'L'),
(80, 1900, 1750, 'standar', 'L'),
(81, 2000, 1750, 'standar', 'L'),
(82, 100, 10150, 'premium', 'L'),
(83, 200, 5600, 'premium', 'L'),
(84, 300, 4100, 'premium', 'L'),
(85, 400, 3400, 'premium', 'L'),
(86, 500, 3100, 'premium', 'L'),
(87, 600, 2800, 'premium', 'L'),
(88, 700, 2650, 'premium', 'L'),
(89, 800, 2550, 'premium', 'L'),
(90, 900, 2450, 'premium', 'L'),
(91, 1000, 2400, 'premium', 'L'),
(92, 1100, 2350, 'premium', 'L'),
(93, 1200, 2300, 'premium', 'L'),
(94, 1300, 2250, 'premium', 'L'),
(95, 1400, 2200, 'premium', 'L'),
(96, 1500, 2200, 'premium', 'L'),
(97, 1600, 2150, 'premium', 'L'),
(98, 1700, 2150, 'premium', 'L'),
(99, 1800, 2100, 'premium', 'L'),
(100, 1900, 2100, 'premium', 'L'),
(101, 2000, 2100, 'premium', 'L'),
(102, 100, 11650, 'diamond', 'L'),
(103, 200, 6500, 'diamond', 'L'),
(104, 300, 4800, 'diamond', 'L'),
(105, 400, 3950, 'diamond', 'L'),
(106, 500, 3600, 'diamond', 'L'),
(107, 600, 3250, 'diamond', 'L'),
(108, 700, 3100, 'diamond', 'L'),
(109, 800, 2950, 'diamond', 'L'),
(110, 900, 2850, 'diamond', 'L'),
(111, 1000, 2750, 'diamond', 'L'),
(112, 1100, 2700, 'diamond', 'L'),
(113, 1200, 2650, 'diamond', 'L'),
(114, 1300, 2600, 'diamond', 'L'),
(115, 1400, 2550, 'diamond', 'L'),
(116, 1500, 2500, 'diamond', 'L'),
(117, 1600, 2500, 'diamond', 'L'),
(118, 1700, 2450, 'diamond', 'L'),
(119, 1800, 2450, 'diamond', 'L'),
(120, 1900, 2400, 'diamond', 'L'),
(121, 2000, 2400, 'diamond', 'L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `amp-06`
--
ALTER TABLE `amp-06`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `amp-hc-b`
--
ALTER TABLE `amp-hc-b`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `amp-kf`
--
ALTER TABLE `amp-kf`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `blanko`
--
ALTER TABLE `blanko`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `sc12-fc`
--
ALTER TABLE `sc12-fc`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `sc12-oc`
--
ALTER TABLE `sc12-oc`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `sc16-fc`
--
ALTER TABLE `sc16-fc`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- Indeks untuk tabel `sc16-oc`
--
ALTER TABLE `sc16-oc`
  ADD PRIMARY KEY (`id_kodeHarga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `amp-06`
--
ALTER TABLE `amp-06`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `amp-hc-b`
--
ALTER TABLE `amp-hc-b`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `amp-kf`
--
ALTER TABLE `amp-kf`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blanko`
--
ALTER TABLE `blanko`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sc12-fc`
--
ALTER TABLE `sc12-fc`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `sc12-oc`
--
ALTER TABLE `sc12-oc`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT untuk tabel `sc16-fc`
--
ALTER TABLE `sc16-fc`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `sc16-oc`
--
ALTER TABLE `sc16-oc`
  MODIFY `id_kodeHarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
