<?php

$host = "localhost";
$database = "dbHQSTORE";
$usuario = "root";
$senha = ""; //Depende do que você colocou.

$conexao = mysql_connect($host, $usuario, $senha) or die;
$db = mysql_select_db($database, $conexao);
?>

