-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 01:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gisatm`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `id_atm` int(11) NOT NULL,
  `nama_atm` varchar(100) NOT NULL,
  `alamat_atm` varchar(100) NOT NULL,
  `foto_atm` varchar(100) NOT NULL,
  `long_atm` varchar(100) NOT NULL,
  `lat_atm` varchar(100) NOT NULL,
  `ket_atm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`id_atm`, `nama_atm`, `alamat_atm`, `foto_atm`, `long_atm`, `lat_atm`, `ket_atm`) VALUES
(1, 'ATM Bank Kalsel - Unit Bati-Bati', 'Jl. Pintas Sambangan No.64, Bati Bati, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 7085', 'atmkalsel.png', '-3.603530025089697', '114.70271008598459', 'ATM & Bank'),
(2, 'ATM BRI & Bank - Unit Bati-Bati', 'Jl. Ahmad Yani, Bati Bati, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 70853', 'atmbribank.png', '-3.5999730940329844', '114.70286231607588', 'ATM & Bank BRI UNIT BRI BATI - BATI'),
(3, 'ATM BRI - Unit Bati - Bati', 'Jl. Pintas Sambangan No.64, Bati Bati, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 7085', 'atmbrialfa.png', '-3.602468394936758', '114.70247732469154', 'ATM BRI Depan Alfamart'),
(4, 'ATM BRI - Unit Bati-Bati', 'Jl A. YANI Desa Ujung Lama', 'atmbriujl.png', '-3.5962583384501317', '114.70496102941658', 'ATM BRI Unit Bati-Bati Dekat J&T'),
(5, 'ATM Centre Albarokah', 'Jl. A. Yani, Ujung Lama, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 70852', 'atmmandiriujl.png', '-3.5938669436873036', '114.706667813838', 'ATM '),
(6, 'ATM BNI - Unit Bati-Bati', 'Jl. A. Yani Desa Ujung Baru', 'atmbniubr.png', '-3.588236412891686', '114.71599169994919', 'ATM BNI Samping Ciomas'),
(7, 'ATM BNI - Unit Bati - Bati', 'CPGG+5RH, Nusa Indah, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 70852', 'atmbnicompeed.png', '-3.5743471161848683', '114.72708578481542', 'ATM Depan Japfa Compeed'),
(8, 'ATM BRI - Unit Bati - Bati', 'CPRQ+789, Liang Anggang, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 70852', 'atmbridekatsma.png', '-3.5591691530259553', '114.73842843316707', 'ATM & Layanan Simpan Pinjam BRI Dekat SMAN 1 Bati - Bati'),
(9, 'ATM Bank Mandiri', 'FP2J+5HP, Jl. Pintas Sambangan, Pandahan, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan Selatan 7', 'atmindofood.png', '-3.549386759996058', '114.73144635543835', 'ATM Depan PT. Indofood'),
(10, 'ATM BRI', 'FR72+M73, Jl. H. Mistar Cokrokusumo, Banyu Irang, Kec. Bati Bati, Kabupaten Tanah Laut, Kalimantan S', 'atmbribanyuirang.png', '-3.5351834878086765', '114.80052262445614', 'ATM BRI - Banyu Irang');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi_atm`
--

CREATE TABLE `dokumentasi_atm` (
  `id_gambar` int(11) NOT NULL,
  `id_atm` int(11) NOT NULL,
  `foto_atm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumentasi_atm`
--

INSERT INTO `dokumentasi_atm` (`id_gambar`, `id_atm`, `foto_atm`) VALUES
(1, 1, 'atmkalsel1_2.png'),
(2, 1, 'atmkalsel1_1.png'),
(3, 2, 'atmbribank1_1.png'),
(4, 2, 'atmbribank1_2.png'),
(5, 3, 'atmbrialfa1_1.png'),
(6, 3, 'atmbrialfa1_2.png'),
(7, 4, 'atmbriujl1_1.png'),
(8, 5, 'atmmandiriujl1_1.png\r\n'),
(9, 6, 'atmbniubr1_1.png'),
(10, 7, 'atmbnicompeed1_1.png'),
(11, 8, 'atmbridekatsma1_1.png'),
(12, 9, 'atmindofood1_1.png'),
(13, 9, 'atmindofood1_2.png'),
(14, 10, 'atmbribanyuirang1_1.png'),
(15, 10, 'atmbribanyuirang1_2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`id_atm`);

--
-- Indexes for table `dokumentasi_atm`
--
ALTER TABLE `dokumentasi_atm`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `gambar_ibfk_1` (`id_atm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atm`
--
ALTER TABLE `atm`
  MODIFY `id_atm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumentasi_atm`
--
ALTER TABLE `dokumentasi_atm`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumentasi_atm`
--
ALTER TABLE `dokumentasi_atm`
  ADD CONSTRAINT `dokumentasi_atm_ibfk_1` FOREIGN KEY (`id_atm`) REFERENCES `atm` (`id_atm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
