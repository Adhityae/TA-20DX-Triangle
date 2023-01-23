/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - lessprivate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lessprivate` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lessprivate`;

/*Table structure for table `akun_siswa` */

DROP TABLE IF EXISTS `akun_siswa`;

CREATE TABLE `akun_siswa` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `akun_siswa` */

insert  into `akun_siswa`(`id`,`email`,`password`,`username`,`akses`,`status`) values 
(1,'admin','admin','admin',1,1),
(2,'ikromulabid@gmail.com','abid','abid',2,1),
(3,'ikromulabid@gmail.com','userl','userl',2,1);

/*Table structure for table `tbl_pelajar` */

DROP TABLE IF EXISTS `tbl_pelajar`;

CREATE TABLE `tbl_pelajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `mata_pelajaran` enum('Desain','Pemrogaman','English') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` char(14) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelajar` */

insert  into `tbl_pelajar`(`id`,`nama`,`mata_pelajaran`,`alamat`,`no_hp`,`status`) values 
(1,'Adhitya','English','Lampung','082121582971','aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
