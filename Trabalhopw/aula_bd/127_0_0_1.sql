-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Set-2021 às 23:52
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuarios`
--
CREATE DATABASE IF NOT EXISTS `usuarios` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `usuarios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoCivil` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `esportes` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`codigo`, `nome`, `estadoCivil`, `esportes`, `email`, `senha`) VALUES
(1, '$nome', '', '', '$email', '$senha'),
(2, 'Manuela', '', '', 'manu@gmail.com', 'd553d148479a268914cecb77b2b88e6a'),
(3, 'Erica', '', '', 'erica@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(4, 'Renata', '', '', 'renata@gmail.com', 'd553d148479a268914cecb77b2b88e6a'),
(5, 'Maria', 'solteiro', '', 'maria@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(6, 'JOAO GONCALVES DE LIMA', 'solteiro', 'Array', '', 'dccd96c256bc7dd39bae41a405f25e43'),
(7, 'JOAO GONCALVES DE LIMA', 'solteiro', 'Array', 'joao', 'dccd96c256bc7dd39bae41a405f25e43'),
(8, 'JOAO GONCALVES DE LIMA', 'casado', 'fut-volei', 'joao', 'dccd96c256bc7dd39bae41a405f25e43'),
(9, 'JOAO GONCALVES DE LIMA', 'solteiro', 'basquete-fut-volei', 'joao', 'dccd96c256bc7dd39bae41a405f25e43'),
(10, 'JOAO GONCALVES LIMA', 'casado', 'basquete fut futAm volei', 'joao', 'dccd96c256bc7dd39bae41a405f25e43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
