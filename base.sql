-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.5.0.5337
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table nettube-v2.article : ~1 rows (environ)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `user_id`, `title`, `created_at`, `published`, `url`, `description`, `category`) VALUES
	(1, 8, 'test', '2019-01-27 20:33:49', 1, 'https://www.youtube.com/embed/hf1BbgVuEGE', NULL, NULL),
	(4, 10, 'aaa', '2019-01-27 21:29:15', 1, 'https://www.youtube.com/embed/C4F-oVsWAUQ', NULL, NULL),
	(5, 10, 'aaa', '2019-01-27 21:29:47', 1, 'https://www.youtube.com/embed/C4F-oVsWAUQ', NULL, NULL),
	(6, 10, 'qzsdefzef', '2019-01-27 22:18:48', 1, 'https://www.youtube.com/embed/C4F-oVsWAUQ', NULL, NULL),
	(7, 10, 'qzsdefzef', '2019-01-27 22:19:42', 1, 'https://www.youtube.com/embed/C4F-oVsWAUQ', NULL, NULL);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Listage des données de la table nettube-v2.user : ~9 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `password`, `firstname`, `lastname`, `birthday`, `roles`) VALUES
	(4, 'rem@rem.fr', '$2y$13$oO.t8g8HLfaEvGGnkQwwpepgoRgxIyPx9lC5TN10/CorFQzb2KSGe', NULL, NULL, NULL, 'ROLE_USER'),
	(6, 'remy@rem.fr', '$2y$13$JKpczQn/E4X1uSdcueDSSOw7fmDYEQG6wPmCA4kcOU3JtdggpV5Zq', NULL, NULL, NULL, 'ROLE_USER'),
	(7, 'remy@remy.fr', '$2y$13$SGkeqvdqMar2lVEWQus8cuSJ2Pf/Ph3dq2vlfvSfCkeqCmZygR0R.', NULL, NULL, NULL, 'ROLE_USER'),
	(8, 'remy@remy.fry', '$2y$13$wJhAJnj2mhnB6dJATRarqOszC.uqRlodhGgZ.VFGMgOeNEBCDPrxm', NULL, NULL, NULL, 'ROLE_USER'),
	(9, 'remy@remy.frr', '$2y$13$0bbiZRujRgYnjWQ09rsireoZPgu9hwpubMl1vT0Ry2PGsmBG2bpP6', NULL, NULL, NULL, 'ROLE_USER'),
	(10, 'aaa@aaa.aaa', '$2y$13$Pj0OdhjU1RJv3f6katGKNeySjdSFMFsiIRiP8QBdhOfBQcx30PSDS', NULL, NULL, NULL, 'ROLE_USER'),
	(11, 'bbb@bbb.bbb', '$2y$13$LvrAHG6Bi0eTM1tF1nUzFeyj40xOCtg4Tb8FOVZhtzGO9yhQHwMNG', NULL, NULL, NULL, 'ROLE_USER'),
	(12, 'nnn@nnn.fr', '$2y$13$VLpcAYRUjUorWcMOstEa0eSdTR4NX1foMT9rW3Yf6bCoeOPUGfifu', NULL, NULL, NULL, 'ROLE_USER'),
	(13, 'nnn@nnn.frr', '$2y$13$WiNGMwrcP56R5tmHNVQAAe.e7WI393gvt723yH.snG2tsmeFz5y9i', NULL, NULL, NULL, 'ROLE_USER'),
	(14, 'ddd@ddd.ddd', '$2y$13$d83WPJ.raYCeQM14LruRmeHATtkaIPBudrRBEgAERtJdl9/jJwh7O', NULL, NULL, NULL, 'ROLE_USER');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
