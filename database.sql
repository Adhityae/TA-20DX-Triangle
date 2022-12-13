/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.21-MariaDB : Database - lessprivate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lessprivate` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `lessprivate`;

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `mata_pelajaran` enum('Fullstack Developer','UI Design Beginner','How to be Freelancer','UX Research','Basic Web Design','3D Character Design') NOT NULL,
  `no_hp` int(13) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mata_pelajaran` (`mata_pelajaran`),
  CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`mata_pelajaran`) REFERENCES `tbl_tutor` (`mata_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_siswa` */

/*Table structure for table `tbl_tutor` */

DROP TABLE IF EXISTS `tbl_tutor`;

CREATE TABLE `tbl_tutor` (
  `mata_pelajaran` enum('Fullstack Developer','UI Design Beginner','How to be Freelancer','UX Research','Basic Web Design','3D Character Design') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`mata_pelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_tutor` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
