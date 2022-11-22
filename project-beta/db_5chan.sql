


CREATE TABLE IF NOT EXISTS `comentario_aberto` (
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
  `usuarios` varchar(400) DEFAULT NULL,
  `comentarios` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_amzds: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_animes
CREATE TABLE IF NOT EXISTS `comentario_animes` {
  `usuarios` varchar(200) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_animes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_comida
CREATE TABLE IF NOT EXISTS `comentario_comida` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_comida: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_computadores
CREATE TABLE IF NOT EXISTS `comentario_computadores` (
  `usuario` varchar(400) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_computadores: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_conhecimentoab
CREATE TABLE IF NOT EXISTS `comentario_conhecimentoab` (
  `usuario` varchar(400) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_conhecimentoab: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_cursos
CREATE TABLE IF NOT EXISTS `comentario_cursos` (
  `usuarios` varchar(100) DEFAULT NULL,
  `comentarios` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_cursos: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_design
CREATE TABLE IF NOT EXISTS `comentario_design` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_design: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_enem
CREATE TABLE IF NOT EXISTS `comentario_enem` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_enem: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_estudos
CREATE TABLE IF NOT EXISTS `comentario_estudos` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_estudos: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_filmes
CREATE TABLE IF NOT EXISTS `comentario_filmes` (
  
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_filmes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_hacking
CREATE TABLE IF NOT EXISTS `comentario_hacking` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_hacking: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_lgbt
CREATE TABLE IF NOT EXISTS `comentario_lgbt` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_lgbt: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_musica
CREATE TABLE IF NOT EXISTS `comentario_musica` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_musica: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_politica
CREATE TABLE IF NOT EXISTS `comentario_politica` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_politica: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_prevencao
CREATE TABLE IF NOT EXISTS `comentario_prevencao` (
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_prevencao: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_programacao
CREATE TABLE IF NOT EXISTS `comentario_programacao` (
  `
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_programacao: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_tecnologia
CREATE TABLE IF NOT EXISTS `comentario_tecnologia` (
  
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_tecnologia: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela 5chan.comentario_videogames
CREATE TABLE IF NOT EXISTS `comentario_videogames` (

  `usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela 5chan.comentario_videogames: ~0 rows (aproximadamente)

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


