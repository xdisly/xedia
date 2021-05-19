-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных xedia
CREATE DATABASE IF NOT EXISTS `vladrru_xedia-ru` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `vladrru_xedia-ru`;

-- Дамп структуры для таблица xedia.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.categories: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Первая категория', 'pervaya-kategoriya', '2021-04-25 01:49:33', '2021-05-15 13:18:48'),
	(2, 'Вторая категория', 'vtoraya-kategoriya', '2021-04-25 01:50:33', '2021-05-15 13:18:57'),
	(3, 'Третья категория', 'tretya-kategoriya', '2021-04-25 01:51:02', '2021-05-15 13:19:05'),
	(4, 'Четвертая категория', 'chetvertaya-kategoriya', '2021-04-25 02:18:39', '2021-05-15 13:19:13'),
	(6, 'Пятая категория', 'pyataya-kategoriya', '2021-05-15 13:19:21', '2021-05-15 13:19:21');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица xedia.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.failed_jobs: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Дамп структуры для таблица xedia.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.migrations: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2014_10_12_000000_create_users_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2021_04_20_151043_create_categories_table', 1),
	(10, '2021_04_20_151238_create_tags_table', 1),
	(11, '2021_04_20_151310_create_posts_table', 1),
	(12, '2021_04_20_151415_create_post_tag_table', 1),
	(13, '2021_05_03_084800_alter_table_users_add_isadmin', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица xedia.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `view` int(10) unsigned NOT NULL DEFAULT 0,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.posts: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`id`, `title`, `slug`, `description`, `content`, `category_id`, `view`, `thumbnail`, `created_at`, `updated_at`) VALUES
	(1, 'Моя первая запись', 'moya-pervaya-zapis', 'Не следует, однако забывать, что дальнейшее развитие различных форм деятельности позволяет оценить значение систем массового участия. Задача организации, в особенности же консультация с широким активом представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач.', '<p><strong>Равным образом</strong> сложившаяся структура организации <i>представляет собой интересный эксперимент </i>проверки системы обучения кадров, <strong>соответствует</strong> насущным потребностям.</p><figure class="image image-style-align-left"><img src="/public/ckfinder/userfiles/files/image_6(1).jpg"></figure><p style="text-align:right;"><i>Повседневная практика показывает, что сложившаяся структура организации требуют определения и уточнения форм развития</i></p><p style="text-align:right;">.</p><p>Товарищи! начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции в значительной степени обуславливает создание систем массового участия.</p><p>&nbsp;</p><p><i>Идейные соображения высшего порядка, а также реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации модели развития.</i></p>', 1, 15, 'images/2021-05-15/YathY2l1GpSofiCiBeWcVvA1x8kCvvKnbyKuIUbL.jpg', '2021-05-15 13:22:24', '2021-05-16 04:51:03'),
	(2, 'Моя вторая запись', 'moya-vtoraya-zapis', 'В своём стремлении улучшить пользовательский опыт мы упускаем, что сделанные на базе интернет-аналитики выводы, инициированные исключительно синтетически, преданы социально-демократической анафеме. В своём стремлении улучшить пользовательский опыт мы упускаем, что тщательные исследования конкурентов подвергнуты целой серии независимых исследований.', '<p>Интерактивные прототипы <i>набирают популярность</i> среди <strong>определенных слоев населения</strong>, а значит, должны быть описаны максимально подробно! Есть над чем задуматься: активно развивающиеся страны третьего мира подвергнуты целой серии независимых исследований.&nbsp;</p><figure class="image image-style-align-center"><img src="/public/ckfinder/userfiles/files/image_5.jpg"></figure><p style="text-align:center;">Каждый из нас понимает очевидную вещь: консультация с широким активом, в своём классическом представлении, допускает внедрение инновационных методов управления процессами. Сложно сказать, почему акционеры крупнейших компаний будут ассоциативно распределены по отраслям.</p>', 2, 17, 'images/2021-05-15/EJVVjrOYEuzkFpMxS4ccaeOfdPvBLMmAav4AaiGB.jpg', '2021-05-15 13:25:47', '2021-05-16 05:48:56'),
	(3, 'Моя третья запись', 'moya-tretya-zapis', 'Являясь одной из самых распространённых в мире сельскохозяйственных культур, рис занимает главенствующую позицию в национальной кухне сотен народов. Более половины населения Земли питаются в основном именно рисом, что делает эту сельскохозяйственную культуру важнейшей на планете. В некоторых странах Азии из этого растения готовят такие напитки, как вино и пиво. Из рисовых зерён делают так называемую съедобную рисовую бумагу, применяемую в кондитерском деле.', '<p><i>Ценность яблок кроется в их составе.</i> Почти 80% яблок <i>составляет вода.</i> Остальная часть приходится на клетчатку, органические кислоты, углеводы. Именно зеленое яблоко рекомендуют употреблять во время диет. <strong>Среди фруктов яблоко является очень распространенным продуктом</strong> и практически целый год присутствует в нашем рационе питания. <i>Употребление этих плодов натощак недопустимо</i> при гастритах с повышенной кислотностью, язвенных болезнях, желчекаменной болезни.</p><p style="text-align:right;"><i>У каждого, кто любит возиться на кухне, есть масса маленьких секретов, которые доводят простые блюда до совершенства. Учеными было потрачено много лет, чтобы установить, какие продукты и когда нужно есть, чтобы всегда быть стройным и здоровыми. Прежде всего стоит сказать, что люди часто путают диетическую и обезжиренную пищу с полезной.</i></p><figure class="image image-style-align-left"><img src="/public/ckfinder/userfiles/files/image_9.jpg"></figure>', 3, 3, 'images/2021-05-15/GVy7PdjecgOKq4AKT2Nl5CUD8FpL8uAaHZgegcAl.jpg', '2021-05-15 13:33:41', '2021-05-16 05:01:28'),
	(4, 'Моя четвертая запись', 'moya-chetvertaya-zapis', 'Старайтесь фотографировать при хорошем освещении, в идеале оно должно быть естественным. Если вы не знаете, как использовать вспышку должным образом, то вообще ее не включайте. Очень обидно, когда вы не нравитесь себе ни на одной фотографии. В наше время практически каждый человек периодически делает фотоснимки – неважно, камерой старенького телефона или профессиональной зеркальной камерой.', '<p>Размещая фото в интернете, вы вряд ли мечтаете о славе человека, который запечатлел себя на нелепом или неприличном фоне. <strong>Старайтесь наполнять</strong> снимки художественной ценностью, креативностью, юмором, в конце концов. Для создания качественных ночных кадров лучше снимать в RAW-формате. Самое разумное, что вы можете сделать, для получения хороших снимков в темноте это <i>использовать штатив</i>. Со штативом <strong>вам доступно</strong> применение длинных выдержек без опасности получить смазанную картинку.</p><p style="text-align:center;"><i>Одна из самых распространенных поз для фотосессии – рука возле головы. Если хочется поднести руки к лицу, тогда постарайтесь его не обхватывать. Фотографируя сверху, вы получите более привлекательный ракурс. Кадрируйте снимки, обрезайте лишние детали, которые портят фотографии.&nbsp;</i></p><figure class="image image-style-align-center"><img src="/public/ckfinder/userfiles/files/image_1.jpg"></figure><p style="text-align:right;">Конечно, фотография, как и любое другое искусство, прежде всего является не предметом потребления, а концентрированной формой самовыражения мастера.</p>', 4, 6, 'images/2021-05-15/FnMydEcCPKi9nJy0LGl1sID5taS5309zZ7eayhUJ.jpg', '2021-05-15 13:36:39', '2021-05-16 05:26:01'),
	(5, 'Моя пятая запись', 'moya-pyataya-zapis', 'Итак, мы можем подвести итог, что современные технологии, и компьютеры в частности, имеют как положительные, так и отрицательные последствия для жизни людей. А для того, чтобы жить в гармонии люди должны найти правильный баланс. Они должны помнить, что компьютер изначально был создан, чтобы помочь людям, сделать их жизнь легче, а не разрушить ее.', '<p><strong>Компьютерные технологии</strong> стали неотъемлемой частью <i>жизни людей</i>. Эти технологии имеют свои корни. <i>Возьмём, например</i>, слово «мышка». Компьютерная мышь совсем не то же самое, что маленький грызун, который живёт в зданиях и полях. Это небольшой прибор, который вы двигаете туда-сюда по плоской поверхности, сидя за <strong>компьютером</strong>.&nbsp;</p><p style="text-align:center;"><i>Мышь перемещает стрелку (или курсор) на экране компьютера. Идея такого устройства пришла в голову специалисту по компьютерам Дугласу Энгельбарту в начале 60-х годов XX века.&nbsp;</i></p><figure class="image image-style-align-left"><img src="/public/ckfinder/userfiles/files/image_2.jpg"></figure><p><strong>Первая компьютерная мышь</strong> представляла собой резной деревянный кубик с двумя металлическими колёсиками. <strong>Прибор назвали мышью</strong>, так как с одного конца у него был хвостик. <i>Хвостом был провод,</i> который присоединял устройство к компьютеру.</p>', 6, 42, 'images/2021-05-15/H5MOEQ8pcw1insm6nfwGcUyVH2csNQtWD1dirnbI.jpg', '2021-05-15 13:40:14', '2021-05-16 06:00:04');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Дамп структуры для таблица xedia.post_tag
CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.post_tag: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
REPLACE INTO `post_tag` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2021-04-30 08:50:44', '2021-04-30 08:50:44'),
	(2, 2, 2, '2021-04-30 08:51:21', '2021-04-30 08:51:21'),
	(3, 3, 3, '2021-05-01 08:42:55', '2021-05-01 08:42:55'),
	(14, 5, 4, '2021-05-15 13:36:39', '2021-05-15 13:36:39'),
	(18, 6, 5, '2021-05-16 04:28:05', '2021-05-16 04:28:05');
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;

-- Дамп структуры для таблица xedia.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.tags: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
REPLACE INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Первый тег', 'pervyy-teg', '2021-04-29 15:05:44', '2021-05-15 13:17:51'),
	(2, 'Второй тег', 'vtoroy-teg', '2021-04-29 15:06:05', '2021-05-15 13:18:00'),
	(3, 'Третий тег', 'tretiy-teg', '2021-04-29 15:06:10', '2021-05-15 13:18:08'),
	(5, 'Четвертый тег', 'chetvertyy-teg', '2021-05-15 13:18:17', '2021-05-15 13:18:17'),
	(6, 'Пятый тег', 'pyatyy-teg', '2021-05-15 13:18:26', '2021-05-15 13:18:26');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Дамп структуры для таблица xedia.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы xedia.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
	(1, 'Admin', 'admin@xedia.ru', NULL, '$2y$10$jWEDCDYMEA8ifROe9HrMEOG8uZQUFuTwnVPVnoZvXJsJ2yhefo8RC', NULL, '2021-05-13 02:30:45', '2021-05-13 02:30:45', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;