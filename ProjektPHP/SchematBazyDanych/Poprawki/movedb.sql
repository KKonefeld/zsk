-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lis 2019, 22:23
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
-- Baza danych: `movedb`
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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `id_jezyka` int(11) NOT NULL,
  `nazwa_jezyka` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `id_kursu` int(11) NOT NULL,
  `nazwa_kursu` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowo`
--

CREATE TABLE `slowo` (
  `id_slowo` int(11) NOT NULL,
  `id_dzial` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  MODIFY `id_dzial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  MODIFY `id_jezyka` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id_kursu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `slowo`
--
ALTER TABLE `slowo`
  MODIFY `id_slowo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tlumaczenie`
--
ALTER TABLE `tlumaczenie`
  MODIFY `id_tlumaczenia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tlumaczenieuzytkownik`
--
ALTER TABLE `tlumaczenieuzytkownik`
  MODIFY `id_tlumaczenieuzytkownik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
