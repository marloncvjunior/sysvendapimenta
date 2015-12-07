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
CREATE DATABASE IF NOT EXISTS `webpepper` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `webpepper`;


-- Copiando estrutura para tabela webpepper.carrinho
CREATE TABLE IF NOT EXISTS `carrinho` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cliente` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FKCLICAR` (`cliente`),
  CONSTRAINT `FKCLICAR` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.carrinho: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
REPLACE INTO `carrinho` (`codigo`, `cliente`) VALUES
	(107, 1),
	(108, 1),
	(109, 1),
	(110, 1),
	(111, 1),
	(113, 1),
	(114, 1),
	(116, 1),
	(117, 1),
	(115, 3),
	(112, 41);
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `codcadnac` bigint(20) DEFAULT NULL,
  `codcadest` bigint(20) DEFAULT NULL,
  `endereco` longtext,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.cliente: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`codigo`, `nome`, `email`, `senha`, `codcadnac`, `codcadest`, `endereco`) VALUES
	(1, 'Visitante', '', '', NULL, NULL, NULL),
	(2, 'lauro', 'lauro.ribeiro@gmail.com', '1810', NULL, NULL, NULL),
	(3, 'wilton', 'wilton.tecti@gmail.com', '1810', 4802833113, 1212456, 'Relandia'),
	(38, 'WIlton', 'wisslton@gmail.com', 'asdasd', NULL, NULL, NULL),
	(39, 'WIlton', 'wiltossn@gmail.com', 'asd', NULL, NULL, NULL),
	(40, 'WIlton', 'wilasdasdton@gmail.com', 'aaa', NULL, NULL, NULL),
	(41, 'WIlton', 'wiltosssssn@gmail.com', '654', NULL, NULL, NULL);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.itemcarrinho
CREATE TABLE IF NOT EXISTS `itemcarrinho` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `carrinho` bigint(20) DEFAULT NULL,
  `quantidade` bigint(20) DEFAULT NULL,
  `produto` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FKItemCar` (`carrinho`),
  CONSTRAINT `FKItemCar` FOREIGN KEY (`carrinho`) REFERENCES `carrinho` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.itemcarrinho: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `itemcarrinho` DISABLE KEYS */;
REPLACE INTO `itemcarrinho` (`codigo`, `carrinho`, `quantidade`, `produto`) VALUES
	(63, 112, 1, 1),
	(64, 113, 2, 2),
	(65, 114, 2, 2),
	(66, 115, 1, 1),
	(67, 115, 3, 2),
	(68, 115, 2, 3),
	(69, 115, 4, 5),
	(70, 116, 2, 2),
	(71, 116, 1, 1),
	(72, 116, 3, 3),
	(73, 117, 2, 2),
	(74, 117, 2, 2),
	(75, 117, 1, 3),
	(76, 117, 5, 5),
	(77, 117, 8, 4),
	(78, 117, 55, 11);
/*!40000 ALTER TABLE `itemcarrinho` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.itemvenda
CREATE TABLE IF NOT EXISTS `itemvenda` (
  `codigo` bigint(20) DEFAULT NULL,
  `venda` bigint(20) DEFAULT NULL,
  `quantidade` bigint(20) DEFAULT NULL,
  `produto` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.itemvenda: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `itemvenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemvenda` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.produto
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
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
REPLACE INTO `produto` (`codigo`, `descricao`, `estoque`, `preco`, `imagem`) VALUES
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


-- Copiando estrutura para tabela webpepper.venda
CREATE TABLE IF NOT EXISTS `venda` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cliente` bigint(20) DEFAULT NULL,
  `codcadnac` bigint(20) DEFAULT NULL,
  `codcadest` bigint(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `carrinho` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.venda: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
REPLACE INTO `venda` (`codigo`, `cliente`, `codcadnac`, `codcadest`, `endereco`, `carrinho`) VALUES
	(1, NULL, 4802833113, 1212456, '0', 117),
	(2, 3, 4802833113, 1212456, '0', 117),
	(3, 3, 4802833113, 1212456, '0', 117),
	(4, 3, 4802833113, 1212456, 'Relandia', 117),
	(5, 3, 4802833113, 1212456, 'Relandia', 117);
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
