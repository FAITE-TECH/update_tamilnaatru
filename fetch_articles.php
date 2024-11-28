<?php
header('Content-Type: application/json');
require_once('connect.php'); // Include database connection

// Get the incoming JSON request
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data['category'])) {
    $category = $data['category'];

    // Debug: Log the category received
    error_log("Received category: " . $category);

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT id, title, content, image_path FROM articles WHERE category = 'Essay';
");
    if (!$stmt) {
        // Log and return error if the statement preparation fails
        error_log("SQL Error: " . $conn->error);
        echo json_encode(["error" => "Database query preparation failed."]);
        exit;
    }

    $stmt->bind_param("s", $category); // Bind the category parameter to the query

    // Execute the query
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        // Check if articles are found
        if ($result->num_rows > 0) {
            $articles = [];
            while ($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }

            // Return articles as JSON
            echo json_encode($articles);
        } else {
            // If no articles found, send an error message
            echo json_encode(["error" => "No articles found for this category."]);
        }
    } else {
        // Log and return the SQL error if the query execution fails
        error_log("SQL Error: " . $stmt->error);
        echo json_encode(["error" => "Database query execution failed."]);
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // If category is not provided
    echo json_encode(["error" => "No category provided."]);
}
?>
