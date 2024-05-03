-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 12:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotaract`
--

-- --------------------------------------------------------

--
-- Table structure for table `dons`
--

CREATE TABLE `dons` (
  `id` int(5) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nomdufamille` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numtel` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `moyen` int(10) NOT NULL,
  `numcarte` int(30) NOT NULL,
  `montant` int(30) NOT NULL,
  `remarque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inscrit`
--

CREATE TABLE `inscrit` (
  `id` int(10) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `codep` int(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

CREATE TABLE `reclamation` (
  `idd` int(5) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reclamation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`idd`, `nomprenom`, `email`, `reclamation`) VALUES
(1, 'Salma Makina', 'salma.makinaa2557@gmail.com', 'ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dons`
--
ALTER TABLE `dons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscrit`
--
ALTER TABLE `inscrit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`idd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dons`
--
ALTER TABLE `dons`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inscrit`
--
ALTER TABLE `inscrit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `idd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
