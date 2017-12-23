-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Eki 2016, 21:28:40
-- Sunucu sürümü: 5.6.16
-- PHP Sürümü: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `poemy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `poem`
--

CREATE TABLE IF NOT EXISTS `poem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `poem` text COLLATE utf8_turkish_ci NOT NULL,
  `pdate` date DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `poem`
--

INSERT INTO `poem` (`id`, `poet`, `poem`, `pdate`, `sdate`, `name`) VALUES
(1, 'Chacal', 'com deus mi deito com deus mi levanto\r\ncomigo eu calo comigo eu canto\r\neu bato um papo eu bato um ponto\r\neu tomo um drink eu fico tonto', '1979-01-12', '2016-10-07', 'Relogio'),
(7, 'Richard McClintock', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '0000-00-00', 'Lorem Ipsum'),
(8, 'Martin Luther', 'dixi et salvavi animam meam', '0000-00-00', '0000-00-00', 'Confession'),
(9, 'Pablo Neruda', 'Desde el fondo de ti, y arrodillado,\r\nun niño triste como yo, nos mira.\r\n\r\nPor esa vida que arderá en sus venas\r\ntendrían que amarrarse nuestras vidas.\r\n\r\nPor esas manos, hijas de tus manos,\r\ntendrían que matar las manos mías.\r\n\r\nPor sus ojos abiertos en la tierra\r\nveré en los tuyos lágrimas un día.\r\n\r\nYo no lo quiero, Amada.\r\n\r\nPara que nada nos amarre\r\nque no nos una nada.', '0000-00-00', '0000-00-00', 'Crepusculario');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
