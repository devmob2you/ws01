-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 12-Nov-2013 às 14:25
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `barrobello`
--
CREATE DATABASE IF NOT EXISTS `barrobello` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `barrobello`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabalbuns`
--

CREATE TABLE IF NOT EXISTS `tabalbuns` (
  `idAlbuns` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(4) DEFAULT NULL,
  `imgCapa` varchar(150) DEFAULT NULL,
  `nomeAlbum` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`idAlbuns`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tabalbuns`
--

INSERT INTO `tabalbuns` (`idAlbuns`, `ano`, `imgCapa`, `nomeAlbum`) VALUES
(1, '2010', 'imagens/albuns/capa/imgCapa.png', 'FEICON');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabimagensalbum`
--

CREATE TABLE IF NOT EXISTS `tabimagensalbum` (
  `idImgAlbum` int(11) NOT NULL AUTO_INCREMENT,
  `fkIdAlbum` int(11) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idImgAlbum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tabimagensalbum`
--

INSERT INTO `tabimagensalbum` (`idImgAlbum`, `fkIdAlbum`, `imagem`, `descricao`) VALUES
(1, 1, 'imagens/albuns/capa/imgCapa.png', 'teste de imagem 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'programador', '0265dfe16c05accafc8dc6403a05f6c6'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
