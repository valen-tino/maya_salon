-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 09:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maje`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` bigint(100) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_diupload` date NOT NULL,
  `waktu_diupload` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`, `no_telp`, `subjek`, `pesan`, `tanggal_diupload`, `waktu_diupload`) VALUES
(9, 'valen.jehaut@gmail.com', 923409234809438, 'ofsdsdfhfldh', 'uwheirehreh', '2021-03-06', '12:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `status`) VALUES
(14, '774476587_WhatsApp Image 2021-02-18 at 14.59.06.jpeg', 1),
(15, '357516511_WhatsApp Image 2021-02-18 at 14.59.02.jpeg', 1),
(16, '670438692_WhatsApp Image 2021-02-18 at 14.59.05 (2).jpeg', 1),
(17, '1033836995_WhatsApp Image 2021-02-18 at 14.59.05 (1).jpeg', 1),
(18, '611568912_WhatsApp Image 2021-02-18 at 14.59.04 (1).jpeg', 1),
(19, '881884548_WhatsApp Image 2021-02-18 at 14.59.04.jpeg', 1),
(20, '8505814_WhatsApp Image 2021-02-18 at 14.59.03 (2).jpeg', 1),
(21, '1070612545_WhatsApp Image 2021-02-18 at 14.59.03 (1).jpeg', 1),
(22, '1944075712_WhatsApp Image 2021-02-18 at 14.59.03.jpeg', 1),
(23, '1065525658_042917f4-63d4-4ee1-aa30-a6ffa7c778b9.jpeg', 1),
(24, '1918894855_6f35a979-1696-4d55-a508-5a4635dae720.jpeg', 1),
(25, '52819822_134a88fc-3355-4ccf-ad78-0a6220204c24.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `details`) VALUES
(1, 'Cutting/Potong', 'Harga :<br>\r\nRp 50.000'),
(2, 'Facial', 'Biokos : Rp 75.000<br>\r\nLatulip : Rp 55.000<br>\r\nSari Ayu : Rp 55.000<br>\r\nViva : Rp 35.000<br>\r\nTotok Wajah : Rp 50.000<br>\r\nKriting Bulu Mata : Rp 125.000<br>\r\n'),
(3, 'Cream Bath Tradisional', 'Gingseng : Rp 65.000<br>\r\nStrawberry : Rp 65.000<br>\r\nCoklat : Rp 65.000<br>\r\nSusu : Rp 65.000<br>\r\nAvocado : Rp 65.000<br>\r\nNR : Rp 70.000<br>\r\n'),
(4, 'Hair Mask', 'Blu Spa : Rp 100.000<br>\r\nLoreal Spa : Rp 75.000<br>\r\nMatrix : Rp 75.000<br>\r\n'),
(5, 'Ratus Vagina', 'Harga :<br>\r\nRp 35.000\r\n'),
(7, 'Ear Candler', 'Harga :<br>\r\nRp 40.000'),
(8, 'Pedicure', 'Harga :<br>\r\nRp 40.000'),
(9, 'Nail Polish', 'Harga :<br>\r\nRp 40.000');

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `sp` int(25) NOT NULL,
  `colli` int(3) NOT NULL,
  `berat` int(4) NOT NULL,
  `code` varchar(25) NOT NULL,
  `franco` varchar(20) NOT NULL,
  `confrankert` double NOT NULL,
  `penerima_barang` varchar(50) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `sp`, `colli`, `berat`, `code`, `franco`, `confrankert`, `penerima_barang`, `keterangan`) VALUES
(1, 29630, 183, 6613, '98502', 'Lunas', 10000, 'Bp Yoseph', 'safdkbsf'),
(2, 1, 2, 3, '451194', 'Lunas', 40000, 'Tino', 'Perusahaan megakorporat a'),
(7, 3432, 1221, 34, '4511943', 'Lunas', 100000, 'Tino', 'sdfaafdaf'),
(8, 787823, 3892, 45, '451194', 'Lunas', 200000, 'Tinosidin', 'jhsfd'),
(10, 23, 32, 4, '985043', 'Lunas', 23332, 'Tino323', 'sddfsfd'),
(11, 243, 12323, 4, '9850123', 'Lunas', 2333212, 'Tinosd', 'wereqr'),
(12, 2432, 123, 42, '12123', 'Lunas', 23302, 'Linatino', '2323');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`id`, `nama`, `jabatan`, `gambar`) VALUES
(6, 'Maria Fatimah Maya', 'Pemilik', '1332820850_WhatsApp Image 2021-02-18 at 15.00.37.jpeg'),
(7, 'Vinsensius Jehaut', 'Pemilik', '765083192_Screenshot 2021-03-05 222149.png'),
(8, 'Tes', 'aflkj', '122785633_Screenshot 2021-02-18 220700.png');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkamiawal`
--

CREATE TABLE `tentangkamiawal` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentangkamiawal`
--

INSERT INTO `tentangkamiawal` (`id`, `details`, `gambar`) VALUES
(1, 'Cuman test aja', '141204141_depan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangkamiawal`
--
ALTER TABLE `tentangkamiawal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tentangkamiawal`
--
ALTER TABLE `tentangkamiawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
