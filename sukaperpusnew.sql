-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 10.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukaperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(11) NOT NULL,
  `nama_buku` text NOT NULL,
  `penulis` text DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `tahun` int(6) NOT NULL,
  `deskripsi` text NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id`, `nama_buku`, `penulis`, `genre`, `tahun`, `deskripsi`, `links`) VALUES
(31, 'Masters of Science Fiction and Fantasy Art_ A Collection of the Most Inspiring Science Fiction, Fantasy, and Gaming Illustrators in the World', 'Karen Haber & Joe Haldeman', 'Fantasi', 2011, '\"In every community, there is work to be done. In every nation, there are wounds to heal. In every heart, there is the power to do it. ” ― Marianne Williamson', 'https://drive.google.com/file/d/1qEHRaEeh77gXz4oxgo_wrBYG0T9OPhbe/view'),
(32, 'Sejarah Islam di Nusantara ', 'Michael Laffan', 'sejarah ', 2015, 'Agama Islam tidak dilahirkan di Indonesia, namun justru negara inilah yang memiliki penduduk muslim dengan jumlah terbesar di dunia. Bagaimanakah cara agama ini masuk dan berkembang di antara suku dan budaya yang beragam di nusantara? Fondasi pertanyaan ini kemudian menggerakkan Michael Laffan, Profesor Sejarah di Universitas Princenton, untuk meneliti proses tumbuh kembangnya Islam di Indonesia yang memiliki corak dan ciri khusus. Dari aneka ragam sumberdaya, Laffan mereka ulang sejarah interaksi dan diskusi ihwal Islam di Asia Tenggara, khususnya Indonesia.', 'https://drive.google.com/file/d/15AUyq4ljF2lhL7GUsFe5fJT1QblwTMpP/view?usp=sharing'),
(34, 'PEREMPUAN DAN BUMI DALAM SASTRA:\r\ndari Kritik Sastra Feminis, Ekokritik, sampai \r\nEkofeminis', 'Wiyatmi', 'sastra', 2017, 'Buku ini ditulis berdasarkan penelitian yang telah saya \r\nsuntuki selama kurang lebih sepuluh tahun. Saya mulai tertarik \r\npada sastra, khususnya novel yang mengangkat isu perempuan \r\npada awal 2000-an, seiring dengan munculnya sejumlah \r\nsastrawan perempuan dalam penulisan sastra Indonesia, \r\nseperti Ayu Utami, Dee (Dewi Sartika), dan Djenar Maesa Ayu.', 'https://drive.google.com/file/d/1puwrum36TiC32C-YPlsHQuajRl3HV7Wg/view?usp=sharing'),
(36, 'Romansa Northropa Fryea u Gospodaru prstenova i\r\nZvjezdanim ratovima', 'Novosel', 'Romansa', 2016, 'Postoje pripovjedne kategorije književnosti koje obuhvaćaju širi pojas od \r\nuobičajenih podjela književnosti na književne žanrove ili rodove kao što su: \r\nlirika, epika i drama te u posljednje vrijeme diskursni književni rodovi koji su se \r\ns pravom počeli zasebno odvajati. Kako navodi Frye u svojoj knjizi Anatomija \r\nkritike, četiri su takve kategorije: romantička, tragička, komička i ironijska ili \r\nsatirička. Svojstva nabrojenih kategorija isprepliću se kroz navedene žanrove i \r\nrodove te dospijevaju na sam vrh podjele književnosti.', 'https://drive.google.com/file/d/1PMbx4qEnfMKiVtOEFUqHEunxGmgQS-rO/view?usp=sharing'),
(38, 'Laugh Tactics:\r\nMaster Conversational Humor and\r\nBe Funny on Command\r\nThink Quickly on Your Feet', ' Patrick King', 'humor ', 2016, ' The butterfly counts not months but moments, and has time enough. ” ― Rabindranath Tagore', 'https://drive.google.com/file/d/1ITVP8aaYCBpGZEGv91fVYVg8epMbeNhO/view?usp=sharing'),
(39, 'Krava na Mjesecu. Filozofija znanstveno-fantastičnih horor filmova: Estetika, filozofija emocija,', 'Kristijan Krkač', 'Horor', 2016, '“ Those who bring sunshine to the lives of others cannot keep it from themselves. ” ― J. M. Barrie', 'https://drive.google.com/file/d/1qT8EAq8ZtoSJvKnNOXtRrrKvuZrDLn34/view?usp=sharing');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
