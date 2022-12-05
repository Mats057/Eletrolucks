CREATE DATABASE IF NOT EXISTS `loja`;
USE `loja`;

CREATE TABLE IF NOT EXISTS `itens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `clientes` (
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(17) DEFAULT NULL,
  `cpf` char(14) NOT NULL,
  `cep` char(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nasc` DATE DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
