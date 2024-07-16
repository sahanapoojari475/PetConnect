-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 02:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `pet_id` varchar(9) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `age` int(11) NOT NULL,
  `fur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`pet_id`, `breed`, `weight`, `height`, `age`, `fur`) VALUES
('pa01', 'labrador', 11.3, 30, 2, 'white'),
('pa02', 'parsian', 3.6, 20, 2, 'white'),
('pa03', 'golden retriever', 12.5, 40, 2, 'gloden'),
('pa04', 'boxer', 11.5, 45, 3, 'black'),
('pa05', 'rag doll', 2.6, 20, 5, 'white'),
('pa06', 'st bernard', 10.8, 35, 3, 'brownish yellow'),
('pa07', 'bulldog', 8, 25, 3, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `availablepets`
--

CREATE TABLE `availablepets` (
  `pet_id` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `breed` varchar(50) NOT NULL,
  `prize` float NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availablepets`
--

INSERT INTO `availablepets` (`pet_id`, `breed`, `prize`, `description`, `image`) VALUES
('pa01', 'labrador', 5000, '\r\nMeet the Labrador Retriever, \r\na lovable with furr white.', 'images/labrador.jpg'),
('pa02', 'parsian', 6999, 'This is known for their calm and affectionate nature with fur color white.', 'images/parsian.jpg'),
('pa03', 'golden retriever', 70000, 'They are known for being good with children.', 'images/gr.jpg'),
('pa04', 'boxer', 80000, 'These are characterized by their alert expression with black furr.', 'images/box.jpeg'),
('pa05', 'Rag doll', 40000, 'Gentle and affectionate behavior with fur white.', 'images/ragdoll.jpg'),
('pb06', 'lovebirds', 1000, 'Very active flying and climbing about gnawing on wood.', 'images/lovebirds.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `pet_id` varchar(9) NOT NULL,
  `type` varchar(25) NOT NULL,
  `noise` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`pet_id`, `type`, `noise`) VALUES
('pb01', 'grey parrot', 'moderate'),
('pb02', 'black cheeked', 'low'),
('pb03', 'grey headed', 'moderate'),
('pb04', 'lilian', 'moderate'),
('pb05', 'white cockatoo', 'moderate');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cs_id` varchar(9) NOT NULL,
  `cs_fname` varchar(10) NOT NULL,
  `cs_minit` varchar(10) NOT NULL,
  `cs_lname` varchar(10) NOT NULL,
  `cs_address` varchar(30) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cs_id`, `cs_fname`, `cs_minit`, `cs_lname`, `cs_address`, `order_id`) VALUES
