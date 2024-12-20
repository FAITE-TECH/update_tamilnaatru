<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Content</title>
    <style>
    .full-content {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .full-content img {
        display: block;
        margin: 20px auto;
        max-width: 100%;
        border-radius: 5px;
    }

    .full-content p {
        font-size: 18px;
        line-height: 1.4; /* Reduce space within paragraphs */
        margin-top: 5px; /* Reduce space above a paragraph */
        margin-bottom: 10px; /* Reduce space below a paragraph */
        color: #555;
        text-align: left;
    }

    .full-content h1,
    .full-content h2 {
        margin-bottom: 10px; /* Reduce space below titles */
    }
</style>



</head>
<body>
<div class="full-content">
<?php
// Include the database connection
include 'connect.php'; // Ensure 'connect.php' has a valid DB connection

// Check if 'id' is passed in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch the record from the uploads table
    $stmt = $conn->prepare("SELECT title, image_path, image2_path, content FROM uploads WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display the title
        echo '<h1>' . htmlspecialchars($row['title']) . '</h1>';

        // Display the main image
        if (!empty($row['image_path'])) {
            echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '">';
        }

        // Decode and display the content with proper formatting
        $content = htmlspecialchars_decode($row['content'], ENT_QUOTES);
        $content = str_replace("\\r\\n", "\n", $content); // Handle raw newline characters
        $content = nl2br($content); // Convert \n to <br> for proper HTML rendering
        echo '<div>' . $content . '</div>';

        // Display the second image
        if (!empty($row['image2_path'])) {
            echo '<img src="' . htmlspecialchars($row['image2_path']) . '" alt="Additional Image">';
        }
    } else {
        echo '<p>Requested content not found.</p>';
    }

    $stmt->close();
} else {
    echo '<p>Invalid request. No ID provided.</p>';
}

// Close the database connection
$conn->close();
?>
</div>
</body>
</html>
