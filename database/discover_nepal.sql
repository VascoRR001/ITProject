-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 09:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discover_nepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exp_dest`
--

CREATE TABLE `tbl_exp_dest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_exp_dest`
--

INSERT INTO `tbl_exp_dest` (`id`, `title`, `images`, `short_desc`, `long_desc`, `added_date`, `modified_date`) VALUES
(1, 'LUMBINI', 'lumbini.jpg', 'Lumbini is Birth place of Lord Buddha. Lumbini is the foundation of world peace and pilgrimage for all peace loving people, bearing significance to the life, enlightenment and', 'Lumbini is Birth place of Lord Buddha. Lumbini is the foundation of world peace and pilgrimage for all peace loving people, bearing significance to the life, enlightenment and', '2021-03-29 00:00:00', '2021-03-29 00:00:00'),
(2, 'MOUNT EVEREST', 'everest.jpg', 'Mount Everest is Earth\'s highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. Its elevation of 8,849 m.', 'Mount Everest has two main climbing routes, the southeast ridge from Nepal and the north ridge from Tibet, as well as many other less frequently climbed routes Of the two main routes, the southeast ridge is technically easier and more frequently used. It was the route used by Edmund Hillary and Tenzing Norgay in 1953 and the first recognised of 15 routes to the top by 1996.', '2021-03-30 10:40:03', '0000-00-00 00:00:00'),
(4, 'POKHARA', 'pokhara.jpg', 'In Pokhara you can experience the excitement of adventure: boating, hiking, paragliding, bungee, zipline or simply relaxing at one of the several lakes in the valley. ', 'In recent decades, Pokhara has become a major tourist destination: it is considered the tourism capital of Nepal[6] in South Asia, mainly for adventure tourism and the base for the famous Annapurna Circuit trek. ', '2021-03-30 10:46:09', '0000-00-00 00:00:00'),
(5, 'PATAN', 'patan.jpg', 'It is one of the three Durbar Squares in the Kathmandu Valley. One of its attraction is the ancient royal palace where the Malla Kings of Lalitpur resided', 'It is one of the three Durbar Squares in the Kathmandu Valley. One of its attraction is the ancient royal palace where the Malla Kings of Lalitpur resided', '2021-03-31 19:49:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_date`, `modified_date`) VALUES
(1, 'sushmita', 'sushmi2468@gmail.com', '06709a6195d8c56f70424a85b9dbcfbc', '2021-03-29 13:45:01', NULL),
(2, 'rakshya', 'rakshya@gmmail.com', 'ef67c2416d8a1c294b2942dd77014d4f', '2021-03-29 17:08:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_exp_dest`
--
ALTER TABLE `tbl_exp_dest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_exp_dest`
--
ALTER TABLE `tbl_exp_dest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
