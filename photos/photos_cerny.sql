-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 24. lis 2023, 20:04
-- Verze serveru: 10.4.27-MariaDB
-- Verze PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `photos_cerny`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `menu_item` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `data_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `menu`
--

INSERT INTO `menu` (`idmenu`, `menu_item`, `url`, `data_type`) VALUES
(1, '1st fluid', '#0', 1),
(2, '2nd fluid', '#0', 2),
(3, '3rd fluid', '#0', 3),
(4, 'Columns', '#0', 4),
(5, 'Message', '#0', 5);

-- --------------------------------------------------------

--
-- Struktura tabulky `photos`
--

CREATE TABLE `photos` (
  `idphotos` int(11) NOT NULL,
  `nazov` varchar(200) NOT NULL,
  `popis` varchar(200) NOT NULL,
  `photo_url` varchar(200) NOT NULL,
  `photo_url_tn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `photos`
--

INSERT INTO `photos` (`idphotos`, `nazov`, `popis`, `photo_url`, `photo_url_tn`) VALUES
(1, 'IMAGE ONE', 'Set true or false in HTML script tag for this page black and white.', 'img/tm-img-01.jpg', 'img/tm-img-01-tn.jpg'),
(2, 'IMAGE TWO', 'Set true or false in HTML page line number 40 to turn on off page color.', 'img/tm-img-02.jpg', 'img/tm-img-02-tn.jpg'),
(3, 'IMAGE THREE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img/tm-img-03.jpg', 'img/tm-img-03-tn.jpg'),
(4, 'PHOTO FOUR', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-04.jpg', 'img/tm-img-04-tn.jpg'),
(5, 'PHOTO FIVE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img/tm-img-05.jpg', 'img/tm-img-05-tn.jpg'),
(6, 'PHOTO SIX', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img/tm-img-06.jpg', 'img/tm-img-06-tn.jpg'),
(7, 'PHOTO SEVEN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img/tm-img-07.jpg', 'img/tm-img-07-tn.jpg'),
(8, 'PHOTO EIGHT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img/tm-img-08.jpg', 'img/tm-img-08-tn.jpg'),
(9, 'PHOTO 9', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-09.jpg', 'img/tm-img-09-tn.jpg'),
(10, 'PHOTO 10', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-10.jpg', 'img/tm-img-10-tn.jpg'),
(11, 'PHOTO 11', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-11.jpg', 'img/tm-img-11-tn.jpg'),
(12, 'PHOTO 12', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-12.jpg', 'img/tm-img-12-tn.jpg'),
(13, 'PHOTO 13', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-13.jpg', 'img/tm-img-13-tn.jpg'),
(14, 'PHOTO 14', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-14.jpg', 'img/tm-img-14-tn.jpg'),
(15, 'PHOTO 15', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-15.jpg', 'img/tm-img-15-tn.jpg'),
(16, 'PHOTO 16', 'Maecenas purus sem, lobortis id odio in sapien.', 'img/tm-img-16.jpg', 'img/tm-img-16-tn.jpg'),
(18, 'skuska', 'sadkjihvgjhasbdugvqwe kibiasbdibasiduiohbwqiebjhbascduvjguh  uasbudbiasd', 'https://static.vecteezy.com/system/resources/thumbnails/009/273/280/small/concept-of-loneliness-and-disappointment-in-love-sad-man-sitting-element-of-the-picture-is-decorated-by-nasa-free-photo.jpg', 'https://static.vecteezy.com/system/resources/thumbnails/009/273/280/small/concept-of-loneliness-and-disappointment-in-love-sad-man-sitting-element-of-the-picture-is-decorated-by-nasa-free-photo.jpg');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$d.xJ5RE2mO0EO5c6DSigpeg8.7tfcpDKbGlG0Q.PTeHyioKMqe.6O');

-- --------------------------------------------------------

--
-- Struktura tabulky `users_has_photos`
--

CREATE TABLE `users_has_photos` (
  `users_idusers` int(11) NOT NULL,
  `photos_idphotos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexy pro tabulku `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`idphotos`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- Indexy pro tabulku `users_has_photos`
--
ALTER TABLE `users_has_photos`
  ADD PRIMARY KEY (`users_idusers`,`photos_idphotos`),
  ADD KEY `fk_users_has_photos_photos1_idx` (`photos_idphotos`),
  ADD KEY `fk_users_has_photos_users_idx` (`users_idusers`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pro tabulku `photos`
--
ALTER TABLE `photos`
  MODIFY `idphotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `users_has_photos`
--
ALTER TABLE `users_has_photos`
  ADD CONSTRAINT `fk_users_has_photos_photos1` FOREIGN KEY (`photos_idphotos`) REFERENCES `photos` (`idphotos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_photos_users` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
