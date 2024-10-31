-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2024 年 10 月 11 日 11:20
-- 伺服器版本： 5.7.44-cll-lve
-- PHP 版本： 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bwaxebpn_koi`
--

-- --------------------------------------------------------

--
-- 資料表結構 `address_book_set`
--

CREATE TABLE `address_book_set` (
  `a_id` int(11) NOT NULL,
  `a_title` tinytext COLLATE utf8_unicode_ci,
  `a_subtitle` tinytext COLLATE utf8_unicode_ci,
  `a_content` text COLLATE utf8_unicode_ci,
  `a_class1` tinytext COLLATE utf8_unicode_ci,
  `a_class2` text COLLATE utf8_unicode_ci,
  `a_gender` tinyint(4) DEFAULT NULL,
  `a_email` tinytext COLLATE utf8_unicode_ci,
  `a_tel` tinytext COLLATE utf8_unicode_ci,
  `a_address` tinytext COLLATE utf8_unicode_ci,
  `a_display_name` tinytext COLLATE utf8_unicode_ci,
  `a_year` tinytext COLLATE utf8_unicode_ci,
  `a_month` tinytext COLLATE utf8_unicode_ci,
  `a_day` tinytext COLLATE utf8_unicode_ci,
  `a_status` tinyint(1) DEFAULT '0',
  `a_epaper` tinyint(1) DEFAULT '0',
  `a_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_level` int(11) DEFAULT NULL,
  `user_limit` tinyint(4) DEFAULT '2',
  `user_active` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_password`, `user_level`, `user_limit`, `user_active`) VALUES
