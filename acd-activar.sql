-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Set-2023 às 00:28
-- Versão do servidor: 8.0.30
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acd-activar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(40, 'Luiza', 'luizamaciel@gmail.com', '$2y$10$90fN7w0S.zPA4iyV0TeqE.bvG5DMpxhINv9Am68OJO4Dc72odctsi'),
(41, 'duda', 'duda@gmail.com', '$2y$10$gl5HN10VckIVnJqdyRvS7es2xZ04Tt63pff2vPM08BwqRri/3yav2'),
(42, 'lu', 'lu@gmail.com', '14'),
(43, 'elano', 'elano@gmail.com', '$2y$10$jmq1pLCaCazUddGz0srRCeBhN51XDDwoLrx4oV7dbr94t3hREx.5G'),
(44, 'duda', 'duda@gmail.com', '$2y$10$XggQJY2pSsEhEVtE3GWBaO3RX8VixrywRDvPoApt5LLV2/IMF9vFK'),
(45, 'miguel', 'miguel@gmail.com', '$2y$10$mTo.YtEaSySIYpY8K/CKZes7uumNuLgsJAP6jG23yT3eDN7WTSTKu'),
(46, 'rita', 'rita@gmail.com', '$2y$10$YE3s1v54Y8UO8u8HkP9.PeMOsW66SnwAZx0Fq2juYimfOmZnXcnI6'),
(47, 'matheus', 'matheus@gmail.com', '$2y$10$SFTUHUPyZxSj7leIJCZhkeVNnWVxHIbdL1wAQoOGl4WFc1RROjnTq'),
(48, 'marcio', 'marcio@gmail.com', '$2y$10$ZpQHb3CdI7zb/H1Mp9zf1uCaXThl5dGu9Lmn/.L0mEu0agwUTy0eO'),
(49, 'lara', 'lara@gmail.com', '$2y$10$k4vVtjdZ35lR4JwBKgyibO/AjE8C83cjSxYffs0Cocr.aatgNAoQe'),
(50, 'belli', 'belli@gmail.com', '$2y$10$dcnK9trob.AatwE1jY1gj.PO6znj0Vj1hjR.pLbyM0.MQLjFusAKK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Estrutura da tabela `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `street` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `complement` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_addresses_users_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `street`, `number`, `complement`) VALUES
(1, 41, 'rua aaa', '2542', 'centro'),
(2, 42, 'vsvsvvsf', '23', 'gsdgs'),
(3, 50, 'dheyhedh', '45', 'hdhdh'),
(4, 49, 'fgjfgjfjf', '67', 'hdhd'),
(5, 47, 'bxgbxcbxcf', '567', 'dgdgd'),
(6, 43, 'szgdsgsg', '67564', 'gdfgdggd'),
(7, 46, 'bdfhdfh', '656', 'hdfdf'),
(8, 48, 'sgsssg', '5646', 'gssgs'),
(9, 44, 'hkbhkb', '908', 'jlnjn'),
(10, 40, 'klnklnklnk', '4554', 'jkbjkbn');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `fk_addresses_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;
