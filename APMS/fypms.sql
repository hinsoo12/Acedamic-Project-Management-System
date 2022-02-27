-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 10:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypms`
--

-- --------------------------------------------------------

--
-- Table structure for table `advosorandco`
--

CREATE TABLE `advosorandco` (
  `user_id` int(11) NOT NULL,
  `staffid` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `usertype` varchar(111) NOT NULL,
  `email_address` varchar(111) NOT NULL,
  `status` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `regdate` varchar(100) NOT NULL,
  `coandadvcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advosorandco`
--

INSERT INTO `advosorandco` (`user_id`, `staffid`, `firstname`, `middlename`, `lastname`, `username`, `password`, `usertype`, `email_address`, `status`, `department`, `regdate`, `coandadvcode`) VALUES
(61, '6666', 'Blen ', 'Yitages', 'zeww', 'Blen 187', '14ee22eaba297944c96afdbe5b16c65b', 'advisor', 'blen@gmail.com', 'activated', 'information system', '2019-05-30', 'ad29'),
(62, '6666', 'Blen ', 'Yitages', 'zeww', 'Blen 320', '14ee22eaba297944c96afdbe5b16c65b', 'co-advisor', 'blen@gmail.com', 'activated', 'information system', '2019-05-30', 'ad29'),
(63, '47878', 'Yishak', 'ghghg', 'gebeyu', 'Yishak211', 'd3eb9a9233e52948740d7eb8c3062d14', 'advisor', 'yish@gmail.com', 'activated', 'information system', '2019-05-30', 'ad48'),
(64, '47878', 'Yishak', 'ghghg', 'gebeyu', 'Yishak702', '14ee22eaba297944c96afdbe5b16c65b', 'co-advisor', 'yish@gmail.com', 'activated', 'information system', '2019-05-30', 'ad48');

-- --------------------------------------------------------

--
-- Table structure for table `approvedttl`
--

CREATE TABLE `approvedttl` (
  `id` int(100) NOT NULL,
  `group_uid` varchar(100) NOT NULL,
  `projectcode` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` varchar(1001) NOT NULL,
  `proposal` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedttl`
--

INSERT INTO `approvedttl` (`id`, `group_uid`, `projectcode`, `title`, `discription`, `proposal`, `status`) VALUES
(2, 'GRP938824380', 'PRJ1017280710', 'c++', 'ggggg', './proposal/2k.pdf', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `assignadvisor`
--

CREATE TABLE `assignadvisor` (
  `assign_id` int(11) NOT NULL,
  `adname` varchar(111) NOT NULL,
  `pgname` varchar(111) NOT NULL,
  `aparea` varchar(111) NOT NULL,
  `ptitle` varchar(111) NOT NULL,
  `aeyear` varchar(111) NOT NULL,
  `adate` varchar(111) NOT NULL,
  `aby` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignadvisor`
--

INSERT INTO `assignadvisor` (`assign_id`, `adname`, `pgname`, `aparea`, `ptitle`, `aeyear`, `adate`, `aby`) VALUES
(3, 'habta', '4', 'networking', 'final year', '13', '2018-05-20', 'guya'),
(4, 'nati', '3', 'web based', 'selection prosess', '7', '2018-06-19', 'art');

-- --------------------------------------------------------

--
-- Table structure for table `assignexaminer`
--

