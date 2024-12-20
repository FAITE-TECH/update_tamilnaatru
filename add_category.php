<?php
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $display_name = $_POST['display_name'];
    $category_name = $_POST['category_name'];
    $button_position = (int)$_POST['button_position'];
    $image_path = 'images/' . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        $stmt = $conn->prepare("INSERT INTO categories (display_name, category_name, image_path, button_position) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $display_name, $category_name, $image_path, $button_position);

        if ($stmt->execute()) {
            // Redirect with success SweetAlert
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'வெற்றிகரமாக சேர்க்கப்பட்டது!',
                        text: 'புதிய பொத்தான் வெற்றிகரமாக சேர்க்கப்பட்டது.',
                        confirmButtonText: 'சரி'
                    }).then(() => {
                        window.location.href = 'upload.php';
                    });
                </script>
            </body>
            </html>";
        } else {
            // Redirect with error SweetAlert for SQL error
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'வெற்றி காணவில்லை!',
                        text: 'தவறான தகவல்: {$stmt->error}',
                        confirmButtonText: 'சரி'
                    }).then(() => {
                        window.location.href = 'admin_categories.php';
                    });
                </script>
            </body>
            </html>";
        }

        $stmt->close();
    } else {
        // Redirect with error SweetAlert for image upload failure
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'படத்தை பதிவேற்ற முடியவில்லை',
                    text: 'தயவுசெய்து மீண்டும் முயற்சி செய்யவும்.',
                    confirmButtonText: 'சரி'
                }).then(() => {
                    window.location.href = 'admin_categories.php';
                });
            </script>
        </body>
        </html>";
    }
}
?>
