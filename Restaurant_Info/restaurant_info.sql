-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2022 at 11:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE `Food` (
  `food_ID` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `food_category` varchar(50) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `serving_size` varchar(50) NOT NULL,
  `serving_amount` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `sodium` int(11) NOT NULL,
  `sugar` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `protein` int(11) NOT NULL,
  `carbs` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`food_ID`, `food_name`, `description`, `food_category`, `price`, `serving_size`, `serving_amount`, `calories`, `sodium`, `sugar`, `fat`, `protein`, `carbs`, `rest_id`) VALUES
(1414, 'Chicken Cordon Bleu', 'A dish of meat wrapped around cheese, then breaded and pan-fried or deep-fried.', 'Entree', '32.99', 'One chicken cutlet', 1, 292, 1715, 3, 45, 68, 8, 555555),
(2424, 'Pico de Gallo', 'A type of salsa commonly used in Mexican cuisine.', 'Side', '9.99', 'One cup', 1, 17, 227, 2, 0, 1, 4, 111111),
(3434, 'Chocolate Cake', 'A cake flavored with melted chocolate, cocoa powder, or both.', 'Dessert', '12.99', 'One slice', 1, 424, 279, 44, 22, 4, 58, 222222),
(4343, 'Nachos', 'Consists of fried tortilla chips covered with melted cheese or cheese sauce, as well as other toppings.', 'Appetizer', '7.99', 'One plate', 1, 274, 250, 2, 17, 3, 28, 333333),
(5454, 'Pepperoni Pizza', 'A round, flat base of leavened wheat-based dough topped with sauce, cheese, and pepperoni.', 'Entree', '15.99', 'One pizza', 8, 2504, 6080, 29, 104, 104, 280, 444444);

-- --------------------------------------------------------

--
-- Table structure for table `Restaurants`
--

CREATE TABLE `Restaurants` (
  `rest_id` int(11) NOT NULL,
  `rest_name` varchar(50) NOT NULL,
  `rest_desc` varchar(300) NOT NULL,
  `rest_street` varchar(50) NOT NULL,
  `rest_city` varchar(50) NOT NULL,
  `rest_state` varchar(50) NOT NULL,
  `rest_zip` int(11) NOT NULL,
  `website_url` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `service` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Restaurants`
--

INSERT INTO `Restaurants` (`rest_id`, `rest_name`, `rest_desc`, `rest_street`, `rest_city`, `rest_state`, `rest_zip`, `website_url`, `phone_number`, `service`, `type`) VALUES
(111111, 'The Spicy Tortilla', 'Come here for all your Mexican cravings, from Mexican-American traditional foods to those classic flavors like they were straight out of Mexico City!', 'Boat Rd.', 'Strongsville', 'Kentucky', 81734, 'www.mycoolrestaurant.com', '428-174-2938', 'Service1', 'Type1'),
(222222, 'Momma’s Cooking', 'Our menu is chock full of classic American meals, all homemade with love!', 'Circle Drive.', 'Evergreen', 'Missouri', 91752, 'www.pleaseeathere.org', '998-273-0193', 'Service2', 'Type2'),
(333333, 'The Salsa Palace', 'Come sample our world-famous nacho platter while you relish in our premium stocked bar!', 'Miser Street', 'Tootanoot', 'Mississippi', 1928, 'www.whatameal.com', '921-333-5123', 'Service3', 'Type3'),
(444444, 'Seas Of The World', 'A buffet where you can sample dishes from all across the globe! Come expand your palate with us!', 'Here Rd.', 'Deadwood', 'South Dakota', 99999, 'www.stolenaddress.gov', '555-555-5551', 'Service4', 'Type4'),
(555555, 'The Chicken Palace', 'A restaurant where all we serve is chicken! From the mundane to fancy cuisine, we have it all!', 'France Blvd.', 'Youngstown', 'Ohio', 12345, 'www.foodfoodfood.com', '119-119-1199', 'Service5', 'Type5');

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `review_ID` int(11) NOT NULL,
  `review_title` varchar(50) NOT NULL,
  `month` char(2) NOT NULL,
  `day` char(2) NOT NULL,
  `year` char(4) NOT NULL,
  `price_rating` varchar(5) NOT NULL,
  `food_rating` varchar(5) NOT NULL,
  `service_rating` varchar(5) NOT NULL,
  `review_description` varchar(200) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `rest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`review_ID`, `review_title`, `month`, `day`, `year`, `price_rating`, `food_rating`, `service_rating`, `review_description`, `user_id`, `rest_id`) VALUES
(1, 'Fantastic Restaurant!', '01', '01', '2022', '9/10', '9/10', '9/10', 'Good food, good service, reasonable price; perfect for any and all palates!', '12345', 444444),
(2, 'Go if you hate yourself…', '02', '01', '2022', '7/10', '5/10', '2/10', 'Fair price for the horrible slop and service they give you. Stay away at all costs!', '54321', 555555),
(3, 'A Must-Go', '03', '01', '2022', '10/10', '10/10', '10/10', 'Everything about this local restaurant rocked! The food, the people and the atmosphere! Would recommend you go out of your way to come here.', '13524', 333333),
(4, 'Lousy Excuse for a Restaurant', '04', '01', '2022', '4/5', '3/5', '2.5/5', 'Wasn\'t a bad experience, but I would not recommend because they undercooked my burger when I specifically requested medium rare.', '53142', 222222),
(5, 'I’m Conflicted', '05', '01', '2022', '1/5', '0/5', '5/5', 'The food may have sucked but the servers were fantastic and brought me my slop posthaste!', '24135', 111111);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` varchar(15) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blog_site` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `bio_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `phone_number`, `email`, `blog_site`, `first_name`, `last_name`, `bio_description`) VALUES
('12345', '118-875-1010', 'myopinion@gmail.com', 'toocool4gruel@blogspot.com', 'Westly', 'Wester', 'I\'ve traveled all over the world sampling the finest cuisine.'),
('13524', '123-123-7890', 'sketchyemail@mail.com', 'eatingtimewithjeff@blogspot.com', 'Jeff', 'Jefferson', 'N/A'),
('24135', '765-456-0101', 'toomuchclass@yahoo.com', 'fancymcfancypants@blogspot.com', 'Deborah', 'Musenki', 'Only the most posh of the posh should read this page, I cater to the richest of the rich.'),
('53142', '445-667-8889', 'franksredhot@gmail.com', 'frankshangoutspot@blogspot.com', 'Frank', 'Smith', 'Just an average joe trying out foods so you don\'t just have to order chicken tenders!'),
('54321', '888-777-6543', 'dontcontactme@yahoo.com', 'readmyblogs@blogspot.com', 'Mr.', 'Coolman', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`food_ID`),
  ADD KEY `rest_id` (`rest_id`);

--
-- Indexes for table `Restaurants`
--
ALTER TABLE `Restaurants`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`review_ID`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rest_id` (`rest_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Food`
--
ALTER TABLE `Food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`rest_id`) REFERENCES `Restaurants` (`rest_id`);

--
-- Constraints for table `Review`
--
ALTER TABLE `Review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`rest_id`) REFERENCES `Restaurants` (`rest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
