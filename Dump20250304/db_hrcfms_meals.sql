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
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `meal_type` varchar(255) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meals`
--

LOCK TABLES `meals` WRITE;
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
INSERT INTO `meals` VALUES (1,'Breakfast at Central',1,NULL,'2025-02-23 01:34:17','2025-02-23 01:34:17'),(2,'Breakfast at Central',1,NULL,'2025-02-23 01:41:25','2025-02-23 01:41:25'),(3,'Breakfast at Central',2,'2025-02-10','2025-02-23 01:52:07','2025-02-23 01:52:07'),(4,'Breakfast at Central',1,'2025-02-13','2025-02-28 07:24:34','2025-02-28 07:24:34'),(5,'Breakfast at Central-3200',3,'2025-03-03','2025-03-01 12:44:35','2025-03-01 12:44:35'),(6,'Breakfast at Central-3200',2,'2025-03-04','2025-03-01 13:26:26','2025-03-01 13:26:26'),(7,'Breakfast at Central-3200',2,'2025-03-28','2025-03-01 13:26:41','2025-03-01 13:26:41'),(8,'Breakfast at Central-3200',2,'2025-03-13','2025-03-01 21:44:45','2025-03-01 21:44:45'),(9,'Lunch at Central-5700',2,'2025-03-06','2025-03-01 21:45:33','2025-03-01 21:45:33'),(10,'Lunch at Central-5700',2,'2025-03-04','2025-03-01 21:45:45','2025-03-01 21:45:45'),(11,'Breakfast at Central-3200',2,'2025-03-17','2025-03-01 23:17:57','2025-03-01 23:17:57'),(12,'Breakfast at Central-3200',2,'2025-03-04','2025-03-01 23:39:21','2025-03-01 23:39:21'),(13,'Breakfast at Central-3200',2,'2025-03-03','2025-03-02 00:16:19','2025-03-02 00:16:19'),(14,'Breakfast at Central-3200',2,'2025-03-03','2025-03-02 00:27:07','2025-03-02 00:27:07'),(15,'Breakfast at Central-3200',2,'2025-03-03','2025-03-02 00:29:28','2025-03-02 00:29:28'),(16,'Breakfast at Central-3200',2,'2025-03-03','2025-03-02 00:39:47','2025-03-02 00:39:47'),(17,'Breakfast at Central-3200',1,'2025-03-04','2025-03-02 00:52:43','2025-03-02 00:52:43'),(18,'Breakfast at Central-3200',2,'2025-03-04','2025-03-02 01:28:59','2025-03-02 01:28:59'),(19,'Breakfast at Central-3200',2,'2025-03-10','2025-03-02 03:40:29','2025-03-02 03:40:29'),(20,'Breakfast at Central-3200',2,'2025-03-11','2025-03-02 04:09:38','2025-03-02 04:09:38'),(21,'Breakfast at Central-3200',2,'2025-03-17','2025-03-02 04:09:47','2025-03-02 04:09:47'),(22,'Breakfast at Central-3200',1,'2025-03-03','2025-03-02 05:17:59','2025-03-02 05:17:59'),(23,'Breakfast at Central-3200',2,'2025-03-05','2025-03-02 06:11:38','2025-03-02 06:11:38'),(24,'Breakfast at Central-3200',2,'2025-03-18','2025-03-02 09:27:51','2025-03-02 09:27:51'),(25,'Breakfast at Central-3200',2,'2025-03-03','2025-03-02 12:52:41','2025-03-02 12:52:41'),(26,'Dinner at Central-5800',1,'2025-03-05','2025-03-03 23:24:33','2025-03-03 23:24:33'),(27,'Breakfast at Central-3200',2,'2025-03-05','2025-03-04 01:59:11','2025-03-04 01:59:11'),(28,'Breakfast at Central-3200',2,'2025-03-17','2025-03-04 02:06:46','2025-03-04 02:06:46'),(29,'Lunch at Central-5700',2,'2025-03-11','2025-03-04 02:06:55','2025-03-04 02:06:55'),(30,'Breakfast at Central-3200',3,'2025-03-27','2025-03-04 05:08:50','2025-03-04 05:08:50');
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:29
