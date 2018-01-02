<?php

// Quando eu entro em um site o servidor
// gera um arquivo temporário com as informações
// do usuário

require_once("config.php");
echo session_save_path();


//ver a documentação
//http://php.net/manual/pt_BR/book.session.php
?>

