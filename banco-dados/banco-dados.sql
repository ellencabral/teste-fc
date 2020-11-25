-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24-Nov-2020 às 21:32
-- Versão do servidor: 8.0.22
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_fc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id` int NOT NULL,
  `id_medico` int NOT NULL,
  `data_horario` datetime DEFAULT NULL,
  `horario_agendado` tinyint(1) DEFAULT '0',
  `data_criacao` timestamp NULL DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id`, `id_medico`, `data_horario`, `horario_agendado`, `data_criacao`, `data_alteracao`) VALUES
(62, 12, '2020-11-16 07:00:00', 1, '2020-11-24 10:51:22', '2020-11-24 11:21:46'),
(63, 12, '2020-11-16 08:00:00', 0, '2020-11-24 10:51:32', '2020-11-24 10:51:32'),
(64, 12, '2020-11-16 09:00:00', 0, '2020-11-24 10:51:42', '2020-11-24 10:51:42'),
(65, 12, '2020-11-16 10:00:00', 0, '2020-11-24 10:51:55', '2020-11-24 10:51:55'),
(66, 12, '2020-11-16 11:00:00', 0, '2020-11-24 10:52:04', '2020-11-24 10:52:04'),
(67, 12, '2020-11-16 14:00:00', 0, '2020-11-24 10:52:12', '2020-11-24 10:52:12'),
(68, 12, '2020-11-17 14:00:00', 0, '2020-11-24 10:52:23', '2020-11-24 10:52:23'),
(69, 12, '2020-11-17 15:00:00', 0, '2020-11-24 10:52:33', '2020-11-24 10:52:33'),
(70, 12, '2020-11-18 08:00:00', 0, '2020-11-24 10:52:45', '2020-11-24 10:52:45'),
(71, 12, '2020-11-18 09:00:00', 0, '2020-11-24 10:52:56', '2020-11-24 10:52:56'),
(72, 12, '2020-11-18 10:00:00', 0, '2020-11-24 10:53:04', '2020-11-24 10:53:04'),
(73, 12, '2020-11-19 07:00:00', 0, '2020-11-24 10:53:20', '2020-11-24 10:53:20'),
(74, 13, '2020-11-16 07:30:00', 1, '2020-11-24 10:55:40', '2020-11-24 11:24:31'),
(75, 13, '2020-11-16 08:30:00', 0, '2020-11-24 10:55:53', '2020-11-24 10:55:53'),
(76, 13, '2020-11-16 09:30:00', 0, '2020-11-24 10:56:08', '2020-11-24 10:56:08'),
(77, 13, '2020-11-16 10:30:00', 0, '2020-11-24 10:56:19', '2020-11-24 10:56:19'),
(78, 13, '2020-11-16 11:30:00', 0, '2020-11-24 10:56:23', '2020-11-24 10:56:23'),
(79, 13, '2020-11-16 14:30:00', 0, '2020-11-24 10:56:35', '2020-11-24 10:56:35'),
(80, 13, '2020-11-17 14:30:00', 0, '2020-11-24 10:56:44', '2020-11-24 10:56:44'),
(81, 13, '2020-11-17 15:30:00', 0, '2020-11-24 10:56:54', '2020-11-24 10:56:54'),
(82, 13, '2020-11-18 08:30:00', 0, '2020-11-24 10:57:11', '2020-11-24 10:57:11'),
(83, 13, '2020-11-18 09:30:00', 0, '2020-11-24 10:58:24', '2020-11-24 10:58:24'),
(84, 13, '2020-11-18 10:30:00', 0, '2020-11-24 10:59:00', '2020-11-24 10:59:00'),
(85, 13, '2020-11-19 07:30:00', 0, '2020-11-24 10:59:09', '2020-11-24 10:59:09'),
(86, 14, '2020-12-10 10:00:00', 1, '2020-11-24 11:22:31', '2020-11-24 22:39:10'),
(87, 14, '2020-12-11 10:00:00', 0, '2020-11-24 11:22:41', '2020-11-24 11:22:41'),
(88, 14, '2020-12-12 10:00:00', 0, '2020-11-24 11:22:48', '2020-11-24 11:22:48'),
(89, 15, '2020-12-10 15:00:00', 1, '2020-11-24 11:23:18', '2020-11-25 00:16:45'),
(90, 15, '2020-12-15 13:00:00', 0, '2020-11-24 11:23:25', '2020-11-24 11:23:25'),
(91, 16, '2020-12-13 14:00:00', 0, '2020-11-24 11:23:50', '2020-11-24 11:23:50'),
(92, 16, '2020-12-13 14:30:00', 0, '2020-11-24 11:24:01', '2020-11-24 11:24:01'),
(93, 16, '2020-12-13 15:00:00', 0, '2020-11-24 11:24:06', '2020-11-24 11:24:06'),
(94, 16, '2020-12-13 16:00:00', 0, '2020-11-24 11:24:09', '2020-11-24 11:24:09'),
(96, 15, '2020-12-10 10:00:00', 1, '2020-11-25 00:15:24', '2020-11-25 00:16:38'),
(97, 15, '2020-12-10 11:00:00', 1, '2020-11-25 00:16:11', '2020-11-25 00:16:33'),
(99, 12, '2020-12-20 08:00:00', 0, '2020-11-25 00:21:00', '2020-11-25 00:21:00'),
(100, 13, '2020-12-03 08:00:00', 1, '2020-11-25 00:24:44', '2020-11-25 00:27:43'),
(101, 13, '2020-12-27 08:00:00', 0, '2020-11-25 00:28:48', '2020-11-25 00:28:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_criacao` timestamp NULL DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `email`, `nome`, `senha`, `data_criacao`, `data_alteracao`) VALUES
(12, 'joao@dominio.com.br', 'Dr. João Augusto de Alcântara', 'e959088c6049f1104c84c9bde5560a13', '2020-11-24 10:50:44', '2020-11-24 22:37:37'),
(13, 'simone@dominio.com.br', 'Dra. Simone da Silva', 'e959088c6049f1104c84c9bde5560a13', '2020-11-24 10:55:11', '2020-11-24 10:55:11'),
(14, 'ricardo@dominio.com.br', 'Dr. Ricardo', 'e959088c6049f1104c84c9bde5560a13', '2020-11-24 11:22:21', '2020-11-24 11:22:21'),
(15, 'fernanda@dominio.com.br', 'Dra. Fernanda', 'e959088c6049f1104c84c9bde5560a13', '2020-11-24 11:23:08', '2020-11-24 11:23:08'),
(16, 'marcelo@dominio.com.br', 'Dr. Marcelo', 'e959088c6049f1104c84c9bde5560a13', '2020-11-24 11:23:40', '2020-11-24 11:23:40');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;