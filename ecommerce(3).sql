-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 05:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `AdminID` int(11) NOT NULL,
  `AdminUsername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminConfirmPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`AdminID`, `AdminUsername`, `AdminEmail`, `AdminPassword`, `AdminConfirmPassword`) VALUES
(1, 'kbmelo2022', 'kyle.melo@lccdo.edu.ph', '09061072012', '09061072012'),
(15, 'vanidajang', 'vani.dajang@lccdo.edu.ph', 'lourdes', 'lourdes'),
(16, 'lance205', 'lance.tagadan@lccdo.edu.ph', 'cyberpsycho', 'cyberpsycho');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(10, 'CD One Note', '40', 'Cyberpunk VC.jpg', 2),
(12, 'Dragon Logo', '50', 'dragon.jpg', 1),
(14, 'Samurai Hoodie', '200', 'Jacket.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` int(255) NOT NULL,
  `OrderName` varchar(100) NOT NULL,
  `OrderNumber` varchar(12) NOT NULL,
  `OrderEmail` varchar(255) NOT NULL,
  `OrderMethod` varchar(100) NOT NULL,
  `OrderFlat` varchar(100) NOT NULL,
  `OrderStreet` varchar(100) NOT NULL,
  `OrderCity` varchar(100) NOT NULL,
  `OrderState` varchar(100) NOT NULL,
  `OrderCountry` varchar(100) NOT NULL,
  `OrderPin_Code` int(10) NOT NULL,
  `TotalProducts` varchar(255) NOT NULL,
  `TotalPrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderID`, `OrderName`, `OrderNumber`, `OrderEmail`, `OrderMethod`, `OrderFlat`, `OrderStreet`, `OrderCity`, `OrderState`, `OrderCountry`, `OrderPin_Code`, `TotalProducts`, `TotalPrice`) VALUES
(1, 'Kyle Bryant M. Melo', '09061072012', 'kyle.melo@lccdo.edu.ph', 'cash on delivery', 'Austin Heights', 'Kolambugan', '09061072012', 'Philippines', 'Philippines', 9207, 'Johnny Silverhand Figure (2) ', '600'),
(2, 'Kyle Bryant M. Melo', '09061072012', 'kyle.melo@lccdo.edu.ph', 'cash on delivery', 'Kolambugan', 'Cagayan', 'Misamis Oriental', 'N/A', 'Philippines', 9207, 'Johnny Silverhand Figure (1) , Samurai Hoodie (1) , Hamburger (1) ', '580'),
(3, 'asdasd', '23423542345', 'ken@gmail.com', 'cash on delivery', 'asd', 'sadda', 'asdasd', 'sadasd', 'asdas', 4324, 'Johnny Silverhand Figure (2) , CD Projekt Red Gear (1) , Hamburger (1) ', '120'),
(4, 'adasda', '21314', 'melokylebryant4@gmail.com', 'cash on delivery', 'das', 'dsadasd', 'asdasd', 'asdasd', 'asdas', 3214, 'Hamburger (2) , CD One Note (1) , Samurai Hoodie (1) , Dragon Logo (1) , asdas (1) ', '413'),
(5, 'Henry Mejares', '09362404966', 'kyle.melo@lccdo.edu.ph', 'cash on delivery', 'Austin Heights', 'Kolambugan', 'Lanao del Norte', 'N/A', 'Philippines', 9200, 'CD One Note (2) , Dragon Logo (1) , Samurai Hoodie (1) ', '330');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stocks` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `stocks`) VALUES
(1, 'CD Projekt Red Gear', '200', 'CDProjekt.jpg', 'Jacket for Protection', 50),
(2, 'Johnny Silverhand Figure', '20', 'Johnny.jpg', 'Figure as a Token for Collection', 5),
(3, 'Samurai Hoodie', '75', 'Jacket.jpg', 'Jacket for Protection', 30),
(6, 'Special Juicy Hamburger', '50', 'food-1.png', 'A special hamburger that is delicate and can get a lot of strength', 11),
(7, 'CD Projekt Red Phone Cover', '750', 'phone cover.png', 'A state of the art phone cover that is shock proof', 10),
(8, 'Dragon Logo', '50', 'dragon.jpg', 'A symbol that should be remembered.', 23),
(9, 'Cyberpunk Video Card', '50', 'Cyberpunk VC.jpg', 'A smooth powerful video card for performance', 24);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `email`, `password_1`, `password_2`) VALUES
(12, 'ken', 'ken@gmail.com', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
