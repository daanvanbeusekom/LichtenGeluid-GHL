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
-- Databank: `epiz_22653644_lgweb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `location`, `email`) VALUES
(1, 'Groene Hart Lyceum, Tolstraat 11, Alphen a/d Rijn', '35807@youscope.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(255) NOT NULL,
  `event` int(3) NOT NULL,
  `year` year(4) NOT NULL,
  `url` varchar(255) NOT NULL,
  `headline_image_1` varchar(255) NOT NULL,
  `headline_image_2` varchar(255) NOT NULL,
  `headline_image_3` varchar(255) NOT NULL,
  `headline_image_4` varchar(255) NOT NULL,
  `image_color` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `galery`
--

INSERT INTO `galery` (`id`, `album`, `event`, `year`, `url`, `headline_image_1`, `headline_image_2`, `headline_image_3`, `headline_image_4`, `image_color`, `image_text`) VALUES
(1, 'Kerstgala 2016', 0, 2016, '', 'IMG/background4.jpg', 'IMG/background5.jpg', 'IMG/background6.jpg', 'IMG/background7.jpg', '', ''),
(2, 'Kerstgala 2016', 0, 2016, '', 'IMG/background4.jpg', 'IMG/background5.jpg', 'IMG/background6.jpg', 'IMG/background7.jpg', '', ''),
(3, 'Kerstgala 2016', 0, 2016, '', 'IMG/background4.jpg', 'IMG/background5.jpg', 'IMG/background6.jpg', 'IMG/background7.jpg', '', ''),
(4, 'Kerstgala 2016', 0, 2016, '', 'IMG/background4.jpg', 'IMG/background5.jpg', 'IMG/background6.jpg', 'IMG/background7.jpg', '', ''),
(5, 'Nieuwjaarsgala 2017', 0, 2017, '', 'IMG/background10.jpg', 'IMG/background5.jpg', 'IMG/background6.jpg', 'IMG/background7.jpg', '', 'De foto''s van het brugklasfeest. Een fantastische avond met dank aan <a href=''https://mheventzz.nl''>MHEventzz</a>'),
(6, 'Brugklasfeest 2017', 0, 2017, '', 'IMG/background3.jpg', 'IMG/background5.jpg', 'IMG/background6.jpg', 'IMG/background7.jpg', '', 'De foto''s van het brugklasfeest. Een fantastiche avond met dank aan <a href=''https://mheventzz.nl''>MHEventzz</a>'),
(8, 'Eindfeest 2017', 12, 2017, 'https://www.facebook.com/pg/MHEventzz/photos/?tab=album&album_id=1920136181607179', 'IMG/GAlERIJ/ki0FwhmLkjjDSC_1.jpgDSC_1.jpg', 'IMG/GAlERIJ/eXNC2LxIgdd21427155_1960934417527355_1012840544409187213_o.jpg21427155_1960934417527355_1012840544409187213_o.jpg', 'IMG/GAlERIJ/aI8xa56bu0l19143841_1920137408273723_7875369862262660264_o.jpg19143841_1920137408273723_7875369862262660264_o.jpg', 'IMG/GAlERIJ/QSPhEvnVb8115994532_1847645692189562_4854142555496449498_o.jpg15994532_1847645692189562_4854142555496449498_o.jpg', '#b672f7', 'Een fantastische avond met een geweldige sfeer! Met dank aan <a href=''https://mheventzz.nl''>MHEventzz</a>'),
(13, 'Kerstgala 2017', 9, 2017, '', 'IMG/GAlERIJ/Ub2SuCfYTfn19143841_1920137408273723_7875369862262660264_o.jpg19143841_1920137408273723_7875369862262660264_o.jpg', '', '', '', '#7021cf', 'Een fantastische avond met een geweldige sfeer! Met dank aan <a href=''https://mheventzz.nl''>MHEventzz</a>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `icon_txt`
--

CREATE TABLE IF NOT EXISTS `icon_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `icon_txt`
--

INSERT INTO `icon_txt` (`id`, `title`, `text`, `icon`) VALUES
(1, 'Materiaal', 'Het meeste van het materiaal wat er gebruikt wordt is van het Groene Hart Lyceum zelf, denk hier bij aan theather lampen, speakers, en een geluid/licht tafel. Als er iets groots wordt georganiseerd worden er meestal spullen gehuurd.', 'settings_input_component'),
(2, 'Leerlingen', 'De Licht en Geluid groep bestaat uit allemaal leerlingen van het Groene Hart Lyceum. Zij doen dit omdat dit hun passie is. Het is een hechte groep. Ze zijn vaak na school bezig en af en toe onder de lestijd, maar het meeste gebeurt in de vrije tijd.', 'group'),
(3, 'Klein & groot', 'Het meeste waarbij de licht en geluid groep zijn presentaties/cultuurdagen enz. Maar de feesten op school zijn natuurlijk wel het leukst om te doen.', 'info_outline');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image` varchar(300) NOT NULL,
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(1) NOT NULL,
  `image_text` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `images`
--

INSERT INTO `images` (`image`, `image_id`, `category_id`, `image_text`) VALUES
('IMG/background1.jpg', 1, 1, ''),
('IMG/background2.jpg', 2, 1, 'Nieuwjaars Gala 2016'),
('IMG/BG/s8JmXvM036Bbackground3.jpgbackground3.jpg', 3, 1, 'Professioneel bij grote en kleine feesten!'),
('IMG/BG/k8Isjk8J3By21457379_1960934460860684_3490926837682064998_o.jpg21457379_1960934460860684_3490926837682064998_o.jpg', 4, 2, ''),
('IMG/background4.jpg', 5, 2, ''),
('IMG/background9.jpg', 6, 3, ''),
('IMG/background6.jpg', 7, 3, ''),
('IMG/background10.jpg', 8, 3, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages_txt`
--

