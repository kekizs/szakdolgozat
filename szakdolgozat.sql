-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: szakdolgozat
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `cimek`
--

DROP TABLE IF EXISTS `cimek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cimek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orszag` varchar(45) CHARACTER SET latin1 NOT NULL,
  `varos` varchar(45) CHARACTER SET latin1 NOT NULL,
  `utca` varchar(45) CHARACTER SET latin1 NOT NULL,
  `hazszam` int(11) NOT NULL,
  `emelet` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ajto` int(11) DEFAULT NULL,
  `vasarlo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cimek_vasarlok_idx` (`vasarlo_id`),
  CONSTRAINT `fk_cimek_vasarlok` FOREIGN KEY (`vasarlo_id`) REFERENCES `vasarlok` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cimek`
--

LOCK TABLES `cimek` WRITE;
/*!40000 ALTER TABLE `cimek` DISABLE KEYS */;
/*!40000 ALTER TABLE `cimek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hirek`
--

DROP TABLE IF EXISTS `hirek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hirek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cim` varchar(45) NOT NULL,
  `szoveg` longtext NOT NULL,
  `datum` datetime DEFAULT CURRENT_TIMESTAMP,
  `lejarat` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hirek`
--

LOCK TABLES `hirek` WRITE;
/*!40000 ALTER TABLE `hirek` DISABLE KEYS */;
INSERT INTO `hirek` VALUES (1,'Tortenelem','asdasdfasdsfsdfsadfasfasfdsaffas','2017-08-28 18:15:22','2017-12-21');
/*!40000 ALTER TABLE `hirek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rendeles`
--

DROP TABLE IF EXISTS `rendeles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rendeles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `termek_id` int(11) NOT NULL,
  `vasarlo_id` int(11) NOT NULL,
  `mennyiseg` int(11) NOT NULL,
  `ar` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rendeles_vasarlok_idx` (`vasarlo_id`),
  CONSTRAINT `fk_rendeles_vasarlok` FOREIGN KEY (`vasarlo_id`) REFERENCES `vasarlok` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rendeles`
--

LOCK TABLES `rendeles` WRITE;
/*!40000 ALTER TABLE `rendeles` DISABLE KEYS */;
/*!40000 ALTER TABLE `rendeles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `term_rend`
--

DROP TABLE IF EXISTS `term_rend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `term_rend` (
  `termek_id` int(11) NOT NULL,
  `vasarlo_id` int(11) NOT NULL,
  KEY `fk_term_rend_rendeles_idx` (`vasarlo_id`),
  KEY `fk_term_rend_termek_idx` (`termek_id`),
  CONSTRAINT `fk_term_rend_rendeles` FOREIGN KEY (`vasarlo_id`) REFERENCES `rendeles` (`vasarlo_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_term_rend_termek` FOREIGN KEY (`termek_id`) REFERENCES `termek` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `term_rend`
--

LOCK TABLES `term_rend` WRITE;
/*!40000 ALTER TABLE `term_rend` DISABLE KEYS */;
/*!40000 ALTER TABLE `term_rend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `termek`
--

DROP TABLE IF EXISTS `termek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `termek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `termeknev` varchar(45) NOT NULL,
  `leiras` varchar(45) DEFAULT NULL,
  `ar` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `termek`
--

LOCK TABLES `termek` WRITE;
/*!40000 ALTER TABLE `termek` DISABLE KEYS */;
/*!40000 ALTER TABLE `termek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `torihirek`
--

DROP TABLE IF EXISTS `torihirek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `torihirek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cim` varchar(45) DEFAULT NULL,
  `szoveg` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torihirek`
--

LOCK TABLES `torihirek` WRITE;
/*!40000 ALTER TABLE `torihirek` DISABLE KEYS */;
INSERT INTO `torihirek` VALUES (1,'A csokoládé történelem','asdadsdadasdasdasdasfafsdfsdfsgdfgdfgdfgfdgfdgdfgfdgfdgfdgdffgdgdf');
/*!40000 ALTER TABLE `torihirek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vezeteknev` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `keresztnev` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `jelszo` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `telefonszam` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_hungarian_ci DEFAULT NULL,
  `szuletesi_datum` date DEFAULT NULL,
  `reg_datum` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vasarlok`
--

DROP TABLE IF EXISTS `vasarlok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vasarlok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vezeteknev` varchar(45) CHARACTER SET utf8 NOT NULL,
  `keresztnev` varchar(45) CHARACTER SET utf8 NOT NULL,
  `telefonszam` varchar(45) CHARACTER SET utf8 NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vasarlok_user_idx` (`user_id`),
  CONSTRAINT `fk_vasarlok_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vasarlok`
--

LOCK TABLES `vasarlok` WRITE;
/*!40000 ALTER TABLE `vasarlok` DISABLE KEYS */;
/*!40000 ALTER TABLE `vasarlok` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-01  7:21:13
