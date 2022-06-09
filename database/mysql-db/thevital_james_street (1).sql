-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2021 at 11:55 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thevital_james_street`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) DEFAULT NULL,
  `company` varchar(55) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `phone_no`, `email`, `subject`, `company`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Frances', 'Simpson', 75, 'ridatysaqa@mailinator.com', 'Doloremque cupidatat', 'Zimmerman Zimmerman Co', 'Fugit soluta a quis', '2021-06-17 15:39:19', '2021-06-17 15:39:19'),
(2, 'Jack', 'Arnold', 81, 'goqybidy@mailinator.com', 'Tempor aliquip elit', 'Flores and Bruce Inc', 'Expedita qui rerum c', '2021-06-23 05:17:35', '2021-06-23 05:17:35'),
(3, 'Porter', 'Allison', 38, 'jehy@mailinator.com', 'Totam mollitia conse', 'Greene and Paul Traders', 'Ullamco consequatur', '2021-06-23 05:18:26', '2021-06-23 05:18:26'),
(4, 'Phoebe', 'Hays', 70, 'diwaqynemo@mailinator.com', 'Rerum eos adipisicin', 'Pratt and Arnold Plc', 'In ea non et officia', '2021-06-23 05:19:00', '2021-06-23 05:19:00'),
(5, 'adad', 'adadad', 5616516, 'kndajsanksjdanka@amdfks.com', 'adad', 'adadad', 'adadadad', '2021-06-25 02:39:41', '2021-06-25 02:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `heading` varchar(55) NOT NULL,
  `description` text,
  `images` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `description`, `images`, `status`, `created_at`, `updated_at`) VALUES
(28, 'Main Banner', '<small class=\"wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">Welcome To</small>\r\n                                <h5 class=\"wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">JAMES</h5>\r\n                                <span class=\"wow fadeInUp\" data-wow-delay=\"0.4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">STREET CAPITAL</span>\r\n                                <small class=\"wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">I help individuals achieve their financial objectives through real estate investing. </small>', '1623885750.jpg', 1, '2021-06-16 18:22:30', '2021-06-23 04:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `page` varchar(55) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `sub_heading` text,
  `description_1` text,
  `description_2` text,
  `image_1` varchar(555) DEFAULT NULL,
  `image_2` varchar(555) DEFAULT NULL,
  `video_1` varchar(555) DEFAULT NULL,
  `video_2` varchar(555) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page`, `title`, `sub_heading`, `description_1`, `description_2`, `image_1`, `image_2`, `video_1`, `video_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home-Section-1', 'About Us', 'Shifting Our Thinking', '<p class=\"wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">In my experience mentoring people, I found fear to be the most common denominator among new investors, and potential entrepreneurs. The road to wealth begins in the mind. That’s where our journey begins. While much of my focus is in real estate, wealth is the ultimate objective. This means incorporating the following into a single program:</p>\r\n                        <ul class=\"wow fadeInUp\" data-wow-delay=\"0.4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">\r\n                            <li><p>Financial Literacy</p></li>\r\n                            <li><p>Leveraging Assets</p></li>\r\n                            <li><p>Real Estate Investments</p></li>\r\n                        </ul>\r\n                        <p class=\"wow fadeInUp\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\"><br></p>', '<p class=\"wow zoomin animated\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s;\">“My goal is to create 600 new investors / entrepreneurs in the next year (and each year after that). I limit the number of participants to ensure I have the capacity to give each person the necessary attention. I invite you to begin your journey to success today.”</p>', '1623949615.jpg', NULL, NULL, NULL, 1, '2021-06-17 12:06:55', '2021-06-26 06:06:14'),
(2, 'Home-section-2-part-1', 'Entrepreneur. Real Estate Investor. Business Coach', NULL, '<small>Origin:</small>\r\n                  <span>San Francisco Bay Area</span>\r\n                  <small>Current City:</small>\r\n                  <span>San Mateo, CA</span>', '<small>Industries:</small>\r\n                  <ul>\r\n                    <li><i class=\"fas fa-angle-right\"></i> Real Estate</li>\r\n                    <li><i class=\"fas fa-angle-right\"></i> Business Development</li>\r\n                    <li><i class=\"fas fa-angle-right\"></i> Self Development</li>\r\n                    <li><i class=\"fas fa-angle-right\"></i> Public Speaking</li>\r\n                  </ul>', '1624040477.png', NULL, NULL, NULL, 1, '2021-06-18 13:21:17', '2021-06-18 14:12:26'),
(3, 'Home-section-2-part-2', NULL, NULL, '<small>Coaching Services:</small>\r\n                  <span>Entrepreneurship</span>\r\n                  <span>Financial Literacy</span>\r\n                  <span>Real Estate Investing </span>', '<small>Companies:</small>\r\n                  <ul>\r\n                    <li><i class=\"fas fa-angle-right\"></i> James Street Capital LLC</li>\r\n                    <li><i class=\"fas fa-angle-right\"></i> One Greenwood Ave Inc.</li>\r\n                    <li><i class=\"fas fa-angle-right\"></i> James Street Properties LLC</li>\r\n                  </ul>', NULL, NULL, NULL, NULL, 1, '2021-06-18 13:24:51', '2021-06-18 14:12:33'),
(4, 'Home-section-2-part-3', NULL, NULL, '<small>Community Involvement:</small>\r\n                  <span>Motivational Speaking, Real Estate Education, Youth <br>\r\n          Empowerment, Mentoring Future Business Owners</span>', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-18 13:26:45', '2021-06-18 13:27:45'),
(5, 'Home-Section-3-part-1', 'On A Mission To Change Lives', 'Everyone deserves a shot at the American Dream. Empowering communities by teaching principles surrounding a wealth mindset has been a longtime passion. Information is knowledge. knowledge increases potential. The application of that knowledge is power.', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-06-17 14:07:58', '2021-06-26 05:43:37'),
(6, 'Home-Section-3-part-2', 'How We Connect', NULL, '<p>Odis’ ability to simplify the most complex of real estate strategies has set him apart from many in the real estate investing space. His values, vulnerability, and transparency allow him to connect with his audience in a way that not only encourages but inspires.<br><br>\"Everyone has at least a pilot light inside. Give my five minutes and I’ll turn that pilot light into a five alarm fire!\"<br><b>Odis James</b></p>', NULL, NULL, NULL, '1623957045.png', NULL, 1, '2021-06-17 14:09:37', '2021-06-30 23:47:32'),
(7, 'Home-Section-4', 'Publication', NULL, '<p>“It’s easy to believe when someone is referred to as an expert that they’ve done everything right. The truth is, there were times when the right way was the only way left to try.”</p>', '-Odis James', '1623960178.png', NULL, NULL, NULL, 1, '2021-06-17 15:02:58', '2021-07-01 02:49:26'),
(9, 'Home-Section-5', 'WHY I DO IT', NULL, NULL, NULL, NULL, NULL, '1623959935.jpg', NULL, 1, '2021-06-17 14:57:10', '2021-06-17 14:58:55'),
(10, 'Home-Section-5', 'Mentorship Program Commentary', NULL, NULL, NULL, NULL, NULL, '1623959947.jpg', NULL, 1, '2021-06-17 14:58:04', '2021-06-17 14:59:07'),
(11, 'Home-Section-5', 'Buy Back the Block Houston', NULL, NULL, NULL, NULL, NULL, '1623959973.jpg', NULL, 1, '2021-06-17 14:58:27', '2021-06-17 14:59:33'),
(19, 'Home-Section-Golden-Box', NULL, NULL, '<p>Bring the whole tithe into the storehouse, that there may be food in my house. Test me in this,” says the LordAlmighty, “and see if I will not throw open the floodgates of heaven and pour out so much blessing that there will not be room enough to store it.</p>', 'Malachi 3:10', NULL, NULL, NULL, NULL, 1, '2021-07-01 02:35:24', '2021-07-01 02:35:24'),
(20, 'Home-Section-4', 'Speaking', NULL, '“Most people are only a thought away from success and don’t realize it. A shift in perspective can be the difference between a life of meaning and fulfillment and a life of mediocrity. My passion is being the cause of that shift.”', '-Odis James', '1625082541.png', NULL, NULL, NULL, 1, '2021-07-01 02:47:41', '2021-07-01 02:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `email`, `phone`, `currency`, `address`, `fb_link`, `twitter_link`, `insta_link`, `linkedin_link`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'info@odisjames.com', '832.402.9934', 'USD', 'James Street Capital 3225 McLeod Drive, Suite 100 Las Vegas, Nevada 89121', '#', '#', '#', '#', '© Copyright 2021 James-Street. All rights reserved.', '2021-06-22 22:45:08', '2021-06-23 05:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, ' ', 'hozaty@mailinator.com', '27', 'Qui aliqua Est bla', '2021-06-22 17:11:36', '2021-06-22 17:11:36'),
(2, ' ', 'hipuhex@mailinator.com', '85', 'Illum sit do modi', '2021-06-23 05:21:10', '2021-06-23 05:21:10'),
(3, ' ', NULL, NULL, NULL, '2021-06-24 05:10:23', '2021-06-24 05:10:23'),
(4, ' ', NULL, NULL, NULL, '2021-06-24 05:23:42', '2021-06-24 05:23:42'),
(5, ' ', NULL, NULL, NULL, '2021-06-24 05:41:31', '2021-06-24 05:41:31'),
(6, ' ', NULL, NULL, NULL, '2021-06-24 23:11:15', '2021-06-24 23:11:15'),
(7, ' ', NULL, NULL, NULL, '2021-06-24 23:11:16', '2021-06-24 23:11:16'),
(8, ' ', 'adfafafa@dfgdfg.com', '216865161651', 'dsfsfdsf', '2021-06-24 23:34:19', '2021-06-24 23:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `longitude_latitude` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `description`, `event_date`, `event_time`, `longitude_latitude`, `address`, `status`, `price`, `created_at`, `updated_at`) VALUES
(3, 'Lev Gordon', '1626117363.jpg', '<p>asd</p>', '2011-12-17', '13:32:00', 'Aut dolor cupiditate', '', 0, 200, '2021-07-12 14:16:03', '2021-07-12 14:16:03'),
(4, 'lorem ipsum', '1626121927.jpg', '<p><span style=\"background-color: rgb(255, 255, 0);\">test</span></p>', '2021-07-14', '16:34:00', '27.96036102229133, 68.6329094706327', '', 1, 280, '2021-07-12 15:32:07', '2021-07-12 15:32:07'),
(5, 'Fiona Charles', '1626124154.jpg', NULL, '1970-04-04', '12:58:00', '51.55627967946917, -0.27963957551235397', '', 1, 200, '2021-07-12 16:09:14', '2021-07-12 16:09:14'),
(6, 'Donna Stark', '1626124982.jpg', NULL, '2005-04-22', '04:30:00', '30.40884274756357, -84.27224577767248', 'florida, street 17 A', 1, 280, '2021-07-12 16:23:02', '2021-07-12 16:23:02'),
(7, '1 hours session', '1626125840.png', '<span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span>', '2021-08-01', '09:00:00', '30.43421624077582, -84.29932835768724', '901 Mosley St, Tallahassee, FL 32310, United States', 1, 200, '2021-07-12 16:37:20', '2021-07-12 16:37:20'),
(8, 'Stone Rodriquez', '1626278893.jpg', NULL, '1987-12-10', '08:16:00', '27.96036102229133, 68.6329094706327', 'Rerum rem nesciunt', 1, 1200, '2021-07-14 21:08:13', '2021-07-14 21:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `event_followers`
--

CREATE TABLE `event_followers` (
  `id` int(11) NOT NULL,
  `event_id` int(111) NOT NULL,
  `user_id` int(111) NOT NULL,
  `follower` int(111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_orders`
