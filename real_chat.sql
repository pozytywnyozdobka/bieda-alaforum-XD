-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Sty 2023, 20:30
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `real_chat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `haslo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_message`
--

CREATE TABLE `tbl_message` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` text NOT NULL,
  `outgoing_msg_id` text NOT NULL,
  `text_message` text NOT NULL,
  `curr_date` text NOT NULL,
  `curr_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `text_message`, `curr_date`, `curr_time`) VALUES
(1, '1476479542', '993628918', 'Hi', 'November 2, 2021 ', '12:30 am'),
(2, '993628918', '1476479542', 'Hello bro how are you? ðŸ˜Š\n', 'November 2, 2021 ', '12:31 am'),
(3, '1476479542', '993628918', 'Ya bro im fine', 'November 2, 2021 ', '12:34 am'),
(4, '993628918', '1476479542', 'What are you doing now?\n', 'November 2, 2021 ', '12:38 am'),
(5, '1476479542', '993628918', 'Sitting on a chair', 'November 2, 2021 ', '12:38 am'),
(6, '993628918', '1476479542', 'oh', 'November 2, 2021 ', '12:38 am'),
(7, '993628918', '1476479542', 'You can come at my house now', 'November 2, 2021 ', '12:40 am'),
(8, '1476479542', '993628918', 'Ok brother, im coming...', 'November 2, 2021 ', '12:41 am');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytnicy`
--

CREATE TABLE `uzytnicy` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `status` text NOT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indeksy dla tabeli `uzytnicy`
--
ALTER TABLE `uzytnicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `uzytnicy`
--
ALTER TABLE `uzytnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `uzytnicy`
--
ALTER TABLE `uzytnicy`
  ADD CONSTRAINT `uzytnicy_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
