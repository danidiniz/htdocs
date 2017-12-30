<?php

// O arquivo está na mesma pasta
include_once "arquivos_include.php";
// Caso o arquivo estivesse em
// uma pasta acima do arquivo_2
// seria:
// "../arquivos_include.php";
// Se precisasse subir mais:
// "../../arquivos_include.php";
// etc

$resultado = somar(10, 20);

echo "Arquivo 3: " . $resultado;

echo "<br>";
echo "<br>";

?>