-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 05:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be19_cr4_natasacvrlja_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be19_cr4_natasacvrlja_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be19_cr4_natasacvrlja_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(200) NOT NULL,
  `isbn` int(30) NOT NULL,
  `type` varchar(225) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `author_firstName` varchar(50) NOT NULL,
  `author_lastName` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_addres` varchar(50) NOT NULL,
  `publisher_date` int(11) NOT NULL,
  `availability` enum('Available','Reserved') NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `isbn`, `type`, `short_description`, `author_firstName`, `author_lastName`, `publisher_name`, `publisher_addres`, `publisher_date`, `availability`) VALUES
(3, 'Dance Dance Dance', 'dance.jpg', 2147483647, 'Book', 'High-class call girls billed to Mastercard. A psychic 13-year-old dropout with a passion for Talking Heads. A hunky matinee idol doomed to play dentists and teachers. A one-armed beach-combing poet, an uptight hotel clerk and one very bemused narrato', 'Haruki', 'Murakami', 'Goodreads', 'Clement street 3, 8723', 1999, 'Reserved'),
(4, 'Dear life', 'life.webp', 2147483647, 'Book', 'Suffused with Munros clarity of vision and her unparalleled gift for storytelling, these tales about departures and beginnings, accidents and dangers, and outgoings and homecomings both imagined and real, paint a radiant, indelible portrait of how st', 'Alice', 'Munro', 'Goodreads', 'Thimnings street 214, 63221', 2010, 'Reserved'),
(5, 'Moll Flanders', 'flanders.jpg', 2147483647, 'Book', 'The Fortunes & Misfortunes of the Famous Moll Flanders (aka Moll Flanders) is a novel by Daniel Defoe, first published in 1722. It purports to be the true account of the life of the eponymous Moll, detailing her exploits from birth until old age.', 'Daniel', 'Defoe', 'Goodreads', 'Thimnings street 214, 63221', 1722, 'Available'),
(6, 'Doppel-CD', 'doppel.jpg', 11232823, 'CD', 'The most popular music on one CD, you will get 20 newest songs', 'Arturo', 'Himmer', 'Edition DUX', 'Welchester street 41-43, 04122', 1987, 'Available'),
(7, 'Sound of Freedom', 'freedom.jpg', 32117823, 'DVD', 'Sound of Freedom is an effective and suspenseful call to action against human trafficking, yet not free of issues in its depiction of the sensitive subject matter.', 'Alejandro', 'Monteverde', 'Angel Studios', 'Stunnings 74/6, 1425', 2023, 'Available'),
(8, 'Insidious: The Red Door', 'insidious.jpg', 21444623, 'DVD', 'Earlier installments have had their moments, but behind Insidious: The Red Door lies the disappointing denouement of a once-frightening franchise.', 'Patrick', 'Wilson', 'Screen Gems', 'Polintings street 152, 3621', 2023, 'Available'),
(9, 'Elemental', 'elemental.jpg', 214111223, 'DVD', 'Disney and Pixars ', 'Peter', 'Sohn', 'Disney/Pixar', 'Park Avenue Emeryville, 94608', 2023, 'Available'),
(10, 'Bird Box Barcelona', 'birdbox.jpg', 32211223, 'DVD', 'After a mysterious force decimates the worlds population, Sebastian must navigate his own survival journey through the desolate streets of Barcelonan.', 'David', 'Pastor', 'Netflix', 'Winchester Circle Los Gatos, 95032', 2023, 'Available'),
(12, 'Lord of The Rings', 'lord.jpg', 2147483647, 'Book', 'LLLmmmmmmmnsannanaaksknsksnks', 'JJ', 'T', 'Goodreads', 'Street 23', 1972, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
