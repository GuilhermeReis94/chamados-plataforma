-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.10-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para pecas
CREATE DATABASE IF NOT EXISTS `pecas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pecas`;

CREATE TABLE IF NOT EXISTS `peca` (
  `codigo` VARCHAR(20) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `unit` VARCHAR(50) NOT NULL,
  `setor` VARCHAR(50) NOT NULL,
  `combo` VARCHAR(50) NOT NULL,
  `situacao` varchar(10) DEFAULT 'PENDENTE' NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=LATIN1;

CREATE TABLE IF NOT EXISTS `adm` (
  `codigo` VARCHAR(20) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `senha` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=LATIN1;

INSERT INTO adm (codigo, nome, senha)
VALUES (1, 'guilherme.reis', 'guilherme.admin'),
       (2, 'douglas.farias', 'sairaf');

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
