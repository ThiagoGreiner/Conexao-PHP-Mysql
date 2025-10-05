<?php

    $pdo = require './conectando_bd.php';

    $sql = 'UPDATE produtos SET descricao = ? , valor = ? WHERE id = ?';

    $prepare = $pdo -> prepare($sql);

    $prepare -> bindParam(1, $_GET['descricao']);
    $prepare -> bindParam(2, $_GET['valor']);
    $prepare -> bindParam(3, $_GET['id']);
    $prepare -> execute();

    echo $prepare -> rowCount();

?>