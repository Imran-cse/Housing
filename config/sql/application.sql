-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 07:15 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms_application`
--

CREATE TABLE `hms_application` (
  `id` varchar(50) NOT NULL,
  `template_id` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `app_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_application`
--

INSERT INTO `hms_application` (`id`, `template_id`, `body`, `user_id`, `app_date`) VALUES
('{45769900-C347-417B-A118-4452247AFB66}', '{10349FA5-BF19-42FA-B9D0-0F5736E0830A}', 'Date: 07/11/2017\r\nProvost,\r\nSubject: Application for id card.\r\n\r\nDear sir,\r\nIt is to state that I am I AM ADMIN and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit.  I am attached to your hall\r\n\r\nSir, I want to request you that Kindly, issue me a id card. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\r\n\r\nYours Sincerely,\r\nName: I AM ADMIN\r\nUniversity Id: 020201\r\nKhulna University,Khulna', 'test@test.com', '2017-11-07'),
('{91F6D8C8-7FA8-46FA-A0EA-BF108106E8FB}', '{29B5018D-2C2A-48B7-87C4-306AB15A41A4}', 'Date: 26/10/2017\r\nProvost,\r\nSubject: Application for seat.\r\n\r\nDear sir,\r\nIt is to state that I am I AM ADMIN and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit. But I want to mention that I am from Sweden. For my studies I have to come to California and the issue is neither I have any relative here nor I know the entire place. I will be totally new for here.\r\n\r\nSir, I want to request you that Kindly, allot me room in University Hostel. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\r\n\r\nYours Sincerely,\r\nName: I AM ADMIN\r\nUniversity Id: 020201\r\nKhulna University,Khulna', 'test@test.com', '2017-10-26'),
('{BF461494-8BF7-4E74-975E-FA273595841A}', '{29B5018D-2C2A-48B7-87C4-306AB15A41A4}', 'Date: 18/10/2017\r\nProvost,\r\nSubject: Application for seat.\r\n\r\nDear sir,\r\nIt is to state that I am I AM ADMIN and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit. But I want to mention that I am from Sweden. For my studies I have to come to California and the issue is neither I have any relative here nor I know the entire place. I will be totally new for here.\r\n\r\nSir, I want to request you that Kindly, allot me room in University Hostel. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\r\n\r\nYours Sincerely,\r\nName: I AM ADMIN\r\nUniversity Id: 020201\r\nKhulna University,Khulna', 'test@test.com', '2017-10-18'),
('{E0868BEE-FAE0-401D-97AB-A54B44B64EF3}', '{10349FA5-BF19-42FA-B9D0-0F5736E0830A}', 'Date: 26/10/2017\r\nProvost,\r\nSubject: Application for id card.\r\n\r\nDear sir,\r\nIt is to state that I am I AM ADMIN and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit.  I am attached to your hall\r\n\r\nSir, I want to request you that Kindly, issue me a id card. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\r\n\r\nYours Sincerely,\r\nName: I AM ADMIN\r\nUniversity Id: 020201\r\nKhulna University,Khulna', 'test@test.com', '2017-10-26'),
('{F9A809BA-8CA2-450C-AF0F-9198771A2F2F}', '{29B5018D-2C2A-48B7-87C4-306AB15A41A4}', 'Date: 18/10/2017\nProvost,\nSubject: Application for seat.\n\nDear sir,\nIt is to state that I am Al Amin  and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit. But I want to mention that I am from Sweden. For my studies I have to come to California and the issue is neither I have any relative here nor I know the entire place. I will be totally new for here.\n\nSir, I want to request you that Kindly, allot me room in University Hostel. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\n\nYours Sincerely,\nName: Al Amin \nUniversity Id: 150212\nKhulna University,Khulna', 'alamin@cse.com', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `hms_application_template`
--

CREATE TABLE `hms_application_template` (
  `id` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_application_template`
--

