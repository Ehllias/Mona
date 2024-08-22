-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/06/2024 às 16:41
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mona`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `icones_bootstrap`
--

CREATE TABLE `icones_bootstrap` (
  `categoria` varchar(80) NOT NULL,
  `classe_icone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `icones_bootstrap`
--

INSERT INTO `icones_bootstrap` (`categoria`, `classe_icone`) VALUES
('Energia renovável', 'bi-sun'),
('Vida sustentável', 'bi-recycle'),
('Poluição zero', 'bi-x-circle');

-- --------------------------------------------------------

--
-- Estrutura para tabela `topicos`
--

CREATE TABLE `topicos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `categoria` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `topicos`
--

INSERT INTO `topicos` (`titulo`, `icone`, `categoria`) VALUES
('Consumo de Água', 'fas fa-tint', 'Uso Consciente de Recursos'),
('Educação Ambiental', 'fas fa-graduation-cap', 'Sustentabilidade na Educação'),
('Energia Eólica', 'fas fa-wind', 'Energias Renováveis'),
('Bioconstrução', 'fas fa-home', 'Construção e Moradia Sustentável'),
('Compostagem', 'fas fa-leaf', 'Gestão de Resíduos Orgânicos'),
('Transporte Coletivo', 'fas fa-bus', 'Mobilidade Urbana'),
('Alimentação Saudável', 'fas fa-apple-alt', 'Alimentação e Saúde'),
('Produtos Biodegradáveis', 'fas fa-shopping-bag', 'Consumo Responsável'),
('Preservação de Espécies', 'fas fa-paw', 'Biodiversidade'),
('Poluição do Ar', 'fas fa-smog', 'Problemas Ambientais'),
('Economia Circular', 'fas fa-recycle', 'Modelos Econômicos Sustentáveis'),
('Turismo Sustentável', 'fas fa-plane', 'Turismo e Conservação'),
('Moda Sustentável', 'fas fa-tshirt', 'Indústria da Moda'),
('Tecnologias Limpas', 'fas fa-bolt', 'Inovação e Tecnologia'),
('Hortas Urbanas', 'fas fa-carrot', 'Agricultura Urbana'),
('Desmatamento', 'fas fa-tree', 'Impactos Ambientais'),
('Educação para o Consumo', 'fas fa-shopping-cart', 'Conscientização e Práticas'),
('Gestão de Águas Pluviais', 'fas fa-water', 'Manejo de Recursos Hídricos'),
('Eficiência Energética', 'fas fa-lightbulb', 'Otimização de Energia'),
('Direito Ambiental', 'fas fa-balance-scale', 'Legislação e Política Ambiental'),
('asdad', 'fas fa-recycle', 'Produtos ecológicos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'João Luiz Marçal', 'jluizpassa@gmail.com', 'jluiz33', '$2y$10$mq2PfO.T4eg6rkDIjKUR7e/I/u7MBSfALMXqu4n1qdOnESkbOt/mq'),
(17, 'teste', 'test@tes', 'tes', '$2y$10$x752jRMEiPpGuiZZMcjwx.DseT639/nU.wqF4g/9X3ZfCjXf4vRJm'),
(18, 'teste', 'sddfg@sdf', 'teste123', '$2y$10$KZNEk9o4/iE/LFKUFwk.7u.TWy5.YIw5fOdTAN27JzqZAc4Fcycvq'),
(19, 'carlos', 'carlo@kkasd.com', 'carlos', '$2y$10$dzM4dabI10GLBYin8YhvUOen9WcOrNqqShZhFsSScxcc/.4cJFQrS'),
(20, 'joao', 'gg@gmasd.com', 'jluiz333', '$2y$10$/.4mBY74ciUDYemYOIgh2.KFUkMJDAtiqvcZuBFoPwRzHTUkZO0wu'),
(21, 'Hamilton', 'hamilton@gmail.com', 'ha', '$2y$10$RktFfnrnXac7XlgNpyYzrO3sESTsMgqvHNKTd3xjcGiVFQCzUciJ6');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `topicos`
--
ALTER TABLE `topicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `topicos`
--
ALTER TABLE `topicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
