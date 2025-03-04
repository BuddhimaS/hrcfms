-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_hrcfms
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pickguests`
--

DROP TABLE IF EXISTS `pickguests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pickguests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirm_email` varchar(255) NOT NULL,
  `special_request` text DEFAULT NULL,
  `arrival_time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickguests`
--

LOCK TABLES `pickguests` WRITE;
/*!40000 ALTER TABLE `pickguests` DISABLE KEYS */;
INSERT INTO `pickguests` VALUES (1,'Mr.','chami','fernando','Sri lanka','0767656456','chami@mailinator.com','chami@mailinator.com','No special, Just a simple request','Morning','2025-02-28 21:03:53','2025-02-28 21:03:53'),(2,'Mr.','Diwya','maneesha','Sri Lanka','0767656453','diwya@gmail.com','diwya@gmail.com','No special','Morning','2025-02-28 21:06:28','2025-02-28 21:06:28'),(3,'Mr.','Nimmi','Dahanayaka','Sri Lanka','0767656543','nimmi@gmail.com','nimmi@gmail.com','Normal request','Morning','2025-02-28 21:15:38','2025-02-28 21:15:38'),(4,'Mr.','kawshi','dimaya','Sri Lanka','0767656456','kawshi@gmail.com','kawshi@gmail.com','No Special','Morning','2025-02-28 21:18:28','2025-02-28 21:18:28'),(5,'Mr.','piwi','sutharaya','Sr Lanka','0756565654','sutharya@gmail.com','sutharya@gmail.com','No special','Morning','2025-02-28 21:19:57','2025-02-28 21:19:57'),(6,'Mr.','sonya','dimangi','india','076765423','sonya@gmail.com','sonya@gmail.com','No special','Morning','2025-02-28 21:25:36','2025-02-28 21:25:36'),(7,'Choose...','piwithuru','pimba','Sri Lanka','0767656456','piwithuru@gmail.com','piwithuru@gmail.com','General request','Morning','2025-02-28 21:34:41','2025-02-28 21:34:41'),(8,'Mr.','nimsa','diwya','Sri Lanka','0767656456','diwya@gmail.com','diwya@gmail.com','No special','Evening','2025-02-28 22:10:32','2025-02-28 22:10:32'),(9,'Mr.','dimmya','sanidya','Sri Lanka','0767656541','dimya@gmail.com','dimya@gmail.com','general request','Afternoon','2025-02-28 22:13:10','2025-02-28 22:13:10'),(10,'Mr.','sinya','niyomlli','Sri Lanaka','0767656456','sinya@gmail.com','sinya@gmail.com','Special breakfast','Evening','2025-02-28 22:24:31','2025-02-28 22:24:31'),(11,'Mr.','nimnadya','sandeepani','Sr Lanka','0767656456','sandeepani@gmail.com','sandeepani@gmail.com','sandeepani','Evening','2025-02-28 22:27:11','2025-02-28 22:27:11'),(12,'Mr.','dimanga','sandiya','Sri Lanka','0716767567','sandiya@gmail.com','sandiya@gmail.com','No special','Evening','2025-02-28 22:46:08','2025-02-28 22:46:08'),(13,'Mr.','dimansi','amurya','Sri Lanka','0767676567','dimansi@gmail.com','dimansi@gmail.com','No special request','Evening','2025-02-28 22:50:59','2025-02-28 22:50:59'),(14,'Mr.','diwya','nimasha','Sri lanka','0716756543','nimna@gmail.com','nimna@gmail.com','No special request','Evening','2025-03-01 00:32:13','2025-03-01 00:32:13'),(15,'Mr.','diwya','nimasha','Sri lanka','0716756543','nimna@gmail.com','nimna@gmail.com','No special request','Evening','2025-03-01 00:32:13','2025-03-01 00:32:13'),(16,'Mr.','eef','ff','Sri Lanka','0713744878','diwyan@gmail.com','diwyan@gmail.com','No Special','Evening','2025-03-01 00:35:35','2025-03-01 00:35:35'),(17,'Mr.','nimansa','prasadini','Sri Lanka','0767656456','diwangini@gmail.com','diwangini@gmail.com','no special','Morning','2025-03-01 11:56:00','2025-03-01 11:56:00'),(18,'Mr.','errr','rrr','wee','rrr','sewwa@mailinator.com','sewwa@mailinator.com','test','Morning','2025-03-01 12:19:42','2025-03-01 12:19:42'),(19,'Mrs.','piyushani','madha','Sri Lanka','0713744878','piyushani@gmail.com','piyushani@gmail.com','No special request','Evening','2025-03-01 12:33:28','2025-03-01 12:33:28'),(20,'Mrs.','piyushani','madha','Sri Lanka','0713744878','piyushani@gmail.com','piyushani@gmail.com','No special request','Evening','2025-03-01 12:34:08','2025-03-01 12:34:08'),(21,'Mrs.','dimangi','karunanayaka','Sri lanka','0767676567','dimangi@gmail.com','dimangi@gmail.com','No Special bro','Afternoon','2025-03-01 12:44:16','2025-03-01 12:44:16'),(22,'Mr.','nimdee','kumma','Sri Lanka','0767656456','kumma@gmail.com','kumma@gmail.com','No special request','Morning','2025-03-01 12:51:29','2025-03-01 12:51:29'),(23,'Mr.','nimdee','kumma','Sri Lanka','0767656456','kumma@gmail.com','kumma@gmail.com','No special request','Morning','2025-03-01 13:12:57','2025-03-01 13:12:57'),(24,'Mr.','Buddhima','Sewwandi','Sri Lanka','07676765456','buddhima707@gmail.com','buddhima707@gmail.com','test','Morning','2025-03-01 21:00:57','2025-03-01 21:00:57'),(25,'Mr.','dihase','nisath','Sri lanka','0767656456','nimsath@gmail.com','nimsath@gmail.com','nimsath','Morning','2025-03-01 21:23:10','2025-03-01 21:23:10'),(26,'Mr.','Diwya','dehani','Sri Lanka','0767656543','dehani@gmail.com','dehani@gmail.com','Special meal arrangement','Evening','2025-03-01 23:17:49','2025-03-01 23:17:49'),(27,'Mr.','niesga','sadakalani','Sri Lanka','0787676564','sadakalani@gmail.com','sadakalani@gmail.com','No Special','Morning','2025-03-01 23:24:20','2025-03-01 23:24:20'),(28,'Mr.','Madura','prabashini','Sri Lanka','0767676545','prabashi@gmail.com','prabashi@gmail.com','Special purpose','Morning','2025-03-01 23:39:13','2025-03-01 23:39:13'),(29,'Mr.','dimangya','niyali','Sri Lanka','0767656431','niyoli@gmail.com','niyoli@gmail.com','no special','Afternoon','2025-03-02 00:16:09','2025-03-02 00:16:09'),(30,'Mr.','sansha','suhansa','Sri Lanka','0767656432','suhansa@gmail.com','suhansa@gmail.com','No special','Afternoon','2025-03-02 00:26:54','2025-03-02 00:26:54'),(31,'Mr.','Dehansa','sandili','Sri Lanka','0787654342','sadili@gmail.com','sadili@gmail.com','No Specail','Evening','2025-03-02 00:29:18','2025-03-02 00:29:18'),(32,'Mr.','nimmi','sarini','Sr Lanka','0714576543','sarini@gmail.com','sarini@gmail.com','No special','Morning','2025-03-02 00:39:38','2025-03-02 00:39:38'),(33,'Mr.','demantha','nelutha','Sri Lanka','076765456','nelitha@gmail.com','nelitha@gmail.com','nelitha','Afternoon','2025-03-02 00:52:34','2025-03-02 00:52:34'),(34,'Mr.','sihansa','herushini','Sri Lanka','0787867543','sihansa@gmail.com','sihansa@gmail.com','No specail','Evening','2025-03-02 01:28:48','2025-03-02 01:28:48'),(35,'Mr.','Nisansala','nirhani','Sri Lanka','0767676543','nirhani@gmail.com','nirhani@gmail.com','No special','Morning','2025-03-02 03:40:20','2025-03-02 03:40:20'),(36,'Ms.','sadashanthi','sihansa','Sri lanka','0787867543','sadas@gmail.com','sadas@gmail.com','No special','Morning','2025-03-02 05:17:49','2025-03-02 05:17:49'),(37,'Mr.','ninadi','dehansa','Sri Lanka','0767656453','dehansa@gmail.com','dehansa@gmail.com','No special','Morning','2025-03-02 05:41:33','2025-03-02 05:41:33'),(38,'Mr.','Nimega','sadsarani','Sri Lanka','0767656456','sadi@gmail.com','sadi@gmail.com','No specail','Morning','2025-03-02 06:11:29','2025-03-02 06:11:29'),(39,'Mr.','Dahanmsa','gayandi','Sri Lanka','0715656765','dahamsa@gmail.com','dahamsa@gmail.com','No special request','Morning','2025-03-02 09:27:43','2025-03-02 09:27:43'),(40,'Mr.','Nihansa','sandayani','Sri lanka','0715676543','nihansa@gmail.com','nihansa@gmail.com','No Special','Afternoon','2025-03-02 12:52:32','2025-03-02 12:52:32'),(41,'Mr.','nethasha','mihinika','Sri Lanka','0713744878','netha@gmail.com','netha@gmail.com','No','Morning','2025-03-03 07:07:53','2025-03-03 07:07:53'),(42,'Mr.','nimadi','sensala','Sri lanka','0767656543','sensala@gmail.com','sensala@gmail.com','No','Morning','2025-03-03 07:52:53','2025-03-03 07:52:53'),(43,'Mr.','nimadi','sensala','Sri lanka','0767656543','sensala@gmail.com','sensala@gmail.com','No','Morning','2025-03-03 07:54:21','2025-03-03 07:54:21'),(44,'Mr.','kawith','sadishini','Sri lanka','0767656543','kawith@gmail.com','kawith@gmail.com','No Special faimily','Morning','2025-03-03 10:38:08','2025-03-03 10:38:08'),(45,'Mr.','dehani','peris','Sri Lanka','0767656765','dehani@gmail.com','dehani@gmail.com','No Specail','Afternoon','2025-03-03 10:43:45','2025-03-03 10:43:45'),(46,'Mr.','nihansa','sathsarani','Sri lanka','0714543567','nihansa@gmail.com','nihansa@gmail.com','No special request','Morning','2025-03-03 23:18:21','2025-03-03 23:18:21'),(47,'Mr.','sankalpa','nithasi','Sri Lanka','0767656453','sankalpa@gmail.com','sankalpa@gmail.com','No','Morning','2025-03-03 23:44:31','2025-03-03 23:44:31'),(48,'Mr.','nimaya','hiroshini','Sri Lanka','0767656765','nimaya6@gmail.com','nimaya6@gmail.com','no','Morning','2025-03-04 01:58:18','2025-03-04 01:58:18'),(49,'Mr.','nimaya','sadakanthi','Sri Lanka','0767656567','nimaya89@gmail.com','nimaya89@gmail.com','No special','Morning','2025-03-04 02:06:13','2025-03-04 02:06:13'),(50,'Mr.','Lahiru','Navaratna','Singapore','0173031690','kehelmala69@gmail.com','kehelmala69@gmail.com','i need an iron','Afternoon','2025-03-04 05:06:51','2025-03-04 05:06:51');
/*!40000 ALTER TABLE `pickguests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:28
