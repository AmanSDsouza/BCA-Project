-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:59 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidshield`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `id` int(11) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `hemail`, `count`) VALUES
(1, 'kmc@gmail.com', 100),
(2, 'city@gmail.com', 100),
(3, 'scs@gmail.com', 300),
(4, 'yen@gmail.com', 100),
(5, 'aj@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `bookbed`
--

CREATE TABLE `bookbed` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `idproof` varchar(100) NOT NULL,
  `days` int(30) NOT NULL,
  `date` date NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL DEFAULT 'pending',
  `hstatus` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookbed`
--

INSERT INTO `bookbed` (`id`, `name`, `phone`, `aadhar`, `dob`, `email`, `idproof`, `days`, `date`, `hemail`, `payment`, `hstatus`) VALUES
(4, 'sandeep', '9090909090', '123456666666', '2003-10-24', 'aman@gmail.com', 'sandeepmalabar-parotta.jpg', 2, '2021-10-22', 'aj@gmail.com', 'paid', 'Confirmed'),
(5, '', '9535845333', '123456666666', '2003-10-24', 'aman@gmail.com', 'chapati.jpg', 4, '2021-10-30', 'aj@gmail.com', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `booktest`
--

CREATE TABLE `booktest` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `slot` date NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL DEFAULT 'pending',
  `hstatus` varchar(50) NOT NULL DEFAULT 'pending',
  `result` varchar(50) NOT NULL DEFAULT 'No Result'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktest`
--

INSERT INTO `booktest` (`id`, `name`, `aadhar`, `phone`, `dob`, `slot`, `uemail`, `hemail`, `payment`, `hstatus`, `result`) VALUES
(1, 'charlie', '1234567891', '6758847654', '2021-09-03', '2021-09-24', 'tom@gmail.com', 'kmc@gmail.com', 'paid', 'Completed', 'Negative'),
(18, 'sandeep', '123456789122', '9789898730', '2003-10-23', '2021-10-21', 'aman@gmail.com', 'aj@gmail.com', 'paid', 'Completed', 'Negative');

-- --------------------------------------------------------

--
-- Table structure for table `bookvaccine`
--

CREATE TABLE `bookvaccine` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `slot` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL DEFAULT 'pending',
  `hstatus` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookvaccine`
--

INSERT INTO `bookvaccine` (`id`, `name`, `aadhar`, `phone`, `dob`, `hemail`, `vname`, `slot`, `email`, `payment`, `hstatus`) VALUES
(1, 'charlie', '123467788888', '9807383945', '2021-09-11', 'city@gmail.com', 'Covaxin', '2021-09-17', 'tom@gmail.com', 'paid', 'Completed'),
(2, 'harish12', '234567890121', '7019356629', '2021-09-01', 'kmc@gmail.com', 'Covaxin', '2021-09-18', 'tom@gmail.com', 'pending', 'pending'),
(5, 'sandeep', '123456666669', '9008787266', '2003-10-24', 'aj@gmail.com', 'CovidShield', '2021-10-22', 'aman@gmail.com', 'paid', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `test` varchar(50) NOT NULL,
  `smptoms` varchar(50) NOT NULL,
  `test2` varchar(50) NOT NULL,
  `last` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `appdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `dob`, `age`, `gender`, `phone`, `state`, `address`, `blood`, `test`, `smptoms`, `test2`, `last`, `email`, `hemail`, `status`, `appdate`) VALUES
(1, 'Briden Springfield', '2021-09-03', 35, 'Male', '09449048283', 'Karnataka', 'Green Spring Hill', 'AB-', 'yes', 'No', 'Yes', '2021-09-02', 'tom@gmail.com', 'kmc@gmail.com', 'Approved', '2021-09-17'),
(3, 'sandeep', '2000-06-24', 21, 'Male', '9789898730', 'Karnataka', 'kuntikan', 'A+', 'yes', 'No', 'Yes', '2020-09-29', 'tom@gmail.com', 'city@gmail.com', 'Approved', '2021-09-28'),
(4, 'sandeep', '2000-06-24', 21, 'Male', '9482064048', 'Karnataka', 'kuntikan', 'AB+', 'yes', 'No', 'Yes', '2020-06-22', 'san@gmail.com', 'scs@gmail.com', 'pending', ''),
(5, 'sandeep', '0000-00-00', 21, 'Male', '9789898730', 'Karnataka', 'kuntikan', 'AB-', 'yes', 'Yes', 'Yes', '2021-04-05', 'tom@gmail.com', 'kmc@gmail.com', 'pending', ''),
(6, 'sandeep', '2003-10-22', 18, 'Male', '1234567899', 'Karnataka', 'mangluru 6', 'AB-', 'yes', 'No', 'Yes', '2021-07-21', 'aman@gmail.com', 'aj@gmail.com', 'Rejected', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id1` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id1`, `subject`, `message`, `email`) VALUES
(1, 'just testing', 'This is testing', 'tom@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `question`, `answer`, `email`, `phone`, `address`, `city`, `state`, `pincode`, `username`, `password`, `status`, `image`) VALUES
(2, 'KMC', '4', 'poochi', 'kmc@gmail.com', '9485676453', 'Attavar near Dmart', 'Mangalore', 'Karnataka', 575005, 'Jack', 'Kmc12345', 'approve', 'kmc.jpg'),
(3, 'City Hospital', '2', 'mysore', 'city@gmail.com', '9485676453', 'Attavar near Dmart', 'Mangalore', 'Karnataka', 575005, 'Jack', 'City12345', 'approve', 'img.jpg'),
(6, 'SCS', '4', 'poochi', 'scs@gmail.com', '9887576452', 'near opp Royal Enfield showroom Balmata', 'Mangalore', 'Karnataka', 575003, 'rajesh', 'Scs12345', 'approve', 'scs.jpg'),
(8, 'Yenepoya', '1', 'paneer', 'yen@gmail.com', '9887456589', 'ks rao road', 'Mangalore', 'Karnataka', 575002, 'Yenepoya', 'Yen12345', 'approve', 'yen.jpg'),
(9, 'Hitech', '2', 'kumta', 'hi@gmail.com', '9789898730', 'kuntikan', 'Mangalore', 'Karnataka', 575002, 'Hitech', 'Hit12345', 'approve', 'bed1.jpg'),
(11, 'Aj', '1', 'pasta', 'aj@gmail.com', '9789898730', 'Kuntikan', 'Manglore', 'Karnataka', 575002, 'Aj', 'Aj123456', 'approve', 'aj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `cost` int(30) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `hemail`, `cost`, `time`) VALUES
(1, 'kmc@gmail.com', 700, '2 hours'),
(4, 'city@gmail.com', 900, '2 hours'),
(5, 'scs@gmail.com', 1200, '2 hours'),
(6, 'yen@gmail.com', 800, '2 hours'),
(7, 'aj@gmail.com', 800, '3 hour');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `dob`, `phone`, `email`, `question`, `answer`, `password`) VALUES
(1, 'Tom', '2021-09-01', '7019235541', 'tom@gmail.com', '2', 'uk', 'User1234'),
(2, 'Sandeep', '2000-06-24', '9482064048', 'san@gmail.com', '2', 'kumta', 'Sdmcbm111'),
(3, 'Aman', '2003-10-23', '8976578884', 'aman@gmail.com', '1', 'pasta', 'Sdmcbm122');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `hemail`, `vname`, `qty`, `cost`) VALUES
(2, 'kmc@gmail.com', 'CovidShield', 299, 700),
(3, 'kmc@gmail.com', 'Covaxin', 199, 800),
(4, 'kmc@gmail.com', 'Sputnik', 120, 1200),
(5, 'city@gmail.com', 'CovidShield', 200, 700),
(6, 'city@gmail.com', 'Covaxin', 299, 900),
(7, 'yen@gmail.com', 'CovidShield', 80, 700),
(8, 'aj@gmail.com', 'CovidShield', 48, 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookbed`
--
ALTER TABLE `bookbed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktest`
--
ALTER TABLE `booktest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookvaccine`
--
ALTER TABLE `bookvaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookbed`
--
ALTER TABLE `bookbed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booktest`
--
ALTER TABLE `booktest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bookvaccine`
--
ALTER TABLE `bookvaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
