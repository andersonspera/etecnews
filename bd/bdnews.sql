-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/11/2022 às 00:53
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdnews`
--
CREATE DATABASE IF NOT EXISTS `bdnews` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdnews`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `codcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`codcategoria`, `nomecategoria`) VALUES
(1, 'Tecnologia'),
(3, 'Roupas'),
(4, 'Instrumentos Musicais'),
(5, 'Lazer'),
(6, 'Casa teste'),
(7, 'teste'),
(8, 'Nova Categoria');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `codnoticia` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `codcategoria` int(11) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`codnoticia`, `titulo`, `data`, `codcategoria`, `imagem`, `conteudo`) VALUES
(1, '', '2022-11-03', 1, '', 'teste'),
(2, '', '2022-11-04', 1, 'imagem1.jpeg', 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `senha`, `acesso`) VALUES
(3, 'Anderson Wait', 'andersonspera@gmail.com', '$2y$10$qVDNmz8uLmsvTBJxSHFMGenFBRCCHOXOCjXvxzKnwjxfe5anUaKwa', 1),
(5, 'Usuário Teste', 'teste@teste.com', '$2y$10$PPHYUpAzNwgl9XSxJE.yPeOhoAA2N1ktkp3IY5T72nZpNrD8bp.tO', 2),
(7, 'Testando', 'testando@gmail.com', '$2y$10$wklEjsFLK/JXhul6cYVKV.mare.urG/iESu9x00gEQkaLA3g6kWhW', 1),
(8, 'Testando da Silva', 'testando@gmail.com', '$2y$10$NxchM2O7SmC6b7pfrwthX.oCDXUwgL7JCxCt8pFJEGP50KYtGE3yC', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codcategoria`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`codnoticia`),
  ADD KEY `codcategoria` (`codcategoria`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `codnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fkcategoria` FOREIGN KEY (`codcategoria`) REFERENCES `categoria` (`codcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
