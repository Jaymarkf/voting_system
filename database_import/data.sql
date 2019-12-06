SET NAMES utf8;
SET time_zone = '+00:00';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `voting_db`;
CREATE DATABASE `voting_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `voting_db`;

DROP TABLE IF EXISTS `candidate_tbl`;
CREATE TABLE `candidate_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `table_admin`;
CREATE TABLE `table_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `voter_tbl`;
CREATE TABLE `voter_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `year_level` varchar(200) NOT NULL,
  `vote_president` varchar(200) DEFAULT NULL,
  `vote_vice_president` varchar(200) DEFAULT NULL,
  `vote_secretary` varchar(200) DEFAULT NULL,
  `vote_treasurer` varchar(200) DEFAULT NULL,
  `vote_auditor` varchar(200) DEFAULT NULL,
  `vote_muse` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;