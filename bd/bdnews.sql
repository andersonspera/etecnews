-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/11/2022 às 00:58
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
(3, 'Esportes'),
(4, 'Música'),
(5, 'Entretenimento');

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
(6, 'Quase 90% das pessoas pesquisam celular na Black Friday, mostra estudo', '2022-11-11', 1, 'bbda48ee8b069192144ed54b3e1cac9a.webp', 'Quase nove em cada dez pessoas interessadas em fazer compras na Black Friday deste ano estão em busca de um celular. No entanto, faltando duas semanas para o evento de compras – agendado para 25 de novembro –, a maioria dos consumidores ainda não definiu a marca ou modelo que será adquirido. Os dados estão numa pesquisa encomendada pelo Google e realizada pela Offerwise. O TechTudo divulga o levantamento em primeira mão.\r\niPhones e telefones da Samsung aparecem em destaque na ferramenta Google Shopping. Foram os produtos que mais receberam cliques na semana de 29 de outubro a 4 de novembro.'),
(7, 'Samsung bate recorde em transmissão 5G; veja números', '2022-11-11', 1, '62a0050fb346b29e871b0d099232ff59.webp', 'A Samsung Networks, subsidiária de equipamentos de rede da fabricante sul-coreana, bateu recorde no desempenho de internet 5G. Foi registrada uma média de 1,75 Gb/s de velocidade de download em um campo de 10 km — feito jamais antes visto. O pico foi de 2,75 Gb/s para baixar arquivos. Os testes foram uma parceria da marca com a Australian NBN, empresa estatal australiana encarregada de projetar, construir e operar a rede nacional de banda larga do país.\r\nO alto desempenho foi possível usando uma conexão FWA (acesso fixo sem fio, na sigla em português), com aplicação para o padrão 5G mmWave, que usa ondas de rádio de alta frequência. Com o experimento, a Samsung quer provar que esse espectro pode ser usado não apenas para construir redes 5G de enorme capacidade em áreas urbanas, como também fornecer uma cobertura mais ampla para o FWA.'),
(8, 'Os 5 melhores filmes e séries para maratonar no fim de semana', '2022-11-11', 5, 'cb41a625ed8c2337bcab1ad15469398a.webp', 'Entre drama e comédia, documentários e reality show, este final de semana está recheado de lançamentos nos serviços de streaming. Na Netflix, os fãs de The Crown já podem assistir à quinta temporada da série inspirada na Família Real Britânica, enquanto os saudosistas têm o retorno de Linday Lohan em Uma Quedinha de Natal. Também chegou à HBO Max o celebrado filme Não Se Preocupe, Querida – com Harry Styles no elenco – e o documentário do golfista Tiger Woods. Já o Prime Video exibe o Savage X Fenty Show com participação de Anitta. Confira as dicas!'),
(9, 'Copa do Mundo: datas e horários dos jogos do Brasil até eventual final', '2022-11-11', 3, '4c9e3565977c4ade7a7f52ac1ef266c9.webp', 'Jogo de abertura\r\n\r\n20/11 (domingo), 13h - Catar x Equador (Al Bayt)\r\n\r\nJogos do Brasil pelo Grupo G\r\n\r\n24/11 (quinta-feira), 16h - Brasil x Sérvia (Lusail)\r\n\r\n28/11 (segunda-feira), 13h - Brasil x Suíça (Estádio 974)\r\n\r\n2/12 (sexta-feira), 16h - Camarões x Brasil (Lusail)\r\n\r\nOitavas de final\r\n\r\nOitavas 4\r\n\r\n5/12 (segunda-feira), 16h - 1º G x 2º H (Estádio 974)\r\n\r\nSe o Brasil tiver sido 1º do Grupo G\r\n\r\nOitavas 8\r\n\r\n6/12 (terça-feira), 16h - 1º H x 2º G (Lusail)\r\n\r\nSe o Brasil tiver sido 2º do Grupo G\r\n\r\n\r\nQuartas de final\r\n\r\nQuartas 2\r\n\r\n9/12 (sexta-feira), 12h - Oitavas 3 x Oitavas 4 (Cidade da Educação)\r\n\r\nSe Brasil se tiver sido 1º do Grupo G e tiver passado pelo duelo Oitavas 4\r\n\r\nQuartas 4\r\n\r\n10/12 (sábado), 12h - Oitavas 7 x Oitavas 8 (Al Thumama)\r\n\r\nSe Brasil se tiver sido 2º do Grupo G e tiver passado pelo duelo Oitavas 8\r\n\r\nSemifinais\r\n\r\nSemifinal 1\r\n\r\n13/12 (terça-feira), 16h - Quartas 1 x Quartas 2 (Lusail)\r\n\r\nSe Brasil tiver sido o 1º do Grupo G e passado pelo Quartas 2\r\n\r\nSemifinal 2\r\n\r\n14/12 (quarta-feira), 16h - Quartas 3 x Quartas 4 (Al Bayt)\r\n\r\nSe Brasil tiver sido 2º do Grupo G e passado pelo Quartas 4\r\n\r\nDecisão do terceiro lugar\r\n\r\n17/12 (sábado), 12h - Perdedor Semi 1 x Perdedor Semi 2 (Internacional Khalifa)\r\n\r\nSe Brasil tiver perdido o seu duelo na semifinal\r\n\r\nFinal\r\n\r\n18/12 (domingo), 12h - Ganhador Semi 1 x Ganhador Semi 2 (Lusail)\r\n');

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
  MODIFY `codnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
