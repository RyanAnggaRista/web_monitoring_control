-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2021 pada 15.12
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aldo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbhistory`
--

CREATE TABLE `tbhistory` (
  `id` int(11) NOT NULL,
  `channel1` int(11) NOT NULL,
  `channel2` int(11) NOT NULL,
  `channel3` int(11) NOT NULL,
  `channel4` int(11) NOT NULL,
  `channel5` int(11) NOT NULL,
  `channel6` int(11) NOT NULL,
  `channel7` int(11) NOT NULL,
  `channel8` int(11) NOT NULL,
  `channel9` int(11) NOT NULL,
  `channel10` int(11) NOT NULL,
  `channel11` int(11) NOT NULL,
  `channel12` int(11) NOT NULL,
  `channel13` int(11) NOT NULL,
  `channel14` int(11) NOT NULL,
  `channel15` int(11) NOT NULL,
  `channel16` int(11) NOT NULL,
  `waktuSensor` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbhistory`
--

INSERT INTO `tbhistory` (`id`, `channel1`, `channel2`, `channel3`, `channel4`, `channel5`, `channel6`, `channel7`, `channel8`, `channel9`, `channel10`, `channel11`, `channel12`, `channel13`, `channel14`, `channel15`, `channel16`, `waktuSensor`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:24:16'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:24:19'),
(3, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:24:22'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:24:26'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2021-08-06 18:24:55'),
(6, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:24:56'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 18:25:05'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 18:25:43'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:27:31'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 18:28:13'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:28:21'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 18:28:25'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2021-08-06 18:28:35'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:28:54'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:28:56'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:01'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:02'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:03'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:04'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:10'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:16'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:29:21'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2021-08-06 18:31:52'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:32:14'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 18:32:30'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:32:34'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2021-08-06 18:32:49'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 18:33:09'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 18:33:18'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2021-08-06 19:09:21'),
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:09:34'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '2021-08-06 19:09:37'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '2021-08-06 19:09:40'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2021-08-06 19:09:43'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-08-06 19:21:16'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:21:43'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-08-06 19:22:00'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2021-08-06 19:22:25'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:22:30'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:22:37'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2021-08-06 19:22:40'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:22:51'),
(43, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:22:56'),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:23:00'),
(45, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:24:50'),
(46, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:13'),
(47, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:15'),
(48, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:16'),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:19'),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:20'),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:21'),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-08-06 19:25:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkontrol`
--

CREATE TABLE `tbkontrol` (
  `token` varchar(50) NOT NULL,
  `channel1` int(11) NOT NULL,
  `channel2` int(11) NOT NULL,
  `channel3` int(11) NOT NULL,
  `channel4` int(11) NOT NULL,
  `channel5` int(11) NOT NULL,
  `channel6` int(11) NOT NULL,
  `channel7` int(11) NOT NULL,
  `channel8` int(11) NOT NULL,
  `channel9` int(11) NOT NULL,
  `channel10` int(11) NOT NULL,
  `channel11` int(11) NOT NULL,
  `channel12` int(11) NOT NULL,
  `channel13` int(11) NOT NULL,
  `channel14` int(11) NOT NULL,
  `channel15` int(11) NOT NULL,
  `channel16` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbkontrol`
--

INSERT INTO `tbkontrol` (`token`, `channel1`, `channel2`, `channel3`, `channel4`, `channel5`, `channel6`, `channel7`, `channel8`, `channel9`, `channel10`, `channel11`, `channel12`, `channel13`, `channel14`, `channel15`, `channel16`) VALUES
('08563069639', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmonitoring`
--

CREATE TABLE `tbmonitoring` (
  `current1` float NOT NULL,
  `current2` float NOT NULL,
  `current3` float NOT NULL,
  `current4` float NOT NULL,
  `current5` float NOT NULL,
  `current6` float NOT NULL,
  `current7` float NOT NULL,
  `current8` float NOT NULL,
  `current9` float NOT NULL,
  `current10` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbmonitoring`
--

INSERT INTO `tbmonitoring` (`current1`, `current2`, `current3`, `current4`, `current5`, `current6`, `current7`, `current8`, `current9`, `current10`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbhistory`
--
ALTER TABLE `tbhistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbhistory`
--
ALTER TABLE `tbhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
