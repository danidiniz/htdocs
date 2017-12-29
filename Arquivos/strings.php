<?php


$nome = "DaNiEL";

$nome2 = "DiNiZ";

$n = 9;

$b = true;

// Recurso do PHP
// Aspas duplas posso chamar a variável dentro do texto
// que ele aceita. Irá mostrar o que esta dentro da variável
echo "$nome $nome2 Rainha da Cunha $n: $b";
echo "<br>";
// Aspas simples não irá usar a variável dentro
// do texto. Irá mostrar o nome dela.
echo '$nome $nome2 Rainha da Cunha $n: $b';
echo "<br>";
/* Alguns comandos */

// String to upper
// não aceita acentuação
echo strtoupper($nome . "ãàá");

echo "<br>";

// String to lower
echo strtolower($nome);

echo "<br>";

// Primeira letra da primeira string maiúscula
echo ucfirst(strtolower("$nome $nome2"));
echo "<br>";
// Primeira letra de cada frase maiúscula
echo ucwords(strtolower("$nome $nome2"));
echo "<br>";


// String replace igual outras linguagens
echo str_replace("a", "4", $nome);
echo " ";
echo str_replace("i", "1", $nome2);
echo "<br>";
echo str_replace("$nome", "$nome2", "$nome $nome2");
echo "<br>";

// String pos
// reparar que não é case sensitive
$t = strpos("daniel Diniz", "diniz"); // isso retorna falso no var_dump 
var_dump($t);
echo "<br>";
$t = strpos(strtolower("$nome $nome2"), "diniz"); // já isso retorna a posição
var_dump($t);
echo "<br>";

// Substring
// procura na string, a partir da posição, até a posição
// um exemplo que fiz
// formatei a string, procurei da posição 0, até posição onde aparece 'Diniz' na outra string formatada
$t2 = substr(ucwords(strtolower("$nome $nome2")), 0, strpos(ucwords(strtolower("$nome $nome2")), "Diniz"));
echo $t2;

echo "<br>";

// String length
echo "Tamanho da string $nome $nome2: " . strlen("$nome $nome2");

?>