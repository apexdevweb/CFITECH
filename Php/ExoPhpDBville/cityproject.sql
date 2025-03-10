-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 mars 2025 à 06:22
-- Version du serveur : 8.0.31
-- Version de PHP : 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cityproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city_country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user_city` int NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `id_user_city` (`id_user_city`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_country`, `id_user_city`) VALUES
(1, 'Bruxelles', 'Belge', 0),
(2, 'Paris', 'Française', 0),
(3, 'Berlin', 'Allemande', 0),
(4, 'Bogota', 'Colombienne', 0),
(5, 'Londre', 'Anglaise', 0),
(6, 'Tokyo', 'Japonaise', 0),
(7, 'Moscou', 'Russe', 0),
(8, 'Losangeles', 'Americaine', 0),
(9, 'Rome', 'Italienne', 0),
(10, 'Stockholm', 'Suedoise', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_mail` (`user_mail`),
  KEY `FK_user_city` (`user_city`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_mail`, `user_pass`, `date_of_birth`, `user_city`) VALUES
(7, 'Hiroux', 'Jérémy', 'j.hiroux456@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$clp0cUdmNkt3V3ZzZzM2UA$YhKYBP+1bsGcdG5Q3SX3spECluVy/QHIw0pNw2wsO6U', '1989-03-13', 'Bruxelles'),
(8, 'Delapierre', 'Jean', 'jean01@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$TUpsODJmQUZHRE83Q3lseA$OxxI73PxMsOKJJpIBIsvjnCJTKA7euqXioc98S+JByg', '1983-06-23', 'Paris'),
(9, 'Moro', 'Caroline', 'caro05@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ZGhkVlIyM25pM25XU282WQ$QhvEsMIQW+w6jRMpXnXCB2bINuXBR7bP8Sux+IpxRAc', '2006-03-09', 'Rome'),
(10, 'Vanderen', 'Cindy', 'cindy06@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$STAzUEZ4Y2FPbmJBUkEzOQ$oBMMqIIRengCNKjVDQ0d00cEp2EDa0SLbvDcHciVB3Y', '2000-03-17', 'Bruxelles');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
