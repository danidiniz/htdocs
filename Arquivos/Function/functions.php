<?php


// permite a função receber n parâmetros
// do tipo int
// essa function retorna a soma dos valores como uma string
function soma(int ...$valores):string{
	return array_sum($valores);
}

echo soma(1,1,2,3,5,8,13);


?>