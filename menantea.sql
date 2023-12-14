-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2023 at 11:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menantea`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `nama` varchar(64) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Peach Tea', 'Teh jasmine dengan rasa buah persik yang dipadukan dengan lemon jelly super seger', 20000, 'menantea1.png'),
(2, 'Citrus Tea', 'Teh Jasmine Dengan Rasa Jeruk Segar Yang Ditambahkan Irisan Jeruk Sunkist &amp; Menantea Jelly Yang Bikin Nyaman Di Hati', 20000, 'menantea2.png'),
(3, 'Lychee Tea', 'Perpaduan teh jasmine dengan rasa leci yang ditambahkan buah leci utuh serta menantea jelly yang bikin happy', 20000, 'menantea3.png'),
(4, 'Caramel Milk Tea', 'Teh susu yang dipadukan dengan rasa karamel nikmat dan cocok banget kalau ditambahin cheese cloud ataupun grass jelly', 20000, 'menantea4.png'),
(5, 'Oreo Milk Tea', 'Teh susu khas Menantea dengan perpaduan cheese cloud dan taburan oreo yang renyah', 31000, 'menantea5.png'),
(6, 'Menantea Sunset', 'Perpaduan rasa dari Jeruk Kalamansi dengan ekstrak teh bunga telang yang nyegerin', 34900, 'menantea6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
