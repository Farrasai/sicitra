-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 01:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`) VALUES
(1, 'sicitra', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int(10) NOT NULL,
  `id_admin` int(2) DEFAULT NULL,
  `nik_pengadu` varchar(16) NOT NULL,
  `nik_korban` varchar(16) NOT NULL,
  `tgl_aduan` date NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `judul_aduan` varchar(50) NOT NULL,
  `perihal_aduan` varchar(5000) NOT NULL,
  `status_aduan` varchar(1000) NOT NULL,
  `lampiran_aduan` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id_aduan`, `id_admin`, `nik_pengadu`, `nik_korban`, `tgl_aduan`, `id_jenis`, `judul_aduan`, `perihal_aduan`, `status_aduan`, `lampiran_aduan`) VALUES
(1, 1, '1971053103980001', '1971053103980001', '2018-12-26', 1, 'test1', 'saya mengadu', 'Tidak Valid', 'Final Project.docx'),
(2, 1, '3301231302980001', '1971053103980001', '2018-12-26', 1, '', 'coba dulu boss', 'Selesai', NULL),
(3, 1, '1971053103980001', '3325056008980001', '2019-01-23', 12, 'Penelantaran', 'saya ditelantarkan', 'Selesai', 'doc.pdf'),
(4, 1, '3325056008980001', '1971053103980001', '2019-01-23', 10, 'Ane di perkosa', 'wik wik wik wik wik', 'Menunggu', 'doc.pdf'),
(6, 1, '3301231302980001', '1971053103980001', '2019-01-24', 9, 'Coba dulu', 'TEst 12345', 'Proses', 'doc.pdf'),
(7, 1, '3301231302980001', '3301231302980001', '2019-01-27', 3, 'Pencabulan terhadap anak di cilacap utara', 'kejadian tanggal 5 desember di mertasinga , orang itu mencabuli saya di rawa bendungan sore saat hujan lebat dan aku tidak bisa minta tolong', 'Selesai', 'KRS_UNIVERSITAS_AMIKOM_Yogyakarta.pdf'),
(9, 1, '3325056008980001', '3325056008980001', '2019-01-27', 6, 'Kekerasan yang disengaja', 'Kekerasan yang saya alami sangatlah parah ', 'Proses', 'IMG_8483.JPG'),
(10, 1, '3325056008980001', '3325056008980001', '2019-01-27', 1, 'Kekerasan yang disengaja oleh toiz', 'Kekerasan yang saya alami sangatlah parah ', 'Selesai', 'IMG_84831.JPG'),
(11, 1, '3301231302980001', '3301231303980021', '2019-01-27', 12, 'anak kecil ditelantarkan oleh ibunya di bandung', 'okee', 'Tidak Valid', 'Peony-Rose-Watercolor-klein.jpg'),
(14, 1, '1971053103980001', '3325056008980001', '2019-01-28', 1, 'Pembullyan di Kampus', 'coba ih', 'Proses', 'Contoh_CVa15.docx'),
(15, 1, '3301231302980001', '3301231302980001', '0000-00-00', 2, 'kdrt yang ', 'testes', 'Proses', 'SICITRA1.png'),
(16, 1, '3301231302980001', '3301231302980001', '0000-00-00', 1, 'bullyan', 'terkena', 'Tidak Valid', 'SICITRA2.png'),
(17, 1, '3301231302980001', '3301231302980001', '0000-00-00', 6, 'tkw luar', 'bismillah', 'Proses', 'SICITRA3.png'),
(18, 1, '3301231302980001', '3301231302980001', '0000-00-00', 7, 'kekerasan pacaran', 'saya di tampar oleh suami orang', 'Proses', 'SICITRA4.png'),
(19, 1, '3301231302980001', '3301231302980081', '0000-00-00', 4, 'TEST NIK', ' gafjcv', 'Proses', 'SICITRA5.png'),
(20, 1, '3325056008980001', '3325056008980001', '2019-01-28', 1, 'bullyig', 'bismillah', 'Selesai', 'SICITRA6.png'),
(21, 1, '3325056008980001', '3325056008980001', '2019-01-28', 1, 'Test NIK2', 'wkwk', 'Tidak Valid', 'SICITRA7.png'),
(22, 1, '3325056008980001', '3325056008980001', '2019-01-28', 1, 'TEST NIK3', 'wkwk', 'Selesai', 'SICITRA8.png'),
(29, 1, '1971053103980001', '1971053103980001', '2019-01-31', 6, 'sdfsd', 'fsdfsdfsd', 'Proses', '_MG_245814.JPG'),
(30, 1, '1971053103980001', '3325056008980001', '2019-02-13', 1, 'Lamprian', 'ajdsagduasda', 'Proses', ''),
(31, 1, '1971053103980001', '3325056008980001', '2019-02-21', 5, 'Test Telegram', 'test telegram', 'Menunggu', ''),
(33, 1, '3301231302980001', '3301231302980001', '2019-02-24', 10, 'MARTABAK DIBELIKAN', 'TOIZ PELIT', 'Proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kasus`
--

CREATE TABLE `jenis_kasus` (
  `id_jenis` int(5) NOT NULL,
  `nama_kasus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kasus`
--

INSERT INTO `jenis_kasus` (`id_jenis`, `nama_kasus`) VALUES
(1, 'Bully'),
(2, 'KDRT'),
(3, 'Pencabulan'),
(4, 'Perkosaan'),
(5, 'Trafficking'),
(6, 'TKW / Buruh Migran'),
(7, 'KdP'),
(8, 'Fisik'),
(9, 'Psikis'),
(10, 'Seksual'),
(11, 'Eksploitasi'),
(12, 'Penelantaran'),
(13, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_kb`
--

CREATE TABLE `konsultasi_kb` (
  `id_konkb` int(10) NOT NULL,
  `id_admin` int(2) NOT NULL,
  `nik_pengadu` varchar(16) NOT NULL,
  `tgl_konsul` date NOT NULL,
  `judul_konsul` varchar(50) NOT NULL,
  `perihal_konkb` varchar(5000) NOT NULL,
  `jawaban` varchar(5000) DEFAULT NULL,
  `lampiran_kb` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi_kb`
--

INSERT INTO `konsultasi_kb` (`id_konkb`, `id_admin`, `nik_pengadu`, `tgl_konsul`, `judul_konsul`, `perihal_konkb`, `jawaban`, `lampiran_kb`) VALUES
(5, 1, '1971053103980001', '2019-01-20', 'Download', 'Download File', NULL, 'Kisi_kisi_ujian_akhir.docx'),
(7, 1, '1971053103980001', '2019-01-22', 'Coba Error', '12345678', 'tidak ada error', 'FREDERIK_MOTE.pdf'),
(12, 1, '1971053103980001', '2019-02-21', 'Test Telegram', 'test telegram', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_puspaga`
--

CREATE TABLE `konsultasi_puspaga` (
  `id_konpus` int(10) NOT NULL,
  `id_admin` int(2) NOT NULL,
  `nik_pengadu` varchar(16) NOT NULL,
  `tgl_konsul` date NOT NULL,
  `judul_konsul` varchar(50) NOT NULL,
  `perihal_konpus` varchar(5000) NOT NULL,
  `jawaban` varchar(5000) DEFAULT NULL,
  `lampiran` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi_puspaga`
--

INSERT INTO `konsultasi_puspaga` (`id_konpus`, `id_admin`, `nik_pengadu`, `tgl_konsul`, `judul_konsul`, `perihal_konpus`, `jawaban`, `lampiran`) VALUES
(10, 1, '1971053103980001', '2019-02-21', 'Test Telegram', 'test telegram', 'berhasil', '');

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE `korban` (
  `nik_korban` varchar(16) NOT NULL,
  `nama_korban` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(10) NOT NULL,
  `usia` int(2) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(25) DEFAULT NULL,
  `pekerjaan` varchar(35) DEFAULT NULL,
  `no_tlp` char(13) NOT NULL,
  `status_kawin` varchar(15) DEFAULT NULL,
  `difabel` varchar(5) DEFAULT NULL,
  `lampiran` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korban`
--

INSERT INTO `korban` (`nik_korban`, `nama_korban`, `tmpt_lahir`, `tgl_lahir`, `jk`, `usia`, `agama`, `alamat`, `pendidikan`, `pekerjaan`, `no_tlp`, `status_kawin`, `difabel`, `lampiran`) VALUES
('1971053103980001', 'Dandy Amo', 'Bandung', '1998-03-31', 'Laki-laki', 20, 'Islam', 'jl.Sukun', 'SMA N 2 Bandung', 'Digital Marketing', '082233056769', 'Belum', 'Tidak', NULL),
('3301231302980001', 'Farras Ammar Isnandy', 'Cilacap', '1998-07-10', 'Laki-laki', 21, 'Islam', 'yk', 'D3', 'PNS', '082325828993', 'Belum', 'Tidak', NULL),
('3301231302980081', 'risma', 'clp', '0000-00-00', 'Perempuan', 23, 'Islam', 'r', 'SMA/SMK', 'Ibu Rumah Tangga', '08955547447', 'Belum', 'Tidak', NULL),
('3301231303980021', 'Joni', 'Cilacap', '2019-01-03', 'Laki-laki', 21, 'Islam', 'ringroad', 'D3', 'Swasta', '08963637372', 'Belum', 'Tidak', NULL),
('3325056008980001', 'Risma senew', 'Batang', '2019-01-16', 'Perempuan', 21, 'Islam', 'Jl. Soka', 'D3', 'Nganggur berat', '082325828993', 'Sudah', 'Tidak', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelaku`
--

CREATE TABLE `pelaku` (
  `nik_pelaku` varchar(16) NOT NULL,
  `id_aduan` int(10) NOT NULL,
  `nama_pelaku` varchar(20) NOT NULL,
  `tmpt_lahir_pelaku` varchar(20) NOT NULL,
  `tgl_lahir_pelaku` date NOT NULL,
  `jk_pelaku` varchar(10) NOT NULL,
  `usia_pelaku` int(2) NOT NULL,
  `agama_pelaku` varchar(10) NOT NULL,
  `alamat_pelaku` varchar(100) NOT NULL,
  `pendidikan_pelaku` varchar(25) DEFAULT NULL,
  `pekerjaan_pelaku` varchar(25) DEFAULT NULL,
  `no_tlp_pelaku` char(13) NOT NULL,
  `status_kawin_pelaku` varchar(15) NOT NULL,
  `difabel_pelaku` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelaku`
--

INSERT INTO `pelaku` (`nik_pelaku`, `id_aduan`, `nama_pelaku`, `tmpt_lahir_pelaku`, `tgl_lahir_pelaku`, `jk_pelaku`, `usia_pelaku`, `agama_pelaku`, `alamat_pelaku`, `pendidikan_pelaku`, `pekerjaan_pelaku`, `no_tlp_pelaku`, `status_kawin_pelaku`, `difabel_pelaku`) VALUES
('1971053103980001', 2, 'Amo', 'Pangkalpinang', '1998-03-31', 'laki_laki', 20, 'islam', 'jl.sukun', 'SMK', 'Digital Marketing', '082233056769', 'Belum', 'Tidak'),
('45325414431', 1, 'Rachel Amanda', 'Jakarta', '1996-01-01', 'Perempuan', 22, 'Islam', 'Bandung', 'S2', 'Belum bekerja', '968468979', 'Belum', 'Tidak'),
('99954646455645', 1, 'Eminem', 'Pangkalpinang', '2019-02-24', 'Laki_laki', 22, 'TK', 'Sukun', 'D3', 'Belum bekerja', '082233056769', 'Belum', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `pengadu`
--

CREATE TABLE `pengadu` (
  `nik_pengadu` varchar(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `gambar` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadu`
--

INSERT INTO `pengadu` (`nik_pengadu`, `username`, `pass`, `nama`, `jk`, `alamat`, `no_tlp`, `tgl_daftar`, `gambar`) VALUES
('1971053103980001', 'bogoy', 'e1cf08b820424b7f9b1449ebd7878e20', 'Dandy Amo', 'Laki-laki', 'Yogyakarta', '082233056769', '2019-01-01', 'dandyamo23.jpeg'),
('3301231302980001', 'faras', '827ccb0eea8a706c4c34a16891f84e7b', 'Farras Ammar I', 'Laki-laki', 'jl. ringroad', '0832173812', '2019-02-01', 'album-terbaru-linkin-park-one-more-light_20170721_125356.jpg'),
('3325056008980001', 'risma', '827ccb0eea8a706c4c34a16891f84e7b', 'Dwi Risma Ningsih', 'Perempuan', 'Soka', '082325882893', '2019-02-12', 'risma.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id_proses` int(10) NOT NULL,
  `id_aduan` int(10) NOT NULL,
  `tgl_proses` date NOT NULL,
  `detail_proses` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`id_proses`, `id_aduan`, `tgl_proses`, `detail_proses`) VALUES
(1, 3, '2019-01-28', 'hubungi pengadu'),
(2, 3, '2019-01-28', '12345'),
(3, 9, '2019-01-28', 'coba'),
(4, 9, '2019-01-28', 'bismillah 12345'),
(5, 3, '2019-01-28', 'qwerty'),
(6, 9, '2019-01-28', 'qwerty'),
(7, 9, '2019-01-28', 'qwertyuiop'),
(8, 9, '2019-01-28', '12345'),
(9, 9, '2019-01-28', 'asdfg'),
(10, 9, '2019-01-28', 'dnbijashgfuigaidfia'),
(11, 9, '2019-01-28', 'fsnofijsa gfafidaiogfv viaGVFIUA '),
(12, 3, '2019-01-28', 'ibdiabsdiasbdiasbdbias'),
(13, 3, '2019-01-28', '16165441651463'),
(14, 3, '2019-01-28', 'qwerty'),
(15, 3, '2019-01-28', 'qwerty'),
(16, 3, '2019-01-28', 'dafasdfasdas'),
(17, 3, '2019-01-28', 'dafasdfasdas'),
(18, 9, '2019-01-28', 'fdsafasd'),
(19, 22, '2019-01-27', 'konfirmasi via telfon'),
(20, 20, '2019-01-28', 'test'),
(21, 20, '2019-01-21', 'sdsDxSZ'),
(22, 22, '2019-01-11', 'sxsaxwsxws'),
(23, 20, '2019-01-19', 'vghbjhbnj'),
(24, 9, '2019-01-28', 'atas cintaku'),
(25, 3, '2019-01-28', 'qwertyuiop'),
(26, 14, '2019-01-29', 'Acc Pendadaran !!!'),
(27, 14, '2019-01-29', 'acc '),
(28, 14, '2019-01-29', 'accc '),
(29, 29, '2019-02-04', 'bismillah'),
(30, 29, '2019-02-04', 'konfirmasi aduan via telepon'),
(31, 29, '2019-02-16', 'semoga lancar amin'),
(32, 30, '2019-02-21', 'Menghubungi pihak pengadu'),
(33, 30, '2019-02-24', 'vhguhguguhgujgu'),
(34, 30, '2019-02-24', 'test pendadaran'),
(35, 33, '2019-02-24', 'PELAPORAN TERHADAP MATBA YG TIDAKBELIAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`),
  ADD KEY `nik_pengadu` (`nik_pengadu`,`nik_korban`,`id_jenis`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `nik_korban` (`nik_korban`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `konsultasi_kb`
--
ALTER TABLE `konsultasi_kb`
  ADD PRIMARY KEY (`id_konkb`),
  ADD KEY `nik_pengadu` (`nik_pengadu`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `konsultasi_puspaga`
--
ALTER TABLE `konsultasi_puspaga`
  ADD PRIMARY KEY (`id_konpus`),
  ADD KEY `nik_pengadu` (`nik_pengadu`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`nik_korban`);

--
-- Indexes for table `pelaku`
--
ALTER TABLE `pelaku`
  ADD PRIMARY KEY (`nik_pelaku`),
  ADD KEY `nik_korban` (`id_aduan`);

--
-- Indexes for table `pengadu`
--
ALTER TABLE `pengadu`
  ADD PRIMARY KEY (`nik_pengadu`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id_proses`),
  ADD KEY `id_aduan` (`id_aduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `konsultasi_kb`
--
ALTER TABLE `konsultasi_kb`
  MODIFY `id_konkb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konsultasi_puspaga`
--
ALTER TABLE `konsultasi_puspaga`
  MODIFY `id_konpus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `id_proses` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aduan`
--
ALTER TABLE `aduan`
  ADD CONSTRAINT `aduan_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `aduan_ibfk_3` FOREIGN KEY (`nik_korban`) REFERENCES `korban` (`nik_korban`),
  ADD CONSTRAINT `aduan_ibfk_4` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_kasus` (`id_jenis`),
  ADD CONSTRAINT `aduan_ibfk_5` FOREIGN KEY (`nik_pengadu`) REFERENCES `pengadu` (`nik_pengadu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi_kb`
--
ALTER TABLE `konsultasi_kb`
  ADD CONSTRAINT `konsultasi_kb_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `konsultasi_kb_ibfk_3` FOREIGN KEY (`nik_pengadu`) REFERENCES `pengadu` (`nik_pengadu`) ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi_puspaga`
--
ALTER TABLE `konsultasi_puspaga`
  ADD CONSTRAINT `konsultasi_puspaga_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `konsultasi_puspaga_ibfk_3` FOREIGN KEY (`nik_pengadu`) REFERENCES `pengadu` (`nik_pengadu`) ON UPDATE CASCADE;

--
-- Constraints for table `pelaku`
--
ALTER TABLE `pelaku`
  ADD CONSTRAINT `pelaku_ibfk_1` FOREIGN KEY (`id_aduan`) REFERENCES `aduan` (`id_aduan`);

--
-- Constraints for table `proses`
--
ALTER TABLE `proses`
  ADD CONSTRAINT `proses_ibfk_1` FOREIGN KEY (`id_aduan`) REFERENCES `aduan` (`id_aduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
