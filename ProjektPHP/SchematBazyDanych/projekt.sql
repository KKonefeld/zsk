-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Mar 2020, 12:54
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzial`
--

CREATE TABLE `dzial` (
  `id_dzial` int(11) NOT NULL,
  `nazwa_dzialu` varchar(255) DEFAULT NULL,
  `id_kursu` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `dzial`
--

INSERT INTO `dzial` (`id_dzial`, `nazwa_dzialu`, `id_kursu`) VALUES
(1, 'Linux', 1),
(2, 'Windows', 1),
(3, 'UTK', 1),
(4, 'Sieci', 2),
(5, 'Urzadzenia', 2),
(6, 'Protokoly', 2),
(7, 'PHP', 3),
(8, 'WebDesign', 3),
(9, 'BazyDanych', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `id_jezyka` int(11) NOT NULL,
  `nazwa_jezyka` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `jezyki`
--

INSERT INTO `jezyki` (`id_jezyka`, `nazwa_jezyka`) VALUES
(1, 'angielski'),
(2, 'hiszpaski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `id_kursu` int(11) NOT NULL,
  `nazwa_kursu` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`id_kursu`, `nazwa_kursu`) VALUES
(1, 'E12'),
(2, 'E13'),
(3, 'E14');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowo`
--

CREATE TABLE `slowo` (
  `id_slowo` int(11) NOT NULL,
  `slowo` varchar(70) NOT NULL,
  `id_dzial` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `slowo`
--

INSERT INTO `slowo` (`id_slowo`, `slowo`, `id_dzial`) VALUES
(44, 'drukarka', 3),
(6, 'drukarka', 5),
(33, 'uprawnienia do plikow', 2),
(34, 'ukryte pliki', 2),
(31, 'formatowac', 2),
(43, 'urzadzenia peryferyjne', 3),
(32, 'wylogowac sie', 2),
(35, 'sterowniki', 2),
(36, 'maszyna wirtualna', 2),
(37, 'interfejs graficzny', 2),
(38, 'interfejs tekstowy', 1),
(39, 'jadro', 1),
(40, 'zalogowac sie', 1),
(41, 'uzytkownik z uprawnieniami administratora', 1),
(42, 'kompresja', 1),
(52, 'kamerka internetowa', 3),
(51, 'mysz', 3),
(50, 'podlacz i graj', 3),
(53, 'glosnik', 3),
(54, 'pakiety', 4),
(58, 'facet', 1),
(56, 'domena', 4),
(57, 'adres ip', 4),
(60, 'testowe', 8),
(61, 'testowe', 7),
(62, 'testowe', 6),
(63, 'testowe', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tlumaczenie`
--

CREATE TABLE `tlumaczenie` (
  `id_tlumaczenia` int(11) NOT NULL,
  `id_slowo` int(11) DEFAULT 0,
  `id_jezyka` int(11) DEFAULT 0,
  `tlumaczenie` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `tlumaczenie`
--

INSERT INTO `tlumaczenie` (`id_tlumaczenia`, `id_slowo`, `id_jezyka`, `tlumaczenie`) VALUES
(38, 44, 1, 'printer'),
(39, 43, 1, 'peripherals'),
(26, 33, 1, 'file permission'),
(27, 34, 1, 'hidden files'),
(40, 52, 1, 'webcam'),
(28, 31, 1, 'format'),
(29, 32, 1, 'sign out'),
(30, 35, 1, 'device drivers'),
(31, 36, 1, 'virtual machine'),
(32, 37, 1, 'graphical user interface'),
(33, 38, 1, 'command line interface'),
(34, 39, 1, 'kernel'),
(35, 40, 1, 'sign in'),
(36, 41, 1, 'root'),
(37, 42, 1, 'compression'),
(41, 51, 1, 'mouse'),
(42, 50, 1, 'plug and play'),
(43, 53, 1, 'speaker'),
(44, 54, 1, 'packets'),
(48, 58, 1, 'ram'),
(46, 56, 1, 'domain'),
(47, 57, 1, 'ip adress'),
(49, 6, 1, 'printer'),
(50, 63, 1, 'testowe'),
(51, 62, 1, 'test'),
(52, 61, 1, 'test'),
(53, 60, 1, 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tlumaczenieuzytkownik`
--

CREATE TABLE `tlumaczenieuzytkownik` (
  `id_tlumaczenieuzytkownik` int(11) NOT NULL,
  `id_tlumaczenia` int(11) DEFAULT 0,
  `id_uzytkownik` int(11) DEFAULT 0,
  `czy_nauczone` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `tlumaczenieuzytkownik`
--

INSERT INTO `tlumaczenieuzytkownik` (`id_tlumaczenieuzytkownik`, `id_tlumaczenia`, `id_uzytkownik`, `czy_nauczone`) VALUES
(45, 15, 11, 1),
(43, 20, 11, 1),
(49, 34, 7, 1),
(47, 15, 7, 1),
(48, 45, 7, 1),
(46, 14, 11, 1),
(44, 22, 11, 1),
(42, 21, 11, 1),
(50, 35, 7, 1),
(51, 36, 7, 1),
(52, 37, 7, 1),
(53, 33, 7, 1),
(54, 27, 7, 1),
(55, 28, 7, 1),
(56, 39, 7, 1),
(57, 40, 7, 1),
(58, 41, 7, 1),
(59, 42, 7, 1),
(60, 43, 7, 1),
(61, 38, 7, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id_uzytkownik` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `haslo` varchar(255) DEFAULT NULL,
  `czy_administrator` int(11) DEFAULT 0,
  `data_utworzenia` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `login`, `haslo`, `czy_administrator`, `data_utworzenia`) VALUES
(11, 'zwyklyuser@zwyklyuser.pl', '$2y$10$fUrPJygjHxmZnnWx5w0aR.er0B1woYU/dhdnti.pufCHW7F3dH6/O', 0, '2020-03-28 00:00:00'),
(7, 'admin@admin.pl', '$2y$10$f5xWvvYmobYelBBoOoz4GOLg0QeYCojCvdmN16BoZ0CVt0KahGhle', 1, '2020-02-28 00:00:00'),
(8, 'zwykly@zwykly.pl', '$2y$10$JP4KXR7VanE37BzBkVgXc.ZREFXHioFoSN/9e/AHTRQ8FSzR9L1C6', 0, '2020-02-28 00:00:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzial`
--
ALTER TABLE `dzial`
  ADD PRIMARY KEY (`id_dzial`),
  ADD KEY `id_kursu` (`id_kursu`);

--
-- Indeksy dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  ADD PRIMARY KEY (`id_jezyka`),
  ADD KEY `id_jezyka` (`id_jezyka`),
  ADD KEY `nazwa_jezyka` (`nazwa_jezyka`);

--
-- Indeksy dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id_kursu`),
  ADD KEY `id_kursu` (`id_kursu`);

--
-- Indeksy dla tabeli `slowo`
--
ALTER TABLE `slowo`
  ADD PRIMARY KEY (`id_slowo`),
  ADD KEY `id_dzial` (`id_dzial`),
  ADD KEY `id_slowo` (`id_slowo`);

--
-- Indeksy dla tabeli `tlumaczenie`
--
ALTER TABLE `tlumaczenie`
  ADD PRIMARY KEY (`id_tlumaczenia`),
  ADD KEY `id_jezyka` (`id_jezyka`),
  ADD KEY `id_tlumaczenia` (`id_tlumaczenia`),
  ADD KEY `id_slowo` (`id_slowo`);

--
-- Indeksy dla tabeli `tlumaczenieuzytkownik`
--
ALTER TABLE `tlumaczenieuzytkownik`
  ADD PRIMARY KEY (`id_tlumaczenieuzytkownik`),
  ADD KEY `id_tlumaczenia` (`id_tlumaczenia`),
  ADD KEY `id_tlumaczenieuzytkownik` (`id_tlumaczenieuzytkownik`),
  ADD KEY `id_uzytkownik` (`id_uzytkownik`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_uzytkownik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzial`
--
ALTER TABLE `dzial`
  MODIFY `id_dzial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  MODIFY `id_jezyka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id_kursu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `slowo`
--
ALTER TABLE `slowo`
  MODIFY `id_slowo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT dla tabeli `tlumaczenie`
--
ALTER TABLE `tlumaczenie`
  MODIFY `id_tlumaczenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT dla tabeli `tlumaczenieuzytkownik`
--
ALTER TABLE `tlumaczenieuzytkownik`
  MODIFY `id_tlumaczenieuzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
