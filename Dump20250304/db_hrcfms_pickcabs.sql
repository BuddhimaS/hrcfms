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
-- Table structure for table `pickcabs`
--

DROP TABLE IF EXISTS `pickcabs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pickcabs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(255) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `drop_destination` varchar(255) NOT NULL,
  `distance` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pickcabs_reservation_id_unique` (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickcabs`
--

LOCK TABLES `pickcabs` WRITE;
/*!40000 ALTER TABLE `pickcabs` DISABLE KEYS */;
INSERT INTO `pickcabs` VALUES (1,'78675','2025-03-03','05:00 PM - 07:00 PM','Mini Van','Yakkala',8,'2025-03-01 23:39:52','2025-03-01 23:39:52'),(2,'23456','2025-03-11','01:00 PM - 03:00 PM','Large Van','Pedigamana',7,'2025-03-02 00:16:55','2025-03-02 00:16:55'),(3,'65673','2025-03-03','09:00 AM - 11:00 AM','Mini Van','Chilaw',5,'2025-03-02 00:28:04','2025-03-02 00:28:04'),(4,'3456','2025-03-04','03:00 PM - 05:00 PM','Car-CHR','Chialaw',8,'2025-03-02 00:31:43','2025-03-02 00:31:43'),(5,'67890','2025-03-04','01:00 PM - 03:00 PM','Mini Van','negambo',34,'2025-03-02 00:40:11','2025-03-02 00:40:11'),(6,'2345','2025-03-03','11:00 AM - 01:00 PM','Mini Van','nawala',21,'2025-03-02 00:53:06','2025-03-02 00:53:06'),(7,'3457','2025-03-19','01:00 PM - 03:00 PM','Car-CHR','nuwara',4,'2025-03-02 01:29:21','2025-03-02 01:29:21'),(8,'4356677','2025-03-12','01:00 PM - 03:00 PM','Mini Van','Chilaw',2,'2025-03-02 03:40:51','2025-03-02 03:40:51'),(9,'2333','2025-03-12','11:00 AM - 01:00 PM','Mini Van','3444',5676,'2025-03-02 04:10:03','2025-03-02 04:10:03'),(10,'34566','2025-03-04','11:00 AM - 01:00 PM','Mini Van','Nittabuwa',8,'2025-03-02 05:18:24','2025-03-02 05:18:24'),(11,'34567','2025-03-04','11:00 AM - 01:00 PM','Mini Van','Higurana',7,'2025-03-02 05:42:03','2025-03-02 05:42:03'),(12,'35566','2025-03-12','01:00 PM - 03:00 PM','Mini Van','kotte',5,'2025-03-02 06:12:08','2025-03-02 06:12:08'),(13,'12345','2025-03-04','11:00 AM - 01:00 PM','Mini Van','Madiwela',4,'2025-03-02 09:28:17','2025-03-02 09:28:17'),(14,'1314242','2025-03-04','11:00 AM - 01:00 PM','Mini Van','Sooriayawewa',4,'2025-03-02 12:53:05','2025-03-02 12:53:05'),(15,'675677','2025-03-05','11:00 AM - 01:00 PM','Mini Van','Nugahapitiya',2,'2025-03-03 23:35:41','2025-03-03 23:35:41'),(16,'3143214','2025-03-05','11:00 AM - 01:00 PM','Mini Van','Chilaw',12,'2025-03-04 01:58:56','2025-03-04 01:58:56'),(17,'42425','2025-03-04','01:00 PM - 03:00 PM','Mini Van','mathra',6,'2025-03-04 02:07:26','2025-03-04 02:07:26');
/*!40000 ALTER TABLE `pickcabs` ENABLE KEYS */;
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
