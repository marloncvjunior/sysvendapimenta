-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.16 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para webpepper
DROP DATABASE IF EXISTS `webpepper`;
CREATE DATABASE IF NOT EXISTS `webpepper` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `webpepper`;


-- Copiando estrutura para tabela webpepper.carrinho
DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cliente` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FKCLICAR` (`cliente`),
  CONSTRAINT `FKCLICAR` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.carrinho: ~11 rows (aproximadamente)
DELETE FROM `carrinho`;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
INSERT INTO `carrinho` (`codigo`, `cliente`) VALUES
	(82, 1),
	(83, 1),
	(93, 1),
	(94, 1),
	(95, 1),
	(96, 1),
	(97, 1),
	(98, 1),
	(99, 1),
	(100, 1),
	(101, 1);
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.cliente: ~35 rows (aproximadamente)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`codigo`, `nome`, `email`, `senha`) VALUES
	(1, 'Visitante', '', ''),
	(2, 'lauro', 'lauro.ribeiro@gmail.com', '1810'),
	(3, 'wilton', 'wilton.tecti@gmail.com', '1810'),
	(4, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', '5465'),
	(5, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', '88'),
	(6, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', '88'),
	(7, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', '44'),
	(8, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', '88'),
	(9, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(10, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(11, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(12, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(13, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(14, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(15, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(16, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(17, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(18, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(19, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(20, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(21, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(22, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(23, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(24, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(25, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(26, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(27, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(28, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(29, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(30, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(31, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(32, 'Wilton Ribeiro Silva', 'ti.ipora@ifgoiano.edu.br', 'asdas'),
	(33, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', 'asd'),
	(34, 'Wilton Ribeiro Silva', 'wilton.tecti@gmail.com', 'asd'),
	(35, 'Wilton Ribeiro Silva', 'aasda@gmail.com', 'asd');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.itemcarrinho
DROP TABLE IF EXISTS `itemcarrinho`;
CREATE TABLE IF NOT EXISTS `itemcarrinho` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `carrinho` bigint(20) DEFAULT NULL,
  `quantidade` bigint(20) DEFAULT NULL,
  `produto` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FKItemCar` (`carrinho`),
  CONSTRAINT `FKItemCar` FOREIGN KEY (`carrinho`) REFERENCES `carrinho` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.itemcarrinho: ~22 rows (aproximadamente)
DELETE FROM `itemcarrinho`;
/*!40000 ALTER TABLE `itemcarrinho` DISABLE KEYS */;
INSERT INTO `itemcarrinho` (`codigo`, `carrinho`, `quantidade`, `produto`) VALUES
	(39, 83, 2, 1),
	(40, 83, 1, 2),
	(41, 83, 3, 3),
	(42, 83, 5, 1),
	(43, 83, 3, 1),
	(44, 83, 2, 1),
	(45, 83, 1, 1),
	(46, 83, 4, 8),
	(47, 83, 2, 2),
	(48, 83, 3, 5),
	(49, 93, 2, 2),
	(50, 93, 2, 1),
	(51, 93, 10, 1),
	(52, 94, 5, 9),
	(53, 93, 10, 4),
	(54, 95, 2, 2),
	(55, 95, 2, 6),
	(56, 96, 1, 2),
	(57, 96, 2, 1),
	(58, 96, 2, 2),
	(59, 96, 3, 3),
	(60, 97, 2, 2);
/*!40000 ALTER TABLE `itemcarrinho` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `estoque` bigint(20) DEFAULT NULL,
  `preco` float(10,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.produto: ~15 rows (aproximadamente)
DELETE FROM `produto`;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`codigo`, `descricao`, `estoque`, `preco`, `imagem`) VALUES
	(1, 'Beterraba', 5, 2.50, 'beterraba.jpg'),
	(2, 'Cenoura', 5, 2.96, 'cenoura.jpg'),
	(3, 'Pimenta', 5, 3.00, 'pimenta.jpg'),
	(4, 'Coisa Verde', 25, 2.65, 'file_87_123_1.jpg'),
	(5, 'Coisa Verde 2', 5, 2.65, 'file_89_10_1.jpg'),
	(6, 'Coisa Verde 3 ', 5, 2.65, 'file_89_11_1.jpg'),
	(7, 'Coisa Verde 4', 5, 2.96, 'file_90_18_1.jpg'),
	(8, 'Coisa Verde 5 ', 5, 2.98, 'file_90_29_1.jpg'),
	(9, 'Coisa Verde 7', 5, 2.98, 'file_90_30_1.jpg'),
	(10, 'Coisa Verde 6', 5, 2.94, 'file_90_34_1.jpg'),
	(11, 'Coisa Verde 8 ', 5, 2.94, 'file_90_46_1.jpg'),
	(12, 'Coisa Verde 9 ', 5, 2.69, 'prod_1_12589_1.jpg'),
	(13, 'Coisa Verde 10', 5, 2.54, 'prod_1_12814_1.jpg'),
	(14, 'Coisa Verde 11', 5, 2.65, 'prod_1_12838_1.jpg'),
	(15, 'Coisa Verde 12', 5, 9.65, 'prod_1_5459_1.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
