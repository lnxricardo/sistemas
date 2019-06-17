-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: db_inventario
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(45) NOT NULL,
  `contato` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipamentos` (
  `tag` int(11) NOT NULL,
  `tipo_equipamento_cod_tipo` int(11) NOT NULL,
  `clientes_cod_cliente` int(11) NOT NULL,
  `softwares_cod_soft` int(11) NOT NULL,
  `hardware_cod_hardware` int(11) NOT NULL,
  PRIMARY KEY (`tag`,`tipo_equipamento_cod_tipo`,`clientes_cod_cliente`,`softwares_cod_soft`,`hardware_cod_hardware`),
  KEY `fk_equipamentos_tipo_equipamento_idx` (`tipo_equipamento_cod_tipo`),
  KEY `fk_equipamentos_clientes1_idx` (`clientes_cod_cliente`),
  KEY `fk_equipamentos_softwares1_idx` (`softwares_cod_soft`),
  KEY `fk_equipamentos_hardware1_idx` (`hardware_cod_hardware`),
  CONSTRAINT `fk_equipamentos_clientes1` FOREIGN KEY (`clientes_cod_cliente`) REFERENCES `clientes` (`cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_equipamentos_hardware1` FOREIGN KEY (`hardware_cod_hardware`) REFERENCES `hardware` (`cod_hardware`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_equipamentos_softwares1` FOREIGN KEY (`softwares_cod_soft`) REFERENCES `softwares` (`cod_soft`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_equipamentos_tipo_equipamento` FOREIGN KEY (`tipo_equipamento_cod_tipo`) REFERENCES `tipo_equipamento` (`cod_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamentos`
--

LOCK TABLES `equipamentos` WRITE;
/*!40000 ALTER TABLE `equipamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hardware`
--

DROP TABLE IF EXISTS `hardware`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hardware` (
  `cod_hardware` int(11) NOT NULL AUTO_INCREMENT,
  `processador_cod_cpu` int(11) NOT NULL,
  `hd_cod_hd` int(11) NOT NULL,
  `tbl_ram_cod_ram` int(11) NOT NULL,
  PRIMARY KEY (`cod_hardware`,`processador_cod_cpu`,`hd_cod_hd`,`tbl_ram_cod_ram`),
  KEY `fk_hardware_processador1_idx` (`processador_cod_cpu`),
  KEY `fk_hardware_hd1_idx` (`hd_cod_hd`),
  KEY `fk_hardware_tbl_ram1_idx` (`tbl_ram_cod_ram`),
  CONSTRAINT `fk_hardware_hd1` FOREIGN KEY (`hd_cod_hd`) REFERENCES `hd` (`cod_hd`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_hardware_processador1` FOREIGN KEY (`processador_cod_cpu`) REFERENCES `processador` (`cod_cpu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_hardware_tbl_ram1` FOREIGN KEY (`tbl_ram_cod_ram`) REFERENCES `tbl_ram` (`cod_ram`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hardware`
--

LOCK TABLES `hardware` WRITE;
/*!40000 ALTER TABLE `hardware` DISABLE KEYS */;
/*!40000 ALTER TABLE `hardware` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hd`
--

DROP TABLE IF EXISTS `hd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hd` (
  `cod_hd` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_hd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hd`
--

LOCK TABLES `hd` WRITE;
/*!40000 ALTER TABLE `hd` DISABLE KEYS */;
/*!40000 ALTER TABLE `hd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processador`
--

DROP TABLE IF EXISTS `processador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processador` (
  `cod_cpu` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_cpu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processador`
--

LOCK TABLES `processador` WRITE;
/*!40000 ALTER TABLE `processador` DISABLE KEYS */;
/*!40000 ALTER TABLE `processador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `softwares`
--

DROP TABLE IF EXISTS `softwares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `softwares` (
  `cod_soft` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_soft`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `softwares`
--

LOCK TABLES `softwares` WRITE;
/*!40000 ALTER TABLE `softwares` DISABLE KEYS */;
/*!40000 ALTER TABLE `softwares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ram`
--

DROP TABLE IF EXISTS `tbl_ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ram` (
  `cod_ram` int(11) NOT NULL AUTO_INCREMENT,
  `clock` varchar(45) NOT NULL,
  `capacidade` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_ram`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ram`
--

LOCK TABLES `tbl_ram` WRITE;
/*!40000 ALTER TABLE `tbl_ram` DISABLE KEYS */;
INSERT INTO `tbl_ram` VALUES (1,'DDR4','8GB'),(2,'DDR4','8GB'),(3,'DDR2','2GB');
/*!40000 ALTER TABLE `tbl_ram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_equipamento`
--

DROP TABLE IF EXISTS `tipo_equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_equipamento` (
  `cod_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_equipamento`
--

LOCK TABLES `tipo_equipamento` WRITE;
/*!40000 ALTER TABLE `tipo_equipamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_equipamento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-17  7:27:57
