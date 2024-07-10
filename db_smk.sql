-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2024 pada 05.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `ttl`, `jenis_kelamin`, `foto`, `asal_sekolah`, `jurusan`) VALUES
(2, 'Dimas Saputra', 'Balikpapan, 19 Juni 2003', 'Pria', 'dimas.jpg', 'SMP Muhammadiyah 2 Balikpapan', 'Teknik Bisnis & Sepeda Motor'),
(3, 'Rina Rismaharini', 'Sumedang, 14 Februari 2002', 'Perempuan', 'rina.jpg', 'SMP Negeri 7 Balikpapan', 'Akuntansi & Keuangan Lembaga'),
(4, 'Riski Ramadhani', 'Samarinda, 28 Desember 2002', 'Laki - Laki', 'riski.jpg', 'SMP Airlangga Balikpapan', 'Teknik Komputer & Jaringan'),
(5, 'Yusika Damayanti', 'Balikpapan, 05 Oktober 2002', 'Perempuan', 'paijo.jpg', 'SMP Muhammadiyah 2 Balikpapan', 'Otomatisasi Tata Kelola Perkantoran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
