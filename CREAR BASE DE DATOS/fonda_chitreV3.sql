-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for fonda_chitre
CREATE DATABASE IF NOT EXISTS `fonda_chitre` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fonda_chitre`;

-- Dumping structure for table fonda_chitre.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `numerodecliente` varchar(45) NOT NULL,
  `nombrecliente` varchar(45) DEFAULT NULL,
  `direcciondeenvio` varchar(45) NOT NULL,
  `saldo` decimal(20,0) NOT NULL,
  `limitedecredito` decimal(20,0) NOT NULL,
  `descuento` decimal(20,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idcomida` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `idcomida_idx` (`idcomida`),
  KEY `idpedido_idx` (`idpedido`),
  CONSTRAINT `idcomida` FOREIGN KEY (`idcomida`) REFERENCES `comidas` (`idcomida`),
  CONSTRAINT `idpedido` FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`idpedido`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fonda_chitre.clientes: ~7 rows (approximately)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`idcliente`, `numerodecliente`, `nombrecliente`, `direcciondeenvio`, `saldo`, `limitedecredito`, `descuento`, `created_at`, `updated_at`, `idcomida`, `idpedido`) VALUES
	(1, '28', 'Josue Gomez', 'colon', 0, 21, 5, NULL, NULL, 708, 1),
	(2, '35', 'Miguel Herrera', 'alta gracia', 3, 21, 5, NULL, NULL, 709, 2),
	(3, '36', 'Lucia Howell', 'ave. la  paz ', 1, 21, 5, NULL, NULL, 710, 3),
	(4, '45', 'Maria Arauz', 'cordoba', 1, 21, 5, NULL, NULL, 711, 4),
	(5, '22', 'Tatiana Celeste', 'villa dolores', 1, 21, 5, NULL, NULL, 712, 5),
	(6, '24', 'Ana Guadalupe', 'san martin', 6, 21, 5, NULL, NULL, 713, 6),
	(7, '50', 'Max Sander', 'el paso', 0, 21, 5, NULL, NULL, 714, 7);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.comidas
CREATE TABLE IF NOT EXISTS `comidas` (
  `idcomida` int(11) NOT NULL AUTO_INCREMENT,
  `numerodecomida` varchar(45) DEFAULT NULL,
  `serviciodelivery` varchar(45) DEFAULT NULL,
  `promocion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `iddelivery` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcomida`),
  KEY `iddelivery_idx` (`iddelivery`),
  CONSTRAINT `iddelivery` FOREIGN KEY (`iddelivery`) REFERENCES `delivery` (`iddelivery`)
) ENGINE=InnoDB AUTO_INCREMENT=721 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fonda_chitre.comidas: ~9 rows (approximately)
/*!40000 ALTER TABLE `comidas` DISABLE KEYS */;
INSERT INTO `comidas` (`idcomida`, `numerodecomida`, `serviciodelivery`, `promocion`, `descripcion`, `iddelivery`, `created_at`, `updated_at`) VALUES
	(708, 'n11', '45', '2x123', 'arroz mixto', 1, NULL, '2021-11-26 09:38:10'),
	(709, 'n2', '46', '-20%', 'sancocho', 2, NULL, NULL),
	(710, 'n3', '47', NULL, 'ensalada', 3, NULL, NULL),
	(711, 'n4', '48', '2x1', 'chichas', 4, NULL, NULL),
	(712, 'n5', '49', '-50%', 'mariscos', 5, NULL, NULL),
	(713, 'n6', '50', NULL, 'carnes', 6, NULL, NULL),
	(714, 'n7', '51', '2x1', 'tamales', 7, NULL, NULL),
	(715, 'n45', NULL, 'none', 'arroz con pollo', NULL, '2021-11-26 09:40:14', '2021-11-26 09:40:47');
/*!40000 ALTER TABLE `comidas` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.delivery
CREATE TABLE IF NOT EXISTS `delivery` (
  `iddelivery` int(11) NOT NULL AUTO_INCREMENT,
  `numerodelivery` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `fechahora` datetime NOT NULL,
  PRIMARY KEY (`iddelivery`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fonda_chitre.delivery: ~7 rows (approximately)
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` (`iddelivery`, `numerodelivery`, `telefono`, `direccion`, `fechahora`) VALUES
	(1, 45, 60418974, 'colon', '2021-07-30 12:53:40'),
	(2, 46, 61662051, 'alta gracia', '2021-07-30 13:30:00'),
	(3, 47, 66554433, 'ave. la  paz ', '2021-07-30 14:00:00'),
	(4, 48, 68415202, 'cordoba', '2021-07-30 14:30:10'),
	(5, 49, 61132951, 'villa dolores', '2021-07-30 14:50:20'),
	(6, 50, 62051372, 'san martin', '2021-07-30 16:05:00'),
	(7, 51, 69007411, 'el paso', '2021-07-30 16:25:00');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table fonda_chitre.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fonda_chitre.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fonda_chitre.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `numerodecliente` decimal(20,0) DEFAULT NULL,
  `direcciondeenvio` varchar(45) DEFAULT NULL,
  `fechadepedido` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `iddelivery` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `_idx` (`iddelivery`),
  CONSTRAINT `` FOREIGN KEY (`iddelivery`) REFERENCES `delivery` (`iddelivery`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fonda_chitre.pedidos: ~7 rows (approximately)
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`idpedido`, `numerodecliente`, `direcciondeenvio`, `fechadepedido`, `cantidad`, `iddelivery`, `created_at`, `updated_at`) VALUES
	(1, 28, 'colon', '2021-07-30 12:53:40', 2, 1, '0000-00-00 00:00:00', NULL),
	(2, 35, 'alta gracia', '2021-07-30 13:30:00', 1, 2, '0000-00-00 00:00:00', NULL),
	(3, 36, 'ave. la  paz ', '2021-07-30 14:00:00', 1, 3, '0000-00-00 00:00:00', NULL),
	(4, 45, 'cordoba', '2021-07-30 14:30:10', 2, 4, '0000-00-00 00:00:00', NULL),
	(5, 22, 'villa dolores', '2021-07-30 14:50:20', 1, 5, '0000-00-00 00:00:00', NULL),
	(6, 24, 'san martin', '2021-07-30 16:05:00', 2, 6, '0000-00-00 00:00:00', NULL),
	(7, 50, 'el paso', '2021-07-30 16:25:00', 1, 7, '0000-00-00 00:00:00', NULL),
	(8, 45, 'sdfsf', '2021-11-26 04:00:00', 1, NULL, '2021-11-26 09:59:53', '2021-11-26 09:59:53'),
	(15, 22, 'asd123123', '2021-11-08 05:06:00', 2, NULL, '2021-11-26 10:06:50', '2021-11-26 10:06:50');
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
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

-- Dumping data for table fonda_chitre.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table fonda_chitre.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fonda_chitre.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
