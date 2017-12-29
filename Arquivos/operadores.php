<?php

// kelas coisas
// explicaram operadores normais de qualquer linguagem
// - + * / % etc

// mas vi uns que não conhecia:

$a = 50;
$b = 35;
// se 'a' for menor retorna 1
// se 'a' for igual a 'b' retorna 0
// se 'b' for menor retorna -1
var_dump($a <=> $b);

echo "<br>";

$a = NULL;
$b = NULL;
$c = 35;
// Se 'a' for NULL, passo pro 'b'
// se 'b' for NULL, passo pro 'c'
// se 'c' for NULL, não mostro ninguém.
// Ele mostra o primeiro valor não null
echo $a ?? $b ?? $c;

echo "<br>";

$a = 10;
echo $a++ . " mostrou 'a' e incrementou depois: " . $a;
echo "<br>";
echo $a;
echo "<br>";
echo ++$a . " incrementou antes";


?>