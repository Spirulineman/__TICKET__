-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:37 AM
-- Server version: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assistance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `numero` int(8) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `numero`, `titre`, `contenu`, `id_user`, `id_categorie`) VALUES
(1, 12345678, 'panne de voiture', 'panne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiturepanne de voiture', 1, 1),
(2, 87654321, 'vélo déraillé', 'vélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillévélo déraillé', 2, 2),
(5, 13245687, 'pneu crevé', 'pneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevé', 2, 1),
(7, 54783214, 'kilo', 'pneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevépneu crevé', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD UNIQUE KEY `numero` (`numero`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
