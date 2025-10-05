<?php

    $pdo = require './conectando_bd.php';

    $sql = 'INSERT INTO produtos(descricao, valor) VALUES(?, ?)';

    $prepare = $pdo -> prepare($sql);

    $prepare -> bindParam(1, $_GET['descricao']);
    $prepare -> bindParam(2, $_GET['valor']);
    $prepare -> execute();

    echo $prepare -> rowCount();

?>