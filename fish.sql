-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 20 2024 г., 07:30
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fish`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` int NOT NULL,
  `id_user` varchar(99) NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `baskets`
--

INSERT INTO `baskets` (`id`, `id_user`, `id_product`) VALUES
(1, '2', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `ss_employees`
--

CREATE TABLE `ss_employees` (
  `id_employee` int NOT NULL COMMENT 'Номер сотрудника',
  `fio` varchar(100) NOT NULL COMMENT 'ФИО',
  `txt` varchar(1000) NOT NULL COMMENT 'Описание'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `ss_employees`
--

INSERT INTO `ss_employees` (`id_employee`, `fio`, `txt`) VALUES
(1, 'Ван Даркхолм', ''),
(2, 'Мао Дзе Дун', ''),
(3, 'Танжиро Камадо', ''),
(4, 'Эран Егер', ''),
(5, 'Леви Акерман', ''),
(6, 'Прави Акерман', ''),
(7, 'Билли Харрингтон', ''),
(8, 'Кокушибо Гёмей', '');

-- --------------------------------------------------------

--
-- Структура таблицы `ss_news`
--

CREATE TABLE `ss_news` (
  `id_new` int NOT NULL COMMENT 'Номер новости',
  `head` varchar(100) NOT NULL COMMENT 'Заголовок',
  `text` varchar(10000) NOT NULL COMMENT 'Текст',
  `public` int NOT NULL COMMENT 'Разрешение на публикацию'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `ss_news`
--

INSERT INTO `ss_news` (`id_new`, `head`, `text`, `public`) VALUES
(1, 'Изменения в лицензионном соглашении', '<p>Начиная с 02.01.2021 в текст лицензионного соглашения внесены изменения. Пункт 2.1 изменен на \"пользователь обязуется указывать только настоящие данные\"</p>', 1),
(2, 'Поздравляем с Днем Победы !', '<p>\r\nНа протяжении многих десятилетий День Победы является самым святым праздником для всех граждан нашей страны. В этот день народ нашей страны окончательно победил фашистскую Германию в Великой Отечественной войне. В предместье Берлина 9 мая 1945 года был подписан акт о полной капитуляции вермахта. Первый День Победы праздновался так, как ни один из праздников в современной истории. Дорого далась эта победа нашему народу, погибли более 20 миллионов человек на этой страшной войне, в каждой семье есть о ком вспомнить… \r\n</p>\r\n\r\n<p>Как дань памяти героизму советского народа 9 мая в День Победы ежегодно в центре страны на Красной площади и во всех крупных городах проходят парады и праздничные шествия, в этот день встречаются фронтовики, ветераны трудового фронта, возлагаются венки к памятникам, сверкает праздничный салют. Память об этой великой победе будет вечно передаваться из поколения в поколение.\r\n</p>', 1),
(3, 'Новая линейка косметики бренда GERMAINE DE CAPUCCINI', '<p>\nУважаемые друзья! Наше сотрудничество с ГК «Спортмедимпорт» Санкт-Петербург дало возможность представить для Вас новую элитную, профессиональную косметику испанского бренда GERMAINE de CAPUCCINI. Компания GERMAINE de CAPUCCINI всегда стремилась использовать новейшие технологии, чтобы предложить салонам красоты великолепное качество своих профессиональных продуктов и средств домашнего ухода. \nИмея за плечами более 50 лет опыта, компания GERMAINE de CAPUCCINI не прекращает развиваться в направлениях: инновации, усовершенствовании технологии производства, обучении и развитии персонала.\n</p>', 1),
(4, 'Массаж в четыре руки - это перезагрузка', '<p>\nМассаж в четыре руки-это перезагрузка.\nВы получаете не просто оздоровление и релакс, вы получаете возможность перезагрузить сознание. Ресинхронизация действий мастеров откроет для Вас новый уровень сознания (расслабления).\n</p>\n<p>\nМассаж начинается с глубокой проработки стоп, плавно переходящий на ноги, далее идет полная проработка и расслабление спины, шейно-воротниковой зоны.\n</p>\n<p>\nПри работе с передней поверхностью подключается профессиональный косметолог по лицу и Вы обнаружите совершенно новый уровень расслабления, поскольку два специалиста сотрудничают в синхронизированном выполнении массирования лица и тела.\n</p>\n<p>\nВо время данного массаж Ваш ум может сосредоточиться только на расслаблении. Ваш организм извлекает пользу из двух массажей на одной незабываемой процедуре, и Вы уйдете отдохнувшим и обновлённым.\n</p>\n<p>\nБудем рады видеть Вас у себя в гостях.\n</p>', 1),
(5, 'RAPHITOX – Активный омолаживающий отшелушивающий крем', '<p>\nRaphitox – активный омолаживающий отшелушивающий крем-пилинг растительного происхождения, направленный на регенерацию кожи.\n</p>\n<p>\nИнновационный препарат предназначен для ухода за кожей c растворимыми микро иглами растительного происхождения.Raphitox представляет собой альтернативу кислотным или механический пилингам, а так же мезороллерам. Препарат не оставляет шрамы на коже и нет опасности возникновения пигментации. Не повреждает кожные покровы.\n</p>', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ss_online`
--

CREATE TABLE `ss_online` (
  `id_online` int NOT NULL COMMENT 'Номер записи',
  `id_employee` int NOT NULL COMMENT 'Номер сотрудника',
  `dt` int NOT NULL COMMENT 'Дата и время',
  `id_user` int NOT NULL COMMENT 'Номер пользователя',
  `status` int NOT NULL COMMENT 'Статус',
  `archive` int NOT NULL COMMENT 'Флаг архивности'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `ss_online`
--

INSERT INTO `ss_online` (`id_online`, `id_employee`, `dt`, `id_user`, `status`, `archive`) VALUES
(1, 5, 1526940900, 0, 1, 0),
(3, 6, 1527764460, 1, 2, 0),
(4, 4, 1527682320, 2, 1, 1),
(5, 1, 1527376860, 0, 0, 0),
(6, 1, 1527242400, 0, 2, 0),
(7, 1, 1527246000, 0, 1, 0),
(8, 2, 1527983940, 2, 0, 0),
(9, 6, 1528473780, 0, 0, 0),
(10, 1, 1527750900, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ss_users`
--

CREATE TABLE `ss_users` (
  `id_user` int NOT NULL COMMENT 'Номер пользователя',
  `email` varchar(100) NOT NULL COMMENT 'Email',
  `password` varchar(100) NOT NULL COMMENT 'Пароль',
  `username` varchar(100) NOT NULL COMMENT 'Имя',
  `phone` varchar(100) NOT NULL COMMENT 'Телефон',
  `token` varchar(128) DEFAULT NULL COMMENT 'Токен',
  `type` int NOT NULL COMMENT 'Тип',
  `basket` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `ss_users`
--

INSERT INTO `ss_users` (`id_user`, `email`, `password`, `username`, `phone`, `token`, `type`, `basket`) VALUES
(0, '', '', '...', '', 'sizdQ3HhAreNKikAQdYAAknGd6Efa6F2K67kDZYSaK3s4k9dz2rA86BNDBSiZEzA9BbAzGeyTn3Y7QaT6fzaGbTtZY8YHG46yNnbNk8ZDhrrR9rBBZ92AYZyt9aGD566', 0, 'null'),
(1, 'admin@mail.ru', '12345', 'Администратор', '45-18-18', 'Yrr8B9eYekYFDhD58y8zfasTeQzEAYZ4KEsfnSr7eKSTeZS39k6E6GKD5BnNKT8Q5KtyaGhDY9dSByAB3t7257k39ifFZk5393HtQrf2iYn8yi9nzae8QT89i4fGDnzf', 1, 'null'),
(2, 'user1@mail.ru', '123', 'Ирина Николаевна', '42-32-30', 'kifRatZH3t6dsiH9B37S4bbNKFbtdEah99dkTd4YzZ4e4HSAfS65HD7QdzzSYEbQn7F5szDSb34H7TNaAHeFhhyFTasG2DisdnEsRQGfABHK2ZiNe5TksHHEYiRSTAA7', 0, 'null'),
(12, 'kdaksdkas@main.by', '12312313', 'daniil.soroka.03@mail.ru', '3123123', NULL, 0, 'null'),
(13, 'dasdasd@maskdaisd.sda', '2131231231', 'kfkfkfak', '23123123123', NULL, 0, 'null');

-- --------------------------------------------------------

--
-- Структура таблицы `t_meal`
--

CREATE TABLE `t_meal` (
  `id` bigint NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `weight` int NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `t_meal`
--

INSERT INTO `t_meal` (`id`, `title`, `description`, `weight`, `price`, `quantity`, `image`) VALUES
(1, 'Ролл Филадельфия', 'Масса нетто: 335 гр\n\nСостав продукции: Водоросли морские нори, рис (соль, сахар, уксус), сыр творожный, лосось охлажденный, огурец, икра тобико. Сливочная шапка.\n\nПищевая ценность: содержание в 100г продукта:\n\nБелков 8,7 г; жиров 9,7 г; углеводов 30,2 г; энергетическая ценность 249 ккал/1043 кДж.\n\nСрок годности и условия хранения: 6 часов при t (+2+6) 0C и относительной влажности воздуха не менее 75 %.', 335, '13', 0, 'images/meals/m1.jpg'),
(2, 'Ролл Сливочный терияки', 'Вес: 240 гр*\r\nЛосось терияки, салат, приправа луковая, сыр творожный, нити чили, соус терияки.', 335, '14', 8, 'images/meals/slivochnyj-teriyaki.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ss_employees`
--
ALTER TABLE `ss_employees`
  ADD PRIMARY KEY (`id_employee`);

--
-- Индексы таблицы `ss_news`
--
ALTER TABLE `ss_news`
  ADD PRIMARY KEY (`id_new`);

--
-- Индексы таблицы `ss_online`
--
ALTER TABLE `ss_online`
  ADD PRIMARY KEY (`id_online`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `ss_users`
--
ALTER TABLE `ss_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `t_meal`
--
ALTER TABLE `t_meal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ss_employees`
--
ALTER TABLE `ss_employees`
  MODIFY `id_employee` int NOT NULL AUTO_INCREMENT COMMENT 'Номер сотрудника', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `ss_news`
--
ALTER TABLE `ss_news`
  MODIFY `id_new` int NOT NULL AUTO_INCREMENT COMMENT 'Номер новости', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `ss_online`
--
ALTER TABLE `ss_online`
  MODIFY `id_online` int NOT NULL AUTO_INCREMENT COMMENT 'Номер записи', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `ss_users`
--
ALTER TABLE `ss_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT COMMENT 'Номер пользователя', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
