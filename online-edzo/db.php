<?php
// DB connection for Rackhost production environment
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$db   = 'c115487x2gf4bb';
$user = 'c115487x2gf4bb';
$pass = 'r8YYmcVxqZVZ';
$charset = 'utf8mb4';

// A Rackhost PDO belső csatlakozási formátuma
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Adatbázis hiba: ' . htmlspecialchars($e->getMessage());
    exit;
}
?>