-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 04:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(50) UNSIGNED NOT NULL,
  `idKategori` int(50) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `jml_baca` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `idKategori`, `judul_berita`, `isi_berita`, `jml_baca`) VALUES
(39, 7, 'Berita Singkat Tentang Banjir', 'Peristiwa banjir bandang akhirnya terjadi lagi. Kali ini menimpa beberapa desa di daerah sekitar kali Brantas. Banjir bandang tersebut diduga disebabkan karena intensitas hujan yang turun deras mulai jam 20.00 WIB hingga 06.00 WIB. Setidaknya sudah 2 desa yang terendam akibat kejadian ini.\r\n\r\nDiantara warga korban yang rumahnya tergenang air, sudah mulai mengungsi ke kampung sebelah. Diperkirakan karena kejadian ini ada sekitar 165 kepala keluarga terpaksa kehilangan tempat tinggalnya. Pemerintah juga sudah tanggap dengan memberikan bantuan yang diperlukan. Seperti air bersih, makanan, minuman, pakaian, serta obat-obatan.\r\n\r\n\r\nMenurut catatan, sebelumnya juga pernah terjadi banjir di wilayah ini tepatnya sekitar 3 tahun yang lalu. Namun diperkirakan, banjir bandang kali ini jauh lebih besar daripada tahun sebelumnya. Dugaan sementara, kejadian ini akibat dari masyarakat kali Brantas sendiri yang membuang sampah sembarangan di sekitaran kali Brantas.', 31),
(40, 7, 'Berita Singkat Tentang Kecelakaan', 'Telah terjadi peristiwa kecelakaan sekitar dini hari tadi tanggal 5 mei 2015 tepatnya di Jalan Tol Cipali. Kecelakaan ini melibatkan sebuah mobil mewah yang dikemudikan oleh seorang anak di bawah umur. Pengendara ditengarai bernama Bagus. Dirinya diduga mengemudikan mobil dengan kecepatan diatas 130 KM/jam.\r\n\r\nMobil bernomor polisi B 5643 itu terlihat oleh cctv menabrak pembatas jalan. Kejadian ini diduga karena rem mobil blong. Untungnya, mobil Ferrari hitam itu tidak sampai membuat kecelakaan yang hebat. Hal tersebut karena saat kejadian tol dalam keadaan sepi dan kebetulan sudah dini hari.\r\n\r\nKecelakaan yang bisa dikategorikan tunggal  tersebut juga tidak sampai merenggut korban jiwa. Hanya saja, bagus si pengendara mobil terlihat mengalami luka berat. Hingga saat ini dirinya masih dirawat intensif di salah satu rumah sakit terdekat.\r\n\r\n3. Contoh Teks Berita Singkat Tentang Kebakaran\r\nContoh Teks Berita\r\nKejadian kebakaran juga sering menjadi topic beberapa teks berita. Seperti contoh teks berita di bawah ini yang membahas tentang kejadian kebakaran di sebuah rumah. Diduga kejadian tersebut akibat meletakkan lilin yang kurang berhati-hati. Simak contoh paragraf berita ini dengan judul “Diduga karena lilin, rumah habis dilalap si jago merah”.\r\n\r\nKejadian tak terduga terjadi di salah satu perumahan Griya Suci Permai di Gresik kemarin malam sekitar pukul 21.00 WIB. Rumah milik keluarga Pak Agus tersebut kini habis tak bersisa akibat kebakaran. Diduga peristiwa itu terjadi akibat salah satu penghuni rumah yang kurang berhati-hati meletakkan lilin.', 36),
(41, 7, ' Berita Singkat Tentang Gempa Bumi', 'Sejumlah peristiwa alam seperti gempa bumi juga bisa dijadikan topik menulis teks berita. Seperti contoh di bawah ini tentang kejadian gempa bumi yang mengguncang daerah Lombok. Berikut teks berita dengan judul “Gunjangan Gempa Lombok, Mengundang Kepanikan Warga”.\r\n\r\nLagi-lagi, bencana kembali menerpa bumi pertiwi. Kali ini gempa bumi mengguncang tanah Lombok, Nusa Tenggara Timur. Gempa berkekuatan 7 skala ritcher mampu membuat kepanikan warga. Sebagian warga Lombok langsung mengungsi ke dataran tinggi sesaat setelah pihak BMKG memberi peringatan ada potensi tsunami.\r\n\r\nGempa 7 skala ritcher ini terjadi sekitar pukul 18.00 waktu Indonesia Tengah. Pusat gempa diperkirakan berada di jarak  20 km barat laut Lombok timur. Kedalaman gempa terukur hingga 15 kilometer. Kepanikan warga sempat bertambah saat berita potensi tsunami diturunkan serta listrik yang mati total.\r\n\r\n  Contoh Teks Laporan Percobaan\r\nDengan segala kegentingan yang terjadi mereka memutuskan mengungsi ke daerah yang lebih tinggi. Namun akhirnya, demi meredam kepanikan warga BMKG mencabut peringatan potensi tsunami. Gempa yang berkekuatan cukup tinggi itu pun berakibat pada naiknya air laut di beberapa daerah.\r\n\r\nDiantaranya daerah Bada Sumbawa serta pelabuhan Carik Lombok utara. Sementara hingga berita ini diturunkan, warga masih merasakan beberapa kali gempa susulan.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(50) NOT NULL,
  `namaKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`) VALUES
(4, 'Gaya Hidup'),
(5, 'Ekonomi'),
(7, 'Bencana'),
(8, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`idKategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `idKategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
