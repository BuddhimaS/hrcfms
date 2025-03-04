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
-- Table structure for table `pickspas`
--

DROP TABLE IF EXISTS `pickspas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pickspas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `spa_service` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `time_slot` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickspas`
--

LOCK TABLES `pickspas` WRITE;
/*!40000 ALTER TABLE `pickspas` DISABLE KEYS */;
INSERT INTO `pickspas` VALUES (1,'Facial Treatments','2025-03-03','09:00 AM - 11:00 AM','2025-03-02 00:53:18','2025-03-02 00:53:18'),(2,'Facial Treatments','2025-03-04','01:00 PM - 03:00 PM','2025-03-02 00:53:30','2025-03-02 00:53:30'),(3,'Body Treatments','2025-03-10','01:00 PM - 03:00 PM','2025-03-02 00:53:55','2025-03-02 00:53:55'),(4,'Massage Therapy','2025-03-19','09:00 AM - 11:00 AM','2025-03-02 00:55:36','2025-03-02 00:55:36'),(5,'Massage Therapy','2025-03-10','09:00 AM - 11:00 AM','2025-03-02 00:56:54','2025-03-02 00:56:54'),(6,'Facial Treatments','2025-03-04','03:00 PM - 05:00 PM','2025-03-02 01:29:36','2025-03-02 01:29:36'),(7,'Massage Therapy','2025-03-04','11:00 AM - 01:00 PM','2025-03-02 03:41:02','2025-03-02 03:41:02'),(8,'Facial Treatments','2025-03-11','09:00 AM - 11:00 AM','2025-03-02 04:10:12','2025-03-02 04:10:12'),(9,'Facial Treatments','2025-03-04','03:00 PM - 05:00 PM','2025-03-02 05:18:43','2025-03-02 05:18:43'),(10,'Facial Treatments','2025-03-05','01:00 PM - 03:00 PM','2025-03-02 05:42:13','2025-03-02 05:42:13'),(11,'Massage Therapy','2025-03-04','11:00 AM - 01:00 PM','2025-03-02 06:12:20','2025-03-02 06:12:20'),(12,'Body Treatments','2025-03-11','11:00 AM - 01:00 PM','2025-03-02 09:28:44','2025-03-02 09:28:44'),(13,'Massage Therapy','2025-03-04','09:00 AM - 11:00 AM','2025-03-02 12:53:16','2025-03-02 12:53:16'),(14,'Massage Therapy','2025-03-11','09:00 AM - 11:00 AM','2025-03-03 23:38:06','2025-03-03 23:38:06'),(15,'Massage Therapy','2025-03-04','09:00 AM - 11:00 AM','2025-03-03 23:48:07','2025-03-03 23:48:07'),(16,'Massage Therapy','2025-03-04','09:00 AM - 11:00 AM','2025-03-03 23:48:18','2025-03-03 23:48:18'),(17,'Facial Treatments','2025-03-05','09:00 AM - 11:00 AM','2025-03-03 23:48:29','2025-03-03 23:48:29'),(18,'Massage Therapy','2025-03-05','09:00 AM - 11:00 AM','2025-03-04 01:59:26','2025-03-04 01:59:26'),(19,'Facial Treatments','2025-03-05','11:00 AM - 01:00 PM','2025-03-04 02:07:37','2025-03-04 02:07:37');
/*!40000 ALTER TABLE `pickspas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:25
