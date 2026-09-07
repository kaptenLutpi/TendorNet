-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 01:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tendornet`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_telepon` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `nomor_telepon`, `password`) VALUES
(3, 'dimas', 'kadalkeinjek@gmail.com', '1234568', '1232');

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_paket`
--

INSERT INTO `detail_paket` (`id_detail`, `id_order`, `id_produk`, `pembelian`) VALUES
(1, 1, 5, 2),
(2, 2, 1, 2),
(3, 3, 3, 3),
(4, 3, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(10) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `kategori_paket` varchar(50) NOT NULL,
  `harga_paket` int(50) NOT NULL,
  `stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `kategori_paket`, `harga_paket`, `stok`) VALUES
(1, 'Paket Silver', 'Paket Internet Tv', 250000, 300),
(2, 'Paket Immortal', 'Paket Internet Tv', 300000, 300),
(3, 'Paket Radiant', 'Paket Internet Tv', 350000, 300),
(4, 'Paket Predator', 'Paket Games', 500000, 300),
(5, 'Paket Gold', 'Paket Tv', 250000, 300),
(7, 'Paket Ace', 'Paket Tv', 300000, 300),
(8, 'Paket Tengkorak', 'Paket Games Ultra Cepat', 350000, 300),
(9, 'Paket Strip', 'Paket Games Ultra Cepat', 400000, 300),
(10, 'Paket Diamond', 'Paket Games Ultra Cepat', 450000, 300),
(14, 'Paket Predator', 'Paket Internet', 300000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `email`, `password`) VALUES
(1, 'admin', '123'),
(2, '', ''),
(3, 'wawawa', '12345'),
(4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_paket`
--

CREATE TABLE `transaksi_paket` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_bayar` float NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_paket`
--

INSERT INTO `transaksi_paket` (`id_order`, `total_item`, `total_bayar`, `tgl_transaksi`) VALUES
(1, 2, 500000, '2022-06-07'),
(2, 2, 500000, '2022-06-07'),
(3, 5, 1650000, '2022-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_paket`
--
ALTER TABLE `transaksi_paket`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_paket`
--
ALTER TABLE `detail_paket`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_paket`
--
ALTER TABLE `transaksi_paket`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
