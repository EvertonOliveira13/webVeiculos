-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2019 às 03:06
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `codigovei` int(11) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `descricao` text NOT NULL,
  `portas` int(2) NOT NULL,
  `ano_fab` char(4) NOT NULL,
  `ano_mod` char(4) NOT NULL,
  `cor` varchar(40) NOT NULL,
  `km` double NOT NULL,
  `placa` text NOT NULL,
  `valor` double NOT NULL,
  `obs` text NOT NULL,
  `dtinclu` date NOT NULL,
  `ativo` text NOT NULL,
  `fotonome1` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`codigovei`, `modelo`, `marca`, `descricao`, `portas`, `ano_fab`, `ano_mod`, `cor`, `km`, `placa`, `valor`, `obs`, `dtinclu`, `ativo`, `fotonome1`) VALUES
(1, 'Agera r', 'koenigsegg', 'top', 2, '2015', '2015', 'branco', 0, 'emeu', 250000000, 'sadz\\fyhg', '2019-06-12', '1', 'img/agera r.jpg'),
(2, 'jesko', 'koenigsegg', 'top', 2, '2018', '2019', 'branco', 0, 'emeu', 4000000, 'szdfha\\', '2019-06-12', '1', 'img/JESKO.jpg'),
(3, 'regera', 'koenigsegg', 'top', 2, '2018', '2019', 'Vermelho', 0, 'emeu', 3000000, 'zdfghaf \\sd', '2019-06-12', '1', 'img/regera.jpg'),
(4, 'One 1', 'koenigsegg', 'top', 2, '2018', '2018', 'prata', 0, 'emeu', 2700000, '\\sdabg g', '2019-06-12', '1', 'img/one 1.jpg'),
(5, 'trevita', 'koenigsegg', 'top', 2, '2015', '2015', 'branco', 20000, 'emeu', 1500000, 'sfghs shdfhg', '2019-06-12', '0', 'img/trevita.jpg'),
(6, 'ccx', 'koenigsegg', 'top', 2, '2012', '2012', 'prata', 35000, 'emeu', 1500000, 'seryadfg', '2019-06-12', '0', 'img/ccx.jpg'),
(7, 'veyron', 'Bugatti', 'top', 2, '2018', '2018', 'Vermelho', 0, 'emeu', 4000000, 'sfgjhsf', '2019-06-12', '1', 'img/veyron.jpg'),
(8, 'chiron', 'Bugatti', 'top', 2, '2018', '2019', 'preto', 0, 'emeu', 5000000, 'nao vale esse preÃ§o', '2019-06-12', '1', 'img/chiron.jpg'),
(9, 'divo', 'Bugatti', 'top', 2, '2019', '2020', 'preto', 0, 'emeu', 49000000, 'muito caro e nao vale o preÃ§o por ser um bugatti koenigsegg e melhor', '2019-06-12', '0', 'img/divo.jpg'),
(10, '918 spyder', 'porscher', 'top', 2, '2018', '2019', 'branco', 0, 'emeu', 3000000, 'dfjkhgls', '2019-06-12', '1', 'img/918 spyder.jpg'),
(11, '911', 'porscher', 'top', 2, '2015', '2016', 'prata', 25000, 'emeu', 1200000, 'artgasdstfgser', '2019-06-12', '1', 'img/911.jpg'),
(12, 'p1', 'Mclaren', 'top', 2, '2018', '2019', 'laranja', 0, 'emeu', 2500000, 'zdfhz', '2019-06-12', '1', 'img/p1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`codigovei`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `codigovei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
