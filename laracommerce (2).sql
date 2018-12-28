-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 05:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`user_id`, `unit_room_floor`, `building_name`, `house_building_no`, `street`, `subdivision_village`, `province`, `city_municipality`, `barangay`, `zip_code`, `created_at`, `updated_at`) VALUES
(3, '7', 'Robinsons Cybergate(updated)', 'Tower 3', 'Pioneer', 'Pioneer', 'None', 'Manadulyong City', 'Barangka', '1126', '2018-08-24 07:23:35', '2018-08-28 01:47:02');

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
(41, 'Real Estate', '2018-08-29 02:39:01', '2018-08-29 02:39:01');

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
  `quantity` int(11) DEFAULT NULL,
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

INSERT INTO `items` (`id`, `title`, `brand`, `quantity`, `categories`, `description`, `specifications`, `conditions`, `price`, `seller_id`, `status_id`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'ASUS Laptop Notebook 2016 not HP Dell Lenovo\r\n', '', NULL, NULL, 'Selling my Full HD ASUS Laptop Notebook \r\n<br>\r\nPerfect for multimedia, office, home or student use \r\n<br><br>\r\nComes with original ASUS AC adaptor \r\n<br>\r\nBought for 25,000 pesos last Jan 2016 \r\nSelling for 11,999 pesos only (negotiable) <br><br>\r\n\r\nIntel Core i3 5th Gen (5010U) CPU \r\n(2 Cores, 4 Threads) <br>\r\n\r\nWin 10 Pro 64 Bit \r\n<br>\r\nMS Office \r\n<br>\r\nIntel HD Graphics 5500 \r\n4GB RAM @ 1600 upgradable to 8GB \r\n500GB Toshiba HDD \r\nDVD RW Disk drive \r\nFront Camera \r\n3 Hours Batt Life \r\nWiFi ac, b, g, n \r\nBluetooth \r\n<br><br>\r\nPorts - HDMI, USB 3.0 (2), USB 2.0, VGA, Lan, card reader, audio/mic jack \r\n<br>\r\nModel - F555LA \r\n<br>\r\nTest all you want, only flaw is some minor scratch. Normal for a 2nd hand. \r\n<br>\r\nMeetup BGC, QC, MRT, Makati', '\r\nPlease read first before making an inquiry to avoid asking too much questions<br><br>\r\n\r\nAVAILABLE UNTIL POSTED<br><br>\r\n\r\nABS CBN TV Plus (no HDMI)<br><br><br><br>\r\n\r\ncomplete set<br><br>\r\n- comes with box, manual, RCA to 3.5 jack, remote control w/ battery, power adaptor and antenna\r\n<br><br>\r\n* used but not abused, since nasa loob lang \'to ng bahay, nagagamit lang kapag manonood ng tv\r\n<br><br>\r\n- unit was tested and in good working condition\r\n<br><br>\r\nissue: nangatngat ng tuta ung kable pgkababa nung antenna, pero nagawan ng paraan at nagagamit ulit\r\n<br><br>\r\nRFS: hindi na ginagamit, nakabitan na ng cable\r\n<br><br>\r\nselling price : P950 - fixed, inclusive of handling fee\r\n<br><br>\r\nmeet-ups: Alabang area/SM Southmall/J\'bee Zapote-Las Piñas\r\n<br><br>\r\nInterested?\r\nMuch better call for immediate tr\'xn\r\n', '2nd hand (Used)', '11,999.00', 2, 1, 1, '2018-08-13 00:00:00', '2018-08-13 00:00:00'),
(2, 'ASUS Nereus Laptop Backpack (Brand New)', '', NULL, NULL, 'ASUS Nereus Laptop Backpack (Brand New) \r\nPHP 600\r\nNever been used\r\nWith tag and original packaging\r\n\r\nContact 09755347181 if interested. \r\nIdeally for local pickup/meetup in SM City Davao', NULL, '', '600.00', 2, 1, 0, '2018-08-13 00:00:00', '2018-08-13 00:00:00'),
(3, 'Wireless Bluetooth Headset Headphones ', '', NULL, NULL, '100% SATISFICATION, 100% MONEY BACK GUARANTEE: We\'ll stand out by our high-quality products and your satisfication 100% guaranteed<br><br>\r\nLarge Capacity Battery: Upgraded version of soft plastic ear hooks, 4 hours of talk, 100 hours standby, no pain for ear for long time. Ergonomically designed to fit snugly against the ears for comfort and firmness<br><br>\r\nBluetooth 4.1: HD call, built-in microphone with echo cancellation technology, clear and loud calls, low-noise silicon, bio-fiber composite diaphragm, subwoofer enjoy\r\n<br><br>\r\nPerfect Sound Quality: stereo ear, waterproof, noise reduction, explosion-proof lithium battery, CPU intelligent computing, HD high-definition sound quality, voice prompts, switch buttons, IOS battery tips, one for two ear\r\nLight and Small:<br><br> Only 8g, Wire-controlled microphone, hanging on the neck when not listening, do not worry about running without pockets', NULL, '', '22.99 ', 2, 1, 0, '2018-08-14 00:00:00', '2018-08-14 00:00:00'),
(4, 'Apple iPhone 7 Plus, GSM Unlocked, 32GB', '', NULL, NULL, '7 Megapixel Facetime Camera with 1080p HD Video Recording, Retina Flash, f/2.2 aperture, Wide Color Capture for photos and Live Photos\r\nAll-new dual 12MP cameras. The brightest, most colorful iPhone display ever. The fastest performance and best battery life in an iPhone. Water and splash resistant. And stereo speakers. Every bit as powerful as it looks—this is iPhone 7 Plus.\r\nHeadphones, SIM Card and SIM ejector tool are not included.\r\n5.5-inch Retina HD LED-backlit Display with IPS Technology, 1920 x 1080 pixel resolution (~401ppi pixel denisty) + Fingerprint-resistant ', NULL, '', '505.76 ', 2, 1, 0, '2018-08-14 00:00:00', '2018-08-14 00:00:00'),
(5, 'TrueM Mens Regular Fit Dress Shirt ', '', NULL, NULL, '60% COTTON , 40% POLYESTER , Machine Washable & Easy Iron\r\nLeft Chest Pocket, Button closure\r\nModel(Height: 6\'2\", Weight: 170 lbs, Neck size: 15\", Sleeve: 36\", Waist: 32\", Chest: 35\") wearing Size Medium(Neck: 15\"-15.5\", Sleeve: 34-35\")\r\nRegular Fit (Modern-Fitted) - US Size, Spread Collar / Round Hemline / Convertible Cuff\r\n*** NO TIE INCLUDED **', NULL, '', '$18.99 - $20.99 ', 2, 1, 0, '2018-08-14 00:00:00', '2018-08-14 00:00:00'),
(6, 'Samsung 65-Inch 4K Ultra HD Smart LED TV', '', NULL, NULL, '<ul>\r\n<li>Unrestrained and portable active stereo speaker</li>\r\n<li>\r\nFree from the confines of wires and chords\r\n</li>\r\n<li>\r\n20 hours of portable capabilities\r\n</li>\r\n<li>\r\nDouble-ended Coil Cord with 3.5mm Stereo Plugs Included\r\n</li>\r\n<li>\r\n3/4? Dome Tweeters: 2X and 4? Woofer: 1X\r\n</li>\r\n</ul>', NULL, '', '$1,699.95', 2, 1, 0, '2018-08-16 00:00:00', '2018-08-16 00:00:00'),
(9, 'ABS CBN TV Plus', 'Abs-Cbn', 5, 'Movies & Television / Music CDs & Vinyl / Software / Tools & Home Improvement', 'Please read first before making an inquiry to avoid asking too much questions<br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">AVAILABLE UNTIL POSTED</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">ABS CBN TV Plus (no HDMI)</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">complete set</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">- comes with box, manual, RCA to 3.5 jack, remote control w/ battery, power adaptor and antenna</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">* used but not abused, since nasa loob lang \'to ng bahay, nagagamit lang kapag manonood ng tv</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">- unit was tested and in good working condition</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">issue: nangatngat ng tuta ung kable pgkababa nung antenna, pero nagawan ng paraan at nagagamit ulit</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">RFS: hindi na ginagamit, nakabitan na ng cable</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">selling price : P950 - fixed, inclusive of handling fee</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">meet-ups: Alabang area/SM Southmall/J\'bee Zapote-Las Piñas</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">Interested?</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">Much better call for immediate tr\'xn</span><br>', 'Please read first before making an inquiry to avoid asking too much questions<br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">AVAILABLE UNTIL POSTED</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">ABS CBN TV Plus (no HDMI)</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">complete set</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">- comes with box, manual, RCA to 3.5 jack, remote control w/ battery, power adaptor and antenna</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">* used but not abused, since nasa loob lang \'to ng bahay, nagagamit lang kapag manonood ng tv</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">- unit was tested and in good working condition</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">issue: nangatngat ng tuta ung kable pgkababa nung antenna, pero nagawan ng paraan at nagagamit ulit</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">RFS: hindi na ginagamit, nakabitan na ng cable</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">selling price : P950 - fixed, inclusive of handling fee</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">meet-ups: Alabang area/SM Southmall/J\'bee Zapote-Las Piñas</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">Interested?</span><br style=\"box-sizing: inherit; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 16px;\">Much better call for immediate tr\'xn</span><br>', 'Second Hand(Used)', '950', 2, 1, NULL, '2018-08-28 08:34:17', '2018-08-28 08:34:17'),
(10, 'Toyota Fortuner V', 'Toyota', 1, 'Automotive', ' Toyota Fortuner V 2016<br>\r\n                Top of the line 4X4 limited edition<br>\r\n                Pearl white<br>\r\n                2.8cc Diesel full options<br>\r\n                13k kms<br>\r\n                OEM leather seats<br>\r\n                OEM Led headlights<br>\r\n                OEM Foglights<br>\r\n                Keyless entry<br>\r\n                Push button start<br>\r\n                Navigation system<br>\r\n                Power tailgate<br>\r\n                All original<br>\r\n                1st owned<br>\r\n                Owner / seller<br>\r\n                Definitely worth your time and money<br>\r\n                <br><br>\r\n                09225010007 / 09064716721', 'Toyota Fortuner V 2016\r\n                Top of the line 4X4 limited edition\r\n                Pearl white\r\n                2.8cc Diesel full options\r\n                13k kms\r\n                OEM leather seats\r\n                OEM Led headlights\r\n                OEM Foglights\r\n                Keyless entry\r\n                Push button start\r\n                Navigation system\r\n                Power tailgate\r\n                All original\r\n                1st owned\r\n                Owner / seller\r\n                Definitely worth your time and money\r\n                \r\n                09225010007 / 09064716721', 'Second Hand(Used)', '180000', 2, 1, NULL, '2018-08-28 09:09:37', '2018-08-28 09:09:37'),
(11, 'Live Life on the Bright Side - Global Plaza Luxury Residence', NULL, NULL, 'Health & HouseHolds / Home & Kitchen / Real Estate', '<p>3 bedroom Condominium for Sale in Eastwood City</p><br><p>Eastwood Global Plaza is built with your cosmopolitan lifestyle in mind. Feel right at home with all the modern conveniences available at your fingertips. Experience extra perks and privileges any day or everyday with wonderful features and amenities in your new residence.</p><br><p>•<span style=\"white-space:pre\">	</span>A modern 49-storey residential address located along Palm Tree Avenue in Eastwood City</p><br><p>•<span style=\"white-space:pre\">	</span>Thirty residential levels host studios, executive studios, executive one-bedroom units and one- to three-bedroom units, ranging from 31 to 118 square meters in size</p><br><p>•<span style=\"white-space:pre\">	</span>Amenity deck at the 18th level offers Wi-Fi internet access and hosts an infinity/lap pool, a fitness pool, a. View more details on Property24</p>', '<p>Propertycondition: New</p><p>Bed: 3</p><p>Bath: 2</p><p>Floor: 89</p><p>Location:Quezon City, Metro Manila (NCR)</p><p>Date Posted:28 August 2018</p><p>Category:Apartment and Condominium</p><p>Ad ID:124444285</p>', 'Brand new', '122000', 7, 1, NULL, '2018-08-29 02:44:36', '2018-08-29 02:44:36');

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
(1, 1, '2018-08-13 00:00:00', '2018-08-13 00:00:00', 'item_1_image.jpg'),
(2, 1, '2018-08-13 00:00:00', '2018-08-13 00:00:00', 'item_1_image.jpg'),
(3, 1, '2018-08-13 00:00:00', '2018-08-13 00:00:00', 'item_1_image4.jpg'),
(4, 2, '2018-07-23 00:00:00', '2018-08-13 00:00:00', 'item_2_image1.jpg'),
(5, 2, '2018-08-13 00:00:00', '2018-08-13 00:00:00', 'item_2_image2.jpg'),
(6, 3, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_3_image1.jpg'),
(7, 3, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_3_image2.jpg'),
(8, 3, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_3_image3.jpg'),
(9, 3, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_3_image4.jpg'),
(10, 4, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_4_image1.jpg'),
(11, 4, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_4_image2.jpg'),
(12, 4, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_4_image3.jpg'),
(13, 5, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_5_image1.jpg'),
(14, 5, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_5_image2.jpg'),
(15, 5, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_5_image3.jpg'),
(16, 5, '2018-08-14 00:00:00', '2018-08-14 00:00:00', 'item_5_image4.jpg'),
(17, 6, '2018-08-16 00:00:00', '2018-08-16 00:00:00', 'item_6_image1.jpg'),
(18, 6, '2018-08-16 00:00:00', '2018-08-16 00:00:00', 'item_6_image2.jpg'),
(19, 6, '2018-08-16 00:00:00', '2018-08-16 00:00:00', 'item_6_image3.jpg'),
(49, 9, '2018-08-28 08:34:16', '2018-08-28 08:34:16', 'item_9_image17c176ff59d08a85c78b70630e8ac62d.jpg'),
(50, 9, '2018-08-28 08:34:17', '2018-08-28 08:34:17', 'item_9_imagetvplus.jpg'),
(53, 10, '2018-08-28 09:09:36', '2018-08-28 09:09:36', 'item_10_image1.jpg'),
(54, 10, '2018-08-28 09:09:36', '2018-08-28 09:09:36', 'item_10_image2.jpg'),
(55, 10, '2018-08-28 09:09:36', '2018-08-28 09:09:36', 'item_10_image3.jpg'),
(56, 10, '2018-08-28 09:09:36', '2018-08-28 09:09:36', 'item_10_image5.jpg'),
(57, 10, '2018-08-28 09:09:37', '2018-08-28 09:09:37', 'item_10_image_6_.jpg'),
(58, 10, '2018-08-28 09:09:37', '2018-08-28 09:09:37', 'item_10_image_7_.jpg'),
(59, 11, '2018-08-29 02:44:05', '2018-08-29 02:44:05', 'item_11_image_1_ (1).jpg'),
(60, 11, '2018-08-29 02:44:05', '2018-08-29 02:44:05', 'item_11_image_2_ (1).jpg'),
(61, 11, '2018-08-29 02:44:05', '2018-08-29 02:44:05', 'item_11_image_3_ (1).jpg'),
(62, 11, '2018-08-29 02:44:05', '2018-08-29 02:44:05', 'item_11_image_5_ (1).jpg'),
(63, 11, '2018-08-29 02:44:36', '2018-08-29 02:44:36', 'item_11_image_1_ (1).jpg'),
(64, 11, '2018-08-29 02:44:36', '2018-08-29 02:44:36', 'item_11_image_2_ (1).jpg'),
(65, 11, '2018-08-29 02:44:36', '2018-08-29 02:44:36', 'item_11_image_3_ (1).jpg'),
(66, 11, '2018-08-29 02:44:36', '2018-08-29 02:44:36', 'item_11_image_5_ (1).jpg');

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
(1, 'Active'),
(2, 'Disabled'),
(3, 'Pending'),
(4, 'Deleted');

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
  `item_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `profile_picture`, `email`, `address`, `contact_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mark Anthony Gersalia (updated)', 1, '37534583_2282108541815741_2409787441184505856_n.jpg', 'admin@commerce.com', '', '', '$2y$10$.hlGmVvJE8LpK3YPgyJbLOJg9YzBnyzd.G9RFTFTyPCEJ4RaD8f.i', 'RQHU48UVlOTydQARZRwpHTVBtD2ApfiiD6HPNCemwlJBavmstUj6rGyWTeKc', '2018-08-10 01:45:46', '2018-08-13 22:04:12'),
(2, 'John Doe', 0, 'ken_thomas.jpg', 'john@doe.com', '7 Floor Cybergate Tower 3 Mandaluyong City', '+639556346141', '$2y$10$fWggkgM9Xli3pCsYDD2Kp.51EDhVCElqbrIgcxhKy6cVEcUtlfsfi', 'vhgZxMoD6h9dRmF9CV9dbnT6Y8l2CLQyN5sYoxhx1hsZLPY9SukgK7lEx8lG', '2018-08-12 23:57:30', '2018-08-13 22:12:59'),
(3, 'Gabe Norwood', 0, 'norwood.jpg', 'gabe@norwood.com', '', '', '$2y$10$NyuzbcxJnFsOXHkpLZioj.hEeW9BscPXpXA3e5uNXXtb/478FJ9eu', '8cIycr9LfdAPrlADj9fgocDzuFN2Tsg6vln5sFZp7rF2SZzIWTOBXZGJgFXC', '2018-08-14 01:01:18', '2018-08-14 01:01:18'),
(4, 'This is a test name', 0, NULL, 'test@test.com', NULL, '+63955346141', 'asdasd', NULL, '2018-08-28 17:59:23', '2018-08-28 17:59:23'),
(5, 'test test test 4', 0, NULL, 'test@test4', NULL, '123123123', '$2y$10$APNXZBEoICWwA5EDbmzFtOOjMS1rO1Uy4sh5uZ91Am00znJ64RjdO', NULL, '2018-08-28 18:20:56', '2018-08-28 18:20:56'),
(6, 'Jobert Austria', 0, NULL, 'jobert@austria.com', NULL, '+63955346141', '$2y$10$JrGT5dIGPIZQaozrKG.NgOxtwkQvtndph4oHWexJQdNWW37UZ21Vi', NULL, '2018-08-28 18:44:05', '2018-08-28 18:44:05'),
(7, 'Jobert Austria', 0, NULL, 'jobert@austria.com', NULL, '+63955346141', '$2y$10$jwkVFOiRdyiGWySjGrpFP.H3/cFEoAWqffUxsFM3mYrmzPaLxk1d2', NULL, '2018-08-28 18:44:36', '2018-08-28 18:44:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `featured_items`
--
ALTER TABLE `featured_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
