-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 04:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5
=======
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 08:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Storage'),
(2, 'Penyimpanan');

=======
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652
-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(15) NOT NULL,
  `nama_merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`) VALUES
(1, 'Thosiba'),
(2, 'Western Digital');

=======
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652
-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(15) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `jenis_kelamin`, `username`, `password`) VALUES
(5, 'Anton Tri Pamungkas', 'Sukoharjo', 'L', 'trianstagram', 'f603fed5a88c4bb2ef5cc9b4641b11ca996e7275');

=======
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652
-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `harga` int(15) NOT NULL,
  `id_merk` int(15) NOT NULL,
  `id_kategori` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `warna`, `jumlah`, `harga`, `id_merk`, `id_kategori`) VALUES
(2, 'SuperFast 1TB', 'White', 1, 700000, 1, 1);

=======
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652
-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(15) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_transaksi` int(15) NOT NULL,
  `id_pelanggan` int(15) NOT NULL,
  `id_produk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
<<<<<<< HEAD
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT;
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
<<<<<<< HEAD
  MODIFY `id_merk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id_merk` int(15) NOT NULL AUTO_INCREMENT;
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
<<<<<<< HEAD
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT;
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
<<<<<<< HEAD
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT;
>>>>>>> d7143c99c0a565000a1e408cd328f6a752e54652

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
