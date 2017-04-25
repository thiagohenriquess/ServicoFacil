  ALTER TABLE usuario ADD COLUMN(
  `uid` varchar(50) ,
  `data_ts` varchar(14) ,
  `ativo` tinyint(1) DEFAULT '0',);