<?php
include 'connect.php'; // Include database connection

// Fetch article data if ID is passed
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM uploads WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $article = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="ta">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ஆக்கத்தினை திருத்தவும்</title>
            
            <!-- CSS Styling -->
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f8f9fa;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 800px;
                    margin: 50px auto;
                    background: #fff;
                    padding: 20px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                }
                h3 {
                    text-align: center;
                    color: #5f3434;
                    margin-bottom: 20px;
                }
                label {
                    font-weight: bold;
                    display: block;
                    margin: 10px 0 5px;
                }
                input, select, textarea {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    font-size: 14px;
                }
                button {
    display: block;
    width: 50%;
    background-color: #1a2e35;
    color: #fff;
    border: none;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    margin: 0 auto; /* This will center the button horizontally */
}

                button:hover {
                    background-color: #1a2e35;
                }
                small {
                    font-size: 12px;
                    color: #888;
                }
            </style>
           <!-- TinyMCE Editor -->
   <script src="tinymce/tinymce.min.js"></script>

            <script>
                tinymce.init({
    selector: '#editor',
    height: 400,
    plugins: 'advlist autolink link image lists charmap preview code',
    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | preview code'
});
            </script>
        </head>
        <body>
            <div class="container">
                <h3>உங்கள் ஆக்கத்தினை திருத்தவும்</h3>
                <form action="update_article.php" method="POST" enctype="multipart/form-data">
                    <!-- Hidden ID -->
                    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">

                    <!-- Category -->
                    <label for="category">ஆக்கத்தின் வகை</label>
                    <select id="category" name="category" required>
                        <optgroup label="கட்டுரைகள்">
                            <option value="கல்வி" <?php echo ($article['category'] == 'கல்வி') ? 'selected' : ''; ?>>கல்வி</option>
                            <option value="உளவியல்" <?php echo ($article['category'] == 'உளவியல்') ? 'selected' : ''; ?>>உளவியல்</option>
                            <option value="அரசியல்" <?php echo ($article['category'] == 'அரசியல்') ? 'selected' : ''; ?>>அரசியல்</option>
                            <option value="சமூகம்" <?php echo ($article['category'] == 'சமூகம்') ? 'selected' : ''; ?>>சமூகம்</option>
                            <option value="தொழிநுட்பம்" <?php echo ($article['category'] == 'அரசியல்') ? 'selected' : ''; ?>>தொழிநுட்பம்</option>
                            <option value="அரங்கியல்" <?php echo ($article['category'] == 'அரசியல்') ? 'selected' : ''; ?>>அரங்கியல்</option>
                        </optgroup>
                        <optgroup label="இலக்கியம்">
                            <option value="சிறுகதை" <?php echo ($article['category'] == 'சிறுகதை') ? 'selected' : ''; ?>>சிறுகதை</option>
                            <option value="கவிதை" <?php echo ($article['category'] == 'கவிதை') ? 'selected' : ''; ?>>கவிதை</option>
                            <option value="சினிமா" <?php echo ($article['category'] == 'சினிமா') ? 'selected' : ''; ?>>சினிமா</option>
                        </optgroup>
                        <optgroup label="பொதுஅறிவு">
                            <option value="இலங்கை" <?php echo ($article['category'] == 'சிறுகதை') ? 'selected' : ''; ?>>இலங்கை</option>
                            <option value="இந்தியா" <?php echo ($article['category'] == 'கவிதை') ? 'selected' : ''; ?>>இந்தியா</option>
                            <option value="உலகம்" <?php echo ($article['category'] == 'சினிமா') ? 'selected' : ''; ?>>உலகம்</option>
                            <option value="தொழிநுட்பம்" <?php echo ($article['category'] == 'சினிமா') ? 'selected' : ''; ?>>தொழிநுட்பம்</option>
                        </optgroup>
                        <!-- Dynamic categories from the database -->
                        <?php
                        $query = "SELECT category_name FROM categories";
                        $categories = $conn->query($query);
                        while ($row = $categories->fetch_assoc()) {
                            $selected = ($article['category'] == $row['category_name']) ? 'selected' : '';
                            echo "<option value='" . htmlspecialchars($row['category_name']) . "' $selected>" . htmlspecialchars($row['category_name']) . "</option>";
                        }
                        ?>
                    </select>

                    <!-- Title -->
                    <label for="title">ஆக்கத்தின் தலைப்பு</label>
                    <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>

                    <!-- Image Upload -->
                    <label for="image1">படம் 1</label>
                    <input type="file" id="image1" name="image1" accept="image/*">
                    <small>Current Image: <?php echo htmlspecialchars($article['image_path'] ?? 'No image uploaded'); ?></small>

                    <label for="image2">படம் 2</label>
                    <input type="file" id="image2" name="image2" accept="image/*">
                    <small>Current Image: <?php echo htmlspecialchars($article['image2_path'] ?? 'No image uploaded'); ?></small>

                    <!-- Content Editor -->
                    <label for="editor">உள்ளடக்கம்</label>
                    <textarea id="editor" name="content"><?php echo $article['content']; ?></textarea>

                    <!-- Submit -->
                    <button type="submit">ஆக்கத்தினை புதுப்பிக்க</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Article not found.</p>";
    }
} else {
    echo "<p>Invalid article ID.</p>";
}
$conn->close();
?>
