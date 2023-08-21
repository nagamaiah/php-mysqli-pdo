-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: joins
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `age` int NOT NULL,
  `remuniration` int NOT NULL,
  `pan_india_star` char(3) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `actors_chk_1` CHECK ((`gender` in (_utf8mb4'M',_utf8mb4'F'))),
  CONSTRAINT `actors_chk_2` CHECK ((`pan_india_star` in (_utf8mb4'Yes',_utf8mb4'No')))
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` VALUES (1,'Ram charan','M',35,100,'Yes'),(2,'Yash','M',36,120,'Yes'),(3,'Samantha','F',32,20,'No'),(4,'Vijay','M',45,80,'No'),(5,'Rishab shetty','M',37,50,'Yes'),(6,'Dulkar Salman','M',33,35,'No'),(7,'Prabhas','M',46,150,'Yes'),(8,'Allu arjun','M',39,100,'Yes'),(9,'Keerthy Suresh','F',30,15,'No');
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(22) NOT NULL,
  `remuniration` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
INSERT INTO `directors` VALUES (1,'Rajmouli',80),(2,'Lokesh',70),(3,'Rishab',80),(4,'Anand',50),(5,'Raghav',50),(6,'Prashanth neel',70),(7,'Gunasekhar',20),(8,'Nag aswin',60),(9,'Rajmouli',80),(10,'Lokes',70),(11,'Rishab',80),(12,'Anand',50),(13,'Raghav',50);
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `actor_id` int NOT NULL,
  `director_id` int NOT NULL,
  `name` varchar(22) NOT NULL,
  `budget_in_crores` int NOT NULL,
  `language` varchar(25) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `rating` float NOT NULL,
  `release_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `actor_id` (`actor_id`),
  KEY `director_id` (`director_id`),
  CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,1,1,'RRR',600,'Telugu','action',4.5,'2023-07-23 17:48:08'),(2,4,2,'LEO',300,'Tamil','action',4.3,'2023-07-23 17:48:08'),(3,5,3,'Kanthara',10,'Kannada','Horror',4.5,'2023-07-23 17:48:08'),(4,6,5,'SitaRamam',100,'Telugu','Love',4.5,'2023-07-23 17:48:08'),(5,3,7,'Sakunthalam',200,'Telugu','epic',2.5,'2023-07-23 17:48:08'),(6,7,8,'Kalki',500,'Telugu','fiction',4.9,'2023-07-23 17:48:08');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-21 17:15:40
