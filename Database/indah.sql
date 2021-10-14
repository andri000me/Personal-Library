-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2021 pada 05.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` char(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `status_buku` varchar(25) NOT NULL,
  `is_favorite` varchar(25) NOT NULL,
  `foto_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `nama_penulis`, `status_buku`, `is_favorite`, `foto_buku`) VALUES
('AA001', 'Jika Kita Tak Pernah Jatuh Cinta', 'Alvi Syahrin', 'sudah', 'ya', '616749de4929c.jpg'),
('AA002', 'Dont Make me think', 'Steve Krug', 'belum', 'tidak', '61674a0426e52.jpg'),
('AA003', 'Kecerdasan Komputasional', 'Indah Agustien', 'belum', 'ya', '61674a67e3170.jpg'),
('AA004', 'Hujan', 'Tere Liye', 'sudah', 'tidak', '61674a8cc5996.jpg'),
('AA005', 'Hidup Damai Tanpa Berpikir Berlebihan', 'Nakamura', 'belum', 'ya', '61674b03e1b8e.jpg'),
('AA006', 'Nebula', 'Tere Liye', 'belum', 'tidak', '61674b29bf87c.jpg'),
('AA007', 'Tidak Apa-Apa Tidak Sempurna', 'Brene Brown', 'belum', 'ya', '61674b84bb8e8.jpg'),
('AA008', 'Atomic Habits', 'James Clear', 'sudah', 'ya', '61677606b142b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `foto_profil`) VALUES
(1, 'Indah Yunita', 'inyunita', '$2y$10$lAdmevJjBbjcOxv7MYQK/OHE4VEPqzTizirjGq8cUb/QoVfV2iRx.', '61678fadab8ae.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
