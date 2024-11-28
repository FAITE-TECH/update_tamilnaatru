<?php
// Include the database connection
include 'connect.php'; // Ensure this file contains your DB connection details

// Query to fetch the latest 3 uploads
$sql = "SELECT category, title, image_path, content FROM uploads ORDER BY upload_date DESC LIMIT 3";
$result = $conn->query($sql);

// Check if any uploads exist
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Display each upload dynamically
        echo '<div>
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '" class="update-photo1">
                <div class="content">
                    <h2 class="updates-header">' . htmlspecialchars($row['title']) . '</h2>
                    <p>' . htmlspecialchars(substr($row['content'], 0, 150)) . '...</p>
                    <button>மேலும் வாசிக்க</button>
                </div>
              </div>';
    }
} else {
    echo '<p>சமீபத்திய புதுப்பிப்புகள் இல்லை.</p>';
}

// Close the database connection
$conn->close();
?>
