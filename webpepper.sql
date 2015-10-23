# Host: localhost  (Version: 5.6.16)
# Date: 2015-10-23 12:56:55
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "produto"
#

INSERT INTO `produto` VALUES (1,'Beterraba',5,2.50,'beterraba.jpg'),(2,'Cenoura',5,2.96,'cenoura.jpg'),(3,'Pimenta',5,3.00,'pimenta.jpg'),(4,'Coisa Verde',25,2.65,'file_87_123_1.jpg'),(5,'Coisa Verde 2',5,2.65,'file_89_10_1.jpg'),(6,'Coisa Verde 3 ',5,2.65,'file_89_11_1.jpg'),(7,'Coisa Verde 4',5,2.96,'file_90_18_1.jpg'),(8,'Coisa Verde 5 ',5,2.98,'file_90_29_1.jpg'),(9,'Coisa Verde 7',5,2.98,'file_90_30_1.jpg'),(10,'Coisa Verde 6',5,2.94,'file_90_34_1.jpg'),(11,'Coisa Verde 8 ',5,2.94,'file_90_46_1.jpg'),(12,'Coisa Verde 9 ',5,2.69,'prod_1_12589_1.jpg'),(13,'Coisa Verde 10',5,2.54,'prod_1_12814_1.jpg'),(14,'Coisa Verde 11',5,2.65,'prod_1_12838_1.jpg'),(15,'Coisa Verde 12',5,9.65,'prod_1_5459_1.jpg');
