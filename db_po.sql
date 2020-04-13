-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.8-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_po
CREATE DATABASE IF NOT EXISTS `db_po` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `db_po`;

-- Dumping structure for table db_po.dokumen
CREATE TABLE IF NOT EXISTS `dokumen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `layanan_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `perusahaan_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.dokumen: ~2 rows (approximately)
/*!40000 ALTER TABLE `dokumen` DISABLE KEYS */;
INSERT INTO `dokumen` (`id`, `layanan_id`, `status_id`, `status`, `user_id`, `perusahaan_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 'draft', 1, NULL, '2020-04-08 07:00:13', '2020-04-08 07:00:13'),
	(2, 1, 0, 'draft', 1, 1, '2020-04-08 07:08:07', '2020-04-08 07:08:07');
/*!40000 ALTER TABLE `dokumen` ENABLE KEYS */;

-- Dumping structure for table db_po.dokumen_lampiran
CREATE TABLE IF NOT EXISTS `dokumen_lampiran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dokumen_id` int(10) unsigned DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `file_id` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.dokumen_lampiran: ~0 rows (approximately)
/*!40000 ALTER TABLE `dokumen_lampiran` DISABLE KEYS */;
/*!40000 ALTER TABLE `dokumen_lampiran` ENABLE KEYS */;

-- Dumping structure for table db_po.ekspor_sementara
CREATE TABLE IF NOT EXISTS `ekspor_sementara` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` int(10) DEFAULT NULL,
  `nomor_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `sifat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat_permohonan` date DEFAULT NULL,
  `hal_surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_invoice` date DEFAULT NULL,
  `nilai_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jangka_waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `sign_by` int(11) DEFAULT NULL,
  `bidang_id` int(11) DEFAULT NULL,
  `seksi_id` int(11) DEFAULT NULL,
  `agenda_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.ekspor_sementara: ~0 rows (approximately)
/*!40000 ALTER TABLE `ekspor_sementara` DISABLE KEYS */;
/*!40000 ALTER TABLE `ekspor_sementara` ENABLE KEYS */;

-- Dumping structure for table db_po.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table db_po.file
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(196) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lampiran_id` int(11) DEFAULT NULL,
  `pelayanan_id` int(11) DEFAULT NULL,
  `dokumen_id` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.file: ~0 rows (approximately)
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
/*!40000 ALTER TABLE `file` ENABLE KEYS */;

-- Dumping structure for table db_po.jenis_layanan
CREATE TABLE IF NOT EXISTS `jenis_layanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_po.jenis_layanan: ~2 rows (approximately)
/*!40000 ALTER TABLE `jenis_layanan` DISABLE KEYS */;
INSERT INTO `jenis_layanan` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'PERSETUJUAN EKSPOR SEMENTARA', 'persetujuan-ekspor-sementara', '2020-03-22 10:58:55', '2020-03-22 10:58:58'),
	(2, 'layanan 2', 'layanan-2', '2020-03-22 11:00:29', '2020-03-22 11:00:30');
/*!40000 ALTER TABLE `jenis_layanan` ENABLE KEYS */;

-- Dumping structure for table db_po.layanan_lampiran
CREATE TABLE IF NOT EXISTS `layanan_lampiran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `layanan_id` int(10) unsigned NOT NULL,
  `nama` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.layanan_lampiran: ~5 rows (approximately)
/*!40000 ALTER TABLE `layanan_lampiran` DISABLE KEYS */;
INSERT INTO `layanan_lampiran` (`id`, `layanan_id`, `nama`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Invoice', '2020-03-22 10:59:19', '2020-03-22 10:59:21'),
	(2, 1, 'Packinglist', '2020-03-22 10:59:37', '2020-03-22 10:59:38'),
	(3, 2, 'dok-perl 2', '2020-03-22 10:59:52', '2020-03-22 10:59:53'),
	(4, 2, 'dokpel 2', '2020-03-22 11:00:13', '2020-03-22 11:00:14'),
	(5, 1, 'permohonan', '2020-03-22 17:21:21', '2020-03-22 17:21:22');
/*!40000 ALTER TABLE `layanan_lampiran` ENABLE KEYS */;

-- Dumping structure for table db_po.log
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.log: ~0 rows (approximately)
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;

-- Dumping structure for table db_po.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_po.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_po.profil
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alamat` varchar(196) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_tlp` varchar(196) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_id` tinyint(4) DEFAULT NULL,
  `no_kd_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.profil: ~1 rows (approximately)
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` (`id`, `alamat`, `no_tlp`, `kd_id`, `no_kd_id`) VALUES
	(1, '12321312312', NULL, NULL, NULL);
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;

