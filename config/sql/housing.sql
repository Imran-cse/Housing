-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 07:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housing`
--

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
