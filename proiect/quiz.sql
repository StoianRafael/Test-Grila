-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 27, 2020 la 01:17 PM
-- Versiune server: 10.4.8-MariaDB
-- Versiune PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `variants1` varchar(55) NOT NULL,
  `variants2` varchar(55) NOT NULL,
  `variants3` varchar(55) NOT NULL,
  `variants4` varchar(55) NOT NULL,
  `answer` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `question`
--

INSERT INTO `question` (`id`, `question`, `variants1`, `variants2`, `variants3`, `variants4`, `answer`) VALUES
(1, 'Which one is not an object oriented programing language?', 'Java', 'C#', 'C++', 'C', 'C'),
(2, 'Which language is used for styling web pages?', 'HTML', 'JQuery', 'CSS', 'XML', 'CSS'),
(3, 'There are ______ main components of object oriented programming.', '1', '6', '2', '4', '4'),
(11, 'Which language is used for web apps?', 'PHP', 'Python', 'Javascript', 'ALL', 'ALL');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `administrator` int(2) NOT NULL DEFAULT 0,
  `score` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `administrator`, `score`) VALUES
(1, 'administrator', '$2y$10$xYkeagyIpdkhY1i3MTleVuG1Njs.OII/CxiHO7x7WQDLea57DjYby', 1, '1'),
(4, 'rafael', '$2y$10$IjJF/Q5TgwRkN59l/riNW.qHEfZvdJfbMTdEMzc/KXgFHegO8s4PK', 0, '2');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
