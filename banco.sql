-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela operacaocrud.crud
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nome` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_nb_0900_ai_ci,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_nb_0900_ai_ci DEFAULT NULL,
  `celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_nb_0900_ai_ci DEFAULT NULL,
  `senha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_nb_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_nb_0900_ai_ci;

-- Copiando dados para a tabela operacaocrud.crud: ~1 rows (aproximadamente)
INSERT INTO `crud` (`id`, `nome`, `email`, `celular`, `senha`) VALUES
	(0000000021, 'Guilherm', 'flavia123@gmail.com', '9997721', '856');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
