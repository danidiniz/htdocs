<?php

// Inicia a session nesse arquivo
//session_start();

// Ao invés de dar um session_start()
// em cada arquivo que vou usar
// posso criar um arquivo, colocar
// a session_start nele
// e dar um require_once em cada arquivo
require_once("config.php");

// Procura a variável nome
// obs.: Se o arquivo que definiu essa
// variável não tiver sido startado ainda
// irá dar erro
echo $_SESSION['nome'];

// Apaga todas variáves da session,
// mas 'vc continua sendo a mesma
// pessoa para o site'
session_unset();
// apaga apenas a variável 'nome'
session_unset($_SESSION['nome']);

// Apaga tudo e 'expulsa' o
// usuário
session_destroy();

echo $_SESSION['sobrenome'];

?>