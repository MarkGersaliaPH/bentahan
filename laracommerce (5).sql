-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 11:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `house_num` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `house_num`, `street`, `municipality`, `barangay`, `created_at`, `updated_at`) VALUES
(1, 12, 'test number', 'test street', 'test municipality', 'test barangay', '2018-10-14 07:30:11', '2018-10-14 07:30:11'),
(2, 12, 'test number', 'test street', 'test municipality', 'test barangay', '2018-10-14 07:35:28', '2018-10-14 07:35:28'),
(3, 12, 'test number', 'test street', 'test municipality', 'test barangay', '2018-10-14 07:35:42', '2018-10-14 07:35:42'),
(4, 20, 'test number', 'asdasdasdasdaasddasdasd', 'test municipality', 'barangay', '2018-10-14 07:43:24', '2018-10-14 07:43:24'),
(5, 21, 'test number', 'asdasdasdasdaasddasdasd', 'test municipality', 'barangay', '2018-10-14 07:50:55', '2018-10-14 07:50:55'),
(6, 22, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 07:54:53', '2018-10-14 07:54:53'),
(7, 22, 'test number', 'Pulong Kendi Road', 'municipality', 'barangay', '2018-10-14 12:31:40', '2018-10-14 12:31:40'),
(8, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:35:35', '2018-10-14 13:35:35'),
(9, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:36:10', '2018-10-14 13:36:10'),
(10, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:36:35', '2018-10-14 13:36:35'),
(11, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:37:36', '2018-10-14 13:37:36'),
(12, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:37:54', '2018-10-14 13:37:54'),
(13, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:38:05', '2018-10-14 13:38:05'),
(14, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:39:37', '2018-10-14 13:39:37'),
(15, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:40:06', '2018-10-14 13:40:06'),
(16, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:40:35', '2018-10-14 13:40:35'),
(17, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:41:01', '2018-10-14 13:41:01'),
(18, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:41:10', '2018-10-14 13:41:10'),
(19, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:41:32', '2018-10-14 13:41:32'),
(20, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:42:19', '2018-10-14 13:42:19'),
(21, 26, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 13:42:42', '2018-10-14 13:42:42'),
(22, 2, 'test number', 'Pulong Kendi Road', 'municipality', 'barangay', '2018-10-14 14:32:21', '2018-10-14 14:32:21'),
(23, 41, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-14 14:52:56', '2018-10-14 14:52:56'),
(24, 43, 'test number', 'Pulong Kendi Road', 'test municipality', 'barangay', '2018-10-15 11:25:49', '2018-10-15 11:25:49'),
(25, 44, 'test number', 'Pulong Kendi Road', 'test municipality', 'test barangay', '2018-10-15 12:14:46', '2018-10-15 12:14:46'),
(26, 45, 'test number', 'asdasdasdasdaasddasdasd', 'municipality', 'barangay', '2018-10-15 12:17:39', '2018-10-15 12:17:39'),
(27, 46, '#34-B', 'A. Bonifacio Street', 'Taguig City', 'Sta. Ana', '2018-11-02 13:53:00', '2018-11-02 13:53:00'),
(28, 48, '#34-B', 'A. Bonifaction Street', 'Taguig City', 'Sta ana', '2018-11-07 05:01:53', '2018-11-07 05:01:53'),
(29, 50, '#2315', 'Test Street', 'Mandaluyong City', 'Pinabuhatan', '2018-11-07 05:17:57', '2018-11-07 05:17:57'),
(30, 51, '#234 Test', 'Shaw', 'Mandaluyong', 'Shaw blvd.', '2018-11-07 05:26:11', '2018-11-07 05:26:11'),
(31, 51, '#234 Test', 'Shaw', 'Mandaluyong', 'Shaw blvd.', '2018-11-07 05:26:28', '2018-11-07 05:26:28'),
(32, 51, '#234 Test', 'Shaw', 'Mandaluyong', 'Shaw blvd.', '2018-11-07 05:26:40', '2018-11-07 05:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `user_id` int(11) NOT NULL,
  `unit_room_floor` varchar(50) DEFAULT NULL,
  `building_name` varchar(50) DEFAULT NULL,
  `house_building_no` varchar(50) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `subdivision_village` varchar(50) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `city_municipality` varchar(50) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `item_id`, `user_id`, `session_id`, `created_at`, `updated_at`, `quantity`, `status`) VALUES
(7, 1, NULL, 'l5u5rucon35uikl4dpqjm8tjl0', '2018-10-15 12:12:00', '2018-11-02 13:45:04', 8, 'ordered'),
(8, 3, NULL, 'l5u5rucon35uikl4dpqjm8tjl0', '2018-10-15 12:33:56', '2018-10-15 12:33:56', 1, NULL),
(9, 7, NULL, 'l5u5rucon35uikl4dpqjm8tjl0', '2018-10-28 00:46:33', '2018-11-02 13:45:38', 3, NULL),
(10, 4, NULL, 'i9rdmc0et8oqpsdm38odp2qg15', '2018-11-02 09:25:46', '2018-11-02 13:53:00', 4, 'ordered'),
(11, 5, NULL, 'i9rdmc0et8oqpsdm38odp2qg15', '2018-11-02 13:44:31', '2018-11-02 13:53:00', 1, 'ordered'),
(12, 9, NULL, 'cdigtp677f8tbnf1thgor8f7u4', '2018-11-07 05:00:13', '2018-11-07 05:24:56', 3, 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(19, 'Arts & Crafts', '2018-08-13 07:32:01', '2018-08-13 07:32:01'),
(20, 'Automotive', '2018-08-13 07:32:07', '2018-08-13 07:32:07'),
(21, 'Baby', '2018-08-13 07:32:10', '2018-08-13 07:32:10'),
(22, 'Beauty & Personal Care', '2018-08-13 07:32:22', '2018-08-13 07:32:22'),
(23, 'Books', '2018-08-13 07:32:25', '2018-08-13 07:32:25'),
(24, 'Computer', '2018-08-13 07:32:30', '2018-08-13 07:32:30'),
(25, 'Electronics', '2018-08-13 07:32:36', '2018-08-13 07:32:36'),
(26, 'Women\'s Fashion', '2018-08-13 07:32:43', '2018-08-13 07:32:43'),
(27, 'Men\'s Fashion', '2018-08-13 07:32:49', '2018-08-13 07:32:49'),
(28, 'Girl\'s Fashion', '2018-08-13 07:33:02', '2018-08-13 07:33:02'),
(29, 'Boy\'s Fashion', '2018-08-13 07:33:08', '2018-08-13 07:33:08'),
(30, 'Health & HouseHolds', '2018-08-13 07:33:19', '2018-08-13 07:33:19'),
(31, 'Home & Kitchen', '2018-08-13 07:33:27', '2018-08-13 07:33:27'),
(32, 'Industrial & Scientific', '2018-08-13 07:33:42', '2018-08-13 07:33:42'),
(33, 'Luggage', '2018-08-13 07:33:46', '2018-08-13 07:33:46'),
(34, 'Movies & Television', '2018-08-13 07:34:01', '2018-08-13 07:34:01'),
(35, 'Music, CDs & Vinyl', '2018-08-13 07:34:14', '2018-08-13 07:34:14'),
(36, 'Pet Supplies', '2018-08-13 07:34:18', '2018-08-13 07:34:18'),
(37, 'Software', '2018-08-13 07:34:22', '2018-08-13 07:34:22'),
(38, 'Sports & Outdoors', '2018-08-13 07:34:29', '2018-08-13 07:34:29'),
(39, 'Tools & Home Improvement', '2018-08-13 07:34:51', '2018-08-13 07:34:51'),
(40, 'Vehicle', '2018-08-28 09:04:07', '2018-08-28 09:04:07'),
(41, 'Real Estate', '2018-08-29 02:39:01', '2018-08-29 02:39:01'),
(42, 'Test > test', '2018-10-24 14:02:42', '2018-10-24 14:02:42'),
(43, 'Test > test', '2018-10-24 14:02:42', '2018-10-24 14:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `featured_items`
--

CREATE TABLE `featured_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categories` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `specifications` text,
  `conditions` varchar(100) NOT NULL,
  `price` varchar(25) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `featured` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `brand`, `stock`, `categories`, `description`, `specifications`, `conditions`, `price`, `seller_id`, `status_id`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'ABS CBN TV Plus updated', 'ABS CBN', 1, 'Movies & Television', '<p><span style=\"color: rgb(75, 77, 82); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" white-space:=\"\" pre-wrap;\"=\"\">Meet up schedule depends on the availability/agreement but meet up location will only be around Vito Cruz, La Salle area.</span></p>', '<p><span style=\"color: rgb(75, 77, 82); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" white-space:=\"\" pre-wrap;\"=\"\">Seal is broken but guaranteed brand new and never used!!</span></p>', 'Brand new', '1500', 4, 2, NULL, '2018-09-11 09:19:58', '2018-11-02 04:03:09'),
(2, 'Relaxed Tee With Print', 'Penshoppe', 5, 'Girl\'s Fashion / Women\'s Fashion', '<p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><em>I Am Different - Relaxed Tee With Print</em></strong></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p>', '<p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><em>I Am Different - Relaxed Tee With Print</em></strong></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p>', 'Brand new', '4000', 4, 1, NULL, '2018-09-11 09:41:35', '2018-11-01 10:43:37'),
(3, 'Checkered Short Sleeve Shirt', NULL, 24, 'Boy\'s Fashion / Men\'s Fashion', '<p><strong>Description:</strong><br><br></p><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\"><em>I Am Different - Relaxed Tee With Print</em></strong></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\"><br></span>', '<p><strong>Description:</strong></p><br><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\"><em>I Am Different - Relaxed Tee With Print</em></strong></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\"><br></span>', 'Brand new', '500', 4, 1, NULL, '2018-09-11 09:49:11', '2018-11-01 10:40:42'),
(4, 'Fashionable Short Sleeve Shirt', NULL, 20, 'Boy\'s Fashion / Men\'s Fashion', '<br><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p>', '<br><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p>', 'Brand new', '600', 4, 2, NULL, '2018-09-11 10:10:07', '2018-11-01 09:33:49'),
(5, 'Fashionable Short Sleeve Shirt', NULL, 35, 'Boy\'s Fashion / Men\'s Fashion', '<br><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p>', '<br><p><span data-block=\"\" style=\"margin: 0px; display: block; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px;\">Product Details</strong></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; list-style-position: inside; list-style-image: initial; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><li style=\"margin: 0px;\">Relaxed Fit</li><li style=\"margin: 0px;\">Solid</li><li style=\"margin: 0px;\">Graphic Print</li><li style=\"margin: 0px;\">Single Jersey</li><li style=\"margin: 0px;\">Circular Knit</li><li style=\"margin: 0px;\">60% Cotton 40% Polyester</li></ul><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Product Code</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">931592</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Model\'s Body Measurements</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Height: 5\'7\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Chest: 31\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Waist: 25\"</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Hips: 34\"</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Model is wearing Size: Medium&nbsp;</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Sizing And Fit</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Fits large to size, take one size smaller</span></p><br style=\"margin: 0px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><p><strong style=\"color: rgb(51, 51, 51); margin: 0px; font-family: Roboto, sans-serif;\">Taking care of me&nbsp;</strong></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; background-color: rgb(247, 247, 247);\">Wash according to care label attached</span></p>', 'Brand new', '600', 9, 2, NULL, '2018-09-11 10:10:18', '2018-11-02 03:46:57'),
(6, 'Website Developer updated', 'Assasins Creed', 73, 'Arts & Crafts / Automotive / Baby', '<br><p><span style=\"white-space:pre\">	</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p><span style=\"white-space:pre\">	</span>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p><span style=\"white-space:pre\">	</span>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p><span style=\"white-space:pre\">	</span>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p><span style=\"white-space:pre\">	</span>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p><span style=\"white-space:pre\">	</span>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<br><p><span style=\"white-space: pre;\">	</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p><span style=\"white-space: pre;\">	</span>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p><span style=\"white-space: pre;\">	</span>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p><span style=\"white-space: pre;\">	</span>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p><span style=\"white-space: pre;\">	</span>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p><span style=\"white-space: pre;\">	</span>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Second Hand(Used)', '5000', 9, 2, NULL, '2018-10-16 04:16:37', '2018-11-02 04:05:29'),
(7, 'Peanut butter', NULL, 5, 'Arts & Crafts', 'Add description here', 'Add Specifications here', 'Brand new', '500', 9, 1, NULL, '2018-10-21 02:13:08', '2018-10-21 02:13:08'),
(8, 'Black Tee', 'Penshoppe', 20, 'Men\'s Fashion', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', 'Brand new', '650', 9, 1, NULL, '2018-11-04 06:26:37', '2018-11-07 01:47:43'),
(9, 'Flare S6 Plus', 'Cherry Mobile', 20, 'Computer / Electronics / Arts & Crafts', '<p><span style=\"font-family: Arial, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 16.003px;\"=\"\">5.2-inch HD IPS display, 2 GB RAM, 16 GB ROM expandable up to 64 GB, 1.3 GHz quad-core processor, a fingerprint scanner and 2600 mAh battery. Equipped with a 13 MP with flash BSI (rear) and 13 MP with flash BSI (front) cameras.</span></p>', '<p>Operating System<span style=\"white-space:pre\">	</span>Android 7.0 Nougat</p><p>Processor<span style=\"white-space:pre\">	</span>1.5GHz Octa-Core&nbsp;</p><p>Camera<span style=\"white-space:pre\">	</span>16 + 5 MP Rear / 16 + 5 MP Front</p><p>Memory<span style=\"white-space:pre\">	</span>64 GB ROM / 4 GB RAM</p><p>Sim Slot<span style=\"white-space:pre\">	</span>Dual Sim</p><p>Security Feature<span style=\"white-space:pre\">	</span>Fingerprint Scanner</p><p>Battery<span style=\"white-space:pre\">	</span>3,000 mAh</p>', 'Brand new', '3749', 47, 2, NULL, '2018-11-07 04:56:23', '2018-11-07 08:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `item_images`
--

CREATE TABLE `item_images` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_images`
--

INSERT INTO `item_images` (`id`, `item_id`, `created_at`, `updated_at`, `filename`) VALUES
(1, 1, '2018-09-11 09:19:57', '2018-09-11 09:19:57', 'item_1_image17c176ff59d08a85c78b70630e8ac62d.jpg'),
(2, 1, '2018-09-11 09:19:58', '2018-09-11 09:19:58', 'item_1_imagetvplus2.jpg'),
(3, 2, '2018-09-11 09:41:34', '2018-09-11 09:41:34', 'item_2_image931592_20-_20BLUSH_20_1_compact.jpg'),
(4, 2, '2018-09-11 09:41:34', '2018-09-11 09:41:34', 'item_2_image931592_20-_20BLUSH_20_3_compact.jpg'),
(5, 2, '2018-09-11 09:41:35', '2018-09-11 09:41:35', 'item_2_image931592_20-_20BLUSH_20_4_compact.jpg'),
(6, 2, '2018-09-11 09:41:35', '2018-09-11 09:41:35', 'item_2_image931592_20-_20BLUSH_20_5_compact.jpg'),
(7, 3, '2018-09-11 09:49:10', '2018-09-11 09:49:10', 'item_3_imageish0025b_45.jpg'),
(8, 3, '2018-09-11 09:49:10', '2018-09-11 09:49:10', 'item_3_imageish0025b_b.jpg'),
(9, 3, '2018-09-11 09:49:10', '2018-09-11 09:49:10', 'item_3_imageish0025b_f.jpg'),
(10, 3, '2018-09-11 09:49:11', '2018-09-11 09:49:11', 'item_3_imageish0025b_s.jpg'),
(11, 4, '2018-09-11 10:09:30', '2018-09-11 10:09:30', 'item_4_imageisf1082bu2_45.jpg'),
(12, 4, '2018-09-11 10:09:30', '2018-09-11 10:09:30', 'item_4_imageisf1082bu2_b.jpg'),
(13, 4, '2018-09-11 10:09:30', '2018-09-11 10:09:30', 'item_4_imageisf1082bu2_f.jpg'),
(14, 4, '2018-09-11 10:09:30', '2018-09-11 10:09:30', 'item_4_imageisf1082bu2_s.jpg'),
(15, 4, '2018-09-11 10:10:07', '2018-09-11 10:10:07', 'item_4_imageisf1082bu2_45.jpg'),
(16, 4, '2018-09-11 10:10:07', '2018-09-11 10:10:07', 'item_4_imageisf1082bu2_b.jpg'),
(17, 4, '2018-09-11 10:10:07', '2018-09-11 10:10:07', 'item_4_imageisf1082bu2_f.jpg'),
(18, 4, '2018-09-11 10:10:07', '2018-09-11 10:10:07', 'item_4_imageisf1082bu2_s.jpg'),
(19, 5, '2018-09-11 10:10:17', '2018-09-11 10:10:17', 'item_5_imageisf1082bu2_45.jpg'),
(20, 5, '2018-09-11 10:10:17', '2018-09-11 10:10:17', 'item_5_imageisf1082bu2_b.jpg'),
(21, 5, '2018-09-11 10:10:17', '2018-09-11 10:10:17', 'item_5_imageisf1082bu2_f.jpg'),
(22, 5, '2018-09-11 10:10:17', '2018-09-11 10:10:17', 'item_5_imageisf1082bu2_s.jpg'),
(23, 6, '2018-10-16 04:16:17', '2018-10-16 04:16:17', 'item_6_image6917807-assassins-creed-3-wallpaper-hd.jpg'),
(24, 6, '2018-10-16 04:16:37', '2018-10-16 04:16:37', 'item_6_image6917807-assassins-creed-3-wallpaper-hd.jpg'),
(25, 7, '2018-10-21 02:13:08', '2018-10-21 02:13:08', 'item_7_imagetogo.png'),
(26, 8, '2018-11-04 06:26:37', '2018-11-04 06:26:37', 'item_8_imageitem_6_imagebot2402bk3_s.jpg'),
(27, 9, '2018-11-07 04:53:27', '2018-11-07 04:53:27', 'item_9_imageCherry_Mobile_Flare_S6_L_1.jpg'),
(28, 9, '2018-11-07 04:53:28', '2018-11-07 04:53:28', 'item_9_imageCherry_Mobile_Flare_S6_L_2.jpg'),
(29, 9, '2018-11-07 04:53:28', '2018-11-07 04:53:28', 'item_9_imageCherry_Mobile_Flare_S6_L_3.jpg'),
(30, 9, '2018-11-07 04:54:23', '2018-11-07 04:54:23', 'item_9_imageCherry_Mobile_Flare_S6_L_1.jpg'),
(31, 9, '2018-11-07 04:54:23', '2018-11-07 04:54:23', 'item_9_imageCherry_Mobile_Flare_S6_L_2.jpg'),
(32, 9, '2018-11-07 04:54:23', '2018-11-07 04:54:23', 'item_9_imageCherry_Mobile_Flare_S6_L_3.jpg'),
(33, 9, '2018-11-07 04:56:23', '2018-11-07 04:56:23', 'item_9_imageCherry_Mobile_Flare_S6_L_1.jpg'),
(34, 9, '2018-11-07 04:56:23', '2018-11-07 04:56:23', 'item_9_imageCherry_Mobile_Flare_S6_L_2.jpg'),
(35, 9, '2018-11-07 04:56:23', '2018-11-07 04:56:23', 'item_9_imageCherry_Mobile_Flare_S6_L_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item_reviews`
--

CREATE TABLE `item_reviews` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `review` varchar(250) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_specifications`
--

CREATE TABLE `item_specifications` (
  `id` int(11) NOT NULL,
  `specs_title` int(11) NOT NULL,
  `specs_content` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_statuses`
--

CREATE TABLE `item_statuses` (
  `id` int(11) NOT NULL,
  `display` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_statuses`
--

INSERT INTO `item_statuses` (`id`, `display`) VALUES
(1, 'draft'),
(2, 'for sale'),
(3, 'deleted'),
(4, 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `item_stocks`
--

CREATE TABLE `item_stocks` (
  `item_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'pending',
  `cart_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `cart_id`, `item_id`, `buyer_id`, `seller_id`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 'pending', 7, NULL, 45, 9, 'Cash on Delivery (COD)', '2018-10-15 12:17:39', '2018-10-15 12:17:39'),
(2, 'pending', 10, NULL, 46, 9, 'Cash on Delivery (COD)', '2018-11-02 13:53:00', '2018-11-02 13:53:00'),
(3, 'pending', 11, NULL, 46, 9, 'Cash on Delivery (COD)', '2018-11-02 13:53:00', '2018-11-02 13:53:00'),
(4, 'pending', 12, NULL, 48, 9, 'Cash on Delivery (COD)', '2018-11-07 05:01:53', '2018-11-07 05:01:53'),
(5, 'pending', 12, NULL, 50, 47, 'Cash on Delivery (COD)', '2018-11-07 05:17:58', '2018-11-07 05:17:58'),
(6, 'pending', 13, NULL, 50, 9, 'Cash on Delivery (COD)', '2018-11-07 05:17:58', '2018-11-07 05:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `notes` text,
  `customer_notified` varchar(10) DEFAULT 'no',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_histories`
--

INSERT INTO `order_histories` (`id`, `order_id`, `status`, `notes`, `customer_notified`, `created_at`, `updated_at`) VALUES
(1, 3, 'pending', NULL, NULL, '2018-11-07 00:00:00', '2018-11-07 00:00:00'),
(2, 1, 'Denied', 'asdsd', NULL, '2018-11-07 04:17:41', '2018-11-07 04:17:41'),
(3, 1, 'Denied', 'asdsd', NULL, '2018-11-07 04:18:08', '2018-11-07 04:18:08'),
(4, 1, 'Processing', 'Hello your item is on process please wait for another day', '1', '2018-11-07 04:36:36', '2018-11-07 04:36:36'),
(5, 1, 'Denied', 'Hello were sorry but your item is denied', 'yes', '2018-11-07 04:39:31', '2018-11-07 04:39:31'),
(6, 5, 'Processing', 'This item is now processing for delivery', 'yes', '2018-11-07 05:38:29', '2018-11-07 05:38:29'),
(7, 5, 'Processed', 'Item done processing', 'yes', '2018-11-07 08:04:00', '2018-11-07 08:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT 'building_placeholder.png',
  `banner` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `store_details` text,
  `store_name` varchar(100) DEFAULT NULL,
  `shipping_policy` longtext,
  `return_policy` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `logo`, `banner`, `user_id`, `slug`, `store_details`, `store_name`, `shipping_policy`, `return_policy`, `created_at`, `updated_at`) VALUES
(1, 'building_placeholder.png', NULL, 3, 'penshoppe', NULL, 'Penshoppe', NULL, NULL, '2018-09-11 09:41:35', '2018-09-11 09:41:35'),
(2, NULL, NULL, 4, 'bench', NULL, 'Bench', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p><ul><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li><li><br></li><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li></ul></p><br>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p></p><ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;\"><li style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li><li style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></li><li style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li></ul>', '2018-09-11 09:49:11', '2018-11-03 03:33:10'),
(3, 'building_placeholder.png', NULL, 5, 'amazon', NULL, 'Amazon', NULL, NULL, '2018-09-14 06:29:41', '2018-09-14 06:29:41'),
(4, 'alibabalogo.png', NULL, 6, 'alibaba', NULL, 'Alibaba', NULL, NULL, '2018-09-14 06:58:12', '2018-09-14 06:58:12'),
(5, 'alibabalogo.png', NULL, 7, 'alibaba', NULL, 'Alibaba', NULL, NULL, '2018-09-14 06:58:54', '2018-09-14 06:58:54'),
(6, 'logo.png', NULL, 8, 'universal-robina-corporation', NULL, 'Universal Robina Corporation', NULL, NULL, '2018-09-14 07:12:35', '2018-09-14 07:12:35'),
(7, 'logo.png', 'banner.jpg', 9, 'zara', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', 'Universal Robina Market Place', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', '2018-09-14 07:26:05', '2018-11-07 01:43:51'),
(8, 'Cherry-Mobile-Logo.gif', 'PR-BANNER_CherryCubix-1.jpg', 47, 'zara', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', 'Cherry Mobile (Taguig Branch)', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', '<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p>', '2018-09-14 07:26:05', '2018-11-07 04:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '3',
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'placeholder.jpeg',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `profile_picture`, `email`, `address`, `contact_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mark Anthony Gersalia', 1, 'placeholder.jpeg', 'admin@laracart.com', NULL, NULL, '$2y$10$5HLZzuzuJXAAyxyR8WOLAe6ZgYy5N3ATJQ1XNbBsFu.EeQqQp1BVW', 'wdrESHGenuCDdUrke8qWQsW9JXz6MNxWdZGWIZHbgO3yhAfMjI6mU5ldnWso', '2018-09-11 01:14:55', '2018-09-11 01:14:55'),
(2, 'John Doe', 3, 'placeholder.jpeg', 'john@doe.com', 'Universal Robina Corporation\nURC Tera Tower, Bridgetowne\nE. Rodriguez Jr. Ave (C5 Road)\nUgong Norte, Quezon City\nPhilippines, 1110', '+63955346141', '$2y$10$59VhzHaB1JLqq8li833XVe/PACt01aw22F.8IVlrrAhwsUSL8Sm8i', 'UmWNcbcWaYkkz5jsfRLwp2qDkP6GLCm8JGkRSr7YfF8OQZCGB6F4g4y7sqe8', '2018-09-11 01:19:58', '2018-09-11 01:19:58'),
(3, 'Jane Doe', 3, 'placeholder.jpeg', 'test@penshoppe.com', 'Address', '+63955346141', '$2y$10$mdt0chyJYwP8SPc3ZbnYcOp3TmqQ8xbd/fVBgT3TauBp/4A7MUPLC', NULL, '2018-09-11 01:41:35', '2018-09-11 01:41:35'),
(4, 'Bench owner', 3, 'placeholder.jpeg', 'test@bench.com', 'Universal Robina Corporation\nURC Tera Tower, Bridgetowne\nE. Rodriguez Jr. Ave (C5 Road)\nUgong Norte, Quezon City\nPhilippines, 1110', '+63955346141', '$2y$10$kv/6AZnyg3wCktcwcdS.BueJcmgndnNki/obEqfbprsys.LPW6hPi', NULL, '2018-09-11 01:49:11', '2018-09-11 01:49:11'),
(5, 'Test', 3, 'placeholder.jpeg', 'amazon@cart.com', 'Pasig city', '12314123', '$2y$10$mHjXXZQ48K/bx10grqOzVupAZPbqDXMvZtfUzEUhZHLWW/.yk9gi6', NULL, '2018-09-13 22:29:40', '2018-09-13 22:29:40'),
(8, 'Universal Robina Owner', 3, 'placeholder.jpeg', 'urc@cart.com', 'Pasig City', '+639556346141', 'asdasd', NULL, '2018-09-13 23:12:35', '2018-09-13 23:12:35'),
(9, 'Mark Anthony Gersalia', 3, 'placeholder.jpeg', 'universal_robina@cart.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', '123102498123', '$2y$10$n3U5f.4iuv96LpkF48fuFeoKq/kTxCeiaeLYkzj3Dg5iSJXzxkQ42', 'tCbQZpYwKKFu4MTJB8Vs0mwDTmAEnxmXRqQEhkUR38I42XbEamxyZbLrOZCV', '2018-09-13 23:26:05', '2018-11-03 17:34:03'),
(10, 'Cristina Orillosa', 3, 'placeholder.jpeg', 'tina@test.com', NULL, '10001000', '$2y$10$za3ojTiBhBeixExXs30VXu/MfiwdyuCMAn4ggOAjqOG0n4DZXmPAG', NULL, '2018-10-13 23:03:56', '2018-10-13 23:03:56'),
(11, 'test test', 3, 'placeholder.jpeg', 'test@test2.com', NULL, '99091092', '$2y$10$VHJ9qVgNJtmGoH35FAD1CedndBg8AR4GHS9eNQd7XPipHsSu3Epy2', NULL, '2018-10-13 23:24:50', '2018-10-13 23:24:50'),
(12, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$NS9uOZAR1Bo1DvFrBK9UOOofsIQ98H7n65D1eEWqHetWM6fqRPnA2', NULL, '2018-10-13 23:26:55', '2018-10-13 23:26:55'),
(13, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$4aQK4GWT18weqa8VDpTt0uCBzPoAr191R8CP94TgUtxBisjfa1JEW', NULL, '2018-10-13 23:28:27', '2018-10-13 23:28:27'),
(14, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$YskEjVxZMfwhYd0wz/QaB.iefW5NKUGvgl2h6CTwna3Wd5q1CfMhm', NULL, '2018-10-13 23:28:46', '2018-10-13 23:28:46'),
(15, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$l25ZBUb89hTtNkF8zYHpj.cuTyVPssZQpsPpMbVxGLsEceis0n1vK', NULL, '2018-10-13 23:29:10', '2018-10-13 23:29:10'),
(16, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$kln.YAL0NqSIj/zaJnEVf.MBjWPP5JbTTiy9wu2nEbtpIq0kEnNLe', NULL, '2018-10-13 23:29:41', '2018-10-13 23:29:41'),
(17, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$c/qgQFyoGW/T.rH2tqmIcOIm7Gkb3hk8lF4.mSgAdMGV20kqemzOC', NULL, '2018-10-13 23:30:11', '2018-10-13 23:30:11'),
(18, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$73gR7Kyi0a/y59pscUlK5eAqsBzWTibeuwThCNUgbDIMYDB9tJJYe', NULL, '2018-10-13 23:35:28', '2018-10-13 23:35:28'),
(19, 'testtest 2', 3, 'placeholder.jpeg', 'test@test3.com', NULL, '091874198209381', '$2y$10$KXEhUiQLQv3Ypg5ObTzS.uc8Y.jPk7w21NnIk2uR9M3.3qsWa.51a', NULL, '2018-10-13 23:35:42', '2018-10-13 23:35:42'),
(20, 'laksjdlkajs', 3, 'placeholder.jpeg', 'test@test4.com', NULL, '2342344545', '$2y$10$B8BgWDavWz2I1IXFLE3cs.NI7HBXKjS5mhbpc4nA1w3PUT2FGRESS', NULL, '2018-10-13 23:43:24', '2018-10-13 23:43:24'),
(21, 'laksjdlkajs', 3, 'placeholder.jpeg', 'test@test20.com', NULL, '2342344545', '$2y$10$bgaVDE5EINfgma48WVyWXebFHm1Bunrh8eryIJFXEAuDSPfAv5gyu', NULL, '2018-10-13 23:50:55', '2018-10-13 23:50:55'),
(22, 'laksjdlkajs', 3, 'placeholder.jpeg', 'test@test21.com', NULL, '2342344545', '$2y$10$mzvWefB4ZxPSEx.sPsIPHO97HWhb/eQE6RIFANTJZCpCvEFSdIbiO', NULL, '2018-10-13 23:54:53', '2018-10-13 23:54:53'),
(23, 'test', 3, 'placeholder.jpeg', 'test@test21.com', NULL, NULL, '$2y$10$ewZD5ifgf530I.nqD.WCPuuV6jx03FXvtedtczNjt.5eC4pwfkRCy', NULL, '2018-10-14 04:20:55', '2018-10-14 04:20:55'),
(24, 'test', 3, 'placeholder.jpeg', 'test@test21.com', NULL, NULL, '$2y$10$.NgEts.6gvhzn9/KVfzqEuvMl5ghhCrG28Kp9h1u7LLWmxhx//8/6', NULL, '2018-10-14 04:31:40', '2018-10-14 04:31:40'),
(25, 'testtest 2', 3, 'placeholder.jpeg', 'test@test21.com', NULL, NULL, '$2y$10$F5TIC251kfEiu/c93grG6OpTvWaxoIg90o3v3piuEaNhPRsQNLmH2', NULL, '2018-10-14 05:34:30', '2018-10-14 05:34:30'),
(26, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$w3CElvzYNwFZ2uDuetyviOErd7AXS6GVqwtia20nW11uKHqgg1qde', NULL, '2018-10-14 05:35:35', '2018-10-14 05:35:35'),
(27, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$ZZvtdayM4hVSrc5A2C4zI.W/mQDAo/qbdpqp4SEdMcKyCyAhX7sD.', NULL, '2018-10-14 05:36:10', '2018-10-14 05:36:10'),
(28, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$qjJhWnli2QaFxOlP3dLgeOxzmmyZLWTmhLTUO66mR9x5urOW0bh/.', NULL, '2018-10-14 05:36:35', '2018-10-14 05:36:35'),
(29, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$QQMu9yH7822GWxwyGKnUj.6c/ECjz/52wzogGzqNb01mo.YLj.Smm', NULL, '2018-10-14 05:37:36', '2018-10-14 05:37:36'),
(30, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$2PDJSus23wdWArCQyuTlc.fEl4XUQY.tFXT0NQoZBfLQU7YoORkq6', NULL, '2018-10-14 05:37:54', '2018-10-14 05:37:54'),
(31, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$WzPBNT1X2GMeQhLW0fM69Oh7V6CfIHVWqZFHzvqREMCZmxNK/owiW', NULL, '2018-10-14 05:38:05', '2018-10-14 05:38:05'),
(32, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$Prhlf0Yq3yDlLlfjFCBFbuFIFOFYzqEJJteEA2goLgEjVOmxqDTWC', NULL, '2018-10-14 05:39:37', '2018-10-14 05:39:37'),
(33, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$P6S.9ArRNoNRlSzJ83C6quP7NXNqwYng5eu0e94t3K.jI7CppHleC', NULL, '2018-10-14 05:40:06', '2018-10-14 05:40:06'),
(34, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$aGqmHHJ72RycV53cUsVfZuZQG.H5WZ71lm.SVJ6Y5tIWZP9OBUMlO', NULL, '2018-10-14 05:40:35', '2018-10-14 05:40:35'),
(35, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$Ev0t4bhCe5oqCfYoRkRlQusioYMV4SP3qRk16VPcVlmWl12z13HWa', NULL, '2018-10-14 05:41:01', '2018-10-14 05:41:01'),
(36, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$QlcvQa5zyCYvrrLO9eK8YeEdOgZaxyDsGR9fk7bon4aLp2mL5fjPm', NULL, '2018-10-14 05:41:10', '2018-10-14 05:41:10'),
(37, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$gb428Dhyl0biVZGwcWr7iu6cGjGYPBwMiFi/3lAeM6ycZbbJEjg2C', NULL, '2018-10-14 05:41:32', '2018-10-14 05:41:32'),
(38, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$4Yrfxk3ULTTxlRMZYR5qPuYBPp0y1CChtwc.rGjdXud46tdYf72De', NULL, '2018-10-14 05:42:19', '2018-10-14 05:42:19'),
(39, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia2@gmail.com', NULL, NULL, '$2y$10$FSUsEwGA7N/FQc5t3.vr2.qWOFppLi2vQ4NhjO3UY5VMjAzWFb4Nm', NULL, '2018-10-14 05:42:42', '2018-10-14 05:42:42'),
(40, 'John Doe', 3, 'placeholder.jpeg', 'john@doe.com', NULL, NULL, '$2y$10$/R9opunqpkrZKswBjVQWReFrdoJjc4iz8GWxMJfFReTivtyocLGwO', NULL, '2018-10-14 06:32:21', '2018-10-14 06:32:21'),
(41, 'Cristina Orillosa', 3, 'placeholder.jpeg', 'test@test2111.com', NULL, NULL, '$2y$10$Q144cmV3pFVcU9h.cyoaUesN9MdkvCiF/55EaBmZ2cGDmt0Z7cL1y', NULL, '2018-10-14 06:52:08', '2018-10-14 06:52:08'),
(42, 'Cristina Orillosa', 3, 'placeholder.jpeg', 'test@test2111.com', NULL, NULL, '$2y$10$tl8.s3XL4ZBpKOLGlcUo9OT1w3AzaImDu59MzAovlbiS0GZEpmrAe', NULL, '2018-10-14 06:52:56', '2018-10-14 06:52:56'),
(43, 'laksjdlkajs', 3, 'placeholder.jpeg', 'ma27gersalia@gmail.com', NULL, NULL, '$2y$10$0FG0ZMndjQgKkB7DsgoMkujojaWKo.KWYNd30MrNDBUic/6DQjhtW', NULL, '2018-10-15 03:25:49', '2018-10-15 03:25:49'),
(44, 'TEST CUSTOMER', 3, 'placeholder.jpeg', 'test@customer.com', NULL, NULL, '$2y$10$aZHHItkeVVH6EkhuZXyVUucbQbuJYpy7eoEASst6UtxfjNW5tMe7y', NULL, '2018-10-15 04:14:46', '2018-10-15 04:14:46'),
(45, 'laksjdlkajs', 3, 'placeholder.jpeg', 'test@test26.com', NULL, NULL, '$2y$10$FDi7lVA9IspivviVsW.oDeAIcu2pBhAcWT18P4aFSpgVT7H.DoYLK', NULL, '2018-10-15 04:17:39', '2018-10-15 04:17:39'),
(46, 'Mark Anthony Gersalia', 3, 'placeholder.jpeg', 'rinkashimeg@gmail.com', 'Universal Robina Corporation\r\nURC Tera Tower, Bridgetowne\r\nE. Rodriguez Jr. Ave (C5 Road)\r\nUgong Norte, Quezon City\r\nPhilippines, 1110', '09556346141', '$2y$10$2KcfUkWa9Rc9TwdJflPeSOtfgOFDYSrB1pmrjH.ciMbKgS3GVpBsK', NULL, '2018-11-02 05:53:00', '2018-11-02 05:53:00'),
(47, 'Mark Anthony Gersalia', 3, 'placeholder.jpeg', 'cherry_mobile@cart.com', 'Universal Robina Corporation\r\nURC Tera Tower, Bridgetowne\r\nE. Rodriguez Jr. Ave (C5 Road)\r\nUgong Norte, Quezon City\r\nPhilippines, 1110', '2342344545', '$2y$10$Mno6kpvbYE16CorNp74ug.Y4PQnymBx7bm1elLouQIxIWehhi4202', NULL, '2018-11-06 20:45:26', '2018-11-06 20:50:00'),
(48, 'Jonathan Doe', 3, 'placeholder.jpeg', 'jonathan@cart.com', NULL, NULL, '$2y$10$9BC/VR7Di5XbS9.OHMa.b.LCD/D/zpnCjDmlpuSzTA3MDoaK9EmCW', NULL, '2018-11-06 21:01:53', '2018-11-06 21:01:53'),
(49, 'Gabriel Anthony', 3, 'placeholder.jpeg', 'gabgab@cart.com', NULL, NULL, '$2y$10$hUbg5ySJH0ZMk18Lsuufv.IoqVfkV7jYzZS7I4JSppkepkFlGgYeq', NULL, '2018-11-06 21:10:10', '2018-11-06 21:10:10'),
(50, 'Jun jun binay', 3, 'placeholder.jpeg', 'test@testing2.com', NULL, NULL, '$2y$10$CIKPd5rXJIrUvwBifl6Fp.STjKmPYGSTHkqC6S3MocFnvsslWJWGe', NULL, '2018-11-06 21:17:57', '2018-11-06 21:17:57'),
(51, 'TEst', 3, 'placeholder.jpeg', 'test@testtest.com', NULL, NULL, '$2y$10$4bCX.FkHc76jLbWU3gHg6uGwjBQr3qyTUlg3nj42shKtrkB6YwptG', NULL, '2018-11-06 21:26:11', '2018-11-06 21:26:11'),
(52, 'TEst', 3, 'placeholder.jpeg', 'test@testtest.com', NULL, NULL, '$2y$10$.KulyIwfv.r9Mj8f3mFjNeDo21Wv/APIZ5OVxUDilBm3ogqFp6/hC', NULL, '2018-11-06 21:26:28', '2018-11-06 21:26:28'),
(53, 'TEst', 3, 'placeholder.jpeg', 'test@testtest.com', NULL, NULL, '$2y$10$ZsCV1Fvdc5TJvpoq3ebuPOgI1aNCKJrCR4.6xzC2OSXjcR9egkrMe', NULL, '2018-11-06 21:26:39', '2018-11-06 21:26:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_items`
--
ALTER TABLE `featured_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_images`
--
ALTER TABLE `item_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_reviews`
--
ALTER TABLE `item_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_statuses`
--
ALTER TABLE `item_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stocks`
--
ALTER TABLE `item_stocks`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `featured_items`
--
ALTER TABLE `featured_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `item_reviews`
--
ALTER TABLE `item_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_statuses`
--
ALTER TABLE `item_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
