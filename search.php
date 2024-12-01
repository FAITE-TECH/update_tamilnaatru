<?php
// Include the database connection
include('connect.php');

// Check if the search query exists
if (!isset($_GET['query']) || trim($_GET['query']) === '') {
    echo ""; // Return empty string when no query is provided
    exit;
}

$search_query = trim($_GET['query']);

// Use a prepared statement for security
$stmt = $conn->prepare("SELECT title, id FROM uploads WHERE content LIKE ? LIMIT 10");
$like_query = "%" . $search_query . "%";
$stmt->bind_param("s", $like_query);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Display each matching article as a clickable link
        while ($row = $result->fetch_assoc()) {
            $title = htmlspecialchars($row['title']);
            $id = htmlspecialchars($row['id']); // Assume `id` is the primary key
            echo "<a href='view.php?id=$id' class='search-result-item'>$title</a>";
        }
    } else {
        echo "<p>உங்கள் தேடலுக்குப் பொருத்தமான கட்டுரைகள் எதுவும் இல்லை.</p>";
    }
} else {
    echo "<p>An error occurred: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
