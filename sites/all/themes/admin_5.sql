-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: admin
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.13.10.2

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `address_1` varchar(200) DEFAULT NULL,
  `address_2` varchar(200) DEFAULT NULL,
  `postcode` int(5) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (2,NULL,'cairo','El-Doki','ahmed Al ziat street','',31111,14),(3,NULL,'cairo','El-Doki','ahmed Al ziat street','',31111,12),(4,NULL,'cairo','El-Doki','ahmed Al ziat street','',31111,12);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'About Orchidia','','','8.jpg'),(3,'Products','','','10.jpg'),(4,'R & D','','','11.jpg'),(5,'CSR','','','12.jpg'),(6,'media&investors','','','13.jpg'),(8,'yakob','','','14676slide3.jpg');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Anti-infective eye drops',2),(2,'Anti-inflammatory eye drops',3),(3,'Anti-inflammatory / Anti-infective combinations',0),(4,'Glaucoma treatments',10),(5,'Mydriatic/Cycloplegic eye drops',0),(7,'Artificial tears / Eye lubricants',0),(8,'Lenses care products',0),(9,'Eye tonics & eye vitamins',0),(10,'Other ophthalmologicals',0),(11,'test',0),(12,'test-100',10),(13,'some',2),(14,'other',3),(16,'test',0),(18,'computer',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` VALUES (1,'yakob','yakob_strongman@yahoo.com','how are you man',0),(2,'yakob','','',0),(3,'yakob','test@test.com','thanks',0),(4,'yakob mohmed','yakob.abada@gmail.com','something test',0),(5,'','','',0),(6,'sara mohmed','yakob.abada@camelcasetech.com','some',0);
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'هل يمكن استخدام محلول العدسات مباشرة على العين؟','محلول العدسات يستخدم لتنظيف و حفظ العدسات و لا يفضل وضعه علي العين مباشرة'),(2,'لماذا توجد مراره فى الفم بعد استخدام أوركاديكسولين و هل هو سام؟','من الاثار الجانبيه للاوركاديكسولين الاحساس بمرارة في الفم بعد وضع القطره وذلك لوجود ماده الكلورامفينيكول وهي مضاد حيوي يقضي علي البكتيريا المسببه لالتهاب العين ويمكن تجنب احساس المرارة عن طريق الضغط علي المنطقه التي تقع بين بداية العين و الانف لكي تقفل القناه الدمعية'),(3,'ما الواجب فعله فى حالات نسيان احدى الجرعات؟','ضع الجرعة فور تذكرها و اكمل باقي الجرعات كما وصف '),(4,'هل حرقان العين بعد القطره له علاقة بفاعليتها؟','لا يوجد علاقة بين حرقان العين و فاعليه القطره و لكن من الاعراض الجانبيه لبعض القطرات الاحساس بحرقان في العين'),(5,'هل هناك علاقة بين مرض السكر و العين؟','يسبب مرض السكر بعض المضاعفات في العين و منها مرض اعتلال الشبكية و ينتج هذا المرض من زيادة  لزوجه الدم مما يودي الي اضطرابات في الدوره الدمويه العامه التي قد تصل الي الدوره الدمويه الخاصة بالعين.\r\nو غالبا ما يصيب مرض اعتلال الشبكية السكري كلتا العينين\r\n'),(6,'أعانى من مرض السكر و اريد بعض النصائح العامه لتجنب مضاعفات العين؟','الاكتشاف المبكر و العلاج هما المفتاح الرئيسي لمنع حدوث ضعف البصر.\r\nالكشف الدوري علي الشبكية كل 6 شهور او سنه يساعد ك علي اكتشاف المرض مبكرا فيكون من السهل علاجه\r\n'),(7,'&nbsp;ccccan I get information about Orchidia products’ dosing?','products link dfadsfas<br>'),(8,'How can I report any adverse effects related to Orchidia products?','click on this link: <a href=\"adr.php\">link</a>'),(9,'Am I abled to get direct orders for my center / clinic?','kindly send your kind inquiry in the above box & we will get back to you.'),(10,'How can I get scientific support from Orchidia?','kindly send your kind inquiry in the above box & we will get back to you.'),(11,'Can I use Perfect care to patient’s eye directly??','<br>'),(12,'Does Orchidia have its own sterile area?','In July 2009 the Egyptian Ministry of Health officially Licensed Orchidia Pharmaceutical Industries site to produce sterile products in its clean areas. Commissioning and validation were performed in partnership with DOC validation of Italy to ensure that from launch the plan met WHO GMP, cGMP, EC, and US FDA standards. The first production activities have already taken place in late 2009. Meanwhile our solid R&D pipeline is projected to keep the number of registered products growing making expansion of both production and markets a necessity.'),(13,'Hows can I know about Orchidia new products?','Kindly leave your mail in the above box or contact our Medical representative in your area.'),(14,'How do I contact an Investor Relations contact person?','kindly send your inquiry in the above box'),(15,'How can I receive information on Orchidia?','lkdffsjfladfskjflaskdj<br>'),(16,'What products do you offer?','visit our product department on the website '),(17,'Which countries do you have operations in?',''),(18,'Where is the company headquartered? ','click on this link: <a href=\"contactus.php\">link</a>'),(19,'How many people does Orchidia employ?','Orchidia employs 330 of high quality calibers '),(20,'What does Orchidia do?','click on this link: <a href=\"aboutus.php\">link</a>'),(21,'skdfsjlaflas<br>','fdasfa<br>'),(22,'test2','test2');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favourite`
--

DROP TABLE IF EXISTS `favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favourite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favourite`
--

LOCK TABLES `favourite` WRITE;
/*!40000 ALTER TABLE `favourite` DISABLE KEYS */;
INSERT INTO `favourite` VALUES (7,211,50),(8,14,51),(2,211,51);
/*!40000 ALTER TABLE `favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favourite_date`
--

DROP TABLE IF EXISTS `favourite_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favourite_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favourite_date`
--

LOCK TABLES `favourite_date` WRITE;
/*!40000 ALTER TABLE `favourite_date` DISABLE KEYS */;
/*!40000 ALTER TABLE `favourite_date` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flavor`
--

