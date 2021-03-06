
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '123');

ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL UNIQUE PRIMARY KEY,
  `student_id` varchar(220) NOT NULL UNIQUE,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `cgpa` float(45) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `student` (`id`, `student_id`, `name`, `last_name`, `dob`, `gender`, `parent`, `yoa`, `cgpa`,`report`, `file`) VALUES
(1, 'AS01-2341', 'Ron', 'Weasley', '1993-05-05','Male','8138652645', '2012', '9.8','Good', 'ronweasley.jpg');

ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
