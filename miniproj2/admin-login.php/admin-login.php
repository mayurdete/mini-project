<?php
session_start();
require 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST['admin-username'];
    $admin_password = $_POST['admin-password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE admin_username = :admin_username");
    $stmt->bindParam(':admin_username', $admin_username);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($admin_password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        header("Location: admin-dashboard.html"); // Redirect to admin dashboard
    } else {
        echo "Invalid admin username or password.";
    }
}
?>


