<?php 
ob_start(); // Start output buffering

// Include the database connection
include 'connect.php';

// Handle Like Button Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['like'])) {
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("UPDATE uploads SET likes = likes + 1 WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();

        // Redirect to refresh the page and prevent form resubmission
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }
}

// Increment view count
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("UPDATE uploads SET views = views + 1 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Content</title>
    <style>
        /* Styles for the content and buttons */
        .full-content {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .full-content img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            border-radius: 5px;
        }

        .full-content p {
            font-size: 18px;
            line-height: 1.4;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #555;
            text-align: left;
        }

        .like-button {
            margin-top: 5px;
            text-align: left;
            display: flex;
            align-items: center;
        }

        .thumbs-up {
            display: inline-block;
            padding: 10px;
            background: transparent;
            font-size: 24px;
            color: black;
            border: none;
            cursor: pointer;
            transition: color 0.3s ease;
            margin-right: 10px;
        }

        .thumbs-up.liked {
            color: #007bff;
        }

        .like-count {
            font-size: 18px;
            color: #333;
        }

        .view-count {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }

        .social-share {
            margin-top: 20px;
        }

        .social-share a {
            margin: 0 10px;
            font-size: 24px;
            color: #333;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .social-share a:hover {
            color: #007bff;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="full-content">
<?php
// Fetch article or PDF details
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT title, image_path, image2_path, content, file_path, likes, views FROM uploads WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<h1>' . htmlspecialchars($row['title']) . '</h1>';
        
        // Display text content or embedded PDF
        if (!empty($row['content'])) {
            if (!empty($row['image_path'])) {
                echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '">';
            }
            echo '<div>' . nl2br(htmlspecialchars_decode($row['content'], ENT_QUOTES)) . '</div>';
            if (!empty($row['image2_path'])) {
                echo '<img src="' . htmlspecialchars($row['image2_path']) . '" alt="Additional Image">';
            }
        } elseif (!empty($row['file_path']) && file_exists($row['file_path'])) {
            echo '<embed src="' . htmlspecialchars($row['file_path']) . '" type="application/pdf" width="100%" height="600px">';
        } else {
            echo '<p>Content not found.</p>';
        }

        /*Display like button, view count and social sharing options
        echo '
        <div class="like-button">
            <form method="POST" id="likeForm">
                <button type="button" class="thumbs-up" id="likeBtn">
                    <i class="far fa-thumbs-up"></i>
                </button>
            </form>
            <div class="like-count">Likes: <span id="likeCount">' . intval($row['likes']) . '</span></div>
        </div>';*/

        // Display the view count
        echo '<div class="view-count">Count: ' . intval($row['views']) . '</div>';

        echo '
        <div class="social-share">
            <p>Share this article:</p>
            <a href="https://api.whatsapp.com/send?text=' . urlencode('http://localhost/TamillNattru/view.php?id=' . $id) . '" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=' . urlencode('http://localhost/TamillNattru/view.php?id=' . $id) . '" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode('http://localhost/TamillNattru/view.php?id=' . $id) . '" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>';
    } else {
        echo '<p>Requested content not found.</p>';
    }
    $stmt->close();
} else {
    echo '<p>Invalid request. No ID provided.</p>';
}

$conn->close();
?>
</div>
<!--script>
    const likeBtn = document.getElementById('likeBtn');
    const likeForm = document.getElementById('likeForm');
    const likeCount = document.getElementById('likeCount');

    likeBtn.addEventListener('click', () => {
        if (!likeBtn.classList.contains('liked')) {
            likeBtn.classList.add('liked');
            likeCount.textContent = parseInt(likeCount.textContent) + 1;

            const formData = new FormData(likeForm);
            formData.append('like', true);

            fetch(window.location.href, {
                method: 'POST',
                body: formData
            }).then(response => {
                if (!response.ok) {
                    console.error('Failed to update like count');
                }
            }).catch(error => {
                console.error('Error:', error);
            });
        }
    });
</script-->
</body>
</html>
<?php ob_end_flush(); ?>
