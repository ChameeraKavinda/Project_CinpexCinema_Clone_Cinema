-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 10:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Admin', 'admin123@gmail.com', '075399234', '145'),
(2, 'Chameera Kavinda', 'admin2@gmail.com', '078963458', 'Admin2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `full_name`, `last_name`, `mobile_number`, `email`, `password`) VALUES
(1, 'chameera', 'Kavinda', '0784562389', 'chameera@gmail.com', 'chameera123'),
(2, 'Sithum', 'Lakshan', '0789541789', 'sithumsithum@gmail.com', '111'),
(3, 'Hashini', 'Bandara', '0761723456', 'hashi11@gmail.com', 'hashi12'),
(4, 'vas', 'ceman', '0754897541', 'cvsafs@gmail.com', '333'),
(5, 'laman', 'Asfri', '0714569852', 'asfris@gmail.com', '3335'),
(13, 'dinam', 'perera', '079665533', 'cds1232s@gmail.com', '789cin'),
(14, 'vas', 'cc', '65533', 'cvsafs@gmail.com', '33'),
(15, 'man', 'nan', '7890566', 'man@gmail.com', '00'),
(17, 'oshan', 'bandara', '1245', 'lakmal@gmail.com', '111'),
(18, 'lakmal', 'bandara', '1245', 'lakmal@gmail.com', '333'),
(19, 'bandara', 'wishwa', '078956456', 'bandara123@gmail.com', '123'),
(20, 'bandara', 'wishwa', '078956456', 'bandara123@gmail.com', '123'),
(21, 'laman', 'Asfri', '0714569852', 'asfris@gmail.com', '3335'),
(22, 'Chameera', 'Kavinda', '07556978', 'chameera@gmail.com', 'chameera12'),
(23, '=', 'Kavinda', '07556978', 'chameera@gmail.com', 'chameera12'),
(24, 'chameera', 'Kavinda', '07556978', 'chameera@gmail.com', 'chameera1212'),
(25, 'lakmal', 'bandar', '07556978', 'Admin123@gmail.com', '11');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Movie_Name` varchar(50) NOT NULL,
  `Number_Of_Seat` varchar(50) NOT NULL,
  `USD_Total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Email`, `Movie_Name`, `Number_Of_Seat`, `USD_Total`) VALUES
(18, '11@gmail.com', 'Garfield', '1', '10'),
(19, 'Admin123@gmail.com', 'Wisal Adare', '2', '20'),
(20, 'cgam@gmail.com', 'Crakk', '2', '20'),
(21, 'samididulsha@gmail.com', 'Wisal Adare', '2', '20'),
(22, 'Admin123@gmail.com', 'Garfield', '2', '20'),
(23, 'user1@gmail.com', 'Crakk', '5', '50'),
(24, 'admin11@gmail.com', 'Wisal Adare', '2', '20'),
(25, 'waruwaru@gmail.com', 'Kunghu Panda 4', '3', '30'),
(26, 'waruwaru@gmail.com', 'Garfield', '2', '20'),
(27, 'waruwaru@gmail.com', 'Kunghu Panda 4', '3', '30'),
(28, '11@gmail.com', 'Garfield', '4', '40'),
(29, 'dgdggdgd', 'Garfield', '2', '20'),
(30, 'cgam@gmail.com', 'Garfield', '2', '20'),
(31, 'cgam@gmail.com', 'Wisal Adare', '2', '20'),
(32, 'kavinda@gmail.com', 'Kunghu Panda 4', '3', '30');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `birth` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` text NOT NULL,
  `filename` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `email`, `comment`) VALUES
(1, 'chameera', 'chameera@gmail.com', 'Good Website.'),
(2, 'umesh', 'umesh@gmail.com', 'I Like this .'),
(3, 'Chalith', 'chalith@gmail.com', 'Very Important.'),
(4, 'chameera kavinda', 'chameera@gmail.com', 'Good Site  '),
(5, 'Nipun Kavinda', 'nipuna12a@gmail.com', 'Good Works ');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `fim_name` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `rate` varchar(20) NOT NULL,
  `img` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `fim_name`, `des`, `rate`, `img`) VALUES
