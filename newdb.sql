/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 8.0.30 : Database - lessprivate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lessprivate` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `lessprivate`;

/*Table structure for table `akun_siswa` */

DROP TABLE IF EXISTS `akun_siswa`;

CREATE TABLE `akun_siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `akses` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `akun_siswa` */

insert  into `akun_siswa`(`id`,`email`,`password`,`username`,`akses`,`status`) values 
(1,'admin','admin','admin',1,1),
(2,'ikromulabid@gmail.com','user1','abid',2,1),
(3,'ikromulabid@gmail.com','user1','user1',2,1);

/*Table structure for table `tbl_pelajar` */

DROP TABLE IF EXISTS `tbl_pelajar`;

CREATE TABLE `tbl_pelajar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `mata_pelajaran` enum('Desain','Pemrograman','English') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` char(14) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tbl_pelajar` */

insert  into `tbl_pelajar`(`id`,`nama`,`mata_pelajaran`,`alamat`,`no_hp`,`status`) values 
(1,'adhitya','Pemrograman','Bandung','081375632837','aktif'),
(2,'Ikromul','English','Pekanbaru','0813364698473','aktif'),
(3,'Adelia','Desain','Lampung','081385749382','aktif'),
(4,'Fauzan','Pemrograman','Lampung','081375647833','tidak aktif');

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `mata_pelajaran` enum('Pemrograman','Design','English') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tbl_siswa` */

/*Table structure for table `tbl_tutor` */

DROP TABLE IF EXISTS `tbl_tutor`;

CREATE TABLE `tbl_tutor` (
  `mata_pelajaran` enum('Fullstack Developer','UI Design Beginner','How to be Freelancer','UX Research','Basic Web Design','3D Character Design') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`mata_pelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tbl_tutor` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
