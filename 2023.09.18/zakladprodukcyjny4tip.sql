-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Wrz 2023, 18:34
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zakadprodukcyjny4tip`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `idKlient` int(11) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`idKlient`, `imie`, `nazwisko`, `telefon`) VALUES
(1, 'Wiktor', 'Adamczyk', '200-300-400'),
(2, 'Marian', 'Milowicz', '200-300-401'),
(3, 'Wojciech', 'Zabłocki', '200-300-402'),
(4, 'Andrzej', 'Stachoń', '200-300-403'),
(5, 'Hubert', 'Nowakowski', '200-300-404'),
(8, 'Arkadiusz', 'Kwapisz', '100-200-300'),
(16, 'Dawid', 'Wasilewski', '400-400-020'),
(17, 'Wiktor', 'Stachoń', '100-200-300');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `idPracownik` int(11) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `wiek` int(11) NOT NULL,
  `miasto` varchar(100) NOT NULL,
  `stanowisko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`idPracownik`, `imie`, `nazwisko`, `wiek`, `miasto`, `stanowisko`) VALUES
(1, 'Jan', 'Nowak', 35, 'Warszawa', 'spawacz'),
(2, 'Marcin', 'Kowalski', 36, 'Warszawa', 'lakiernik'),
(3, 'Wiktor', 'Owicki', 45, 'Warszawa', 'tokarz'),
(4, 'Konrad', 'Adamski', 55, 'Kraków', 'monter'),
(5, 'Zdzisław', 'Mirowski', 62, 'Kraków', 'konserwator'),
(6, 'Wojtek', 'Wolański', 34, 'Poznań', 'kierowca'),
(7, 'Damian', 'Kocańda', 29, 'Leszno', 'magazynier'),
(8, 'Janusz', 'Wrzosek', 44, 'Kraków', 'lakiernik'),
(9, 'Janusz', 'Wrzosek', 44, 'Kraków', 'lakiernik'),
(10, 'Paweł', 'Koczorowski', 54, 'Warszawa', 'spawacz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `idUsluga` int(11) NOT NULL,
  `opis` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `cena` int(11) NOT NULL,
  `idKlient` int(11) NOT NULL,
  `idPracownik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`idUsluga`, `opis`, `data`, `cena`, `idKlient`, `idPracownik`) VALUES
(1, 'toczenie stali', '2023-09-18', 200, 1, 3),
(3, 'spawanie konstrukcji', '2023-09-30', 700, 2, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`idKlient`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`idPracownik`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`idUsluga`),
  ADD KEY `idKlient` (`idKlient`),
  ADD KEY `idPracownik` (`idPracownik`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `idKlient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `idPracownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `idUsluga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD CONSTRAINT `uslugi_ibfk_1` FOREIGN KEY (`idKlient`) REFERENCES `klienci` (`idKlient`),
  ADD CONSTRAINT `uslugi_ibfk_2` FOREIGN KEY (`idPracownik`) REFERENCES `pracownicy` (`idPracownik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
