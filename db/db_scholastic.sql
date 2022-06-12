-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 08:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_scholastic`
--

-- --------------------------------------------------------

--
-- Table structure for table `srms_admin`
--

CREATE TABLE `srms_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_admin`
--

INSERT INTO `srms_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'paolo', 'paolo');

-- --------------------------------------------------------

--
-- Table structure for table `srms_students`
--

CREATE TABLE `srms_students` (
  `student_id` int(11) NOT NULL,
  `class_id` int(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `middlename` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `year` int(2) NOT NULL,
  `section` varchar(5) NOT NULL,
  `studentsnumber` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `contactnum` varchar(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `scholastic` varchar(10) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_students`
--

INSERT INTO `srms_students` (`student_id`, `class_id`, `firstname`, `middlename`, `lastname`, `course`, `year`, `section`, `studentsnumber`, `status`, `contactnum`, `address`, `gender`, `email`, `scholastic`, `password`) VALUES
(127, 41, 'RUEL ', 'ALMONIA', 'AYUCO', 'Bachelor of Science in Computer Science', 3, 'C', 20190846, 'Active', '09098132923', 'MRH NHA SITE 4 BUILDING 4A 1-U-11 BARANGAY 188 TALA, CALOOCA', 'Male', 'almonia.ruel.bscs2019@gmail.com', '', ''),
(128, 41, 'MARK JOEL ', 'VIVAR', 'CALIMAG', 'Bachelor of Science in Computer Science', 3, 'C', 20191125, 'Active', '09553956362', 'BLOCK 3 LOT 6 ROSARIO VILLE LLANO, CALOOCAN CITY', 'Male', 'calimag.markjoel.bscs2019@gmail.com', '', ''),
(129, 41, 'MARISSA ', 'VERANO', 'CAPINIG', 'Bachelor of Science in Computer Science', 3, 'C', 20120754, 'Active', '09565525709', 'BLOCK 2 LOT 8 CASA ASUNCION DELOS SANTOS COMPOUND BRGY. 171 ', 'Female', 'capinig.marissa.bscs2019@gmail.com', '', ''),
(130, 41, 'LEA ', 'TUMBOCON', 'GALLARDO ', 'Bachelor of Science in Computer Science', 3, 'C', 20191805, 'Active', '09213322540', 'PH.8A PKG12A BLK.161 LOT.8 BAGONG SILANG CALOOCAN CITY', 'Female', 'gallardo.lea.bscs2019@gmail.com', '', ''),
(131, 41, 'JESSICA JOY ', 'SUMODEBILA', 'GAPUSAN', 'Bachelor of Science in Computer Science', 3, 'C', 20192091, 'Active', '09088628209', 'NARRA AVE PANGARAP VILLE BARANGAY 181 CALOOCAN CITY', 'Female', 'gapusan.jessicajoy.bscs2019@gmail.com', '', ''),
(132, 41, 'ALLAN JONAS  ', 'DELA CRUZ', 'GENOVE', 'Bachelor of Science in Computer Science', 3, 'C', 20192562, 'Active', '0951-875-808', 'PURIFICATION ST.MOUNTAIN HEIGHTS SUBD.CALOOCAN CITY', 'Male', 'genove.allan.bscs2019@gmail.com', '', ''),
(133, 41, 'MARYROSE ', 'FUENTES', 'GONZALES', 'Bachelor of Science in Computer Science', 3, 'C', 20192271, 'Active', '0945-806-702', 'BLK 20 LT 14 SILVER ST MERRYHOMES CALOOCAN CITY', 'Female', 'gonzales.maryrose.bscs2019@gmail.com', '', ''),
(134, 41, 'FRANCIS OLIVER ', 'DUCUSIN', 'HILOMA', 'Bachelor of Science in Computer Science', 3, 'C', 20192217, 'Active', '0950-448-082', 'PH1, PKG2, BLK6 LOT11 BAGONG SILANG CALOOCAN CITY', 'Male', 'hiloma.francisoliver.bscs2019@gmail.com', '', ''),
(135, 41, 'CHRISTIAN', 'VILLACASTIN', 'JAMAYBAY ', 'Bachelor of Science in Computer Science', 3, 'C', 20192060, 'Active', '0927-594-855', 'BLK 36 LOT 12 LA FORTEZA SUBD.2 CAMARIN, CALOOCAN CITY', 'Male', 'jamaybay.christian.bscs2019@gmail.com', '', ''),
(136, 41, ' MARY JOY ', 'COMAHIG', 'LACOPANTO', 'Bachelor of Science in Computer Science', 3, 'C', 20192127, 'Active', '0907-272-852', 'PHASE 8A, PACKAGE 7, BLOCK 107, LOT EXCESS BAGONG SILANG CAL', 'Female', 'lacopanto.maryjoy.bscs2019@gmail.com', '', ''),
(137, 41, 'JHUNRIZ', 'BARCOMA', 'LALATA', 'Bachelor of Science in Computer Science', 3, 'C', 20192135, 'Active', '0929-951-835', 'PH 8A PKG 11 BLK 174 LOT 1 BAGONG SILANG CALOOCAN CITY', 'Male', 'lalata.jhunriz.bscs2019@gmail.com', '', ''),
(138, 41, 'MISCHELE', 'ZATE', 'LOBRENO', 'Bachelor of Science in Computer Science', 3, 'C', 20192108, 'Active', '0966-261-635', 'BLK 68 LOT 19 ROSE ST CAMARIN CALOOCAN CITY', 'Female', 'lobreno.mischele.bscs2019@gmail.com', '', ''),
(139, 41, 'SHARLYMAINE ', 'MOLDES', 'MAHUSAY', 'Bachelor of Science in Computer Science', 3, 'C', 20192129, 'Active', '0921-306-956', 'BLK 77 LOT 6 BRGY. 174 CAMARIN CALOOCAN CITY', 'Female', 'mahusay.sharlymaine.BSCS2019@gmail.com', '', ''),
(140, 41, 'NOVIE DAME', 'ENCARQUEZ', 'MARBAS', 'Bachelor of Science in Computer Science', 3, 'C', 20192371, 'Active', '0936-785-631', '1191 LANSONES ST., CAMARIN, CALOOCAN CITY', 'Female', 'marbas.noviedame.bscs2019@gmail.com', '', ''),
(141, 41, 'ERICSON', 'CUSTODIO', 'MARISCOTES ', 'Bachelor of Science in Computer Science', 3, 'C', 20192006, 'Active', '0928-203-000', 'BLK1, DUHAT ST. ADCNAI SANVICENTE FERRER CAMARIN CALOOCAN CI', 'Male', 'mariscotes.ericson.bscs2019@gmail.com', '', ''),
(142, 41, 'ROMAR', 'SITOY', 'MONTERO', 'Bachelor of Science in Computer Science', 3, 'C', 20191886, 'Active', '0915-374-049', 'PHASE 9 PKG 5 BLOCK 13A LOT 36 BAGONG SILANG CALOOCAN CITY', 'Male', 'montero.romar.bscs2019@gmail.com', '', ''),
(143, 41, 'MARY EUGENIA ', 'DELA CRUZ', 'NAVAL', 'Bachelor of Science in Computer Science', 3, 'C', 20192280, 'Active', '0915-045-549', 'VILLA REFORM STREET DEL MUNDO VILLAGE LLANO', 'Female', 'naval.maryeugenia.bscs2019@gmail.com', '', ''),
(144, 41, 'SARAH GRACE ARLYN', '-', 'OBEN', 'Bachelor of Science in Computer Science', 3, 'C', 20191940, 'Active', '0953-126-423', 'PHASE 9 PACKAGE 3 BLK 32 LT 20 BAGONG SILANG CALOOCAN CITY', 'Female', 'oben.sarah.bscs2019@gmail.com', '', ''),
(145, 41, 'JUAN PAOLO ', 'ZEPEDA', 'ORTEGA', 'Bachelor of Science in Computer Science', 3, 'C', 20192166, 'Active', '0909-988-104', 'PHASE 3 PACKAGE 2 BLK 31 LT 24 BAGONG SILANG CALOOCAN CITY', 'Male', 'ortega.juanpaolo.bscs2019@gmail.com', '', '20192166'),
(146, 41, 'AHMAD', 'EBUS', 'PENDI', 'Bachelor of Science in Computer Science', 3, 'C', 20192440, 'Active', '0919-246-786', 'PHASE 6 PUROK 3 CAMARIN CALOOCAN CITY', 'Male', 'pendi.ahmad.bscs2019@gmail', '', 'pendi'),
(147, 41, 'JUSTINE', 'FRANCISCO', 'PODIOTAN', 'Bachelor of Science in Computer Science', 3, 'C', 20191992, 'Active', '0947-323-795', '#86 MOUNTAIN HEIGHTS BRGY. 183 CALOOCAN CITY', 'Male', 'podiotan.justine.bscs2019@gmail.com', '', ''),
(148, 41, 'JOHN KENNETH ', 'PATIO', 'REYES', 'Bachelor of Science in Computer Science', 3, 'C', 20192233, 'Active', '0963-662-869', '#2379 SITIO MATARIK CALOOCAN CITY', 'Male', 'reyes.johnkenneth.bscs2019@gmail.com', '', ''),
(149, 41, 'JENNELYN ', 'BAYBAYON', 'REIGO', 'Bachelor of Science in Computer Science', 3, 'C', 20192128, 'Active', '0948-609-531', 'AREA C-3, BRGY 174, CAMARIN, CALOOCAN CITY', 'Female', 'riego.jennylyn.bscs2019@gmail.com', '', ''),
(150, 41, 'REILLY KYLE ', 'LAMBINO', 'RUBANTE', 'Bachelor of Science in Computer Science', 3, 'C', 20192136, 'Active', '0933-820-836', 'PHASE 1 KAPATID BLK 8 LT 9 HOAI SUBD. BAGBAGUIN CALOOCAN CIT', 'Female', 'rubante.reillykyle.bscs2019@gmail.com', '', ''),
(151, 41, 'SHIELLA MAY', 'MANGUBAT', 'SAJOL', 'Bachelor of Science in Computer Science', 3, 'C', 20191823, 'Active', '0945-635-785', '4U7 BLDG13-B NHA MRH SITE 4 TALA CALOOCAN CITY', 'Female', 'sajol.shiellamay.bscs2019@gmail.com', '', ''),
(152, 41, 'JIMUEL', 'LAPIDES', 'SANCHEZ', 'Bachelor of Science in Computer Science', 3, 'C', 20192509, 'Active', '0920-451-124', 'BLK 4 LT 5 CELINA HOMES BRGY. 175 CAMARIN CALOOCAN CITY', 'Male', 'sanchez.jimuel.bscs2019@gmail.com', '', ''),
(153, 41, 'CZAR MCGOKOU ', 'SALAR', 'SEBASTIAN', 'Bachelor of Science in Computer Science', 3, 'C', 20192293, 'Active', '0938-512-642', 'PHASE 8A PACKAGE 11 BLK 181 LT 1 EXCESS BAGONG SILANG CALOOC', 'Male', 'Sebastian.czarmcgokou.bscs2019@gmail.com', '', ''),
(154, 41, 'DOMINIC JHON ', 'VILLA', 'SULAT', 'Bachelor of Science in Computer Science', 3, 'C', 20192085, 'Active', '0906-335-625', 'BLK 66 LT 3 HARMONY HILLS II BRGY. LOMA DE GATO MARILAO BULA', 'Male', 'sulat.dominicjhon.bscs2019@gmail.com', '', ''),
(155, 41, 'CARL EMMANUEL', 'ALVARADO', 'SY', 'Bachelor of Science in Computer Science', 3, 'C', 20192221, 'Active', '0930-125-077', 'PHASE 4 PACKAGE 3 BLK 18 LT 2 BAGONG SILANG CALOOCAN CITY', 'Male', 'sy.carl.bscs2019@gmail.com', '', ''),
(156, 41, 'EMMANUELITO', 'LOZANO', 'TANEO', 'Bachelor of Science in Computer Science', 3, 'C', 20192595, 'Active', '0951-937-285', '1958 PHASE 3 B BLOCK 6 LOT 12, AREA A, BRGY 175, CAMARIN, CA', 'Male', 'taneo.emmanuelito.bscs2019@gmail.com', '', ''),
(157, 41, 'SATURNINO JR.', 'VILLEGAS', 'URSUA', 'Bachelor of Science in Computer Science', 3, 'C', 20191766, 'Active', '0919-856-333', 'PHASE 8A PACKAGE 11 BLK 185 LT EXCESS BAGONG SILANG CALOOCAN', 'Male', 'ursua.saturnino.bscs2019@gmail.com', '', ''),
(158, 41, 'RENJE ', 'GERVICE', 'VACNOT', 'Bachelor of Science in Computer Science', 3, 'C', 20192208, 'Active', '0910-000-525', '#2229 SITIO MATARIK CAMARIN CALOOCAN CITY', 'Male', 'Vacnot.Renje.BSCS2019@gmail.com', '', ''),
(159, 41, 'JAKE ', 'COSMILLA', 'VALERA', 'Bachelor of Science in Computer Science', 3, 'C', 20192390, 'Active', '0915-558-487', 'BLK 7 LT 32 EVERLASTING ST. DOLMAR GOLDEN HILLS SUBD. BRGY. ', 'Male', 'valera.jake.bscs2019@gmail.com', '', ''),
(160, 41, 'CHRISTIAN JADE ', 'FERNANDEZ', 'VILLALUZ', 'Bachelor of Science in Computer Science', 3, 'C', 20191114, 'Active', '0961-289-432', '21D KABATUHAN ST. DEPARO CALOOCAN CITY', 'Male', 'villaluz.christianjade@gmail.com', '', ''),
(161, 41, 'JOSHUA', 'ALFARO', 'VILLANUEVA', 'Bachelor of Science in Computer Science', 3, 'C', 20192281, 'Active', '0909-791-760', 'BLK 20 LT 24 DAISY ST. SAN JOSE DEL MONTE BULACAN', 'Male', 'villanueva.joshua.bscs2019@gmail.com', '', ''),
(166, 41, 'Test', 'T', 'Testing', 'Bachelor of Science in Computer Science', 3, 'C', 1234567, 'Active', '+63929770904', 'Poblacion 1 Basud Camarines Norte', 'Male', 'paonemorfi@gmail.com', '', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblclasses`
--

CREATE TABLE `srms_tblclasses` (
  `class_id` int(11) NOT NULL,
  `Course` varchar(60) NOT NULL,
  `Year` int(60) NOT NULL,
  `Section` varchar(60) NOT NULL,
  `syb` int(60) NOT NULL,
  `sye` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblclasses`
--

INSERT INTO `srms_tblclasses` (`class_id`, `Course`, `Year`, `Section`, `syb`, `sye`) VALUES
(39, 'Bachelor of Science in Computer Science', 3, 'A', 2022, 2023),
(40, 'Bachelor of Science in Computer Science', 3, 'B', 2022, 2023),
(41, 'Bachelor of Science in Computer Science', 3, 'C', 2022, 2023),
(42, 'Bachelor of Science in Information Technology', 1, 'A', 2022, 2022),
(43, 'Bachelor of Science in Information Technology', 4, 'C', 2033, 2034);

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblcourses`
--

CREATE TABLE `srms_tblcourses` (
  `id` int(11) NOT NULL,
  `Course` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblcourses`
--

INSERT INTO `srms_tblcourses` (`id`, `Course`) VALUES
(1, 'Bachelor of Science in Computer Science'),
(2, 'Bachelor of Science in Information Technology'),
(3, 'Bachelor of Science in Information System'),
(4, 'Entertainment and Multimedia Computing');

-- --------------------------------------------------------

--
-- Table structure for table `srms_tbldepartment`
--

CREATE TABLE `srms_tbldepartment` (
  `dept_id` int(11) NOT NULL,
  `Department` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tbldepartment`
--

INSERT INTO `srms_tbldepartment` (`dept_id`, `Department`) VALUES
(1, 'Computer Science Department'),
(5, '99'),
(6, '21');

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblmanagesubcombi`
--

CREATE TABLE `srms_tblmanagesubcombi` (
  `combi_id` int(11) NOT NULL,
  `class_id` int(60) NOT NULL,
  `sub_id` int(60) NOT NULL,
  `prof_id` varchar(60) NOT NULL,
  `Sem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblmanagesubcombi`
--

INSERT INTO `srms_tblmanagesubcombi` (`combi_id`, `class_id`, `sub_id`, `prof_id`, `Sem`) VALUES
(75, 41, 18, '31', 'First Semester'),
(76, 41, 19, '33', 'First Semester'),
(77, 41, 165, '34', 'First Semester'),
(78, 41, 22, '32', 'First Semester'),
(79, 41, 67, '31', 'First Semester'),
(80, 41, 162, '33', 'First Semester'),
(81, 41, 130, '31', 'Second Semester'),
(82, 41, 37, '31', 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblprof`
--

CREATE TABLE `srms_tblprof` (
  `prof_id` int(11) NOT NULL,
  `Fullname` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `No` int(60) NOT NULL,
  `DOB` date NOT NULL,
  `Spec` varchar(60) NOT NULL,
  `Department` varchar(60) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblprof`
--

INSERT INTO `srms_tblprof` (`prof_id`, `Fullname`, `Email`, `No`, `DOB`, `Spec`, `Department`, `Username`, `Password`, `Type`) VALUES
(31, 'Jerwin Cabral', 'jermaycabs@gmail.com', 2147483647, '1947-05-19', 'Programming ', '1', 'jerwin', 'jerwin', ''),
(32, 'Michael Tan', 'mtan@gmail.com', 2147483647, '2022-05-03', 'Web Programming', '1', 'tan', 'tan', ''),
(33, 'Dominador Solayao', 'doms@gmail.com', 2147483647, '2022-05-10', 'Data Structures', '1', 'solayao', 'solayao', ''),
(34, 'L.A Alban', 'sirA@gmail.com', 2147483647, '1970-01-01', 'Digital Graphics', '1', 'sirla', 'sirla', ''),
(44, 'test1', 'test1', 213131, '2022-06-16', 'Computer Studies', '1', 'test1', 'test1', ''),
(45, 'test2', 'test2', 2147483647, '2022-06-10', 'Computer Studies', '1', 'test2', 'test2', ''),
(46, 'test3', 'test3', 123901823, '2022-06-23', 'test3', '1', 'test3', 'test3', ''),
(47, 'test5', 'test5', 21312312, '2022-06-21', 'test5', '1', 'test5', 'test5', '');

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblresult`
--

CREATE TABLE `srms_tblresult` (
  `result_id` int(60) NOT NULL,
  `combi_id` int(60) NOT NULL,
  `prof_id` int(60) NOT NULL,
  `studentsnumber` int(60) NOT NULL,
  `Subject` varchar(60) NOT NULL,
  `mt` decimal(6,2) DEFAULT NULL,
  `ft` decimal(6,2) DEFAULT NULL,
  `Final` decimal(6,2) DEFAULT NULL,
  `Remarks` varchar(60) DEFAULT NULL,
  `syb` int(60) NOT NULL,
  `sye` int(60) NOT NULL,
  `Sem` varchar(60) NOT NULL,
  `stats` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblresult`
--

INSERT INTO `srms_tblresult` (`result_id`, `combi_id`, `prof_id`, `studentsnumber`, `Subject`, `mt`, `ft`, `Final`, `Remarks`, `syb`, `sye`, `Sem`, `stats`) VALUES
(595, 75, 31, 20190846, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(596, 75, 31, 20191125, '18', NULL, NULL, NULL, 'FAILED', 2022, 2023, 'First Semester', NULL),
(597, 75, 31, 20120754, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(598, 75, 31, 20191805, '18', NULL, NULL, NULL, 'DROPPED', 2022, 2023, 'First Semester', NULL),
(599, 75, 31, 20192091, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(600, 75, 31, 20192562, '18', '2.00', '2.00', '2.00', 'PASS', 2022, 2023, 'First Semester', NULL),
(601, 75, 31, 20192271, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(602, 75, 31, 20192217, '18', NULL, NULL, NULL, 'INC', 2022, 2023, 'First Semester', NULL),
(603, 75, 31, 20192060, '18', '2.00', '2.50', '2.33', 'PASSED', 2022, 2023, 'First Semester', NULL),
(604, 75, 31, 20192127, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(605, 75, 31, 20192135, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(606, 75, 31, 20192108, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(607, 75, 31, 20192129, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(608, 75, 31, 20192371, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(609, 75, 31, 20192006, '18', '2.00', '2.00', '2.00', 'PASSED', 2022, 2023, 'First Semester', NULL),
(610, 75, 31, 20191886, '18', NULL, NULL, NULL, 'INC', 2022, 2023, 'First Semester', NULL),
(611, 75, 31, 20192280, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(612, 75, 31, 20191940, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(613, 75, 31, 20192166, '18', '1.75', '1.50', '1.58', 'PASS', 2022, 2023, 'First Semester', NULL),
(614, 75, 31, 20192440, '18', '2.00', '2.00', '2.00', 'PASS', 2022, 2023, 'First Semester', NULL),
(615, 75, 31, 20191992, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(616, 75, 31, 20192233, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(617, 75, 31, 20192128, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(618, 75, 31, 20192136, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(619, 75, 31, 20191823, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(620, 75, 31, 20192509, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(621, 75, 31, 20192293, '18', '3.00', '2.00', '2.33', 'PASSED', 2022, 2023, 'First Semester', NULL),
(622, 75, 31, 20192085, '18', '3.00', '2.00', '2.33', 'PASSED', 2022, 2023, 'First Semester', NULL),
(623, 75, 31, 20192221, '18', '1.00', '1.00', '1.00', 'PASSED', 2022, 2023, 'First Semester', NULL),
(624, 75, 31, 20192595, '18', '4.00', '4.50', '4.33', 'FAILED', 2022, 2023, 'First Semester', NULL),
(625, 75, 31, 20191766, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(626, 75, 31, 20192208, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(627, 75, 31, 20192390, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(628, 75, 31, 20191114, '18', '1.00', '1.00', '1.00', 'PASSED', 2022, 2023, 'First Semester', NULL),
(629, 75, 31, 20192281, '18', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(658, 76, 33, 20190846, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(659, 76, 33, 20191125, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(660, 76, 33, 20120754, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(661, 76, 33, 20191805, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(662, 76, 33, 20192091, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(663, 76, 33, 20192562, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(664, 76, 33, 20192271, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(665, 76, 33, 20192217, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(666, 76, 33, 20192060, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(667, 76, 33, 20192127, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(668, 76, 33, 20192135, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(669, 76, 33, 20192108, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(670, 76, 33, 20192129, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(671, 76, 33, 20192371, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(672, 76, 33, 20192006, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(673, 76, 33, 20191886, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(674, 76, 33, 20192280, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(675, 76, 33, 20191940, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(676, 76, 33, 20192166, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(677, 76, 33, 20192440, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(678, 76, 33, 20191992, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(679, 76, 33, 20192233, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(680, 76, 33, 20192128, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(681, 76, 33, 20192136, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(682, 76, 33, 20191823, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(683, 76, 33, 20192509, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(684, 76, 33, 20192293, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(685, 76, 33, 20192085, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(686, 76, 33, 20192221, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(687, 76, 33, 20192595, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(688, 76, 33, 20191766, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(689, 76, 33, 20192208, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(690, 76, 33, 20192390, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(691, 76, 33, 20191114, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(692, 76, 33, 20192281, '19', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(721, 77, 34, 20190846, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(722, 77, 34, 20191125, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(723, 77, 34, 20120754, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(724, 77, 34, 20191805, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(725, 77, 34, 20192091, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(726, 77, 34, 20192562, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(727, 77, 34, 20192271, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(728, 77, 34, 20192217, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(729, 77, 34, 20192060, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(730, 77, 34, 20192127, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(731, 77, 34, 20192135, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(732, 77, 34, 20192108, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(733, 77, 34, 20192129, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(734, 77, 34, 20192371, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(735, 77, 34, 20192006, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(736, 77, 34, 20191886, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(737, 77, 34, 20192280, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(738, 77, 34, 20191940, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(739, 77, 34, 20192166, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(740, 77, 34, 20192440, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(741, 77, 34, 20191992, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(742, 77, 34, 20192233, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(743, 77, 34, 20192128, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(744, 77, 34, 20192136, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(745, 77, 34, 20191823, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(746, 77, 34, 20192509, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(747, 77, 34, 20192293, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(748, 77, 34, 20192085, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(749, 77, 34, 20192221, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(750, 77, 34, 20192595, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(751, 77, 34, 20191766, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(752, 77, 34, 20192208, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(753, 77, 34, 20192390, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(754, 77, 34, 20191114, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(755, 77, 34, 20192281, '165', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(784, 78, 32, 20190846, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(785, 78, 32, 20191125, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(786, 78, 32, 20120754, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(787, 78, 32, 20191805, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(788, 78, 32, 20192091, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(789, 78, 32, 20192562, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(790, 78, 32, 20192271, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(791, 78, 32, 20192217, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(792, 78, 32, 20192060, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(793, 78, 32, 20192127, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(794, 78, 32, 20192135, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(795, 78, 32, 20192108, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(796, 78, 32, 20192129, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(797, 78, 32, 20192371, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(798, 78, 32, 20192006, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(799, 78, 32, 20191886, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(800, 78, 32, 20192280, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(801, 78, 32, 20191940, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(802, 78, 32, 20192166, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(803, 78, 32, 20192440, '22', '1.75', '1.75', '1.75', 'PASS', 2022, 2023, 'First Semester', NULL),
(804, 78, 32, 20191992, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(805, 78, 32, 20192233, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(806, 78, 32, 20192128, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(807, 78, 32, 20192136, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(808, 78, 32, 20191823, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(809, 78, 32, 20192509, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(810, 78, 32, 20192293, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(811, 78, 32, 20192085, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(812, 78, 32, 20192221, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(813, 78, 32, 20192595, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(814, 78, 32, 20191766, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(815, 78, 32, 20192208, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(816, 78, 32, 20192390, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(817, 78, 32, 20191114, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(818, 78, 32, 20192281, '22', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(847, 79, 31, 20190846, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(848, 79, 31, 20191125, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(849, 79, 31, 20120754, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(850, 79, 31, 20191805, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(851, 79, 31, 20192091, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(852, 79, 31, 20192562, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(853, 79, 31, 20192271, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(854, 79, 31, 20192217, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(855, 79, 31, 20192060, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(856, 79, 31, 20192127, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(857, 79, 31, 20192135, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(858, 79, 31, 20192108, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(859, 79, 31, 20192129, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(860, 79, 31, 20192371, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(861, 79, 31, 20192006, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(862, 79, 31, 20191886, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(863, 79, 31, 20192280, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(864, 79, 31, 20191940, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(865, 79, 31, 20192166, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(866, 79, 31, 20192440, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(867, 79, 31, 20191992, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(868, 79, 31, 20192233, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(869, 79, 31, 20192128, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(870, 79, 31, 20192136, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(871, 79, 31, 20191823, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(872, 79, 31, 20192509, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(873, 79, 31, 20192293, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(874, 79, 31, 20192085, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(875, 79, 31, 20192221, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(876, 79, 31, 20192595, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(877, 79, 31, 20191766, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(878, 79, 31, 20192208, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(879, 79, 31, 20192390, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(880, 79, 31, 20191114, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(881, 79, 31, 20192281, '67', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(910, 80, 33, 20190846, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(911, 80, 33, 20191125, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(912, 80, 33, 20120754, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(913, 80, 33, 20191805, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(914, 80, 33, 20192091, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(915, 80, 33, 20192562, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(916, 80, 33, 20192271, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(917, 80, 33, 20192217, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(918, 80, 33, 20192060, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(919, 80, 33, 20192127, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(920, 80, 33, 20192135, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(921, 80, 33, 20192108, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(922, 80, 33, 20192129, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(923, 80, 33, 20192371, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(924, 80, 33, 20192006, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(925, 80, 33, 20191886, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(926, 80, 33, 20192280, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(927, 80, 33, 20191940, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(928, 80, 33, 20192166, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(929, 80, 33, 20192440, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(930, 80, 33, 20191992, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(931, 80, 33, 20192233, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(932, 80, 33, 20192128, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(933, 80, 33, 20192136, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(934, 80, 33, 20191823, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(935, 80, 33, 20192509, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(936, 80, 33, 20192293, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(937, 80, 33, 20192085, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(938, 80, 33, 20192221, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(939, 80, 33, 20192595, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(940, 80, 33, 20191766, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(941, 80, 33, 20192208, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(942, 80, 33, 20192390, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(943, 80, 33, 20191114, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(944, 80, 33, 20192281, '162', NULL, NULL, NULL, NULL, 2022, 2023, 'First Semester', NULL),
(945, 81, 31, 20190846, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(946, 81, 31, 20191125, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(947, 81, 31, 20120754, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(948, 81, 31, 20191805, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(949, 81, 31, 20192091, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(950, 81, 31, 20192562, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(951, 81, 31, 20192271, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(952, 81, 31, 20192217, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(953, 81, 31, 20192060, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(954, 81, 31, 20192127, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(955, 81, 31, 20192135, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(956, 81, 31, 20192108, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(957, 81, 31, 20192129, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(958, 81, 31, 20192371, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(959, 81, 31, 20192006, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(960, 81, 31, 20191886, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(961, 81, 31, 20192280, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(962, 81, 31, 20191940, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(963, 81, 31, 20192166, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(964, 81, 31, 20192440, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(965, 81, 31, 20191992, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(966, 81, 31, 20192233, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(967, 81, 31, 20192128, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(968, 81, 31, 20192136, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(969, 81, 31, 20191823, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(970, 81, 31, 20192509, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(971, 81, 31, 20192293, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(972, 81, 31, 20192085, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(973, 81, 31, 20192221, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(974, 81, 31, 20192595, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(975, 81, 31, 20191766, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(976, 81, 31, 20192208, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(977, 81, 31, 20192390, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(978, 81, 31, 20191114, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL),
(979, 81, 31, 20192281, '130', NULL, NULL, NULL, NULL, 2022, 2023, 'Second Semester', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblsection`
--

CREATE TABLE `srms_tblsection` (
  `id` int(11) NOT NULL,
  `Section` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblsection`
--

INSERT INTO `srms_tblsection` (`id`, `Section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblsubject`
--

CREATE TABLE `srms_tblsubject` (
  `sub_id` int(11) NOT NULL,
  `SubjectDescription` varchar(60) NOT NULL,
  `SubjectCode` varchar(60) NOT NULL,
  `Units` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblsubject`
--

INSERT INTO `srms_tblsubject` (`sub_id`, `SubjectDescription`, `SubjectCode`, `Units`) VALUES
(18, 'INTRODUCTION TO COMPUTING', 'CCS 101', 3),
(19, 'COMPUTER PROGRAMMING 1', 'CCS 102', 5),
(20, 'DRAFTING', 'EMC 101', 3),
(21, 'UNDERSTANDING THE SELF', 'GEC 001', 3),
(22, 'MATHEMATICS IN THE MODERN WORLD', 'GEC 004', 3),
(23, 'NSTP (CWTS) 1', 'NSTP 111', 3),
(24, 'DATA STRUCTURES AND ALGORITHMS', 'CCS 104', 3),
(25, 'COMPUTER TECHNICAL CONCEPT', 'CCS 108', 3),
(26, 'USABILITY, HCI, AND USER INTERACTION DESIGN', 'CCS 123', 3),
(27, 'PRINCIPLES OF 2D ANIMATION', 'EMC 104', 3),
(28, 'GAME PROGRAMMING 1', 'EMC 105', 5),
(29, 'LITERATURE IN ENGLISH', 'LIT 001', 3),
(30, 'ANALYTIC GEOMETRY', 'MCC 212', 3),
(31, 'DATA STRUCTURES AND ALGORITHMS', 'CCS 104', 3),
(32, 'COMPUTER TECHNICAL CONCEPT', 'CCS 108', 3),
(33, 'USABILITY, HCI, AND USER INTERACTION DESIGN', 'CCS 123', 3),
(34, 'PRINCIPLES OF 2D ANIMATION', 'EMC 104', 3),
(35, 'GAME PROGRAMMING 1', 'EMC 105', 5),
(36, 'LITERATURE IN ENGLISH', 'LIT 001', 3),
(37, 'ANALYTIC GEOMETRY', 'MCC 212', 3),
(38, 'PRINCIPLES OF 3D ANIMATION', 'EMC 108', 3),
(39, 'AUDIO DESIGN AND SOUND ENGINEERING', 'EMC 109', 3),
(44, 'PURPOSIVE COMMUNICATION', 'GEC 005', 3),
(45, 'APPLIED MATHEMATICS FOR GAMESAPPLIED MATHEMATICS FOR GAMES', 'EMC 110', 3),
(46, 'ARTIFICIAL INTELLIGENCE (AI) IN GAMES  ', 'EMC 111', 3),
(47, 'EMC PROFESSIONAL ELECTIVE 1 - Computer NetworkingEMC PROFESS', 'EMC 112', 3),
(48, 'PURPOSIVE COMMUNICATION', 'GEC 005', 3),
(49, 'INTRO TO RESEARCH', 'RES 001', 3),
(50, 'INTRO TO RESEARCH', 'RES 001', 3),
(51, 'ADVANCED GAME DESIGN', 'EMC 411', 3),
(52, 'EMC PROFESSIONAL ELECTIVE 1 - Computer Networking', 'EMC 412', 3),
(53, 'EMC PROFESSIONAL ELECTIVE 2 - Web Application Development 1', 'EMC 413', 3),
(54, 'DESIGN AND PRODUCTION PROCESS', 'EMC 414', 3),
(55, 'CAPSTONE 1', 'EMC 415', 5),
(56, 'EMC PROFESSIONAL ELECTIVE 3 - IT Professional Ethics', 'EMC 422', 3),
(57, 'CURRENT TRENDS IN IT AND SEMINARS', 'EMC 425', 3),
(58, 'INTRODUCTION TO COMPUTING', 'CCS 101', 3),
(59, 'FUNDAMENTALS OF PROGRAMMING', 'CCS 102', 5),
(60, 'BUSINESS APPLICATION SOFTWARE', 'CCS 109', 3),
(61, 'UNDERSTANDING THE SELF', 'GEC 001', 3),
(62, 'PURPOSIVE COMMUNICATION', 'GEC 005', 3),
(63, 'MATHEMATICS IN THE MODERN WORLD', 'GEC 004', 3),
(64, 'NSTP CWTS 1', 'NSTP 101', 3),
(65, 'DATA STRUCTURES AND ALGORITHMS', 'CCS 104', 3),
(66, 'INFORMATION MANAGEMENTINFORMATION MANAGEMENT', 'CCS 105', 5),
(67, 'PROGRAMMING LANGUAGES', 'CS 101', 5),
(68, 'LOGIC CIRCUIT AND SWITCHING THEORY', 'CS 102', 3),
(69, 'DISCRETE STRUCTURES 1', 'CS 103', 3),
(70, 'READING IN THE PHILIPPINE HISTORY', 'GEC 002', 3),
(71, 'DIFFERENTIAL CALCULUS', 'PR 002', 3),
(72, 'DATA STRUCTURES AND ALGORITHMS', 'CCS 104', 3),
(73, 'INFORMATION MANAGEMENT', 'CCS 105', 5),
(74, 'PROGRAMMING LANGUAGES', 'CS 101', 5),
(75, 'LOGIC CIRCUIT AND SWITCHING THEORY', 'CS 102', 3),
(76, 'DISCRETE STRUCTURES 1', 'CS 103', 3),
(77, 'READING IN THE PHILIPPINE HISTORY', 'GEC 002', 3),
(78, 'DIFFERENTIAL CALCULUS', 'PR 002', 3),
(79, 'DATA STRUCTURES AND ALGORITHMS', 'CCS 104', 3),
(80, 'INFORMATION MANAGEMENT', 'CCS 105', 5),
(81, 'PROGRAMMING LANGUAGES', 'CS 101', 5),
(82, 'LOGIC CIRCUIT AND SWITCHING THEORY', 'CS 102', 3),
(83, 'DISCRETE STRUCTURES 1', 'CS 103', 3),
(84, 'READING IN THE PHILIPPINE HISTORY', 'GEC 002', 3),
(85, 'DIFFERENTIAL CALCULUS', 'PR 002', 3),
(86, 'ADVANCED WEB SYSTEMS', 'CCS 116', 5),
(87, 'SOFTWARE ENGINEERING 1', 'CS 108', 3),
(88, 'NETWORKS AND COMMUNICATIONS', 'CS 110', 3),
(89, 'GRAPHICS AND VISUAL COMPUTING', 'CSE 102', 3),
(90, 'ETHICS', 'GEC 008', 3),
(91, 'SCIENCE, TECHNOLOGY AND SOCIETY', 'GEC 007', 3),
(92, 'INFORMATION ASSURANCE AND SECURITY', 'CS 113', 3),
(93, 'ADVANCED WEB SYSTEMS', 'CCS 116', 5),
(94, 'SOFTWARE ENGINEERING 1', 'CS 108', 3),
(95, 'NETWORKS AND COMMUNICATIONS', 'CS 110', 3),
(96, 'GRAPHICS AND VISUAL COMPUTING', 'CSE 102', 3),
(97, 'ETHICS', 'GEC 008', 3),
(98, 'SCIENCE, TECHNOLOGY AND SOCIETY', 'GEC 007', 3),
(99, 'INFORMATION ASSURANCE AND SECURITY', 'CS 113', 3),
(100, 'INTELLIGENT SYSTEMS', 'CS 411', 3),
(101, 'SOCIAL ISSUES AND PROFESSIONAL PRACTICE 1', 'CS 412', 3),
(102, 'PARALLEL AND DISTRIBUTED COMPUTING', 'CS 413', 3),
(103, 'CS THESIS 1', 'CS 414', 5),
(104, 'BUSINESS ORG. AND MANAGEMENT', 'BOM 001', 3),
(105, 'PHILIPPINE HISTORY', 'MAN 001', 3),
(106, 'CURRENT TRENDS IN IT AND SEMINAR', 'CS 422', 3),
(107, 'INTELLIGENT SYSTEMS', 'CS 411', 3),
(108, 'SOCIAL ISSUES AND PROFESSIONAL PRACTICE 1', 'CS 412', 3),
(109, 'PARALLEL AND DISTRIBUTED COMPUTING', 'CS 413', 3),
(110, 'CS THESIS 1', 'CS 414', 5),
(111, 'BUSINESS ORG. AND MANAGEMENT', 'BOM 001', 3),
(112, 'PHILIPPINE HISTORY', 'MAN 001', 3),
(113, 'CURRENT TRENDS IN IT AND SEMINAR', 'CS 422', 3),
(114, 'INTRODUCTION TO COMPUTING', 'CSS 101', 3),
(115, 'COMPUTER PROGRAMMING 1', 'CCS 102', 5),
(116, 'BUSINESS APPLICATION SOFTWARE', 'CCS 109', 3),
(117, 'NSTP1 - CTWTS1', 'NSTP 111', 3),
(118, 'UNDERSTANDING THE SELF', 'GEC 001', 3),
(119, 'READING IN THE PHILIPPINE HISTORY', 'GEC 002 ', 3),
(120, 'CONTEMPORARY WORLD', 'GEC 003', 3),
(121, 'DATA STRUCTURE AND ALGO.', 'CCS 104', 3),
(122, 'INFORMATION MANAGEMENT', 'CCS 105', 5),
(123, 'OPERATING SYSTEM & APPLICATION', 'CCS 112', 5),
(124, 'FINANCIAL MANAGEMENT', 'IS 101', 3),
(125, 'LIVING IN THE IT ERA', 'GEE 002', 3),
(126, 'PURPOSIVE COMMUNICATION', 'GEC 005', 3),
(127, 'DATA STRUCTURE AND ALGO.', 'CCS 104', 3),
(128, 'INFORMATION MANAGEMENT', 'CCS 105', 5),
(129, 'OPERATING SYSTEM & APPLICATION', 'CCS 112', 3),
(130, 'FINANCIAL MANAGEMENT', 'IS 101', 3),
(131, 'LIVING IN THE IT ERA', 'GEE 002', 3),
(132, 'PURPOSIVE COMMUNICATION', 'GEC 005', 3),
(133, 'ENTERPRISE RESOURCE PLANNING', 'IS 102', 3),
(134, 'MULTIMEDIA SYSTEMS', 'CCS 118', 3),
(135, 'DATABASE SYSTEM ENTERPRISE', 'IS 103', 5),
(136, 'BUSINESS PROCESS MANAGEMENT', 'IS 104', 3),
(137, 'ENTERPRISE ARCHITECTURE', 'IS 105', 3),
(138, 'GENDER AND SOCIETY', 'GEE 003', 3),
(139, 'METHODS OF RESEARCH', 'RES 001', 3),
(140, 'ENTERPRISE RESOURCE PLANNING', 'IS 102', 3),
(141, 'MULTIMEDIA SYSTEMS', 'CCS 118', 3),
(142, 'DATABASE SYSTEM ENTERPRISE', 'IS 103', 5),
(143, 'BUSINESS PROCESS MANAGEMENT', 'IS 104', 3),
(144, 'ENTERPRISE ARCHITECTURE', 'IS 105', 3),
(145, 'GENDER AND SOCIETY', 'GEE 003', 3),
(146, 'METHODS OF RESEARCH', 'RES 001', 3),
(147, 'IS PROJECT MANAGEMENT', 'IS 416', 3),
(148, 'IS MAJOR ELECTIVE 3', 'IS 411', 5),
(149, 'IT SECURITY AND MANAGEMENT', 'IS 425', 3),
(150, 'ORGANIZATION AND MANAGEMENT CONCEPTS', 'BUS 411', 3),
(151, 'CAPSTONE PROJECT 1', 'IS 414', 5),
(152, 'RIZAL\'S LIFE, WORKS AND WRITINGS', 'MAN 002', 3),
(153, 'ENTERPRISE SYSTEM', 'IS 426', 3),
(154, 'CURRENT TRENDS IN IT AND SEMINAR', 'IS 421', 3),
(155, 'INTRODUCTION TO COMPUTING', 'CCS 101', 3),
(156, 'COMPUTER PROGRAMMING 1', 'CCS 102', 5),
(157, 'BUSINESS APPLICATION SOFTWARE', 'CCS 109', 3),
(158, 'NSTP1', 'NSTP 111', 3),
(159, 'UNDERSTANDING THE SELF', 'GEC 001', 3),
(160, 'READING IN THE PHILIPPINE HISTORY', 'GEC 002', 3),
(161, 'MATHEMATICS OF THE MODERN WORLD', 'GEC 004', 3),
(162, 'DATA STRUCTURES AND ALGORITHM', 'CCS 104', 3),
(163, 'INFORMATION MANAGEMENT', 'CCS 105', 5),
(164, 'DIGITAL GRAPHICS', 'CCS 110', 3),
(165, 'NETWORKING 1', 'CCS 117', 3),
(166, 'DISCRETE MATHEMATICSDISCRETE MATHEMATICS', 'CCS 124', 3),
(167, 'LITERATURE', 'LIT 001', 3),
(168, 'DATA STRUCTURES AND ALGORITHM', 'CCS 104', 3),
(169, 'SYSTEM ANALYSIS AND DESIGN', 'CCS 111', 3),
(170, 'INFORMATION ASSURANCE AND SECURITY 1', 'CCS 113', 3),
(171, 'ADVANCED WEB SYSTEMS', 'CCS 116', 5),
(172, 'MULTIMEDIA SYSTEMS', 'CCS 118', 3),
(173, 'IT MAJOR ELECTIVE 1 (DIGITAL ANIMATION)', 'IT 105', 3),
(174, 'LOGIC DESIGN AND SWITCHING', 'IT 106', 3),
(175, 'PROBABILITY AND STATISTICS', 'PR 002', 3),
(176, 'ART APPRECIATION', 'HUM 001', 3),
(177, 'GEN. PSYCHOLOGY', 'SS 111', 3),
(178, 'PHILIPPINE HISTORY', 'MAN 001', 3),
(179, 'SYSTEM ADMINISTRATION AND MAINTENANCE', 'IT 411', 3),
(180, 'IT MAJOR ELECTIVE 3 (GAME DEVELOPMENT)', 'IT 412', 3),
(181, 'QUANTITATIVE METHODS (INCL:MODELLING AND SIMULATION', 'IT 413', 3),
(182, 'CAPSTONE PROJECT AND RESEARCH 1', 'IT 414', 5),
(183, 'SOCIAL AND PROFESSIONAL ISSUES', 'IT 424', 3),
(184, 'ART APPRECIATION', 'HUM 001', 3),
(185, 'Testing new Query', 'TNQ 10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `srms_tblyear`
--

CREATE TABLE `srms_tblyear` (
  `id` int(11) NOT NULL,
  `Year` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srms_tblyear`
--

INSERT INTO `srms_tblyear` (`id`, `Year`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `srms_admin`
--
ALTER TABLE `srms_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `srms_students`
--
ALTER TABLE `srms_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `srms_tblclasses`
--
ALTER TABLE `srms_tblclasses`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `srms_tblcourses`
--
ALTER TABLE `srms_tblcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srms_tbldepartment`
--
ALTER TABLE `srms_tbldepartment`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `srms_tblmanagesubcombi`
--
ALTER TABLE `srms_tblmanagesubcombi`
  ADD PRIMARY KEY (`combi_id`);

--
-- Indexes for table `srms_tblprof`
--
ALTER TABLE `srms_tblprof`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `srms_tblresult`
--
ALTER TABLE `srms_tblresult`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `srms_tblsection`
--
ALTER TABLE `srms_tblsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srms_tblsubject`
--
ALTER TABLE `srms_tblsubject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `srms_tblyear`
--
ALTER TABLE `srms_tblyear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `srms_admin`
--
ALTER TABLE `srms_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `srms_students`
--
ALTER TABLE `srms_students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `srms_tblclasses`
--
ALTER TABLE `srms_tblclasses`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `srms_tblcourses`
--
ALTER TABLE `srms_tblcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `srms_tbldepartment`
--
ALTER TABLE `srms_tbldepartment`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `srms_tblmanagesubcombi`
--
ALTER TABLE `srms_tblmanagesubcombi`
  MODIFY `combi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `srms_tblprof`
--
ALTER TABLE `srms_tblprof`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `srms_tblresult`
--
ALTER TABLE `srms_tblresult`
  MODIFY `result_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980;

--
-- AUTO_INCREMENT for table `srms_tblsection`
--
ALTER TABLE `srms_tblsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `srms_tblsubject`
--
ALTER TABLE `srms_tblsubject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `srms_tblyear`
--
ALTER TABLE `srms_tblyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
