-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Lis 2017, 08:18
-- Wersja serwera: 10.1.24-MariaDB
-- Wersja PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ods_db`
--
CREATE DATABASE IF NOT EXISTS `ods_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ods_db`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sheet1`
--

CREATE TABLE `sheet1` (
  `Województwo` varchar(12) NOT NULL,
  `Miasto` varchar(19) NOT NULL,
  `Powiat` varchar(33) NOT NULL,
  `Branża` varchar(163) NOT NULL,
  `Nawa firmy` varchar(159) NOT NULL,
  `Forma prawna` varchar(39) NOT NULL,
  `Ulica` varchar(41) NOT NULL,
  `Kod pocztowy` varchar(6) NOT NULL,
  `Telefon stacjonarny` varchar(20) NOT NULL,
  `Telefon kom` varchar(15) NOT NULL,
  `Fax` varchar(18) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Zatrudnienie` int(4) NOT NULL,
  `NIP` varchar(13) NOT NULL,
  `REGON` int(9) NOT NULL,
  `PKD` varchar(513) NOT NULL,
  `Rozpoczęcie_działalności` int(4) NOT NULL,
  `Imię Osoby zarządzającej` varchar(25) NOT NULL,
  `Nazwisko Osoby zarządzającej` varchar(15) NOT NULL,
  `Stanowisko Osoby zarządzającej` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
