-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 09:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(200) NOT NULL,
  `comp` varchar(2000) NOT NULL,
  `question` varchar(200) NOT NULL,
  `marks` int(100) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `comp`, `question`, `marks`, `a1`, `a2`, `a3`, `a4`, `correct`) VALUES
(1, 'I felt the wall of the tunnel shiver. The master alarm squealed through my earphones. Almost simultaneously, Jack yelled down to me that there was a warning light on. Fleeting but spectacular sights snapped into ans out of view, the snow, the shower of debris, the moon, looming close and big, the dazzling sunshine for once unfiltered by layers of air. The last twelve hours before re-entry were particular bone-chilling. During this period, I had to go up in to command module. Even after the fiery re-entry splashing down in 81o water in south pacific, we could still see our frosty breath inside the command module.', 'Which one of the following reasons would one consider as more as possible for the warning lights to be on?', 2, 'There was a shower of debris.', 'Jack was yelling.', 'A catastrophe was imminent', 'The moon was looming close and big.', 'A catastrophe was imminent'),
(2, 'I felt the wall of the tunnel shiver. The master alarm squealed through my earphones. Almost simultaneously, Jack yelled down to me that there was a warning light on. Fleeting but spectacular sights snapped into ans out of view, the snow, the shower of debris, the moon, looming close and big, the dazzling sunshine for once unfiltered by layers of air. The last twelve hours before re-entry were particular bone-chilling. During this period, I had to go up in to command module. Even after the fiery re-entry splashing down in 81o water in south pacific, we could still see our frosty breath inside the command module.', 'The statement that the dazzling sunshine was "for once unfiltered by layers of air" means', 4, 'that the sun was very hot ', '.that there was no strong wind ', 'that the air was unpolluted ', 'none of above', 'none of above'),
(6, 'I felt the wall of the tunnel shiver. The master alarm squealed through my earphones. Almost simultaneously, Jack yelled down to me that there was a warning light on. Fleeting but spectacular sights snapped into ans out of view, the snow, the shower of debris, the moon, looming close and big, the dazzling sunshine for once unfiltered by layers of air. The last twelve hours before re-entry were particular bone-chilling. During this period, I had to go up in to command module. Even after the fiery re-entry splashing down in 81o water in south pacific, we could still see our frosty breath inside the command module.', 'Which one of the following reasons would one consider as more as possible for the warning lights to be on?', 4, 'There was a shower of debris.', 'Jack was yelling.', 'A catastrophe was imminent.', 'The moon was looming close and big.', 'The moon was looming close and big.'),
(7, 'I felt the wall of the tunnel shiver. The master alarm squealed through my earphones. Almost simultaneously, Jack yelled down to me that there was a warning light on. Fleeting but spectacular sights snapped into ans out of view, the snow, the shower of debris, the moon, looming close and big, the dazzling sunshine for once unfiltered by layers of air. The last twelve hours before re-entry were particular bone-chilling. During this period, I had to go up in to command module. Even after the fiery re-entry splashing down in 81o water in south pacific, we could still see our frosty breath inside the command module.', 'The word \'Command Module\' used twice in the given passage indicates perhaps that it deals with', 2, 'ajgjk', 'jaklj', 'jgkj', 'jakj', 'agkj'),
(14, '', 'When he\r\nP :	did not know\r\nQ :	he was nervous and\r\nR :	heard the hue and cry at midnight\r\nS :	what to do\r\nThe Proper sequence should be:', 5, 'RQPS', 'QSPR', 'SQPR', 'PQRS', 'RQPS');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Mark` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `marks` int(10) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL,
  `correct1` varchar(50) DEFAULT NULL,
  `catid` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `images` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `marks`, `a1`, `a2`, `a3`, `a4`, `correct`, `correct1`, `catid`, `type`, `images`) VALUES
(1, 'A train can travel 50% faster than a car. Both start from point A at the same time and reach point B 75 kms away from A at the same time. On the way, however, the train lost about 12.5 minutes while stopping at the stations. The speed of the car is:', 5, '100 kmph', '110 kmph', '120 kmph', '130 kmph', '120 kmph', '', 1, 'radio', ''),
(52, 'Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?', 5, '9', '10', '12', '20', '10', '', 1, 'radio', ''),
(49, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?', 5, '3.6', '7.2', '8.4', '10', '7.2', '', 1, 'text', ''),
(50, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:', 5, '300 kmph', '360 kmph', '600 kmph', '720 kmph', '720 kmph', '', 1, 'radio', ''),
(51, 'If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:', 5, '50 km', '56 km', '70 km', '80 km', '50 km', '', 1, 'checkbox', ''),
(55, 'Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?', 5, '1/3', '1/8', '2/8', '1/16', '1/18', '', 3, 'text', ''),
(56, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', 5, '7', '10', '12', '13', '10', '', 3, 'checkbox', ''),
(57, 'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?', 5, '20', '22', '23', '26', '22', '', 3, 'radio', ''),
(58, 'Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?', 5, '22', '24', '25', '26', '25', '', 3, 'radio', ''),
(59, 'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?', 5, '12', '14', '27', '53', '14', '', 3, 'radio', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `S_id` int(100) NOT NULL,
  `S_name` varchar(200) NOT NULL,
  `aptitude` int(100) NOT NULL,
  `english` int(100) NOT NULL,
  `lr` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`S_id`, `S_name`, `aptitude`, `english`, `lr`) VALUES
(1, 'Abdus Samad', 0, 0, 60),
(2, 'mohd izhar', 24, 17, 40),
(3, 'Mohd Tariq', 31, 0, 0),
(4, 'Samad Siddiqui', 100, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `S_id` int(200) NOT NULL,
  `S_name` varchar(100) NOT NULL,
  `S_email` varchar(100) NOT NULL,
  `S_enroll` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`S_id`, `S_name`, `S_email`, `S_enroll`, `password`, `birthdate`, `gender`) VALUES
(5, 'Samad Siddiqui', 'sid.sam10@yahoo.com', '04896202813', 'theunder', '1994-10-29', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`S_id`),
  ADD UNIQUE KEY `S_name` (`S_name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`S_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `S_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `S_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
