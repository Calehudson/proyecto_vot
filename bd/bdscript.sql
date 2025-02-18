/*
SQLyog Ultimate v9.63 
MySQL - 5.5.5-10.4.27-MariaDB : Database - bdpvot
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdpvot` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `bdpvot`;

/*Table structure for table `candidatos` */

DROP TABLE IF EXISTS `candidatos`;

CREATE TABLE `candidatos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `candidatos` */

insert  into `candidatos`(`id`,`nombre`) values (1,'Artista 1'),(2,'Artista 2'),(3,'Artista 3'),(4,'Artista 4'),(5,'Artista 5'),(6,'Artista 6');

/*Table structure for table `votos` */

DROP TABLE IF EXISTS `votos`;

CREATE TABLE `votos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `candidato_id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `candidato_idx` (`candidato_id`),
  CONSTRAINT `votos_fk` FOREIGN KEY (`candidato_id`) REFERENCES `candidatos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `votos` */

insert  into `votos`(`id`,`candidato_id`,`created_at`) values (1,2,'2025-02-10 01:12:23'),(2,4,'2025-02-10 01:12:32'),(3,1,'2025-02-10 01:12:37'),(4,1,'2025-02-10 01:12:54'),(5,5,'2025-02-10 01:14:06'),(6,2,'2025-02-11 23:16:58'),(7,1,'2025-02-11 23:17:05'),(8,1,'2025-02-16 01:50:30'),(9,1,'2025-02-16 01:50:33'),(10,1,'2025-02-16 01:50:34'),(11,6,'2025-02-16 01:50:47'),(12,1,'2025-02-18 01:03:28'),(13,2,'2025-02-18 01:03:31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
