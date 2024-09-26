SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: anexos
#

DROP TABLE IF EXISTS `anexos`;

CREATE TABLE `anexos` (
  `idAnexos` int(11) NOT NULL AUTO_INCREMENT,
  `anexo` varchar(45) DEFAULT NULL,
  `thumb` varchar(45) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `os_id` int(11) NOT NULL,
  PRIMARY KEY (`idAnexos`),
  KEY `fk_anexos_os1` (`os_id`),
  CONSTRAINT `fk_anexos_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: categorias
#

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `idCategorias` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(80) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idCategorias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('122in5sbf0qpdsh2enbth1dh7uhl87ss', '::1', '1570294082', '__ci_last_regenerate|i:1570293816;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;success|s:31:\"Produto adicionado com sucesso!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l21i0evoojgvpp5pdl4phc1m6nfjc8t7', '::1', '1570294425', '__ci_last_regenerate|i:1570294129;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;success|s:31:\"Produto adicionado com sucesso!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('s0oe3muee546aenshnq8b3iigplf85eg', '::1', '1570294748', '__ci_last_regenerate|i:1570294463;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;success|s:31:\"Produto adicionado com sucesso!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('j31hrlm089c2aoqtqppmff7sopgoqgn4', '::1', '1570294880', '__ci_last_regenerate|i:1570294790;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;success|s:31:\"Produto adicionado com sucesso!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('usu1jhkjv7mdts351cdpqr7jgj6t7t9m', '::1', '1570300856', '__ci_last_regenerate|i:1570300570;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pjlh8nivtdpj4fnj49s564n7ka3ua4mn', '::1', '1570301176', '__ci_last_regenerate|i:1570300879;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6n264n4s9mb7nfdthd7lma6b24vmvevo', '::1', '1570301472', '__ci_last_regenerate|i:1570301180;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;success|s:45:\"As informações foram alteradas com sucesso.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('14nk06608bb8l472vnuf277tlls9kcd4', '::1', '1570301725', '__ci_last_regenerate|i:1570301515;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vs8u077ausv9s9mohbft8pgls01p8s0g', '::1', '1570302082', '__ci_last_regenerate|i:1570302061;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7608vrn63r0c8u8aa12q0mg1hns7adfj', '::1', '1570302876', '__ci_last_regenerate|i:1570302622;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('37tirskbg20i7ftrgi4q6n1ivn57dndc', '::1', '1570303109', '__ci_last_regenerate|i:1570302923;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('h6ro149peca6h7ou30gak1e495dl81p1', '::1', '1570303176', '__ci_last_regenerate|i:1570302941;nome|s:14:\"EDSON OLCHESKI\";email|s:21:\"olcheskieds@gmail.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ckcfn34jtln9atkgcgdeb8cejr044qrl', '::1', '1570303325', '__ci_last_regenerate|i:1570303308;nome|s:14:\"EDSON OLCHESKI\";email|s:15:\"edson@edson.com\";id|s:1:\"1\";permissao|s:1:\"1\";logado|b:1;');


#
# TABLE STRUCTURE FOR: clientes
#

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(255) NOT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `pessoa_fisica` tinyint(1) NOT NULL DEFAULT '1',
  `documento` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dataCadastro` date DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idClientes`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO `clientes` (`idClientes`, `nomeCliente`, `sexo`, `pessoa_fisica`, `documento`, `telefone`, `celular`, `email`, `dataCadastro`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`) VALUES ('50', 'Edson Olcheski', NULL, '1', '0', '0', '0', 'edson@edson.com', '2019-10-05', 'Rua Toledo', '0', 'Chapada', 'Ponta Grossa', 'PR', '84062380');


#
# TABLE STRUCTURE FOR: contas
#

DROP TABLE IF EXISTS `contas`;

