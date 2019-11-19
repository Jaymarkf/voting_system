-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

TRUNCATE `candidate_tbl`;
INSERT INTO `candidate_tbl` (`id`, `name`, `gender`, `address`, `position`, `year_level`) VALUES
(41,	'Dads',	'Male',	'pawaass',	'pres',	'2nd'),
(42,	'jay',	'female',	'bagio',	'vice',	'1st'),
(43,	'data',	'gender',	'posi',	'posit',	'2nd');

DROP TABLE IF EXISTS `table_admin`;
CREATE TABLE `table_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

TRUNCATE `table_admin`;
INSERT INTO `table_admin` (`id`, `username`, `password`) VALUES
(1,	'admin',	'admin');

DROP TABLE IF EXISTS `voter_tbl`;
CREATE TABLE `voter_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

TRUNCATE `voter_tbl`;
INSERT INTO `voter_tbl` (`id`, `name`, `gender`, `address`, `year_level`, `vote_president`, `vote_vice_president`, `vote_secretary`, `vote_treasurer`, `vote_auditor`, `vote_muse`) VALUES
(4,	'test',	'male',	'dito lang ako',	'1st',	'rodirigo',	'leni',	NULL,	NULL,	NULL,	NULL),
(5,	'fff',	'aaaa',	'dito lang ako',	'1st',	'rodirigo',	'leni',	NULL,	NULL,	NULL,	NULL),
(6,	'aaaa',	'male',	'dito lang ako',	'1st',	'rodirigo',	'leni',	NULL,	NULL,	NULL,	NULL),
(7,	'asdfasdf',	'',	'asdf',	'sdfasdf',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

-- 2019-11-19 07:07:44