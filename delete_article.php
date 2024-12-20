<style>
    .success {
        color: green;
        font-weight: bold;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid green;
        background-color: #f0fff0;
    }

    .error {
        color: red;
        font-weight: bold;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid red;
        background-color: #fff0f0;
    }
</style>




<?php
include 'connect.php'; // Database connection

session_start(); // Start a session to store the message

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM uploads WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Article deleted successfully.";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error deleting article: " . $conn->error;
        $_SESSION['message_type'] = "error";
    }
}
$conn->close();

// Redirect back to the CRUD page
header('Location: crud.php');
exit;
?>
