<?php

$pessoa = array(

	'nome' => 'Daniel',
	'idade' => 24

);

foreach ($pessoa as $key => $value) {
	if(is_integer($value)){
		$value += 1;
	echo "Valor dentro da função sem referencia: " . $value."<br>";
	}
}
echo "Valor fora da função sem referencia: " . $pessoa['idade'] . "<br><br>";

// Para passar um valor por referencia
// basta colocar o & antes da variável
foreach ($pessoa as $key => &$value) {
	if(is_integer($value)){
		$value += 1;
	echo "Valor dentro da função por referencia: " . $value."<br>";
	}
}
echo "Valor fora da função por referencia: " . $pessoa['idade'];

?>