CREATE TABLE `assignexaminer` (
  `ass_id` int(11) NOT NULL,
  `ename` varchar(111) NOT NULL,
  `pgname` varchar(111) NOT NULL,
  `eparea` varchar(111) NOT NULL,
  `ptitle` varchar(111) NOT NULL,
  `eeyear` varchar(111) NOT NULL,
  `adate` varchar(111) NOT NULL,
  `aby` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignexaminer`
--

INSERT INTO `assignexaminer` (`ass_id`, `ename`, `pgname`, `eparea`, `ptitle`, `eeyear`, `adate`, `aby`) VALUES
(3, 'habta art', '3', 'android based', 'netow based', '3', '2018-05-15', 'beti melese'),
(4, 'habta', '2', 'web based', 'online shoping', '3', '2018-07-20', 'jery'),
(5, 'ghgvfh', '2', 'web based', 'netow based', '3', '2018-05-15', 'ata');

-- --------------------------------------------------------

--
-- Table structure for table `assignmark`
--

CREATE TABLE `assignmark` (
  `mark_id` int(11) NOT NULL,
  `pgname` varchar(111) NOT NULL,
  `member` varchar(111) NOT NULL,
  `point` varchar(111) NOT NULL,
  `assby` varchar(111) NOT NULL,
  `assdate` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignmark`
--

INSERT INTO `assignmark` (`mark_id`, `pgname`, `member`, `point`, `assby`, `assdate`) VALUES
(4, 'g2', '1.habta melese 2.mesfin yesgat 3.mekail taya', '1.habta melese A 2.mesfin yesgatb B 3.mekail taya B+', 'habta', '12/04/09'),
(5, '4', 'asdasdas', 'sdasdda', 'asdas', '2018-05-15'),
(6, '4', 'we4wer', 'rerere', 'dfsdfse', '2018-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `assigntask`
--

CREATE TABLE `assigntask` (
  `task_id` int(11) NOT NULL,
  `prgname` varchar(111) NOT NULL,
  `advname` varchar(111) NOT NULL,
  `asstask` varchar(111) NOT NULL,
  `assdate` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigntask`
--

INSERT INTO `assigntask` (`task_id`, `prgname`, `advname`, `asstask`, `assdate`) VALUES
(1, '2', 'gdf', 'wwerr', '2018-06-13'),
(2, '4', 'yesak', 'ewretfgfhfghgfhf', '2018-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `phone_no` varchar(111) NOT NULL,
  `physical_add` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phone_no`, `physical_add`) VALUES
(1, 'habta', 'habtamu@gmail.com', '0987654321', 'hawassa'),
(2, 'aberham', 'aberham@gmail.com', '0931820897', 'bura'),
(3, 'ata', 'ata@gmail.com', '0987654321', 'hawassa'),
(4, 'ata', 'ata@gmail.com', '0987654321', 'hawassa'),
(5, 'mekail', 'mekail@gmail.com', '0987654321', 'adis abeba'),
(6, 'tamene', 'habtamu@gmail.com', '0987654321', 'adama'),
(7, 'hjkgh', 'habtamu@gmail.com', 'rwer', 'jhghjhj'),
(8, 'fgdfg', 'aberham@gmail.com', 'fgdfg', 'fhcfh'),
(9, 'fgdfg', 'aberham@gmail.com', 'fgdfg', 'fhcfh'),
(10, 'fgdfg', 'aberham@gmail.com', 'fgdfg', 'fhcfh'),
(11, 'fgdfg', 'aberham@gmail.com', 'fgdfg', 'fhcfh'),
(12, 'habta', 'errewwe!@gmail.com', 'hgjgf', 'hjghj'),
(13, 'fthyudfhy', 'mekail@gmail.com', 'ghgfhgf', 'hjgfjdg'),
(14, 'fcbhdfbg', 'errewwe!@gmail.com', 'gdfgdf', 'ggdfgdfg'),
(15, 'tamene', 'aberham@gmail.com', 'ghfgh', 'gdg'),
(16, 'hhhhhh', 'mekail@gmail.com', 'adsds', 'sfsdfs'),
(17, 'aberham', 'errewwe!@gmail.com', '0987654321', 'xdfvasfsz'),
(18, 'gdsgdgd', 'ata@gmail.com', 'gdgdfg', 'fgdfgdf'),
(19, 'gdsgdgd', 'ata@gmail.com', 'gdgdfg', 'fgdfgdf'),
(20, 'gdsgdgd', 'ata@gmail.com', 'gdgdfg', 'fgdfgdf'),
(21, 'gdsgdgd', 'ata@gmail.com', 'gdgdfg', 'fgdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(3, 'Software Engineering'),
(4, 'information system');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `file` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`) VALUES
(1, 'chat', 'files/chat.zip'),
(2, 'php_-_upload_and_download_file_application', 'files/php_-_upload_and_download_file_application.zip'),
(3, 'angular_complete', 'files/angular_complete.zip'),
(4, 'contact_system_php_and_mysql', 'files/contact_system_php_and_mysql.zip'),
(5, 'angular_complete', 'files/angular_complete.zip'),
(6, 'voting_system', 'files/voting_system.zip'),
(7, 'jquery_autocomplete', 'files/jquery_autocomplete.zip'),
(8, 'uploadfile', 'files/uploadfile.zip'),
(9, 'Ethio-Telecom', 'files/Ethio-Telecom.docx');

-- --------------------------------------------------------

--
-- Table structure for table `group1`
--

CREATE TABLE `group1` (
  `group_id` int(11) NOT NULL,
  `pgroupname` varchar(111) NOT NULL,
  `pgroupmember` varchar(111) NOT NULL,
  `coordinator` varchar(111) NOT NULL,
  `advisor` varchar(111) NOT NULL,
  `gcreateddate` varchar(111) NOT NULL,
  `gcreatedby` varchar(111) NOT NULL,
  `start` varchar(111) NOT NULL,
  `submited` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group1`
--

INSERT INTO `group1` (`group_id`, `pgroupname`, `pgroupmember`, `coordinator`, `advisor`, `gcreateddate`, `gcreatedby`, `start`, `submited`) VALUES
(6, '4', 'sisay', 'antnhe', 'amsalu', '2018-05-21', 'mekail', '2018-05-21', '2018-05-25'),
(7, '12', 'habta melese', 'alemayhu', 'beza', '2018-05-31', 'zemenu', '2018-05-13', '2018-05-30'),
(8, '3', '1.hayle meleseb', 'moltot', 'kasu', '2018-05-27', 'mulusew', '2018-05-20', '2018-05-14'),
(10, '9', 'guya wako', 'mulugata', 'eliyas jerso', '2018-06-27', 'ayenew', '2018-05-20', '2018-05-21'),
(11, '2', 'erwer', 'erwer', 'erwe', '2018-05-08', 'erwer', '2018-05-16', '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `groupcrt`
--

CREATE TABLE `groupcrt` (
  `id` int(100) NOT NULL,
  `stud1id` varchar(100) NOT NULL,
  `stud1fullname` varchar(100) NOT NULL,
  `stud2id` varchar(100) NOT NULL,
  `stud2fullname` varchar(100) NOT NULL,
  `stud3id` varchar(100) NOT NULL,
  `stud3fullname` varchar(100) NOT NULL,
  `stud4id` varchar(100) NOT NULL,
  `stud4fullname` varchar(100) NOT NULL,
  `stud5id` varchar(100) NOT NULL,
  `stud5fullname` varchar(100) NOT NULL,
  `group_uid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupcrt`
--

INSERT INTO `groupcrt` (`id`, `stud1id`, `stud1fullname`, `stud2id`, `stud2fullname`, `stud3id`, `stud3fullname`, `stud4id`, `stud4fullname`, `stud5id`, `stud5fullname`, `group_uid`, `email`, `username`, `password`, `department`, `status`) VALUES
(7, '610', 'Gutema Bunturi', '608', 'Bacha Temesgen', '609', 'Abel Dereje', '608', 'Bacha Temesgen', '607', 'Kebede Alemu', 'GRP1941868512', 'godgroup@gmail.com', 'Godgroup', 'dd4b21e9ef71e1291183a46b913ae6f2', 'information system', 'Approved'),
(8, '610', 'Gutema Bunturi', '607', 'Kebede Alemu', '609', 'Abel Dereje', '608', 'Bacha Temesgen', '608', 'Bacha Temesgen', 'GRP938824380', 'godgroup1@gmail.com', 'hhhh', 'dd4b21e9ef71e1291183a46b913ae6f2', 'information system', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `man_id` int(11) NOT NULL,
  `protitle` varchar(111) NOT NULL,
  `progroupname` varchar(111) NOT NULL,
  `advisorname` varchar(111) NOT NULL,
  `examinername` varchar(111) NOT NULL,
  `prosubmiteddate` varchar(111) NOT NULL,
  `projectarea` varchar(111) NOT NULL,
  `coordname` varchar(111) NOT NULL,
  `addperarea` varchar(111) NOT NULL,
  `examperarea` varchar(111) NOT NULL,
  `addexpyear` varchar(111) NOT NULL,
  `examexpyear` varchar(111) NOT NULL,
  `projectstutus` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`man_id`, `protitle`, `progroupname`, `advisorname`, `examinername`, `prosubmiteddate`, `projectarea`, `coordname`, `addperarea`, `examperarea`, `addexpyear`, `examexpyear`, `projectstutus`) VALUES
(2, 'employee background', '4', 'hunegaw', 'ata', '2018-05-21', 'console', 'alemayhu', 'web based', 'moblie based', '6', '8', 'on start');

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE `noti` (
  `userid` int(11) NOT NULL,
  `username` varchar(66) NOT NULL,
  `description` varchar(66) NOT NULL,
  `userprofile` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sendadvising`
--

CREATE TABLE `sendadvising` (
  `send_id` int(11) NOT NULL,
  `ptitle` varchar(111) NOT NULL,
  `parea` varchar(111) NOT NULL,
  `adname` varchar(111) NOT NULL,
  `pgname` varchar(111) NOT NULL,
  `sname` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `approve` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendadvising`
--

INSERT INTO `sendadvising` (`send_id`, `ptitle`, `parea`, `adname`, `pgname`, `sname`, `date`, `approve`) VALUES
(8, 'human resource', 'networking', 'wasihun', '3', 'mulugata', '2018-05-07', 'Disapprove');

-- --------------------------------------------------------

--
-- Table structure for table `sendcomment`
--

CREATE TABLE `sendcomment` (
  `comment_id` int(11) NOT NULL,
  `pgname` varchar(111) NOT NULL,
  `comment` varchar(111) NOT NULL,
  `adname` varchar(111) NOT NULL,
  `comdate` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendcomment`
--

INSERT INTO `sendcomment` (`comment_id`, `pgname`, `comment`, `adname`, `comdate`) VALUES
(1, '2', 'werqweq', 'qweqwq', '2018-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `sendexaminer`
--

CREATE TABLE `sendexaminer` (
  `send_id` int(11) NOT NULL,
  `ptitle` varchar(111) NOT NULL,
  `parea` varchar(111) NOT NULL,
  `exname` varchar(111) NOT NULL,
  `pgname` varchar(111) NOT NULL,
  `sname` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `pdate` varchar(111) NOT NULL,
  `approve` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendexaminer`
--

INSERT INTO `sendexaminer` (`send_id`, `ptitle`, `parea`, `exname`, `pgname`, `sname`, `date`, `pdate`, `approve`) VALUES
(9, 'mobile based portal', 'web based', 'hayle', '10', 'yesak', '2018-05-14', '2018-05-24', 'Approve'),
(10, 'rtyer', 'android', 'ertert', '3', 'mulugata', '2018-05-02', '2018-05-04', 'Approve'),
(13, 'employee backgroun', 'web based', 'abebayhu', '3', 'ayenew', '2018-05-27', '2018-05-31', ''),
(14, 'bjgh', 'networking', 'uuuuuuugj', '2', 'mulugata', '2018-05-07', '2018-05-03', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `username`, `password`, `stud_id`, `department`, `year`) VALUES
(1, 'Gutema', 'Bunturi', 'Gute', 'dd4b21e9ef71e1291183a46b913ae6f2', '610', 'information System', '2011'),
(2, 'Kebede', 'Alemu', 'kabe', '00000000', '607', 'information system', '2019'),
(3, 'Bacha', 'Temesgen', 'BACHA', '09', '608', 'information system', '2019'),
(4, 'Abel', 'Dereje', 'abel', '3456567', '609', 'information system', '2019'),
(5, 'Milkessa', 'abdi', 'milk', 'hdfjdf', '611', 'Software Engineering', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `sub_id` int(11) NOT NULL,
  `prtitle1` varchar(111) NOT NULL,
  `prtitle1des` varchar(111) NOT NULL,
  `prtitle2` varchar(111) NOT NULL,
  `prtitle2des` varchar(111) NOT NULL,
  `prtitle3` varchar(111) NOT NULL,
  `prtitle3des` varchar(111) NOT NULL,
  `projectarea` varchar(111) NOT NULL,
  `ptsd` varchar(111) NOT NULL,
  `ptst` varchar(111) NOT NULL,
  `progroupmember` varchar(111) NOT NULL,
  `progroupname` varchar(111) NOT NULL,
  `approve` varchar(111) NOT NULL,
  `newtitle` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`sub_id`, `prtitle1`, `prtitle1des`, `prtitle2`, `prtitle2des`, `prtitle3`, `prtitle3des`, `projectarea`, `ptsd`, `ptst`, `progroupmember`, `progroupname`, `approve`, `newtitle`) VALUES
(21, 'bilingual dictinary', 'fsdf', 'hospital managements', 'adeasd', 'condominum', 'deawdeaw', 'networking', '2018-05-20', '01:00', 'eqwewe', '4', '', 'web based  car rental');

-- --------------------------------------------------------

--
-- Table structure for table `submittask`
--

CREATE TABLE `submittask` (
  `id` int(11) NOT NULL,
  `prgname` varchar(111) NOT NULL,
  `advname` varchar(111) NOT NULL,
  `tsdate` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `user` varchar(111) NOT NULL,
  `message` varchar(111) NOT NULL,
  `textcolor` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submittask`
--

INSERT INTO `submittask` (`id`, `prgname`, `advname`, `tsdate`, `name`, `user`, `message`, `textcolor`) VALUES
(1, '5', 'wefa', '2018-06-20', '', '', '', ''),
(2, '', '', '', 'fypms.sql', '', '', ''),
(3, '', '', '', '', 'guye', 'hi', '#FF295B'),
(4, '', '', '', '', 'edom', 'dr my inst', '#33EBFF'),
(5, '', '', '', '', 'bgb', 'gbg', '#000000'),
(6, '', '', '', 'Final Project.docx', '', '', ''),
(7, '', '', '', 'Final Project.docx', '', '', ''),
(8, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(100) NOT NULL,
  `staffid` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `staffid`, `firstname`, `middlename`, `lastname`, `email`, `department`) VALUES
(1, '6666', 'Blen ', 'Yitages', 'zeww', 'blen@gmail.com', 'information system'),
(2, '47878', 'Yishak', 'ghghg', 'gebeyu', 'yish@gmail.com', 'information system');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(10) NOT NULL,
  `group_uid` varchar(100) NOT NULL,
  `group_username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `firstprotitl` varchar(100) NOT NULL,
  `firstprodiscrip` varchar(1000) NOT NULL,
  `firstprojprop` varchar(10000) NOT NULL,
  `scndprotitl` varchar(100) NOT NULL,
  `scndprodiscrip` varchar(1000) NOT NULL,
  `scndprojprop` varchar(10000) NOT NULL,
  `thirdprotitl` varchar(100) NOT NULL,
  `thirdprodiscrip` varchar(1000) NOT NULL,
  `thirdprojprop` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `group_uid`, `group_username`, `department`, `firstprotitl`, `firstprodiscrip`, `firstprojprop`, `scndprotitl`, `scndprodiscrip`, `scndprojprop`, `thirdprotitl`, `thirdprodiscrip`, `thirdprojprop`, `status`) VALUES
(14, 'GRP938824380', 'hhhh', 'information system', 'c++', 'ggggg', './proposal/2k.pdf', 'java', 'gggggg', './proposal/ea013601c0f5b93d73a177a06f8c35c4Chapter-four-.pptx', 'www', 'gggggggggggg', './proposal/ea013601c0f5b93d73a177a06f8c35c4Chapter-five.pptx', 'notapproved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `usertype` varchar(111) NOT NULL,
  `email_address` varchar(111) NOT NULL,
  `status` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `usertype`, `email_address`, `status`, `department`) VALUES
(17, 'Yishak', '', 'fuchi', 'admin', 'dd4b21e9ef71e1291183a46b913ae6f2', 'admin', 'admin@admin.com', 'activated', 'information system'),
(18, 'Blen', '', 'Yitages', 'cord', 'dd4b21e9ef71e1291183a46b913ae6f2', 'cordinator', 'gfshfhsf', 'activated', 'information system'),
(19, 'beyene', '', 'badhasa', 'advi', 'dd4b21e9ef71e1291183a46b913ae6f2', 'advisor', 'gfshfhsf', 'activated', 'information system'),
(29, 'Yishak', 'gebeyu', 'ghghg', 'Yishak405', 'd3eb9a9233e52948740d7eb8c3062d14', 'advisor', 'yish@gmail.com', 'activated', 'information system');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advosorandco`
--
ALTER TABLE `advosorandco`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `approvedttl`
--
ALTER TABLE `approvedttl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignadvisor`
--
ALTER TABLE `assignadvisor`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `assignexaminer`
--
ALTER TABLE `assignexaminer`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `assignmark`
--
ALTER TABLE `assignmark`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `assigntask`
--
ALTER TABLE `assigntask`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `group1`
--
ALTER TABLE `group1`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `groupcrt`
--
ALTER TABLE `groupcrt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`man_id`);

--
-- Indexes for table `noti`
--
ALTER TABLE `noti`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `sendadvising`
--
ALTER TABLE `sendadvising`
  ADD PRIMARY KEY (`send_id`);

--
-- Indexes for table `sendcomment`
--
ALTER TABLE `sendcomment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `sendexaminer`
--
ALTER TABLE `sendexaminer`
  ADD PRIMARY KEY (`send_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `submittask`
--
ALTER TABLE `submittask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advosorandco`
--
ALTER TABLE `advosorandco`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `approvedttl`
--
ALTER TABLE `approvedttl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignadvisor`
--
ALTER TABLE `assignadvisor`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignexaminer`
--
ALTER TABLE `assignexaminer`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assignmark`
--
ALTER TABLE `assignmark`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assigntask`
--
ALTER TABLE `assigntask`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `group1`
--
ALTER TABLE `group1`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `groupcrt`
--
ALTER TABLE `groupcrt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `noti`
--
ALTER TABLE `noti`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sendadvising`
--
ALTER TABLE `sendadvising`
  MODIFY `send_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sendcomment`
--
ALTER TABLE `sendcomment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sendexaminer`
--
ALTER TABLE `sendexaminer`
  MODIFY `send_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `submittask`
--
ALTER TABLE `submittask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
