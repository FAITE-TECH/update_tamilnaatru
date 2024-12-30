<?php
// Include database connection
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize the received data
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']); // Content from the editor

    
    // Function to clean content in PHP
function cleanContent($content) {
    // Replace literal 'rn' or 'r', 'n' with a space
    $content = str_replace(array('\\r\\n', '\\r', '\\n', 'rn'), ' ', $content);

     // Remove escaped quotes (\" -> ")
     $content = str_replace('\\"', '"', $content);

    // Trim any leading/trailing whitespace
    $content = trim($content);

    return $content;
}


    // Clean the content before inserting it into the database
    $content = cleanContent($content);

    // Log the cleaned content for debugging (you can remove this after confirming the issue)
    error_log("Cleaned Content: " . $content);

    $targetDir = "uploads/";
    $image1Name = basename($_FILES['image1']['name']);
    $image1Path = $targetDir . $image1Name;
    $fileType1 = pathinfo($image1Path, PATHINFO_EXTENSION);

    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    // Ensure uploads directory exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Handle the first image (required)
    if (in_array(strtolower($fileType1), $allowedTypes)) {
        if (move_uploaded_file($_FILES['image1']['tmp_name'], $image1Path)) {
            // Initialize $image2Path as NULL in case no second image is uploaded
            $image2Path = null;

            // Handle the second image (optional)
            if (isset($_FILES['image2']) && !empty($_FILES['image2']['name'])) {
                $image2Name = basename($_FILES['image2']['name']);
                $image2Path = $targetDir . $image2Name;
                $fileType2 = pathinfo($image2Path, PATHINFO_EXTENSION);

                if (in_array(strtolower($fileType2), $allowedTypes)) {
                    if (!move_uploaded_file($_FILES['image2']['tmp_name'], $image2Path)) {
                        $image2Path = null; // Reset to NULL if upload fails
                    }
                } else {
                    $image2Path = null; // Reset to NULL if file type is invalid
                }
            }

            // Insert data into the database
            $sql = "INSERT INTO uploads (category, title, image_path, image2_path, content) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $category, $title, $image1Path, $image2Path, $content);

            if ($stmt->execute()) {
                // Display success message
                echo "<!DOCTYPE html>
                      <html>
                      <head>
                          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                      </head>
                      <body>
                          <script>
                              Swal.fire({
                                  icon: 'success',
                                  title: 'வெற்றி',
                                  text: 'உங்களின் ஆக்கம் வெற்றிகரமாக சேமிக்கப்பட்டது!',
                                  confirmButtonText: 'சரி'
                              }).then(() => {
                                  window.location.href = 'upload.php';
                              });
                          </script>
                      </body>
                      </html>";
            } else {
                echo "Database Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error uploading the first image.";
        }
    } else {
        echo "Invalid file type for the first image. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>