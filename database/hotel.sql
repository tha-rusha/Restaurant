-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 07:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTopCustomer` ()   BEGIN
    SELECT customer, COUNT(*) as order_count
    FROM orders
    GROUP BY customer
    ORDER BY order_count DESC
    LIMIT 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTopFood` ()   BEGIN
    SELECT itemCode, COUNT(*) as item_count
    FROM orders
    GROUP BY itemCode
    ORDER BY item_count DESC
    LIMIT 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTopFoodItem` ()   BEGIN
    SELECT itemCode, COUNT(*) as order_count
    FROM orders
    GROUP BY itemCode
    ORDER BY order_count DESC
    LIMIT 1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tpNumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminId`, `name`, `tpNumber`, `email`, `password`) VALUES
(1, 10, 'admin', 111111111, 'admin@gmail.com', '1234'),
(2, 11, 'admin1', 110000000, 'admin1@gmail.com', 'abcd'),
(3, 12, 'admin2', 121212121, 'admin2@gmail.com', 'aaaa'),
(4, 13, 'admin3', 117777777, 'admin3@gmail.com', '1212'),
(5, 14, 'admin4', 111212121, 'admin4@gmail.com', 'abab');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `id` int(10) NOT NULL,
  `cashierId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tpNumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`id`, `cashierId`, `name`, `tpNumber`, `email`, `password`) VALUES
(1, 1, 'cashier', 112345678, 'cashier@gmail.com', '1010'),
(2, 2, 'cashier1', 761234123, 'cashier1@gmail.com', '1111'),
(3, 3, 'cashier2', 712323232, 'cashier2@gmail.com', 'ab12'),
(4, 4, 'cashier3', 781111111, 'cashier3@gmail.com', '0000'),
(5, 5, 'cashier4', 379999999, 'cashier4@gmail.com', '0101'),
(6, 6, 'cashier5', 777777777, 'cashier5@gmail.com', '11aa');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `customerId` int(10) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `tpNumber` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customerId`, `customerName`, `tpNumber`, `address`, `email`, `password`) VALUES
(1, 0, 'Tharusha', 761234567, 'Pitipana, Homagama', 'tharusha@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 0, 'Tharusha Dilhara', 712323232, 'Homagama, Colombo', 'tharusha1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 0, 'Sanduni Upekha', 701234567, 'Abc lane, Colombo', 'sanduni1234@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(4, 0, 'Sanduni', 372222222, 'Galgamuwa, Kurunegala', 'sanduni@gmail.com', 'a01610228fe998f515a72dd730294d87'),
(5, 0, 'Jayani Malshika', 751212121, 'Godagama, Homagama', 'jayani@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(8, 0, 'abcd', 111234123, 'Colombo', 'abcd@gmail.com', '749d7048edd2de31c2c7a88d4d196254'),
(9, 0, 'reahal', 127589365, 'gampaha', 'rahal@gmail.com', '1a1dc91c907325c69271ddf0c944bc72');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `log_to_email_outbox_customer` AFTER INSERT ON `customer` FOR EACH ROW BEGIN
    INSERT INTO email_outbox (subject, message) VALUES ('Customer', 'New customer registered');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(10) NOT NULL,
  `deliveryId` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `deliveryId`, `status`) VALUES
(1, 100, 'Completed'),
(2, 101, 'Completed'),
(3, 102, 'Completed'),
(4, 103, 'Rejected'),
(5, 104, 'Completed'),
(6, 105, 'Rejected'),
(7, 106, 'Completed'),
(8, 107, 'Completed'),
(9, 108, 'Completed'),
(10, 109, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `email_outbox`
--

CREATE TABLE `email_outbox` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_outbox`
--

INSERT INTO `email_outbox` (`id`, `subject`, `message`, `created_time`) VALUES
(1, 'Feedback', 'New feedback received', '2023-10-22 12:14:06'),
(2, 'Customer', 'New customer registered', '2023-10-22 12:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tpNumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `tpNumber`, `email`, `message`) VALUES
(1, 'Sandani', 712554567, 'sandani2@gmail.com', 'The menu offered a diverse range of options to suit different tastes and dietary preferences.'),
(2, 'Daniel', 772859567, 'daniel@gmail.com', 'It was evident that only fresh, high-quality ingredients were used.'),
(3, 'Amali', 764258963, 'amali@gmail.com', 'The service was efficient, and the staff was attentive without being intrusive.'),
(4, 'Jessica', 751238546, 'jess12@gmail.com', 'The atmosphere was relaxed, making it a comfortable place to enjoy a meal.'),
(5, 'kasun', 772555430, 'kasunlk@gmail.com', 'The staff had excellent knowledge of the menu and gave great recommendations.'),
(6, 'Hansika', 775263485, 'hans17@gmail.com', 'The presentation of the dishes was visually appealing and demonstrated attention to detail.'),
(7, 'Jehan', 765213452, 'jeh3@gmail.com', 'The prices were reasonable for the high-quality dining experience we received.'),
(8, 'shehara', 712554865, 'sheri@gmail.com', 'The staff were friendly and helpful, though there were occasional moments of busyness.'),
(9, 'sonali', 771453622, 'sonali@gmail.com', 'The portions were reasonable, ensuring we left satisfied without feeling overly full.'),
(10, 'Tinali', 715884569, 'tina28@gmail.com', 'Staff were attentive in refilling our drinks, ensuring we never felt parched during our meal.'),
(11, 'Shehan', 774058254, 'shehan98@gmail.com', 'The service was top-notch, with staff demonstrating professionalism, knowledge, and a genuine passion for hospitality.'),
(12, 'Dinara', 772054158, 'dinaram@gmail.com', 'Highly recommended. '),
(13, 'johan', 704032726, 'johan@gmail.com', 'While there was a bit of a wait, it was within reasonable limits, especially for a mid-range restaurant.'),
(15, 'Senith Perera', 778264396, 'senith25@gmail.com', 'We felt we got good value for the price, with decent portion sizes and quality ingredients.'),
(16, 'nethuki', 778264242, 'nethuki@gmail.com', 'The restaurant was clean and well-maintained, creating a pleasant environment for diners.'),
(17, 'Tashan Dimith', 714886359, 'tesh04@gmail.com', 'The dessert selection was a standout, showcasing a level of creativity and skill that truly impressed.'),
(18, 'Ihali', 702556389, 'ir32104@gmail.com', 'The vegetarian dishes were flavorful and well-prepared, offering satisfying choices for non-meat eaters.'),
(19, 'Rehan', 772556486, 'rehanz@gmail.com', 'The specials or promotions offered provided excellent value for the quality of food and service.'),
(20, 'Dilani', 772456823, 'dilani65@gmail.com', ' The cleanliness of the restrooms was appreciated, contributing to an overall positive dining experience.'),
(21, 'Senuri ', 754136825, 'senuri24@gmail.com', 'The noise level was manageable, allowing for conversation without being too loud or disruptive.'),
(22, 'Tharusha Dilhara', 701234567, 'tharu123@gmail.com', 'trigger');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `log_to_email_outbox` AFTER INSERT ON `feedback` FOR EACH ROW BEGIN
    INSERT INTO email_outbox (subject, message) VALUES ('Feedback', 'New feedback received');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(2) NOT NULL,
  `itemCode` varchar(5) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `itemImage` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `itemCode`, `itemName`, `description`, `price`, `itemImage`, `availability`) VALUES
(3, '101', 'Spring Roll', 'Delight your taste buds with our crispy and flavorful spring rolls!', '0.50', 'images/menu/5.png', 1),
(4, '102', 'Grilled Salmon Fellet', 'Indulge in our succulent grilled salmon fillet for a burst of exquisite flavors.', '3.70', 'images/menu/7.png', 1),
(5, '103', 'Zucchini Noodles', 'Savor the freshness of our Zucchini Noodles, a guilt-free delight that\'s as delicious as it is nutritious!', '2.93', 'images/menu/11.png', 1),
(6, '104', 'Sandwich', 'Indulge in our mouthwatering sandwiches – a delicious symphony of flavors in every bite!', '1.08', 'images/menu/12.png', 1),
(7, '105', 'Chocolate Donuts', 'Feast your eyes on our mouthwatering, freshly baked Donuts that are sure to satisfy any craving!', '0.62', 'images/menu/10.png', 1),
(8, '106', 'Fresh Orange Juice', 'Quench your thirst with the zesty allure of our freshly squeezed orange juice!', '0.93', 'images/menu/8.png', 1),
(9, '107', 'Chocolate Mousse', 'Indulge in velvety bliss with our exquisite Chocolate Mousse—pure decadence in every spoonful.', '2.00', 'images/menu/6.png', 1),
(10, '108', 'Fried Chicken', 'Delight in the crispy goodness of our signature Fried Chicken!', '2.62', 'images/menu/4.png', 1),
(11, '109', 'Strawberry & Orange Mojito', 'Refreshing blend of ripe strawberries and zesty orange in our signature Mojito!', '1.54', 'images/menu/9.png', 1),
(12, '110', 'Chicken Pizza', 'Deliciously savory Chicken Pizza that\'ll make your taste buds dance!', '7.71', 'images/menu/13.png', 1),
(13, '156', 'Hot Dog', 'Indulge in the classic American delight with our sizzling, mouthwatering Hot Dog!', '0.86', 'images/menu/156.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordermethod`
--

CREATE TABLE `ordermethod` (
  `id` int(10) NOT NULL,
  `orderMethod` varchar(20) NOT NULL,
  `orderType` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordermethod`
--

INSERT INTO `ordermethod` (`id`, `orderMethod`, `orderType`, `status`) VALUES
(1, 'Online', 'Pre-order', 'Completed'),
(2, 'Online', 'Delivery', 'Completed'),
(3, 'Cashier', 'Dine-in', 'Completed'),
(4, 'Cashier', 'Take away', 'Completed'),
(5, 'Online', 'Delivery', 'Rejected'),
(6, 'Cashier', 'Dine-in', 'Completed'),
(7, 'Online', 'Pre-order', 'Completed'),
(8, 'Cashier', 'Take away', 'Rejected'),
(9, 'Cashier', 'Take away', 'Completed'),
(10, 'Online', 'Pre-Order', 'Completed'),
(11, 'Online', 'Delivery', 'Rejected'),
(12, 'Cashier', 'Dine-in', 'Completed'),
(13, 'Cashier', 'Dine-in', 'Rejected'),
(14, 'Online', 'Delivery', 'Completed'),
(15, 'Cashier', 'Take away', 'Completed'),
(16, 'Cashier', 'Dine-in', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `orderId` int(10) NOT NULL,
  `itemCode` int(10) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `startTime` time(5) NOT NULL,
  `endTime` time(5) NOT NULL,
  `orderMethod` varchar(20) NOT NULL,
  `tableNumber` int(10) NOT NULL,
  `totalCost` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `customer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderId`, `itemCode`, `itemName`, `date`, `startTime`, `endTime`, `orderMethod`, `tableNumber`, `totalCost`, `status`, `customer`) VALUES
(2, 100, 108, 'Fried Chicken', '2023-08-10', '17:45:34.00000', '18:11:34.00000', 'Dine-in', 4, '7.86', 'Completed', '0776380862'),
(3, 101, 156, 'Hot Dog', '2023-08-21', '19:48:58.00000', '20:00:58.00000', 'Take-away', 1, '3.44', 'Completed', '0703582767'),
(4, 102, 101, 'Spring Roll', '2023-08-31', '10:25:07.00000', '10:40:07.00000', 'Dine-in', 3, '2.50', 'Completed', '0702837507'),
(5, 103, 106, 'Fresh Orange Juice', '2023-09-03', '13:52:35.00000', '14:16:35.00000', 'Dine-in', 2, '1.86', 'Completed', '0752809754'),
(6, 104, 105, 'Chocolate Donuts', '2023-09-06', '14:54:00.00000', '15:24:00.00000', 'Delivery', 0, '2.48', 'Completed', '0715410022'),
(7, 105, 110, 'Chicken Pizza', '2023-09-13', '18:55:35.00000', '19:28:35.00000', 'Dine-in', 2, '7.71', 'Completed', '0715410022'),
(8, 106, 156, 'Hot Dog', '2023-09-14', '17:09:05.00000', '17:25:05.00000', 'Take-away', 1, '5.16', 'Completed', '0714405007'),
(9, 107, 103, 'Zucchini Noodles', '2023-09-21', '20:04:22.00000', '20:41:22.00000', 'Delivery', 0, '2.93', 'Completed', '0713699023'),
(10, 108, 104, 'Sandwich', '2023-09-25', '09:13:31.00000', '09:29:31.00000', 'Take-away', 1, '10.80', 'Completed', '0788419109'),
(11, 109, 110, 'Chicken Pizza', '2023-09-25', '21:07:21.00000', '21:46:21.00000', 'Delivery', 0, '15.42', 'Completed', '0766380862'),
(12, 110, 109, 'Strawberry & Orange Mojito', '2023-09-27', '13:42:59.00000', '14:15:59.00000', 'Dine-in', 2, '3.08', 'Completed', '0703582767'),
(13, 111, 102, 'Grilled Salmon Fellet', '2023-09-28', '18:25:17.00000', '18:43:17.00000', 'Dine-in', 4, '3.70', 'Completed', '0713699023'),
(14, 112, 107, 'Chocolate Mousse', '2023-09-28', '19:38:45.00000', '19:53:45.00000', 'Dine-in', 5, '4.00', 'Completed', '0715410022'),
(15, 113, 108, 'Fried Chicken', '2023-09-28', '20:20:00.00000', '21:00:00.00000', 'Take-away', 2, '2.62', 'Completed', '0702837507'),
(16, 114, 101, 'Spring Roll', '2023-09-30', '09:22:35.00000', '10:06:35.00000', 'Take-away', 1, '5.0', 'Completed', '0714319533'),
(17, 115, 104, 'Sandwich', '2023-10-02', '10:23:06.00000', '10:50:06.00000', 'Dine-in', 5, '4.32', 'Completed', '0752809754'),
(18, 116, 103, 'Zucchini Noodles', '2023-10-03', '19:52:42.00000', '20:21:42.00000', 'Take-away', 1, '5.86', 'Completed', '0714405007'),
(19, 117, 105, 'Chocolate Donuts', '2023-10-03', '20:31:43.00000', '20:38:43.00000', 'Delivery', 0, '6.20', 'Completed', '0703582767'),
(20, 118, 109, 'Strawberry & Orange Mojito', '2023-10-07', '08:33:41.00000', '08:58:41.00000', 'Dine-in', 2, '4.62', 'Completed', '0766380862'),
(21, 119, 110, 'Chicken Pizza', '2023-10-07', '18:21:52.00000', '18:59:52.00000', 'Take-away', 1, '7.71', 'Completed', '0714405007'),
(22, 120, 110, 'Chicken Pizza', '2023-10-08', '21:01:20.00000', '21:43:20.00000', 'Delivery', 0, '23.13', 'Completed', '0714319533'),
(23, 121, 107, 'Chocolate Mousse', '2023-10-11', '14:37:11.00000', '15:04:11.00000', 'Dine-in', 3, '8.00', 'Completed', '0702837507'),
(24, 122, 103, 'Zucchini Noodles', '2023-10-12', '18:11:29.00000', '18:48:29.00000', 'Dine-in', 2, '5.86', 'Completed', '0788419109'),
(25, 123, 102, 'Grilled Salmon Fellet', '2023-10-15', '20:07:45.00000', '20:35:45.00000', 'Dine-in', 3, '7.40', 'Completed', '0754202438'),
(26, 124, 152, 'Devilled Prawns', '2023-10-15', '20:47:48.00000', '21:11:48.00000', 'Take-away', 2, '10.72', 'Completed', '0713699023'),
(27, 125, 153, 'Chicken Biriyani', '2023-10-17', '12:43:50.00000', '13:13:50.00000', 'Delivery', 0, '20.96', 'Completed', '0766380862'),
(28, 126, 106, 'Fresh Orange Juice', '2023-10-17', '17:16:00.00000', '17:31:00.00000', 'Dine-in', 4, '3.72', 'Completed', '0703582767'),
(29, 127, 154, 'Indian Dosa', '2023-10-19', '19:19:16.00000', '19:49:16.00000', 'Dine-in', 2, '4.80', 'Completed', '0788419109'),
(30, 128, 155, 'Chicken Pasta', '2023-10-19', '20:37:32.00000', '21:00:32.00000', 'Delivery', 0, '2.16', 'Completed', '0754202438'),
(31, 129, 101, 'Spring Roll', '2023-10-20', '16:10:28.00000', '16:29:28.00000', 'Take-away', 5, '1.50', 'Completed', '0714405007'),
(32, 130, 106, 'Fresh Orange Juice', '2023-10-22', '09:24:52.00000', '09:41:52.00000', 'Dine-in', 3, '1.86', 'Completed', '0766380862'),
(33, 131, 120, 'Chicken Pizza', '2023-10-22', '11:09:41.00000', '11:20:41.00800', 'Take-away', 0, '7.71', 'Rejected', '0703582767');

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `log_order_status_change` AFTER UPDATE ON `orders` FOR EACH ROW BEGIN
    IF NEW.status <> OLD.status THEN
        INSERT INTO order_log (order_id, new_status, timestamp)
        VALUES (order_id, status, NOW());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_log`
--

CREATE TABLE `order_log` (
  `log_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `new_status` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(10) NOT NULL,
  `itemCode` int(10) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `itemImage` varchar(20) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `itemCode`, `itemName`, `price`, `description`, `itemImage`, `availability`) VALUES
(12, 151, 'Lamb Biriyani', '5.24', 'Buy 1 Get 1 Free', 'images/menu/151.jpg', 1),
(13, 152, 'Devilled Prawns', '2.68', '50% off only this week!', 'images/menu/152.jpg', 1),
(14, 153, 'Chicken Biriyani', '5.24', 'Buy 1 Get 1 Free', 'images/menu/153.jpg', 1),
(15, 154, 'Indian Dosa', '0.40', '50% off only this week!', 'images/menu/154.jpg', 1),
(16, 155, 'Chicken Pasta', '2.16', 'Buy 1 Get 1 Free', 'images/menu/155.jpg', 1),
(17, 156, 'Chicken Hot Dog', '0.86', 'Weekly 50% off', 'images/menu/156.jpg', 1),
(18, 108, 'Fried Chicken', '2.62', 'Buy 1 Get 1 Free', 'images/menu/4.png', 1),
(19, 106, 'Fresh Orange Juice', '0.93', '10% Off!', 'images/menu/8.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `staffId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tpNumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffId`, `name`, `tpNumber`, `email`, `password`) VALUES
(1, 2100, 'Dinesh ', 785698765, 'dinesh12@gmail.com', 'SD45DC'),
(2, 2101, 'Lasitha', 7056876, 'lasitha13@gmail.com', 'GT5FB1'),
(3, 2102, 'Chanaka', 713698526, 'chanaka90@gmail.com', 'YD9F55'),
(4, 2103, 'Kalpa', 725697463, 'kalpat@gmail.com', '4KK56D'),
(5, 2104, 'Dilan', 712356987, 'dilan@gmailcom', 'FDT45L'),
(6, 2105, 'Mihira', 765986321, 'mihiradenuwam@gmail.com', 'HDYT55'),
(7, 2106, 'Tharaka', 705899632, 'thara55@gmail.com', 'WE45LK'),
(8, 2107, 'Thilina', 768952456, 'thilinad95@gmail.com', 'GH459O'),
(9, 2108, 'Ravindu', 724489523, 'ravi22@gmail.com', 'FS74PO'),
(10, 2109, 'Rahal', 712659850, 'rahal78@gmail.com', '@GH521');

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

CREATE TABLE `tasklist` (
  `id` int(10) NOT NULL,
  `taskId` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasklist`
--

INSERT INTO `tasklist` (`id`, `taskId`, `status`) VALUES
(1, 1000, 'Pending'),
(2, 1001, 'Completed'),
(3, 1002, 'Cancel'),
(4, 1003, 'Complete'),
(5, 1004, 'Pending'),
(6, 1005, 'Completed'),
(7, 1006, 'Completed'),
(8, 1007, 'Pending'),
(9, 1008, 'Completed'),
(10, 1009, 'Cancel'),
(11, 1010, 'Pending'),
(12, 1011, 'Completed'),
(13, 1012, 'Cancel'),
(14, 1013, 'Completed'),
(15, 1014, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `todayspecial`
--

CREATE TABLE `todayspecial` (
  `id` int(10) NOT NULL,
  `itemCode` int(10) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(50) NOT NULL,
  `itemImage` varchar(100) NOT NULL,
  `availability` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todayspecial`
--

INSERT INTO `todayspecial` (`id`, `itemCode`, `itemName`, `price`, `description`, `itemImage`, `availability`) VALUES
(1, 108, 'Fried Chicken', 3, 'Delight in the crispy goodness of our signature Fr', 'images/menu/4.png', 1),
(2, 107, 'Chocolate Mousse', 2, 'Indulge in velvety bliss with our exquisite Chocol', 'images/menu/6.png\r\n', 1),
(3, 101, 'Spring Roll', 1, 'Delight your taste buds with our crispy and flavor', 'images/menu/5.png', 1),
(4, 102, 'Grilled Salmon Felle', 4, 'Indulge in our succulent grilled salmon fillet for', 'images/menu/7.png', 1),
(5, 104, 'Sandwich', 1, 'Indulge in our mouthwatering sandwiches – a delici', 'images/menu/12.png', 1),
(6, 103, 'Zucchini Noodles', 3, 'Savor the freshness of our Zucchini Noodles, a gui', 'images/menu/11.png', 1),
(7, 105, 'Chocolate Donuts', 1, 'Feast your eyes on our mouthwatering, freshly bake', 'images/menu/10.png\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_outbox`
--
ALTER TABLE `email_outbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordermethod`
--
ALTER TABLE `ordermethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_log`
--
ALTER TABLE `order_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todayspecial`
--
ALTER TABLE `todayspecial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `email_outbox`
--
ALTER TABLE `email_outbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ordermethod`
--
ALTER TABLE `ordermethod`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_log`
--
ALTER TABLE `order_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `todayspecial`
--
ALTER TABLE `todayspecial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
