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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) NOT NULL,
  `emp_mobile` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `employee_type` enum('Admin','Front Desk Staff','Marketing Staff','Housekeeping Staff') NOT NULL DEFAULT 'Admin',
  `emp_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_emp_mobile_unique` (`emp_mobile`),
  UNIQUE KEY `employees_emp_email_unique` (`emp_email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'thulashi','0767567432','thula@gmail.com','Housekeeping Staff','$2y$12$u3PHSahx.PU1D9Z5i2k33OBT0dmn9RgyndTGp8IZ5vRhSSrzJKHRG','2025-02-09 10:09:15','2025-02-09 10:09:15'),(2,'sadaru','0767656754','sadaru@gmail.com','Front Desk Staff','$2y$12$aBskh3lViHwQAzoqEpqIR.rU.LG/u6f52IWGGn1cLCbo4x8.VDvsy','2025-02-09 13:21:25','2025-02-09 13:21:25'),(3,'Diwyangi prabudda','0767654123','prabu@gmail.com','Admin','$2y$12$5vSfjH5T3NpsUYlfc5ZngOEaPQVy3KXRRUrWW9ZRqSdkW2gFxJp7C','2025-02-16 08:56:18','2025-02-16 08:56:18'),(4,'Buddhima','0713744878','buddhimadmin@gmail.com','Admin','$2y$12$ktnBJ/kKio2d6nnAh65oVebmXBu9FgEnvHhoukpz9UUn55.mu7K3e','2025-02-24 11:08:25','2025-02-24 11:08:25'),(5,'nimmi','0767656765','nimmi@gmail.com','Marketing Staff','$2y$12$ASit.yiFFsxh45hf4NpQxOEGWLET9HQKPpezU2VXCUwDQMR61N216','2025-03-04 05:40:49','2025-03-04 05:40:49');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 18:34:34
