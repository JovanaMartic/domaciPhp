-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 08:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija`
(
  `id` int
(11) NOT NULL,
  `naziv` varchar
(50) NOT NULL,
  `cena` int
(11) NOT NULL,
  `zaposleni` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`
id`,
`naziv
`, `cena`, `zaposleni`) VALUES
(1, 'sportska masaza', 3000, 3),
(2, 'anticelulit masaza', 1800, 4),
(3, 'relax masaza', 2000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zaposleni`
--

CREATE TABLE `zaposleni`
(
  `id` int
(11) NOT NULL,
  `ime` varchar
(50) NOT NULL,
  `sifra` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zaposleni`
--

INSERT INTO `zaposleni` (`
id`,
`ime
`, `sifra`) VALUES
(1, 'Jovana', 'jovana'),
(2, 'Nikola', 'nikola'),
(3, 'Marta', 'Marta'),
(4, 'Petar', 'petar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
ADD PRIMARY KEY
(`id`),
ADD KEY `zaposleni`
(`zaposleni`);

--
-- Indexes for table `zaposleni`
--
ALTER TABLE `zaposleni`
ADD PRIMARY KEY
(`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategorija`
--
ALTER TABLE `kategorija`
ADD CONSTRAINT `kategorija_ibfk_1` FOREIGN KEY
(`zaposleni`) REFERENCES `zaposleni`
(`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
