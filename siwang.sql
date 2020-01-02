-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 05:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `jabatan`) VALUES
(1, 'nounnasaritie', 'nounnasaritie', 'pemilik'),
(2, 'Devi', 'Devi', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `data_reseller`
--

CREATE TABLE `data_reseller` (
  `id_reseller` int(11) NOT NULL,
  `nama_reseller` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_whatsapp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_reseller`
--

INSERT INTO `data_reseller` (`id_reseller`, `nama_reseller`, `alamat`, `no_whatsapp`) VALUES
(1, 'Devi', 'Sliyeg', '087727712345'),
(2, 'Triani', 'Karangampel', '089767346781'),
(3, 'Rohini', 'Karangampel', '081828749921');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_reseller` varchar(50) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `waktu_pengambilan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `img`, `harga`, `stok`) VALUES
(1, 'Siwang', 'siwang.jpg', 33000, 20),
(2, 'Sambal cumi', 'sambal_cumi.jpg', 20000, 10),
(3, 'Sambal rujak', 'sambal_rjk.jpg', 15000, 10),
(4, 'Sambel Sembleh', '', 17000, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_reseller`
--
ALTER TABLE `data_reseller`
  ADD PRIMARY KEY (`id_reseller`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_reseller`
--
ALTER TABLE `data_reseller`
  MODIFY `id_reseller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
