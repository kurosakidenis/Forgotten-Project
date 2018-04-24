-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 12:39 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pics`
--

-- --------------------------------------------------------

--
-- Table structure for table `fransisalbums`
--

CREATE TABLE `fransisalbums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fransispals`
--

CREATE TABLE `fransispals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fransispals`
--

INSERT INTO `fransispals` (`id`, `name`, `userPic`, `status`) VALUES
(1, 'jasmine', '594dafe35c435', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fransisprivate`
--

CREATE TABLE `fransisprivate` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fransisshared`
--

CREATE TABLE `fransisshared` (
  `pic_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fransisshrdal`
--

CREATE TABLE `fransisshrdal` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fransisstoryyako`
--

CREATE TABLE `fransisstoryyako` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gwijialbums`
--

CREATE TABLE `gwijialbums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gwijipals`
--

CREATE TABLE `gwijipals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gwijipals`
--

INSERT INTO `gwijipals` (`id`, `name`, `userPic`, `status`) VALUES
(1, 'jasmine', '594dafe35c435', 1),
(2, 'james', '59458b9ab0e2c', 1),
(3, 'james', '59458b9ab0e2c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gwijiprivate`
--

CREATE TABLE `gwijiprivate` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gwijishared`
--

CREATE TABLE `gwijishared` (
  `pic_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gwijishrdal`
--

CREATE TABLE `gwijishrdal` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gwijistoryyako`
--

CREATE TABLE `gwijistoryyako` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gwijistoryyako`
--

INSERT INTO `gwijistoryyako` (`pic_id`, `picname`, `userPic`) VALUES
(1, 'name', '59695e9011b62');

-- --------------------------------------------------------

--
-- Table structure for table `jamesalbums`
--

CREATE TABLE `jamesalbums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamespals`
--

CREATE TABLE `jamespals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamesprivate`
--

CREATE TABLE `jamesprivate` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamesshared`
--

