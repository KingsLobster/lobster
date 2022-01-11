-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 19.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `notelp` varchar(25) NOT NULL,
  `penerima` varchar(25) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `berat` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `pengirim`, `alamat`, `tanggal`, `notelp`, `penerima`, `deskripsi`, `berat`) VALUES
(4, 'soniman', 'kalitengah tanggulangin sdada', '2021-09-27', '09434', 'asid', 'adasdsa', '2kg'),
(6, 'aziz', 'kalitengah', '2021-09-28', 'ew', 'aul', 'lolita', '100'),
(8, 'ssas', 'ssssssff', '2021-09-27', '', 'ds', 'ds', '203'),
(9, 'wahyua', 'kali', '2021-09-27', '', 'aziz', 'as', '20'),
(10, 'aul', 'kalie', '2021-09-27', '0273733', 'ula', 'ali', '2k');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
