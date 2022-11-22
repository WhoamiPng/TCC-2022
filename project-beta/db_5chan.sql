-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.25-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para 5chan
CREATE DATABASE IF NOT EXISTS `5chan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `5chan`;

-- Copiando estrutura para tabela 5chan.comentario_aberto
CREATE TABLE IF NOT EXISTS `comentario_aberto` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_aberto: ~2 rows (aproximadamente)
REPLACE INTO `comentario_aberto` (`id`, `usuario`, `comentario`) VALUES
	(5, 'aaaaaaaa', 'aaaaaaaaa'),
	(6, 'dasdasdas', 'dasdasdasdas');

-- Copiando estrutura para tabela 5chan.comentario_amzds
CREATE TABLE IF NOT EXISTS `comentario_amzds` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(400) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_amzds: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_animes
CREATE TABLE IF NOT EXISTS `comentario_animes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_animes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_comida
CREATE TABLE IF NOT EXISTS `comentario_comida` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_comida: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_computadores
CREATE TABLE IF NOT EXISTS `comentario_computadores` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(400) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_computadores: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_conhecimentoab
CREATE TABLE IF NOT EXISTS `comentario_conhecimentoab` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(400) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_conhecimentoab: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_cursos
CREATE TABLE IF NOT EXISTS `comentario_cursos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_cursos: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_design
CREATE TABLE IF NOT EXISTS `comentario_design` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_design: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_enem
CREATE TABLE IF NOT EXISTS `comentario_enem` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_enem: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_estudos
CREATE TABLE IF NOT EXISTS `comentario_estudos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_estudos: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_filmes
CREATE TABLE IF NOT EXISTS `comentario_filmes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_filmes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_hacking
CREATE TABLE IF NOT EXISTS `comentario_hacking` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_hacking: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_lgbt
CREATE TABLE IF NOT EXISTS `comentario_lgbt` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_lgbt: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_musica
CREATE TABLE IF NOT EXISTS `comentario_musica` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_musica: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_politica
CREATE TABLE IF NOT EXISTS `comentario_politica` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_politica: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_prevencao
CREATE TABLE IF NOT EXISTS `comentario_prevencao` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_prevencao: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_programacao
CREATE TABLE IF NOT EXISTS `comentario_programacao` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_programacao: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_tecnologia
CREATE TABLE IF NOT EXISTS `comentario_tecnologia` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_tecnologia: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_videogames
CREATE TABLE IF NOT EXISTS `comentario_videogames` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_videogames: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.users: ~3 rows (aproximadamente)
REPLACE INTO `users` (`id`, `user`, `pass`) VALUES
	(5, 'lucalazcanopereira@gmail.com', '5d47a2b41d4c76dbec3343f488b3d55d'),
	(6, 'test@gmail.com', '5d47a2b41d4c76dbec3343f488b3d55d'),
	(7, 'qualquercoisa111@gmail.com', '5d47a2b41d4c76dbec3343f488b3d55d'),
	(8, 'testando@gmail.com', '5d47a2b41d4c76dbec3343f488b3d55d');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
