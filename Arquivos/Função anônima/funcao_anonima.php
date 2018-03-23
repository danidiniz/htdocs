<?php

function test($callback){

	// Processo lento

	$callback();

}

test(function(){

	echo "Terminou." . "<br>";

});


$a = function($b){

	var_dump($b);

};

$a(test(function(){
	echo "ha";
}));

?>

Função anônima:
- Se passar função como parâmetro é função anônima
- Se atribuir numa variável uma função é função anônima
- Não tem nome
- Não tem return