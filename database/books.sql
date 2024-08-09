-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 08:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotecha`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` int(20) NOT NULL DEFAULT current_timestamp(),
  `authorid` int(20) NOT NULL DEFAULT current_timestamp(),
  `title` text NOT NULL DEFAULT current_timestamp(),
  `bookid` int(20) NOT NULL DEFAULT current_timestamp(),
  `publication` date NOT NULL DEFAULT current_timestamp(),
  `genreid` int(20) NOT NULL DEFAULT current_timestamp(),
  `nocopies` int(100) NOT NULL DEFAULT current_timestamp(),
  `descriptions` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `authorid`, `title`, `bookid`, `publication`, `genreid`, `nocopies`, `descriptions`) VALUES
(1, 8843, 1109, 'The Game of thrones', 2292, '2024-08-03', 2143, 21, 'A book about love and war'),
(2, 1108, 3389, 'Cards', 2376, '2024-08-05', 9011, 27, 'A book about a very dangerous clown'),
(4, 6987, 8809, 'Earth', 4421, '2000-09-09', 2245, 23, 'This is a book about earth'),
(5, 9993, 1002, 'The Law', 4904, '2000-01-01', 4746, 43, 'A book about the law'),
(6, 5505, 2774, 'King', 8922, '2000-12-22', 1198, 12, 'A book about kings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
