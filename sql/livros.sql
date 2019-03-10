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
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `capa` varchar(50) NOT NULL,
  `descr` text NOT NULL,
  `preco` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `genero`, `ano`, `idioma`, `capa`, `descr`, `preco`, `time_stamp`) VALUES
(13, 'Harry Potter e a Pedra Filosofal', 'J.K ', 'Fantasia', 1998, 'Português', 'livro3.jpeg', 'Harry potter é um menino que não se encaixa em lugar nenhum', 28, '2019-03-10 20:13:19'),
(14, 'Harry Potter e a Camara Secreta', 'J.K Rowling', 'Fantasia', 2000, 'Português', 'livro4.jpeg', 'Após as sofríveis férias na casa dos tios, Harry Potter se prepara para voltar a Hogwarts e começar seu segundo ano na escola de bruxos. Na véspera do início das aulas, a estranha criatura Dobby aparece em seu quarto e o avisa de que voltar é um erro e qu', 30, '2019-03-10 20:14:14'),
(15, 'Harry Potter e o Prisioneiro de Azkhaban', 'J.K Rowling', 'Infanto-juvenil', 2001, 'Inglês', 'livro5.jpeg', 'O terceiro ano de Harry Potter em Hogwarts começa mal quando ele descobre que o assassino Sirius Black escapou da prisão de Azkaban e está empenhado em matá-lo. Enquanto o gato de Hermione atormenta o rato doente de Ron, um bando de dementadores são enviados para proteger a escola de Sirius Black. Um professor misterioso ajuda Harry a aprender a se defender.', 35, '2019-03-10 20:16:52'),
(16, '1984', 'George Orwell', 'Distopia', 1975, 'Português', 'livro8.jpg', 'Um homem perde sua identidade vivendo sob um regime repressivo. Nesta história baseada no clássico de George Orwell, Winston Smith (John Hurt) é um funcionário público cuja função é reescrever a história de forma a colocar os líderes de um país fictício sob uma luz positiva. As escapadelas românticas com Julia (Suzanna Hamilton) proporcionam sua única fonte de distração, mas os políticos desaprovam o relacionamento. Numa sociedade monitorada de perto, não há como escapar do Grande Irmão.', 40, '2019-03-10 20:19:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