DROP TABLE IF EXISTS `flavor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flavor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flavor`
--

LOCK TABLES `flavor` WRITE;
/*!40000 ALTER TABLE `flavor` DISABLE KEYS */;
INSERT INTO `flavor` VALUES (1,'milk'),(2,'chockolate');
/*!40000 ALTER TABLE `flavor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (18,'images.jpeg','');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `get_in_touch`
--

DROP TABLE IF EXISTS `get_in_touch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `get_in_touch` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `get_in_touch`
--

LOCK TABLES `get_in_touch` WRITE;
/*!40000 ALTER TABLE `get_in_touch` DISABLE KEYS */;
INSERT INTO `get_in_touch` VALUES (1,'yakob222','yakob_strongman@yahoo.com','yakob'),(2,'yakob','yakob_strongman','something');
/*!40000 ALTER TABLE `get_in_touch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keys`
--

DROP TABLE IF EXISTS `keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keys`
--

LOCK TABLES `keys` WRITE;
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lon` float DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'headquarter',31.2565,30.2532,'First location');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `special_order` int(2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `order_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `country` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `address_1` varchar(200) DEFAULT NULL,
  `address_2` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(2,2,11,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(3,2,11,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(4,2,11,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(5,2,11,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(6,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(7,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(8,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(9,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(10,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(11,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(12,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(13,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(14,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(15,2,11,1,'2015-01-01 09:21:28',NULL,NULL,NULL,NULL,NULL,NULL),(16,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(17,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(18,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(19,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(20,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(21,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(22,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(23,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(24,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(25,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(26,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(27,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(28,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(29,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(30,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(31,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(32,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(33,2,11,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(34,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(35,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(36,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(37,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(38,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(39,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(40,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(41,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(42,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(43,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(44,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(45,2,12,1,'2015-01-03 11:21:37',NULL,NULL,NULL,NULL,NULL,NULL),(46,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(47,1,12,1,'2015-01-03 12:21:39',NULL,NULL,NULL,NULL,NULL,NULL),(48,1,12,1,'2015-01-03 12:21:52',NULL,NULL,NULL,NULL,NULL,NULL),(49,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(50,2,12,1,'2015-01-03 19:21:43',NULL,NULL,NULL,NULL,NULL,NULL),(51,2,12,1,'2015-01-03 12:28:51',NULL,NULL,NULL,NULL,NULL,NULL),(52,2,12,1,'2015-01-03 12:51:19',NULL,NULL,NULL,NULL,NULL,NULL),(53,NULL,12,1,'2015-01-03 18:56:35','','cairo','ahmed Al ziat street','ahmed Al ziat street','El-Doki',31111),(54,NULL,12,1,'2015-01-03 18:57:18','','cairo','ahmed Al ziat street','ahmed Al ziat street','El-Doki',31111),(55,NULL,12,1,'2015-01-03 19:06:30','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(56,NULL,12,1,'2015-01-05 20:53:16','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(57,NULL,12,1,'2015-01-05 20:54:26','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(58,NULL,12,1,'2015-01-05 20:55:14','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(59,NULL,12,1,'2015-01-05 20:56:00','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(60,NULL,12,1,'2015-01-05 20:57:52','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(61,NULL,12,1,'2015-01-05 20:58:43','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111),(62,NULL,12,1,'2015-01-05 20:59:23','','tanta','omar sa3fan street','omar sa3fan street','kesm tani',3111);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `flavor_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (11,51,13,2,120,1),(12,50,13,1,123,1),(13,51,14,2,120,1),(14,50,14,1,123,1),(15,51,15,2,120,1),(17,50,16,3,123,1),(18,51,16,5,120,1),(19,50,17,3,123,1),(20,51,17,5,120,1),(21,50,18,3,123,1),(22,51,18,5,120,1),(23,50,19,3,123,1),(24,51,19,5,120,1),(25,50,20,3,123,1),(26,51,20,5,120,1),(27,50,21,3,123,1),(28,51,21,5,120,1),(29,50,22,3,123,1),(30,51,22,5,120,1),(31,50,23,3,123,1),(32,51,23,5,120,1),(33,50,24,3,123,1),(34,51,24,5,120,1),(35,50,25,3,123,1),(36,51,25,5,120,1),(37,50,26,3,123,1),(38,51,26,5,120,1),(39,50,27,3,123,1),(40,51,27,5,120,1),(41,50,28,3,123,1),(42,51,28,5,120,1),(43,50,29,3,123,1),(44,51,29,5,120,1),(45,50,30,3,123,1),(46,51,30,5,120,1),(47,50,31,3,123,1),(48,51,31,5,120,1),(49,50,32,3,123,1),(50,51,32,5,120,1),(51,50,33,3,123,1),(52,51,33,5,120,1),(53,50,34,3,123,1),(54,51,34,5,120,1),(55,50,35,3,123,1),(56,51,35,5,120,1),(57,50,36,3,123,1),(58,51,36,5,120,1),(59,50,37,3,123,1),(60,51,37,5,120,1),(61,50,38,3,123,1),(62,51,38,5,120,1),(63,50,39,3,123,1),(64,51,39,5,120,1),(65,50,40,3,123,1),(66,51,40,5,120,1),(67,50,41,3,123,1),(68,51,41,5,120,1),(69,50,42,3,123,1),(70,51,42,5,120,1),(71,50,43,3,123,1),(72,51,43,5,120,1),(73,50,44,3,123,1),(74,51,44,5,120,1),(75,50,45,3,123,1),(76,51,45,5,120,1),(77,50,46,5,123,1),(78,51,46,5,120,1),(79,50,47,3,123,1),(80,51,47,5,120,1),(81,50,48,3,123,1),(82,51,48,5,120,1),(83,50,49,5,123,1),(84,51,49,5,120,1),(85,50,50,5,123,1),(86,51,50,5,120,1),(87,50,51,3,123,1),(88,51,51,5,120,1),(89,50,52,3,123,1),(90,51,52,5,120,1),(91,50,53,3,123,1),(92,51,53,5,120,1),(93,50,54,3,123,1),(94,51,54,5,120,1),(95,50,55,3,123,1),(96,51,55,5,120,1),(97,50,56,3,123,NULL),(98,51,56,5,120,NULL),(99,50,57,3,123,NULL),(100,51,57,5,120,NULL),(101,50,58,3,123,NULL),(102,51,58,5,120,NULL),(103,50,59,3,123,NULL),(104,51,59,5,120,NULL),(105,50,60,3,123,1),(106,51,60,5,120,1),(107,50,61,3,123,1),(108,51,61,5,120,1),(109,50,62,3,123,1),(110,51,62,5,120,1);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_contact`
--

DROP TABLE IF EXISTS `partner_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner_contact` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(66) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_contact`
--

LOCK TABLES `partner_contact` WRITE;
/*!40000 ALTER TABLE `partner_contact` DISABLE KEYS */;
INSERT INTO `partner_contact` VALUES (1,'yakob','yakob_strongman@yahoo.com','something');
/*!40000 ALTER TABLE `partner_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `category_id` int(22) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feature` int(2) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `visible` int(1) DEFAULT '1',
  `rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (50,0,'yakob','testing','solutions_banner1.jpg',1,123,20,1,NULL),(51,1,'test','testing','jakob.jpg',NULL,120,20,1,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `rating_value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate`
--

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
INSERT INTO `rate` VALUES (1,11,50,1),(2,11,51,3),(3,12,50,3),(4,12,51,2),(6,13,51,2),(7,13,50,5),(17,14,51,3);
/*!40000 ALTER TABLE `rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `special_order`
--

DROP TABLE IF EXISTS `special_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `special_order` (
  `id` int(11) NOT NULL DEFAULT '0',
  `description` text,
  `image` varchar(200) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `special_order`
--

LOCK TABLES `special_order` WRITE;
/*!40000 ALTER TABLE `special_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `special_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(66) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(88) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(2) DEFAULT '0',
  `active` int(2) NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (11,'admin','admin','21232f297a57a5a743894a0e4a801fc3','info@orchidiapharma.com',1,1,NULL),(12,'yakob','yakob','3e3188d853982bd3f3b3361e3ebbff14','yakob.abada@gmail.com',0,1,NULL),(14,'sara mohmed','saraMohmed','21232f297a57a5a743894a0e4a801fc3','yakob.abada1@gmail.com',0,0,'01144617823'),(15,'sara mohmed','ahmed','21232f297a57a5a743894a0e4a801fc3','ahmed@gmail.com',0,0,'01144617823');
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

-- Dump completed on 2015-01-05 23:00:42
