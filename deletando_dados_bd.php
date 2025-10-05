<?php

    $pdo = require './conectando_bd.php';

    $sql = 'DELETE FROM produtos WHERE id = ?';

    $prepare = $pdo -> prepare($sql);

    $prepare -> bindParam(1, $_GET['id']);
    $prepare -> execute();

    echo $prepare -> rowCount();

?>