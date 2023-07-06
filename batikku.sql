-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 11:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batikku`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `gender`, `kategori`, `harga`, `deskripsi`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Batik Citra Tradisi', 'Cowo', 'Baju', 239000, 'Baju batik citra tradisi termasuk kedalam pengembangan dan penerapan seni batik yang berlandaskan pada warisan tradisi budaya dan nilai-nilai lokal. Dalam batik citra tradisi mengutamakan penggunaan pola dan motif yang mewakili ciri khas budaya setempat, maka dapat dikatakan bahwa batik citra tradisi menjaga keaslian dalam motif dan cara pembuatan batik yang diwariskan dari generasi turunan.', 'CitraTradisi_1.jpg', 'CitraTradisi_2.jpg', 'CitraTradisi_3.jpg'),
(2, 'Batik Harmoni Budaya ', 'Cewe', 'Baju', 200000, 'Baju batik pada harmoni budaya ini termasuk kedalam batik yang memiliki nilai keharmonisan yang melibatkan proses akulturasi budaya dan agama yang berada di Indonesia. Hal tersebut menjadikan hasil corak pada batik ini memiliki nilai arti yang cukup bermakna', 'HarmoniBudaya_1.jpg', 'HarmoniBudaya_2.jpg', 'HarmoniBudaya_3.jpg'),
(3, 'Batik Harmoni Warna', 'Cowo', 'Baju', 229000, 'Pengertian batik harmoni warna adalah konsep penggunaan warna yang seimbang dan serasi dalam desain batik. Harmoni warna dalam batik melibatkan pemilihan kombinasi warna yang saling melengkapi dan menciptakan keselarasan visual. Dengan memahami konsep harmoni warna dalam batik, pengrajin dan desainer batik dapat menciptakan karya-karya yang indah, bermakna, dan menarik bagi para penggemar batik dan pecinta seni.', 'HarmoniWarna_1.jpg', 'HarmoniWarna_2.jpg', 'HarmoniWarna_3.jpg'),
(4, 'baju firaun', 'Cewe', 'Baju Dress', 200000, 'Batik Lentera Nusantara merupakan motif batik yang dapat menjadikan bukti keanekaragaman dan kerukunan karena memiliki arti tersendiri. ', 'LenteraNusantara_1.jpg', 'LenteraNusantara_2.jpg', 'LenteraNusantara_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passworduser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `phonenumber`, `email`, `passworduser`) VALUES
(1, 'Syaifun Nadhif Maulana', '088228659668', 'syaifunnadhif@gmail.com', 'czvzv'),
(2, 'Nadhif Maulana', '088228659668', 'syaifunnadhif@gmail.com', '1222344'),
(3, 'dsfadg', 'dsgag', 'syaifunnadhif@gmail.com', '21af6e183eb56e269da502223914b72a'),
(4, 'Syaifun Nadhif Maulana', '088228659668', 'syaifunnadhif23@gmail.com', '615a61167fbf11319ac864d81cbdc01f'),
(5, 'Syaifun Nadhif Maulana', '088228659668', 'syaifunnadhif25@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Syaifun Nadhif Maulana', '088228659668', 'syaifunnadhif12@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Syaifun Nadhif Maulana', '088228659668', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
