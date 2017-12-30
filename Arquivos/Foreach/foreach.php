<?php

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

// $meses: array
// $mes: index
// $value: valor do index
foreach ($meses as $mes => $value) {
	echo "O mês " . ($mes+1) . " é o mês: " . $value . "<br>";
}

echo "<br>";
echo "<br>";

?>