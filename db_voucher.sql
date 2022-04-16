/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - db_voucher
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_voucher` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_voucher`;

/*Table structure for table `tdcustomer` */

DROP TABLE IF EXISTS `tdcustomer`;

CREATE TABLE `tdcustomer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdcustomer` */

insert  into `tdcustomer`(`customer_id`,`name_customer`,`email`,`address`,`no_hp`,`user_name`,`password`,`foto`,`level`) values 
(11,'Budi Sudarsono','bdi@mail.com','Surabaya','086765454323','bdi','jhgyt',NULL,'Superadmin'),
(12,'tyt','tyty','tyt','tyty','yty','tytyty',NULL,'Superadmin'),
(13,' h','hjh','hjhjhjhj','jhj','hjhj','hjhjh',NULL,'Superadmin'),
(14,'Ali','gjh','jh','jhjh','jhj','hj',NULL,'Superadmin');

/*Table structure for table `tdproduct` */

DROP TABLE IF EXISTS `tdproduct`;

CREATE TABLE `tdproduct` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdproduct` */

insert  into `tdproduct`(`product_id`,`name_product`,`price`,`create_by`,`created_date`,`modified_by`,`modified_date`) values 
(1,'Mie Sedap Goreng','5000',NULL,'2022-04-16 22:47:04',NULL,'2022-04-16 22:47:04'),
(2,'Sabun Lifeboy','2500',NULL,'2022-04-16 22:47:21',NULL,'2022-04-16 22:47:21'),
(3,'bhJH','HJH',NULL,'2022-04-16 23:17:37',NULL,'2022-04-16 23:17:37'),
(4,'Kopi Kapal Api','15000',NULL,'2022-04-16 23:17:55',NULL,'2022-04-16 23:17:55');

/*Table structure for table `tdtotaltransaction` */

DROP TABLE IF EXISTS `tdtotaltransaction`;

CREATE TABLE `tdtotaltransaction` (
  `idtt_trans` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `total_transaction` varchar(50) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtt_trans`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdtotaltransaction` */

/*Table structure for table `tdtransaction` */

DROP TABLE IF EXISTS `tdtransaction`;

CREATE TABLE `tdtransaction` (
  `transaction_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `date_transaction` date DEFAULT NULL,
  `idtt_trans` int(11) NOT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`transaction_id`),
  KEY `idtt_trans` (`idtt_trans`),
  KEY `customer` (`customer_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `customer` FOREIGN KEY (`customer_id`) REFERENCES `tdcustomer` (`customer_id`),
  CONSTRAINT `idtt_trans` FOREIGN KEY (`idtt_trans`) REFERENCES `tdtotaltransaction` (`idtt_trans`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdtransaction` */

/*Table structure for table `tdtransactionvoucher` */

DROP TABLE IF EXISTS `tdtransactionvoucher`;

CREATE TABLE `tdtransactionvoucher` (
  `transactionvoucher_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `start_valid` datetime DEFAULT NULL,
  `end_valid` datetime DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`transactionvoucher_id`),
  KEY `vc_trans` (`voucher_id`),
  KEY `voucher_customer` (`customer_id`),
  CONSTRAINT `vc_trans` FOREIGN KEY (`voucher_id`) REFERENCES `tdvoucher` (`voucher_id`),
  CONSTRAINT `voucher_customer` FOREIGN KEY (`customer_id`) REFERENCES `tdcustomer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdtransactionvoucher` */

/*Table structure for table `tduser` */

DROP TABLE IF EXISTS `tduser`;

CREATE TABLE `tduser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid_cs` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tduser` */

insert  into `tduser`(`id`,`userid_cs`,`user_name`,`password`,`level`) values 
(1,1,'andi','admin','Admin');

/*Table structure for table `tdvoucher` */

DROP TABLE IF EXISTS `tdvoucher`;

CREATE TABLE `tdvoucher` (
  `voucher_id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_voucher` char(50) DEFAULT NULL,
  `voucher_name` varchar(100) DEFAULT NULL,
  `value_voucher` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_by` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`voucher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdvoucher` */

insert  into `tdvoucher`(`voucher_id`,`kode_voucher`,`voucher_name`,`value_voucher`,`created_date`,`modified_date`,`modified_by`,`created_by`) values 
(16,'687687','iuyiuy','7987','2022-04-16 15:43:25','2022-04-16 15:43:25',NULL,NULL),
(17,'686','yiuy','798','2022-04-16 15:56:55','2022-04-16 15:56:55',NULL,NULL),
(18,'hjhj','uyu7','6766','2022-04-16 20:56:47','2022-04-16 20:56:47',NULL,NULL),
(19,'787','jhk','6','2022-04-16 21:45:57','2022-04-16 21:45:57',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