-- Dumping structure for table db_po.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(196) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.status: ~0 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Dumping structure for table db_po.tr_jenis_identitas
CREATE TABLE IF NOT EXISTS `tr_jenis_identitas` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `uraian` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table db_po.tr_jenis_identitas: ~4 rows (approximately)
/*!40000 ALTER TABLE `tr_jenis_identitas` DISABLE KEYS */;
INSERT INTO `tr_jenis_identitas` (`id`, `uraian`) VALUES
	(2, 'PASSPOR'),
	(3, 'KTP'),
	(4, 'LAINNYA'),
	(5, 'NPWP');
/*!40000 ALTER TABLE `tr_jenis_identitas` ENABLE KEYS */;

-- Dumping structure for table db_po.tr_negara
CREATE TABLE IF NOT EXISTS `tr_negara` (
  `ID_NEGARA` varchar(2) NOT NULL,
  `NM_NEGARA` varchar(50) DEFAULT NULL,
  `KD_NA` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`ID_NEGARA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_po.tr_negara: ~254 rows (approximately)
/*!40000 ALTER TABLE `tr_negara` DISABLE KEYS */;
INSERT INTO `tr_negara` (`ID_NEGARA`, `NM_NEGARA`, `KD_NA`) VALUES
	('AD', 'ANDORRA', '999'),
	('AE', 'UNITED ARAB EMIRATES', '155'),
	('AF', 'AFGHANISTAN', '137'),
	('AG', 'ANTIGUA AND BARBUDA', '999'),
	('AI', 'ANGUILLA', '999'),
	('AL', 'ALBANIA', '548'),
	('AM', 'ARMENIA', '999'),
	('AN', 'NETHERLANDS ANTILLES', '999'),
	('AO', 'ANGOLA', '234'),
	('AQ', 'ANTARCTICA', '999'),
	('AR', 'ARGENTINA', '433'),
	('AS', 'AMERICAN SAMOA', '999'),
	('AT', 'AUSTRIA', '515'),
	('AU', 'AUSTRALIA', '311'),
	('AW', 'ARUBA', '999'),
	('AX', 'Aland Islands', ''),
	('AZ', 'AZERBAIJAN', '999'),
	('BA', 'BOSNIA AND HERZEGOVINA', '999'),
	('BB', 'BARBADOS', '999'),
	('BD', 'BANGLADESH', '135'),
	('BE', 'BELGIUM', '516'),
	('BF', 'BURKINA FASO', '245'),
	('BG', 'BULGARIA', '545'),
	('BH', 'BAHRAIN', '156'),
	('BI', 'BURUNDI', '999'),
	('BJ', 'BENIN', '244'),
	('BL', 'Saint Barthélemy', ''),
	('BM', 'BERMUDA', '999'),
	('BN', 'BRUNEI DARUSSALAM', '127'),
	('BO', 'BOLIVIA', '436'),
	('BQ', 'Bonaire, Sint Eustatius and Saba', ''),
	('BR', 'BRAZIL', '434'),
	('BS', 'BAHAMAS', '445'),
	('BT', 'BHUTAN', '999'),
	('BV', 'BOUVET ISLAND', '999'),
	('BW', 'BOTSWANA', '999'),
	('BY', 'BELARUS', '999'),
	('BZ', 'BELIZE', '999'),
	('CA', 'CANADA', '412'),
	('CC', 'COCOS (KEELING) ISLANDS', '999'),
	('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', ''),
	('CF', 'CENTRAL AFRICAN REPUBLIC', '252'),
	('CG', 'CONGO', '235'),
	('CH', 'SWITZERLAND', '517'),
	('CI', 'COTE D\'IVOIRE', '999'),
	('CK', 'COOK ISLANDS', '999'),
	('CL', 'CHILE', '431'),
	('CM', 'CAMEROON', '236'),
	('CN', 'CHINA', '116'),
	('CO', 'COLOMBIA', '435'),
	('CR', 'COSTA RICA', '999'),
	('CS', 'FORMER CZECHOSLOVAKIA', ''),
	('CU', 'CUBA', '426'),
	('CV', 'CAPE VERDE', '999'),
	('CW', 'Curaçao', ''),
	('CX', 'CHRISTMAS ISLAND', '999'),
	('CY', 'CYPRUS', '158'),
	('CZ', 'CZECH REPUBLIC', '999'),
	('DE', 'GERMANY', '514'),
	('DJ', 'DJIBOUTI', '226'),
	('DK', 'DENMARK', '521'),
	('DM', 'DOMINICA', '999'),
	('DO', 'DOMINICAN REPUBLIC', '999'),
	('DZ', 'ALGERIA', '215'),
	('EC', 'ECUADOR', '441'),
	('EE', 'ESTONIA', '999'),
	('EG', 'EGYPT', '211'),
	('EH', 'WESTERN SAHARA', ''),
	('ER', 'ERITREA', '999'),
	('ES', 'SPAIN', '527'),
	('ET', 'ETHIOPIA', '221'),
	('FI', 'FINLAND', '524'),
	('FJ', 'FIJI', '999'),
	('FK', 'FALKLAND ISLANDS (MALVINAS)', '999'),
	('FM', 'MICRONESIA, FEDERATED STATES OF', '999'),
	('FO', 'FAROE ISLANDS', '999'),
	('FR', 'FRANCE', '513'),
	('GA', 'GABON', '239'),
	('GB', 'UNITED KINGDOM', '511'),
	('GD', 'GRENADA', '999'),
	('GE', 'GEORGIA', '999'),
	('GF', 'FRENCH GUIANA', '999'),
	('GG', 'Guernsey', ''),
	('GH', 'GHANA', '231'),
	('GI', 'GIBRALTAR', '999'),
	('GL', 'GREENLAND', '999'),
	('GM', 'GAMBIA', '247'),
	('GN', 'GUINEA', '233'),
	('GP', 'GUADELOUPE', '999'),
	('GQ', 'EQUATORIAL GUINEA', '999'),
	('GR', 'GREECE', '531'),
	('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISL', ''),
	('GT', 'GUATEMALA', '422'),
	('GU', 'GUAM', '999'),
	('GW', 'GUINEA-BISSAU', '246'),
	('GY', 'GUYANA', '443'),
	('HK', 'HONG KONG', '112'),
	('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', '999'),
	('HN', 'HONDURAS', '423'),
	('HR', 'CROATIA', '999'),
	('HT', 'HAITI', '999'),
	('HU', 'HUNGARY', '542'),
	('ID', 'INDONESIA', '700'),
	('IE', 'IRELAND', '525'),
	('IL', 'ISRAEL', '144'),
	('IM', 'Isle of Man', ''),
	('IN', 'INDIA', '133'),
	('IO', 'BRITISH INDIAN OCEAN TERRITORY', '999'),
	('IQ', 'IRAQ', '141'),
	('IR', 'IRAN, ISLAMIC REPUBLIC OF', '142'),
	('IS', 'ICELAND', '999'),
	('IT', 'ITALY', '526'),
	('JE', 'Jersey', ''),
	('JM', 'JAMAICA', '999'),
	('JO', 'JORDAN', '146'),
	('JP', 'JAPAN', '111'),
	('KE', 'KENYA', '225'),
	('KG', 'KYRGYZSTAN', '999'),
	('KH', 'CAMBODIA', '126'),
	('KI', 'KIRIBATI', '999'),
	('KM', 'COMOROS', '265'),
	('KN', 'SAINT KITTS AND NEVIS', '999'),
	('KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', '113'),
	('KR', 'KOREA, REPUBLIC OF', '114'),
	('KW', 'KUWAIT', '145'),
	('KY', 'CAYMAN ISLANDS', '999'),
	('KZ', 'KAZAKSTAN', '999'),
	('LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', '128'),
	('LB', 'LEBANON', '148'),
	('LC', 'SAINT LUCIA', '999'),
	('LI', 'LIECHTENSTEIN', '999'),
	('LK', 'SRI LANKA', '136'),
	('LR', 'LIBERIA', '232'),
	('LS', 'LESOTHO', '999'),
	('LT', 'LITHUANIA', '999'),
	('LU', 'LUXEMBOURG', '518'),
	('LV', 'LATVIA', '999'),
	('LY', 'LIBYAN ARAB JAMAHIRIYA', '212'),
	('MA', 'MOROCCO', '213'),
	('MC', 'MONACO', '999'),
	('MD', 'MOLDOVA, REPUBLIC OF', '999'),
	('ME', 'Montenegro', ''),
	('MF', 'Saint Martin (French Part)', ''),
	('MG', 'MADAGASCAR', '223'),
	('MH', 'MARSHALL ISLANDS', '999'),
	('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC', ''),
	('ML', 'MALI', '243'),
	('MM', 'MYANMAR', '125'),
	('MN', 'MONGOLIA', '999'),
	('MO', 'MACAU', '117'),
	('MP', 'NORTHERN MARIANA ISLANDS', '999'),
	('MQ', 'MARTINIQUE', '999'),
	('MR', 'MAURITANIA', '242'),
	('MS', 'MONTSERRAT', '999'),
	('MT', 'MALTA', '999'),
	('MU', 'MAURITIUS', '999'),
	('MV', 'MALDIVES', '999'),
	('MW', 'MALAWI', '264'),
	('MX', 'MEXICO', '421'),
	('MY', 'MALAYSIA', '124'),
	('MZ', 'MOZAMBIQUE', '227'),
	('NA', 'NAMIBIA', '999'),
	('NC', 'NEW CALEDONIA', '999'),
	('NE', 'NIGER', '253'),
	('NF', 'NORFOLK ISLAND', '999'),
	('NG', 'NIGERIA', '237'),
	('NI', 'NICARAGUA', '424'),
	('NL', 'NETHERLANDS', '512'),
	('NO', 'NORWAY', '522'),
	('NP', 'NEPAL', '999'),
	('NR', 'NAURU', '999'),
	('NU', 'NIUE', '999'),
	('NZ', 'NEW ZEALAND', '312'),
	('OM', 'OMAN', '152'),
	('PA', 'PANAMA', '425'),
	('PE', 'PERU', '442'),
	('PF', 'FRENCH POLYNESIA', '999'),
	('PG', 'PAPUA NEW GUINEA', '120'),
	('PH', 'PHILIPPINES', '123'),
	('PK', 'PAKISTAN', '134'),
	('PL', 'POLAND', '543'),
	('PM', 'SAINT PIERRE AND MIQUELON', '999'),
	('PN', 'PITCAIRN', '999'),
	('PR', 'PUERTO RICO', '999'),
	('PS', 'PALESTINIAN TERRITORY, OCCUPIED', ''),
	('PT', 'PORTUGAL', '528'),
	('PW', 'PALAU', '999'),
	('PY', 'PARAGUAY', '438'),
	('QA', 'QATAR', '157'),
	('RE', 'REUNION', '999'),
	('RO', 'ROMANIA', '544'),
	('RS', 'SERBIA', ''),
	('RU', 'RUSSIAN FEDERATION', '546'),
	('RW', 'RWANDA', '999'),
	('SA', 'SAUDI ARABIA', '143'),
	('SB', 'SOLOMON ISLANDS', '999'),
	('SC', 'SEYCHELLES', '999'),
	('SD', 'SUDAN', '216'),
	('SE', 'SWEDEN', '523'),
	('SG', 'SINGAPORE', '122'),
	('SH', 'SAINT HELENA', '999'),
	('SI', 'SLOVENIA', '999'),
	('SJ', 'SVALBARD AND JAN MAYEN', '999'),
	('SK', 'SLOVAKIA', '999'),
	('SL', 'SIERRA LEONE', '238'),
	('SM', 'SAN MARINO', '999'),
	('SN', 'SENEGAL', '241'),
	('SO', 'SOMALIA', '224'),
	('SR', 'SURINAME', '428'),
	('SS', 'South Sudan', ''),
	('ST', 'SAO TOME AND PRINCIPE', '999'),
	('SV', 'EL SALVADOR', '999'),
	('SX', 'Sint Maarten (Dutch Part)', ''),
	('SY', 'SYRIAN ARAB REPUBLIC', '153'),
	('SZ', 'SWAZILAND', '999'),
	('TC', 'TURKS AND CAICOS ISLANDS', '999'),
	('TD', 'CHAD', '254'),
	('TF', 'FRENCH SOUTHERN TERRITORIES', '999'),
	('TG', 'TOGO', '230'),
	('TH', 'THAILAND', '121'),
	('TJ', 'TAJIKISTAN', '999'),
	('TK', 'TOKELAU', '999'),
	('TL', 'Timor-Leste', ''),
	('TM', 'TURKMENISTAN', '999'),
	('TN', 'TUNISIA', '214'),
	('TO', 'TONGA', '999'),
	('TP', 'EAST TIMOR', '999'),
	('TR', 'TURKEY', '154'),
	('TT', 'TRINIDAD AND TOBAGO', '444'),
	('TV', 'TUVALU', '999'),
	('TW', 'TAIWAN, PROVINCE OF CHINA', '115'),
	('TZ', 'TANZANIA, UNITED REPUBLIC OF', '222'),
	('UA', 'UKRAINE', '999'),
	('UG', 'UGANDA', '251'),
	('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', '999'),
	('US', 'UNITED STATES', '411'),
	('UY', 'URUGUAY', '437'),
	('UZ', 'UZBEKISTAN', '999'),
	('VA', 'HOLY SEE (VATICAN CITY STATE)', '999'),
	('VC', 'SAINT VINCENT AND THE GRENADINES', '999'),
	('VE', 'VENEZUELA', '432'),
	('VG', 'VIRGIN ISLANDS, BRITISH', '999'),
	('VI', 'VIRGIN ISLANDS, U.S.', '999'),
	('VN', 'VIET NAM', '131'),
	('VU', 'VANUATU', '999'),
	('WF', 'WALLIS AND FUTUNA', ''),
	('WS', 'SAMOA', '999'),
	('XZ', 'Installations in International Waters', ''),
	('YE', 'YEMEN', '151'),
	('YT', 'MAYOTTE', ''),
	('YU', 'YUGOSLAVIA', '547'),
	('ZA', 'SOUTH AFRICA', '261'),
	('ZM', 'ZAMBIA', '263'),
	('ZW', 'ZIMBABWE', '262');
/*!40000 ALTER TABLE `tr_negara` ENABLE KEYS */;

-- Dumping structure for table db_po.tr_perusahaan
CREATE TABLE IF NOT EXISTS `tr_perusahaan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_id` tinyint(3) unsigned DEFAULT NULL,
  `no_kd_id` varchar(20) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `kd_pod` varchar(5) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `no_fax` varchar(15) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `status_perusahaan` varchar(3) DEFAULT NULL,
  `kd_api` char(1) DEFAULT NULL,
  `no_api` varchar(15) DEFAULT NULL,
  `kategori` varchar(2) DEFAULT NULL,
  `fl_history` varchar(1) DEFAULT NULL,
  `ks_kantor_rekam` varchar(6) DEFAULT NULL,
  `nip_rekam` varchar(18) DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `nip_upd` varchar(18) DEFAULT NULL,
  `wk_upd` datetime DEFAULT NULL,
  `npwp9` varchar(9) DEFAULT NULL,
  `no_tdp` varchar(30) DEFAULT NULL,
  `tgl_tdp` date DEFAULT NULL,
  `no_siup` varchar(30) DEFAULT NULL,
  `tgl_siup` date DEFAULT NULL,
  `fl_khusus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_perusahaan_kd_id` (`kd_id`),
  CONSTRAINT `FK_perusahaan_kd_id` FOREIGN KEY (`kd_id`) REFERENCES `tr_jenis_identitas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table db_po.tr_perusahaan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tr_perusahaan` DISABLE KEYS */;
INSERT INTO `tr_perusahaan` (`id`, `kd_id`, `no_kd_id`, `nama`, `alamat`, `kd_pod`, `no_tlp`, `no_fax`, `kota`, `status_perusahaan`, `kd_api`, `no_api`, `kategori`, `fl_history`, `ks_kantor_rekam`, `nip_rekam`, `wk_rekam`, `nip_upd`, `wk_upd`, `npwp9`, `no_tdp`, `tgl_tdp`, `no_siup`, `tgl_siup`, `fl_khusus`) VALUES
	(1, 5, '999999999999999', 'PT NAMA PERUSAHAAN', 'ALAMAT PERUSAHAAN ADALAH DI KOTA ADALAH', '12345', '2121212121', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 5, '2313123123', 'PT NAMA B', 'ALAMAT PERUSAHAAN ADALAH DI KOTA ADALAH', '12345', '2121212121', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tr_perusahaan` ENABLE KEYS */;

-- Dumping structure for table db_po.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perusahaan_id` int(10) unsigned DEFAULT NULL,
  `profil_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `perusahaan_id` (`perusahaan_id`),
  KEY `profil_id` (`profil_id`),
  CONSTRAINT `FK_users_perusahaan` FOREIGN KEY (`perusahaan_id`) REFERENCES `tr_perusahaan` (`id`),
  CONSTRAINT `FK_users_profil` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_po.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `perusahaan_id`, `profil_id`, `created_at`, `updated_at`) VALUES
	(1, 'rinaldi', 'admin@mail.com', NULL, '$2y$10$Lrqu.iCOGlTukLUJWG69hupVwBts8VH3xEhMl5J//lElGoLTeuyaS', NULL, 1, NULL, '2020-03-20 09:03:51', '2020-03-20 09:03:51'),
	(2, 'admin2', 'admin2@mail.com', NULL, '$2y$10$l4npmP3ltkHzqoNvyvv6VuEIPwdLtiCUTwHxfQLv4X/U0IeaL6XP2', NULL, NULL, NULL, '2020-03-20 09:40:34', '2020-03-20 09:40:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
