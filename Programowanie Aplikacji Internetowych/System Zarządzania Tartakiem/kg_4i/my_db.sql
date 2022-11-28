-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2022, 19:50
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `my_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `buyers`
--

CREATE TABLE `buyers` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Typ drzewa` varchar(50) NOT NULL,
  `Ilość desek` varchar(50) NOT NULL,
  `Zgoda Polityczna` varchar(50) NOT NULL,
  `Dodatkowe Informacje` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `buyers`
--

INSERT INTO `buyers` (`Id`, `Imie`, `Nazwisko`, `Typ drzewa`, `Ilość desek`, `Zgoda Polityczna`, `Dodatkowe Informacje`) VALUES
(28, 'Maciej', 'Łukasik', 'Liściaste', '150', 'Tak', 'Ładnie pokrojone'),
(29, 'Maciej', 'Łukasik', 'Liściaste', '300', 'Nie', 'Dobrze mają być'),
(30, 'Maciej', 'Łukasik', 'Iglaste', '140', 'Tak', 'Bez uszczerbek'),
(31, 'Maciej', 'Łukasik', 'Iglaste', '399', 'Tak', 'Cienkie dechy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contacts`
--

CREATE TABLE `contacts` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Zgoda Polityczna` varchar(50) NOT NULL,
  `Wiadomość` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `contacts`
--

INSERT INTO `contacts` (`Id`, `Imie`, `Nazwisko`, `Email`, `Zgoda Polityczna`, `Wiadomość`) VALUES
(3, 'Maciej', 'Łukasik', 'test@test.pl', 'Tak', 'Dobre'),
(4, 'Maciej', 'Łukasik', 'test@test.pl', 'Nie', 'Porządna strona'),
(5, 'Maciej', 'Łukasik', 'test@test.pl', 'Tak', 'Luks'),
(6, 'Maciej', 'Łukasik', 'test@test.pl', 'Nie', 'Bedzie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Haslo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id`, `Imie`, `Nazwisko`, `Email`, `Login`, `Haslo`) VALUES
(1, 'Krzysztof', 'Gucwa', 'kitas', '$2y$10$yRDD/JSK9I245s3LqECYIenYPOsPTfgb..eSxzb/rik', 'test@test.pl'),
(8, 'Maciej', 'Łukasik', 'maciejo', '$2y$10$UqLncPXz8wJEmOyUXoFwOO.pphcpdxX7gldpS60anhV', 'test@test.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `buyers`
--
ALTER TABLE `buyers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT dla tabeli `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
