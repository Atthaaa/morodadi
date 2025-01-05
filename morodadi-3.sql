-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Des 2024 pada 14.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morodadi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`) VALUES
(10, 'Korok Radiator', '<p>Merujuk pada jenis radiator yang memiliki desain kisi atau lubang-lubang kecil yang tersusun rapat, yang berfungsi untuk meningkatkan efisiensi aliran udara dan perpindahan panas. Desain ini memungkinkan radiator mendinginkan cairan pendingin dengan lebih efektif, yang penting untuk menjaga suhu mesin tetap stabil, terutama pada kendaraan atau mesin dengan kebutuhan pendinginan tinggi.</p>\r\n', '8.jpg'),
(11, 'Tambal Bocor Radiator', '<p>Tambal bocor radiator adalah proses perbaikan pada radiator yang mengalami kebocoran. Kebocoran pada radiator biasanya terjadi karena adanya keretakan atau lubang kecil akibat aus, benturan, atau korosi. Untuk menanggulanginya, tambal bocor radiator dilakukan dengan tujuan menghentikan kebocoran cairan pendingin (coolant) agar radiator bisa berfungsi kembali secara optimal.</p>\r\n\r\n<p>Ada beberapa metode yang biasa digunakan untuk tambal bocor radiator, antara lain:</p>\r\n\r\n<p>1. Penyegelan dengan bahan khusus: Menggunakan bahan atau pasta penyegel yang dirancang untuk menutup lubang atau retakan pada permukaan radiator. Produk ini biasanya diaplikasikan di area bocor dan akan mengeras untuk menutup celah.</p>\r\n\r\n<p>2. Pengelasan atau penyolderan: Untuk kebocoran yang lebih besar atau lebih serius, biasanya dilakukan pengelasan atau penyolderan pada bagian yang bocor untuk memperbaikinya secara permanen.</p>\r\n\r\n<p>3. Penggunaan tape atau sealant: Kadang-kadang, tape atau sealant khusus digunakan sebagai solusi sementara untuk menutup kebocoran radiator, meskipun ini tidak selalu memberikan hasil yang permanen.</p>\r\n\r\n<p>Meskipun tambal bocor radiator bisa menjadi solusi sementara, sebaiknya kebocoran radiator diperbaiki dengan cara yang lebih permanen untuk menghindari masalah lebih lanjut, seperti overheating atau kerusakan lebih parah pada sistem pendinginan mesin.</p>\r\n', '91.jpg'),
(12, 'Pergantian Tank Radiator', '<p>Ganti upper tank dan lower tank merujuk pada proses penggantian bagian atas (upper tank) dan bawah (lower tank) dari radiator kendaraan yang sudah rusak atau bocor. Radiator terdiri dari beberapa bagian utama, yaitu core (inti radiator) yang berfungsi untuk mendinginkan cairan pendingin, dan tank (wadah) yang terletak di bagian atas dan bawah radiator. Tank ini berfungsi sebagai tempat menampung cairan pendingin dan juga sebagai saluran untuk aliran coolant masuk dan keluar dari radiator.</p>\r\n\r\n<p>Penjelasan lebih lanjut tentang upper tank dan lower tank:<br />\r\n1. Upper Tank:&nbsp;<br />\r\n&nbsp; &nbsp;- Ini adalah bagian atas radiator yang terhubung dengan saluran masuk (inlet) coolant dari mesin. Biasanya terdapat saluran untuk mengalirkan cairan pendingin yang lebih panas ke dalam radiator untuk didinginkan.<br />\r\n&nbsp; &nbsp;<br />\r\n2. Lower Tank:&nbsp;<br />\r\n&nbsp; &nbsp;- Bagian bawah radiator yang terhubung dengan saluran keluar (outlet) coolant yang sudah didinginkan dan akan kembali ke mesin untuk mengatur suhu mesin.</p>\r\n\r\n<p>Penyebab Penggantian:<br />\r\n- Kebocoran atau Kerusakan: Biasanya, upper tank dan lower tank bisa mengalami kerusakan akibat benturan, getaran berlebih, atau korosi seiring waktu, sehingga bisa menyebabkan kebocoran pada sambungan atau badan tank itu sendiri.<br />\r\n- Usia Radiator: Seiring penggunaan kendaraan, material plastik atau logam pada tank dapat menua dan retak, terutama akibat paparan panas yang terus-menerus.<br />\r\n- Kegagalan Sistem Pendingin: Kebocoran pada bagian upper tank atau lower tank dapat menyebabkan kehilangan cairan pendingin yang signifikan, yang berpotensi menyebabkan mesin overheat.</p>\r\n\r\n<p>Proses Penggantian:<br />\r\n1. Melepaskan radiator: Radiator harus dilepas dari kendaraan, yang biasanya melibatkan pelepasan saluran coolant dan pengendaliannya.<br />\r\n2. Melepaskan upper dan lower tank: Setelah radiator dilepas, bagian upper dan lower tank dapat dipisahkan dari inti radiator (core).<br />\r\n3. Penggantian dengan yang baru: Bagian yang rusak diganti dengan tank baru atau bisa juga dilakukan pengelasan atau perbaikan jika masih memungkinkan.<br />\r\n4. Pemasangan kembali radiator: Setelah mengganti tank, radiator dipasang kembali pada kendaraan dan sistem pendinginan diuji untuk memastikan tidak ada kebocoran.</p>\r\n\r\n<p>Mengapa Penting:<br />\r\nMengganti upper tank dan lower tank penting untuk menjaga sistem pendinginan kendaraan tetap bekerja dengan baik. Kebocoran atau kerusakan pada bagian-bagian ini dapat menyebabkan cairan pendingin keluar dari sistem, yang bisa menyebabkan mesin terlalu panas dan berisiko merusak komponen mesin lainnya.</p>\r\n\r\n<p>Jika kebocoran atau kerusakan terjadi pada radiator, penggantian tank ini adalah salah satu solusi yang efektif untuk memperbaiki masalah tanpa harus mengganti seluruh radiator, yang lebih mahal.</p>\r\n', '6.jpg'),
(13, 'Pergantian Core Radiator', '<p>Ganti core radiator adalah proses penggantian inti radiator (core) yang mengalami kerusakan atau penurunan kinerja. Radiator terdiri dari tiga bagian utama: upper tank, lower tank, dan core. Core adalah bagian tengah radiator yang terdiri dari saluran-saluran kecil tempat cairan pendingin mengalir untuk mendinginkan mesin, serta sirip-sirip logam yang berfungsi meningkatkan perpindahan panas.</p>\r\n\r\n<p>Penggantian core radiator biasanya diperlukan jika terjadi kerusakan serius pada saluran pendingin di dalam core, seperti penyumbatan, kebocoran yang tidak dapat diperbaiki, atau korosi berat. Proses penggantian ini melibatkan pembongkaran radiator, melepas tank atas dan bawah, dan mengganti core dengan yang baru. Jika core radiator rusak, sistem pendinginan kendaraan akan terganggu, yang dapat menyebabkan mesin mengalami overheating.</p>\r\n', '111.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat_member` text NOT NULL,
  `wa_member` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `email_member`, `password_member`, `nama_member`, `alamat_member`, `wa_member`) VALUES
