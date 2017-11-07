-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 06:47 AM
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
-- Table structure for table `hms_apply`
--

CREATE TABLE `hms_apply` (
  `id` varchar(40) NOT NULL,
  `application` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_assign`
--

CREATE TABLE `hms_assign` (
  `user_id` varchar(40) NOT NULL,
  `house_id` varchar(128) NOT NULL,
  `room_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_assign`
--

INSERT INTO `hms_assign` (`user_id`, `house_id`, `room_id`) VALUES
('alamin@cse.com', '{9FCF0283-2EE6-450E-870C-69E4757A8654}', '{72D3958D-D574-45FD-AA78-703A4A601ECC}'),
('bani@cse.com', '{9BDEAC3B-8F43-481D-A434-C116FC635F7E}', '{A1D17493-E22B-4FDB-B4F2-96409257F303}'),
('imran@imran.com', '{9FCF0283-2EE6-450E-870C-69E4757A8654}', '{2256EE66-B95C-459D-9578-6C066E23AC3F}'),
('pp@cse.com', '{755934EE-5250-4480-980C-AB5A74770B38}', '{7DEC8736-8A79-40BE-9F0C-7C82D6B3019D}'),
('ratul@cse.com', '{9FCF0283-2EE6-450E-870C-69E4757A8654}', '{10366D8E-7EE9-43E6-B656-E7794D5B1A20}'),
('shoron@babui.com', '{755934EE-5250-4480-980C-AB5A74770B38}', '{7DEC8736-8A79-40BE-9F0C-7C82D6B3019D}'),
('shuvo@cse.com', '{9FCF0283-2EE6-450E-870C-69E4757A8654}', '{2256EE66-B95C-459D-9578-6C066E23AC3F}'),
('tk@cse.com', '{755934EE-5250-4480-980C-AB5A74770B38}', '{7DEC8736-8A79-40BE-9F0C-7C82D6B3019D}'),
('vao@cse.com', '{755934EE-5250-4480-980C-AB5A74770B38}', '{77265A8E-6696-4D16-970F-CE9D17995A78}');

-- --------------------------------------------------------

--
-- Table structure for table `hms_assistant_provost`
--

CREATE TABLE `hms_assistant_provost` (
  `assistant_provost_id` varchar(50) NOT NULL,
  `house_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_assistant_provost`
--

INSERT INTO `hms_assistant_provost` (`assistant_provost_id`, `house_id`, `name`) VALUES
('{18170099-F3A0-45CC-B82F-B889C521422F}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Assistant Prof. ZZs'),
('{18709568-8909-4119-AF62-FCB0171577DE}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Assistant Prof. X'),
('{224D01A1-E9E0-4FA9-9DFF-9232A4558083}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Assistant Prof.'),
('{40ACF6E1-16E5-49F9-91D2-60B172DCE587}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Assistant Prof. ZZ'),
('{79C4BA3C-E1E7-4368-B20F-34B917F8632F}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Assistant Prof. Z');

-- --------------------------------------------------------

--
-- Table structure for table `hms_employee`
--

CREATE TABLE `hms_employee` (
  `employee_id` varchar(50) NOT NULL,
  `house_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_employee`
--

INSERT INTO `hms_employee` (`employee_id`, `house_id`, `name`) VALUES
('{4A1CDE13-63D5-4134-8516-00BFD66F4C28}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Jamal'),
('{D584A56F-D525-4B00-839C-42F8EB432CD8}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Section Officer');

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
-- Table structure for table `hms_provost`
--

CREATE TABLE `hms_provost` (
  `provost_id` varchar(50) NOT NULL,
  `house_id` varchar(50) NOT NULL,
  `provost_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_provost`
--

INSERT INTO `hms_provost` (`provost_id`, `house_id`, `provost_name`) VALUES
('{38B2582E-FDF4-4D30-8393-201699C115AA}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Prof. Dr. X'),
('{518C5253-5F3A-4C0C-8427-D4EEC7BC56E4}', '{755934EE-5250-4480-980C-AB5A74770B38}', 'Prof. Dr.');

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
('{10366D8E-7EE9-43E6-B656-E7794D5B1A20}', 421, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{14F89FB2-DCBF-4A39-BD25-EDBD2B00F2C6}', 104, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{1B338CD2-4078-44EB-8FE9-7802B602BF22}', 310, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{1EAC74BC-69CA-4602-9720-CD99FC3606CD}', 402, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{2256EE66-B95C-459D-9578-6C066E23AC3F}', 104, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{2C8DCADC-57BC-40FB-B00B-3C0F419D21B9}', 316, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{54D9C880-844D-4069-99E0-9BE86C759217}', 105, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{6E2DC14D-F277-4CD2-B380-1C703349AC67}', 102, '{F7A9D391-0127-4053-8345-ADC5207630BA}', 4),
('{72D3958D-D574-45FD-AA78-703A4A601ECC}', 402, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{77265A8E-6696-4D16-970F-CE9D17995A78}', 124, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{7BA14B98-DDE6-4977-AD32-4E2A0D0D042C}', 101, '{F7A9D391-0127-4053-8345-ADC5207630BA}', 4),
('{7D815158-7F3C-4112-8554-B352B73DD5FE}', 102, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{7DEC8736-8A79-40BE-9F0C-7C82D6B3019D}', 101, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{834E9708-9B75-4085-9760-18F34D01933C}', 102, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{97F41494-7A82-43E1-BA2F-166FE79FE7D2}', 101, '{89606478-8F3F-4CF4-BF93-73160D3EAAF0}', 4),
('{9C763426-8AD7-4354-B380-024FDF0808F7}', 425, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{A1D17493-E22B-4FDB-B4F2-96409257F303}', 408, '{9BDEAC3B-8F43-481D-A434-C116FC635F7E}', 4),
('{BBB00B6C-99DB-44CB-A5BF-B2A204E5AB42}', 202, '{89606478-8F3F-4CF4-BF93-73160D3EAAF0}', 4),
('{BED387CE-9E20-40B2-BF23-39450BD100A8}', 101, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{C71D520E-00C8-40C1-BC0C-53CC0C8EEB85}', 101, '{9BDEAC3B-8F43-481D-A434-C116FC635F7E}', 4),
('{D40D18AE-1D56-4FB5-9A41-CCAA7D7D57DA}', 115, '{755934EE-5250-4480-980C-AB5A74770B38}', 2),
('{DD038795-E84F-437D-A66D-BD568E692DE7}', 425, '{9FCF0283-2EE6-450E-870C-69E4757A8654}', 4),
('{DFAA88EC-204E-402C-B6CB-A83C7AB7A523}', 103, '{755934EE-5250-4480-980C-AB5A74770B38}', 4),
('{E580DC64-8178-499B-BA5E-73EBD9EAFE55}', 201, '{89606478-8F3F-4CF4-BF93-73160D3EAAF0}', 4);

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
('{CE01A104-B263-4601-8288-05431F61F0DE}', 'Teachers Quarters');

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
('{05FE9DD2-4A13-4E57-B068-2077A86D4AF9}', '{DA408BD0-9C9E-46F6-8CF2-00A631B06A26}', 'bgfb', 'test@test.com', '2017-10-13 06:28:05', NULL),
('{1634B01B-5F82-43EF-96F8-E6149F488424}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'it is PIE', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL),
('{19918AD2-47E4-4BCA-8933-C4A970BBE22E}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'gg', 'test@test.com', '2017-08-18 14:27:56', NULL),
('{550A15FC-06B8-43DF-83EE-097E35920170}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'little difficult', 'mohidul@gmail.com', '0000-00-00 00:00:00', NULL),
('{77825AF6-606A-4DAD-82ED-CCBABD5485D9}', '{DA408BD0-9C9E-46F6-8CF2-00A631B06A26}', 'gfh', 'test@test.com', '2017-10-13 06:28:15', NULL),
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
('APPLICATION_FORMAT_C', 'APPLICATION_FORMAT_C', 'APPLICATION FORMAT'),
('APPLICATION_FORMAT_D', 'APPLICATION_FORMAT_D', 'APPLICATION FORMAT'),
('APPLICATION_FORMAT_R', 'APPLICATION_FORMAT_R', 'APPLICATION FORMAT'),
('APPLICATION_FORMAT_U', 'APPLICATION_FORMAT_U', 'APPLICATION FORMAT'),
('APPLICATION_TEMPLATE_C', 'APPLICATION_TEMPLATE_C', 'APPLICATION TEMPLATE'),
('APPLICATION_TEMPLATE_D', 'APPLICATION_TEMPLATE_D', 'APPLICATION TEMPLATE'),
('APPLICATION_TEMPLATE_R', 'APPLICATION_TEMPLATE_R', 'APPLICATION TEMPLATE'),
('APPLICATION_TEMPLATE_U', 'APPLICATION_TEMPLATE_U', 'APPLICATION TEMPLATE'),
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
('HALL_C', 'HALL_C', 'HALL'),
('HALL_D', 'HALL_D', 'HALL'),
('HALL_R', 'HALL_R', 'HALL'),
('HALL_U', 'HALL_U', 'HALL'),
('HOUSING_APPLICATION_C', 'HOUSING_APPLICATION_C', 'HOUSING APPLICATION'),
('HOUSING_APPLICATION_D', 'HOUSING_APPLICATION_D', 'HOUSING APPLICATION'),
('HOUSING_APPLICATION_MANAGE_C', 'HOUSING_APPLICATION_MANAGE_C', 'HOUSING APPLICATION MANAGE'),
('HOUSING_APPLICATION_MANAGE_D', 'HOUSING_APPLICATION_MANAGE_D', 'HOUSING APPLICATION MANAGE'),
('HOUSING_APPLICATION_MANAGE_R', 'HOUSING_APPLICATION_MANAGE_R', 'HOUSING APPLICATION MANAGE'),
('HOUSING_APPLICATION_MANAGE_U', 'HOUSING_APPLICATION_MANAGE_U', 'HOUSING APPLICATION MANAGE'),
('HOUSING_APPLICATION_R', 'HOUSING_APPLICATION_R', 'HOUSING APPLICATION'),
('HOUSING_APPLICATION_U', 'HOUSING_APPLICATION_U', 'HOUSING APPLICATION'),
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
(2258, 'administrator', 'APPLICATION_FORMAT_C'),
(2259, 'administrator', 'APPLICATION_FORMAT_D'),
(2260, 'administrator', 'APPLICATION_FORMAT_R'),
(2261, 'administrator', 'APPLICATION_FORMAT_U'),
(2262, 'administrator', 'APPLICATION_TEMPLATE_C'),
(2263, 'administrator', 'APPLICATION_TEMPLATE_D'),
(2264, 'administrator', 'APPLICATION_TEMPLATE_R'),
(2265, 'administrator', 'APPLICATION_TEMPLATE_U'),
(2266, 'administrator', 'DISCIPLINE_C'),
(2267, 'administrator', 'DISCIPLINE_D'),
(2268, 'administrator', 'DISCIPLINE_R'),
(2269, 'administrator', 'DISCIPLINE_U'),
(2270, 'administrator', 'DISCUSSION_C'),
(2271, 'administrator', 'DISCUSSION_D'),
(2272, 'administrator', 'DISCUSSION_R'),
(2273, 'administrator', 'DISCUSSION_U'),
(2274, 'administrator', 'DISCUSSION_CAT_C'),
(2275, 'administrator', 'DISCUSSION_CAT_D'),
(2276, 'administrator', 'DISCUSSION_CAT_R'),
(2277, 'administrator', 'DISCUSSION_CAT_U'),
(2278, 'administrator', 'DISCUSSION_COMMENT_U'),
(2279, 'administrator', 'DISCUSSION_COMMENT_C'),
(2280, 'administrator', 'DISCUSSION_COMMENT_D'),
(2281, 'administrator', 'DISCUSSION_COMMENT_R'),
(2282, 'administrator', 'HOUSING_C'),
(2283, 'administrator', 'HOUSING_D'),
(2284, 'administrator', 'HOUSING_R'),
(2285, 'administrator', 'HOUSING_U'),
(2286, 'administrator', 'HOUSING_APPLICATION_C'),
(2287, 'administrator', 'HOUSING_APPLICATION_D'),
(2288, 'administrator', 'HOUSING_APPLICATION_R'),
(2289, 'administrator', 'HOUSING_APPLICATION_U'),
(2290, 'administrator', 'HOUSING_APPLICATION_MANAGE_C'),
(2291, 'administrator', 'HOUSING_APPLICATION_MANAGE_D'),
(2292, 'administrator', 'HOUSING_APPLICATION_MANAGE_U'),
(2293, 'administrator', 'HOUSING_APPLICATION_MANAGE_R'),
(2294, 'administrator', 'HOUSING_DETAILS_C'),
(2295, 'administrator', 'HOUSING_DETAILS_D'),
(2296, 'administrator', 'HOUSING_DETAILS_R'),
(2297, 'administrator', 'HOUSING_DETAILS_U'),
(2298, 'administrator', 'HOUSING_ROOM_U'),
(2299, 'administrator', 'HOUSING_ROOM_C'),
(2300, 'administrator', 'HOUSING_ROOM_D'),
(2301, 'administrator', 'HOUSING_ROOM_R'),
(2302, 'administrator', 'HOUSING_ROOM_ASSIGN_C'),
(2303, 'administrator', 'HOUSING_ROOM_ASSIGN_D'),
(2304, 'administrator', 'HOUSING_ROOM_ASSIGN_U'),
(2305, 'administrator', 'HOUSING_ROOM_ASSIGN_R'),
(2306, 'administrator', 'HOUSING_TYPE_C'),
(2307, 'administrator', 'HOUSING_TYPE_D'),
(2308, 'administrator', 'HOUSING_TYPE_R'),
(2309, 'administrator', 'HOUSING_TYPE_U'),
(2310, 'administrator', 'PERMISSION_C'),
(2311, 'administrator', 'PERMISSION_D'),
(2312, 'administrator', 'PERMISSION_R'),
(2313, 'administrator', 'PERMISSION_U'),
(2314, 'administrator', 'POSITION_C'),
(2315, 'administrator', 'POSITION_D'),
(2316, 'administrator', 'POSITION_R'),
(2317, 'administrator', 'POSITION_U'),
(2318, 'administrator', 'ROLE_C'),
(2319, 'administrator', 'ROLE_D'),
(2320, 'administrator', 'ROLE_R'),
(2321, 'administrator', 'ROLE_U'),
(2322, 'administrator', 'SCHOOL_C'),
(2323, 'administrator', 'SCHOOL_D'),
(2324, 'administrator', 'SCHOOL_R'),
(2325, 'administrator', 'SCHOOL_U'),
(2326, 'administrator', 'TERM_C'),
(2327, 'administrator', 'TERM_D'),
(2328, 'administrator', 'TERM_R'),
(2329, 'administrator', 'TERM_U'),
(2330, 'administrator', 'USER_C'),
(2331, 'administrator', 'USER_D'),
(2332, 'administrator', 'USER_R'),
(2333, 'administrator', 'USER_U'),
(2334, 'administrator', 'YEAR_C'),
(2335, 'administrator', 'YEAR_D'),
(2336, 'administrator', 'YEAR_R'),
(2337, 'administrator', 'YEAR_U'),
(2362, 'student', 'APPLICATION_FORMAT_C'),
(2363, 'student', 'APPLICATION_FORMAT_D'),
(2364, 'student', 'APPLICATION_FORMAT_R'),
(2365, 'student', 'APPLICATION_FORMAT_U'),
(2366, 'student', 'HOUSING_APPLICATION_C'),
(2367, 'student', 'HOUSING_APPLICATION_D'),
(2368, 'student', 'HOUSING_APPLICATION_R'),
(2369, 'student', 'HOUSING_APPLICATION_U');

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
(101, 'imran@imran.com', 'student'),
(102, 'bani@cse.com', 'student'),
(103, 'alice@cse.com', 'student'),
(104, 'tk@cse.com', 'student'),
(106, 'vao@cse.com', 'student'),
(107, 'ratul@cse.com', 'student'),
(108, 'shuvo@cse.com', 'student'),
(109, 'alamin@cse.com', 'student'),
(110, 'shoron@babui.com', 'student'),
(111, 'dip@cse.com', 'student');

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
-- Indexes for table `hms_apply`
--
ALTER TABLE `hms_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_assign`
--
ALTER TABLE `hms_assign`
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `user_id_3` (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `hall_id` (`house_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `hms_assistant_provost`
--
ALTER TABLE `hms_assistant_provost`
  ADD PRIMARY KEY (`assistant_provost_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `hms_employee`
--
ALTER TABLE `hms_employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `hms_housing`
--
ALTER TABLE `hms_housing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `hms_provost`
--
ALTER TABLE `hms_provost`
  ADD PRIMARY KEY (`provost_id`),
  ADD KEY `house_id` (`house_id`);

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
  MODIFY `Row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2370;
--
-- AUTO_INCREMENT for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hms_application`
--
ALTER TABLE `hms_application`
  ADD CONSTRAINT `hms_application_ibfk_1` FOREIGN KEY (`template_id`) REFERENCES `hms_application_template` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hms_application_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_assign`
--
ALTER TABLE `hms_assign`
  ADD CONSTRAINT `hms_assign_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hms_assign_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `hms_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hms_assign_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_assistant_provost`
--
ALTER TABLE `hms_assistant_provost`
  ADD CONSTRAINT `hms_assistant_provost_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_employee`
--
ALTER TABLE `hms_employee`
  ADD CONSTRAINT `hms_employee_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_housing`
--
ALTER TABLE `hms_housing`
  ADD CONSTRAINT `hms_housing_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `hms_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_provost`
--
ALTER TABLE `hms_provost`
  ADD CONSTRAINT `hms_provost_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hms_room`
--
ALTER TABLE `hms_room`
  ADD CONSTRAINT `hms_room_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `hms_housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
