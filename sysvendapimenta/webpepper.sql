# Host: localhost  (Version: 5.6.16)
# Date: 2015-10-19 16:21:32
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "produto"
#

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `estoque` bigint(20) DEFAULT NULL,
  `preco` float(10,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "produto"
#

INSERT INTO `produto` VALUES (1,'Beterraba',5,2.50,'beterraba.jpg'),(2,'Cenoura',5,2.96,'cenoura.jpg'),(3,'Pimenta',5,3.00,'pimenta.jpg');
