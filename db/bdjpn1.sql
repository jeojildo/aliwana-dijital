-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 02:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdjpn1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosente`
--

CREATE TABLE `dosente` (
  `iddosente` int(6) NOT NULL,
  `narandosente` varchar(50) NOT NULL,
  `edukasaun` varchar(12) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dosente`
--

INSERT INTO `dosente` (`iddosente`, `narandosente`, `edukasaun`, `email`) VALUES
(170301, 'Jeri Wahu', 'Maestrado', 'wahupere@gmail.com'),
(170302, 'Bazilio', 'Lisensiatura', 'bazi@gmail.com'),
(170303, 'Aderito Malai', 'Lisensiatura', 'ade@gmail.com'),
(170304, 'Helio Waru', 'Maestrado', 'helio@gmail.com'),
(170305, 'Juve Cou', 'Maestrado', 'coulari@gmail.com'),
(170306, 'JP Padu', 'Lisensiatura', 'jp@gmail.com'),
(170307, 'Anselmo ', 'Lisensiatura', 'anse@yahoo.com'),
(170308, 'Erne Coudai', 'Lisensiatura', 'coudai@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `estudante`
--

CREATE TABLE `estudante` (
  `nie` int(6) NOT NULL,
  `naranestudante` varchar(50) NOT NULL,
  `jeneru` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `estudante`
--

INSERT INTO `estudante` (`nie`, `naranestudante`, `jeneru`) VALUES
(170101, 'Inelsia Paja', 'Feto'),
(170102, 'Dominica Dura', 'Feto'),
(170103, 'Belvania Latu', 'Feto'),
(170104, 'Ce Lena ', 'Feto'),
(170105, 'Dani Roumalai', 'Mane'),
(170106, 'Isa Key', 'Feto'),
(170201, 'Elizio Jetity', 'Mane'),
(170202, 'Nata Pajatiti', 'Feto'),
(170203, 'Delicia Lalu', 'Feto'),
(170204, 'Elizabeth Casalina', 'Feto'),
(170205, 'Vindi Noy ', 'Feto'),
(170206, 'Key Malai ', 'Feto');

-- --------------------------------------------------------

--
-- Table structure for table `monografia`
--

CREATE TABLE `monografia` (
  `nie` int(6) NOT NULL,
  `iddosente_1` int(6) NOT NULL,
  `iddosente_2` int(6) NOT NULL,
  `departementu` varchar(25) NOT NULL,
  `tinan` int(4) NOT NULL,
  `titulu` text NOT NULL,
  `abstratu` text NOT NULL,
  `abstratud` varchar(50) NOT NULL,
  `liafuanxave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monografia`
--

INSERT INTO `monografia` (`nie`, `iddosente_1`, `iddosente_2`, `departementu`, `tinan`, `titulu`, `abstratu`, `abstratud`, `liafuanxave`) VALUES
(170201, 170302, 170305, 'Sistema Informasaun', 2017, 'INTEGRATED SYSTEM JPN MEDIA COLLEGE UTILIZA LARAVEL NO MARIADB', 'Ezemplu Abstratu Ezemplu Abstratu Ezemplu Abstratu Ezemplu Abstratu Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu\r\n Ezemplu Abstratu ', 'Abstratu_Jetity_1587201436.pdf', 'Integrated System, Laravel, JPN Media, MariaDB'),
(170206, 170303, 170307, 'Sistema Informasaun', 2017, 'SISTEMA INFORMASAUN STAFF JPN MEDIA COLLEGE', 'Ezemplu Abstratu Ezemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\n', 'Abstratu_Keymalai_1587201709.pdf', 'Staff, Sistema Informasaun'),
(170203, 170304, 170306, 'Sistema Informasaun', 2017, 'SISTEMA PAYMENT JPN MEDIA COLLEGE UTILIZA PHP NO MYSQL', 'Ezemplu Abstratu \r\nEzemplu Abstratu\r\nEzemplu Abstratu\r\nEzemplu Abstratu', 'Abstratu_Lalu_1587201853.pdf', 'Payment, PHP , MySQL'),
(170105, 170307, 170303, 'Jestaun Komputador', 2017, 'E-LEARNING JPN MEDIA COLLEGE UTILIZA FRAMEWORK DJANGO NO ORACLE', 'Ezemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu ', 'Abstratu_Roumalai_1587201931.pdf', 'E-learning, Django, Oracle'),
(170101, 170301, 170308, 'Jestaun Komputador', 2017, 'SISTEMA EXAME IHA JPN MEDIA COLLEGE UTILIZA LARAVEL NO MARIADB', 'Ezemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu  ', 'Abstratu_Inelsia_1587202432.pdf', 'Exame, Laravel, JPN Media, MariaDB'),
(170103, 170304, 170308, 'Jestaun Komputador', 2017, 'SISTEMA INFORMASAUN AKADEMIKU JPN MEDIA COLLEGE UTILIZA LARAVEL NO MARIADB', 'Ezemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\nEzemplu Abstratu \r\n', 'Abstratu_Latu_1587453327.pdf', 'Laravel, MariaDB');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `naran_utilizador` varchar(50) NOT NULL,
  `xave_utilizador` varchar(50) NOT NULL,
  `naran` varchar(50) NOT NULL,
  `deskrisaun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`naran_utilizador`, `xave_utilizador`, `naran`, `deskrisaun`) VALUES
('bdjpnadmin', 'c74cfe9c0dcf1777541fba01761512e1', 'Administrator', 'Hau nudar Administrator Biblioteka Digitais JPN College'),
('bdjpnadmin1', 'e5725f39d01fa5f28ba51b8b38ee9a12', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosente`
--
ALTER TABLE `dosente`
  ADD PRIMARY KEY (`iddosente`),
  ADD KEY `iddosente` (`iddosente`);

--
-- Indexes for table `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`nie`),
  ADD KEY `nie` (`nie`);

--
-- Indexes for table `monografia`
--
ALTER TABLE `monografia`
  ADD KEY `nie` (`nie`),
  ADD KEY `iddosente_1` (`iddosente_1`),
  ADD KEY `iddosente_2` (`iddosente_2`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`naran_utilizador`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monografia`
--
ALTER TABLE `monografia`
  ADD CONSTRAINT `monografia_ibfk_1` FOREIGN KEY (`nie`) REFERENCES `estudante` (`nie`),
  ADD CONSTRAINT `monografia_ibfk_2` FOREIGN KEY (`iddosente_1`) REFERENCES `dosente` (`iddosente`),
  ADD CONSTRAINT `monografia_ibfk_3` FOREIGN KEY (`iddosente_2`) REFERENCES `dosente` (`iddosente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
