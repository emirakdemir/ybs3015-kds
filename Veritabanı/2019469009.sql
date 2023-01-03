-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 Ara 2022, 18:03:29
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `2019469009`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'EmircanAkdemir', 'emir123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(3) NOT NULL AUTO_INCREMENT,
  `urun_turu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_turu`) VALUES
(1, 'Pantolon_Jean'),
(2, 'Sweatshirt_Kazak'),
(3, 'Tshirt'),
(4, 'Gomlek'),
(5, 'Mont_Kaban');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriler`
--

DROP TABLE IF EXISTS `veriler`;
CREATE TABLE IF NOT EXISTS `veriler` (
  `veri_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(3) NOT NULL,
  `tarih` date NOT NULL,
  `satis_miktari` int(11) NOT NULL,
  `iade_miktari` int(11) NOT NULL,
  `stok_miktari` int(11) NOT NULL,
  `musteri_egilim` int(2) NOT NULL,
  PRIMARY KEY (`veri_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `veriler`
--

INSERT INTO `veriler` (`veri_id`, `urun_id`, `tarih`, `satis_miktari`, `iade_miktari`, `stok_miktari`, `musteri_egilim`) VALUES
(1, 1, '2021-01-01', 443, 10, 650, 49),
(2, 1, '2021-02-01', 623, 19, 780, 64),
(3, 1, '2021-03-01', 484, 9, 625, 52),
(4, 1, '2021-04-01', 519, 17, 600, 54),
(5, 1, '2021-05-01', 611, 13, 700, 59),
(6, 2, '2021-01-01', 570, 16, 650, 57),
(7, 2, '2021-02-01', 537, 20, 600, 50),
(8, 2, '2021-03-01', 348, 11, 420, 43),
(9, 2, '2021-04-01', 223, 9, 380, 38),
(10, 2, '2021-05-01', 316, 15, 379, 40),
(11, 3, '2021-01-01', 417, 9, 543, 43),
(12, 3, '2021-02-01', 381, 13, 530, 38),
(13, 3, '2021-03-01', 512, 17, 713, 52),
(14, 3, '2021-04-01', 624, 16, 746, 75),
(15, 3, '2021-05-01', 743, 21, 825, 89),
(16, 4, '2021-01-01', 498, 11, 500, 52),
(17, 4, '2021-02-01', 493, 9, 520, 49),
(18, 4, '2021-03-01', 504, 23, 550, 54),
(19, 4, '2021-04-01', 497, 9, 535, 57),
(20, 4, '2021-05-01', 511, 13, 550, 53),
(21, 5, '2021-01-01', 813, 19, 960, 87),
(22, 5, '2021-02-01', 796, 20, 1025, 76),
(23, 5, '2021-03-01', 249, 11, 525, 35),
(24, 5, '2021-04-01', 309, 11, 450, 43),
(25, 5, '2021-05-01', 189, 9, 250, 27),
(26, 1, '2022-01-01', 587, 13, 680, 57),
(27, 1, '2022-02-01', 497, 7, 530, 54),
(28, 1, '2022-03-01', 549, 24, 620, 59),
(29, 1, '2022-04-01', 617, 13, 650, 63),
(30, 1, '2022-05-01', 603, 11, 620, 61),
(31, 2, '2022-01-01', 627, 23, 740, 64),
(32, 2, '2022-02-01', 643, 19, 725, 67),
(33, 2, '2022-03-01', 456, 15, 500, 53),
(34, 2, '2022-04-01', 237, 13, 380, 39),
(35, 2, '2022-05-01', 278, 9, 180, 39),
(36, 3, '2022-01-01', 453, 19, 540, 39),
(37, 3, '2022-02-01', 405, 17, 530, 37),
(38, 3, '2022-03-01', 607, 23, 700, 55),
(39, 3, '2022-04-01', 675, 29, 860, 72),
(40, 3, '2022-05-01', 838, 26, 925, 91),
(41, 4, '2022-01-01', 498, 9, 550, 55),
(42, 4, '2022-02-01', 504, 13, 525, 52),
(43, 4, '2022-03-01', 527, 17, 585, 59),
(44, 4, '2022-04-01', 518, 16, 585, 53),
(45, 4, '2022-05-01', 549, 19, 600, 63),
(46, 5, '2022-01-01', 910, 31, 1000, 91),
(47, 5, '2022-02-01', 849, 24, 1050, 87),
(48, 5, '2022-03-01', 270, 19, 450, 29),
(49, 5, '2022-04-01', 368, 23, 420, 40),
(50, 5, '2022-05-01', 48, 6, 160, 23);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `veriler`
--
ALTER TABLE `veriler`
  ADD CONSTRAINT `veriler_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
