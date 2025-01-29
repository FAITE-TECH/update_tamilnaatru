<style>
    .cta-btn {
        display: inline-block;
        padding: 12px 25px;
        margin-top: 0px;
        font-size: 14px;
        color: #ffffff;
        background-color: #ff4f5a;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        cursor: pointer;
        width: 175px;
        height: 35px;
    }
</style>

<?php
// Include the database connection
include 'connect.php'; // Ensure this file contains your DB connection details

// Define the allowed categories
$allowed_categories = ['கல்வி', 'உளவியல்', 'அரசியல்', 'சமூகம்', 'தொழில்நுட்பம்', 'அரங்கியல்'];

// Query to fetch the latest 5 uploads from the allowed categories
$sql = "SELECT id, category, title, image_path, content FROM uploads 
        WHERE category IN ('" . implode("', '", $allowed_categories) . "')
        ORDER BY upload_date DESC LIMIT 5";

// Execute the query
$result = $conn->query($sql);

// Check if any uploads exist
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Remove &nbsp; and decode other entities
        $cleanContent = html_entity_decode(str_replace('&nbsp;', ' ', $row['content']), ENT_QUOTES, 'UTF-8');

        // Display each upload dynamically
        echo '<div class="update-box" style="border:none" data-id="' . htmlspecialchars($row['id']) . '">
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '" class="update-photo1">
                <div class="content">
                    <h2 class="updates-header">' . htmlspecialchars($row['title']) . '</h2>
                    <p>' . htmlspecialchars(mb_substr(strip_tags($cleanContent), 0, 90, 'UTF-8')) . '...</p>
                    <a href="view.php?id=' . htmlspecialchars($row['id']) . '" class="cta-btn">மேலும் வாசிக்க</a>
                </div>
              </div>';
    }
} else {
    echo '<p>சமீபத்திய புதுப்பிப்புகள் இல்லை.</p>';
}

// Close the database connection
$conn->close();
?>

