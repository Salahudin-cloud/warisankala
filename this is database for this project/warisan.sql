-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 06:25 PM
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
-- Database: `warisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `budaya`
--

CREATE TABLE `budaya` (
  `id_budaya` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `gubernur` varchar(35) NOT NULL,
  `jumlah_penduduk` varchar(255) NOT NULL,
  `detail_provinsi` mediumtext NOT NULL,
  `pendapatan_perkapita` varchar(255) NOT NULL,
  `judul_budaya` varchar(255) NOT NULL,
  `detail_budaya` mediumtext NOT NULL,
  `foto_budaya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budaya`
--

INSERT INTO `budaya` (`id_budaya`, `provinsi`, `gubernur`, `jumlah_penduduk`, `detail_provinsi`, `pendapatan_perkapita`, `judul_budaya`, `detail_budaya`, `foto_budaya`) VALUES
(1, 'Sulawesi Barat (Mamuju)', 'Prof.Zudan Arif Fakrulloh', ' 1 458 606', 'Sulawesi Barat (sulbar) adalah sebuah provinsi di Indonesia yang terletak di sebelah barat pulau Sulawesi, Indonesia. Daerah ini dulunya merupakan bagian dari Provinsi Sulawesi Selatan hingga  provinsi ini dimekarkan pada tahun 2004. Ibu kota provinsi Sulawesi Barat adalah Kabupaten Mamuju. Terbentuknya Provinsi Sulawesi Barat merupakan hasil pemekaran Provinsi Sulawesi Selatan berdasarkan Undang-Undang Nomor 26 Tahun 2004 yang disetujui dalam rapat paripurna antara Pemerintah dan Majelis Nasional Indonesia serta disetujui oleh Menteri Dalam Negeri. Perkara atas nama Presiden Republik Indonesia  16 Oktober 2004. Sulawesi Barat mempunyai luas 16.937,16 kilometer persegi dan lautan seluas 20.342 kilometer persegi dan garis pantai sepanjang 677 kilometer. Jumlah kecamatan di Sulawesi Barat sebanyak 69 dengan jumlah desa/kelurahan sebanyak 649 desa.', '9 358,00', 'Mattamu Buah', 'Mattamu Buah merupakan acara adat yang diadakan dua hingga tiga kali dalam setahun oleh masyarakat Desa Batetangnga di Kabupaten Polewali Mandar. Tradisi ini dilakukan untuk menyambut musim buah-buahan dan menumbuhkan rasa syukur atas anugerah Tuhan.', 'mattamu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `foto_profile`) VALUES
(1, 'salahudin', '202cb962ac59075b964b07152d234b70', 'udin.png'),
(5, 'admin', '202cb962ac59075b964b07152d234b70', 'admin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budaya`
--
ALTER TABLE `budaya`
  ADD PRIMARY KEY (`id_budaya`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id_budaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
