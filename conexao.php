<?php

date_default_timezone_set('America/Sao_Paulo');
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'eticketexpress');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Erro na conexão com o banco de dados!');

?>