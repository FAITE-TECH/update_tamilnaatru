<?php
include 'connect.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Fetch existing data for the specific article
    $sql = "SELECT image_path, image2_path, title, content, category FROM uploads WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $article = $result->fetch_assoc();
        $existing_image1 = $article['image_path'];
        $existing_image2 = $article['image2_path'];
        $existing_title = $article['title'];
        $existing_content = $article['content'];
        $existing_category = $article['category'];
    } else {
        die("Article not found.");
    }

    // Collect updated data from the form
    $title = isset($_POST['title']) ? $conn->real_escape_string($_POST['title']) : $existing_title;
    $content = isset($_POST['content']) ? $conn->real_escape_string($_POST['content']) : $existing_content;
    $category = isset($_POST['category']) ? $conn->real_escape_string($_POST['category']) : $existing_category;

    // Handle image 1 upload
    if ($_FILES['image1']['error'] == 0) {
        $image1 = $_FILES['image1'];
        $image1Path = 'uploads/' . basename($image1['name']);
        if (move_uploaded_file($image1['tmp_name'], $image1Path)) {
            $stmt = $conn->prepare("UPDATE uploads SET image_path = ? WHERE id = ?");
            $stmt->bind_param("si", $image1Path, $_POST['id']);
            $stmt->execute();
        }
    } else {
        $image1Path = $existing_image1;
    }

    // Handle image 2 upload
    if ($_FILES['image2']['error'] == 0) {
        $image2 = $_FILES['image2'];
        $image2Path = 'uploads/' . basename($image2['name']);
        if (move_uploaded_file($image2['tmp_name'], $image2Path)) {
            $stmt = $conn->prepare("UPDATE uploads SET image2_path = ? WHERE id = ?");
            $stmt->bind_param("si", $image2Path, $_POST['id']);
            $stmt->execute();
        }
    } else {
        $image2Path = $existing_image2;
    }

    // Build the UPDATE query dynamically
    $updates = [];
    if ($title !== $existing_title) $updates[] = "title = '$title'";
    if ($content !== $existing_content) $updates[] = "content = '$content'";
    if ($category !== $existing_category) $updates[] = "category = '$category'";
    if ($image1Path !== $existing_image1) $updates[] = "image_path = '$image1Path'";
    if ($image2Path !== $existing_image2) $updates[] = "image2_path = '$image2Path'";

    if (!empty($updates)) {
        $update_query = "UPDATE uploads SET " . implode(', ', $updates) . " WHERE id = $id";
        $conn->query($update_query);
    }
}

// Close the connection before redirecting
$conn->close();

// Redirect to index.php
header('Location: index.php');
exit;
?>
