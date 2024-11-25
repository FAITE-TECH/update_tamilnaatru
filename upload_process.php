<?php
// Include database connection
include 'connect.php'; // Ensure you have a connect.php file with database connection details

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form inputs
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Handle file upload
    $targetDir = "uploads/"; // Directory where files will be stored
    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if the directory exists; if not, create it
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Allowed file types
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array(strtolower($fileType), $allowedTypes)) {
        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            // Insert data into database
            $sql = "INSERT INTO uploads (category, title, image_path, content) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssss', $category, $title, $targetFilePath, $content);

            if ($stmt->execute()) {
                echo "File uploaded and data saved successfully!";
            } else {
                echo "Database error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
