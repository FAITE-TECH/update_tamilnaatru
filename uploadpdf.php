<?php
// Include database connection
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize received data
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = isset($_POST['content']) ? mysqli_real_escape_string($conn, $_POST['content']) : null;

    // Function to clean content in PHP
    function cleanContent($content) {
        $content = str_replace(array('\\r\\n', '\\r', '\\n', 'rn'), ' ', $content);
        $content = str_replace('\\"', '"', $content);
        return trim($content);
    }

    // Clean the content
    if ($content) {
        $content = cleanContent($content);
    }

    $targetDir = "uploads/";
    $allowedImageTypes = ['jpg', 'jpeg', 'png', 'gif'];
    $allowedPdfType = 'application/pdf';

    // Ensure the uploads directory exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Handle the first image (required)
    $image1Path = null;
    if (isset($_FILES['image1']) && !empty($_FILES['image1']['name'])) {
        $image1Name = basename($_FILES['image1']['name']);
        $image1Path = $targetDir . $image1Name;
        $fileType1 = pathinfo($image1Path, PATHINFO_EXTENSION);

        if (in_array(strtolower($fileType1), $allowedImageTypes)) {
            if (!move_uploaded_file($_FILES['image1']['tmp_name'], $image1Path)) {
                $image1Path = null; // Reset if upload fails
            }
        } else {
            echo "Invalid file type for the first image.";
            exit;
        }
    }

    // Handle the PDF file (optional)
    $pdfPath = null;
    if (isset($_FILES['pdf_file']) && !empty($_FILES['pdf_file']['name'])) {
        $pdfName = basename($_FILES['pdf_file']['name']);
        $pdfPath = $targetDir . $pdfName;

        if ($_FILES['pdf_file']['type'] === $allowedPdfType) {
            if (!move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdfPath)) {
                $pdfPath = null; // Reset if upload fails
            }
        } else {
            echo "Only PDF files are allowed.";
            exit;
        }
    }

    // Insert data into the database
    $sql = "INSERT INTO uploads (category, title, image_path, file_path, content) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $category, $title, $image1Path, $pdfPath, $content);

    if ($stmt->execute()) {
        // Success response
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
    echo "Invalid request method.";
}

$conn->close();
?>
