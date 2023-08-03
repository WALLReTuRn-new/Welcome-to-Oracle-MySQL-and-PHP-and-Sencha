-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 03. srp 2023, 18:48
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
-- Databáze: `basicsencha`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `dasdasdas`
--

CREATE TABLE `dasdasdas` (
  `ID` int(11) NOT NULL,
  `dasdsa` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `dasdasdsa`
--

CREATE TABLE `dasdasdsa` (
  `ID` int(11) NOT NULL,
  `dasdas` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `dasdsa`
--

CREATE TABLE `dasdsa` (
  `ID` int(11) NOT NULL,
  `dasdsa` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `twretrtrff`
--

CREATE TABLE `twretrtrff` (
  `ID` int(11) NOT NULL,
  `fasds` varchar(22) DEFAULT NULL,
  `fssdfds` int(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `twretrtrffaaa`
--

CREATE TABLE `twretrtrffaaa` (
  `ID` int(11) NOT NULL,
  `fasds` varchar(22) DEFAULT NULL,
  `fssdfds` int(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `twretrtrffaaafff`
--

CREATE TABLE `twretrtrffaaafff` (
  `ID` int(11) NOT NULL,
  `fasds` varchar(22) DEFAULT NULL,
  `fssdfds` int(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `twretrtrffaaafffxx`
--

CREATE TABLE `twretrtrffaaafffxx` (
  `ID` int(11) NOT NULL,
  `fasds` varchar(22) DEFAULT NULL,
  `fssdfds` int(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `twretrtrffaaafffxx2`
--

CREATE TABLE `twretrtrffaaafffxx2` (
  `ID` int(11) NOT NULL,
  `fasds` varchar(22) DEFAULT NULL,
  `fssdfds` int(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `user_id` int(225) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_added` datetime NOT NULL,
  `user_lastedit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_added`, `user_lastedit`) VALUES
(1, 'WALLReTuRn', 'wallreturn@gmail.com', '774449244', '2023-08-01 17:00:22', '2023-08-01 17:00:22'),
(2, 'WALLReTuRn2', 'wallreturn2@gmail.com', '7744492442', '2023-08-01 17:00:22', '2023-08-01 17:00:22'),
(3, '', '', '', '2023-08-03 18:31:39', '0000-00-00 00:00:00'),
(4, 'dasdsa', 'das', 'dasdsadsa', '2023-08-03 18:33:42', '0000-00-00 00:00:00'),
(6, 'dasdsa1', 'das1', 'dasdsadsa1', '2023-08-03 18:34:21', '0000-00-00 00:00:00'),
(7, 'dasdsa1das', 'das1ads', 'dasdsadsa1das', '2023-08-03 18:35:55', '0000-00-00 00:00:00'),
(8, 'a', 'c', 'a', '2023-08-03 18:36:09', '0000-00-00 00:00:00'),
(9, 'b', 'b', 'b', '2023-08-03 18:37:44', '0000-00-00 00:00:00'),
(10, 'c', 'a', 'c', '2023-08-03 18:38:03', '0000-00-00 00:00:00'),
(11, 'cas', 'asc', 'as', '2023-08-03 18:38:16', '0000-00-00 00:00:00'),
(12, 'cxa', 'asd', 'ads', '2023-08-03 18:38:43', '0000-00-00 00:00:00'),
(13, 'cxaa', 'asda', 'adsa', '2023-08-03 18:38:53', '0000-00-00 00:00:00'),
(14, 'cas', 'casc', 'acs', '2023-08-03 18:38:58', '0000-00-00 00:00:00'),
(15, 'csad', 'cad', 'aasdas', '2023-08-03 18:39:12', '0000-00-00 00:00:00'),
(16, 'bas', 'dasds', 'bas', '2023-08-03 18:39:34', '0000-00-00 00:00:00'),
(18, 'dasdasd', 'sadsa', 'dasd', '2023-08-03 18:41:23', '0000-00-00 00:00:00'),
(20, 'WALLReTuRn', 'ddasdassadsad', 'sdsadsadassdsa', '2023-08-03 18:41:49', '0000-00-00 00:00:00');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `dasdasdas`
--
ALTER TABLE `dasdasdas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `dasdasdsa`
--
ALTER TABLE `dasdasdsa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `dasdsa`
--
ALTER TABLE `dasdsa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `twretrtrff`
--
ALTER TABLE `twretrtrff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `twretrtrffaaa`
--
ALTER TABLE `twretrtrffaaa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `twretrtrffaaafff`
--
ALTER TABLE `twretrtrffaaafff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `twretrtrffaaafffxx`
--
ALTER TABLE `twretrtrffaaafffxx`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `twretrtrffaaafffxx2`
--
ALTER TABLE `twretrtrffaaafffxx2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `dasdasdas`
--
ALTER TABLE `dasdasdas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `dasdasdsa`
--
ALTER TABLE `dasdasdsa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `dasdsa`
--
ALTER TABLE `dasdsa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `twretrtrff`
--
ALTER TABLE `twretrtrff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `twretrtrffaaa`
--
ALTER TABLE `twretrtrffaaa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `twretrtrffaaafff`
--
ALTER TABLE `twretrtrffaaafff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `twretrtrffaaafffxx`
--
ALTER TABLE `twretrtrffaaafffxx`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `twretrtrffaaafffxx2`
--
ALTER TABLE `twretrtrffaaafffxx2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
