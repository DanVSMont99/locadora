-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2018 às 20:57
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `telefone` int(13) NOT NULL,
  `celular` int(14) NOT NULL,
  `cidade` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `email`, `endereco`, `telefone`, `celular`, `cidade`) VALUES
(1, 'JoÃ£o', 'Carlos', 'joaocarlos97@gmail.com', 'Av. Rui Barbosa', 33234058, 996548726, 'Assis'),
(4, 'Sofia', 'Freitas', 'sofiamatt@hotmail.com', 'Rua AnastÃ¡cio Rocha', 33236581, 996528374, 'Assis'),
(5, 'Guilherme', 'Mazo', 'guimazo@gmail.com', 'Rua Nova', 33256285, 996548725, 'Assis'),
(6, 'Felipe', 'Gomes', 'gomesfelipe@gmail.com', 'Rua TabajÃ¡ra', 33264518, 997467284, 'ApuraÃ­ba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dvd`
--

CREATE TABLE `dvd` (
  `id` int(11) NOT NULL,
  `filme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dvd`
--

INSERT INTO `dvd` (`id`, `filme`) VALUES
(1, 1),
(3, 1),
(4, 6),
(8, 6),
(11, 6),
(5, 7),
(12, 7),
(6, 8),
(7, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `dvd` int(10) NOT NULL,
  `cliente` int(10) NOT NULL,
  `valor_emprestimo` float(5,2) NOT NULL,
  `valor_pago` float(5,2) NOT NULL,
  `dataa` date NOT NULL,
  `prazo_devolucao` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `situacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `ano` int(4) NOT NULL,
  `valor` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id`, `genero`, `titulo`, `ano`, `valor`) VALUES
(1, 1, 'A Volta dos que nÃ£o foram', 2016, 19.99),
(6, 2, 'Lula Ressurge', 2018, 13.00),
(7, 3, 'Fuga dos Petralhas', 2018, 13.00),
(8, 4, 'A ascensÃ£o do CapitÃ£o', 2018, 17.00),
(9, 5, 'Utopia de Marx', 2000, 13.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `descricao` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `descricao`) VALUES
(1, 'ComÃ©dia'),
(2, 'Terror'),
(3, 'AÃ§Ã£o'),
(4, 'Aventura'),
(5, 'FicÃ§Ã£o CientÃ­fica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE `situacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`id`, `descricao`) VALUES
(1, 'Concluído'),
(2, 'Pendente'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pwd`) VALUES
(1, 'danielvs', '79827863eaa9fbe7bab67f8cac748f39'),
(2, 'adminsystem', 'dc14511e97e7eb725fb2976bc939b375'),
(4, 'lider', '58862117b4b11ec47a0705a3eeb10344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filme_dvd` (`filme`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_emprestimo` (`cliente`),
  ADD KEY `dvd_emprestimo` (`dvd`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genero_filme` (`genero`) USING BTREE;

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situacao`
--
ALTER TABLE `situacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `situacao`
--
ALTER TABLE `situacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `dvd`
--
ALTER TABLE `dvd`
  ADD CONSTRAINT `filme_dvd` FOREIGN KEY (`filme`) REFERENCES `filme` (`id`);

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `cliente_emprestimo` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `dvd_emprestimo` FOREIGN KEY (`dvd`) REFERENCES `dvd` (`id`);

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `categoria_filme` FOREIGN KEY (`genero`) REFERENCES `genero` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
