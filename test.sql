-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lis 2021, 22:11
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spr_php`
--

CREATE TABLE `spr_php` (
  `rek1` varchar(30) NOT NULL,
  `rek2` varchar(30) NOT NULL,
  `radio` int(11) NOT NULL,
  `checkbox` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `spr_php`
--

INSERT INTO `spr_php` (`rek1`, `rek2`, `radio`, `checkbox`) VALUES
('rekord1', 'rekord2', 2, 0),
('rekord1', 'rekord2', 2, 1),
('rekord1', 'rekord2', 2, 1),
('rekord1', 'rekord2', 2, 1),
('', 'puste', 0, 0),
('nowe1', 'nowe2', 1, 0),
('aaa', 'ccc', 2, 1),
('aaa', 'ccc', 2, 1),
('qqqq', 'xxxx', 1, 1),
('fff', 'hhh', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
