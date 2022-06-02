-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220523.649d9b34ea
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2022 at 10:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(1, 'velida', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `lozinka` varchar(50) CHARACTER SET latin2 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mobitel` varchar(15) CHARACTER SET latin2 NOT NULL,
  `ime` varchar(50) CHARACTER SET latin2 NOT NULL,
  `prezime` varchar(50) CHARACTER SET latin2 NOT NULL,
  `user_type` varchar(50) CHARACTER SET latin2 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin2 NOT NULL,
  `adresa` varchar(50) CHARACTER SET latin2 NOT NULL,
  `created` datetime(6) NOT NULL,
  `modified` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `lozinka`, `email`, `mobitel`, `ime`, `prezime`, `user_type`, `status`, `adresa`, `created`, `modified`) VALUES
(1, '12345', 'vvv@live.com', 'velida', 'velida', 'aaa', 'admin', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(7, '', 'dzz@gmail.com', '4535456', 'dzana', 'zlatar', '', '1', 'Trnovaca', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(15, '', 'velidavraco121@hotmail.com', '0644114955', 'velida', 'vraco', '', '1', 'visoko', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(16, '', 'velidavraco121@hotmail.com', '0644114955', 'velida', 'vraco', '', '1', 'visoko', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(19, '', 'velidavraco121@hotmail.com', '0644114955', 'velida', 'vraco', '', '1', 'visoko', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(20, '', 'velidavraco121@hotmail.com', '0644114955', 'velida', 'vraco', '', '1', 'visoko', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `id` int(11) NOT NULL,
  `status` enum('u tijeku','zavrseno','otkazano','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime(6) NOT NULL,
  `kupac_id` int(11) NOT NULL,
  `grand_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`id`, `status`, `created`, `kupac_id`, `grand_total`) VALUES
(1, 'u tijeku', '2022-05-05 14:05:31.000000', 15, 19.5),
(2, 'u tijeku', '2022-05-05 20:57:01.000000', 16, 56),
(8, 'u tijeku', '2022-05-12 22:07:34.000000', 19, 118.2),
(9, 'u tijeku', '2022-05-13 20:51:36.000000', 20, 196.3);

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) CHARACTER SET latin2 NOT NULL,
  `opis` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cijena` float NOT NULL,
  `slika` varchar(255) NOT NULL,
  `kolicina` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cijena`, `slika`, `kolicina`) VALUES
(1, 'A-Derma Exomega Control emolijentni pjenušavi gel', 'Nježno cisti suhu kožu sklonu atopiji. Emolijentni', 59.1, 'slike/slika1.jpg', 10),
(2, 'CeraVe SA Smoothing Cleanser', '236 ml', 19.5, 'slike/koza4.jpg', 12),
(3, 'Noreva IKLEN+ Pure - C - Reverse noćna krema 50 ml', 'No?na krema - 50 ml', 90.5, 'slike/koza3.jpg', 13),
(4, 'Vichy Dercos tretman šampon za umirivanje osjetlji', 'Njegov kompleks protiv nastanka sebuma nastao je n', 37, 'slike/kosa2.jpg', 20),
(5, 'Pilfud sprej 50 mg/ml liječenje nasljednog gubitka', 'Pilfud 50 mg/ml otopina je lijek koji se primjenju', 36.5, 'slike/kosa1.jpg', 6),
(6, 'Gorsen serum za njegu kose 30 ml', 'Gorsen serum za njegu kose iz linije „Glossy“ diza', 44.9, 'slike/kosa3.jpg', 5),
(7, 'CeraVe SA Smoothing Cream 340 ml', 'Krema za izgla?ivanje suhe i grube kože\r\nRazvijena', 0, 'slike/koza4.jpg', 22),
(22, 'Krema ', 'za lice', 22, 'slike/laroche.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `stavka_narudzbe`
--

CREATE TABLE `stavka_narudzbe` (
  `id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL,
  `narudzba_id` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stavka_narudzbe`
--

INSERT INTO `stavka_narudzbe` (`id`, `proizvod_id`, `narudzba_id`, `kolicina`) VALUES
(11, 2, 8, 2),
(12, 5, 9, 1),
(13, 1, 9, 1),
(14, 3, 9, 1),
(15, 2, 9, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kupac_id` (`kupac_id`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stavka_narudzbe`
--
ALTER TABLE `stavka_narudzbe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `narudzba_id` (`narudzba_id`),
  ADD KEY `narudzba_id_2` (`narudzba_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `narudzba`
--
ALTER TABLE `narudzba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `stavka_narudzbe`
--
ALTER TABLE `stavka_narudzbe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admintable`
--
ALTER TABLE `admintable`
  ADD CONSTRAINT `admintable_ibfk_1` FOREIGN KEY (`id`) REFERENCES `korisnik` (`id`);

--
-- Constraints for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD CONSTRAINT `narudzba_ibfk_1` FOREIGN KEY (`kupac_id`) REFERENCES `korisnik` (`id`);

--
-- Constraints for table `stavka_narudzbe`
--
ALTER TABLE `stavka_narudzbe`
  ADD CONSTRAINT `stavka_narudzbe_ibfk_1` FOREIGN KEY (`narudzba_id`) REFERENCES `narudzba` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



