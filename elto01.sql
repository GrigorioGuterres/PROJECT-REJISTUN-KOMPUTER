-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 08:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elto01`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `rlt_avaria`
-- (See below for the actual view)
--
CREATE TABLE `rlt_avaria` (
`kode_avaria` int(11)
,`nara_komputer` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rlt_geral`
-- (See below for the actual view)
--
CREATE TABLE `rlt_geral` (
`id` int(11)
,`naran` varchar(255)
,`data_rejistu` date
,`kode_komputer` varchar(255)
,`kode_tipu_komputer` varchar(255)
,`kode_avaria_diak` varchar(255)
,`kode_staff` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rlt_komputer`
-- (See below for the actual view)
--
CREATE TABLE `rlt_komputer` (
`kode_komputer` int(11)
,`naran_komputer` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rlt_staff`
-- (See below for the actual view)
--
CREATE TABLE `rlt_staff` (
`kode_staff` int(11)
,`naran_staff` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rlt_tipu_komputer`
-- (See below for the actual view)
--
CREATE TABLE `rlt_tipu_komputer` (
`kode_tipu_komputer` int(11)
,`naran_komputer` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_avaria`
--

CREATE TABLE `tb_avaria` (
  `kode_avaria` int(11) NOT NULL,
  `nara_komputer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_avaria`
--

INSERT INTO `tb_avaria` (`kode_avaria`, `nara_komputer`) VALUES
(90, 'lenovo'),
(7878, 'JHBJJ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komputer`
--

CREATE TABLE `tb_komputer` (
  `kode_komputer` int(11) NOT NULL,
  `naran_komputer` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komputer`
--

INSERT INTO `tb_komputer` (`kode_komputer`, `naran_komputer`, `obs`) VALUES
(898, 'accer', 'diak'),
(997, 'JNJNN', 'NLN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prosses`
--

CREATE TABLE `tb_prosses` (
  `id` int(11) NOT NULL,
  `naran` varchar(255) NOT NULL,
  `data_rejistu` date DEFAULT NULL,
  `kode_komputer` varchar(255) NOT NULL,
  `kode_tipu_komputer` varchar(255) NOT NULL,
  `kode_avaria_diak` varchar(255) NOT NULL,
  `kode_staff` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prosses`
--

INSERT INTO `tb_prosses` (`id`, `naran`, `data_rejistu`, `kode_komputer`, `kode_tipu_komputer`, `kode_avaria_diak`, `kode_staff`) VALUES
(897, 'bhbhb', '2024-02-14', 'JNJNN', 'hhh', 'lenovo', 'grigoiro'),
(8988, 'NNNK', '2024-02-15', 'JNJNN', 'hhh', 'lenovo', 'grigoiro'),
(98989, 'hoho', '2024-02-07', 'accer', 'hhh', 'lenovo', 'grigoiro');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `kode_staff` int(11) NOT NULL,
  `naran_staff` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`kode_staff`, `naran_staff`, `obs`) VALUES
(9090, 'grigoiro', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipu_komputer`
--

CREATE TABLE `tb_tipu_komputer` (
  `kode_tipu_komputer` int(11) NOT NULL,
  `naran_komputer` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tipu_komputer`
--

INSERT INTO `tb_tipu_komputer` (`kode_tipu_komputer`, `naran_komputer`, `obs`) VALUES
(779, 'hhh', 'hoh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-05-07 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `images`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'admin', '$2y$10$XpULrBw5QsQ7XtF2ObdDVOK0wDa/Lezzgh86ZixnZGF3/SFNpMY8K', 'admin@gmail.com', 'http://localhost/eltofinal/uploads/files/dh0xkz8o2cglw37.png', NULL, NULL, '2024-05-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure for view `rlt_avaria`
--
DROP TABLE IF EXISTS `rlt_avaria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rlt_avaria`  AS  select `ta`.`kode_avaria` AS `kode_avaria`,`ta`.`nara_komputer` AS `nara_komputer` from `tb_avaria` `ta` ;

-- --------------------------------------------------------

--
-- Structure for view `rlt_geral`
--
DROP TABLE IF EXISTS `rlt_geral`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rlt_geral`  AS  select `tp`.`id` AS `id`,`tp`.`naran` AS `naran`,`tp`.`data_rejistu` AS `data_rejistu`,`tp`.`kode_komputer` AS `kode_komputer`,`tp`.`kode_tipu_komputer` AS `kode_tipu_komputer`,`tp`.`kode_avaria_diak` AS `kode_avaria_diak`,`tp`.`kode_staff` AS `kode_staff` from `tb_prosses` `tp` ;

-- --------------------------------------------------------

--
-- Structure for view `rlt_komputer`
--
DROP TABLE IF EXISTS `rlt_komputer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rlt_komputer`  AS  select `tk`.`kode_komputer` AS `kode_komputer`,`tk`.`naran_komputer` AS `naran_komputer`,`tk`.`obs` AS `obs` from `tb_komputer` `tk` ;

-- --------------------------------------------------------

--
-- Structure for view `rlt_staff`
--
DROP TABLE IF EXISTS `rlt_staff`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rlt_staff`  AS  select `ts`.`kode_staff` AS `kode_staff`,`ts`.`naran_staff` AS `naran_staff`,`ts`.`obs` AS `obs` from `tb_staff` `ts` ;

-- --------------------------------------------------------

--
-- Structure for view `rlt_tipu_komputer`
--
DROP TABLE IF EXISTS `rlt_tipu_komputer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rlt_tipu_komputer`  AS  select `ttk`.`kode_tipu_komputer` AS `kode_tipu_komputer`,`ttk`.`naran_komputer` AS `naran_komputer`,`ttk`.`obs` AS `obs` from `tb_tipu_komputer` `ttk` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_avaria`
--
ALTER TABLE `tb_avaria`
  ADD PRIMARY KEY (`kode_avaria`);

--
-- Indexes for table `tb_komputer`
--
ALTER TABLE `tb_komputer`
  ADD PRIMARY KEY (`kode_komputer`);

--
-- Indexes for table `tb_prosses`
--
ALTER TABLE `tb_prosses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`kode_staff`);

--
-- Indexes for table `tb_tipu_komputer`
--
ALTER TABLE `tb_tipu_komputer`
  ADD PRIMARY KEY (`kode_tipu_komputer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
