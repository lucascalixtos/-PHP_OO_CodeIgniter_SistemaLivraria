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
-- Estrutura da tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id`, `img1`, `img2`, `img3`) VALUES
(1, 'c1.jpg', 'c2.png', 'c1.jpg'),
(2, 'c1.jpg', 'c2.png', 'c1.jpg'),
(3, 'c1.jpg', 'c2.png', 'c1.jpg'),
(4, 'c1.jpg', 'c2.png', 'c1.jpg'),
(5, 'c1.jpg', 'c2.png', 'c1.jpg'),
(6, 'c1.jpg', 'c2.png', 'c1.jpg'),
(7, 'c1.jpg', 'c2.png', 'c1.jpg'),
(8, 'c1.jpg', 'c2.png', 'c1.jpg'),
(9, 'c1.jpg', 'c2.png', 'c1.jpg'),
(10, 'c1.jpg', 'c2.png', 'c1.jpg'),
(11, 'c1.jpg', 'c2.png', 'c1.jpg'),
(12, 'c1.jpg', 'c2.png', 'c1.jpg'),
(13, 'c1.jpg', 'c2.png', 'c1.jpg'),
(14, 'c1.jpg', 'c2.png', 'c1.jpg'),
(15, 'c1.jpg', 'c2.png', 'c1.jpg'),
(16, 'c1.jpg', 'c2.png', 'c1.jpg'),
(17, 'c1.jpg', 'c2.png', 'c1.jpg'),
(18, 'livro4.jpeg', 'c1.jpg', 'c2.png'),
(19, 'c1.jpg', 'c2.png', 'c2.png'),
(20, 'c1.jpg', 'c2.png', 'c3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
