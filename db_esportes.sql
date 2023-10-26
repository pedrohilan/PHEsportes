-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2018 às 03:14
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esportes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `pro_id` int(11) NOT NULL,
  `pro_nome` varchar(150) NOT NULL,
  `pro_preco` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`pro_id`, `pro_nome`, `pro_preco`) VALUES
(1, ' Nike air max', 'R$ 1200,0'),
(2, ' Air Max Nike', 'R$ 1200,00'),
(3, ' Max Air Nike', ' R$ 1200,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_email` varchar(150) NOT NULL,
  `usu_senha` varchar(150) NOT NULL,
  `usu_nome` varchar(150) NOT NULL,
  `usu_cidade` varchar(150) NOT NULL,
  `usu_estado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usu_id`, `usu_email`, `usu_senha`, `usu_nome`, `usu_cidade`, `usu_estado`) VALUES
(1, 'admin', 'admin', 'Admin', 'Admin', 'Admin'),
(2, 'test@test', 'test', 'Test', 'Test', 'AC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

CREATE TABLE `tb_venda` (
  `ven_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indexes for table `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD CONSTRAINT `tb_venda_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `tb_usuario` (`usu_id`),
  ADD CONSTRAINT `tb_venda_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `tb_produto` (`pro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
