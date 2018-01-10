-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 10, 2018 at 11:27 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lyndsay_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `project_id` tinyint(3) UNSIGNED NOT NULL,
  `project_name` varchar(150) NOT NULL,
  `project_image1` varchar(150) NOT NULL,
  `project_image2` varchar(150) NOT NULL,
  `project_image3` varchar(150) NOT NULL,
  `project_description` varchar(500) NOT NULL,
  `bckgrd_class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_name`, `project_image1`, `project_image2`, `project_image3`, `project_description`, `bckgrd_class`) VALUES
(1, 'The Burrow Café', 'burrow_macbook_mockup.jpg', 'burrow_ipads_mockup.jpg', 'burrow_iphone_mockup.jpg', 'Responsive website designed for the Burrow Café. ', 'powder-blue'),
(2, 'London Youth Advisory Council', 'lyac_macbook_mockup.jpg', 'lyac_ipads_mockup.jpg', 'lyac_iphone_mockup.jpg', 'Responsive website designed for the LYAC.', 'light-purple'),
(3, 'Lord of the Rings', 'lotr_macbook_mockup.jpg', 'lotr_ipads_mockup.jpg', 'lotr_iphone_mockup.jpg', 'Responsive website designed for the Lord of the Rings.', 'teale'),
(4, 'Julio Jones', 'officialize_macbook_mockup.jpg', 'officialize_ipads_mockup.jpg', 'officialize_iphone_mockup.jpg', 'Responsive website designed for Julio Jones.', 'dark-purple'),
(5, 'Infinito', 'infinito_macbook_mockup.jpg', 'infinito_ipads_mockup.jpg', 'infinito_iphone_mockup.jpg', 'Responsive website designed for the Infinito.', 'powder-blue'),
(6, 'Evolution Fitness and Nutrition', 'evolution_macbook_mockup.jpg', 'evolution_ipads_mockup.jpg', 'evolution_iphone_mockup.jpg', 'Responsive website designed for the Evolution.', 'light-purple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
