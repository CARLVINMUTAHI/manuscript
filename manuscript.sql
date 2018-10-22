-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 12:32 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manuscript`
--

-- --------------------------------------------------------

--
-- Table structure for table `manuscripts`
--

CREATE TABLE `manuscripts` (
  `Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(255) NOT NULL,
  `Book_Category` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Synopsis` varchar(3000) NOT NULL,
  `Book` varchar(1000) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manuscripts`
--

INSERT INTO `manuscripts` (`Book_ID`, `Book_Name`, `Book_Category`, `Author`, `Synopsis`, `Book`, `Image`, `Year`) VALUES
(1, 'The English Spy', 'Drama', 'Daniel Silva', 'The target is royal.\r\nThe game is revenge.\r\nStretched topless upon the foredeck, drink in hand, her flawless skin baking in the sun, was the most famous woman in the world. And one deck below, preparing an appetizer of tuna tartare, cucumber, and pineapple, was the man who was going to kill her. . . .\r\nShe is an iconic member of the British Royal Family, beloved for her beauty and charitable works, resented by her former husband and his mother, the Queen of England. But when a bomb explodes aboard her holiday yacht, British intelligence turns to one man to track down her killer: legendary spy and assassin Gabriel Allon.\r\nGabriel’s target is Eamon Quinn, a master bomb maker and mercenary of death who sells his services to the highest bidder. Quinn is an elusive man of the shadows—”a whisper in a half-lit chapel, a loose thread at the hem of a discarded garment”—but fortunately Gabriel does not pursue him alone. At his side is Christopher Keller, a British commando turned professional assassin who knows Quinn’s murderous handiwork all too well.\r\nThe English Spy moves at light speed from the glamorous island of Saint Barthélemy to the mean streets of West Belfast to a cottage atop the cliffs of Cornwall that Gabriel holds dear. And though he does not realize it, he is stalking an old enemy—a cabal of evil that wants nothing more than to see him dead. Gabriel will find it necessary to oblige them, for when a man is out for vengeance, death has its distinct advantages.\r\nFilled with breathtaking twists, The English Spy will hold readers spellbound from its riveting opening passages to its heart-stopping conclusion. It is a timely reminder that there are some men in the world who will stop at nothing to achieve their goals. And it proves once again why Daniel Silva is regarded as his generation’s finest writer of international thrillers', 'TheEnglishSpy.pdf', 'book10.jpg', 2018),
(2, 'The Naked and the Dead', 'Thriller', 'Norman Mailer', 'The article proposes a hermeneutic approach to the films of M. Night Shyamalan based on a study of the convergence of three parallel processes: the detailed use of planning and, most of all, the shotcountershot, and the dialectic between field and out of field, the open construction of otherness; and, lastly, the narrative motif of the dead person who returns. The director manages to link those three aspects with a detailed investigation into the possibilities of the fantastic genre in order to metaphorically approach the problems of contemporary society and a new involvement of the viewer in the suspension of disbelief required by fiction.', 'thenakedandthedead.pdf', 'book12.jpg', 2014),
(3, 'The Fault in Our Stars', 'Romance', 'John Green', 'The Fault In Our Stars is a fabulous book about a young teenage girl who has been diagnosed with lung cancer and attends a cancer support group.\r\nHazel is 16 and is reluctant to go to the support group, but she soon realises that it was a good idea. Hazel meets a young boy named Augustus Waters. He is charming and witty. Augustus has had osteosarcoma, a rare form of bone cancer, but has recently had the all clear.\r\nHazel and Augustus embark on a roller coaster ride of emotions, including love, sadness and romance, while searching for the author of their favourite book. They travel to Amsterdam in search of Peter Van Houten the author of An Imperial Affliction. While on their trip Augustus breaks some heartbreaking news to Hazel and both of their worlds fall apart around them.\r\nIf you enjoy young adult books, full of witty humour and heartbreaking events, this book is perfect for you. Expect to laugh, cry and smile throughout this masterpiece by the amazing John Green. I highly recommend this book.', 'thefaultinourstars.pdf', 'book13.png', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `User_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`User_ID`, `Book_ID`, `Rating`, `Comment`) VALUES
(1, 1, 4, 'Very Interesting'),
(1, 0, 5, 'Nice Book'),
(1, 1, 5, '18000'),
(1, 1, 5, 'krimino'),
(1, 1, 5, 'raaah'),
(1, 1, 5, 'raaah'),
(1, 1, 5, 'raaah'),
(1, 1, 2, 'Hahaha'),
(1, 1, 2, 'Hahaha'),
(1, 1, 2, 'Hahaha'),
(1, 1, 5, '667'),
(1, 1, 5, 'haha'),
(1, 2, 3, 'haha'),
(1, 1, 3, ''),
(1, 1, 4, 'Good Book');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_type` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Username`, `Password`, `User_type`) VALUES
(1, 'Lewis_The_Reader', '12345', 'Reader');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manuscripts`
--
ALTER TABLE `manuscripts`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manuscripts`
--
ALTER TABLE `manuscripts`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
