use porquinho;
#Receitas
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Salário","O valor líquido referente ao seu pagamento", "R", "ENT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Outras receitas","Um bönus, devolução de dinheiro emprestado", "R", "ENT","now()");
#Habitacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Aluguel","O valor mensal gasto com aluguel","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Condomínio","O valor mensal gasto com condomínio","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Energia elétrica","O valor mensal gasto com energia elétrica","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Água","O valor mensal gasto com água","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Telefone fixo","O valor mensal gasto com o telefone fixo","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("TV a cabo","O valor mensal gasto com NET, SKY e etc","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Internet","O valor mensal gasto com internet","D","HAB","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("IPTU","O valor gasto com IPTU","D","HAB","now()");
#Servicos
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Reformas/Consertos","O valor gasto em reformas e consertos da sua casa ou equipamentos","D","SER","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Jardineiro","O valor gasto com os cuidados do jardim","D","SER","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Faxineira","O valor gasto com aquela pessoa que tanto ajuda","D","SER","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Passadeira","O valor gasto com aquela pessoa que cuida das suas roupas","D","SER","now()");
#Outros
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Outras despesas","O valor gasto com despesas não relacionadas","D","DES","now()");
#Saude
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Plano de saúde","O valor mensal gasto com seu plano de saúde","D","SAU","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Dentista","O valor gasto com quem cuida dos seus dentes","D","SAU","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Remédios","O valor gasto com remédio","D","SAU","now()");
#Automovel
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Prestação","O valor mensal gasto para pagar a prestação do seu carro","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Seguro","O valor da parcela do seguro do seu carro","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Combustível","O valor gasto abastecendo seu carro","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("IPVA","O valor da parcela ou total pago no IPVA","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Seguro obrigatório","O valor da parcela ou total pago no seguro obrigatório","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Licenciamento","O valor da parcela o total pago no licenciamento","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Manutenção","O valor pago em manutenções do automóvel","D","AUT","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Multas","O valor pago em multas de trânsito","D","AUT","now()");
#Pessoal
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Presentes","O valor gasto em presentes","D","PES","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Cabeleireiro/Salão","O valor gasto em salões de beleza","D","PES","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Roupas","O valor gasto com vestuário em geral","D","PES","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Academia","O valor mensal pago em academia","D","PES","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Telefone celular","O valor mensal gasto com telefone celular","D","ENT","now()");
#Alimentacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Padaria","O valor gasto com pães e lanches","D","ALI","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Supermercado","O valor gasto com alimentos para sua casa","D","ALI","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Restaurantes","O valor gasto com refeições fora de casa","D","ALI","now()");
#Educacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Educação","O valor gasto com cursos, faculdade e outras instituições de ensino","D","EDU","now()");
#Doacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Doação","O valor doado para instituições, parentes ou pessoas físicas","D","DOA","now()");
#Transporte
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Transporte","O valor gasto com metrô, önibus e outras formas de locomoção","D","TRA","now()");
#Lazer
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Cafés/Bares/Boates","O valor gasto com bebidas e afins","D","LAZ","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Livraria/Jornal/Revista","O valor gasto com leitura","D","LAZ","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Vídeo/Cinema/Teatro/Shows","O valor gastom com shows e ingressos em geral","D","LAZ","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("CDs/DVDs/Acessórios","O valor gasto com seus artistas favoritos","D","LAZ","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Hobby","O valor gasto com algum hobby: escoteiro, aula de violão, aula de pintura e etc","D","LAZ","now()");
#Ferias
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Passagens","O valor gasto com passagens para viajar","D","FER","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Hospedagem","O valor gasto com hospedagem durante sua viagem","D","FER","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Clube de férias","O valor mensal gasto com clubes de férias","D","FER","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Carro","O valor gasto com o aluguel de carros durante suas férias","D","FER","now()");
#Filhos
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Educação","O valor mensal gasto com a educação do seus filhos","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Transporte","O valor mensal gasto com o transporte do seus filhos","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Esporte","O valor mensal gasto com o esporte do seu filho","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Idioma","O valor gasto com outros idiomas para o seu flho","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Material escolar","O valor gasto com material escolar ao longo do ano","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Uniforme","O valor gasto com uniforme ao longo do ano","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Mesada","O valor mensal para as despesas do seu filho para trabalhar gestão financeira, autonomia e responsabilidade","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Vestuário","O valor gasto com roupas para o seu filho","D","DEP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Pensão","D","O valor gasto com pensão para seus filhos","DEP","now()");
#Investimento
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Aposentadoria","O valor mensal ou eventual investido para sua aposentadoria","D","INV","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Dependente","O valor mensal ou eventual investido para o futuro do seu dependente","D","INV","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Férias","O valor mensal ou eventual investido para suas próximas férias","D","INV","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Meta","O valor mensal o eventual investido para uma meta específica","D","INV","now()");
#Impostos e taxas
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Impostos","O valor gasto em impostos federais, estaduais ou municipais","D","IMP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Taxas","O valor gasto com taxas de bancos, de cartão ou pacotes de serviços","D","IMP","now()");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo,dat_inativo) VALUES("Multas","O valor gasto com multas diferentes de trânsito","D","IMP","now()");
