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
  KEY `cart_items_member_id_index` (`member_id`),
  KEY `cart_items_equipment_id_index` (`equipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `equipment`;
CREATE TABLE `equipment` (
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
  `manager_id` bigint(20) unsigned DEFAULT NULL COMMENT '保養者',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipment_manager_id_index` (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `equipment` (`id`, `name`, `eqinformation`, `allcount`, `rentcount`, `inventory`, `price`, `rentprice`, `claimprice`, `img`, `cleanfee`, `maintain`, `manager_id`, `created_at`, `updated_at`) VALUES
(1,	'MSR Elixir2',	'容納人數 : 2人  打包重量 : 2.77 kg   營柱數量 : 2Aluminum 7000 Series   內帳展開長度 : 213 cm / 內帳最寬處 : 127 cm / 內帳最高處 : 102 cm  ',	30,	0,	30,	2000,	500,	2000,	'\\img\\equi\\tent\\MSR Elixir2-1.jpg',	350,	NULL,	NULL,	NULL,	NULL),
(2,	'Campingmoon 焚火台',	'型號：MT-2 折疊尺寸：35*20*9MM 展開尺寸：35*34*26MM 最小重量 : 3.5 kg',	20,	0,	20,	3000,	200,	3000,	'\\img\\equi\\cookware\\Campingmoon 焚火台.jpg',	350,	NULL,	NULL,	NULL,	NULL),
(3,	'Pocket Rocket 2',	'打包重量 : 110 g 燃燒時間 : 約 60 min (搭配 MSR IsoPro 227g 標準瓦斯罐) 沸騰時間 : 3.5 min (1L水，搭配 MSR IsoPro 標準瓦斯罐) 注意事項 : 商品內容不包含瓦斯罐',	15,	0,	15,	2000,	250,	2000,	'\\img\\equi\\cookware\\MSR Pocket Rocket 2-3.jpg',	200,	NULL,	NULL,	NULL,	NULL),
(4,	'Storm/Spot 頭燈',	'亮度：最大亮度400流明 重量：120g (含四顆四號電池) 防護：IP67 防塵防水等級 距離：最大亮度100公尺,最小亮度9公尺 時間：最大亮度5小時、最小亮度150小時',	15,	0,	15,	2000,	250,	2000,	'\\img\\equi\\other\\Black Diamond Storm(Spot) 頭燈.jpg',	200,	NULL,	NULL,	NULL,	NULL),
(5,	'碳纖維登山杖ST06',	'規格: 66-135cm 顏色: 初雪白、星空黑 凈重: 約185g 帳桿直徑:16cm / 14cm / 1.2cm',	15,	0,	15,	2000,	250,	2000,	'\\img\\equi\\other\\Naturehike 碳纖維登山杖ST06-1.jpg',	200,	NULL,	NULL,	NULL,	NULL),
(6,	'暖光燈條',	'長度：10m 材質：全矽膠防水膠條、FPC 導線材質：銅 燈條寬度：1.6 - 1.7cm 燈條厚度：0.5 - 0.6cm 燈光色溫：3000 - 4000K',	15,	0,	15,	2500,	100,	2500,	'\\img\\equi\\other\\10m 暖光燈條.jpg',	50,	NULL,	NULL,	NULL,	NULL),
(7,	'TILLAK 月亮椅',	'產品重量：裸測800g (材質用料可能會有些許誤差) 產品顏色：花崗岩灰 產品材質：防撕裂雙層牛津布 / 7075升級航空鋁合金支架 產品承重：140kg 展開尺寸：52 * 52 * 65cm 收納尺寸：35 *10 cm',	15,	0,	15,	2500,	120,	2500,	'\\img\\equi\\other\\TILLAK 月亮椅-3.jpg',	50,	NULL,	NULL,	NULL,	NULL),
(8,	'鋁合金折疊桌',	'展開尺寸 (手工測量尺寸可能存在±1~2cm範圍誤差） 大號：長75cm*寬55cm*高52cm 小號：長57cm*寬42cm*高38cm 桌子重量：大號 0.95kg / 小號 0.7kg 桌子承重：大號 25kg / 小號 20kg 材料：超輕鋁合金+1680D牛津布',	15,	0,	15,	2500,	300,	2500,	'\\img\\equi\\other\\鋁合金折疊桌-1.jpg',	250,	NULL,	NULL,	NULL,	NULL),
(9,	'GREGORY Baltoro 75L',	'型號：Baltoro 容量：75L 尺寸：M H.W.D：80cm x 49cm x 37cm 重量 2.42 kg',	15,	0,	15,	5000,	600,	5000,	'\\img\\equi\\Backpack\\GREGORY Baltoro 75L-1.jpg',	1200,	NULL,	NULL,	NULL,	NULL),
(10,	'Osprey Kestrel 48L',	'型號：Kestrel 容量：48 公升 尺寸：S / M & M/L 重量：1.56 kg / 1.63kg',	15,	0,	15,	4000,	500,	4000,	'\\img\\equi\\Backpack\\Osprey Kestrel 48L-4.jpg',	1000,	NULL,	NULL,	NULL,	NULL),
(11,	'Black Ice G700',	'顏色 : 藍色/紅色 尺寸：M / L 填充重量 : 700g 總重量 : 1040g 填充物 : 灰鵝絨 面料：15D 460T 日本東麗尼龍 裡料：20D 400T 超細亞光尼龍 適用溫度 : -10℃ ~ -3℃ ',	15,	0,	15,	5000,	480,	5000,	'\\img\\equi\\Sleeping bag\\Black Ice G700-3.jpg',	1200,	NULL,	NULL,	NULL,	NULL),
(12,	'Black Ice G400',	'顏色 : 藍色/紅色 尺寸：M / L 填充重量 : 400g 總重量 : 730g 填充物 : 灰鵝絨 面料：15D 460T 日本東麗尼龍 裡料：20D 400T 超細亞光尼龍 適用溫度 : 0 ~ 10℃ ',	15,	0,	15,	3800,	380,	3800,	'\\img\\equi\\Sleeping bag\\Black Ice G400-3.jpg',	1200,	NULL,	NULL,	NULL,	NULL);

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
  KEY `managers_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `identity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '身分證',
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號狀態',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `members_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
  KEY `orders_member_id_index` (`member_id`),
  KEY `orders_manager_id_index` (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `equipment_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL COMMENT '數量',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_order_id_index` (`order_id`),
  KEY `order_details_equipment_id_index` (`equipment_id`)
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


-- 2022-01-12 02:16:03
