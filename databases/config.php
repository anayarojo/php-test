<?php
$dbHost = 'localhost';
$dbName = 'php-test';
$dbUser = 'root';
$dbPassword = '';
try
{
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>