/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - karyawandb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`karyawandb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `karyawandb`;

/*Table structure for table `biodata` */

DROP TABLE IF EXISTS `biodata`;

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) DEFAULT NULL,
  `posisi_lamar` varchar(100) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ktp` varchar(16) DEFAULT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET utf16 DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` enum('1','2') DEFAULT NULL COMMENT '1 : Laki -Laki, 2. Perempuan',
  `agama` char(1) DEFAULT NULL,
  `gol_darah` varchar(5) DEFAULT NULL,
  `alamat_ktp` text,
  `alamat_tinggal` text,
  `email` varchar(50) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `tlp_org` varchar(20) DEFAULT NULL,
  `skill` text,
  `kantor` enum('1','0') DEFAULT NULL COMMENT '1 : ya 0: tidak',
  `gaji_harap` int(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `biodata` */

/*Table structure for table `detail_pekerjaan` */

DROP TABLE IF EXISTS `detail_pekerjaan`;

CREATE TABLE `detail_pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `posisi_terakhir` varchar(100) DEFAULT NULL,
  `gaji_terakhir` int(11) DEFAULT NULL,
  `tahun_pekerjaan` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_pekerjaan` */

/*Table structure for table `detail_pelatihan` */

DROP TABLE IF EXISTS `detail_pelatihan`;

CREATE TABLE `detail_pelatihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) DEFAULT NULL,
  `nama_pelatihan` varchar(255) DEFAULT NULL,
  `tahun_pelatihan` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_pelatihan` */

/*Table structure for table `detail_pendidikan` */

DROP TABLE IF EXISTS `detail_pendidikan`;

CREATE TABLE `detail_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) DEFAULT NULL,
  `jenjang_pendidikan` varchar(50) DEFAULT NULL,
  `nama_instansi` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `ipk` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_pendidikan` */

/*Table structure for table `tm_agama` */

DROP TABLE IF EXISTS `tm_agama`;

CREATE TABLE `tm_agama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_agama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tm_agama` */

insert  into `tm_agama`(`id`,`nama_agama`) values 
(1,'Islam'),
(2,'Katolik'),
(3,'Hindu'),
(4,'Buddha'),
(5,'Protestan'),
(6,'Khonghucu'),
(7,'Lain - lain');

/*Table structure for table `tm_status` */

DROP TABLE IF EXISTS `tm_status`;

CREATE TABLE `tm_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tm_status` */

insert  into `tm_status`(`id`,`status`) values 
(1,'Menikah'),
(2,'Single'),
(3,'Cerai Hidup'),
(4,'Cerai Mati');

/*Table structure for table `tm_user` */

DROP TABLE IF EXISTS `tm_user`;

CREATE TABLE `tm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('1','2') DEFAULT NULL COMMENT 'Role 1 = Admin, Role 2 = user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UUuid` (`uuid`) COMMENT 'Uniq',
  UNIQUE KEY `UEmail` (`email`) COMMENT 'UEmail'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tm_user` */

insert  into `tm_user`(`id`,`uuid`,`email`,`password`,`role`) values 
(1,'38f4e453-b2c8-5573-9351-37c5fdfeb8bc','admin@admin.com','$2y$10$J/dkC4MGEqZKzQO9A1G1NuoP73lEBsRQb2jcJIDk2zW.iONpFoPOC','1'),
(2,'427e325d-a364-5f94-81c8-1cba9e7843f4','user@user.com','$2y$10$v45OjkwO3LCH58yIEUc7PuSjje2B4JWKh4DBVRdTTHdl72N6VVJsu','2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
