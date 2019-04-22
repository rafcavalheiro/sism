CREATE DATABASE  IF NOT EXISTS `arduino` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_bin */;
USE `arduino`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: arduino
-- ------------------------------------------------------
-- Server version	5.6.37-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arduino_consumo`
--

DROP TABLE IF EXISTS `arduino_consumo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arduino_consumo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potencia_w` double DEFAULT NULL,
  `consumo` double DEFAULT NULL,
  `tarifa` double DEFAULT NULL,
  `cod_equipamento` int(11) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=520 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nivel_acesso`
--

DROP TABLE IF EXISTS `nivel_acesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(220) DEFAULT NULL,
  `data_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_modifcacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tabela_equipamento`
--

DROP TABLE IF EXISTS `tabela_equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabela_equipamento` (
  `cod_equipamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE latin1_bin NOT NULL,
  `descricao` varchar(40) COLLATE latin1_bin NOT NULL,
  `consumo_kwh` float NOT NULL,
  `voltagem` int(11) NOT NULL,
  `classificacao_energetica` varchar(11) COLLATE latin1_bin NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `data_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_equipamento`),
  KEY `fk_usuario` (`cod_usuario`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`cod_usuario`) REFERENCES `tabela_usuario` (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tabela_usuario`
--

DROP TABLE IF EXISTS `tabela_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabela_usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE latin1_bin NOT NULL,
  `email` varchar(40) COLLATE latin1_bin NOT NULL,
  `login` varchar(40) COLLATE latin1_bin NOT NULL,
  `senha` varchar(40) COLLATE latin1_bin NOT NULL,
  `nivel_acesso` int(11) NOT NULL,
  `data_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_modificacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 11:44:01
