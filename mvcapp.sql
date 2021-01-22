-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2021 г., 13:33
-- Версия сервера: 8.0.12
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvcapp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `request_url` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `request` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `user_ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log`
--

INSERT INTO `log` (`id`, `level`, `user_id`, `log_time`, `request_url`, `request`, `message`, `user_ip`, `user_agent`) VALUES
(1, 2, 2, '2020-08-31 13:39:55', '/main/ajaxRegistration', NULL, 'Успешная регистрация.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(2, 2, 2, '2021-01-12 11:39:44', '/main/ajaxLogin', NULL, 'Успешная авторизация.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(3, 2, 2, '2021-01-12 14:52:33', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => Тестовое учреждений №1\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [post_code] => 460000\n    [address] => ул. Пушкина, 4\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 1\n    [name] => Тестовое учреждений №1\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [address] => 0\n    [post_code] => 460000\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(4, 2, 2, '2021-01-12 15:03:21', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => Тестовое учреждение №2\n    [country] => Россия\n    [region] => Республика Башкортостан\n    [district] => Куюргазинский р-н\n    [city] => г. Кумертау\n    [post_code] => 450000\n    [address] => ул. К. Маркса, 14\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 2\n    [name] => Тестовое учреждение №2\n    [country] => Россия\n    [region] => Республика Башкортостан\n    [district] => Куюргазинский р-н\n    [city] => г. Кумертау\n    [address] => 0\n    [post_code] => 450000\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(5, 2, 2, '2021-01-12 15:03:40', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => Тестовое учреждение №2\n    [country] => Россия\n    [region] => Республика Башкортостан\n    [district] => Куюргазинский р-н\n    [city] => г. Кумертау\n    [post_code] => 450000\n    [address] => ул. К. Маркса, 14\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 3\n    [name] => Тестовое учреждение №2\n    [country] => Россия\n    [region] => Республика Башкортостан\n    [district] => Куюргазинский р-н\n    [city] => г. Кумертау\n    [address] => 0\n    [post_code] => 450000\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(6, 2, 2, '2021-01-12 15:11:38', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => Тестовое учреждение №3\n    [country] => Россиия\n    [region] => Фывфыфывфыв\n    [district] => вфыфывфыв\n    [city] => фывфывфыв\n    [post_code] => 1232112\n    [address] => фывфы ввфыв фы фывфыв\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 4\n    [name] => Тестовое учреждение №3\n    [country] => Россиия\n    [region] => Фывфыфывфыв\n    [district] => вфыфывфыв\n    [city] => фывфывфыв\n    [address] => 0\n    [post_code] => 1232112\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(7, 2, 2, '2021-01-14 13:09:00', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => wrew3rwr werwe \n    [country] => qweqwe\n    [region] => qweqwe\n    [district] => qweqweqwe\n    [city] => qweqweqw\n    [post_code] => 123123\n    [address] => rwerw erwerwer werwer\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 17\n    [name] => wrew3rwr werwe\n    [country] => qweqwe\n    [region] => qweqwe\n    [district] => qweqweqwe\n    [city] => qweqweqw\n    [address] => rwerw erwerwer werwer\n    [post_code] => 123123\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(8, 2, 2, '2021-01-14 13:14:07', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => qweqweqwe\n    [country] => qweqweqw\n    [region] => qweqweq\n    [district] => wqweqweqweq\n    [city] => weqweqweqw\n    [post_code] => 123123\n    [address] => qweqweqw eqweqweqw\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 18\n    [name] => qweqweqwe\n    [country] => qweqweqw\n    [region] => qweqweq\n    [district] => wqweqweqweq\n    [city] => weqweqweqw\n    [address] => qweqweqw eqweqweqw\n    [post_code] => 123123\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(9, 2, 2, '2021-01-14 14:37:57', '/user/AddInstitution', 'Array\n(\n    [LNRouter] => user/AddInstitution\n    [name] => asdasd\n    [country] => asdsd\n    [region] => dsasdasd\n    [district] => asdasd\n    [city] => asdasdasd\n    [post_code] => 1231233\n    [address] => asdasd asdasd\n)\n', 'Добавлено образовательное учреждение, Array\n(\n    [id] => 19\n    [name] => asdasd\n    [country] => asdsd\n    [region] => dsasdasd\n    [district] => asdasd\n    [city] => asdasdasd\n    [address] => asdasd asdasd\n    [post_code] => 1231233\n    [user_id] => 2\n)\n', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(10, 1, 2, '2021-01-14 15:15:03', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(11, 1, 2, '2021-01-14 15:17:02', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [sdasd] => asda\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(12, 1, 2, '2021-01-14 15:17:40', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(13, 1, 2, '2021-01-14 15:18:54', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(14, 1, 2, '2021-01-14 15:19:29', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(15, 1, 2, '2021-01-14 15:20:00', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(16, 1, 2, '2021-01-14 15:21:00', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(17, 1, 2, '2021-01-14 15:22:43', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(18, 1, 2, '2021-01-14 15:22:52', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(19, 1, 2, '2021-01-14 15:23:33', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(20, 2, 2, '2021-01-14 15:30:29', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 16\n)\n', 'Удалено образовательное учреждение. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(21, 1, 2, '2021-01-14 15:30:37', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 16\n)\n', 'DeleteInstitutionList(16). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(22, 2, 2, '2021-01-14 15:30:52', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 5\n)\n', 'Удалено образовательное учреждение. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(23, 2, 2, '2021-01-14 15:30:59', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 15\n)\n', 'Удалено образовательное учреждение. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(24, 2, 2, '2021-01-14 15:31:02', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 14\n)\n', 'Удалено образовательное учреждение. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(25, 2, 2, '2021-01-14 15:31:26', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 12\n)\n', 'Удалено образовательное учреждение. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(26, 2, 2, '2021-01-14 15:40:17', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n    [deleteinstitutionId] => 6\n)\n', 'Удалено образовательное учреждение. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(27, 1, 2, '2021-01-14 15:54:11', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(28, 1, 2, '2021-01-14 15:54:33', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(29, 1, 2, '2021-01-14 15:54:42', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(30, 1, 2, '2021-01-14 15:54:49', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(31, 1, 2, '2021-01-14 15:55:06', '/user/DeleteInstitution', 'Array\n(\n    [LNRouter] => user/DeleteInstitution\n)\n', 'DeleteInstitutionList(). Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(32, 1, 2, '2021-01-14 16:04:25', '/user/GetInstitutionAjax', 'Array\n(\n    [LNRouter] => user/GetInstitutionAjax\n    [editinstitutionId] => 2\n)\n', 'GetInstitutionAjax. Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(33, 1, 2, '2021-01-14 16:04:29', '/user/GetInstitutionAjax', 'Array\n(\n    [LNRouter] => user/GetInstitutionAjax\n    [editinstitutionId] => 1\n)\n', 'GetInstitutionAjax. Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(34, 1, 2, '2021-01-14 16:04:35', '/user/GetInstitutionAjax', 'Array\n(\n    [LNRouter] => user/GetInstitutionAjax\n    [editinstitutionId] => 1\n)\n', 'GetInstitutionAjax. Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(35, 1, 2, '2021-01-14 16:04:39', '/user/GetInstitutionAjax', 'Array\n(\n    [LNRouter] => user/GetInstitutionAjax\n    [editinstitutionId] => 1\n)\n', 'GetInstitutionAjax. Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(36, 1, 2, '2021-01-14 16:04:42', '/user/GetInstitutionAjax', 'Array\n(\n    [LNRouter] => user/GetInstitutionAjax\n    [editinstitutionId] => 4\n)\n', 'GetInstitutionAjax. Образовательное учреждение не найдено!', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(37, 2, 2, '2021-01-14 16:29:40', '/user/EditInstitution', 'Array\n(\n    [LNRouter] => user/EditInstitution\n    [institution_id] => 1\n    [name] => Тестовое учреждение №11\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [post_code] => 460000\n    [address] => ул. Пушкина, 4\n)\n', 'Изменено образовательное учреждение.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(38, 2, 2, '2021-01-14 16:30:34', '/user/EditInstitution', 'Array\n(\n    [LNRouter] => user/EditInstitution\n    [institution_id] => 1\n    [name] => Тестовое учреждение №1\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [post_code] => 460000\n    [address] => ул. Пушкина, 4\n)\n', 'Изменено образовательное учреждение.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(39, 2, 2, '2021-01-14 16:30:49', '/user/EditInstitution', 'Array\n(\n    [LNRouter] => user/EditInstitution\n    [institution_id] => 1\n    [name] => Тестовое учреждение №11\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [post_code] => 460000\n    [address] => ул. Пушкина, 4\n)\n', 'Изменено образовательное учреждение.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(40, 2, 2, '2021-01-14 16:31:01', '/user/EditInstitution', 'Array\n(\n    [LNRouter] => user/EditInstitution\n    [institution_id] => 1\n    [name] => Тестовое учреждение №11\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [post_code] => 460000\n    [address] => ул. Пушкина, 4\n)\n', 'Изменено образовательное учреждение.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(41, 2, 2, '2021-01-14 16:31:41', '/user/EditInstitution', 'Array\n(\n    [LNRouter] => user/EditInstitution\n    [institution_id] => 1\n    [name] => Тестовое учреждение №1\n    [country] => Россия\n    [region] => Оренбургская область\n    [district] => \n    [city] => г. Оренбург\n    [post_code] => 460000\n    [address] => ул. Пушкина, 4\n)\n', 'Изменено образовательное учреждение.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(42, 1, 2, '2021-01-14 17:33:13', '/user/AddMentor', 'Array\n(\n    [LNRouter] => user/AddMentor\n    [last_name] => adsa\n    [first_name] => sdasd\n    [middle_name] => as\n    [position] => asdqwdasda\n    [mentor_id] => asd\n)\n', 'Undefined property: app\\models\\Mentor->mentor_id in C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php on line 434', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(43, 1, 2, '2021-01-14 17:37:01', '/user/AddMentor', 'Array\n(\n    [LNRouter] => user/AddMentor\n    [last_name] => asdas\n    [first_name] => asdas\n    [middle_name] => asda\n    [position] => asdasd\n    [school_id] => asdasd\n)\n', 'exception \'PDOException\' with message \'SQLSTATE[23000]: Integrity constraint violation: 1048 Column \'school_id\' cannot be null\' in C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Connection.php:333\nStack trace:\n#0 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Connection.php(333): PDOStatement->execute(Array)\n#1 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Table.php(359): ActiveRecord\\Connection->query(\'INSERT INTO `us...\', Array)\n#2 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php(844): ActiveRecord\\Table->insert(Array)\n#3 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php(799): ActiveRecord\\Model->insert(true)\n#4 C:\\OSPanel\\domains\\testmvc\\app\\controllers\\UserController.php(343): ActiveRecord\\Model->save()\n#5 C:\\OSPanel\\domains\\testmvc\\app\\core\\Router.php(39): app\\controllers\\UserController->actionAddMentor()\n#6 C:\\OSPanel\\domains\\testmvc\\index.php(18): app\\core\\Router->__construct(\'user/AddMentor\')\n#7 {main}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(44, 2, 2, '2021-01-14 17:37:34', '/user/AddMentor', 'Array\n(\n    [LNRouter] => user/AddMentor\n    [last_name] => asdas\n    [first_name] => asdas\n    [middle_name] => asda\n    [position] => asdasd\n    [school_id] => asdasd\n)\n', 'Добавлен руководитель.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(45, 2, 2, '2021-01-14 17:47:00', '/user/AddMentor', 'Array\n(\n    [LNRouter] => user/AddMentor\n    [last_name] => asdas\n    [first_name] => asdasd\n    [middle_name] => asdasd\n    [position] => asdas\n    [school_id] => asdasdasdasdasd\n)\n', 'Добавлен руководитель.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(46, 2, 2, '2021-01-14 17:48:00', '/user/DeleteMentor', 'Array\n(\n    [LNRouter] => user/DeleteMentor\n    [deletementorId] => 2\n)\n', 'Удален руководитель. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(47, 2, 2, '2021-01-14 17:49:17', '/user/AddMentor', 'Array\n(\n    [LNRouter] => user/AddMentor\n    [last_name] => фывфывфы\n    [first_name] => вфывфв\n    [middle_name] => фвфв\n    [position] => фывфыв\n    [school_id] => фывфывфывф\n)\n', 'Добавлен руководитель.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(48, 2, 2, '2021-01-14 17:49:20', '/user/DeleteMentor', 'Array\n(\n    [LNRouter] => user/DeleteMentor\n    [deletementorId] => 3\n)\n', 'Удален руководитель. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(49, 2, 2, '2021-01-14 17:49:28', '/user/AddMentor', 'Array\n(\n    [LNRouter] => user/AddMentor\n    [last_name] => фывфыв\n    [first_name] => фывфывфывф\n    [middle_name] => фывфы\n    [position] => вфывфыв\n    [school_id] => фывфывфыв\n)\n', 'Добавлен руководитель.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(50, 1, 2, '2021-01-14 17:56:28', '/user/EditMentor', 'Array\n(\n    [LNRouter] => user/EditMentor\n    [mentor_id] => 1\n    [last_name] => asdasфывфыв\n    [first_name] => asdasфывфыв\n    [middle_name] => asdaфывфыв\n    [position] => asdasdфывфыв\n    [school_id] => 0фывфы\n)\n', 'exception \'PDOException\' with message \'SQLSTATE[23000]: Integrity constraint violation: 1048 Column \'last_name\' cannot be null\' in C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Connection.php:333\nStack trace:\n#0 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Connection.php(333): PDOStatement->execute(Array)\n#1 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Table.php(370): ActiveRecord\\Connection->query(\'UPDATE `user_me...\', Array)\n#2 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php(887): ActiveRecord\\Table->update(Array, Array)\n#3 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php(799): ActiveRecord\\Model->update(true)\n#4 C:\\OSPanel\\domains\\testmvc\\app\\controllers\\UserController.php(437): ActiveRecord\\Model->save()\n#5 C:\\OSPanel\\domains\\testmvc\\app\\core\\Router.php(39): app\\controllers\\UserController->actionEditMentor()\n#6 C:\\OSPanel\\domains\\testmvc\\index.php(18): app\\core\\Router->__construct(\'user/EditMentor\')\n#7 {main}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(51, 1, 2, '2021-01-14 17:57:29', '/user/EditMentor', 'Array\n(\n    [LNRouter] => user/EditMentor\n    [mentor_id] => 1\n    [last_name] => asdasфывфыв\n    [first_name] => asdasфывфыв\n    [middle_name] => asdaфывфыв\n    [position] => asdasdфывфыв\n    [school_id] => 0фывфыв\n)\n', 'exception \'PDOException\' with message \'SQLSTATE[23000]: Integrity constraint violation: 1048 Column \'last_name\' cannot be null\' in C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Connection.php:333\nStack trace:\n#0 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Connection.php(333): PDOStatement->execute(Array)\n#1 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Table.php(370): ActiveRecord\\Connection->query(\'UPDATE `user_me...\', Array)\n#2 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php(887): ActiveRecord\\Table->update(Array, Array)\n#3 C:\\OSPanel\\domains\\testmvc\\vendor\\php-activerecord\\php-activerecord\\lib\\Model.php(799): ActiveRecord\\Model->update(true)\n#4 C:\\OSPanel\\domains\\testmvc\\app\\controllers\\UserController.php(437): ActiveRecord\\Model->save()\n#5 C:\\OSPanel\\domains\\testmvc\\app\\core\\Router.php(39): app\\controllers\\UserController->actionEditMentor()\n#6 C:\\OSPanel\\domains\\testmvc\\index.php(18): app\\core\\Router->__construct(\'user/EditMentor\')\n#7 {main}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(52, 2, 2, '2021-01-14 17:58:23', '/user/EditMentor', 'Array\n(\n    [LNRouter] => user/EditMentor\n    [mentor_id] => 1\n    [last_name] => asdasйцуйц\n    [first_name] => asdasйцуйцу\n    [middle_name] => asdaйцуйцу\n    [position] => asdasdйцуйцуй\n    [school_id] => 0йцуйцу\n)\n', 'Информация руководителя изменена.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(53, 2, 2, '2021-01-14 17:59:11', '/user/EditMentor', 'Array\n(\n    [LNRouter] => user/EditMentor\n    [mentor_id] => 1\n    [last_name] => Тестовый\n    [first_name] => Тест\n    [middle_name] => Тестович\n    [position] => Тестовый тестер тестеров\n    [school_id] => 123\n)\n', 'Информация руководителя изменена.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'),
(54, 2, 2, '2021-01-14 17:59:16', '/user/DeleteMentor', 'Array\n(\n    [LNRouter] => user/DeleteMentor\n    [deletementorId] => 4\n)\n', 'Удален руководитель. ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36');

-- --------------------------------------------------------

--
-- Структура таблицы `log_levels`
--

CREATE TABLE `log_levels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log_levels`
--

INSERT INTO `log_levels` (`id`, `name`, `description`) VALUES
(1, 'ERR', 'Ошибка'),
(2, 'INFO', 'Информация'),
(3, 'DEBUG', 'Дебаг, отладка');

-- --------------------------------------------------------

--
-- Структура таблицы `rules`
--

CREATE TABLE `rules` (
  `rule` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rules`
--

INSERT INTO `rules` (`rule`, `comment`, `created_date`, `created_user_id`) VALUES
('admin', 'Может войти в админ-панель.', '2019-12-26 15:42:00', 1),
('basic_auth', 'Базовая авторизация, если удалить это право у пользователя, то он не сможет авторизоваться.', '2019-12-26 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) NOT NULL COMMENT 'Фамилия',
  `first_name` varchar(255) NOT NULL COMMENT 'Имя',
  `middle_name` varchar(255) NOT NULL COMMENT 'Отчество',
  `telephone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `region` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `post_code` varchar(10) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `last_name`, `first_name`, `middle_name`, `telephone`, `country`, `region`, `district`, `city`, `post_code`, `address`, `reg_date`, `last_login_date`) VALUES
(1, 'noreply@lidernauki.ru', '0', 'Системный', 'Бот', 'сервиса', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-23 17:07:34', NULL),
(2, 'berserklonewolf@mail.ru', '$2y$10$qTV73fpo7p1XYbcKC49QTufdvvFj5xLxruteKxpC.38ZlNzq9kP16', 'Irishmann', 'Berserk', 'Lonewolf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-31 13:39:54', '2021-01-12 11:39:44');

--
-- Триггеры `users`
--
DELIMITER $$
CREATE TRIGGER `insert_rules` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO 
	users_rules 
SET
	rule_name = 'basic_auth',
	user_id = NEW.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_wallet` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO users_wallet Set balance = 0, user_id = NEW.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_rules`
--

CREATE TABLE `users_rules` (
  `id` int(11) NOT NULL,
  `rule_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified_user_id` int(11) DEFAULT NULL,
  `last_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_rules`
--

INSERT INTO `users_rules` (`id`, `rule_name`, `user_id`, `created_user_id`, `created_date`, `last_modified_user_id`, `last_modified_date`) VALUES
(1, 'basic_auth', 2, NULL, '2020-08-31 13:39:54', NULL, NULL),
(2, 'admin', 2, NULL, '2021-01-12 11:43:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_wallet`
--

CREATE TABLE `users_wallet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `users_wallet`
--

INSERT INTO `users_wallet` (`id`, `user_id`, `balance`) VALUES
(1, 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_mentors`
--

CREATE TABLE `user_mentors` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL COMMENT 'Фамилия',
  `first_name` varchar(255) NOT NULL COMMENT 'Имя',
  `middle_name` varchar(255) NOT NULL COMMENT 'Отчество',
  `position` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_mentors`
--

INSERT INTO `user_mentors` (`id`, `last_name`, `first_name`, `middle_name`, `position`, `school_id`, `user_id`) VALUES
(1, 'Тестовый', 'Тест', 'Тестович', 'Тестовый тестер тестеров', 123, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user_schools`
--

CREATE TABLE `user_schools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `post_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_schools`
--

INSERT INTO `user_schools` (`id`, `name`, `country`, `region`, `district`, `city`, `address`, `post_code`, `user_id`) VALUES
(1, 'Тестовое учреждение №1', 'Россия', 'Оренбургская область', '', 'г. Оренбург', 'ул. Пушкина, 4', 460000, 2),
(2, 'Тестовое учреждение №2', 'Россия', 'Республика Башкортостан', 'Куюргазинский р-н', 'г. Кумертау', 'ул. К.Маркса, 14', 450000, 2),
(3, 'Тестовое учреждение №3', 'Россия', 'Республика Башкортостан', 'Куюргазинский р-н', 'г. Кумертау', 'ул. К.Маркса, 16', 450000, 2),
(4, 'Тестовое учреждение №4', 'Россиия', 'Республика Башкортостан', 'Куюргазинский р-н', 'г. Кумертау', 'ул. К.Маркса, 25', 450000, 2),
(7, 'Тестовое учреждение №7', 'тест', 'тест', 'тест', 'тест', 'тест', 456600, 2),
(8, 'Тестовое учреждение №8', 'тест', 'тест', 'тест', 'тест', 'тест', 456600, 2),
(9, 'Тестовое учреждение №9', 'тест', 'тест', 'тест', 'тест', 'тест', 456600, 2),
(10, 'Тестовое учреждение №10', 'тест', 'тест', 'тест', 'тест', 'тест', 456600, 2),
(13, 'Тестовое учреждение №13', 'тест', 'тест', 'тест', 'тест', 'тест', 456600, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `log_time` (`log_time`),
  ADD KEY `user_ip` (`user_ip`);

--
-- Индексы таблицы `log_levels`
--
ALTER TABLE `log_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`rule`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users_rules`
--
ALTER TABLE `users_rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_wallet`
--
ALTER TABLE `users_wallet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE;

--
-- Индексы таблицы `user_mentors`
--
ALTER TABLE `user_mentors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position` (`position`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user_schools`
--
ALTER TABLE `user_schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `log_levels`
--
ALTER TABLE `log_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_rules`
--
ALTER TABLE `users_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_wallet`
--
ALTER TABLE `users_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_mentors`
--
ALTER TABLE `user_mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user_schools`
--
ALTER TABLE `user_schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_rules`
--
ALTER TABLE `users_rules`
  ADD CONSTRAINT `users_rules_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `rules` (`rule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