(16, 'vhemas@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Vhemas Tegar', 'Malangsari RT01/RW02, Pandeyan, Jatisrono, Kab Wonogiri', '085158878446'),
(18, 'raras@', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'raras', 'Prambanan, Yogyakarta', '0812398192');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(22, 'Radiator Denso All Car', 2100000, 'Radiator1.png', 'Kami menyediakan berbagai radiator denso untuk semua jenis mobil, tanya lebih lanjut klik wa'),
(23, 'Uppertank all car', 1000000, 'Uppertank1.png', 'Kami juga menyediakan berbagai uppertank untuk segala jenis mobil'),
(24, 'Lower Tank all car', 1000000, 'Lowertank1.png', 'Kami juga menyediakan berbagai macam lowertank untuk segala jenis mobil'),
(25, 'Selang Radiator', 1500000, 'denso1.png', 'Kami juga menyediakan berbagai selang radiator untuk mobil'),
(26, 'Tutup Radiator', 200000, 'tutupradiator1.png', 'Kami juga menyediakan berbagai tutup radiator'),
(28, 'Coolant Radiator', 200000, 'kulent2.png', 'Coolant terbaik\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(255) NOT NULL,
  `foto_service` varchar(255) NOT NULL,
  `artikel` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `nama_service`, `foto_service`, `artikel`) VALUES
(19, 'Korok Radiator', '81.jpg', 'Perkembangan teknologi dalam dunia otomotif telah membawa inovasi dalam proses spooring. Sistem spooring canggih seperti yang ditawarkan oleh Josam, menggunakan peralatan kamera dengan presisi tinggi untuk mendapatkan hasil yang akurat. Proses ini memastikan penyesuaian roda dilakukan dengan efisiensi dan ketepatan yang maksimal, mengurangi waktu henti truk dan meningkatkan produktivitas.'),
(22, 'Tambal Bocor Radiator', '96.jpg', 'Perkembangan teknologi dalam dunia otomotif telah membawa inovasi dalam proses spooring. Sistem spooring canggih seperti yang ditawarkan oleh Josam, menggunakan peralatan kamera dengan presisi tinggi untuk mendapatkan hasil yang akurat. Proses ini memastikan penyesuaian roda dilakukan dengan efisiensi dan ketepatan yang maksimal, mengurangi waktu henti truk dan meningkatkan produktivitas.'),
(23, 'Pergantian Tank Radiator', '61.jpg', 'Perkembangan teknologi dalam dunia otomotif telah membawa inovasi dalam proses spooring. Sistem spooring canggih seperti yang ditawarkan oleh Josam, menggunakan peralatan kamera dengan presisi tinggi untuk mendapatkan hasil yang akurat. Proses ini memastikan penyesuaian roda dilakukan dengan efisiensi dan ketepatan yang maksimal, mengurangi waktu henti truk dan meningkatkan produktivitas.'),
(24, 'Pergantian Core Radiator', '11.jpg', 'Perkembangan teknologi dalam dunia otomotif telah membawa inovasi dalam proses spooring. Sistem spooring canggih seperti yang ditawarkan oleh Josam, menggunakan peralatan kamera dengan presisi tinggi untuk mendapatkan hasil yang akurat. Proses ini memastikan penyesuaian roda dilakukan dengan efisiensi dan ketepatan yang maksimal, mengurangi waktu henti truk dan meningkatkan produktivitas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `caption_slider` text NOT NULL,
  `foto_slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `caption_slider`, `foto_slider`) VALUES
(15, '<p>&lrm;&nbsp;</p>\r\n', 'Home31.png'),
(16, '<p>&lrm;&nbsp;</p>\r\n', '22.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
