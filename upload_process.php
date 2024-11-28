<?php
// Include database connection
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $targetDir = "uploads/";
    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $sql = "INSERT INTO uploads (category, title, image_path, content) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssss', $category, $title, $targetFilePath, $content);

            if ($stmt->execute()) {
                // SweetAlert success
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'File uploaded and data saved successfully!',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = 'your_redirect_page.php';
                        });
                      </script>";
            } else {
                // SweetAlert error
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Database Error',
                            text: '" . addslashes($stmt->error) . "',
                            confirmButtonText: 'OK'
                        });
                      </script>";
            }
            $stmt->close();
        } else {
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Error uploading file.',
                        confirmButtonText: 'OK'
                    });
                  </script>";
        }
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Invalid File',
                    text: 'Only JPG, JPEG, PNG, and GIF files are allowed.',
                    confirmButtonText: 'OK'
                });
              </script>";
    }
} else {
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Invalid Request',
                text: 'Invalid request method.',
                confirmButtonText: 'OK'
            });
          </script>";
}

$conn->close();
?>
