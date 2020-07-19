-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 03:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `amount_deposited` int(11) NOT NULL,
  `total_revenue` int(11) NOT NULL,
  `generated_revenue` int(11) NOT NULL,
  `deposit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `amount_deposited`, `total_revenue`, `generated_revenue`, `deposit_date`) VALUES
(31, 100, 200, 100, '2019-07-09 12:00:00'),
(32, 500, 1432, 932, '2019-07-10 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `password`, `last_login`, `is_superuser`, `username`, `first_name`, `last_name`, `gender`, `email`, `profile_picture`, `is_staff`, `is_active`, `date_joined`) VALUES
(30, '57dc303a4fda622afa82a8fe7a889dfbebfd33acdba3ab00e377a11395f2610d', '2019-07-10 13:27:13.000000', 0, 'philkent', 'Philip', 'Mupfurutsa', 'Male', 'pmupfurutsa@axissol.com', 'user.png', 0, 0, '2019-07-10 11:02:10.000000'),
(31, '57dc303a4fda622afa82a8fe7a889dfbebfd33acdba3ab00e377a11395f2610d', '2019-07-12 14:56:27.000000', 0, 'Tee_Franklin', 'Tinotenda', 'Ndaipa', 'Male', 'tndaipa@gmail.com', '31_avatar1_small.jpg', 0, 0, '2019-07-10 11:05:06.000000'),
(32, '57dc303a4fda622afa82a8fe7a889dfbebfd33acdba3ab00e377a11395f2610d', '2019-07-12 14:59:36.000000', 0, 'towernter', 'Tawanda', 'Nyahuye', 'Male', 'tnyahuye@axissol.com', '32_32_t0.jpg', 0, 0, '2019-07-10 13:38:03.000000'),
(33, '57dc303a4fda622afa82a8fe7a889dfbebfd33acdba3ab00e377a11395f2610d', '2019-07-10 13:49:27.000000', 0, 'chana_chamhamha', 'Mwana', 'Wamai', 'Male', 'mwanawamai@gmail.com', 'user.png', 0, 0, '2019-07-10 13:49:02.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
