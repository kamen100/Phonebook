-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jquery_crud`
--
CREATE DATABASE IF NOT EXISTS `jquery_crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jquery_crud`;

-- --------------------------------------------------------

--
-- Структура на таблица `tbl_phonebook`
--

CREATE TABLE IF NOT EXISTS `tbl_phonebook` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(25) NOT NULL,
  `emp_dept` varchar(50) NOT NULL,
  `emp_phonenumber` varchar(10) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `tbl_phonebook`
--

INSERT INTO `tbl_phonebook` (`emp_id`, `emp_name`, `emp_dept`, `emp_phonenumber`) VALUES
(1, 'Камен Петков', 'ИТ', '0999888777'),
(2, 'Зорница Градинарова', 'Дизайнер', '0989666677'),
(5, 'Диана Петкова', 'Маркетинг', '777777777'),
(6, 'Зорница Монева', 'Дизайнер', '8889898'),
(7, 'Галин Иванов', 'Транспорт', '6667876768'),
(8, 'Петър Менев', 'ИТ', '8787876767'),
(9, 'Веско климатик', 'Климаконтрол', '555555555'),
(10, 'Веско Василев', 'Енергетика', '667776667'),
(11, 'Ивелин Иванов', 'Маркетинг', '7788777'),
(12, 'Диана Петкова', 'Маркетинг', '989898988'),
(13, 'Камен Петров', 'ИТ', '666666666'),
(14, 'Пламен Йорданов', 'Енергетика', '7676555665');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
