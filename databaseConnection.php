<?php
$host = 'localhost';
$db = 'phpwebsite';
$user = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8;";

try {
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if ($pdo) {
		//echo "Connected to the $db database successfully!";
	}
}catch (PDOException $e) {
	echo $e->getMessage();
	}