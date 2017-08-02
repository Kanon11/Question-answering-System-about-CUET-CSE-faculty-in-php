-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2017 at 06:14 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shet`
--

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE IF NOT EXISTS `kb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `feedback` varchar(800) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id`, `token`, `feedback`) VALUES
(1, 'student total number', 'Number of student in CSE department is approximately 600.'),
(8, 'faculty total number', 'Number of faculty member in CSE department is 27.'),
(9, 'dean', 'Prof. Dr. Mahmud Abdul Matin Bhuiyan is the dean of CSE & EEE.'),
(10, 'established department', 'CSE department was established in 1998. '),
(11, 'course courses ', 'The department offers many up-to-date courses in the various branches of Computer Science and Engineering that include Electronics, Digital Logic and System Design, Algorithm, Compiler Design, Software Engineering, Database Management System, Artificial Intelligence, Computer Networks, Numerical Ana'),
(12, 'lab sessional', 'The CSE Department has following laboratories: Microcomputer laboratory, Communication laboratory, Multimedia laboratory, Hardware & Networking laboratory, Microprocessor & Interfacing laboratory, Electronics & Circuit laboratory, and Natural Language Processing laboratory'),
(13, 'co curricular activities', 'Computer Club, Programming Contest, Projects Show, Industrial Training. '),
(14, 'total publication much', 'Between the years 2002-2016 more than 300 research papers by the faculty of this department have been published in several renowned international journals and conference proceedings including IEEE, ICCIT, ICECE, AJIT, TJER, ICCPB, IFOST, BIBM, TSP, ISCAS, MWSCAS etc. Four papers have received "Best Paper Award" in the year of 2010, 2011, 2013 and 2014'),
(15, 'kaushik deb  Vision Human  Interaction Pattern Recognition', '<Name> Dr. Kaushik Deb  <Position> Professor  <Qualification> Ph.D. (Korea)  <Email> debkaushik99@cuet.ac.bd  <Research Interest> Computer Vision, Human Computer Interaction, Pattern Recognition'),
(16, 'Muhammad  Ibrahim  Khan Graphics Bioinformatics Graph', '<Name> Dr.  Muhammad  Ibrahim  Khan   <Position>  Professor <Qualification>Ph.D. (JU)  <Email> muhammad_ikhancuet@yahoo.com <Research  Interest>  Computer  Graphics,  Image  Processing,  Digital Watermarking, Bioinformatics, Graph Theory'),
(17, 'Moshiul  Hoque Natural Language Processing Robotics HCI', '<Name>  Dr.  M.  Moshiul  Hoque   <Position>  Associate Professor and head <Qualification>  Ph.D.  (Japan)   <Email>  mmoshiulh@gmail.com <Research Interest> Natural Language Processing, Robotics, HCI'),
(18, 'Asaduzzaman Wireless Communication Networking', '<Name>  Dr.  Asaduzzaman   <Position>  Associate  Professor <Qualification> Ph.D. (Korea) <Email> asad@cuet.ac.bd  <Research Interest> Wireless Communication and Networking'),
(19, 'Mohammad Shamsul Arefin big data data mining Distributed cloud', '<Name> Dr. Mohammad Shamsul Arefin  <Position> Associate Professor <Qualification> Ph.D. (Japan)  <Email> sarefin@cuet.ac.bd  <Research Interest> Data Mining, Cloud Computing, Big Data Management, Semantic web, Multilingual Data Management, Object Oriented  System Development, Distributed System.'),
(20, 'Thomas  Chowdhury Robotics Networking', '<Name>  Thomas  Chowdhury   <Position>  Assistant  Professor <Qualification>  M.Sc.  in  CSE  (Canada),  (On  study  leave  for  Ph.D. Program, Canada)   <Email> thmschy@cuet.ac.bd  <Research Interest>Robotics, Networking'),
(21, 'Rahma Binty Mufiz Mukta fuzzy logic fuzzy set', '<Name> Rahma Binty Mufiz Mukta  <Position> Lecturer  <Qualification>B.Sc.  in  CSE  (CUET)   <Email>  rahmamukta@gmail.com   <Research Interest> fuzzy logic fuzzy set'),
(22, 'total number assistant much', 'Total Number of Assistant professor in CSE is 7'),
(23, 'total number professors many', 'Total Number of  professor in CSE is 5'),
(24, 'total much lecturer number', 'Total Number of  lecturer  in CSE is 5'),
(25, 'Microprocessor Kamal  Hossen Software', '<Name>  Muhammed  Kamal  Hossen   <Position>  Assistant  Professor <Qualification> B.Sc. in CSE (CUET)  <Email> mkhossen@cuet.ac.bd <Research Interest> Microprocessor & Computer Interfacing, Software Engineering'),
(26, 'Pranab  Kumar  Dhar  image processing Watermarking', '<Name>  Dr.  Pranab  Kumar  Dhar   <Position>  Assistant  Professor <Qualification>  Ph.D.  (Japan)   <Email>  pranab_cse@yahoo.com <Research  Interest>  Multimedia  Security,  Digital  Watermarking, Multimedia Data Compression, Digital Signal Processing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(22) NOT NULL,
  `password` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`) VALUES
(1, 'admin', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