('cs01', 'Naveen', 'kumar', 'k', 'Mandya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderdb`
--

CREATE TABLE `orderdb` (
  `order_id` int(11) NOT NULL,
  `cs_id` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdb`
--

INSERT INTO `orderdb` (`order_id`, `cs_id`, `name`, `email`, `address`, `order_type`, `quantity`) VALUES
(1, '', 'sha', 'sahanapoojari475@gmail.com', 'Sirsikar Colony, Banavasi Road,Sirsi', 'labroader', 3),
(2, '', 'SAHANA POOJARI', 'priya@gmail.com', 'Banavasi Road,Sirsi', 'parsian', 2),
(3, '', 'shamitha', 'shamitha@gmail.com', 'bhatkal', 'pic-up', 2),
(4, '', 'Ramya Achari', 'ramya@gmail.com', 'sirsi', 'pic-up', 1),
(5, '', 'aaa', 'aaaaa@gmail.com', 'aaaa', 'deliver', 2),
(6, '', 'bbb', 'bbb@gmail.com', 'rrr', 'deliver', 3),
(7, '', 'ccc', 'bbb@gmail.com', 'rrr', 'deliver', 3),
(8, '', 'SAHANA POOJARI', 'sahanapoojari475@gmail.com', 'Sirsikar Colony, Banavasi Road,Sirsi', 'pick-up', 2),
(9, '', 'Priya', 'priya@gmail.com', 'Banavasi Road,Sirsi', 'deliver', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` varchar(9) NOT NULL,
  `pet_category` varchar(15) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_category`, `cost`) VALUES
('pa01', 'dog', 8000),
('pa02', 'cat', 3000),
('pa03', 'dog', 8500),
('pa04', 'dog', 15000),
('pa05', 'cat', 3500),
('pa06', 'dog', 10500),
('pa07', 'dog', 12000),
('pb01', 'parrot', 2000),
('pb02', 'lovebirds', 800),
('pb03', 'lovebirds', 600),
('pb04', 'lovebirds', 800),
('pb05', 'cockatoo', 10000);

--
-- Triggers `pets`
--
DELIMITER $$
CREATE TRIGGER `check_sold` BEFORE UPDATE ON `pets` FOR EACH ROW BEGIN
DECLARE
 checking int;
 set checking=(select count(*) from sold_pets where pet_id=old.pet_id);
  if (checking > 0) then   
        signal sqlstate '45000' set message_text = 'cannot  update sold pet';
    end if;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pet_products`
--

CREATE TABLE `pet_products` (
  `pp_id` varchar(9) NOT NULL,
  `pp_name` varchar(30) NOT NULL,
  `pp_type` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL,
  `belongs_to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pet_products`
--

INSERT INTO `pet_products` (`pp_id`, `pp_name`, `pp_type`, `cost`, `belongs_to`) VALUES
('pp01', 'dog collar', 'accesories', 500, 'dog'),
('pp02', 'chain', 'accesories', 100, 'cat'),
('pp03', 'pedigree', 'food', 1500, 'dog'),
('pp04', 'mouth mask', 'accesories', 250, 'dog'),
('pp05', 'food bowl', 'accesories', 250, 'dog '),
('pp06', 'bird feeds', 'food', 300, 'birds');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `cs_id` varchar(9) NOT NULL,
  `cs_phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`cs_id`, `cs_phone`) VALUES
('cs01', 8867762336),
('cs01', 9902587276);

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sd_id` varchar(9) NOT NULL,
  `cs_id` varchar(9) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sd_id`, `cs_id`, `date`, `total`) VALUES
('sd01', 'cs01', '2024-11-21', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `sold_pets`
--

CREATE TABLE `sold_pets` (
  `sd_id` varchar(9) NOT NULL,
  `pet_id` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sold_pets`
--

INSERT INTO `sold_pets` (`sd_id`, `pet_id`) VALUES
('sd01', 'pa01');

-- --------------------------------------------------------

--
-- Table structure for table `sold_products`
--

CREATE TABLE `sold_products` (
  `sd_id` varchar(9) NOT NULL,
  `pp_id` varchar(9) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sold_products`
--

INSERT INTO `sold_products` (`sd_id`, `pp_id`, `quantity`) VALUES
('sd01', 'pp01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(6, 'www', 'www@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 'cnlab1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `availablepets`
--
ALTER TABLE `availablepets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cs_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `orderdb`
--
ALTER TABLE `orderdb`
  ADD PRIMARY KEY (`order_id`,`cs_id`) USING BTREE,
  ADD KEY `cs_id` (`cs_id`) USING BTREE;

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `pet_products`
--
ALTER TABLE `pet_products`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`cs_id`,`cs_phone`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sd_id`,`cs_id`),
  ADD KEY `cs_id` (`cs_id`);

--
-- Indexes for table `sold_pets`
--
ALTER TABLE `sold_pets`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `sd_id` (`sd_id`);

--
-- Indexes for table `sold_products`
--
ALTER TABLE `sold_products`
  ADD PRIMARY KEY (`sd_id`,`pp_id`),
  ADD KEY `sold_products_ibfk_2` (`pp_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdb`
--
ALTER TABLE `orderdb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`pet_id`) ON DELETE CASCADE;

--
-- Constraints for table `birds`
--
ALTER TABLE `birds`
  ADD CONSTRAINT `birds_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`pet_id`) ON DELETE CASCADE;

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`cs_id`) REFERENCES `customer` (`cs_id`) ON DELETE CASCADE;

--
-- Constraints for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD CONSTRAINT `sales_details_ibfk_1` FOREIGN KEY (`cs_id`) REFERENCES `customer` (`cs_id`) ON DELETE CASCADE;

--
-- Constraints for table `sold_pets`
--
ALTER TABLE `sold_pets`
  ADD CONSTRAINT `sold_pets_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`pet_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sold_pets_ibfk_2` FOREIGN KEY (`sd_id`) REFERENCES `sales_details` (`sd_id`) ON DELETE CASCADE;

--
-- Constraints for table `sold_products`
--
ALTER TABLE `sold_products`
  ADD CONSTRAINT `sold_products_ibfk_1` FOREIGN KEY (`sd_id`) REFERENCES `sales_details` (`sd_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sold_products_ibfk_2` FOREIGN KEY (`pp_id`) REFERENCES `pet_products` (`pp_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
