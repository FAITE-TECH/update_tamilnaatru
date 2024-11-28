<?php
// Include the database connection
include('connect.php');

// Check if the search query exists
if (!isset($_GET['query']) || trim($_GET['query']) === '') {
    echo "<p>Please enter a search term.</p>";
    exit;
}

$search_query = trim($_GET['query']);

// Use a prepared statement for security
$stmt = $conn->prepare("SELECT title FROM uploads WHERE content LIKE ? LIMIT 10");
$like_query = "%" . $search_query . "%";
$stmt->bind_param("s", $like_query);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    echo "<h2>Search Results for '" . htmlspecialchars($search_query) . "':</h2>";

    if ($result->num_rows > 0) {
        // Display each matching article title
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . htmlspecialchars($row['title']) . "</p>";
        }
    } else {
        echo "<p>No articles found matching your search.</p>";
    }
} else {
    echo "<p>An error occurred: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
