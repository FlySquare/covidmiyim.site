-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2020 at 09:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `hastalar`
--

CREATE TABLE `hastalar` (
  `hasta_id` int(11) NOT NULL,
  `hasta_adi` text NOT NULL,
  `hasta_sehir` text NOT NULL,
  `hasta_mail` text DEFAULT NULL,
  `hasta_yas` text NOT NULL,
  `hasta_calisma` text NOT NULL,
  `hasta_sosyalstatu` text NOT NULL,
  `eksibir_basagrisi` text NOT NULL,
  `eksibir_sirtagrisi` text NOT NULL,
  `eksibir_oksuruk` text NOT NULL,
  `eksibir_ates` text NOT NULL,
  `eksibir_karinagrisi` text NOT NULL,
  `eksibir_gozagrisi` text NOT NULL,
  `eksibir_gogusagrisi` text NOT NULL,
  `eksibir_belagrisi` text NOT NULL,
  `eksibir_tatalmakaybi` text NOT NULL,
  `sifir_basagrisi` text NOT NULL,
  `sifir_sirtagrisi` text NOT NULL,
  `sifir_oksuruk` text NOT NULL,
  `sifir_ates` text NOT NULL,
  `sifir_gogusagrisi` text NOT NULL,
  `sifir_karinagrisi` text NOT NULL,
  `sifir_gozagrisi` text NOT NULL,
  `sifir_belagrisi` text NOT NULL,
  `sifir_tatalmakaybi` text NOT NULL,
  `bir_basagrisi` text NOT NULL,
  `bir_sirtagrisi` text NOT NULL,
  `bir_oksuruk` text NOT NULL,
  `bir_ates` text NOT NULL,
  `bir_gogusagrisi` text NOT NULL,
  `bir_karinagrisi` text NOT NULL,
  `bir_gozagrisi` text NOT NULL,
  `bir_belagrisi` text NOT NULL,
  `bir_tatalmakaybi` text NOT NULL,
  `iki_basagrisi` text NOT NULL,
  `iki_sirtagrisi` text NOT NULL,
  `iki_oksuruk` text NOT NULL,
  `iki_ates` text NOT NULL,
  `iki_gogusagrisi` text NOT NULL,
  `iki_karinagrisi` text NOT NULL,
  `iki_gozagrisi` text NOT NULL,
  `iki_belagrisi` text NOT NULL,
  `iki_tatalmakaybi` text NOT NULL,
  `uc_basagrisi` text NOT NULL,
  `uc_sirtagrisi` text NOT NULL,
  `uc_oksuruk` text NOT NULL,
  `uc_ates` text NOT NULL,
  `uc_gogusagrisi` text NOT NULL,
  `uc_karinagrisi` text NOT NULL,
  `uc_gozagrisi` text NOT NULL,
  `uc_belagrisi` text NOT NULL,
  `uc_tatalmakaybi` text NOT NULL,
  `dort_basagrisi` text NOT NULL,
  `dort_sirtagrisi` text NOT NULL,
  `dort_oksuruk` text NOT NULL,
  `dort_ates` text NOT NULL,
  `dort_gogusagrisi` text NOT NULL,
  `dort_karinagrisi` text NOT NULL,
  `dort_gozagrisi` text NOT NULL,
  `dort_belagrisi` text NOT NULL,
  `dort_tatalmakaybi` text NOT NULL,
  `bes_basagrisi` text NOT NULL,
  `bes_sirtagrisi` text NOT NULL,
  `bes_oksuruk` text NOT NULL,
  `bes_ates` text NOT NULL,
  `bes_gogusagrisi` text NOT NULL,
  `bes_karinagrisi` text NOT NULL,
  `bes_gozagrisi` text NOT NULL,
  `bes_belagrisi` text NOT NULL,
  `bes_tatalmakaybi` text NOT NULL,
  `alti_basagrisi` text NOT NULL,
  `alti_sirtagrisi` text NOT NULL,
  `alti_oksuruk` text NOT NULL,
  `alti_ates` text NOT NULL,
  `alti_gogusagrisi` text NOT NULL,
  `alti_karinagrisi` text NOT NULL,
  `alti_gozagrisi` text NOT NULL,
  `alti_belagrisi` text NOT NULL,
  `alti_tatalmakaybi` text NOT NULL,
  `yedi_basagrisi` text NOT NULL,
  `yedi_sirtagrisi` text NOT NULL,
  `yedi_oksuruk` text NOT NULL,
  `yedi_ates` text NOT NULL,
  `yedi_gogusagrisi` text NOT NULL,
  `yedi_karinagrisi` text NOT NULL,
  `yedi_gozagrisi` text NOT NULL,
  `yedi_belagrisi` text NOT NULL,
  `yedi_tatalmakaybi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hastalar`
--

INSERT INTO `hastalar` (`hasta_id`, `hasta_adi`, `hasta_sehir`, `hasta_mail`, `hasta_yas`, `hasta_calisma`, `hasta_sosyalstatu`, `eksibir_basagrisi`, `eksibir_sirtagrisi`, `eksibir_oksuruk`, `eksibir_ates`, `eksibir_karinagrisi`, `eksibir_gozagrisi`, `eksibir_gogusagrisi`, `eksibir_belagrisi`, `eksibir_tatalmakaybi`, `sifir_basagrisi`, `sifir_sirtagrisi`, `sifir_oksuruk`, `sifir_ates`, `sifir_gogusagrisi`, `sifir_karinagrisi`, `sifir_gozagrisi`, `sifir_belagrisi`, `sifir_tatalmakaybi`, `bir_basagrisi`, `bir_sirtagrisi`, `bir_oksuruk`, `bir_ates`, `bir_gogusagrisi`, `bir_karinagrisi`, `bir_gozagrisi`, `bir_belagrisi`, `bir_tatalmakaybi`, `iki_basagrisi`, `iki_sirtagrisi`, `iki_oksuruk`, `iki_ates`, `iki_gogusagrisi`, `iki_karinagrisi`, `iki_gozagrisi`, `iki_belagrisi`, `iki_tatalmakaybi`, `uc_basagrisi`, `uc_sirtagrisi`, `uc_oksuruk`, `uc_ates`, `uc_gogusagrisi`, `uc_karinagrisi`, `uc_gozagrisi`, `uc_belagrisi`, `uc_tatalmakaybi`, `dort_basagrisi`, `dort_sirtagrisi`, `dort_oksuruk`, `dort_ates`, `dort_gogusagrisi`, `dort_karinagrisi`, `dort_gozagrisi`, `dort_belagrisi`, `dort_tatalmakaybi`, `bes_basagrisi`, `bes_sirtagrisi`, `bes_oksuruk`, `bes_ates`, `bes_gogusagrisi`, `bes_karinagrisi`, `bes_gozagrisi`, `bes_belagrisi`, `bes_tatalmakaybi`, `alti_basagrisi`, `alti_sirtagrisi`, `alti_oksuruk`, `alti_ates`, `alti_gogusagrisi`, `alti_karinagrisi`, `alti_gozagrisi`, `alti_belagrisi`, `alti_tatalmakaybi`, `yedi_basagrisi`, `yedi_sirtagrisi`, `yedi_oksuruk`, `yedi_ates`, `yedi_gogusagrisi`, `yedi_karinagrisi`, `yedi_gozagrisi`, `yedi_belagrisi`, `yedi_tatalmakaybi`) VALUES
(1, 'Umut Can Arda', '', '', '12', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'Göksel', '', 'umutkonurinso@gmail.com', '55', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'Umut Can Arda', '', '', '55', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'Umut Can Arda', '', '', '55', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'asdasd', '41', 'asdas@gmail.com', '55', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'Umut Can Arda', '77', 'umutkonurinso@gmail.com', '19', '0', '2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hastalar`
--
ALTER TABLE `hastalar`
  ADD PRIMARY KEY (`hasta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hastalar`
--
ALTER TABLE `hastalar`
  MODIFY `hasta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
