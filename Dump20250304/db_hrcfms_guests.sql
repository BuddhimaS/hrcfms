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
-- Table structure for table `guests`
--

DROP TABLE IF EXISTS `guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `PinCode` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Mobile` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `country_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `guests_user_id_foreign` (`user_id`),
  KEY `guests_country_id_foreign` (`country_id`),
  CONSTRAINT `guests_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `guests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guests`
--

LOCK TABLES `guests` WRITE;
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
INSERT INTO `guests` VALUES (2,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2025-01-18 11:20:23','2025-01-18 11:20:23'),(3,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2025-01-18 11:27:17','2025-01-18 11:27:17'),(4,18,'nimalt',NULL,'nimalt@mailinator.com','pallamatd','chilawtd','12456',NULL,NULL,'2025-01-15',1,'2025-01-18 11:33:20','2025-01-18 11:33:20'),(5,19,'piyumi','nimsara','piumni@mailinator.com','pallamay','chilawy','12780',NULL,NULL,'2025-01-28',1,'2025-01-18 11:35:22','2025-01-18 11:35:22'),(6,20,'Buddhima','praba','sewwa28@mailinator.com','Pallama','North Western Province','61040',NULL,NULL,'2025-01-15',1,'2025-01-18 12:15:01','2025-01-18 12:15:01'),(7,21,'Buddhima','devmini','devmin4@mailinator.com','Pallama','North Western Province','61040',NULL,NULL,'2025-01-07',1,'2025-01-18 12:31:07','2025-01-18 12:31:07'),(8,22,'wsws','qsqs','qsqs@mailinator.com','Pallama','North Western Province','61040',NULL,NULL,NULL,1,'2025-01-18 12:32:15','2025-01-18 12:32:15'),(9,23,'W.A.K','sewwandi','navoditharaka200r0@gmail.com','pallama','North Western Province','61040',NULL,NULL,'2025-01-14',2,'2025-01-19 03:58:20','2025-01-19 03:58:20'),(10,24,'W.A.K','sewwandi','navoditharaka2009@gmail.com','pallama','North Western Province','61040',NULL,NULL,'2025-01-14',2,'2025-01-19 03:59:52','2025-01-19 03:59:52'),(11,25,'nimsara','karau','karu@mailinator.com','Pallama','North Western Province','61040',NULL,NULL,'2025-01-20',1,'2025-01-19 04:04:05','2025-01-19 04:04:05'),(12,26,'dinusha','perera','dinusha@mailinator.com','Colombo','North Western Province','00011',NULL,NULL,'2025-01-14',2,'2025-01-19 04:07:52','2025-01-19 04:07:52'),(13,27,'buddhima','sewwandi','navoditharaka2000ss@gmail.com','pallama','North Western Province','61040',NULL,NULL,'2025-01-15',1,'2025-01-19 06:26:51','2025-01-19 06:26:51'),(14,28,'buddhima','sewwwandika','sewwand@gmail.com','Colombo','North Western Province','00011',NULL,NULL,'2025-01-22',1,'2025-01-19 06:35:40','2025-01-19 06:35:40'),(15,29,'Buddhima','sewwandi','sswee@gmail.com','chilaw','qsqsq','61040',NULL,NULL,'2025-01-15',1,'2025-01-19 06:38:35','2025-01-19 06:38:35'),(16,30,'buddhima','sewwandikaui','seer@gmail.com','ddwwdw','wdwd','132142','123456','07137865455','2025-01-16',1,'2025-01-19 06:41:32','2025-01-19 06:41:32'),(17,31,'buddhima','sewwandika','seww@gmail.com','chjj',NULL,NULL,'123465','0713744878','2025-01-16',1,'2025-01-19 06:51:44','2025-01-19 06:51:44'),(18,32,'Buddhima','Sewwandiwdw','sqsqs@gmail.com','Pallama',NULL,NULL,'1234456780','0767288124','2025-01-16',1,'2025-01-19 07:08:38','2025-01-19 07:08:38'),(19,33,'wwe','wewe','dwd@gmail.com','Pallama',NULL,NULL,'1234','4464646','2025-01-15',1,'2025-01-19 07:13:43','2025-01-19 07:13:43'),(20,34,'Buddhima','sewwandud','wdwdw@gmail.com','srsws',NULL,NULL,'12345','0767288124','2025-01-23',1,'2025-01-19 07:23:22','2025-01-19 07:23:22'),(21,35,'buddhima','sewwandi','sewwa1234@mailinator.com','Pallama',NULL,NULL,'128899','0878767678','2025-01-08',1,'2025-01-19 15:56:44','2025-01-19 15:56:44'),(22,36,'nnnqwqw','qwwqw','wqw@mailinator.com','qw',NULL,NULL,'112233','0987656543','2025-01-23',2,'2025-01-19 16:05:39','2025-01-19 16:05:39'),(23,38,'Buddhima','Sewwandi','nimasha34@mailinator.com','Pallama',NULL,NULL,'Qwerty@123','0767543123','2025-01-20',1,'2025-01-25 09:46:54','2025-01-25 09:46:54'),(24,39,'Buddhima','Sewwandi','buddhi50@mailinator.com','Pallama',NULL,NULL,'123456','0767288124','2025-01-16',1,'2025-01-25 10:41:45','2025-01-25 10:41:45'),(25,40,'Buddhima','sewwandi','sewwandi80@mailinator.com','pallama',NULL,NULL,'123456','0712345653','2025-01-15',1,'2025-01-25 11:17:29','2025-01-25 11:17:29'),(26,41,'buddhima','sewwandi','test@gmail.com','chilaw',NULL,NULL,'123456789','0765434321','2025-01-09',1,'2025-01-25 11:25:03','2025-01-25 11:25:03'),(27,42,'Buddhima','Sewwandi','ieshitha@gmail.com','Colombo',NULL,NULL,'123456789','0713456765','2025-01-28',1,'2025-01-29 05:24:05','2025-01-29 05:24:05'),(28,43,'test','user','test3@gmail.com','Colombo',NULL,NULL,'123456789','0713456543','2025-02-04',2,'2025-02-01 11:17:01','2025-02-01 11:17:01'),(29,44,'test','user4','testuser4@gmail.com','colombo',NULL,NULL,'123456789','0713454323','2025-02-03',1,'2025-02-01 13:13:04','2025-02-01 13:13:04'),(30,45,'test','usera','testusera@gmail.com','Colombo',NULL,NULL,'123456789','0767565431','2025-02-12',2,'2025-02-04 23:09:34','2025-02-04 23:09:34'),(31,46,'test','b','testb@gmail.com','Colombo',NULL,NULL,'123456789','0765654345','2025-02-04',1,'2025-02-05 23:19:00','2025-02-05 23:19:00'),(32,47,'Buddhimad','sewwanfi','buddhima@gmail.com','Pallama',NULL,NULL,'123456789','0767654543','2025-02-05',1,'2025-02-08 10:34:23','2025-02-08 10:34:23'),(33,48,'testing','user','testinguser5@gmail.com','pallama',NULL,NULL,'123456789','0767654567','2025-02-14',1,'2025-02-08 10:38:56','2025-02-08 10:38:56'),(34,50,'buddhima','Sewwandi','buddhi78@gmail.com','Chilaw',NULL,NULL,'123456789','0767654321','2025-02-13',1,'2025-02-08 10:43:34','2025-02-08 10:43:34'),(35,51,'testk','userk','testk@gmai.com','chilaw',NULL,NULL,'123456789','0767288124','2025-02-19',1,'2025-02-08 10:52:46','2025-02-08 10:52:46'),(36,56,'ragu','test','ragutest@gmail.com','Chilaw',NULL,NULL,'123456789','0767654567','2025-02-12',1,'2025-02-09 00:55:09','2025-02-09 00:55:09'),(37,57,'dimesha','prashani','dunee67@gmail.com','chilaw',NULL,NULL,'123456789','0767345656','2025-02-11',1,'2025-02-09 00:56:03','2025-02-09 00:56:03'),(38,58,'diva','guna','guna@gmail.com','Chilaw',NULL,NULL,'123456789','0767656456','2025-02-14',1,'2025-02-09 01:00:23','2025-02-09 01:00:23'),(39,59,'nimesha','prathiba','prathina@mailinator.com','Chilaw',NULL,NULL,'123456789','0767656564','2025-02-05',1,'2025-02-09 01:06:18','2025-02-09 01:06:18'),(40,60,'test','guest','testguest@gmail.com','Chilaw',NULL,NULL,'123456789','0767654123','2025-02-10',1,'2025-02-09 13:06:06','2025-02-09 13:06:06'),(41,61,'janith','chathuranga','janith@gmail.com','Chilaw',NULL,NULL,'123456789','0767654321','2025-02-12',1,'2025-02-11 04:30:37','2025-02-11 04:30:37'),(42,62,'dananji','prathiba','dananji@gmail.com','Chilaw',NULL,NULL,'123456789','0767288127','2025-02-04',1,'2025-02-11 06:37:37','2025-02-11 06:37:37'),(43,63,'sitara','usera','sitarausera@gmail.com','Chilaw',NULL,NULL,'123456789','0767656456','2025-02-04',1,'2025-02-11 23:50:19','2025-02-11 23:50:19'),(44,64,'sitara','client','sitaraclient@gmail.com','Colombo',NULL,NULL,'123456789','0767676541','2025-02-11',1,'2025-02-16 05:03:36','2025-02-16 05:03:36'),(45,66,'client','user','client@gmail.com',NULL,NULL,NULL,'123456789','0767654234','2025-02-03',1,'2025-02-16 05:06:54','2025-02-16 05:06:54'),(46,67,'clinet','userf','clientuserf@gmail.com','Colombo',NULL,NULL,'123456789','0767665124','2025-02-26',1,'2025-02-26 05:24:46','2025-02-26 05:24:46'),(47,68,'client','userp','clientuserp@gmail.com','Chilaw',NULL,NULL,'123456789','0767656456','2025-02-18',1,'2025-02-26 14:50:48','2025-02-26 14:50:48'),(48,69,'Dihansa','wilaweera','dihansa@gmail.com','Chilaw',NULL,NULL,'123456789','Dihansa','2025-03-03',1,'2025-03-02 05:34:26','2025-03-02 05:34:26');
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:33
