<?php


function connectiondb(string $nomdata) 
{
$dsn = "mysql:dbname=$nomdata;host=localhost";
$user = 'root';
$password = '';
try {
    $pdo = new PDO($dsn, $user, $password);
    return $pdo;
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
}
?>