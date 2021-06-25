-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2021 às 02:37
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto-eletiva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `ID_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(50) NOT NULL,
  `dataNascimento_aluno` date NOT NULL,
  `numero_aluno` int(11) NOT NULL,
  `ID_turma_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`ID_aluno`, `nome_aluno`, `dataNascimento_aluno`, `numero_aluno`, `ID_turma_FK`) VALUES
(1, 'José Henrique Ioki Yamaoki', '2004-04-17', 20, 8),
(2, 'Kauã Felipe Alves', '2004-06-20', 24, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `ID_escola` int(11) NOT NULL,
  `img_escola` varchar(100) NOT NULL,
  `nome_escola` varchar(50) NOT NULL,
  `ID_professor_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`ID_escola`, `img_escola`, `nome_escola`, `ID_professor_FK`) VALUES
(1, '60d3a06d9ce94.jpg', 'Licolina', 1),
(5, '60d4cd9ded559.jpeg', 'José Candido', 3),
(6, '60d3a188e107f.jpg', 'Manoel Bento da Cruz', 3),
(7, '60d3a344c65ae.jpg', 'ETEC', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `ID_professor` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`ID_professor`, `usuario`, `senha`) VALUES
(1, 'Francisco', 'francisco123'),
(2, 'Flávio', 'flavio123'),
(3, 'Carlos', 'carlos123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `ID_turma` int(11) NOT NULL,
  `nome_turma` varchar(50) NOT NULL,
  `ID_escola_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`ID_turma`, `nome_turma`, `ID_escola_FK`) VALUES
(4, '7°B - Manhã', 6),
(5, '8°E - Noite', 6),
(6, '8°B', 6),
(7, '8°B', 6),
(8, '1°C Ensino Médio - Tarde', 7),
(9, '1°C Ensino Médio - Tarde', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`ID_aluno`),
  ADD KEY `ID_turma_FK` (`ID_turma_FK`);

--
-- Índices para tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`ID_escola`),
  ADD KEY `ID_professor_FK` (`ID_professor_FK`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`ID_professor`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`ID_turma`),
  ADD KEY `ID_escola_FK` (`ID_escola_FK`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `ID_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `ID_escola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `ID_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `ID_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`ID_turma_FK`) REFERENCES `turmas` (`ID_turma`);

--
-- Limitadores para a tabela `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `escolas_ibfk_1` FOREIGN KEY (`ID_professor_FK`) REFERENCES `professores` (`ID_professor`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`ID_escola_FK`) REFERENCES `escolas` (`ID_escola`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
