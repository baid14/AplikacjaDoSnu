-- MySQL dump 10.13  Distrib 5.7.13, for FreeBSD10.3 (amd64)
--
-- Host: localhost    Database: m1559_pbdpk
-- ------------------------------------------------------
-- Server version	5.7.13-log

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
-- Table structure for table `Aktywacja`
--

DROP TABLE IF EXISTS `Aktywacja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aktywacja` (
  `id_aktywacja` int(11) NOT NULL AUTO_INCREMENT,
  `kod` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `aktywacja` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_aktywacja`),
  KEY `kod` (`kod`),
  KEY `kod_2` (`kod`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aktywacja`
--

LOCK TABLES `Aktywacja` WRITE;
/*!40000 ALTER TABLE `Aktywacja` DISABLE KEYS */;
INSERT INTO `Aktywacja` VALUES (1,'','1','baid'),(14,'751077431','1','Frings'),(16,'901642902','1','kacper123');
/*!40000 ALTER TABLE `Aktywacja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Aktywacja2`
--

DROP TABLE IF EXISTS `Aktywacja2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aktywacja2` (
  `id_aktywacja2` int(11) NOT NULL AUTO_INCREMENT,
  `kod` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `aktywacja` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_aktywacja2`),
  KEY `kod` (`kod`),
  KEY `kod_2` (`kod`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aktywacja2`
--

LOCK TABLES `Aktywacja2` WRITE;
/*!40000 ALTER TABLE `Aktywacja2` DISABLE KEYS */;
INSERT INTO `Aktywacja2` VALUES (14,'369433268','0','baid');
/*!40000 ALTER TABLE `Aktywacja2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Analiza_dnia`
--

DROP TABLE IF EXISTS `Analiza_dnia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Analiza_dnia` (
  `id_Analiza_dnia` int(11) NOT NULL AUTO_INCREMENT,
  `id_uzytkownicy` int(11) NOT NULL,
  `par1` tinyint(1) NOT NULL,
  `par2` tinyint(1) NOT NULL,
  `par3` tinyint(1) NOT NULL,
  `par4` tinyint(1) NOT NULL,
  `par5` tinyint(1) NOT NULL,
  `par6` tinyint(1) NOT NULL,
  `par7` tinyint(1) NOT NULL,
  `par8` tinyint(1) NOT NULL,
  `notatka` text NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_Analiza_dnia`),
  KEY `id_uzytkownicy` (`id_uzytkownicy`),
  CONSTRAINT `Analiza_dnia_ibfk_1` FOREIGN KEY (`id_uzytkownicy`) REFERENCES `uzytkownicy` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Analiza_dnia`
--

LOCK TABLES `Analiza_dnia` WRITE;
/*!40000 ALTER TABLE `Analiza_dnia` DISABLE KEYS */;
INSERT INTO `Analiza_dnia` VALUES (1,1,1,1,1,1,1,1,1,1,'','1994-10-10'),(2,1,1,1,1,1,1,1,1,1,'AAAAAAAAAaaaaaaaaaaddddd','1994-11-11'),(3,7,0,1,0,1,1,1,0,1,'','2016-11-11'),(4,1,0,1,0,0,1,1,1,1,'','2016-11-12'),(5,1,1,1,0,0,1,0,0,0,'','2011-11-11'),(6,11,0,1,1,0,0,1,0,1,'&#039;ddd','1995-10-10'),(7,2,0,1,0,0,1,0,1,0,'','2016-11-09'),(12,2,1,0,1,0,1,0,0,1,'qweqwe','2016-11-22'),(13,2,0,1,0,0,1,0,0,0,'asdasd','2016-11-23'),(14,2,1,1,0,0,0,0,0,1,'qqq','2016-11-18');
/*!40000 ALTER TABLE `Analiza_dnia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Dieta`
--

DROP TABLE IF EXISTS `Dieta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Dieta` (
  `id_dieta` int(11) NOT NULL AUTO_INCREMENT,
  `id_uzytkownicy` int(11) NOT NULL,
  `par1` tinyint(1) NOT NULL,
  `par2` tinyint(1) NOT NULL,
  `par3` tinyint(1) NOT NULL,
  `par4` tinyint(1) NOT NULL,
  `par5` tinyint(1) NOT NULL,
  `par6` tinyint(1) NOT NULL,
  `par7` tinyint(1) NOT NULL,
  `par8` tinyint(1) NOT NULL,
  `bialka` int(11) NOT NULL,
  `tluszcze` int(11) NOT NULL,
  `weglowodany` int(11) NOT NULL,
  `kalorie` int(11) NOT NULL,
  `ile_posilkow` int(11) NOT NULL,
  `najwiekszy_posilek` varchar(20) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_dieta`),
  KEY `id_uzytkownicy` (`id_uzytkownicy`),
  CONSTRAINT `Dieta_ibfk_1` FOREIGN KEY (`id_uzytkownicy`) REFERENCES `uzytkownicy` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Dieta`
--

LOCK TABLES `Dieta` WRITE;
/*!40000 ALTER TABLE `Dieta` DISABLE KEYS */;
INSERT INTO `Dieta` VALUES (1,1,1,1,1,1,1,1,1,1,2,2,222,2,2,'2','1994-10-10'),(2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'1','1995-11-11'),(3,1,1,1,1,1,1,1,1,1,1,11,1,1,11,'1','2012-11-11'),(6,7,1,0,0,0,0,0,1,1,5,5,5,5,5,'5','2016-11-11'),(9,9,0,1,0,1,0,1,0,1,22,23,22,23,23,'23','1999-11-11'),(10,9,0,1,1,1,1,0,0,0,3333333,333,333333,2,1313,'3123123','2010-11-11'),(11,2,1,1,0,1,1,1,0,0,1,1,1,1111,11,'1','2016-11-01'),(12,2,1,1,0,1,1,1,0,1,1,1,11,11111,1,'1','2016-11-02'),(22,2,0,1,1,1,0,1,1,1,7,77,7,7,77,'7','2016-11-22'),(23,2,0,1,0,0,1,1,0,0,222,2,2,22,2,'2','2016-11-23'),(24,19,0,1,0,0,0,0,1,1,22,2,2,2,2,'2','2016-11-08'),(25,2,1,1,1,1,0,0,0,0,2,22,2,2,2,'2','2016-11-12'),(26,2,1,1,0,0,1,1,0,0,2,22,2,22,2,'2','2016-11-06');
/*!40000 ALTER TABLE `Dieta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Notatka`
--

DROP TABLE IF EXISTS `Notatka`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Notatka` (
  `id_notatka` int(11) NOT NULL AUTO_INCREMENT,
  `id_uzytkownicy` int(11) NOT NULL,
  `data` date NOT NULL,
  `notatka` text NOT NULL,
  PRIMARY KEY (`id_notatka`),
  KEY `id_uzytkownicy` (`id_uzytkownicy`),
  KEY `id_uzytkownicy_2` (`id_uzytkownicy`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notatka`
--

LOCK TABLES `Notatka` WRITE;
/*!40000 ALTER TABLE `Notatka` DISABLE KEYS */;
INSERT INTO `Notatka` VALUES (41,1,'1994-10-10','ddd'),(42,1,'1995-11-11','ddd'),(43,1,'1996-11-11','ddd'),(44,9,'1994-10-10','   effe'),(45,1,'2015-12-12','ddd'),(46,1,'2013-12-12','ddd'),(47,1,'2012-11-11','ddd'),(48,1,'2013-11-11','ddd'),(49,2,'1994-10-10','ddd2'),(50,2,'2016-11-01','ddd2'),(61,0,'2016-11-02',' 213213  '),(62,0,'2016-11-02','  wqdwqdqwd '),(63,1,'2016-11-04','ddd'),(64,0,'2016-11-13',' dd  '),(65,0,'2016-11-01','ddddd   '),(66,0,'2016-11-09','asdad   '),(67,0,'2016-11-01','asdadasd   '),(68,2,'2016-11-22','dasdas   '),(69,2,'2016-11-22','dasdas   '),(71,2,'2016-11-12',' dwadqwd  '),(72,2,'2016-11-15','adadas asdasdasda     '),(73,2,'2016-11-15','adadas asdasdasda     '),(74,2,'2016-11-15','adadas asdasdasda     '),(75,2,'2016-11-03','dssada   '),(76,2,'2016-11-22','dasdas   '),(77,2,'2016-11-17','   dadasda'),(78,2,'2016-11-22','dasdas   '),(79,2,'2016-11-06','  asdasda '),(80,2,'2016-11-06','  asdasda '),(84,4,'2016-11-03','   qdwqdwq dq wq'),(85,46,'2016-11-28','dqwdqwd   ');
/*!40000 ALTER TABLE `Notatka` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Odpowiedzi`
--

DROP TABLE IF EXISTS `Odpowiedzi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Odpowiedzi` (
  `id_odpowiedzi` int(11) NOT NULL AUTO_INCREMENT,
  `E` tinyint(1) NOT NULL,
  `S` tinyint(1) NOT NULL,
  `T` tinyint(1) NOT NULL,
  `J` tinyint(1) NOT NULL,
  `id_swiadomosc` int(11) NOT NULL,
  `id_uzytkownicy` int(11) NOT NULL,
  `I` tinyint(1) NOT NULL,
  `INTU` tinyint(1) NOT NULL,
  `F` tinyint(1) NOT NULL,
  `P` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_odpowiedzi`),
  KEY `id_swiadomosc` (`id_swiadomosc`),
  KEY `id_uzytkownicy` (`id_uzytkownicy`),
  CONSTRAINT `Odpowiedzi_ibfk_2` FOREIGN KEY (`id_swiadomosc`) REFERENCES `Swiadomosc` (`id_swiadomosc`),
  CONSTRAINT `Odpowiedzi_ibfk_3` FOREIGN KEY (`id_uzytkownicy`) REFERENCES `uzytkownicy` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Odpowiedzi`
--

LOCK TABLES `Odpowiedzi` WRITE;
/*!40000 ALTER TABLE `Odpowiedzi` DISABLE KEYS */;
INSERT INTO `Odpowiedzi` VALUES (6,7,9,11,11,1,1,7,5,3,3),(7,7,10,12,11,1,6,7,4,2,3),(8,6,7,10,10,1,2,8,7,4,4),(9,7,9,11,11,1,9,7,5,3,3),(10,7,9,11,11,1,20,7,5,3,3),(11,7,9,11,11,1,4,7,5,3,3),(12,7,9,11,11,1,49,7,5,3,3);
/*!40000 ALTER TABLE `Odpowiedzi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Profil`
--

DROP TABLE IF EXISTS `Profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `par1` varchar(1) DEFAULT NULL,
  `par2` varchar(1) DEFAULT NULL,
  `par4` varchar(1) DEFAULT NULL,
  `par5` varbinary(1) DEFAULT NULL,
  `par6` varchar(1) DEFAULT NULL,
  `par7` varchar(1) DEFAULT NULL,
  `par8` varchar(1) DEFAULT NULL,
  `par9` varchar(1) DEFAULT NULL,
  `par10` varchar(1) DEFAULT NULL,
  `par11` varchar(1) DEFAULT NULL,
  `par12` varchar(1) DEFAULT NULL,
  `par14` varchar(1) DEFAULT NULL,
  `par15` varchar(1) DEFAULT NULL,
  `par3` varchar(1) DEFAULT NULL,
  `par13` varchar(1) DEFAULT NULL,
  `par16` varchar(1) DEFAULT NULL,
  `par17` varchar(1) DEFAULT NULL,
  `wiek` int(11) DEFAULT NULL,
  `waga` int(11) DEFAULT NULL,
  `wzrost` int(11) DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `choroby_p` varchar(30) DEFAULT NULL,
  `choroby_n_p` varchar(30) DEFAULT NULL,
  `zawod` varchar(30) DEFAULT NULL,
  `religia` varchar(30) DEFAULT NULL,
  `naj1` varchar(30) DEFAULT NULL,
  `naj2` varchar(30) DEFAULT NULL,
  `naj3` varchar(30) DEFAULT NULL,
  `naj4` varchar(30) DEFAULT NULL,
  `naj5` varchar(30) DEFAULT NULL,
  `id_uzytkownicy` int(11) DEFAULT NULL,
  `par18` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `id_uzytkownicy` (`id_uzytkownicy`),
  CONSTRAINT `Profil_ibfk_1` FOREIGN KEY (`id_uzytkownicy`) REFERENCES `uzytkownicy` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profil`
--

LOCK TABLES `Profil` WRITE;
/*!40000 ALTER TABLE `Profil` DISABLE KEYS */;
INSERT INTO `Profil` VALUES (66,'A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A',1,11,0,1,'1','1','1','1','1','1','1','1','11',2,'A'),(67,'A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A',2,2,2,2,'2','2','2','2','22','2','2','2','2',4,'A');
/*!40000 ALTER TABLE `Profil` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`m1559_baid`@`%.devil`*/ /*!50003 TRIGGER `duza_litera` BEFORE INSERT ON `Profil` FOR EACH ROW begin
if lower(NEW.religia) = NEW.religia then
set NEW.religia = Upper(NEW.religia);
end if;
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Sesja`
--

DROP TABLE IF EXISTS `Sesja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sesja` (
  `id_sesja` int(11) NOT NULL AUTO_INCREMENT,
  `id_uzytkownicy` int(11) NOT NULL,
  `id` varchar(64) NOT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `web` varchar(200) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sesja`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sesja`
--

LOCK TABLES `Sesja` WRITE;
/*!40000 ALTER TABLE `Sesja` DISABLE KEYS */;
INSERT INTO `Sesja` VALUES (135,46,'7afa562a9f461cf39c0531da3b86f1c00306ea868407dfc7b6c3c245fccc0862','37.47.127.121','Mozilla/5.0 (Linux; Android 6.0; LG-D855-orange Build/D85530n Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/38.0.2125.102 Mobile Safari/537.36','2016-11-28 15:08:43');
/*!40000 ALTER TABLE `Sesja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Swiadomosc`
--

DROP TABLE IF EXISTS `Swiadomosc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Swiadomosc` (
  `id_swiadomosc` int(11) NOT NULL AUTO_INCREMENT,
  `typ_swiadomosc` varchar(4) NOT NULL,
  PRIMARY KEY (`id_swiadomosc`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Swiadomosc`
--

LOCK TABLES `Swiadomosc` WRITE;
/*!40000 ALTER TABLE `Swiadomosc` DISABLE KEYS */;
INSERT INTO `Swiadomosc` VALUES (1,'ISTJ'),(2,'ISTP'),(3,'INTJ'),(4,'INTP'),(5,'ISFJ'),(6,'ISFP'),(7,'IFNJ'),(8,'INFP'),(9,'ESTJ'),(10,'ESTP'),(11,'ENTJ'),(12,'ENTP'),(13,'ESFJ'),(14,'ESFP'),(15,'EFNJ'),(16,'ENFP');
/*!40000 ALTER TABLE `Swiadomosc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Wiadomosc`
--

DROP TABLE IF EXISTS `Wiadomosc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Wiadomosc` (
  `id_wiadomosc` int(11) NOT NULL AUTO_INCREMENT,
  `id_uzytkownicy` int(11) NOT NULL,
  `nazwa` varchar(16) NOT NULL,
  `wiadomosc` text NOT NULL,
  PRIMARY KEY (`id_wiadomosc`),
  KEY `id_uzytkownicy` (`id_uzytkownicy`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Wiadomosc`
--

LOCK TABLES `Wiadomosc` WRITE;
/*!40000 ALTER TABLE `Wiadomosc` DISABLE KEYS */;
INSERT INTO `Wiadomosc` VALUES (1,1,'ddddd','ddd'),(5,1,'dddddd','d'),(6,2,'DzieÅ„ Dobry !','Republikanie triumfujÄ…. W wyborach, kt&oacute;re odbyÅ‚y siÄ™ 8 listopada, zmiaÅ¼dÅ¼yli PartiÄ™ DemokratycznÄ…. A pamiÄ™tajmy, Å¼e 8 listopada wybierano nie tylko prezydenta, ale takÅ¼e caÅ‚Ä… IzbÄ™ Reprezentant&oacute;w oraz czÄ™Å›Ä‡ senator&oacute;w. Demokraci liczyli, Å¼e wygrajÄ… prezydenturÄ™ i bÄ™dÄ… mieli wiÄ™kszoÅ›Ä‡ w Senacie, ale zostali z niczym. Partia nie byÅ‚a w takim kryzysie od dawna.\r\n\r\nCzytaj wiÄ™cej na http://fakty.interia.pl/raporty/raport-usa-wybory2016/nasze-relacje/news-pozory-myla-ameryka-wcale-nie-taka-republikanska,nId,2307894#utm_source=paste&amp;utm_medium=paste&amp;utm_campaign=firefox'),(7,7,'To musi byÄ‡ 16!','55 proc. Amerykan&oacute;w chce zaostrzenia przepis&oacute;w dot. dostÄ™pu do broni, a tylko 11 proc. ich zÅ‚agodzenia. Republikanie, powoÅ‚ujÄ…c siÄ™ na konstytucjÄ™, chcÄ…, by dostÄ™p do broni byÅ‚ nieograniczony.\r\n\r\nPonadto Amerykanie popierajÄ… takie postulaty jak: podniesienie pÅ‚acy minimalnej, pÅ‚atny urlop, gwarancja opieki zdrowotnej dla kaÅ¼dego, a wiÄ™c postulaty, kt&oacute;rym republikanie siÄ™ sprzeciwiajÄ….\r\n\r\nDodajmy teÅ¼, Å¼e zmienia siÄ™ stosunek Amerykan&oacute;w do kapitalizmu, a wiÄ™c republikaÅ„skiej religii. 60 proc. Amerykan&oacute;w ocenia kapitalizm pozytywnie, natomiast w grupie wiekowej 18-29 ten odsetek wynosi tylko 41 proc.\r\n\r\nW badaniach powyborczych widaÄ‡ byÅ‚o wyraÅºnie, Å¼e na Donalda Trumpa gÅ‚osowano, czÄ™sto nie zgadzajÄ…c siÄ™ z nim np. w sprawie budowy muru na granicy z Meksykiem czy deportacji nielegalnych imigrant&oacute;w.\r\n\r\nWyglÄ…da na to, Å¼e Amerykanie trochÄ™ jak kot Schr&ouml;dingera - sÄ… i nie sÄ… republikaÅ„scy jednoczeÅ›nie.\r\n\r\n\r\nCzytaj wiÄ™cej na http://fakty.interia.pl/raporty/raport-usa-wybory2016/nasze-relacje/news-pozory-myla-ameryka-wcale-nie-taka-republikanska,nId,2307894#utm_source=paste&amp;utm_medium=paste&amp;utm_campaign=firefox'),(8,15,'Jaszczurki','Jaszczurka zwinka (Lacerta agilis) to doÅ›Ä‡ pospolita w Polsce jaszczurka, piÄ™knie ubarwiona. Jest to najbardziej pospolity gad wystÄ™pujÄ…cy w Polsce. Ubarwienie jest zmienne. Grzbiet jest brÄ…zowy z rzÄ™dem plam, w Å›rodku kaÅ¼dej plamy jest nieregularna biaÅ‚a plamka. W okresie godowym samice majÄ… zielonÄ… stronÄ™ brzusznÄ…, a plamy czasowo zanikajÄ….\r\n\r\nNa udzie po stronie brzusznej znajduje siÄ™ 11-14 otwor&oacute;w gruczoÅ‚&oacute;w zapachowych, kt&oacute;re gÅ‚&oacute;wnie w okresie godowym wydzielajÄ… substancjÄ™ uÅ‚atwiajÄ…cÄ… odnajdywanie siÄ™ jaszczurek i identyfikacjÄ™ pÅ‚ci.\r\n\r\nJak wiÄ™kszoÅ›Ä‡ jaszczurek posiada zdolnoÅ›Ä‡ do regeneracji ogona.'),(9,18,'Krewetka','Krewetki, krewetki wÅ‚aÅ›ciwe[2] (Caridea) &ndash; morskie i sÅ‚odkowodne skorupiaki zaliczane do podrzÄ™du Pleocyemata z rzÄ™du dziesiÄ™cionog&oacute;w. ZwyczajowÄ… nazwÄ… krewetki okreÅ›lana jest teÅ¼ zaliczana do Caridea nadrodzina Palaemonoidea[3]. Opisano okoÅ‚o 2500 gatunk&oacute;w[2] klasyfikowanych w kilkunastu nadrodzinach. Wiele z nich poÅ‚awia siÄ™ w celach konsumpcyjnych.'),(10,2,'DddddddDAdsadsa','Krzysztof Skiba mocno krytykuje BeatÄ™ GosiewskÄ…\r\n\r\nKrzysztof Skiba w ostrych sÅ‚owach skrytykowaÅ‚ BeatÄ™ GosiewskÄ…, wdowÄ™ po PrzemysÅ‚awie Gosiewskim, kt&oacute;ry zginÄ…Å‚ w katastrofie smoleÅ„skiej. Muzykowi nie spodobaÅ‚o siÄ™, Å¼e kobieta ubiega siÄ™ o odszkodowanie. Co powiedziaÅ‚ artysta?\r\n\r\n'),(11,2,'adadq wdw q','Krzysztof Skiba mocno krytykuje BeatÄ™ GosiewskÄ…\r\n\r\nKrzysztof Skiba w ostrych sÅ‚owach skrytykowaÅ‚ BeatÄ™ GosiewskÄ…, wdowÄ™ po PrzemysÅ‚awie Gosiewskim, kt&oacute;ry zginÄ…Å‚ w katastrofie smoleÅ„skiej. Muzykowi nie spodobaÅ‚o siÄ™, Å¼e kobieta ubiega siÄ™ o odszkodowanie. Co powiedziaÅ‚ artysta?\r\n\r\n PoÅ‚Ä…cz z Facebook Å‚Ä…czÄ…c konta, odnajdziesz znajomych z Facebooka ZaÅ‚&oacute;Å¼ konto Zaloguj siÄ™\r\nfilmweb.pl\r\n\r\npremiery:\r\n\r\n        Pitbull. Niebezpieczne kobietyNowy poczÄ…tekDzieciÅ„stwo wodzaDobra Å¼onaZakwakaniBiuro detektywistyczne Lassego i Mai. Stella NostraBraveheart - Waleczne Serce\r\n\r\n    M&oacute;j Filmweb\r\n    repertuar kin\r\n    program TV\r\n    filmy\r\n    seriale\r\n    gry\r\n    zwiastuny\r\n    forum\r\n    MAGAZYN\r\n\r\nREKLAMA\r\nRecenzja filmu DzieÅ„ Å›wira (2002)\r\nÅšwir taki jak my\r\nEwelina Nasiadko\r\n\r\n    6 czerwca 2002 recenzja kinowa DzieÅ„ Å›wira (2002)\r\n\r\nAdam MiauczyÅ„ski, typowy Å¼yciowy nieudacznik, inteligent borykajÄ…cy siÄ™ z problemami natury emocjonalnej i erotycznej, jest bohaterem kilku film&oacute;w Koterskiego. W &quot;Ajlawju&quot; i &quot;Nic Å›miesznego&quot; graÅ‚ go Czarek Pazura. W obu filmach brakowaÅ‚o jednak przewrotnego dowcipu, tak docenionego przez widz&oacute;w &quot;Porno&quot;, kt&oacute;ry staÅ‚ siÄ™ hitem kinowym w 1990 roku. Koterski kazaÅ‚ czekaÄ‡ nam aÅ¼ 10 lat na powr&oacute;t jego Å›wietnej formy, krÄ™cÄ…c i Å›mieszny i szyderczy &quot;DzieÅ„ Åšwira&quot;. Kim jednak tym razem jest AdaÅ› MiauczyÅ„ski?\r\n\r\nAdaÅ› to 49-letni rozwiedziony nauczyciel jÄ™zyka polskiego. Boryka siÄ™ z przygnÄ™biajÄ…cÄ… go codziennoÅ›ciÄ… - samotnoÅ›ciÄ…, ludzkÄ… gÅ‚upotÄ…. Jego Å¼ycie to ustalone rytuaÅ‚y i nieprzerwana konwersacja z samym sobÄ….\r\n\r\nAdaÅ› jest numeromanem. PociÄ…ga siedem Å‚yk&oacute;w wody mineralnej, twarz obmywa do siedmiu razy, wsypuje do miseczki siedem garÅ›ci pÅ‚atk&oacute;w. Wszystko musi przebiegaÄ‡ zgodnie z planem i dokÅ‚adnie.\r\n\r\nAdaÅ› jest hipochondrykiem i lekomanem. Åyka prozac na chÄ™Ä‡ Å¼ycia, geriavit- na op&oacute;Åºnienie efekt&oacute;w starzenia siÄ™ i nootropil na poprawienie wydolnoÅ›ci m&oacute;zgu.\r\n\r\nAdaÅ› jest samotny. Towarzystwa dotrzymuje mu telewizor. Jednak i podczas tej czynnoÅ›ci dopadajÄ… go denerwujÄ…ce, burzliwe i bezproduktywne debaty sejmowe, tudzieÅ¼ nachalne, bezpruderyjne reklamy.\r\n\r\nAdaÅ› jest rozbitkiem. Jak we wszystkich filmach Koterskiego jest przykÅ‚adem upadku czÅ‚owieka, jego wewnÄ™trznego rozkÅ‚adu, objawiajÄ…cego siÄ™ na zewnÄ…trz rozpadem wiÄ™zi rodzinnych (tym razem AdaÅ› kocha syna, kt&oacute;ry mieszka jednak z matkÄ…) i niemoÅ¼noÅ›ciÄ… zaangaÅ¼owania siÄ™ w zwiÄ…zek. Emocje uwalniane sÄ… poprzez folgowanie fizycznym popÄ™dom, gÅ‚&oacute;wnie seksualnym (choÄ‡ akurat w &quot;Dniu Åšwira&quot; partnerem bohatera jest on sam&quot;).\r\n\r\nAdaÅ› ma ambicje. Chce byÄ‡ poetÄ…. Chce tworzyÄ‡, lecz wszystko mu w tym przeszkadza - sÄ…siad za gÅ‚oÅ›no sÅ‚uchajÄ…cy Chopina, facet strzygÄ…cy trawnik.\r\n\r\nAdaÅ› przede wszystkim jest Polakiem. Jego perypetie kryjÄ… bowiem treÅ›ci typowo polskie, dotyczÄ…ce przywar naszych rodak&oacute;w, rodzimych kompleks&oacute;w i ograniczeÅ„. JuÅ¼ o &quot;Nic Å›miesznego&quot; powiedziano: &quot;To film o naszym malkontenctwie, o niemoÅ¼noÅ›ciach, o marazmie inteligenta, kt&oacute;ry nie potrafi znaleÅºÄ‡ sposobu na Å¼ycie i czeka, Å¼e dobrobyt i szczÄ™Å›cie spÅ‚ynÄ… mu w rÄ™ce same&quot;. To samo moÅ¼na powiedzieÄ‡ o &quot;Dniu Åšwira&quot;.\r\n\r\nAdaÅ› jednak nie jest Å›wirem, jest po prostu wraÅ¼liwym czÅ‚owiekiem, kt&oacute;rego denerwuje to, Å¼e Å¼ycie skÅ‚ada siÄ™ w wiÄ™kszoÅ›ci z detali, Å¼e rzeczy wielkie to niewielki procent. Takim Å›wirem jest czasem kaÅ¼dy z nas. Sam Koterski stwierdziÅ‚, iÅ¼ chÄ™Ä‡ nakrÄ™cenia tego filmu wynikÅ‚a z jego osobistych doÅ›wiadczeÅ„ i cierpieÅ„ zwiÄ…zanych z normalnÄ… szarÄ… codziennÄ… rzeczywistoÅ›ciÄ…. WÅ‚aÅ›nie wobec tych najdrobniejszych, ale jakÅ¼e egzystencjalnych czynnoÅ›ci czÅ‚owiek stajÄ™ siÄ™ bezbronny, mimo iÅ¼ wielkie Å¼yciowe decyzje sÄ… dla niego poÅ¼Ä…danym wyzwaniem. JuÅ¼ MroÅ¼ek napisaÅ‚ kiedyÅ›, iÅ¼ &quot;najtrudniej jest przeÅ¼yÄ‡ nastÄ™pne 5 minut&quot;. Koterski nam o tym przypomina.\r\n\r\nKondrat w roli tytuÅ‚owej stworzyÅ‚ niezwykÅ‚Ä… kreacjÄ™, dalekÄ… od ostatnio granych postaci porucznika Halskiego czy ojca szukajÄ…cego odwetu za gwaÅ‚t c&oacute;rki. Jego AdaÅ› jest prawdziwie zmÄ™czonym Å¼yciem czÅ‚owiekiem, kt&oacute;rego nÄ™ka przyziemnoÅ›Ä‡, kt&oacute;rego sens Å¼ycia niszczony jest przez czynnoÅ›ci, kt&oacute;rym zmuszony jest poÅ›wiÄ™caÄ‡ czas. Jego bohater, choÄ‡ nieudacznik, dziÄ™ki znakomitej grze Kondrata jest na tyle silnÄ… osobowoÅ›ciÄ…, Å¼e mimo dÅ‚uÅ¼yzn scenariuszowych (a takie niestety siÄ™ zdarzajÄ…) i nieuniknionej powtarzalnoÅ›ci pewnych schemat&oacute;w udaje mu siÄ™ przyciÄ…gnÄ…Ä‡ i rozÅ›mieszyÄ‡ widza.\r\n\r\nPozostaje mi wiÄ™c tylko poleciÄ‡ film miÅ‚oÅ›nikom aktorskiego kunsztu Kondrata, fanom niewybrednego poczucia humoru, a takÅ¼e wszystkim tym, kt&oacute;rym Å¼ycie daje czasem po prostu w koÅ›Ä‡.\r\nCzy uznajesz tÄ™ recenzjÄ™ za pomocnÄ…? 84% uznaÅ‚o tÄ™ recenzjÄ™ za pomocnÄ… (200 gÅ‚os&oacute;w).\r\nprzeczytaj r&oacute;wnieÅ¼ recenzje uÅ¼ytkownik&oacute;w (6)zobacz wszystkie\r\n\r\n    antari18\r\n    Åšwir, czyli romantyk we wsp&oacute;Å‚czesnym Å›wiecie\r\n        antari18 25 czerwca 2008 \r\n    wuj_Jozef\r\n    M&oacute;j dzieÅ„\r\n        wuj_Jozef 16 wrzeÅ›nia 2006 \r\n    ramzes\r\n    Åšwir, a moÅ¼e jedyny normalny\r\n        ramzes 20 lutego 2007 \r\n    Lukis\r\n    SpecjalnoÅ›Ä‡ zakÅ‚adu\r\n        Lukis 29 sierpnia 2006 \r\n\r\nÅadowanie komentarzy...\r\nDzieÅ„ Å›wira\r\nDzieÅ„ Å›wira (2002)\r\nWidziaÅ‚em/-am, moja ocena:\r\nnajnowsze recenzjezobacz wszystkie\r\n\r\n    Ederly (2015)\r\n    W niewoli sn&oacute;w\r\n    Ederly\r\n        Bartosz Staszczyszyn 4 godziny temu \r\n    Alojzy (2016)\r\n    Telefony w mojej gÅ‚owie\r\n    Alojzy\r\n        Jakub Popielecki 4 godziny temu \r\n    Fantastyczne zwierzÄ™ta i jak je znaleÅºÄ‡ (2016)\r\n    Czarodziejska walizka\r\n    Fantastyczne zwierzÄ™ta i jak je znaleÅºÄ‡\r\n        Dorota Kostrzewa 5 godzin temu \r\n    Opieka domowa (2015)\r\n    Typowe Czechy\r\n    Opieka domowa\r\n        MichaÅ‚ Walkiewicz 5 godzin temu \r\n    Plac zabaw (2016)\r\n    Uderzenie prosto w twarz\r\n    Plac zabaw\r\n        Piotr Czerkawski wczoraj \r\n\r\nFilmweb magazynzobacz wszystkie\r\n\r\n    Potrzeba drzemki\r\n    GORÄ„CZKA ZÅOTA: Potrzeba drzemki\r\n        Felieton wczoraj \r\n    PERSONA: Punk kwitnÄ…cej wiÅ›ni\r\n        ArtykuÅ‚ 3 dni temu \r\n    HOTSPOT: Kobieta na kraÅ„cach Å›wiata\r\n        ArtykuÅ‚ 5 dni temu \r\n    PERSONA: Przyczynek do wywoÅ‚ywania duch&oacute;w\r\n        ArtykuÅ‚ 10 dni temu \r\n    POWIÄ˜KSZENIE: Kino Korei PoÅ‚udniowej a sprawa polska\r\n        ArtykuÅ‚ 13 dni temu \r\n\r\nPrzejdÅº na stronÄ™\r\nmobilnÄ…\r\nPobierz aplikacje Filmweb dla\r\niPhone, Android, Windows Phone\r\nAplikacja Filmwebu na iPhone Aplikacja Filmwebu na Androida Aplikacja Filmwebu na Windows Phone\r\nStrona gÅ‚&oacute;wna\r\nM&oacute;j Filmweb\r\nM&oacute;j Filmweb\r\nprofil\r\nrekomendacje\r\ngustopodobni\r\nrepertuar kin\r\nstrona gÅ‚&oacute;wna repertuaru\r\npremiery i zapowiedzi\r\nprogram TV\r\nfilmy\r\nstrona gÅ‚&oacute;wna film&oacute;w\r\nranking top500\r\nbaza film&oacute;w\r\nnewsy\r\nrecenzje\r\nnagrody\r\nbaza os&oacute;b kina\r\ndvd/blu-ray\r\nfilmweb poleca\r\nseriale\r\nstrona gÅ‚&oacute;wna seriali\r\nranking seriali\r\nbaza seriali\r\nnewsy o serialach\r\ngry\r\nstrona gÅ‚&oacute;wna gier\r\nranking gier\r\nbaza gier wideo\r\npremiery i zapowiedzi\r\nrecenzje gier\r\nzwiastuny\r\nzwiastuny filmowe\r\nprogramy filmwebu\r\nforum\r\nstrona gÅ‚&oacute;wna forum\r\nranking uÅ¼ytkownik&oacute;w\r\nkonkursy\r\nankiety\r\nquizy\r\nFWM Magazyn\r\n\r\n    dodaj film\r\n    dodaj serial\r\n    dodaj osobÄ™\r\n    dodaj grÄ™\r\n\r\nfilmweb Copyright &copy; 1998-2016 Filmweb sp. z o.o.\r\n\r\n    redakcjawydawcareklamaregulaminpolityka prywatnoÅ›cidostawca AUMnÅ»pomoc\r\n\r\no\r\n'),(12,2,'dqdqwdqd','&#039;dd&#039;ddd&quot;ddd&quot;dddddddd&#039;dddddddddddddd d  sfsdf sv .s.f 2341 &lt;&gt; f'),(13,2,'dqdwq','dwqdwqdwqdwqdq'),(14,2,'qweqweqwe','\r\n\r\nAntoni Macierewicz /Andrzej IwaÅ„czuk /Reporter\r\nAntoni Macierewicz /Andrzej IwaÅ„czuk /Reporter\r\n\r\nRzecznik Huty Stalowa Wola Bartosz Kopyto powiedziaÅ‚ dziennikarzom, Å¼e minister zapowiedziaÅ‚ koniec negocjacji ws. dostaw dla wojska 96 Krab&oacute;w, co jest najwiÄ™kszym do tej pory kontraktem w krajowej zbrojeni&oacute;wce.\r\nReklama\r\n\r\nMacierewicz na konferencji prasowej powiedziaÅ‚, Å¼e z dumÄ… patrzy na wyroby HSW, w tym na armatohaubicÄ™ Krab i samobieÅ¼ny moÅºdzierz Rak. DodaÅ‚, Å¼e cieszy siÄ™ z moÅ¼liwoÅ›ci eksportowych firmy. &quot;Ale nie ukrywam, Å¼e najbardziej cieszÄ™ siÄ™ z tego, Å¼e te armatohaubice Krab majÄ… donoÅ›noÅ›Ä‡ ponad 40 kilometr&oacute;w. To daje nam rzeczywiÅ›cie moÅ¼liwoÅ›Ä‡ skutecznej obrony. A o to chodzi&quot; - powiedziaÅ‚ szef MON.\r\n\r\n&quot;Te dziewiÄ™Ä‡ - odebranych na p&oacute;Å‚ roku przed terminem - sztuk Kraba najlepiej Å›wiadczy o tym, z jakÄ… determinacjÄ…, z jakÄ… gotowoÅ›ciÄ… jak najszybszego wyposaÅ¼enia Polski w najsprawniejszy i najskuteczniejszy sprzÄ™t, jak dobrze pracujecie, jak dobrze pracuje Huta Stalowa Wola&quot; - oceniÅ‚ Macierewicz, dziÄ™kujÄ…c ludziom pracy.\r\n&quot;Nie chodzi o bicie rekord&oacute;w&quot;\r\n\r\nMinister powiedziaÅ‚, Å¼e w przekazaniu Krab&oacute;w na p&oacute;Å‚ roku przed terminem nie chodzi o bicie rekord&oacute;w. &quot;Chodzi o to, Å¼eby sprostaÄ‡ narastajÄ…cemu zagroÅ¼eniu, kt&oacute;re nad PolskÄ… wisi. Chodzi o to, Å¼eby nasi potencjalni wrogowie wiedzieli, Å¼e my jesteÅ›my gotowi i Å¼e nigdy siÄ™ nie poddamy; tak jak wy, przygotowujÄ…c siÄ™ do pracy, nigdy siÄ™ nie poddawaliÅ›cie&quot; - powiedziaÅ‚ Macierewicz, zwracajÄ…c siÄ™ do zaÅ‚ogi i kierownictwa HSW.\r\n\r\n&quot;To, co siÄ™ zdarzyÅ‚o w ciÄ…gu ostatniego roku, to determinacja, by te prace byÅ‚y przede wszystkim realizowane polskimi rÄ™koma, byÅ›my tutaj w Polsce rozwijali przemysÅ‚ obronny i by staÅ‚ siÄ™ on gÅ‚&oacute;wnym noÅ›nikiem nowoczesnoÅ›ci i rozwoju nowoczesnej Polski&quot; - powiedziaÅ‚ szef MON.\r\n\r\nPierwsze egzemplarze armatohaubicy - jej wieÅ¼a jest produkowana na brytyjskiej licencji - otrzymaÅ‚y krajowe podwozie, kt&oacute;re okazaÅ‚o siÄ™ wadliwe. W 2012 r. armia otrzymaÅ‚a osiem woz&oacute;w. W trakcie pr&oacute;b eksploatacyjnych w blachach pojawiaÅ‚y siÄ™ pÄ™kniÄ™cia, kÅ‚opoty sprawiaÅ‚ ukÅ‚ad paliwowy, przegrzewaÅ‚ siÄ™ silnik. HSW miaÅ‚a dostarczyÄ‡ poprawione wozy, ale kolejne pr&oacute;by ze zmodyfikowanym podwoziem wykazaÅ‚y nowe problemy. W grudniu 2014 r. gÅ‚&oacute;wny producent armatohaubicy - naleÅ¼Ä…ca do Polskiej Grupy Zbrojeniowej Huta Stalowa Wola - podpisaÅ‚a umowÄ™ z poÅ‚udniowokoreaÅ„skÄ… firmÄ… Samsung Techwin w sprawie integracji wieÅ¼y w koreaÅ„skim podwoziem K9.Ze 120 Krab&oacute;w 36 miaÅ‚o otrzymaÄ‡ podwozia wyprodukowane w Korei, podwozia dla kolejnych 84 miaÅ‚o byÄ‡ wytworzonych na licencji w Polsce.\r\n\r\nW piÄ…tek w Stalowej Woli Macierewicz oÅ›wiadczyÅ‚: &quot;To podwozie nie jest z tektury, ono jest prawdziwe. Ono jest na licencji, ale jest realizowane ostatecznie tutaj&quot;.\r\n\r\nPrezes zarzÄ…du i dyr. generalny HSW Bernard Cichocki przemawiajÄ…c do zgromadzonych, w tym takÅ¼e zaÅ‚ogi HSW przypomniaÅ‚, Å¼e w przyszÅ‚ym roku przypada 80. rocznica powstania Centralnego OkrÄ™gu PrzemysÅ‚owego, kt&oacute;ry stworzyÅ‚ podwaliny rozwoju gospodarczego Rzeczpospolitej Polskiej.\r\n\r\n&quot;Oto dzisiaj, tutaj w Stalowej Woli, w podwalinie i sercu Centralnego OkrÄ™gu PrzemysÅ‚owego w II Rzeczpospolitej uruchamiamy na nowo potencjaÅ‚ polskiego przemysÅ‚u. M&oacute;wiono nam od szeregu lat, Å¼e to jest niemoÅ¼liwe, Å¼e tego siÄ™ nie da zrobiÄ‡, Å¼e stojÄ…ce za nami perÅ‚y polskiego przemysÅ‚u obronnego, kt&oacute;re bÄ™dÄ… wielkim hitem eksportowym, Å¼e tego siÄ™ nie da zrobiÄ‡, Å¼e to bÄ™dzie za wiele lat i Å¼e i tak trzeba bÄ™dzie dokupiÄ‡ za granicÄ…. Ot&oacute;Å¼ nie, one sÄ… robione w Polsce, juÅ¼ dzisiaj poszukiwane na caÅ‚ym Å›wiecie&quot; - m&oacute;wiÅ‚ Cichocki.\r\n&quot;NajwiÄ™ksze w historii Polski zam&oacute;wienie&quot;\r\n\r\nDodaÅ‚, Å¼e w oparciu o przemysÅ‚ obronny i o StalowÄ… WolÄ™ na nowo odbudowywany jest COP. Jak podkreÅ›liÅ‚, przygotowywane jest &quot;najwiÄ™ksze w historii Polski zam&oacute;wienie dla polskiego przemysÅ‚u obronnego&quot;, kt&oacute;re zbiegnie siÄ™ z rocznicÄ… powstania COP.\r\n\r\n&quot;To wyznacza najlepiej zmiany, kt&oacute;re na przestrzeni tego roku siÄ™ dokonaÅ‚y. To takÅ¼e w spos&oacute;b jednoznaczny pokazuje, iÅ¼ polski przemysÅ‚, Stalowa Wola, serce tego przemysÅ‚u, bÄ™dzie waÅ¼nym elementem na mapie bezpieczeÅ„stwa gospodarczego kraju, a ludzie tutaj mieszkajÄ…cy, tutaj pracujÄ…cy bÄ™dÄ… mieli poczucie stabilizacji i godnej pracy&quot; - zaznaczyÅ‚ prezes HSW.\r\n\r\n\r\nCzytaj wiÄ™cej na http://fakty.interia.pl/polska/news-szef-mon-to-poczatek-kontraktu-na-ponad-4-mld-zl,nId,2308745#utm_source=paste&amp;utm_medium=paste&amp;utm_campaign=firefox'),(15,2,'dqadqw qd ','\r\n\r\nAntoni Macierewicz /Andrzej IwaÅ„czuk /Reporter\r\nAntoni Macierewicz /Andrzej IwaÅ„czuk /Reporter\r\n\r\nRzecznik Huty Stalowa Wola Bartosz Kopyto powiedziaÅ‚ dziennikarzom, Å¼e minister zapowiedziaÅ‚ koniec negocjacji ws. dostaw dla wojska 96 Krab&oacute;w, co jest najwiÄ™kszym do tej pory kontraktem w krajowej zbrojeni&oacute;wce.\r\nReklama\r\n\r\nMacierewicz na konferencji prasowej powiedziaÅ‚, Å¼e z dumÄ… patrzy na wyroby HSW, w tym na armatohaubicÄ™ Krab i samobieÅ¼ny moÅºdzierz Rak. DodaÅ‚, Å¼e cieszy siÄ™ z moÅ¼liwoÅ›ci eksportowych firmy. &quot;Ale nie ukrywam, Å¼e najbardziej cieszÄ™ siÄ™ z tego, Å¼e te armatohaubice Krab majÄ… donoÅ›noÅ›Ä‡ ponad 40 kilometr&oacute;w. To daje nam rzeczywiÅ›cie moÅ¼liwoÅ›Ä‡ skutecznej obrony. A o to chodzi&quot; - powiedziaÅ‚ szef MON.\r\n\r\n'),(16,2,'qwd1 ed1','dudad /a dasd asd /asd '),(17,2,'dqwdq','qwd qw\r\n\r\n\r\n\r\ndqwd\r\n\r\n\r\ndwq\r\n\r\n\r\ndwq\r\n\r\ndq\r\nqdw\r\n\r\n\r\ndq\r\n\r\nwq\r\n\r\ndqw\r\n\r\ndwq\r\nddddddddddddddddddddwq\r\n'),(18,2,'qwdqd','dadqw \\n qdwq q dwq /n qwdq qd \\n'),(23,0,'ascascascasca','scacascasc'),(24,0,'wqdqwd','qwdqdwqd'),(25,0,'dsadasd','asdasdasd'),(26,0,'casdsad','asdasdasd'),(27,0,'wefewf','wefwefwef'),(28,2,'22222','sadwefewfw'),(29,55,'edqwedwqwq','dqwdwqdwqdwqdwqdwqdwq'),(30,111,'111','111'),(31,333,'333','333'),(32,3333,'3333','3333'),(58,2,'dasdad','asdasd'),(59,2,'33333','5555'),(60,2,'33333','5555'),(61,2,'Alaaa','ma kota'),(62,20,'vsdvds','vdsvdsvds'),(63,2,'dqwdwqd','1222222222223213213123'),(64,2,'1234556','987654321');
/*!40000 ALTER TABLE `Wiadomosc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id_log` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `ip` varchar(64) NOT NULL,
  `przeglo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_log`,`timestamp`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8
/*!50100 PARTITION BY RANGE (YEAR(timestamp))
(PARTITION p0 VALUES LESS THAN (2013) ENGINE = InnoDB,
 PARTITION p1 VALUES LESS THAN (2014) ENGINE = InnoDB,
 PARTITION p2 VALUES LESS THAN (2015) ENGINE = InnoDB,
 PARTITION p3 VALUES LESS THAN (2016) ENGINE = InnoDB,
 PARTITION p4 VALUES LESS THAN MAXVALUE ENGINE = InnoDB) */;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'2016-11-13 00:00:00','',''),(2,'2016-11-13 00:00:00','',''),(3,'2016-11-13 00:00:00','',''),(4,'2016-11-13 00:00:00','',''),(5,'2016-11-13 00:00:00','',''),(6,'2016-11-13 00:00:00','',''),(7,'2016-11-13 22:56:14','',''),(8,'2016-11-13 23:53:00','',''),(9,'2016-11-14 00:11:26','',''),(10,'2016-11-14 07:21:03','',''),(11,'2016-11-14 07:57:19','',''),(12,'2016-11-14 08:21:29','',''),(13,'2016-11-14 08:27:47','',''),(14,'2016-11-14 08:46:56','',''),(15,'2016-11-14 10:43:27','',''),(16,'2016-11-14 11:13:07','',''),(17,'2016-11-14 11:19:27','',''),(18,'2016-11-14 11:28:08','',''),(19,'2016-11-14 11:37:54','',''),(20,'2016-11-14 12:33:00','',''),(21,'2016-11-14 12:56:13','',''),(22,'2016-11-14 13:13:06','',''),(23,'2016-11-14 13:47:45','',''),(24,'2016-11-14 13:59:20','',''),(25,'2016-11-14 14:02:53','',''),(26,'2016-11-14 15:26:45','',''),(27,'2016-11-14 18:42:31','',''),(28,'2016-11-14 18:42:56','',''),(29,'2016-11-14 18:52:52','',''),(30,'2016-11-14 18:54:19','',''),(31,'2016-11-14 19:11:25','',''),(32,'2016-11-14 20:14:58','',''),(33,'2016-11-14 20:29:01','',''),(34,'2016-11-14 21:09:07','',''),(35,'2016-11-14 21:37:03','',''),(36,'2016-11-14 22:13:32','',''),(37,'2016-11-14 23:31:16','',''),(38,'2016-11-15 00:28:26','',''),(39,'2016-11-15 00:49:53','',''),(40,'2016-11-15 20:24:39','',''),(41,'2016-11-16 16:55:02','',''),(42,'2016-11-16 18:28:43','',''),(43,'2016-11-16 18:51:47','',''),(44,'2016-11-16 19:01:45','',''),(45,'2016-11-16 22:00:50','',''),(46,'2016-11-16 22:25:26','',''),(47,'2016-11-16 22:42:47','',''),(48,'2016-11-16 23:00:04','',''),(49,'2016-11-16 23:16:21','',''),(50,'2016-11-16 23:34:49','',''),(51,'2016-11-16 23:39:28','',''),(52,'2016-11-16 23:55:10','',''),(53,'2016-11-17 00:01:12','',''),(54,'2016-11-17 00:04:41','',''),(55,'2016-11-17 00:04:48','',''),(56,'2016-11-17 00:06:39','',''),(57,'2016-11-17 00:07:43','',''),(58,'2016-11-17 00:24:39','',''),(59,'2016-11-17 00:28:18','',''),(60,'2016-11-17 00:28:56','',''),(61,'2016-11-17 00:30:49','',''),(62,'2016-11-17 00:31:07','',''),(63,'2016-11-17 00:31:27','',''),(64,'2016-11-17 00:49:25','',''),(65,'2016-11-17 00:50:32','',''),(66,'2016-11-17 00:50:52','',''),(67,'2016-11-17 00:57:58','',''),(68,'2016-11-17 01:17:29','',''),(69,'2016-11-17 01:34:58','',''),(70,'2016-11-17 12:06:39','',''),(71,'2016-11-17 12:10:02','',''),(72,'2016-11-17 12:13:36','',''),(73,'2016-11-17 12:30:30','',''),(74,'2016-11-17 12:48:55','',''),(75,'2016-11-17 16:08:50','',''),(76,'2016-11-17 19:14:44','',''),(77,'2016-11-17 19:31:52','',''),(78,'2016-11-17 19:46:42','',''),(79,'2016-11-17 19:47:15','',''),(80,'2016-11-17 20:04:22','',''),(81,'2016-11-17 20:21:35','',''),(82,'2016-11-17 20:28:04','',''),(83,'2016-11-17 20:30:00','',''),(84,'2016-11-17 20:31:23','',''),(85,'2016-11-17 20:46:23','',''),(86,'2016-11-17 20:47:29','',''),(87,'2016-11-17 20:55:05','',''),(88,'2016-11-17 21:01:07','',''),(89,'2016-11-17 21:11:10','',''),(90,'2016-11-17 21:33:00','',''),(91,'2016-11-17 21:34:46','',''),(92,'2016-11-17 21:40:19','',''),(93,'2016-11-18 21:51:41','',''),(94,'2016-11-18 21:59:04','',''),(95,'2016-11-18 21:59:40','',''),(96,'2016-11-18 22:09:22','',''),(97,'2016-11-18 22:09:31','',''),(98,'2016-11-18 22:09:55','',''),(99,'2016-11-18 22:29:52','',''),(100,'2016-11-18 22:36:12','',''),(101,'2016-11-18 22:37:04','',''),(102,'2016-11-18 22:38:44','',''),(103,'2016-11-18 22:39:06','',''),(104,'2016-11-18 22:39:28','',''),(105,'2016-11-18 22:39:53','',''),(106,'2016-11-18 22:40:35','',''),(107,'2016-11-18 22:41:14','',''),(108,'2016-11-18 22:55:05','',''),(109,'2016-11-18 22:55:42','',''),(110,'2016-11-18 23:15:16','',''),(111,'2016-11-18 23:32:25','',''),(112,'2016-11-19 00:49:20','',''),(113,'2016-11-19 01:07:35','',''),(114,'2016-11-19 01:07:56','',''),(115,'2016-11-19 01:24:51','',''),(116,'2016-11-19 01:25:02','',''),(117,'2016-11-19 12:42:10','',''),(118,'2016-11-19 13:50:35','',''),(119,'2016-11-19 13:50:56','',''),(120,'2016-11-19 13:51:56','',''),(121,'2016-11-19 13:52:05','',''),(122,'2016-11-19 13:57:51','',''),(123,'2016-11-19 14:01:56','',''),(124,'2016-11-19 14:04:47','',''),(125,'2016-11-19 16:01:57','',''),(126,'2016-11-19 16:02:03','',''),(127,'2016-11-19 16:04:09','',''),(128,'2016-11-19 16:04:19','',''),(129,'2016-11-19 17:07:33','',''),(130,'2016-11-19 17:07:45','',''),(131,'2016-11-19 17:21:01','',''),(132,'2016-11-19 17:22:15','',''),(133,'2016-11-19 17:23:09','',''),(134,'2016-11-19 17:23:24','',''),(135,'2016-11-19 17:31:16','',''),(136,'2016-11-19 17:38:13','',''),(137,'2016-11-19 17:45:50','',''),(138,'2016-11-19 18:03:07','',''),(139,'2016-11-19 18:03:16','',''),(140,'2016-11-19 22:09:10','',''),(141,'2016-11-19 22:09:19','',''),(142,'2016-11-19 22:12:04','',''),(143,'2016-11-19 22:14:35','',''),(144,'2016-11-19 22:14:47','',''),(145,'2016-11-19 22:17:35','',''),(146,'2016-11-19 22:17:57','',''),(147,'2016-11-19 22:26:52','',''),(148,'2016-11-19 22:41:36','',''),(149,'2016-11-19 22:41:53','',''),(150,'2016-11-19 22:46:24','',''),(151,'2016-11-19 22:46:40','',''),(152,'2016-11-19 22:51:12','',''),(153,'2016-11-19 22:51:27','',''),(154,'2016-11-19 22:51:32','',''),(155,'2016-11-19 22:55:53','',''),(156,'2016-11-19 22:58:04','',''),(157,'2016-11-19 22:58:15','',''),(158,'2016-11-19 22:58:43','',''),(159,'2016-11-19 22:58:58','',''),(160,'2016-11-19 23:19:46','',''),(161,'2016-11-20 10:39:30','',''),(162,'2016-11-20 11:04:42','',''),(163,'2016-11-20 11:04:57','',''),(164,'2016-11-21 13:32:34','',''),(165,'2016-11-21 13:33:30','',''),(166,'2016-11-21 13:36:45','',''),(167,'2016-11-21 13:38:38','',''),(168,'2016-11-21 13:43:26','149.156.136.41','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(169,'2016-11-21 13:45:55','149.156.136.41','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(170,'2016-11-21 13:47:40','149.156.136.41','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(171,'2016-11-21 13:51:00','149.156.136.41','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(172,'2016-11-21 13:53:51','149.156.136.41','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(173,'2016-11-21 13:55:10','149.156.136.41','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(174,'2016-11-21 14:01:06','149.156.136.43','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),(175,'2016-11-21 14:01:39','149.156.136.43','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),(176,'2016-11-21 15:30:30','94.254.146.220','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(177,'2016-11-21 15:30:43','94.254.146.220','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(178,'2016-11-21 15:30:57','94.254.146.220','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(179,'2016-11-21 19:11:36','94.254.146.220','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(180,'2016-11-22 03:08:45','94.254.144.47','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(181,'2016-11-22 04:02:54','94.254.144.47','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(182,'2016-11-22 04:20:55','94.254.144.47','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(183,'2016-11-22 04:25:28','94.254.144.47','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0'),(184,'2016-11-22 04:31:53','94.254.144.47','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repw`
--

DROP TABLE IF EXISTS `repw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repw` (
  `id_repw` int(11) NOT NULL AUTO_INCREMENT,
  `kod` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `aktywacja` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_repw`),
  KEY `kod` (`kod`),
  KEY `kod_2` (`kod`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repw`
--

LOCK TABLES `repw` WRITE;
/*!40000 ALTER TABLE `repw` DISABLE KEYS */;
INSERT INTO `repw` VALUES (11,'282244733','0','kacper123');
/*!40000 ALTER TABLE `repw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uzytkownicy`
--

DROP TABLE IF EXISTS `uzytkownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prawa` tinyint(1) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `kod` varchar(256) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `kod` (`kod`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uzytkownicy`
--

LOCK TABLES `uzytkownicy` WRITE;
/*!40000 ALTER TABLE `uzytkownicy` DISABLE KEYS */;
INSERT INTO `uzytkownicy` VALUES (1,1,'baid','$2y$10$aVNwA0yVyyd/69opzcSI1egDR4g1OfTFhviyS1Afj1ha.t/sMs7s.','baid@o2.pl',''),(2,0,'baid1','$2y$10$3WmMJqXgF7/GC2pCSm4AfOekNtkf0GvH1DoyrfYrEWPvc1RaYQryO','baid1@o2.pl',''),(4,0,'baid3','$2y$10$R.mSl2Hjju0RM3Bo7a4eCO0uZM38WfIX9qeTeMjYiK3KjvGMgrY7y','baid3@o2.pl',''),(6,0,'bambucza','$2y$10$4JTV0indci1rBhxWTeUymeKzM8Ay3ZRFu0N3iwXPXcQvR8kXZbFGe','leeleenatie@gmail.com',''),(7,0,'test','$2y$10$dOg2hnM5KJ62Vi1QmPn26.tjXQd3pjHjoAVFCTdBKH7yUxRDdmsr6','test@test.pl',''),(8,0,'dddddd','$2y$10$3Tx56ipTJaVjN92PGWSu3e5hrnJxRUcNc1smg.w0jX1w8NJSMmHaa','ddd@o2.pl',''),(9,0,'baid10','$2y$10$SJ8UoHuaB2l2Q.qDyzvx/.xZS/IeFY/dEbxvKHougKD6m0p4arPWm','baid10@o2.pl',''),(10,0,'darek1','$2y$10$UuLRQwYKLMDZREoIDRE1xusqh7z.IE3rTJBsClLiJt67yjL6IQBnO','DDDD@GMAIL.COM',''),(11,0,'tytus','$2y$10$wG6u0yZkkGBmFgicerATL.0h92YNSSsvBvm6i0qabJ/N5VVcxpDvW','tytus@o2.pl',''),(15,0,'Kordulia','$2y$10$IQBA4uRxSIU/alUOOoyfROMCqaKs.mNY1EdjYa3yHPTscxiFGNR7y','kordulia1@wp.pl',''),(16,0,'Szczypiorczi2','$2y$10$C1yzyzik/SHm8nR1PcYaHONF2ZgMDB8oIjgCEgbNYY1EDBrGancu2','szczypiorczi@gmail.com',''),(17,0,'egeszege','$2y$10$46HXKoB501nhxfIVS83OMeSjZyb6aSB1VLyaoOF6QFcksFnTRgQLe','egeszege@gmail.com',''),(18,0,'krewetkowski','$2y$10$E.0TT3i3lXoJXl/y5rx.uO0HI1mUUMAUFFXmd5nmXQl7S3SW6wQyi','kreweta@wp.pl',''),(19,0,'danielpiotr','$2y$10$2iOUhZ/VI/Aiw644PUKABuW.kgPWoSAh2KUZUGENupkV19q6yw5oq','daniel@piotr.pl',''),(20,0,'kasperser','$2y$10$Fij6l6dq297mIi51gkPzJuT/uA6ENaq9lrccOqpsqT2bKbHWEYsIW','kaserser@o2.pl',''),(24,0,'natalkaf','$2y$10$skmacqCKIHIurXsD34vBJOlywxUCpR.7bM7QIVxnmSgzBkjCFdKGa','sitwfish@wp.pl','973334936'),(25,0,'marek123','$2y$10$XbXN3QDnitYSSECEdn.iy.j/uXK6a9tfqnA2jM8orCoJz0V5pmQBa','mostowiak_marek233@o2.pl','1596743881'),(26,0,'baid43','$2y$10$1SPnTrdz/nMR9u/7dtQvl.yllunnxI.TeG43Q7Vyy248yoIXoj4cG','baid43@o2.pl','1313454587'),(27,0,'baid33','$2y$10$QJWEeyruFiIoaDg9S5XRieY9ww8sB/IHWwn.fvUSWai948XZpj7tC','baid33@o2.pl','2079337220'),(48,0,'Frings','$2y$10$XO/YXdqZ8nALshlCfw.EhO73a3Gya8wYKp56zd/9ul7swyT7ShOxS','Marcinwoloszz@gmail.com','751077431'),(49,0,'kacper123','$2y$10$F45l35sAAzDn3Vz89TzfmewJUfchVKFLsLaYUu7VRuoG8.WD8m5dS','kacperwojnar3@gmail.com','901642902');
/*!40000 ALTER TABLE `uzytkownicy` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`m1559_baid`@`%.devil`*/ /*!50003 TRIGGER `save` AFTER UPDATE ON `uzytkownicy` FOR EACH ROW begin
insert into uzytkownicy_history values(OLD.id, OLD.prawa,OLD.user,OLD.pass,OLD.email,CURRENT_TIMESTAMP);
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uzytkownicy_history`
--

DROP TABLE IF EXISTS `uzytkownicy_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uzytkownicy_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prawa` tinyint(1) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `kod` varchar(256) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uzytkownicy_history`
--

LOCK TABLES `uzytkownicy_history` WRITE;
/*!40000 ALTER TABLE `uzytkownicy_history` DISABLE KEYS */;
INSERT INTO `uzytkownicy_history` VALUES (10,0,'darek','$2y$10$UuLRQwYKLMDZREoIDRE1xusqh7z.IE3rTJBsClLiJt67yjL6IQBnO','DDDD@GMAIL.COM','2016-11-22','');
/*!40000 ALTER TABLE `uzytkownicy_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `widok`
--

DROP TABLE IF EXISTS `widok`;
/*!50001 DROP VIEW IF EXISTS `widok`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `widok` AS SELECT 
 1 AS `id_notatka`,
 1 AS `id`,
 1 AS `notatka`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `widok2`
--

DROP TABLE IF EXISTS `widok2`;
/*!50001 DROP VIEW IF EXISTS `widok2`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `widok2` AS SELECT 
 1 AS `user`,
 1 AS `notatka`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `widok`
--

/*!50001 DROP VIEW IF EXISTS `widok`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`m1559_baid`@`%.devil` SQL SECURITY DEFINER */
/*!50001 VIEW `widok` AS select `Notatka`.`id_notatka` AS `id_notatka`,`uzytkownicy`.`id` AS `id`,`Notatka`.`notatka` AS `notatka` from (`uzytkownicy` join `Notatka`) where ((`Notatka`.`id_uzytkownicy` = `uzytkownicy`.`id`) and (`uzytkownicy`.`user` = 'baid')) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `widok2`
--

/*!50001 DROP VIEW IF EXISTS `widok2`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`m1559_baid`@`%.devil` SQL SECURITY DEFINER */
/*!50001 VIEW `widok2` AS select `uzytkownicy`.`user` AS `user`,`Notatka`.`notatka` AS `notatka` from (`Notatka` join `uzytkownicy` on((`uzytkownicy`.`id` = `Notatka`.`id_uzytkownicy`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-06 17:18:11
