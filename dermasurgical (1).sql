-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2023 at 09:34 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dermasurgical`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `CIN_Doc` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) NOT NULL,
  `Specialty` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Profile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date` datetime NOT NULL,
  `SocialMedia` varchar(70) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`CIN_Doc`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`CIN_Doc`, `FullName`, `Specialty`, `Email`, `PhoneNumber`, `password`, `Profile`, `Date`, `SocialMedia`, `photo`) VALUES
(1, 'DR. Cat Begovic.', 'plastic surgeon', 'help@beautybydrcat.com', '424-377-0385', 'wsde34r5tgr', 'Dr. Cat is the leading board-certified plastic surgeon in Beverly Hills. She helps women find. confidence through refined & natural-looking plastic surgery.‏‏\r\n', '2023-04-30 11:44:36', 'https://www.instagram.com/beautybydrcat/', 'photos/DR cat.jpg'),
(2, 'DR. Alfredo Hoyos', 'plastic surgeon', 'hello@alfredohoyos.com', ' (+57) 317-437-3717', 'zsw345tfnju', 'He is not just a plastic surgeon, he is considered an artist with the ability to build curves and sculpt muscles. He is the author of several books and scientific articles that have made known the innovations and new technologies that today work efficiently in body contouring procedures. With his new perspective of modern medicine, he found the relationship between art and human anatomy and gave life to different techniques such as the technique of High Definition Liposculpture that has revolutionized traditional liposuction, and which has led to the creation of beautiful and contoured bodies.\r\n\r\n', '2023-04-30 11:44:36', 'https://www.instagram.com/alfredohoyosmd/', 'photos/DR. Alfredo.jpg'),
(3, 'DR. Harrison H lee', 'Plastic Surgeon', 'HarrisonHlee@gmail.com', '3105982648', 'fvbhjui8976tr5f', 'Harrison H Lee is a bi-coastal triple board- certified plastic surgeon. He is a leading expert in facial bone contouring - V line surgery and an internationally recognized expert in facial feminization surgery and facelift. Offering a complete range of surgery for all patients,‏‏\r\n', '2023-04-30 12:14:53', 'https://www.instagram.com/drharrisonlee/', 'photos/DR. Harrison.jpg'),
(4, 'DR. John Peter Cole', 'Hair Transplant Surgeon', 'john@forhair.com', '8003684247', 'gvbhjkio9786ytre', 'A Diplomat of the American Board of Hair Restoration Surgery, Dr. Cole was among the first thirty physicians to achieve that honor.‏‏\r\n', '2023-04-30 12:14:53', 'https://www.instagram.com/johncole1485/', 'photos/DR. John.jpg'),
(5, 'DR. Rod J. Rohrich', 'plastic surgeon', 'RodJRohrich@gmail.com', '(214) 821-9114', 'mikju76yt5rfv', 'ROD J. ROHRICH, M.D. World renowned plastic surgeon, educator, and innovator. Named one of the most influential plastic surgeons in this century and repeatedly voted one of the best plastic surgeons in Dallas.‏‏\r\n', '2023-04-30 12:29:44', 'https://www.instagram.com/rod.rohrich/', 'photos/DR. Rod .jpeg'),
(6, 'Dr. Ergin Er', 'plastic surgeon and hair transplant surgeon', 'info@drerginer.com', '+44 131 507 0774', 'gfr4567ujh', 'With a background of 25 years in plastic surgery, Dr. Ergin Er. is a famous Turkish surgeon who is currently associated with Istanbul Aesthetic Center. He has extensive knowledge in performing high-quality plastic surgery techniques with accuracy and precision. He is fluent in English and Turkish.', '2023-04-30 12:29:44', 'https://www.instagram.com/drerginer/', 'photos/Dr. Ergin.jpg'),
(7, 'admin', 'admin', 'admin@admin', '54 987 653', 'adminadmin', 'admin', '2023-05-02 14:09:45', 'admin', 'http://localhost/dermasurgical/photos/admin.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `CIN_P` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `PhoneNumber` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `appointments` datetime NOT NULL,
  PRIMARY KEY (`CIN_P`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`CIN_P`, `FullName`, `Email`, `PhoneNumber`, `appointments`) VALUES
(1, 'James Smith', 'JamesSmith@yahoo.fr', '12 345 345', '2023-04-30 14:01:04'),
(2, 'Michael Smith', 'MichaelSmith@gmail.com', '56 987 456', '2023-04-30 14:01:04'),
(3, 'Maria Asusena Susie Garcia', 'MariaGarcia@yahoo.fr', '87 098 654', '2023-04-30 14:04:35'),
(4, 'Robert Thomas ', 'RobertThomas@gmail.com', '65 875 987', '2023-04-30 14:04:35'),
(5, 'David Filmore', 'DavidFilmore@yahoo.fr', '87 654 098', '2023-04-30 14:06:49'),
(6, 'Mary Lou McNair', 'MaryMcNair@gmail.com', '89 876 234', '2023-04-30 14:06:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
