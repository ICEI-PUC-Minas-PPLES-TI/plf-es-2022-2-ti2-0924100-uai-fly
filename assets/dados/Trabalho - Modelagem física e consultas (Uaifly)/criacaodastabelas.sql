create table cliente (
	id_cliente int primary key auto_increment,
    nome varchar(50),
    data_nascimento varchar(50),
	telefone int, 
	email varchar(50), 
	ruaEndereco varchar(50), 
	complementoEndereco varchar(50), 
	estadoEndereco varchar(50), 
	cidade varchar(50), 
	numeroEndereço varchar(50), 
	numero_cartao int, 
	cv_cartao int, 
	valdadeCartao varchar(50)
);

create table dadosvoo (
	id_cliente int primary key,
    numero_voo int,
	aeroporto_partida varchar(50), 
	aeroporto_chegada varchar(50), 
	numero_assento int, 
	companhia_aerea varchar(50),
    constraint id_cliente foreign key (id_cliente) references cliente (id_cliente)
);

create table compra (
	cartao_embarque int primary key,
    id_cliente int,
    constraint id_cliente1 foreign key (id_cliente) references dadosvoo (id_cliente)
);

create table bagagem (
	codBagagem int primary key auto_increment,
    dimensaoBagagem varchar(30),
	pesoBagagem varchar(30), 
	id_cliente int,
    constraint id_cliente2 foreign key (id_cliente) references cliente (id_cliente)
);

create table statusbagagem (
	codBagagem int primary key,
    id_cliente int,
    bagagemExtraviada varchar(50), 
	bagagemCurso varchar(50), 
	bagagemEntregue varchar(50),
    constraint id_cliente3 foreign key (id_cliente) references cliente (id_cliente),
    constraint codBagagem foreign key (codBagagem) references bagagem (codBagagem)
);

create table avaliacao (
	id_cliente int primary key,
    comentario varchar(50),
	nota int,
    constraint id_cliente4 foreign key (id_cliente) references cliente (id_cliente)
);













