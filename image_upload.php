<?php
if ($_FILES['file']) {
    $target_dir = "uploads/";
    $file_name = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $file_name;

    // Validate file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid file type.']);
        exit;
    }

    // Move file to the uploads directory
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // Return JSON with the file location
        echo json_encode(['location' => $target_file]);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to upload file.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'No file uploaded.']);
}
?>
