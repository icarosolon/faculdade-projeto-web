-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2020 às 00:43
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `procode`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `codAluno` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `foto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`codAluno`, `nome`, `login`, `senha`, `sexo`, `rg`, `cpf`, `email`, `telefone`, `foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'masculino', '123456789', '987654321', 'admin@admin.com', '123', 'fotos/admin'),
(53, 'Ícaro Solon', 'solon', 'caf1a3dfb505ffed0d024130f58c5cfa', 'masculino', '1536774146', '05952337597', 'icarosolon@gmail.com', '74988170986', 'fotosPerfil/solon.jpg'),
(55, 'Valeria', '123', 'caf1a3dfb505ffed0d024130f58c5cfa', 'masculino', '159951', '05952364879', 'icaro@gmail.com', '9549549', 'fotosPerfil/123.png'),
(57, 'Francisco', 'aluno', 'caf1a3dfb505ffed0d024130f58c5cfa', 'masculino', '465821649', '123456', 'francisco@hotmail.com', '3123546', 'fotos/aluno.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunocurso`
--

CREATE TABLE `alunocurso` (
  `codAlunoCurso` int(4) NOT NULL,
  `codAluno` int(4) NOT NULL,
  `codCurso` int(4) NOT NULL,
  `notaAluno` float DEFAULT NULL,
  `certificado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunocurso`
--

INSERT INTO `alunocurso` (`codAlunoCurso`, `codAluno`, `codCurso`, `notaAluno`, `certificado`) VALUES
(283, 55, 6, NULL, NULL),
(284, 55, 7, NULL, NULL),
(291, 57, 7, NULL, NULL),
(293, 53, 6, NULL, NULL),
(294, 53, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `codAula` int(4) NOT NULL,
  `assunto` varchar(20) NOT NULL,
  `duracao` int(5) NOT NULL,
  `codCurso` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `codCurso` int(4) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`codCurso`, `nome`, `descricao`, `foto`) VALUES
(6, 'PHP', 'Curso completo para quem quer aprender a criar sites utilizando as tecnologias de HTML5 + CSS3 + JavaScript de uma maneira simples e objetiva. O professor Gustavo Guanabara vai mostrar passo-a-passo como criar um site completo utilizando as três principais tecnologias do momento.', 'fotosCurso/6.jpg'),
(7, 'Orientação à Objetos - Java', 'O Java é a Linguagem de Programação mais famosa do mundo. Atualmente, encontramos aplicativos Java rodando em computadores, smartphones, tablets, video-games e até mesmo em cartões de crédito e sondas espaciais da NASA. Nesse curso de Java grátis e completo, o professor Gustavo Guanabara vai mostrar como criar aplicativos que utilizem Java para rodar em Desktop. Será usado Java SE 8 com IDE NetBeans e os exemplos serão feitos usando a API Swing, que cria interfaces gráficas atraentes.', 'fotosCurso/7.jpg'),
(8, 'HTML 5', 'Curso completo para quem quer aprender a criar sites utilizando as tecnologias de HTML5 + CSS3 + JavaScript de uma maneira simples e objetiva. O professor Gustavo Guanabara vai mostrar passo-a-passo como criar um site completo utilizando as três principais tecnologias do momento.', 'fotosCurso/8.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`codAluno`);

--
-- Índices para tabela `alunocurso`
--
ALTER TABLE `alunocurso`
  ADD PRIMARY KEY (`codAlunoCurso`) USING BTREE,
  ADD UNIQUE KEY `un_alunocurso` (`codAluno`,`codCurso`),
  ADD KEY `FK_codCurso1` (`codCurso`) USING BTREE,
  ADD KEY `FK_codAluno` (`codAluno`) USING BTREE;

--
-- Índices para tabela `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`codAula`),
  ADD KEY `FK_codCurso` (`codCurso`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codCurso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `codAluno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `alunocurso`
--
ALTER TABLE `alunocurso`
  MODIFY `codAlunoCurso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `codCurso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunocurso`
--
ALTER TABLE `alunocurso`
  ADD CONSTRAINT `FK_codAluno` FOREIGN KEY (`codAluno`) REFERENCES `aluno` (`codAluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_codCurso1` FOREIGN KEY (`codCurso`) REFERENCES `curso` (`codCurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `FK_codCurso` FOREIGN KEY (`codCurso`) REFERENCES `curso` (`codCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
