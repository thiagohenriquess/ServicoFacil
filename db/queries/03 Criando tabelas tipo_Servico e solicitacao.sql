CREATE TABLE `tipo_servico` (
  `tipo_servico_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `solicitacao` (
  `solicitacao_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `data_inicio` varchar(30) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `tipo_servico_id` int(11) DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
