-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 19.37
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semnas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(1) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `isi`) VALUES
(1, 'oAfSp5mq.png', '                                                                                                                    bhai              ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(1) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`no`, `tanggal`, `deskripsi`) VALUES
(1, '2021-04-21', 'rofiq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembicara`
--

CREATE TABLE `pembicara` (
  `no` int(1) NOT NULL,
  `gambar_pembicara` varchar(255) NOT NULL,
  `nama_pembicara` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembicara`
--

INSERT INTO `pembicara` (`no`, `gambar_pembicara`, `nama_pembicara`, `keterangan`, `status`) VALUES
(2, 'xJL9VKBd.jpg', 'rofiq riadi', 'ceo', 2),
(3, 'M076KHiX.jpg', 'akbar rais', 'pengusaha tekstil', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sponsor`
--

INSERT INTO `sponsor` (`id`, `gambar`, `keterangan`) VALUES
(1, 'A9C8jByx.jpg', 'pocari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `no` int(2) NOT NULL,
  `keterangan` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`no`, `keterangan`, `link`) VALUES
(1, 'ssma', 'kuyha.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `no` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`no`, `gambar`, `keterangan`) VALUES
(1, 'iObxwRNB.PNG', 'hai'),
(3, 'L7wcmWM5.PNG', 'namaku rofiq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `pembicara`
--
ALTER TABLE `pembicara`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembicara`
--
ALTER TABLE `pembicara`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
