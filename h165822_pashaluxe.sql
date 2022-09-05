-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2022 at 12:13 PM
-- Server version: 5.7.33-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h165822_pashaluxe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Degree` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `level` int(1) NOT NULL,
  `date_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `Degree`, `level`, `date_register`) VALUES
(1, 'علی', 'زراعت', '09305151532', 'ali', '1234', 'مدیر', 1, '2020-12-31'),
(2, 'محمدرضا', 'زراعت', '09013201877', 'mohamadreza', '1234', 'کارمند عادی', 1, '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attr`
--

CREATE TABLE `tbl_attr` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `idcategory` int(255) NOT NULL,
  `parent` int(255) NOT NULL,
  `filter` int(1) NOT NULL,
  `filter_right` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_attr`
--

INSERT INTO `tbl_attr` (`id`, `title`, `idcategory`, `parent`, `filter`, `filter_right`) VALUES
(186, 'نگین دار', 71, 0, 1, 1),
(187, 'آویز تک', 71, 0, 1, 1),
(188, 'باچسب', 71, 186, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attr_val`
--

CREATE TABLE `tbl_attr_val` (
  `id` int(255) NOT NULL,
  `idattr` int(255) NOT NULL,
  `val` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_attr_val`
--

INSERT INTO `tbl_attr_val` (`id`, `idattr`, `val`) VALUES
(206, 186, 'نگین الماس'),
(207, 186, 'نگین پلاستیک'),
(208, 187, 'گردنی'),
(209, 187, 'مدبر');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `name_alt` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `img`, `link`, `name_alt`) VALUES
(0, 'luxary_banner', '', 'public/images/picture/1661102619.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basket`
--

CREATE TABLE `tbl_basket` (
  `id` int(255) NOT NULL,
  `cookie` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `idproduct` int(255) NOT NULL,
  `tedad` int(255) NOT NULL,
  `color` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `garantee` int(255) NOT NULL,
  `date_add` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_basket`
--

INSERT INTO `tbl_basket` (`id`, `cookie`, `idproduct`, `tedad`, `color`, `garantee`, `date_add`) VALUES
(325, '1661016720', 81, 1, '19', 1, '1401/05/29'),
(326, '1661020505', 81, 1, '19', 1, '1401/05/29'),
(327, '1661060247', 81, 1, '19', 1, '1401/05/30'),
(328, '1661965325', 98, 1, '19', 1, '1401/06/09'),
(329, '1661968945', 92, 1, '2', 2, '1401/06/09'),
(330, '1661971983', 92, 1, '2', 2, '1401/06/09'),
(331, '1661972632', 92, 1, '2', 1, '1401/06/09'),
(332, '1662053172', 92, 1, '2', 2, '1401/06/10'),
(335, '1662054241', 92, 1, '2', 2, '1401/06/10'),
(337, '1662062073', 92, 1, '2', 2, '1401/06/11'),
(338, '1662059989', 92, 1, '2', 1, '1401/06/11'),
(339, '1662063807', 92, 1, '2', 3, '1401/06/11'),
(340, '1662106430', 92, 1, '2', 2, '1401/06/11'),
(341, '1662226252', 92, 1, '2', 2, '1401/06/12'),
(342, '1662230067', 92, 1, '2', 3, '1401/06/12'),
(343, '1662230067', 90, 1, '2', 2, '1401/06/12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `parent` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `parent`) VALUES
(71, 'کاپشن چرم', 0),
(74, 'مردانه', 71),
(75, 'زنانه', 71);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_code`
--

CREATE TABLE `tbl_code` (
  `id` int(255) NOT NULL,
  `code` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `used` int(1) NOT NULL,
  `darsad` int(10) NOT NULL,
  `userId` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tarikh_sabt` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `tarikh_end` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `max` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_code`
--

INSERT INTO `tbl_code` (`id`, `code`, `used`, `darsad`, `userId`, `tarikh_sabt`, `tarikh_end`, `max`) VALUES
(1, '123456', 0, 50, '09305151532', '1395/6/3', '1400/6/5', 3),
(2, '20056566', 12, 30, '09305151532', '1395/6/4', '1401/6/24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `hex` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `title`, `hex`) VALUES
(1, 'عسلی', '#e96508'),
(2, 'مشکی', '#000000'),
(19, 'سرمه ای', '#00008b'),
(25, 'طوسی', '#808080');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `matn` text COLLATE utf8_persian_ci NOT NULL,
  `tarikh` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `posotive` text COLLATE utf8_persian_ci NOT NULL,
  `negative` text COLLATE utf8_persian_ci NOT NULL,
  `likecount` int(255) NOT NULL,
  `dislikecount` int(255) NOT NULL,
  `idproduct` int(255) NOT NULL,
  `name_question` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `param` text COLLATE utf8_persian_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `confirm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `title`, `matn`, `tarikh`, `posotive`, `negative`, `likecount`, `dislikecount`, `idproduct`, `name_question`, `param`, `user_id`, `confirm`) VALUES
(54, 'خیلی زیباست ممنون', 'س', '1401/03/09', 'شیک است', 'تاریک نیست', 0, 0, 73, 'علی زراعت', 'a:6:{i:1;s:2:\"2 \";i:2;s:2:\"3 \";i:3;s:2:\"2 \";i:4;s:2:\"2 \";i:5;s:2:\"3 \";i:6;s:2:\"2 \";}', '9674', 0),
(55, 'خیلی زیباست ممنون', 'bhjkop', '1401/03/09', 'شیک است', 'تاریک نیست', 0, 0, 76, 'kavan', 'a:0:{}', '2147483647', 0),
(59, 'خیلی زیباست ممنون', 'llkk', '1401/03/27', 'l', 'l', 0, 1, 73, 'علی زراعت کار', 'a:6:{i:1;s:169:\"<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type bool in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>119</b><br />\r\n\";i:2;s:169:\"<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type bool in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>119</b><br />\r\n\";i:3;s:169:\"<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type bool in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>119</b><br />\r\n\";i:4;s:169:\"<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type bool in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>140</b><br />\r\n\";i:5;s:169:\"<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type bool in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>140</b><br />\r\n\";i:6;s:169:\"<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type bool in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>140</b><br />\r\n\";}', '', 0),
(60, 'خیلی زیباست ممنون', 'kl', '1401/03/27', 'kk', 'lll', 0, 1, 73, 'kavan', 'a:6:{i:1;s:321:\"<br />\r\n<b>Notice</b>:  Undefined variable: comment_result in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>121</b><br />\r\n<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type null in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>121</b><br />\r\n\";i:2;s:2:\"2 \";i:3;s:321:\"<br />\r\n<b>Notice</b>:  Undefined variable: comment_result in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>121</b><br />\r\n<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type null in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>121</b><br />\r\n\";i:4;s:2:\"3 \";i:5;s:2:\"2 \";i:6;s:321:\"<br />\r\n<b>Notice</b>:  Undefined variable: comment_result in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>142</b><br />\r\n<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type null in <b>C:\\xampp\\htdocs\\pashaluxe.com\\views\\addcomment\\index.php</b> on line <b>142</b><br />\r\n\";}', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_param`
--

CREATE TABLE `tbl_comment_param` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `idcategory` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_comment_param`
--

INSERT INTO `tbl_comment_param` (`id`, `title`, `idcategory`) VALUES
(1, 'کیفیت موارد به کار رفته', 66),
(2, 'ارزش خرید به نسبت قیمت', 65),
(3, 'کیفیت دوخت', 66),
(4, 'فرم لباس روی بدن', 66),
(5, 'طراحی', 66),
(6, 'کیفیت محصول', 66);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `name_communication` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `communication` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `subject_communication` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `time_communication` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `date_communication` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `name_communication`, `email`, `communication`, `subject_communication`, `time_communication`, `date_communication`) VALUES
(1, '1', '2', '3', '', '4', '5'),
(2, '1', '2', '3', '', '4', '5'),
(3, '1', '2', '3', '', '4', '5'),
(4, '1', '2', '3', '', '4', '5'),
(5, '1', '2', '3', '', '4', '5'),
(6, '', '', '', '', '11:03:23PM', '1401/04/17'),
(7, 'علی زراعت', 'alizeraat7foo4@gmail.com', 'sdfghjklkjhgfd', '', '11:05:23PM', '1401/04/17'),
(8, 'علی زراعت', '09305151532', 'canada', 'ali', '11:08:35PM', '1401/04/17'),
(9, 'علی زراعت', '09122363163', 'مدیریت', 'سلام دایی', '11:10:01PM', '1401/04/17'),
(10, 'Eric Jones', 'ericjonesmyemail@gmail.com', 'پشتیبانی', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - pashaluxe.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – a', '12:19:28PM', '1401/06/02'),
(11, 'Eric Jones', 'ericjonesmyemail@gmail.com', 'ارسال کالا', 'My name’s Eric and I just found your site pashaluxe.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE https://boostleadgeneration.com for a live demo now.\r\n\r\nTalk With Web Visitor', '09:47:34AM', '1401/06/09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_user`
--

CREATE TABLE `tbl_email_user` (
  `id` int(255) NOT NULL,
  `email_user` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `date_email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `time_email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_email_user`
--

INSERT INTO `tbl_email_user` (`id`, `email_user`, `date_email`, `time_email`, `status`) VALUES
(70, 'alireze@gmail.com', '1', '', '1'),
(71, '', '1', '', '1'),
(72, '', '1', '', '1'),
(73, '', '1401/04/19', '12:00:30AM', '0'),
(74, '09305151532', '1401/04/19', '12:00:48AM', '0'),
(75, '09305151532', '1401/04/19', '12:01:59AM', '0'),
(76, '09305151532', '1401/04/19', '12:02:23AM', '0'),
(77, '', '1401/04/19', '02:04:03AM', '0'),
(78, '', '1401/04/19', '02:04:06AM', '0'),
(79, '', '1401/04/23', '11:34:56PM', '0'),
(80, '', '1401/04/23', '11:34:59PM', '0'),
(81, '', '1401/04/23', '11:35:00PM', '0'),
(82, '', '1401/04/23', '11:47:25PM', '0'),
(83, 'pppppp', '1401/04/24', '12:02:09AM', '0'),
(84, '09305151532', '1401/04/24', '12:03:03AM', '0'),
(85, 'ppkk', '1401/04/24', '12:20:54AM', '0'),
(86, 'ppkk', '1401/04/24', '12:21:47AM', '0'),
(87, '09305151532', '1401/04/24', '12:24:30AM', '0'),
(88, 'pppppp', '1401/04/24', '12:28:50AM', '0'),
(89, 'ppkk', '1401/04/24', '12:29:46AM', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorit`
--

CREATE TABLE `tbl_favorit` (
  `id` int(255) NOT NULL,
  `idproduct` int(255) NOT NULL,
  `userId` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `parent` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `date_favorite` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_favorit`
--

INSERT INTO `tbl_favorit` (`id`, `idproduct`, `userId`, `parent`, `title`, `date_favorite`) VALUES
(25, 73, '09034663885', 1, '1', '1401/04/11'),
(26, 76, '09013201877', 1, '1', '1401/04/12'),
(27, 79, '09013201877', 1, '1', '1401/04/12'),
(28, 73, '09122363163', 1, '1', '1401/04/13'),
(29, 79, '09305151532', 1, '1', '1401/04/17'),
(30, 76, '09305151532', 1, '1', '1401/04/29'),
(31, 76, '09305151532', 1, '1', '1401/04/29'),
(32, 79, '09305151532', 1, '1', '1401/05/04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `idproduct` int(255) NOT NULL,
  `threed` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `img`, `idproduct`, `threed`) VALUES
(44, '1661020201.jpg', 81, 0),
(45, '1661020224.jpg', 81, 0),
(46, '1661086569.JPG', 82, 0),
(50, '1661800231.jpg', 90, 0),
(51, '1661800238.jpg', 90, 0),
(52, '1661800244.jpg', 90, 0),
(53, '1661800409.jpg', 91, 0),
(54, '1661800414.jpg', 91, 0),
(55, '1661800421.jpg', 91, 0),
(56, '1661800484.jpg', 91, 0),
(57, '1661800499.jpg', 91, 0),
(58, '1661800503.jpg', 91, 0),
(59, '1661800509.jpg', 91, 0),
(60, '1661800734.jpg', 92, 0),
(61, '1661800738.jpg', 92, 0),
(62, '1661800742.jpg', 92, 0),
(63, '1661800898.jpg', 93, 0),
(64, '1661800904.jpg', 93, 0),
(65, '1661800910.jpg', 93, 0),
(66, '1661800917.jpg', 93, 0),
(67, '1661800947.jpg', 93, 0),
(68, '1661800954.jpg', 93, 0),
(69, '1661800961.jpg', 93, 0),
(70, '1661801077.jpg', 94, 0),
(71, '1661801084.jpg', 94, 0),
(72, '1661801091.jpg', 94, 0),
(73, '1661801323.jpg', 95, 0),
(74, '1661801330.jpg', 95, 0),
(75, '1661801336.jpg', 95, 0),
(76, '1661801458.jpg', 96, 0),
(77, '1661801466.jpg', 96, 0),
(78, '1661801473.jpg', 96, 0),
(79, '1661801481.jpg', 96, 0),
(80, '1661801487.jpg', 96, 0),
(81, '1661801494.jpg', 96, 0),
(82, '1661801645.jpg', 97, 0),
(83, '1661801654.jpg', 97, 0),
(84, '1661801668.jpg', 97, 0),
(85, '1661801678.jpg', 97, 0),
(86, '1661801689.jpg', 97, 0),
(87, '1661801806.jpg', 98, 0),
(88, '1661801811.jpg', 98, 0),
(89, '1661801817.jpg', 98, 0),
(90, '1661801827.jpg', 98, 0),
(91, '1661801839.jpg', 98, 0),
(92, '1661801919.jpg', 99, 0),
(93, '1661801923.jpg', 99, 0),
(94, '1661801929.jpg', 99, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_garantee`
--

CREATE TABLE `tbl_garantee` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_garantee`
--

INSERT INTO `tbl_garantee` (`id`, `title`) VALUES
(1, 'small'),
(2, 'medium'),
(3, 'large'),
(4, 'x-large'),
(5, 'xx-large'),
(6, 'xxx-large');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_let_me_know`
--

CREATE TABLE `tbl_let_me_know` (
  `id` int(255) NOT NULL,
  `Contacts` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Product_Name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Product_ID` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Date_of_Registration` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Follow_up` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_let_me_know`
--

INSERT INTO `tbl_let_me_know` (`id`, `Contacts`, `Product_Name`, `Product_ID`, `Date_of_Registration`, `Follow_up`) VALUES
(10, '09305151532', 'samsungseries7', '456274', '1400/02/15', 0),
(11, '09305151532', 'samsungseries7', '456274', '1400/02/15', 0),
(12, 'alizeraat74@gmail.com', 'samsungnote', '25555', '1400/02/15', 0),
(13, '09122002021', 'samsungseries7', '456274', '1400/02/17', 0),
(14, '09122005656', 'bag', '378798', '1401/02/08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(255) NOT NULL,
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `matn` text COLLATE utf8_persian_ci NOT NULL,
  `userId` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  `date` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `title`, `matn`, `userId`, `status`, `date`) VALUES
(1, 'آماده سازی سفارش', 'سفارش با شماره فاکتور 12334 به قسمت ارسال تحویل داده شد', 17, 1, '99/1/5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_naghd`
--

CREATE TABLE `tbl_naghd` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `idproduct` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_option`
--

CREATE TABLE `tbl_option` (
  `id` int(255) NOT NULL,
  `setting` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_option`
--

INSERT INTO `tbl_option` (`id`, `setting`, `value`) VALUES
(1, 'special_time', '1607018391\r\n'),
(2, 'limit_slider', '10'),
(3, 'tel', '09307543089'),
(4, 'email', 'info@pashaluxe.com'),
(5, 'mohlatPay', '32'),
(6, 'root', 'https://www.pashaluxe.com/'),
(7, 'zarinpalMID', '43ab0c5e-b332-45ea-8b48-6f5ae9b0db66'),
(8, 'body_color', 'D7D7D7'),
(9, 'menu_color', 'F1FFEE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(255) NOT NULL,
  `beforepay` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `afterpay` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `amount` int(255) NOT NULL,
  `family` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `reverse` int(255) NOT NULL,
  `ostan` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `code_posti` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `post_type` int(1) NOT NULL,
  `basket` text COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `delivery_time` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `delivery_day` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `more_details` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `post_price` int(255) NOT NULL,
  `userId` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `status` int(1) NOT NULL,
  `pay` int(1) NOT NULL,
  `pay_type` int(1) NOT NULL,
  `pay_day` int(10) NOT NULL,
  `pay_month` int(10) NOT NULL,
  `pay_year` int(10) NOT NULL,
  `pay_card` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `pay_bank_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `transaction_number` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `pay_hour` int(10) NOT NULL,
  `pay_minute` int(10) NOT NULL,
  `time_sabt` int(255) NOT NULL,
  `date` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `order_code` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tarikh` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `beforepay`, `afterpay`, `amount`, `family`, `reverse`, `ostan`, `city`, `code_posti`, `mobile`, `tel`, `post_type`, `basket`, `address`, `delivery_time`, `delivery_day`, `more_details`, `post_price`, `userId`, `status`, `pay`, `pay_type`, `pay_day`, `pay_month`, `pay_year`, `pay_card`, `pay_bank_name`, `transaction_number`, `pay_hour`, `pay_minute`, `time_sabt`, `date`, `barcode`, `order_code`, `code`, `tarikh`) VALUES
(142, '', '', 3960000, 'لیلا آسیابی', 0, 'گلستان', 'بندرگز', '6325141596', '09192855726', '0215577258', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"328\";s:2:\"id\";s:2:\"98\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:5:\"p-258\";s:5:\"price\";s:7:\"4500000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:56:\"<p>کاپشن مردانه برند پاندورا</p>\r\n\";s:12:\"tedad_mojood\";s:3:\"600\";s:8:\"discount\";s:2:\"12\";s:9:\"score_bon\";s:2:\"32\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"259396\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-10\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"3\";s:6:\"colors\";s:9:\"2,19,25,1\";s:8:\"garantee\";s:9:\"3,2,1,4,5\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:13:\"سرمه ای\";s:8:\"colorHex\";s:7:\"#00008b\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:540000;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'پنج شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661968580, '', '', '284283', '', '1401/06/09'),
(143, '', '', 3960000, 'لیلا آسیابی', 0, 'گلستان', 'بندرگز', '6325141596', '09192855726', '0215577258', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"328\";s:2:\"id\";s:2:\"98\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:5:\"p-258\";s:5:\"price\";s:7:\"4500000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:56:\"<p>کاپشن مردانه برند پاندورا</p>\r\n\";s:12:\"tedad_mojood\";s:3:\"600\";s:8:\"discount\";s:2:\"12\";s:9:\"score_bon\";s:2:\"32\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"259396\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-10\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"3\";s:6:\"colors\";s:9:\"2,19,25,1\";s:8:\"garantee\";s:9:\"3,2,1,4,5\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:13:\"سرمه ای\";s:8:\"colorHex\";s:7:\"#00008b\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:540000;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'دوشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661968722, '', '', '1235034', '', '1401/06/09'),
(144, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"329\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"6\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'یکشنبه', '', 1, '09305151532', 1, 0, 4, 4, 4, 1401, '6037,9915,5269,4555', '96558', '632541566668', 18, 1, 1661969049, '', '', '1806355', '', '1401/06/09'),
(145, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"330\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"7\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'دوشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661972199, '', '', '1883938', '', '1401/06/09'),
(146, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"330\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"7\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۸ الی ۲۱', 'یکشنبه', '', 1, '09305151532', 1, 0, 4, 3, 3, 1401, '9666,6666,6666,6666', '44444444444444', '12659855', 19, 1, 1661972617, '', '', '1226062', '', '1401/06/09'),
(147, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"331\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"8\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661972685, '', '', '716964', '', '1401/06/09'),
(148, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"331\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"8\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۵ الی ۱۸', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661973394, '', '', '2360923', '', '1401/06/09'),
(149, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"331\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"8\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661973570, '', '', '743478', '', '1401/06/09'),
(150, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"331\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"0\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"8\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1661973628, '', '', '633370', '', '1401/06/09'),
(151, '', '', 19600, 'مهردادحسن زاده مرنی', 0, 'تهران', 'تهران', '9652149996', '09305151532', '0216655789', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"332\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:1:\"9\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ مالک اشتر کوچه نوری زادگان پلاک 28 ط دوم واحد دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09034663885', 1, 0, 4, 1, 3, 1401, '9666,6666,6666,6666', '44444444', '456925156256662255', 0, 1, 1662053373, '', '', '57694', '', '1401/06/10'),
(152, '', '', 19600, 'مهردادحسن زاده مرنی', 0, 'تهران', 'تهران', '9652149996', '09305151532', '0216655789', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"333\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"10\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ مالک اشتر کوچه نوری زادگان پلاک 28 ط دوم واحد دوم', 'بین ۹ الی ۱۲', 'دوشنبه', '', 1, '09034663885', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662054273, '', '', '1889304', '', '1401/06/10'),
(153, '', '', 19600, 'مهردادحسن زاده مرنی', 0, 'تهران', 'تهران', '9652149996', '09305151532', '0216655789', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"334\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"12\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ مالک اشتر کوچه نوری زادگان پلاک 28 ط دوم واحد دوم', 'بین ۱۸ الی ۲۱', 'یکشنبه', '', 1, '09034663885', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662056821, '', '', '1597095', '', '1401/06/10'),
(154, '', '', 19600, 'مهردادحسن زاده مرنی', 0, 'تهران', 'تهران', '9652149996', '09305151532', '0216655789', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"335\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"14\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ مالک اشتر کوچه نوری زادگان پلاک 28 ط دوم واحد دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09034663885', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662057727, '', '', '1550450', '', '1401/06/10'),
(155, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"337\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"15\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662062152, '', '', '464946', '', '1401/06/11'),
(156, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"338\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"16\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"small\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662063170, '', '', '907731', '', '1401/06/11'),
(157, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"339\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"18\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"large\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662063875, '', '', '2046339', '', '1401/06/11'),
(158, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"340\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"21\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662106492, '', '', '2360217', '', '1401/06/11'),
(159, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"340\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"21\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662106621, '', '', '1600419', '', '1401/06/11'),
(160, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"340\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"23\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662107595, '', '', '2245910', '', '1401/06/11'),
(161, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"341\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"24\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۵ الی ۱۸', 'دوشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662226792, '', '', '2554803', '', '1401/06/12'),
(162, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"341\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"24\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'دوشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662227252, '', '', '1563092', '', '1401/06/12'),
(163, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"341\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"24\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662229475, '', '', '2139284', '', '1401/06/12'),
(164, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"341\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"24\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۵ الی ۱۸', 'شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662229755, '', '', '1195179', '', '1401/06/12'),
(165, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"341\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"24\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'سه شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662229770, '', '', '1625062', '', '1401/06/12'),
(166, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"342\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"26\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"large\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۲ الی ۱۵', 'دوشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662231579, '', '', '1643610', '', '1401/06/12'),
(167, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"342\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"26\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"large\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۹ الی ۱۲', 'یکشنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662231627, '', '', '2566845', '', '1401/06/12'),
(168, '', '', 19600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:1:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"342\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"26\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"large\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۵ الی ۱۸', 'سه شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662231887, '', '', '1084950', '', '1401/06/12'),
(169, 'A00000000000000000000000000374021107', '', 11089600, 'لیلا آسیابی', 0, 'تهران', 'تهران', '6325141596', '09305151532', '02166', 1, 'a:2:{i:0;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"343\";s:2:\"id\";s:2:\"90\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"jacket\";s:5:\"price\";s:8:\"12300000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:132:\"<p>کاپشن مردانه برند پاندورا</p>\r\n\r\n<p>دوخت شیک وزیبا با مرغوب ترین جنس چرم</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:2:\"10\";s:9:\"score_bon\";s:2:\"23\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"401192\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-10\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"14\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:9:\"1,2,3,4,5\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:0:\"\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:6:\"medium\";s:13:\"discountTotal\";i:1230000;}i:1;a:28:{s:5:\"tedad\";s:1:\"1\";s:9:\"basketRow\";s:3:\"342\";s:2:\"id\";s:2:\"92\";s:5:\"title\";s:23:\"کاپشن مردانه\";s:11:\"latin_title\";s:6:\"px-156\";s:5:\"price\";s:5:\"20000\";s:3:\"cat\";s:2:\"74\";s:12:\"introduction\";s:32:\"<p>کاپشن مردانه</p>\r\n\";s:12:\"tedad_mojood\";s:4:\"1000\";s:8:\"discount\";s:1:\"2\";s:9:\"score_bon\";s:1:\"6\";s:5:\"brand\";s:14:\"پاندورا\";s:12:\"code_product\";s:6:\"399918\";s:7:\"special\";s:1:\"1\";s:12:\"time_special\";s:10:\"2022-09-02\";s:11:\"only_myshop\";s:1:\"1\";s:6:\"seller\";s:16:\"پاشالوکس\";s:16:\"Product_location\";s:1:\"1\";s:7:\"Absence\";s:1:\"0\";s:5:\"viewd\";s:2:\"27\";s:6:\"colors\";s:1:\"2\";s:8:\"garantee\";s:7:\"1,2,3,4\";s:10:\"idcategory\";s:1:\"0\";s:6:\"weight\";s:1:\"0\";s:10:\"colorTitle\";s:8:\"مشکی\";s:8:\"colorHex\";s:7:\"#000000\";s:13:\"garanteeTitle\";s:5:\"large\";s:13:\"discountTotal\";i:400;}}', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', 'بین ۱۵ الی ۱۸', 'شنبه', '', 1, '09305151532', 1, 0, 1, 0, 0, 0, '', '', '', 0, 0, 1662233448, '', '', '2299691', '', '1401/06/13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_status`
--

CREATE TABLE `tbl_order_status` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_order_status`
--

INSERT INTO `tbl_order_status` (`id`, `title`) VALUES
(1, 'در انتظار تایید'),
(2, 'تایید شده'),
(3, 'در انتظار پرداخت'),
(4, 'پرداخت شده'),
(5, 'در حال پردازش انبار'),
(6, 'آماده ارسال'),
(7, 'ارسال شده');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_type`
--

CREATE TABLE `tbl_pay_type` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_pay_type`
--

INSERT INTO `tbl_pay_type` (`id`, `title`) VALUES
(1, 'زرین پال'),
(2, 'ملت'),
(3, 'سامان'),
(4, 'کارت به کارت');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_picture`
--

CREATE TABLE `tbl_picture` (
  `id` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `name_alt` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `place_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_picture`
--

INSERT INTO `tbl_picture` (`id`, `img`, `link`, `name_alt`, `place_image`) VALUES
(21, 'banner', '', 'public/images/picture/1661103098.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_type`
--

CREATE TABLE `tbl_post_type` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_post_type`
--

INSERT INTO `tbl_post_type` (`id`, `title`, `price`, `description`) VALUES
(3, 'پست توسط خود فروشگاه', '10000', 'ارسال توسط شرکت پاشالوکس بین 8 الی 48 ساعت با هزینه رایگان انجام میپذیرد.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `latin_title` varchar(255) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `cat` int(255) NOT NULL,
  `introduction` text CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `tedad_mojood` int(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `score_bon` int(50) NOT NULL,
  `brand` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `code_product` int(255) NOT NULL,
  `special` int(11) NOT NULL,
  `time_special` date NOT NULL,
  `only_myshop` int(1) NOT NULL,
  `seller` varchar(255) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `Product_location` varchar(10) CHARACTER SET utf32 COLLATE utf32_persian_ci DEFAULT NULL,
  `Absence` varchar(10) CHARACTER SET utf32 COLLATE utf32_persian_ci DEFAULT NULL,
  `viewd` bigint(255) NOT NULL,
  `colors` varchar(255) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `garantee` varchar(255) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `idcategory` int(255) NOT NULL,
  `weight` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `latin_title`, `price`, `cat`, `introduction`, `tedad_mojood`, `discount`, `score_bon`, `brand`, `code_product`, `special`, `time_special`, `only_myshop`, `seller`, `Product_location`, `Absence`, `viewd`, `colors`, `garantee`, `idcategory`, `weight`) VALUES
(90, 'کاپشن مردانه', 'jacket', '12300000', 74, '<p>کاپشن مردانه برند پاندورا</p>\r\n\r\n<p>دوخت شیک وزیبا با مرغوب ترین جنس چرم</p>\r\n', 1000, 10, 23, 'پاندورا', 401192, 1, '2022-09-10', 1, 'پاشالوکس', '1', '0', 17, '2', '1,2,3,4,5', 0, ''),
(91, 'کاپشن مردانه', 'p-120', '5700000', 74, '<p>کاپشن مردانه برند پاندورا جنس چرم طبیعی</p>\r\n\r\n<p>با دوخت منحصر به فرد</p>\r\n', 1000, 10, 10, 'پاندورا', 827362, 1, '2022-09-10', 1, 'پاشالوکس', '1', '0', 5, '2,1', '1,2,3,4', 0, '0'),
(92, 'کاپشن مردانه', 'px-156', '20000', 74, '<p>کاپشن مردانه</p>\r\n', 1000, 2, 6, 'پاندورا', 399918, 1, '2022-09-02', 1, 'پاشالوکس', '1', '0', 27, '2', '1,2,3,4', 0, '0'),
(93, 'کاپشن مردانه', 'p-86', '7900000', 74, '<p>کاپشن مردانه</p>\r\n', 1000, 23, 6, 'پاندورا', 399032, 1, '0000-00-00', 1, 'پاشالوکس', '1', '0', 7, '2,1', '1,2,4,5', 0, '0'),
(94, 'کاپشن مردانه', 'p-63', '7000000', 74, '<p>کاپشن مردانه برند پاندورا</p>\r\n', 1000, 8, 32, 'پاندورا', 110991, 1, '2022-09-03', 1, 'پاشالوکس', '1', '0', 0, '2', '1,2,3,4', 0, '0'),
(95, 'کاپشن مردانه', 'p-632', '9100000', 74, '<p>کاپشن مردانه</p>\r\n', 10000, 10, 23, 'پاندورا', 528411, 1, '2022-09-08', 1, 'پاشالوکس', '1', '0', 1, '19', '3,4,5,6', 0, '0'),
(96, 'کاپشن مردانه', 'p-639', '8600000', 0, '<p>کاپشن مردانه</p>\r\n', 10000, 10, 21, 'پاندورا', 880659, 1, '2022-09-10', 1, 'پاشالوکس', '1', '0', 0, '2,1', '3,2,5', 0, '0'),
(97, 'کاپشن مردانه', 'p-325', '6800000', 74, '<p>کاپشن زیبای برند پاندورا</p>\r\n', 633, 15, 12, 'پاندورا', 648377, 1, '2022-09-02', 1, 'پاشالوکس', '1', '0', 0, '1,2', '1,2,3', 0, '0'),
(98, 'کاپشن مردانه', 'p-258', '4500000', 74, '<p>کاپشن مردانه برند پاندورا</p>\r\n', 600, 12, 32, 'پاندورا', 259396, 1, '2022-09-10', 1, 'پاشالوکس', '1', '0', 3, '2,19,25,1', '3,2,1,4,5', 0, '0'),
(99, 'کاپشن مردانه', 'p-963', '7900000', 74, '<p>کاپشن مردانه زیبا</p>\r\n\r\n<p>برند پاندورا</p>\r\n', 150, 30, 12, 'پاندورا', 789243, 0, '0000-00-00', 1, 'پاشالوکس', '0', '0', 0, '2', '3,4,5,6', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_attr`
--

CREATE TABLE `tbl_product_attr` (
  `id` int(255) NOT NULL,
  `idproduct` int(255) NOT NULL,
  `idattr` int(255) NOT NULL,
  `idval` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_product_attr`
--

INSERT INTO `tbl_product_attr` (`id`, `idproduct`, `idattr`, `idval`) VALUES
(28, 9, 1, 1),
(29, 10, 77, 43),
(46, 10, 145, 60),
(47, 10, 146, 61),
(48, 10, 79, 46),
(49, 10, 80, 62),
(50, 10, 81, 63),
(51, 10, 82, 64),
(52, 10, 83, 65),
(53, 10, 84, 66),
(54, 10, 85, 67),
(55, 10, 86, 68),
(56, 10, 88, 69),
(57, 10, 89, 70),
(58, 10, 90, 71),
(59, 10, 91, 72),
(60, 10, 92, 73),
(61, 10, 94, 74),
(62, 10, 95, 75),
(63, 10, 96, 76),
(64, 10, 99, 77),
(65, 10, 100, 78),
(66, 10, 101, 79),
(67, 10, 102, 80),
(68, 10, 103, 81),
(69, 10, 104, 82),
(70, 10, 105, 83),
(71, 10, 106, 84),
(72, 10, 107, 85),
(73, 10, 108, 86),
(74, 10, 110, 87),
(75, 10, 111, 88),
(76, 10, 112, 89),
(77, 10, 113, 90),
(78, 10, 114, 91),
(79, 10, 115, 92),
(80, 10, 116, 93),
(81, 10, 117, 94),
(82, 10, 118, 95),
(83, 10, 119, 96),
(84, 10, 121, 97),
(85, 10, 122, 98),
(86, 10, 123, 99),
(87, 10, 124, 100),
(88, 10, 125, 101),
(89, 10, 127, 102),
(90, 10, 128, 103),
(91, 10, 130, 104),
(92, 10, 131, 105),
(93, 10, 132, 106),
(94, 10, 133, 107),
(95, 10, 134, 108),
(96, 10, 135, 109),
(97, 10, 138, 111),
(98, 10, 139, 110),
(99, 10, 140, 112),
(100, 10, 141, 113),
(101, 10, 142, 114),
(114, 61, 168, 125),
(115, 61, 169, 122),
(116, 61, 170, 126),
(117, 61, 171, 130),
(120, 69, 161, 147),
(121, 79, 175, 170),
(122, 79, 177, 173),
(124, 75, 83, 65),
(125, 75, 84, 66),
(126, 75, 85, 67),
(129, 75, 82, 183),
(130, 75, 178, 190),
(131, 75, 179, 193),
(132, 75, 180, 197);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(255) NOT NULL,
  `text_question` text COLLATE utf8_persian_ci NOT NULL,
  `answer_question` text COLLATE utf8_persian_ci,
  `date_question` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `time_question` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `parent` int(255) NOT NULL,
  `idproduct` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `text_question`, `answer_question`, `date_question`, `time_question`, `userid`, `parent`, `idproduct`) VALUES
(14, '\r\nkhobi', 'سلام بله یک سال', '1401/03/18', '08:35:33PM', 'کاربر مهمان', 30, 76),
(30, 'سلام محصول شما گارانتی دارد؟', NULL, '1401/04/11', '10:48:54PM', '09034663885', 0, 73),
(40, '', 'سلام بله یک سالی است', '1401/04/12', '10:08:48PM', 'مدیریت', 55, 0),
(41, 'سلام سایز دارد؟', NULL, '1401/04/12', '10:17:13PM', '09013201877', 0, 76),
(42, '', 'چه سایزی؟', '1401/04/12', '10:17:46PM', 'مدیریت', 41, 0),
(43, 'سلام\r\nجنس کیف چرم طبیعی است؟', NULL, '1401/04/12', '10:27:29PM', '09013201877', 0, 79),
(44, '', 'سلام بله قابل مرجوع هم میباشد', '1401/04/12', '10:28:00PM', 'مدیریت', 43, 0),
(45, 'jkkkkkkkkkkkkk', NULL, '1401/04/13', '09:57:49PM', 'کاربر مهمان', 0, 74),
(46, 'سلام خوبی', NULL, '1401/04/13', '09:58:32PM', 'کاربر مهمان', 0, 74),
(47, '', NULL, '1401/04/13', '09:59:47PM', 'کاربر مهمان', 0, 74),
(48, 'oooooooooooooooo', NULL, '1401/04/13', '10:00:31PM', 'کاربر مهمان', 0, 74),
(49, 'ooooooooooooooooooooooooooooooooooooooooooooookk', NULL, '1401/04/27', '03:58:55PM', 'کاربر مهمان', 0, 74),
(50, '', NULL, '1401/04/27', '03:59:16PM', 'کاربر مهمان', 0, 74),
(51, 'salam', NULL, '1401/05/04', '10:51:37PM', '9305151482', 0, 79),
(52, 'salar', NULL, '1401/05/04', '10:52:35PM', '9305142532', 0, 79),
(53, 'diva', NULL, '1401/05/04', '10:53:08PM', '9305051533', 0, 79);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `sms_code` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `date_register` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `time_register` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `user_ip` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `user_id`, `phone_number`, `sms_code`, `date_register`, `time_register`, `user_ip`, `status`) VALUES
(30, '2192', '09305151532', '8696', '1401/03/03', '10:48:14PM', '127.0.0.1', '1'),
(31, '8710', '09305151532', '5328', '1401/03/03', '11:13:06PM', '127.0.0.1', '1'),
(32, '3213', '09190191452', '4886', '1401/03/03', '11:15:15PM', '127.0.0.1', '0'),
(33, '9881', '09034663885', '4532', '1401/03/03', '11:16:56PM', '127.0.0.1', '1'),
(34, '3445', '09034663885', '7995', '1401/03/03', '11:18:24PM', '127.0.0.1', '1'),
(35, '4717', '09305151532', '1417', '1401/03/04', '12:07:25AM', '127.0.0.1', '1'),
(36, '2387', '09190191452', '4459', '1401/03/04', '12:26:33AM', '127.0.0.1', '0'),
(37, '8649', '09305151532', '1822', '1401/03/04', '12:30:21AM', '127.0.0.1', '1'),
(38, '4318', '09305151532', '4749', '1401/03/04', '12:35:10AM', '127.0.0.1', '1'),
(39, '7599', '09305151532', '6264', '1401/03/04', '12:44:32AM', '127.0.0.1', '1'),
(40, '8974', '09305151532', '9176', '1401/03/04', '11:52:07PM', '127.0.0.1', '1'),
(41, '3', '09305151532', '3625', '1401/03/05', '12:03:53AM', '127.0.0.1', '1'),
(42, '7827', '09305151532', '7079', '1401/03/05', '12:09:40AM', '127.0.0.1', '1'),
(43, '2540', '09305151532', '8559', '1401/03/05', '12:13:34AM', '127.0.0.1', '1'),
(44, '8853', '09305151532', '8533', '1401/03/05', '12:33:51AM', '127.0.0.1', '1'),
(45, '7161', '09305151532', '2947', '1401/03/05', '12:44:36AM', '127.0.0.1', '1'),
(46, '6627', '09305151532', '7590', '1401/03/09', '12:12:08PM', '127.0.0.1', '1'),
(47, '9184', '09305151532', '9125', '1401/03/09', '02:59:08PM', '127.0.0.1', '1'),
(48, '6390', '09305151532', '8906', '1401/03/09', '04:40:06PM', '127.0.0.1', '1'),
(49, '7905', '09305151532', '731', '1401/03/15', '11:15:59PM', '127.0.0.1', '1'),
(50, '1291', '09305151532', '5525', '1401/03/18', '09:59:26PM', '127.0.0.1', '1'),
(51, '4048', '09305151532', '3029', '1401/03/18', '10:51:15PM', '127.0.0.1', '1'),
(52, '5321', '09013201877', '928', '1401/03/19', '12:07:54AM', '127.0.0.1', '1'),
(53, '4568', '09121016997', '5541', '1401/03/19', '10:32:54PM', '127.0.0.1', '1'),
(54, '8974', '09305151532', '3204', '1401/03/21', '10:20:49PM', '127.0.0.1', '0'),
(55, '3560', '', '8054', '1401/03/25', '10:17:18PM', '127.0.0.1', '0'),
(56, '2648', '', '1731', '1401/03/25', '10:25:06PM', '127.0.0.1', '1'),
(57, '5487', '', '6881', '1401/03/25', '10:25:37PM', '127.0.0.1', '0'),
(58, '3239', '', '3950', '1401/03/25', '10:25:49PM', '127.0.0.1', '0'),
(59, '5661', '05633', '771', '1401/03/25', '10:29:02PM', '127.0.0.1', '0'),
(60, '2396', '09305151532', '6588', '1401/03/25', '10:32:02PM', '127.0.0.1', '0'),
(61, '4859', '09305151532', '2024', '1401/03/25', '11:08:36PM', '127.0.0.1', '1'),
(62, '1402', '09305151532', '7913', '1401/03/25', '11:42:54PM', '127.0.0.1', '1'),
(63, '1458', '09305151532', '3425', '1401/03/31', '12:39:01AM', '127.0.0.1', '1'),
(64, '4832', '09305151532', '2039', '1401/03/31', '12:43:20AM', '127.0.0.1', '1'),
(65, '4387', '09305151532', '2198', '1401/04/01', '10:34:50PM', '127.0.0.1', '1'),
(66, '8782', '09305151532', '138', '1401/04/05', '12:19:43AM', '127.0.0.1', '1'),
(67, '4050', '09305151532', '385', '1401/04/07', '09:44:43PM', '127.0.0.1', '1'),
(68, '4634', '09305151532', '2156', '1401/04/10', '02:55:08PM', '127.0.0.1', '1'),
(69, '6359', '09034663885', '5729', '1401/04/11', '09:55:24PM', '127.0.0.1', '1'),
(70, '9165', '09013201877', '4473', '1401/04/12', '10:16:05PM', '127.0.0.1', '0'),
(71, '2648', '09013201877', '1607', '1401/04/12', '10:16:15PM', '127.0.0.1', '1'),
(72, '5730', '09122363163', '1811', '1401/04/13', '12:41:17AM', '127.0.0.1', '1'),
(73, '4948', '09305151532', '9254', '1401/04/13', '10:18:38PM', '127.0.0.1', '1'),
(74, '5056', '09305151532', '5950', '1401/04/16', '11:50:44PM', '127.0.0.1', '1'),
(75, '3050', '09305151532', '6673', '1401/04/19', '01:24:11AM', '127.0.0.1', '1'),
(76, '1229', '09305151532', '3269', '1401/04/19', '02:36:51PM', '127.0.0.1', '1'),
(77, '5227', '09122363163', '1835', '1401/04/19', '05:16:16PM', '127.0.0.1', '1'),
(78, '2274', '09305151532', '9378', '1401/04/19', '10:18:50PM', '127.0.0.1', '1'),
(79, '2613', '09305151532', '3273', '1401/04/22', '10:33:03PM', '127.0.0.1', '1'),
(80, '6207', '09305151532', '5021', '1401/04/27', '02:27:20PM', '127.0.0.1', '1'),
(81, '2859', '09305151532', '5140', '1401/04/28', '12:27:34AM', '127.0.0.1', '1'),
(82, '4086', '09305151532', '4637', '1401/04/28', '10:36:32PM', '127.0.0.1', '1'),
(83, '1017', '09305151532', '8588', '1401/04/29', '09:56:26PM', '127.0.0.1', '1'),
(84, '5167', '09305151532', '3513', '1401/04/29', '11:36:09PM', '127.0.0.1', '1'),
(85, '5181', '09305151532', '4169', '1401/04/29', '11:49:52PM', '127.0.0.1', '1'),
(86, '2983', '09305151532', '7954', '1401/04/30', '10:31:24PM', '127.0.0.1', '1'),
(87, '702', '09305151532', '6882', '1401/05/02', '12:09:48AM', '127.0.0.1', '1'),
(88, '5216', '09305151532', '5753', '1401/05/02', '10:52:13PM', '127.0.0.1', '1'),
(89, '8219', '09305151532', '5314', '1401/05/03', '10:58:34PM', '127.0.0.1', '1'),
(90, '926', '09305151532', '3644', '1401/05/04', '10:50:38PM', '127.0.0.1', '1'),
(91, '7093', '09305151532', '5467', '1401/05/12', '11:31:56PM', '127.0.0.1', '1'),
(92, '5245', '09305151532', '8421', '1401/05/29', '11:08:00PM', '5.114.250.44', '1'),
(93, '6207', '09010210696', '4673', '1401/05/30', '10:28:09AM', '80.210.57.183', '1'),
(94, '8964', '09305151532', '4775', '1401/06/09', '09:49:28PM', '5.113.20.238', '1'),
(95, '6251', '09034663885', '8788', '1401/06/10', '09:59:00PM', '5.113.237.61', '1'),
(96, '6379', '09305151532', '3150', '1401/06/11', '12:25:23AM', '5.113.237.61', '1'),
(97, '9626', '09305151532', '1442', '1401/06/11', '12:41:48AM', '5.113.237.61', '1'),
(98, '2411', '09305151532', '5728', '1401/06/11', '12:54:09AM', '5.113.237.61', '1'),
(99, '6605', '09305151532', '3307', '1401/06/11', '12:44:25PM', '5.113.237.61', '1'),
(100, '1615', '09305151532', '9502', '1401/06/12', '10:09:21PM', '5.113.237.61', '1'),
(101, '3325', '09305151532', '1863', '1401/06/12', '11:29:10PM', '5.113.237.61', '1'),
(102, '3687', '09305151532', '3063', '1401/06/12', '11:34:23PM', '5.113.237.61', '1'),
(103, '8790', '09305151532', '6922', '1401/06/12', '11:47:39PM', '5.113.237.61', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_screenshots`
--

CREATE TABLE `tbl_screenshots` (
  `id` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `name_alt` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `place_image` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sidebar`
--

CREATE TABLE `tbl_sidebar` (
  `id` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `name_alt` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_sidebar`
--

INSERT INTO `tbl_sidebar` (`id`, `img`, `link`, `name_alt`) VALUES
(15, 'pashaluxe-پاشالوکس', '', 'public/images/picture/1661755728.jpg'),
(16, 'کاپشن مردانه', '', 'public/images/picture/1661755751.jpg'),
(17, 'کاپشن مردانه', '', 'public/images/picture/1661755767.jpg'),
(18, '', '', 'public/images/picture/1661755778.jpg'),
(19, 'pashaluxe-پاشالوکس', '', 'public/images/picture/1661755796.jpg'),
(20, 'کاپشن مردانه', '', 'public/images/picture/1661755819.jpg'),
(21, 'کاپشن مردانه', '', 'public/images/picture/1661755838.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider1`
--

CREATE TABLE `tbl_slider1` (
  `id` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_slider1`
--

INSERT INTO `tbl_slider1` (`id`, `img`, `link`, `title`) VALUES
(18, 'public/images/slider/1661754076.jpg', '', 'ارسال رایگان'),
(19, 'public/images/slider/1661754113.jpg', '', 'ست هدیه'),
(20, 'public/images/slider/1661754170.jpg', '', 'کیف و کفش'),
(21, 'public/images/slider/1661754201.jpg', '', 'کاپشن'),
(22, 'public/images/slider/1661754253.jpg', '', 'کادویی');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `code_meli` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `tavalod` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `jensiat` int(1) NOT NULL,
  `khabarname` int(1) NOT NULL,
  `level` int(1) NOT NULL,
  `user_device_info` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `date_register` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `cart_number` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `family`, `code_meli`, `tel`, `mobile`, `tavalod`, `address`, `jensiat`, `khabarname`, `level`, `user_device_info`, `user_id`, `date_register`, `cart_number`, `bank_name`) VALUES
(96, '09305151532', '378', 'علی زراعت', '2790543321', '0215577258', '09192855726', '1365/5/5', 'تهران', 1, 1, 0, '', 9674, '1401/02/18', '5022291059505474', 'پاسارگاد'),
(107, '09034663885', '4532', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', 9881, '1401/03/03', '', ''),
(127, '09013201877', '928', '', '', '', '', '', '', 0, 0, 0, '', 5321, '1401/03/19', '', ''),
(128, '09121016997', '5541', 'کاوه بخشعلی پور', '2790426538', '0216655789', '09305151532', '1374/9/10', 'تهران-بازارتهران-بازارزرگرها-پاساژگلدسنتر ط۳ پلاک۱۴', 1, 1, 0, '', 4568, '1401/03/19', '5022291059505474', 'پاسارگاد'),
(139, '09122363163', '1811', '', '', '', '', '', '', 0, 0, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0) Gecko/20100101 Firefox/102.0', 5730, '1401/04/13', '', ''),
(160, '09010210696', '4673', '', '', '', '', '', '', 0, 0, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0) Gecko/20100101 Firefox/103.0', 6207, '1401/05/30', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_address`
--

CREATE TABLE `tbl_user_address` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `ostan` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mahale` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `codeposti` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `ostan_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_user_address`
--

INSERT INTO `tbl_user_address` (`id`, `userid`, `family`, `mobile`, `tel`, `ostan`, `city`, `mahale`, `address`, `codeposti`, `ostan_name`, `city_name`) VALUES
(81, '39', 'صادق زراعت کار', '09212859757', '', '27', '6941', 'اقدسیه', 'xdfghjkl;', '6+66+', 'ايلام', 'ایوان'),
(82, '40', 'علی زراعت', '0936', '555', '3', '53581', 'ghfd', 'fghhjhjghfd', '1569695', 'آذربايجان شرقي', 'اسکو - ایلخچی'),
(84, '40', 'علی زراعت', '9999999999', '55555555', '6', '8481', 'hjkp', 'hnjkl', '69696', 'اصفهان', 'اصفهان- مبارکه'),
(85, '41', 'علی زراعت', '69633', '55555', '3', '53761', 'bhjk', 'hjkl', '5555', 'آذربايجان شرقي', 'آذرشهر - گوگان'),
(87, '44', 'علی زراعت', '', '', '-1', '', '', '', '', 'لطفا استان خود را انتخاب کنيد', '\n                        انتخاب شهر\n                    '),
(91, '09013201877', 'علی زراعت', '09125002626', '55577259', '1', '1', 'بازار', 'بازار تهران', '1212136999', 'تهران', 'تهران'),
(93, '09121016997', 'کاوه ', '09192855726', '0215577258', '19', '6741', 'آزادی', 'میدان آزادی سالار', '6365452056', 'كرمانشاه', 'کرمانشاه-کنگاور'),
(111, '09034663885', 'مهردادحسن زاده مرنی', '09305151532', '0216655789', '1', '1', 'مالک اشتر', 'خ مالک اشتر کوچه نوری زادگان پلاک 28 ط دوم واحد دوم', '9652149996', 'تهران', 'تهران'),
(113, '09122363163', 'سارابهمنی', '09165662547', '02155577253', '20', '681', 'سنگلج', 'خیابان هرمزان نرسیده بی سی متری جی سمت چپ پلاک 24 طبقه سوم واحد6', '6325479652', 'لرستان', 'خرم آباد'),
(115, '09305151532', 'لیلا آسیابی', '09305151532', '02166', '1', '1', 'سیروان', 'خ گلستان کوچه اخوان پلاک 28 طبقه دوم', '6325141596', 'تهران', 'تهران'),
(116, '09010210696', 'فاطمه مشکانی', '09010210696', '', '1', '1', 'میدان خراسان', 'میدان شهدا ', '4525236411', 'تهران', 'تهران');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id`, `title`) VALUES
(1, 'مدیر اصلی'),
(2, 'کارمند'),
(3, 'کارآموز');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attr`
--
ALTER TABLE `tbl_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attr_val`
--
ALTER TABLE `tbl_attr_val`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_basket`
--
ALTER TABLE `tbl_basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_code`
--
ALTER TABLE `tbl_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment_param`
--
ALTER TABLE `tbl_comment_param`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_user`
--
ALTER TABLE `tbl_email_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_favorit`
--
ALTER TABLE `tbl_favorit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_garantee`
--
ALTER TABLE `tbl_garantee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_let_me_know`
--
ALTER TABLE `tbl_let_me_know`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_naghd`
--
ALTER TABLE `tbl_naghd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_option`
--
ALTER TABLE `tbl_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pay_type`
--
ALTER TABLE `tbl_pay_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_picture`
--
ALTER TABLE `tbl_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_type`
--
ALTER TABLE `tbl_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `tbl_product_attr`
--
ALTER TABLE `tbl_product_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_screenshots`
--
ALTER TABLE `tbl_screenshots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sidebar`
--
ALTER TABLE `tbl_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider1`
--
ALTER TABLE `tbl_slider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_attr`
--
ALTER TABLE `tbl_attr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `tbl_attr_val`
--
ALTER TABLE `tbl_attr_val`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `tbl_basket`
--
ALTER TABLE `tbl_basket`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_code`
--
ALTER TABLE `tbl_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_comment_param`
--
ALTER TABLE `tbl_comment_param`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_email_user`
--
ALTER TABLE `tbl_email_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tbl_favorit`
--
ALTER TABLE `tbl_favorit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_garantee`
--
ALTER TABLE `tbl_garantee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_let_me_know`
--
ALTER TABLE `tbl_let_me_know`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_naghd`
--
ALTER TABLE `tbl_naghd`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_option`
--
ALTER TABLE `tbl_option`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pay_type`
--
ALTER TABLE `tbl_pay_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_picture`
--
ALTER TABLE `tbl_picture`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_post_type`
--
ALTER TABLE `tbl_post_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_product_attr`
--
ALTER TABLE `tbl_product_attr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_screenshots`
--
ALTER TABLE `tbl_screenshots`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sidebar`
--
ALTER TABLE `tbl_sidebar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_slider1`
--
ALTER TABLE `tbl_slider1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
