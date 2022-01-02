-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2022 at 08:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menglist`
--

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `ID_FOLDER` int(11) NOT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `NAMA_FOLDER` varchar(100) DEFAULT NULL,
  `IMG_FOLDER` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`ID_FOLDER`, `EMAIL_USER`, `NAMA_FOLDER`, `IMG_FOLDER`) VALUES
(5, 'ilham.sagitaputra@gmail.com', 'Folder 1', NULL),
(6, 'ilham.sagitaputra@gmail.com', 'Folder 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_color`
--

CREATE TABLE `master_color` (
  `ID_MC` int(11) NOT NULL,
  `NAMA_MC` varchar(100) DEFAULT NULL,
  `BADGE_MC` varchar(100) DEFAULT NULL,
  `COLOR_MC` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_color`
--

INSERT INTO `master_color` (`ID_MC`, `NAMA_MC`, `BADGE_MC`, `COLOR_MC`) VALUES
(1, 'DEFAULT', 'badge-light', 'gray'),
(2, 'BLUE', 'badge-light-primary', 'primary'),
(3, 'GRAY', 'badge-light-secondary', NULL),
(4, 'GREEN', 'badge-light-success', 'success'),
(5, 'MAGENTA', 'badge-light-info', 'info'),
(6, 'YELLOW', 'badge-light-warning', 'warning'),
(7, 'RED', 'badge-light-danger', 'danger'),
(8, 'DARK', 'badge-light-dark', 'dark');

-- --------------------------------------------------------

--
-- Table structure for table `master_priority`
--

CREATE TABLE `master_priority` (
  `ID_MP` tinyint(4) NOT NULL,
  `NAMA_MP` varchar(100) DEFAULT NULL,
  `ALIAS_MP` varchar(10) DEFAULT NULL,
  `COLOR_MP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_priority`
--

INSERT INTO `master_priority` (`ID_MP`, `NAMA_MP`, `ALIAS_MP`, `COLOR_MP`) VALUES
(1, 'LOW', '!!!!!', 'text-secondary'),
(2, 'MEDIUM', '!!!!', 'text-success'),
(3, 'HIGH', '!!!', 'text-info'),
(4, 'IMPORTANT', '!!', 'text-warning'),
(5, 'URGENT', '!', 'text-danger');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `ID_TAG` int(11) NOT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `NAMA_TAG` varchar(100) DEFAULT NULL,
  `WARNA_TAG` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`ID_TAG`, `EMAIL_USER`, `NAMA_TAG`, `WARNA_TAG`) VALUES
(5, 'ilham.sagitaputra@gmail.com', 'Nature', '4'),
(6, 'ilham.sagitaputra@gmail.com', 'Global', '1'),
(7, 'ilham.sagitaputra@gmail.com', 'Politic', '7'),
(8, 'ilham.sagitaputra@gmail.com', 'Programming', '2'),
(9, 'ilham.sagitaputra@gmail.com', 'Magician', '8');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `ID_TASK` int(11) NOT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `ID_FOLDER` varchar(10) DEFAULT NULL,
  `NAMA_TASK` varchar(100) DEFAULT NULL,
  `DESKRIPSI_TASK` text DEFAULT NULL,
  `TGL_TASK` timestamp NULL DEFAULT NULL,
  `ISFINISHED_TASK` binary(1) DEFAULT '0',
  `PRIORITAS_TASK` smallint(6) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`ID_TASK`, `EMAIL_USER`, `ID_FOLDER`, `NAMA_TASK`, `DESKRIPSI_TASK`, `TGL_TASK`, `ISFINISHED_TASK`, `PRIORITAS_TASK`) VALUES
(39, 'ilham.sagitaputra@gmail.com', '5', 'Menggembala', 'Menggembala sapi', '2022-01-02 19:00:00', 0x31, 4),
(40, 'ilham.sagitaputra@gmail.com', '6', 'Task yang berada di folder 2', '', NULL, 0x30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `task_reminder`
--

CREATE TABLE `task_reminder` (
  `ID_TASK` int(11) DEFAULT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `REMINDER` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `STATUS` binary(1) DEFAULT '0',
  `NAMA_REMINDER` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_reminder`
--

INSERT INTO `task_reminder` (`ID_TASK`, `EMAIL_USER`, `REMINDER`, `created_at`, `STATUS`, `NAMA_REMINDER`) VALUES
(39, 'ilham.sagitaputra@gmail.com', '2022-01-02 18:30:00', '2022-01-02 03:22:26', 0x30, '30 minutes ahead'),
(40, 'ilham.sagitaputra@gmail.com', '0000-00-00 00:00:00', '2022-01-02 03:56:46', 0x30, '5 minutes ahead');

-- --------------------------------------------------------

--
-- Table structure for table `task_tag`
--

CREATE TABLE `task_tag` (
  `ID_TASK` int(11) DEFAULT NULL,
  `ID_TAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_tag`
--

INSERT INTO `task_tag` (`ID_TASK`, `ID_TAG`) VALUES
(39, 5),
(39, 6),
(40, 5),
(40, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `EMAIL_USER` varchar(100) NOT NULL,
  `PASSWORD_USER` text DEFAULT NULL,
  `NAMA_USER` varchar(150) DEFAULT NULL,
  `ISPREMIUM_USER` smallint(6) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EMAIL_USER`, `PASSWORD_USER`, `NAMA_USER`, `ISPREMIUM_USER`) VALUES
('ilham.sagitaputra@gmail.com', '5e5ac905397b74f412e9d4051edfff1368ecc060275f08d8ab491ea3c5b1180a', 'Ilham Sagita Putra', 0),
('ilham.supali@gmail.com', '5e5ac905397b74f412e9d4051edfff1368ecc060275f08d8ab491ea3c5b1180a', 'Ilham Supali', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tag`
-- (See below for the actual view)
--
CREATE TABLE `v_tag` (
`ID_TAG` int(11)
,`EMAIL_USER` varchar(100)
,`NAMA_TAG` varchar(100)
,`WARNA_TAG` varchar(7)
,`ID_MC` int(11)
,`NAMA_MC` varchar(100)
,`BADGE_MC` varchar(100)
,`COLOR_MC` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_task`
-- (See below for the actual view)
--
CREATE TABLE `v_task` (
`ID_TASK` int(11)
,`EMAIL_USER` varchar(100)
,`ID_FOLDER` varchar(10)
,`NAMA_TASK` varchar(100)
,`DESKRIPSI_TASK` text
,`TGL_TASK` timestamp
,`ISFINISHED_TASK` binary(1)
,`PRIORITAS_TASK` smallint(6)
,`NAMA_MP` varchar(100)
,`ALIAS_MP` varchar(10)
,`COLOR_MP` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_task_folder`
-- (See below for the actual view)
--
CREATE TABLE `v_task_folder` (
`ID_TASK` int(11)
,`EMAIL_USER` varchar(100)
,`ID_FOLDER` varchar(10)
,`NAMA_TASK` varchar(100)
,`DESKRIPSI_TASK` text
,`TGL_TASK` timestamp
,`ISFINISHED_TASK` binary(1)
,`PRIORITAS_TASK` smallint(6)
,`NAMA_FOLDER` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_task_tag`
-- (See below for the actual view)
--
CREATE TABLE `v_task_tag` (
`ID_TASK` int(11)
,`ID_TAG` int(11)
,`NAMA_TAG` varchar(100)
,`ISFINISHED_TASK` binary(1)
,`TGL_TASK` timestamp
,`BADGE_MC` varchar(100)
,`COLOR_MC` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `v_tag`
--
DROP TABLE IF EXISTS `v_tag`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tag`  AS SELECT `t`.`ID_TAG` AS `ID_TAG`, `t`.`EMAIL_USER` AS `EMAIL_USER`, `t`.`NAMA_TAG` AS `NAMA_TAG`, `t`.`WARNA_TAG` AS `WARNA_TAG`, `mc`.`ID_MC` AS `ID_MC`, `mc`.`NAMA_MC` AS `NAMA_MC`, `mc`.`BADGE_MC` AS `BADGE_MC`, `mc`.`COLOR_MC` AS `COLOR_MC` FROM (`tag` `t` join `master_color` `mc`) WHERE `t`.`WARNA_TAG` = `mc`.`ID_MC` ;

-- --------------------------------------------------------

--
-- Structure for view `v_task`
--
DROP TABLE IF EXISTS `v_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_task`  AS SELECT `t`.`ID_TASK` AS `ID_TASK`, `t`.`EMAIL_USER` AS `EMAIL_USER`, `t`.`ID_FOLDER` AS `ID_FOLDER`, `t`.`NAMA_TASK` AS `NAMA_TASK`, `t`.`DESKRIPSI_TASK` AS `DESKRIPSI_TASK`, `t`.`TGL_TASK` AS `TGL_TASK`, `t`.`ISFINISHED_TASK` AS `ISFINISHED_TASK`, `t`.`PRIORITAS_TASK` AS `PRIORITAS_TASK`, `mp`.`NAMA_MP` AS `NAMA_MP`, `mp`.`ALIAS_MP` AS `ALIAS_MP`, `mp`.`COLOR_MP` AS `COLOR_MP` FROM (`task` `t` left join `master_priority` `mp` on(`t`.`PRIORITAS_TASK` = `mp`.`ID_MP`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_task_folder`
--
DROP TABLE IF EXISTS `v_task_folder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_task_folder`  AS SELECT `t`.`ID_TASK` AS `ID_TASK`, `t`.`EMAIL_USER` AS `EMAIL_USER`, `t`.`ID_FOLDER` AS `ID_FOLDER`, `t`.`NAMA_TASK` AS `NAMA_TASK`, `t`.`DESKRIPSI_TASK` AS `DESKRIPSI_TASK`, `t`.`TGL_TASK` AS `TGL_TASK`, `t`.`ISFINISHED_TASK` AS `ISFINISHED_TASK`, `t`.`PRIORITAS_TASK` AS `PRIORITAS_TASK`, `f`.`NAMA_FOLDER` AS `NAMA_FOLDER` FROM (`task` `t` join `folder` `f`) WHERE `t`.`ID_FOLDER` = `f`.`ID_FOLDER` ;

-- --------------------------------------------------------

--
-- Structure for view `v_task_tag`
--
DROP TABLE IF EXISTS `v_task_tag`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_task_tag`  AS SELECT `tt`.`ID_TASK` AS `ID_TASK`, `tt`.`ID_TAG` AS `ID_TAG`, `t`.`NAMA_TAG` AS `NAMA_TAG`, `ta`.`ISFINISHED_TASK` AS `ISFINISHED_TASK`, `ta`.`TGL_TASK` AS `TGL_TASK`, `mc`.`BADGE_MC` AS `BADGE_MC`, `mc`.`COLOR_MC` AS `COLOR_MC` FROM (((`task_tag` `tt` join `tag` `t`) join `task` `ta`) join `master_color` `mc`) WHERE `tt`.`ID_TASK` = `ta`.`ID_TASK` AND `tt`.`ID_TAG` = `t`.`ID_TAG` AND `t`.`WARNA_TAG` = `mc`.`ID_MC` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`ID_FOLDER`),
  ADD KEY `folder_FK` (`EMAIL_USER`);

--
-- Indexes for table `master_color`
--
ALTER TABLE `master_color`
  ADD PRIMARY KEY (`ID_MC`);

--
-- Indexes for table `master_priority`
--
ALTER TABLE `master_priority`
  ADD PRIMARY KEY (`ID_MP`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`ID_TAG`),
  ADD KEY `hashtag_FK` (`EMAIL_USER`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID_TASK`),
  ADD KEY `task_FK` (`EMAIL_USER`),
  ADD KEY `task_FK_1` (`ID_FOLDER`);

--
-- Indexes for table `task_reminder`
--
ALTER TABLE `task_reminder`
  ADD KEY `NewTable_FK` (`ID_TASK`);

--
-- Indexes for table `task_tag`
--
ALTER TABLE `task_tag`
  ADD KEY `task_tag_FK` (`ID_TASK`),
  ADD KEY `task_tag_FK_1` (`ID_TAG`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMAIL_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `ID_FOLDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_color`
--
ALTER TABLE `master_color`
  MODIFY `ID_MC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_priority`
--
ALTER TABLE `master_priority`
  MODIFY `ID_MP` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `ID_TAG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `ID_TASK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `folder`
--
ALTER TABLE `folder`
  ADD CONSTRAINT `folder_FK` FOREIGN KEY (`EMAIL_USER`) REFERENCES `user` (`EMAIL_USER`);

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `hashtag_FK` FOREIGN KEY (`EMAIL_USER`) REFERENCES `user` (`EMAIL_USER`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_FK` FOREIGN KEY (`EMAIL_USER`) REFERENCES `user` (`EMAIL_USER`);

--
-- Constraints for table `task_reminder`
--
ALTER TABLE `task_reminder`
  ADD CONSTRAINT `NewTable_FK` FOREIGN KEY (`ID_TASK`) REFERENCES `task` (`ID_TASK`);

--
-- Constraints for table `task_tag`
--
ALTER TABLE `task_tag`
  ADD CONSTRAINT `task_tag_FK` FOREIGN KEY (`ID_TASK`) REFERENCES `task` (`ID_TASK`),
  ADD CONSTRAINT `task_tag_FK_1` FOREIGN KEY (`ID_TAG`) REFERENCES `tag` (`ID_TAG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
