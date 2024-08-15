<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=CRUD_PHP';
$username = 'root';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado";

} catch (PDOException $err) {
    echo "Error de conexion a la DB -> " . $err->getMessage();

    die();
}

?>