/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

DROP TABLE IF EXISTS `categoria_cat`;
CREATE TABLE `categoria_cat` (
  `cat_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `cat_descripcion` varchar(100) DEFAULT NULL,
  `par_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`cat_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categoria_cat` (`cat_codigo`,`cat_descripcion`,`par_codigo`) 
VALUES (1,'Bachata',1),(2,'Salsa',1),(3,'Cumbia',1),
       (4,'Rock',2),(5,'Pop',2),(6,'Balada',2),
       (7,'Salsa',3),(8,'Tropical',3),(9,'Balada',3),
       (10,'Regueton',4),(11,'Pop',4),(12,'Salsa',4),
       (13,'Balada',5),(14,'Opera',5),(15,'Bolero',5),
       (16,'Jazz',6),(17,'Techno',6),(18,'Electro',6);

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

INSERT INTO `participantes_par` (`par_codigo`,`par_nombre`,`par_apellidos`,`par_pais`,`par_sexo`,`par_edad`,`par_foto`) 
VALUES (1,'Ana','Guerra','Navarra','Femenino',22,'pic8.jpg'),
       (2,'Rick','Ahmad','Madrid','Masculino',23,'pic3.jpg'),
       (3,'Clau','Linares','Extremadura','Femenino',21,'pic4.jpg'),
       (4,'José','Reyes','Cataluña','Masculino',24,'pic6.jpg'),
       (5,'Lita','Pereira','Valencia','Femenino',21,'pic5.jpg'),
       (6,'Cheo','Torres','Andalucia','Masculino',22,'pic7.jpg');

DROP TABLE IF EXISTS `votos_vot`;
CREATE TABLE `votos_vot` (
  `vot_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `par_codigo` int(10) unsigned NOT NULL,
  `vot_ip` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`vot_codigo`),
  KEY `candidato_idx` (`par_codigo`),
  CONSTRAINT `votos_fk` FOREIGN KEY (`par_codigo`) REFERENCES `participantes_par` (`par_codigo`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `votos_vot` (`vot_codigo`,`par_codigo`,`vot_ip`,`created_at`) 
VALUES (1,2,NULL,'2025-02-10 01:12:23'),(2,4,NULL,'2025-02-10 01:12:32'),
       (3,1,NULL,'2025-02-10 01:12:37'),(4,1,NULL,'2025-02-10 01:12:54');

DROP TABLE IF EXISTS `visitas_vis`;
CREATE TABLE `visitas_vis` (
  `vis_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `vis_fecha` datetime DEFAULT current_timestamp(),
  `vis_ip` varchar(45) DEFAULT NULL,
  `vis_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vis_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `usuarios_usu`;
CREATE TABLE `usuarios_usu` (
  `usu_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `usu_name` varchar(100) DEFAULT NULL,
  `usu_pass` varchar(100) DEFAULT NULL,
  `usu_tipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `usuarios_usu` */

insert  into `usuarios_usu`(`usu_codigo`,`usu_name`,`usu_pass`,`usu_tipo`) 
values (1,'user','user11','Normal'),
(2,'admin','admin11','Super');


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
