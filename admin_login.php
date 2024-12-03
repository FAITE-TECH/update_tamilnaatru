<?php
session_start();

// Hardcoded admin credentials
$admin_username = "admin"; // Replace with the actual admin username
$admin_password = "admin123"; // Replace with the actual admin password

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: upload.html'); // Redirect to the admin upload page
        exit;
    } else {
        echo "<script>alert('தவறான பயனர் பெயர் அல்லது கடவுச்சொல்!');</script>";
    }
}
?>
