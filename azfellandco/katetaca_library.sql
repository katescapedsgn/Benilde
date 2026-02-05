-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2019 at 06:01 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katetaca_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`) VALUES
(1, 'Sally', 'Meyers'),
(2, 'George', 'Smith'),
(3, 'Peter', 'Gabriel'),
(4, 'Dale', 'Mercer'),
(5, 'Neil', 'Gaiman'),
(6, 'Terry', 'Pratchett'),
(7, 'V.E.', 'Schwab'),
(8, 'Erin', 'Morgenstern'),
(9, 'George R. R.', 'Martin'),
(10, 'Amanda', 'Foody'),
(11, 'Sharon', 'Shinn'),
(12, 'Andrew', 'Rowe'),
(13, 'David', 'Mitchell'),
(14, 'Stephanie', 'Garber'),
(15, 'Alison', 'Goodman'),
(16, 'Rachel', 'Hauck'),
(17, 'Jane', 'Austen');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(4) NOT NULL,
  `title` text NOT NULL,
  `author` int(4) NOT NULL,
  `type_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `type_id`) VALUES
(1, 'A Long Day in Spring', 3, 1),
(2, 'Fifteen Hours in March', 2, 2),
(3, 'Green Trees Go Wild', 1, 3),
(4, 'And Then It Happened', 1, 1),
(5, 'Missing in Action', 5, 2),
(6, 'Fourteen Days in February', 2, 2),
(7, 'Good Omens', 5, 13),
(8, 'Discworld', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(4) NOT NULL,
  `type_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'History'),
(2, 'Suspense'),
(3, 'Science Fiction'),
(4, 'Fantasy'),
(5, 'Historical'),
(6, 'Mystery'),
(7, 'Royalty'),
(8, 'Espionage'),
(9, 'Horror'),
(10, 'Paranormal'),
(11, 'Supernatural'),
(12, 'Mythology'),
(13, 'Humour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
