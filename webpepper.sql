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
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.carrinho: ~38 rows (aproximadamente)
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
	(118, 1),
	(122, 1),
	(123, 1),
	(124, 1),
	(125, 1),
	(126, 1),
	(127, 1),
	(128, 1),
	(129, 1),
	(130, 1),
	(131, 1),
	(132, 1),
	(133, 1),
	(134, 1),
	(135, 1),
	(136, 1),
	(138, 1),
	(140, 1),
	(141, 1),
	(142, 1),
	(143, 1),
	(145, 1),
	(146, 1),
	(115, 3),
	(119, 3),
	(120, 3),
	(121, 3),
	(144, 3),
	(147, 3),
	(112, 41),
	(137, 42),
	(139, 42);
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.cliente: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`codigo`, `nome`, `email`, `senha`, `codcadnac`, `codcadest`, `endereco`) VALUES
	(1, 'Visitante', '', '', NULL, NULL, NULL),
	(2, 'lauro', 'lauro.ribeiro@gmail.com', '1810', NULL, NULL, NULL),
	(3, 'wilton', 'wilton.tecti@gmail.com', '1810', 4802833113, 1212456, 'Relandia'),
	(38, 'WIlton', 'wisslton@gmail.com', 'asdasd', NULL, NULL, NULL),
	(39, 'WIlton', 'wiltossn@gmail.com', 'asd', NULL, NULL, NULL),
	(40, 'WIlton', 'wilasdasdton@gmail.com', 'aaa', NULL, NULL, NULL),
	(41, 'WIlton', 'wiltosssssn@gmail.com', '654', NULL, NULL, NULL),
	(42, 'Wilton', 'pranaue@askjdas.com', '4848', NULL, NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.itemcarrinho: ~46 rows (aproximadamente)
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
	(78, 117, 55, 11),
	(79, 118, 2, 2),
	(80, 118, 1, 3),
	(81, 118, 4, 5),
	(82, 118, 2, 8),
	(83, 119, 2, 2),
	(84, 119, 1, 1),
	(85, 120, 25, 1),
	(86, 120, 3, 2),
	(87, 120, 4, 3),
	(88, 121, 2, 1),
	(89, 121, 2, 1),
	(90, 121, 2, 1),
	(91, 121, 2, 5),
	(92, 125, 2, 1),
	(93, 126, 3, 2),
	(94, 126, 3, 2),
	(95, 128, 2, 1),
	(96, 131, 2, 1),
	(97, 135, 2, 1),
	(98, 135, 10, 3),
	(99, 135, 21, 5),
	(100, 135, 2, 4),
	(101, 135, 12, 8),
	(102, 135, 12, 3),
	(103, 135, 2, 2),
	(104, 135, 22, 14),
	(105, 135, 44, 3),
	(106, 136, 2, 2),
	(107, 137, 2, 2),
	(108, 143, 2, 1),
	(109, 145, 2, 2),
	(110, 146, 2, 3);
/*!40000 ALTER TABLE `itemcarrinho` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.itemvenda
CREATE TABLE IF NOT EXISTS `itemvenda` (
  `codigo` bigint(20) DEFAULT NULL,
  `venda` bigint(20) DEFAULT NULL,
  `quantidade` bigint(20) DEFAULT NULL,
  `produto` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.itemvenda: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `itemvenda` DISABLE KEYS */;
REPLACE INTO `itemvenda` (`codigo`, `venda`, `quantidade`, `produto`) VALUES
	(73, 17, 2, 2),
	(74, 17, 2, 2),
	(75, 17, 1, 3),
	(76, 17, 5, 5),
	(77, 17, 8, 4),
	(78, 17, 55, 11),
	(79, 18, 2, 2),
	(80, 18, 1, 3),
	(81, 18, 4, 5),
	(82, 18, 2, 8),
	(83, 19, 2, 2),
	(84, 19, 1, 1),
	(85, 20, 25, 1),
	(86, 20, 3, 2),
	(87, 20, 4, 3),
	(97, 21, 2, 1),
	(98, 21, 10, 3),
	(99, 21, 21, 5),
	(100, 21, 2, 4),
	(101, 21, 12, 8),
	(102, 21, 12, 3),
	(103, 21, 2, 2),
	(104, 21, 22, 14),
	(105, 21, 44, 3),
	(106, 22, 2, 2),
	(107, 23, 2, 2),
	(108, 24, 2, 1),
	(110, 25, 2, 3);
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.produto: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
REPLACE INTO `produto` (`codigo`, `descricao`, `estoque`, `preco`, `imagem`) VALUES
	(1, 'Beterraba', 251, 2.50, 'beterraba.jpg'),
	(2, 'Cenoura', 5, 2.96, 'cenoura.jpg'),
	(3, 'Pimenta', 5, 3.00, 'pimenta.jpg'),
	(4, 'Coisa Verde', 25, 2.65, 'file_87_123_1.jpg'),
	(5, 'Coisa Verde 2E', 25, 2.65, 'file_89_10_1.jpg'),
	(6, 'Coisa Verde 3 ', 5, 2.65, 'file_89_11_1.jpg'),
	(7, 'Coisa Verde 4', 5, 2.96, 'file_90_18_1.jpg'),
	(8, 'Coisa Verde 5 ', 5, 2.98, 'file_90_29_1.jpg'),
	(9, 'Coisa Verde 7', 5, 2.98, 'file_90_30_1.jpg'),
	(10, 'Coisa Verde 6', 5, 2.94, 'file_90_34_1.jpg'),
	(11, 'Coisa Verde 8 ', 5, 2.94, 'file_90_46_1.jpg'),
	(12, 'Coisa Verde 9 ', 5, 2.69, 'prod_1_12589_1.jpg'),
	(13, 'Coisa Verde 10', 5, 2.54, 'prod_1_12814_1.jpg'),
	(14, 'Coisa Verde 11', 5, 2.65, 'prod_1_12838_1.jpg'),
	(15, 'Coisa Verde 12', 5, 9.65, 'prod_1_5459_1.jpg'),
	(16, 'Wilton RIbero Silva', 1, 1000.00, NULL),
	(17, 'Wilton RIbero Silva', 1, 1000.00, NULL),
	(18, 'Wilton RIbero Silva', 1, 1000.00, 'Sem tÃ­tulo.png'),
	(19, 'wasdasd', 5225, 14.00, 'IMG-20150928-WA0005.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`codigo`, `nome`, `login`, `senha`) VALUES
	(1, 'admin', 'admin', 'admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;


-- Copiando estrutura para tabela webpepper.venda
CREATE TABLE IF NOT EXISTS `venda` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cliente` bigint(20) DEFAULT NULL,
  `codcadnac` bigint(20) DEFAULT NULL,
  `codcadest` bigint(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `carrinho` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela webpepper.venda: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
REPLACE INTO `venda` (`codigo`, `cliente`, `codcadnac`, `codcadest`, `endereco`, `carrinho`) VALUES
	(1, NULL, 4802833113, 1212456, '0', 117),
	(2, 3, 4802833113, 1212456, '0', 117),
	(3, 3, 4802833113, 1212456, '0', 117),
	(4, 3, 4802833113, 1212456, 'Relandia', 117),
	(5, 3, 4802833113, 1212456, 'Relandia', 117),
	(6, 3, 4802833113, 1212456, 'Relandia', 117),
	(7, 3, 4802833113, 1212456, 'Relandia', 117),
	(8, 3, 4802833113, 1212456, 'Relandia', 117),
	(9, 3, 4802833113, 1212456, 'Relandia', 117),
	(10, 3, 4802833113, 1212456, 'Relandia', 117),
	(11, 3, 4802833113, 1212456, 'Relandia', 117),
	(12, 3, 4802833113, 1212456, 'Relandia', 117),
	(13, 3, 4802833113, 1212456, 'Relandia', 117),
	(14, 3, 4802833113, 1212456, 'Relandia', 117),
	(15, 3, 4802833113, 1212456, 'Relandia', 117),
	(16, 3, 4802833113, 1212456, 'Relandia', 117),
	(17, 3, 4802833113, 1212456, 'Relandia', 117),
	(18, 3, 4802833113, 1212456, 'Relandia 54654654654654', 118),
	(19, 3, 4802833113, 1212456, 'Relandiaasdasdas', 119),
	(20, 3, 4802833113, 1212456, 'Rua 7 de Setembro N 173', 120),
	(21, 1, 0, 0, 'asd', 135),
	(22, 42, 5465, 54654, 'asdasd', 136),
	(23, 42, 4534, 4534, 'asdasd', 137),
	(24, 3, 4802833113, 1212456, 'Relandia', 143),
	(25, 3, 4802833113, 1212456, 'Relandia', 146);
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
