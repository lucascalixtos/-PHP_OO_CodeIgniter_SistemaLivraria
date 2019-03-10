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
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`id`, `titulo`, `texto`, `time_stamp`) VALUES
(1, 'Nobel', 'Teste', '2019-03-10 17:22:33'),
(2, 'Nobel', 'Teste', '2019-03-10 17:28:05'),
(3, 'Bem vindo à Livraria Nobel', 'A Livraria Nobel é uma empresa fundada em São Paulo no ano de 1943 pelo italiano Cláudio Milano . A rede de franquias Nobel oferece aos seus clientes o melhor do mercado literário, além de papelaria e presentes em suas mais de 220 lojas espalhadas pelo Brasil e no exterior.\r\n<br>\r\nA rede de livrarias Nobel foi considerada pela revista PEGN - Pequenas Empresas & Grandes Negócios) a melhor franquia de livrarias/ lazer do Brasil nos anos (2006, 2007, 2008, 2009, 2012 e 2013). E é associada há 20 anos na ABF (Associação Brasileira de Franchising), entidade referência nacional no mercado.\r\n<br>\r\nAtualmente a Nobel conta com mais de 220 lojas no Brasil e exterior.', '2019-03-10 19:47:48'),
(4, 'Bem vindo à Livraria Nobel', 'A Livraria Nobel é uma empresa fundada em São Paulo no ano de 1943 pelo italiano Cláudio Milano . A rede de franquias Nobel oferece aos seus clientes o melhor do mercado literário, além de papelaria e presentes em suas mais de 220 lojas espalhadas pelo Brasil e no exterior.\r\n<br>\r\nA rede de livrarias Nobel foi considerada pela revista PEGN - Pequenas Empresas & Grandes Negócios) a melhor franquia de livrarias/ lazer do Brasil nos anos (2006, 2007, 2008, 2009, 2012 e 2013). E é associada há 20 anos na ABF (Associação Brasileira de Franchising), entidade referência nacional no mercado.\r\n<br>\r\nAtualmente a Nobel conta com mais de 220 lojas no Brasil e exterior.', '2019-03-10 19:48:06'),
(6, 'Bem vindo à Livraria Nobel', 'A Livraria Nobel é uma empresa fundada em São Paulo no ano de 1943 pelo italiano Cláudio Milano . A rede de franquias Nobel oferece aos seus clientes o melhor do mercado literário, além de papelaria e presentes em suas mais de 220 lojas espalhadas pelo Brasil e no exterior.\r\n<br>\r\nA rede de livrarias Nobel foi considerada pela revista PEGN - Pequenas Empresas & Grandes Negócios) a melhor franquia de livrarias/ lazer do Brasil nos anos (2006, 2007, 2008, 2009, 2012 e 2013). E é associada há 20 anos na ABF (Associação Brasileira de Franchising), entidade referência nacional no mercado.\r\n<br>\r\nAtualmente a Nobel conta com mais de 220 lojas no Brasil e exterior.', '2019-03-10 19:48:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texto`
--
ALTER TABLE `texto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
