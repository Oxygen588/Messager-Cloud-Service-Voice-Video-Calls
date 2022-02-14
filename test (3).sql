-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 10:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `onetimedownload`
--

CREATE TABLE `onetimedownload` (
  `date` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onetimedownload`
--

INSERT INTO `onetimedownload` (`date`, `id`, `download`) VALUES
('2021/03/24', 'eiHRlJw9IRbhVj1X3i47BQkMQeOnc7vuDoUC8INtqImjqELpg5xjXIhF21BSYquGBlaSWlijkQYquuGpRDwCUpldRTSLvqMiMhHKGOiqzLDkdRK9iRk00SESSaaHEEYe6jaPSLHHMpXgtHmjjmAdyAGlWhDtOsHcK69wR5VrIzTcHrSRmVYb1Ej6HOIIB0ZbT9NxmlAh', 'upload/dqcv5lXk6H/2%20-%20Liquidity.docx'),
('2021/03/24', 'EnDMn73ox0w0PTHrA57RKrtqmGXre1kBBVSAru4KoA2VJ87FuwggWcFC3VshSiiU2ClYhmuBXT74486TAajFJPYlgn5CoBdeMt4nKrrJyw2f505HYIqMMJBrNXoSSk2UvmUEbDc8ETusvT9ply3CAyusNTQjgWZ1rnF5SO8S7lsPGsWQA08QUTxsUb0RJxryVi826rCA', 'upload/vNRh8dOSFp/2%20-%20Liquidity.docx'),
('2021/03/24', 'UsAXdTkm2dPC5qCLIIk3', 'upload/A1h3OR46em/2%20-%20Liquidity.docx'),
('2021/03/24', 'xEXk4yCwA1ZH', 'upload/ZVm2Eq8dwK/2%20-%20Liquidity.docx'),
('2021/03/24', '0NeeduhCG3lt', 'upload/s7FHhOzaso/2%20-%20Liquidity.docx'),
('2021/03/24', 'KkM5EX7AN9sx', 'upload/ICF1dJvutQ/LICENSE'),
('2021/03/26', 'ohEVtnEXUi93', 'upload/7uluOD18aZ/epq.docx'),
('2021/03/26', 'medUrjeH0k6a', 'upload/MZoEsO9FNo/epq.docx'),
('2021/03/26', 'L0GD8nDtCD9Z', 'upload/yrDBbs6Je5/End_of_Topic_Assessment.docx'),
('2021/03/26', '4jpVgRSnmBUc', 'upload/tyiX4yWOok/End_of_Topic_Assessment.docx'),
('2021/03/26', 'xoZRu9swn8Ze', 'upload/Sh7wbHccqL/End_of_Topic_Assessment.docx'),
('2021/03/26', 'siWdpoNciAVp', 'upload/8VpcVVxidc/End_of_Topic_Assessment.docx'),
('2021/03/26', '6EVYBMDJMKMq', 'upload/a7fAVurp0k/End_of_Topic_Assessment.docx'),
('2021/03/26', 'ZOfpXCwhH22n', 'upload/4fg0oMJDij/epq.docx'),
('2021/04/22', 'zG9ktc2ydelb', 'upload/DuIHRhrqcd/AQA-Year12Assessment-Paper1-QP.pdf'),
('2021/04/22', 'ZMqFMQ20W1kU', 'upload/6CVHU1AslN/AQA-Year12Assessment-Paper1-QP.pdf'),
('2021/04/23', 'LZ9VITFiziqX', 'upload/7UdquYx8K7/AQA-Year12Assessment-Paper1-QP%20(1).pdf'),
('2021/04/23', 'eh6aEOb5oKFt', 'upload/FlcvLgzOF6/AQA-Year12Assessment-Paper1-QP%20(1).pdf'),
('2021/04/23', 'pTLLSGcAlIlB', 'upload/cSkEPrrncl/End_of_Topic_Assessment%20(7).docx'),
('2021/04/23', '4D21zD59hK9D', 'upload/i6I16DxKKT/End_of_Topic_Assessment%20(5).docx'),
('2021/04/23', '2dbOWJPzBUb3', 'upload/wH6QNAL5Eo/End_of_Topic_Assessment%20(6).docx'),
('2021/04/23', 'w358ZpbfBnjz', 'upload/GSW1wkvwx4/End_of_Topic_Assessment%20(6).docx'),
('2021/04/26', 'vXSfwv8EXFJS', 'upload/pJVHzObcBB/Config.lua'),
('2021/04/26', 'zt2Ffi2bGptB', 'upload/XjHaUsmd9C/mesh-topology.jpg'),
('2021/04/27', 'YO68ZzXsKPXs', 'upload/5mg2avOCY8/End_of_Topic_Assessment%20(44).docx'),
('2021/04/28', 'jrUPVwN3aAmt', 'upload/SFNl7oWLBV/phppowerpoint.zip'),
('2021/05/02', 'C18tPBAOy0ru', 'upload/1BHCyK7i8k/End_of_Topic_Assessment%20(46).docx');

-- --------------------------------------------------------

--
-- Table structure for table `pshare`
--

CREATE TABLE `pshare` (
  `path` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pshare`
--

INSERT INTO `pshare` (`path`, `password`, `owner`, `download`) VALUES
('login/ufiles/Alex/End_of_Topic_Assessment.docx', '123', 'Alex', 'hdYnjDdPff0S'),
('login/ufiles/Alex/mesh-topology.jpg', '123', 'Alex', 'SkbQfkbVHIeW'),
('login/ufiles/Alex/unknown1.png', '123', 'Alex', 'IUwNm3HqKcgz');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Name` varchar(11) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `cookieID` varchar(255) NOT NULL,
  `Csession` varchar(255) NOT NULL DEFAULT 'iwehgurgklgbsdjghoisdghsodigsodfgsbdoigshdf'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Name`, `Pass`, `code`, `cookieID`, `Csession`) VALUES
('1asd', 'asd', 'asd', 'aas', ''),
('Alex', '$2y$10$PZR1bYnZkyh.Gm6lGgg0q.GuHEVK8DsdxiJgql9OvRDvVvc0vHoCu', '1', 'HtzVSyl6ISCwJwCV5oclyH1065qU2aPMPW2yDXkUEasm2E35TPvHI9uJC5UlyYcxbWiU9ZDeojt4F5XIeW9k3QRNG8IT0frNi1XlD1i3pl2R0Axn4ZV2x8VzcFfkEGT0sgeueW4MVZbt7BU0ibyJ5fI5a2oakc5H9xoWmiPJcQLfs23UKtjOGIrhWX3cuhici4V9stWZpap1jcqz9lLQcWqWG13f', '3bwIbWz6jSkODKUEmyNAeEXZp76borUO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pshare`
--
ALTER TABLE `pshare`
  ADD UNIQUE KEY `path` (`path`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
