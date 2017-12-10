-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 10 2017 г., 14:31
-- Версия сервера: 5.5.53
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id_admin`) VALUES
(1),
(2),
(4),
(23);

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id_group` int(10) UNSIGNED NOT NULL,
  `studygroup` varchar(6) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `course` int(11) NOT NULL,
  `kaf` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `admin` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id_group`, `studygroup`, `speciality`, `course`, `kaf`, `school`, `admin`) VALUES
(7, 'Б8319', 'Прикладная информатика', 3, 'Информатики, математического и компьютерного моделирования', 'ШЕН', NULL),
(8, 'Б8314', 'Прикладная математика', 3, 'Информатики, математического и компьютерного моделирования', 'ШЕН', NULL),
(9, 'Б8202', 'Математика и компьютерные науки', 2, 'Информатики, математического и компьютерного моделирования', 'ШЕН', NULL),
(10, 'Б8203', 'Прикладная математика и информатика', 2, 'Информатики, математического и компьютерного моделирования', 'ШЕН', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `id_person` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`id_person`, `lastname`, `name`, `fathername`, `username`, `password`, `email`, `telephone`) VALUES
(1, 'Кленина', 'Надежда', 'Викторовна', 'klenina_nv', 'klenina_nv', 'klenina_nv@dvfu.ru', '89145556677'),
(2, 'Малыкина', 'Ирина', 'Анатольевна', 'malikina_ia', 'malikina_ia', 'malikina_ia@dvfu.ru', '89020004455'),
(4, 'Олейников', 'Игорь', 'Сергеевич', 'oleynikov_is', 'oleynikov_is', 'oleynikov_is@dvfu.ru', '89247776699'),
(5, 'Кронидов', 'Тимофей', 'Витальевич', 'kronidov_tv', 'kronidov_tv', 'kronidov_tv@yandex.ru', '88089996677'),
(6, 'Овчинникова', 'Анна', 'Сергеевна', 'ovchanna', 'ovchanna', 'ovchanna@mail.ru', '89045558833'),
(7, 'Степанова', 'Светлана', 'Геннадьевна', 'svetstep', 'svetstep', 'svetstep@gmail.com', '87034445566'),
(8, 'Орлов', 'Илья', 'Юрьевич', 'ilya_orel', 'ilya_orel', 'ilya_orel@gmail.com', '89165557733'),
(9, 'Крицкая', 'Мария', 'Евгеньевна', 'mary_kric', 'mary_kric', 'mary_kric@mail.ru', '83025553344'),
(10, 'Тарасов', 'Сергей', 'Геннадьевич', 'tarasov_sg', 'tarasov_sg', 'tarasov_sg@yandex.ru', '89032224455'),
(11, 'Бардаш', 'Алексей', 'Степанович', 'bardash', 'bardash', 'bardash@gmail.com', '89049992200'),
(12, 'Сафронова', 'Екатерина', 'Владимировна', 'safronova', 'safronova', 'safronova@gmail.com', '89056669911'),
(13, 'Скоропостижная', 'Александра', 'Святославовна', 'sashaskor', 'sashaskor', 'sashaskor@mail.ru', '89051113322'),
(14, 'Андреева', 'Елена', 'Григорьевна', 'andreeva', 'andreeva', 'andreeva@gmail.com', '8907772244'),
(15, 'Захаров', 'Валентин', 'Геннадьевич', 'zaharov', 'zaharov', 'zaharov@yandex.ru', '89046668822'),
(16, 'Якимов', 'Владислав', 'Валерьевич', 'vlad_yak', 'vlad_yak', 'vlad_yak@gmail.com', '89023338855'),
(17, 'Савинский', 'Александр', 'Владимирович', 'rostelekom', 'rostelekom', 'hr@rtk.ru', '2456789'),
(18, 'Шепелев', 'Антон', 'Сергеевич', 'alians_tk', 'alians_tk', 'hr@alians_tk.ru', '2456734'),
(19, 'Леонов', 'Влад', 'Семёнович', 'rm_soft', 'rm_soft', 'mail@rm_soft.ru', '2342321'),
(20, 'Горунов', 'Илья', 'Владимирович', 'sozvezdie', 'sozvezdie', 'hr_mail@sozvezdie.ru', '2305611'),
(21, 'Орлов', 'Кирилл', 'Витальевич', 'coral', 'coral', 'hr_mail@coral.ru', '2758934'),
(23, 'Кленин', 'Александр', 'Сергеевич', 'klenin_as', 'klenin_as', 'klenin@gmail.com', '89145056677'),
(24, 'Ефимов', 'Дмитрий', 'Сергеевич', 'vl_consult', 'vl_consult', 'hr_mail@vl_consult.ru', '2782310');

-- --------------------------------------------------------

--
-- Структура таблицы `pterodactyl`
--

CREATE TABLE `pterodactyl` (
  `id_pter` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sphere` varchar(255) NOT NULL COMMENT 'сфера деятельности',
  `about` varchar(5000) NOT NULL COMMENT 'о компании',
  `iscontract` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'наличие договора о сотрудничестве с ДВФУ',
  `contract` varchar(255) DEFAULT NULL COMMENT 'ссылка на электроный вариант договора'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pterodactyl`
--

INSERT INTO `pterodactyl` (`id_pter`, `name`, `address`, `sphere`, `about`, `iscontract`, `contract`) VALUES
(17, 'Ростелеком', 'г.Владивосток, пр-т Красного Знамени, 37 ', 'Телефонная связь, IP-телефония, кабельное телевидение, Интернет.', '\"Ростелеком\" – одна из крупнейших в России и Европе телекоммуникационных компаний, присутствующая во всех сегментах рынка услуг связи и охватывающая более 34 млн. домохозяйств в России.', 0, NULL),
(18, 'АльянсТелеком', 'г.Владивосток, ул. Луговая, 21а ', 'Интернет и телевидение, видеонаблюдение для физических и юридических лиц.', 'Компания \"АльянсТелеком\" работает на рынке телекоммуникационных услуг с 2007 года. Образовавшись путем слияния двух операторов связи города Владивостока, ООО \"ОктопусНет\" и ООО \"ВладТелеКом\" (\"СтритНет\"), компания превратилась в провайдера города Владивостока, предоставив жителям доступ к современным телекоммуникационным услугам и Интернет-сервисам.\r\n\r\nМультимедийная сеть компании охватывает большую часть города, при этом компания постоянно расширяет свою транспортную сеть, подключая новые дома к быстрому Интернету и современному кабельному телевидению \"АльянсЦифра\".', 0, NULL),
(19, 'РМ софт', 'г.Владивосток, ул. Карла Либкнехта, 10а', 'Разработка, продажа, сопровождение и обслуживание программного обеспечения.', 'ООО \"РМ Софт\".', 0, NULL),
(20, 'Созвездие', 'г.Владивосток, пр-т Народный, 29', 'Разработка, продажа, внедрение, сопровождение программы 1С.', '', 0, NULL),
(21, 'Coral', 'г.Владивосток, ул. Пограничная, 12, 2-й этаж', 'Разработка и сопровождение программного обеспечения на платформе 1С. Электронный документооборот, CRM, бюджетирование. ', 'Профессиональный ИТ-аутсорс и разработка нестандартных ИТ-решений.\r\n\r\nКомпания использует открытую платформу 1С 8.х с готовыми решениями для бизнеса.\r\n\r\nЦены адаптации привязаны к работе специалистов на локальном рынке ИТ-разработки.\r\n\r\nСрочность исполнения - проект сопровождает менеджер-аналитик и настроенная тикет-система Helpdesk. Это гарантирует быструю реакцию и поиск решения на вопрос и заявку.\r\n\r\nСистемный консалтинг - компания имеет возможность рассказать о выборе архитектуры корпоративной ИТ-системы, помочь в увеличении скорости обмена и интеграции баз данных, настроить сторонние приложения.', 0, NULL),
(24, 'ВЛ-Консалтинг', 'г.Владивосток, ул. Круговая 2-я, 12, 1-й этаж', 'Продажа, внедрение и обслуживание программ 1С, антивирусов, системного программного обеспечения. Программа 1+ мобильная торговля.', '', 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id_vac` int(10) UNSIGNED NOT NULL COMMENT 'вакансия',
  `id_stud` int(10) UNSIGNED NOT NULL COMMENT 'студент',
  `stud_agree` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'согласие студента',
  `pter_agree` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'согласие практикодателя',
  `admin_agree` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'согласие администратора'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id_vac`, `id_stud`, `stud_agree`, `pter_agree`, `admin_agree`) VALUES
(3, 6, 1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `resume`
--

CREATE TABLE `resume` (
  `id_stud` int(10) UNSIGNED NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `additional` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `resume`
--

INSERT INTO `resume` (`id_stud`, `skills`, `experience`, `additional`) VALUES
(13, 'Swift, C/C++, Java', 'Участие в крупных ИТ-проектах', ''),
(15, 'HTML, PHP, JS', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id_stud` int(10) UNSIGNED NOT NULL,
  `studygroup` int(10) UNSIGNED NOT NULL,
  `birthdate` date NOT NULL,
  `invalid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id_stud`, `studygroup`, `birthdate`, `invalid`) VALUES
