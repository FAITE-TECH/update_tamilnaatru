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
        header('Location: upload.php'); // Redirect to the admin upload page
        exit;
    } else {
        // Display an alert before redirecting
        echo "<script>
                alert('தவறான பயனர் பெயர் அல்லது கடவுச்சொல்!');
                window.location.href = 'login.html'; // Redirect to the login page after the alert
              </script>";
        exit;
    }
}
?>

