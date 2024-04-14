CREATE DATABASE  IF NOT EXISTS `nathan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nathan`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 10.10.51.98    Database: nathan
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `critereutilisateur`
--

DROP TABLE IF EXISTS `critereutilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `critereutilisateur` (
  `critereUtilisateurId` int NOT NULL AUTO_INCREMENT,
  `critereUtilisateurPoid` int DEFAULT NULL,
  `critereUtilisateurTaille` int DEFAULT NULL,
  `critereUtilisateurAge` int DEFAULT NULL,
  `critereUtilisateurNutrition` tinyint(1) DEFAULT NULL,
  `critereUtilisateurSexe` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`critereUtilisateurId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `critereutilisateur`
--

LOCK TABLES `critereutilisateur` WRITE;
/*!40000 ALTER TABLE `critereutilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `critereutilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programmecardio`
--

DROP TABLE IF EXISTS `programmecardio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programmecardio` (
  `programmeCardioId` int NOT NULL AUTO_INCREMENT,
  `cardioEndurence` varchar(255) DEFAULT NULL,
  `cardioSprint` varchar(255) DEFAULT NULL,
  `cardioMarche` varchar(255) DEFAULT NULL,
  `cardioPente` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`programmeCardioId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programmecardio`
--

LOCK TABLES `programmecardio` WRITE;
/*!40000 ALTER TABLE `programmecardio` DISABLE KEYS */;
/*!40000 ALTER TABLE `programmecardio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programmemusculation`
--

DROP TABLE IF EXISTS `programmemusculation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programmemusculation` (
  `programmeMusculationId` int NOT NULL AUTO_INCREMENT,
  `muscuBras` varchar(255) DEFAULT NULL,
  `muscuJambes` varchar(255) DEFAULT NULL,
  `muscuMollets` varchar(255) DEFAULT NULL,
  `muscuDos` varchar(255) DEFAULT NULL,
  `muscuPecs` varchar(255) DEFAULT NULL,
  `muscuAbdos` varchar(255) DEFAULT NULL,
  `muscuFessiers` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`programmeMusculationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programmemusculation`
--

LOCK TABLES `programmemusculation` WRITE;
/*!40000 ALTER TABLE `programmemusculation` DISABLE KEYS */;
/*!40000 ALTER TABLE `programmemusculation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programmepoiddecorp`
--

DROP TABLE IF EXISTS `programmepoiddecorp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programmepoiddecorp` (
  `programmePoidDeCorpId` int NOT NULL AUTO_INCREMENT,
  `corpPompe` varchar(255) DEFAULT NULL,
  `corpTraction` varchar(255) DEFAULT NULL,
  `corpSquat` varchar(255) DEFAULT NULL,
  `corpAbdos` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`programmePoidDeCorpId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programmepoiddecorp`
--

LOCK TABLES `programmepoiddecorp` WRITE;
/*!40000 ALTER TABLE `programmepoiddecorp` DISABLE KEYS */;
/*!40000 ALTER TABLE `programmepoiddecorp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programmesportif`
--

DROP TABLE IF EXISTS `programmesportif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programmesportif` (
  `programmeSportifId` int NOT NULL AUTO_INCREMENT,
  `programmeSportifNom` varchar(255) DEFAULT NULL,
  `programmePoidDeCorpId` int DEFAULT NULL,
  `programmeMusculationId` int DEFAULT NULL,
  `programmeCardioId` int DEFAULT NULL,
  PRIMARY KEY (`programmeSportifId`),
  KEY `programmePoidDeCorpId` (`programmePoidDeCorpId`),
  KEY `programmeMusculationId` (`programmeMusculationId`),
  KEY `programmeCardioId` (`programmeCardioId`),
  CONSTRAINT `programmesportif_ibfk_1` FOREIGN KEY (`programmePoidDeCorpId`) REFERENCES `programmepoiddecorp` (`programmePoidDeCorpId`),
  CONSTRAINT `programmesportif_ibfk_2` FOREIGN KEY (`programmeMusculationId`) REFERENCES `programmemusculation` (`programmeMusculationId`),
  CONSTRAINT `programmesportif_ibfk_3` FOREIGN KEY (`programmeCardioId`) REFERENCES `programmecardio` (`programmeCardioId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programmesportif`
--

LOCK TABLES `programmesportif` WRITE;
/*!40000 ALTER TABLE `programmesportif` DISABLE KEYS */;
/*!40000 ALTER TABLE `programmesportif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programmesportif_utilisateur`
--

DROP TABLE IF EXISTS `programmesportif_utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programmesportif_utilisateur` (
  `programmeSportif_utilisateurId` int NOT NULL AUTO_INCREMENT,
  `utilisateurId` int DEFAULT NULL,
  `programmeSportifId` int DEFAULT NULL,
  PRIMARY KEY (`programmeSportif_utilisateurId`),
  KEY `utilisateurId` (`utilisateurId`),
  KEY `programmeSportifId` (`programmeSportifId`),
  CONSTRAINT `programmesportif_utilisateur_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`),
  CONSTRAINT `programmesportif_utilisateur_ibfk_2` FOREIGN KEY (`programmeSportifId`) REFERENCES `programmesportif` (`programmeSportifId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programmesportif_utilisateur`
--

LOCK TABLES `programmesportif_utilisateur` WRITE;
/*!40000 ALTER TABLE `programmesportif_utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `programmesportif_utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `utilisateurId` int NOT NULL AUTO_INCREMENT,
  `utilisateurPoid` int DEFAULT NULL,
  `utilisateurNom` varchar(255) DEFAULT NULL,
  `utilisateurPrenom` varchar(255) DEFAULT NULL,
  `utilisateurEmail` varchar(255) DEFAULT NULL,
  `utilisateurMotDePasse` varchar(255) DEFAULT NULL,
  `critereUtilisateurId` int DEFAULT NULL,
  PRIMARY KEY (`utilisateurId`),
  KEY `critereUtilisateurId` (`critereUtilisateurId`),
  CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`critereUtilisateurId`) REFERENCES `critereutilisateur` (`critereUtilisateurId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-19 15:48:28
