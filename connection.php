<?php
$host = "localhost";
$db = "sommar";
$user = "sommar";
$password = "abc123";

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $pdo = new PDO($dsn, $user, $password);
    if ($pdo) {
        echo "Connection works with DB '$db'!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
