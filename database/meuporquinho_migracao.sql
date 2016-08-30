INSERT INTO usuario(nom_usuario,eml_usuario,val_senha,tip_genero,dat_nascimento) VALUES("Eliezer Trajano","eliezer@trajanux.com.br",md5("godblessyou"), "M", "1990-01-01");
INSERT INTO usuario(nom_usuario,eml_usuario,val_senha,tip_genero,dat_nascimento) VALUES("João Paulo Cirino Silva de Novais","jp.pessoal@gmail.com",md5("linux1"), "M", "1980-07-01");

INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('MIG','Migração'); 

alter table categoria add column tipo_id smallint comment 'Identificador da categoria na versao anterior';

insert into categoria (nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario,tipo_id)
select descricao, 'Sugestão de gastos para esta categoria','R', 'MIG',(select seq_usuario from usuario where eml_usuario = 'jp.pessoal@gmail.com'),id
from tipo
where tipo = 1;

insert into categoria (nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario,tipo_id)
select descricao, 'Sugestão de gastos para esta categoria','D', 'MIG',(select seq_usuario from usuario where eml_usuario = 'jp.pessoal@gmail.com'),id
from tipo
where tipo = 0;

alter table regra add column tipo_id smallint comment 'Identificador da categoria na versao anterior';

insert into regra(seq_usuario,des_regra,seq_categoria,tipo_id)
select (select seq_usuario from usuario where eml_usuario = 'jp.pessoal@gmail.com'),descricao,(select seq_categoria from categoria limit 1),tipo
from tipo_palavras;

alter table lancamento add column tipo_id smallint comment 'Identificador da categoria na versao anterior';

insert into lancamento(seq_usuario,seq_categoria,dat_lancamento,mes_lancamento,
                       ano_lancamento,val_lancamento,txt_lancamento,tip_origem,
                       nom_origem,txt_origem,cod_identificacao,tipo_id)
select (select seq_usuario from usuario where eml_usuario = 'jp.pessoal@gmail.com'),
        (select seq_categoria from categoria limit 1),
        concat_ws('-',substr(data,7,4),substr(data,4,2),substr(data,1,2)),mes,
       ano,valor,item,case tiporegistro 
                         when 'Cartão de Crédito' then 'CRE'
                         when 'Débito em Conta' then 'DEB'
                         when '' then 'MAN'
					  end,
	   banco,agenciacontacartao,identificacao,tipo
from tarefas;

update lancamento set val_lancamento = val_lancamento * -1 
where val_lancamento < 0;

update regra set seq_categoria = 
(select seq_categoria from categoria where categoria.tipo_id = regra.tipo_id);

update lancamento set seq_categoria = 
(select seq_categoria from categoria where categoria.tipo_id = lancamento.tipo_id);

/*
Conferindo

select c.seq_categoria, c.nom_categoria,t.id,t.descricao
from categoria c
inner join tipo t
where c.tipo_id = t.id

select l.tipo_id,l.seq_categoria,c.nom_categoria,t.descricao
from lancamento l
inner join categoria c
   on l.tipo_id = c.tipo_id
inner join tipo t
   on c.tipo_id = t.id
*/
