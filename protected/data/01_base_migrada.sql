/*!40101 SET NAMES utf8 */;/*!40101 SET SQL_MODE=''*/;/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;USE `scriptlog`;/*Table structure for table `authassignment` */CREATE TABLE `authassignment` (
  `itemname` VARCHAR(64) NOT NULL,
  `userid` VARCHAR(64) NOT NULL,
  `bizrule` TEXT,
  `data` TEXT,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `authassignment` */

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','1',NULL,NULL);
insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Authenticated','39',NULL,'N;');

/*Table structure for table `authitem` */

CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,'Super User',NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Administrador',2,'Administrador',NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Authenticated',2,'Authenticated',NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Ejecuciones.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Ejecuciones.Create',0,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Ejecuciones.Index',0,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Ejecuciones.View',0,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Ejecutar.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Scripts.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Scripts.Create',0,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Scripts.Index',0,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Scripts.View',0,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Servicios.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Site.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Upload.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('User.Logout.*',1,NULL,NULL,'N;');
insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('User.Profile.*',1,NULL,NULL,'N;');

/*Table structure for table `authitemchild` */

CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('Administrador','Authenticated');
insert  into `authitemchild`(`parent`,`child`) values ('Administrador','Ejecuciones.*');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Ejecuciones.Create');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Ejecuciones.Index');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Ejecuciones.View');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Ejecutar.*');
insert  into `authitemchild`(`parent`,`child`) values ('Administrador','Scripts.*');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Scripts.Create');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Scripts.Index');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Scripts.View');
insert  into `authitemchild`(`parent`,`child`) values ('Administrador','Servicios.*');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Site.*');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','Upload.*');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','User.Logout.*');
insert  into `authitemchild`(`parent`,`child`) values ('Authenticated','User.Profile.*');

/*Table structure for table `ejecuciones` */

CREATE TABLE `ejecuciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_script` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `observacion` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Ejecuciones_servicios` (`id_servicio`),
  KEY `FK_Ejecuciones_scripts` (`id_script`),
  CONSTRAINT `FK_Ejecuciones_scripts` FOREIGN KEY (`id_script`) REFERENCES `scripts` (`id`),
  CONSTRAINT `FK_Ejecuciones_servicios` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2283 DEFAULT CHARSET=latin1;

/*Data for the table `ejecuciones` */

/*Table structure for table `profiles` */

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

insert  into `profiles`(`user_id`,`lastname`,`firstname`,`birthday`) values (1,'Admin','Administrator','2011-05-21');

/*Table structure for table `profiles_fields` */

CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `profiles_fields` */

insert  into `profiles_fields`(`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) values (1,'lastname','Last Name','VARCHAR',50,3,1,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',1,3);
insert  into `profiles_fields`(`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) values (2,'firstname','First Name','VARCHAR',50,3,1,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',0,3);

/*Table structure for table `rights` */

CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rights` */

/*Table structure for table `scripts` */

CREATE TABLE `scripts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_servicio` varchar(20) NOT NULL DEFAULT '''basedatos''',
  `nombre_archivo` varchar(2048) NOT NULL,
  `contenido_archivo` text NOT NULL,
  `observacion` text NOT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Scripts_Users` (`id_user`),
  CONSTRAINT `FK_Scripts_Users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=latin1;

/*Data for the table `scripts` */

/*Table structure for table `servicios` */

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo_servicio` varchar(20) NOT NULL DEFAULT 'basedatos' COMMENT 'basedatos, reports, webapp',
  `tipo_motor` varchar(20) NOT NULL DEFAULT 'oracle' COMMENT 'oracle, mysql, etc',
  `ambiente` varchar(20) NOT NULL DEFAULT 'produccion' COMMENT 'produccion/desarrollo',
  `nombre_servicio` varchar(20) NOT NULL,
  `ip_publica` varchar(100) NOT NULL,
  `ip_privada` varchar(100) NOT NULL,
  `puerto_publico` varchar(10) NOT NULL,
  `puerto_privado` varchar(10) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `comentarios` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `servicios` */

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`activkey`,`createtime`,`lastvisit`,`superuser`,`status`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','8273e5770bd2d0f27b8eb87d0805b935',1261146094,1365697732,1,1);
#insert  into `users`(`id`,`username`,`password`,`email`,`activkey`,`createtime`,`lastvisit`,`superuser`,`status`) values (3,'jespinoza','404fa5ad74e4c8f0a6ca4d550d9d6745','jespinoza@worldwidevelopment.com','2cdd0e4550f94d420a6744326719c92e',1306011275,1334468542,0,1);
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