CREATE TABLE `jamesshared` (
  `pic_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamesshrdal`
--

CREATE TABLE `jamesshrdal` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamesstoryyako`
--

CREATE TABLE `jamesstoryyako` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamesstoryyako`
--

INSERT INTO `jamesstoryyako` (`pic_id`, `picname`, `userPic`) VALUES
(1, 'jhdjsdk', '59458ba8869bb'),
(3, 'george', '59653008a6b05'),
(4, 'jombaz', '59f37e5f1096f'),
(5, 'jombaz2', '59f37fce2804d'),
(6, 'qwerty', '5abcbabde979a');

-- --------------------------------------------------------

--
-- Table structure for table `jasminealbums`
--

CREATE TABLE `jasminealbums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasminepals`
--

CREATE TABLE `jasminepals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasminepals`
--

INSERT INTO `jasminepals` (`id`, `name`, `userPic`, `status`) VALUES
(3, 'james', '59458b9ab0e2c', 1),
(4, 'gwiji', '59695e4e25d7e', 0),
(5, 'james', '59458b9ab0e2c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jasmineprivate`
--

CREATE TABLE `jasmineprivate` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasmineshared`
--

CREATE TABLE `jasmineshared` (
  `pic_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasmineshrdal`
--

CREATE TABLE `jasmineshrdal` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `pic_no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasminestoryyako`
--

CREATE TABLE `jasminestoryyako` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) DEFAULT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_id` varchar(200) NOT NULL,
  `confirmcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `photo_id`, `confirmcode`) VALUES
(1, 'james', 'jameskinuthiary@gmail.com', '$6$rounds=5000$$GN6vlH2EjpotC.9w54nX62thP9nLIl1nZTzibMNghykl8OaVwyzdYjxY5BOzQXK8ISkxiByoZsyUvwlYO42xm1', '5a292f467f2f5', '59458b9ab0de2'),
(2, 'fransis', 'fransis@gmail.com', '$6$rounds=5000$$GN6vlH2EjpotC.9w54nX62thP9nLIl1nZTzibMNghykl8OaVwyzdYjxY5BOzQXK8ISkxiByoZsyUvwlYO42xm1', '59486970922a4', '5948697092259'),
(3, 'jasmine', 'jasmine@gmail.com', '$6$rounds=5000$$GN6vlH2EjpotC.9w54nX62thP9nLIl1nZTzibMNghykl8OaVwyzdYjxY5BOzQXK8ISkxiByoZsyUvwlYO42xm1', '594dafe35c435', '594dafe35c3f0'),
(4, 'gwiji', 'gwiji@gmamail.com', '$6$rounds=5000$$P2qTjx456zUjYRMCEbSHSN4SE8zAd1weOfxE/BsMLEpDGi0dle3/eGbR.kjqlAYRvopUUeJX2n9VujpL9iRDr.', '59695e4e25d7e', '59695e4e25d3b');

-- --------------------------------------------------------

--
-- Table structure for table `qwertygwiji`
--

CREATE TABLE `qwertygwiji` (
  `pic_id` int(11) NOT NULL,
  `picname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fransisalbums`
--
ALTER TABLE `fransisalbums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `fransispals`
--
ALTER TABLE `fransispals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fransisprivate`
--
ALTER TABLE `fransisprivate`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `fransisshared`
--
ALTER TABLE `fransisshared`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `fransisshrdal`
--
ALTER TABLE `fransisshrdal`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `fransisstoryyako`
--
ALTER TABLE `fransisstoryyako`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `gwijialbums`
--
ALTER TABLE `gwijialbums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `gwijipals`
--
ALTER TABLE `gwijipals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gwijiprivate`
--
ALTER TABLE `gwijiprivate`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `gwijishared`
--
ALTER TABLE `gwijishared`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `gwijishrdal`
--
ALTER TABLE `gwijishrdal`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `gwijistoryyako`
--
ALTER TABLE `gwijistoryyako`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `jamesalbums`
--
ALTER TABLE `jamesalbums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `jamespals`
--
ALTER TABLE `jamespals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamesprivate`
--
ALTER TABLE `jamesprivate`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `jamesshared`
--
ALTER TABLE `jamesshared`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `jamesshrdal`
--
ALTER TABLE `jamesshrdal`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `jamesstoryyako`
--
ALTER TABLE `jamesstoryyako`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `jasminealbums`
--
ALTER TABLE `jasminealbums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `jasminepals`
--
ALTER TABLE `jasminepals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasmineprivate`
--
ALTER TABLE `jasmineprivate`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `jasmineshared`
--
ALTER TABLE `jasmineshared`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `jasmineshrdal`
--
ALTER TABLE `jasmineshrdal`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `jasminestoryyako`
--
ALTER TABLE `jasminestoryyako`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `qwertygwiji`
--
ALTER TABLE `qwertygwiji`
  ADD PRIMARY KEY (`pic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fransisalbums`
--
ALTER TABLE `fransisalbums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fransispals`
--
ALTER TABLE `fransispals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fransisprivate`
--
ALTER TABLE `fransisprivate`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fransisshared`
--
ALTER TABLE `fransisshared`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fransisshrdal`
--
ALTER TABLE `fransisshrdal`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fransisstoryyako`
--
ALTER TABLE `fransisstoryyako`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gwijialbums`
--
ALTER TABLE `gwijialbums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gwijipals`
--
ALTER TABLE `gwijipals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gwijiprivate`
--
ALTER TABLE `gwijiprivate`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gwijishared`
--
ALTER TABLE `gwijishared`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gwijishrdal`
--
ALTER TABLE `gwijishrdal`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gwijistoryyako`
--
ALTER TABLE `gwijistoryyako`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jamesalbums`
--
ALTER TABLE `jamesalbums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jamespals`
--
ALTER TABLE `jamespals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jamesprivate`
--
ALTER TABLE `jamesprivate`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jamesshared`
--
ALTER TABLE `jamesshared`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jamesshrdal`
--
ALTER TABLE `jamesshrdal`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jamesstoryyako`
--
ALTER TABLE `jamesstoryyako`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jasminealbums`
--
ALTER TABLE `jasminealbums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jasminepals`
--
ALTER TABLE `jasminepals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jasmineprivate`
--
ALTER TABLE `jasmineprivate`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jasmineshared`
--
ALTER TABLE `jasmineshared`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jasmineshrdal`
--
ALTER TABLE `jasmineshrdal`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jasminestoryyako`
--
ALTER TABLE `jasminestoryyako`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qwertygwiji`
--
ALTER TABLE `qwertygwiji`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
