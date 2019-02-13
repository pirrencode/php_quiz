-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2019 at 08:21 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printful_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--
-- Creation: Feb 13, 2019 at 01:54 PM
-- Last update: Feb 13, 2019 at 04:37 PM
--

DROP TABLE IF EXISTS `choices`;
CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'PHP: Hypertext Preprocessor'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 0, 'Personal Home Page'),
(4, 1, 0, 'Personal Hypertext Preprocessor'),
(5, 2, 0, '\"Hello World\";'),
(6, 2, 1, 'echo \"Hello World\";'),
(7, 2, 0, 'Document.write \"Hello world\";'),
(8, 3, 0, 'JavaScript'),
(9, 3, 0, 'VB Script'),
(10, 3, 1, 'Perl and C'),
(11, 4, 0, 'True'),
(12, 4, 1, 'False'),
(13, 5, 0, 'False'),
(14, 5, 1, 'True'),
(15, 6, 0, '#'),
(16, 6, 1, '!'),
(17, 6, 1, '$'),
(18, 6, 0, '?');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--
-- Creation: Feb 13, 2019 at 01:53 PM
-- Last update: Feb 13, 2019 at 03:06 PM
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What does PHP stand for?'),
(2, 'How do you write \"Hello World\" in PHP'),
(3, 'The PHP syntax is most similar to:'),
(4, 'When using the POST method, variables are displayed in the URL:'),
(5, 'PHP allows you to send emails directly from a script:'),
(6, 'All variables in PHP start with which symbol?');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--
-- Creation: Feb 13, 2019 at 07:18 PM
-- Last update: Feb 13, 2019 at 07:21 PM
--

DROP TABLE IF EXISTS `userlist`;
CREATE TABLE IF NOT EXISTS `userlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(48) NOT NULL,
  `quiz` varchar(48) NOT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `firstname`, `quiz`, `score`) VALUES
(7, 'Kate', 'test1', NULL),
(6, '', '', NULL),
(5, 'Jane', 'test1', NULL),
(4, 'Alex', 'test1', NULL),
(8, '', '', NULL),
(9, 'Jane 2', 'test1', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
