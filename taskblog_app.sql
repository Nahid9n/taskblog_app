-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 06:29 PM
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
-- Database: `taskblog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `name`, `email`, `image`, `author`, `short_description`, `long_description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '‘Argentina future No. 10 shirt in good hands’', NULL, 'uploads/Blog_images/claudio_echeverri_u17_wc_25112023_83a8_khh.avif', 'Admin', 'Turning in a stunning performance in Friday\'s quarter-final against Brazil at the FIFA U-17 World Cup in Indonesia,', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\"><span style=\"box-sizing: inherit; font-weight: 700; line-height: inherit;\">Turning in a stunning performance in Friday\'s quarter-final against Brazil at the FIFA U-17 World Cup in Indonesia, Claudio Echeverri\'s hattrick helped Argentina beat the four-time winners of the competition for the first time in the age group.</span></p><div class=\"mb-20 mr-20 hide-for-print dfp-tag-wrapper text-center  \" style=\"box-sizing: inherit; margin-top: 0px; margin-left: 0px; padding: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; margin-right: 20px !important; margin-bottom: 20px !important;\"><div id=\"dfp-ad-en_photo_banner-wrapper\" class=\"dfp-tag-wrapper\" style=\"box-sizing: inherit; margin: 0px; padding: 0px;\"><pubguru data-pg-ad=\"en_photo_banner\" class=\"\" id=\"\" style=\"box-sizing: inherit;\"></pubguru></div></div><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">With the No. 10 stamped on his back and the captain\'s armband firmly in place, Echeverri -- nicknamed El Diablito (the Little Devil) -- produced a display worthy of comparison with Lionel Messi, almost a year on from his heroics in Qatar.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Aside from sharing a certain likeness with the Argentina talisman and a similar gift for dribbling and bringing the ball under instant control, the youngster also made a little piece of history that Messi can relate to. Back in 2005, Messi produced a virtuoso performance of his own against Brazil at the FIFA U-20 World Cup in the Netherlands.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Following a shock defeat against Senegal in the ongoing tournament opener, Echeverri told FIFA in an interview that he idolises Messi and one of Messi\'s idols, Pablo Aimar. \"I always said that my idol was Messi, but I\'m nowhere near Messi. I also really liked Pablo Aimar … and he gives me useful pointers about what I need to correct in my game.\"</p><div class=\"mb-20 mr-20 hide-for-print dfp-tag-wrapper text-center \" style=\"box-sizing: inherit; margin-top: 0px; margin-left: 0px; padding: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; margin-right: 20px !important; margin-bottom: 20px !important;\"><div id=\"dfp-ad-en_four_banner-wrapper\" class=\"dfp-tag-wrapper\" style=\"box-sizing: inherit; margin: 0px; padding: 0px;\"><pubguru data-pg-ad=\"en_four_banner\" class=\"pg-loaded\" id=\"pg-ad-rdij4ouk\" data-google-query-id=\"CKu_tfvO34IDFQCTrAId_gEEdw\" style=\"box-sizing: inherit;\"><div id=\"google_ads_iframe_/34728570/en_four_banner/1_0__container__\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0pt none;\"><span style=\"text-align: left;\">Despite being only 17, Echeverri\'s reputation has preceded him for a number of years. In fact, he was barely ten when his four-goal haul versus Juventus in a youth competition became the talk of the internet.</span></div></pubguru></div></div><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Daniel Brizuela, who discovered Echeverri while scouting for River Plate, recalled his initial impression of the exceptional talent.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">\"When I had just arrived and I saw him one day, I told one of the coaches \'he\'s a mix of [Diego] Maradona and Messi\'… because he has the mettle, personality and character of Maradona and the characteristics are similar to those of Messi.\"</p><div class=\"mb-20 mr-20 hide-for-print dfp-tag-wrapper text-center \" style=\"box-sizing: inherit; margin-top: 0px; margin-left: 0px; padding: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; margin-right: 20px !important; margin-bottom: 20px !important;\"><div id=\"dfp-ad-en_five_banner-wrapper\" class=\"dfp-tag-wrapper\" style=\"box-sizing: inherit; margin: 0px; padding: 0px;\"><pubguru data-pg-ad=\"en_five_banner\" class=\"pg-loaded\" id=\"pg-ad-c6r2f4v9\" data-google-query-id=\"CKq_tfvO34IDFQCTrAId_gEEdw\" style=\"box-sizing: inherit;\"><div id=\"google_ads_iframe_/34728570/en_five_banner/1_0__container__\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0pt none;\"><span style=\"text-align: left;\">\"We have the team\'s number 10 shirt in good hands for the future, and that is something incredible.\"</span></div></pubguru></div></div><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Once the tournament draws curtains on December 2, Echeverri is likely to be in the radar of several European heavyweights. Echeverri, though, desires to follow in the footsteps of Messi, donning the FC Barcelona colours.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Prior to the tournament, he said, \"As well as River, I would like to play for Barça. I used to watch Messi play for Barcelona, so I\'ve had this team inside me since I was very young.\"</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Echeverri, currently the joint-top scorer in the competition with Agustin Ruberto on five goals, is all set to lead Argentina to their only missing silverware. But first, they have to pass the Germany hurdle in Tuesday\'s semifinals.</p>', 1, '2023-11-25 10:59:50', '2023-11-25 11:03:07'),
(2, '1', '‘A game-breaking spell’', NULL, 'uploads/Blog_images/Cummins story.avif', 'Admin', 'Cricket - ICC Cricket World Cup 2023 - Final - India v Australia - Narendra Modi Stadium,', '<p><span style=\"box-sizing: inherit; font-weight: 700; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">Discussions on why and how things happened usually go on for a while following as big a tournament as the World Cup. It intensifies even more when something out of the script happens.</span></p><p><span style=\"box-sizing: inherit; font-weight: 700; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\"><br></span><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">What happened at the Narendra Modi Stadium in Ahmedabad exactly a week ago defied expectations and the trend – a six-wicket win by Australia in the final to halt an unbeaten India was definitely something that went against the trend.</span></p><p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\"><br></span></p><p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">While much has been talked about the final by experts and fans alike, none probably could have given a first-hand description better than someone who witnessed it from the dugout that night.</span></p><p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\"><br></span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">In his latest YouTube video \'World Cup 2023: A Reflection\', India off-spinner Ravichandran Ashwin, who was on the Indian bench for that game, dissected the genius of Australia skipper Pat Cummins in the final, referring to his spell as a \'game-breaking\' phenomenon.</p><div class=\"mb-20 mr-20 hide-for-print dfp-tag-wrapper text-center \" style=\"box-sizing: inherit; margin-top: 0px; margin-left: 0px; padding: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; margin-right: 20px !important; margin-bottom: 20px !important;\"><div id=\"dfp-ad-en_four_banner-wrapper\" class=\"dfp-tag-wrapper\" style=\"box-sizing: inherit; margin: 0px; padding: 0px;\"><pubguru data-pg-ad=\"en_four_banner\" class=\"pg-loaded\" id=\"pg-ad-6dnhde27\" data-google-query-id=\"CNeQppTQ34IDFYcE1QodNlQHug\" style=\"box-sizing: inherit;\"></pubguru></div></div><p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\"><br></span><br></p>', 1, '2023-11-25 11:02:30', '2023-11-25 11:02:30'),
(3, '2', '‘Summer onion growers to get more incentive’', 'nahid@gmail.com', 'uploads/Blog_images/summer_onion.avif', 'Tanvir Hasan Nahid', 'Summer onion producers will be provided with more government', '<p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">Summer onion producers will be provided with more government incentives, Agriculture Secretary Wahida Akter said yesterday.</span></p><p>The government is now emphasising&nbsp;<a href=\"https://www.thedailystar.net/business/economy/news/govt-now-offers-incentives-summer-onion-varieties-3406271\" target=\"_blank\" style=\"box-sizing: inherit; line-height: inherit; cursor: pointer; transition-property: color, opacity, background-color, border-color, box-shadow; transition-duration: 0.3s;\">production of summer onion</a>&nbsp;to achieve self-sufficiency for the crop, she said.<span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\"><br></span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">\"We are providing growers with seeds and fertilisers free of cost to popularise summer onion farming. We have already started getting the benefits of extending free seeds,\" Akter added.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">She also said more incentives will be disbursed to increase summer onion production from next year and this will help the government meet onion demand in the local market.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">The secretary made these comments while exchanging views with farmers on summer onion production at Isakhali village under Meherpur district, the agricultural ministry said in a statement.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">The agriculture ministry has been distributing free seeds and fertilisers as incentives to farmers for the last few years to increase summer onion production.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">The government has so far given more than Tk 32 crore as incentives in this regard.</p>', 1, '2023-11-25 11:08:15', '2023-11-25 11:08:48'),
(4, '3', 'Noble sent to rehab', 'nahid@gmail.com', 'uploads/Blog_images/nobleman.avif', 'Tanvir Hasan Nahid', 'Even since his career started, Mainul Ahsan Noble was more in the talks due to his controversial activities than his actual music.', '<p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">Even since his career started, Mainul Ahsan Noble was more in the talks due to his controversial activities than his actual music.</span></p><p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">Recently, the news of his remarriage circulated, after he shared some pictures on Facebook, seen in an affectionate pose with vlogger Farzana Arshi, announcing their marriage.</span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">However, Arshi denied getting married to Noble and stated that she is still married to food vlogger Nadim Ahmed.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Noble\'s ex-wife Salsabil, along with the singer\'s family earlier said that Noble is addicted to drugs, and this is why he has been sent to the rehabilitation centre.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">A close relative of Noble provided this information to the media. According to that statement, Noble had gotten extremely out of control, and this is why on Thursday, he was sent to a nearby rehabilitation centre.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Earlier, food blogger Nadim came on Facebook live, and shared that he went to Noble\'s house to bring his wife back, however, upon arriving at his house, Nadim and his and Arshi\'s family were in deep shock as they witnessed Arshi taking drugs with Noble.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">The Sa Re Ga Ma Pa famed contestant and singer has been sent to rehab as he might have fallen into legal complications, as according to another close source Nadim and his family has filed a case against Noble.&nbsp;</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\"><br></p><p><br></p>', 1, '2023-11-25 11:12:25', '2023-11-25 11:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sports', 'uploads/category/category_image/istockphoto-1355687112-170667a.webp', 1, '2023-11-25 10:52:37', '2023-11-25 10:52:37'),
(2, 'Business', 'uploads/category/category_image/istockphoto-1418476287-170667a.webp', 1, '2023-11-25 10:53:12', '2023-11-25 10:53:12'),
(3, 'Entertainment', 'uploads/category/category_image/pexels-ingo-joseph-1755087.jpg', 1, '2023-11-25 10:53:39', '2023-11-25 10:53:39'),
(4, 'Tech & Startup', 'uploads/category/category_image/illustration-startup-business_53876-18154.avif', 1, '2023-11-25 10:53:52', '2023-11-25 10:53:52'),
(5, 'Multimedia', 'uploads/category/category_image/360_F_198711504_1HWwag92jQXIRKgyGk2kmOAEP6HWdbmU.jpg', 1, '2023-11-25 10:54:04', '2023-11-25 10:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `user_id`, `blog_id`, `email`, `comment`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir Hasan Nahid', '1', '1', 'nahid@gmail.com', 'This is so good player i think so', '25-Nov,2023 17:05', 0, '2023-11-25 11:05:27', '2023-11-25 11:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(29, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2023_11_22_195740_create_sessions_table', 1),
(33, '2023_11_23_140000_create_categories_table', 1),
(34, '2023_11_23_143018_create_blogs_table', 1),
(35, '2023_11_23_211841_create_sponsored_blogs_table', 1),
(36, '2023_11_24_174632_create_user_auths_table', 1),
(37, '2023_11_25_045722_create_comments_table', 1),
(38, '2023_11_25_141511_create_user_profiles_table', 1),
(39, '2023_11_25_162535_create_user_contacts_table', 1),
(40, '2023_11_25_163346_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uYjf6Vf8UUynq5eKDnzILD1WDyclcgAOuGn8vM37', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36 OPR/104.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZVRRSTV6NHZHUUJNbFY3QWR0V3ZtMUJ6ekd6STRxNHR3dFpKbHNsaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyUHJvZmlsZSI7fXM6NzoidXNlcl9pZCI7aToyO3M6OToidXNlcl9uYW1lIjtzOjEyOiJOdXB1ciBSYWhtYW4iO3M6MTA6InVzZXJfZW1haWwiO3M6MTU6Im51cHVyQGdtYWlsLmNvbSI7fQ==', 1700933316);

-- --------------------------------------------------------

--
-- Table structure for table `sponsored_blogs`
--

CREATE TABLE `sponsored_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsored_blogs`
--

INSERT INTO `sponsored_blogs` (`id`, `category_id`, `name`, `image`, `author`, `short_description`, `long_description`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 'Farid Islam to represent Bangladesh in Global Esports Games 2023', 'uploads/Sponsored_Blog_images/farid_islam.avif', 'Admin', 'Bangladeshi esports player Farid Islam has recently secured', '<p><span style=\"color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px;\">Bangladeshi esports player Farid Islam has recently secured a spot on the main stage of the Global Esports Games Riyadh 2023 for the Street Fighter 6 tournament. He will be the only player in this international tournament to represent Bangladesh, competing against 31 other players from all around the world.</span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">According to Farid, he first won a local qualifier tournament hosted by BYDESA (Bangladesh Youth Development &amp; Electronic Sports Association), which determined his spot as the representative for Bangladesh in the South Asia regional qualifier. There, Farid won against players from India, Sri Lanka, Nepal, and Maldives to qualify from the South Asia region and fly out to Riyadh for the main stage of the global competition.</p><div class=\"mb-20 mr-20 hide-for-print dfp-tag-wrapper text-center \" style=\"box-sizing: inherit; margin-top: 0px; margin-left: 0px; padding: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; margin-right: 20px !important; margin-bottom: 20px !important;\"><h4 style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: &quot;Noto Serif JP&quot;, serif; font-weight: 600; color: inherit; text-rendering: optimizelegibility; line-height: 1.5; font-size: 1.25rem;\"><a href=\"https://news.google.com/publications/CAAiECW73usLivqPCSeQRsSUvRQqFAgKIhAlu97rC4r6jwknkEbElL0U\" style=\"box-sizing: inherit; line-height: inherit; color: rgb(66, 133, 243); cursor: pointer; transition-property: color, opacity, background-color, border-color, box-shadow; transition-duration: 0.3s; font-weight: 400; border-bottom: 1px dotted rgb(66, 133, 243); font-size: 18px;\"><img src=\"https://tds-images.thedailystar.net/sites/all/themes/tds/images/google_news.svg\" alt=\"Google News Link\" pinger-seen=\"true\" style=\"box-sizing: inherit; border: 0px; display: inline-block; height: 30px; margin-right: 15px; margin-bottom: -3px;\">For all latest news, follow The Daily Star\'s Google News channel.</a></h4></div><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">The Global Esports Games, the flagship event of the Global Esports Federation (GEF), will take place in Riyadh, Saudi Arabia, this year from December 12 to 16. It will feature a varied&nbsp;lineup of video game tournaments, including Dota 2, eFootball 2023, PUBG Mobile, and Street Fighter 6. Hosted by the Saudi Esports Federation, the event will feature over 950 competitors from over 100 nations.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\">Farid started playing fighting games competitively in 2018, back when Street Fighter V Arcade Edition came out. \"I really started to level up my gameplay during COVID-19 and onwards,\" he said. When asked if he is competing solo or in a team, Farid added, \"I am currently not in any teams at the moment. Since fighting games are played 1v1, I will have to compete in the main stage of Global Esports Games 2023 as a solo competitor\".&nbsp;</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: 18px; text-rendering: optimizelegibility; line-height: inherit; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif;\"><br></p><p><br></p>', 1, '2023-11-25 11:16:52', '2023-11-25 11:16:52'),
(2, '5', 'Israel, Hamas truce and hostage release delayed', 'uploads/Sponsored_Blog_images/web.avif', 'Admin', NULL, '<p><br></p><div class=\"section-media sm-float-none position-relative small-full-extended mb-30 no-margin-lr\" style=\"box-sizing: inherit; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; margin-bottom: 30px !important;\"><div class=\"media-youtube-video media-youtube-1 responsive-embed widescreen margin-bottom-0\" style=\"box-sizing: inherit; margin-top: 0px; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; padding: 0px 0px 366.188px; position: relative; height: 0px; overflow: hidden;\"><iframe class=\"media-youtube-player\" width=\"640\" height=\"390\" title=\"শুক্রবারের আগে গাজায় যুদ্ধবিরতি-বন্দি বিনিময় শুরু হচ্ছে না\" src=\"https://www.youtube.com/embed/mUv1aCeL-6A?wmode=opaque&amp;controls=1\" name=\"শুক্রবারের আগে গাজায় যুদ্ধবিরতি-বন্দি বিনিময় শুরু হচ্ছে না\" frameborder=\"0\" allowfullscreen=\"\" style=\"box-sizing: inherit; position: absolute; top: 0px; left: 0px; width: 651px; height: 366.188px;\"></iframe></div></div><div class=\"pb-20 clearfix\" style=\"box-sizing: inherit; margin: 0px; padding-top: 0px; padding-right: 0px; padding-left: 0px; color: rgb(16, 24, 40); font-family: &quot;Noto Serif JP&quot;, serif; font-size: 18px; padding-bottom: 0.625rem !important;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; font-size: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Israel said a four-day Gaza truce and hostage release will not start until at least Friday, stalling a breakthrough deal to pause the brutal and bloody</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; text-rendering: optimizelegibility; line-height: inherit;\">Israeli national security adviser Tzachi Hanegbi indicated the release of at least 50 Israeli and foreign hostages held by Hamas was on track, but would not happen until Friday at the earliest.</p><div class=\"mb-20 mr-20 hide-for-print dfp-tag-wrapper text-center \" style=\"box-sizing: inherit; margin-top: 0px; margin-left: 0px; padding: 0px; margin-right: 20px !important; margin-bottom: 20px !important;\"><h4 style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: &quot;Noto Serif JP&quot;, serif; font-weight: 600; color: inherit; text-rendering: optimizelegibility; line-height: 1.5; font-size: 1.25rem;\"><a href=\"https://news.google.com/publications/CAAiECW73usLivqPCSeQRsSUvRQqFAgKIhAlu97rC4r6jwknkEbElL0U\" style=\"box-sizing: inherit; line-height: inherit; color: rgb(66, 133, 243); cursor: pointer; transition-property: color, opacity, background-color, border-color, box-shadow; transition-duration: 0.3s; font-weight: 400; border-bottom: 1px dotted rgb(66, 133, 243); font-size: 18px;\"><img src=\"https://tds-images.thedailystar.net/sites/all/themes/tds/images/google_news.svg\" alt=\"Google News Link\" pinger-seen=\"true\" style=\"box-sizing: inherit; border: 0px; display: inline-block; height: 30px; margin-right: 15px; margin-bottom: -3px;\">For all latest news, follow The Daily Star\'s Google News channel.</a></h4></div><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; text-rendering: optimizelegibility; line-height: inherit;\">\"The contacts on the release of our hostages are advancing and continuing constantly,\" he said in a statement.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.55556em; margin-left: 0px; padding: 0px; text-rendering: optimizelegibility; line-height: inherit;\">\"The start of the release will take place according to the original agreement between the sides, and not before Friday.\"</p></div>', 1, '2023-11-25 11:18:39', '2023-11-25 11:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$PqIRB4K6SEp0ThB3Z7mFhODBqiCdIqa.MFlP51/fJbz2nhxgwpFDu', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-25 10:49:04', '2023-11-25 10:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_auths`
--

CREATE TABLE `user_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `birth-date` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_auths`
--

INSERT INTO `user_auths` (`id`, `name`, `email`, `password`, `confirm_password`, `nid`, `image`, `birth-date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir Hasan Nahid', 'nahid@gmail.com', '$2y$12$5P3.HjKh1oMY3IQUWDE6XuXCZZTeL9mo55K7nD66vrxpI0a9C4mey', '$2y$12$MZzN5QslZJYjhUPFF38MouhzwwoUmE3hOVfjrAAHsvtO/imqGWZgu', NULL, NULL, NULL, 0, '2023-11-25 10:39:13', '2023-11-25 10:39:13'),
(2, 'Nupur Rahman', 'nupur@gmail.com', '$2y$12$8FbDkgcZVvHqU6.O/JS6Sucr/o81HzDrd1UBRr2.S64bspPT5B6R2', '$2y$12$JweVY6ZxEdMEmUrrvxLTGevRl8wwJ72g8/vBkSsEKBsyY1g4V.5ua', NULL, NULL, NULL, 0, '2023-11-25 11:27:42', '2023-11-25 11:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `googlePlus` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `biographicalInfo` longtext DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `username`, `firstname`, `lastname`, `nickname`, `designation`, `email`, `website`, `phoneNumber`, `address`, `twitter`, `facebook`, `googlePlus`, `linkedin`, `github`, `biographicalInfo`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir Hasan Nahid', 'Tanvir', 'Hasan', 'Nahid', 'Director, BASIS', 'nahid@gmail.com', 'nahid@gmail.com', '01310993183', 'San Francisco, CA', 'www.twitter.com', 'www.facebook.com', 'www.google.com', 'www.linkedin.com', 'www.github.com', '<p>This is Tanvir Hasan Nahid.</p>', NULL, 0, '2023-11-25 11:26:15', '2023-11-25 11:26:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sponsored_blogs`
--
ALTER TABLE `sponsored_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_auths`
--
ALTER TABLE `user_auths`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_auths_email_unique` (`email`),
  ADD UNIQUE KEY `user_auths_password_unique` (`password`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsored_blogs`
--
ALTER TABLE `sponsored_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_auths`
--
ALTER TABLE `user_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
