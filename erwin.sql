-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: erwin
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.2

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
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `story` varchar(255) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (57,'First Time We are meet','6469043774563.jpg','event study tour dari sekolah adalah momen pertama kita bertemu ','our'),(58,'libur lebaran','6469054167f23.jpg','momen libur lebaran yang gak pas lebaran','our'),(59,'Sayang','6469a72579659.jpg','Sayang nya dhea sedang bekerja hihii','erwin'),(60,'first date','6469c0524574d.jpg','ini moment pertama kita makan setelah kita pulang sekolah','our'),(61,'','6469c1c7365c3.jpeg','','our'),(62,'','6469c24d9a955.jpeg','','our'),(63,'','6469c382a541d.png','','erwin'),(64,'Toeic','6469c660d3f4a.jpg','ini awal ketemu baby di sekolah, bukan di lab ini tapi dikelas tkj. waktu itu, miss sulis minta dhea untuk manggil baby yang masih ada di kelas. saat itulah dhea ketemu baby pertama kali nya :)','our'),(65,'olimpiade ','6469cb36b23cf.jpg','','erwin'),(66,'jogja','6469cc2f57f05.jpeg','','erwin'),(67,'','6469cc577e546.jpeg','','erwin'),(68,'','6469cc76cca9d.jpeg','','our'),(69,'','6469cc962f180.jpeg','','erwin'),(70,'','6469ccc405260.jpg','','dhea'),(71,'team ','6469cd36c6abb.jpg','','erwin'),(72,'makko tanding','6469cd4ed659f.jpg','','erwin'),(73,'','6469cd726f8cd.jpg','','our'),(74,'','6469ce877976c.jpeg','','our'),(75,'baby sick','6469cf227ecca.png','','erwin'),(76,'','6469cfaa31063.png','','our'),(77,'','6469cff7525ea.jpg','','our'),(78,'','646b364aebfa0.jpg','','erwin'),(79,'','646b36fc5ebc9.jpg','','erwin'),(80,'','646b37a332869.jpg','','erwin'),(81,'','646b38197549c.jpg','','erwin'),(82,'mengan balak','646b3857e4e97.jpg','first time nge grill bareng, kita bingung gmna ngidupin kompor, bingung mau masak mana dulu, tapi overall acara kita lancar dan masakanny perfect','our'),(83,'','646b3867b51c8.jpg','','dhea'),(84,'','646b38688718f.jpg','first time nge grill bareng, kita bingung gmna ngidupin kompor, bingung mau masak mana dulu, tapi overall acara kita lancar dan masakanny perfect','dhea'),(86,'Random bnget','646b39b3be565.jpg','','dhea'),(87,'Pas foto smk','646b39e115cd2.jpg','','erwin'),(88,'Pasfoto smk','646b39facaa0c.jpg','','dhea'),(89,'','646b3ac7b9654.jpg','','our'),(91,'','646b3c644abc2.jpg','','our'),(92,'Poni di umur 21','646b3d0fedd0f.jpeg','','dhea'),(93,'','646b3d307a46b.jpg','','dhea'),(94,'','646b3d4ae3f89.png','','dhea'),(95,'','646b3ef82d744.jpg','','dhea'),(96,'','646b3f63df94b.jpg','','our'),(97,'','646b404350bc6.jpg','','our'),(98,'','646b40c97a06d.png','','erwin'),(99,'','646b40f16ab9a.jpg','','dhea'),(101,'','646b413729b51.jpg','','erwin'),(102,'','646b41771f9e0.jpg','','our'),(103,'','646b41a860072.jpg','','our'),(104,'','646b41c697275.jpg','','erwin'),(105,'','646b41e4ab208.png','','erwin'),(106,'','646b423aeca37.jpg','','our'),(107,'','646b426496641.png','','erwin'),(108,'','646b42bbb1ff5.jpg','','dhea'),(109,'','646b42e7a1896.jpg','','dhea'),(110,'','646b42f9ad93e.jpg','','erwin'),(111,'','646b437c22885.png','','our');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Erwin','duplex@gmail.com','$2y$10$JaY.7Wt1Htit7rFz7/UmxuXO2MVJDUe24vmtyrytCNM.DgC3PIHQa'),(2,'Dhea','dhea@gmail.com','$2y$10$V/JpWvymXz655cB.vzbh0Ogp/nvDEA/WasNCQaMZb9MpyRFPrpW6G');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-29 20:04:36
