-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 02:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`id`, `name`, `username`, `password`, `confirm_password`, `phone_no`, `email`, `address`) VALUES
(1, 'Summy Singhsfdadsf', 'dsfa', '123456', '123456', '2147483647', 'summysingh86@rediffmail.com', '203,Prime Point Apartment, Dilip Nagar,Nani Daman,Daman'),
(3, 'Irene Wise', 'jobol', 'Pa$$w0rd!', 'Pa$$w0rd!', '+432-27-8185380', 'ryhisa@mailinator.net', 'Dolorem voluptate perspiciatis fugiat beatae perferendis id ullamco veniam fugiat accusamus reprehen'),
(4, 'Irene Wise', 'jobol', 'Pa$$w0rd!', 'Pa$$w0rd!', '+432-27-8185380', 'ryhisa@mailinator.net', 'Dolorem voluptate perspiciatis fugiat beatae perferendis id ullamco veniam fugiat accusamus reprehen'),
(5, 'Irene Wise', 'jobol', 'Pa$$w0rd!', 'Pa$$w0rd!', '+432-27-8185380', 'ryhisa@mailinator.net', 'Dolorem voluptate perspiciatis fugiat beatae perferendis id ullamco veniam fugiat accusamus reprehen'),
(7, 'Kirestin Russell', 'zykidaqidi', 'Pa$$w0rd!', 'Pa$$w0rd!', '+415-62-2731069', 'fiperihe@mailinator.com', 'Maiores cupiditate quo quas voluptatem Sed omnis nihil reprehenderit vitae corrupti sint laudantium '),
(8, 'Summy Singh', 'summy', 'summy', 'summy', '9724128496', 'summysingh86@rediffmail.com', '203,Prime Point Apartment, Dilip Nagar,Nani Daman,Daman'),
(9, 'Summy Singh', 'summy', 'summy', 'summy', '9724128496', 'summysingh86@rediffmail.com', '203,Prime Point Apartment, Dilip Nagar,Nani Daman,Daman'),
(10, 'Jeremy Schneider', 'ruvyrapulu', 'Pa$$w0rd!', 'Pa$$w0rd!', '+846-30-3995558', 'rebo@mailinator.com', 'Tempore saepe deserunt voluptatum earum necessitatibus ut esse'),
(11, 'Thomas Noel', 'xacag', 'Pa$$w0rd!', 'Pa$$w0rd!', '+816-58-1525649', 'gonykyde@mailinator.net', 'Quidem est sed ducimus perspiciatis laboris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
