-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2016 às 11:51
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banks_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banks`
--

CREATE TABLE `banks` (
  `id_bank` int(20) NOT NULL,
  `name_bank` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone_bank` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agency_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `check_digit_agency` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `check_digit_account` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `banks`
--

INSERT INTO `banks` (`id_bank`, `name_bank`, `phone_bank`, `agency_number`, `check_digit_agency`, `account_number`, `check_digit_account`) VALUES
(34, 'Banrisul     ', '(51) 3626-3222', ' 234 ', '2', ' 23423 ', '5'),
(37, 'Sicoob         ', '(51) 3626-2099', ' 3453 ', '5', '23454 ', '4'),
(48, 'Banco do Brasil ', '(41) 2312-3213', '0578  ', '5  ', '123454  ', ' 8 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id_bank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id_bank` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
