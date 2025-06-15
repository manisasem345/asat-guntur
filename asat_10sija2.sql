-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2025 pada 10.33
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asat_10sija2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `deskripsi_profesi` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `website` varchar(255) NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `freelance` tinyint(1) NOT NULL,
  `keterangan_about` varchar(255) NOT NULL,
  `keterangan_skill` varchar(100) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `url_hero` varchar(255) NOT NULL,
  `url_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama_depan`, `nama_belakang`, `tentang`, `profesi`, `deskripsi_profesi`, `tgl_lahir`, `website`, `gelar`, `hp`, `email`, `kota`, `freelance`, `keterangan_about`, `keterangan_skill`, `skill`, `url_hero`, `url_foto`) VALUES
(27, 'Bahy', 'Alhady', 'Ceria, Baik', 'Network Engineer', 'Memahami materi dasar tentang network', '2000-02-02', 'index.php', 'Siswa', '62888888', 'kemarinbelajar@mail.com', 'New York', 0, 'Makan, tidur, istirahat, belajar', 'Tertarik dalam hal network', 'PHP, 80%, Fiber Optic, 90%, MySQL, 50%, CSS, 80%, HTML, 85%, Makan, 100%', 'presiden-RI-3.png', 'Jusuf_Habibie.jpeg'),
(28, 'Aku', 'Dia', 'Sedih, Jahat', 'Web Progammer', 'iya', '1999-09-09', 's.com', 'Guru', '62999999', 'itudia@email.com', 'Ohio', 0, 'iya', 'bagus', 'IYA , 10%, BAGUS, 100%, ADUH, 100%, CAPEK, 65%, SEMANGAT, 100%, MAKAN, 20%', 'Screenshot 2024-08-01 132454.png', 'Screenshot 2024-07-10 104150.png'),
(29, 'kjguiyg', 'fttyur', 'dthdth', 'gfnfgg', 'Memahami materi dasar tentang network', '2025-06-01', 'index.php', 'm;lmdkfbd', '99979888', 'sejatidimas21@gmail.com', 'Bogor', 3, 'iya', 'Tertarik dalam hal network', 'PHP, 80%, Fiber Optic, 90%, MySQL, 50%, CSS, 80%, HTML, 85%, Makan, 100%', 'Screenshot (3).png', 'Screenshot (6).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) UNSIGNED NOT NULL,
  `deskripsi_kontak` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `peta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `deskripsi_kontak`, `alamat`, `peta`) VALUES
(15, 'Ini adalah kontakku', 'SMKN 1 CIBINONG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9977598367623!2d106.80547207499306!3d-6.521963993470584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3db9bbedcc3%3A0x1f5280e86053b1e9!2sSMK%20NEGERI%201%20Cibinong!5e0!3m2!1sid!2sid!4v1749890477717!5m2!1sid!2sid frameborder=0 width=100% height=270px style=border:0; allowfullscreen= loading=lazy referrerpolicy=no-referrer-when-downgrade'),
(16, 'Itu adalah kontakmu', 'SMKN 1 CIBINONG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9977598367623!2d106.80547207499306!3d-6.521963993470584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3db9bbedcc3%3A0x1f5280e86053b1e9!2sSMK%20NEGERI%201%20Cibinong!5e0!3m2!1sid!2sid!4v1749890477717!5m2!1sid!2sid frameborder=0 width=100% height=270px style=border:0; allowfullscreen= loading=lazy referrerpolicy=no-referrer-when-downgrade'),
(17, 'Ini adalah kontakku', 'SMKN 1 CIBINONG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9977598367623!2d106.80547207499306!3d-6.521963993470584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3db9bbedcc3%3A0x1f5280e86053b1e9!2sSMK%20NEGERI%201%20Cibinong!5e0!3m2!1sid!2sid!4v1749890477717!5m2!1sid!2sid frameborder=0 width=100% height=270px style=border:0; allowfullscreen= loading=lazy referrerpolicy=no-referrer-when-downgrade');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `judul_pesan` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama_pengirim`, `email_pengirim`, `judul_pesan`, `pesan`, `tgl_pesan`) VALUES
(8, 'Seseorang', 'besokbelajar@email.com', 'Untuk Kamu', 'Semangat Belajar!', '2025-06-14 15:38:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