--

CREATE TABLE `event_orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `ordernote` text,
  `event_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_orders`
--

INSERT INTO `event_orders` (`id`, `first_name`, `last_name`, `address`, `city`, `phone`, `email`, `postcode`, `ordernote`, `event_id`, `quantity`, `total_price`, `payment_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'September', 'Vaughn', 'Perspiciatis dolor', 'Velit numquam dolor', '5', 'qopon@mailinator.com', 'Cum ipsum velit ess', 'Cumque fugiat velit', 4, 5, 1400, NULL, NULL, '2021-07-13 16:11:01', '2021-07-13 16:11:01'),
(2, 'Colby', 'Cote', 'Autem aliquam nostru', 'Quibusdam incididunt', '64', 'gybasa@mailinator.com', 'Et ex incidunt aspe', 'Aut voluptatem delec', 4, 5, 1400, NULL, NULL, '2021-07-13 16:25:44', '2021-07-13 16:25:44'),
(3, 'Amber', 'Rhodes', 'Velit est et asperna', 'Dolores quo ea provi', '83', 'sigapuwyx@mailinator.com', 'Non Nam reprehenderi', 'Aliquid sit quod sed', 6, 2, 560, NULL, NULL, '2021-07-13 16:31:16', '2021-07-13 16:31:16'),
(4, 'Maya', 'Pierce', 'In possimus dolor f', 'Est aut dignissimos', '36', 'codag@mailinator.com', 'Numquam quis ea veli', 'Aliquip lorem numqua', 6, 2, 560, NULL, NULL, '2021-07-13 16:37:10', '2021-07-13 16:37:10'),
(5, 'Meghan', 'Norton', 'Commodo ex fugiat q', 'Culpa dignissimos fu', '100', 'xemofylec@mailinator.com', 'Ut sunt eiusmod natu', 'Ut quam voluptatum q', 6, 1, 280, NULL, NULL, '2021-07-13 16:43:31', '2021-07-13 16:43:31'),
(6, 'Victor', 'Dyer', 'TEs', 'Vel magna ipsum exp', '82', 'cypike@mailinator.com', 'Eius odio dolore deb', 'Ullamco incidunt al', 4, 1, 280, NULL, NULL, '2021-07-13 17:16:59', '2021-07-13 17:16:59'),
(7, 'Alfonso', 'Hanson', 'Veniam minima dolor', 'Ea molestiae sunt ir', '13', 'dogizy@mailinator.com', 'Qui at inventore nob', 'Earum et sapiente oc', 5, 4, 800, 'ch_1JCu3NCmaCeXAIYU4kkiCCxp', 1, '2021-07-13 17:21:46', '2021-07-13 17:26:13'),
(8, 'Amy', 'Christian', 'Ut ipsum placeat se', 'Id commodi distincti', '83', 'tades@mailinator.com', 'Esse consequatur i', 'Officia eum occaecat', 4, 1, 280, 'ch_1JCuD4CmaCeXAIYUjNEN1S12', 1, '2021-07-13 17:35:53', '2021-07-13 17:36:14'),
(9, 'Risa', 'Mccoy', 'Odit officia neque o', 'Nihil consectetur n', '18', 'natesubec@mailinator.com', 'Quia iusto neque iru', 'Veniam sint natus a', 5, 2, 400, 'ch_1JCuFiCmaCeXAIYUZ5OhDDYw', 1, '2021-07-13 17:38:45', '2021-07-13 17:38:58'),
(10, 'Carl', 'Ingram', 'Blanditiis sunt nemo', 'Non suscipit enim of', '20', 'neka@mailinator.com', 'Ad exercitation atqu', 'Fugiat iste quo pers', 7, 3, 600, 'ch_1JCuwFCmaCeXAIYUq4VFspVN', 1, '2021-07-14 04:22:36', '2021-07-14 04:22:55'),
(11, 'Courtney', 'Adkins', 'Ny, street 1', 'Ny', '123456789', 'courtney@zz.com', '123456', NULL, 7, 2, 400, 'ch_1JCuxiCmaCeXAIYUE0fACUXN', 1, '2021-07-14 04:24:01', '2021-07-14 04:24:27'),
(12, 'Ingrid', 'Lynch', 'Architecto laboriosa', 'Aut explicabo Place', '16', 'zany@mailinator.com', 'Sunt doloribus corru', 'Facilis repudiandae', 6, 1, 280, NULL, NULL, '2021-07-14 04:29:32', '2021-07-14 04:29:32'),
(13, 'Chava', 'Lara', 'Sit voluptate liber', 'Reprehenderit tempor', '67', 'xatalo@mailinator.com', 'Perspiciatis sapien', 'Cumque commodi aliqu', 4, 1, 280, 'ch_1JDB7XCmaCeXAIYU72wiuDUZ', 1, '2021-07-14 21:39:23', '2021-07-14 21:39:40'),
(14, 'Martin', 'Garix', '2272  Oak Street', 'Old Forge', '3153695835', 'martingarix7878@gmail.com', '13420', 'Something', 4, 7, 1960, 'ch_1JDFL5CmaCeXAIYURnPmPpvB', 1, '2021-07-15 02:09:15', '2021-07-15 02:09:55'),
(15, 'test', 'test', 'test', 'test', '1234567895', 'Test@test.com', '12345', 'test', 3, 5, 1000, NULL, NULL, '2021-07-17 03:10:38', '2021-07-17 03:10:38'),
(16, 'Walter', 'Mitchell', 'Qui non ipsa pariat', 'Voluptatibus digniss', '1', 'cyzefedaku@mailinator.com', 'Ipsum voluptatem re', 'Non aut autem nisi e', 7, 2, 400, NULL, NULL, '2021-07-17 03:12:15', '2021-07-17 03:12:15'),
(17, 'Pandora', 'Mendez', 'Sit velit voluptas', 'Ad qui aut recusanda', '42', 'dexenis@mailinator.com', 'Sit veritatis ut ven', 'Do asperiores possim', 7, 2, 400, NULL, NULL, '2021-07-17 03:14:59', '2021-07-17 03:14:59'),
(18, 'Mufutau', 'Rasmussen', 'Quasi id eum quae a', 'Consectetur ex anim', '+1 (817) 919-3585', 'xuhaxomobo@mailinator.com', 'Ab dicta corporis do', NULL, 4, 990, 0, NULL, 1, '2021-07-17 20:13:22', '2021-07-17 20:13:22'),
(19, 'Tate', 'Miller', 'Quas dolorum ex duci', 'Modi dolor asperiore', '+1 (421) 368-6375', 'jofinyzov@mailinator.com', 'Qui voluptatibus rat', NULL, 8, 2, 2400, NULL, 1, '2021-07-17 20:14:05', '2021-07-17 20:14:05'),
(20, 'Amber', 'Howe', 'Nesciunt rerum temp', 'Incididunt eos accus', '+1 (361) 207-8368', 'nuzivehit@mailinator.com', 'Et nesciunt exceptu', NULL, 8, 5, 6000, NULL, 1, '2021-07-17 20:15:51', '2021-07-17 20:15:51'),
(21, 'Hedy', 'Shaffer', 'Consequatur ad ad no', 'Voluptatibus distinc', '+1 (246) 209-3516', 'defu@mailinator.com', 'Ut quia porro non vo', NULL, 8, 4, 4800, NULL, 1, '2021-07-17 20:16:34', '2021-07-17 20:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `sub_heading` varchar(55) DEFAULT NULL,
  `price` float NOT NULL,
  `description` text,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `title`, `sub_title`, `sub_heading`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '6 Week Program', 'Tier 1', 'Weekly Group Sessions', 2500, '<ul class=\"_3-q0m pp-plan-benefits-divider-color _1Np2U\"><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-bottom: 1.5em;\">Identify Your Financial Stage And Risk Tolerance</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Which Investment Strategy Best Fits Your Objective</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Choose a Geographical Market</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Financing Options</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Acquiring Funds For Down Payment + Carrying Costs (Reserves)</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Evaluating Deals Before Executing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Strategies For Using Hard Money</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">General Rehab Best Practices</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em;\">Income Property Management Overview</span></li></ul>', 1, '2021-06-16 18:46:14', '2021-07-28 21:20:52'),
