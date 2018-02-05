-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 03:54 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_consulta`
--

CREATE TABLE `tb_consulta` (
  `Nome_pac` varchar(150) NOT NULL,
  `Espec_med` varchar(150) NOT NULL,
  `Nome_med` varchar(150) NOT NULL,
  `crm_med` varchar(150) NOT NULL,
  `data_consul` date NOT NULL,
  `hora_consul` time NOT NULL,
  `num_consultorio` int(11) NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_consulta`
--

INSERT INTO `tb_consulta` (`Nome_pac`, `Espec_med`, `Nome_med`, `crm_med`, `data_consul`, `hora_consul`, `num_consultorio`, `cpf`) VALUES
('Jose', 'Clinico Geral', 'admin', '123456', '0000-00-00', '00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_consultorio`
--

CREATE TABLE `tb_consultorio` (
  `Num_consul` int(11) NOT NULL,
  `Nome_consul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_consultorio`
--

INSERT INTO `tb_consultorio` (`Num_consul`, `Nome_consul`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `nome_usu` varchar(150) NOT NULL,
  `email_usu` varchar(150) NOT NULL,
  `senha_usu` varchar(150) NOT NULL,
  `crm_usu` varchar(150) NOT NULL,
  `idade_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`nome_usu`, `email_usu`, `senha_usu`, `crm_usu`, `idade_usu`) VALUES
('admin', 'admin', 'admin', '123456', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `tb_consultorio`
--
ALTER TABLE `tb_consultorio`
  ADD PRIMARY KEY (`Num_consul`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`crm_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
