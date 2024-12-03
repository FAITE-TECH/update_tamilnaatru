<style>
      .full-content {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center; /* Ensures the text is centered */
}

.full-content h1 {
    color: #333;
    margin-bottom: 20px;
    font-size: 24px;
}

.full-content img {
    display: block;
    margin: 0 auto; /* Centers the image horizontally */
    max-width: 100%; /* Ensures the image is responsive */
    border-radius: 5px; /* Optional: adds rounded corners */
}

.full-content p {
    font-size: 18px;
    line-height: 1.6;
    color: #555;
    text-align:left;
}

    </style>




<?php
// Include the database connection
include 'connect.php'; // Ensure this file contains your DB connection details

// Check if 'id' is passed in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare and execute a query to fetch the full content
    $stmt = $conn->prepare("SELECT title, image_path, content FROM uploads WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the record exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<div class="full-content">
                <h1>' . htmlspecialchars($row['title']) . '</h1>
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '" class="full-content-image">
                <p>' . nl2br(htmlspecialchars($row['content'])) . '</p>
              </div>';
    } else {
        echo '<p>Requested content not found.</p>';
    }

    // Close the statement
    $stmt->close();
} else {
    echo '<p>Invalid request.</p>';
}

// Close the database connection
$conn->close();
?>
