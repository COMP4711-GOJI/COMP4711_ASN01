-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 05:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panda`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('29avobmk9kevs7km4i2pajjgc451bqus', '127.0.0.1', 1491178530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313137383532383b),
('5o2riflf3jc7t9dafcveeu536k0n5m5o', '127.0.0.1', 1491182505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138323434323b),
('7gn6g8cbs22ro4tm0g1k8h1evgksbpud', '127.0.0.1', 1491187760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138373530373b75736572726f6c657c733a31303a2273757065727669736f72223b),
('842hc5fo6oq3n87hu0ma5uts6pr5mj7e', '127.0.0.1', 1491177510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313137373231363b),
('a20ss1ag4r0df5hv54h1u7db1jil7rh2', '127.0.0.1', 1491184202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138343137353b),
('bth94manbvglui0rf5l9rr51pfiqmr70', '127.0.0.1', 1491185033, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138353032303b75736572726f6c657c733a363a22776f726b6572223b),
('hacj50ga5fogofjvkt9tkmplal87tsf8', '127.0.0.1', 1491177627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313137373632373b),
('lgqmc2h49p1ujk45p4310v85491paioo', '127.0.0.1', 1491186022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138353732383b75736572726f6c657c733a343a22626f7373223b),
('lj06188u4gbusha2f46gui4ok1rkfj5n', '127.0.0.1', 1491188296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138373939363b75736572726f6c657c733a363a22776f726b6572223b),
('pkdana5copbh94kjc4410lr263md594m', '127.0.0.1', 1491183291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313138333135353b),
('qidcqbm6jv5enlmvaag575h00nac5pgs', '127.0.0.1', 1491178334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313137383034393b);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `cacode` varchar(8) NOT NULL,
  `model` varchar(8) NOT NULL,
  `piece` int(1) NOT NULL,
  `plant` varchar(20) NOT NULL,
  `stamp` datetime NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`cacode`, `model`, `piece`, `plant`, `stamp`, `available`) VALUES
('100c30', 'a', 2, 'goji', '2017-04-03 00:07:30', 0),
('101d6b', 'b', 2, 'goji', '2017-04-03 00:12:13', 0),
('10605a', 'r', 2, 'goji', '2017-04-02 20:52:52', 0),
('106d6a', 'b', 1, 'goji', '2017-04-03 00:15:30', 0),
('10a853', 'm', 1, 'goji', '2017-04-02 20:52:52', 0),
('110a17', 'a', 2, 'goji', '2017-04-02 23:17:42', 0),
('11e74c', 'r', 3, 'goji', '2017-04-03 00:07:44', 0),
('13488f', 'c', 3, 'goji', '2017-04-02 20:52:52', 0),
('13b9d0', 'a', 1, 'goji', '2017-04-02 22:55:03', 0),
('13d1da', 'w', 1, 'goji', '2017-04-03 00:07:30', 0),
('13dc9f', 'c', 1, 'goji', '2017-04-03 00:12:13', 0),
('1475a2', 'b', 3, 'goji', '2017-04-03 00:12:13', 0),
('1476c4', 'c', 2, 'goji', '2017-04-03 00:07:44', 0),
('14ed1d', 'b', 1, 'goji', '2017-04-03 00:15:30', 0),
('15045b', 'm', 2, 'goji', '2017-04-03 00:08:18', 0),
('1660fb', 'w', 3, 'goji', '2017-04-02 20:52:52', 0),
('170667', 'c', 3, 'goji', '2017-04-02 23:57:37', 0),
('17795e', 'r', 2, 'goji', '2017-04-03 00:07:30', 0),
('189e4f', 'w', 3, 'goji', '2017-04-03 00:15:30', 0),
('18b543', 'a', 3, 'goji', '2017-04-02 23:57:37', 0),
('190a19', 'b', 3, 'goji', '2017-04-02 23:17:42', 0),
('19525a', 'c', 1, 'goji', '2017-04-02 23:58:25', 0),
('19952b', 'c', 1, 'goji', '2017-04-02 20:52:52', 0),
('19bd78', 'r', 2, 'goji', '2017-04-02 23:58:25', 0),
('19cdad', 'm', 1, 'goji', '2017-04-03 00:08:18', 0),
('1c6501', 'a', 1, 'goji', '2017-04-03 00:08:18', 0),
('1c9a68', 'b', 3, 'goji', '2017-04-03 00:07:30', 0),
('1cd500', 'm', 2, 'goji', '2017-04-02 23:55:02', 0),
('1d8dda', 'a', 3, 'goji', '2017-04-03 00:07:44', 0),
('1ec1e6', 'w', 3, 'goji', '2017-04-03 00:07:30', 0),
('1f9642', 'r', 3, 'goji', '2017-04-02 23:17:42', 0),
('1fb341', 'a', 1, 'goji', '2017-04-02 23:58:25', 0),
('201a86', 'r', 3, 'goji', '2017-04-03 00:07:44', 0),
('2088dd', 'a', 2, 'goji', '2017-04-03 00:12:13', 0),
('209c53', 'w', 2, 'goji', '2017-04-02 23:55:02', 0),
('20a6ba', 'w', 1, 'goji', '2017-04-02 23:55:02', 0),
('20eb31', 'a', 1, 'goji', '2017-04-02 23:53:37', 0),
('217bf0', 'c', 3, 'goji', '2017-04-02 23:57:37', 0),
('219a9f', 'c', 2, 'goji', '2017-04-02 23:58:25', 0),
('21cdec', 'r', 1, 'goji', '2017-04-02 20:52:52', 0),
('21e6fb', 'a', 2, 'goji', '2017-04-03 00:15:30', 0),
('22db91', 'r', 3, 'goji', '2017-04-02 22:55:03', 0),
('2377d4', 'r', 3, 'goji', '2017-04-02 22:55:03', 0),
('24794f', 'w', 3, 'goji', '2017-04-02 23:17:42', 0),
('256b4a', 'b', 3, 'goji', '2017-04-02 23:53:37', 0),
('264bce', 'm', 1, 'goji', '2017-04-02 23:53:37', 0),
('266c38', 'r', 1, 'goji', '2017-04-03 00:12:13', 0),
('26c1b1', 'b', 1, 'goji', '2017-04-02 22:55:04', 0),
('272ef5', 'w', 1, 'goji', '2017-04-02 23:55:02', 0),
('27f454', 'w', 2, 'goji', '2017-04-03 00:12:13', 0),
('29baea', 'w', 1, 'goji', '2017-04-03 00:07:44', 0),
('2ad1a3', 'm', 3, 'goji', '2017-04-03 00:15:30', 0),
('2b0fdc', 'w', 3, 'goji', '2017-04-03 00:07:30', 0),
('2b1134', 'w', 3, 'goji', '2017-04-03 00:08:18', 0),
('2c03b1', 'b', 3, 'goji', '2017-04-02 22:55:03', 0),
('2c104a', 'w', 3, 'goji', '2017-04-02 22:55:04', 0),
('2c95af', 'a', 3, 'goji', '2017-04-03 00:08:18', 0),
('2ce407', 'r', 3, 'goji', '2017-04-03 00:15:30', 0),
('2cfbe2', 'a', 3, 'goji', '2017-04-03 00:15:30', 0),
('2d1ddf', 'a', 3, 'goji', '2017-04-03 00:08:18', 0),
('2dbc5b', 'b', 1, 'goji', '2017-04-02 23:53:37', 0),
('2e2c3f', 'r', 1, 'goji', '2017-04-03 00:15:30', 0),
('2e80e6', 'r', 3, 'goji', '2017-04-02 23:53:37', 0),
('2eb1d5', 'm', 2, 'goji', '2017-04-02 23:57:37', 0),
('2efb58', 'c', 2, 'goji', '2017-04-02 23:53:37', 0),
('2f9cb3', 'm', 1, 'goji', '2017-04-02 20:52:52', 0),
('307911', 'c', 3, 'goji', '2017-04-03 00:07:44', 0),
('30c94c', 'w', 2, 'goji', '2017-04-03 00:15:30', 0),
('30fdc4', 'b', 3, 'goji', '2017-04-02 23:55:02', 0),
('3126ea', 'b', 1, 'goji', '2017-04-02 23:17:42', 0),
('31d222', 'a', 3, 'goji', '2017-04-02 20:52:52', 0),
('3337e9', 'm', 2, 'goji', '2017-04-02 23:58:25', 0),
('345324', 'w', 2, 'goji', '2017-04-02 23:55:02', 0),
('352785', 'c', 2, 'goji', '2017-04-03 00:07:30', 0),
('36c282', 'b', 1, 'goji', '2017-04-03 00:07:30', 0),
('37396f', 'b', 3, 'goji', '2017-04-02 23:57:37', 0),
('376272', 'b', 2, 'goji', '2017-04-03 00:12:13', 0),
('379fd3', 'r', 3, 'goji', '2017-04-03 00:08:18', 0),
('37ab51', 'a', 1, 'goji', '2017-04-02 23:57:37', 0),
('37b2cc', 'w', 1, 'goji', '2017-04-03 00:08:18', 0),
('3850c4', 'w', 3, 'goji', '2017-04-03 00:15:30', 0),
('39371c', 'm', 1, 'goji', '2017-04-02 23:17:42', 0),
('3aba55', 'm', 3, 'goji', '2017-04-03 00:08:18', 0),
('3b9f41', 'a', 3, 'goji', '2017-04-02 23:58:25', 0),
('3bca8e', 'a', 1, 'goji', '2017-04-02 23:17:42', 0),
('3bf2e5', 'r', 3, 'goji', '2017-04-03 00:08:18', 0),
('3c4cae', 'a', 3, 'goji', '2017-04-02 23:55:02', 0),
('3c5870', 'b', 1, 'goji', '2017-04-02 23:55:02', 0),
('3cddba', 'm', 2, 'goji', '2017-04-03 00:07:44', 0),
('3cdf35', 'b', 3, 'goji', '2017-04-02 22:55:03', 0),
('3d1fd4', 'c', 2, 'goji', '2017-04-03 00:12:13', 0),
('3df491', 'm', 2, 'goji', '2017-04-03 00:12:13', 0),
('3e0613', 'r', 1, 'goji', '2017-04-03 00:12:13', 0),
('3e156a', 'b', 1, 'goji', '2017-04-02 23:57:37', 0),
('3e21d3', 'm', 3, 'goji', '2017-04-02 23:55:02', 0),
('3e9361', 'a', 2, 'goji', '2017-04-03 00:07:44', 0),
('3e9690', 'b', 2, 'goji', '2017-04-03 00:07:30', 0),
('3f94d3', 'b', 3, 'goji', '2017-04-03 00:07:44', 0),
('401016', 'b', 3, 'goji', '2017-04-02 23:57:37', 0),
('401177', 'w', 2, 'goji', '2017-04-02 23:53:37', 0),
('40d4c4', 'a', 2, 'goji', '2017-04-02 23:53:37', 0),
('412269', 'm', 3, 'goji', '2017-04-02 20:52:52', 0),
('41f7c5', 'b', 3, 'goji', '2017-04-03 00:07:44', 0),
('4379ab', 'a', 3, 'goji', '2017-04-02 23:58:25', 0),
('44cd87', 'm', 2, 'goji', '2017-04-03 00:07:30', 0),
('459606', 'c', 3, 'goji', '2017-04-02 23:53:37', 0),
('45d7da', 'r', 1, 'goji', '2017-04-02 23:17:42', 0),
('45d8ba', 'a', 3, 'goji', '2017-04-02 23:53:37', 0),
('46c4f5', 'r', 3, 'goji', '2017-04-02 23:58:25', 0),
('46f8d2', 'w', 1, 'goji', '2017-04-02 23:17:42', 0),
('478102', 'r', 3, 'goji', '2017-04-02 23:58:25', 0),
('48011d', 'c', 3, 'goji', '2017-04-02 23:55:02', 0),
('48bf8f', 'c', 3, 'goji', '2017-04-02 22:55:03', 0),
('495604', 'c', 3, 'goji', '2017-04-02 23:57:37', 0),
('4a7696', 'c', 2, 'goji', '2017-04-02 22:55:03', 0),
('4ab35b', 'm', 3, 'goji', '2017-04-02 23:57:37', 0),
('4af96a', 'r', 3, 'goji', '2017-04-02 23:17:42', 0),
('4b3631', 'b', 1, 'goji', '2017-04-02 22:55:03', 0),
('f8298', 'w', 1, 'goji', '2017-04-02 23:58:25', 0),
('fcc02', 'a', 1, 'goji', '2017-04-02 20:52:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `team` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `apikey` varchar(20) NOT NULL,
  `baseurl` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`team`, `password`, `apikey`, `baseurl`) VALUES
('goji', '2e70e9', '47fdfa', 'https://umbrella.jlparry.com');

-- --------------------------------------------------------

--
-- Table structure for table `p_history`
--

CREATE TABLE `p_history` (
  `h_id` int(11) NOT NULL,
  `cacode` varchar(8) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE `robots` (
  `r_id` int(11) NOT NULL,
  `head` varchar(8) NOT NULL,
  `torso` varchar(8) NOT NULL,
  `legs` varchar(8) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_history`
--

CREATE TABLE `r_history` (
  `h_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`cacode`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`team`);

--
-- Indexes for table `p_history`
--
ALTER TABLE `p_history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `r_history`
--
ALTER TABLE `r_history`
  ADD PRIMARY KEY (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p_history`
--
ALTER TABLE `p_history`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `r_history`
--
ALTER TABLE `r_history`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
