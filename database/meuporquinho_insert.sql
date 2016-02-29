use porquinho;
#Receitas
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Salário","O valor líquido referente ao seu pagamento", "R", "ENT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Outras receitas","Um bönus, devolução de dinheiro emprestado", "R", "ENT");
#Habitacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Aluguel","O valor mensal gasto com aluguel","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Condomínio","O valor mensal gasto com condomínio","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Energia elétrica","O valor mensal gasto com energia elétrica","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Água","O valor mensal gasto com água","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Telefone fixo","O valor mensal gasto com o telefone fixo","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("TV a cabo","O valor mensal gasto com NET, SKY e etc","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Internet","O valor mensal gasto com internet","D","HAB");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("IPTU","O valor gasto com IPTU","D","HAB");
#Servicos
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Reformas/Consertos","O valor gasto em reformas e consertos da sua casa ou equipamentos","D","SER");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Jardineiro","O valor gasto com os cuidados do jardim","D","SER");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Faxineira","O valor gasto com aquela pessoa que tanto ajuda","D","SER");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Passadeira","O valor gasto com aquela pessoa que cuida das suas roupas","D","SER");
#Outros
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Outras despesas","O valor gasto com despesas não relacionadas","D","DES");
#Saude
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Plano de saúde","O valor mensal gasto com seu plano de saúde","D","SAU");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Dentista","O valor gasto com quem cuida dos seus dentes","D","SAU");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Remédios","O valor gasto com remédio","D","SAU");
#Automovel
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Prestação","O valor mensal gasto para pagar a prestação do seu carro","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Seguro","O valor da parcela do seguro do seu carro","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Combustível","O valor gasto abastecendo seu carro","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("IPVA","O valor da parcela ou total pago no IPVA","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Seguro obrigatório","O valor da parcela ou total pago no seguro obrigatório","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Licenciamento","O valor da parcela o total pago no licenciamento","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Manutenção","O valor pago em manutenções do automóvel","D","AUT");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Multas","O valor pago em multas de trânsito","D","AUT");
#Pessoal
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Presentes","O valor gasto em presentes","D","PES");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Cabeleireiro/Salão","O valor gasto em salões de beleza","D","PES");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Roupas","O valor gasto com vestuário em geral","D","PES");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Academia","O valor mensal pago em academia","D","PES");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Telefone celular","O valor mensal gasto com telefone celular","D","ENT");
#Alimentacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Padaria","O valor gasto com pães e lanches","D","ALI");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Supermercado","O valor gasto com alimentos para sua casa","D","ALI");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Restaurantes","O valor gasto com refeições fora de casa","D","ALI");
#Educacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Educação","O valor gasto com cursos, faculdade e outras instituições de ensino","D","EDU");
#Doacao
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Doação","O valor doado para instituições, parentes ou pessoas físicas","D","DOA");
#Transporte
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Transporte","O valor gasto com metrô, önibus e outras formas de locomoção","D","TRA");
#Lazer
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Cafés/Bares/Boates","O valor gasto com bebidas e afins","D","LAZ");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Livraria/Jornal/Revista","O valor gasto com leitura","D","LAZ");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Vídeo/Cinema/Teatro/Shows","O valor gastom com shows e ingressos em geral","D","LAZ");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("CDs/DVDs/Acessórios","O valor gasto com seus artistas favoritos","D","LAZ");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Hobby","O valor gasto com algum hobby: escoteiro, aula de violão, aula de pintura e etc","D","LAZ");
#Ferias
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Passagens","O valor gasto com passagens para viajar","D","FER");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Hospedagem","O valor gasto com hospedagem durante sua viagem","D","FER");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Clube de férias","O valor mensal gasto com clubes de férias","D","FER");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Carro","O valor gasto com o aluguel de carros durante suas férias","D","FER");
#Filhos
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Educação","O valor mensal gasto com a educação do seus filhos","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Transporte","O valor mensal gasto com o transporte do seus filhos","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Esporte","O valor mensal gasto com o esporte do seu filho","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Idioma","O valor gasto com outros idiomas para o seu flho","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Material escolar","O valor gasto com material escolar ao longo do ano","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Uniforme","O valor gasto com uniforme ao longo do ano","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Mesada","O valor mensal para as despesas do seu filho para trabalhar gestão financeira, autonomia e responsabilidade","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Vestuário","O valor gasto com roupas para o seu filho","D","DEP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Pensão","D","O valor gasto com pensão para seus filhos","DEP");
#Investimento
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Aposentadoria","O valor mensal ou eventual investido para sua aposentadoria","D","INV");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Dependente","O valor mensal ou eventual investido para o futuro do seu dependente","D","INV");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Férias","O valor mensal ou eventual investido para suas próximas férias","D","INV");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Meta","O valor mensal o eventual investido para uma meta específica","D","INV");
#Impostos e taxas
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Impostos","O valor gasto em impostos federais, estaduais ou municipais","D","IMP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Taxas","O valor gasto com taxas de bancos, de cartão ou pacotes de serviços","D","IMP");
INSERT INTO categoria(nom_categoria,txt_categoria,ind_categoria,tip_grupo) VALUES("Multas","O valor gasto com multas diferentes de trânsito","D","IMP");
