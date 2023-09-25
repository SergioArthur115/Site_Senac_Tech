-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2023 às 15:45
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inf4m212senactech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_faleConosco` int(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_faleConosco`, `nome`, `telefone`, `estado`, `cidade`, `email`, `senha`, `cpf`) VALUES
(1, 'Mario', '40028922', 'Acre', 'aguasanta', 'Mario@gmail.com', 'mario-123', '12345678910');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `id_cad` int(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `modalidade` varchar(20) NOT NULL,
  `assunto` varchar(20) NOT NULL,
  `mensagem` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id_cad`, `nome`, `estado`, `cidade`, `email`, `telefone`, `modalidade`, `assunto`, `mensagem`, `cpf`) VALUES
(1, 'Sérgio Arthur', 'Rio Grande do Sul', 'poa', 'sergioarthur@gmail.c', '998816767', 'cp', 'elo', 'muito bom', '02978357002');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_faleConosco`);

--
-- Índices para tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`id_cad`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_faleConosco` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `id_cad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
