-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Dez-2021 às 06:23
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancousuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(50) NOT NULL,
  `nome_user` varchar(70) NOT NULL,
  `data_nasc_user` date NOT NULL,
  `sexo_user` char(1) NOT NULL,
  `logradouro_user` varchar(50) NOT NULL,
  `numero_user` int(11) NOT NULL,
  `complemento_user` varchar(50) DEFAULT NULL,
  `bairro_user` varchar(50) NOT NULL,
  `cidade_user` varchar(50) NOT NULL,
  `UF_user` varchar(50) NOT NULL,
  `CEP_user` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`login`, `nome_user`, `data_nasc_user`, `sexo_user`, `logradouro_user`, `numero_user`, `complemento_user`, `bairro_user`, `cidade_user`, `UF_user`, `CEP_user`) VALUES
('usuario', 'Usuário Teste', '2001-01-01', 'M', 'Rua Fulano', 52, 'Casa', 'Jacarepaguá', 'Rio de Janeiro', 'Rio de Janeiro (RJ)', '21040500');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_acesso`
--

CREATE TABLE `usuario_acesso` (
  `login` varchar(50) NOT NULL,
  `senha_acesso` varchar(50) NOT NULL,
  `email_acesso` varchar(70) NOT NULL,
  `administrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_acesso`
--

INSERT INTO `usuario_acesso` (`login`, `senha_acesso`, `email_acesso`, `administrador`) VALUES
('master', 'master@123', 'master@gmail.com', 1),
('usuario', '123', 'usuario@gmail.com', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- Índices para tabela `usuario_acesso`
--
ALTER TABLE `usuario_acesso`
  ADD PRIMARY KEY (`login`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`login`) REFERENCES `usuario_acesso` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
