create or replace table `admin`
(
	`adminid` int primary key,
	`username` varchar(30) not null,
	`password` varchar(30) not null,
	`time_stamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `faciities` 
(
  `facilityid` int(255) primary key,
  `name` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL
  )ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
  
  
CREATE TABLE IF NOT EXISTS `trainer`
(
	`trainerid` int(11) primary key,
  `firstname` varchar(200) not NULL,
  `lastname` varchar(200) not NULL,
  `age` int(200) not NULL,
  `sex` varchar(200) not NULL,
  `email` varchar(200) not NULL,
  `phone` int(200) not NULL,
  `address` varchar(200) not NULL,
  `dateofjoining` date not null,
  `service` varchar(200) DEFAULT NULL,
  `facilityid` int references `facilities`(`facilityid`),
  `timestap` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
  )ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
  
  
  CREATE TABLE IF NOT EXISTS faciities (
  `facilityid` int(255) primary key,
  `name` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL
  )ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
  
CREATE TABLE IF NOT EXISTS equip (
  `equipid` int(255) primary key,
  `name` varchar(200) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) primary key,
  `firstname` varchar(200) not NULL,
  `lastname` varchar(200) not NULL,
  `age` int(200) not NULL,
  `sex` varchar(200) not NULL,
  `phone` int(200) not NUll,
  `address` varchar(200) not NULL,
  `service` varchar(200) not NULL,
  `timestap` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` int(200) not NULL,
  `plan` int(200) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
   `trainer_id` int references `trainer`(`trainer_id`),
   `facility_id` int references `facility`(`facility_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


