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
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdcustomer` */

/*Table structure for table `tdproduct` */

DROP TABLE IF EXISTS `tdproduct`;

CREATE TABLE `tdproduct` (
  `product_id` int(11) NOT NULL,
  `name_product` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdproduct` */

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
  KEY `product_id` (`product_id`),
  KEY `customer` (`customer_id`),
  CONSTRAINT `customer` FOREIGN KEY (`customer_id`) REFERENCES `tdcustomer` (`customer_id`),
  CONSTRAINT `idtt_trans` FOREIGN KEY (`idtt_trans`) REFERENCES `tdtotaltransaction` (`idtt_trans`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `tdproduct` (`product_id`)
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
  KEY `voucher_trans` (`customer_id`),
  KEY `voucher` (`voucher_id`),
  CONSTRAINT `voucher` FOREIGN KEY (`voucher_id`) REFERENCES `tdvoucher` (`transaction_id`),
  CONSTRAINT `voucher_trans` FOREIGN KEY (`customer_id`) REFERENCES `tdcustomer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdtransactionvoucher` */

/*Table structure for table `tduser` */

DROP TABLE IF EXISTS `tduser`;

CREATE TABLE `tduser` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tduser` */

/*Table structure for table `tdvoucher` */

DROP TABLE IF EXISTS `tdvoucher`;

CREATE TABLE `tdvoucher` (
  `voucher_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `kode_voucher` char(50) DEFAULT NULL,
  `voucher_name` varchar(100) DEFAULT NULL,
  `value_voucher` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_by` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`voucher_id`),
  KEY `voucher` (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdvoucher` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
