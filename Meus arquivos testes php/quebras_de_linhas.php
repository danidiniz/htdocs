<?php

// testando quebras de linhas

$nome = "dinizknight\n";

echo nl2br($nome);

var_dump($nome);

echo "<br/>";

var_dump($nome);

echo "<br/>";

// função para 'formatar' string de acordo com Sistema Operacional
function nl2br2($string){
	//each OS have different ASCII chars for linebreak:
	//windows = \r\n
	//unix = \n
	//mac = \r 
	$string = str_replace(array("\r\n", "\r", "\n"), "<br/>", $string);
	return $string;
}

unset($nome);
$nome = "dinizknight\ndnz\ndaniel";
if (isset($nome)) {
	echo nl2br2($nome);
}

echo "<br/>";

?>
