<?php

// Principais variáveis pré definidas ou array super globais
// usadas no php

// Busca pela variável 'a' na URL do navegador logo após
// a interrogação. É ela que separa a URL das variáveis
// exemplo:
// http://localhost/repositorio_github_htdocs/Arquivos/variaveis_predefinidas.php?a=123
// no caso ele vai procurar por 'a' logo após a interrogação
// e vai ver que 'a' vale '123'
$nome = $_GET["a"];
// obs.: observar que no var_dump mostra que o valor de 'a'
// veio como uma string, pois toda informação vinda pelo
// GET ou POST é do tipo string
var_dump($nome);

echo "<br/>";

// então nesses casos basta eu fazer conversões (cast)
$nome = (int)$_GET["a"];
var_dump($nome);

echo "<br/>";

// ver ip de quem acessou
$ip = $_SERVER["SERVER_ADDR"];
var_dump($ip);
echo "<br/>";

// nome do script
$script = $_SERVER["SCRIPT_NAME"];
var_dump($script);
echo "<br/>";



?>