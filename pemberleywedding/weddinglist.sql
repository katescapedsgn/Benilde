-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 09:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dma1_tacastacas`
--

-- --------------------------------------------------------

--
-- Table structure for table `weddinglist`
--

CREATE TABLE `weddinglist` (
  `ID` int(50) NOT NULL,
  `FIRSTNAME` text NOT NULL,
  `LASTNAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `GUEST` text NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddinglist`
--

INSERT INTO `weddinglist` (`ID`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `GUEST`, `MESSAGE`) VALUES
(0, 'melissa', '', 'mf@gmail.com', 'two', ''),
(0, 'Kate', '', 'ktacastacas1@gmail.com', 'zero', ''),
(0, 'Kate', 'Afable', 'kateafable@gmail.com', 'zero', ''),
(0, 'Eira', 'Smith', 'eirasmith@gmail.com', 'zero', ''),
(0, 'Neil', 'Gaiman', 'neilgaiman@gmail.com', 'zero', ''),
(0, 'John', 'Smith', 'johnsmith@gmail.com', 'one', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
