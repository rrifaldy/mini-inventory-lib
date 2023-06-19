-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 11:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_keluar`
--

CREATE TABLE `tb_barang_keluar` (
  `id_transaksi` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `datetime1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang_keluar`
--

INSERT INTO `tb_barang_keluar` (`id_transaksi`, `id_barang`, `nama_barang`, `kategori_barang`, `harga_barang`, `jumlah_barang`, `datetime1`) VALUES
(1, 4, 'Meja', 'Peralatan', 30000, 2, '2022-12-09'),
(3, 4, 'Meja', 'Peralatan', 30000, 20, '2022-12-17'),
(4, 1, 'Laskar Pelangi', 'Buku', 125000, 4, '2022-12-22'),
(5, 4, 'Meja', 'Peralatan', 30000, 10, '2023-06-05');

--
-- Triggers `tb_barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `barang_keluar` AFTER INSERT ON `tb_barang_keluar` FOR EACH ROW BEGIN
UPDATE tb_masterbarang SET stok_barang = stok_barang - NEW.jumlah_barang
WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_transaksi` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `datetime1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_transaksi`, `id_barang`, `nama_barang`, `kategori_barang`, `harga_barang`, `jumlah_barang`, `datetime1`) VALUES
(1, 1, 'Laskar Pelangi', 'Buku', 150000, 2, '2022-02-02'),
(4, 1, 'Laskar Pelangi', 'Buku', 125000, 6, '2022-12-09'),
(5, 5, 'Kapur Tulis', 'Peralatan', 25000, 2, '2023-06-04');

--
-- Triggers `tb_barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `tb_barang_masuk` FOR EACH ROW BEGIN
UPDATE tb_masterbarang SET stok_barang = stok_barang + NEW.jumlah_barang
WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_masterbarang`
--

CREATE TABLE `tb_masterbarang` (
  `id_barang` int(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `stok_barang` int(20) NOT NULL,
  `harga_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masterbarang`
--

INSERT INTO `tb_masterbarang` (`id_barang`, `nama_barang`, `kategori_barang`, `stok_barang`, `harga_barang`) VALUES
(1, 'Laskar Pelangi', 'Buku', 6, 125000),
(4, 'Meja', 'Peralatan', 10, 30000),
(5, 'Kapur Tulis', 'Peralatan', 24, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(2, 'rifqi', 'rifqi', 'Rifqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_masterbarang`
--
ALTER TABLE `tb_masterbarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_masterbarang`
--
ALTER TABLE `tb_masterbarang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
