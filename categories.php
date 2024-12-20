<?php
require_once('connect.php');

$query = "SELECT display_name, category_name, image_path FROM categories ORDER BY button_position ASC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="update-box" onclick="fetchArticles(\'' . $row['display_name'] . '\')" style="border: 2px solid #121111;">
            <img src="' . $row['image_path'] . '" alt="' . $row['display_name'] . '" class="update-photo">
            <div class="update-title">' . $row['display_name'] . '</div>
        </div>';
    }
} else {
    echo '<p>No categories available.</p>';
}
?>
