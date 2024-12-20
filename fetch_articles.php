<?php
require_once('connect.php');

header('Content-Type: application/json');

// Read POST data
$category = $_POST['category'] ?? null;

if ($category) {
    $query = "SELECT id, title, image_path, content FROM uploads WHERE category = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    $articles = [];
    while ($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }

    echo json_encode($articles);
} else {
    echo json_encode(["error" => "No category received"]);
}
?>
