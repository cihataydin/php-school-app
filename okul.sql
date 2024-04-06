-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 Mar 2024, 06:57:35
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `okul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

DROP TABLE IF EXISTS `ogrenci`;
CREATE TABLE IF NOT EXISTS `ogrenci` (
  `numara` text NOT NULL,
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `tc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`numara`, `ad`, `soyad`, `tc`) VALUES
('qew', '', 'wqe', 'qwe'),
('qwe', '', 'wqe', 'wqe'),
('435543', '', '4t3', '435'),
('eqw', '', 'werq', 'eqw'),
('43', '43', '34', '42'),
('532', 'fatih', '', '322432'),
('5', '5', '5', '5'),
('3244343', 'wqwqeweq', 'wqewqewqe', '43243234342'),
('sda', 'asd', 'sda', 'sad'),
('s', '', 'as', 'as'),
('tt', 'tt', 'tt', 'tt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
