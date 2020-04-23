-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 10:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `ID` int(100) NOT NULL,
  `Author Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Title`, `Author`, `Image`, `Date`, `Category`, `Description`, `ID`, `Author Image`) VALUES
('Automation: 10 things it can do for your busi...', 'Holly Leech', 'article-1.jpg', '2020-03-06', 'Insights', 'Do you feel like you spend your 9-5 working day completing administration tasks? Are you always ch...', 1, 'author-1.jpg'),
('February 2020 Notable Employee', 'Netmatters Ltd', 'article-2.jpg', '2020-03-05', 'News', 'It\'s the beginning of March which means only one thing here at Netmatters - announcing the win...', 2, 'author-2.png'),
('Coronavirus: Our Plan', 'Netmatters Ltd', 'article-3.jpg', '2020-03-05', 'News', 'The government is predicting that it is highly likely we will see a significant expansion in the n...', 3, 'author-2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
