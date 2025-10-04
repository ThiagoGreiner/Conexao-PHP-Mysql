<?php

    declare(strict_types=1);

    $pdo = null;

    try {
        $pdo = new PDO("mysql:host=localhost;port=3306;dbname=teste", "root", "");
        echo "Conexão realizada!";
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }

    return $pdo;

?>