-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 04:42 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpl_housing`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms_assign`
--

CREATE TABLE `hms_assign` (
  `user_id` varchar(128) NOT NULL,
  `house_id` varchar(128) NOT NULL,
  `room_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_housing`
--

CREATE TABLE `hms_housing` (
  `id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type_id` varchar(128) NOT NULL,
  `no_of_floor` int(11) NOT NULL,
  `no_of_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_housing`
--

INSERT INTO `hms_housing` (`id`, `name`, `type_id`, `no_of_floor`, `no_of_room`) VALUES
('{755934EE-5250-4480-980C-AB5A74770B38}', 'Khan Jahan Ali Hall', '{A10D8B22-8015-4D50-8D4B-BABF1F72B7D4}', 4, 106),
('{89606478-8F3F-4CF4-BF93-73160D3EAAF0}', 'Bangabandhu Sheikh Mujibur Rahman', '{A10D8B22-8015-4D50-8D4B-BABF1F72B7D4}', 4, 96),
('{9BDEAC3B-8F43-481D-A434-C116FC635F7E}', 'Banga Mata Fozilatunnessa Mujib', '{0BCFBE69-B3D3-40CF-B4C0-29228A62631B}', 4, 76),
('{9FCF0283-2EE6-450E-870C-69E4757A8654}', 'Khan Bahadur Ahsanullah', '{A10D8B22-8015-4D50-8D4B-BABF1F72B7D4}', 4, 96),
('{F7A9D391-0127-4053-8345-ADC5207630BA}', 'Aporajita', '{0BCFBE69-B3D3-40CF-B4C0-29228A62631B}', 4, 160);

-- --------------------------------------------------------

--
-- Table structure for table `hms_housing_details`
--

CREATE TABLE `hms_housing_details` (
  `id` varchar(128) NOT NULL,
  `housing_id` varchar(128) NOT NULL,
  `provost` varchar(50) NOT NULL,
  `ass_provost` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `no_of_workers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_housing_details`
--

INSERT INTO `hms_housing_details` (`id`, `housing_id`, `provost`, `ass_provost`, `officer`, `description`, `no_of_workers`) VALUES
('{9A4ACC43-9658-4068-AF9D-34E41A7FA68F}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Prof. Dr.', 'Assistant provost', 'Employee', 'ku', 20);

-- --------------------------------------------------------

--
-- Table structure for table `hms_room`
--

CREATE TABLE `hms_room` (
  `room_id` varchar(128) NOT NULL,
  `room_no` int(11) NOT NULL,
  `house_id` varchar(128) NOT NULL,
  `no_of_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_room`
--

INSERT INTO `hms_room` (`room_id`, `room_no`, `house_id`, `no_of_seat`) VALUES
('{14F89FB2-DCBF-4A39-BD25-EDBD2B00F2C6}', 104, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{1B338CD2-4078-44EB-8FE9-7802B602BF22}', 310, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{1EAC74BC-69CA-4602-9720-CD99FC3606CD}', 402, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{2256EE66-B95C-459D-9578-6C066E23AC3F}', 104, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{2C8DCADC-57BC-40FB-B00B-3C0F419D21B9}', 316, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{72D3958D-D574-45FD-AA78-703A4A601ECC}', 402, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{7D815158-7F3C-4112-8554-B352B73DD5FE}', 102, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{7DEC8736-8A79-40BE-9F0C-7C82D6B3019D}', 101, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{834E9708-9B75-4085-9760-18F34D01933C}', 102, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{97F41494-7A82-43E1-BA2F-166FE79FE7D2}', 101, '{89606478-8F3F-4CF4-BF93-73160D3EAAF0}', 4),
('{9C763426-8AD7-4354-B380-024FDF0808F7}', 425, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{BED387CE-9E20-40B2-BF23-39450BD100A8}', 101, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{DD038795-E84F-437D-A66D-BD568E692DE7}', 425, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{DFAA88EC-204E-402C-B6CB-A83C7AB7A523}', 103, '{755934EE-5250-4480-980C-AB5A74770B38}', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hms_type`
--

CREATE TABLE `hms_type` (
  `id` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_type`
--

INSERT INTO `hms_type` (`id`, `name`) VALUES
('{A10D8B22-8015-4D50-8D4B-BABF1F72B7D4}', 'Boys Hall'),
('{452DD60B-A7EB-441D-9457-3A4EB70096C4}', 'Dorm'),
('{0BCFBE69-B3D3-40CF-B4C0-29228A62631B}', 'Girls Hall'),
('{3A4F1094-C5A5-4489-91C3-2E1F987FA0CB}', 'Staff Quarters'),
('{CE01A104-B263-4601-8288-05431F61F0DE}', 'Teacher\'s Quarters');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE `tbl_discipline` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ShortCode` varchar(20) DEFAULT NULL,
  `SchoolID` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discipline`
--

INSERT INTO `tbl_discipline` (`ID`, `Name`, `ShortCode`, `SchoolID`) VALUES
('{0CF37516-06FE-41CD-93AD-D2D1652509D6}', 'Mathematics', 'MATH', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}'),
('{560A0FC0-6221-497D-8D41-E584EE4BBEE3}', 'Architecture', 'ARCH', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}'),
('{63F3C00B-6168-4FBD-AB01-7A1FE413BDDE}', 'Forestry and Wood Technology', 'FWT', '{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}'),
('{AF41CC9F-3BCD-4952-9D02-17184CC40C79}', 'Urban and Rural Planning', 'URP', '{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}'),
('{E065BBA7-D0C5-4DFA-9768-81B6F056EB4A}', 'Foresty and Marine Resource Technology', 'FMRT', '{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}'),
('{E7280448-E379-424E-A11D-357F4334AC8D}', 'Physics', 'PHY', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}'),
('{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'Computer Science and Engineering', 'CSE', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion`
--

CREATE TABLE `tbl_discussion` (
  `ID` varchar(40) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `CategoryID` varchar(40) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Tag` varchar(200) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `CreatorID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion`
--

INSERT INTO `tbl_discussion` (`ID`, `Title`, `CategoryID`, `Description`, `Tag`, `CreationDate`, `CreatorID`) VALUES
('{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'what is oop', '{3D212234-2F34-4AB0-83EF-1A772068403B}', 'describe oop', 'oop', '2017-04-29 00:00:00', 'mkazi078@uottawa.ca'),
('{DA408BD0-9C9E-46F6-8CF2-00A631B06A26}', 'what is c#', '{44CAEE8D-A9D7-48C8-A2EA-A7463E00FCD6}', 'this is c#', 'oop', '2017-04-29 00:00:00', 'mkazi078@uottawa.ca');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion_category`
--

CREATE TABLE `tbl_discussion_category` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion_category`
--

INSERT INTO `tbl_discussion_category` (`ID`, `Name`) VALUES
('{3D212234-2F34-4AB0-83EF-1A772068403B}', 'java'),
('{44CAEE8D-A9D7-48C8-A2EA-A7463E00FCD6}', 'c#'),
('{B2AAFE95-2D69-4633-8EBB-19FD30108C69}', 'php'),
('{DF55D487-2341-48BF-8B2B-3123FFE65B0E}', 'python');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion_comment`
--

CREATE TABLE `tbl_discussion_comment` (
  `CommentID` varchar(50) NOT NULL,
  `DiscussionID` varchar(40) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `CreatorID` varchar(40) NOT NULL,
  `CommentTime` datetime NOT NULL,
  `CommentIDTop` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion_comment`
--

INSERT INTO `tbl_discussion_comment` (`CommentID`, `DiscussionID`, `Comment`, `CreatorID`, `CommentTime`, `CommentIDTop`) VALUES
('{00AADED4-6799-4F2C-BECB-ED50F7B03DDE}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'new comment', 'mkazi078@uottawa.ca', '2017-06-26 19:18:08', NULL),
('{1634B01B-5F82-43EF-96F8-E6149F488424}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'it is PIE', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL),
('{19918AD2-47E4-4BCA-8933-C4A970BBE22E}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'gg', 'test@test.com', '2017-08-18 14:27:56', NULL),
('{550A15FC-06B8-43DF-83EE-097E35920170}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'little difficult', 'mohidul@gmail.com', '0000-00-00 00:00:00', NULL),
('{A15517C2-883F-4E5E-B0AC-9A1DB556741F}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'Polymorphism, inheritence, encapsulation', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`ID`, `Name`, `Category`) VALUES
('DISCIPLINE_C', 'DISCIPLINE_C', 'DISCIPLINE'),
('DISCIPLINE_D', 'DISCIPLINE_D', 'DISCIPLINE'),
('DISCIPLINE_R', 'DISCIPLINE_R', 'DISCIPLINE'),
('DISCIPLINE_U', 'DISCIPLINE_U', 'DISCIPLINE'),
('DISCUSSION_C', 'DISCUSSION_C', 'DISCUSSION'),
('DISCUSSION_CAT_C', 'DISCUSSION_CAT_C', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_D', 'DISCUSSION_CAT_D', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_R', 'DISCUSSION_CAT_R', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_U', 'DISCUSSION_CAT_U', 'DISCUSSION CATEGORY'),
('DISCUSSION_COMMENT_C', 'DISCUSSION_COMMENT_C', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_D', 'DISCUSSION_COMMENT_D', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_R', 'DISCUSSION_COMMENT_R', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_U', 'DISCUSSION_COMMENT_U', 'DISCUSSION COMMENT'),
('DISCUSSION_D', 'DISCUSSION_D', 'DISCUSSION'),
('DISCUSSION_R', 'DISCUSSION_R', 'DISCUSSION'),
('DISCUSSION_U', 'DISCUSSION_U', 'DISCUSSION'),
('HOUSING_C', 'HOUSING_C', 'HOUSING'),
('HOUSING_D', 'HOUSING_D', 'HOUSING'),
('HOUSING_DETAILS_C', 'HOUSING_DETAILS_C', 'HOUSING DETAILS'),
('HOUSING_DETAILS_D', 'HOUSING_DETAILS_D', 'HOUSING DETAILS'),
('HOUSING_DETAILS_R', 'HOUSING_DETAILS_R', 'HOUSING DETAILS'),
('HOUSING_DETAILS_U', 'HOUSING_DETAILS_U', 'HOUSING DETAILS'),
('HOUSING_R', 'HOUSING_R', 'HOUSING'),
('HOUSING_ROOM_ASSIGN_C', 'HOUSING_ROOM_ASSIGN_C', 'HOUSING ROOM ASSIGN'),
('HOUSING_ROOM_ASSIGN_D', 'HOUSING_ROOM_ASSIGN_D', 'HOUSING ROOM ASSIGN'),
('HOUSING_ROOM_ASSIGN_R', 'HOUSING_ROOM_ASSIGN_R', 'HOUSING ROOM ASSIGN'),
('HOUSING_ROOM_ASSIGN_U', 'HOUSING_ROOM_ASSIGN_U', 'HOUSING ROOM ASSIGN'),
('HOUSING_ROOM_C', 'HOUSING_ROOM_C', 'HOUSING ROOM'),
('HOUSING_ROOM_D', 'HOUSING_ROOM_D', 'HOUSING ROOM'),
('HOUSING_ROOM_R', 'HOUSING_ROOM_R', 'HOUSING ROOM'),
('HOUSING_ROOM_U', 'HOUSING_ROOM_U', 'HOUSING ROOM'),
('HOUSING_TYPE_C', 'HOUSING_TYPE_C', 'HOUSING TYPE'),
('HOUSING_TYPE_D', 'HOUSING_TYPE_D', 'HOUSING TYPE'),
('HOUSING_TYPE_R', 'HOUSING_TYPE_R', 'HOUSING TYPE'),
('HOUSING_TYPE_U', 'HOUSING_TYPE_U', 'HOUSING TYPE'),
('HOUSING_U', 'HOUSING_U', 'HOUSING'),
('PERMISSION_C', 'PERMISSION_C', 'PERMISSION'),
('PERMISSION_D', 'PERMISSION_D', 'PERMISSION'),
('PERMISSION_R', 'PERMISSION_R', 'PERMISSION'),
('PERMISSION_U', 'PERMISSION_U', 'PERMISSION'),
('POSITION_C', 'POSITION_C', 'POSITION'),
('POSITION_D', 'POSITION_D', 'POSITION'),
('POSITION_R', 'POSITION_R', 'POSITION'),
('POSITION_U', 'POSITION_U', 'POSITION'),
('ROLE_C', 'ROLE_C', 'ROLE'),
('ROLE_D', 'ROLE_D', 'ROLE'),
('ROLE_R', 'ROLE_R', 'ROLE'),
('ROLE_U', 'ROLE_U', 'ROLE'),
('SCHOOL_C', 'SCHOOL_C', 'SCHOOL'),
('SCHOOL_D', 'SCHOOL_D', 'SCHOOL'),
('SCHOOL_R', 'SCHOOL_R', 'SCHOOL'),
('SCHOOL_U', 'SCHOOL_U', 'SCHOOL'),
('TERM_C', 'TERM_C', 'TERM'),
('TERM_D', 'TERM_D', 'TERM'),
('TERM_R', 'TERM_R', 'TERM'),
('TERM_U', 'TERM_U', 'TERM'),
('USER_C', 'USER_C', 'USER'),
('USER_D', 'USER_D', 'USER'),
('USER_R', 'USER_R', 'USER'),
('USER_U', 'USER_U', 'USER'),
('YEAR_C', 'YEAR_C', 'YEAR'),
('YEAR_D', 'YEAR_D', 'YEAR'),
('YEAR_R', 'YEAR_R', 'YEAR'),
('YEAR_U', 'YEAR_U', 'YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`ID`, `Name`) VALUES
('{1BFE76DB-C2AA-4FAA-A23B-F43E6150A2F6}', 'Section Officer'),
('{2E024DF5-BD45-4EF2-A5E3-43BCA3E9777F}', 'Pro-vice Chancellor'),
('{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}', 'Assistant Professor'),
('{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}', 'Lecturer'),
('{818DE12F-60CC-42E4-BAEC-48EAAED65179}', 'Dean of School'),
('{928EE9FF-E02D-470F-9A6A-AD0EB38B848F}', 'Vice Chancellor'),
('{92FDDA3F-1E91-4AA3-918F-EB595F85790C}', 'Daywise Worker'),
('{932CB0EE-76C2-448E-A40E-2D167EECC479}', 'Registrar'),
('{ADA027D3-21C1-47AF-A21D-759CAFCFE58D}', 'Assistant Registrar'),
('{B76EB035-EA26-4CEB-B029-1C6129574D98}', 'Librarian'),
('{B78C7A7B-4D38-4025-8170-7B8C9F291946}', 'Head of Discipline'),
('{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}', 'Associate Professor'),
('{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`ID`, `Name`) VALUES
('administrator', 'Administrator'),
('registration coordinator', 'Registration Coordinator'),
('student', 'Student'),
('stuff', 'Stuff'),
('tabulator', 'Tabulator'),
('teacher', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_permission`
--

CREATE TABLE `tbl_role_permission` (
  `Row` int(11) NOT NULL,
  `RoleID` varchar(40) NOT NULL,
  `PermissionID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role_permission`
--

INSERT INTO `tbl_role_permission` (`Row`, `RoleID`, `PermissionID`) VALUES
(2038, 'administrator', 'DISCIPLINE_C'),
(2039, 'administrator', 'DISCIPLINE_D'),
(2040, 'administrator', 'DISCIPLINE_R'),
(2041, 'administrator', 'DISCIPLINE_U'),
(2042, 'administrator', 'DISCUSSION_C'),
(2043, 'administrator', 'DISCUSSION_D'),
(2044, 'administrator', 'DISCUSSION_R'),
(2045, 'administrator', 'DISCUSSION_U'),
(2046, 'administrator', 'DISCUSSION_CAT_C'),
(2047, 'administrator', 'DISCUSSION_CAT_D'),
(2048, 'administrator', 'DISCUSSION_CAT_R'),
(2049, 'administrator', 'DISCUSSION_CAT_U'),
(2050, 'administrator', 'DISCUSSION_COMMENT_C'),
(2051, 'administrator', 'DISCUSSION_COMMENT_D'),
(2052, 'administrator', 'DISCUSSION_COMMENT_R'),
(2053, 'administrator', 'DISCUSSION_COMMENT_U'),
(2054, 'administrator', 'HOUSING_C'),
(2055, 'administrator', 'HOUSING_D'),
(2056, 'administrator', 'HOUSING_R'),
(2057, 'administrator', 'HOUSING_U'),
(2058, 'administrator', 'HOUSING_DETAILS_C'),
(2059, 'administrator', 'HOUSING_DETAILS_D'),
(2060, 'administrator', 'HOUSING_DETAILS_R'),
(2061, 'administrator', 'HOUSING_DETAILS_U'),
(2062, 'administrator', 'HOUSING_ROOM_C'),
(2063, 'administrator', 'HOUSING_ROOM_D'),
(2064, 'administrator', 'HOUSING_ROOM_R'),
(2065, 'administrator', 'HOUSING_ROOM_U'),
(2066, 'administrator', 'HOUSING_ROOM_ASSIGN_C'),
(2067, 'administrator', 'HOUSING_ROOM_ASSIGN_D'),
(2068, 'administrator', 'HOUSING_ROOM_ASSIGN_R'),
(2069, 'administrator', 'HOUSING_ROOM_ASSIGN_U'),
(2070, 'administrator', 'HOUSING_TYPE_D'),
(2071, 'administrator', 'HOUSING_TYPE_R'),
(2072, 'administrator', 'HOUSING_TYPE_U'),
(2073, 'administrator', 'HOUSING_TYPE_C'),
(2074, 'administrator', 'PERMISSION_C'),
(2075, 'administrator', 'PERMISSION_D'),
(2076, 'administrator', 'PERMISSION_R'),
(2077, 'administrator', 'PERMISSION_U'),
(2078, 'administrator', 'POSITION_C'),
(2079, 'administrator', 'POSITION_D'),
(2080, 'administrator', 'POSITION_R'),
(2081, 'administrator', 'POSITION_U'),
(2082, 'administrator', 'ROLE_C'),
(2083, 'administrator', 'ROLE_D'),
(2084, 'administrator', 'ROLE_R'),
(2085, 'administrator', 'ROLE_U'),
(2086, 'administrator', 'SCHOOL_C'),
(2087, 'administrator', 'SCHOOL_D'),
(2088, 'administrator', 'SCHOOL_R'),
(2089, 'administrator', 'SCHOOL_U'),
(2090, 'administrator', 'TERM_C'),
(2091, 'administrator', 'TERM_D'),
(2092, 'administrator', 'TERM_R'),
(2093, 'administrator', 'TERM_U'),
(2094, 'administrator', 'USER_C'),
(2095, 'administrator', 'USER_D'),
(2096, 'administrator', 'USER_R'),
(2097, 'administrator', 'USER_U'),
(2098, 'administrator', 'YEAR_C'),
(2099, 'administrator', 'YEAR_D'),
(2100, 'administrator', 'YEAR_R'),
(2101, 'administrator', 'YEAR_U');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DeanID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`ID`, `Name`, `DeanID`) VALUES
('{39DDC0C2-CFC2-4246-8748-8812B1751A5C}', 'Science Engineering and Technology', ''),
('{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}', 'Life Science', ''),
('{86E0F021-B30D-48D2-B177-247180633C5E}', 'Social Science', ''),
('{879375F7-0A15-4705-AC90-C6786D279EF1}', 'Law and Humanities', ''),
('{CE09AA38-205B-4F50-A0E0-14DB8686C912}', 'Fine Arts', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term`
--

CREATE TABLE `tbl_term` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_term`
--

INSERT INTO `tbl_term` (`ID`, `Name`) VALUES
('{6DE3CF58-3A1A-4D6A-88CF-83F22C27E0BA}', 'Special'),
('{AF8B217E-4E76-41B8-A02A-7115BD4A6BE6}', '2nd'),
('{F9121C67-1E89-4F0B-80AA-89FD3B6BD665}', '1st');

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
('imran@imran.com', '150203', 'imran@imran.com', '123', 'Imran', 'Hossain', 'pending', NULL, NULL, NULL),
('pp@cse.com', '150215', 'pp@cse.com', '123', 'Pranta', 'Protik', 'approved', NULL, NULL, NULL),
('test@test.com', '020201', 'test@test.com', '123', 'I AM', 'ADMIN', 'approved', NULL, NULL, NULL);

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
('imran@imran.com', NULL, NULL, NULL, NULL, NULL, NULL),
('pp@cse.com', NULL, NULL, NULL, NULL, NULL, NULL),
('test@test.com', 'My father', 'My mother', 'My address', '04100000', 'Same', '0171100000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_discipline`
--

CREATE TABLE `tbl_user_discipline` (
  `UserID` varchar(40) NOT NULL,
  `DisciplineID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_position`
--

CREATE TABLE `tbl_user_position` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `PositionID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_position`
--

INSERT INTO `tbl_user_position` (`ID`, `UserID`, `PositionID`) VALUES
(4, '{693F944F-328D-433A-9F94-459D92841645}', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(14, '{E0F0AE1A-AECF-46C1-A148-4485036F3CCF}', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(16, '{A4F96981-F014-46F6-BB93-87500C3CBB03}', '{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}'),
(17, '{0B2F4F89-2048-4504-AB17-0412CC624A05}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(19, '{8104FB4F-8E63-489D-8D90-DB45A9A2327B}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(21, '{8B24B76D-9969-4F71-ABC4-6EE59355C686}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(24, '{9E2E6363-A0FF-4C0F-B58F-D162725FB702}', '{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}'),
(30, 'mohidul@gmail.com', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(37, 'mkazi078@uottawa.ca', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `RoleID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`ID`, `UserID`, `RoleID`) VALUES
(98, 'test@test.com', 'administrator'),
(99, 'test@test.com', 'teacher'),
(100, 'pp@cse.com', 'student'),
(101, 'imran@imran.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`ID`, `Name`) VALUES
('{1FAC0F1A-9D60-43F6-AB07-C933D5A4AA30}', 'Phd 1st'),
('{326B168F-58CC-42F3-B71A-DFE8DBBC05E8}', 'MSc 1st'),
('{6780C884-E112-4F58-9503-E2110B615547}', '4th'),
('{9F3A6CBC-0115-4EC2-ABB3-8CCA431F6C2B}', '1st'),
('{A21965E4-4FE4-43AC-A77F-DABAC9B356F2}', '3rd'),
('{ADBEDD3E-D8EA-47AA-A068-C4C703DB4AE6}', 'MSc 2nd'),
('{B9D6CC05-7AD4-4666-80AB-80797A872743}', 'Phd 2nd'),
('{CBE08035-94CD-4610-B4E2-A0E844184056}', 'Phd 4th'),
('{E3823AA6-6BE5-4A07-93EA-FA59DE4F616F}', 'Phd 3rd'),
('{EA335D18-A1A8-4D15-9C7B-4A4700AD4543}', '2nd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hms_assign`
--
ALTER TABLE `hms_assign`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `hall_id` (`house_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `hms_housing`
--
ALTER TABLE `hms_housing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `hms_housing_details`
--
ALTER TABLE `hms_housing_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `housing_id` (`housing_id`);

--
-- Indexes for table `hms_room`
--
ALTER TABLE `hms_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hall_id` (`house_id`);

--
-- Indexes for table `hms_type`
--
ALTER TABLE `hms_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion`
--
ALTER TABLE `tbl_discussion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion_category`
--
ALTER TABLE `tbl_discussion_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion_comment`
--
ALTER TABLE `tbl_discussion_comment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  ADD PRIMARY KEY (`Row`);

--
-- Indexes for table `tbl_term`
--
ALTER TABLE `tbl_term`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `Row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2102;
--
-- AUTO_INCREMENT for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hms_assign`
--
ALTER TABLE `hms_assign`
  ADD CONSTRAINT `hms_assign_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hms_assign_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hms_assign_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `hms_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_housing`
--
ALTER TABLE `hms_housing`
  ADD CONSTRAINT `hms_housing_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `hms_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_housing_details`
--
ALTER TABLE `hms_housing_details`
  ADD CONSTRAINT `hms_housing_details_ibfk_1` FOREIGN KEY (`housing_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_room`
--
ALTER TABLE `hms_room`
  ADD CONSTRAINT `hms_room_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
