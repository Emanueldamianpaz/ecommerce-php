-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: davinci
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permission` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `permission`) VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imageName` varchar(45) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `starts` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_typeProducts_id_fk` (`id_type`),
  CONSTRAINT `products_typeProducts_id_fk` FOREIGN KEY (`id_type`) REFERENCES `typeProducts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `stock`, `imageName`, `price`, `id_type`, `size`, `starts`) VALUES (1,'Sweater','Un suéter (del inglés sweater, \'para sudar\') es una prenda de vestir de punto, frecuentemente de lana, algodón o telas sintéticas, la cual cubre el tronco y extremidades superiores. Por su grueso tejido es usado normalmente como prenda de abrigo.',100,'1',699,1,'XL',4),(2,'Grey T-Shirt','Prenda de ropa interior o deportiva, ligera, de punto, de hechura recta, sin cuello y con escote de distinto tipo, de manga larga, corta o sin mangas, que cubre el cuerpo hasta la cadera o medio muslo.',500,'2',200,1,'L',4),(3,'White T-Shirt','Prenda de ropa interior o deportiva, ligera, de punto, de hechura recta, sin cuello y con escote de distinto tipo, de manga larga, corta o sin mangas, que cubre el cuerpo hasta la cadera o medio muslo.',5,'3',200,1,'L',5),(4,'Demin Jacket','Chaqueta es una prenda de vestir de calle ajustada al torso, con manga larga, solapas y bolsillos, tanto interiores como exteriores, abierta por delante con una botonadura, que permite llevarse abierta o cerrada',10,'4',1200,1,'M',3),(5,'Blue Jeans','El jean es un pantalón tan popular en el mundo entero que, muy probablemente, la mayoría de personas tenga alguno entre su vestimenta habitual.',200,'5',900,2,'L',4),(6,'Green Trousers','Los trousers son una tendencia ideal para el día a día, ya que se pueden combinar con cualqueir tipo de zapatos',99,'6',800,2,'M',5),(7,'Red Shorts','El pantalón corto (también llamado short, corto en inglés) es una prenda de vestir usada tanto por varones como por mujeres que cubre las piernas',150,'7',300,2,'S',3);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeProducts`
--

DROP TABLE IF EXISTS `typeProducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typeProducts` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeProducts`
--

LOCK TABLES `typeProducts` WRITE;
/*!40000 ALTER TABLE `typeProducts` DISABLE KEYS */;
INSERT INTO `typeProducts` (`id`, `name`, `description`, `genre`) VALUES (1,'torso','camperas y remeras','hombre'),(2,'pantalon','pantalon','hombre'),(3,'accesorios','accesorios de hombre','hombre'),(4,'accesorios','accesorios de mujer','mujer'),(5,'torso','camperas y remeras','mujer'),(6,'pantalon','pantalon','mujer');
/*!40000 ALTER TABLE `typeProducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `id_permission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_permissions_id_fk` (`id_permission`),
  CONSTRAINT `users_permissions_id_fk` FOREIGN KEY (`id_permission`) REFERENCES `permissions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `id_permission`) VALUES (1,'emanuel.paz','123456','emanuel.paz@davinci.edu.ar',1),(2,'franco.ciffoni','123456','franco.ciffoni@davinci.edu.ar',1),(3,'christian.rivera','123456','christian.rivera@davinci.edu.ar',1),(4,'flavio.garrido','123456','flavio.garrido@davinci.edu.ar',2);
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

-- Dump completed on 2017-06-24 21:31:29