(1, 'crack', 'action', '5', 0x4372616b2e6a7067),
(2, 'crack', 'action', '5', 0x4372616b2e6a7067),
(3, 'Kungfu', 'Cartoon Movie', '4.5', 0x6b756e676675456e2e6a7067),
(5, 'Ismart', 'Indian Action', '3.5', 0x69736d6172742e6a7067),
(6, 'crack', 'Cartoon Movie', '3.5', '');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`id`, `name`, `birth`, `address`, `email`, `phone`, `gender`, `filename`) VALUES
(1, 'chameera', '2002-08-12', 'no:21,ff.', 'dsff@gmail.com', '075399234', 'male', '11.jpg'),
(2, 'bbbbs', '0000-00-00', 'fgfgff', 'cgam@gmail.com', '075399234', 'male', '111.jpg'),
(3, 'ssss', '0000-00-00', 'w', 'bhanubhanu11111111@gmail.com', '075399234', 'female', '111.jpg'),
(4, 'xczv', '0000-00-00', 'fgfgff', 'cgam@gmail.com', '075399234', 'male', '22.jpg'),
(5, 'fucj', '2024-06-11', 'wdddd', 'daa@gmail.com', '3444', 'male', '55.jpg'),
(6, 'kavidu samaranayaka', '0000-00-00', 'no:78/3,polatawa,rtha', 'bhanubhanu@gmail.com', '5641515', 'male', '44.jpg'),
(7, 'umesh', '2005.07.06', 'No:65/4,polomrd,haha', 'umesh@gmail.com', '0987161561', 'male', '111.jpg'),
(8, 'chajjjj', '2004.07.03', 'No:12/2gsdgasadjghadg', 'vsdgsadsf@gmail.com', '0232425636363', 'female', '11.jpg'),
(9, 'vvsvvs', '2999', 'vvvxvx', 'ffdfd@gmail.co', '2222', 'male', 'Captain.jpg'),
(10, 'vv', '   cc', 'xxx@.cpm', 'ddd@gggg.com', '455', 'male', 'chaleEn.jpg'),
(11, 'chameera', '200-08-12', 'no:sfsf', 'chameera@gmail.com', '017143353', 'male', 'Captain.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `count` varchar(110) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `ticket_url` varchar(255) DEFAULT NULL,
  `trailer_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `image_path`, `ticket_url`, `trailer_url`) VALUES
(1, 'carck', 'pic/crakn.jpg', 'http://localhost/Cineplex/LoginForm.php', 'http://localhost/cineplex/add_movie.php'),
(2, 'Wonka', 'pic/wonka.jpg', 'https://youtu.be/ajw425Kuvtw?si=uZHdDjTyCoeHuSLJ', 'https://youtu.be/ajw425Kuvtw?si=uZHdDjTyCoeHuSLJ'),
(3, 'Kunghu', 'uploads/kongfun.jpg', 'http://localhost/Cineplex/LoginForm.php', 'https://www.youtube.com/watch?v=_inKs4eeHiI'),
(4, 'BeeKeeper', 'uploads/been.jpg', 'http://localhost/Cineplex/LoginForm.php', 'https://youtu.be/8xjSvwi7W-0?si=pODpFD_JO9h0eAzC'),
(5, 'Ape Sinhala', 'uploads/apeSin.jpg', 'http://localhost/Cineplex/LoginForm.php', 'https://youtu.be/wYwIlq3t3gw?si=crYSRcaYKiGa1cI3'),
(6, 'Bob Marly', 'uploads/bobn.jpg', 'http://localhost/Cineplex/LoginForm.php', 'https://youtu.be/ajw425Kuvtw?si=uZHdDjTyCoeHuSLJ'),
(7, 'Goddsilaa', 'uploads/kongn.jpg', 'http://localhost/Cineplex/LoginForm.php', 'https://www.youtube.com/watch?v=lV1OOlGwExM&t=9s'),
(11, 'Captain', 'uploads/Captain.jpg', 'http://localhost/Cineplex/LoginForm.php', 'https://www.youtube.com/watch?v=9kUnAzh2KB4');

-- --------------------------------------------------------

--
-- Table structure for table `movie_theater_staff`
--

CREATE TABLE `movie_theater_staff` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movie_theater_staff`
--

INSERT INTO `movie_theater_staff` (`id`, `full_name`, `last_name`, `mobile_number`, `address`, `email`, `password`) VALUES
(1, '', '', '', '', '', ''),
(2, 'chamee', 'gaa', '0000', 'vvv@gmail.com', 'chaka@gmail.com', '22'),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, 'gaa', 'cgg', '000077', 'vvgggv@gmail.com', 'chaka@hhh', '2244'),
(6, '', '', '', '', '', ''),
(7, 'gg', 'gg', '77', '777', '1777@gmail.com', '777'),
(8, 'gg', 'gg', '77', '777', '1777@gmail.com', '111'),
(9, 'gg', 'gg', '77', '777', '177711@gmail.com', '111'),
(10, 'gihan', 'bandar', '0812345', 'No:90/2 pila', 'gihan@gmail.com', 'gihan'),
(11, 'gihan', 'bandar', '0812345', 'No:90/2 pila', 'gihan@gmail.com', 'gihan'),
(12, 'gihan', 'bandar', '0812345', 'No:90/2 pila', 'gihan@gmail.com', 'gihan');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(6, 'chameera', 'cgam@gmail.com', '0748957412', '1223'),
(7, 'Nilmi', 'Nilmi@gmail.com', '0768947352', '456'),
(8, 'staff', 'staff@gmail.com', '079453285', '11'),
(9, 'vas cc', 'cvsafs@gmail.com', '078945278', '12'),
(10, 'chameera', 'cgam@gmail.com', 'a88888', '22'),
(16, 'chameera', 'wee', '075399234', 'xz'),
(17, 'chameera', 'wee', '1222', '11'),
(18, 'vvv', 'vvv', 'vvv', 'vvv'),
(19, 'chameera', 'cgam@gmail.com', '075399234', '44'),
(21, 'ddddddd', 'dd', '078989745', 'd'),
(22, 'Sudesh', 'sudesh@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_register_sheet`
--

CREATE TABLE `user_register_sheet` (
  `id` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_NO` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_register_sheet`
--

INSERT INTO `user_register_sheet` (`id`, `User_Name`, `Email`, `Mobile_NO`, `Password`) VALUES
(3, 'Chameera', 'cgam@gmail.com', '075399234', '111'),
(4, 'chameera kavinda', 'cgam@gmail.com', '0753992348', '111'),
(5, 'jeewa', 'jeewa@gmail.com', '0812361578', '22'),
(6, 'New User1', 'user1@gmail.com', '0785642455', 'user1'),
(7, 'chameera kavinda', 'chameera@gmail.com', '0771234567', '5353553'),
(8, 'Admin', 'Admin123@gmail.com', '075399234', '111'),
(9, 'chameera kavinda', '11@gmail.com', '0771234567', '11'),
(10, 'chameera', '11@gmail.com', '075399234', '11'),
(11, 'Wraunika', 'waruwaru@gmail.com', '07122424', '123'),
(12, 'kavinda', 'kavinda@gmail.com', '07654345', 'kavinda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_theater_staff`
--
ALTER TABLE `movie_theater_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register_sheet`
--
ALTER TABLE `user_register_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `movie_theater_staff`
--
ALTER TABLE `movie_theater_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_register_sheet`
--
ALTER TABLE `user_register_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
