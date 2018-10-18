-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Machine: sql310.byetcluster.com
-- Genereertijd: 18 okt 2018 om 13:09
-- Serverversie: 5.6.41-84.1
-- PHP-versie: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `epiz_22653644_lgadmin`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `calendar_date`
--

CREATE TABLE IF NOT EXISTS `calendar_date` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `allday` int(2) NOT NULL,
  `url` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `bd_color` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `type` int(11) NOT NULL,
  `users` text NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `calendar_date`
--

INSERT INTO `calendar_date` (`item_id`, `title`, `start`, `end`, `allday`, `url`, `bg_color`, `bd_color`, `details`, `type`, `users`) VALUES
(3, 'Kerstgala Onderbouw', '2017-12-19 00:00:00', '2017-12-19 23:59:00', 1, 'http://google.nl', '#3c8dbc', '#3c8dbc', '', 0, ''),
(4, 'Kerstgala Bovenbouw', '2017-12-20 00:00:00', '2017-12-20 23:59:00', 1, 'http://google.nl', '#3c8dbc', '#3c8dbc', '', 0, ''),
(5, 'Passion GHL', '2018-03-22 13:15:00', '2018-03-22 16:00:00', 0, 'http://localhost/website-10', '#3c8dbc', '#3c8dbc', '', 0, ''),
(6, 'Soundcheck Passion', '2018-03-21 15:00:00', '2018-03-21 17:00:00', 0, 'http://google.nl', '#3c8dbc', '#3c8dbc', '', 0, ''),
(7, 'O &O Presentatie', '2018-05-30 09:00:00', '2018-05-30 10:00:00', 0, '', '#0073b7', '#0073b7', 'Dit is een presentatie voor de brugklassers die O & O volgen. Er is 1 microfoon nodig! Dit is een presentatie voor de brugklassers die O & O volgen. Er is 1 microfoon nodig!', 2, ''),
(8, 'Test', '2018-06-01 10:00:00', '2018-06-01 12:00:00', 1, '', '#0073b7', '#0073b7', '', 2, ''),
(9, 'Test', '2018-05-31 18:00:00', '2018-05-31 20:00:00', 0, '', '#0073b7', '#0073b7', 'Presentatie voor ouders van 1e klas Technasium 2018<div><br></div><div>Aanwezig:</div>', 2, ''),
(10, 'Ouderavond 4v/5v', '2018-09-10 19:30:00', '2018-09-10 22:00:00', 0, '', '#0073b7', '#0073b7', '', 2, ''),
(11, 'Opruimen Podium', '2018-09-10 00:00:00', '2018-09-10 23:59:00', 1, '', '#0073b7', '#0073b7', '', 5, ''),
(12, 'Herfstvakantie', '2018-02-22 00:00:00', '2018-02-27 23:59:00', 1, '', '#777', '#777', 'Vakantie', 5, ''),
(13, 'Vakantie', '2018-10-22 00:00:00', '2018-10-27 23:59:00', 1, '', '#777', '#777', 'Herfstvakantie', 5, ''),
(14, 'Openpodium', '2018-10-31 19:30:00', '2018-10-31 23:00:00', 0, '', '#0073b7', '#0073b7', 'Openpodium 2018', 3, ''),
(15, 'Soundcheck Openpodium', '2018-10-30 15:00:00', '2018-10-30 17:00:00', 0, '', '#f39c12', '#f39c12', 'Soundcheck Openpodium', 5, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  `cat_icon_class` text NOT NULL,
  `cat_timeline_class` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_icon_class`, `cat_timeline_class`) VALUES
(1, 'Feestje', 'ion ion-beer text-green', 'ion ion-beer bg-gray'),
(2, 'Account', 'fa fa-gears text-grey', 'fa fa-gears bg-gray'),
(3, 'Nieuwe Gebruiker', 'fa fa-child text-aqua', 'fa fa-child bg-gray'),
(4, 'Nieuw Feestje', 'fa fa-lightbulb-o text-yellow', 'fa fa-lightbulb-o bg-yellow'),
(5, 'Bericht Gewijzigd', 'ion ion-android-textsms text-aqua', 'ion ion-android-textsms bg-aqua'),
(6, 'Feest Info Gewijzigd', 'fa fa-pencil text-orange', 'fa fa-pencil bg-orange'),
(7, 'Organisatie Gewijzigd', 'fa fa-address-book text-orange', 'fa fa-address-book bg-orange'),
(8, 'Bericht Gewijzigd', 'fa fa-pencil-square-o', 'fa fa-pencil-square-o bg-aqua'),
(9, 'Afbeelding Gewijzigd', 'fa fa-picture-o', 'fa fa-picture-o bg-orange'),
(10, 'Contact gegevens gewijzigd', 'fa fa-address-book', 'fa fa-address-book bg-red'),
(11, 'Icoon gewijzigd', 'fa fa-font-awesome', 'fa fa-font-awesome bg-green'),
(12, 'Info Gewijzigd', 'fa fa-pencil text-orange', 'fa fa-pencil bg-orange'),
(13, 'Album Gewijzigd', 'fa fa-link text-aqua', 'fa fa-link bg-aqua');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_content` text NOT NULL,
  `chat_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Gegevens worden uitgevoerd voor tabel `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_content`, `chat_date`, `user_id`) VALUES
(1, 'Dit is een erg leuk bericht over niks', '2018-05-28 09:16:00', 7),
(2, 'Dit is een erg leuk bericht over niks', '2018-05-28 09:16:00', 10),
(3, 'Dit is een erg leuk bericht over niks Dit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niks', '2018-05-28 09:16:00', 10),
(4, 'Dit is een erg leuk bericht over niks Dit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niksDit is een erg leuk bericht over niks', '2018-05-28 09:16:00', 14),
(5, 'lol', '2018-05-29 14:49:21', 10),
(6, 'lol', '2018-05-29 14:49:27', 10),
(7, 'test', '2018-05-29 14:49:34', 10),
(8, 'test', '2018-05-29 14:49:39', 10),
(9, 'lol', '2018-05-29 14:49:43', 10),
(10, 'lol', '2018-05-29 14:50:38', 10),
(11, 'test', '2018-05-29 14:52:51', 10),
(12, 'lol', '2018-05-29 14:56:02', 10),
(13, 'ik ben ik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik ben', '2018-05-29 14:56:23', 10),
(14, 'ik', '2018-05-29 14:56:44', 10),
(15, 'lol', '2018-05-29 14:57:33', 10),
(16, 'la', '2018-05-29 14:57:39', 10),
(17, 'la', '2018-05-29 14:57:43', 10),
(18, 'tra', '2018-05-29 14:57:46', 10),
(19, 'tra', '2018-05-29 14:58:03', 10),
(20, 'ik ben ik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik ben', '2018-05-29 14:58:11', 10),
(21, 'ik', '2018-05-29 14:58:21', 10),
(22, 'ik ben ik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik benik ben', '2018-05-29 14:58:28', 10),
(23, 'la', '2018-05-29 14:59:00', 10),
(24, 'lala', '2018-05-29 16:13:36', 14),
(25, 'tra', '2018-05-29 16:13:50', 10),
(26, 'la', '2018-05-29 16:30:56', 14),
(27, 'tra', '2018-05-29 16:31:26', 10),
(28, 'la', '2018-05-29 16:32:11', 10),
(29, 'papa', '2018-05-29 16:32:22', 14),
(30, 'lala', '2018-05-29 16:33:02', 10),
(31, 'ihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdslihgsdjhdsl', '2018-05-29 16:41:23', 10),
(32, 'ikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikikik', '2018-05-29 16:41:38', 10),
(33, 'ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ik ', '2018-05-29 16:42:01', 10),
(34, 'lol', '2018-05-29 22:46:21', 10),
(35, 'lol', '2018-05-29 22:51:43', 10),
(36, 'lol', '2018-05-30 09:52:43', 10),
(37, 'alah', '2018-05-30 09:55:07', 15),
(38, 'Daan houd van vibrators', '2018-05-30 10:02:32', 10),
(39, 'Daan houd van vibrators', '2018-05-30 10:03:01', 15),
(40, 'thijs is  vibrator', '2018-05-30 10:03:47', 10),
(41, 'thijs is  vibrator', '2018-05-30 10:03:54', 10),
(42, 'Dino Daan', '2018-05-30 10:05:14', 10),
(43, 'lala', '2018-09-03 00:28:31', 10),
(44, 'test', '2018-09-03 00:28:37', 10),
(45, 'la', '2018-09-03 00:29:15', 14);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` date NOT NULL,
  `post_date` date NOT NULL,
  `event_cat` int(3) NOT NULL,
  `event_location` text NOT NULL,
  `event_color` varchar(7) NOT NULL,
  `event_progress` int(11) NOT NULL,
  `event_cover_image` text NOT NULL,
  `event_post` int(11) NOT NULL,
  `event_organization` varchar(255) NOT NULL,
  `event_organization_contact` varchar(255) NOT NULL,
  `event_organization_tel` varchar(20) NOT NULL,
  `event_organization_mail` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='All the events' AUTO_INCREMENT=15 ;

--
-- Gegevens worden uitgevoerd voor tabel `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_description`, `event_date`, `post_date`, `event_cat`, `event_location`, `event_color`, `event_progress`, `event_cover_image`, `event_post`, `event_organization`, `event_organization_contact`, `event_organization_tel`, `event_organization_mail`) VALUES
(9, 'Cultuurdag', '', '2017-10-23', '2017-10-14', 5, 'Tolstraat 11, Alphen a/d Rijn', '#6f02e5', 0, '../IMG/event/9/cp/15994464_1847268275560637_3397809916747854169_o.jpg', 0, 'Groene Hart Lyceum', 'R . Knoester', '-', 'rkr@youscope.nl'),
(10, 'Kerstgala Onderbouw', 'Kerstgala 2017 voor de onderbouw', '2017-12-19', '2017-10-14', 1, 'Groene Hart , Tolstraat 11, Alphen a/d Rijn', '#b58784', 0, '../IMG/event/10/cp/15676439_1838107303143401_5085968960539103141_o.jpg', 0, '', '', '', ''),
(11, 'Kerstgala Bovenbouw', 'Kerstgala 2017 voor de bovenbouw', '2017-12-20', '2017-10-14', 1, 'Groene Hart Lyceum, Tolstraat 11, Alphen a/d Rijn', '#053d77', 0, '../IMG/event/11/cp/16113103_1847269615560503_4408690290645309137_o.jpg', 0, '', '', '', ''),
(12, 'Eindfeest 2018', 'Eindfeest voor alle leerjaren', '2018-07-06', '2017-10-14', 1, 'Groene Hart Lyceum, Tolstraat 11, Alphen a/d Rijn', '#bd2d30', 0, '../IMG/event/12/cp/21457379_1960934460860684_3490926837682064998_o.jpg', 0, '', '', '', ''),
(13, 'The passion 2018', 'Uitvoering van de passion op school', '2018-03-22', '2018-03-07', 5, 'Groene Hart , Tolstraat 11', '#6220b0', 0, '../IMG/event/13/cp/download.jpg', 0, '', '', '', ''),
(14, 'Openpodium', 'Openpodium Groene Hart Lyceum', '2018-10-31', '2018-10-18', 3, 'Groene Hart Lyceum, Tolstraat 11', '#961ca1', 0, '../IMG/event/14/cp/2_45332269_xxl.jpg', 0, 'Groene Hart Lyceum', 'Ruber Knoester', '', 'rkr@youscope.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_categories`
--

CREATE TABLE IF NOT EXISTS `event_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_color` varchar(7) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `event_categories`
--

INSERT INTO `event_categories` (`cat_id`, `cat_name`, `cat_color`) VALUES
(1, 'School Feest', '#3C8DBC'),
(2, 'Presentatie', '#F56954'),
(3, 'Concert', '#00A65A'),
(4, 'Toneelstuk', '#F39C12'),
(5, 'Overig', '#D2D6DE'),
(6, 'Feestdag', '#39CCCC');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_timeline_items`
--

CREATE TABLE IF NOT EXISTS `event_timeline_items` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT,
  `item_title` text NOT NULL,
  `item_cat` int(3) NOT NULL,
  `item_date` date NOT NULL,
  `item_event` int(3) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Gegevens worden uitgevoerd voor tabel `event_timeline_items`
--

INSERT INTO `event_timeline_items` (`item_id`, `item_title`, `item_cat`, `item_date`, `item_event`) VALUES
(2, '<a href="profile.php?show_user=Nick Verschuur">Nick Verschuur</a> heeft het feestje aangemaakt', 4, '2017-01-04', 2),
(3, '<a href="profile.php?show_user=Nick Verschuur">Nick Verschuur</a> heeft het feestje aangemaakt', 4, '2017-01-11', 1),
(25, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft het feest bericht gewijzigd', 5, '2017-02-12', 1),
(26, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de organisatie gewijzigd', 6, '2017-02-12', 1),
(27, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de basis informatie gewijzigd', 6, '2017-02-12', 1),
(28, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de organisatie gewijzigd', 6, '2017-02-12', 2),
(29, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de organisatie gewijzigd', 6, '2017-02-12', 2),
(30, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de organisatie gewijzigd', 6, '2017-02-14', 2),
(31, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de organisatie gewijzigd', 6, '2017-02-14', 2),
(32, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft de organisatie gewijzigd', 6, '2017-02-14', 2),
(33, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-05', 3),
(34, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(35, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(36, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(37, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(38, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(39, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(40, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(41, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(42, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(43, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-03-09', 3),
(44, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(45, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(46, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(47, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(48, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(49, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-03-09', 3),
(50, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-03-09', 3),
(51, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-03-09', 3),
(52, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-03-09', 3),
(53, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-03-09', 3),
(54, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(55, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(56, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het feest bericht gewijzigd', 5, '2017-03-09', 3),
(57, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-06-05', 3),
(58, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-06-05', 7),
(59, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-06-09', 8),
(60, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-06-09', 8),
(61, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-08-04', 4),
(62, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-08-04', 4),
(63, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-10-14', 9),
(64, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-10-14', 9),
(65, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-10-14', 10),
(66, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-10-14', 10),
(67, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-10-14', 10),
(68, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-10-14', 11),
(69, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-10-14', 11),
(70, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-10-14', 11),
(71, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2017-10-14', 12),
(72, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-12-06', 10),
(73, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-12-06', 10),
(74, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-12-06', 12),
(75, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2017-12-06', 12),
(76, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2017-12-06', 12),
(77, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-03-01', 10),
(78, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-03-07', 13),
(79, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-03-07', 13),
(80, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-03-07', 13),
(81, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2018-03-07', 13),
(82, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-11', 14),
(83, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-25', 15),
(84, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-25', 16),
(85, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 9),
(86, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de organisatie gewijzigd', 6, '2018-04-30', 9),
(87, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-30', 9),
(88, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2018-04-30', 9),
(89, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-10-18', 14),
(90, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-10-18', 14),
(91, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-10-18', 14),
(92, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de organisatie gewijzigd', 6, '2018-10-18', 14),
(93, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-10-18', 14),
(94, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2018-10-18', 14),
(95, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-10-18', 14),
(96, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-10-18', 14),
(97, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de omslag foto gewijzigd', 8, '2018-10-18', 14);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `galery_timeline_items`
--

CREATE TABLE IF NOT EXISTS `galery_timeline_items` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT,
  `item_title` text NOT NULL,
  `item_cat` int(3) NOT NULL,
  `item_date` date NOT NULL,
  `item_galery` int(3) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Gegevens worden uitgevoerd voor tabel `galery_timeline_items`
--

INSERT INTO `galery_timeline_items` (`item_id`, `item_title`, `item_cat`, `item_date`, `item_galery`) VALUES
(1, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het album gewijzigd', 13, '2018-04-29', 7),
(9, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-29', 7),
(10, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-29', 7),
(11, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-29', 7),
(12, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-29', 7),
(13, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-29', 7),
(14, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het album gewijzigd', 13, '2018-04-30', 7),
(15, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het album gewijzigd', 13, '2018-04-30', 7),
(16, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het album gewijzigd', 13, '2018-04-30', 7),
(17, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het album gewijzigd', 13, '2018-04-30', 8),
(18, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(19, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-30', 8),
(20, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(21, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 13),
(22, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-30', 13),
(23, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-30', 8),
(24, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-30', 8),
(25, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-30', 8),
(26, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-30', 8),
(27, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-30', 13),
(28, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-30', 14),
(29, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 7),
(30, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 7),
(31, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 7),
(32, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(33, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 6),
(34, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 13),
(35, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 13),
(36, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 7),
(37, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(38, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 5),
(39, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 6),
(40, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 5),
(41, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(42, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(43, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-30', 7),
(44, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de extra informatie gewijzigd', 6, '2018-04-30', 8),
(45, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de basis informatie gewijzigd', 6, '2018-04-30', 8),
(46, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-30', 8),
(47, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het album gewijzigd', 13, '2018-04-30', 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `materiaal`
--

CREATE TABLE IF NOT EXISTS `materiaal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `staat` int(11) NOT NULL,
  `werkend` int(11) NOT NULL,
  `totaal` int(11) NOT NULL,
  `gebruikt` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `doos` varchar(255) NOT NULL,
  `ontvanger` varchar(255) NOT NULL,
  `houder` varchar(255) NOT NULL,
  `invoer` varchar(255) NOT NULL,
  `uitvoer` varchar(255) NOT NULL,
  `vermogen` varchar(255) NOT NULL,
  `aux` int(11) NOT NULL,
  `A` varchar(255) NOT NULL,
  `B` varchar(255) NOT NULL,
  `lengte` varchar(255) NOT NULL,
  `diameter` varchar(255) NOT NULL,
  `afmetingen` varchar(400) NOT NULL,
  `opmerkingen` text NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Gegevens worden uitgevoerd voor tabel `materiaal`
--

INSERT INTO `materiaal` (`id`, `category_id`, `naam`, `staat`, `werkend`, `totaal`, `gebruikt`, `type`, `doos`, `ontvanger`, `houder`, `invoer`, `uitvoer`, `vermogen`, `aux`, `A`, `B`, `lengte`, `diameter`, `afmetingen`, `opmerkingen`, `update_date`) VALUES
(1, 1, 'Shure PG58 Wired', 1, 1, 1, 1, 'bedraad', 'hoes', 'N.V.T', '', '', '', '', 0, '', '', '', '', '', '-', '2018-04-30'),
(2, 1, 'AKG C1000S', 2, 0, 1, 0, 'bedraad', 'hoes', 'N.V.T', '', '', '', '', 0, '', '', '', '', '', 'Geen rooster', '2018-04-30'),
(3, 1, 'Sennheiser E825 S', 1, 1, 1, 0, 'bedraad', 'los', 'N.V.T', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '2018-01-09'),
(4, 1, 'Shure PG58 Wireless', 1, 3, 3, 0, 'draadloos', 'doos', 'ja', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '2018-01-09'),
(5, 1, 'Sennheiser EW100G2', 1, 1, 1, 1, 'draadloos', 'doos', 'ja', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '2018-01-09'),
(6, 1, 'Samson CR77 UHF', 1, 2, 3, 0, 'draadloos', 'flightcase', 'ja', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Microfoontje is kapot bij 1', '2018-01-09'),
(7, 1, 'Sennheiser Freeport HS', 1, 1, 1, 0, 'draadloos', 'doos', 'ja', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(8, 1, 'Beyerdynamic MCE 530', 1, 4, 4, 0, 'Overhead', 'flightcase', 'N.V.T', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(9, 1, 'DAP CM-10', 1, 2, 2, 0, 'Drumkit', 'flightcase', 'N.V.T', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(10, 1, 'DAP DM-20', 1, 1, 1, 0, 'Drumkit, Kick', 'flightcase', 'N.V.T', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(11, 1, 'DAP DM-25', 1, 4, 4, 0, 'Drumkit', 'flightcase', 'N.V.T', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(12, 2, 'Led Par 64', 1, 6, 6, 1, 'Led Par', '', '', '-', '', '', '144W', 0, '', '', '', '', '', '-', '2018-01-30'),
(13, 2, 'Led Par 56', 2, 2, 4, 0, 'Led Par', '', '', '-', '', '', '15w', 0, '', '', '', '', '', 'De 2 werkende hebben uitvallende ledjes', '2018-01-10'),
(14, 2, 'Par 64', 1, 4, 4, 0, 'Par', '', '', '-', '', '', '1000w', 0, '', '', '', '', '', '-', '2018-01-10'),
(15, 2, 'Par 56', 1, 5, 7, 0, 'Par', '-', '-', '-', '-', '-', '300w', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(16, 2, 'PC ', 1, 15, 16, 0, 'Piano Conflex', '-', '-', '-', '-', '-', '650w', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(17, 2, 'CCP', 1, 1, 1, 0, 'Piano Conflex', '-', '-', '-', '-', '-', '650w', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(18, 2, 'Longspot', 2, 3, 4, 0, 'Longspot', '-', '-', '-', '-', '-', '650w', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(19, 2, 'Blinder', 2, 2, 3, 0, 'Blinder', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Lamp vervangen. Niet te lang aan laten ivm brandveiligheid!', '0000-00-00'),
(20, 3, 'Showtec d-pack 6 MKII', 1, 4, 4, 0, 'Dimmer', '', '', '', 'DMX', '6 per, DMX', '6x 10A', 0, '', '', '', '', '', '-', '2018-01-30'),
(21, 3, 'Showtec multidim MKII', 1, 1, 2, 0, 'Dimmer', '-', '-', '-', 'DMX', '4 per, DMX', 'max 16A', 0, '-', '-', '-', '-', '-', '1 kapotte dimmer. Reparatie/nieuwe?', '0000-00-00'),
(22, 3, 'Dynacord SL1200', 1, 1, 1, 0, 'Versterker', '-', '-', '-', '2x sXLR2', '2x SO2', '1200W', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(23, 3, 'Dynacord PM2600', 1, 1, 1, 0, 'Power Versterker', '-', '-', '-', '2x sXLR2', '4x SO2', '2600W', 0, '-', '-', '-', '-', '-', 'Kapot low-filter', '0000-00-00'),
(24, 4, 'Allen Heath zed 24', 1, 1, 1, 0, 'Mengtafel', '-', '-', '-', '24x XLR/TRS', '2x XLR', '-', 4, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(25, 4, 'Showtec lite-8 Pro', 1, 1, 1, 0, 'Lichttafel', '-', '-', '-', '1x midi\r\n1x Audio', '1x DMX3\r\n1x DMX5', '-', 1, '-', '-', '-', '-', '-', '(8 faders)\r\nKwijt, navragen mevr. Koop', '0000-00-00'),
(26, 4, 'Showtec SC-2412', 1, 1, 1, 0, 'Lichttafel', '-', '-', '-', '3x midi\r\n1x audio', '1x DMX3\r\n1x DMX5', '-', 1, '-', '-', '-', '-', '-', '(24 faders)\r\n', '0000-00-00'),
(27, 4, 'Strand 200', 2, 1, 1, 0, 'Lichttafel', '-', '-', '-', '2x midi\r\n1x XLR', '1x DMX5', '-', 1, '-', '-', '-', '-', '-', '(24 faders)\r\nStroef, Geen DMX3', '0000-00-00'),
(28, 4, 'Avolites Dongle Titan One ', 1, 1, 1, 0, 'Lichttafel', '-', '-', '-', 'USB', '1x DMX5', '-', 1, '-', '-', '-', '-', '-', 'Incl. Verloopkabel DMX5 --> DMX3', '0000-00-00'),
(29, 5, 'Stanton C.501', 1, 1, 1, 0, 'CD Speler', '', '', '', '2x CD', '2x RCA+2x Coax', '', 0, '', '', '', '', '', '-', '2018-02-07'),
(30, 5, 'American Audio Flex 100 MP3', 1, 4, 4, 0, 'DJ Tafel', '-', '-', '-', 'CD', 'RCA+Coax', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(31, 5, 'Numark CDN22', 1, 1, 1, 0, 'CD Speler', '-', '-', '-', '2x CD', '2x RCA+2x Coax', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(32, 5, 'Technics SL-PG490', 2, 1, 1, 0, 'CD Speler', '-', '-', '-', 'CD', 'RCA+Optical', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(33, 6, 'Dynacord C10', 1, 2, 2, 1, 'SUB', '', '', '', 'SO2', 'SO2', '600w', 0, '', '', '', '', '', '(passief)', '2018-04-30'),
(34, 6, 'Dynacord C8', 1, 2, 2, 0, 'SUB', '-', '-', '-', 'SO2', 'SO2', '500w', 0, '-', '-', '-', '-', '-', '(passief)', '0000-00-00'),
(35, 6, 'Dynacord F1135HI', 1, 2, 2, 0, 'TOP', '-', '-', '-', 'SO2', 'SO2', '400w', 0, '-', '-', '-', '-', '-', '(passief)', '0000-00-00'),
(36, 6, 'Dynacord C150', 1, 2, 2, 0, 'AF', '-', '-', '-', 'SO2', 'SO2', '300w', 0, '-', '-', '-', '-', '-', '(passief)', '0000-00-00'),
(37, 6, 'Dynacord D15-3', 1, 2, 2, 0, 'AF', '-', '-', '-', 'SO2', '-', '300w', 0, '-', '-', '-', '-', '-', '(passief)', '0000-00-00'),
(38, 6, 'Mackie Thump12', 1, 2, 2, 0, 'MONITOR', '-', '-', '-', 'XLR/TRS', 'XLR/TRS', '200w', 0, '-', '-', '-', '-', '-', '(actief)', '0000-00-00'),
(39, 6, 'Skytec S100', 2, 2, 2, 0, 'MONITOR', '-', '-', '-', 'TRS', 'TRS', '150w', 0, '-', '-', '-', '-', '-', '(passief)', '0000-00-00'),
(40, 6, 'StageBox', 2, 2, 2, 0, 'MONITOR', '-', '-', '-', 'TRS', 'TRS', '75w', 0, '-', '-', '-', '-', '-', '(passief)', '0000-00-00'),
(41, 7, 'Speakon4', 1, 15, 15, 1, 'SO', '', '', '', '', '', '', 0, 'SO2', 'SO4', '5m', '', '', '-', '2018-04-30'),
(42, 7, '230NET', 1, 14, 14, 0, 'Voeding', '-', '-', '-', '-', '-', '-', 0, 'Schuko', 'NET', '1,5m', '-', '-', '-', '0000-00-00'),
(43, 7, 'UTP8', 1, 1, 1, 0, 'data', '-', '-', '-', '-', '-', '-', 0, 'RC11', 'RC11', '7,5m', '-', '-', '-', '0000-00-00'),
(44, 7, 'Jack', 2, 10, 13, 0, 'TRS', '-', '-', '-', '-', '-', '-', 0, 'TRS', 'TRS', '1/6m', '-', '-', 'Sommige kapot', '0000-00-00'),
(45, 7, 'XLR', 1, 4, 4, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'XLR', '1,5m', '-', '-', '-', '0000-00-00'),
(46, 7, '', 1, 4, 4, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'XLR', '3m', '-', '-', '-', '0000-00-00'),
(47, 7, '', 1, 9, 9, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'XLR', '5m', '-', '-', '-', '0000-00-00'),
(48, 7, '', 1, 6, 6, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'XLR', '10m', '-', '-', '-', '0000-00-00'),
(49, 7, '', 1, 4, 4, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'XLR', '20m', '-', '-', '-', '0000-00-00'),
(50, 7, 'DMX', 1, 2, 2, 0, 'DMX', '-', '-', '-', '-', '-', '-', 0, 'DMX(3)', 'DMX(3)', '2m', '-', '-', '-', '0000-00-00'),
(51, 7, '', 1, 4, 4, 0, 'DMX', '-', '-', '-', '-', '-', '-', 0, 'DMX(3)', 'DMX(3)', '5m', '-', '-', '-', '0000-00-00'),
(52, 7, '', 1, 3, 3, 0, 'DMX', '-', '-', '-', '-', '-', '-', 0, 'DMX(3)', 'DMX(3)', '10m', '-', '-', '-', '0000-00-00'),
(53, 7, '', 1, 2, 2, 0, 'DMX', '-', '-', '-', '-', '-', '-', 0, 'DMX(3)', 'DMX(3)', '20m', '-', '-', '-', '0000-00-00'),
(54, 7, 'XLR -> TRS3.6', 3, 0, 1, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'TRS3.6', '3m', '-', '-', 'Opnieuw solderen', '0000-00-00'),
(55, 7, 'TRS6.5 -> TRS3.6', 1, 1, 1, 0, 'TRS', '-', '-', '-', '-', '-', '-', 0, 'TRS6.5', 'TRS3.6', '1.5m', '-', '-', '-', '0000-00-00'),
(56, 7, 'DMX(5) -> DMX(3)', 1, 2, 2, 0, 'DMX', '-', '-', '-', '-', '-', '-', 0, 'DMX(5)', 'DMX(3)', '1.5m', '-', '-', '-', '0000-00-00'),
(57, 7, 'TRS6.5 -> XLR', 1, 2, 2, 0, 'Verloop', '-', '-', '-', '-', '-', '-', 0, 'TRS6.5', 'XLR', '3m', '-', '-', '-', '0000-00-00'),
(58, 7, '230 verleng', 2, 3, 3, 0, '230V', '-', '-', '-', '-', '-', '-', 0, 'Schuko', 'Schuko', '3/8m', '-', '-', '1 bijna kapot', '0000-00-00'),
(59, 7, '230V Blok', 1, 6, 7, 0, '230V', '-', '-', '-', '-', '-', '-', 0, 'Schuko', 'Schuko', 'Var', '-', '-', '1 bijna kapot', '0000-00-00'),
(60, 7, '230V + Overspanning', 1, 1, 1, 0, '230V', '-', '-', '-', '-', '-', '-', 0, 'Schuko', 'Schuko', 'Inbouw', '-', '-', '-', '0000-00-00'),
(61, 7, 'Powercon', 1, 1, 1, 0, '230V', '-', '-', '-', '-', '-', '-', 0, 'Schuko', 'SO2', 'Inbouw', '-', '-', '-', '0000-00-00'),
(62, 7, 'MultiKabel', 3, 1, 1, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, '8 XLR', '8 XLR', '40m', '-', '-', 'status: Gesloopt', '0000-00-00'),
(63, 7, 'Stageblok', 3, 1, 1, 0, 'XLR', '-', '-', '-', '-', '-', '-', 0, '16 XLR in\r\n4 XLR OUT', '16 XLR in\r\n4 XLR OUT', '30m', '-', '-', 'Schoonmaken', '0000-00-00'),
(64, 8, 'G-Haak', 1, 15, 15, 1, 'G', '', '', '', '', '', '', 0, '', '', '', '0.5', '', 'incl. bouten en moeren', '2018-04-09'),
(65, 8, 'C-Haak', 1, 1, 1, 1, 'C', '', '', '', '', '', '', 0, '', '', '', '0.5', '', 'incl. bouten en moeren', '2018-04-09'),
(66, 8, 'Safety', 1, 1, 1, 0, 'Safety', '', '', '', '', '', '', 0, '', '', '', '-', '', 'bij 1 slechte sluiting', '2018-04-30'),
(67, 8, 'Barndoors', 1, 4, 4, 0, 'Barndoor', '', '', '', '', '', '', 0, '', '', '', '-', '', '-', '2018-04-30'),
(68, 8, 'Filterframe', 1, 4, 4, 0, 'Par 64', '', '', '', '', '', '', 0, '', '', '', '-', '', '-', '2018-04-30'),
(69, 8, '', 1, 7, 7, 0, 'Par 56', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '2018-04-09'),
(70, 8, 'Filterrol', 2, 3, 3, 0, 'Filter', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Netjes knippen!', '2018-04-09'),
(71, 9, 'DI Box', 1, 5, 5, 1, 'DI', '-', '-', '-', '-', '-', '-', 0, '2x TRS', 'XLR', '-', '-', '-', '-', '2018-04-30'),
(72, 9, 'XLR-Jack', 1, 8, 10, 0, 'Verloop', '-', '-', '-', '-', '-', '-', 0, 'XLR', 'TRS', '-', '-', '-', 'Sommige kwijt', '0000-00-00'),
(73, 9, 'Jack-Jack', 1, 4, 4, 0, 'Verloop', '-', '-', '-', '-', '-', '-', 0, 'TRS6.5', 'TRS3.6', '-', '-', '-', '-', '0000-00-00'),
(74, 9, 'SO2/TRS', 1, 1, 1, 0, 'Verloop', '-', '-', '-', '-', '-', '-', 0, 'SO2', 'TRS6.5', '-', '-', '-', '-', '0000-00-00'),
(75, 9, 'RCA-Jack', 1, 3, 3, 0, 'Verloop', '-', '-', '-', '-', '-', '-', 0, 'RCA', 'TRS3.6', '-', '-', '-', '-', '0000-00-00'),
(76, 9, 'Microfoon Klemmen', 1, 4, 4, 0, 'MK', '-', '-', '-', '-', '-', '-', 0, 'ShureG', '-', '-', '-', '-', 'ShureKop', '0000-00-00'),
(77, 9, '', 1, 4, 4, 0, 'MK', '-', '-', '-', '-', '-', '-', 0, 'PEN', '-', '-', '-', '-', 'PEN Microfoon', '0000-00-00'),
(78, 9, '', 1, 2, 2, 0, 'SK', '-', '-', '-', '-', '-', '-', 0, 'SK', '-', '-', '-', '-', 'SKY Microfoon', '0000-00-00'),
(79, 9, '', 1, 2, 2, 0, 'FF', '-', '-', '-', '-', '-', '-', 0, 'FF', '-', '-', '-', '-', 'FullForceKop', '0000-00-00'),
(80, 10, '9V Batterij', 2, 2, 10, 0, '9V', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Nieuwe halen!', '0000-00-00'),
(81, 10, 'AA Batterij', 1, 5, 5, 0, 'AA', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(82, 10, 'Lampen', 1, 5, 5, 0, 'GY9.5', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', '-', '0000-00-00'),
(83, 10, '', 1, 1, 1, 0, 'Par56', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Lamp Par56', '0000-00-00'),
(84, 10, '', 3, 0, 1, 0, 'Par64', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Lamp Par64', '0000-00-00'),
(85, 10, 'Janwillempjes', 1, 30, 30, 0, 'Binder', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '-', 'Bij bestellen!', '0000-00-00'),
(86, 10, 'Ductape', 4, 1, 1, 0, 'Tape', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '50m', 'Bij bestellen! Bij Bodijn 1 rol', '2018-04-02'),
(87, 10, 'Schildertape', 4, 1, 1, 0, 'Tape', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '-', '15m', 'Bij bestellen!', '2018-04-02');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `materiaal_categories`
--

CREATE TABLE IF NOT EXISTS `materiaal_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `materiaal_categories`
--

INSERT INTO `materiaal_categories` (`id`, `cat_id`, `cat_name`) VALUES
(1, 1, 'Microfoons'),
(2, 2, 'Lampen'),
(3, 3, 'Dimmers + Versterkers'),
(4, 4, 'Meng + Lichttafels'),
(5, 5, 'CD - spelers'),
(6, 6, 'Speakers'),
(7, 7, 'Kabels'),
(8, 8, 'Licht toebehoren'),
(9, 9, 'Geluid toebehoren'),
(10, 10, 'Consumables');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `noti_id` int(11) NOT NULL AUTO_INCREMENT,
  `noti_user` int(3) NOT NULL,
  `noti_cat` int(11) NOT NULL,
  `noti_title` varchar(255) NOT NULL,
  `noti_link` varchar(255) NOT NULL,
  `noti_date` date NOT NULL,
  PRIMARY KEY (`noti_id`),
  UNIQUE KEY `noti_id` (`noti_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Gegevens worden uitgevoerd voor tabel `notifications`
--

INSERT INTO `notifications` (`noti_id`, `noti_user`, `noti_cat`, `noti_title`, `noti_link`, `noti_date`) VALUES
(27, 5, 2, 'Omslag foto gewijzigd', 'profile.php', '0000-00-00'),
(36, 9, 2, 'Omslag foto gewijzigd', 'profile.php', '2017-12-06'),
(42, 12, 8, 'Omslag foto gewijzigd', 'profile.php', '2017-12-10');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `page_timeline_items`
--

CREATE TABLE IF NOT EXISTS `page_timeline_items` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT,
  `item_title` text NOT NULL,
  `item_cat` int(3) NOT NULL,
  `item_date` date NOT NULL,
  `item_page` int(3) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Gegevens worden uitgevoerd voor tabel `page_timeline_items`
--

INSERT INTO `page_timeline_items` (`item_id`, `item_title`, `item_cat`, `item_date`, `item_page`) VALUES
(77, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 1),
(78, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 1),
(79, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 2),
(80, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 2),
(81, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 1),
(82, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 0),
(83, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 0),
(84, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 1),
(85, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(86, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(87, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(88, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(89, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(90, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(91, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 2),
(92, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 1),
(93, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2017-12-09', 1),
(94, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeeldings tekst gewijzigd', 8, '2017-12-09', 1),
(95, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeeldings tekst gewijzigd', 8, '2017-12-09', 1),
(96, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeeldings tekst gewijzigd', 8, '2017-12-09', 1),
(97, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeeldings tekst gewijzigd', 8, '2017-12-09', 1),
(98, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2017-12-09', 1),
(109, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de contact gegevens gewijzigd', 10, '2017-12-10', 0),
(112, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het icoon gewijzigd', 11, '2017-12-10', 1),
(113, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het icoon gewijzigd', 11, '2017-12-10', 1),
(114, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-02-23', 3),
(115, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-02-23', 2),
(116, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 3),
(117, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 3),
(118, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 3),
(119, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 3),
(120, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 1),
(121, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 1),
(122, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft een afbeelding gewijzigd', 9, '2018-04-27', 2),
(123, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 1),
(124, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-27', 1),
(125, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de contact gegevens gewijzigd', 10, '2018-04-29', 0),
(126, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft de contact gegevens gewijzigd', 10, '2018-04-29', 0),
(127, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-29', 2),
(128, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-04-29', 2),
(129, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-10-18', 1),
(130, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-10-18', 1),
(131, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft het bericht gewijzigd', 8, '2018-10-18', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `regkeys`
--

CREATE TABLE IF NOT EXISTS `regkeys` (
  `regKey_id` int(11) NOT NULL AUTO_INCREMENT,
  `regKey_regKey` varchar(50) NOT NULL,
  PRIMARY KEY (`regKey_id`),
  UNIQUE KEY `regKey_regKey` (`regKey_regKey`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `regkeys`
--

INSERT INTO `regkeys` (`regKey_id`, `regKey_regKey`) VALUES
(15, 'TDGHL_1BYKnlTMmjA'),
(11, 'TDGHL_2iHkaqZbtvo'),
(17, 'TDGHL_CMWpP73kUBQ'),
(20, 'TDGHL_cTHisvqfCwU'),
(14, 'TDGHL_EHSJQ5DxImz'),
(18, 'TDGHL_hklw64WO8Au'),
(16, 'TDGHL_kVOrJlJj1M9'),
(12, 'TDGHL_qIQoc6iX3ld'),
(19, 'TDGHL_VcQzzGkgZoZ'),
(13, 'TDGHL_y7Eq9XLicGS'),
(10, 'TD_8qo5QrIVyp0'),
(9, 'TD_MRgPOOJAmsL'),
(7, 'TD_oSEHt24AkrF');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `timeline_items`
--

CREATE TABLE IF NOT EXISTS `timeline_items` (
  `item_id` int(3) NOT NULL AUTO_INCREMENT,
  `item_title` text NOT NULL,
  `item_cat` int(3) NOT NULL,
  `item_date` date NOT NULL,
  `item_user` int(3) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='All items used on timelines' AUTO_INCREMENT=61 ;

--
-- Gegevens worden uitgevoerd voor tabel `timeline_items`
--

INSERT INTO `timeline_items` (`item_id`, `item_title`, `item_cat`, `item_date`, `item_user`) VALUES
(1, '<a href="profile.php?show_user=Nick%20Verschuur">Nick Verschuur</a> is lid geworden', 3, '2016-12-30', 5),
(4, '<a href=''profile.php?show_user=Admin''>Admin</a> heeft zijn profiel foto gewijzigd', 2, '2016-12-31', 1),
(8, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn profiel foto gewijzigd', 2, '2016-12-31', 5),
(10, '<a href=''profile.php?show_user=test''>test</a> is lid geworden', 3, '2016-12-31', 9),
(11, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn profiel foto gewijzigd', 2, '2016-12-31', 5),
(12, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn profiel foto gewijzigd', 2, '2016-12-31', 5),
(13, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn omslag foto gewijzigd', 2, '2017-01-01', 5),
(14, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn omslag foto gewijzigd', 2, '2017-01-01', 5),
(15, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn omslag foto gewijzigd', 2, '2017-01-01', 5),
(16, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn omslag foto gewijzigd', 2, '2017-01-01', 5),
(17, '<a href="profile.php?show_user=Daan%20van%20Beusekom">Daan van Beusekom</a> is lid geworden', 3, '2017-10-14', 6),
(18, '<a href=''profile.php?show_user=Daan%20van%20Beusekom''>Daan van Beusekom</a> heeft zijn profiel foto gewijzigd', 2, '2016-12-31', 6),
(19, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn omslag foto gewijzigd', 2, '2017-01-01', 6),
(20, '<a href=''profile.php?show_user=Nick Verschuur''>Nick Verschuur</a> heeft zijn profiel foto gewijzigd', 2, '2017-02-10', 5),
(21, '<a href=''profile.php?show_user=Admin''>Admin</a> heeft zijn profiel foto gewijzigd', 2, '2017-03-08', 1),
(22, '<a href=''profile.php?show_user=Admin''>Admin</a> heeft zijn profiel foto gewijzigd', 2, '2017-03-08', 1),
(23, '<a href=''profile.php?show_user=Admin''>Admin</a> heeft zijn profiel foto gewijzigd', 2, '2017-03-08', 1),
(24, '<a href=''profile.php?show_user=Admin''>Admin</a> heeft zijn profiel foto gewijzigd', 2, '2017-03-08', 1),
(25, '<a href=''profile.php?show_user=Test''>Test</a> is lid geworden', 3, '2017-10-14', 8),
(26, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn omslag foto gewijzigd', 2, '2017-10-14', 6),
(27, '<a href=''profile.php?show_user=Admin_TD''>Admin_TD</a> is lid geworden', 3, '2017-12-06', 9),
(28, '<a href=''profile.php?show_user=Admin_TD''>Admin_TD</a> heeft zijn omslag foto gewijzigd', 2, '2017-12-06', 9),
(29, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> is lid geworden', 3, '2017-12-07', 10),
(30, '<a href=''profile.php?show_user=Test''>Test</a> is lid geworden', 3, '2017-12-07', 13),
(31, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn profiel foto gewijzigd', 2, '2017-12-08', 10),
(32, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn omslag foto gewijzigd', 2, '2017-12-08', 10),
(33, '<a href=''profile.php?show_user=Test_user''>Test_user</a> is lid geworden', 3, '2017-12-08', 14),
(34, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn omslag foto gewijzigd', 2, '2017-12-09', 10),
(35, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn profiel foto gewijzigd', 2, '2017-12-09', 10),
(36, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn profiel foto gewijzigd', 2, '2017-12-09', 10),
(37, '<a href=''profile.php?show_user=ADMIN_TD''>ADMIN_TD</a> heeft zijn omslag foto gewijzigd', 2, '2017-12-10', 12),
(38, '<a href=''profile.php?show_user=Testerjte''>Testerjte</a> is lid geworden', 3, '2018-04-27', 14),
(39, '<a href=''profile.php?show_user=lul''>lul</a> is lid geworden', 3, '2018-04-27', 15),
(40, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn omslag foto gewijzigd', 2, '2018-04-30', 10),
(41, '<a href=''profile.php?show_user=Daan van Beusekom''>Daan van Beusekom</a> heeft zijn omslag foto gewijzigd', 2, '2018-04-30', 10),
(42, '<a href=''profile.php?show_user=Testerjte''>Testerjte</a> heeft zijn omslag foto gewijzigd', 2, '2018-04-30', 14),
(43, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> is lid geworden', 3, '2018-05-30', 15),
(44, '<a href=''profile.php?show_user=''></a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(45, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(46, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(47, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(48, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(49, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(50, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(51, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(52, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(53, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(54, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(55, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(56, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(57, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(58, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(59, '<a href=''profile.php?show_user=Tym van Kuijk''>Tym van Kuijk</a> heeft zijn account gewijzigd', 2, '2018-05-30', 15),
(60, '<a href=''profile.php?show_user=Delano Reusken''>Delano Reusken</a> is lid geworden', 3, '2018-10-18', 16);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` tinytext NOT NULL,
  `user_birthday` date NOT NULL,
  `user_description` text NOT NULL,
  `user_online` tinyint(1) NOT NULL,
  `user_image` text NOT NULL,
  `user_since` date NOT NULL,
  `user_cover_image` text NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_place` varchar(255) NOT NULL,
  `user_niveau` varchar(255) NOT NULL,
  `user_notice` text NOT NULL,
  `user_recovery` varchar(255) NOT NULL,
  PRIMARY KEY (`user_name`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='The properties of an user' AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_birthday`, `user_description`, `user_online`, `user_image`, `user_since`, `user_cover_image`, `user_level`, `user_place`, `user_niveau`, `user_notice`, `user_recovery`) VALUES
(7, 'Admin', 'admin@admin.nl', '21232f297a57a5a743894a0e4a801fc3', '2017-10-09', '-', 1, 'IMG\\profile\\PP\\avatar5.png', '2017-10-09', '', 0, 'Alphen a/d Rijn', 'Havo', '', 'TDGHL_M4RhOcwv4Fz'),
(10, 'Daan van Beusekom', 'daanvanbeusekom@outlook.com', '195749967027ab3f6f8ba9a3b64aa82a5a1efc4f', '2001-03-22', 'Lichttechnicus - Webdeveloper', 1, 'IMG/profile/PP/user10.jpg', '2017-12-07', 'IMG/profile/CP/15994464_1847268275560637_3397809916747854169_o.jpg', 1, 'Alphen a/d Rijn', 'Havo', '', 'TDGHL_lxjgH314iAL'),
(16, 'Delano Reusken', 'dd.reusken@gmail.com', '7990bb425f00f1b3feb9785ce507a8d4cf260a88', '0000-00-00', 'Hoofd Geluid', 1, 'dist/img/avatar5.png', '2018-10-18', '', 0, 'Boskoop', '4 Havo', '<p>Leiding Geluid - 2018/2019</p>', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
