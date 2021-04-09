-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Abr-2021 às 13:12
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cod` int(30) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` float NOT NULL,
  `min_quantity` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `cod`, `name`, `price`, `quantity`, `min_quantity`) VALUES
(4, 789, 'banana', 30, 30, 2),
(3, 345, 'maçã', 23, 120, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_number` varchar(12) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_avatar` varchar(50) NOT NULL DEFAULT 'default.png',
  `user_token` varchar(32) DEFAULT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_number`, `user_pass`, `user_avatar`, `user_token`, `block`) VALUES
(16, 'Rian', '202151915019', '$2y$10$pTaGTf92h3c9Bj41HEycDep3AGACyuf9GgltZ7Qwab00qEliUWI8S', 'default.png', 'b2df2e668da57ccfa25b2bcb123fab68', 0),
(15, 'Ruan', '202180436481', '$2y$10$m9.VGxWcr9.gLdVbUoDVz.x/WAIKxgDGtcmVaT/fdOvqcWaVsHlQy', 'default.png', 'acfc53e29207e2125a761303daad994a', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
