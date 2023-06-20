-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 10:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pplg`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `nama`, `no`, `status`, `kondisi`) VALUES
(1, 'lenovo', 1, 'tersedia', 'digunakan'),
(2, 'lenovo', 2, 'tersedia', 'digunakan'),
(3, 'lenovo', 3, 'tidak tersedia', 'rusak'),
(4, 'lenovo', 4, 'tersedia', 'digunakan'),
(5, 'lenovo', 5, 'tersedia', 'baik'),
(6, 'lenovo', 6, 'tersedia', 'baik'),
(7, 'lenovo', 7, 'tersedia', 'baik'),
(8, 'lenovo', 8, 'tersedia', 'baik'),
(9, 'lenovo', 9, 'tersedia', 'baik'),
(10, 'lenovo', 10, 'tersedia', 'digunakan'),
(11, 'lenovo', 11, 'tersedia', 'digunakan'),
(12, 'lenovo', 12, 'tersedia', 'baik'),
(13, 'lenovo', 13, 'tersedia', 'baik'),
(14, 'lenovo', 14, 'tersedia', 'baik'),
(15, 'lenovo', 15, 'tersedia', 'baik'),
(16, 'lenovo', 16, 'tersedia', 'baik'),
(17, 'lenovo', 17, 'tersedia', 'baik'),
(18, 'lenovo', 18, 'tersedia', 'baik'),
(19, 'lenovo', 19, 'tersedia', 'baik'),
(20, 'lenovo', 20, 'tersedia', 'baik'),
(21, 'acer', 21, 'tersedia', 'baik'),
(22, 'acer', 22, 'tersedia', 'digunakan'),
(23, 'acer', 23, 'tersedia', 'digunakan'),
(24, 'acer', 24, 'tersedia', 'digunakan'),
(25, 'acer', 25, 'tersedia', 'baik'),
(26, 'acer', 26, 'tersedia', 'digunakan'),
(27, 'acer', 27, 'tersedia', 'baik'),
(28, 'acer', 28, 'tersedia', 'baik'),
(29, 'acer', 29, 'tersedia', 'baik'),
(30, 'acer', 30, 'tersedia', 'baik'),
(31, 'acer', 31, 'tersedia', 'baik'),
(32, 'acer', 32, 'tersedia', 'baik'),
(33, 'acer', 33, 'tersedia', 'baik'),
(34, 'acer', 34, 'tersedia', 'baik'),
(35, 'acer', 35, 'tersedia', 'baik'),
(36, 'acer', 36, 'tersedia', 'baik'),
(37, 'acer', 37, 'tersedia', 'baik'),
(38, 'acer', 38, 'tersedia', 'baik'),
(39, 'acer', 39, 'tersedia', 'baik'),
(40, 'acer', 40, 'tersedia', 'baik'),
(41, 'iphone', 41, 'tersedia', 'digunakan'),
(42, 'iphone', 42, 'tersedia', 'digunakan'),
(43, 'iphone', 43, 'tersedia', 'rusak'),
(44, 'iphone', 44, 'tersedia', 'digunakan'),
(45, 'iphone', 45, 'tersedia', 'digunakan'),
(46, 'iphone', 46, 'tersedia', 'digunakan'),
(47, 'iphone', 47, 'tersedia', 'digunakan'),
(48, 'iphone', 48, 'tersedia', 'baik'),
(49, 'iphone', 49, 'tersedia', 'baik'),
(50, 'iphone', 50, 'tersedia', 'baik'),
(51, 'iphone', 51, 'tersedia', 'baik'),
(52, 'iphone', 52, 'tersedia', 'baik'),
(53, 'iphone\r\n', 53, 'tersedia', 'baik'),
(54, 'iphone', 54, 'tersedia', 'baik'),
(55, 'iphone', 55, 'tersedia', 'baik'),
(56, 'iphone', 56, 'tersedia', 'baik'),
(57, 'iphone', 57, 'tersedia', 'baik'),
(58, 'iphone', 58, 'tersedia', 'baik'),
(59, 'iphone', 59, 'tersedia', 'baik'),
(60, 'iphone', 60, 'tersedia', 'baik'),
(61, 'asus', 61, 'tersedia', 'baik'),
(62, 'asus', 62, 'tersedia', 'digunakan'),
(63, 'asus', 63, 'tersedia', 'digunakan'),
(64, 'asus', 64, 'tersedia', 'baik'),
(65, 'asus', 65, 'tersedia', 'baik'),
(66, 'asus', 66, 'tersedia', 'baik'),
(67, 'asus', 67, 'tersedia', 'baik'),
(68, 'asus', 68, 'tersedia', 'baik'),
(69, 'asus', 69, 'tersedia', 'baik'),
(70, 'asus', 70, 'tersedia', 'baik'),
(71, 'asus', 71, 'tersedia', 'baik'),
(72, 'asus', 72, 'tersedia', 'baik'),
(73, 'asus', 73, 'tersedia', 'baik'),
(74, 'asus', 74, 'tersedia', 'baik'),
(75, 'asus', 75, 'tersedia', 'baik'),
(76, 'asus', 76, 'tersedia', 'baik'),
(77, 'asus', 77, 'tersedia', 'digunakan'),
(78, 'asus', 78, 'tersedia', 'baik'),
(79, 'asus', 79, 'tersedia', 'baik'),
(80, 'asus', 80, 'tersedia', 'baik'),
(81, 'samsung', 81, 'tersedia', 'baik'),
(82, 'samsung', 82, 'tersedia', 'baik'),
(83, 'samsung', 83, 'tersedia', 'baik'),
(84, 'samsung', 84, 'tersedia', 'baik'),
(85, 'samsung', 85, 'tersedia', 'baik'),
(86, 'samsung', 86, 'tersedia', 'baik'),
(87, 'samsung', 87, 'tersedia', 'baik'),
(88, 'samsung', 88, 'tersedia', 'baik'),
(89, 'samsung', 89, 'tersedia', 'baik'),
(90, 'samsung', 90, 'tersedia', 'baik'),
(91, 'samsung', 91, 'tersedia', 'baik'),
(92, 'samsung', 92, 'tersedia', 'baik'),
(93, 'samsung', 93, 'tersedia', 'baik'),
(94, 'samsung', 94, 'tersedia', 'baik'),
(95, 'samsung', 95, 'tersedia', 'digunakan'),
(96, 'samsung', 96, 'tersedia', 'baik'),
(97, 'samsung', 97, 'tersedia', 'baik'),
(98, 'samsung', 98, 'tersedia', 'baik'),
(99, 'samsung', 99, 'tersedia', 'baik'),
(100, 'samsung', 100, 'tersedia', 'digunakan');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no` int(11) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama`, `no`, `pesan`) VALUES
(19, 'acer', 23, 'untuk percodingan'),
(20, 'lenovo', 2, 'test'),
(21, 'iphone\r\n', 45, 'nonton bkp'),
(22, 'iphone', 42, 'buat nyari anak loli'),
(23, 'iphone', 42, 'untuk membuat aplikasi'),
(24, 'iphone', 47, 'test'),
(25, 'lenovo', 5, 'test'),
(26, 'iphone', 41, 'untuk ngedit'),
(27, 'asus', 77, 'untuk keperluan coding dan gim'),
(28, 'asus', 62, 'untuk keperluan editing'),
(29, 'samsung', 95, ''),
(30, 'samsung', 100, 'test'),
(31, 'asus', 63, 'test'),
(32, 'iphone', 44, 'test'),
(33, 'acer', 24, 'test'),
(35, 'acer', 26, 'terimakasih atas peminjamannya'),
(36, 'iphone', 45, 'nonton bkp');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama`, `nis`, `no`, `merek`, `pesan`) VALUES
(9, 'Gama Husen', '12209021', '5', 'lenovo', 'test'),
(10, 'Gama Husen', '12209021', '20', 'lenovo', 'laptopnya kurang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nis` varchar(100) NOT NULL,
  `rombel` varchar(100) NOT NULL,
  `rayon` varchar(100) NOT NULL,
  `gambar` blob NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nis`, `rombel`, `rayon`, `gambar`, `email`, `password`) VALUES
(19, 'Okta Haris Sutanto', '12209331', 'PPLG X-2', 'Cicurug 5', 0x363438626363373865646534392e6a7067, 'oktaharis2008@gmail.com', '$2y$10$3OiAwpGSD7VR166sxhDdwu0p7uY1tOxEjhW6erQjaC53CzuiGfgZC'),
(21, 'Muhammad Feri Firmansyah', '12209170', 'PPLG X-2', 'Cicurug 3', 0x363438656264653338353637312e6a706567, 'ferifirmansyah@gmail.com', '$2y$10$hHrjGVfDm.SU1/GqzTXOFukJIKtn4knjWMtVEupHWlTi0sNQURo16'),
(22, 'Gama Husen', '12209021', 'PPLG X-2', 'Wikrama 1', 0x363438663862663861363134382e6a7067, 'gamahusen@gmail.com', '$2y$10$Gq0SD.2BJf/nVKtLbez5mOKfkMo1NE2yJ1V0GIFLQ8CL2GFPQJZ9W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
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
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
