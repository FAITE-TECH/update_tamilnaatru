<?php
include 'connect.php'; // Database connection

session_start(); // Start a session to store the message

// Check if id is passed via GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']); // Make sure the ID is an integer to avoid SQL injection
    // Prepare SQL delete query
    $sql = "DELETE FROM categories WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // Bind the id as an integer to the prepared statement

    // Execute the query
    if ($stmt->execute()) {
        $_SESSION['message'] = "Article deleted successfully.";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error deleting article: " . $stmt->error;
        $_SESSION['message_type'] = "error";
    }

    $stmt->close();
}
$conn->close();

// Redirect back to the CRUD page
header('Location: admin_categories.php');
exit;
?>
