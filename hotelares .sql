-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 29 Μάη 2018 στις 18:02:19
-- Έκδοση διακομιστή: 10.1.31-MariaDB
-- Έκδοση PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `hotelares`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `amenities`
--

CREATE TABLE `amenities` (
  `Amenities` varchar(45) NOT NULL,
  `Room_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `amenities`
--

INSERT INTO `amenities` (`Amenities`, `Room_ID`) VALUES
('aircondition', 2),
('aircondition', 8),
('aircondition', 14),
('aircondition', 20),
('aircondition', 26),
('aircondition', 32),
('aircondition', 38),
('aircondition', 44),
('aircondition', 50),
('aircondition', 56),
('aircondition', 62),
('aircondition', 68),
('aircondition', 74),
('aircondition', 80),
('aircondition', 86),
('aircondition', 92),
('aircondition', 98),
('aircondition', 104),
('aircondition', 110),
('aircondition', 116),
('aircondition', 122),
('fridge,aircondition', 4),
('fridge,aircondition', 10),
('fridge,aircondition', 16),
('fridge,aircondition', 22),
('fridge,aircondition', 28),
('fridge,aircondition', 34),
('fridge,aircondition', 40),
('fridge,aircondition', 46),
('fridge,aircondition', 52),
('fridge,aircondition', 58),
('fridge,aircondition', 64),
('fridge,aircondition', 70),
('fridge,aircondition', 76),
('fridge,aircondition', 82),
('fridge,aircondition', 88),
('fridge,aircondition', 94),
('fridge,aircondition', 100),
('fridge,aircondition', 106),
('fridge,aircondition', 112),
('fridge,aircondition', 118),
('fridge,aircondition', 124),
('fridge,tv', 1),
('fridge,tv', 7),
('fridge,tv', 13),
('fridge,tv', 19),
('fridge,tv', 25),
('fridge,tv', 31),
('fridge,tv', 37),
('fridge,tv', 43),
('fridge,tv', 49),
('fridge,tv', 55),
('fridge,tv', 61),
('fridge,tv', 67),
('fridge,tv', 73),
('fridge,tv', 79),
('fridge,tv', 85),
('fridge,tv', 91),
('fridge,tv', 97),
('fridge,tv', 103),
('fridge,tv', 109),
('fridge,tv', 115),
('fridge,tv', 121),
('fridge,tv,aircondition', 6),
('fridge,tv,aircondition', 12),
('fridge,tv,aircondition', 18),
('fridge,tv,aircondition', 24),
('fridge,tv,aircondition', 30),
('fridge,tv,aircondition', 36),
('fridge,tv,aircondition', 42),
('fridge,tv,aircondition', 48),
('fridge,tv,aircondition', 54),
('fridge,tv,aircondition', 60),
('fridge,tv,aircondition', 66),
('fridge,tv,aircondition', 72),
('fridge,tv,aircondition', 78),
('fridge,tv,aircondition', 84),
('fridge,tv,aircondition', 90),
('fridge,tv,aircondition', 96),
('fridge,tv,aircondition', 102),
('fridge,tv,aircondition', 108),
('fridge,tv,aircondition', 114),
('fridge,tv,aircondition', 120),
('tv', 5),
('tv', 11),
('tv', 17),
('tv', 23),
('tv', 29),
('tv', 35),
('tv', 41),
('tv', 47),
('tv', 53),
('tv', 59),
('tv', 65),
('tv', 71),
('tv', 77),
('tv', 83),
('tv', 89),
('tv', 95),
('tv', 101),
('tv', 107),
('tv', 113),
('tv', 119),
('tv', 125),
('tv,aircondition', 3),
('tv,aircondition', 9),
('tv,aircondition', 15),
('tv,aircondition', 21),
('tv,aircondition', 27),
('tv,aircondition', 33),
('tv,aircondition', 39),
('tv,aircondition', 45),
('tv,aircondition', 51),
('tv,aircondition', 57),
('tv,aircondition', 63),
('tv,aircondition', 69),
('tv,aircondition', 75),
('tv,aircondition', 81),
('tv,aircondition', 87),
('tv,aircondition', 93),
('tv,aircondition', 99),
('tv,aircondition', 105),
('tv,aircondition', 111),
('tv,aircondition', 117),
('tv,aircondition', 123);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customer`
--

CREATE TABLE `customer` (
  `IRS_Number` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `First_Registration` date NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Street_Number` int(11) NOT NULL,
  `Postal_Code` int(11) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `customer`
--

INSERT INTO `customer` (`IRS_Number`, `SSN`, `First_Registration`, `L_Name`, `F_Name`, `Street`, `Street_Number`, `Postal_Code`, `City`) VALUES
(3115088, 123456789, '2001-02-21', 'Alexandros', 'Veremakos', 'Peozoglou', 13, 11741, 'Athens'),
(3115125, 123456791, '2018-05-22', 'Karkatzou', 'Nikoletta', 'Galinou', 98, 11741, 'Athens'),
(3115129, 123456789, '1789-01-31', 'Mixalopoulos', 'Vasileios', 'Pipikou', 1, 117, 'Salamina'),
(3151082, 123546789, '1970-06-12', 'Xiros', 'Vasileios', 'Pipikou', 69, 117, 'Peristeri');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `emailaddress`
--

CREATE TABLE `emailaddress` (
  `Hotel_ID` int(11) NOT NULL,
  `EmailAddress` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `emailaddress`
--

INSERT INTO `emailaddress` (`Hotel_ID`, `EmailAddress`) VALUES
(1, 'mitrogoal@hotmail.com'),
(2, 'tourlidas2@gmail.com'),
(3, 'tourlidas3@gmail.com'),
(4, 'tourlidas4@gmail.com'),
(5, 'tourlidas5@gmail.com'),
(6, 'solonos6@gmail.com'),
(7, 'solonos7@gmail.com'),
(8, 'solonos8@gmail.com'),
(9, 'solonos9@gmail.com'),
(10, 'solonos10@gmail.com'),
(11, 'krinou11@gmail.com'),
(12, 'krinou12@gmail.com'),
(13, 'krinou13@gmail.com'),
(14, 'krinou14@gmail.com'),
(15, 'krinou15@gmail.com'),
(16, 'rodou16@gmail.com'),
(17, 'rodou17@gmail.com'),
(18, 'rodou18@gmail.com'),
(19, 'rodou19@gmail.com'),
(20, 'rodou20@gmail.com'),
(21, 'kappa21@gmail.com'),
(22, 'kappa22@gmail.com'),
(23, 'krinou23@gmail.com'),
(24, 'kappa24@gmail.com'),
(25, 'kappa25@gmail.com');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `emailaddressgroup`
--

CREATE TABLE `emailaddressgroup` (
  `Hotel_Group_ID` int(11) NOT NULL,
  `EmailAddress` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `emailaddressgroup`
--

INSERT INTO `emailaddressgroup` (`Hotel_Group_ID`, `EmailAddress`) VALUES
(1, 'mixalikos@hotmail.com'),
(2, 'vlahogiannis@gmail.c'),
(3, 'expedia@gmail.com'),
(4, 'newlife@hotmail.com'),
(5, 'hot_teleio@gmail.com');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `employee`
--

CREATE TABLE `employee` (
  `IRS_Number` int(10) NOT NULL,
  `SSN` int(10) NOT NULL,
  `L_Name` varchar(20) COLLATE latin1_bin NOT NULL,
  `F_Name` varchar(20) COLLATE latin1_bin NOT NULL,
  `Street` varchar(20) COLLATE latin1_bin NOT NULL,
  `Street_Number` int(4) NOT NULL,
  `Postal_Code` int(5) NOT NULL,
  `City` varchar(20) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Άδειασμα δεδομένων του πίνακα `employee`
--

INSERT INTO `employee` (`IRS_Number`, `SSN`, `L_Name`, `F_Name`, `Street`, `Street_Number`, `Postal_Code`, `City`) VALUES
(23, 8000878, 'Kostenoglou', 'Kostas', 'Melissanthis', 32, 22020, 'Melissia'),
(33, 89899, 'Mantalos', 'Petros', 'Melissanidi', 32, 32400, 'Peristeri'),
(1131, 111230, 'Vasileiou', 'Vasilis', 'Alamanas', 231, 10101, 'Voula'),
(1231, 12312342, 'Kataki', 'Spiridoula', 'Keas', 231, 12010, 'Varkiza'),
(5553, 4342, 'Alexiou', 'Alexis', 'Alamanas', 8, 91011, 'Petroupolis'),
(8787, 988897, 'Karperos', 'Vasilis', 'Alamanas', 3, 39399, 'Korinthos'),
(23021, 899877, 'Kostantinou', 'Katia', 'Alamanas', 56, 39399, 'Korinthos'),
(23421, 233435, 'Gournas', 'Themis', 'Sokratous', 32, 31231, 'Kamatero'),
(24929, 949499, 'Kantaris', 'Kostas', 'Karamanli', 23, 99985, 'Petroupoli'),
(43242, 123, 'Mpakasetas', 'Tasos', 'Nazianzinou', 67, 21222, 'Chalandri'),
(43431, 3242342, 'Alexandropoulos', 'Nikolaos', 'Nikologlou', 32, 55933, 'Kamatero'),
(54665, 575878, 'Alekopoulos', 'Alexis', 'Aristotelous', 67, 42671, 'Thessaloniki'),
(77897, 453, 'Alexandrinou', 'Alexia', 'Alamanas', 90, 87271, 'Neos Kosmos'),
(112111, 1200001, 'Ioannou', 'Vaggelis', 'Keas', 32, 95991, 'Kerkiras'),
(123211, 1231, 'Katraki', 'Ioanna', 'Tzias', 21, 39399, 'Kalamata'),
(123232, 122312, 'Papadopoulos', 'Giorgos', 'Papadimitriou', 67, 55522, 'Trikala'),
(223434, 232323, 'Boursinos', 'Ioannis', 'Konitsas', 32, 19009, 'Leivadia'),
(432423, 312111, 'Konstantinoglou', 'Alekos', 'Alexandrinou', 1, 32111, 'Liosia'),
(787867, 7778, 'Alexandratou', 'Julia', 'Alamanas', 232, 44444, 'Kalamata'),
(2302032, 23321, 'Spiropoulou', 'Katerina', 'Korinthou', 23, 12121, 'Kalamata'),
(2323212, 1112, 'Leonidakis', 'Leonidas', 'Keas', 78, 48949, 'Tzia'),
(3115063, 9083235, 'Xiros', 'Vasileios', 'Aiolou', 12, 11741, 'Athens'),
(3115120, 9080828, 'Katakis', 'Nikiforos', 'Galinou', 6, 11741, 'Athens'),
(3123123, 13123, 'Xenos', 'Dimitris', 'Akadimias', 153, 13556, 'Konitsa'),
(9220203, 123120, 'Veremis', 'Alex', 'Papadiamanti', 22, 13232, 'Petroupolis');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_ID` int(11) NOT NULL,
  `Hotel_Group_ID` int(11) NOT NULL,
  `Stars` int(1) NOT NULL,
  `Number_Rooms` int(11) NOT NULL,
  `Street` varchar(20) COLLATE latin1_bin NOT NULL,
  `Street_Number` int(11) NOT NULL,
  `Postal_Code` int(11) NOT NULL,
  `City` varchar(20) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Άδειασμα δεδομένων του πίνακα `hotel`
--

INSERT INTO `hotel` (`Hotel_ID`, `Hotel_Group_ID`, `Stars`, `Number_Rooms`, `Street`, `Street_Number`, `Postal_Code`, `City`) VALUES
(1, 1, 4, 5, 'KAFATZOGLOU', 10, 11690, 'BOGOTA'),
(2, 1, 4, 5, 'KOSTALEXI', 1, 19828, 'CHANIA'),
(3, 1, 3, 5, 'TOURLIDAS', 2, 19828, 'MESOLOGGI'),
(4, 1, 2, 5, 'TOURLIDAS', 3, 19828, 'MESOLOGGI'),
(5, 1, 5, 5, 'TOURLIDAS', 8, 19828, 'MESOLOGGI'),
(6, 2, 5, 5, 'SIKINOS', 1, 18888, 'SIFNOS'),
(7, 2, 4, 5, 'SOLONOS', 2, 13543, 'ATHENS'),
(8, 2, 3, 5, 'SOLONOS', 3, 13543, 'ATHENS'),
(9, 2, 2, 5, 'SOLONOS', 5, 16723, 'ATHENS'),
(10, 2, 3, 5, 'KAVAFI', 6, 23222, 'PAROS'),
(11, 3, 4, 5, 'KAVADIA', 3, 89898, 'NAXOS'),
(12, 3, 3, 5, 'KRINOU', 5, 56461, 'METAXOURGEIO'),
(13, 3, 2, 5, 'KRINOU', 6, 56461, 'METAXOURGEIO'),
(14, 3, 2, 5, 'KRINOU', 7, 56461, 'METAXOURGEIO'),
(15, 3, 5, 5, 'KOLOKITHA', 8, 38267, 'TRIPOLI'),
(16, 4, 5, 5, 'RODOU', 1, 17343, 'IOS'),
(17, 4, 5, 5, 'RODOU', 12, 11880, 'IOS'),
(18, 4, 3, 5, 'RODOU', 13, 11880, 'IOS'),
(19, 4, 2, 5, 'SANTAMARIA', 15, 11919, 'KASTORIA'),
(20, 4, 4, 5, 'KORRE', 18, 44444, 'ZAKYNTHOS'),
(21, 5, 3, 5, 'KAPPA', 145, 11880, 'KERKIRA'),
(22, 5, 2, 5, 'KAPPA', 167, 11880, 'KERKIRA'),
(23, 5, 5, 5, 'METEORON', 4, 31313, 'LESVOS'),
(24, 5, 2, 5, 'KAPPA', 189, 11880, 'KERKIRA'),
(25, 5, 5, 5, 'KARPATHOU', 100, 11880, 'KOS');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotelgroup`
--

CREATE TABLE `hotelgroup` (
  `Hotel_Group_ID` int(11) NOT NULL,
  `NumberofHotels` int(11) NOT NULL DEFAULT '5',
  `Street` varchar(20) NOT NULL,
  `Street_Number` int(11) NOT NULL,
  `Postal_Code` int(11) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `hotelgroup`
--

INSERT INTO `hotelgroup` (`Hotel_Group_ID`, `NumberofHotels`, `Street`, `Street_Number`, `Postal_Code`, `City`) VALUES
(1, 5, 'Paparizou', 13, 11741, 'Athens'),
(2, 5, 'ARISTOTELOUS', 24, 18892, 'THESSALONIKI'),
(3, 5, 'AKADIMIAS', 35, 14323, 'ATHENS'),
(4, 5, 'KARAISKAKI', 37, 18898, 'GLIFADA'),
(5, 5, 'KOLOKOTRONI', 122, 12231, 'KALAMATA');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotelroom`
--

CREATE TABLE `hotelroom` (
  `Room_ID` int(11) NOT NULL,
  `Hotel_ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Repairs_need` varchar(20) NOT NULL,
  `Expandable` varchar(20) NOT NULL,
  `View` varchar(20) NOT NULL,
  `Capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `hotelroom`
--

INSERT INTO `hotelroom` (`Room_ID`, `Hotel_ID`, `Price`, `Repairs_need`, `Expandable`, `View`, `Capacity`) VALUES
(1, 1, 70, 'YES', 'NO', 'SEA', 5),
(2, 1, 69, 'NO', 'NO', 'SEA', 4),
(3, 1, 34, 'NO', '2 BEDS', 'SEA', 3),
(4, 1, 122, 'YES', 'DOOR', 'NO', 2),
(5, 1, 87, 'NO', 'NO', 'NO', 1),
(6, 2, 68, 'NO', 'DOOR', 'SEA', 5),
(7, 2, 69, 'NO', 'NO', 'SEA', 4),
(8, 2, 34, 'NO', '2 BEDS', 'SEA', 3),
(9, 2, 122, 'YES', 'DOOR', 'NO', 2),
(10, 2, 87, 'NO', 'NO', 'NO', 1),
(11, 3, 68, 'NO', 'DOOR', 'SEA', 5),
(12, 3, 69, 'NO', 'NO', 'SEA', 4),
(13, 3, 34, 'NO', '2 BEDS', 'SEA', 3),
(14, 3, 122, 'YES', 'DOOR', 'NO', 2),
(15, 3, 87, 'NO', 'NO', 'NO', 1),
(16, 4, 68, 'NO', 'DOOR', 'SEA', 5),
(17, 4, 69, 'NO', 'NO', 'SEA', 4),
(18, 4, 34, 'NO', '2 BEDS', 'SEA', 3),
(19, 4, 122, 'YES', 'DOOR', 'NO', 2),
(20, 4, 87, 'NO', 'NO', 'NO', 1),
(21, 5, 68, 'NO', 'DOOR', 'SEA', 5),
(22, 5, 69, 'NO', 'NO', 'SEA', 4),
(23, 5, 34, 'NO', '2 BEDS', 'SEA', 3),
(24, 5, 122, 'YES', 'DOOR', 'NO', 2),
(25, 5, 87, 'NO', 'NO', 'NO', 1),
(26, 6, 68, 'NO', 'DOOR', 'SEA', 5),
(27, 6, 69, 'NO', 'NO', 'SEA', 4),
(28, 6, 34, 'NO', '2 BEDS', 'SEA', 3),
(29, 6, 122, 'YES', 'DOOR', 'NO', 2),
(30, 6, 87, 'NO', 'NO', 'NO', 1),
(31, 7, 68, 'NO', 'DOOR', 'SEA', 5),
(32, 7, 69, 'NO', 'NO', 'SEA', 4),
(33, 7, 34, 'NO', '2 BEDS', 'SEA', 3),
(34, 7, 122, 'YES', 'DOOR', 'NO', 2),
(35, 7, 87, 'NO', 'NO', 'NO', 1),
(36, 8, 68, 'NO', 'DOOR', 'SEA', 5),
(37, 8, 69, 'NO', 'NO', 'SEA', 4),
(38, 8, 34, 'NO', '2 BEDS', 'SEA', 3),
(39, 8, 122, 'YES', 'DOOR', 'NO', 2),
(40, 8, 87, 'NO', 'NO', 'NO', 1),
(41, 9, 68, 'NO', 'DOOR', 'SEA', 5),
(42, 9, 69, 'NO', 'NO', 'SEA', 4),
(43, 9, 34, 'NO', '2 BEDS', 'SEA', 3),
(44, 9, 122, 'YES', 'DOOR', 'NO', 2),
(45, 9, 87, 'NO', 'NO', 'NO', 1),
(46, 10, 68, 'NO', 'DOOR', 'SEA', 5),
(47, 10, 69, 'NO', 'NO', 'SEA', 4),
(48, 10, 34, 'NO', '2 BEDS', 'SEA', 3),
(49, 10, 122, 'YES', 'DOOR', 'NO', 2),
(50, 10, 87, 'NO', 'NO', 'NO', 1),
(51, 11, 68, 'NO', 'DOOR', 'SEA', 5),
(52, 11, 69, 'NO', 'NO', 'SEA', 4),
(53, 11, 34, 'NO', '2 BEDS', 'SEA', 3),
(54, 11, 122, 'YES', 'DOOR', 'NO', 2),
(55, 11, 87, 'NO', 'NO', 'NO', 1),
(56, 12, 68, 'NO', 'DOOR', 'SEA', 5),
(57, 12, 69, 'NO', 'NO', 'SEA', 4),
(58, 12, 34, 'NO', '2 BEDS', 'SEA', 3),
(59, 12, 122, 'YES', 'DOOR', 'NO', 2),
(60, 12, 87, 'NO', 'NO', 'NO', 1),
(61, 13, 68, 'NO', 'DOOR', 'SEA', 5),
(62, 13, 69, 'NO', 'NO', 'SEA', 4),
(63, 13, 34, 'NO', '2 BEDS', 'SEA', 3),
(64, 13, 122, 'YES', 'DOOR', 'NO', 2),
(65, 13, 87, 'NO', 'NO', 'NO', 1),
(66, 14, 68, 'NO', 'DOOR', 'SEA', 5),
(67, 14, 69, 'NO', 'NO', 'SEA', 4),
(68, 14, 34, 'NO', '2 BEDS', 'SEA', 3),
(69, 14, 122, 'YES', 'DOOR', 'NO', 2),
(70, 14, 87, 'NO', 'NO', 'NO', 1),
(71, 15, 68, 'NO', 'DOOR', 'SEA', 5),
(72, 15, 69, 'NO', 'NO', 'SEA', 4),
(73, 15, 34, 'NO', '2 BEDS', 'SEA', 3),
(74, 15, 122, 'YES', 'DOOR', 'NO', 2),
(75, 15, 87, 'NO', 'NO', 'NO', 1),
(76, 16, 68, 'NO', 'DOOR', 'SEA', 5),
(77, 16, 69, 'NO', 'NO', 'SEA', 4),
(78, 16, 34, 'NO', '2 BEDS', 'SEA', 3),
(79, 16, 122, 'YES', 'DOOR', 'NO', 2),
(80, 16, 87, 'NO', 'NO', 'NO', 1),
(81, 17, 68, 'NO', 'DOOR', 'SEA', 5),
(82, 17, 69, 'NO', 'NO', 'SEA', 4),
(83, 17, 34, 'NO', '2 BEDS', 'SEA', 3),
(84, 17, 122, 'YES', 'DOOR', 'NO', 2),
(85, 17, 87, 'NO', 'NO', 'NO', 1),
(86, 18, 68, 'NO', 'DOOR', 'SEA', 5),
(87, 18, 69, 'NO', 'NO', 'SEA', 4),
(88, 18, 34, 'NO', '2 BEDS', 'SEA', 3),
(89, 18, 122, 'YES', 'DOOR', 'NO', 2),
(90, 18, 87, 'NO', 'NO', 'NO', 1),
(91, 19, 68, 'NO', 'DOOR', 'SEA', 5),
(92, 19, 69, 'NO', 'NO', 'SEA', 4),
(93, 19, 34, 'NO', '2 BEDS', 'SEA', 3),
(94, 19, 122, 'YES', 'DOOR', 'NO', 2),
(95, 19, 87, 'NO', 'NO', 'NO', 1),
(96, 20, 68, 'NO', 'DOOR', 'SEA', 5),
(97, 20, 69, 'NO', 'NO', 'SEA', 4),
(98, 20, 34, 'NO', '2 BEDS', 'SEA', 3),
(99, 20, 122, 'YES', 'DOOR', 'NO', 2),
(100, 20, 87, 'NO', 'NO', 'NO', 1),
(101, 21, 68, 'NO', 'DOOR', 'SEA', 5),
(102, 21, 69, 'NO', 'NO', 'SEA', 4),
(103, 21, 34, 'NO', '2 BEDS', 'SEA', 3),
(104, 21, 122, 'YES', 'DOOR', 'NO', 2),
(105, 21, 87, 'NO', 'NO', 'NO', 1),
(106, 22, 68, 'NO', 'DOOR', 'SEA', 5),
(107, 22, 69, 'NO', 'NO', 'SEA', 4),
(108, 22, 34, 'NO', '2 BEDS', 'SEA', 3),
(109, 22, 122, 'YES', 'DOOR', 'NO', 2),
(110, 22, 87, 'NO', 'NO', 'NO', 1),
(111, 23, 68, 'NO', 'DOOR', 'SEA', 5),
(112, 23, 69, 'NO', 'NO', 'SEA', 4),
(113, 23, 34, 'NO', '2 BEDS', 'SEA', 3),
(114, 23, 122, 'YES', 'DOOR', 'NO', 2),
(115, 23, 87, 'NO', 'NO', 'NO', 1),
(116, 24, 68, 'NO', 'DOOR', 'SEA', 5),
(117, 24, 69, 'NO', 'NO', 'SEA', 4),
(118, 24, 34, 'NO', '2 BEDS', 'SEA', 3),
(119, 24, 122, 'YES', 'DOOR', 'NO', 2),
(120, 24, 87, 'NO', 'NO', 'NO', 1),
(121, 25, 68, 'NO', 'DOOR', 'SEA', 5),
(122, 25, 69, 'NO', 'NO', 'SEA', 4),
(123, 25, 34, 'NO', '2 BEDS', 'SEA', 3),
(124, 25, 122, 'YES', 'DOOR', 'NO', 2),
(125, 25, 87, 'NO', 'NO', 'NO', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `phonenum`
--

CREATE TABLE `phonenum` (
  `Hotel_ID` int(11) NOT NULL,
  `PhoneNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `phonenum`
--

INSERT INTO `phonenum` (`Hotel_ID`, `PhoneNum`) VALUES
(1, 2103476402),
(2, 2102222201),
(3, 2102222202),
(4, 2102222203),
(5, 2102222212),
(6, 2102222213),
(7, 2102222211),
(8, 2102222223),
(9, 2102222224),
(10, 2102222265),
(11, 2102222298),
(12, 2102222287),
(13, 2102222207),
(14, 2102222208),
(15, 2102222311),
(16, 2102222312),
(17, 2102222132),
(18, 2102222257),
(19, 2102222256),
(20, 2102222255),
(21, 2102222254),
(22, 2102222253),
(23, 2102222252),
(24, 2102222251),
(25, 2102222250);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `phonenumgroup`
--

CREATE TABLE `phonenumgroup` (
  `Hotel_Group_ID` int(11) NOT NULL,
  `PhoneNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `phonenumgroup`
--

INSERT INTO `phonenumgroup` (`Hotel_Group_ID`, `PhoneNum`) VALUES
(1, 2103176402),
(2, 2106060821),
(3, 2106060231),
(4, 2101582132),
(5, 2105051244);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rents`
--

CREATE TABLE `rents` (
  `Start_Date` date NOT NULL,
  `Room_ID` int(11) NOT NULL,
  `E_IRS_Number` int(11) NOT NULL,
  `C_IRS_Number` int(11) NOT NULL,
  `Finish_Date` date NOT NULL,
  `Pay_amount` int(11) NOT NULL,
  `Pay_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `rents`
--

INSERT INTO `rents` (`Start_Date`, `Room_ID`, `E_IRS_Number`, `C_IRS_Number`, `Finish_Date`, `Pay_amount`, `Pay_method`) VALUES
('2018-02-13', 38, 33, 3115088, '2018-09-19', 1500, 'Cash'),
('2018-05-16', 7, 33, 3115088, '2018-05-22', 1500, 'Paypal');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `reserves`
--

CREATE TABLE `reserves` (
  `C_IRS_Number` int(11) NOT NULL,
  `Room_ID` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `Paid` varchar(20) NOT NULL,
  `Finish_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `reserves`
--

INSERT INTO `reserves` (`C_IRS_Number`, `Room_ID`, `Start_Date`, `Paid`, `Finish_Date`) VALUES
(3115088, 1, '2099-02-13', 'NO', '2100-09-14'),
(3115088, 7, '2018-05-16', 'YES', '2018-05-22'),
(3115088, 38, '2018-02-13', 'NO', '2018-09-19'),
(3115088, 40, '2018-06-15', 'NO', '2018-06-21'),
(3115125, 4, '2018-06-15', 'NO', '2018-06-20'),
(3115125, 6, '2018-06-14', 'NO', '2018-06-21'),
(3115125, 11, '1999-03-12', 'NO', '2025-09-15'),
(3115125, 12, '1999-03-14', 'NO', '2025-09-15'),
(3115125, 23, '2019-09-27', 'NO', '2019-12-14'),
(3115125, 31, '1999-03-14', 'NO', '2025-09-15'),
(3115125, 102, '2018-04-20', 'NO', '2018-04-27'),
(3151082, 1, '2018-06-14', 'NO', '2018-06-19');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `works`
--

CREATE TABLE `works` (
  `IRS_Number` int(11) NOT NULL,
  `Hotel_ID` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Finish_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `works`
--

INSERT INTO `works` (`IRS_Number`, `Hotel_ID`, `Start_Date`, `Position`, `Finish_Date`) VALUES
(23, 16, '2018-01-08', 'MANAGER', '0000-00-00'),
(33, 9, '2018-03-05', 'MANAGER', '0000-00-00'),
(1131, 5, '2018-05-04', 'MANAGER', '0000-00-00'),
(1231, 1, '2018-03-12', 'MANAGER', '3000-01-01'),
(5553, 2, '2018-02-05', 'MANAGER', '3000-01-01'),
(8787, 25, '2018-02-05', 'MANAGER', '3000-00-00'),
(23021, 17, '2018-02-04', 'MANAGER', '0000-00-00'),
(23421, 15, '2018-02-04', 'MANAGER', '0000-00-00'),
(24929, 11, '2018-02-05', 'MANAGER', '0000-00-00'),
(43242, 6, '2018-02-05', 'MANAGER', '0000-00-00'),
(43431, 13, '2018-02-12', 'MANAGER', '0000-00-00'),
(54665, 18, '2018-05-01', 'MANAGER', '0000-00-00'),
(77897, 12, '2018-03-20', 'MANAGER', '0000-00-00'),
(112111, 10, '2018-01-07', 'MANAGER', '0000-00-00'),
(123211, 22, '2018-03-12', 'MANAGER', '0000-00-00'),
(123232, 8, '2018-04-10', 'MANAGER', '0000-00-00'),
(223434, 20, '2018-02-12', 'MANAGER', '0000-00-00'),
(432423, 24, '2018-03-04', 'MANAGER', '0000-00-00'),
(787867, 14, '2018-03-05', 'MANAGER', '0000-00-00'),
(2302032, 7, '2018-04-10', 'MANAGER', '0000-00-00'),
(2323212, 19, '2018-02-05', 'MANAGER', '0000-00-00'),
(3115063, 3, '2018-05-02', 'MANAGER', '0000-00-00'),
(3115120, 21, '2018-02-05', 'MANAGER', '0000-00-00'),
(3123123, 4, '2018-05-03', 'MANAGER', '0000-00-00'),
(9220203, 23, '2018-04-03', 'MANAGER', '0000-00-00');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`Amenities`,`Room_ID`),
  ADD KEY `amenities_ibfk_1` (`Room_ID`);

--
-- Ευρετήρια για πίνακα `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IRS_Number`);

--
-- Ευρετήρια για πίνακα `emailaddress`
--
ALTER TABLE `emailaddress`
  ADD PRIMARY KEY (`Hotel_ID`) USING BTREE;

--
-- Ευρετήρια για πίνακα `emailaddressgroup`
--
ALTER TABLE `emailaddressgroup`
  ADD PRIMARY KEY (`Hotel_Group_ID`) USING BTREE;

--
-- Ευρετήρια για πίνακα `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`IRS_Number`);

--
-- Ευρετήρια για πίνακα `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_ID`),
  ADD KEY `hotel_ibfk_1` (`Hotel_Group_ID`);

--
-- Ευρετήρια για πίνακα `hotelgroup`
--
ALTER TABLE `hotelgroup`
  ADD PRIMARY KEY (`Hotel_Group_ID`);

--
-- Ευρετήρια για πίνακα `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`Room_ID`),
  ADD KEY `hotelroom_ibfk_1` (`Hotel_ID`);

--
-- Ευρετήρια για πίνακα `phonenum`
--
ALTER TABLE `phonenum`
  ADD PRIMARY KEY (`Hotel_ID`) USING BTREE;

--
-- Ευρετήρια για πίνακα `phonenumgroup`
--
ALTER TABLE `phonenumgroup`
  ADD PRIMARY KEY (`Hotel_Group_ID`) USING BTREE;

--
-- Ευρετήρια για πίνακα `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`Start_Date`,`Room_ID`),
  ADD KEY `E_IRS_Number` (`E_IRS_Number`,`C_IRS_Number`),
  ADD KEY `rents_ibfk_1` (`Room_ID`),
  ADD KEY `rents_ibfk_2` (`C_IRS_Number`),
  ADD KEY `Finish_Date` (`Finish_Date`);

--
-- Ευρετήρια για πίνακα `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`C_IRS_Number`,`Room_ID`,`Start_Date`),
  ADD KEY `reserves_ibfk_2` (`Room_ID`),
  ADD KEY `Start_Date` (`Start_Date`,`Finish_Date`),
  ADD KEY `Finish_Date` (`Finish_Date`);

--
-- Ευρετήρια για πίνακα `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`IRS_Number`,`Hotel_ID`),
  ADD KEY `works_ibfk_2` (`Hotel_ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT για πίνακα `hotelgroup`
--
ALTER TABLE `hotelgroup`
  MODIFY `Hotel_Group_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `hotelroom`
--
ALTER TABLE `hotelroom`
  MODIFY `Room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `amenities`
--
ALTER TABLE `amenities`
  ADD CONSTRAINT `amenities_ibfk_1` FOREIGN KEY (`Room_ID`) REFERENCES `hotelroom` (`Room_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `emailaddress`
--
ALTER TABLE `emailaddress`
  ADD CONSTRAINT `emailaddress_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `hotel` (`Hotel_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `emailaddressgroup`
--
ALTER TABLE `emailaddressgroup`
  ADD CONSTRAINT `emailaddressgroup_ibfk_1` FOREIGN KEY (`Hotel_Group_ID`) REFERENCES `hotelgroup` (`Hotel_Group_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`Hotel_Group_ID`) REFERENCES `hotelgroup` (`Hotel_Group_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD CONSTRAINT `hotelroom_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `hotel` (`Hotel_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `phonenum`
--
ALTER TABLE `phonenum`
  ADD CONSTRAINT `phonenum_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `hotel` (`Hotel_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `phonenumgroup`
--
ALTER TABLE `phonenumgroup`
  ADD CONSTRAINT `phonenumgroup_ibfk_1` FOREIGN KEY (`Hotel_Group_ID`) REFERENCES `hotelgroup` (`Hotel_Group_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_ibfk_1` FOREIGN KEY (`Room_ID`) REFERENCES `hotelroom` (`Room_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_2` FOREIGN KEY (`C_IRS_Number`) REFERENCES `customer` (`IRS_Number`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_3` FOREIGN KEY (`E_IRS_Number`) REFERENCES `employee` (`IRS_Number`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_4` FOREIGN KEY (`Start_Date`) REFERENCES `reserves` (`Start_Date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_5` FOREIGN KEY (`Finish_Date`) REFERENCES `reserves` (`Finish_Date`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`C_IRS_Number`) REFERENCES `customer` (`IRS_Number`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `hotelroom` (`Room_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_ibfk_1` FOREIGN KEY (`IRS_Number`) REFERENCES `employee` (`IRS_Number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `works_ibfk_2` FOREIGN KEY (`Hotel_ID`) REFERENCES `hotel` (`Hotel_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
