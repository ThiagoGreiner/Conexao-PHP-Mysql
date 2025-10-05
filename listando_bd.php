<?php

	$pdo = require './conectando_bd.php';
	
	$sql = 'SELECT * FROM produtos';

	echo "<h3>Produtos</h3>";

    foreach ($pdo -> query($sql) as $key => $value) {
        
        echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<br> Valor: ' . $value['valor']. '<hr>';
    }

?>