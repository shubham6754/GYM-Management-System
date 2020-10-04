

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `address` (
  `id` varchar(20) NOT NULL,
  `streetName` varchar(40) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `zipcode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `address` (`id`, `streetName`, `state`, `city`, `zipcode`) VALUES
('1529336794', '2069  Quarry Drive', 'NC', 'Greensboro', '27409'),
('RTTR', '4 th crosss,near Ram Temple', 'karantaka', 'Delhi', '121282'),
('5435', 'Dharmakshetra ', ' Haryana', ' Kurukshetra ', '662157'),
('78996756', 'bangalore', 'Karnataka', 'Bangalore', '533172'),
('57785', '2069 Quarry Drive', 'NC', 'Greensboro', '27409'),
('423', 'BHARTI NAGAR', 'as', 'bangalore', '562157'),
('25', '2069 Quarry Drive', 'NC', 'Greensboro', '27409'),
('12324', 'BHARTI NAGAR', 'as', 'bangalore', '562157'),
('4235239', '2069 Quarry Drive,bangalore', 'kara', 'bangalore', '562157'),
('111222', '2069 Quarry Drive,bangalore', 'karantaka', 'bangalore', '562157');



CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `pass_key` varchar(20) NOT NULL,
  `Full_name` varchar(50) DEFAULT NULL,
  `securekey` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`username`, `pass_key`, `Full_name`, `securekey`) VALUES
('karant', 'col', 'Titanium Gym', 'cat');


CREATE TABLE `enrolls_to` (
  `et_id` int(5) NOT NULL,
  `pid` varchar(8) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `paid_date` varchar(15) DEFAULT NULL,
  `expire` varchar(15) DEFAULT NULL,
  `renewal` varchar(15) DEFAULT NULL,
  `paid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `enrolls_to` (`et_id`, `pid`, `uid`, `paid_date`, `expire`, `renewal`, `paid`) VALUES
(1, 'POQKJC', '1529336794', '2018-06-18', '2018-07-18', 'no', ''),
(24, '8888', 'RTTR', '2019-11-21', '2021-11-21', 'no', ''),
(26, '8888', '5435', '2019-11-21', '2021-11-21', 'yes', ''),
(34, '3434', '1529336794', '2019-11-21', '2020-03-21', 'yes', ''),
(35, '3333', 'RTTR', '2019-11-21', '2020-02-21', 'no', ''),
(39, '3333', '78996756', '2019-11-21', '2020-02-21', 'yes', ''),
(43, '3434', '57785', '2019-11-28', '2020-03-28', 'yes', ''),
(44, '3434', '423', '2019-11-30', '2020-03-30', 'yes', ''),
(45, '3434', '25', '2019-11-30', '2020-03-30', 'yes', ''),
(46, '3434', 'RTTR', '2019-11-30', '2020-03-30', 'yes', ''),
(49, '3434', '12324', '2019-11-30', '2020-03-30', 'yes', ''),
(51, '3434', '4235239', '2019-11-30', '2020-03-30', 'yes', ''),
(52, '3434', '111222', '2019-12-01', '2020-04-01', 'no', ''),
(53, '3434', '111222', '2019-12-01', '2020-04-01', 'yes', '');



CREATE TABLE `health_status` (
  `hid` int(5) NOT NULL,
  `calorie` varchar(8) DEFAULT NULL,
  `height` varchar(8) DEFAULT NULL,
  `weight` varchar(8) DEFAULT NULL,
  `fat` varchar(8) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `health_status` (`hid`, `calorie`, `height`, `weight`, `fat`, `remarks`, `uid`) VALUES
(1, '3000', '96 Kg', '96 Kg', '30 %    ', '  ', '1529336794'),
(18, '3000', '167', '59', '9%', 'Making Good Progress      ', 'RTTR'),
(20, NULL, NULL, NULL, NULL, NULL, '5435'),
(26, NULL, '', '96 Kg', ' ', ' ', '78996756'),
(28, NULL, NULL, NULL, NULL, NULL, '57785'),
(29, NULL, NULL, NULL, NULL, NULL, '423'),
(30, NULL, NULL, NULL, NULL, NULL, '25'),
(33, NULL, NULL, NULL, NULL, NULL, '12324'),
(35, NULL, NULL, NULL, NULL, NULL, '4235239'),
(36, '3000', '167', '59', '9%', 'good to be set', '111222');


CREATE TABLE `plan` (
  `pid` varchar(8) NOT NULL,
  `planName` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `validity` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `plan` (`pid`, `planName`, `description`, `validity`, `amount`, `active`) VALUES
('1212', 'Dragon BallZ', 'A DBZ workout', '5', 5500, 'no'),
('12345485', 'Veer', 'A PUNJABI PLgjAN', '4', 53, 'no'),
('3333', 'THE INSTANT PLAN', 'UPCOMING', '3', 1200, 'no'),
('3434', 'The Beast', 'the new year plan', '4', 2009, 'yes'),
('7678', 'fj', 'hjfj', '6', 696, 'no'),
('8888', '2 Year Combo', 'The Full Body Workout Plan', '1', 9000, 'yes'),
('POQKJC', 'Monthly Plan', 'A monthly subscription that unlocks the entire Gym Plan app and coach support on chat.', '1', 2000, 'no');



CREATE TABLE `reminders` (
  `id` int(11) NOT NULL,
  `memberId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `timetable` (
  `tid` varchar(12) NOT NULL,
  `tname` varchar(45) DEFAULT NULL,
  `day1` varchar(200) DEFAULT NULL,
  `day2` varchar(200) DEFAULT NULL,
  `day3` varchar(200) DEFAULT NULL,
  `day4` varchar(200) DEFAULT NULL,
  `day5` varchar(200) DEFAULT NULL,
  `day6` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `timetable` (`tid`, `tname`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`) VALUES
('12324', 'BeginerRoutine', 'Running, Treadmill. 1 set, 5-10 minutes.', 'Leg Press. 1 set, to failure.', 'Lying Leg Curls. 1 set, to failure.', 'Wide-Grip Lat Pulldown. 1 set, to failure.', 'Triceps Pushdown - Rope Attachment. 1 set, to failure.', 'Machine Shoulder (Military) Press.'),
('4235239', 'BeginerRoutine', 'Running, Treadmill. 1 set, 5-10 minutes.', 'Leg Press. 1 set, to failure.', 'Lying Leg Curls. 1 set, to failure.', 'Wide-Grip Lat Pulldown. 1 set, to failure.', 'Triceps Pushdown - Rope Attachment. 1 set, to failure.', 'Machine Shoulder (Military) Press.'),
('111222', 'BeginerRoutine', 'Running, Treadmill. 1 set, 5-10 minutes.', 'Leg Press. 1 set, to failure.', 'Lying Leg Curls. 1 set, to failure.', 'Wide-Grip Lat Pulldown. 1 set, to failure.', 'Triceps Pushdown - Rope Attachment. 1 set, to failure.', 'Machine Shoulder (Military) Press.');


CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `joining_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`userid`, `username`, `gender`, `mobile`, `email`, `dob`, `joining_date`) VALUES
('111222', 'VEGETA', 'Male', '526378666', 'vegetaDBZ@gmail.com', '2003-11-27', '2018-11-30'),
('12324', 'Robert ', 'Male', '52637866', 'robert@gmail.com', '2019-11-30', '2019-11-30'),
('1529336794', 'Christiana Mayberry', 'Male', '3362013747', 'christiani@gmail.com', '1968-04-13', '2018-06-18'),
('25', 'ffffff', 'Female', '33613747', 'chrisnhfji@gmail.com', '2019-11-30', '2019-11-30'),
('423', 'tre', 'Male', '52637866', 'a8est6@gmail.com', '2019-11-30', '2019-11-30'),
('4235239', 'Gohan', 'Male', '52637866', 'gohanDBZ@gmail.com', '2004-09-30', '2019-11-30'),
('5435', 'ARJUN', 'Male', '23483632757', 'Arjuna@GMAIL.COM', '2000-11-21', '2019-10-21'),
('57785', 'gfjy', 'Male', '336213747', 'christini@gmail.com', '2019-11-28', '2019-11-28'),
('78996756', 'sfssg', 'Female', '0988889997', 'harishsar9776@gmail.', '2019-11-08', '2019-11-29'),
('RTTR', 'GOKU', 'Male', '787664535', 'gokuTheSuperSayian@g', '1997-11-21', '2018-11-21');

DELIMITER $$
CREATE TRIGGER `after_members_insert` AFTER INSERT ON `users` FOR EACH ROW BEGIN

 INSERT INTO timetable(tid,tname, day1,day2,day3,day4,day5,day6)
VALUES(new.userid,'BeginerRoutine','Running, Treadmill. 1 set, 5-10 minutes.','Leg Press. 1 set, to failure.','Lying Leg Curls. 1 set, to failure.','Wide-Grip Lat Pulldown. 1 set, to failure.','Triceps Pushdown - Rope Attachment. 1 set, to failure.','Machine Shoulder (Military) Press.');

END
$$
DELIMITER ;

ALTER TABLE `address`
  ADD KEY `userID` (`id`) USING BTREE;


ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`) USING BTREE;


ALTER TABLE `enrolls_to`
  ADD PRIMARY KEY (`et_id`) USING BTREE,
  ADD KEY `user_ID` (`uid`) USING BTREE,
  ADD KEY `plan_ID` (`pid`);

ALTER TABLE `health_status`
  ADD PRIMARY KEY (`hid`) USING BTREE,
  ADD KEY `userID_idx` (`uid`) USING BTREE;


ALTER TABLE `plan`
  ADD PRIMARY KEY (`pid`) USING BTREE;


ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`,`memberId`);


ALTER TABLE `timetable`
  ADD KEY `jID` (`tid`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD KEY `userid` (`userid`) USING BTREE;


ALTER TABLE `enrolls_to`
  MODIFY `et_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;


ALTER TABLE `health_status`
  MODIFY `hid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;


ALTER TABLE `reminders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `address`
  ADD CONSTRAINT `userID` FOREIGN KEY (`id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;


ALTER TABLE `enrolls_to`
  ADD CONSTRAINT `plan_ID` FOREIGN KEY (`pid`) REFERENCES `plan` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;


ALTER TABLE `health_status`
  ADD CONSTRAINT `uID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;

ALTER TABLE `timetable`
  ADD CONSTRAINT `jID` FOREIGN KEY (`tid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;
