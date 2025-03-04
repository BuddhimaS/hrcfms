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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_01_14_163813_create_countries_table',2),(5,'2025_01_14_163814_create_guests_table',3),(6,'2025_01_18_163051_add_first_name_last_name_title_to_users_table',4),(7,'2025_01_19_115013_add_password__mobile_to_guests_table',5),(8,'2025_01_19_120129_add_mobile__password_to_guests_table',6),(9,'2025_02_01_171110_add_user_type_to_users_table',7),(10,'2025_02_01_171111_add_user_type_to_users_table',8),(11,'2025_02_09_092750_create_rooms_table',9),(12,'2025_02_09_124855_create_employees_table',10),(13,'2025_02_11_092408_create_task_table',11),(14,'2025_02_16_134644_create_tasks_table',12),(15,'2025_02_17_100646_create_complaints_table',13),(16,'2025_02_18_104753_create_feedback_table',14),(17,'2025_02_21_111859_create_feedbacks_table',15),(18,'2025_02_22_050642_create_feedback_table',16),(19,'2025_02_22_052443_create_reviews_table',17),(20,'2025_02_22_062557_create_review_table',18),(21,'2025_02_22_063559_create_reviews_table',19),(22,'2025_02_22_065731_create_complaints_table',20),(23,'2025_02_22_170139_create_roomreservations_table',21),(24,'2025_02_23_064710_create_meals_table',22),(25,'2025_02_23_071515_add_reservation_date_to_meals_table',23),(26,'2025_02_23_073607_create_spas_table',24),(27,'2025_02_23_112503_create_cabs_table',25),(28,'2025_02_25_232411_create_contacts_table',25),(29,'2025_03_01_014754_create_pickguests_table',26),(30,'2025_03_01_015545_create_pickguests_table',27),(31,'2025_03_01_073309_create_pickroom_table',28),(32,'2025_03_01_093231_create_pickrooms_table',29),(33,'2025_03_01_121251_create_pickrooms_table',30),(34,'2025_03_01_151030_create_pickrooms_table',31),(35,'2025_03_01_154546_create_pickrooms_table',32),(36,'2025_03_01_161145_create_pickroom_table',32),(37,'2025_03_02_043350_create_pickcabs_table',33),(38,'2025_03_02_053426_add_reservation_id_to_spas_table',34),(39,'2025_03_02_053940_create_spas_table',35),(40,'2025_03_02_055105_create_spas_table',36),(41,'2025_03_02_060516_create_pickspa_table',37),(42,'2025_03_02_062005_create_pickspas_table',38),(43,'2025_03_02_064112_create_pickpays_table',39),(44,'2025_03_02_085843_create_pickpays_table',40),(45,'2025_03_02_103502_create_pickpaycashs_table',41),(46,'2025_03_02_105514_create_pickpaycashes_table',42),(47,'2025_03_03_010653_create_pickreviews_table',43);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:30
