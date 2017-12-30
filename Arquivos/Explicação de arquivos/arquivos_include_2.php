<?php

// O arquivo está na mesma pasta
include "arquivos_include.php";
include "arquivos_include_3.php";
// Caso o arquivo estivesse em
// uma pasta acima do arquivo_2
// seria:
// "../arquivos_include.php";
// Se precisasse subir mais:
// "../../arquivos_include.php";
// etc

$resultado = somar(10, 20);

echo "Arquivo 2: " . $resultado;

echo "<br>";
echo "<br>";

?>

<center><h2>Diferenças entre o include e require:</h2></center>

<h3>Include:</h3>
<ul>
	<li> tenta funcionar mesmo que o arquivo não exista ou tenha algum tipo de problema</li>
	<li> possui um diretório 'include path' que é configurado no arquivo de configuração do php 'php.ini'. Dessa forma, ao usar o include, ele primeiro procura o arquivo na pasta atual, se não encontrar, vai até a pasta configurada 'include path' e procura o arquivo lá.</li>
	<li> outro recurso do include que é muito perigoso: 'include remote' permite trazer um arquivo de algum site portanto se o outro site modificar o arquivo e colocar algum script malicioso, o include irá executar o script podendo comprometer meu site. Enfim, não é uma boa prática. Até porque temos hoje em dia as API's.
</ul>
<h3>Require:</h3>
<ul>
	<li> obriga que o arquivo exista e não tenha nenhum tipo de problema</li>
</ul>
<h3>Require once ou Include once:</h3>
<ul>
	<li></li>
</ul>

<h3>Resumindo:</h3>
