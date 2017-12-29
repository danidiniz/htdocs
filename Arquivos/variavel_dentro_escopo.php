<?php

// Variáveis dentro de um escopo não
// funcionarão dentro de outros
// escopos.
// Para isso é preciso adicionar o
// termo 'global' e indicar a variável que
// está fora do escopo e que desejo usar

// Exemplo:

// essa variável está no escopo principal
$nome = "Daniel";

// se eu criar uma função e tentar usar
// a variável 'nome' dentro dela, não vou
// conseguir a não ser que indique o
// 'global'
function teste(){

	global $nome;
	echo $nome;

}

teste();

// portanto, variáveis fora de escopo
// não são iguais a variáveis com
// mesmo nome dentro de outro escopo
// exemplo:
function teste2(){

	// essa variável é diferente do 'nome'
	// no escopo principal,
	// portanto se eu executar ela irá
	// mostrar Diniz normalmente
	$nome = "Diniz";
	echo $nome;

}

teste2();

?>