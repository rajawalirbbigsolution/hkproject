-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 08:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `jenis_aksi` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `jam` varchar(26) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `mac_address` varchar(50) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `tgl`, `jenis_aksi`, `keterangan`, `jam`, `ip`, `mac_address`, `pengguna_id`, `member_id`, `status`) VALUES
(1, '2021-02-16', 'Login', 'Login', '14:32:44', '::1', '', 3, 0, 1),
(2, '2021-02-16', 'Login', 'Login', '14:33:45', '::1', '', 3, 0, 1),
(3, '2021-02-16', 'Logout', 'Logout', '14:34:28', '::1', '', 3, 0, 1),
(4, '2021-02-16', 'Logout', 'Logout', '14:36:28', '::1', '', 3, 0, 1),
(5, '2021-02-16', 'Etc', 'Tambah Pengguna', '14:38:38', '::1', '', 3, 0, 1),
(6, '2021-02-16', 'Logout', 'Logout', '14:38:43', '::1', '', 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `nama`, `username`, `password`, `level`, `status`) VALUES
(3, 'ari', 'ari', '4220d6c98697925901e2f61159df85f138243a84239f94e1cdb2bb1e0943eb7cb5f8edf01f39f740aa362f6bd8010b2ddf395982375b11d5b6b45fa94f7fadd7he0c/ltMVFpKl62bxlfKS5lXcBU6XKRanXGAl+uB2fI=', 1, 1),
(4, 'er', 'er', '87f88db7627605cfb46c6f6e1ce88026a838bdd1dd989ce1654a31a1c8874cbaae43ed20fb3c97817307cf04d2c8d76ee3957890e8bdb116f6af1f8031b49254Yn1KbqP66UKaCOkrxuzmotcoGGIzl+UQ5ldwioecV0w=', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'info@big.co.id'),
(2, 'system_mail', 'info@big.co.id'),
(3, 'system_title', 'BIG TEST');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `statistik_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `link_halaman` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `browser` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`statistik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `statistik_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
