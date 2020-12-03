-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 01 déc. 2020 à 04:39
-- Version du serveur :  10.3.25-MariaDB-log-cll-lve
-- Version de PHP : 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cocknoti_dev_safa9at`
--

--
-- Déchargement des données de la table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `the_sign`, `compatible_with`, `created_at`, `updated_at`) VALUES
(1, 'dinar', 'dzd', 'ccp', '2020-11-25 17:39:00', '2020-11-25 17:39:00'),
(2, 'euro', '€', 'paysera,skrill', '2020-11-25 21:26:00', '2020-11-27 02:27:59'),
(3, 'usd', '$', 'paypal,skrill,payeer,safa9at', '2020-11-25 21:26:00', '2020-11-27 21:32:22');

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(10, 'services', 'services', 'Service', 'Services', 'voyager-truck', 'App\\Service', 'TCG\\Voyager\\Policies\\ServicePolicy', 'App\\Http\\Controllers\\Voyager\\ServiceController', NULL, 1, 0, '{\"order_column\":\"the_status\",\"order_display_column\":\"the_status\",\"order_direction\":\"desc\",\"default_search_key\":\"the_status\",\"scope\":null}', '2019-07-01 19:54:24', '2019-09-05 15:37:40'),
(13, 'currencies', 'currencies', 'Currency', 'Currencies', NULL, 'App\\Currency', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-01 23:55:32', '2019-08-14 02:30:30'),
(14, 'payment_methods', 'payment-methods', 'Payment Method', 'Payment Methods', NULL, 'App\\PaymentMethod', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-01 23:58:18', '2020-11-27 18:18:19'),
(15, 'conversations', 'conversations', 'Conversation', 'Conversations', NULL, 'App\\Conversation', NULL, 'App\\Http\\Controllers\\Voyager\\ConversationController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-02 04:08:44', '2019-07-02 05:39:46'),
(17, 'payments', 'payments', 'Payment', 'Payments', NULL, 'App\\Payment', NULL, 'App\\Http\\Controllers\\Voyager\\PaymentController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-02 20:05:59', '2019-07-11 21:25:57'),
(18, 'deposits', 'deposits', 'Deposit', 'Deposits', 'voyager-paper-plane', 'App\\Deposit', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"the_queue\",\"order_display_column\":\"the_queue\",\"order_direction\":\"asc\",\"default_search_key\":\"the_queue\",\"scope\":null}', '2019-07-04 01:44:48', '2019-08-25 08:06:27'),
(19, 'withdraws', 'withdraws', 'Withdraw', 'Withdraws', NULL, 'App\\Withdraw', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"the_queue\",\"order_display_column\":\"the_queue\",\"order_direction\":\"asc\",\"default_search_key\":\"the_queue\",\"scope\":null}', '2019-07-06 00:44:45', '2019-07-06 00:55:02'),
(22, 'service_categories', 'service-categories', 'Service Category', 'Service Categories', NULL, 'App\\ServiceCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-11 14:32:01', '2019-07-11 14:34:50'),
(23, 'service_sub_categories', 'service-sub-categories', 'Service Sub Category', 'Service Sub Categories', NULL, 'App\\ServiceSubCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-11 14:45:23', '2020-11-28 21:49:02'),
(24, 'notifications', 'notifications', 'Notification', 'Notifications', NULL, 'App\\Notification', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-21 13:06:47', '2019-07-21 13:07:48'),
(25, 'balances', 'balances', 'Balance', 'Balances', NULL, 'App\\Balance', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-09-02 04:58:05', '2019-09-02 04:58:05'),
(27, 'exchanges', 'exchanges', 'Exchange', 'Exchanges', 'voyager-bar-chart', '\\App\\Exchange', '\\App\\Policies\\ExchangePolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-27 01:44:27', '2020-11-28 16:12:15');



--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(101, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 10, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 0, '{}', 5),
(103, 10, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 0, '{}', 17),
(104, 10, 'price', 'text', 'Price', 1, 0, 1, 1, 1, 0, '{}', 13),
(105, 10, 'fees', 'text', 'Fees', 1, 1, 1, 1, 1, 0, '{}', 15),
(106, 10, 'p_method', 'hidden', 'P Method', 1, 0, 1, 1, 1, 1, '{}', 21),
(107, 10, 'currency', 'hidden', 'Currency', 1, 0, 1, 1, 1, 1, '{}', 22),
(108, 10, 'pm_slug', 'hidden', 'Pm Slug', 0, 0, 0, 0, 0, 0, '{}', 10),
(109, 10, 'duration', 'select_dropdown', 'Duration', 1, 0, 1, 1, 1, 0, '{\"options\":{\"0\":\"---------\",\"1\":\"30 - 60 Minutes\",\"2\":\"01 - 06 Houres\",\"3\":\"06 - 12 Houres\",\"4\":\"12 - 24 Houres\",\"5\":\"01 - 03 Days\",\"6\":\"03 - 06 Days\",\"7\":\"06 - 12 Days\",\"8\":\"12 - 24 Days\",\"9\":\"24 - 48 Days\",\"10\":\"01 - 03 Months\",\"11\":\"03 - 06 Months\",\"12\":\"06 - 12 Months\"}}', 16),
(110, 10, 'purchases_number', 'number', 'Purchases Number', 1, 1, 1, 0, 0, 0, '{}', 3),
(111, 10, 'remaining', 'number', 'Quantity', 1, 1, 1, 1, 1, 0, '{}', 14),
(112, 10, 'img_path', 'image', 'Img Path', 1, 0, 1, 1, 1, 0, '{}', 18),
(113, 10, 'the_status', 'select_dropdown', 'The Status', 1, 1, 1, 1, 0, 0, '{\"default\":\"open\",\"options\":{\"open\":\"open\",\"closed\":\"closed\",\"pending\":\"pending\"}}', 2),
(114, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 19),
(115, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 1, 0, 0, 0, '{}', 20),
(126, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(127, 13, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(128, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(129, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(130, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(131, 14, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(132, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(133, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(134, 10, 'service_belongsto_payment_method_relationship_1', 'relationship', 'p_method', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\PaymentMethod\",\"table\":\"payment_methods\",\"type\":\"belongsTo\",\"column\":\"p_method\",\"key\":\"name\",\"label\":\"name\",\"pivot_table\":\"balances\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(135, 10, 'service_belongsto_currency_relationship', 'relationship', 'currency', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Currency\",\"table\":\"currencies\",\"type\":\"belongsTo\",\"column\":\"currency\",\"key\":\"name\",\"label\":\"name\",\"pivot_table\":\"balances\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(137, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(138, 15, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(139, 15, 'service_id', 'text', 'Service Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(140, 15, 'payment_id', 'text', 'Payment Id', 1, 1, 1, 1, 1, 1, '{}', 4),
(141, 15, 'the_status', 'text', 'The Status', 1, 1, 1, 1, 1, 1, '{}', 5),
(142, 15, 'notes', 'text', 'Notes', 0, 1, 1, 1, 1, 1, '{}', 6),
(143, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(144, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(158, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(159, 17, 'user_id', 'hidden', 'User Id', 1, 0, 1, 1, 0, 0, '{}', 3),
(160, 17, 'service_id', 'hidden', 'Service Id', 1, 0, 1, 1, 0, 0, '{}', 5),
(161, 17, 'quantity', 'text', 'Quantity', 1, 1, 1, 1, 0, 1, '{}', 8),
(162, 17, 'payment_method', 'text', 'Payment Method', 1, 1, 1, 1, 0, 1, '{}', 9),
(163, 17, 'price', 'text', 'Price', 1, 1, 1, 1, 0, 1, '{}', 10),
(164, 17, 'fees', 'text', 'Fees', 1, 1, 1, 1, 0, 1, '{}', 11),
(165, 17, 'total', 'text', 'Total', 1, 0, 1, 1, 0, 1, '{}', 12),
(166, 17, 'current_balance', 'text', 'Current Balance', 1, 0, 1, 1, 0, 0, '{}', 13),
(167, 17, 'new_balance', 'text', 'New Balance', 1, 0, 1, 1, 0, 0, '{}', 14),
(168, 17, 'the_status', 'text', 'The Status', 1, 1, 1, 1, 0, 0, '{}', 15),
(169, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 16),
(170, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 17),
(171, 17, 'conversation_id', 'hidden', 'Conversation Id', 1, 0, 1, 1, 0, 0, '{}', 7),
(172, 17, 'payment_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 0, 0, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"balances\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(173, 17, 'payment_belongsto_service_relationship', 'relationship', 'services', 0, 1, 1, 1, 0, 0, '{\"model\":\"App\\\\Service\",\"table\":\"services\",\"type\":\"belongsTo\",\"column\":\"service_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"balances\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(174, 17, 'payment_belongsto_conversation_relationship', 'relationship', 'conversations', 0, 1, 1, 1, 0, 1, '{\"model\":\"App\\\\Conversation\",\"table\":\"conversations\",\"type\":\"belongsTo\",\"column\":\"conversation_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"balances\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(175, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(176, 18, 'user_id', 'hidden', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(178, 18, 'amount', 'number', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 7),
(179, 18, 'send_date', 'timestamp', 'Send Date', 1, 1, 1, 1, 1, 1, '{}', 8),
(180, 18, 'img_path', 'image', 'Img Path', 0, 1, 1, 1, 1, 1, '{}', 2),
(181, 18, 'the_status', 'select_dropdown', 'The Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"Open\",\"options\":{\"Accepted\":\"Accepted\",\"Open\":\"Open\",\"Refused\":\"Refused\"}}', 12),
(182, 18, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 9),
(183, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 1, 1, 1, 1, '{}', 10),
(184, 18, 'deposit_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"balances\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(186, 18, 'p_method', 'text', 'P Method', 1, 1, 1, 1, 1, 1, '{}', 4),
(187, 18, 'currency', 'text', 'Currency', 1, 1, 1, 1, 1, 1, '{}', 6),
(188, 18, 'the_queue', 'text', 'The Queue', 0, 1, 1, 1, 1, 1, '{}', 11),
(189, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(190, 19, 'user_id', 'hidden', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 4),
(191, 19, 'p_method', 'hidden', 'P Method', 1, 1, 1, 1, 1, 1, '{}', 6),
(192, 19, 'currency', 'hidden', 'Currency', 1, 1, 1, 1, 1, 1, '{}', 8),
(193, 19, 'amount', 'number', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 9),
(194, 19, 'the_queue', 'number', 'The Queue', 1, 1, 1, 1, 1, 1, '{}', 2),
(195, 19, 'the_status', 'text', 'The Status', 1, 1, 1, 1, 1, 1, '{}', 10),
(196, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 11),
(197, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(198, 19, 'withdraw_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(199, 19, 'withdraw_belongsto_payment_method_relationship', 'relationship', 'payment_methods', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\PaymentMethod\",\"table\":\"payment_methods\",\"type\":\"belongsTo\",\"column\":\"p_method\",\"key\":\"name\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(200, 19, 'withdraw_belongsto_currency_relationship', 'relationship', 'currencies', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Currency\",\"table\":\"currencies\",\"type\":\"belongsTo\",\"column\":\"currency\",\"key\":\"name\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(205, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(206, 22, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(207, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(208, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(209, 22, 'slug_name', 'text', 'Slug Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(210, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(211, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(212, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(213, 23, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(214, 23, 'slug_name', 'text', 'Slug Name', 1, 1, 1, 1, 1, 1, '{}', 5),
(215, 10, 'service_belongsto_service_category_relationship', 'relationship', 'service_categories', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\ServiceCategory\",\"table\":\"service_categories\",\"type\":\"belongsTo\",\"column\":\"category\",\"key\":\"slug_name\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(216, 10, 'service_belongsto_service_sub_category_relationship', 'relationship', 'service_sub_categories', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\ServiceSubCategory\",\"table\":\"service_sub_categories\",\"type\":\"belongsTo\",\"column\":\"sub_category\",\"key\":\"slug_name\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(217, 10, 'category', 'text', 'Category', 1, 0, 1, 1, 1, 1, '{}', 7),
(218, 10, 'sub_category', 'text', 'Sub Category', 1, 0, 1, 1, 1, 1, '{}', 9),
(219, 17, 'currency', 'text', 'Currency', 1, 1, 1, 1, 1, 1, '{}', 7),
(221, 10, 'creator_id', 'hidden', 'Creator Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(222, 24, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(223, 24, 'url', 'text', 'Url', 1, 0, 1, 1, 1, 1, '{}', 2),
(224, 24, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(225, 24, 'content', 'rich_text_box', 'Content', 1, 0, 1, 1, 1, 1, '{}', 4),
(226, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(227, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(228, 13, 'the_sign', 'text', 'The Sign', 1, 1, 1, 1, 1, 1, '{}', 3),
(229, 13, 'compatible_with', 'text', 'Compatible With', 1, 1, 1, 1, 1, 1, '{}', 4),
(230, 18, 'p_info', 'text', 'P Info', 0, 1, 1, 0, 1, 0, '{}', 3),
(231, 18, 'urgent_verification', 'text', 'Urgent Verification', 1, 1, 1, 1, 1, 1, '{}', 10),
(232, 10, 'num_raters', 'text', 'Num Raters', 1, 1, 1, 1, 1, 1, '{}', 16),
(233, 10, 'num_stars', 'text', 'Num Stars', 1, 1, 1, 1, 1, 1, '{}', 17),
(234, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 1, 0, 0, 1, '{}', 21),
(235, 25, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(236, 25, 'user_id', 'text', 'User Id', 1, 1, 1, 0, 0, 0, '{}', 2),
(237, 25, 'ccp_dinar', 'text', 'Ccp Dinar', 1, 1, 1, 0, 0, 0, '{}', 3),
(238, 25, 'paypal_usd', 'text', 'Paypal Usd', 1, 1, 1, 0, 0, 0, '{}', 4),
(239, 25, 'paypal_euro', 'text', 'Paypal Euro', 1, 1, 1, 0, 0, 0, '{}', 5),
(240, 25, 'paysera_usd', 'text', 'Paysera Usd', 1, 1, 1, 0, 0, 0, '{}', 6),
(241, 25, 'paysera_euro', 'text', 'Paysera Euro', 1, 1, 1, 0, 0, 0, '{}', 7),
(242, 25, 'mobilis_dinar', 'text', 'Mobilis Dinar', 1, 1, 1, 0, 0, 0, '{}', 8),
(243, 25, 'ooredoo_dinar', 'text', 'Ooredoo Dinar', 1, 1, 1, 0, 0, 0, '{}', 9),
(244, 25, 'djezzy_dinar', 'text', 'Djezzy Dinar', 1, 1, 1, 0, 0, 0, '{}', 10),
(245, 25, 'hold_ccp_dinar', 'text', 'Hold Ccp Dinar', 1, 1, 1, 0, 0, 0, '{}', 11),
(246, 25, 'hold_flexy_dinar', 'text', 'Hold Flexy Dinar', 1, 1, 1, 0, 0, 0, '{}', 12),
(247, 25, 'hold_paypal_usd', 'text', 'Hold Paypal Usd', 1, 1, 1, 0, 0, 0, '{}', 13),
(248, 25, 'hold_paypal_euro', 'text', 'Hold Paypal Euro', 1, 1, 1, 0, 0, 0, '{}', 14),
(249, 25, 'hold_paysera_usd', 'text', 'Hold Paysera Usd', 1, 1, 1, 0, 0, 0, '{}', 15),
(250, 25, 'hold_paysera_euro', 'text', 'Hold Paysera Euro', 1, 1, 1, 0, 0, 0, '{}', 16),
(251, 25, 'hold_mobilis_dinar', 'text', 'Hold Mobilis Dinar', 1, 1, 1, 0, 0, 0, '{}', 17),
(252, 25, 'hold_ooredoo_dinar', 'text', 'Hold Ooredoo Dinar', 1, 1, 1, 0, 0, 0, '{}', 18),
(253, 25, 'hold_djezzy_dinar', 'text', 'Hold Djezzy Dinar', 1, 1, 1, 0, 0, 0, '{}', 19),
(254, 25, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, '{}', 20),
(255, 25, 'updated_at', 'timestamp', 'Updated At', 1, 0, 1, 0, 0, 0, '{}', 21),
(269, 27, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(270, 27, 'first_pm', 'text', 'First Pm', 1, 1, 1, 1, 1, 1, '{}', 2),
(271, 27, 'second_pm', 'text', 'Second Pm', 1, 1, 1, 1, 1, 1, '{}', 3),
(272, 27, 'f_stock', 'text', 'F Stock', 1, 1, 1, 1, 1, 1, '{}', 4),
(273, 27, 's_stock', 'text', 'S Stock', 1, 1, 1, 1, 1, 1, '{}', 5),
(274, 27, 'buy', 'text', 'Buy', 1, 1, 1, 1, 1, 1, '{}', 6),
(275, 27, 'sell', 'text', 'Sell', 1, 1, 1, 1, 1, 1, '{}', 7),
(276, 27, 'max_buy', 'text', 'Max Buy', 1, 1, 1, 1, 1, 1, '{}', 8),
(277, 27, 'max_sell', 'text', 'Max Sell', 1, 1, 1, 1, 1, 1, '{}', 9),
(278, 27, 'market_price', 'text', 'Market Price', 1, 1, 1, 1, 1, 1, '{}', 10),
(279, 27, 'notes', 'text', 'Notes', 1, 1, 1, 1, 1, 1, '{}', 11),
(280, 27, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(281, 27, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(282, 14, 'color', 'color', 'Color', 1, 1, 1, 1, 1, 1, '{}', 3),
(283, 14, 'icon', 'image', 'Icon', 1, 1, 1, 1, 1, 1, '{}', 4),
(284, 14, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"on\",\"options\":{\"on\":\"ON\",\"off\":\"OFF\"}}', 5),
(285, 27, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"off\",\"options\":{\"on\":\"on\",\"off\":\"off\"}}', 12),
(286, 23, 'service_sub_category_hasone_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\ServiceCategory\",\"table\":\"service_categories\",\"type\":\"belongsTo\",\"column\":\"cat_slug\",\"key\":\"slug_name\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(287, 23, 'cat_slug', 'text', 'Cat Slug', 1, 1, 1, 1, 1, 1, '{}', 4),
(288, 22, 'service_category_hasmany_service_sub_category_relationship', 'relationship', 'service_sub_categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\ServiceCategory\",\"table\":\"service_sub_categories\",\"type\":\"hasMany\",\"column\":\"cat_slug\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"activity_log\",\"pivot\":\"0\",\"taggable\":null}', 5);


--
-- Déchargement des données de la table `exchanges`
--

INSERT INTO `exchanges` (`id`, `first_pm`, `second_pm`, `f_stock`, `s_stock`, `buy`, `sell`, `max_buy`, `max_sell`, `market_price`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, 'paypal_usd', 'ccp_dinar', 1000.00, 1000.00, 180.00, 170.00, 100.00, 100.00, 180.00, 'no notes', 'off', NULL, '2020-11-27 02:06:40'),
(3, 'paypal_usd', 'skrill_usd', 1000.00, 1000.00, 1.00, 1.00, 1000.00, 1000.00, 1.00, 'no notes', 'off', '2020-11-27 03:23:44', '2020-11-27 03:23:44'),
(4, 'paypal_usd', 'payeer_usd', 1000.00, 1000.00, 1.00, 1.00, 1000.00, 1000.00, 1.00, 'no notes', 'off', '2020-11-27 03:24:28', '2020-11-27 03:24:28'),
(5, 'paysera_euro', 'ccp_dinar', 1000.00, 1000.00, 210.00, 200.00, 1000.00, 1000.00, 201.00, 'no notes', 'on', '2020-11-27 03:35:00', '2020-11-28 16:13:09'),
(6, 'paysera_euro', 'skrill_usd', 1000.00, 1000.00, 1.20, 1.18, 1000.00, 1000.00, 1.19, 'no notes', 'off', '2020-11-27 03:37:00', '2020-11-27 03:56:49'),
(7, 'paysera_euro', 'payeer_usd', 1000.00, 1000.00, 1.20, 1.80, 1000.00, 1000.00, 1.19, 'no notes', 'off', '2020-11-27 03:38:19', '2020-11-27 03:38:19'),
(8, 'skrill_usd', 'ccp_dinar', 1000.00, 1000.00, 185.00, 170.00, 1000.00, 1000.00, 180.00, 'no notes', 'off', '2020-11-27 03:39:17', '2020-11-27 03:39:17'),
(9, 'skrill_usd', 'payeer_usd', 1000.00, 1000.00, 1.00, 1.00, 1000.00, 1000.00, 1.00, 'no notes', 'off', '2020-11-27 03:39:51', '2020-11-27 03:39:51'),
(10, 'paysera_euro', 'paypal_usd', 1000.00, 1000.00, 1.20, 1.18, 1000.00, 1000.00, 1.19, 'no notes', 'off', '2020-11-27 03:41:53', '2020-11-27 03:41:53'),
(11, 'safa9at_usd', 'ccp_dinar', 1000.00, 1000.00, 180.00, 179.00, 1000.00, 1000.00, 180.00, 'no notes', 'on', '2020-11-27 21:39:00', '2020-11-28 16:12:47'),
(12, 'paysera_euro', 'safa9at_usd', 1000.00, 1000.00, 1.11, 1.10, 100.00, 100.00, 1.11, 'no notes', 'on', '2020-11-28 16:15:48', '2020-11-28 16:15:48');


--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(2, 'navbar', '2019-07-08 02:30:07', '2019-07-08 02:30:07');

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-06-30 22:59:02', '2019-06-30 22:59:02', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 10, '2019-06-30 22:59:02', '2019-07-06 01:38:35', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 9, '2019-06-30 22:59:02', '2019-07-06 01:38:35', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 8, '2019-06-30 22:59:02', '2019-07-06 01:38:35', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 14, '2019-06-30 22:59:02', '2019-07-06 01:38:31', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-06-30 22:59:02', '2019-07-01 19:39:26', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-06-30 22:59:02', '2019-07-01 19:39:26', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-06-30 22:59:02', '2019-07-01 19:39:26', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-06-30 22:59:02', '2019-07-01 19:39:26', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 15, '2019-06-30 22:59:02', '2019-07-06 01:38:31', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 13, '2019-06-30 22:59:02', '2019-07-06 01:38:31', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 11, '2019-06-30 22:59:02', '2019-07-06 01:38:35', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 12, '2019-06-30 22:59:02', '2019-07-06 01:38:35', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-06-30 22:59:02', '2019-07-01 19:39:26', 'voyager.hooks', NULL),
(18, 1, 'Services', '', '_self', 'voyager-truck', NULL, NULL, 5, '2019-07-01 19:54:24', '2019-07-06 01:38:41', 'voyager.services.index', NULL),
(21, 1, 'Currencies', '', '_self', 'voyager-diamond', '#000000', NULL, 7, '2019-07-01 23:55:32', '2019-07-06 01:38:41', 'voyager.currencies.index', 'null'),
(22, 1, 'Payment Methods', '', '_self', 'voyager-paypal', '#000000', NULL, 6, '2019-07-01 23:58:18', '2019-07-06 01:38:41', 'voyager.payment-methods.index', 'null'),
(25, 1, 'Payments', '', '_self', 'voyager-paypal', '#000000', NULL, 2, '2019-07-02 20:05:59', '2019-07-04 01:30:42', 'voyager.payments.index', 'null'),
(26, 1, 'Deposits', '', '_self', 'voyager-paper-plane', NULL, NULL, 3, '2019-07-04 01:44:48', '2019-07-04 03:12:18', 'voyager.deposits.index', NULL),
(27, 1, 'Withdraws', '', '_self', 'voyager-dollar', '#000000', NULL, 4, '2019-07-06 00:44:45', '2019-07-06 01:40:03', 'voyager.withdraws.index', 'null'),
(28, 2, 'financialServices', '', '_self', NULL, '#000000', NULL, 1, '2019-07-08 02:35:40', '2019-07-22 14:31:19', NULL, ''),
(33, 2, 'payseraSold', 'services/financial-services/paysera-sold', '_self', NULL, '#000000', 28, 1, '2019-07-08 02:48:46', '2019-07-22 14:33:37', NULL, ''),
(34, 2, 'Paysera sold', '', '_self', NULL, '#000000', 32, 1, '2019-07-08 02:48:59', '2019-07-08 02:49:04', NULL, ''),
(35, 2, 'paypalSold', 'services/financial-services/paypal-sold', '_self', NULL, '#000000', 28, 2, '2019-07-08 02:49:12', '2019-07-22 14:33:59', NULL, ''),
(36, 2, 'Paypal sold', '', '_self', NULL, '#000000', 32, 2, '2019-07-08 02:49:33', '2019-07-08 02:49:38', NULL, ''),
(37, 2, 'khadamatSold', 'services/financial-services/khadamat-sold', '_self', NULL, '#000000', 28, 3, '2019-07-08 03:59:25', '2019-07-22 14:34:22', NULL, ''),
(39, 1, 'Service Categories', '', '_self', NULL, NULL, NULL, 16, '2019-07-11 14:32:01', '2019-07-11 14:32:01', 'voyager.service-categories.index', NULL),
(40, 1, 'Service Sub Categories', '', '_self', NULL, NULL, NULL, 17, '2019-07-11 14:45:23', '2019-07-11 14:45:23', 'voyager.service-sub-categories.index', NULL),
(41, 1, 'Notifications', '', '_self', NULL, NULL, NULL, 18, '2019-07-21 13:06:47', '2019-07-21 13:06:47', 'voyager.notifications.index', NULL),
(42, 2, 'other', 'services/financial-services', '_self', NULL, '#000000', 28, 4, '2019-07-22 14:42:55', '2019-07-22 14:44:30', NULL, ''),
(43, 1, 'Balances', '', '_self', NULL, NULL, NULL, 19, '2019-09-02 04:58:05', '2019-09-02 04:58:05', 'voyager.balances.index', NULL),
(45, 1, 'Exchanges', '', '_self', NULL, NULL, NULL, 20, '2020-11-27 01:44:27', '2020-11-27 01:44:27', 'voyager.exchanges.index', NULL);


--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('cocktillo@gmail.com', '$2y$10$9cjjdIxKy71kJfw9D9q3nOHOGyMRwpKcoOIQWFxXCeU3C/uY/BcdG', '2020-11-29 10:22:19');


--
-- Déchargement des données de la table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `color`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ccp', '#dfc115', 'payment-methods/November2020/LrYJYrD3Uqnq6NuAPCm6.png', 'on', '2020-11-25 17:38:00', '2020-11-27 19:53:16'),
(2, 'paysera', '', '', '', '2020-11-25 21:25:31', '2020-11-25 21:25:31'),
(3, 'paypal', '', '', '', '2020-11-25 21:25:39', '2020-11-25 21:25:39'),
(4, 'skrill', '', '', '', '2020-11-27 02:27:02', '2020-11-27 02:27:02'),
(5, 'payeer', '', '', '', '2020-11-27 02:27:11', '2020-11-27 02:27:11'),
(6, 'safa9at', '#001f3e', 'payment-methods/November2020/DlmyaiACz0oGBkIKJBSU.png', 'on', '2020-11-27 21:31:35', '2020-11-27 21:31:35');

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(2, 'browse_bread', NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(3, 'browse_database', NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(4, 'browse_media', NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(5, 'browse_compass', NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(6, 'browse_menus', 'menus', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(7, 'read_menus', 'menus', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(8, 'edit_menus', 'menus', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(9, 'add_menus', 'menus', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(10, 'delete_menus', 'menus', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(11, 'browse_roles', 'roles', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(12, 'read_roles', 'roles', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(13, 'edit_roles', 'roles', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(14, 'add_roles', 'roles', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(15, 'delete_roles', 'roles', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(16, 'browse_users', 'users', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(17, 'read_users', 'users', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(18, 'edit_users', 'users', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(19, 'add_users', 'users', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(20, 'delete_users', 'users', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(21, 'browse_settings', 'settings', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(22, 'read_settings', 'settings', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(23, 'edit_settings', 'settings', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(24, 'add_settings', 'settings', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(25, 'delete_settings', 'settings', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(26, 'browse_categories', 'categories', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(27, 'read_categories', 'categories', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(28, 'edit_categories', 'categories', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(29, 'add_categories', 'categories', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(30, 'delete_categories', 'categories', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(31, 'browse_posts', 'posts', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(32, 'read_posts', 'posts', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(33, 'edit_posts', 'posts', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(34, 'add_posts', 'posts', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(35, 'delete_posts', 'posts', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(36, 'browse_pages', 'pages', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(37, 'read_pages', 'pages', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(38, 'edit_pages', 'pages', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(39, 'add_pages', 'pages', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(40, 'delete_pages', 'pages', '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(41, 'browse_hooks', NULL, '2019-06-30 22:59:02', '2019-06-30 22:59:02'),
(57, 'browse_services', 'services', '2019-07-01 19:54:24', '2019-07-01 19:54:24'),
(58, 'read_services', 'services', '2019-07-01 19:54:24', '2019-07-01 19:54:24'),
(59, 'edit_services', 'services', '2019-07-01 19:54:24', '2019-07-01 19:54:24'),
(60, 'add_services', 'services', '2019-07-01 19:54:24', '2019-07-01 19:54:24'),
(61, 'delete_services', 'services', '2019-07-01 19:54:24', '2019-07-01 19:54:24'),
(72, 'browse_currencies', 'currencies', '2019-07-01 23:55:32', '2019-07-01 23:55:32'),
(73, 'read_currencies', 'currencies', '2019-07-01 23:55:32', '2019-07-01 23:55:32'),
(74, 'edit_currencies', 'currencies', '2019-07-01 23:55:32', '2019-07-01 23:55:32'),
(75, 'add_currencies', 'currencies', '2019-07-01 23:55:32', '2019-07-01 23:55:32'),
(76, 'delete_currencies', 'currencies', '2019-07-01 23:55:32', '2019-07-01 23:55:32'),
(77, 'browse_payment_methods', 'payment_methods', '2019-07-01 23:58:18', '2019-07-01 23:58:18'),
(78, 'read_payment_methods', 'payment_methods', '2019-07-01 23:58:18', '2019-07-01 23:58:18'),
(79, 'edit_payment_methods', 'payment_methods', '2019-07-01 23:58:18', '2019-07-01 23:58:18'),
(80, 'add_payment_methods', 'payment_methods', '2019-07-01 23:58:18', '2019-07-01 23:58:18'),
(81, 'delete_payment_methods', 'payment_methods', '2019-07-01 23:58:18', '2019-07-01 23:58:18'),
(82, 'browse_conversations', 'conversations', '2019-07-02 04:08:44', '2019-07-02 04:08:44'),
(83, 'read_conversations', 'conversations', '2019-07-02 04:08:44', '2019-07-02 04:08:44'),
(84, 'edit_conversations', 'conversations', '2019-07-02 04:08:44', '2019-07-02 04:08:44'),
(85, 'add_conversations', 'conversations', '2019-07-02 04:08:44', '2019-07-02 04:08:44'),
(86, 'delete_conversations', 'conversations', '2019-07-02 04:08:44', '2019-07-02 04:08:44'),
(92, 'browse_payments', 'payments', '2019-07-02 20:05:59', '2019-07-02 20:05:59'),
(93, 'read_payments', 'payments', '2019-07-02 20:05:59', '2019-07-02 20:05:59'),
(94, 'edit_payments', 'payments', '2019-07-02 20:05:59', '2019-07-02 20:05:59'),
(95, 'add_payments', 'payments', '2019-07-02 20:05:59', '2019-07-02 20:05:59'),
(96, 'delete_payments', 'payments', '2019-07-02 20:05:59', '2019-07-02 20:05:59'),
(97, 'browse_deposits', 'deposits', '2019-07-04 01:44:48', '2019-07-04 01:44:48'),
(98, 'read_deposits', 'deposits', '2019-07-04 01:44:48', '2019-07-04 01:44:48'),
(99, 'edit_deposits', 'deposits', '2019-07-04 01:44:48', '2019-07-04 01:44:48'),
(100, 'add_deposits', 'deposits', '2019-07-04 01:44:48', '2019-07-04 01:44:48'),
(101, 'delete_deposits', 'deposits', '2019-07-04 01:44:48', '2019-07-04 01:44:48'),
(102, 'browse_withdraws', 'withdraws', '2019-07-06 00:44:45', '2019-07-06 00:44:45'),
(103, 'read_withdraws', 'withdraws', '2019-07-06 00:44:45', '2019-07-06 00:44:45'),
(104, 'edit_withdraws', 'withdraws', '2019-07-06 00:44:45', '2019-07-06 00:44:45'),
(105, 'add_withdraws', 'withdraws', '2019-07-06 00:44:45', '2019-07-06 00:44:45'),
(106, 'delete_withdraws', 'withdraws', '2019-07-06 00:44:45', '2019-07-06 00:44:45'),
(112, 'browse_service_categories', 'service_categories', '2019-07-11 14:32:01', '2019-07-11 14:32:01'),
(113, 'read_service_categories', 'service_categories', '2019-07-11 14:32:01', '2019-07-11 14:32:01'),
(114, 'edit_service_categories', 'service_categories', '2019-07-11 14:32:01', '2019-07-11 14:32:01'),
(115, 'add_service_categories', 'service_categories', '2019-07-11 14:32:01', '2019-07-11 14:32:01'),
(116, 'delete_service_categories', 'service_categories', '2019-07-11 14:32:01', '2019-07-11 14:32:01'),
(117, 'browse_service_sub_categories', 'service_sub_categories', '2019-07-11 14:45:23', '2019-07-11 14:45:23'),
(118, 'read_service_sub_categories', 'service_sub_categories', '2019-07-11 14:45:23', '2019-07-11 14:45:23'),
(119, 'edit_service_sub_categories', 'service_sub_categories', '2019-07-11 14:45:23', '2019-07-11 14:45:23'),
(120, 'add_service_sub_categories', 'service_sub_categories', '2019-07-11 14:45:23', '2019-07-11 14:45:23'),
(121, 'delete_service_sub_categories', 'service_sub_categories', '2019-07-11 14:45:23', '2019-07-11 14:45:23'),
(122, 'browse_notifications', 'notifications', '2019-07-21 13:06:47', '2019-07-21 13:06:47'),
(123, 'read_notifications', 'notifications', '2019-07-21 13:06:47', '2019-07-21 13:06:47'),
(124, 'edit_notifications', 'notifications', '2019-07-21 13:06:47', '2019-07-21 13:06:47'),
(125, 'add_notifications', 'notifications', '2019-07-21 13:06:47', '2019-07-21 13:06:47'),
(126, 'delete_notifications', 'notifications', '2019-07-21 13:06:47', '2019-07-21 13:06:47'),
(127, 'browse_balances', 'balances', '2019-09-02 04:58:05', '2019-09-02 04:58:05'),
(128, 'read_balances', 'balances', '2019-09-02 04:58:05', '2019-09-02 04:58:05'),
(129, 'edit_balances', 'balances', '2019-09-02 04:58:05', '2019-09-02 04:58:05'),
(130, 'add_balances', 'balances', '2019-09-02 04:58:05', '2019-09-02 04:58:05'),
(131, 'delete_balances', 'balances', '2019-09-02 04:58:05', '2019-09-02 04:58:05'),
(137, 'browse_exchanges', 'exchanges', '2020-11-27 01:44:27', '2020-11-27 01:44:27'),
(138, 'read_exchanges', 'exchanges', '2020-11-27 01:44:27', '2020-11-27 01:44:27'),
(139, 'edit_exchanges', 'exchanges', '2020-11-27 01:44:27', '2020-11-27 01:44:27'),
(140, 'add_exchanges', 'exchanges', '2020-11-27 01:44:27', '2020-11-27 01:44:27'),
(141, 'delete_exchanges', 'exchanges', '2020-11-27 01:44:27', '2020-11-27 01:44:27');



--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-06-30 18:59:02', '2019-06-30 18:59:02'),
(2, 'user', 'Normal User', '2019-06-30 18:59:02', '2019-06-30 18:59:02'),
(3, 'server', 'server', '2019-07-11 21:07:44', '2019-07-11 21:07:44');



--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1);



--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'safa9at', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/August2019/XUYq8i5cwFiyxWJ8aT5u.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/August2019/O83uiE9e4SiBetV1bkuG.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Safa9at', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Safa9at.', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings/August2019/HmLf7zqd1wF6PxAGEz9H.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/August2019/aFcd0unXekH5oNMRr7kj.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '939604642049-ib7iumjg7j1739e52umgau5l099vc0uv.apps.googleusercontent.com', '', 'text', 1, 'Admin');


--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `birthday`, `address`, `seriousness`, `phone`, `phone_country`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `lang`, `settings`, `img_path`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 1, 'Admin', NULL, NULL, 0, NULL, NULL, 'ali.benali.sid@gmail.com', 'users/Nov2020/1_avatar1606491229.jpg', '2020-11-25 12:18:37', '$2y$10$vzJ0b9vN9wSojH4sSvi2le8rdXaMR8aLl1RvusizTKvqvd.XHCM3a', 'i45cQQ6i7t1pmGSnwbrj7Yd2goFrD59IFarK6IvM4WUL51baVlrSS8Kw8hgY', 'en', NULL, '/img/profiles/default-account.jpg', '2020-11-25 17:08:26', '2020-11-29 21:04:26', 0),
(2, 2, 'harakat', NULL, NULL, 0, NULL, NULL, 'harakat1@outlook.com', 'users/default.png', NULL, '$2y$10$X3c366OOMIrTKtJ/sLT8jOGe3D8oVkl8PwaaZSHSNZuxwSTxTMqdO', NULL, 'en', NULL, '/img/profiles/default-account.jpg', '2020-11-26 23:49:57', '2020-11-26 23:49:57', 0),
(3, 3, 'Seller', NULL, NULL, 0, NULL, NULL, 'cocktillo@gmail.com', 'users/default.png', '2020-11-28 14:40:34', '$2y$10$mL4B7qylXwNTyXgBkqtsB.3ndrpnyyCFxXqaEo1rEsIe7Xa8x06eC', NULL, 'ar', '{\"locale\":\"en\"}', '/img/profiles/default-account.jpg', '2020-11-28 17:29:22', '2020-11-28 23:20:12', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