CREATE TABLE `contas` (
  `idContas` int(11) NOT NULL AUTO_INCREMENT,
  `conta` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idContas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: documentos
#

DROP TABLE IF EXISTS `documentos`;

CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(70) DEFAULT NULL,
  `descricao` text,
  `file` varchar(100) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDocumentos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: emitente
#

DROP TABLE IF EXISTS `emitente`;

CREATE TABLE `emitente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `ie` varchar(50) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url_logo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `emitente` (`id`, `nome`, `cnpj`, `ie`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `url_logo`) VALUES ('1', 'Nome da sua assitencia', '0', '0000000', 'Rua Toledo', '0', 'Chapada', 'Ponta Grossa', 'PR', '984333221', 'olcheskielo@gmail.com', 'http://localhost/mapos/assets/uploads/23b1727dd6f09debc25d600d3824e715.jpg');


#
# TABLE STRUCTURE FOR: equipamentos
#

DROP TABLE IF EXISTS `equipamentos`;

CREATE TABLE `equipamentos` (
  `idEquipamentos` int(11) NOT NULL AUTO_INCREMENT,
  `equipamento` varchar(150) NOT NULL,
  `num_serie` varchar(80) DEFAULT NULL,
  `modelo` varchar(80) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `tensao` varchar(45) DEFAULT NULL,
  `potencia` varchar(45) DEFAULT NULL,
  `voltagem` varchar(45) DEFAULT NULL,
  `data_fabricacao` date DEFAULT NULL,
  `marcas_id` int(11) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEquipamentos`),
  KEY `fk_equipanentos_marcas1_idx` (`marcas_id`),
  KEY `fk_equipanentos_clientes1_idx` (`clientes_id`),
  CONSTRAINT `fk_equipanentos_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_equipanentos_marcas1` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`idMarcas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: equipamentos_os
#

DROP TABLE IF EXISTS `equipamentos_os`;

CREATE TABLE `equipamentos_os` (
  `idEquipamentos_os` int(11) NOT NULL AUTO_INCREMENT,
  `defeito_declarado` varchar(200) DEFAULT NULL,
  `defeito_encontrado` varchar(200) DEFAULT NULL,
  `solucao` varchar(45) DEFAULT NULL,
  `equipamentos_id` int(11) DEFAULT NULL,
  `os_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEquipamentos_os`),
  KEY `fk_equipamentos_os_equipanentos1_idx` (`equipamentos_id`),
  KEY `fk_equipamentos_os_os1_idx` (`os_id`),
  CONSTRAINT `fk_equipamentos_os_equipanentos1` FOREIGN KEY (`equipamentos_id`) REFERENCES `equipamentos` (`idEquipamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_equipamentos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: itens_de_vendas
#

DROP TABLE IF EXISTS `itens_de_vendas`;

