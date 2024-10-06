<?php
$host = 'localhost';
$db_name = 'fitness_factory';
$username = 'root'; // default XAMPP username
$password = ''; // default XAMPP password is empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
