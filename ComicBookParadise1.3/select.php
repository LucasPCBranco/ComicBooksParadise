<!DOCTYPE HTML>
<?php

require 'conn.php';
$produto= mysql_query("SELECT * FROM tbProdutos WHERE idProduto =");

$prod= mysql_fetch_array($produto);

echo $prod['Nome_Produto'].'<br>';
echo $prod['Desc_Produto'].'<br>';
echo '<img src="' . $prod['kappa'].'"/><br>';
echo $prod['PrecoVenda_Produto'].'<br>';









