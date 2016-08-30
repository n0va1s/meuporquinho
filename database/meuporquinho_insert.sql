use porquinho;
#Usuario
INSERT INTO usuario(nom_usuario,eml_usuario,val_senha,tip_genero,dat_nascimento) VALUES("João Paulo Cirino Silva de Novais","jp.pessoal@gmail.com",md5("linux1"), "M", "1980-07-01");
INSERT INTO usuario(nom_usuario,eml_usuario,val_senha,tip_genero,dat_nascimento) VALUES("Isabela Patrocínio Vieira de Araújo","isapatrocinio@gmail.com",md5("amojp"), "F", "1980-09-14");
#Grupo de categorias
/*
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('MIG','Migração'); 
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('FIX','Gastos fixos');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('HAB','Habitação');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('SAU','Saúde');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('AUT','Automóvel');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('PES','Pessoal');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('LAZ','Lazer');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('DEP','Dependentes');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('INV','Investimento');
INSERT INTO categoria_grupo(tip_grupo, nom_grupo) VALUES('TAX','Impostos e taxas');
*/
#Receitas
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Salário","O valor líquido referente ao seu pagamento", "R", "ENT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Outras receitas","Um bönus, devolução de dinheiro emprestado", "R", "ENT",1);
#Habitacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Aluguel","O valor mensal gasto com aluguel","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Condomínio","O valor mensal gasto com condomínio","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Energia elétrica","O valor mensal gasto com energia elétrica","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Água","O valor mensal gasto com água","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Telefone fixo","O valor mensal gasto com o telefone fixo","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("TV a cabo","O valor mensal gasto com NET, SKY e etc","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Internet","O valor mensal gasto com internet","D","HAB",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("IPTU","O valor gasto com IPTU","D","HAB",1);
#Servicos
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Reformas/Consertos","O valor gasto em reformas e consertos da sua casa ou equipamentos","D","SER",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Jardineiro","O valor gasto com os cuidados do jardim","D","SER",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Faxineira","O valor gasto com aquela pessoa que tanto ajuda","D","SER",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Passadeira","O valor gasto com aquela pessoa que cuida das suas roupas","D","SER",1);
#Outros
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Outras despesas","O valor gasto com despesas não relacionadas","D","DES",1);
#Saude
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Plano de saúde","O valor mensal gasto com seu plano de saúde","D","SAU",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Dentista","O valor gasto com quem cuida dos seus dentes","D","SAU",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Remédios","O valor gasto com remédio","D","SAU",1);
#Automovel
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Prestação","O valor mensal gasto para pagar a prestação do seu carro","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Seguro","O valor da parcela do seguro do seu carro","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Combustível","O valor gasto abastecendo seu carro","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("IPVA","O valor da parcela ou total pago no IPVA","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Seguro obrigatório","O valor da parcela ou total pago no seguro obrigatório","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Licenciamento","O valor da parcela o total pago no licenciamento","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Manutenção","O valor pago em manutenções do automóvel","D","AUT",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Multas","O valor pago em multas de trânsito","D","AUT",1);
#Pessoal
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Presentes","O valor gasto em presentes","D","PES",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Cabeleireiro/Salão","O valor gasto em salões de beleza","D","PES",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Roupas","O valor gasto com vestuário em geral","D","PES",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Academia","O valor mensal pago em academia","D","PES",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Telefone celular","O valor mensal gasto com telefone celular","D","ENT",1);
#Alimentacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Padaria","O valor gasto com pães e lanches","D","ALI",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Supermercado","O valor gasto com alimentos para sua casa","D","ALI",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Restaurantes","O valor gasto com refeições fora de casa","D","ALI",1);
#Educacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Educação","O valor gasto com cursos, faculdade e outras instituições de ensino","D","EDU",1);
#Doacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Doação","O valor doado para instituições, parentes ou pessoas físicas","D","DOA",1);
#Transporte
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Transporte","O valor gasto com metrô, önibus e outras formas de locomoção","D","TRA",1);
#Lazer
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Cafés/Bares/Boates","O valor gasto com bebidas e afins","D","LAZ",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Livraria/Jornal/Revista","O valor gasto com leitura","D","LAZ",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Vídeo/Cinema/Teatro/Shows","O valor gastom com shows e ingressos em geral","D","LAZ",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("CDs/DVDs/Acessórios","O valor gasto com seus artistas favoritos","D","LAZ",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Hobby","O valor gasto com algum hobby: escoteiro, aula de violão, aula de pintura e etc","D","LAZ",1);
#Ferias
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Passagens","O valor gasto com passagens para viajar","D","FER",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Hospedagem","O valor gasto com hospedagem durante sua viagem","D","FER",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Clube de férias","O valor mensal gasto com clubes de férias","D","FER",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Carro","O valor gasto com o aluguel de carros durante suas férias","D","FER",1);
#Filhos
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Educação","O valor mensal gasto com a educação do seus filhos","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Transporte","O valor mensal gasto com o transporte do seus filhos","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Esporte","O valor mensal gasto com o esporte do seu filho","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Idioma","O valor gasto com outros idiomas para o seu flho","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Material escolar","O valor gasto com material escolar ao longo do ano","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Uniforme","O valor gasto com uniforme ao longo do ano","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Mesada","O valor mensal para as despesas do seu filho para trabalhar gestão financeira, autonomia e responsabilidade","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Vestuário","O valor gasto com roupas para o seu filho","D","DEP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Pensão","O valor gasto com pensão para seus filhos","D","DEP",1);
#Investimento
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Dependente","O valor mensal ou eventual investido para o futuro do seu dependente","D","INV",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Férias","O valor mensal ou eventual investido para suas próximas férias","D","INV",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Meta","O valor mensal o eventual investido para uma meta específica","D","INV",1);
#Impostos e taxas
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Impostos","O valor gasto em impostos federais, estaduais ou municipais","D","IMP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Taxas","O valor gasto com taxas de bancos, de cartão ou pacotes de serviços","D","IMP",1);
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,seq_usuario) VALUES("Multas","O valor gasto com multas diferentes de trânsito","D","IMP",1);