(5, 8, '1996-12-01', ''),
(6, 8, '1997-05-06', ''),
(7, 9, '1999-04-12', ''),
(8, 10, '1998-12-03', ''),
(9, 10, '1996-09-14', ''),
(10, 9, '1998-08-17', ''),
(11, 7, '1997-05-28', ''),
(12, 8, '1997-10-30', ''),
(13, 10, '1998-05-15', ''),
(14, 8, '1996-01-14', ''),
(15, 7, '1997-03-08', ''),
(16, 8, '1997-11-29', '');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE `vacancy` (
  `id_vac` int(10) UNSIGNED NOT NULL,
  `id_pter` int(10) UNSIGNED NOT NULL,
  `about` varchar(1000) NOT NULL,
  `practic` varchar(255) NOT NULL COMMENT 'вид деятельности',
  `start` date NOT NULL COMMENT 'начало периода',
  `finish` date NOT NULL COMMENT 'конецц периода',
  `invalid` text NOT NULL COMMENT 'условия для инвалидов',
  `logo` varchar(255) NOT NULL,
  `places` int(11) NOT NULL COMMENT 'количество мест'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancy`
--

INSERT INTO `vacancy` (`id_vac`, `id_pter`, `about`, `practic`, `start`, `finish`, `invalid`, `logo`, `places`) VALUES
(1, 24, 'Программист 1С', '', '2018-07-25', '2018-08-09', '', '', 5),
(2, 17, 'Инженер связи', '', '2018-07-25', '2018-08-09', '', '', 3),
(3, 18, 'Помощник системного администратора', '', '2018-07-25', '2018-08-09', '', '', 3),
(4, 19, 'Веб-программист', '', '2018-07-25', '2018-08-09', '', '', 5),
(5, 21, '1С-программист', '', '2018-07-25', '2018-08-09', '', '', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id_admin_2` (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`),
  ADD UNIQUE KEY `studygroup_2` (`studygroup`),
  ADD KEY `studygroup` (`id_group`),
  ADD KEY `admin` (`admin`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_person_2` (`id_person`),
  ADD KEY `id_person_3` (`id_person`);

--
-- Индексы таблицы `pterodactyl`
--
ALTER TABLE `pterodactyl`
  ADD UNIQUE KEY `id_pter` (`id_pter`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD KEY `id_vac` (`id_vac`),
  ADD KEY `id_stud` (`id_stud`);

--
-- Индексы таблицы `resume`
--
ALTER TABLE `resume`
  ADD UNIQUE KEY `id_stud` (`id_stud`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_stud`),
  ADD UNIQUE KEY `id_stud` (`id_stud`),
  ADD KEY `studygroup` (`studygroup`);

--
-- Индексы таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id_vac`),
  ADD KEY `id_pter` (`id_pter`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id_vac` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `admin` (`id_admin`);

--
-- Ограничения внешнего ключа таблицы `pterodactyl`
--
ALTER TABLE `pterodactyl`
  ADD CONSTRAINT `pterodactyl_ibfk_1` FOREIGN KEY (`id_pter`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_stud`) REFERENCES `student` (`id_stud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`id_vac`) REFERENCES `vacancy` (`id_vac`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`id_stud`) REFERENCES `student` (`id_stud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`studygroup`) REFERENCES `groups` (`id_group`),
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_stud`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_ibfk_1` FOREIGN KEY (`id_pter`) REFERENCES `pterodactyl` (`id_pter`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
