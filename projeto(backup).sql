-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Jan-2018 às 12:07
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

DROP TABLE IF EXISTS `artigo`;
CREATE TABLE IF NOT EXISTS `artigo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_artigo` int(11) NOT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `detalhes` varchar(1000) DEFAULT NULL,
  `preco` decimal(5,2) DEFAULT NULL,
  `quantidade` int(5) DEFAULT NULL,
  `imagem_artigo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_artigo` (`id_tipo_artigo`),
  KEY `idx-tipo-artigo-id` (`id_tipo_artigo`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`id`, `id_tipo_artigo`, `nome`, `detalhes`, `preco`, `quantidade`, `imagem_artigo`) VALUES
(20, 1, 'Azeitonas', 'A azeitona ou oliva é o fruto da oliveira, também chamado de verde-oliva. ', '0.30', 100, 'artigo_Azeitonas.jpg'),
(22, 1, 'Pasteis de Bacalhau', 'Bolinhos ou pastéis de bacalhau são uma especialidade da gastronomia portuguesa.', '1.00', 40, 'artigo_Pasteis de Bacalhau.jpg'),
(23, 1, 'Croquetes de Carne', 'Croquetes de carne com o sabor e frescura que marcam a diferença.', '1.00', 35, 'artigo_Croquetes de Carne.png'),
(26, 1, 'Frutos Secos', 'Diversidade de frutos secos, tais como amendoins, figos secos, entre outros', '0.50', 40, 'artigo_Frutos Secos.jpg'),
(27, 1, 'Rissoes Mistos', 'Rissoes feitos com fiambre e queijo flamengo.', '0.80', 50, 'artigo_Rissoes Mistos.jpg'),
(29, 1, 'Panados de Frango', 'Panados fritos de frango com um toque de limão por cima.', '1.50', 50, 'artigo_Panados de Frango.jpg'),
(35, 2, 'Bife Pimenta', 'Um bom bife é do agrado de todos e a pimenta preta vai enfatizar essa preferência.', '11.00', 100, 'artigo_Bife Pimenta.jpg'),
(36, 2, 'Bife a Portuguesa', 'O Bife a Portuguesa e o mais tradicional, servido individualmente num prato de barro.', '8.50', 200, 'artigo_Bife a Portuguesa.jpg'),
(37, 2, 'Francesinha', 'Francesinha é um prato típico e originário da cidade do Porto, em Portugal.', '10.00', 50, 'artigo_Francesinha.jpg'),
(38, 2, 'Frango Assado', 'Frango feito no churrasco acompanhado com batata frita, arroz e ovo.', '8.50', 100, 'artigo_Frango Assado.jpg'),
(39, 2, 'Lombinhos de Porco Preto', 'Lombos de porco feitos no forno acompanhados com batata e couve.', '13.00', 50, 'artigo_Lombinhos de Porco Preto.jpg'),
(40, 3, 'Cataplana de marisco', 'Feito com lulas, camarao, ameijoas e uma caldeirada.', '20.00', 50, 'artigo_Cataplana de marisco.jpg'),
(41, 3, 'Dourada Grelhada', 'Dourada acompanhada com legumes salteados e batata a murro.', '9.00', 100, 'artigo_Dourada Grelhada.jpg'),
(43, 3, 'Espetadas de Lulas', 'Espetadas de lulas acompanhadas com limao, batata cozida e legumes (opcional)', '12.00', 100, 'artigo_Espetadas de Lulas.jpg'),
(44, 3, 'Polvo a Lagareiro', 'Polvo regado em azeite com batatas a murro', '13.00', 100, 'artigo_Polvo a Lagareiro.jpg'),
(45, 3, 'Sardinha Assada', 'Sardinha acompanhada com salada e batata cozida', '10.00', 100, 'artigo_Sardinha Assada.jpg'),
(46, 4, 'Banana Split', 'A banana split é uma sobremesa servida à base de gelado e banana. ', '5.00', 25, 'artigo_Banana Split.jpg'),
(47, 4, 'Doce da Casa', 'Doce feito com nata, bolacha e leite condensado.', '2.00', 20, 'artigo_Doce da Casa.jpg'),
(49, 4, 'Brigadeiro', 'Bolo feito à base de chocolate com cobertura brigadeiro.', '2.50', 15, 'artigo_Brigadeiro.jpg'),
(50, 4, 'Mousse Oreo', 'Mousse feita à base de oreos.', '2.50', 25, 'artigo_Mousse Oreo.jpg'),
(51, 4, 'Pudim de Leite', 'Pudim feito à base de leite com caramelo por cima.', '2.50', 20, 'artigo_Pudim de Leite.jpg'),
(52, 6, 'Sopa de Peixe', 'Sopa feita com diversos peixes.', '3.00', 50, 'artigo_Sopa de Peixe.jpg'),
(53, 3, 'Salmao Grelhado', 'Salmao grelhado acompanhado com legumes e arroz', '9.00', 50, 'artigo_Salmao Grelhado.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '4', 1511284169),
('cliente', '14', 1513980996),
('cliente', '27', 1514292886),
('cliente', '34', 1514499896),
('cliente', '9', 1513253722),
('empregado', '11', 1513979225),
('empregado', '12', 1513980061),
('empregado', '13', 1513980928),
('empregado', '15', 1513981997),
('empregado', '16', 1513982324),
('empregado', '17', 1513982768),
('empregado', '18', 1513982996),
('empregado', '19', 1513983256),
('empregado', '2', 1511284169),
('empregado', '20', 1513984081),
('empregado', '21', 1513985964),
('empregado', '22', 1513986111),
('empregado', '24', 1514291347),
('empregado', '25', 1514291931),
('empregado', '26', 1514292008),
('empregado', '28', 1514306130),
('empregado', '29', 1514306469),
('empregado', '30', 1514307705),
('empregado', '31', 1514307813),
('empregado', '32', 1514307983),
('empregado', '33', 1514308188),
('empregado', '35', 1514499968),
('cliente', '36', 1515334784),
('empregado', '37', 1515669775);

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1511284169, 1511284169),
('cliente', 1, NULL, NULL, NULL, 1511284169, 1511284169),
('empregado', 1, NULL, NULL, NULL, 1511284169, 1511284169);

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'cliente'),
('empregado', 'cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_user` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `numeroTelefone` varchar(25) DEFAULT NULL,
  `morada` varchar(60) DEFAULT NULL,
  `nome` varchar(60) NOT NULL,
  `nif` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_user`, `email`, `numeroTelefone`, `morada`, `nome`, `nif`) VALUES
(34, 'joaofilipevieira1998@gmail.com', '912321998', 'rua das flores nº17 brejo olival', 'João Vieira', NULL),
(36, 'asdad@asda.com', '919191919', 'rua 2 ano', 'Joaquim Rodrigues', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado`
--

DROP TABLE IF EXISTS `empregado`;
CREATE TABLE IF NOT EXISTS `empregado` (
  `id_user` int(11) NOT NULL,
  `id_equipa` int(11) NOT NULL,
  `n_empregado` int(11) NOT NULL,
  `salario` int(11) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `horario` varchar(35) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empregado`
--

INSERT INTO `empregado` (`id_user`, `id_equipa`, `n_empregado`, `salario`, `horas`, `horario`, `email`, `nome`) VALUES
(35, 1, 1, 800, 5, '10h - 15h', 'joaquimrodrigues@vanilla.pt', 'Joaquim Rodrigues'),
(37, 1, 8, 600, 1, '12:00 - 13:00', 'jessica@gmail.com', 'jessica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa`
--

DROP TABLE IF EXISTS `equipa`;
CREATE TABLE IF NOT EXISTS `equipa` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `id_tipo_equipa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipa`
--

INSERT INTO `equipa` (`id`, `nome`, `id_tipo_equipa`) VALUES
(1, '1º turno', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `tipo`) VALUES
(1, 'Acabado'),
(2, 'Por fazer'),
(3, 'A Fazer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatura`
--

DROP TABLE IF EXISTS `fatura`;
CREATE TABLE IF NOT EXISTS `fatura` (
  `id` int(11) NOT NULL,
  `id_meio_pagamento` int(11) NOT NULL,
  `id_pedidos` int(45) NOT NULL,
  `data_fatura` date DEFAULT NULL,
  `obs` varchar(250) DEFAULT NULL,
  `nif` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fatura`
--

INSERT INTO `fatura` (`id`, `id_meio_pagamento`, `id_pedidos`, `data_fatura`, `obs`, `nif`) VALUES
(1, 1, 1, '2017-07-21', NULL, NULL),
(2, 2, 1, '2018-01-08', 'FHIUDHISFD', 123456789);

-- --------------------------------------------------------

--
-- Estrutura da tabela `meio_pagamento`
--

DROP TABLE IF EXISTS `meio_pagamento`;
CREATE TABLE IF NOT EXISTS `meio_pagamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `meio_pagamento`
--

INSERT INTO `meio_pagamento` (`id`, `nome`) VALUES
(1, 'Multibanco'),
(1, 'Dinheiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

DROP TABLE IF EXISTS `mesa`;
CREATE TABLE IF NOT EXISTS `mesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(5) NOT NULL,
  `condicao` varchar(15) DEFAULT NULL,
  `quantidade_pessoas` int(5) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx-mesa-id` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`id`, `numero`, `condicao`, `quantidade_pessoas`, `id_user`) VALUES
(1, 1, 'reservado', 4, 34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1511283403),
('m140506_102106_rbac_init', 1511283409),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1511283409),
('m130524_201442_init', 1511283427),
('m171218_165201_foreign_keys', 1513861711);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `data_pedido` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_mesa` (`id_mesa`),
  KEY `id_estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_user`, `id_mesa`, `id_estado`, `data_pedido`) VALUES
(1, 34, 1, 2, '1921-07-21'),
(2, 4, 1, 2, '1998-07-21'),
(3, 4, 1, 2, '1998-07-10'),
(4, 4, 1, 2, '1998-07-11'),
(5, 4, 1, 2, '1998-07-11'),
(6, 4, 1, 2, '1998-07-10'),
(7, 4, 1, 2, '1998-07-10'),
(8, 4, 1, 2, '1998-07-10'),
(9, 4, 1, 2, '1998-07-10'),
(10, 4, 1, 2, '1998-07-10'),
(11, 34, 1, 2, '1998-07-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_em_artigo`
--

DROP TABLE IF EXISTS `pedidos_em_artigo`;
CREATE TABLE IF NOT EXISTS `pedidos_em_artigo` (
  `id_artigo` int(11) NOT NULL,
  `id_pedidos` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `numeroTelefone` varchar(25) DEFAULT NULL,
  `quantidade_pessoas` int(3) DEFAULT NULL,
  `horario` varchar(10) DEFAULT NULL,
  `id_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `nome`, `numeroTelefone`, `quantidade_pessoas`, `horario`, `id_mesa`) VALUES
(1, 'romeu paz', '123456789', 3, '12:35', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_artigo`
--

DROP TABLE IF EXISTS `tipo_artigo`;
CREATE TABLE IF NOT EXISTS `tipo_artigo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) DEFAULT NULL,
  `detalhes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_artigo`
--

INSERT INTO `tipo_artigo` (`id`, `nome`, `detalhes`) VALUES
(1, 'Entradas', 'salgados'),
(2, 'Carne', 'carnes'),
(3, 'Peixe', 'peixe'),
(4, 'Sobremesa', 'sobremesa'),
(5, 'Bebidas', 'bebidas'),
(6, 'Sopa', 'sopa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_equipa`
--

DROP TABLE IF EXISTS `tipo_equipa`;
CREATE TABLE IF NOT EXISTS `tipo_equipa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `detalhes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_equipa`
--

INSERT INTO `tipo_equipa` (`id`, `tipo`, `detalhes`) VALUES
(1, 'empregado de mesa', 'mesa 1 a 3'),
(2, 'empregado de mesa', 'mesa 3 a 6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'ZSfi7c9iXTPZw1wtiBESvDgg8I5fzm6z', '$2y$13$qAKm243R/d3kcoOTUew1Ku2ggabJpTnZgKiIYuQpazVM.5QmYOp/S', NULL, 'admin@admin.pt', 10, 1513072136, 1513072136),
(34, 'jv1428', 'UAq26_26KH7jf7Wa14_Ks2yBHGPzf-dt', '$2y$13$gi1FnNPYSwOBl/Pk6GjohOxi2SbO7kxvL40cKDK5NzBmx5TBjMR6a', NULL, 'joaofilipevieira1998@gmail.com', 10, 1514499896, 1514499896),
(35, 'JoaquimRodrigues', 'PpjgJ0VKx9dMy85L614HpRhh_FlKaS3j', '$2y$13$83N9yyX11.MADM17NoNZKeOOpLghNrEiF2mf22RJujwZU9ab4IXQa', NULL, 'joaquimrodrigues@vanilla.pt', 10, 1514499968, 1514499968),
(36, 'xstorm', 'hVjeTpftmNuw3seqxZlr_hbDMZ-xBhuC', '$2y$13$tYlgTSduMWqcAlT855rc9e7uBwrqlzRaL1lvy9Ane9zcbteUaJsJW', NULL, 'asdad@asda.com', 10, 1515334784, 1515334784),
(37, 'jessica', 'RxmeXtPc958Y1oYE0Pob_OzoOCyKNTb8', '$2y$13$829JDMFEwqTD4Ec78It9Ze0PjaYIEl6a5Tgp7crItHCfY9EreGnvu', NULL, 'jessica@gmail.com', 10, 1515669775, 1515669775);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `fk-tipo-artigo-id` FOREIGN KEY (`id_tipo_artigo`) REFERENCES `tipo_artigo` (`id`);

--
-- Limitadores para a tabela `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `fk-mesa-id` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
