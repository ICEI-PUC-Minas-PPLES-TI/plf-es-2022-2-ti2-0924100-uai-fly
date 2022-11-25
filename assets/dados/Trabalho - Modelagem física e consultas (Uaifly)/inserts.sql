/*Cliente*/

insert into cliente(nome, data_nascimento,telefone,email,ruaEndereco,
complementoEndereco, estadoEndereco,cidade, numeroEndereço, numero_cartao, cv_cartao, valdadeCartao) values 
('Henrique','20/10/2001',3199,'henrique@gmail.com','Rua A', 'Casa','Minas Gerais','Paropeba','333',123321,939,'08/28');

insert into cliente(nome, data_nascimento,telefone,email,ruaEndereco,
complementoEndereco, estadoEndereco,cidade, numeroEndereço, numero_cartao, cv_cartao, valdadeCartao) values 
('Jose','20/01/1998',3799,'jose@gmail.com','Rua b', 'Ap300','Sao Paulo','Sao Paulo','777',45697,259,'07/25');

insert into cliente(nome, data_nascimento,telefone,email,ruaEndereco,
complementoEndereco, estadoEndereco,cidade, numeroEndereço, numero_cartao, cv_cartao, valdadeCartao) values 
('Carolina','01/03/2000',3298,'carolina@gmail.com','Rua c', 'Casa','Rio De Janeiro','Rio De Janeiro','555',356473,252,'04/23');

insert into cliente(nome, data_nascimento,telefone,email,ruaEndereco,
complementoEndereco, estadoEndereco,cidade, numeroEndereço, numero_cartao, cv_cartao, valdadeCartao) values 
('Godofredo','30/06/1980',3198,'godofredo@gmail.com','Rua d', 'Ap301','Sao Paulo','Sao Paulo','111',876858,909,'08/25');

/*------------------------\\-------------------------------*/

/*Avaliação*/

insert into avaliacao(id_cliente,comentario,nota) values (1,'Gostei Bastante',5);
insert into avaliacao(id_cliente,comentario,nota) values (2,'Nao gostei',2);
insert into avaliacao(id_cliente,comentario,nota) values (3,null,5);
insert into avaliacao(id_cliente,comentario,nota) values (4,'se melhorar atrapalha',5);


/*------------------------\\-------------------------------*/

/*Dadosvoo*/

insert into dadosvoo values (1,3777,'Aeroporto SP','Aeroporto MG', 93, 'Gol');
insert into dadosvoo values (2,5472,'Aeroporto ES','Aeroporto SP', 12, 'Azul');
insert into dadosvoo values (3,8741,'Aeroporto MT','Aeroporto SC', 11, 'Gol');
insert into dadosvoo values (4,3777,'Aeroporto SP','Aeroporto MG', 92, 'Gol');

/*------------------------\\---------------------------------*/

/*compra*/

insert into compra values(55541,1);
insert into compra values(23471,2);
insert into compra values(99939,3);
insert into compra values(13537,4);

/*------------------------\\---------------------------------*/

/*bagagem*/

insert into bagagem values (2212, '30x30', '20kg', 1);
insert into bagagem values (1234, '25x23', '11kg', 2);
insert into bagagem values (475, '23x21', '31kg', 3);
insert into bagagem values (3296, '25x25', '25kg', 4);

/*------------------------\\---------------------------------*/

/*StatusBagagem*/

insert into statusbagagem values (2212, 1,'Nao','Nao','Sim');
insert into statusbagagem values (1234, 2,'Nao','Sim','Nao');
insert into statusbagagem values (475, 3,'Sim','Nao','Nao');
insert into statusbagagem values (3296, 4,'Nao','Nao','Sim');













