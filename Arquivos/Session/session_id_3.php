<?php

// Caso eu queria setar o id
// antes do require eu seto o id
session_id('kuiapjf3he1lq93qe5moh7e45t');

$id = session_id();

//session_regenerate_id();

echo "id antes de regenerar: " . $id;
echo "<br>";
echo "id depois de regenerar: " . session_id();
echo "<br>";

// O session_start não gera um id
require_once("config.php");

// Mostra o id 
// obs.: o navegador padrão gera o mesmo id
// na janela privada gera um id diferente da janela normal
echo session_id();
echo "<br>";

// Cria um novo id
session_regenerate_id();

var_dump($_SESSION);


?>