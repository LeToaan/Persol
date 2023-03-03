-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 04:50 PM
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
-- Database: `persol`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `name_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_account` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_account` tinyint(4) NOT NULL DEFAULT 0,
  `image_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank_account` tinyint(4) DEFAULT 3,
  `dob_account` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `token` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name_account`, `username_account`, `adress_account`, `email_account`, `pass_account`, `phone_account`, `gender_account`, `image_account`, `rank_account`, `dob_account`, `status`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Huỳnh Tiến Thăng', 'metlam', 'ko vui lắm', 'hay@gmail.com', '$2y$10$EPyuysHhLmZ53uJTuU3hVerYUdvCDQC.U8m5Vxsd718.zTXypox26', '0947568784', 1, '1658813968.png', 3, '2022-07-12', 1, NULL, NULL, '2022-07-22 05:27:00', '2022-07-22 05:27:00'),
(25, 'Super admin', 'superadmin', NULL, 'thaitoan553@gmail.com', '$2y$10$3hibX97v4uKwEo34I4cYCOpjAnCkV.lI60LQHm6zoyYtJMdXc7qum', '0329011622', 0, NULL, 1, '2003-09-27', 1, NULL, NULL, '2022-08-01 07:55:44', '2022-08-01 07:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `account_garbage`
--

CREATE TABLE `account_garbage` (
  `id` int(10) NOT NULL,
  `name_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_account` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_account` tinyint(4) NOT NULL,
  `image_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank_account` tinyint(4) DEFAULT 3,
  `dob_account` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `token` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `delete_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_garbage`
--

INSERT INTO `account_garbage` (`id`, `name_account`, `username_account`, `adress_account`, `email_account`, `pass_account`, `phone_account`, `gender_account`, `image_account`, `rank_account`, `dob_account`, `status`, `token`, `remember_token`, `created_at`, `updated_at`, `delete_at`) VALUES
(15, 'safsadfsa', '1234556', NULL, '', '', NULL, 0, NULL, 3, NULL, 1, NULL, NULL, '2022-07-24 04:50:03', '2022-07-24 04:50:03', '2022-08-01 14:16:19'),
(16, 'sdfasdfasfasfd', '12345', NULL, '', '', NULL, 0, NULL, 3, NULL, 1, NULL, NULL, '2022-07-24 04:50:03', '2022-07-24 04:50:03', '2022-08-01 14:16:30'),
(17, 'lkjkiuio', 'dfght', NULL, '', '', NULL, 0, NULL, 3, NULL, 1, NULL, NULL, '2022-07-24 04:50:32', '2022-07-24 04:50:32', '2022-08-01 21:46:33'),
(19, 'tyyrtrtrt', 'oio9090', NULL, '', '', NULL, 0, NULL, 3, NULL, 1, NULL, NULL, '2022-07-24 04:51:13', '2022-07-24 04:51:13', '2022-08-01 14:16:41'),
(22, 'phan trung nghi', 'trungnghi2003', 'ko vui lắm asfdasf sd', 'trungnghi202@gmail.com', '$2y$10$e3MoQtrczFR6xUY0o2Dzp.w8AxjLFIN8CK9tObnUHNboJkv50AJ/C', '1234234123', 0, NULL, 3, '2003-01-01', 1, NULL, NULL, '2022-07-27 03:57:49', '2022-07-28 06:34:06', '2022-08-01 21:47:41'),
(23, 'minhman', 'mango', NULL, 'hay1@gmail.com', '$2y$10$fSgzFav.Ie6mN8dkimo1yuQvHa.wfz7uxgX9ViXUiqpEcr6xmJGDm', '1234567890', 0, NULL, 3, '2003-03-01', 1, NULL, NULL, '2022-07-27 05:24:45', '2022-07-27 05:24:45', '2022-08-01 21:47:32'),
(26, 'Admin', 'admin', NULL, 'sipanono@gmail.com', '$2y$10$2w52yQz/Ww9Qjlwhqunuc.dFfwVjztW6P1BokC2lbW87ZpvYABU46', '0123456789', 0, NULL, 2, '2003-08-21', 1, NULL, NULL, '2022-08-01 07:56:21', '2022-08-01 07:56:21', '2022-08-01 21:46:46'),
(28, 'Le Thai Toan', 'user', NULL, 'hamkiem1212@gmail.com', '$2y$10$24cznP6Ah/RIr9MTzfVboOsOUex7c3X9uiLpfpoecb3jv0.D1pIe.', '0329011622', 0, NULL, 3, '2022-08-02', 1, NULL, NULL, '2022-08-01 09:21:33', '2022-08-01 09:21:33', '2022-08-01 21:46:41'),
(29, 'Le Thai Toan', 'userpersol', NULL, 'thang553@gmail.com', '$2y$10$k/I3EEeTlWAH.Z3PZ5POkupaPOwuO79SE1I3kNEMhq2Y7Gw3wwsii', '0123456789', 0, NULL, 3, '2022-08-07', 1, NULL, NULL, '2022-08-01 14:29:14', '2022-08-01 14:29:14', '2022-08-01 21:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(10) NOT NULL,
  `name_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_brand` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`, `intro_brand`, `category_brand`) VALUES
(5, 'Charriol', 'Phillipe Charriol - Geneve frames from the French Grosfilley Group are 100% Made In France products (made in France).', 'frame'),
(6, 'Prada', 'The Prada brand was founded in 1913 by brothers Mario and Martino Prada in Milan, Italy. In 1919, Prada became the official supplier to the Italian royal family. The royal House of Savoy symbol and unique knots in the logo design, affirm the Prada family\'s class.', 'frame'),
(7, 'Burberry', 'When they see the strong and modern plaid lines, fashion connoisseurs know right away that it is British couture brand Burberry. Many people are surprised to know that Burberry- this famous fashion brand has been established since 1856 in London. Referring to Burberry is referring to the design and quality of products with an English aristocratic style, elegance and elegance. The recognizable symbol of this product line is the knight logo and luxurious plaid motifs. The Burberry eyewear line is characterized by an elegant, prerequisite, unique and innovative style, but also prides itself in preserving core values and traditional identity, suitable for mature customers and have income.', 'frame'),
(8, 'Michael Kors', 'Founded in 1981 by designer Michael Kors, the brand brings trendy style to customers, is a symbol of liberality and modern beauty. Many product lines with trendy designs such as luxurious square shape, trendy cat eye shape, fashionable round shape, and signature Michael Kors logo motifs are always used to affirm the brand position on the glasses. and reach the right segment of successful fashion customers.', 'frame'),
(9, 'Rayban', 'Rayban brand is a leading brand in eyewear worldwide, founded by Bausch & Lomb Corporation after the proposal of the US military for the invention of a type of eyewear for aviators. In 1937, Aviator eyewear was born and quickly became a craze in the fashion world until now. Following the success, Rayban continues to introduce many new glasses models such as: Rayban Wayfarer, Outdoors man... Rayban\'s fashion glasses, although launched a long time ago, are still popular because they are suitable for all times. In 1999, Rayban officially belonged to the Italian group Luxottica and was developed with strong criteria, a symbol of legend and authentic quality, not afraid of challenges and regardless of time to be accessible to many people. Customers range from young, dynamic to mature and strong.', 'frame'),
(10, 'Invu', 'Swiss Eyewear Group was founded in 2013 by a group of eyewear professionals with over 120 years of industry experience. INVU ultra polarized has been brought to market with the clear goal of delivering improved polarized glasses products. Using high-quality lenses, combined with Swiss technology and beautifully crafted frames, INVU offers an exceptional experience and unmatched value to consumers around the world. INVU is a registered trademark of Swiss Eyewear Group (International) AG and is currently distributed in more than 85 countries worldwide aimed at young, dynamic, stylish customers who love technology and fashion.', 'frame'),
(11, 'Armani Exchange', 'Armani Exchange (also known as A/X for short) is one of a number of brand sites owned by the Italian group Giorgio Armani S.p.A founded by Giorgio Armani in the US in 1991 under the product line easily accessible at a reasonable price, targeting children. Armani Exchange\'s design is often inspired by street culture and music with a modern, dynamic and youthful style suitable for a wide range of customers.', 'frame'),
(12, 'Parim', 'Parim Eyeglasses belongs to Cheng Yi Quang Co Group, which specializes in large-scale, reputable eyewear production, established in Taiwan in 1978. However, it was not until 1992 that Parim glasses were officially introduced by this group. launch to the market. Parim specializes in the production of various eyewear with a wide range of materials, including sunglasses, optical frames, sports glasses, children\'s glasses, reading glasses, safety glasses and lenses.', 'frame'),
(13, 'Essilor', NULL, 'lenses'),
(14, 'Chemi', NULL, 'lenses'),
(15, 'V-idol', NULL, 'lenses'),
(16, 'Vx', NULL, 'lenses'),
(17, 'Hoya', NULL, 'lenses'),
(18, 'Acros', NULL, 'lenses'),
(19, 'Caras', NULL, 'lenses');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id_category` int(10) NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id_category`, `name_category`, `parent_category`) VALUES
(1, 'frame', 0),
(2, 'lenses', 0),
(7, 'sunglass', 1),
(9, 'frames', 1),
(12, 'lens', 2),
(13, 'clubmaster', 1),
(14, 'rectangle', 1),
(15, 'circle', 1),
(16, 'aviator', 1),
(17, 'contact lens', 2),
(18, 'square', 1),
(19, 'oval', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id_country` int(10) NOT NULL,
  `name_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id_country`, `name_country`) VALUES
(2, 'China'),
(3, 'America'),
(4, 'France'),
(5, 'England'),
(6, 'Italy'),
(7, 'Switzerland'),
(8, 'Germany'),
(9, 'Japan'),
(10, 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `image_product`
--

CREATE TABLE `image_product` (
  `id_image` int(10) NOT NULL,
  `name_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_product`
--

INSERT INTO `image_product` (`id_image`, `name_image`, `category_image`, `product_id`) VALUES
(40, '1657893373invu-v1805-black(index)-have nosepad-unisex-metal-medium.png', 'index', 11),
(41, '1658295482invu-v1805-(2).png', 'index2', 11),
(42, '1658295482invu-v1805-(3).png', 'index3', 11),
(43, '1657893718invu-b1817-index-unisex-metal-medium.png', 'index', 12),
(44, '1658295277invu-b1817-(2).png', 'index2', 12),
(45, '1658295277invu-b1817-(3).png', 'index3', 12),
(46, '1657894086invu-b1911-index.png', 'index', 13),
(47, '1658295385invu-b1911-(2).png', 'index2', 13),
(48, '1658295386invu-b1911-(3).png', 'index3', 13),
(49, '1657894439invu-z2104-(index)-plastic-unisex-medium.png', 'index', 14),
(50, '1658295820invu-z2104-(2).png', 'index2', 14),
(51, '1658295821invu-z2104-(3).png', 'index3', 14),
(52, '1657894676invu-z1101-(index)-have nosepad-unisex-metal-medium.png', 'index', 15),
(53, '1658295633invu-z1101-(2).png', 'index2', 15),
(54, '1658295633invu-z1101-(3).png', 'index3', 15),
(55, '1657896193rayban-3587ch-index.png', 'index', 16),
(56, '1658298833rayban-3587ch-(2).png', 'index2', 16),
(57, '1658298833rayban-3587ch- (3).png', 'index3', 16),
(58, '1657896520rayban-3747-(index)--unisex-metal--medium.png', 'index', 17),
(59, '1658299136rayban-3747-(2).png', 'index2', 17),
(60, '1658299136rayban-3747-(3).png', 'index3', 17),
(61, '1657896770rayban-9065s-(index).png', 'index', 18),
(62, '1658299308rayban-9065s-(2).png', 'index2', 18),
(63, '1658299308rayban-9065s-(3).png', 'index3', 18),
(64, '1657897011rayban-3596-(index)-unisex-metal-big.png', 'index', 19),
(65, '1658298986rayban-3596-(2).png', 'index2', 19),
(66, '1658298986rayban-3596-(3).png', 'index3', 19),
(70, '1658143661armani-exchange-2034s-6000-8759cn2.png', 'index', 21),
(71, '1658143661armani-exchange-2034s-6000-8759cn3.png', 'index2', 21),
(72, '1658143661armani-exchange-2034s-6000-8759cn.png', 'index3', 21),
(73, '1657902647armani-exchange-4077sf-index-big.png', 'index', 22),
(74, '1658292255armani-exchange-4077sf-(2).png', 'index2', 22),
(75, '1658292255armani-exchange-4077sf-(3).png', 'index3', 22),
(76, '1657902782armani-exchange-4085sf-index.png', 'index', 23),
(77, '1658292311armani-exchange-4085sf-(2).png', 'index2', 23),
(78, '1658292311armani-exchange-4085sf-(3).png', 'index3', 23),
(79, '1657903013armani-exchange-4087s-index.png', 'index', 24),
(80, '1658292389armani-exchange-4087s-(2).png', 'index2', 24),
(81, '1658292389armani-exchange-4087s-(3).png', 'index3', 24),
(82, '1657903449armani-exchange-4101sf-index-plastic-big.png', 'index', 25),
(83, '1658292450armani-exchange-4101sf-(2).png', 'index2', 25),
(84, '1658292450armani-exchange-4101sf-(3).png', 'index3', 25),
(85, '1657903740parim-71413-index-metal.jpg', 'index', 26),
(86, '1658296780parim-71413-(2).jpg', 'index2', 26),
(87, '1658296780parim-71413-(3).jpg', 'index3', 26),
(88, '1657903912parim-71422-index-women-plastic.jpg', 'index', 27),
(89, '1658297045parim-71422-(2).jpg', 'index2', 27),
(90, '1658297045parim-71422-(3).jpg', 'index3', 27),
(91, '1657904100parim-73425-index-woman-metal.jpg', 'index', 28),
(92, '1658295001parim-73425-(2).jpg', 'index2', 28),
(93, '1658295001parim-73425-(3).jpg', 'index3', 28),
(94, '1657904302parim-76005-index.jpg', 'index', 29),
(95, '1658297178parim-76005-(2).jpg', 'index2', 29),
(96, '1658297178parim-76005-(3).jpg', 'index3', 29),
(97, '1657904490parim-76006-index.jpg', 'index', 30),
(98, '1658297291parim-76006-(2).jpg', 'index2', 30),
(99, '1658297291parim-76006-(3).jpg', 'index3', 30),
(100, '1658298322prada-0pr-55wv-index.png', 'index', 31),
(101, '1658298322prada-0pr-55wv-(2).png', 'index2', 31),
(102, '1658298322prada-0pr-55wv-(3).png', 'index3', 31),
(103, '1657942497prada-0pr-05wvf-index.png', 'index', 32),
(104, '1658298522prada-0pr-05wvf-(2).png', 'index2', 32),
(105, '1658298522prada-0pr-05wvf-(3).png', 'index3', 32),
(106, '1657942708prada-0pr-02ova-index.png', 'index', 33),
(107, '1658297838prada-0pr-02ova-(2).png', 'index2', 33),
(108, '1658297838prada-0pr-02ova-(3).png', 'index3', 33),
(109, '1657942980prada-0pr-01vvf-index.png', 'index', 34),
(110, '1658297590prada-0pr-01vvf-(2).png', 'index2', 34),
(111, '1658297590prada-0pr-01vvf-(3).png', 'index3', 34),
(112, '1657943149prada-0pr-05tvf-index.png', 'index', 35),
(113, '1658298055prada-0pr-05tvf-(2).png', 'index2', 35),
(114, '1658298055prada-0pr-05tvf-(3).png', 'index3', 35),
(115, '1657943481charriol-pc7492c06-index.png', 'index', 36),
(116, '1658293229charriol-pc7492c06-(2).png', 'index2', 36),
(117, '1658293229charriol-pc7492c06-(3).png', 'index3', 36),
(118, '1657943767charriol-pc8010gc-index.png', 'index', 37),
(119, '1658293354charriol-pc8010gc-(2).png', 'index2', 37),
(120, '1658293354charriol-pc8010gc-(3).png', 'index3', 37),
(121, '1657944007charriol-pc8026gm-index-red.png', 'index', 38),
(122, '1658293821charriol-pc8026gm-(2).png', 'index2', 38),
(123, '1658293821charriol-pc8026gm-(3).png', 'index3', 38),
(124, '1657944453charriol-pc75003c02-index.png', 'index', 39),
(125, '1658293419charriol-pc75003c02-(2).png', 'index2', 39),
(126, '1658293420charriol-pc75003c02-(3).png', 'index3', 39),
(127, '1657944774charriol-pc75042c02-index-grey.png', 'index', 40),
(128, '1658293506charriol-pc75042c02-(2).png', 'index2', 40),
(129, '1658293506charriol-pc75042c02-(3).png', 'index3', 40),
(130, '1657945020burberry-1345d-index.png', 'index', 41),
(131, '1658292953burberry-1345d-(2).png', 'index2', 41),
(132, '1658292954burberry-1345d-(3).png', 'index3', 41),
(133, '1657945319burberry-1344-index.png', 'index', 42),
(134, '1658292611burberry-1344-(2).png', 'index2', 42),
(135, '1658292612burberry-1344-(3).png', 'index3', 42),
(136, '1657945550burberry-1340-index.png', 'index', 43),
(137, '1658292540burberry-1340-(2).png', 'index2', 43),
(138, '1658292540burberry-1340-(3).png', 'index3', 43),
(139, '1657946320burberry-2277f-index.png', 'index', 44),
(140, '1658293023burberry-2277f-(2).png', 'index2', 44),
(141, '1658293024burberry-2277f-(3).png', 'index3', 44),
(142, '1657946472burberry-2316-index.png', 'index', 45),
(143, '1658293087burberry-2316-(2).png', 'index2', 45),
(144, '1658293087burberry-2316-(3).png', 'index3', 45),
(145, '1657946689michael-kors-7004- index.png', 'index', 46),
(146, '1658296574michael-kors-7004-(2).png', 'index2', 46),
(147, '1658296574michael-kors-7004-(3).png', 'index3', 46),
(148, '1657947023michael-kors-4030-index.png', 'index', 47),
(149, '1658296312michael-kors-4030-(2).png', 'index2', 47),
(150, '1658296312michael-kors-4030-(3).png', 'index3', 47),
(151, '1657947201michael-kors-4020bf-index.png', 'index', 48),
(152, '1658296115michael-kors-4020bf-(2).png', 'index2', 48),
(153, '1658296115michael-kors-4020bf-(3).png', 'index3', 48),
(154, '1657947408michael-kors-8004-index.png', 'index', 49),
(155, '1658296682michael-kors-8004-(2).png', 'index2', 49),
(156, '1658296683michael-kors-8004-(3).png', 'index3', 49),
(157, '1657947562michael-kors-3044b-index.png', 'index', 50),
(158, '1658295967michael-kors-3044b-(2).png', 'index2', 50),
(159, '1658295967michael-kors-3044b-(3).png', 'index3', 50),
(160, '1657962064tròng kính V-idol 1.56 BIFOCAL.jpg', 'index', 51),
(161, '1657962525dsc02447.jpg', 'index', 52),
(162, '1657962703dsc02445.jpg', 'index', 53),
(163, '1657971361dsc02435.jpg', 'index', 54),
(164, '1657971863b8fc16186f40a01ef951.jpg', 'index', 55),
(165, '165797214680d940a32bfbe4a5bdea.jpg', 'index', 56),
(166, '1657972289b61f2f9644ce8b90d2df.jpg', 'index', 57),
(167, '1657972357785f87d2ec8a23d47a9b.jpg', 'index', 58),
(168, '1657972722gray-avt.png', 'index', 59),
(169, '1657972917image_2022-07-16_190153360.png', 'index', 60),
(170, '1657973029156-avt.png', 'index', 61),
(171, '1657973183160sp-avt.png', 'index', 62),
(172, '1657973529dsc02470.jpg', 'index', 63),
(173, '1657973709dsc02467.jpg', 'index', 64),
(174, '1657974007dsc02462.jpg', 'index', 65),
(175, '1657974149dsc02455.jpg', 'index', 66),
(176, '1657974521d8aeccd5de5b16054f4a-scaled.jpg', 'index', 67),
(177, '1657975024z2939823548841-9e25bc77c7f7d82381dd62a17345e29f.jpg', 'index', 68),
(178, '1657975287z2939823565140-55019a475e2285a013223bd7a3b7cc11.jpg', 'index', 69),
(179, '1657975553z2939823428351-54300001345b0bebfe276466403ff012.jpg', 'index', 70),
(180, '1658211145LavierBrown-00-insta-1-300x300.jpg', 'index', 71),
(181, '1658211146LavierBrown-01-300x300.jpg', 'index2', 71),
(182, '1658211146LavierBrown-03-300x300.jpg', 'index3', 71),
(183, '1658211146dong-lavier-brown-caras-768x768.jpg', 'brown', 71),
(184, '1658211768LavierGray-05.jpg', 'index', 72),
(185, '1658211768LavierGray-02-300x300.jpg', 'index2', 72),
(186, '1658211768dong-lavier-gray-caras-768x768.jpg', 'index3', 72),
(187, '1658211768dong-lavier-gray-caras-768x768.jpg', 'gray', 72),
(188, '1658212780LavierChoco-04-300x300.jpg', 'index', 73),
(189, '1658212780LavierChoco-05-300x300.jpg', 'index2', 73),
(190, '1658212780LavierChoco-02-300x300.jpg', 'index3', 73),
(191, '1658212780dong-lavier-choco-caras-768x768.jpg', 'brown', 73),
(192, '1658213530slg-03.jpg', 'index', 74),
(193, '1658213530slg-04.jpg', 'index2', 74),
(194, '1658213530slg-01.jpg', 'index3', 74),
(195, '1658213531slg-04.jpg', 'silver', 74),
(200, '1658214334bbi-01.jpg', 'index', 76),
(201, '1658214335bbi-03.jpg', 'index2', 76),
(202, '1658214335bbi.jpg', 'index3', 76),
(203, '1658214335bbi.jpg', 'purple', 76),
(204, '1658215783armani-exchange-2034s-6000-8759cn2.png', 'black', 21),
(205, '1658215783armani-exchange-2034s-6006-5559cn2.png', 'blue', 21),
(206, '1658215783armani-exchange-2034s-6115-7359cn2.png', 'orange', 21),
(207, '1658215930armani-exchange-4077sf-index-big.png', 'pink', 22),
(208, '1658215931armani-exchange-4077sf-8256-6q56cn2.png', 'blue', 22),
(209, '1658216587armani-exchange-4085sf-index.png', 'green', 23),
(210, '1658216588armani-exchange-4085sf-8158-7p56cn2.png', 'yellow', 23),
(211, '1658216588armani-exchange-4085sf-8078-6g56cn2.png', 'gray', 23),
(212, '1658216785armani-exchange-4087s-index.png', 'black', 24),
(213, '1658216785armani-exchange-4087s-8292-6x49br2.png', 'red', 24),
(214, '1658216785armani-exchange-4087s-8037-1349br2.png', 'yellow', 24),
(215, '1658216934armani-exchange-4101sf-index-plastic-big.png', 'blue', 25),
(216, '1658216934armani-exchange-4101sf-8037-1355cn2.png', 'black', 25),
(217, '1658217360burberry-1340-index.png', 'yellow', 43),
(218, '1658217361burberry-1340-100356it2.png', 'gray', 43),
(219, '1658290563burberry-1344-index.png', 'gray', 42),
(220, '1658290563burberry-1344-127455it2.png', 'black', 42),
(221, '1658290721burberry-1345d-index.png', 'yellow', 41),
(222, '1658290721burberry-1345d-100353it2.png', 'gray', 41),
(223, '1658290866burberry-2277f-index.png', 'brown', 44),
(224, '1658290866burberry-2277f-373553it-2.png', 'black', 44),
(225, '1658291039burberry-2316-index.png', 'black', 45),
(226, '1658291039burberry-2316-386951it2.png', 'brown', 45),
(227, '1658291195charriol-pc7492c06-55-19-2.png', 'black', 36),
(228, '1658291423charriol-pc8010gc-index.png', 'black', 37),
(229, '1658291423charriol-pc8010gc-c3-win-52-17-2.png', 'red', 37),
(230, '1658291423charriol-pc8010gc-c12-dbr-52-17-2.png', 'brown', 37),
(231, '1658291515charriol-pc75003c02-index.png', 'black', 39),
(232, '1658291601charriol-pc75042c02-index-grey.png', 'silver', 40),
(233, '1658293821charriol-pc8026gm-index-red.png', 'red', 38),
(234, '1658293821charriol-pc8026gm-c8-god-53-17-2.png', 'yellow', 38),
(235, '1658295001parim-73425-b1jpg2.jpg', 'black', 28),
(236, '1658295277invu-b1817-index-unisex-metal-medium.png', 'blue', 12),
(237, '1658295277invu-b1817-bcn2.png', 'green', 12),
(238, '1658295386invu-b1911-index.png', 'brown', 13),
(239, '1658295482invu-v1805-black(index)-have nosepad-unisex-metal-medium.png', 'black', 11),
(240, '1658295634invu-z1101-(index)-have nosepad-unisex-metal-medium.png', 'green', 15),
(241, '1658295821invu-z2104-(index)-plastic-unisex-medium.png', 'black', 14),
(242, '1658295821invu-z2104-bcn2.png', 'red', 14),
(243, '1658295968michael-kors-3044b-index.png', 'gray', 50),
(244, '1658296115michael-kors-4020bf-index.png', 'black', 48),
(245, '1658296312michael-kors-4030-index.png', 'blue', 47),
(246, '1658296313michael-kors-4030-399854cn-2.png', 'white', 47),
(247, '1658296574michael-kors-7004- index.png', 'pink', 46),
(248, '1658296574michael-kors-7004-103153cn-2.png', 'black', 46),
(249, '1658296574michael-kors-7004-102953cn-2.png', 'brown', 46),
(250, '1658296683michael-kors-8004-index.png', 'brown', 49),
(251, '1658296780parim-71413-index-metal.jpg', 'index3', 26),
(252, '1658297045parim-71422-index-women-plastic.jpg', 'blue', 27),
(253, '1658297178parim-76005-index.jpg', 'gray', 29),
(254, '1658297291parim-76006-index.jpg', 'gray', 30),
(255, '1658297590prada-0pr-01vvf-index.png', 'black', 34),
(256, '1658297591prada-0pr-01vvf-cdk1o155it2.png', 'red', 34),
(257, '1658297838prada-0pr-02ova-index.png', 'black', 33),
(258, '1658298055prada-0pr-05tvf-index.png', 'black', 35),
(259, '1658298322prada-0pr-55wv-index.png', 'yellow', 31),
(260, '1658298322prada-0pr-55wv-07i1o153it2.png', 'black', 31),
(261, '1658298522prada-0pr-05wvf-index.png', 'brown', 32),
(262, '1658298833rayban-3587ch-(2).png', 'orange', 16),
(263, '1658298833rayban-3587ch-029-6o61it2.png', 'green', 16),
(264, '1658298987rayban-3596-(index)-unisex-metal-big.png', 'gray', 19),
(265, '1658298987rayban-3596-186-8g54it2.png', 'purple', 19),
(266, '1658299137rayban-3747-(index)--unisex-metal--medium.png', 'blue', 17),
(267, '1658299137rayban-3747-9008-5150it2.png', 'yellow', 17),
(268, '1658299308rayban-9065s-(index).png', 'blue', 18),
(269, '1658299308rayban-9065s-7036-a948cn-2.png', 'pink', 18),
(270, '16589932539387.png', 'index', 77);

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `id_ip` int(10) NOT NULL,
  `name_ip` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_ip` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`id_ip`, `name_ip`, `create_ip`) VALUES
