<?php

// ctrl + u para formatar o arquivo no browser

// concatena strings
$nome = "Daniel";
$sobrenome = "Diniz";
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto . "<br/>" . $nome . "<br/>" . $sobrenome . "<br/>";

// nl2br: executa quebras de linha
$nickname = "dinizknight\n";
echo nl2br($nickname);

// mostra informações sobre a variável (tamanho, etc)
var_dump($nickname);

// pula linha
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

// apaga variável
unset($nome);

$nome = "dinizknight\ndnz\ndaniel";
// verifica se variável existe
if (isset($nome)) {
	echo nl2br2($nome);
}

echo "<br/>";

// array
$frutas = array("laranja", "maçã", "melancia");

// boolean
$toEntendendo = true;

// objeto
$horario = new DateTime();

// arquivo
// obs.: ele abriu arquivos apenas que estejam 
// na pasta DESTE arquivo (tipos_dados_e_comandos_php.php)
$arquivo = fopen("tipos_dados_e_comandos_php.php", "r");

var_dump($arquivo);

?>