CREATE TABLE `itens_de_vendas` (
  `idItens` int(11) NOT NULL AUTO_INCREMENT,
  `subTotal` varchar(45) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `vendas_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  PRIMARY KEY (`idItens`),
  KEY `fk_itens_de_vendas_vendas1` (`vendas_id`),
  KEY `fk_itens_de_vendas_produtos1` (`produtos_id`),
  CONSTRAINT `fk_itens_de_vendas_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_itens_de_vendas_vendas1` FOREIGN KEY (`vendas_id`) REFERENCES `vendas` (`idVendas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: lancamentos
#

DROP TABLE IF EXISTS `lancamentos`;

CREATE TABLE `lancamentos` (
  `idLancamentos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` varchar(15) NOT NULL,
  `data_vencimento` date NOT NULL,
  `data_pagamento` date DEFAULT NULL,
  `baixado` tinyint(1) DEFAULT '0',
  `cliente_fornecedor` varchar(255) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `anexo` varchar(250) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `categorias_id` int(11) DEFAULT NULL,
  `contas_id` int(11) DEFAULT NULL,
  `vendas_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLancamentos`),
  KEY `fk_lancamentos_clientes1` (`clientes_id`),
  KEY `fk_lancamentos_categorias1_idx` (`categorias_id`),
  KEY `fk_lancamentos_contas1_idx` (`contas_id`),
  CONSTRAINT `fk_lancamentos_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lancamentos_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lancamentos_contas1` FOREIGN KEY (`contas_id`) REFERENCES `contas` (`idContas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: logs
#

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `idLogs` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(80) DEFAULT NULL,
  `tarefa` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idLogs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: marcas
#

DROP TABLE IF EXISTS `marcas`;

CREATE TABLE `marcas` (
  `idMarcas` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(100) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idMarcas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: os
#

DROP TABLE IF EXISTS `os`;

CREATE TABLE `os` (
  `idOs` int(11) NOT NULL AUTO_INCREMENT,
  `dataInicial` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL,
  `garantia` varchar(45) DEFAULT NULL,
  `descricaoProduto` text,
  `defeito` text,
  `status` varchar(45) DEFAULT NULL,
  `observacoes` text,
  `laudoTecnico` text,
  `valorTotal` varchar(15) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `lancamento` int(11) DEFAULT NULL,
  `faturado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idOs`),
  KEY `fk_os_clientes1` (`clientes_id`),
  KEY `fk_os_usuarios1` (`usuarios_id`),
  KEY `fk_os_lancamentos1` (`lancamento`),
  CONSTRAINT `fk_os_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_os_lancamentos1` FOREIGN KEY (`lancamento`) REFERENCES `lancamentos` (`idLancamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_os_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: permissoes
#

DROP TABLE IF EXISTS `permissoes`;

CREATE TABLE `permissoes` (
  `idPermissao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `permissoes` text,
  `situacao` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`idPermissao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `permissoes` (`idPermissao`, `nome`, `permissoes`, `situacao`, `data`) VALUES ('1', 'Administrador', 'a:38:{s:8:\"aCliente\";s:1:\"1\";s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";s:1:\"1\";s:8:\"dProduto\";s:1:\"1\";s:8:\"vProduto\";s:1:\"1\";s:8:\"aServico\";s:1:\"1\";s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aOs\";s:1:\"1\";s:3:\"eOs\";s:1:\"1\";s:3:\"dOs\";s:1:\"1\";s:3:\"vOs\";s:1:\"1\";s:6:\"aVenda\";s:1:\"1\";s:6:\"eVenda\";s:1:\"1\";s:6:\"dVenda\";s:1:\"1\";s:6:\"vVenda\";s:1:\"1\";s:8:\"aArquivo\";s:1:\"1\";s:8:\"eArquivo\";s:1:\"1\";s:8:\"dArquivo\";s:1:\"1\";s:8:\"vArquivo\";s:1:\"1\";s:11:\"aLancamento\";s:1:\"1\";s:11:\"eLancamento\";s:1:\"1\";s:11:\"dLancamento\";s:1:\"1\";s:11:\"vLancamento\";s:1:\"1\";s:8:\"cUsuario\";s:1:\"1\";s:9:\"cEmitente\";s:1:\"1\";s:10:\"cPermissao\";s:1:\"1\";s:7:\"cBackup\";s:1:\"1\";s:8:\"rCliente\";s:1:\"1\";s:8:\"rProduto\";s:1:\"1\";s:8:\"rServico\";s:1:\"1\";s:3:\"rOs\";s:1:\"1\";s:6:\"rVenda\";s:1:\"1\";s:11:\"rFinanceiro\";s:1:\"1\";}', '1', '2014-09-03');


#
# TABLE STRUCTURE FOR: produtos
#

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `idProdutos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(80) NOT NULL,
  `unidade` varchar(10) DEFAULT NULL,
  `precoCompra` decimal(10,2) DEFAULT NULL,
  `precoVenda` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `estoqueMinimo` int(11) DEFAULT NULL,
  `saida` tinyint(1) DEFAULT NULL,
  `entrada` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idProdutos`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('2', 'Celular Galaxy Fame', 'UN', '0.00', '60.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('3', 'Moldura gram prime', 'UN', '0.00', '20.00', '10', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('4', 'Capinha gram prime', 'UN', '0.00', '15.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('5', 'Cabo usb Samsung', 'UN', '6.00', '20.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('6', 'Pelicula', 'UN', '5.00', '15.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('7', 'bateria usada', 'UN', '0.00', '20.00', '8', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('8', 'celular samsung young duos', 'UN', '50.00', '120.00', '10', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('9', 'tela moto g2 usada', 'UN', '0.00', '70.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('10', 'celular moto g1', 'UN', '80.00', '300.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('11', 'Moto E2', 'UN', '100.00', '300.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('12', 'Celular Lg E55F', 'UN', '30.00', '100.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('13', 'CELULAR GALAXY FAME DUOS', 'UN', '30.00', '100.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('14', 'Bateria Gram Prime/j3/j5', 'UN', '30.00', '40.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('15', 'Bateria moto g4', 'UN', '30.00', '50.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('16', 'Tampa traseira g4', 'UN', '20.00', '25.00', '9', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('17', 'Teclado usb ABTN2', 'UN', '19.00', '49.00', '4', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('18', 'Celular Gram Prime', 'UN', '50.00', '150.00', '1', '0', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('19', 'Sansung J2', 'UN', '70.00', '200.00', '4', '0', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('20', 'Pen Drive 16gb Nano Ultra Sandisk Cruzer Fit Pendrive Nano Marca: Sandisk', 'UN', '19.00', '29.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('21', 'Bateria Celular Samsung Galaxy J3 J320 J5 Duos J500 J500m', 'UN', '25.00', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('22', 'Bateria Asus Zenfone 2 Ze551 Ze550ml C11p1424', 'UN', '25.00', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('23', 'Tela Lcd Touch Display LG K4 2017 LG K4 Novo X230DS Tela 5.0&quot;', 'UN', '100.00', '159.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('24', 'Bateria Galaxy J7 Prime G610', 'UN', '29.90', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('25', 'Bateria Apple Iphone 6s Plus A1634 A1687 A1699', 'UN', '29.90', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('26', 'Bateria Samsung J5 Prime G570', 'UN', '29.00', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('27', 'Bateria Lithium EL40 1860/1980 mAh - Motorola Moto E 2014 Xt1021 Xt1022 Xt1025', 'UN', '29.00', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('28', 'Bateria Motorola Moto G3 Fc40 3ª Geração Xt1543 Xt1544', 'UN', '29.92', '59.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('29', 'Alto Falante Auricular Samsung J5 Pro SM-J530G J530F', 'UN', '9.90', '29.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('30', 'Alto Falante Voz Auricular Motorola Moto G Xt1032 Xt1033', 'UN', '5.99', '15.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('31', 'Fone Ouvido Celular Lg Kf755 Ke850 Ke970 Ke990', 'UN', '2.50', '10.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('32', 'Fone Ouvido Samsung D880 E746 E2550 F250 S3500 G600 Original', 'UN', '4.00', '15.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('33', 'Fone De Ouvido Samsung F250 B3410 B5702 B5722 C3050 Original', 'UN', '24.00', '50.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('34', 'capa carteira', 'UN', '9.00', '19.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('35', 'Carregador Turbo V8 Usb - Samsung Lg Moto G3 G4 Carga Rápida', 'UN', '19.90', '29.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('36', 'Carregador Universal', 'UN', '10.00', '15.90', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('37', 'Capinha de Silicone', 'UN', '5.00', '15.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('38', 'Fonte Notebook Acer', 'UN', '50.00', '90.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('39', 'Fonte Notebook Positivo', 'UN', '50.00', '90.00', '100', '1', '1', '1');
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`, `saida`, `entrada`) VALUES ('40', 'Fonte Desktop', 'UN', '50.00', '90.00', '100', '1', '1', '1');


#
# TABLE STRUCTURE FOR: produtos_os
#

DROP TABLE IF EXISTS `produtos_os`;

CREATE TABLE `produtos_os` (
  `idProdutos_os` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `subTotal` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idProdutos_os`),
  KEY `fk_produtos_os_os1` (`os_id`),
  KEY `fk_produtos_os_produtos1` (`produtos_id`),
  CONSTRAINT `fk_produtos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtos_os_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: servicos
#

DROP TABLE IF EXISTS `servicos`;

CREATE TABLE `servicos` (
  `idServicos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idServicos`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('7', 'Troca touch-screen Lg prime', 'Touchscreen', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('8', 'Troca touch-screen j1-mini', 'Touchscreen', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('10', 'Troca botao power/volume', 'Troca botao power', '50.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('11', 'Troca tela completa gram prime', 'Modulo Frontal', '140.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('12', 'Troca Modulo Frontal Alcatel Idol 3', 'Modulo Frontal', '170.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('13', 'Troca touch multilaser ms40s', 'Touchscreen', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('14', 'Troca flex flash/sensor de temperatura', 'flex moto g4 plus', '50.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('15', 'FRP G2/G3/X2/XPLAY/6.0', 'Desbloqueio Motorola', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('16', 'FRP quantum muv q13', 'desbloqueio conta google', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('17', 'Troca fllat power moto G4 Play', 'flex moto g4 play', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('18', 'Troca touch screem  tablet samsung', 'Touchscreen', '100.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('19', 'Troca Modulo Frontal Moto g1', 'Modulo Frontal', '130.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('20', 'Instalaçao do Android', 'software', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('21', 'Formatação Notebook/Desktop', 'Formataçao', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('22', 'Troca display pocket 2', 'Display', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('23', 'Restauraçao de Fabrica', 'Hard Reset', '30.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('24', 'Software Tablet', 'Software', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('25', 'Remoçao de Curto em placa', 'Curto', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('26', 'Troca Touchscreen Nokia c2', 'Touchscreen', '40.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('27', 'TrocaTouchscreen positivo s440', 'Touchscreen', '90.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('28', 'Troca Conector de Carga', 'Conector de Carga', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('29', 'Troca Touch Nokia Rm1080', 'Touchscreen', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('30', 'Troca Display Nokia Rm1080', 'Display', '90.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('31', 'Troca Touch e Display Lg L90', 'Touchscreen/Display', '120.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('32', 'Troca Modulo Nokia 630', 'Modulo Frontal', '180.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('33', 'Troca Display Pockt 2', 'Display', '80.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('34', 'Troca Touchscreen Tablet Simples', 'Touchscreen', '50.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('35', 'Troca Modulo Fronta Moto G3', 'Modulo Frontal', '140.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('36', 'Troca Modulo Frontal G4 Play', 'Modulo frontal', '190.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('38', 'Troca Display Gram Prime', 'Display', '150.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('39', 'Troca Modulo Frontal J5', 'Modulo Frontal', '250.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('40', 'Troca Frontal MotoE4', 'Modulo Frontal', '220.00');
INSERT INTO `servicos` (`idServicos`, `nome`, `descricao`, `preco`) VALUES ('41', 'Troca Tela de Notebook Led 14.0', 'Notebooks', '250.00');


#
# TABLE STRUCTURE FOR: servicos_os
#

DROP TABLE IF EXISTS `servicos_os`;

CREATE TABLE `servicos_os` (
  `idServicos_os` int(11) NOT NULL AUTO_INCREMENT,
  `os_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `subTotal` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idServicos_os`),
  KEY `fk_servicos_os_os1` (`os_id`),
  KEY `fk_servicos_os_servicos1` (`servicos_id`),
  CONSTRAINT `fk_servicos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_os_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`idServicos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: usuarios
#

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_usuarios_permissoes1_idx` (`permissoes_id`),
  CONSTRAINT `fk_usuarios_permissoes1` FOREIGN KEY (`permissoes_id`) REFERENCES `permissoes` (`idPermissao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`idUsuarios`, `nome`, `rg`, `cpf`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `permissoes_id`) VALUES ('1', 'EDSON OLCHESKI', '0', '0', 'Rua Toledo', '0', 'Chapada', 'Ponta Grossa', 'PARANA', 'edson@edson.com', '$2y$10$BJz9uahrJniL9AK4TGMVxec.n6eJKcNG..nRru/dS3L4htrqDe78O', '0', '0', '1', '2013-11-22', '1');
INSERT INTO `usuarios` (`idUsuarios`, `nome`, `rg`, `cpf`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `permissoes_id`) VALUES ('2', 'usuario2', '0', '0', '0', '0', '0', '0', '0', 'usuario2@gmail.com', '$2y$10$yiX4tx3cMIfXo55VxC4n5OIfha0W4IsbCfCtro09k6KaKlrP0Z1SK', '0', '0', '0', '2019-02-26', '1');


#
# TABLE STRUCTURE FOR: vendas
#

DROP TABLE IF EXISTS `vendas`;

CREATE TABLE `vendas` (
  `idVendas` int(11) NOT NULL AUTO_INCREMENT,
  `dataVenda` date DEFAULT NULL,
  `valorTotal` varchar(45) DEFAULT NULL,
  `desconto` varchar(45) DEFAULT NULL,
  `faturado` tinyint(1) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `lancamentos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVendas`),
  KEY `fk_vendas_clientes1` (`clientes_id`),
  KEY `fk_vendas_usuarios1` (`usuarios_id`),
  KEY `fk_vendas_lancamentos1` (`lancamentos_id`),
  CONSTRAINT `fk_vendas_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_lancamentos1` FOREIGN KEY (`lancamentos_id`) REFERENCES `lancamentos` (`idLancamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

SET foreign_key_checks = 1;
