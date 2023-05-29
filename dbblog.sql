-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2023 pada 11.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbblog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `album_id` int(11) NOT NULL,
  `album_id_photo` int(11) NOT NULL,
  `album_title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `cat_text`) VALUES
(1, 'Mochi Coklat', 'Mochi Strawberry dengan lapisan coklat'),
(4, 'Mochi Matcha', 'Mochi Strawberry dengan lapisan matcha.'),
(5, 'Mochi Red Bean', 'Mochi Strawberry dengan lapisan red bean.'),
(6, 'Mochi Cadburry', 'Mochi strawberry dengan lapisan cadburry.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_photos`
--

CREATE TABLE `tb_photos` (
  `photo_id` int(11) NOT NULL,
  `photo_id_post` int(11) NOT NULL,
  `photo_title` varchar(100) DEFAULT NULL,
  `photo_file` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_photos`
--

INSERT INTO `tb_photos` (`photo_id`, `photo_id_post`, `photo_title`, `photo_file`) VALUES
(1, 1, 'Mochi Coklat', 'coklat.jpg'),
(3, 3, 'Mochi Matcha', 'matcha.jpg'),
(4, 4, 'Mochi Redbean', 'redbean.jpg'),
(5, 5, 'Mochi Cadburry ', 'cadburry.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `post_id_cat` int(11) DEFAULT NULL,
  `post_slug` varchar(25) DEFAULT NULL,
  `post_title` varchar(100) DEFAULT NULL,
  `post_text` text DEFAULT NULL,
  `post_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `post_id_cat`, `post_slug`, `post_title`, `post_text`, `post_date`) VALUES
(1, 1, 'mochi-coklat', 'Ichigo Daifuku Coklat', 'Mochi Strawberry dengan lapisan coklat.', '2023-05-10'),
(3, 4, 'mochi-matcha', 'Ichigo Daifuku Matcha', 'Mochi Strawberry dengan lapisan matcha.', '2023-05-11'),
(4, 5, 'mochi-redbean', 'Ichigo Daifuku Redbean', 'Mochi Strawberry dengan lapisan redbean.', '2023-05-12'),
(5, 6, 'mochi-cadburry', 'Ichigo Daifuku Cadburry', 'Mochi Strawberry dengan lapisan cadburry.', '2023-05-13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_id_photo` (`album_id_photo`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indeks untuk tabel `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `photo_id_post` (`photo_id_post`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_id_cat` (`post_id_cat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_photos`
--
ALTER TABLE `tb_photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`album_id_photo`) REFERENCES `tb_photos` (`photo_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD CONSTRAINT `tb_photos_ibfk_1` FOREIGN KEY (`photo_id_post`) REFERENCES `tb_post` (`post_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`post_id_cat`) REFERENCES `tb_category` (`cat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
