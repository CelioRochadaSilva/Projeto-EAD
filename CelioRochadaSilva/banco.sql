-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2016 às 01:20
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `celiorocha`
--

CREATE TABLE `celiorocha` (
  `codigo` int(11) NOT NULL,
  `primeiroNome` varchar(45) NOT NULL,
  `ultimoNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `celiorocha`
--

INSERT INTO `celiorocha` (`codigo`, `primeiroNome`, `ultimoNome`) VALUES
(5, 'Silene', 'Rocha'),
(6, 'Sergio', 'Rocha'),
(9, 'Cinaide', 'Rocha'),
(10, 'Severino', 'Rocha'),
(11, 'Evaneide', 'Rocha'),
(12, 'Matheus', 'Rocha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `cpf`, `email`, `endereco`) VALUES
(3, 'José Agamenon da Costa', '781.606.013-54', 'joseag@hotmail.com', 'Rua Otaviano , 34 - Recife / Pe'),
(4, 'Maria Eduarda de Souza ', '783.506.013-67', 'maried123@ig.com.br', 'Rua Manoel Bandeira Filho, 67 - Ibura / Pe  '),
(6, 'Suzana Vieira da Silva', '783.904.013-56', 'suzana234@gmail.com', 'Rua Sarapião, 78 - Bom Sucesso - Olinda - Pe '),
(7, 'Suzana Vieira da Silva', '783.904.013-56', 'suzana234@gmail.com', 'Rua Sarapião, 78 - Bom Sucesso - Olinda - Pe ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `codigo` int(10) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `valor` decimal(4,0) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`codigo`, `titulo`, `genero`, `valor`, `status`) VALUES
(1, 'Guerra  Nas Estrelas', 'ação', '54', 'locado'),
(3, 'Navio Negreiro', 'Ação', '34', 'Disponível'),
(4, 'A Odisséia', 'Ação', '45', 'Disponível'),
(6, 'O Último Guerreiro', 'Drama', '42', 'Disponível'),
(7, 'Guerreiro de Jedi', 'Ação', '45', 'Locado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

CREATE TABLE `locacao` (
  `codigo` int(11) NOT NULL,
  `dataLocacao` datetime NOT NULL,
  `dataDevolucao` datetime NOT NULL,
  `nomeFilme` varchar(45) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locacao`
--

INSERT INTO `locacao` (`codigo`, `dataLocacao`, `dataDevolucao`, `nomeFilme`, `nomeCliente`) VALUES
(6, '2016-10-05 00:00:00', '2016-10-10 00:00:00', 'O Último Guerreiro', 'Suzana Vieira da Silva'),
(7, '2016-10-05 00:00:00', '2016-10-11 00:00:00', 'Navio Negreiro', 'Maria Eduarda de Souza '),
(9, '2016-10-05 00:00:00', '2016-10-12 00:00:00', 'A Odisséia', 'José Agamenon da Costa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celiorocha`
--
ALTER TABLE `celiorocha`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celiorocha`
--
ALTER TABLE `celiorocha`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `locacao`
--
ALTER TABLE `locacao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