(8, '1 on 1 Mentorship', 'Tier 2', 'Weekly Group Sessions PLUS 1 -0n-1 Sessions', 5000, '<ul class=\"_3-q0m pp-plan-benefits-divider-color _1Np2U\"><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-bottom: 1.5em;\">Access to Weekly Round Up</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Building Your Team - Understanding The Different Roles...</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Scheduling Your Time And Prioritizing Next Steps</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Basic Understanding of the Rehab Process</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Creative Financing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Creating a System to Secure Deals</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Real Estate Marketing Ideas</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Home Flipping Risk Assessment</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Working with Contractors</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Your Financial Stage And Risk Tolerance</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Which Investment Strategy Best Fits Your Objective</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Choose a Geographical Market</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Financing Options</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Acquiring Funds For Down Payment + Carrying Costs (Reserves)</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Evaluating Deals Before Executing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Strategies For Using Hard Money</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">General Rehab Best Practices</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Income Property Management Overview</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em;\">Wholesaling –  Get The Tools Become a Successful Wholesaler</span></li></ul>', 1, '2021-06-17 11:14:06', '2021-07-28 21:05:02'),
(9, 'Build Your Business', 'Tier 3', 'Meet Odis in Your Market', 7500, '<ul class=\"_3-q0m pp-plan-benefits-divider-color _1Np2U\"><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-bottom: 1.5em;\">Enrolled in Business Consultant Program</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Wealth Strategy Consultation</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Connect you to all systems you need to operate</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Access to Weekly Round Up</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Multifamily Financing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Multifamily Management</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Incudes In Person Two Day Business Building Session</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em;\">Hands on Consulting “Building Your Business”</span></li></ul>', 1, '2021-06-17 11:14:45', '2021-07-28 21:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`id`, `sender_id`, `rec_id`, `msg`, `created_at`, `updated_at`) VALUES
(1, 1, 37, 'asd', '2021-07-02 08:21:46', '2021-07-02 08:21:46'),
(2, 1, 35, 'ss', '2021-07-27 03:26:37', '2021-07-27 03:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `msg`, `title`, `file`, `created_at`, `updated_at`) VALUES
(6, 35, 'test', 'test', NULL, '2021-07-03 00:42:47', '2021-07-03 01:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) NOT NULL,
  `order_price` float NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = not cancelled\r\n1 = cancelled\r\n',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `membership_id`, `payment_id`, `order_price`, `status`, `created_at`, `updated_at`) VALUES
(18, 37, 8, 'ch_1J8b2dCmaCeXAIYUThPl5ycq', 5000, 0, '2021-07-02 08:19:38', '2021-07-02 08:19:38'),
(21, 40, 6, 'ch_1J8qq3CmaCeXAIYUecbvUuod', 2500, 0, '2021-07-03 01:11:43', '2021-07-03 01:11:43'),
(22, 38, 6, 'ch_1JCt7RCmaCeXAIYUdUlqlIxw', 2500, 0, '2021-07-13 16:26:21', '2021-07-13 16:26:21'),
(23, 1, 8, 'ch_1JIFzjCmaCeXAIYUdc9SNfGG', 5000, 0, '2021-07-28 21:52:36', '2021-07-28 21:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `referal`
--

CREATE TABLE `referal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `refered_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referal`
--

INSERT INTO `referal` (`id`, `user_id`, `refered_by`, `created_at`, `updated_at`) VALUES
(25, 41, 35, '2021-07-03 01:13:29', '2021-07-03 01:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `phone_no` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=payment not proceed\r\n1= payment proceeded',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `image` varchar(55) DEFAULT NULL,
  `description` text,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Real Estate Invester', '1623886482.jpg', '<p>As an investor, Odis is well versed in long term hold strategies, rehabs and light construction, flips, creative finance, and creating multiple revenue streams with a single asset. With various strategies in his tool box, Odis is able to create solutions for distressed sellers without compromising the integrity of his brand.<br></p>', 1, '2021-06-16 18:34:42', '2021-06-29 02:39:22'),
(12, 'Entrepreneur', '1623887056.jpg', '<p>Odis has an acute sense of business. As an entrepreneur, Odis built a company utilized the Outsourcing business model that ultimately generated seven figures. He dovetails his entrepreneurial mind and his real estate investing skillset to gain a competitive advantage.<br></p>', 1, '2021-06-16 18:44:16', '2021-06-29 02:42:11'),
(13, 'Speaker', '1624038137.jpg', '<p>Odis is most comfortable articulating his ideas in front of large crowds. His public speaking journey began in the faith-based community and spilled over into different aspect of his professional career. He has encouraged and motivated individuals in the corporate space, and well as the personal development, and entrepreneurial spaces. Removing doubt and limiting beliefs has been a long-time talent.<br></p>', 1, '2021-06-18 12:42:17', '2021-06-29 02:43:40'),
(14, 'Real Estate Broker', '1624038160.jpg', '<p>Odis was fluent in the language of real estate from an early age. His father, Odis Jr., had been a real estate broker since 1971 and took young Odis with him to the office and client meetings. It did not take long for Odis to pick up his father’s work ethic and love of real estate. In 2003, Odis and his father opened their first office in San Jose, CA, and by 2005 they had added a mortgage brokerage to their list of services. Today Odis is a licensed real estate broker in the states of California, South Carolina (pending), and Georgia (pending).<br></p>', 1, '2021-06-18 12:42:40', '2021-06-26 05:53:08'),
(15, 'Business Consultant', '1624038184.jpg', '<p>Odis has held regional level positions in some of the largest real estate management companies in the works. Through the implementation of learned best practices, Odis helps small real estate investment businesses understand the systems, and processes necessary to maximize their efficiency, reduce unnecessary liability, and increase their bottom line. With the help of small business consultant and long time friend James Lewis, Odis incorporates a business consulting component to his mentorship program.<br></p>', 1, '2021-06-18 12:43:04', '2021-06-29 02:44:12'),
(16, 'Multi Family', '1624038198.jpg', '<p>As a Regional Manager for some of the largest multifamily organizations in the world, Odis is well versed in the operations of large multifamily assets. At the height of his multifamily career Odis was responsible for overseeing in excess of $500 million in multifamily real estate in the San Francisco Bay Area.<br></p>', 1, '2021-06-18 12:43:18', '2021-06-29 02:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `description` text,
  `image` varchar(55) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `designation` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `image`, `name`, `designation`, `status`, `created_at`, `updated_at`) VALUES
(15, '<p>\"What I love about Odis\'s mentorship is:</p><p>\r\n\r\n1- He explains concepts so clearly that a 7 year old could execute the steps.</p><p>\r\n\r\n2-He actively practices what he teaches and is brilliant!!!\r\n</p><p>\r\n3-HE\'S ALWAYS ACCESSIBLE &amp; WILL HOLD YOUR HAND THROUGH THE PROCESS.\"</p>', '1625505430.jpg', 'Sheba Coffey', NULL, 1, '2021-06-17 11:20:51', '2021-07-06 00:17:10'),
(16, '<p>\"This program is more than just facts that can be found on your own or through research. The team brings experience and integrity but most of all the support that never leaves me feeling alone or lost on my individual Journey.\"\r\n</p>', '1625505533.jpg', 'Arthur Takeall', NULL, 1, '2021-06-17 11:22:48', '2021-07-06 00:19:23'),
(17, '<p>\"Before Odis\' program my wife and I were wholesaling.  We would always wholesale to other investors and never keep properties for ourselves.  Now we have strategies to keep these properties for ourselves.  Just to give you an example if we would have wholesaled this property we would have made $8000.  But now that we are keeping it for ourselves we will make $35,000!\"</p>', '1625505673.jpg', 'Eli The Real Estate Guy', NULL, 1, '2021-06-17 11:23:00', '2021-07-06 00:21:13'),
(18, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.Ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen.<br></p>', '1623946998.jpg', 'Lorem Ipsum', 'Lorem Ipsum', 0, '2021-06-17 11:23:18', '2021-07-06 00:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(555) DEFAULT NULL,
  `user_role` int(1) NOT NULL,
  `reset` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `provider_id`, `avatar`, `password`, `user_role`, `reset`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, NULL, '$2y$10$Y6Gcp2kbkyZIl9ufJ9LX7ux5oDEWBOLszOfpi0EZsHf5x3q1.ET3m', 1, NULL, '2021-06-16 21:48:41', '2021-06-16 21:48:41'),
(35, 'sam', 'sam@vitaldesigning.com', NULL, NULL, 'samson', 2, NULL, '2021-07-02 05:07:37', '2021-07-02 05:07:37'),
(36, 'William', 'William@vitaldesigning.com', NULL, NULL, 'willian', 2, NULL, '2021-07-02 05:12:03', '2021-07-02 05:12:03'),
(37, 'Martin Garix', 'martingarix7878@gmail.com', '111612959649411492241', 'https://lh3.googleusercontent.com/a/AATXAJw87Vxc80NdkYURuvbw4tO6v_9ZlyGnTIDnhYiD=s96-c', NULL, 2, NULL, '2021-07-02 08:19:11', '2021-07-02 08:19:11'),
(38, 'dev petyr', 'devpetyr911@gmail.com', '105866561827322939177', 'https://lh3.googleusercontent.com/a/AATXAJytHN79d16llvC2GrMy98m9LEXZxwv5cd5ZWDUX=s96-c', '12345678', 2, NULL, '2021-07-02 23:06:12', '2021-07-02 23:06:12'),
(40, 'Test', 'test@gmail.com', NULL, NULL, '12345678', 2, NULL, '2021-07-03 01:11:13', '2021-07-03 01:11:13'),
(41, 'Test1', 'test1@gmail.com', NULL, NULL, '12345678', 2, NULL, '2021-07-03 01:13:29', '2021-07-03 01:13:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_followers`
--
ALTER TABLE `event_followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_orders`
--
ALTER TABLE `event_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referal`
--
ALTER TABLE `referal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_followers`
--
ALTER TABLE `event_followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_orders`
--
ALTER TABLE `event_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `referal`
--
ALTER TABLE `referal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
