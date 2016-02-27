CREATE DATABASE porquinho;

CREATE USER 'usrporquinho'@'localhost' IDENTIFIED BY 'porquinhousr';
GRANT ALL PRIVILEGES ON porquinho. * TO 'usrporquinho'@'localhost';
FLUSH PRIVILEGES;

USE porquinho;

CREATE TABLE IF NOT EXISTS categoria (
  seq_categoria INT(6) AUTO_INCREMENT
  ,nom_categoria VARCHAR(50) NOT NULL
  ,txt_categoria VARCHAR(255) NOT NULL
  ,ind_categoria CHAR(1) NOT NULL DEFAULT 'D' COMMENT 'R - receita, D - despesa'
  ,tip_grupo CHAR(3) NOT NULL COMMENT 'FIX - gastos fixos, HAB - habitacao, SAU - saude, AUT - automovel, PES - pessoal, LAZ - lazer, DEP - dependentes, INV - investimento, TAX - impostos e taxas'
  ,dat_inativo DATE
  ,PRIMARY KEY(seq_categoria)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as categorias em para classificar as receitas e despesas';

CREATE TABLE IF NOT EXISTS usuario (
  seq_usuario INT(6) AUTO_INCREMENT
  ,nom_usuario VARCHAR(50) NOT NULL DEFAULT ''
  ,eml_usuario varchar(255) NOT NULL DEFAULT ''
  ,tip_origem CHAR(3) NOT NULL DEFAULT 'GOO' COMMENT 'GOO - Google, FAC - Facebook'
  ,dat_inativo DATE
  ,PRIMARY KEY (seq_usuario)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as categorias em para classificar as receitas e despesas';

CREATE TABLE IF NOT EXISTS lancamento (
  seq_lancamento INT(6) AUTO_INCREMENT
  ,seq_usuario INT(6) COMMENT 'Identificador o dono dos lancamentos'
  ,dat_lancamento TIMESTAMP NOT NULL
  ,dia_lancamento TINYINT NOT NULL
  ,mes_lancamento TINYINT NOT NULL
  ,ano_lancamento TINYINT NOT NULL
  ,val_lancamento FLOAT NOT NULL COMMENT 'Valor com sinal de +/- para identificar a receita ou a despesa'
  ,num_lancamento VARCHAR(50) NOT NULL
  ,txt_lancamento VARCHAR(100) NOT NULL
  ,seq_categoria INT(6) COMMENT 'Identificador da categoria do lancamento'
  ,PRIMARY KEY (seq_lancamento, seq_usuario)
  ,FOREIGN KEY (seq_usuario) REFERENCES usuario(seq_usuario)
  ,FOREIGN KEY (seq_categoria) REFERENCES categoria(seq_categoria)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os lancamentos de receita ou despesa vindos da conta corrente ou do cartao de credito e sua categoria';

CREATE TABLE IF NOT EXISTS regra (
  seq_regra INT(6) AUTO_INCREMENT
  ,seq_usuario INT(6) COMMENT 'Identificador o dono das regras'
  ,des_regra VARCHAR(255) NOT NULL
  ,tip_regra CHAR(3) NOT NULL DEFAULT 'LIK' COMMENT 'LIK - txt_lancamento que contem a regra, EXA - txt_lancamento com exatamente esta regra'
  ,dat_inativo DATE
  ,seq_categoria INT(6) NOT NULL COMMENT 'Identificador da categoria do lancamento'
  ,PRIMARY KEY (seq_regra, seq_usuario)
  ,FOREIGN KEY (seq_usuario) REFERENCES usuario(seq_usuario)
  ,FOREIGN KEY (seq_categoria) REFERENCES categoria(seq_categoria)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as regras para classificar os lancamentos';
