-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: nisra_target
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `event_date` timestamp NULL DEFAULT NULL,
  `info` varchar(1500) NOT NULL,
  `notes` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'NISRA Enlightened 2021','2021-08-09 01:00:00','NISRA Enlightened 將再 2021/08/09 舉辦~歡迎大家共襄盛舉~','「 在危機四伏的網路世界，你需要資安武裝自己。」\r\n\r\n始終覺得資安領域如迷霧無法入門？\r\n\r\n永遠仰望強者無法併行？\r\n\r\n強者從非天生，沒有開始，就永無入門！\r\n\r\n不論你是即將入學的大一新鮮人，或是對於各種資訊技術充滿了熱忱卻不知該如何開始，又或者暑假閒閒沒事做想學點酷東西，NISRA Enlightened 是一個入門的系列課程活動，內容涵蓋多方面的基礎知識，為銜接開學後每週的 NISRA 固定課程。歡迎新加入的同學或曾經參加過 NISRA 課程的同志踴躍報名參加。'),(2,'NISRA Enlightened 2020','2020-08-24 01:00:00','NISRA Enlightened 將再 2020/08/24 舉辦~歡迎大家共襄盛舉~','「沒有人一開始就是強者，但你必須先開始才能變強」\r\n\r\n不論你是即將入學的大一新生，或是對於各種資訊技術充滿了熱忱卻不知該如何開始，NISRA Enlightened 是一個入門的系列課程活動，課程內容涵蓋了多方面的基礎知識，作為銜接開學後每週的 NISRA 固定課程。歡迎曾經參加過 NISRA 課程但對於基礎知識還不甚暸解的同學或是新加入的同學踴躍報名參加。'),(3,'NISRA Winter Camp 2020','2020-02-25 01:00:00','NISRA Winter Camp 將再 2020/02/25 舉辦~歡迎大家共襄盛舉~','「變強的路上並不擁擠，因為堅持的人不多」。\r\n這次與教育部資訊安全人才培育計畫推動辦公室合辦，邀請到各方專業人士，推出非入門系列免費培訓課程。\r\n課程內容包含 Web、Pwn 等等的練習及實戰，在吸收知識的同時，培養即戰力，無論您正在摸索資訊安全，還是想進一步精進自己的實力，NISRA Winter Camp 會十分適合您。');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `permission` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','d2d802c9abcaebb69acde0247a4cf56f','nisra@nisra.net',2),(2,'maintainer','521267b8f178d52e8b8650a7232f029e','events@nisra.net',1),(3,'nisra','1529eb72b64a30bb352e7eb6bb1b0569','test@nisra.net',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-26  9:45:40
