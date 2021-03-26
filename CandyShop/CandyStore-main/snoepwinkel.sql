-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 mrt 2021 om 15:28
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snoepwinkel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `snoep`
--

CREATE TABLE `snoep` (
  `id` int(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `prijs` decimal(25,2) NOT NULL,
  `gewicht` int(255) NOT NULL,
  `omschrijving` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `snoep`
--

INSERT INTO `snoep` (`id`, `product`, `prijs`, `gewicht`, `omschrijving`, `foto`) VALUES
(1, 'Haribo Kikkers', '1.30', 250, 'Kikkers behoren tot de toppers uit het Haribo assortiment <br>\r\nEen combinatie tussen schuim en fruitgom in een heerlijke smaakcombinatie\r\nHoogwaardige kwaliteit<br>\r\nShare Size - perfect om te delen met je vrienden of familie!', 'kikkers.jpg'),
(2, 'Haribo Kersen', '1.25', 250, 'Kersen zijn zeer geliefde snoepjes uit het Haribo assortiment. <br>\r\nZachte fruitgom met kersensmaak en in de vorm van een kers\r\nHoogwaardige kwaliteit <br>\r\nShare Size - perfect om te delen met je vrienden of familie!', 'kersen.jpg'),
(3, 'Haribo Bananen', '1.45', 250, 'Bananas zijn heerlijke schuimsnoepjes in bananensmaak. Een echte klassieker!<br><br>\r\n\r\nHeerlijke schuimsnoepjes met een krokante bite<br>\r\nShare size - perfect om te delen met familie en vrienden<br>\r\nGeliefd door jong en oud', 'bananen.jpg'),
(4, 'Haribo Starmix', '1.75', 250, 'Starmix is een mix tussen fruitgom en schuim snoepjes.<br><br>\r\n\r\nEen fijne mix met leuke vormpjes, zoals bijvoorbeeld hartjes en eitjes.<br>\r\nHoogwaardige kwaliteit.', 'starmix.jpg'),
(5, 'Haribo Dragibus', '1.50', 250, 'Dragibus, de vrolijke kleurrijke fruit dragees. <br><br>\r\n\r\nFruitige dragees in vrolijke kleuren.<br>\r\nZachte bite.', 'dragibus.jpg'),
(6, 'Haribo Dropmix', '1.35', 250, 'Dropmix bevat alle bekende Haribo drop in één mix.<br><br>\r\n\r\nZacht zoete drop.<br>\r\nFijne mix, veel variatie.', 'dropmix.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `transacties`
--

CREATE TABLE `transacties` (
  `id` int(11) NOT NULL,
  `product` varchar(25) NOT NULL,
  `prijs` decimal(25,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `transacties`
--

INSERT INTO `transacties` (`id`, `product`, `prijs`) VALUES
(1, 'Haribo Kikkers', '1.30'),
(2, 'Haribo Kersen', '1.25');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `snoep`
--
ALTER TABLE `snoep`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `transacties`
--
ALTER TABLE `transacties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `snoep`
--
ALTER TABLE `snoep`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `transacties`
--
ALTER TABLE `transacties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
