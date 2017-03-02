-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: organdonor
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donor` (
  `PatientID` int(11) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `BloodType` char(1) DEFAULT NULL,
  `HLAMarkers` varchar(30) DEFAULT NULL,
  `Organ` varchar(20) DEFAULT NULL,
  `DateAddedToDatabase` date DEFAULT NULL,
  `DonationDate` date DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `RegionNum` int(11) DEFAULT NULL,
  `DPhoneNum` varchar(12) DEFAULT NULL,
  `DEmail` varchar(30) DEFAULT NULL,
  `Deceased` tinyint(1) DEFAULT NULL,
  `PassedEvaluation` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`PatientID`),
  KEY `NN` (`Weight`,`BloodType`,`HLAMarkers`,`Organ`,`DateAddedToDatabase`,`DateOfBirth`,`DEmail`,`Deceased`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluation` (
  `PatientID` int(11) NOT NULL,
  `Passed` tinyint(1) DEFAULT NULL,
  `ApptDate` date DEFAULT NULL,
  PRIMARY KEY (`PatientID`),
  KEY `NN` (`Passed`,`ApptDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluation`
--

LOCK TABLES `evaluation` WRITE;
/*!40000 ALTER TABLE `evaluation` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hospital` (
  `HospitalID` int(11) NOT NULL,
  `HName` varchar(30) DEFAULT NULL,
  `RegionNum` int(11) DEFAULT NULL,
  `PhoneNum` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`HospitalID`),
  KEY `NN` (`HName`,`RegionNum`,`PhoneNum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital`
--

LOCK TABLES `hospital` WRITE;
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operation`
--

DROP TABLE IF EXISTS `operation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operation` (
  `PatientID` int(11) NOT NULL,
  `HospitalID` int(11) DEFAULT NULL,
  `SurgeonID` int(11) DEFAULT NULL,
  `OpDate` date DEFAULT NULL,
  `OrganID` int(11) DEFAULT NULL,
  PRIMARY KEY (`PatientID`),
  KEY `NN` (`OpDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operation`
--

LOCK TABLES `operation` WRITE;
/*!40000 ALTER TABLE `operation` DISABLE KEYS */;
/*!40000 ALTER TABLE `operation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organ`
--

DROP TABLE IF EXISTS `organ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organ` (
  `OrganID` int(11) NOT NULL,
  `OrganType` varchar(20) DEFAULT NULL,
  `ExpirationDate` datetime DEFAULT NULL,
  `Donor` varchar(30) DEFAULT NULL,
  `Recipient` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`OrganID`),
  KEY `NN` (`OrganType`,`ExpirationDate`,`Donor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organ`
--

LOCK TABLES `organ` WRITE;
/*!40000 ALTER TABLE `organ` DISABLE KEYS */;
/*!40000 ALTER TABLE `organ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipient`
--

DROP TABLE IF EXISTS `recipient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipient` (
  `PatientID` int(11) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `BloodType` char(1) DEFAULT NULL,
  `HLAMarkers` varchar(30) DEFAULT NULL,
  `Organ` varchar(20) DEFAULT NULL,
  `DateAddedToWaitlist` date DEFAULT NULL,
  `TransplantDate` date DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `RegionNum` int(11) DEFAULT NULL,
  `RPhoneNum` varchar(12) DEFAULT NULL,
  `REmail` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PatientID`),
  KEY `NN` (`Gender`,`Weight`,`BloodType`,`HLAMarkers`,`Organ`,`DateAddedToWaitlist`,`DateOfBirth`,`REmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipient`
--

LOCK TABLES `recipient` WRITE;
/*!40000 ALTER TABLE `recipient` DISABLE KEYS */;
/*!40000 ALTER TABLE `recipient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surgeon`
--

DROP TABLE IF EXISTS `surgeon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surgeon` (
  `EmployeeID` int(11) NOT NULL,
  `Specialty` varchar(20) DEFAULT NULL,
  `OperationDate` date DEFAULT NULL,
  `HospitalID` int(11) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `NN` (`Specialty`,`DateofBirth`,`StartDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surgeon`
--

LOCK TABLES `surgeon` WRITE;
/*!40000 ALTER TABLE `surgeon` DISABLE KEYS */;
/*!40000 ALTER TABLE `surgeon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `waitinglist`
--

DROP TABLE IF EXISTS `waitinglist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waitinglist` (
  `PatientID` int(11) NOT NULL,
  `OrganID` int(11) DEFAULT NULL,
  `OrganNeeded` varchar(20) DEFAULT NULL,
  `DonorPatientID` int(11) DEFAULT NULL,
  `DonorOpDate` date DEFAULT NULL,
  `RecipientOpDate` date DEFAULT NULL,
  `MatchFound` tinyint(1) DEFAULT NULL,
  `MatchScore` int(11) DEFAULT NULL,
  PRIMARY KEY (`PatientID`),
  KEY `NN` (`OrganID`,`OrganNeeded`,`MatchFound`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `waitinglist`
--

LOCK TABLES `waitinglist` WRITE;
/*!40000 ALTER TABLE `waitinglist` DISABLE KEYS */;
/*!40000 ALTER TABLE `waitinglist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-01 13:47:30
