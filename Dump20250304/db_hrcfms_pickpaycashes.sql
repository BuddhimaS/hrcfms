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
-- Table structure for table `pickpaycashes`
--

DROP TABLE IF EXISTS `pickpaycashes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pickpaycashes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payment_option` enum('cash','card') NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickpaycashes`
--

LOCK TABLES `pickpaycashes` WRITE;
/*!40000 ALTER TABLE `pickpaycashes` DISABLE KEYS */;
INSERT INTO `pickpaycashes` VALUES (1,'cash','2025-03-03','17:28:00','2025-03-02 05:28:27','2025-03-02 05:28:27'),(2,'card','2025-03-05','17:31:00','2025-03-02 05:30:14','2025-03-02 05:30:14'),(3,'card','2025-03-05','17:31:00','2025-03-02 05:30:14','2025-03-02 05:30:14'),(4,'card','2025-03-04','16:42:00','2025-03-02 05:42:34','2025-03-02 05:42:34'),(5,'cash','2025-03-05','04:50:00','2025-03-02 05:50:44','2025-03-02 05:50:44'),(6,'cash','2025-03-04','05:12:00','2025-03-02 06:12:51','2025-03-02 06:12:51'),(7,'card','2025-03-04','10:30:00','2025-03-02 09:29:23','2025-03-02 09:29:23'),(8,'cash','2025-03-03','22:30:00','2025-03-02 12:54:26','2025-03-02 12:54:26'),(9,'card','2025-03-04','10:42:00','2025-03-03 23:42:38','2025-03-03 23:42:38'),(10,'card','2025-03-04','01:59:00','2025-03-04 01:59:55','2025-03-04 01:59:55'),(11,'card','2025-03-06','01:08:00','2025-03-04 02:08:18','2025-03-04 02:08:18');
/*!40000 ALTER TABLE `pickpaycashes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:27
