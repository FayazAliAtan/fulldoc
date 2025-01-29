<?php
$host = "localhost";  // Database host
$dbname = "DocSphere";  // Database name
$username = "root";  // Database username (use your MySQL username)
$password = "";  // Database password (use your MySQL password)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>














