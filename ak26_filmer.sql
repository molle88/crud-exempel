-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20260814.7ff5dd5b7e
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2026 at 09:19 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ak26_filmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `sedda_filmer`
--
CREATE TABLE `sedda_filmer` (
  `id` int NOT NULL,
  `namn` varchar(255) NOT NULL,
  `beskrivning` text NOT NULL,
  `datum` date NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sedda_filmer`
--

INSERT INTO `sedda_filmer` (`id`, `namn`, `beskrivning`, `datum`, `kategori`) VALUES
(1, 'The Dog Stars9999', 'The Dog Stars is a 2026 post-apocalyptic action thriller film directed and produced by Ridley Scott, from a screenplay by Mark L. Smith, based on the 2012 novel by Peter Heller. The film stars Jacob Elordi, Josh Brolin, Margaret Qualley, and Guy Pearce, and follows the survivors of a global flu pandemic in rural Colorado.  The Dog Stars premiered at the Odeon Luxe Leicester Square on August 20, 2026, and was released in the United States by 20th Century Studios on August 28. The film received mixed reviews from critics, and was a box-office bomb, grossing only $39 million against a production budget of $70–110 million.', '2026-10-31', 'Post-apocalypse'),
(3, 'Interstellar', 'Interstellar is a 2014 epic[b] science fiction drama film[1][9] directed by Christopher Nolan, who co-wrote the screenplay with his brother, Jonathan Nolan. It features an ensemble cast led by Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, and Michael Caine. Set in a dystopian future where Earth is suffering from catastrophic blight and famine, the film follows a group of astronauts who travel through space in search of a new home for humanity.', '2026-09-01', 'Sci-fi'),
(4, 'The Matrix', 'The Matrix is a 1999 science fiction–action film written and directed by the Wachowskis.[a] The first installment in the Matrix film series, it stars Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, and Joe Pantoliano. The film follows a disillusioned computer hacker Neo (Reeves) who discovers that the life he knows is an elaborate deception created by intelligent machines. He is recruited by underground insurgents Morpheus (Fishburne) and Trinity (Moss), to join the rebellion against the machines.', '2016-11-08', 'Sci-fi'),
(5, 'The Terminal', 'Tom hanks is stranded in a terminal, without a passport.', '2000-01-01', 'Drama'),
(6, 'Vertigo', 'ASDS', '2026-03-11', 'Triller'),
(7, 'asdf', 'asd', '2026-11-26', 'asd'),
(8, 'asdasd', 'asd', '2026-11-28', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sedda_filmer`
--
ALTER TABLE `sedda_filmer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sedda_filmer`
--
ALTER TABLE `sedda_filmer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