INSERT INTO `hms_application_template` (`id`, `receiver`, `subject`, `body`) VALUES
('{10349FA5-BF19-42FA-B9D0-0F5736E0830A}', 'Provost', 'Application for id card', 'Dear sir,\r\nIt is to state that I am [*FullName*] and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit.  I am attached to your hall\r\n\r\nSir, I want to request you that Kindly, issue me a id card. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\r\n\r\nYours Sincerely,\r\nName: [*FullName*]\r\nUniversity Id: [*UniversityId*]\r\nKhulna University,Khulna'),
('{29B5018D-2C2A-48B7-87C4-306AB15A41A4}', 'Provost', 'Application for seat', 'Dear sir,\r\nIt is to state that I am [*FullName*] and I have applied in Masters Program in your prestigious institution. Luckily, I have got admission here upon merit. But I want to mention that I am from Rajshahi. For my studies I have to come to Khulna and the issue is neither I have any relative here nor I know the entire place. I will be totally new for here.\r\n\r\nSir, I want to request you that Kindly, allot me room in University Hostel. I will pay the charges and you will never find me misbehaving. I am hardworking student and I will prove it. Bit assistance of yours is required. Hoping that you will consider my request. I shall be your beholder.\r\n\r\nYours Sincerely,\r\nName: [*FullName*]\r\nUniversity Id: [*UniversityId*]\r\nKhulna University,Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` varchar(40) NOT NULL,
  `UniversityID` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `IsLogged` smallint(1) DEFAULT NULL,
  `IsArchived` smallint(1) DEFAULT NULL,
  `IsDeleted` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `UniversityID`, `Email`, `Password`, `FirstName`, `LastName`, `Status`, `IsLogged`, `IsArchived`, `IsDeleted`) VALUES
('alamin@cse.com', '150212', 'alamin@cse.com', '123', 'Al', 'Amin ', 'approved', NULL, NULL, NULL),
('alice@cse.com', '150224', 'alice@cse.com', '123', 'Rafia', 'Alice', 'approved', NULL, NULL, NULL),
('bani@cse.com', '150230', 'bani@cse.com', '123', 'Suraiya', 'Bani', 'approved', NULL, NULL, NULL),
('dip@cse.com', '140205', 'dip@cse.com', '123', 'Dip', 'Datta', 'pending', NULL, NULL, NULL),
('imran@imran.com', '150203', 'imran@imran.com', '123', 'Imran', 'Hossain', 'approved', NULL, NULL, NULL),
('pp@cse.com', '150215', 'pp@cse.com', '123', 'Pranta', 'Protik', 'approved', NULL, NULL, NULL),
('ratul@cse.com', '150226', 'ratul@cse.com', '123', 'Siamul', 'Ratul', 'approved', NULL, NULL, NULL),
('shoron@babui.com', '150202', 'shoron@babui.com', '123', 'Shaiful', 'Islalm', 'approved', NULL, NULL, NULL),
('shuvo@cse.com', '150233', 'shuvo@cse.com', '123', 'Wahid', 'Shuvo', 'approved', NULL, NULL, NULL),
('test@test.com', '020201', 'test@test.com', '123', 'I AM', 'ADMIN', 'approved', NULL, NULL, NULL),
('tk@cse.com', '150232', 'tk@cse.com', '123', 'Tanmai', 'Ghosh', 'approved', NULL, NULL, NULL),
('vao@cse.com', '150216', 'vao@cse.com', '123', 'Antu', 'Vao', 'approved', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `ID` varchar(40) NOT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `MotherName` varchar(100) DEFAULT NULL,
  `PermanentAddress` varchar(200) DEFAULT NULL,
  `HomePhone` varchar(20) DEFAULT NULL,
  `CurrentAddress` varchar(200) DEFAULT NULL,
  `MobilePhone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`ID`, `FatherName`, `MotherName`, `PermanentAddress`, `HomePhone`, `CurrentAddress`, `MobilePhone`) VALUES
('alamin@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('alice@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('bani@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('dip@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('imran@imran.com', NULL, NULL, NULL, NULL, NULL, NULL),
('pp@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('ratul@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('shoron@babui.com', NULL, NULL, NULL, NULL, NULL, NULL),
('shuvo@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('test@test.com', 'My father', 'My mother', 'My address', '04100000', 'Same', '0171100000'),
('tk@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('vao@cse.com', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hms_application`
--
ALTER TABLE `hms_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_id` (`template_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hms_application_template`
--
ALTER TABLE `hms_application_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hms_application`
--
ALTER TABLE `hms_application`
  ADD CONSTRAINT `hms_application_ibfk_1` FOREIGN KEY (`template_id`) REFERENCES `hms_application_template` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hms_application_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
