-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Mar-2020 às 03:10
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nrtelefonia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id` int(11) NOT NULL,
  `colaborador` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `codsetor` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `setor` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `imeiaparelho` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `aparelho` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ndeserie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `tipodefeito` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `situacaoaparelho` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ndalinha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `imeichip` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `qtddados` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `qtdminutos` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `compartilhado` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `situacaodalinha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `datadecriacao` datetime DEFAULT NULL,
  `termo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(220) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id`, `colaborador`, `matricula`, `codsetor`, `setor`, `funcao`, `imeiaparelho`, `aparelho`, `modelo`, `ndeserie`, `tipodefeito`, `situacaoaparelho`, `ndalinha`, `imeichip`, `qtddados`, `qtdminutos`, `compartilhado`, `situacaodalinha`, `endereco`, `cidade`, `cep`, `estado`, `datadecriacao`, `termo`, `valor`) VALUES
(1, 'Erick Citero Cerqueira', '01115807', '0001.0001', 'Informática', 'Técnico de TI', '0123456789', 'Smartphone', 'iPhone', '0123456789', 'Não há', 'Em uso', '21981889544', '0123456789', '20GB', '01', 'Não', 'Ativa', 'Rua Leonor, 53', 'Mesquita', '26570-280', 'Rio de Janeiro', '2020-01-27 22:41:29', '', '55,00'),
(25, 'Alan Borim', '12345678', '0001.0001', 'Informática', 'Técnico de TI', '0123456789', 'Aparelho Comum', 'Pixi 3', '0123456789', 'Não há', 'Em uso', '21981889544', '0123456789', '20GB', 'Ilimitado', 'Não', 'Ativa', 'Rua Leonor, 53', 'Mesquita', '26570-280', 'Rio de Janeiro', '2020-01-28 22:54:33', '', '50,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `acesso` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `criadoem` datetime DEFAULT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`, `matricula`, `cargo`, `acesso`, `criadoem`, `nome`) VALUES
(1, 'Erick', 'erick.cerqueira@novario.com.br', '$2y$10$NaM37galCb2MmIbwKMxGFO5Ce1/0jQ/uZy89gEDLu/iyTjcZkdofm', '01115807', 'Técnico de TI V', 'Administrador', '2020-01-27 13:21:37', 'Erick Cerqueira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vivoboxs`
--

CREATE TABLE `vivoboxs` (
  `id` int(11) NOT NULL,
  `colaborador` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `codsetor` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `setor` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `tipoequipamento` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ndeserie` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `tipodefeito` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `situacaoaparelho` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ndalinha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `imeichip` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `qtddados` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `qtdminutos` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `compartilhado` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `situacaodalinha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `termo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `criadoem` datetime DEFAULT NULL,
  `valor` varchar(220) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vivoboxs`
--

INSERT INTO `vivoboxs` (`id`, `colaborador`, `matricula`, `codsetor`, `setor`, `funcao`, `tipoequipamento`, `modelo`, `ndeserie`, `tipodefeito`, `situacaoaparelho`, `ndalinha`, `imeichip`, `qtddados`, `qtdminutos`, `compartilhado`, `situacaodalinha`, `endereco`, `cidade`, `cep`, `estado`, `termo`, `criadoem`, `valor`) VALUES
(1, 'Erick Cerqueira', '01115807', '0001.0001', 'Informática', 'Técnico de TI', 'Roteador 3G/4G - Vivo Box', 'MAXIS B660', '0123456789', 'Não há', 'Em uso', '21981889544', '0123456789', '20', 'Ilimitado', 'Não', 'Ativa', 'Rua Leonor, 53', 'Mesquita', '26570-280', 'Rio de Janeiro', '', '2020-01-28 00:01:04', 'R$118,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id`,`matricula`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vivoboxs`
--
ALTER TABLE `vivoboxs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `vivoboxs`
--
ALTER TABLE `vivoboxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
