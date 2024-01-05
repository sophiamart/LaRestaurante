-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2023 at 12:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `La_Resturante_Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Beverage_Menu`
--

CREATE TABLE `Beverage_Menu` (
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Ordered` tinyint(1) DEFAULT NULL,
  `Canceled` tinyint(1) DEFAULT NULL,
  `Prepared` tinyint(1) DEFAULT NULL,
  `Table #` int(11) DEFAULT NULL,
  `Request` varchar(50) DEFAULT NULL,
  `Description` varchar(300) NOT NULL,
  `Alcohol` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Beverage_Menu`
--

INSERT INTO `Beverage_Menu` (`Name`, `Price`, `Ordered`, `Canceled`, `Prepared`, `Table #`, `Request`, `Description`, `Alcohol`) VALUES
('Bartenura Rose', 9.99, NULL, NULL, NULL, NULL, '', 'If you would like your drink mixed, please type in the soda name in the request box', 1),
('Black Label', 12.99, NULL, NULL, NULL, NULL, '', 'If you would like your drink mixed, please type in the soda name in the request box', 1),
('Cappuccino', 3.99, NULL, NULL, NULL, NULL, '', 'Please provide how you would like your Cappuccino made in the request box\r\n150 cal.', 0),
('Ciroc', 11.99, NULL, NULL, NULL, NULL, '', 'If you would like your drink mixed, please type in the soda name in the request box', 1),
('Mango-Strawberry Iced Tea', 4.75, NULL, NULL, NULL, NULL, '', 'If you would like your drink mixed, please type in the beverage name in the request box\r\n100 cal.', 0),
('Soda', 3.99, NULL, NULL, NULL, NULL, '', 'Coca Cola, Sprite, Orange Fanta, Seltzer, Pepsi, Dr. Pepper, Grape Fanta, Starry', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Food_Menu`
--

CREATE TABLE `Food_Menu` (
  `Name` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Ordered` tinyint(1) DEFAULT NULL,
  `Canceled` tinyint(1) DEFAULT NULL,
  `Cooked` tinyint(1) DEFAULT NULL,
  `Table #` int(11) DEFAULT NULL,
  `Request` varchar(100) DEFAULT NULL,
  `Description` varchar(700) NOT NULL,
  `Course` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Food_Menu`
--

INSERT INTO `Food_Menu` (`Name`, `Price`, `Ordered`, `Canceled`, `Cooked`, `Table #`, `Request`, `Description`, `Course`) VALUES
('Black Tie Mousse Cake', 6.99, NULL, NULL, NULL, NULL, '', 'Rich layers of chocolate cake, dark chocolate cheesecake and creamy custard mousse.\r\n750 cal.', 'Desert'),
('Calamari', 14.75, NULL, NULL, NULL, NULL, '', 'Tender calamari, lightly breaded and fried. Served with marinara sauce and spicy ranch.\r\n670 cal., marinara 35 cal., spicy ranch 240 cal.', 'Appetizer'),
('Chicken Alfredo', 22.99, NULL, NULL, NULL, NULL, '', 'Creamy alfredo sauce made from scratch with ingredients like parmesan, cream, garlic and butter, served with fettuccine pasta and topped with sliced grilled chicken.\r\n1,570 cal.', 'Entree'),
('Chicken Parmigiana', 18.99, NULL, NULL, NULL, NULL, '', 'Two lightly fried parmesan-breaded chicken breasts with our homemade marinara and melted Italian cheeses. Served with a side of spaghetti.\r\n1,020 cal.', 'Entree'),
('Chocolate Brownie Lasagna', 10.99, NULL, NULL, NULL, NULL, '', 'Eight decadent layers of rich, fudgy brownie and sweet vanilla cream cheese frosting, topped with chocolate shavings and a chocolate drizzle.\r\n910 cal.', 'Desert'),
('Eggplant Parmigiana', 16.75, NULL, NULL, NULL, NULL, '', 'Hand-breaded eggplant, lightly fried and topped with marinara and melted mozzarella. Served with a side of spaghetti.\r\n1,070 cal.', 'Entree'),
('Five Cheese Ziti al Forno', 20.99, NULL, NULL, NULL, NULL, '', 'A baked blend of Italian cheeses, pasta and our signature five cheese marinara.\r\n1,170 cal.', 'Entree'),
('Fried Mozzarella', 12.99, NULL, NULL, NULL, NULL, '', 'Delicious fried mozzarella cheese with marinara sauce.\r\n800 cal., marinara 35 cal.', 'Appetizer'),
('Meatballs Parmigiana', 13.99, NULL, NULL, NULL, NULL, '', 'Five hearty meatballs baked in homemade marinara, topped with melted Italian cheeses and toasted breadcrumbs. 1,040 cal.', 'Appetizer'),
('Ravioli Carbonara', 17.99, NULL, NULL, NULL, NULL, '', 'Cheese ravioli baked in a creamy sauce with bacon, topped with a blend of Italian cheeses. \r\n1,390 cal.', 'Entree'),
('Shrimp Alfredo', 24.99, NULL, NULL, NULL, NULL, '', 'Creamy alfredo sauce made from scratch with ingredients like parmesan, cream, garlic and butter, tossed with fettuccine and sautéed shrimp.\r\n1,470 cal.', 'Entree'),
('Spaghetti & Meatballs', 23.99, NULL, NULL, NULL, NULL, '', 'Spaghetti and meatballs with your choice of marinara or meat sauce. \r\n970 cal. |  1,120 cal.', 'Entree'),
('Spinach-Artichoke Dip', 10.25, NULL, NULL, NULL, NULL, '', 'A blend of spinach, artichokes and cheeses served warm with flatbread crisps.\r\n1,160 cal.', 'Appetizer'),
('Stuffed Ziti Fritta', 11.99, NULL, NULL, NULL, NULL, '', 'Crispy fried ziti filled with five cheeses. Served with alfredo and marinara dipping sauces.\r\n500 cal., marinara 35 cal., alfredo sauce 220 cal.', 'Appetizer'),
('Tiramisu', 8.99, NULL, NULL, NULL, NULL, '', 'The classic Italian dessert. A layer of creamy custard set atop espresso-soaked ladyfingers.\r\n470 cal.', 'Desert');

-- --------------------------------------------------------

--
-- Table structure for table `Table1`
--

CREATE TABLE `Table1` (
  `Name` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(700) NOT NULL,
  `Request` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Table1`
--

INSERT INTO `Table1` (`Name`, `Price`, `Description`, `Request`) VALUES
('Bartenura Rose', 9.99, 'If you would like your drink mixed, please type in the soda name in the request box', ''),
('Calamari', 14.75, 'Tender calamari, lightly breaded and fried. Served with marinara sauce and spicy ranch.\r\n670 cal., marinara 35 cal., spicy ranch 240 cal.', ''),
('Chicken Alfredo', 22.99, 'Creamy alfredo sauce made from scratch with ingredients like parmesan, cream, garlic and butter, served with fettuccine pasta and topped with sliced grilled chicken.\r\n1,570 cal.', ''),
('Ciroc', 11.99, 'If you would like your drink mixed, please type in the soda name in the request box', ''),
('Mango-Strawberry Iced Tea', 4.75, 'If you would like your drink mixed, please type in the beverage name in the request box\r\n100 cal.', ''),
('Soda', 3.99, 'Coca Cola, Sprite, Orange Fanta, Seltzer, Pepsi, Dr. Pepper, Grape Fanta, Starry', '');

-- --------------------------------------------------------

--
-- Table structure for table `Tables`
--

CREATE TABLE `Tables` (
  `Table #` int(11) NOT NULL,
  `Table Size` int(11) NOT NULL,
  `Party Size` int(11) DEFAULT NULL,
  `Occupied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tables`
--

INSERT INTO `Tables` (`Table #`, `Table Size`, `Party Size`, `Occupied`) VALUES
(1, 2, 0, 0),
(2, 2, 0, 0),
(3, 2, 0, 0),
(4, 2, 0, 0),
(5, 4, 0, 0),
(6, 4, 0, 0),
(7, 4, 0, 0),
(8, 4, 0, 0),
(9, 8, 0, 0),
(10, 8, 0, 0),
(11, 8, 0, 0),
(12, 8, 0, 0),
(13, 16, 0, 0),
(14, 16, 0, 0),
(15, 16, 0, 0),
(16, 16, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `User_Login`
--

CREATE TABLE `User_Login` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Position` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_Login`
--

INSERT INTO `User_Login` (`Username`, `Password`, `FirstName`, `LastName`, `Position`) VALUES
('bella@gmail.com', 'bella1234', 'Bella', 'Swan', 'Waiter'),
('christian@gmail.com', 'christian1234', 'Christian', 'Grey', 'Bartender'),
('jack@gmail.com', 'jack1234', 'Jack', 'Sparrow', 'Host'),
('rose@gmail.com', 'rose1234', 'Rose', 'Dawson', 'Chef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Beverage_Menu`
--
ALTER TABLE `Beverage_Menu`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Food_Menu`
--
ALTER TABLE `Food_Menu`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Table1`
--
ALTER TABLE `Table1`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Tables`
--
ALTER TABLE `Tables`
  ADD PRIMARY KEY (`Table #`);

--
-- Indexes for table `User_Login`
--
ALTER TABLE `User_Login`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
