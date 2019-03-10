-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Mar-2019 às 21:55
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp6`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `label1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `label2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `label3` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cards`
--

INSERT INTO `cards` (`id`, `img1`, `title1`, `label1`, `img2`, `title2`, `label2`, `img3`, `label3`, `title3`, `time_stamp`) VALUES
(1, 'livro1.jpg', 'a', 'a', 'c2.png', 'a', 'a', 'c2.png', 'b', 'b', '2019-03-10 16:42:44'),
(2, 'card1.jpg', 'Conheça nosso catálogo!', 'A livraria Nobel apresenta um dos maiores catálogos de todas as livrarias de toda a America Latina. Venha Conferir!', 'card2.jpg', 'Tem alguma duvida?', 'Quer saber mais sobre nosso catálogo ? <br> Quer contactar algum erro ou engano ? <br> Clique logo abaixo!', 'card3.png', 'Conheça mais sobre nós, conheça a história da empresa, nossa filosofia, entre outras coisas.', 'Sobre nós', '2019-03-10 19:17:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