CREATE TABLE IF NOT EXISTS `pages_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `pages_txt`
--

INSERT INTO `pages_txt` (`id`, `page`, `title`, `text`) VALUES
(1, 'home', 'Contact ons', 'Voor verder vragen over het Licht &amp; Geluid team, de feesten, presentaties en andere bezigheden. Zouden wij graag willen dat u een mailtje stuurt naar <a target="_blank" rel="nofollow">35807@youscope.nl</a>. <br> Wil je zelf de het Licht &amp; Geluid. Ga dan naar de contact pagina om je aan te melden. Je mag natuurlijk ook altijd een mailtje sturen naar <a target="_blank" rel="nofollow">35807@youscope.nl&nbsp;</a>'),
(2, 'about', 'Wie zijn wij?', 'Wie zijn wij eigenlijk? Wij zijn een groep jongeren van het Groene Hart Lyceum die een passie hebben voor licht & geluid.\r\n              <br><br>\r\n               We zijn allemaal begonnen bij het licht en geluid als eerste en tweede klassers. De meeste van ons hadden al een beetje ervaring met licht en geluid. De een deed het op zijn bassischool, de ander heeft een DJ bedrijfje en er zijn zelf leden die een eigen bedrijf zijn begonnen voor evenementen e.d. \r\n               <br><br>  \r\n               We zijn allemaal ''gewone'' leerlingen die net als de rest van de school gewoon de lessen moet volgen. Het komt wel eens voor dat er bepaalde leden uitgeroostert worden bij de grotere gebeurtenissen, zoals bijvoorbeeld een feest of eindexamen muziek. \r\n               <br><br>\r\n               Er is wel een verplichting waar we ons allemaal aan moeten houden, het is leuk om te doen maar je cijfers mogen er niet onderlijden!'),
(3, 'about', 'Wat doen wij?', 'Wij doen alles achter de schermen bij schoolfeesten, gala''s, vieringen, open dagen, en nog veel meer. Maar wat betekent achter de schermen nu? Dat betekent niet alleen dingen als lampen en DJ sets klaarmaken maar wij zijn ook de technici en de DJ''s. Wij bedienen dus ook het mengpaneel en de lichtcomputer. Wij zetten met muziek avonden ook nog instrumenten als gitaren, drumstellen, en piano''s of keyboarden neer. Wij zorgen er ook voor dat er van alles met de beamer gedaan kan worden. Wij doen dus letterlijk alles achter de schermen!'),
(4, 'about', 'Waar zijn wij?', 'Waar zijn wij op school? Hier mee bedoelen bij welke gebeurtenissen op school zijn wij betrokken? Wij zijn voor namelijk betrokken bij de grotere gebeurtenissen. Het gebeurt tegenwoordig regel matig dat we ook bij ouder avonden aanwezig zijn. Dit was in eerste instantie niet de bedoeling maar door bepaalde omstandigheden moest het bijna wel.\n              <br><br>\n              We zijn zoals eerder gezegd ook aanwezig bij de grotere gebeurtenissen. Neem bijvoorbeeld de school feesten, hier voor werken we samen met de feestcommisie om een ''cool'' feest neer te zetten. Onze taak in het plaatje is het techniscie aspect. Wij regelen de apparatuur en sluiten het aan. We zorgen er voor dat er een gave licht show komt en dat er een goed DJ is.\n              <br>\n              We zijn ook aanwezig bij de cultuurdag, open podium, eindexamens e.d. Dit zijn de gebeurtenissen waar er voor ons veel te doen is. Neem bijvoorbeeld een eindexamen muziek, hierbij moeten wij er voor zorgen dat alles wat met het geluid te maken heeft goed werkt. De deelnemers moeten goed uit gelicht worden en de avond zelf moet natuurlijk vlekeloos velopen.\n'),
(5, 'contact', 'Informatie', 'De licht & Geluid groep is actief op het Groene Hart Lyceum. Voor buitenschoolse evenmenten verwijzen wij u door naar <a href="https://mheventzz.nl">MHEventzz</a>. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
