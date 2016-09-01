USE porquinho;

CREATE TABLE IF NOT EXISTS usuario (
  seq_usuario INT(6) AUTO_INCREMENT COMMENT 'Identificador unico do usuario do sistema'
  ,nom_usuario VARCHAR(50) COMMENT 'Nome completo do usuario'
  ,eml_usuario VARCHAR(100) NOT NULL COMMENT 'E-mail do usuario que e a chave de acesso ao sistema'
  ,val_senha VARCHAR(50) NOT NULL COMMENT 'Senha de acesso ao sistema. Criptografada'
  ,tip_genero CHAR(1) NOT NULL DEFAULT 'N' COMMENT 'N - nao informado, M - masculino, F - feminio'
  ,dat_nascimento DATETIME NOT NULL COMMENT 'Data de nascimento do usuario do sistema para eventuais acoes de marketing e analise de perfil'
  ,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
  ,dat_inativo DATETIME DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
  ,PRIMARY KEY (seq_usuario)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os usuario do sistema';

CREATE TABLE IF NOT EXISTS categoria_grupo (
  tip_grupo CHAR(3) NOT NULL COMMENT 'Identificador do tipo de grupo a que pertence uma categoria'
  ,nom_grupo VARCHAR (50) NOT NULL COMMENT 'FIX - gastos fixos, HAB - habitacao, SAU - saude, AUT - automovel, PES - pessoal, LAZ - lazer, DEP - dependentes, INV - investimento, TAX - impostos e taxas'
  ,txt_grupo TEXT COMMENT 'Explicacao sobre as categorias que fazem parte do grupo'
  ,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
  ,dat_inativo DATETIME DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
  ,PRIMARY KEY(tip_grupo)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os grupos a que pertencem as categorias';

CREATE TABLE IF NOT EXISTS categoria (
  seq_categoria INT(6) AUTO_INCREMENT COMMENT 'Identificador unico da categoria do sistema'
  ,nom_categoria VARCHAR(50) NOT NULL COMMENT 'Descricao da categoria de gastos'
  ,txt_categoria VARCHAR(255) NOT NULL COMMENT 'Explicacao sobre os tipos de gastos dessa categoria'
  ,ind_categoria CHAR(1) NOT NULL DEFAULT 'D' COMMENT 'R - receita, D - despesa, I - investimento'
  ,tip_grupo CHAR(3) NOT NULL COMMENT 'Identificador do grupo de gastos'
  ,seq_usuario INT(6) NOT NULL COMMENT 'Identificador o dono dos lancamentos'
  ,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
  ,dat_inativo DATETIME DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
  ,PRIMARY KEY(seq_categoria)
  ,FOREIGN KEY (seq_usuario) REFERENCES usuario(seq_usuario)
  ,FOREIGN KEY (tip_grupo) REFERENCES categoria_grupo(tip_grupo)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as categorias usadas por um usuario para classificar as receitas e despesas';

CREATE TABLE IF NOT EXISTS regra (
  seq_regra INT(6) AUTO_INCREMENT COMMENT 'Identificador unico da regra que associa um lancamento a uma categoria'
  ,seq_usuario INT(6) COMMENT 'Identificador o dono das regras'
  ,des_regra VARCHAR(255) NOT NULL COMMENT 'Descricao da regra. Ex: ANA MARIA'
  ,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
  ,dat_inativo DATETIME DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
  ,seq_categoria INT(6) NOT NULL COMMENT 'Identificador da categoria do lancamento'
  ,PRIMARY KEY (seq_regra, seq_usuario)
  ,FOREIGN KEY (seq_usuario) REFERENCES usuario(seq_usuario)
  ,FOREIGN KEY (seq_categoria) REFERENCES categoria(seq_categoria)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as regras para classificar os lancamentos';

CREATE TABLE IF NOT EXISTS lancamento (
  seq_lancamento INT(6) AUTO_INCREMENT COMMENT 'Identificador unico do lancamento'
  ,seq_usuario INT(6) COMMENT 'Identificador do dono dos lancamentos'
  ,seq_categoria INT(6) COMMENT 'Identificador da categoria do lancamento'
  ,dat_lancamento DATE NOT NULL COMMENT 'Data do lancamento da receita ou despesa vindos do extrato da conta ou do cartao. Os lancamentos manuais usarao o primeiro dia do mes'
  ,mes_lancamento TINYINT(2) NOT NULL COMMENT 'Mes da data de lancamento'
  ,ano_lancamento SMALLINT(4) NOT NULL COMMENT 'Ano da data de lancamento'
  ,val_lancamento NUMERIC(11,2) NOT NULL COMMENT 'Valor do lancamento de despesa ou receita ou investimento, conforme a categoria'
  ,txt_lancamento VARCHAR(100) NOT NULL COMMENT 'Descricao vinda do extrato da conta ou do cartao de credito'
  ,tip_origem CHAR(3) NOT NULL COMMENT 'DEB - debito, CRE - credito, MAN - manual'
  ,nom_origem VARCHAR(30) NOT NULL COMMENT 'Nome do banco fonte do lancamento'
  ,txt_origem VARCHAR(50) NOT NULL COMMENT 'Numero da conta corrente ou do cartao de credito fonte do lancamento. Se o lancamento for manual nao sera processado pelas regras'
  ,cod_identificacao VARCHAR(50) NOT NULL COMMENT 'Identificador do lancamento vindo do extrato ou do cartao de credito. Para lancamentos manuais sera gerado um codigo'
  ,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
  ,dat_inativo DATETIME DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
  ,PRIMARY KEY (seq_lancamento, seq_usuario)
  ,FOREIGN KEY (seq_usuario) REFERENCES usuario(seq_usuario)
  ,FOREIGN KEY (seq_categoria) REFERENCES categoria(seq_categoria)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os lancamentos de receita ou despesa vindas da conta corrente, do cartao de credito, do lancamento manual e sua categoria';

CREATE VIEW vw_lancamento AS
select l.seq_lancamento, l.seq_usuario,l.seq_categoria,l.dat_lancamento,
       l.mes_lancamento,l.ano_lancamento,l.val_lancamento,l.txt_lancamento,
       l.tip_origem,l.nom_origem,l.txt_origem,l.cod_identificacao,
       l.dat_cadastro,l.dat_inativo,l.tipo_id,c.ind_categoria,c.nom_categoria,
       c.tip_grupo,g.nom_grupo
from lancamento l
  join categoria c
    on l.seq_categoria = c.seq_categoria
  join categoria_grupo g
    on c.tip_grupo = g.tip_grupo;

CREATE VIEW vw_despesa AS 
select l.seq_lancamento, l.seq_usuario,l.seq_categoria,l.dat_lancamento,
       l.mes_lancamento,l.ano_lancamento,l.val_lancamento,l.txt_lancamento,
       l.tip_origem,l.nom_origem,l.txt_origem,l.cod_identificacao,
       l.dat_cadastro,l.dat_inativo,l.tipo_id,c.nom_categoria,
       c.tip_grupo,g.nom_grupo
from lancamento l
  join categoria c
    on l.seq_categoria = c.seq_categoria
  join categoria_grupo g
    on c.tip_grupo = g.tip_grupo
where c.ind_categoria = 'D';

CREATE VIEW vw_receita AS 
select l.seq_lancamento, l.seq_usuario,l.seq_categoria,l.dat_lancamento,
       l.mes_lancamento,l.ano_lancamento,l.val_lancamento,l.txt_lancamento,
       l.tip_origem,l.nom_origem,l.txt_origem,l.cod_identificacao,
       l.dat_cadastro,l.dat_inativo,l.tipo_id,c.nom_categoria,
       c.tip_grupo,g.nom_grupo
from lancamento l
  join categoria c
    on l.seq_categoria = c.seq_categoria
  join categoria_grupo g
    on c.tip_grupo = g.tip_grupo
where c.ind_categoria = 'R';

CREATE VIEW vw_investimento AS 
select l.seq_lancamento, l.seq_usuario,l.seq_categoria,l.dat_lancamento,
       l.mes_lancamento,l.ano_lancamento,l.val_lancamento,l.txt_lancamento,
       l.tip_origem,l.nom_origem,l.txt_origem,l.cod_identificacao,
       l.dat_cadastro,l.dat_inativo,l.tipo_id,c.nom_categoria,
       c.tip_grupo,g.nom_grupo
from lancamento l
  join categoria c
    on l.seq_categoria = c.seq_categoria
  join categoria_grupo g
    on c.tip_grupo = g.tip_grupo
where c.ind_categoria = 'I';
