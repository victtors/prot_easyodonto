-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Ago-2018 às 21:19
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_tcc2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `nacionalidade` varchar(30) NOT NULL,
  `profissao` varchar(60) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data_nasc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `cpf`, `sexo`, `endereco`, `cidade`, `estado`, `nacionalidade`, `profissao`, `contato`, `email`, `data_nasc`) VALUES
(1, 'JoÃ£o VÃ­ctor', '02316415245', 'masculino', 'rua vista alegre, 185 - parque das palmeiras', 'Rio Branco', 'AC', 'brasileiro', 'T.I', '68 99908-8580', 'j.v.silva.n@gmail.com', ''),
(2, 'Perla KÃ©ssia Costa de Paiva', '03863634209', 'feminino', 'rua valdomiro lopes, 1356 - Geraldo Gleming', 'Rio Branco', 'AC', 'brasileiro', 'Auxiliar de RH', '68 9614-2774', 'paivaperla1@gmail.com', ''),
(3, 'DemÃ³stenes Nascimento', '18093116249', 'masculino', 'Av. Brasil, Quadra 1 Casa 01-A', 'Rio Branco', 'AC', 'brasileiro', 'RepÃ³rter', '68 99229-5059', 'demostevetv5@gmail.com', ''),
(4, 'DemÃ³stenes Nascimento', '18093116249', 'masculino', 'Av. Brasil, Quadra 1 Casa 01-A', 'Rio Branco', 'AC', 'brasileiro', 'RepÃ³rter', '68 99229-5059', 'demostevetv5@gmail.com', ''),
(5, 'DemÃ³stenes Nascimento', '18093116249', 'masculino', 'Av. Brasil, Quadra 1 Casa 01-A', 'Rio Branco', 'AC', 'brasileiro', 'RepÃ³rter', '68 99229-5059', 'demostevetv5@gmail.com', '17/11/1960');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
