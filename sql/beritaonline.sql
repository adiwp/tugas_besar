-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2020 at 08:41 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beritaonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ringkasan` text COLLATE utf8_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `wartawan_idwartawan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `ringkasan`, `isi`, `tanggal`, `wartawan_idwartawan`) VALUES
(1, 'Bagi Immobile, Klopp dan Inzaghi Punya Kesamaan dalam Melatih', 'Ciro Immobile membandingkan manajer Liverpool, Juergen Klopp, dengan pelatih Lazio, Simone Inzaghi. Menurutnya, keduanya tak berbeda jauh dalam menangani tim.', 'Immobile memang pernah menjadi anak asuh Klopp saat masih berseragam Borussia Dortmund pada 2014-2015. Ia hanya bertahan selama semusim di sana, sebelum diboyong Sevilla di musim panas 2015.\r\n\r\nSelama bermain bersama Die Borussen, Immobile tampil sebanyak 34 laga di semua kompetisi dan mencetak 10 gol. Ia juga mempersembahkan satu trofi Piala Super Jerman kepada publik Signal Iduna Park.\r\n\r\nKendati hanya bertahan satu tahun di Dortmund, tetapi Immobile memiliki kesan tersendiri soal Klopp. Striker Timnas Italia itu menyebut juru taktik asal Jerman tersebut sebagai pelatih yang komplet.\r\n\r\nImmobile juga membandingkan Klopp dengan pelatihnya saat ini di Lazio, Inzaghi. Menurutnya, kedua pelatih tersebut memiliki persamaan dalam mengasuh para pemainnya.\r\n\r\n\"Klopp adalah ahli sepakbola yang hebat dan saya selalu mengatakan jika saya ingin bekerja dengannya ketika saya dalam kondisi terbaik. Dia adalah pelatih yang lengkap dan dia memiliki segalanya,\" kata Immobile, dikutip dari Football Italia.\r\n\r\n\"Dia benar-benar mengingatkan saya dengan Simone Inzaghi. Mereka sangat mirip dalam hal kemampuan motivasi mereka, meskipun dengan cara yang sedikit berbeda,\" ujarnya.', '2020-04-20', 2),
(2, 'City Asah Mental Juara Sterling', 'Raheem Sterling menyebut satu hal paling penting yang ia pelajari selama di Manchester City. Sterling mengaku mental juaranya terasah.', 'Sterling gabung City pada musim panas 2015 dari Liverpool. Kepindahannya saat itu sempat memantik kemarahan suporter The Reds.\r\n\r\nHampir lima tahun berseragam City, Sterling meraih enam trofi besar, dua di antaranya adalah gelar juara Premier League. Pesepakbola 25 tahun itu juga menjelma jadi salah satu pemain depan paling produktif di Inggris.\r\n\r\nSterling menyebut perjalanannya di City mengubah pola pikirnya sebagai pemain. Dia kini jadi makin haus kemenangan dan tak mudah menerima kekalahan.\r\n\r\n\"Selama di City, hal paling penting yang pernah saya pelajari adalah nilai kemenangan. Sebelumnya, kalau saya menang, maka itu bagus. Kalau kalah, saya kecewa, tapi itu tidak terlalu mengusik,\" ujar Sterling seperti dilansir Evening Standard.\r\n\r\n\"Sekarang, kalau kami kalah satu kali dalam 15 pertandingan di City, Anda pasti tidak mau ada di ruang ganti, itu seperti hal paling buruk yang pernah terjadi di dunia. Saya kira bagus ada di situasi seperti itu, bahwa tidak ada yang ingin kalah atau menerima kekalahan.\"\r\n\r\n\"Itulah hal terbesar yang pernah saya pelajari sejak saya di sini dan sesuatu yang bisa saya bawa, bukan cuma dalam sepakbola, tapi dalam segala hal yang saya lakukan. Mental juara untuk terus ingin menang dan tidak menerima kekalahan,\" katanya.', '2020-04-19', 2),
(3, 'Ibrahimovic Kecam Ulah Oknum yang Robohkan Patungnya', 'Zlatan Ibrahimovic mengecam aksi oknum penggemar Malmo FF yang merobohkan patung dirinya. Menurutnya, tindakan tersebut sangat kekanak-kanakan.', 'Ibrahimovic memang mendapat penghormatan berupa patung dirinya yang dipasang di luar Stadion Malmo FF, Swedia. Klub tersebut merupakan tim profesional pertama yang ia bela sejak 1999 hingga 2001.\r\n\r\nPatung Ibrahimovic tersebut diresmikan pada 9 Oktober 2019. Namun, monumen penghormatan itu tak luput dari sasaran aksi vandalisme oleh segelintir oknum penggemar Malmo FF.\r\n\r\nAksi vandalisme tersebut dipicu keputusan Ibrahimovic yang membeli 25 persen saham Hammarby, klub rival Malmo FF, pada 29 November 2019. Sejak saat itu, patung setinggi 3,5 meter tersebut dirusak mulai dari disiram cat, dibakar, serta dipotong bagian hidungnya.\r\n\r\nPuncaknya, patung Ibrahimovic dirobohkan oleh orang yang tak dikenal pada awal Januari 2020. Kini hanya dua kakinya saja yang tersisa di atas alas monumen tersebut.\r\n\r\nKejadian itu rupanya terdengar sampai ke telinga Ibrahimovic dan membuatnya naik pitam. Striker AC Milan itu mengecam tindakan yang dilakukan oleh oknum penggemar mantan klubnya tersebut.\r\n\r\n\"Itu benar-benar memalukan. Mereka ingin mencari perhatian dan berharap media menuliskannya. Hal tersebut sungguh kekanak-kanakan dan aku lebih besar ketimbang itu,\" kata Ibrahimovic, dilansir dari BBC.\r\n\r\n\"Patung tersebut dibiarkan apa adanya, tetapi bukan berarti kisahku bakal dirobohkan juga. Itu akan bertahan selamanya,\" dia menambahkan.\r\n\r\n\"Aku bermain buat Malmo dan aku melakukan apa yang aku lakukan buat Malmo, walaupun diriku ini tak disambut atau tidak diinginkan. Mereka seharusnya bersyukur dan siapa pun yang mengetahuinya, mereka mesti tahu itu,\" ujarnya.\r\n\r\nIbrahimovic sendiri saat ini tengah berada di Swedia dan ikut berlatih bersama Hammarby. Penyerang 38 tahun itu juga ikut ambil bagian dalam laga persahabatan dan mencetak gol.', '2020-04-23', 2),
(4, 'Madrid Masih Idamkan Neymar', 'Real Madrid pernah gagal mendapatkan Neymar. Hingga kini, Neymar masih ada dalam daftar harapan Presiden Madrid, Florentino Perez.', 'Madrid sudah lama mengincar Neymar sejak dia masih di Santos. Direktur Madrid bahkan sampai terbang ke Sao Paulo, Brasil, demi mendapatkan Neymar pada 2013.\r\n\r\nNamun, Madrid kalah bersaing dengan Barcelona. Neymar memilih untuk gabung ke rival Madrid itu.\r\n\r\nMusim panas lalu, Perez dikabarkan tertarik untuk merekrut Neymar dari Paris Saint-Germain. Tapi tak ada transfer yang terwujud.\r\n\r\nMadrid rupanya masih menyimpan harapan untuk mendatangkan Neymar. Mantan agen Neymar, Wagner Ribeiro, menyebut kalau Florentino Perez masih bermimpi bisa memboyong pemain asal Brasil itu ke Santiago Bernabeu.\r\n\r\n\"Real Madrid menghubungi saya beberapa kali karena Florentino (Perez) bermimpi mendatangkan Neymar,\" ujar Ribeiro kepada ESPN.\r\n\r\n\"Saya bersamanya tahun lalu, pada bulan Mei, di kantornya, dan dia bilang kepada saya kalau dia masih bermimpi merekrut Neymar,\" katanya.', '2020-04-23', 2),
(5, 'Arsenal Akan Kembali Latihan Pekan Depan', 'Para pemain Arsenal akan kembali ke pusat latihan London Colney mulai pekan depan. Meski demikian, ada aturan ketat yang akan diterapkan.', 'Arsenal akan jadi tim Premier League pertama yang kembali latihan setelah Liga Inggris ditangguhkan pada 13 Maret karena pandemi virus corona.\r\n\r\nKendati bisa kembali berlatih di pusat latihan, akses para pemain Arsenal akan tetap dibatasi. Social distancing juga akan diterapkan.\r\n\r\n\"Para pemain akan diizinkan mengakses pusat latihan London Colney pekan depan. Akses akan dibatasi, dikelola dengan hati-hati, dan social distancing akan diterapkan sepanjang waktu,\" seorang juru bicara klub mengonfirmasi, seperti dilansir Sky Sports.\r\n\r\n\"Seluruh gedung Colney akan tetap tutup. Para pemain akan pergi sendiri, menjalankan latihan individu, dan kembali ke rumah.\"\r\n\r\nArsenal menerapkan aturan ketat kepada skuadnya. Para pemain akan menuju tempat latihan sendiri-sendiri dan sudah memakain kostum latihan.\r\n\r\nMereka akan langsung menuju lapangan latihan, sementara semua gedung di London Colney tetap tutup. Para pemain kemudian akan langsung pulang ke rumah masing-masing setelah sesi latihan, tanpa mandi atau makan siang di tempat latihan seperti biasanya.\r\n\r\nLatihan akan dilakukan dalam kelompok kecil dengan menerapkan social distancing. Para pemain akan berlatih secara individu dan dilakukan bergantian agar skuad tidak berlatih bersamaan.', '2020-04-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(10) UNSIGNED NOT NULL,
  `isi` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan_idpelanggan` int(10) UNSIGNED NOT NULL,
  `berita_idtbl_berita` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `jenis_kelamin`, `alamat`, `kota`, `email`, `password`) VALUES
(1, 'Kakah Surakah', 'L', 'Jl. Ciomas Raya No. 12', 'Ciawi', 'surakah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Dina Mardina', 'P', 'Jl. Teuku Umar Raya No 1', 'Semarang', 'dina.mardina@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wartawan`
--

CREATE TABLE `wartawan` (
  `idwartawan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wartawan`
--

INSERT INTO `wartawan` (`idwartawan`, `nama`, `email`, `password`) VALUES
(2, 'Haifa Inayah', 'haifa@catchmeup.id', 'ac43724f16e9241d990427ab7c8f4228'),
(3, 'Duto Handoko', 'duhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`,`wartawan_idwartawan`),
  ADD UNIQUE KEY `idtbl_berita_UNIQUE` (`idberita`),
  ADD KEY `fk_berita_wartawan_idx` (`wartawan_idwartawan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idkomentar`,`pelanggan_idpelanggan`,`berita_idtbl_berita`),
  ADD KEY `fk_komentar_pelanggan1_idx` (`pelanggan_idpelanggan`),
  ADD KEY `fk_komentar_berita1_idx` (`berita_idtbl_berita`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD UNIQUE KEY `idpelanggan_UNIQUE` (`idpelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `iduser_UNIQUE` (`iduser`);

--
-- Indexes for table `wartawan`
--
ALTER TABLE `wartawan`
  ADD PRIMARY KEY (`idwartawan`),
  ADD UNIQUE KEY `idwartawan_UNIQUE` (`idwartawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wartawan`
--
ALTER TABLE `wartawan`
  MODIFY `idwartawan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_berita_wartawan` FOREIGN KEY (`wartawan_idwartawan`) REFERENCES `wartawan` (`idwartawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_berita1` FOREIGN KEY (`berita_idtbl_berita`) REFERENCES `berita` (`idberita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_komentar_pelanggan1` FOREIGN KEY (`pelanggan_idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
