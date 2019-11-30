-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30-Nov-2019 às 22:45
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhamento`
--

DROP TABLE IF EXISTS `acompanhamento`;
CREATE TABLE `acompanhamento` (
  `idAcompanhamento` int(11) NOT NULL,
  `idMedico` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `dataAcompanhamento` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diabetes`
--

DROP TABLE IF EXISTS `diabetes`;
CREATE TABLE `diabetes` (
  `idDiabete` int(11) NOT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `valorMedido` varchar(10) NOT NULL,
  `dataInsersao` timestamp NOT NULL DEFAULT current_timestamp(),
  `dataMedicao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `logId` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `acao` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE `medico` (
  `idUsuario` int(11) NOT NULL,
  `crm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE `paciente` (
  `idUsuario` int(11) NOT NULL,
  `cpfPaciente` varchar(14) NOT NULL,
  `dataNascimento` date NOT NULL,
  `tipoDiabete` int(11) DEFAULT NULL,
  `hipertenso` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pressao`
--

DROP TABLE IF EXISTS `pressao`;
CREATE TABLE `pressao` (
  `idPressao` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `valorSistolico` varchar(5) NOT NULL,
  `valorDiastolico` varchar(5) NOT NULL,
  `dataMedicao` timestamp NOT NULL DEFAULT current_timestamp(),
  `dataInsersao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposdiabetes`
--

DROP TABLE IF EXISTS `tiposdiabetes`;
CREATE TABLE `tiposdiabetes` (
  `idDiabetes` int(11) NOT NULL,
  `tipoDiabete` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tiposdiabetes`
--

INSERT INTO `tiposdiabetes` (`idDiabetes`, `tipoDiabete`) VALUES
(1, 'tipo 1'),
(2, 'tipo 2'),
(3, 'gestacional'),
(4, 'sem diabetes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dataInscricao` timestamp NOT NULL DEFAULT current_timestamp(),
  `sexo` char(1) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Acionadores `usuario`
--
DROP TRIGGER IF EXISTS `trgupdate_log`;
DELIMITER $$
CREATE TRIGGER `trgupdate_log` AFTER INSERT ON `usuario` FOR EACH ROW BEGIN
    insert into logs (acao, tipo) value (concat('Foi inserio um novo usuario com o nome de: ' , NEW.nome , 'e id: ' , NEW.idUsuario) , 'insert');
END
$$
DELIMITER ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acompanhamento`
--
ALTER TABLE `acompanhamento`
  ADD PRIMARY KEY (`idAcompanhamento`),
  ADD KEY `fk_medico_acom` (`idMedico`),
  ADD KEY `fk_paciente_acom` (`idPaciente`);

--
-- Índices para tabela `diabetes`
--
ALTER TABLE `diabetes`
  ADD PRIMARY KEY (`idDiabete`),
  ADD KEY `fk_diabetes_paciente` (`idPaciente`);

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logId`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idUsuario`,`crm`),
  ADD UNIQUE KEY `crm` (`crm`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idUsuario`,`cpfPaciente`),
  ADD UNIQUE KEY `paciente_cpfPaciente_uindex` (`cpfPaciente`),
  ADD KEY `fk_tipo_diabete` (`tipoDiabete`);

--
-- Índices para tabela `pressao`
--
ALTER TABLE `pressao`
  ADD PRIMARY KEY (`idPressao`),
  ADD KEY `fk_pressao_paciente` (`idPaciente`);

--
-- Índices para tabela `tiposdiabetes`
--
ALTER TABLE `tiposdiabetes`
  ADD PRIMARY KEY (`idDiabetes`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario_email_uindex` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acompanhamento`
--
ALTER TABLE `acompanhamento`
  MODIFY `idAcompanhamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `diabetes`
--
ALTER TABLE `diabetes`
  MODIFY `idDiabete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pressao`
--
ALTER TABLE `pressao`
  MODIFY `idPressao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tiposdiabetes`
--
ALTER TABLE `tiposdiabetes`
  MODIFY `idDiabetes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acompanhamento`
--
ALTER TABLE `acompanhamento`
  ADD CONSTRAINT `fk_medico_acom` FOREIGN KEY (`idMedico`) REFERENCES `medico` (`idUsuario`),
  ADD CONSTRAINT `fk_paciente_acom` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`idUsuario`);

--
-- Limitadores para a tabela `diabetes`
--
ALTER TABLE `diabetes`
  ADD CONSTRAINT `fk_diabetes_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`idUsuario`);

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `fk_tipo_diabete` FOREIGN KEY (`tipoDiabete`) REFERENCES `tiposdiabetes` (`idDiabetes`);

--
-- Limitadores para a tabela `pressao`
--
ALTER TABLE `pressao`
  ADD CONSTRAINT `fk_pressao_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`idUsuario`);
COMMIT;
