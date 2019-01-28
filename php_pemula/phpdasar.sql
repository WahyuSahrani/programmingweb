-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2018 at 03:45 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(9) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(15, '175610010', 'Inggrit Siswati Putri', 'inggrit@gmail.com', 'Sistem Informasi', '5a818ce21f7b9.gif'),
(16, '175610008', 'Wahyu Sahrani, S.Kom', 'wahyusahrani@gmail.com', 'Sistem Informasi', '5a818d056dc43.jpg'),
(17, '175610009', 'Kokong', 'wahyusahrani@gmail.com', 'Teknik Informatika', '5a818e685297f.png'),
(18, '175610011', 'Ejen Ali', 'ali@gmail.com', 'Manajemen Informatik', '5a818ef6d059d.jpg'),
(19, '175610012', 'Layli', 'layli@gmail.com', 'Sistem Informasi', '5a83f3503f4a6.png'),
(20, '175610013', 'Umam', 'umam@gmail.com', 'Sistem Informasi', '5a83f39c26e0a.png'),
(21, '175610011', 'admin', 'inggrit@gmail.com', 'Sistem Informasi', '5a83f33f458f8.png'),
(22, '175610013', 'Istiqamah', 'istiqamah@gmail.com', 'Teknik Mesin', '5a84178f8637c.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'wahyu', '$2y$10$gcQs9LacwGD44DPmPidaNO1mSnoqVGmu8lKi0.Qv.2Mtg7LNnJOlC'),
(2, 'dulu', '$2y$10$wq16TyGT1LzjJ6zWmB7wUeBtWSx9J8xosYOyv8Vlwm9I/oZwZZCe6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
