CREATE DATABASE IF NOT EXISTS votaciondb
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE votaciondb;

/*Table structure for table `accesos_acc` */

DROP TABLE IF EXISTS `accesos_acc`;

CREATE TABLE `accesos_acc` (
  `acc_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_codigo` int(10) DEFAULT NULL,
  `acc_fecha` datetime DEFAULT current_timestamp(),
  `acc_ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`acc_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `accesos_acc` */

/*Table structure for table `categoria_cat` */

DROP TABLE IF EXISTS `categoria_cat`;

CREATE TABLE `categoria_cat` (
  `cat_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `cat_descripcion` varchar(100) DEFAULT NULL,
  `par_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`cat_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `categoria_cat` */

insert  into `categoria_cat`(`cat_codigo`,`cat_descripcion`,`par_codigo`) values (1,'Bachata',1),(2,'Salsa',1),(3,'Cumbia',1),(4,'Rock',2),(5,'Pop',2),(6,'Balada',2),(7,'Salsa',3),(8,'Tropical',3),(9,'Balada',3),(10,'Regueton',4),(11,'Pop',4),(12,'Salsa',4),(13,'Balada',5),(14,'Opera',5),(15,'Bolero',5),(16,'Jazz',6),(17,'Techno',6),(18,'Electro',6);

/*Table structure for table `participantes_par` */

DROP TABLE IF EXISTS `participantes_par`;

CREATE TABLE `participantes_par` (
  `par_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `par_nombre` varchar(100) NOT NULL,
  `par_apellidos` varchar(100) DEFAULT NULL,
  `par_pais` varchar(100) DEFAULT NULL,
  `par_sexo` varchar(100) DEFAULT NULL,
  `par_edad` int(2) DEFAULT NULL,
  `par_foto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`par_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `participantes_par` */

insert  into `participantes_par`(`par_codigo`,`par_nombre`,`par_apellidos`,`par_pais`,`par_sexo`,`par_edad`,`par_foto`) values (1,'Ana','Guerra','Navarra','Femenino',22,'pic8.jpg'),(2,'Rick','Ahmad','Madrid','Masculino',23,'pic3.jpg'),(3,'Clau','Linares','Extremadura','Femenino',21,'pic4.jpg'),(4,'José','Reyes','Cataluña','Masculino',24,'pic6.jpg'),(5,'Lita','Pereira','Valencia','Femenino',21,'pic5.jpg'),(6,'Cheo','Torres','Andalucia','Masculino',22,'pic7.jpg');

/*Table structure for table `usuarios_usu` */

DROP TABLE IF EXISTS `usuarios_usu`;

CREATE TABLE `usuarios_usu` (
  `usu_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `usu_name` varchar(100) DEFAULT NULL,
  `usu_pass` varchar(100) DEFAULT NULL,
  `usu_tipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `usuarios_usu` */

insert  into `usuarios_usu`(`usu_codigo`,`usu_name`,`usu_pass`,`usu_tipo`) values (1,'user','user11','Normal'),(2,'admin','admin11','Super');

/*Table structure for table `visitas_vis` */

DROP TABLE IF EXISTS `visitas_vis`;

CREATE TABLE `visitas_vis` (
  `vis_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `vis_fecha` datetime DEFAULT current_timestamp(),
  `vis_ip` varchar(45) DEFAULT NULL,
  `vis_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vis_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `visitas_vis` */

insert  into `visitas_vis`(`vis_codigo`,`vis_fecha`,`vis_ip`,`vis_url`) values (1,'2025-03-03 01:17:11','::1','http://localhost/proyecto_vot2/'),(2,'2025-03-03 01:18:08','::1','http://localhost/proyecto_vot2/'),(3,'2025-03-03 01:20:11','::1','http://localhost/proyecto_vot2/'),(4,'2025-03-03 01:20:46','::1','http://localhost/proyecto_vot2/'),(5,'2025-03-03 01:21:03','::1','http://localhost/proyecto_vot2/participantes'),(6,'2025-03-03 01:21:12','::1','http://localhost/proyecto_vot2/votaciones'),(7,'2025-03-03 01:21:57','::1','http://localhost/proyecto_vot2/'),(8,'2025-03-03 01:25:29','::1','http://localhost/proyecto_vot2/votaciones'),(9,'2025-03-03 01:25:32','::1','http://localhost/proyecto_vot2/'),(10,'2025-03-03 01:28:33','::1','http://localhost/proyecto_vot2/'),(11,'2025-03-03 01:28:38','::1','http://localhost/proyecto_vot2/participantes'),(12,'2025-03-03 01:28:40','::1','http://localhost/proyecto_vot2/'),(13,'2025-03-03 01:28:45','::1','http://localhost/proyecto_vot2/votaciones'),(14,'2025-03-03 01:28:47','::1','http://localhost/proyecto_vot2/'),(15,'2025-03-03 01:28:49','::1','http://localhost/proyecto_vot2/participantes'),(16,'2025-03-03 01:28:51','::1','http://localhost/proyecto_vot2/'),(17,'2025-03-03 15:13:45','::1','http://localhost/proyecto_vot2/'),(18,'2025-03-03 15:14:01','::1','http://localhost/proyecto_vot2/participantes'),(19,'2025-03-03 15:14:04','::1','http://localhost/proyecto_vot2/'),(20,'2025-03-03 15:14:10','::1','http://localhost/proyecto_vot2/participantes'),(21,'2025-03-03 15:14:11','::1','http://localhost/proyecto_vot2/'),(22,'2025-03-03 15:14:28','::1','http://localhost/proyecto_vot2/votaciones'),(23,'2025-03-03 15:20:49','::1','http://localhost/proyecto_vot2/votaciones'),(24,'2025-03-03 15:23:13','::1','http://localhost/proyecto_vot2/votaciones'),(25,'2025-03-03 15:33:33','::1','http://localhost/proyecto_vot2/votaciones'),(26,'2025-03-03 15:34:04','::1','http://localhost/proyecto_vot2/'),(27,'2025-03-03 15:34:07','::1','http://localhost/proyecto_vot2/votaciones'),(28,'2025-03-03 15:38:10','::1','http://localhost/proyecto_vot2/participantes'),(29,'2025-03-03 15:38:12','::1','http://localhost/proyecto_vot2/votaciones'),(30,'2025-03-03 15:43:03','::1','http://localhost/proyecto_vot2/votaciones'),(31,'2025-03-03 15:43:12','::1','http://localhost/proyecto_vot2/votaciones'),(32,'2025-03-03 15:43:19','::1','http://localhost/proyecto_vot2/votaciones'),(33,'2025-03-03 15:43:27','::1','http://localhost/proyecto_vot2/votaciones'),(34,'2025-03-03 15:43:47','::1','http://localhost/proyecto_vot2/votaciones'),(35,'2025-03-03 15:43:50','::1','http://localhost/proyecto_vot2/votaciones'),(36,'2025-03-03 15:43:55','::1','http://localhost/proyecto_vot2/'),(37,'2025-03-03 15:45:03','::1','http://localhost/proyecto_vot2/votaciones'),(38,'2025-03-03 15:45:06','::1','http://localhost/proyecto_vot2/votaciones'),(39,'2025-03-03 15:45:09','::1','http://localhost/proyecto_vot2/votaciones'),(40,'2025-03-03 15:45:11','::1','http://localhost/proyecto_vot2/votaciones'),(41,'2025-03-03 15:45:12','::1','http://localhost/proyecto_vot2/'),(42,'2025-03-03 15:46:27','::1','http://localhost/proyecto_vot2/'),(43,'2025-03-03 15:47:12','::1','http://localhost/proyecto_vot2/'),(44,'2025-03-03 15:47:36','::1','http://localhost/proyecto_vot2/'),(45,'2025-03-03 15:47:51','::1','http://localhost/proyecto_vot2/votaciones'),(46,'2025-03-03 15:47:54','::1','http://localhost/proyecto_vot2/votaciones'),(47,'2025-03-03 15:47:56','::1','http://localhost/proyecto_vot2/votaciones'),(48,'2025-03-03 15:47:59','::1','http://localhost/proyecto_vot2/votaciones'),(49,'2025-03-03 15:48:00','::1','http://localhost/proyecto_vot2/'),(50,'2025-03-03 15:56:24','::1','http://localhost/proyecto_vot2/'),(51,'2025-03-03 15:56:26','::1','http://localhost/proyecto_vot2/votaciones'),(52,'2025-03-03 15:57:50','::1','http://localhost/proyecto_vot2/'),(53,'2025-03-03 15:57:52','::1','http://localhost/proyecto_vot2/'),(54,'2025-03-03 15:57:55','::1','http://localhost/proyecto_vot2/votaciones'),(55,'2025-03-03 15:57:59','::1','http://localhost/proyecto_vot2/votaciones'),(56,'2025-03-03 15:58:20','::1','http://localhost/proyecto_vot2/votaciones'),(57,'2025-03-03 15:58:29','::1','http://localhost/proyecto_vot2/votaciones'),(58,'2025-03-03 16:08:22','::1','http://localhost/proyecto_vot2/votaciones'),(59,'2025-03-03 16:08:35','::1','http://localhost/proyecto_vot2/votaciones'),(60,'2025-03-03 16:08:39','::1','http://localhost/proyecto_vot2/'),(61,'2025-03-03 16:08:40','::1','http://localhost/proyecto_vot2/participantes'),(62,'2025-03-03 16:08:42','::1','http://localhost/proyecto_vot2/votaciones'),(63,'2025-03-03 16:09:06','::1','http://localhost/proyecto_vot2/votaciones'),(64,'2025-03-03 16:09:27','::1','http://localhost/proyecto_vot2/participantes'),(65,'2025-03-03 16:09:28','::1','http://localhost/proyecto_vot2/'),(66,'2025-03-03 16:09:30','::1','http://localhost/proyecto_vot2/votaciones'),(67,'2025-03-03 16:09:46','::1','http://localhost/proyecto_vot2/'),(68,'2025-03-03 16:09:54','::1','http://localhost/proyecto_vot2/votaciones'),(69,'2025-03-03 16:10:38','::1','http://localhost/proyecto_vot2/votaciones'),(70,'2025-03-03 16:10:49','::1','http://localhost/proyecto_vot2/'),(71,'2025-03-03 16:43:08','::1','http://localhost/proyecto_vot/'),(72,'2025-03-03 16:43:12','::1','http://localhost/proyecto_vot/participantes'),(73,'2025-03-03 16:43:16','::1','http://localhost/proyecto_vot/votaciones'),(74,'2025-03-05 00:27:39','::1','http://localhost/proyecto_vot/participantes'),(75,'2025-03-05 00:49:41','::1','http://localhost/proyecto_vot/participantes'),(76,'2025-03-05 01:15:12','::1','http://localhost/proyecto_vot/'),(77,'2025-03-05 01:17:20','::1','http://localhost/proyecto_vot/'),(78,'2025-03-05 01:17:48','::1','http://localhost/proyecto_vot/'),(79,'2025-03-05 01:18:39','::1','http://localhost/proyecto_vot/'),(80,'2025-03-05 01:19:27','::1','http://localhost/proyecto_vot/'),(81,'2025-03-05 01:19:58','::1','http://localhost/proyecto_vot/'),(82,'2025-03-05 01:19:59','::1','http://localhost/proyecto_vot/participantes'),(83,'2025-03-05 01:26:33','::1','http://localhost/proyecto_vot/'),(84,'2025-03-05 01:31:05','::1','http://localhost/proyecto_vot/votaciones'),(85,'2025-03-05 01:31:08','::1','http://localhost/proyecto_vot/votaciones'),(86,'2025-03-05 01:31:24','::1','http://localhost/proyecto_vot/'),(87,'2025-03-05 01:31:27','::1','http://localhost/proyecto_vot/votaciones'),(88,'2025-03-05 01:37:45','::1','http://localhost/proyecto_vot/votaciones'),(89,'2025-03-05 01:37:54','::1','http://localhost/proyecto_vot/votaciones'),(90,'2025-03-05 01:39:46','::1','http://localhost/proyecto_vot/votaciones'),(91,'2025-03-05 01:57:29','::1','http://localhost/proyecto_vot/'),(92,'2025-03-05 01:57:33','::1','http://localhost/proyecto_vot/participantes'),(93,'2025-03-05 01:57:36','::1','http://localhost/proyecto_vot/votaciones'),(94,'2025-03-05 02:02:09','::1','http://localhost/proyecto_vot/'),(95,'2025-03-05 02:02:12','::1','http://localhost/proyecto_vot/votaciones'),(96,'2025-03-05 02:06:13','::1','http://localhost/proyecto_vot/'),(97,'2025-03-05 02:06:39','::1','http://localhost/proyecto_vot/'),(98,'2025-03-05 02:06:43','::1','http://localhost/proyecto_vot/votaciones'),(99,'2025-03-05 02:08:50','::1','http://localhost/proyecto_vot/votaciones'),(100,'2025-03-05 02:08:53','::1','http://localhost/proyecto_vot/votaciones'),(101,'2025-03-05 02:09:21','::1','http://localhost/proyecto_vot/'),(102,'2025-03-05 02:09:24','::1','http://localhost/proyecto_vot/votaciones'),(103,'2025-03-05 02:12:05','::1','http://localhost/proyecto_vot/votaciones'),(104,'2025-03-05 02:12:08','::1','http://localhost/proyecto_vot/votaciones'),(105,'2025-03-05 02:12:52','::1','http://localhost/proyecto_vot/'),(106,'2025-03-05 02:12:54','::1','http://localhost/proyecto_vot/votaciones'),(107,'2025-03-05 02:14:09','::1','http://localhost/proyecto_vot/votaciones'),(108,'2025-03-05 02:14:12','::1','http://localhost/proyecto_vot/votaciones'),(109,'2025-03-05 02:14:25','::1','http://localhost/proyecto_vot/'),(110,'2025-03-05 02:14:27','::1','http://localhost/proyecto_vot/votaciones'),(111,'2025-03-05 02:17:30','::1','http://localhost/proyecto_vot/votaciones'),(112,'2025-03-05 02:17:33','::1','http://localhost/proyecto_vot/votaciones'),(113,'2025-03-05 02:18:22','::1','http://localhost/proyecto_vot/votaciones'),(114,'2025-03-05 02:18:24','::1','http://localhost/proyecto_vot/votaciones'),(115,'2025-03-05 02:20:14','::1','http://localhost/proyecto_vot/votaciones'),(116,'2025-03-05 02:20:16','::1','http://localhost/proyecto_vot/votaciones'),(117,'2025-03-05 02:22:12','::1','http://localhost/proyecto_vot/votaciones'),(118,'2025-03-05 02:28:30','::1','http://localhost/proyecto_vot/votaciones'),(119,'2025-03-05 02:29:04','::1','http://localhost/proyecto_vot/votaciones'),(120,'2025-03-05 02:29:13','::1','http://localhost/proyecto_vot/votaciones'),(121,'2025-03-05 02:29:24','::1','http://localhost/proyecto_vot/votaciones'),(122,'2025-03-05 02:30:11','::1','http://localhost/proyecto_vot/participantes'),(123,'2025-03-05 02:30:14','::1','http://localhost/proyecto_vot/'),(124,'2025-03-05 02:30:23','::1','http://localhost/proyecto_vot/participantes'),(125,'2025-03-05 02:30:29','::1','http://localhost/proyecto_vot/votaciones'),(126,'2025-03-05 02:30:40','::1','http://localhost/proyecto_vot/'),(127,'2025-03-05 02:30:53','::1','http://localhost/proyecto_vot/participantes'),(128,'2025-03-05 02:30:55','::1','http://localhost/proyecto_vot/votaciones'),(129,'2025-03-05 02:30:58','::1','http://localhost/proyecto_vot/'),(130,'2025-03-05 02:43:18','::1','http://localhost/proyecto_vot/'),(131,'2025-03-05 02:43:34','::1','http://localhost/proyecto_vot/participantes'),(132,'2025-03-05 02:43:36','::1','http://localhost/proyecto_vot/votaciones'),(133,'2025-03-05 02:43:47','::1','http://localhost/proyecto_vot/'),(134,'2025-03-05 10:48:59','::1','http://localhost/proyecto_vot/'),(135,'2025-03-05 10:49:04','::1','http://localhost/proyecto_vot/participantes'),(136,'2025-03-05 10:49:09','::1','http://localhost/proyecto_vot/votaciones'),(137,'2025-03-05 10:49:31','::1','http://localhost/proyecto_vot/'),(138,'2025-03-05 11:47:25','::1','http://localhost/proyecto_vot/'),(139,'2025-03-05 18:16:18','::1','http://localhost/proyecto_vot/'),(140,'2025-03-05 18:45:52','::1','http://localhost/proyecto_vot/'),(141,'2025-03-05 19:15:22','::1','http://localhost/proyecto_vot/participantes'),(142,'2025-03-05 19:15:30','::1','http://localhost/proyecto_vot/votaciones'),(143,'2025-03-05 19:16:01','::1','http://localhost/proyecto_vot/votaciones'),(144,'2025-03-05 19:16:07','::1','http://localhost/proyecto_vot/votaciones'),(145,'2025-03-05 23:52:13','::1','http://localhost/proyecto_vot/'),(146,'2025-03-06 00:25:56','::1','http://localhost/proyecto_vot/'),(147,'2025-03-07 23:46:10','::1','http://localhost/proyecto_vot/'),(148,'2025-03-08 00:01:22','::1','http://localhost/proyecto_vot/'),(149,'2025-03-08 00:01:48','::1','http://localhost/proyecto_vot/'),(150,'2025-03-08 00:28:19','::1','http://localhost/proyecto_vot/'),(151,'2025-03-08 00:28:32','::1','http://localhost/proyecto_vot/'),(152,'2025-03-08 00:29:12','::1','http://localhost/proyecto_vot/'),(153,'2025-03-08 00:29:26','::1','http://localhost/proyecto_vot/'),(154,'2025-03-08 00:30:34','::1','http://localhost/proyecto_vot/'),(155,'2025-03-08 00:34:15','::1','http://localhost/proyecto_vot/'),(156,'2025-03-08 00:34:17','::1','http://localhost/proyecto_vot/'),(157,'2025-03-08 00:34:34','::1','http://localhost/proyecto_vot/'),(158,'2025-03-08 00:41:15','::1','http://localhost/proyecto_vot/'),(159,'2025-03-08 00:42:02','::1','http://localhost/proyecto_vot/'),(160,'2025-03-08 00:43:14','::1','http://localhost/proyecto_vot/'),(161,'2025-03-08 00:44:55','::1','http://localhost/proyecto_vot/?'),(162,'2025-03-08 00:48:07','::1','http://localhost/proyecto_vot/'),(163,'2025-03-08 00:48:14','::1','http://localhost/proyecto_vot/'),(164,'2025-03-08 00:49:30','::1','http://localhost/proyecto_vot/'),(165,'2025-03-08 01:02:28','::1','http://localhost/proyecto_vot/'),(166,'2025-03-08 01:04:02','::1','http://localhost/proyecto_vot/'),(167,'2025-03-09 02:16:47','::1','http://localhost/proyecto_vot/'),(168,'2025-03-09 02:28:57','::1','http://localhost/proyecto_vot/'),(169,'2025-03-19 07:40:44','::1','http://localhost/proyecto_vot/'),(170,'2025-03-19 07:40:55','::1','http://localhost/proyecto_vot/'),(171,'2025-03-19 07:51:45','::1','http://localhost/proyecto_vot/'),(172,'2025-03-19 07:51:50','::1','http://localhost/proyecto_vot/participantes'),(173,'2025-03-19 07:52:16','::1','http://localhost/proyecto_vot/participantes'),(174,'2025-03-19 07:52:17','::1','http://localhost/proyecto_vot/participantes'),(175,'2025-03-19 07:52:26','::1','http://localhost/proyecto_vot/participantes'),(176,'2025-03-19 07:53:44','::1','http://localhost/proyecto_vot/'),(177,'2025-03-19 07:53:47','::1','http://localhost/proyecto_vot/participantes'),(178,'2025-03-19 09:23:21','::1','http://localhost/proyecto_vot/participantes'),(179,'2025-03-19 09:23:51','::1','http://localhost/proyecto_vot/participantes'),(180,'2025-03-19 09:23:54','::1','http://localhost/proyecto_vot/'),(181,'2025-03-19 09:23:56','::1','http://localhost/proyecto_vot/participantes'),(182,'2025-03-19 09:24:17','::1','http://localhost/proyecto_vot/'),(183,'2025-03-19 09:24:24','::1','http://localhost/proyecto_vot/'),(184,'2025-03-19 09:24:27','::1','http://localhost/proyecto_vot/participantes'),(185,'2025-03-19 09:30:01','::1','http://localhost/proyecto_vot/'),(186,'2025-03-19 09:30:03','::1','http://localhost/proyecto_vot/participantes');

/*Table structure for table `votos_vot` */

DROP TABLE IF EXISTS `votos_vot`;

CREATE TABLE `votos_vot` (
  `vot_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `par_codigo` int(10) unsigned NOT NULL,
  `vot_ip` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`vot_codigo`),
  KEY `candidato_idx` (`par_codigo`),
  CONSTRAINT `votos_fk` FOREIGN KEY (`par_codigo`) REFERENCES `participantes_par` (`par_codigo`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `votos_vot` */

insert  into `votos_vot`(`vot_codigo`,`par_codigo`,`vot_ip`,`created_at`) values (1,2,NULL,'2025-02-10 01:12:23'),(2,4,NULL,'2025-02-10 01:12:32'),(3,1,NULL,'2025-02-10 01:12:37'),(4,1,NULL,'2025-02-10 01:12:54'),(5,5,NULL,'2025-02-10 01:14:06'),(6,2,NULL,'2025-02-11 23:16:58'),(7,1,NULL,'2025-02-11 23:17:05'),(8,1,NULL,'2025-02-16 01:50:30'),(9,1,NULL,'2025-02-16 01:50:33'),(10,1,NULL,'2025-02-16 01:50:34'),(11,6,NULL,'2025-02-16 01:50:47'),(12,1,NULL,'2025-02-18 01:03:28'),(13,2,NULL,'2025-02-18 01:03:31'),(14,2,NULL,'2025-02-19 17:08:47'),(15,1,NULL,'2025-02-19 17:08:53'),(16,3,NULL,'2025-02-19 17:08:58'),(17,3,NULL,'2025-02-19 17:09:02'),(18,4,NULL,'2025-02-19 17:09:07'),(19,4,NULL,'2025-02-19 17:09:10'),(20,2,NULL,'2025-02-19 17:27:41'),(21,3,NULL,'2025-02-19 17:27:45'),(22,1,NULL,'2025-02-19 17:27:49'),(23,2,NULL,'2025-03-01 01:08:22'),(24,2,NULL,'2025-03-02 23:16:00'),(25,1,'::24','2025-03-03 15:34:09'),(26,2,'::23','2025-03-03 15:37:58'),(27,1,'::22','2025-03-03 15:41:49'),(28,3,'::4','2025-03-03 15:43:07'),(29,2,'::10','2025-03-03 15:43:17'),(30,1,'::9','2025-03-03 15:43:26'),(31,1,'::8','2025-03-03 15:43:46'),(32,1,'::7','2025-03-03 15:43:49'),(33,1,'::6','2025-03-03 15:45:05'),(34,1,'::5','2025-03-03 15:45:08'),(35,1,'::3','2025-03-03 15:45:10'),(36,1,'::2','2025-03-03 15:47:53'),(37,1,'::11','2025-03-03 15:47:56'),(38,1,'::12','2025-03-03 15:47:58'),(42,2,'::14','2025-03-03 16:09:04'),(43,2,'::70','2025-03-05 02:29:21'),(44,2,'::1','2025-03-05 19:16:04');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;



-- 1) Asegurar la base de datos y seleccionarla
CREATE DATABASE IF NOT EXISTS votaciondb
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE votaciondb;

-- 2) Desactivar temporalmente los chequeos de FK y de modo obligatorio
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ENGINE_SUBSTITUTION' */;

-- 3) Crear tablas (si no existen) y cargar datos

-- accesos_acc
CREATE TABLE IF NOT EXISTS `accesos_acc` (
  `acc_codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `usu_codigo` INT(10) DEFAULT NULL,
  `acc_fecha` DATETIME DEFAULT CURRENT_TIMESTAMP(),
  `acc_ip` VARCHAR(45) DEFAULT NULL,
  PRIMARY KEY (`acc_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- categoria_cat
CREATE TABLE IF NOT EXISTS `categoria_cat` (
  `cat_codigo` INT(10) NOT NULL AUTO_INCREMENT,
  `cat_descripcion` VARCHAR(100) DEFAULT NULL,
  `par_codigo` INT(10) DEFAULT NULL,
  PRIMARY KEY (`cat_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categoria_cat` (`cat_codigo`,`cat_descripcion`,`par_codigo`) VALUES
  (1,'Bachata',1),(2,'Salsa',1),(3,'Cumbia',1),
  (4,'Rock',2),(5,'Pop',2),(6,'Balada',2),
  (7,'Salsa',3),(8,'Tropical',3),(9,'Balada',3),
  (10,'Regueton',4),(11,'Pop',4),(12,'Salsa',4),
  (13,'Balada',5),(14,'Opera',5),(15,'Bolero',5),
  (16,'Jazz',6),(17,'Techno',6),(18,'Electro',6)
ON DUPLICATE KEY UPDATE
  cat_descripcion = VALUES(cat_descripcion),
  par_codigo      = VALUES(par_codigo);

-- participantes_par
CREATE TABLE IF NOT EXISTS `participantes_par` (
  `par_codigo` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `par_nombre` VARCHAR(100) NOT NULL,
  `par_apellidos` VARCHAR(100) DEFAULT NULL,
  `par_pais` VARCHAR(100) DEFAULT NULL,
  `par_sexo` VARCHAR(100) DEFAULT NULL,
  `par_edad` INT(2) DEFAULT NULL,
  `par_foto` VARCHAR(1000) DEFAULT NULL,
  PRIMARY KEY (`par_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `participantes_par`
  (`par_codigo`,`par_nombre`,`par_apellidos`,`par_pais`,`par_sexo`,`par_edad`,`par_foto`) VALUES
  (1,'Ana','Guerra','Navarra','Femenino',22,'pic8.jpg'),
  (2,'Rick','Ahmad','Madrid','Masculino',23,'pic3.jpg'),
  (3,'Clau','Linares','Extremadura','Femenino',21,'pic4.jpg'),
  (4,'José','Reyes','Cataluña','Masculino',24,'pic6.jpg'),
  (5,'Lita','Pereira','Valencia','Femenino',21,'pic5.jpg'),
  (6,'Cheo','Torres','Andalucia','Masculino',22,'pic7.jpg')
ON DUPLICATE KEY UPDATE
  par_nombre   = VALUES(par_nombre),
  par_apellidos= VALUES(par_apellidos),
  par_pais     = VALUES(par_pais),
  par_sexo     = VALUES(par_sexo),
  par_edad     = VALUES(par_edad),
  par_foto     = VALUES(par_foto);

-- usuarios_usu
CREATE TABLE IF NOT EXISTS `usuarios_usu` (
  `usu_codigo` INT(10) NOT NULL AUTO_INCREMENT,
  `usu_name` VARCHAR(100) DEFAULT NULL,
  `usu_pass` VARCHAR(100) DEFAULT NULL,
  `usu_tipo` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios_usu`
  (`usu_codigo`,`usu_name`,`usu_pass`,`usu_tipo`) VALUES
  (1,'user','user11','Normal'),
  (2,'admin','admin11','Super')
ON DUPLICATE KEY UPDATE
  usu_name = VALUES(usu_name),
  usu_pass = VALUES(usu_pass),
  usu_tipo = VALUES(usu_tipo);

-- visitas_vis
CREATE TABLE IF NOT EXISTS `visitas_vis` (
  `vis_codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `vis_fecha` DATETIME DEFAULT CURRENT_TIMESTAMP(),
  `vis_ip` VARCHAR(45) DEFAULT NULL,
  `vis_url` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`vis_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `visitas_vis`
  (`vis_codigo`,`vis_fecha`,`vis_ip`,`vis_url`) VALUES
  (1,'2025-03-03 01:17:11','::1','http://localhost/proyecto_vot2/'),(2,'2025-03-03 01:18:08','::1','http://localhost/proyecto_vot2/'),(3,'2025-03-03 01:20:11','::1','http://localhost/proyecto_vot2/'),(4,'2025-03-03 01:20:46','::1','http://localhost/proyecto_vot2/'),(5,'2025-03-03 01:21:03','::1','http://localhost/proyecto_vot2/participantes'),(6,'2025-03-03 01:21:12','::1','http://localhost/proyecto_vot2/votaciones'),(7,'2025-03-03 01:21:57','::1','http://localhost/proyecto_vot2/'),(8,'2025-03-03 01:25:29','::1','http://localhost/proyecto_vot2/votaciones'),(9,'2025-03-03 01:25:32','::1','http://localhost/proyecto_vot2/'),(10,'2025-03-03 01:28:33','::1','http://localhost/proyecto_vot2/'),(11,'2025-03-03 01:28:38','::1','http://localhost/proyecto_vot2/participantes'),(12,'2025-03-03 01:28:40','::1','http://localhost/proyecto_vot2/'),(13,'2025-03-03 01:28:45','::1','http://localhost/proyecto_vot2/votaciones'),(14,'2025-03-03 01:28:47','::1','http://localhost/proyecto_vot2/'),(15,'2025-03-03 01:28:49','::1','http://localhost/proyecto_vot2/participantes'),(16,'2025-03-03 01:28:51','::1','http://localhost/proyecto_vot2/'),(17,'2025-03-03 15:13:45','::1','http://localhost/proyecto_vot2/'),(18,'2025-03-03 15:14:01','::1','http://localhost/proyecto_vot2/participantes'),(19,'2025-03-03 15:14:04','::1','http://localhost/proyecto_vot2/'),(20,'2025-03-03 15:14:10','::1','http://localhost/proyecto_vot2/participantes'),(21,'2025-03-03 15:14:11','::1','http://localhost/proyecto_vot2/'),(22,'2025-03-03 15:14:28','::1','http://localhost/proyecto_vot2/votaciones'),(23,'2025-03-03 15:20:49','::1','http://localhost/proyecto_vot2/votaciones'),(24,'2025-03-03 15:23:13','::1','http://localhost/proyecto_vot2/votaciones'),(25,'2025-03-03 15:33:33','::1','http://localhost/proyecto_vot2/votaciones'),(26,'2025-03-03 15:34:04','::1','http://localhost/proyecto_vot2/'),(27,'2025-03-03 15:34:07','::1','http://localhost/proyecto_vot2/votaciones'),(28,'2025-03-03 15:38:10','::1','http://localhost/proyecto_vot2/participantes'),(29,'2025-03-03 15:38:12','::1','http://localhost/proyecto_vot2/votaciones'),(30,'2025-03-03 15:43:03','::1','http://localhost/proyecto_vot2/votaciones'),(31,'2025-03-03 15:43:12','::1','http://localhost/proyecto_vot2/votaciones'),(32,'2025-03-03 15:43:19','::1','http://localhost/proyecto_vot2/votaciones'),(33,'2025-03-03 15:43:27','::1','http://localhost/proyecto_vot2/votaciones'),(34,'2025-03-03 15:43:47','::1','http://localhost/proyecto_vot2/votaciones'),(35,'2025-03-03 15:43:50','::1','http://localhost/proyecto_vot2/votaciones'),(36,'2025-03-03 15:43:55','::1','http://localhost/proyecto_vot2/'),(37,'2025-03-03 15:45:03','::1','http://localhost/proyecto_vot2/votaciones'),(38,'2025-03-03 15:45:06','::1','http://localhost/proyecto_vot2/votaciones'),(39,'2025-03-03 15:45:09','::1','http://localhost/proyecto_vot2/votaciones'),(40,'2025-03-03 15:45:11','::1','http://localhost/proyecto_vot2/votaciones'),(41,'2025-03-03 15:45:12','::1','http://localhost/proyecto_vot2/'),(42,'2025-03-03 15:46:27','::1','http://localhost/proyecto_vot2/'),(43,'2025-03-03 15:47:12','::1','http://localhost/proyecto_vot2/'),(44,'2025-03-03 15:47:36','::1','http://localhost/proyecto_vot2/'),(45,'2025-03-03 15:47:51','::1','http://localhost/proyecto_vot2/votaciones'),(46,'2025-03-03 15:47:54','::1','http://localhost/proyecto_vot2/votaciones'),(47,'2025-03-03 15:47:56','::1','http://localhost/proyecto_vot2/votaciones'),(48,'2025-03-03 15:47:59','::1','http://localhost/proyecto_vot2/votaciones'),(49,'2025-03-03 15:48:00','::1','http://localhost/proyecto_vot2/'),(50,'2025-03-03 15:56:24','::1','http://localhost/proyecto_vot2/'),(51,'2025-03-03 15:56:26','::1','http://localhost/proyecto_vot2/votaciones'),(52,'2025-03-03 15:57:50','::1','http://localhost/proyecto_vot2/'),(53,'2025-03-03 15:57:52','::1','http://localhost/proyecto_vot2/'),(54,'2025-03-03 15:57:55','::1','http://localhost/proyecto_vot2/votaciones'),(55,'2025-03-03 15:57:59','::1','http://localhost/proyecto_vot2/votaciones'),(56,'2025-03-03 15:58:20','::1','http://localhost/proyecto_vot2/votaciones'),(57,'2025-03-03 15:58:29','::1','http://localhost/proyecto_vot2/votaciones'),(58,'2025-03-03 16:08:22','::1','http://localhost/proyecto_vot2/votaciones'),(59,'2025-03-03 16:08:35','::1','http://localhost/proyecto_vot2/votaciones'),(60,'2025-03-03 16:08:39','::1','http://localhost/proyecto_vot2/'),(61,'2025-03-03 16:08:40','::1','http://localhost/proyecto_vot2/participantes'),(62,'2025-03-03 16:08:42','::1','http://localhost/proyecto_vot2/votaciones'),(63,'2025-03-03 16:09:06','::1','http://localhost/proyecto_vot2/votaciones'),(64,'2025-03-03 16:09:27','::1','http://localhost/proyecto_vot2/participantes'),(65,'2025-03-03 16:09:28','::1','http://localhost/proyecto_vot2/'),(66,'2025-03-03 16:09:30','::1','http://localhost/proyecto_vot2/votaciones'),(67,'2025-03-03 16:09:46','::1','http://localhost/proyecto_vot2/'),(68,'2025-03-03 16:09:54','::1','http://localhost/proyecto_vot2/votaciones'),(69,'2025-03-03 16:10:38','::1','http://localhost/proyecto_vot2/votaciones'),(70,'2025-03-03 16:10:49','::1','http://localhost/proyecto_vot2/'),(71,'2025-03-03 16:43:08','::1','http://localhost/proyecto_vot/'),(72,'2025-03-03 16:43:12','::1','http://localhost/proyecto_vot/participantes'),(73,'2025-03-03 16:43:16','::1','http://localhost/proyecto_vot/votaciones'),(74,'2025-03-05 00:27:39','::1','http://localhost/proyecto_vot/participantes'),(75,'2025-03-05 00:49:41','::1','http://localhost/proyecto_vot/participantes'),(76,'2025-03-05 01:15:12','::1','http://localhost/proyecto_vot/'),(77,'2025-03-05 01:17:20','::1','http://localhost/proyecto_vot/'),(78,'2025-03-05 01:17:48','::1','http://localhost/proyecto_vot/'),(79,'2025-03-05 01:18:39','::1','http://localhost/proyecto_vot/'),(80,'2025-03-05 01:19:27','::1','http://localhost/proyecto_vot/'),(81,'2025-03-05 01:19:58','::1','http://localhost/proyecto_vot/'),(82,'2025-03-05 01:19:59','::1','http://localhost/proyecto_vot/participantes'),(83,'2025-03-05 01:26:33','::1','http://localhost/proyecto_vot/'),(84,'2025-03-05 01:31:05','::1','http://localhost/proyecto_vot/votaciones'),(85,'2025-03-05 01:31:08','::1','http://localhost/proyecto_vot/votaciones'),(86,'2025-03-05 01:31:24','::1','http://localhost/proyecto_vot/'),(87,'2025-03-05 01:31:27','::1','http://localhost/proyecto_vot/votaciones'),(88,'2025-03-05 01:37:45','::1','http://localhost/proyecto_vot/votaciones'),(89,'2025-03-05 01:37:54','::1','http://localhost/proyecto_vot/votaciones'),(90,'2025-03-05 01:39:46','::1','http://localhost/proyecto_vot/votaciones'),(91,'2025-03-05 01:57:29','::1','http://localhost/proyecto_vot/'),(92,'2025-03-05 01:57:33','::1','http://localhost/proyecto_vot/participantes'),(93,'2025-03-05 01:57:36','::1','http://localhost/proyecto_vot/votaciones'),(94,'2025-03-05 02:02:09','::1','http://localhost/proyecto_vot/'),(95,'2025-03-05 02:02:12','::1','http://localhost/proyecto_vot/votaciones'),(96,'2025-03-05 02:06:13','::1','http://localhost/proyecto_vot/'),(97,'2025-03-05 02:06:39','::1','http://localhost/proyecto_vot/'),(98,'2025-03-05 02:06:43','::1','http://localhost/proyecto_vot/votaciones'),(99,'2025-03-05 02:08:50','::1','http://localhost/proyecto_vot/votaciones'),(100,'2025-03-05 02:08:53','::1','http://localhost/proyecto_vot/votaciones'),(101,'2025-03-05 02:09:21','::1','http://localhost/proyecto_vot/'),(102,'2025-03-05 02:09:24','::1','http://localhost/proyecto_vot/votaciones'),(103,'2025-03-05 02:12:05','::1','http://localhost/proyecto_vot/votaciones'),(104,'2025-03-05 02:12:08','::1','http://localhost/proyecto_vot/votaciones'),(105,'2025-03-05 02:12:52','::1','http://localhost/proyecto_vot/'),(106,'2025-03-05 02:12:54','::1','http://localhost/proyecto_vot/votaciones'),(107,'2025-03-05 02:14:09','::1','http://localhost/proyecto_vot/votaciones'),(108,'2025-03-05 02:14:12','::1','http://localhost/proyecto_vot/votaciones'),(109,'2025-03-05 02:14:25','::1','http://localhost/proyecto_vot/'),(110,'2025-03-05 02:14:27','::1','http://localhost/proyecto_vot/votaciones'),(111,'2025-03-05 02:17:30','::1','http://localhost/proyecto_vot/votaciones'),(112,'2025-03-05 02:17:33','::1','http://localhost/proyecto_vot/votaciones'),(113,'2025-03-05 02:18:22','::1','http://localhost/proyecto_vot/votaciones'),(114,'2025-03-05 02:18:24','::1','http://localhost/proyecto_vot/votaciones'),(115,'2025-03-05 02:20:14','::1','http://localhost/proyecto_vot/votaciones'),(116,'2025-03-05 02:20:16','::1','http://localhost/proyecto_vot/votaciones'),(117,'2025-03-05 02:22:12','::1','http://localhost/proyecto_vot/votaciones'),(118,'2025-03-05 02:28:30','::1','http://localhost/proyecto_vot/votaciones'),(119,'2025-03-05 02:29:04','::1','http://localhost/proyecto_vot/votaciones'),(120,'2025-03-05 02:29:13','::1','http://localhost/proyecto_vot/votaciones'),(121,'2025-03-05 02:29:24','::1','http://localhost/proyecto_vot/votaciones'),(122,'2025-03-05 02:30:11','::1','http://localhost/proyecto_vot/participantes'),(123,'2025-03-05 02:30:14','::1','http://localhost/proyecto_vot/'),(124,'2025-03-05 02:30:23','::1','http://localhost/proyecto_vot/participantes'),(125,'2025-03-05 02:30:29','::1','http://localhost/proyecto_vot/votaciones'),(126,'2025-03-05 02:30:40','::1','http://localhost/proyecto_vot/'),(127,'2025-03-05 02:30:53','::1','http://localhost/proyecto_vot/participantes'),(128,'2025-03-05 02:30:55','::1','http://localhost/proyecto_vot/votaciones'),(129,'2025-03-05 02:30:58','::1','http://localhost/proyecto_vot/'),(130,'2025-03-05 02:43:18','::1','http://localhost/proyecto_vot/'),(131,'2025-03-05 02:43:34','::1','http://localhost/proyecto_vot/participantes'),(132,'2025-03-05 02:43:36','::1','http://localhost/proyecto_vot/votaciones'),(133,'2025-03-05 02:43:47','::1','http://localhost/proyecto_vot/'),(134,'2025-03-05 10:48:59','::1','http://localhost/proyecto_vot/'),(135,'2025-03-05 10:49:04','::1','http://localhost/proyecto_vot/participantes'),(136,'2025-03-05 10:49:09','::1','http://localhost/proyecto_vot/votaciones'),(137,'2025-03-05 10:49:31','::1','http://localhost/proyecto_vot/'),(138,'2025-03-05 11:47:25','::1','http://localhost/proyecto_vot/'),(139,'2025-03-05 18:16:18','::1','http://localhost/proyecto_vot/'),(140,'2025-03-05 18:45:52','::1','http://localhost/proyecto_vot/'),(141,'2025-03-05 19:15:22','::1','http://localhost/proyecto_vot/participantes'),(142,'2025-03-05 19:15:30','::1','http://localhost/proyecto_vot/votaciones'),(143,'2025-03-05 19:16:01','::1','http://localhost/proyecto_vot/votaciones'),(144,'2025-03-05 19:16:07','::1','http://localhost/proyecto_vot/votaciones'),(145,'2025-03-05 23:52:13','::1','http://localhost/proyecto_vot/'),(146,'2025-03-06 00:25:56','::1','http://localhost/proyecto_vot/'),(147,'2025-03-07 23:46:10','::1','http://localhost/proyecto_vot/'),(148,'2025-03-08 00:01:22','::1','http://localhost/proyecto_vot/'),(149,'2025-03-08 00:01:48','::1','http://localhost/proyecto_vot/'),(150,'2025-03-08 00:28:19','::1','http://localhost/proyecto_vot/'),(151,'2025-03-08 00:28:32','::1','http://localhost/proyecto_vot/'),(152,'2025-03-08 00:29:12','::1','http://localhost/proyecto_vot/'),(153,'2025-03-08 00:29:26','::1','http://localhost/proyecto_vot/'),(154,'2025-03-08 00:30:34','::1','http://localhost/proyecto_vot/'),(155,'2025-03-08 00:34:15','::1','http://localhost/proyecto_vot/'),(156,'2025-03-08 00:34:17','::1','http://localhost/proyecto_vot/'),(157,'2025-03-08 00:34:34','::1','http://localhost/proyecto_vot/'),(158,'2025-03-08 00:41:15','::1','http://localhost/proyecto_vot/'),(159,'2025-03-08 00:42:02','::1','http://localhost/proyecto_vot/'),(160,'2025-03-08 00:43:14','::1','http://localhost/proyecto_vot/'),(161,'2025-03-08 00:44:55','::1','http://localhost/proyecto_vot/?'),(162,'2025-03-08 00:48:07','::1','http://localhost/proyecto_vot/'),(163,'2025-03-08 00:48:14','::1','http://localhost/proyecto_vot/'),(164,'2025-03-08 00:49:30','::1','http://localhost/proyecto_vot/'),(165,'2025-03-08 01:02:28','::1','http://localhost/proyecto_vot/'),(166,'2025-03-08 01:04:02','::1','http://localhost/proyecto_vot/'),(167,'2025-03-09 02:16:47','::1','http://localhost/proyecto_vot/'),(168,'2025-03-09 02:28:57','::1','http://localhost/proyecto_vot/'),(169,'2025-03-19 07:40:44','::1','http://localhost/proyecto_vot/'),(170,'2025-03-19 07:40:55','::1','http://localhost/proyecto_vot/'),(171,'2025-03-19 07:51:45','::1','http://localhost/proyecto_vot/'),(172,'2025-03-19 07:51:50','::1','http://localhost/proyecto_vot/participantes'),(173,'2025-03-19 07:52:16','::1','http://localhost/proyecto_vot/participantes'),(174,'2025-03-19 07:52:17','::1','http://localhost/proyecto_vot/participantes'),(175,'2025-03-19 07:52:26','::1','http://localhost/proyecto_vot/participantes'),(176,'2025-03-19 07:53:44','::1','http://localhost/proyecto_vot/'),(177,'2025-03-19 07:53:47','::1','http://localhost/proyecto_vot/participantes'),(178,'2025-03-19 09:23:21','::1','http://localhost/proyecto_vot/participantes'),(179,'2025-03-19 09:23:51','::1','http://localhost/proyecto_vot/participantes'),(180,'2025-03-19 09:23:54','::1','http://localhost/proyecto_vot/'),(181,'2025-03-19 09:23:56','::1','http://localhost/proyecto_vot/participantes'),(182,'2025-03-19 09:24:17','::1','http://localhost/proyecto_vot/'),(183,'2025-03-19 09:24:24','::1','http://localhost/proyecto_vot/'),(184,'2025-03-19 09:24:27','::1','http://localhost/proyecto_vot/participantes'),(185,'2025-03-19 09:30:01','::1','http://localhost/proyecto_vot/'),(186,'2025-03-19 09:30:03','::1','http://localhost/proyecto_vot/participantes')
ON DUPLICATE KEY UPDATE
  vis_fecha = VALUES(vis_fecha),
  vis_ip    = VALUES(vis_ip),
  vis_url   = VALUES(vis_url);

-- votos_vot
CREATE TABLE IF NOT EXISTS `votos_vot` (
  `vot_codigo` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `par_codigo` INT(10) UNSIGNED NOT NULL,
  `vot_ip` VARCHAR(100) DEFAULT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`vot_codigo`),
  KEY `candidato_idx` (`par_codigo`),
  CONSTRAINT `votos_fk` FOREIGN KEY (`par_codigo`)
    REFERENCES `participantes_par` (`par_codigo`)
    ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `votos_vot`
  (`vot_codigo`,`par_codigo`,`vot_ip`,`created_at`) VALUES
  (1,2,NULL,'2025-02-10 01:12:23'),(2,4,NULL,'2025-02-10 01:12:32'),(3,1,NULL,'2025-02-10 01:12:37'),(4,1,NULL,'2025-02-10 01:12:54'),(5,5,NULL,'2025-02-10 01:14:06'),(6,2,NULL,'2025-02-11 23:16:58'),(7,1,NULL,'2025-02-11 23:17:05'),(8,1,NULL,'2025-02-16 01:50:30'),(9,1,NULL,'2025-02-16 01:50:33'),(10,1,NULL,'2025-02-16 01:50:34'),(11,6,NULL,'2025-02-16 01:50:47'),(12,1,NULL,'2025-02-18 01:03:28'),(13,2,NULL,'2025-02-18 01:03:31'),(14,2,NULL,'2025-02-19 17:08:47'),(15,1,NULL,'2025-02-19 17:08:53'),(16,3,NULL,'2025-02-19 17:08:58'),(17,3,NULL,'2025-02-19 17:09:02'),(18,4,NULL,'2025-02-19 17:09:07'),(19,4,NULL,'2025-02-19 17:09:10'),(20,2,NULL,'2025-02-19 17:27:41'),(21,3,NULL,'2025-02-19 17:27:45'),(22,1,NULL,'2025-02-19 17:27:49'),(23,2,NULL,'2025-03-01 01:08:22'),(24,2,NULL,'2025-03-02 23:16:00'),(25,1,'::24','2025-03-03 15:34:09'),(26,2,'::23','2025-03-03 15:37:58'),(27,1,'::22','2025-03-03 15:41:49'),(28,3,'::4','2025-03-03 15:43:07'),(29,2,'::10','2025-03-03 15:43:17'),(30,1,'::9','2025-03-03 15:43:26'),(31,1,'::8','2025-03-03 15:43:46'),(32,1,'::7','2025-03-03 15:43:49'),(33,1,'::6','2025-03-03 15:45:05'),(34,1,'::5','2025-03-03 15:45:08'),(35,1,'::3','2025-03-03 15:45:10'),(36,1,'::2','2025-03-03 15:47:53'),(37,1,'::11','2025-03-03 15:47:56'),(38,1,'::12','2025-03-03 15:47:58'),(42,2,'::14','2025-03-03 16:09:04'),(43,2,'::70','2025-03-05 02:29:21'),(44,2,'::1','2025-03-05 19:16:04')
ON DUPLICATE KEY UPDATE
  par_codigo  = VALUES(par_codigo),
  vot_ip      = VALUES(vot_ip),
  created_at  = VALUES(created_at);

-- 4) Restaurar los checks de FK y el SQL mode
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

