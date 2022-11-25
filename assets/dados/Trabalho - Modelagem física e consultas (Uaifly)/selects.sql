/*1) Relação com número do voo, peso da bagagem e nome do cliente, em ordem alfabética do nome da companhia e do local (ORDER BY)*/

SELECT nome, numero_voo, pesoBagagem
FROM dadosvoo a, cliente b, bagagem c
where a.id_cliente = b.id_cliente and a.id_cliente = c.id_cliente
ORDER BY 1,2,3 asc;

/*Resultado esperado: 
'Carolina', '8741', '31kg'
'Godofredo', '3777', '25kg'
'Henrique', '3777', '20kg'
'Jose', '5472', '11kg'
 */
 
 /*2) Relação dos clientes (nome) que possuem bagagens pesando MENOS de 23 kg e vão para o aeroporto de MG.(ORDER BY e WHERE)*/

SELECT nome, pesoBagagem, aeroporto_chegada 
FROM cliente a  , bagagem  b, dadosvoo c
WHERE b.pesoBagagem < 23 and b.id_cliente = a.id_cliente and c.aeroporto_chegada = 'Aeroporto MG' and c.id_cliente = a.id_cliente
ORDER BY 1,2,3;

/*Resultado esperado:
'Henrique', '20kg', 'Aeroporto MG'
*/

/*3) Selecionar nome, aeroporto de partida e peso de bagagem dos clientes que partirão de MT com a bagagem até 20kg.*/

SELECT nome, aeroporto_partida, pesoBagagem
FROM cliente a, dadosvoo b, bagagem c
WHERE c.pesoBagagem BETWEEN  10 and 20 and aeroporto_partida LIKE '%Aeroporto MT' and a.id_cliente = b.id_cliente = c.id_cliente;

/*Resultado esperado:
'Carolina', 'Aeroporto MT', '20kg'
*/

/*4) Selecionar nome, código da bagagem e o comentário do cliente que não possui o peso da bagagem igual a 11kg e que tenha comentado algo (que comentário não seja null)*/

SELECT  nome ,codBagagem, comentario
FROM cliente a , bagagem  b , avaliacao c
WHERE pesoBagagem NOT IN(11) AND   a.id_cliente =  b.id_cliente AND c.id_cliente = a.id_cliente AND comentario IS NOT NULL;

/*Resultado esperado:
'Henrique', '2212', 'Gostei Bastante'
'Godofredo', '3296', 'se melhorar atrapalha'
*/

/*5) Selecionar o número do voo e apresentar a média do peso das bagagens dos clientes daquele voo, e ordenar em ordem crescente (GROUP BY sem HAVING)*/

select numero_voo, avg(pesoBagagem) as media_peso_bagagem_voo
from dadosvoo a, bagagem b
where a.id_cliente = b.id_cliente
group by numero_voo
order by 2;

/*Resultado esperado:
'5472', '11'
'3777', '22.5'
'8741', '31'
*/

/*6) Selecione a companhia aérea e calcule a média das notas dadas pelos clientes que viajaram nesta respectiva companhia, porém, mostre apenas aquelas que possuem a média maior que 2 (GROUP BY e HAVING)*/

select companhia_aerea, avg(nota) as nota_media
from dadosvoo a, avaliacao b
where a.id_cliente = b.id_cliente
group by companhia_aerea
having avg(nota) > 2;

/*Resultado esperado:
'Gol', '5.0000'
*/

/*7) Selecione as avaliações que possuem as notas acima da média (SUBSELECT sem CORRELAÇÃO)*/

select id_cliente, comentario, nota
from avaliacao
where nota > 
		(select avg(nota) 
		from avaliacao );

/*Resultado esperado:
'1', 'Gostei Bastante', '5'
'3', NULL, '5'
'4', 'se melhorar atrapalha', '5'
*/

/*8) Selecione o nome, a cidade e o id do cliente que viajou com a companhia aérea “Azul”(SUBSELECT com CORRELAÇÃO)*/

select nome, cidade, id_cliente
from cliente
where id_cliente = 
		(select id_cliente 
		from dadosvoo 
		where companhia_aerea = "Azul");
        
/*Resultado esperado:
'Jose', 'Sao Paulo', '2'
*/

/*9) Selecione o nome e o email dos clientes que possuem bagagens com peso superior à 20 kg (SUBSELECT com EXISTS)*/

SELECT nome, email
 FROM cliente a
 WHERE EXISTS 
      (SELECT id_cliente
         FROM bagagem b
        WHERE a.id_cliente = b.id_cliente AND pesoBagagem > 20);
        
/*Resultado esperado:
'Carolina', 'carolina@gmail.com'
'Godofredo', 'godofredo@gmail.com'
*/

/*10) Selecione a  companhia aérea, o peso da bagagem e a dimensão da bagagem, e então, apresente a bagagem cadastrada com o MENOR peso dentre as bagagens associadas à viagens com a companhia “Gol”(GROUP BY, HAVING e ALL)*/

select companhia_aerea, pesoBagagem, dimensaoBagagem
from dadosvoo a, bagagem b
where pesoBagagem <= all
		(select avg(pesoBagagem) 
		from bagagem) and a.id_cliente = b.id_cliente
group by companhia_aerea
having (companhia_aerea) = "Gol";

/*Resultado esperado:
'Gol', '20kg', '30x30'
*/