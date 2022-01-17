-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) unsigned NOT NULL,
  `equipment_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL COMMENT '數量',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_items_member_id_foreign` (`member_id`),
  KEY `cart_items_equipment_id_foreign` (`equipment_id`),
  CONSTRAINT `cart_items_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`),
  CONSTRAINT `cart_items_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `equipments`;
CREATE TABLE `equipments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '器材名稱',
  `eqinformation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '器材資訊',
  `allcount` int(10) unsigned NOT NULL COMMENT '總數量',
  `rentcount` int(10) unsigned NOT NULL COMMENT '目前租出數量',
  `inventory` int(10) unsigned NOT NULL COMMENT '庫存數量',
  `price` int(10) unsigned NOT NULL COMMENT '器材單價',
  `rentprice` int(10) unsigned NOT NULL COMMENT '租借價格(單項兩天一夜價格)',
  `claimprice` int(10) unsigned NOT NULL COMMENT '賠償單價',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `cleanfee` int(10) unsigned NOT NULL COMMENT '清潔費',
  `maintain` date DEFAULT NULL COMMENT '保養日期',
  `member_id` bigint(20) unsigned DEFAULT NULL COMMENT '保養者',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipments_member_id_foreign` (`member_id`),
  CONSTRAINT `equipments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `equipments` (`id`, `name`, `eqinformation`, `allcount`, `rentcount`, `inventory`, `price`, `rentprice`, `claimprice`, `img`, `cleanfee`, `maintain`, `member_id`, `created_at`, `updated_at`) VALUES
(1,	'MSR Elixir2',	'容納人數 : 2人  \r\n打包重量 : 2.77 kg \r\n營柱數量 : 2Aluminum 7000 Series\r\n內帳展開長度 : 213 cm / \r\n內帳最寬處 : 127 cm / \r\n內帳最高處 : 102 cm',	30,	0,	30,	2000,	500,	2000,	'MSR Elixir2-1.jpg',	350,	NULL,	NULL,	'2022-01-16 11:32:38',	'2022-01-16 11:32:38'),
(2,	'Campingmoon 焚火台',	'型號：MT-2 \r\n折疊尺寸：35*20*9MM \r\n展開尺寸：35*34*26MM \r\n最小重量 : 3.5 kg',	20,	0,	20,	3000,	200,	3000,	'Campingmoon 焚火台.jpg',	80,	NULL,	NULL,	'2022-01-16 11:34:05',	'2022-01-16 11:34:05'),
(3,	'Pocket Rocket 2',	'打包重量 : 110 g \r\n燃燒時間 : 約 60 min (搭配 MSR IsoPro 227g 標準瓦斯罐) \r\n沸騰時間 : 3.5 min (1L水，搭配 MSR IsoPro 標準瓦斯罐) \r\n注意事項 : 商品內容不包含瓦斯罐',	15,	0,	15,	2000,	150,	2000,	'MSR Pocket Rocket 2-3.jpg',	50,	NULL,	NULL,	'2022-01-16 11:35:53',	'2022-01-16 11:35:53'),
(4,	'Storm/Spot 頭燈',	'亮度：最大亮度400流明 \r\n重量：120g (含四顆四號電池) \r\n防護：IP67 防塵防水等級\r\n距離：最大亮度100公尺,最小亮度9公尺 \r\n時間：最大亮度5小時、最小亮度150小時',	15,	0,	15,	2000,	250,	2000,	'Black Diamond Storm(Spot) 頭燈.jpg',	100,	NULL,	NULL,	'2022-01-16 11:37:25',	'2022-01-16 11:37:25'),
(5,	'碳纖維登山杖ST06',	'規格: 66-135cm \r\n顏色: 初雪白、星空黑\r\n凈重: 約185g \r\n帳桿直徑:16cm / 14cm / 1.2cm',	15,	0,	15,	2000,	250,	2000,	'Naturehike 碳纖維登山杖ST06-1.jpg',	50,	NULL,	NULL,	'2022-01-16 11:39:03',	'2022-01-16 11:39:03'),
(6,	'暖光燈條',	'長度：10m \r\n材質：全矽膠防水膠條、FPC \r\n導線材質：銅 \r\n燈條寬度：1.6 - 1.7cm \r\n燈條厚度：0.5 - 0.6cm \r\n燈光色溫：3000 - 4000K',	15,	0,	15,	2500,	150,	2500,	'10m 暖光燈條.jpg',	100,	NULL,	NULL,	'2022-01-16 11:40:06',	'2022-01-16 11:40:06'),
(7,	'TILLAK 月亮椅',	'產品重量：裸測800g (材質用料可能會有些許誤差)\r\n產品顏色：花崗岩灰 \r\n產品材質：防撕裂雙層牛津布 / 7075升級航空鋁合金支架 \r\n產品承重：140kg\r\n展開尺寸：52 * 52 * 65cm \r\n收納尺寸：35 *10 cm',	20,	0,	20,	3400,	280,	3400,	'TILLAK 月亮椅-3.jpg',	130,	NULL,	NULL,	'2022-01-16 11:41:28',	'2022-01-16 11:41:28'),
(8,	'鋁合金折疊桌',	'展開尺寸 (手工測量尺寸可能存在±1~2cm範圍誤差） \r\n大號：長75cm*寬55cm*高52cm \r\n小號：長57cm*寬42cm*高38cm \r\n桌子重量：\r\n大號 0.95kg / 小號 0.7kg \r\n桌子承重：\r\n大號 25kg / 小號 20kg \r\n材料：超輕鋁合金+1680D牛津布',	10,	0,	10,	4000,	250,	4000,	'鋁合金折疊桌-1.jpg',	100,	NULL,	NULL,	'2022-01-16 11:43:02',	'2022-01-16 11:43:02'),
(9,	'GREGORY Baltoro 75L',	'型號：Baltoro \r\n容量：75L\r\n尺寸：M H.W.D：80cm x 49cm x 37cm \r\n重量 2.42 kg',	10,	0,	10,	5000,	300,	5000,	'GREGORY Baltoro 75L-1.jpg',	260,	NULL,	NULL,	'2022-01-16 11:44:00',	'2022-01-16 11:44:00'),
(10,	'Osprey Kestrel 48L',	'型號：Kestrel \r\n容量：48 公升 \r\n尺寸：S / M & M/L \r\n重量：1.56 kg / 1.63kg',	15,	0,	15,	4500,	200,	4500,	'Osprey Kestrel 48L-1.jpg',	100,	NULL,	NULL,	'2022-01-16 11:45:09',	'2022-01-16 11:45:09'),
(11,	'Black Ice G700',	'顏色 : 藍色/紅色 \r\n尺寸：M / L \r\n填充重量 : 700g \r\n總重量 : 1040g \r\n填充物 : 灰鵝絨 \r\n面料：15D 460T 日本東麗尼龍 \r\n裡料：20D 400T 超細亞光尼龍 \r\n適用溫度 : -10℃ ~ -3℃',	20,	0,	20,	2500,	150,	2500,	'Black Ice G700-3.jpg',	100,	NULL,	NULL,	'2022-01-16 11:46:28',	'2022-01-16 11:46:28'),
(12,	'Black Ice G400',	'顏色 : 藍色/紅色 \r\n尺寸：M / L \r\n填充重量 : 400g \r\n總重量 : 730g \r\n填充物 : 灰鵝絨 \r\n面料：15D 460T 日本東麗尼龍 \r\n裡料：20D 400T 超細亞光尼龍 \r\n適用溫度 : 0 ~ 10℃',	20,	0,	20,	2000,	100,	2000,	'Black Ice G400-3.jpg',	50,	NULL,	NULL,	'2022-01-16 11:47:22',	'2022-01-16 11:47:22');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `managers_user_id_foreign` (`user_id`),
  CONSTRAINT `managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `identity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '身分證',
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '使用中' COMMENT '帳號狀態',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `members_user_id_foreign` (`user_id`),
  CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `members` (`id`, `user_id`, `identity`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	'W12345679',	'0912345678',	'台中市太平區',	'已停用',	'2022-01-16 11:18:14',	'2022-01-16 20:08:47'),
(2,	2,	'F12345679',	'0912345678',	'台中市太平區',	'使用中',	'2022-01-16 20:09:23',	'2022-01-16 20:09:23');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(509,	'2014_10_12_000000_create_users_table',	1),
(510,	'2014_10_12_100000_create_password_resets_table',	1),
(511,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(512,	'2019_08_19_000000_create_failed_jobs_table',	1),
(513,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(514,	'2021_12_29_002555_create_sessions_table',	1),
(515,	'2021_12_31_052350_create_members_table',	1),
(516,	'2021_12_31_052832_create_managers_table',	1),
(517,	'2021_12_31_052927_create_orders_table',	1),
(518,	'2021_12_31_053007_create_equipments_table',	1),
(519,	'2021_12_31_053220_create_order_details_table',	1),
(520,	'2021_12_31_053434_create_cart_items_table',	1),
(521,	'2022_01_04_155335_add_type_in_users_table',	1);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) unsigned NOT NULL,
  `total` int(10) unsigned NOT NULL COMMENT '總額',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '租賃狀態',
  `rent_date` date NOT NULL COMMENT '租用日',
  `return_date` date NOT NULL COMMENT '歸還日',
  `pickup_date` datetime NOT NULL COMMENT '取貨日',
  `clean_fee` int(10) unsigned DEFAULT NULL COMMENT '清潔費',
  `damages` int(10) unsigned DEFAULT NULL COMMENT '賠償價',
  `send_date` datetime NOT NULL COMMENT '送出日期',
  `manager_id` bigint(20) unsigned NOT NULL COMMENT '交接者',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_member_id_foreign` (`member_id`),
  KEY `orders_manager_id_index` (`manager_id`),
  CONSTRAINT `orders_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `member_id`, `total`, `status`, `rent_date`, `return_date`, `pickup_date`, `clean_fee`, `damages`, `send_date`, `manager_id`, `created_at`, `updated_at`) VALUES
(1,	1,	2000,	'成立',	'2021-12-01',	'2021-12-04',	'2021-11-30 10:20:00',	0,	0,	'2021-12-05 00:00:00',	1,	NULL,	NULL);

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `equipment_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL COMMENT '數量',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_order_id_foreign` (`order_id`),
  KEY `order_details_equipment_id_foreign` (`equipment_id`),
  CONSTRAINT `order_details_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`),
  CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vXJMiH1aeMk496o53BseUQDDEm2cdBlhfn0sF0co',	2,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36 Edg/97.0.1072.62',	'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTGZPWXZ5eEJXWURNNjFmMEdYMXNVYXkxOFZGcGtkemhuYUJhYk1STSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZW50ZXF1aXBtZW50Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJE1CTml4ZDNmU3lZaHJVRzMzYk15eWV6d2o4RFhraEFDcEd2S0Y5SDZKMlUvbkoyL2x3THVPIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRNQk5peGQzZlN5WWhyVUczM2JNeXllendqOERYa2hBQ3BHdktGOUg2SjJVL25KMi9sd0x1TyI7fQ==',	1642392688);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '使用者身分，0為會員 1為管理者',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'qq',	't86@gmail.com',	NULL,	'$2y$10$rT5IzTEAOJKoW.G4p3VA1ONcqvmI2sLpD9F3nysyIQkZS.dReqSZa',	0,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-16 11:18:14',	'2022-01-16 11:18:14'),
(2,	'qq',	'admin@gm.com',	NULL,	'$2y$10$MBNixd3fSyYhrUG33bMyyezwj8DXkhACpGvKF9H6J2U/nJ2/lwLuO',	0,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-16 20:09:23',	'2022-01-16 20:09:23');

-- 2022-01-17 07:32:07
