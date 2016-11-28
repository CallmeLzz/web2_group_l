-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: web2
-- ------------------------------------------------------
-- Server version	5.7.9

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `category_title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `category_type` int(2) NOT NULL,
  `category_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES ('cate03','round cove suite',3,'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat','images/detail/content-room-1024x768.jpg'),('cate05','signature junior suite',5,'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat','images/detail/content-rooms-3.jpg'),('cate01','Rooms Listing',1,'','images/bg-header-6.jpg'),('cate02','Unam incolunt Belgae, aliam Aquitani, tertiam. Idque Caesaris facere',2,'Salutantibus vitae elit libero, \n	a pharetra augue. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. \n    Ut enim ad minim veniam, quis nostrud exercitation. Unam incolunt Belgae, aliam Aquitani, tertiam. Unam incolunt Belgae, \n    aliam Aquitani, tertiam. Tityre, tu patulae recubans sub tegmine fagi dolor. Curabitur est gravida.','images/content-rooms-4.jpg');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-28 19:47:49