(1, 'koi_user', 'QB3B3CNmmPcXfdw6', 1, 1, 1),
(3, 'goodsdesign', '164729', 1, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `a_set`
--

CREATE TABLE `a_set` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a_1` tinyint(4) DEFAULT NULL,
  `a_2` tinyint(4) DEFAULT NULL,
  `a_3` tinyint(4) DEFAULT NULL,
  `a_4` tinyint(4) DEFAULT NULL,
  `a_5` tinyint(4) DEFAULT NULL,
  `a_6` tinyint(4) DEFAULT NULL,
  `a_7` tinyint(4) DEFAULT NULL,
  `a_8` tinyint(4) DEFAULT NULL,
  `a_9` tinyint(4) DEFAULT NULL,
  `a_10` tinyint(4) DEFAULT NULL,
  `a_11` tinyint(4) DEFAULT NULL,
  `a_12` tinyint(4) DEFAULT NULL,
  `a_13` tinyint(4) DEFAULT NULL,
  `a_14` tinyint(4) DEFAULT NULL,
  `a_15` tinyint(4) DEFAULT NULL,
  `a_16` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `a_set`
--

INSERT INTO `a_set` (`a_id`, `a_title`, `a_1`, `a_2`, `a_3`, `a_4`, `a_5`, `a_6`, `a_7`, `a_8`, `a_9`, `a_10`, `a_11`, `a_12`, `a_13`, `a_14`, `a_15`, `a_16`) VALUES
(1, '系統管理員', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, '資料更新員', 0, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '人才招募管理員', 0, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '最新消息管理員', 0, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '飲品介紹管理員', 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '全球據點管理員', 0, 0, 0, 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '菜單下載管理員', 0, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '聯絡我們管理員', 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '海外合作管理員', 0, 0, 0, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `class_set`
--

CREATE TABLE `class_set` (
  `c_id` int(11) NOT NULL,
  `c_title` tinytext COLLATE utf8_unicode_ci,
  `c_title_en` tinytext COLLATE utf8_unicode_ci,
  `c_slug` text COLLATE utf8_unicode_ci,
  `c_class` tinytext COLLATE utf8_unicode_ci,
  `c_link` tinytext COLLATE utf8_unicode_ci,
  `c_level` tinyint(4) DEFAULT NULL,
  `c_active` tinyint(1) NOT NULL DEFAULT '1',
  `c_active_en` tinyint(1) NOT NULL DEFAULT '1',
  `c_parent` tinytext COLLATE utf8_unicode_ci,
  `c_data1` text COLLATE utf8_unicode_ci,
  `c_data2` text COLLATE utf8_unicode_ci,
  `c_data3` text COLLATE utf8_unicode_ci,
  `c_data4` text COLLATE utf8_unicode_ci,
  `c_data5` text COLLATE utf8_unicode_ci,
  `c_sort` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `class_set`
--

INSERT INTO `class_set` (`c_id`, `c_title`, `c_title_en`, `c_slug`, `c_class`, `c_link`, `c_level`, `c_active`, `c_active_en`, `c_parent`, `c_data1`, `c_data2`, `c_data3`, `c_data4`, `c_data5`, `c_sort`) VALUES
(1, 'NEWS', NULL, 'news', NULL, NULL, NULL, 1, 1, 'newsC', NULL, NULL, NULL, NULL, NULL, 1),
(2, 'MEDIA', NULL, 'media', NULL, NULL, NULL, 1, 1, 'newsC', NULL, NULL, NULL, NULL, NULL, 2),
(3, '地区限定', 'AREA EXCLUSIVE', '地区限定', NULL, NULL, NULL, 1, 1, 'ourteaC', 'no', 'no', NULL, NULL, NULL, 1),
(4, '原味茶', 'FLAVORED TEA', '原茶系列', NULL, NULL, NULL, 1, 1, 'ourteaC', 'yes', 'yes', NULL, NULL, NULL, 3),
(5, '奶茶', 'MILK TEA', '奶茶系列', NULL, NULL, NULL, 1, 1, 'ourteaC', 'yes', 'yes', NULL, NULL, NULL, 5),
(6, '果汁', 'JUICE', '果汁系列', NULL, NULL, NULL, 1, 1, 'ourteaC', 'yes', 'yes', NULL, NULL, NULL, 7),
(7, '中國', 'CHINA', '中國', NULL, NULL, NULL, 1, 1, 'menuC', NULL, NULL, NULL, NULL, NULL, 1),
(8, '新加坡', 'SINGAPORE', '新加坡', NULL, NULL, NULL, 1, 1, 'menuC', NULL, NULL, NULL, NULL, NULL, 2),
(9, '美國', 'USA', '美國', NULL, NULL, NULL, 1, 1, 'menuC', NULL, NULL, NULL, NULL, NULL, 3),
(45, '口感茶', 'CHEWY TEA', NULL, NULL, NULL, NULL, 1, 1, 'ourteaC', 'yes', 'yes', NULL, NULL, NULL, 2),
(21, 'NORTH', NULL, 'north', NULL, '19', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 1),
(19, '菲律宾', 'PHILIPPINES', '菲律賓', NULL, NULL, 1, 1, 1, 'storeC', 'cwyadt107102@gmail.com', 'https://www.facebook.com/KoithePhilippines', 'https://www.instagram.com/koithephilippines', 'weibo', 'https://weibo.com/n/KOI%E5%8F%AF%E5%AE%9C?from=feed&loc=at', 10),
(23, '西北', NULL, '西北', NULL, '15', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 2),
(22, '東北', NULL, '東北', NULL, '15', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 1),
(24, 'SOUTH', NULL, 'south', NULL, '17', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 1),
(25, 'EAST', NULL, 'east', NULL, '19', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 2),
(27, 'EAST', NULL, 'east', NULL, '26', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 1),
(29, 'KOI THE', 'KOI THE', 'koi-the', NULL, NULL, NULL, 1, 1, 'storeBrand', NULL, NULL, NULL, NULL, NULL, 1),
(44, '玛奇朵', 'SIGNATURE MACCHIATO', NULL, NULL, NULL, NULL, 1, 1, 'ourteaC', 'yes', 'yes', NULL, NULL, NULL, 4),
(43, '茶拿铁', 'TEA LATTE', NULL, NULL, NULL, NULL, 1, 1, 'ourteaC', 'yes', 'yes', NULL, NULL, NULL, 6),
(37, 'EVENT', NULL, 'event', NULL, NULL, NULL, 1, 1, 'newsC', NULL, NULL, NULL, NULL, NULL, 3),
(46, '日本', 'JAPAN', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'cwyadt107102@gmail.com', '', '', '', '', 4),
(47, 'Hiroshima', 'Hiroshima', 'hiroshima', NULL, '46', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 1),
(41, '東北', 'Northeast', '東北', NULL, '40', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 1),
(42, '西南', 'Southwest', '西南', NULL, '40', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 2),
(48, 'Okinawa', 'Okinawa', 'okinawa', NULL, '46', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 2),
(49, 'Tokyo', 'Tokyo', 'tokyo', NULL, '46', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 3),
(50, 'Osaka', 'Osaka', 'osaka', NULL, '46', 2, 1, 1, 'storeC', NULL, NULL, NULL, NULL, NULL, 4),
(51, '新加坡', 'SINGAPORE', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'singapore@koicafe.com', 'https://www.facebook.com/koithesingapore', 'https://www.instagram.com/koithesingapore/', 'KOI Card', 'https://www.koithe.sg/', 0),
(52, 'Test_taiwan', 'taiwan', NULL, NULL, NULL, 1, 0, 1, 'storeC', 'patty@koicafe.com', '', '', '', '', 14),
(53, '中国', 'CHINA', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'china@koicafe.com', '', '', 'weibo', 'https://www.weibo.com/koicafe', 1),
(54, '印尼', 'INDONESIA', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'indonesia@koicafe.com', 'https://www.facebook.com/koicafeindo/', 'https://www.instagram.com/koitheindonesia/?hl=en', '', '', 2),
(55, '柬埔寨', 'CAMBODIA', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'cambodia@koicafe.com', 'https://www.facebook.com/koithecambodia/?ref=ts&fref=ts', 'https://www.instagram.com/koithecambodia/', '', '', 3),
(56, '越南', 'VIETNAM', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'vietnam@koicafe.com', 'https://www.facebook.com/KOI-Th%C3%A9-Vietnam-1113353828678015/?fref=ts', 'https://www.instagram.com/koithevietnam/', '', '', 5),
(57, '泰国', 'THAILAND', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'thailandhr@koicafe.com', 'https://www.facebook.com/koithethailand/?fref=ts', 'https://www.instagram.com/koithethailand/', '', '', 6),
(58, '马来西亚', 'MALAYSIA', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'malaysia@koicafe.com', 'https://www.facebook.com/koithemy', 'https://www.instagram.com/koithemalaysia/', '', '', 7),
(59, '美国', 'USA', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'info@fiftylan.co', 'https://www.facebook.com/fiftylanusa', 'https://www.instagram.com/fiftylanusa/', '', '', 8),
(60, '迪拜', 'DUBAI', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'taiwan@koicafe.com', 'https://www.facebook.com/koitheuae', 'https://www.instagram.com/koitheuae/', '', '', 9),
(61, '孟加拉', 'BANGLADESH', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'taiwan@koicafe.com', 'https://www.facebook.com/koithebangladesh', 'https://www.instagram.com/koithebangladesh/', '', '', 11),
(62, '老挝', 'LAOS', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'laos@koicafe.com', 'https://www.facebook.com/koithelaos', 'https://www.instagram.com/koithelaos/', '', '', 12),
(63, '加拿大', 'CANADA', NULL, NULL, NULL, 1, 1, 1, 'storeC', 'info@fiftylan.co', 'https://www.facebook.com/profile.php?id=61561712066553', 'https://www.instagram.com/fiftylancanada/', '', '', 13);

-- --------------------------------------------------------

--
-- 資料表結構 `data_set`
--

CREATE TABLE `data_set` (
  `d_id` int(11) NOT NULL,
  `d_sn` tinytext COLLATE utf8_unicode_ci,
  `d_title` text COLLATE utf8_unicode_ci,
  `d_title_en` text COLLATE utf8_unicode_ci,
  `d_content` text COLLATE utf8_unicode_ci,
  `d_content_en` text COLLATE utf8_unicode_ci,
  `d_slug` text COLLATE utf8_unicode_ci NOT NULL,
  `d_class1` tinytext COLLATE utf8_unicode_ci,
  `d_class2` text COLLATE utf8_unicode_ci,
  `d_parent` tinytext COLLATE utf8_unicode_ci COMMENT '產品第二層',
  `d_class3` text COLLATE utf8_unicode_ci,
  `d_class4` text COLLATE utf8_unicode_ci,
  `d_class5` text COLLATE utf8_unicode_ci,
  `d_class6` text COLLATE utf8_unicode_ci,
  `d_tag` text COLLATE utf8_unicode_ci,
  `d_data1` text COLLATE utf8_unicode_ci,
  `d_data2` text COLLATE utf8_unicode_ci,
  `d_data3` text COLLATE utf8_unicode_ci,
  `d_data4` text COLLATE utf8_unicode_ci,
  `d_data5` text COLLATE utf8_unicode_ci,
  `d_data6` text COLLATE utf8_unicode_ci,
  `d_data7` text COLLATE utf8_unicode_ci,
  `d_data8` text COLLATE utf8_unicode_ci,
  `d_data9` text COLLATE utf8_unicode_ci,
  `d_data10` text COLLATE utf8_unicode_ci,
  `d_data11` text COLLATE utf8_unicode_ci,
  `d_data12` text COLLATE utf8_unicode_ci,
  `d_data13` text COLLATE utf8_unicode_ci,
  `d_data14` text COLLATE utf8_unicode_ci,
  `d_data15` text COLLATE utf8_unicode_ci,
  `d_data16` text COLLATE utf8_unicode_ci,
  `d_data17` text COLLATE utf8_unicode_ci,
  `d_data18` text COLLATE utf8_unicode_ci,
  `d_data19` text COLLATE utf8_unicode_ci,
  `d_data20` text COLLATE utf8_unicode_ci,
  `d_data21` text COLLATE utf8_unicode_ci,
  `d_data22` text COLLATE utf8_unicode_ci,
  `d_data23` text COLLATE utf8_unicode_ci,
  `d_description` text COLLATE utf8_unicode_ci NOT NULL,
  `d_head` text COLLATE utf8_unicode_ci NOT NULL,
  `d_body` text COLLATE utf8_unicode_ci NOT NULL,
  `d_schema` text COLLATE utf8_unicode_ci NOT NULL,
  `d_authorize` tinyint(1) DEFAULT '1',
  `d_youtube_code` tinytext COLLATE utf8_unicode_ci,
  `d_imgType` tinyint(4) DEFAULT '1',
  `d_decade` date DEFAULT NULL COMMENT '年代',
  `d_date` datetime DEFAULT NULL,
  `d_edit_date` datetime DEFAULT NULL,
  `d_active` tinyint(1) DEFAULT '1',
  `d_active_en` tinyint(1) DEFAULT '1',
  `d_sort` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `data_set`
--

INSERT INTO `data_set` (`d_id`, `d_sn`, `d_title`, `d_title_en`, `d_content`, `d_content_en`, `d_slug`, `d_class1`, `d_class2`, `d_parent`, `d_class3`, `d_class4`, `d_class5`, `d_class6`, `d_tag`, `d_data1`, `d_data2`, `d_data3`, `d_data4`, `d_data5`, `d_data6`, `d_data7`, `d_data8`, `d_data9`, `d_data10`, `d_data11`, `d_data12`, `d_data13`, `d_data14`, `d_data15`, `d_data16`, `d_data17`, `d_data18`, `d_data19`, `d_data20`, `d_data21`, `d_data22`, `d_data23`, `d_description`, `d_head`, `d_body`, `d_schema`, `d_authorize`, `d_youtube_code`, `d_imgType`, `d_decade`, `d_date`, `d_edit_date`, `d_active`, `d_active_en`, `d_sort`) VALUES
(1, NULL, '人才招募', NULL, NULL, NULL, '', 'recruit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3,000', '4,120', '5,680', '6,720', '1,872', '2,500', '3,500', '4,500', '3,000', '4,120', '5,680', '6,720', '1,872', '2,500', '3,500', '4,500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 13:10:48', NULL, 1, 1, 1),
(8, NULL, 'KOI測試測試', 'KOIKOIKOI', '<p>KOI測試測試KOI測試測試</p>\r\n', '<p>KOI測試測試</p>\r\n', 'koi測試測試', 'news', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', NULL, 'https://www.youtube.com/embed/zaSfaOOLthM', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 13:50:25', NULL, 1, 1, 0),
(6, NULL, '登打士店重装开业，得闲黎饮茶呀！', 'TEST', '<p>KOI測試測試<br />\r\n<img alt=\"\" src=\"https://goodsdemo.com/koi/source/n-pic-4%20(1).jpg\" /></p>\r\n', '', '登打士店重装开业得闲黎饮茶呀', 'news', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'no', NULL, '', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-23 14:11:00', NULL, 1, 1, 1),
(4, NULL, '登打士店重装开业，得闲黎饮茶呀！', NULL, '', NULL, '登打士店重装开业得闲黎饮茶呀', 'news', 'news', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', '', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 13:27:50', NULL, 1, 1, 1),
(7, NULL, ' 一起喝草莓，快乐“莓”烦恼 酸甜丰富口感，抚慰内心小烦躁! 草莓珍珠奶绿/草莓玛奇朵/草莓果绿', 'strawberry', '<p>KOI測試測試</p>\r\n', '<p>KOI測試測試KOI測試測試</p>\r\n', '一起喝草莓快乐莓烦恼-酸甜丰富口感抚慰内心小烦躁-草莓珍珠奶绿草莓玛奇朵草莓果绿', 'news', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'yes', NULL, '', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-23 14:09:35', NULL, 1, 1, 0),
(9, NULL, '柿柿如意果绿', 'Persimmon Green Tea', NULL, NULL, '', 'maintea', 'CHINA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-30 17:57:05', NULL, 1, 1, 1),
(10, NULL, '香栗波霸奶茶', 'Jumbo Chestnut Milk Tea', NULL, NULL, '', 'maintea', 'CHINA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 22:32:15', NULL, 1, 1, 2),
(11, NULL, '中國的KOI', NULL, NULL, NULL, '', 'menu', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 13:58:41', NULL, 1, 1, 2),
(12, NULL, '新加坡KOI', NULL, NULL, NULL, '', 'menu', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 14:08:03', NULL, 1, 1, 1),
(55, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '客 诉', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-16 12:38:19', NULL, 1, 1, 12),
(14, NULL, '烏龍茶', 'OOLONG', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '烏龍茶簡述', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 14:08:58', NULL, 1, 1, 8),
(15, NULL, '葡萄柚汁', 'Grapefruit Juice', NULL, NULL, '', 'ourtea', '6', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 14:09:38', NULL, 1, 1, 3),
(16, NULL, '奶茶', 'MILK TEA', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '奶茶奶茶奶茶奶茶奶茶', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 14:10:04', NULL, 1, 1, 8),
(17, NULL, 'KOI EXPRESS', NULL, NULL, NULL, '', 'menu', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 20:06:26', NULL, 1, 1, 1),
(106, NULL, '乌龙恋奶茶', 'Oolong Sweetened Milk Tea ', NULL, NULL, '', 'ourtea', '3', NULL, NULL, NULL, NULL, NULL, NULL, '乌龙茶奶茶与炼乳的梦幻搭配，轻轻啜饮即可感受到茶与奶的和谐交融', 'VIETNAM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-12 18:55:36', NULL, 1, 1, 6),
(107, NULL, '荔枝紅茶', 'Lychee Black Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, 'Lychee Black Tea', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-12 18:56:31', NULL, 1, 1, 7),
(26, NULL, 'IMM', '', NULL, NULL, '', 'store', '22', NULL, '15', '49', NULL, NULL, NULL, '(+65) 6974-0095', '11:00-21:00', '2 Jurong East Street 21 #01-58, IMM Building, Singapore 609601', 'https://maps.app.goo.gl/twKoUzNUNZ3w4webA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-01 23:12:08', NULL, 1, 1, 1),
(27, NULL, 'Greenbelt 5', 'Greenbelt 5', NULL, NULL, '', 'store', '21', NULL, '19', '49', NULL, NULL, NULL, '(+63) 9271-369789', '11:00-21:00 (SUN-THU) / 11:00-22:00 (FRI-SAT)', 'GB5P1-2-043B, 2F, Greenbelt5,Legazpi St.,Makati City, Metro Manila, Philippines', 'https://maps.app.goo.gl/3Bpj72oeCs5jCpTq9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 11:34:52', NULL, 1, 1, 1),
(28, NULL, '西北店', NULL, NULL, NULL, '', 'store', '23', NULL, '15', '50', NULL, NULL, NULL, '0921419506', '12:00~22:00', '123423412', 'https://maps.app.goo.gl/vvaB2rmP1Nvs7iT56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 12:10:55', NULL, 1, 1, 1),
(29, NULL, 'Bonifacio High Street', 'Bonifacio High Street', NULL, NULL, '', 'store', '25', NULL, '19', '49', NULL, NULL, NULL, '(+63) 9271-371503', '11:00-22:00 (SUN-THU) / 11:00-23:00 (FRI-SAT)', 'B2, GF Unit 767, Bonifacio High Street, Taguig City, Metro Manila, Philippines', 'https://maps.app.goo.gl/rzgpxEu2gTgq5Ds67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 13:43:28', NULL, 1, 1, 2),
(30, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 07:49:14', NULL, 1, 1, 13),
(31, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '台灣', 'USD 300,000', '很好設計', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 07:49:55', NULL, 1, 1, 1),
(32, NULL, '600', '601', NULL, NULL, '', 'storeNum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-16 14:50:56', NULL, 1, 1, 1),
(34, NULL, '預設圖片', '', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 15:46:03', NULL, 1, 1, 0),
(35, NULL, '預設圖片', '', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 15:46:18', NULL, 1, 1, 0),
(36, NULL, '預設圖片', '', NULL, NULL, '', 'ourtea', '6', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 15:46:34', NULL, 1, 1, 0),
(37, NULL, '最新飲品', 'NEW DRINKS', NULL, NULL, '', 'mainteaTitle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-03 10:20:58', NULL, 1, 1, 1),
(38, NULL, 'SOUTH', NULL, NULL, NULL, '', 'store', '24', NULL, '17', '49', NULL, NULL, NULL, '123456', '5656456', '台中市南屯區文心路一段498號3樓', 'https://maps.app.goo.gl/vvaB2rmP1Nvs7iT56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-02 20:52:54', NULL, 1, 1, 1),
(40, NULL, '123', NULL, NULL, NULL, '', 'menu', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-03 10:31:00', NULL, 1, 1, 2),
(41, NULL, '泰國店', NULL, NULL, NULL, '', 'store', '27', NULL, '26', '49', NULL, NULL, NULL, '123', '321', '312', 'https://maps.app.goo.gl/vvaB2rmP1Nvs7iT56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-03 10:35:12', NULL, 1, 1, 2),
(189, NULL, '漿果乳酪奶綠', 'Berry Cheesy Green Milk Tea', NULL, NULL, '', 'ourtea', '3', NULL, NULL, NULL, NULL, NULL, NULL, '清新绿茶与浓厚乳酪的完美结合，再搭酸甜的浆果调味，看似甜腻却清爽无比', 'China', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:26:47', NULL, 1, 1, 1),
(43, NULL, '123', NULL, NULL, NULL, '', 'menu', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-03 11:37:25', NULL, 1, 1, 1),
(46, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-09 11:53:47', NULL, 1, 1, 16),
(49, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'storeBrand', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-11 14:39:18', NULL, 1, 1, 2),
(50, NULL, 'KOI THE Express', 'KOI THE Express', NULL, NULL, '', 'storeBrand', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:23:41', NULL, 1, 1, 3),
(92, NULL, '中國', 'CHINA', NULL, NULL, '', 'menu', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-23 13:22:47', NULL, 1, 1, 1),
(56, NULL, 'test2', '', NULL, NULL, '', 'menu', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 17:22:19', NULL, 1, 1, 1),
(57, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 17:53:47', NULL, 1, 1, 1),
(58, NULL, '很好設計測試2', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:41:29', NULL, 1, 1, 11),
(59, NULL, '很好設計測試222', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:44:53', NULL, 1, 1, 10),
(60, NULL, '很好設計測試111', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:46:49', NULL, 1, 1, 9),
(61, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:48:29', NULL, 1, 1, 15),
(62, NULL, '很好設計測試666', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:49:38', NULL, 1, 1, 14),
(63, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:51:27', NULL, 1, 1, 13),
(64, NULL, '很好設計測試777', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '客 诉', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:52:45', NULL, 1, 1, 8),
(65, NULL, '很好設計測試888', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:55:49', NULL, 1, 1, 7),
(66, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '客 诉', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:57:06', NULL, 1, 1, 12),
(67, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:58:59', NULL, 1, 1, 11),
(68, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 11:59:58', NULL, 1, 1, 6),
(69, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:00:30', NULL, 1, 1, 10),
(70, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:01:56', NULL, 1, 1, 9),
(71, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:02:22', NULL, 1, 1, 5),
(72, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:03:53', NULL, 1, 1, 4),
(73, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '业务合作', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:05:40', NULL, 1, 1, 3),
(74, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:06:06', NULL, 1, 1, 2),
(75, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:06:52', NULL, 1, 1, 8),
(76, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:07:23', NULL, 1, 1, 7),
(77, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:08:34', NULL, 1, 1, 6),
(78, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:10:26', NULL, 1, 1, 5),
(79, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:11:33', NULL, 1, 1, 4),
(80, NULL, '很好設計測試9000', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:20:53', NULL, 1, 1, 3),
(81, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '业务合作', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:21:43', NULL, 1, 1, 2),
(82, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '菲律賓', '0921419506', 'c3207054@gmail.com', '售后服务', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 12:22:53', NULL, 1, 1, 1),
(83, NULL, '很好設計測試123', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '中國', '0921419506', 'c3207054@gmail.com', '业务合作', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 13:52:27', NULL, 1, 1, 1),
(84, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '台灣', 'USD 400,000', '很好設計', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-20 14:12:38', NULL, 1, 1, 1),
(101, NULL, 'One Ayala, Makati', 'One Ayala, Makati', NULL, NULL, '', 'store', '25', NULL, '19', '49', NULL, NULL, NULL, '(+63) 9271-375706', '10:00-21:00 (MON-THU) / 10:00-22:00 (FRI-SUN)', '2F, Unit G203-G208 (C), One Ayala Makati,Edsa Cor. Ayala Ave,Makati City, Metro Manila, Philippines', 'https://maps.app.goo.gl/HpE48gs7x8YETFQB9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-28 12:01:32', NULL, 1, 1, 1),
(182, NULL, '黄金珍奶', 'Golden Bubble Milk Tea', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:22:19', NULL, 1, 1, 7),
(183, NULL, '乌龙奶茶', 'Oolong Milk Tea', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:24:19', NULL, 1, 1, 6),
(184, NULL, '榛果奶茶', 'Hazelnut Milk Tea', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人着迷的巧克力酱和巧克力小麦脆脆，满足对甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:24:29', NULL, 1, 1, 5),
(185, NULL, '焦糖奶茶', 'Caramel Milk Tea', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人着迷的巧克力酱和巧克力小麦脆脆，满足对甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:24:39', NULL, 1, 1, 4),
(186, NULL, '巧克力奶茶', 'Chocolate Milk', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:24:49', NULL, 1, 1, 3),
(96, NULL, 'gif', '', NULL, NULL, '', 'menu', '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-23 14:58:28', NULL, 1, 1, 1),
(95, NULL, '555444', '788779', NULL, NULL, '', 'store', '27', NULL, '26', '94', NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-23 13:34:34', NULL, 1, 1, 1),
(97, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '业务合作', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-27 07:34:28', NULL, 1, 1, 1),
(98, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '泰國', '0921419506', 'c3207054@gmail.com', '客 诉', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-27 07:34:57', NULL, 1, 1, 1),
(99, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '泰國', 'USD 300,000', '很好設計', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-27 07:54:54', NULL, 1, 1, 1),
(100, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '中國', 'USD 400,000', '很好很好設計', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-05-27 08:02:40', NULL, 1, 1, 1),
(187, NULL, '柠檬梅子汁', 'Lemon Plum Juice', NULL, NULL, '', 'ourtea', '6', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:25:27', NULL, 1, 1, 2),
(188, NULL, '八冰茶', 'No.8 Juice', NULL, NULL, '', 'ourtea', '6', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:25:36', NULL, 1, 1, 1),
(173, NULL, '利宾纳红茶', 'Ribena Black Tea', NULL, NULL, '', 'ourtea', '3', NULL, NULL, NULL, NULL, NULL, NULL, '酸甜的黑加仑滋味与醇厚的红茶相辅相成，宛如一场水果盛宴', 'SINGAPORE ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 21:25:31', NULL, 1, 1, 5),
(174, NULL, '', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '菲律賓', 'USD 300,000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 15:13:42', NULL, 1, 1, 1),
(175, NULL, '脆脆泰奶茶', 'Crunchy Thai Tea', NULL, NULL, '', 'ourtea', '3', NULL, NULL, NULL, NULL, NULL, NULL, 'KOI特调泰式风味奶茶，配上口感丰富的脆脆配料，是无法抗拒的味蕾享受', 'THAILAND', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:19:04', NULL, 1, 1, 4),
(176, NULL, '宇治抹茶拿铁', 'Uji Matcha Latte', NULL, NULL, '', 'ourtea', '3', NULL, NULL, NULL, NULL, NULL, NULL, '严选宇治抹茶粉搭配香浓鲜奶，体验日式茶道优雅的同时，绿白交错的渐层更是视觉的飨宴', 'JAPAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:19:21', NULL, 1, 1, 3),
(177, NULL, '马六甲椰糖奶茶', 'Gula Melaka Milk Tea', NULL, NULL, '', 'ourtea', '3', NULL, NULL, NULL, NULL, NULL, NULL, '源自马六甲的经典风味，经典奶茶与香甜椰糖的完美平衡，带来独具风情的甜蜜享受', 'MALAYSIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:20:15', NULL, 1, 1, 2),
(178, NULL, '茉莉绿茶', 'Green Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:21:12', NULL, 1, 1, 6),
(179, NULL, '阿萨姆红茶', 'Black Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:21:25', NULL, 1, 1, 5),
(180, NULL, '黄金乌龙茶', 'Golden Oolong Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:21:45', NULL, 1, 1, 4),
(181, NULL, '金桔柠檬绿茶', 'Lemon Lime Green Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:21:59', NULL, 1, 1, 3),
(190, NULL, '百香果鲜果绿茶', 'Passion Fruit Green Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:27:18', NULL, 1, 1, 2),
(191, NULL, '荔枝红茶', 'Lychee Black Tea', NULL, NULL, '', 'ourtea', '4', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:27:39', NULL, 1, 1, 1),
(192, NULL, '蜂蜜奶茶', 'Honey Milk Tea', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:27:52', NULL, 1, 1, 2),
(193, NULL, '鲜奶绿茶', 'Green Milk Tea', NULL, NULL, '', 'ourtea', '5', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人着迷的巧克力酱和巧克力小麦脆脆，满足对甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-06-24 22:28:03', NULL, 1, 1, 1),
(196, NULL, '預設圖片', '', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-12 21:09:23', NULL, 1, 1, 0),
(197, NULL, '預設圖片', '', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-12 21:10:09', NULL, 1, 1, 0),
(198, NULL, '預設圖片', '', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-12 21:10:37', NULL, 1, 1, 0),
(199, NULL, '', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lgdfg', '菲律賓', 'USD 300,000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-17 12:17:20', NULL, 1, 1, 1),
(201, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '菲律賓', 'USD 300,000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 10:48:44', NULL, 1, 1, 1),
(202, NULL, '荞麦茶拿铁', 'Buckwheat Tea Latte', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 17:59:36', NULL, 1, 1, 8),
(203, NULL, '芋泥米香奶茶', 'Taro Ricey Milk  Tea', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:04:26', NULL, 1, 1, 7),
(204, NULL, '草莓茉莉绿茶', 'Strawberry Green Tea', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:05:15', NULL, 1, 1, 6),
(205, NULL, '黑熔岩奶茶', 'Dark Lava Milk  Tea ', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人着迷的巧克力酱和巧克力小麦脆脆，满足对甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:12:23', NULL, 1, 1, 5),
(206, NULL, '草莓乳酪奶绿', 'Strawberry Cheesy Green Tea', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '一起喝草莓 ! 快乐“莓”烦恼，酸甜丰富口感，抚慰内心小烦躁 !', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:12:49', NULL, 1, 1, 4),
(207, NULL, '芋泥米香拿铁', 'Taro Ricey Tea Latte', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:13:00', NULL, 1, 1, 3),
(208, NULL, '水蜜桃乳酪奶绿', 'Peach Cheesy Green Tea', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:13:11', NULL, 1, 1, 2),
(209, NULL, '芋泥米香拿铁', 'Taro Ricey Tea Latte', NULL, NULL, '', 'ourtea', '43', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人著迷的巧克力醬和巧克力小麥脆脆，滿足對甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:13:24', NULL, 1, 1, 1),
(211, NULL, '奶茶', 'Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:13:53', NULL, 1, 1, 6),
(212, NULL, '奶茶', 'Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:13:53', NULL, 1, 1, 8),
(213, NULL, '奶茶', 'Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:13:53', NULL, 1, 1, 4),
(214, NULL, '巧克力奶茶', 'Chocolate Milk', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:14:24', NULL, 1, 1, 5),
(215, NULL, '蜂蜜奶茶', 'Honey Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:14:40', NULL, 1, 1, 7),
(216, NULL, '鲜奶绿茶', 'Green Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人着迷的巧克力酱和巧克力小麦脆脆，满足对甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:14:52', NULL, 1, 1, 3),
(217, NULL, '黄金珍奶', 'Golden Bubble Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '茉莉绿茶的浓郁茶叶香气与草莓的颗粒感受酸甜口感，喝一口心旷神怡!', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:15:09', NULL, 1, 1, 2),
(218, NULL, '榛果奶茶', 'Hazelnut Milk Tea', NULL, NULL, '', 'ourtea', '44', NULL, NULL, NULL, NULL, NULL, NULL, '添加令人着迷的巧克力酱和巧克力小麦脆脆，满足对甜食的渴望~', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:15:29', NULL, 1, 1, 1),
(219, NULL, '荔枝红茶', 'Lychee Black Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '选用颗粒饱满苦荞冲泡的汤色纯洁明亮，融合纯牛奶，口感舒适香醇双口', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:15:42', NULL, 1, 1, 8),
(220, NULL, '百香果鲜果绿茶', 'Passion Fruit Green Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:15:59', NULL, 1, 1, 7),
(221, NULL, '阿萨姆红茶', 'Black Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '嚼得到的芋头颗粒配上软滑细腻米香奶冻，明天约上Homie一起Citywalk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:16:20', NULL, 1, 1, 6),
(222, NULL, '芦荟百香绿茶', 'Aloe Vera Passion Fruit Green Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '多汁芦荟与酸甜百香绿茶的组合，展现出丰富层次的美妙滋味', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:16:31', NULL, 1, 1, 5),
(223, NULL, '芋圆红茶拿铁', 'Taro Q Black Tea Latte', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '香味十足的芋圆与醇厚的鲜奶红茶，口感丰富而扎实', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:16:48', NULL, 1, 1, 4),
(224, NULL, '仙草冻奶绿', 'Grass Jelly Green Milk Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '香滑仙草冻搭配温润奶绿，有着享用甜点般的惊喜', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:17:01', NULL, 1, 1, 3),
(225, NULL, '冰淇淋紅茶', 'Ice Cream Black Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '香草冰淇淋与醇厚红茶的完美碰撞，冰淇淋的柔滑带出红茶的极致风味，是炎热天气里最甜美的享受', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:17:18', NULL, 1, 1, 2),
(226, NULL, '黄金珍奶', 'Golden Bubble Milk Tea', NULL, NULL, '', 'ourtea', '45', NULL, NULL, NULL, NULL, NULL, NULL, '特选阿萨姆红茶为基底，融合浓郁奶香，加入圆润饱满滑溜Q弹的黄金珍珠，是KOI的指标性饮品', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-07-18 18:17:30', NULL, 1, 1, 1),
(227, NULL, '', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '菲律賓', 'USD 300,000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-08-05 04:26:16', NULL, 1, 1, 1),
(228, NULL, '広島府中店', 'Aeon Mall Hiroshima Fuchu', NULL, NULL, '', 'store', '47', NULL, '46', '49', NULL, NULL, NULL, '(+81) 82-207-2744', '10:00-21:00', '〒735-8588 Hiroshima, Aki District, Fuchu, Osu, 2 Chome−1−1 AEON MALL Hiroshima Fuchu 1F', 'https://maps.app.goo.gl/mrfPp3q9G1z4m5f48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-12 20:50:16', NULL, 1, 1, 1),
(229, NULL, '沖縄ライカム店', 'Aeon Mall Okinawa Rycom', NULL, NULL, '', 'store', '48', NULL, '46', '49', NULL, NULL, NULL, '(+81) 98-988-7653', '10:00-22:00', '〒901-2306 Okinawa, Nakagami District, Kitanakagusuku, Raikamu 1 Banchi AEON MALL Okinawa Rycom 1F', 'https://maps.app.goo.gl/NjFP1NsFUguZZZBN6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-13 11:09:26', NULL, 1, 1, 1),
(230, NULL, '国际通店', '国际通店', NULL, NULL, '', 'store', '48', NULL, '46', '49', NULL, NULL, NULL, '(+81) 98-868-0881', '10:00-23:00', '〒900-0013 Okinawa, Naha, Makishi, 3 Chome−1−1', 'https://maps.app.goo.gl/bN8d6muNb39ohhCK6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-13 11:16:04', NULL, 1, 1, 2),
(231, NULL, 'サンシャインシティアルパ店', 'Sunshine City Alpa', NULL, NULL, '', 'store', '49', NULL, '46', '49', NULL, NULL, NULL, '(+81) 3-6709-0822', '10:00-21:00', '〒170-6090 Tokyo, Toshima City, Higashiikebukuro, 1 Chome−28−10  Sunshine City Alpa, B1', 'https://maps.app.goo.gl/j6JLUimbtqi1VXP48 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-13 11:16:40', NULL, 1, 1, 1),
(232, NULL, '原宿店', '原宿店', NULL, NULL, '', 'store', '49', NULL, '46', '49', NULL, NULL, NULL, '(+81) 3-6804-5336', '10:00-21:00', '〒150-0001 Tokyo, Shibuya City, Jingumae, 1 Chome−6−5 Marilyn House 1st', 'https://maps.app.goo.gl/K7ZwH9Yyt5azYRCE6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-13 11:17:20', NULL, 1, 1, 2),
(233, NULL, 'なんば店', 'なんば店', NULL, NULL, '', 'store', '50', NULL, '46', '49', NULL, NULL, NULL, '(+81) 6-6760-4850', '10:00-22:30', '〒542-0075 Osaka, Chuo Ward, Nanbasennichimae, 12−33 Namba Ogawa Building 1st', 'https://maps.app.goo.gl/1fgUZifjQckkvryy5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-13 11:17:56', NULL, 1, 1, 1),
(236, NULL, NULL, NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 05:28:01', NULL, 1, 1, 1),
(237, NULL, NULL, NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:14:08', NULL, 1, 1, 1),
(238, NULL, NULL, NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:14:50', NULL, 1, 1, 1),
(235, NULL, '很好設計', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'design@goods-design.com.tw', '日本', 'USD 300,000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-09-25 04:27:57', NULL, 1, 1, 1),
(239, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0921419506', 'c3207054@gmail.com', '售后服务', '12312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:32:20', NULL, 1, 1, 1),
(240, NULL, NULL, NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:32:55', NULL, 1, 1, 1),
(241, NULL, '很好設計', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'design@goods-design.com.tw', '日本', 'USD 300,000', '1231231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:37:09', NULL, 1, 1, 1),
(242, NULL, '很好設計', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'design@goods-design.com.tw', '日本', 'USD 300,000', '666666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:40:23', NULL, 1, 1, 1),
(243, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0921419506', 'c3207054@gmail.com', '售后服务', '565656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 08:40:46', NULL, 1, 1, 1),
(244, NULL, '很好測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0921419506', 'lindac3207054@yahoo.com.tw', '售后服务', 'Wwwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 09:18:34', NULL, 1, 1, 1),
(245, NULL, '很好測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lindac3207054@yahoo.com.tw', '日本', 'USD 300,000', '222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 09:19:07', NULL, 1, 1, 1),
(246, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0921419506', 'c3207054@gmail.com', '售后服务', '43423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 09:20:39', NULL, 1, 1, 1),
(247, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '日本', 'USD 300,000', '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-07 09:20:49', NULL, 1, 1, 1),
(248, NULL, 'test', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0000000000', 'patty@koicafe.com', '售后服务', '------test--------', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-08 09:34:58', NULL, 1, 1, 1),
(249, NULL, 'test', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0000000000', 'patty@koicafe.com', '售后服务', '------test--------', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-08 09:35:05', NULL, 1, 1, 1);
INSERT INTO `data_set` (`d_id`, `d_sn`, `d_title`, `d_title_en`, `d_content`, `d_content_en`, `d_slug`, `d_class1`, `d_class2`, `d_parent`, `d_class3`, `d_class4`, `d_class5`, `d_class6`, `d_tag`, `d_data1`, `d_data2`, `d_data3`, `d_data4`, `d_data5`, `d_data6`, `d_data7`, `d_data8`, `d_data9`, `d_data10`, `d_data11`, `d_data12`, `d_data13`, `d_data14`, `d_data15`, `d_data16`, `d_data17`, `d_data18`, `d_data19`, `d_data20`, `d_data21`, `d_data22`, `d_data23`, `d_description`, `d_head`, `d_body`, `d_schema`, `d_authorize`, `d_youtube_code`, `d_imgType`, `d_decade`, `d_date`, `d_edit_date`, `d_active`, `d_active_en`, `d_sort`) VALUES
(250, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '日本', 'USD 300,000', '12321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-08 09:45:11', NULL, 1, 1, 1),
(251, NULL, '很好設計測試', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '日本', '0921419506', 'c3207054@gmail.com', '售后服务', '12321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-08 09:46:00', NULL, 1, 1, 1),
(252, NULL, '很好設計測試', NULL, NULL, NULL, '', 'oversea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3207054@gmail.com', '日本', 'USD 300,000', '123231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-08 09:46:16', NULL, 1, 1, 1),
(253, NULL, 'patty', NULL, NULL, NULL, '', 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'taiwan', '00000000000', 'patty@koicafe.com', '业务合作', 'test-----', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-08 10:09:30', NULL, 1, 1, 1),
(254, NULL, 'FIFTYLAN', 'FIFTYLAN', NULL, NULL, '', 'storeBrand', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 10:18:45', NULL, 1, 1, 1),
(255, NULL, 'KOI Thé ', 'KOI Thé ', NULL, NULL, '', 'menu', '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 11:58:56', NULL, 1, 1, 1),
(256, NULL, 'KOI Thé Express', 'KOI Thé Express', NULL, NULL, '', 'menu', '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:01:20', NULL, 1, 1, 2),
(257, NULL, 'Signature KOI', 'Signature KOI', NULL, NULL, '', 'menu', '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:03:10', NULL, 1, 1, 3),
(258, NULL, 'KOI Thé-中国', 'KOI Thé-China', NULL, NULL, '', 'menu', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:20:41', NULL, 1, 1, 5),
(259, NULL, 'KOI PLUS-中国', 'KOI PLUS-China', NULL, NULL, '', 'menu', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:22:04', NULL, 1, 1, 4),
(260, NULL, 'KOI Thé-中国香港', 'KOI Thé-Hong Kong, China', NULL, NULL, '', 'menu', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:22:55', NULL, 1, 1, 3),
(261, NULL, 'KOI Thé-中国澳门', 'KOI Thé-Macau, China', NULL, NULL, '', 'menu', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:25:28', NULL, 1, 1, 2),
(262, NULL, 'KOI PLUS-中國澳門', 'KOI PLUS-Macau, China', NULL, NULL, '', 'menu', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 12:26:33', NULL, 1, 1, 1),
(263, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 13:57:05', NULL, 1, 1, 1),
(264, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 13:57:53', NULL, 1, 1, 1),
(265, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:00:17', NULL, 1, 1, 1),
(266, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:00:32', NULL, 1, 1, 1),
(267, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:01:01', NULL, 1, 1, 1),
(268, NULL, 'KOI Thé Express', 'KOI Thé Express', NULL, NULL, '', 'menu', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:01:45', NULL, 1, 1, 2),
(269, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:02:08', NULL, 1, 1, 1),
(270, NULL, 'FIFTYLAN', 'FIFTYLAN', NULL, NULL, '', 'menu', '59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:02:44', NULL, 1, 1, 1),
(271, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:03:28', NULL, 1, 1, 1),
(272, NULL, 'KOI Thé', 'KOI Thé', NULL, NULL, '', 'menu', '61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:03:54', NULL, 1, 1, 1),
(273, NULL, 'FIFTYLAN', 'FIFTYLAN', NULL, NULL, '', 'menu', '63', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, NULL, 1, NULL, '2024-10-09 14:04:16', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `file_set`
--

CREATE TABLE `file_set` (
  `file_d_id` int(11) DEFAULT NULL,
  `file_c_id` int(11) DEFAULT NULL,
  `file_id` int(11) NOT NULL,
  `file_type` tinytext COLLATE utf8_unicode_ci,
  `file_name` tinytext COLLATE utf8_unicode_ci,
  `file_content` text COLLATE utf8_unicode_ci,
  `file_title` tinytext COLLATE utf8_unicode_ci,
  `file_link1` tinytext COLLATE utf8_unicode_ci,
  `file_link2` tinytext COLLATE utf8_unicode_ci,
  `file_link3` tinytext COLLATE utf8_unicode_ci,
  `file_link4` tinytext COLLATE utf8_unicode_ci,
  `file_link5` tinytext COLLATE utf8_unicode_ci,
  `file_show_type` tinyint(1) DEFAULT '0',
  `file_data1` text COLLATE utf8_unicode_ci,
  `file_data2` text COLLATE utf8_unicode_ci,
  `file_data3` text COLLATE utf8_unicode_ci,
  `file_width` tinyint(1) DEFAULT '0',
  `file_height` tinyint(1) DEFAULT '0',
  `file_sort` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `file_set`
--

INSERT INTO `file_set` (`file_d_id`, `file_c_id`, `file_id`, `file_type`, `file_name`, `file_content`, `file_title`, `file_link1`, `file_link2`, `file_link3`, `file_link4`, `file_link5`, `file_show_type`, `file_data1`, `file_data2`, `file_data3`, `file_width`, `file_height`, `file_sort`) VALUES
(8, NULL, 27, 'newsTopCover', 'news_27.jpg', NULL, '', 'upload_image/news/news_27.jpg', 'upload_image/news/news_27_s100.jpg', 'upload_image/news/news_27_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(6, NULL, 13, 'newsCover', 'news_13.jpg', NULL, '', 'upload_image/news/news_13.jpg', 'upload_image/news/news_13_s100.jpg', 'upload_image/news/news_13_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(8, NULL, 28, 'newsInnerCover', 'news_28.jpg', NULL, '', 'upload_image/news/news_28.jpg', 'upload_image/news/news_28_s100.jpg', 'upload_image/news/news_28_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(8, NULL, 26, 'newsCover', 'news_26.jpg', NULL, '', 'upload_image/news/news_26.jpg', 'upload_image/news/news_26_s100.jpg', 'upload_image/news/news_26_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 15, 'newsInnerCover', 'news_15.png', NULL, '', 'upload_image/news/news_15.png', 'upload_image/news/news_15_s100.png', 'upload_image/news/news_15_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 14, 'newsTopCover', 'news_14.png', NULL, '', 'upload_image/news/news_14.png', 'upload_image/news/news_14_s100.png', 'upload_image/news/news_14_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(4, NULL, 7, 'newsCover', 'news_7.jpg', NULL, '', 'upload_image/news/news_7.jpg', 'upload_image/news/news_7_s100.jpg', 'upload_image/news/news_7_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(4, NULL, 8, 'newsTopCover', 'news_7.jpg', NULL, '', 'upload_image/news/news_7.jpg', 'upload_image/news/news_7_s100.jpg', 'upload_image/news/news_7_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(4, NULL, 9, 'newsInnerCover', 'news_7.jpg', NULL, '', 'upload_image/news/news_7.jpg', 'upload_image/news/news_7_s100.jpg', 'upload_image/news/news_7_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(7, NULL, 16, 'newsCover', 'news_16.jpg', NULL, '', 'upload_image/news/news_16.jpg', 'upload_image/news/news_16_s100.jpg', 'upload_image/news/news_16_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(7, NULL, 17, 'newsTopCover', 'news_17.jpg', NULL, '', 'upload_image/news/news_17.jpg', 'upload_image/news/news_17_s100.jpg', 'upload_image/news/news_17_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(7, NULL, 18, 'newsInnerCover', 'news_18.jpg', NULL, '', 'upload_image/news/news_18.jpg', 'upload_image/news/news_18_s100.jpg', 'upload_image/news/news_18_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 19, 'newsTopCover', 'news_19.jpg', NULL, '', 'upload_image/news/news_19.jpg', 'upload_image/news/news_19_s100.jpg', 'upload_image/news/news_19_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 20, 'newsInnerCover', 'news_20.png', NULL, '', 'upload_image/news/news_20.png', 'upload_image/news/news_20_s100.png', 'upload_image/news/news_20_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 21, 'newsTopCover', 'news_21.png', NULL, '', 'upload_image/news/news_21.png', 'upload_image/news/news_21_s100.png', 'upload_image/news/news_21_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 22, 'newsInnerCover', 'news_22.png', NULL, '', 'upload_image/news/news_22.png', 'upload_image/news/news_22_s100.png', 'upload_image/news/news_22_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 23, 'newsTopCover', 'news_23.jpg', NULL, '', 'upload_image/news/news_23.jpg', 'upload_image/news/news_23_s100.jpg', 'upload_image/news/news_23_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(6, NULL, 24, 'newsTopCover', 'news_24.jpg', NULL, '', 'upload_image/news/news_24.jpg', 'upload_image/news/news_24_s100.jpg', 'upload_image/news/news_24_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(185, NULL, 140, 'ourteaCover', 'ourtea_140.jpg', NULL, '', 'upload_image/ourtea/ourtea_140.jpg', 'upload_image/ourtea/ourtea_140_s100.jpg', 'upload_image/ourtea/ourtea_140_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(9, NULL, 29, 'mainteaCover', 'maintea_29.jpg', NULL, '', 'upload_image/maintea/maintea_29.jpg', 'upload_image/maintea/maintea_29_s100.jpg', 'upload_image/maintea/maintea_29_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(9, NULL, 30, 'mainteaCenterCover', 'maintea_30.png', NULL, '', 'upload_image/maintea/maintea_30.png', 'upload_image/maintea/maintea_30_s100.png', 'upload_image/maintea/maintea_30_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(10, NULL, 31, 'mainteaCover', 'maintea_31.jpg', NULL, '', 'upload_image/maintea/maintea_31.jpg', 'upload_image/maintea/maintea_31_s100.jpg', 'upload_image/maintea/maintea_31_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(10, NULL, 32, 'mainteaCenterCover', 'maintea_32.png', NULL, '', 'upload_image/maintea/maintea_32.png', 'upload_image/maintea/maintea_32_s100.png', 'upload_image/maintea/maintea_32_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 33, 'file', 'menuFile_33.pdf', NULL, '', 'upload_file/menuFile/menuFile_33.pdf', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(11, NULL, 34, 'file', 'menu_34.pdf', NULL, '', 'upload_file/menu/menu_34.pdf', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(12, NULL, 35, 'file', 'menuFile_35.pdf', NULL, '', 'upload_file/menuFile/menuFile_35.pdf', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 5, 110, 'ourteaIndexCover', '_110.jpg', NULL, '', 'upload_image//_110.jpg', 'upload_image//_110_s100.jpg', 'upload_image//_110_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(14, NULL, 37, 'ourteaCover', 'ourtea_37.jpg', NULL, '', 'upload_image/ourtea/ourtea_37.jpg', 'upload_image/ourtea/ourtea_37_s100.jpg', 'upload_image/ourtea/ourtea_37_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(173, NULL, 129, 'ourteaCover', 'ourtea_129.jpg', NULL, '', 'upload_image/ourtea/ourtea_129.jpg', 'upload_image/ourtea/ourtea_129_s100.jpg', 'upload_image/ourtea/ourtea_129_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(16, NULL, 39, 'ourteaCover', 'ourtea_39.jpg', NULL, '', 'upload_image/ourtea/ourtea_39.jpg', 'upload_image/ourtea/ourtea_39_s100.jpg', 'upload_image/ourtea/ourtea_39_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, NULL, 41, 'ourteaIconCover', 'ourtea_41.png', NULL, '', 'upload_image/ourtea/ourtea_41.png', 'upload_image/ourtea/ourtea_41_s100.png', 'upload_image/ourtea/ourtea_41_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 12, 42, 'ourteaIconCover', 'ourtea_42.png', NULL, '', 'upload_image/ourtea/ourtea_42.png', 'upload_image/ourtea/ourtea_42_s100.png', 'upload_image/ourtea/ourtea_42_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 6, 64, 'ourteaIconCover', 'ourtea_64.png', NULL, '', 'upload_image/ourtea/ourtea_64.png', 'upload_image/ourtea/ourtea_64_s100.png', 'upload_image/ourtea/ourtea_64_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 5, 63, 'ourteaIconCover', 'ourtea_63.png', NULL, '', 'upload_image/ourtea/ourtea_63.png', 'upload_image/ourtea/ourtea_63_s100.png', 'upload_image/ourtea/ourtea_63_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 4, 45, 'ourteaIconCover', '_45.png', NULL, '', 'upload_image//_45.png', 'upload_image//_45_s100.png', 'upload_image//_45_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 13, 46, 'ourteaIconCover', 'ourtea_46.png', NULL, '', 'upload_image/ourtea/ourtea_46.png', 'upload_image/ourtea/ourtea_46_s100.png', 'upload_image/ourtea/ourtea_46_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(177, NULL, 132, 'ourteaCover', 'ourtea_132.jpg', NULL, '', 'upload_image/ourtea/ourtea_132.jpg', 'upload_image/ourtea/ourtea_132_s100.jpg', 'upload_image/ourtea/ourtea_132_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(178, NULL, 133, 'ourteaCover', 'ourtea_133.jpg', NULL, '', 'upload_image/ourtea/ourtea_133.jpg', 'upload_image/ourtea/ourtea_133_s100.jpg', 'upload_image/ourtea/ourtea_133_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(179, NULL, 134, 'ourteaCover', 'ourtea_134.jpg', NULL, '', 'upload_image/ourtea/ourtea_134.jpg', 'upload_image/ourtea/ourtea_134_s100.jpg', 'upload_image/ourtea/ourtea_134_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(180, NULL, 135, 'ourteaCover', 'ourtea_135.jpg', NULL, '', 'upload_image/ourtea/ourtea_135.jpg', 'upload_image/ourtea/ourtea_135_s100.jpg', 'upload_image/ourtea/ourtea_135_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(181, NULL, 136, 'ourteaCover', 'ourtea_136.jpg', NULL, '', 'upload_image/ourtea/ourtea_136.jpg', 'upload_image/ourtea/ourtea_136_s100.jpg', 'upload_image/ourtea/ourtea_136_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(182, NULL, 137, 'ourteaCover', 'ourtea_137.jpg', NULL, '', 'upload_image/ourtea/ourtea_137.jpg', 'upload_image/ourtea/ourtea_137_s100.jpg', 'upload_image/ourtea/ourtea_137_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(107, NULL, 128, 'ourteaCover', 'ourtea_128.jpg', NULL, '', 'upload_image/ourtea/ourtea_128.jpg', 'upload_image/ourtea/ourtea_128_s100.jpg', 'upload_image/ourtea/ourtea_128_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(27, NULL, 56, 'storeCover', 'store_56.jpg', NULL, '', 'upload_image/store/store_56.jpg', 'upload_image/store/store_56_s100.jpg', 'upload_image/store/store_56_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(28, NULL, 57, 'storeCover', 'store_57.png', NULL, '', 'upload_image/store/store_57.png', 'upload_image/store/store_57_s100.png', 'upload_image/store/store_57_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(29, NULL, 58, 'storeCover', 'store_58.jpg', NULL, '', 'upload_image/store/store_58.jpg', 'upload_image/store/store_58_s100.jpg', 'upload_image/store/store_58_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 43, 149, 'ourteaIndexCover', 'ourtea_149.jpg', NULL, '', 'upload_image/ourtea/ourtea_149.jpg', 'upload_image/ourtea/ourtea_149_s100.jpg', 'upload_image/ourtea/ourtea_149_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 35, 104, 'ourteaIndexCover', '_104.jpg', NULL, '', 'upload_image//_104.jpg', 'upload_image//_104_s100.jpg', 'upload_image//_104_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 6, 103, 'ourteaIndexCover', '_103.jpg', NULL, '', 'upload_image//_103.jpg', 'upload_image//_103_s100.jpg', 'upload_image//_103_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(35, NULL, 61, 'ourteaCover', 'ourtea_61.jpg', NULL, '', 'upload_image/ourtea/ourtea_61.jpg', 'upload_image/ourtea/ourtea_61_s100.jpg', 'upload_image/ourtea/ourtea_61_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(36, NULL, 62, 'ourteaCover', 'ourtea_62.jpg', NULL, '', 'upload_image/ourtea/ourtea_62.jpg', 'upload_image/ourtea/ourtea_62_s100.jpg', 'upload_image/ourtea/ourtea_62_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(38, NULL, 65, 'storeCover', 'store_65.png', NULL, '', 'upload_image/store/store_65.png', 'upload_image/store/store_65_s100.png', 'upload_image/store/store_65_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(96, NULL, 121, 'file', 'menu_119.gif', NULL, '', 'upload_file/menu/menu_119.gif', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(175, NULL, 130, 'ourteaCover', 'ourtea_130.jpg', NULL, '', 'upload_image/ourtea/ourtea_130.jpg', 'upload_image/ourtea/ourtea_130_s100.jpg', 'upload_image/ourtea/ourtea_130_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(92, NULL, 118, 'file', 'menu_118.png', NULL, '', 'upload_file/menu/menu_118.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(176, NULL, 131, 'ourteaCover', 'ourtea_131.jpg', NULL, '', 'upload_image/ourtea/ourtea_131.jpg', 'upload_image/ourtea/ourtea_131_s100.jpg', 'upload_image/ourtea/ourtea_131_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(101, NULL, 122, 'storeCover', 'store_122.jpg', NULL, '', 'upload_image/store/store_122.jpg', 'upload_image/store/store_122_s100.jpg', 'upload_image/store/store_122_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(41, NULL, 70, 'storeCover', 'store_70.png', NULL, '', 'upload_image/store/store_70.png', 'upload_image/store/store_70_s100.png', 'upload_image/store/store_70_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(184, NULL, 139, 'ourteaCover', 'ourtea_139.jpg', NULL, '', 'upload_image/ourtea/ourtea_139.jpg', 'upload_image/ourtea/ourtea_139_s100.jpg', 'upload_image/ourtea/ourtea_139_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(183, NULL, 138, 'ourteaCover', 'ourtea_138.jpg', NULL, '', 'upload_image/ourtea/ourtea_138.jpg', 'upload_image/ourtea/ourtea_138_s100.jpg', 'upload_image/ourtea/ourtea_138_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(43, NULL, 74, 'file', 'menu_74.jpg', NULL, '', 'upload_file/menu/menu_74.jpg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(15, NULL, 123, 'ourteaCover', 'ourtea_123.jpg', NULL, '', 'upload_image/ourtea/ourtea_123.jpg', 'upload_image/ourtea/ourtea_123_s100.jpg', 'upload_image/ourtea/ourtea_123_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(49, NULL, 79, 'storeBrandCover', 'storeBrand_79.png', NULL, '', 'upload_image/storeBrand/storeBrand_79.png', 'upload_image/storeBrand/storeBrand_79_s100.png', 'upload_image/storeBrand/storeBrand_79_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(50, NULL, 80, 'storeBrandCover', 'storeBrand_80.png', NULL, '', 'upload_image/storeBrand/storeBrand_80.png', 'upload_image/storeBrand/storeBrand_80_s100.png', 'upload_image/storeBrand/storeBrand_80_s100_2100.png', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(0, NULL, 81, 'storeCover', 'store_81.jpg', NULL, '', 'upload_image/store/store_81.jpg', 'upload_image/store/store_81_s100.jpg', 'upload_image/store/store_81_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(0, NULL, 82, 'storeCover', 'store_82.jpg', NULL, '', 'upload_image/store/store_82.jpg', 'upload_image/store/store_82_s100.jpg', 'upload_image/store/store_82_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(0, NULL, 83, 'storeCover', 'store_83.jpg', NULL, '', 'upload_image/store/store_83.jpg', 'upload_image/store/store_83_s100.jpg', 'upload_image/store/store_83_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(0, NULL, 84, 'storeCover', 'store_84.jpg', NULL, '', 'upload_image/store/store_84.jpg', 'upload_image/store/store_84_s100.jpg', 'upload_image/store/store_84_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(0, NULL, 85, 'storeCover', 'store_85.jpg', NULL, '', 'upload_image/store/store_85.jpg', 'upload_image/store/store_85_s100.jpg', 'upload_image/store/store_85_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(106, NULL, 127, 'ourteaCover', 'ourtea_127.jpg', NULL, '', 'upload_image/ourtea/ourtea_127.jpg', 'upload_image/ourtea/ourtea_127_s100.jpg', 'upload_image/ourtea/ourtea_127_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 3, 108, 'ourteaIndexCover', '_108.jpg', NULL, '', 'upload_image//_108.jpg', 'upload_image//_108_s100.jpg', 'upload_image//_108_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 0, 90, 'ourteaIndexCover', 'ourtea_90.jpg', NULL, '', 'upload_image/ourtea/ourtea_90.jpg', 'upload_image/ourtea/ourtea_90_s100.jpg', 'upload_image/ourtea/ourtea_90_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 0, 91, 'ourteaIndexCover', 'ourtea_91.png', NULL, '', 'upload_image/ourtea/ourtea_91.png', 'upload_image/ourtea/ourtea_91_s100.png', 'upload_image/ourtea/ourtea_91_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 4, 109, 'ourteaIndexCover', '_109.jpg', NULL, '', 'upload_image//_109.jpg', 'upload_image//_109_s100.jpg', 'upload_image//_109_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(56, NULL, 113, 'file', 'menu_113.jpg', NULL, '', 'upload_file/menu/menu_113.jpg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 0, 97, 'ourteaIndexCover', 'ourtea_97.jpg', NULL, '', 'upload_image/ourtea/ourtea_97.jpg', 'upload_image/ourtea/ourtea_97_s100.jpg', 'upload_image/ourtea/ourtea_97_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 0, 98, 'ourteaIndexCover', 'ourtea_98.jpg', NULL, '', 'upload_image/ourtea/ourtea_98.jpg', 'upload_image/ourtea/ourtea_98_s100.jpg', 'upload_image/ourtea/ourtea_98_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 0, 99, 'ourteaIconCover', 'ourtea_99.png', NULL, '', 'upload_image/ourtea/ourtea_99.png', 'upload_image/ourtea/ourtea_99_s100.png', 'upload_image/ourtea/ourtea_99_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 32, 100, 'ourteaIndexCover', 'ourtea_100.jpg', NULL, '', 'upload_image/ourtea/ourtea_100.jpg', 'upload_image/ourtea/ourtea_100_s100.jpg', 'upload_image/ourtea/ourtea_100_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 32, 101, 'ourteaIconCover', 'ourtea_101.png', NULL, '', 'upload_image/ourtea/ourtea_101.png', 'upload_image/ourtea/ourtea_101_s100.png', 'upload_image/ourtea/ourtea_101_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 35, 105, 'ourteaIconCover', 'ourtea_105.png', NULL, '', 'upload_image/ourtea/ourtea_105.png', 'upload_image/ourtea/ourtea_105_s100.png', 'upload_image/ourtea/ourtea_105_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(34, NULL, 107, 'ourteaCover', 'ourtea_107.jpg', NULL, '', 'upload_image/ourtea/ourtea_107.jpg', 'upload_image/ourtea/ourtea_107_s100.jpg', 'upload_image/ourtea/ourtea_107_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 43, 150, 'ourteaIconCover', 'ourtea_150.png', NULL, '', 'upload_image/ourtea/ourtea_150.png', 'upload_image/ourtea/ourtea_150_s100.png', 'upload_image/ourtea/ourtea_150_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(57, NULL, 186, 'file', 'menu_184.pdf', NULL, '', 'upload_file/menu/menu_184.pdf', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(186, NULL, 141, 'ourteaCover', 'ourtea_141.jpg', NULL, '', 'upload_image/ourtea/ourtea_141.jpg', 'upload_image/ourtea/ourtea_141_s100.jpg', 'upload_image/ourtea/ourtea_141_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(187, NULL, 142, 'ourteaCover', 'ourtea_142.jpg', NULL, '', 'upload_image/ourtea/ourtea_142.jpg', 'upload_image/ourtea/ourtea_142_s100.jpg', 'upload_image/ourtea/ourtea_142_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(188, NULL, 143, 'ourteaCover', 'ourtea_143.jpg', NULL, '', 'upload_image/ourtea/ourtea_143.jpg', 'upload_image/ourtea/ourtea_143_s100.jpg', 'upload_image/ourtea/ourtea_143_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(189, NULL, 144, 'ourteaCover', 'ourtea_144.jpg', NULL, '', 'upload_image/ourtea/ourtea_144.jpg', 'upload_image/ourtea/ourtea_144_s100.jpg', 'upload_image/ourtea/ourtea_144_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(190, NULL, 145, 'ourteaCover', 'ourtea_145.jpg', NULL, '', 'upload_image/ourtea/ourtea_145.jpg', 'upload_image/ourtea/ourtea_145_s100.jpg', 'upload_image/ourtea/ourtea_145_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(191, NULL, 146, 'ourteaCover', 'ourtea_146.jpg', NULL, '', 'upload_image/ourtea/ourtea_146.jpg', 'upload_image/ourtea/ourtea_146_s100.jpg', 'upload_image/ourtea/ourtea_146_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(192, NULL, 147, 'ourteaCover', 'ourtea_147.jpg', NULL, '', 'upload_image/ourtea/ourtea_147.jpg', 'upload_image/ourtea/ourtea_147_s100.jpg', 'upload_image/ourtea/ourtea_147_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(193, NULL, 148, 'ourteaCover', 'ourtea_148.jpg', NULL, '', 'upload_image/ourtea/ourtea_148.jpg', 'upload_image/ourtea/ourtea_148_s100.jpg', 'upload_image/ourtea/ourtea_148_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 44, 151, 'ourteaIndexCover', 'ourtea_151.jpg', NULL, '', 'upload_image/ourtea/ourtea_151.jpg', 'upload_image/ourtea/ourtea_151_s100.jpg', 'upload_image/ourtea/ourtea_151_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 44, 152, 'ourteaIconCover', 'ourtea_152.png', NULL, '', 'upload_image/ourtea/ourtea_152.png', 'upload_image/ourtea/ourtea_152_s100.png', 'upload_image/ourtea/ourtea_152_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 45, 153, 'ourteaIndexCover', 'ourtea_153.jpg', NULL, '', 'upload_image/ourtea/ourtea_153.jpg', 'upload_image/ourtea/ourtea_153_s100.jpg', 'upload_image/ourtea/ourtea_153_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 45, 154, 'ourteaIconCover', '_154.png', NULL, '', 'upload_image//_154.png', 'upload_image//_154_s100.png', 'upload_image//_154_s100_2100.png', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(196, NULL, 155, 'ourteaCover', 'ourtea_155.jpg', NULL, '', 'upload_image/ourtea/ourtea_155.jpg', 'upload_image/ourtea/ourtea_155_s100.jpg', 'upload_image/ourtea/ourtea_155_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(197, NULL, 156, 'ourteaCover', 'ourtea_156.jpg', NULL, '', 'upload_image/ourtea/ourtea_156.jpg', 'upload_image/ourtea/ourtea_156_s100.jpg', 'upload_image/ourtea/ourtea_156_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(198, NULL, 157, 'ourteaCover', 'ourtea_157.jpg', NULL, '', 'upload_image/ourtea/ourtea_157.jpg', 'upload_image/ourtea/ourtea_157_s100.jpg', 'upload_image/ourtea/ourtea_157_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(202, NULL, 159, 'ourteaCover', 'ourtea_158.jpg', NULL, '', 'upload_image/ourtea/ourtea_158.jpg', 'upload_image/ourtea/ourtea_158_s100.jpg', 'upload_image/ourtea/ourtea_158_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(203, NULL, 160, 'ourteaCover', 'ourtea_160.jpg', NULL, '', 'upload_image/ourtea/ourtea_160.jpg', 'upload_image/ourtea/ourtea_160_s100.jpg', 'upload_image/ourtea/ourtea_160_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(204, NULL, 161, 'ourteaCover', 'ourtea_161.jpg', NULL, '', 'upload_image/ourtea/ourtea_161.jpg', 'upload_image/ourtea/ourtea_161_s100.jpg', 'upload_image/ourtea/ourtea_161_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(205, NULL, 162, 'ourteaCover', 'ourtea_162.jpg', NULL, '', 'upload_image/ourtea/ourtea_162.jpg', 'upload_image/ourtea/ourtea_162_s100.jpg', 'upload_image/ourtea/ourtea_162_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(206, NULL, 163, 'ourteaCover', 'ourtea_163.jpg', NULL, '', 'upload_image/ourtea/ourtea_163.jpg', 'upload_image/ourtea/ourtea_163_s100.jpg', 'upload_image/ourtea/ourtea_163_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(207, NULL, 164, 'ourteaCover', 'ourtea_164.jpg', NULL, '', 'upload_image/ourtea/ourtea_164.jpg', 'upload_image/ourtea/ourtea_164_s100.jpg', 'upload_image/ourtea/ourtea_164_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(208, NULL, 165, 'ourteaCover', 'ourtea_165.jpg', NULL, '', 'upload_image/ourtea/ourtea_165.jpg', 'upload_image/ourtea/ourtea_165_s100.jpg', 'upload_image/ourtea/ourtea_165_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(209, NULL, 166, 'ourteaCover', 'ourtea_166.jpg', NULL, '', 'upload_image/ourtea/ourtea_166.jpg', 'upload_image/ourtea/ourtea_166_s100.jpg', 'upload_image/ourtea/ourtea_166_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(213, NULL, 168, 'ourteaCover', 'ourtea_167.jpg', NULL, '', 'upload_image/ourtea/ourtea_167.jpg', 'upload_image/ourtea/ourtea_167_s100.jpg', 'upload_image/ourtea/ourtea_167_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(211, NULL, 169, 'ourteaCover', 'ourtea_169.jpg', NULL, '', 'upload_image/ourtea/ourtea_169.jpg', 'upload_image/ourtea/ourtea_169_s100.jpg', 'upload_image/ourtea/ourtea_169_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(212, NULL, 170, 'ourteaCover', 'ourtea_170.jpg', NULL, '', 'upload_image/ourtea/ourtea_170.jpg', 'upload_image/ourtea/ourtea_170_s100.jpg', 'upload_image/ourtea/ourtea_170_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(214, NULL, 171, 'ourteaCover', 'ourtea_171.jpg', NULL, '', 'upload_image/ourtea/ourtea_171.jpg', 'upload_image/ourtea/ourtea_171_s100.jpg', 'upload_image/ourtea/ourtea_171_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(215, NULL, 172, 'ourteaCover', 'ourtea_172.jpg', NULL, '', 'upload_image/ourtea/ourtea_172.jpg', 'upload_image/ourtea/ourtea_172_s100.jpg', 'upload_image/ourtea/ourtea_172_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(216, NULL, 173, 'ourteaCover', 'ourtea_173.jpg', NULL, '', 'upload_image/ourtea/ourtea_173.jpg', 'upload_image/ourtea/ourtea_173_s100.jpg', 'upload_image/ourtea/ourtea_173_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(217, NULL, 174, 'ourteaCover', 'ourtea_174.jpg', NULL, '', 'upload_image/ourtea/ourtea_174.jpg', 'upload_image/ourtea/ourtea_174_s100.jpg', 'upload_image/ourtea/ourtea_174_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(218, NULL, 175, 'ourteaCover', 'ourtea_175.jpg', NULL, '', 'upload_image/ourtea/ourtea_175.jpg', 'upload_image/ourtea/ourtea_175_s100.jpg', 'upload_image/ourtea/ourtea_175_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(219, NULL, 176, 'ourteaCover', 'ourtea_176.jpg', NULL, '', 'upload_image/ourtea/ourtea_176.jpg', 'upload_image/ourtea/ourtea_176_s100.jpg', 'upload_image/ourtea/ourtea_176_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(220, NULL, 177, 'ourteaCover', 'ourtea_177.jpg', NULL, '', 'upload_image/ourtea/ourtea_177.jpg', 'upload_image/ourtea/ourtea_177_s100.jpg', 'upload_image/ourtea/ourtea_177_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(221, NULL, 178, 'ourteaCover', 'ourtea_178.jpg', NULL, '', 'upload_image/ourtea/ourtea_178.jpg', 'upload_image/ourtea/ourtea_178_s100.jpg', 'upload_image/ourtea/ourtea_178_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(222, NULL, 179, 'ourteaCover', 'ourtea_179.jpg', NULL, '', 'upload_image/ourtea/ourtea_179.jpg', 'upload_image/ourtea/ourtea_179_s100.jpg', 'upload_image/ourtea/ourtea_179_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(223, NULL, 180, 'ourteaCover', 'ourtea_180.jpg', NULL, '', 'upload_image/ourtea/ourtea_180.jpg', 'upload_image/ourtea/ourtea_180_s100.jpg', 'upload_image/ourtea/ourtea_180_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(224, NULL, 181, 'ourteaCover', 'ourtea_181.jpg', NULL, '', 'upload_image/ourtea/ourtea_181.jpg', 'upload_image/ourtea/ourtea_181_s100.jpg', 'upload_image/ourtea/ourtea_181_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(225, NULL, 182, 'ourteaCover', 'ourtea_182.jpg', NULL, '', 'upload_image/ourtea/ourtea_182.jpg', 'upload_image/ourtea/ourtea_182_s100.jpg', 'upload_image/ourtea/ourtea_182_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(226, NULL, 183, 'ourteaCover', 'ourtea_183.jpg', NULL, '', 'upload_image/ourtea/ourtea_183.jpg', 'upload_image/ourtea/ourtea_183_s100.jpg', 'upload_image/ourtea/ourtea_183_s100_2100.jpg', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 4, 187, 'file', 'ourtea_187.svg', NULL, '', 'upload_file/ourtea/ourtea_187.svg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 5, 188, 'file', 'ourtea_188.svg', NULL, '', 'upload_file/ourtea/ourtea_188.svg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 43, 189, 'file', 'ourtea_189.svg', NULL, '', 'upload_file/ourtea/ourtea_189.svg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 44, 190, 'file', 'ourtea_190.svg', NULL, '', 'upload_file/ourtea/ourtea_190.svg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 6, 191, 'file', 'ourtea_191.svg', NULL, '', 'upload_file/ourtea/ourtea_191.svg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(NULL, 45, 214, 'file', 'ourtea_213.svg', NULL, '', 'upload_file/ourtea/ourtea_213.svg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(254, NULL, 193, 'storeBrandCover', 'storeBrand_193.jpg', NULL, '', 'upload_image/storeBrand/storeBrand_193.jpg', 'upload_image/storeBrand/storeBrand_193_s100.jpg', 'upload_image/storeBrand/storeBrand_193_s100_2100.jpg', NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL),
(255, NULL, 194, 'file', 'menu_194.png', NULL, '', 'upload_file/menu/menu_194.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(256, NULL, 195, 'file', 'menu_195.png', NULL, '', 'upload_file/menu/menu_195.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(257, NULL, 196, 'file', 'menu_196.png', NULL, '', 'upload_file/menu/menu_196.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(258, NULL, 197, 'file', 'menu_197.png', NULL, '', 'upload_file/menu/menu_197.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(259, NULL, 198, 'file', 'menu_198.png', NULL, '', 'upload_file/menu/menu_198.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(260, NULL, 199, 'file', 'menu_199.png', NULL, '', 'upload_file/menu/menu_199.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(261, NULL, 200, 'file', 'menu_200.png', NULL, '', 'upload_file/menu/menu_200.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(262, NULL, 201, 'file', 'menu_201.png', NULL, '', 'upload_file/menu/menu_201.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(263, NULL, 202, 'file', 'menu_202.gif', NULL, '', 'upload_file/menu/menu_202.gif', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(264, NULL, 203, 'file', 'menu_203.png', NULL, '', 'upload_file/menu/menu_203.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(265, NULL, 204, 'file', 'menu_204.png', NULL, '', 'upload_file/menu/menu_204.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(266, NULL, 205, 'file', 'menu_205.png', NULL, '', 'upload_file/menu/menu_205.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(267, NULL, 206, 'file', 'menu_206.png', NULL, '', 'upload_file/menu/menu_206.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(268, NULL, 207, 'file', 'menu_207.png', NULL, '', 'upload_file/menu/menu_207.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(269, NULL, 208, 'file', 'menu_208.png', NULL, '', 'upload_file/menu/menu_208.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(270, NULL, 209, 'file', 'menu_209.png', NULL, '', 'upload_file/menu/menu_209.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(271, NULL, 210, 'file', 'menu_210.png', NULL, '', 'upload_file/menu/menu_210.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(272, NULL, 211, 'file', 'menu_211.png', NULL, '', 'upload_file/menu/menu_211.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL),
(273, NULL, 212, 'file', 'menu_212.png', NULL, '', 'upload_file/menu/menu_212.png', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `index_set`
--

CREATE TABLE `index_set` (
  `object_id` int(11) DEFAULT NULL COMMENT '現在指定的ID',
  `object_prev_id` int(11) DEFAULT NULL COMMENT '之前的ID',
  `type` tinytext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_use` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_pageTitle1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_pageTitle2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_pageTitle3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_pageTitle4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_pageTitle5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`, `menu_link`, `menu_use`, `menu_pageTitle1`, `menu_pageTitle2`, `menu_pageTitle3`, `menu_pageTitle4`, `menu_pageTitle5`) VALUES
(1, 'authority', 'authority_list.php', '#main_menu_1', '權限管理-列表', '權限管理-新增', '權限管理-修改', '權限管理-刪除', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `message_set`
--

CREATE TABLE `message_set` (
  `m_id` int(10) UNSIGNED NOT NULL,
  `m_d_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `m_title` text COLLATE utf8_unicode_ci,
  `m_content` text COLLATE utf8_unicode_ci,
  `m_date` datetime DEFAULT NULL,
  `m_name` text COLLATE utf8_unicode_ci,
  `m_email` text COLLATE utf8_unicode_ci,
  `m_type` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_ip` tinytext COLLATE utf8_unicode_ci,
  `m_m_id` int(11) DEFAULT NULL,
  `m_rem_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `terms`
--

CREATE TABLE `terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `term_group` bigint(20) NOT NULL DEFAULT '0',
  `term_type` tinyint(4) DEFAULT '1',
  `term_active` tinyint(4) NOT NULL DEFAULT '1',
  `term_sort` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `term_relationships`
--

CREATE TABLE `term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `term_taxonomy`
--

CREATE TABLE `term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8_unicode_ci,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `victim`
--

CREATE TABLE `victim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'BY DINZAB',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAuth` tinyint(1) NOT NULL DEFAULT '0',
  `verify_page` int(11) NOT NULL DEFAULT '0',
  `is_app_verified` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '127.0.0.1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `webcount`
--

CREATE TABLE `webcount` (
  `count_id` int(11) NOT NULL,
  `count_ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `zipcode`
--

CREATE TABLE `zipcode` (
  `Id` bigint(20) NOT NULL,
  `City` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Area` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZipCode` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL COMMENT '對應縣市',
  `z_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `address_book_set`
--
ALTER TABLE `address_book_set`
  ADD PRIMARY KEY (`a_id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- 資料表索引 `a_set`
--
ALTER TABLE `a_set`
  ADD PRIMARY KEY (`a_id`);

--
-- 資料表索引 `class_set`
--
ALTER TABLE `class_set`
  ADD PRIMARY KEY (`c_id`);

--
-- 資料表索引 `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`d_id`);

--
-- 資料表索引 `file_set`
--
ALTER TABLE `file_set`
  ADD PRIMARY KEY (`file_id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- 資料表索引 `message_set`
--
ALTER TABLE `message_set`
  ADD PRIMARY KEY (`m_id`);

--
-- 資料表索引 `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `name` (`name`);

--
-- 資料表索引 `term_relationships`
--
ALTER TABLE `term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- 資料表索引 `term_taxonomy`
--
ALTER TABLE `term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- 資料表索引 `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `webcount`
--
ALTER TABLE `webcount`
  ADD PRIMARY KEY (`count_id`);

--
-- 資料表索引 `zipcode`
--
ALTER TABLE `zipcode`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `City` (`City`,`Area`,`ZipCode`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `address_book_set`
--
ALTER TABLE `address_book_set`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `a_set`
--
ALTER TABLE `a_set`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `class_set`
--
ALTER TABLE `class_set`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `data_set`
--
ALTER TABLE `data_set`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `file_set`
--
ALTER TABLE `file_set`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message_set`
--
ALTER TABLE `message_set`
  MODIFY `m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `term_taxonomy`
--
ALTER TABLE `term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `victim`
--
ALTER TABLE `victim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `webcount`
--
ALTER TABLE `webcount`
  MODIFY `count_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `zipcode`
--
ALTER TABLE `zipcode`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
