-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 11:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Manual'),
(2, 'Matic'),
(3, 'Manual dan Matic');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(5) NOT NULL,
  `foto_mobil` varchar(25) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `type_mobil` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `foto_mobil`, `id_jenis`, `type_mobil`, `merk`, `no_polisi`, `warna`, `harga`, `status`) VALUES
(7, '09-03-2018Avanza 2010.jpg', 2, 'Avanza 2010', 'Toyota', 'B 1996 END', 'Silver', 200000, 1),
(8, 'Honda Mobilio 2017.png', 1, 'Mobilio 2017', 'Honda', 'B 0102 BGL', 'Merah Marun', 275000, 0),
(9, 'Suzuki_Ertiga 2017.jpg', 1, 'Ertigo 2017', 'Suzuki', 'B 9876 TES', 'Silver', 265000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `foto_pelanggan` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_peminjaman` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `no_ktp`, `foto_pelanggan`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `username`, `password`, `alamat_pelanggan`, `no_telepon`, `email`, `status_peminjaman`) VALUES
(2, 95123, 'balon.jpg', 'Balon Bolo2', '1998-03-09', 'L', 'balon', 'balon', 'Jl', '02131905947', 'balon@gmail.com', 1),
(3, 456, 'IMG_20150720_184203.jpg', 'Andhika Elfriza', '1996-02-01', 'L', 'andhika', 'andhika', 'Jl. Bilabong Permai', '089517757216', 'andhika@gmail.com', 0),
(4, 2147483647, 'IMG_20170108_211727.jpg', 'Aditya Kurniawan', '2018-12-24', 'L', 'adit', 'adit', 'Jatiroto', '085859401296', 'aditbluest@yahoo.com', 1),
(5, 0, '', 'mukidi', '', 'L', 'mukidi', '$2y$10$KGjcp1Hoo837RxIWt6XkQ.R', '', '089555344433', 'mukimuki', 0),
(6, 0, '', 'sutang', '', 'L', 'sutang', '$2y$10$TI2.5f57pfHqpXr.AJADi.5', '', '087456378636', 'sutang@gmail.com', 0),
(8, 0, '', 'tedy', '', 'L', 'tedy', '$2y$10$i6k54j1AZy0SG4tlPq55EOAyFQgtQeLTJqRURbGVAjJI1jZc4j5lG', '', '089555344433', 'supardi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_bayar` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `no_rek` varchar(20) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_bayar`, `id_transaksi`, `tgl_bayar`, `pembayaran`, `no_rek`, `nama_bank`, `atas_nama`) VALUES
(17, 18, '2018-03-12', 'Cash', '', '', ''),
(18, 20, '2018-12-13', 'Cash', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `id_pengembalian` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL,
  `harga` int(15) NOT NULL,
  `terlambat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengembalian`
--

INSERT INTO `tb_pengembalian` (`id_pengembalian`, `id_transaksi`, `harga`, `terlambat`) VALUES
(5, 18, 200000, 1),
(6, 20, 275000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_mobil` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tgl_sewa` datetime NOT NULL,
  `tgl_selesaisewa` datetime NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `denda` int(11) DEFAULT NULL,
  `status_pembayaran` int(5) NOT NULL,
  `status_pengembalian` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_mobil`, `harga`, `id_pelanggan`, `nama_lengkap`, `tgl_sewa`, `tgl_selesaisewa`, `jumlah_harga`, `denda`, `status_pembayaran`, `status_pengembalian`) VALUES
(18, 7, 200000, 3, 'Andhika Elfriza', '2018-03-11 15:55:00', '2018-03-13 15:55:00', 400000, 200000, 1, 1),
(19, 8, 275000, 1, 'Wanita.me', '2018-03-12 22:00:00', '2018-03-22 22:00:00', 2750000, 0, 0, 0),
(20, 8, 275000, 4, 'Aditya Kurniawan', '2018-12-13 13:00:00', '2018-12-14 11:00:00', 0, 550000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500'),
(3, 'Aditya Kurniawannnnnn', 'ff41710842060a02f6c792cf55b49551'),
(5, 'joko', '9ba0009aa81e794e628a04b51eaf7d7f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_bayar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  MODIFY `id_pengembalian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