(1, '127.0.0.1', '2022-08-01 21:48:34'),
(2, '0.2,4.678', '2022-07-14 09:44:22'),
(3, '0.2.8.94.678', '2022-07-14 12:44:50'),
(4, '127.0.0.1', '2022-08-01 21:48:34'),
(5, '127.0.0.1', '2022-08-01 21:48:34'),
(6, '127.0.0.1', '2022-08-01 21:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email_account` varchar(250) NOT NULL,
  `token` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_product` tinyint(4) NOT NULL DEFAULT 0,
  `content_product` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_product` int(11) NOT NULL,
  `sale_product` tinyint(4) DEFAULT NULL,
  `created_product` datetime NOT NULL,
  `category_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `country_id` int(11) NOT NULL,
  `delete_featured` tinyint(4) NOT NULL DEFAULT 0,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `featured_product`, `content_product`, `price_product`, `sale_product`, `created_product`, `category_id`, `brand_id`, `country_id`, `delete_featured`, `delete_at`) VALUES
(11, 'Invu V1805', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1480000, NULL, '2022-06-15 13:56:13', 16, 10, 2, 0, NULL),
(12, 'Invu B1817', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1080000, NULL, '2022-05-15 14:01:58', 16, 10, 2, 0, NULL),
(13, 'Invu B1911', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1000000, NULL, '2022-04-15 14:08:06', 15, 10, 2, 0, NULL),
(14, 'Invu Z2104', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1240000, NULL, '2022-03-15 14:13:59', 15, 10, 2, 0, NULL),
(15, 'Invu Z1101', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1350000, NULL, '2022-07-15 14:17:56', 15, 10, 2, 0, NULL),
(16, 'Rayban 3587CH', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 3775000, NULL, '2022-05-15 14:43:13', 16, 9, 6, 0, NULL),
(17, 'Rayban 3747', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 4440000, NULL, '2022-04-15 14:48:40', 16, 9, 6, 0, NULL),
(18, 'Rayban 9065S', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 2475000, NULL, '2022-07-15 14:52:49', 16, 9, 6, 0, NULL),
(19, 'Rayban 3596', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 2625000, NULL, '2022-03-15 14:56:51', 16, 9, 6, 0, NULL),
(21, 'Armani Exchange 2034S', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 2600000, NULL, '2022-07-15 16:28:09', 16, 11, 2, 0, NULL),
(22, 'Armani Exchange 4077SF', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 2200000, NULL, '2022-05-15 16:30:47', 15, 11, 2, 0, NULL),
(23, 'Armani Exchange 4085SF', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 2750000, NULL, '2022-04-15 16:33:02', 18, 11, 2, 0, NULL),
(24, 'Armani Exchange 4087S', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 284000, NULL, '2022-03-15 16:36:53', 18, 11, 2, 0, NULL),
(25, 'Armani Exchange 4101SF', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 2090000, NULL, '2022-01-15 16:44:09', 15, 11, 2, 0, NULL),
(26, 'Parim 71413', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1134000, NULL, '2022-07-15 16:49:00', 16, 12, 2, 0, NULL),
(27, 'Parim 71422', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1090000, NULL, '2022-04-15 16:51:52', 18, 12, 2, 0, NULL),
(28, 'Parim 73425', 1, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1550000, NULL, '2022-05-15 16:55:00', 18, 12, 2, 0, NULL),
(29, 'Parim 76005', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1849000, NULL, '2022-02-15 16:58:22', 16, 12, 2, 0, NULL),
(30, 'Parim 76006', 0, 'Polaroid feature: Yes\r\nUV Filter Feature: Yes', 1599000, NULL, '2022-03-15 17:01:30', 18, 12, 2, 0, NULL),
(31, 'Prada 0PR55WV', 1, 'Prada signs a franchise agreement with eyewear manufacturer Luxottica. Prada fashion eyewear is differentiated into 2 groups. Including, modern style design, personality based on classic values, communication system and follow the own trends. The rest is a predominantly men\'s style, featuring a youthful, strong and solid design with the Prada signature with red highlights on the glasses.', 5800000, NULL, '2022-07-16 03:31:34', 15, 6, 6, 0, NULL),
(32, 'Prada OPR  05WVF', 0, 'Prada signs a franchise agreement with eyewear manufacturer Luxottica. Prada fashion eyewear is differentiated into 2 groups. Including, modern style design, personality based on classic values, communication system and follow the own trends. The rest is a predominantly men\'s style, featuring a youthful, strong and solid design with the Prada signature with red highlights on the glasses.', 5400000, NULL, '2022-06-16 03:34:57', 15, 6, 6, 0, NULL),
(33, 'Prada 0PR 02 OVA', 0, 'Prada signs a franchise agreement with eyewear manufacturer Luxottica. Prada fashion eyewear is differentiated into 2 groups. Including, modern style design, personality based on classic values, communication system and follow the own trends. The rest is a predominantly men\'s style, featuring a youthful, strong and solid design with the Prada signature with red highlights on the glasses.', 4760000, NULL, '2022-05-16 03:38:28', 18, 6, 6, 0, NULL),
(34, 'Prada 0PR 01VVF', 1, 'Prada signs a franchise agreement with eyewear manufacturer Luxottica. Prada fashion eyewear is differentiated into 2 groups. Including, modern style design, personality based on classic values, communication system and follow the own trends. The rest is a predominantly men\'s style, featuring a youthful, strong and solid design with the Prada signature with red highlights on the glasses.', 5560000, 70, '2022-05-16 03:43:00', 18, 6, 6, 0, NULL),
(35, 'Prada 0PR 05TVF', 0, 'Prada signs a franchise agreement with eyewear manufacturer Luxottica. Prada fashion eyewear is differentiated into 2 groups. Including, modern style design, personality based on classic values, communication system and follow the own trends. The rest is a predominantly men\'s style, featuring a youthful, strong and solid design with the Prada signature with red highlights on the glasses.', 6600000, NULL, '2022-04-16 03:45:49', 18, 6, 6, 0, NULL),
(36, 'Charriol 7492C06', 1, 'Charriol has a high quality gold plated metal material – Gold Plaqued with a thickness of 5 microns will provide a product that is super durable and shiny over time. Looking at the screw-on or split-shaped glasses frames gives the wearer an elegant and luxurious style. This will be a dream product of the successful Entrepreneur and Leadership segment, always aiming for class and difference.', 8400000, NULL, '2022-07-16 03:51:21', 18, 5, 4, 0, NULL),
(37, 'Charriol 8010GC', 1, 'Charriol has a high quality gold plated metal material – Gold Plaqued with a thickness of 5 microns will provide a product that is super durable and shiny over time. Looking at the screw-on or split-shaped glasses frames gives the wearer an elegant and luxurious style. This will be a dream product of the successful Entrepreneur and Leadership segment, always aiming for class and difference.', 7640000, 30, '2022-04-16 03:56:07', 15, 5, 4, 0, NULL),
(38, 'Charriol PC8026GM', 0, 'Charriol has a high quality gold plated metal material – Gold Plaqued with a thickness of 5 microns will provide a product that is super durable and shiny over time. Looking at the screw-on or split-shaped glasses frames gives the wearer an elegant and luxurious style. This will be a dream product of the successful Entrepreneur and Leadership segment, always aiming for class and difference.', 7500000, 31, '2022-03-16 04:00:07', 19, 5, 4, 0, NULL),
(39, 'Charriol PC75003C02', 0, 'Charriol has a high quality gold plated metal material – Gold Plaqued with a thickness of 5 microns will provide a product that is super durable and shiny over time. Looking at the screw-on or split-shaped glasses frames gives the wearer an elegant and luxurious style. This will be a dream product of the successful Entrepreneur and Leadership segment, always aiming for class and difference.', 7160000, 35, '2022-02-16 04:07:33', 18, 5, 4, 0, NULL),
(40, 'Charriol PC75042C02', 0, 'Charriol has a high quality gold plated metal material – Gold Plaqued with a thickness of 5 microns will provide a product that is super durable and shiny over time. Looking at the screw-on or split-shaped glasses frames gives the wearer an elegant and luxurious style. This will be a dream product of the successful Entrepreneur and Leadership segment, always aiming for class and difference.', 6350000, NULL, '2022-04-16 04:12:54', 16, 5, 4, 0, NULL),
(41, 'Burberry 1345D', 1, 'Referring to Burberry is referring to the design and quality of products with an English aristocratic style, elegance and elegance. The recognizable symbol of this product line is the knight logo and luxurious plaid motifs. The Burberry eyewear line is characterized by an elegant, prerequisite, unique and innovative style, but also prides itself in preserving core values and traditional identity, suitable for mature customers and have income.', 3640000, NULL, '2022-07-16 04:17:00', 15, 7, 6, 0, NULL),
(42, 'Burberry 1344', 0, 'Referring to Burberry is referring to the design and quality of products with an English aristocratic style, elegance and elegance. The recognizable symbol of this product line is the knight logo and luxurious plaid motifs. The Burberry eyewear line is characterized by an elegant, prerequisite, unique and innovative style, but also prides itself in preserving core values and traditional identity, suitable for mature customers and have income.', 3640000, NULL, '2022-05-16 04:21:59', 13, 7, 6, 0, NULL),
(43, 'Burberry 1340', 0, 'Referring to Burberry is referring to the design and quality of products with an English aristocratic style, elegance and elegance. The recognizable symbol of this product line is the knight logo and luxurious plaid motifs. The Burberry eyewear line is characterized by an elegant, prerequisite, unique and innovative style, but also prides itself in preserving core values and traditional identity, suitable for mature customers and have income.', 3640000, NULL, '2022-02-16 04:25:50', 16, 7, 4, 0, NULL),
(44, 'Burberry 2277F', 1, 'Referring to Burberry is referring to the design and quality of products with an English aristocratic style, elegance and elegance. The recognizable symbol of this product line is the knight logo and luxurious plaid motifs. The Burberry eyewear line is characterized by an elegant, prerequisite, unique and innovative style, but also prides itself in preserving core values and traditional identity, suitable for mature customers and have income.', 3800000, NULL, '2022-04-16 04:38:40', 18, 7, 2, 0, NULL),
(45, 'Burberry 2316', 0, 'Referring to Burberry is referring to the design and quality of products with an English aristocratic style, elegance and elegance. The recognizable symbol of this product line is the knight logo and luxurious plaid motifs. The Burberry eyewear line is characterized by an elegant, prerequisite, unique and innovative style, but also prides itself in preserving core values and traditional identity, suitable for mature customers and have income.', 3640000, NULL, '2022-07-16 04:41:12', 13, 7, 6, 0, NULL),
(46, 'Michael Kors 7004', 1, 'Founded in 1981 by designer Michael Kors, the brand brings trendy style to customers, is a symbol of liberality and modern beauty. Many product lines with trendy designs such as luxurious square shape, trendy cat eye shape, fashionable round shape, and signature Michael Kors logo motifs are always used to affirm the brand position on the glasses. and reach the right segment of successful fashion customers.', 1947, NULL, '2022-06-16 04:44:49', 19, 8, 2, 0, NULL),
(47, 'Michael Kors 4030', 0, 'Founded in 1981 by designer Michael Kors, the brand brings trendy style to customers, is a symbol of liberality and modern beauty. Many product lines with trendy designs such as luxurious square shape, trendy cat eye shape, fashionable round shape, and signature Michael Kors logo motifs are always used to affirm the brand position on the glasses. and reach the right segment of successful fashion customers.', 1357000, NULL, '2022-05-16 04:50:23', 14, 8, 2, 0, NULL),
(48, 'Michael Kors 4020BF', 0, 'Founded in 1981 by designer Michael Kors, the brand brings trendy style to customers, is a symbol of liberality and modern beauty. Many product lines with trendy designs such as luxurious square shape, trendy cat eye shape, fashionable round shape, and signature Michael Kors logo motifs are always used to affirm the brand position on the glasses. and reach the right segment of successful fashion customers.', 2975000, NULL, '2022-04-16 04:53:21', 15, 8, 2, 0, NULL),
(49, 'Michael Kors 8004', 0, 'Founded in 1981 by designer Michael Kors, the brand brings trendy style to customers, is a symbol of liberality and modern beauty. Many product lines with trendy designs such as luxurious square shape, trendy cat eye shape, fashionable round shape, and signature Michael Kors logo motifs are always used to affirm the brand position on the glasses. and reach the right segment of successful fashion customers.', 1875000, NULL, '2022-03-16 04:56:48', 18, 8, 2, 0, NULL),
(50, 'Michael Kors 3044B', 1, 'Founded in 1981 by designer Michael Kors, the brand brings trendy style to customers, is a symbol of liberality and modern beauty. Many product lines with trendy designs such as luxurious square shape, trendy cat eye shape, fashionable round shape, and signature Michael Kors logo motifs are always used to affirm the brand position on the glasses. and reach the right segment of successful fashion customers.', 2680000, 13, '2022-07-16 04:59:22', 18, 8, 2, 0, NULL),
(51, 'V-idol 1.56 BIFOCAL', 0, 'V-idol lenses are a brand of AKP Group (Thailand), the product of this brand since its inception has rapidly expanded to many different schools, especially in Southeast Asia. To achieve that success, AKP Group has used the technology of HOYA - a world famous brand originating from Japan - to perfect its products.', 212000, NULL, '2022-07-16 09:01:04', 12, 15, 10, 0, NULL),
(52, 'V-idol 1.56 SUNPLUS', 0, 'V-idol\'s premium color-changing lenses are manufactured with the technology of Hoya - Japan with HMC coating. The ability to change color (smoky gray) when exposed to UV rays helps to soothe the eyes while ensuring clear and sharp vision whether moving outdoors or working in the shade.', 756000, NULL, '2022-04-16 09:08:45', 12, 15, 10, 0, NULL),
(53, 'V-idol 1.56 BLUECUT', 0, 'V-idol\'s premium blue light control lenses are manufactured with Japan\'s Hoya technology and HMC coating. In addition to the scum layer, it is also equipped with a coating that is able to block blue light emitted from electronic devices, helping to reduce eye strain and fatigue.', 306000, NULL, '2022-05-16 09:11:43', 12, 15, 10, 0, NULL),
(54, 'V-idol CLARIFY', 0, 'V-idol\'s premium lenses are manufactured with Hoya-Japan technology and HMC coating for sharp and realistic vision.', 238000, NULL, '2022-04-16 11:36:01', 12, 15, 10, 0, NULL),
(55, 'ESSILOR Crizal- Transitions GEN 8', 0, 'Exclusive E-SPF technology, owned by Essilor, provides 100% UV protection on the front and minimizes UV reflection from the back of the lens. This is the only technology on the market capable of absorbing and repelling UV rays from both sides of the lens.\r\n\r\nLight Scan™ intelligent light filtering technology blocks harmful blue-violet rays while allowing beneficial turquoise rays to pass through, ensuring optimal health for you. At the same time, the lens has a high optical transmittance of up to 99%, ensuring transparency, sharpness and realism of vision.\r\n\r\nCrizal® lens coatings are a comprehensive solution to 5 common problems that affect your vision in everyday life.', 3262000, NULL, '2022-07-16 11:44:23', 12, 13, 4, 0, NULL),
(56, 'ESSILOR Crizal- PREVENCIA', 0, 'Exclusive E-SPF technology, owned by Essilor, provides 100% UV protection on the front and minimizes UV reflection from the back of the lens. This is the only technology on the market capable of absorbing and repelling UV rays from both sides of the lens.\r\n\r\nLight Scan™ intelligent light filtering technology blocks harmful blue-violet rays while allowing beneficial turquoise rays to pass through, ensuring optimal health for you. At the same time, the lens has a high optical transmittance of up to 99%, ensuring transparency, sharpness and realism of vision.\r\n\r\nCrizal® lens coatings are a comprehensive solution to 5 common problems that affect your vision in everyday life.', 1052000, NULL, '2022-05-16 11:49:06', 12, 13, 4, 0, NULL),
(57, 'ESSILOR Crizal- SAPPHIRE UV', 0, 'Exclusive E-SPF technology, owned by Essilor, provides 100% UV protection on the front and minimizes UV reflection from the back of the lens. This is the only technology on the market capable of absorbing and repelling UV rays from both sides of the lens.\r\n\r\nLight Scan™ intelligent light filtering technology blocks harmful blue-violet rays while allowing beneficial turquoise rays to pass through, ensuring optimal health for you. At the same time, the lens has a high optical transmittance of up to 99%, ensuring transparency, sharpness and realism of vision.\r\n\r\nCrizal® lens coatings are a comprehensive solution to 5 common problems that affect your vision in everyday life.', 848000, NULL, '2022-04-16 11:51:29', 12, 13, 4, 0, NULL),
(58, 'ESSILOR Crizal- ALIZÉ UV', 0, 'Exclusive E-SPF technology, owned by Essilor, provides 100% UV protection on the front and minimizes UV reflection from the back of the lens. This is the only technology on the market capable of absorbing and repelling UV rays from both sides of the lens.\r\n\r\nLight Scan™ intelligent light filtering technology blocks harmful blue-violet rays while allowing beneficial turquoise rays to pass through, ensuring optimal health for you. At the same time, the lens has a high optical transmittance of up to 99%, ensuring transparency, sharpness and realism of vision.\r\n\r\nCrizal® lens coatings are a comprehensive solution to 5 common problems that affect your vision in everyday life.', 652000, NULL, '2022-04-16 11:52:37', 12, 13, 4, 0, NULL),
(59, 'Chemi U2 1.56 ASP PHOTO GRAY', 0, 'Lenses that change color according to indoor to outdoor environments, with UV protection and Chemi U2 coating provide the best protection and comfort for your eyes.', 700000, NULL, '2022-06-16 11:58:42', 12, 14, 6, 0, NULL),
(60, 'Chemi U2 1.67 ASP', 0, 'Lenses that change color according to indoor to outdoor environments, with UV protection and Chemi U2 coating provide the best protection and comfort for your eyes.', 1099000, NULL, '2022-05-16 12:01:57', 12, 13, 6, 0, NULL),
(61, 'Chemi U2 1.56 SP', 0, 'Lenses that change color according to indoor to outdoor environments, with UV protection and Chemi U2 coating provide the best protection and comfort for your eyes.', 285000, NULL, '2022-04-16 12:03:49', 12, 14, 6, 0, NULL),
(62, 'Chemi U2 1.60 SP', 0, 'Lenses that change color according to indoor to outdoor environments, with UV protection and Chemi U2 coating provide the best protection and comfort for your eyes.', 535000, NULL, '2022-03-16 12:06:23', 12, 14, 6, 0, NULL),
(63, 'Hoya Nulux', 0, 'The advantages\r\n- The most natural vision from edge to edge, even for the periphery (rim of the lens)\r\n\r\n- Optical quality of the highest precision, aesthetically pleasing to wear, and the most unique solution for single lenses on the market today.\r\n\r\n- Aesthetic appearance, does not distort the shape of the wearer\'s eyes.\r\n\r\nCharacteristics\r\n\r\nDouble-sided super flat design\r\nUsing Free-form technology for polishing and surface treatment\r\nVery flat outer curvature\r\n7 magical features of SFT scum:\r\n+ Super anti-glare (Reflective): reflected light will be minimized to improve clarity and aesthetics for your eyes.\r\n\r\nSuper scratch-resistant: Scratches are reduced to a minimum, making the lenses more durable.\r\n\r\n+ Waterproof: Dirty water stains (such as rain water) will not stick and be cleaned easily without spot.\r\n\r\n+ Anti-dust: busy dust is also easily cleaned\r\n\r\n+ Anti-greasy: greasy marks such as fingerprints are easily cleaned.\r\n\r\n+ Super wide viewing space: for a wider and clearer view\r\n\r\n+ More realistic contrast images: the SFT layer improves image quality for better visibility and reduces nighttime blur. It will be safe to drive and your eyes will always be in the most comfortable condition', 1499000, NULL, '2022-03-16 12:12:09', 12, 17, 9, 0, NULL),
(64, 'Hoya Stellify', 0, '- Benefits of HVP (Hi-vision Protect) screed\r\n\r\n + Anti-reflective: HOYA has developed a special reflective coating, which is high quality and stable, free of annoying reflections. Reflective layer provides clear vision and high contrast level.\r\n\r\n+ Water-resistant: The water-repellent coating ensures that water droplets will be very small on the surface of the lens\r\n\r\n+ Anti-static: Thanks to its anti-dust properties, it will help you clean the glass easily.\r\n\r\nAnti-scratch: The reflective coating contains a tough anti-scratch layer that minimizes scratches when cleaning the lens with a cloth or bumps that can cause scratches.\r\n\r\n+ Anti-grease / fingerprint: grease or fingerprints on the glass surface will be easily wiped off in a split second.', 500000, NULL, '2022-05-16 12:15:09', 12, 17, 9, 0, NULL),
(65, 'Hoya Stellify blue control', 0, '- Benefits of HVP (Hi-vision Protect) screed\r\n\r\n + Anti-reflective: HOYA has developed a special reflective coating, which is high quality and stable, free of annoying reflections. Reflective layer provides clear vision and high contrast level.\r\n\r\n+ Water-resistant: The water-repellent coating ensures that water droplets will be very small on the surface of the lens\r\n\r\n+ Anti-static: Thanks to its anti-dust properties, it will help you clean the glass easily.\r\n\r\nAnti-scratch: The reflective coating contains a tough anti-scratch layer that minimizes scratches when cleaning the lens with a cloth or bumps that can cause scratches.\r\n\r\n+ Anti-grease / fingerprint: grease or fingerprints on the glass surface will be easily wiped off in a split second.', 635000, NULL, '2022-05-16 12:20:07', 12, 17, 9, 0, NULL),
(66, 'Hoya Stellify phoenix', 0, 'Hoya Phoenix - Japan transparent lenses, help you see everything in the sharpest way. No other lens gives you clear vision, is so lightweight and supple. In fact, Hoya Pheonix can take down opponents with his superior advantages.\r\n\r\nHVP coating is 95% anti-reflective, 5 times more scratch resistant and 2 times more water resistant than ordinary lenses.\r\n\r\n- The advantages of Phoenix – Hoya tròng lenses\r\n\r\n+ The most suitable material for an active lifestyle\r\n\r\n+ Very comfortable to wear\r\n\r\n+ Natural, clear vision and excellent color perception\r\n\r\n+ Highest optical quality\r\n\r\n+ Limit the risk of glass breakage or cracking due to daily dynamic activities', 926000, NULL, '2022-03-16 12:22:29', 12, 17, 9, 0, NULL),
(67, 'VX FT 1.56 HC', 0, 'PRODUCT NAME: FT 1.56 HC\r\n\r\nSPRAYADD: SPH + 0.00 → +3.00\r\n\r\n                            ADD +1.00 →+3.00\r\n\r\nADVANTAGES: limited scratch, UV400 coating – UV protection.\r\n\r\nGLASSES\r\n\r\nModern medicine lenses according to German technology standards are made in Vietnam with superior features to help users enjoy clear vision and comfortable use.', 170000, NULL, '2022-05-16 12:28:41', 12, 16, 8, 0, NULL),
(68, 'VX FT 1.56 SUNACTIVE SHMC', 0, 'ADVANTAGES: limited scratch, multi-layer anti-reflective coating, anti-glare, water-repellent, steaming quickly, hard to stick to dust, durable, UV resistant, discolored when exposed to light (smoky gray change).\r\n\r\nModern medicine lenses according to German technology standards are made in Vietnam with superior features to help users enjoy clear vision and comfortable use.', 595000, NULL, '2022-04-16 12:37:04', 12, 16, 8, 0, NULL),
(69, 'VX SV 1.67 ASP SHMC', 0, 'PRODUCT NAME: SV 1.67 ASP SHMC (LOW)\r\n\r\nADVANTAGES: limited scratch, multi-layer anti-reflective coating, anti-glare, water-slip, quick steaming, difficult to stick to dust, color fastness, UV protection, Aspheric - aspherical design (thin edge, thin center).\r\n\r\n\r\nModern medicine lenses according to German technology standards are made in Vietnam with superior features to help users enjoy clear vision and comfortable use.', 850000, NULL, '2022-03-16 12:41:27', 12, 16, 8, 0, NULL),
(70, 'VX SV Blue Cut 1.61', 0, 'PRODUCT NAME: SV 1.61 ACR – ASP SHMC BLUE (HIGH)\r\n\r\nADVANTAGES: limited scratch, multi-layer anti-reflective coating, anti-glare, water-repellent, quick steaming, difficult to adhere to dust, color fastness, UV protection, anti-blue light harmful to eyes, Aspheric - aspherical design (thin edge, thin center).\r\n\r\nModern medicine lenses according to German technology standards are made in Vietnam with superior features to help users enjoy clear vision and comfortable use.', 429000, NULL, '2022-01-16 12:45:53', 12, 16, 8, 0, NULL),
(71, 'LAVIER BROWN', 0, 'Degree range 0 – 10 degrees\r\nGDia 13.6 mm\r\nLens Curvature (B.C) 8.7\r\nWater content 33%\r\nExpiry date 3 months\r\nSize Medium\r\nStyle Gentle, natural\r\nRecommend from Caras Lens Tone Black Eye\r\nLens technology\r\nRealcoT: Strengthens the glossy film to create depth, the eyes become more sparkling.\r\nAnti UV: Prevents ultraviolet rays from the Sun as well as from computers and electronic devices.\r\nNano Oxy-Hydrogen: Enhances moisture and air permeability, bringing health and comfort to use.\r\nNano AntiX: Antibacterial nanomolecules, eye protection layer against dusty environment.\r\nEtafilcon A: Helps to enhance eyesight for a clear and pure look.', 550000, NULL, '2022-04-19 06:12:25', 17, 19, 10, 0, NULL),
(72, 'LAVIER GRAY', 0, '0 – 10 degrees\r\nGDia 13.6 mm\r\nThe curvature of the lens is 8.7 degrees\r\nWater content 33%\r\nExpiry date 3 months\r\nSize Medium\r\nStyle Warm ash gray\r\nRecommend from Caras Lens Suitable for all eye tones\r\nLens technology\r\nRealcoT: Strengthens the glossy film to create depth, the eyes become more sparkling.\r\nAnti UV: Prevents ultraviolet rays from the Sun as well as from computers and electronic devices.\r\nNano Oxy-Hydrogen: Enhances moisture and air permeability, bringing health and comfort to use.\r\nNano AntiX: Antibacterial nanomolecules, eye protection layer against dusty environment.\r\nEtafilcon A: Helps to enhance eyesight for a clear and pure look.', 570000, NULL, '2022-06-19 06:22:47', 17, 19, 10, 0, NULL),
(73, 'LAVIER CHOCO', 0, '0 – 10 degrees\r\nGDia 13.6 mm\r\nThe curvature of the lens is 8.7 degrees\r\nWater content 33%\r\nExpiry date 3 months\r\nSize Medium\r\nStyle Warm ash gray\r\nRecommend from Caras Lens Suitable for all eye tones\r\nLens technology\r\nRealcoT: Strengthens the glossy film to create depth, the eyes become more sparkling.\r\nAnti UV: Prevents ultraviolet rays from the Sun as well as from computers and electronic devices.\r\nNano Oxy-Hydrogen: Enhances moisture and air permeability, bringing health and comfort to use.\r\nNano AntiX: Antibacterial nanomolecules, eye protection layer against dusty environment.\r\nEtafilcon A: Helps to enhance eyesight for a clear and pure look.', 550000, NULL, '2022-06-19 06:39:40', 17, 19, 2, 0, NULL),
(74, 'SLAYDY SILVER', 0, 'color\r\ngray\r\npower range\r\nplano - 10.0\r\ng.dia\r\n13.6\r\nbase curve (b.c)\r\n8.6\r\nfrequency\r\n6-month', 520000, NULL, '2022-07-19 06:52:10', 17, 18, 3, 0, NULL),
(76, 'BUBBLY IRIS', 0, 'color  purple\r\npower range plano - 10.0\r\ng.dia  13.7\r\nbase curve (b.c) 8.6\r\nfrequency 6-month', 380000, NULL, '2022-07-19 07:05:34', 17, 18, 3, 0, NULL),
(77, 'ewwq', 0, 'ssqfsqfqsfqfq', 11111111, NULL, '2022-05-28 14:27:33', 9, 9, 4, 0, '2022-07-28 14:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_properties_frame`
--

CREATE TABLE `product_properties_frame` (
  `id_properties` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nose_pads` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'frame'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_properties_frame`
--

INSERT INTO `product_properties_frame` (`id_properties`, `product_id`, `color`, `material`, `nose_pads`, `size`, `category`) VALUES
(5, 11, 'black', 'metal', 'have nose pads', 'medium', 'frame'),
(6, 12, 'blue , green', 'metal', 'have nose pads', 'medium', 'frame'),
(7, 13, 'brown', 'metal', 'have nose pads', 'medium', 'frame'),
(8, 14, 'black , red', 'metal', 'no nose-pad', 'medium', 'frame'),
(9, 15, 'green', 'metal', 'have nose pads', 'medium', 'frame'),
(10, 16, 'orange , green', 'metal', 'have nose pads', 'medium', 'frame'),
(11, 17, 'blue , yellow', 'metal', 'have nose pads', 'medium', 'frame'),
(12, 18, 'blue , pink', 'metal', 'have nose pads', 'medium', 'frame'),
(13, 19, 'gray m purple', 'metal', 'have nose pads', 'big', 'frame'),
(15, 21, 'black , blue, orange', 'metal', 'have nose pads', 'big', 'frame'),
(16, 22, 'pink , blue', 'plastic', 'no nose-pad', 'big', 'frame'),
(17, 23, 'green , yellow , gray', 'plastic', 'no nose-pad', 'big', 'frame'),
(18, 24, 'black , red , yellow', 'plastic', 'no nose-pad', 'medium', 'frame'),
(19, 25, 'blue , black', 'plastic', 'no nose-pad', 'big', 'frame'),
(20, 26, 'yellow', 'metal', 'have nose pads', 'medium', 'frame'),
(21, 27, 'blue', 'plastic', 'no nose-pad', 'big', 'frame'),
(22, 28, 'black', 'metal', 'have nose pads', 'big', 'frame'),
(23, 29, 'gray', 'plastic', 'have nose pads', 'medium', 'frame'),
(24, 30, 'grey', 'plastic', 'have nose pads', 'medium', 'frame'),
(25, 31, 'yellow , black', 'metal', 'have nose pads', 'big', 'frame'),
(26, 32, 'brown', 'plastic', 'no nose-pad', 'big', 'frame'),
(27, 33, 'black', 'plastic', 'no nose-pad', 'big', 'frame'),
(28, 34, 'black , red', 'plastic', 'no nose-pad', 'big', 'frame'),
(29, 35, 'black', 'plastic', 'no nose-pad', 'medium', 'frame'),
(30, 36, 'black', 'metal', 'have nose pads', 'medium', 'frame'),
(31, 37, 'black , brown , red', 'plastic', 'no nose-pad', 'medium', 'frame'),
(32, 38, 'red , yellow', 'metal', 'have nose pads', 'medium', 'frame'),
(33, 39, 'black', 'plastic', 'no nose-pad', 'medium', 'frame'),
(34, 40, 'silver', 'metal', 'have nose pads', 'medium', 'frame'),
(35, 41, 'yellow , gray', 'metal', 'have nose pads', 'medium', 'frame'),
(36, 42, 'gray , black', 'metal', 'have nose pads', 'medium', 'frame'),
(37, 43, 'gray , yellow', 'metal', 'have nose pads', 'medium', 'frame'),
(38, 44, 'brown , black', 'plastic', 'no nose-pad', 'big', 'frame'),
(39, 45, 'black , brown', 'metal', 'have nose pads', 'medium', 'frame'),
(40, 46, 'pink , black , brown', 'metal', 'have nose pads', 'medium', 'frame'),
(41, 47, 'blue , white', 'plastic', 'no nose-pad', 'big', 'frame'),
(42, 48, 'black', 'plastic', 'no nose-pad', 'big', 'frame'),
(43, 49, 'brown', 'plastic', 'no nose-pad', 'big', 'frame'),
(44, 50, 'gray', 'metal', 'have nose pads', 'medium', 'frame'),
(45, 77, NULL, 'ewq', 'ewqeqw', '12', 'frame');

-- --------------------------------------------------------

--
-- Table structure for table `product_properties_lenses`
--

CREATE TABLE `product_properties_lenses` (
  `id_properties` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `extract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coating` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'lenses',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_properties_lenses`
--

INSERT INTO `product_properties_lenses` (`id_properties`, `product_id`, `extract`, `coating`, `material`, `special`, `category`, `color`) VALUES
(6, 51, '1.56', 'hard coated', 'Polycarbonate', 'no', 'lenses', 'transparent'),
(7, 52, '1.56', 'Multi-coat (HMC)', 'Polycarbonate', 'The ability to change color (smoky gray) when exposed to UV light helps to soothe eyes while ensuring clear and sharp vision', 'lenses', 'no color'),
(8, 53, '1.56', 'Multi-coat (HMC)', 'Polycarbonate', 'Equipped with an additional coating that blocks blue light emitted from electronic devices, helping to reduce eye strain and fatigue.', 'lenses', 'no color'),
(9, 54, '1.60', 'Multi-coat (HMC)', 'Polycarbonate', 'no', 'lenses', 'no color'),
(10, 55, '1.50', 'Crizal Sapphire UV - ESPF35', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'n'),
(11, 56, '1.59', 'Crizal Sapphire UV - ESPF35', 'Polycarbonate', 'Filter harmful blue-violet light.  100% UV protection  .Enhanced clarity clarity  .Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(12, 57, '1.59', 'Crizal Sapphire UV - ESPF35', 'Polycarbonate', 'Filter harmful blue-violet light.  100% UV protection  .Enhanced clarity clarity  .Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(13, 58, '1.50', 'Crizal Sapphire UV - ESPF35', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(14, 59, '1.56', 'Chemi U2', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'gray'),
(15, 60, '1.67', 'Chemi U2', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(16, 61, '1.56', 'Chemi U2', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(17, 62, '1.60', 'Chemi U2', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(18, 63, '1.60', 'SFT', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(19, 64, '1.56', 'HVP', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(20, 65, '1.60', 'HVP', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(21, 66, '1.53', 'HVP', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(22, 67, '1.56', 'UV400', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(23, 68, '1.56', 'UV400', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(24, 69, '1.67', 'UV400', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(25, 70, '1.60', 'UV400', 'Polycarbonate', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 'no color'),
(26, 71, '1.56', 'UV400', 'SILICONE HYDROGEL', 'In particular, this is also a high-end glass line with a soft material that is twice as moist. Recommended for her with dry, weak eyes or to go to school or work with a frequency of use up to 14 hours/day.', 'lenses', 'brown'),
(27, 72, '1.50', 'Multi-coat (HMC)', 'SILICONE HYDROGEL', 'Equipped with an additional coating that blocks blue light emitted from electronic devices, helping to reduce eye strain and fatigue.', 'lenses', 'gray'),
(28, 73, '1.60', 'Multi-coat (HMC)', 'SILICONE HYDROGEL', 'Equipped with an additional coating that blocks blue light emitted from electronic devices, helping to reduce eye strain and fatigue.', 'lenses', 'brown'),
(29, 74, '1.53', 'HVP', 'POLIHEMA', 'Filter out harmful blue light  .100% UV protection.  Enhanced clarity clarity.  Limit scratches, dust, fingerprints, water.', 'lenses', 's'),
(31, 76, '1.53', 'Multi-coat (HMC)', 'POLIHEMA', 'Equipped with an additional coating that blocks blue light emitted from electronic devices, helping to reduce eye strain and fatigue.', 'lenses', 'purple');

-- --------------------------------------------------------

--
-- Table structure for table `rating_product`
--

CREATE TABLE `rating_product` (
  `id_rating` int(10) NOT NULL,
  `account_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `rate` tinyint(4) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating_product`
--

INSERT INTO `rating_product` (`id_rating`, `account_id`, `product_id`, `rate`, `content`) VALUES
(10, 1, 38, 4, 'sdfsadfsafd'),
(11, 1, 48, 5, 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_garbage`
--
ALTER TABLE `account_garbage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `FK_CATEGORY` (`parent_category`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id_ip`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `FK_PRODUCT_BRAND` (`brand_id`),
  ADD KEY `FK_PRODUCT_CATEGORY` (`category_id`),
  ADD KEY `FK_PRODUCT_COUNTRY` (`country_id`);

--
-- Indexes for table `product_properties_frame`
--
ALTER TABLE `product_properties_frame`
  ADD PRIMARY KEY (`id_properties`),
  ADD KEY `FK_GLASSES_PRODUCT` (`product_id`);

--
-- Indexes for table `product_properties_lenses`
--
ALTER TABLE `product_properties_lenses`
  ADD PRIMARY KEY (`id_properties`),
  ADD KEY `FK_LENSES_PRODUCT` (`product_id`);

--
-- Indexes for table `rating_product`
--
ALTER TABLE `rating_product`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `FK_RATING_PRODUCT` (`product_id`),
  ADD KEY `FK_RATING_ACCOUNT` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id_image` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `ip`
--
ALTER TABLE `ip`
  MODIFY `id_ip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `product_properties_frame`
--
ALTER TABLE `product_properties_frame`
  MODIFY `id_properties` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_properties_lenses`
--
ALTER TABLE `product_properties_lenses`
  MODIFY `id_properties` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rating_product`
--
ALTER TABLE `rating_product`
  MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `FK_IMAGES_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_PRODUCT_BRAND` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id_brand`),
  ADD CONSTRAINT `FK_PRODUCT_CATEGORY` FOREIGN KEY (`category_id`) REFERENCES `category_product` (`id_category`),
  ADD CONSTRAINT `FK_PRODUCT_COUNTRY` FOREIGN KEY (`country_id`) REFERENCES `country` (`id_country`);

--
-- Constraints for table `product_properties_frame`
--
ALTER TABLE `product_properties_frame`
  ADD CONSTRAINT `FK_GLASSES_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product_properties_lenses`
--
ALTER TABLE `product_properties_lenses`
  ADD CONSTRAINT `FK_LENSES_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `rating_product`
--
ALTER TABLE `rating_product`
  ADD CONSTRAINT `FK_RATING_ACCOUNT` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `FK_RATING_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
