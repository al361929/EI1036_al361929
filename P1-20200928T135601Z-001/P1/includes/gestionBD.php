<?php 

echo 'GESTIOOONDB';

$dsn = "pgsql:host=" . DB_HOST . ";dbname=" . DB_NAME;

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);

function insertar($pdo,$table,$valor) {
    $query = "INSERT INTO $table (nombre) VALUES (?)";
    $consult = $pdo->prepare($query);
    $a=$consult->execute(array($valor));
    if (1>$a) echo "Incorrecto";
}

?>