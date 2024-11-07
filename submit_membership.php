<?php
// Start the session
session_start();

// Include the database connection
include 'connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   
    
    
 // Prepare an SQL statement for execution
$stmt = $conn->prepare("INSERT INTO member (fullname, email, phone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullName, $email, $phone); // Bind parameters

// Execute the statement and check for errors
if ($stmt->execute()) {
    echo 'You are tamilnattru member';
} else {
    echo 'Membership error';
}
}
$stmt->close(); // Close the statement
$conn->close(); // Close the database connection

?>
