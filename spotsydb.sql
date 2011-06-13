DROP DATABASE IF EXISTS spotsydb;
CREATE DATABASE IF NOT EXISTS spotsydb;
USE spotsydb;

CREATE TABLE IF NOT EXISTS `spotsydb`.`users` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `first_name` varchar(50) NOT NULL default '',
  `old_last_name` varchar(50) NOT NULL default ' ',
  `new_last_name` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `graduation_month` varchar(50) NOT NULL default '',
  `graduation_day` int(2) NOT NULL default 0,
  `graduation_year` int(4) NOT NULL default 0,
  `elementary` varchar(50) NOT NULL default '',
  `middle` varchar(50) NOT NULL default '',
  `high` varchar(50) NOT NULL default '',
  
  INDEX( `new_last_name`)
);

CREATE TABLE IF NOT EXISTS `spotsydb`.`events` (
  `user_id` smallint(6) NOT NULL,
  `event` varchar(50) NOT NULL default '' PRIMARY KEY,
  `invite` varchar(50) NOT NULL default ' ',
  `event_date` varchar(50) NOT NULL default '',
  `event_time` varchar(50) NOT NULL default '',
  `address1` varchar(50) NOT NULL default '',
  `address2` varchar(50) NOT NULL default '',
  `description` blob NOT NULL default '',
  `post_date` timestamp NOT NULL default '2011-01-01 00:00:00',
  
  INDEX(`post_date`)
);